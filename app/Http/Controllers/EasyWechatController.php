<?php

namespace App\Http\Controllers;

use EasyWeChat\Message\Text;
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

            'aes_key' =>'rZUoCt1BbbYbzGhfgnKCyvvGD9ADGNQ0hWxytp0XZ7I',

            'log' => [
                'level' => 'debug',
                'file'  => '/tmp/easywechat.log', // XXX: 绝对路径！！！！
            ],

        ];
        $this->app=new Application($options);
    }

    public function handle()
    {
        $server=$this->app->server;
//
        $server->setMessageHandler(function ($message) {
            switch ($message->MsgType) {
                case 'event':
                    $text = new Text(['content' => '用户进入聊天界面']);
                    return $text;
                    break;
                case 'text':
                    return '收到文字消息';
                    break;
                case 'image':
                    return '收到图片消息';
                    break;
                case 'voice':
                    return '收到语音消息';
                    break;
                case 'video':
                    return '收到视频消息';
                    break;
                case 'location':
                    return '收到坐标消息';
                    break;
                case 'link':
                    return '收到链接消息';
                    break;
                // ... 其它消息
                default:
                    return '收到其它消息';
                    break;
            }
            // ...
        });
        return  $server->serve();
    }
    //获取菜单
    public function menusearch()
    {
        $menu = $this->app->menu;
        $menu=$menu->all();
        dd($menu);
    }


    //获取客服

    public function getCustomerService()
    {
        $staff=$this->app->staff;

        //获取所有客服账号列表
        dd($staff->lists());
        //获取在线的客服账号
        //$staff->onlines();
        //添加客服账号
//        $staff->create('foo@test', '客服1');

    }


}
