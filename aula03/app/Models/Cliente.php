<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    // use HasFactory;

    protected $table = 'cliente'; // Nome da tabela no banco de dados

    protected $fillable = ['id', 'primeiroNome', 'sobrenome']; // Campos que podem ser preenchidos em massa

    public $timestamps = false; // Desabilita timestamps se não estiverem sendo usados  
        
}
