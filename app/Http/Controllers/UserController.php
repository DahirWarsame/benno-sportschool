<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest');
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

    }

    public function cpHome()
    {
        return view('controlpanel.home');
    }

    public function userHome()
    {
        return view('users.home');
    }

    public function showAll(){
    	$users = User::all();
    	return view('controlpanel.allusers', array('users' => $users));
    }

    public function getProfile($username)
    {
        $user = \App\User::with(['role','client'])->where('username',$username)->first();
        return view('controlpanel.userprofile', array('user' => $user, 'rol' => $user->role, 'client' => $user->client));

    }
//    public function getActiveUsers()
//    {
//        $user = \App\User::with(['role','client'])->where('client.active',1);
//
//        return view('userprofile', array('user' => $user, 'rol' => $user->role, 'client' => $user->client));
//
//    }


}
