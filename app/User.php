<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role'
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

    const ADMIN_TYPE = 'A';
    const CLIENT_TYPE = 'C';
    const STUDENT_TYPE = 'S';

    public function isAdmin(){
        return $this->role === self::ADMIN_TYPE;
    }

    public function isClient(){
        return $this->role === self::CLIENT_TYPE;
    }

    public function isStudent(){
        return $this->role === self::STUDENT_TYPE;
    }

    public function projects(){
        return $this->belongsToMany('App\Project')->withTrashed();
    }

    public function projectUsers(){
        return $this->hasMany('App\ProjectUser')->withTrashed();
    }

    public function hours(){
        return $this->hasMany('App\Hour');
    }

    public function MyProjects() {
        return $this->belongsToMany('App\Project');
    }

    public function MyUsers() {
        return $this->belongsToMany('App\User');
    }
}
