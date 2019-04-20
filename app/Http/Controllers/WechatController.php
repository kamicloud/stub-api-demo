<?php

namespace App\Http\Controllers;

use EasyWeChat\Work\Application;
use Illuminate\Http\Request;
use Log;

class WechatController extends Controller
{
    public function onLogin(Request $request)
    {
        Log::info('request arrived.'); # 注意：Log 为 Laravel 组件，所以它记的日志去 Laravel 日志看，而不是 EasyWeChat 日志

        $app = app('wechat.mini_program');
        $result = $app->auth->session($request->code);
        $response = $app->app_code->getUnlimit('scene-value', [
            'width' => 600,
        ]);
// $response 成功时为 EasyWeChat\Kernel\Http\StreamResponse 实例，失败为数组或你指定的 API 返回类型

// 保存小程序码到文件
        if ($response instanceof \EasyWeChat\Kernel\Http\StreamResponse) {
            $filename = $response->save(base_path('/path/to/directory'));
        }
// 或
        if ($response instanceof \EasyWeChat\Kernel\Http\StreamResponse) {
            $filename = $response->saveAs(base_path('/path/to/directory'), 'appcode.png');
        }

         dd($result, session()->all(), $response);
//        $app->server->push(function($message){
//            return "欢迎关注 overtrue！";
//        });

        return $app->server->serve();
    }

    public function getQR()
    {
        $app = app('wechat.mini_program');
        $response = $app->app_code->getUnlimit('scene-value', [
            'width' => 600,
        ]);
// $response 成功时为 EasyWeChat\Kernel\Http\StreamResponse 实例，失败为数组或你指定的 API 返回类型

// 保存小程序码到文件
        if ($response instanceof \EasyWeChat\Kernel\Http\StreamResponse) {
            $filename = $response->save(base_path('/path/to/directory'));
        }
// 或
        if ($response instanceof \EasyWeChat\Kernel\Http\StreamResponse) {
            $filename = $response->saveAs(base_path('/path/to/directory'), 'appcode.png');
        }

        dd(session()->all(), $response);
//        $app->server->push(function($message){
//            return "欢迎关注 overtrue！";
//        });
    }
}
