<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
    use HasFactory;

    protected $fillable = [
        'codigo',
        'nome',
        'professor',
        'estudantes',
        'user_id',
    ];

    public function professor()
    {
        return $this->belongsTo(Professor::class);
    }

    public function estudante()
    {
        return $this->belongsToMany(Estudante::class);
    }
}
