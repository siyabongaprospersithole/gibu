<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class gibRoute extends Model
{
    protected $table = 'gibroutes';
    protected $fillable = ['source','destination'];


    public function gibs()
    {
        return $this->hasMany('App\gib', 'gibroute_id', 'id');
    }
}
