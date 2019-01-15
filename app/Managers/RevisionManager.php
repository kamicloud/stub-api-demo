<?php
namespace App\Managers;

use DB;
use App\Models\Revision;
use App\Models\RevisionFile;
use App\Models\RevisionReview;

class RevisionManager
{
    public static function instance()
    {
        return Revision::withCount([
            'phpcs',
            'phpstan',
        ])->with([
            'phpstan' => function ($table) {
                $table->withCount('messages');
            },
        ])->orderBy('id', 'desc');
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
        DB::transaction(function () use ($phpcs, $phpstan) {
            $reversion = new Revision();
            $reversion->save();
            foreach ($phpcs['files'] as $key => $value) {
                if (!count($value['messages'])) {
                    continue;
                }
                $revisionFile = new RevisionFile(
                    [
                        'name' => $value['file'],
                        'contents' => $value['contents'],
                        'sniffer' => 'PHPCS',
                    ]
                );
                $reversion->phpcs()->save($revisionFile);
                $revisionFile->save();
                foreach ($value['messages'] as $key2 => $message) {
                    $reversionReview = new RevisionReview(
                        [
                            'message' => $message['message'],
                            'type' => $message['type'],
                            'line' => $message['line'],
                        ]
                    );
                    $revisionFile->messages()->save($reversionReview);
                    $reversionReview->save();
                }
            }
            //
            foreach ($phpstan['files'] as $key => $value) {
                $revisionFile = new RevisionFile(
                    [
                        'name' => $value['file'],
                        'contents' => $value['contents'],
                        'sniffer' => 'PHPSTAN',
                    ]
                );
                $reversion->phpstan()->save($revisionFile);
                $revisionFile->save();
                foreach ($value['messages'] as $key2 => $message) {
                    $reversionReview = new RevisionReview(
                        [
                            'message' => $message['message'],
                            'type' => $message['type'],
                            'line' => $message['line'],
                        ]
                    );
                    $revisionFile->messages()->save($reversionReview);
                    $reversionReview->save();
                }
            }
        });

    }
}
