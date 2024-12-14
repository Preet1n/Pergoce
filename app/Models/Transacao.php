<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transacao extends Model
{
    use HasFactory;

    protected $table = 'transacoes';
    
    protected $fillable = ['descricao', 'valor', 'categoria', 'forma_pagamento'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


};

