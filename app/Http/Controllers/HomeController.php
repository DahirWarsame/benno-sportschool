<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        //
        return view('welcome');
    }
    public function login()
    {
        //
        return view('users.login');
    }
    public function register()
    {
        //
        return view('users.register');
    }
}