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
        'driver_id','meetup','source','destination','price', 'seats','date','time',
    ];

    public function creator()
    {
        return $this->belongsTo('App\models\driver', 'driver_id', 'id');
    }

    public function gibers()
    {
        return $this->hasMany('App\models\gibTrip', 'giber_id', 'id');
    }

    public function seats()
    {
        return $this->hasMany('App\Comment', 'foreign_key', 'local_key');
    }
}
