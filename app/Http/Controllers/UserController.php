<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    //
    public function setting()
    {
        return view('user.setting');

    }
    public function settingStore()
    {

    }
}
