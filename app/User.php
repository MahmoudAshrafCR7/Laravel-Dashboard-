<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;


    protected $fillable = [
       'id', 'name', 'email', 'password', 'phone','role','created_at','updated_at' ];


    protected $hidden = [
        'password', 'remember_token', ];


    protected $casts = [
        'email_verified_at' => 'datetime', ];
}
