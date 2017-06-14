<?php

namespace App\Http\Controllers\Blog;

use Illuminate\Http\Request;

class TimeController extends BaseController
{
    function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.index');
    }

    public function info()
    {

        return view('admin.info');
    }



    public function element()
    {
        return view('admin.element');
    }

    public function img()
    {
        return view('admin.img');
    }


    public function tab()
    {
        return view('admin.tab');
    }
    public function pass()
    {
        return view('admin.pass');
    }
}
