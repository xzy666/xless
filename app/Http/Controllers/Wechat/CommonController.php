<?php

namespace App\Http\Controllers\Wechat;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommonController extends Controller
{
    public function index()
    {
        return view('wechat.index');
    }
    public function defaultPage()
    {
        return view('wechat.default');
    }
    public function identify()
    {
        return view('wechat.identify');
    }

    public function message()
    {
        return view('wechat.message');
    }
    public function newslist()
    {
        return view('wechat.newslist');
    }
    public function smsinfo()
    {
        return view('wechat.smsinfo');
    }
    public function test()
    {
        return view('wechat.test');
    }
    public function userinfo()
    {
        return view('wechat.userinfo');
    }
}
