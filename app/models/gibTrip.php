<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class gibTrip extends Model
{
    //
    protected $filleable = ['giber_id','gib_id'];

    public function giber()
    {
        return $this->belongsTo('App\giber', 'giber_id', 'id');
    }

    public function gib(){
        return $this->belongsTo('App\gib', 'gib_id','id');
    }
}
