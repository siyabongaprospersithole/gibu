<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id','first_name','last_name','gender','city','country','img_src',
    ];
    // Profile::create([
    //     'user_id'           =>  $faker->randomDigit,
    //     'name'              =>  $faker->firstNameMale,
    //     'value_added_tax'   =>  $faker->randomDigit,
    //     'city'              =>  $faker->city,
    //     'zip_code'          =>  $faker->postcode,
    //     'country'           =>  $faker->country,
    //     'phone'             =>  $faker->phoneNumber,
    //     'img_src'           =>  $faker->imageUrl($width = 200, $height = 200)
    // ]);

    public function user()
    {
        return $this->belongsTo('App\User', 'foreign_key', 'other_key');
    }
}
