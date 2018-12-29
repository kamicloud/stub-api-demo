<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Models\Reversion;

class ArticleController extends Controller
{
    /**
     * 测试静态代码分析
     */
    public function index(Request $request)
    {
        $data = DB::transaction(function () {
            $reversion = Reversion::with([
                'phpcs',
                'phpcs.messages',
                'phpstan',
                'phpstan.messages',
            ])->orderBy('id', 'desc')->first();
            return $reversion;
        });
        $message = [
            'message' => 'success',
            'data' => $data,
        ];
        // dd(\DB::getQueryLog());
        return $message;
    }
    //
    // public static function edit(StoreBlogPost $request, Response $response) : Array {
    //     // dd($response);
    //     return ['success'];
    //     // dd($request);
    //     // \DB::enableQueryLog();
    //     // \DB::transaction(function() use ($request) {
    //     //     $article = Article::firstOrNew([
    //     //         'id' => $request->id,
    //     //         'user_id' => $request->user_id,
    //     //     ]);
    //     //     $article->title = $request->title;
    //     //     $article->content = $request->content;
    //     //     $article->status = 1;
    //     //     $article->save();
    //     // });
    //     // dd(\DB::getQueryLog());
    //     // dd($article->toArray());
    // }
    // public function __destruct() {
    //     var_dump('bb');
    // }
}
