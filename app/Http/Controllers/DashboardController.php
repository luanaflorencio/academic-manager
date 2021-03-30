<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Professor;
use App\Models\Estudante;
use App\Models\Disciplina;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    //
    public function dasboard()
    {
        $estudante = Estudante::all();
        $professor = Professor::all();
        $disciplina = Disciplina::all();
        return view('dashboard', compact('estudante', 'professor', 'disciplina'));
    }
}
