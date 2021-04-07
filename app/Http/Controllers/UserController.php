<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('layouts.user');
    }
    public function login()
    {
        return view('layouts.user.login');
    }
    public function register(){
        return view('layouts.user.register');
    }
}
