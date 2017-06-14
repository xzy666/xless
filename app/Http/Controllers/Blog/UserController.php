<?php

namespace App\Http\Controllers\Blog;

use App\Http\Requests\UserLogin;
use App\Http\Requests\UserRegister;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends BaseController
{
    function __construct()
    {
        $this->middleware('auth')->only('logout');
    }

    public function login()
    {

        return view('admin.login');
    }
    public function loginStage()
    {

        return view('stage.auth.login');
    }
    public function loginStageRequest(UserLogin $request)
    {

        if(
        auth()->attempt([
            'email' => $request->get('email'),
            'password' => $request->get('password')
        ])){

            return redirect()->to('article');
        }else{
            return back()->withInput();
        }

    }

    public function loginRequest(UserLogin $request)
    {

        auth()->attempt([
            'email' => $request->get('email'),
            'password' => $request->get('password')
        ]);

        return redirect()->to('admin/index');
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->to('/login');
    }

    public function register()
    {
        return view('stage.auth.register');
    }
    public function registerRequest(UserRegister $request)
    {
        $request['password']=bcrypt($request->get('password'));
        User::create($request->all());
        \Session::flash('msg','注册成功');
        return redirect()->to('login');
    }


}
