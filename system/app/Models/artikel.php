<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class artikel extends Authenticatable
{
    protected $table = 'artikel';
    use HasFactory, Notifiable;


    function artikel(){
        return $this->hasMany(artikel::class, 'id_artikel');
    }
}
