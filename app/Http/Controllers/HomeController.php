<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = \App\User::where('clients.active',1)
            ->join('clients', 'clients.client_id', '=', 'users.client_id')
            ->get(['clients.*', 'users.*']);
        $count = count($users);
        return view('welcome', array('users' => $users, 'amount' => $count));
    }
    public function home()
    {
        return view('home');
    }
}
