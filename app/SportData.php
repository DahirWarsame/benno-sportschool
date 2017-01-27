<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SportData extends Model
{
    //
    //protected $table = 'sport_data';
    protected $primaryKey = 'sportdata_id';
    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function device()
    {
        return $this->belongsTo('App\Device', 'device_id');
    }
}
