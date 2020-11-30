<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use App\Models\user;

class User extends Authenticatable
{
    protected $table = 'user';
    use HasFactory, Notifiable;

    function user(){
        return $this->hasMany(user::class, 'id_user');
    }
}
