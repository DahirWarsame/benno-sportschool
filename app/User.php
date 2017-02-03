<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Foundation\Auth\User as AuthUser;

class User extends AuthUser
{
    //
    protected $primaryKey = 'user_id';
    public $timestamps = false;
    protected $fillable = ['username', 'password', 'client_id'];
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function role()
    {
        return $this->belongsTo('App\Role', 'role_id');
    }

    public function client()
    {
        return $this->belongsTo('App\Client', 'client_id');
    }
}
