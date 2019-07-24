<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class gib extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'gibroute_id','driver_id','meetup','price', 'seats','date','time',
    ];

    public function driver()
    {
        return $this->belongsTo('App\models\driver', 'driver_id', 'id');
    }

    public function passengers()
    {
        return $this->hasMany('App\models\gibTrip', 'gib_id', 'id');
    }

    public function route()
    {
        return $this->belongsTo('App\models\gibRoute', 'gibroute_id', 'id');
    }
}
