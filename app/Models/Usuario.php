<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticate;
use Illuminate\Notifications\Notifiable;

class Usuario extends Authenticate
{
    protected $table = 'usuario';
    use HasFactory, Notifiable;
    protected $fillable = [
        'id',
        'name',
        'sobrenome',
        'dt_nascimento',
        'email',
        'celular',
        'senha'
    ];

    protected $hidden = [
        'senha',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
