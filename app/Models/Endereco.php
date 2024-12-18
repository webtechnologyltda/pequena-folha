<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'cep',
        'rua',
        'numero',
        'complemento',
        'bairro',
        'cidade',
        'estado',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
