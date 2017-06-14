<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeController extends Controller
{
    public function about()
    {
        return view('me.index');
    }
}
