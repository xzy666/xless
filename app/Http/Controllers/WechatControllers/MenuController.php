<?php

namespace App\Http\Controllers\WechatControllers;

use Illuminate\Http\Request;

class MenuController extends BaseController
{
    public function postMenu(Request $request)
    {

        $html='https://api.weixin.qq.com/cgi-bin/menu/create?access_token=';
        //这里从数据库获取token  $html.=AToken::first();
        $message=$this->sendPostAndGetBackMessage($html);
        //对message的Json数据进行解析

        //一般不会产生问题 然后就返回一个修改成功标志给后台
        return 'OK';
    }




    public function defineMenu()
    {
        //定义菜单界面 1级2级
        //具体功能等等 可以创建个性 无个菜单 删除菜单等等
        //当然需要对应事件处理的具体url
    }

    public function handle(Request $request)
    {
        //记得处理事件的路由
        $xml = $request->all();//获取XML数据包
        //将数据处理为数组格式
        $envent=$this->xmlToArray($xml);

        // 例如点击菜单拉取消息时的事件推送 当然要记得注册路由
        switch ($envent['Event']){
            case 'CLICK':
                ////***
                ;
        }



    }

    public function test()
    {

    }


}
