<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    protected $primaryKey = 'user_id';
    public $timestamps = false;

    public function rol()
    {
        return $this->belongsTo('App\Rol', 'rol_id');
    }

    public function client()
    {
        return $this->belongsTo('App\client', 'client_id');
    }
}
