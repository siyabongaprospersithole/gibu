<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class car extends Model
{
    protected $fillable = ['driver_id','brand','model','licence_number'];

    public function driver()
    {
        return $this->belongsTo('App\driver', 'driver_id', 'id');
    }
}
