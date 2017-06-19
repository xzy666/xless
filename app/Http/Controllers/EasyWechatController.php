<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use EasyWeChat\Foundation\Application;

class EasyWechatController extends Controller
{
    public function verify()
    {
        $options = [
            'debug'  => true,
            'app_id' => env('WECHAT_APP_ID'),
            'secret' => env('WECHAT_APP_SECRET'),
            'token'  => env('WECHAT_TOKEN'),
            // 'aes_key' => null, // 可选
            'log' => [
                'level' => 'debug',
                'file'  => '/tmp/easywechat.log', // XXX: 绝对路径！！！！
            ],
            //...
        ];
        $app = new Application($options);
        $response = $app->server->serve();
        // 将响应输出
        return $response; // Laravel 里请使用：return $response;
    }
}
