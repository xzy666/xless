<?php

namespace App\Http\Controllers\WechatControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BaseController extends Controller
{

    public function token_overtime($message)
    {
        $messagejson = json_decode($message);
        if (isset($messagejson->errcode)) {
            $token=$this->getTOKEN();
            //这里将新的token更新到数据库里AToken::save();
            return $token;
        }
    }

    public function getTOKEN()
    {
        $get_token_url = 'https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=
                        ' . env('APPID') . '&secret=' . env('APPSECRET');
        $tokenjson = file_get_contents($get_token_url);
        $token = json_decode($tokenjson);
        if (isset($token->errcode)) {
            return '今日无法再获取token';
        }
        return $token;
    }

    public function sendPostAndGetBackMessage($html)
    {
        $ch = curl_init();
        $timeout = 5;
        curl_setopt ($ch, CURLOPT_URL,$html);
        curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
        $file_contents = curl_exec($ch);
        curl_close($ch);

        return $file_contents;
    }
   protected function xmlToArray($xml)
    {
        //处理XML格式的数据
        return simplexml_load_string($xml, 'SimpleXMLElement', LIBXML_NOCDATA);
    }
}
