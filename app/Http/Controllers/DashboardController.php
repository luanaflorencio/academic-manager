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
    public function dashboard()
    {
        $estudante = Estudante::orderBy('created_at', 'desc')->get();
        $professor = Professor::orderBy('created_at', 'desc')->get();
        $disciplina = Disciplina::orderBy('created_at', 'desc')->get();
        return view('dashboard', compact('estudante', 'professor', 'disciplina'));
    }
}
