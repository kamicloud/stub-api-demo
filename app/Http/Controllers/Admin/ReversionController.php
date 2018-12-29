<?php
/**
 * 用于进行代码审计的控制器
 *
 * PHP version 7.1
 *
 * @category PHP
 * @package  Laravel
 * @author   Zhao.Hang <zhaohang.io@foxmail.com>
 * @license  http://www.temp.com BSD Licence
 * @link     http://www.temp.com
 */
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use DB;
use App\Models\Reversion;
use App\Models\ReversionIgnore;
use App\Managers\ReversionManager;
use Symfony\Component\Finder\SplFileInfo;

/**
 * 用于进行代码审计的控制器
 *
 * @category PHP
 * @package  Laravel
 * @author   Zhao.Hang <zhaohang.io@foxmail.com>
 * @license  http://www.temp.com BSD Licence
 * @link     http://www.temp.com
 */
class ReversionController extends Controller
{
    /**
     * 获取侧栏数据
     *
     * @return array
     */
    public function index()
    {
        $message = [
            'reversions' => Reversion::withCount(
                [
                    'phpcs',
                    'phpstan',
                ]
            )->with(
                [
                    'phpstan' => function ($table) {
                        $table->withCount('messages');
                    },
                ]
            )->orderBy('id', 'desc')->get(),
        ];
        return $message;
    }

    /**
     * [detail description]
     *
     * @param int $id [description]
     *
     * @return array
     * @throws \Throwable
     */
    public function show(int $id)
    {
        $data = DB::transaction(function () use ($id) {
            $reversion = Reversion::where(
                function ($table) use ($id) {
                    $table->where('id', $id);
                }
            )->with([
                'phpcs' => function ($table) {
                    $table->withCount('messages');
                },
                'phpcs.messages',
                'phpstan',
                'phpstan.messages',
            ])->withCount([
                'phpcs',
                'phpstan',
            ])->orderBy('id', 'desc')->first();

            $ignores = ReversionIgnore::where(function ($table) use ($id) {
                $table->where('reversion_id', $id);
                $table->orWhere('reversion_id', 0);
            })->get();
            return [
                'reversion' => $reversion,
                'ignores' => $ignores,
            ];
        });
        $message = [
            'reversion' => $data['reversion'],
            'ignores' => $data['ignores'],
        ];
        return $message;
    }

    /**
     * [createReversion description]
     */
    public function create()
    {
        exec('cd .. && php vendor/bin/phpcs --standard=PSR2 --report=json app', $phpcs);
        $phpcs = json_decode($phpcs[0], true);
        foreach ($phpcs['files'] as $key => $value) {
            $myfile = fopen($key, "r") or die("Unable to open file!");
            $finder = new SplFileInfo($key, '', '');
            $contents = $finder->getContents();
            $data = explode("\n", $contents);
            $phpcs['files'][$key]['file'] = $key;
            $phpcs['files'][$key]['contents'] = $data;
        }
        //
        $exe = 'cd .. && php vendor/bin/phpstan analyse -l' .
        ' 5 -c phpstan.neon --errorFormat raw app';
        exec($exe, $phpstanRaw);
        $phpstan = [];
        $phpstan['files'] = [];
        foreach ($phpstanRaw as $key => $value) {
            if (preg_match('#.*\.php:\d+:#', $value)) {
                preg_match('#.*(?=:\d+:)#', $value, $content);
                preg_match('#(?<=\.php):\d+:.*#', $value, $message);
                $message = preg_replace('#:\d+:#', '', $message);

                preg_match('#.*\.php#', $value, $file);
                preg_match('#(?<=\.php:)\d+#', $value, $line);

                $file = $file[0];
                $message = $message[0];

                $finder = new SplFileInfo($file, '', '');
                $contents = explode("\n", $finder->getContents());
                $phpstan['files'][$file] = [
                    'file' => $file,
                    'contents' => $contents,
                ];
                if (!isset($phpstan['files'][$file]['messages'])) {
                    $phpstan['files'][$file]['messages'] = [];
                }
                $phpstan['files'][$file]['messages'][] = [
                    'message' => $message,
                    'type' => 'ERROR',
                    'line' => intval($line[0]),
                ];
            }
        }
        ReversionManager::saveReversion($phpcs, $phpstan);
        $message = $this->index();

        return $message;
    }
}
