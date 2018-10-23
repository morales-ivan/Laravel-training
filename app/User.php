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
        'name', 'username', 'email', 'password', 'avatar'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

	public function photos() {
		return $this->hasMany(Photo::class)->orderBy('created_at', 'desc');
	}

	public function following() {
		return $this->belongsToMany(User::class, 'followers', 'user_id', 'followed_id');
	}

	public function followers() {
		return $this->belongsToMany(User::class, 'followers', 'followed_id', 'user_id');
	}
}
