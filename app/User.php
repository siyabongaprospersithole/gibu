<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class user extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name','last_name','phonenumber', 'email', 'password',
    ];

    /*
    email,
    password,
    api_token
    */

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function generateToken(){
        $this->api_token = str_random(60);
        $this->save();

        return $this->api_token;
    }

    public function driver()
    {
        return $this->hasOne('App\driver', 'user_id', 'id');
    }

    public function giber()
    {
        return $this->hasOne('App\giber', 'user_id', 'id');
    }

    public function superAdmin()
    {
        return $this->hasOne('App\admin', 'user_id', 'id');
    }

    public function isAdmin(){
        if ($this->superAdmin()->exists()) {
            return true;
        }else{
            return false;
        }
    }

    public function profile()
    {
        return $this->hasOne('App\profile', 'user_id', 'id');
    }
}
