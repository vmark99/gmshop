<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table = 'product';

    protected $fillable = ['PID', 'TITLE', 'RELEASE_YEAR', 'P_TYPE'];

    public function rate(){
        return $this->hasOne('App\rate', 'P_ID', 'PID');
    }

    public function purchase()
    {
        return $this->hasOne('App\Purchase', 'P_ID', 'PID');
    }

    public function rent()
    {
        return $this->hasOne('App\Rent', 'P_ID', 'PID');
    }
}
