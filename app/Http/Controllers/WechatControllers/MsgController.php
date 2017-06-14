<?php

namespace App\Http\Controllers\WechatControllers;

use Illuminate\Http\Request;

class MsgController extends BaseController
{
    public function handle(Request $request)
    {
        //处理
        $message=$this->xmlToArray($request->all());
        switch ($message['MsgType']){
            //例如声音 关注/取消关注事件 等等
            case 'voice':
                //***
                return '被动回复相关消息 xml格式';
        }
    }
}
