<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gib extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'gibroute_id', 'driver_id', 'meetup', 'price', 'seats', 'date', 'time', 'special_notice',
    ];

    public function driver()
    {
        return $this->belongsTo('App\driver', 'driver_id', 'id');
    }

    public function passengers()
    {
        return $this->hasMany('App\gibTrip', 'gib_id', 'id');
    }

    public function route()
    {
        return $this->belongsTo('App\gibRoute', 'gibroute_id', 'id');
    }
}
