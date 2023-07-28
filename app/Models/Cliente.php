<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Cliente extends User
{
    use HasApiTokens;
    protected $fillable = [
        'Nome',
        'email',
        'Endereco',
        'Bairro',
        'Cep',
        'Cidade',
        'Estado'
    ];
}
