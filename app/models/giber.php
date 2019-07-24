<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class giber extends Model
{
    //
    protected $filleable = ['user_id'];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function trips(){
        return $this->hasMany(gibTrip::class, 'giber_id', 'id');
    }
}
