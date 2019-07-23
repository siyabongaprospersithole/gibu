<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class driver extends Model
{
    protected $fillable = ['user_id'];
    //
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function gibs()
    {
        return $this->hasMany('App\models\gib', 'driver_id', 'id');
    }

    public function car()
    {
        return $this->hasOne('App\models\car', 'driver_id', 'id');
    }
}
