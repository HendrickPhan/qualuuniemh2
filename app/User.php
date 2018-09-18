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
        'username', 
		'email', 
		'password', 
		'HoVaTen', 
		'NgaySinh', 
		'SoDienThoai', 
		'GioiTinh', 
		'DiaChi', 
		'ThanhPho',
		'Quan',
		'Role',
		'Active'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token','Role','Active'
    ];
	
	public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }
}
