<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    //
    public function index()
    {
        return view('login.index');
    }
    public function login()
    {
        //验证
        $this->validate(request(),[
            'email'=>'required|email',
            'password'=>'required|min:5|max:10',
            'is_remember'=>'integer'

        ]);
        //逻辑
        if (\Auth::attempt(request(['email','password']),boolval(request('is_remember'))))
        {
            return redirect('/posts');
        }else{
             return Redirect::back()->withErors('邮箱密码不匹配');
        }
        //渲染

    }
    public function logout()
    {
        \Auth::logout();
        return \redirect('/login');

    }
}
