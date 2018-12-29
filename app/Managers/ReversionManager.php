<?php
namespace App\Managers;

use DB;
use App\Models\Reversion;
use App\Models\ReversionFile;
use App\Models\ReversionReview;

class ReversionManager
{
    public static function instance()
    {
        return Reversion::withCount(
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
        )->orderBy('id', 'desc');
    }

    /**
     * 保存审计信息
     *
     * @param array $phpcs
     * @param array $phpstan
     * @return void
     * @throws \Throwable
     */
    public static function saveReversion(array $phpcs, array $phpstan)
    {
        DB::transaction(
            function () use ($phpcs, $phpstan) {
                $reversion = new Reversion();
                $reversion->save();
                foreach ($phpcs['files'] as $key => $value) {
                    if (!count($value['messages'])) {
                        continue;
                    }
                    $reversionFile = new ReversionFile(
                        [
                            'name' => $value['file'],
                            'contents' => $value['contents'],
                            'sniffer' => 'PHPCS',
                        ]
                    );
                    $reversion->phpcs()->save($reversionFile);
                    $reversionFile->save();
                    foreach ($value['messages'] as $key2 => $message) {
                        $reversionReview = new ReversionReview(
                            [
                                'message' => $message['message'],
                                'type' => $message['type'],
                                'line' => $message['line'],
                            ]
                        );
                        $reversionFile->messages()->save($reversionReview);
                        $reversionReview->save();
                    }
                }
                //
                foreach ($phpstan['files'] as $key => $value) {
                    $reversionFile = new ReversionFile(
                        [
                            'name' => $value['file'],
                            'contents' => $value['contents'],
                            'sniffer' => 'PHPSTAN',
                        ]
                    );
                    $reversion->phpstan()->save($reversionFile);
                    $reversionFile->save();
                    foreach ($value['messages'] as $key2 => $message) {
                        $reversionReview = new ReversionReview(
                            [
                                'message' => $message['message'],
                                'type' => $message['type'],
                                'line' => $message['line'],
                            ]
                        );
                        $reversionFile->messages()->save($reversionReview);
                        $reversionReview->save();
                    }
                }
            }
        );

    }
}
