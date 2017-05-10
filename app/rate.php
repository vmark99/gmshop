<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rate extends Model
{
    protected $table = 'rate';

    protected $fillable = ['CID', 'P_ID', 'NO_OF_STARS'];

    public function product(){
        return $this->belongsTo('App\Product', 'p_id', 'pid');
    }

    public function stars()
    {
        return $this['NO_OF_STARS'];
    }
}
