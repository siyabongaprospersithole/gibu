<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class car extends Model
{
    protected $fillable = ['driver_id','brand','model','licence_number'];

    public function driver()
    {
        return $this->belongsTo('App\models\driver', 'driver_id', 'id');
    }
}
