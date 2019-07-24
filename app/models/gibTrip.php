<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class gibTrip extends Model
{
    protected $table = 'gibtrips';
    protected $fillable = ['giber_id','gib_id','meetup'];

    public function giber() //rider
    {
        return $this->belongsTo('App\giber', 'giber_id', 'id');
    }

    public function gib(){
        return $this->belongsTo('App\gib', 'gib_id','id');
    }
}
