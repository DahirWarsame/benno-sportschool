<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //
    protected $primaryKey = 'client_id';
    public $timestamps = false;
    protected $fillable = [
        'name',
        'tussenvoegsel',
        'lastname',
        'address',
        'city',
        'IBAN_number'
    ];
}
