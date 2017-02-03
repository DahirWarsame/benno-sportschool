<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use DB;
use App\User;
use Auth;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'username' => 'required|max:255',
            'password' => 'required|min:6|confirmed',
        ]);
    }
    public function login()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $user = \App\User::where('username',$username)->first();
        if ($username = $user->username && (Hash::check($password, $user->password)))
        {

        }
    }
    public function logout()
    {
        Auth::logout();
    }
    public function index()
    {
        //dd(Hash::make('test'));
    }

    public function edit($username)
    {
        $user = \App\User::with(['role','client'])->where('username',$username)->first();
        //dd($user->client->name);
        return view('auth.edit',
            array('user' => $user,
                'rol' => $user->role,
                'client' => $user->client
            ));
    }
    public function update(Request $request)
    {
        $uri = $request->all();
        $username       = $uri['username'];
        $name           = $uri['name'];
        $prefix         = $uri['prefix'];
        $lastname       = $uri['lastname'];
        $city           = $uri['city'];
        $address        = $uri['address'];
        $accountnumber  = $uri['accountnumber'];
        //dd($uri);

        $user = \App\User::with(['role','client'])->where('username',$username)->first();
        $client_id = $user->client->client_id;

        $client = \App\Client::find($client_id);
        $client->name = $name;
        $client->tussenvoegsel = $prefix;
        $client->lastname = $lastname;
        $client->city = $city;
        $client->address = $address;
        $client->IBAN_number = $accountnumber;

        $client->save();
        return redirect()->route('user.userprofile', $username);
    }
    public function delete($username)
    {
        $user = \App\User::where('username',$username)->first();
        \App\Client::destroy($user->client_id);
        \App\User::where('username', $username)->delete();
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
        $sportdata = \App\User::where('username',$username)
            ->join('sportdata', 'sportdata.user_id', '=', 'users.user_id')
            ->join('devices', 'devices.device_id', '=', 'sportdata.device_id')
            ->get(['sportdata.*', 'users.*','devices.*', DB::raw('TIME_TO_SEC(duration) as total_sec')]);

        return view('controlpanel.userprofile',
            array('user' => $user,
                'rol' => $user->role,
                'client' => $user->client,
                'sportdata' => $sportdata
            ));

    }

}
