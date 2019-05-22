<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

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

    const Admin_role = 'a';
    const Client_role = 'c';
    const Student_role = 's';

    public function isAdmin(){
        return $this->role === slef::Admin_role;
    }

    public function isClient(){
        return $this->role === slef::Client_role;
    }

    public function isStudent(){
        return $this->role === slef::Student_role;
    }
}
