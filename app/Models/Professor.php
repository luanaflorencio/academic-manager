<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    use HasFactory;

    protected $fillable = [
        'codigo',
        'nome',
        'cpf',
        'nascimento',
    ];

    public function disciplina()
    {
        return $this->hasMany(Disciplina::class);
    }
}