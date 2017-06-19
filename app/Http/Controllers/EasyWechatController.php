<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use EasyWeChat\Foundation\Application;

class EasyWechatController extends Controller
{
    protected $app;
    
    function __construct()
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

        ];
        $this->app=new Application($options);
    }

    public function handle()
    {
        return  $this->app->server->serve();
    }


}
