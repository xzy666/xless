<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use EasyWeChat\Foundation\Application;
use EasyWeChat\Message\Text;

class EasyWechatController extends Controller
{
    protected $app;
    
    function __construct()
    {
        $options = [
            'debug'  => false,
            'app_id' => env('WECHAT_APP_ID'),
            'secret' => env('WECHAT_APP_SECRET'),
            'token'  => env('WECHAT_TOKEN'),
            // 'aes_key' => null, // 可选
            'log' => [
                'level' => 'debug',
                'file'  => '/tmp/easywechat.log', // XXX: 绝对路径！！！！
            ],

        ];
        $this->app=new Application($options);
    }

    public function handle()
    {
        $options = [
            'debug'  => false,
            'app_id' => env('WECHAT_APP_ID'),
            'secret' => env('WECHAT_APP_SECRET'),
            'token'  => env('WECHAT_TOKEN'),
            // 'aes_key' => null, // 可选
            'log' => [
                'level' => 'debug',
                'file'  => '/tmp/easywechat.log', // XXX: 绝对路径！！！！
            ],

        ];
        $app = new Application($options);

        $server = $app->server;
        $user = $app->user;

//        $server->setMessageHandler(function($message) use ($user) {
//            $fromUser = $user->get($message->FromUserName);
//
//            return "{$fromUser->nickname} 您好！欢迎关注 xizy!";
//        });

        return $server->serve();
    }


}
