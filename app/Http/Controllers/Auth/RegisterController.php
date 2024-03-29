<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Client;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'username' => 'required|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            'name' => 'required|max:100',
            'lastname' => 'required|max:100',
            'address' => 'required|max:100',
            'city' => 'required|max:100',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        //dd($data);


        $client = Client::create([
            'name' => $data['name'],
            'tussenvoegsel' => $data['prefix'],
            'lastname' => $data['lastname'],
            'address' => $data['address'],
            'city' => $data['city'],
            'IBAN_number' => $data['accountnumber'],
        ]);
        $user = User::create([
            'username' => $data['username'],
            'password' => Hash::make($data['password']),
            'client_id' => $client->client_id,
        ]);
        return $user;
    }
}
