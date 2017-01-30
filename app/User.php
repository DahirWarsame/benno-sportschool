<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    protected $primaryKey = 'user_id';
    public $timestamps = false;

    public function role()
    {
        return $this->belongsTo('App\Role', 'role_id');
    }

    public function client()
    {
        return $this->belongsTo('App\Client', 'client_id');
    }
}
