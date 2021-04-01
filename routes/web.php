<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DisciplinaController;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\EstudanteController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'dashboard'])->middleware(['auth'])->name('dashboard');

Route::post('/disciplina', [DisciplinaController::class, 'store']);

Route::post('/professor', [ProfessorController::class, 'store']);

Route::post('/estudante', [EstudanteController::class, 'store']);

Route::get('/disciplina/delete/{id}', [DisciplinaController::class, 'destroy'])->name('del-disc');

Route::get('/estudante/delete/{id}', [EstudanteController::class, 'destroy'])->name('del-estudante');

Route::get('/professor/delete/{id}', [ProfessorController::class, 'destroy'])->name('del-prof');

Route::get('/disciplina/edit/{id}', [DisciplinaController::class, 'edit']);

Route::post('/disciplina/update/{id}', [DisciplinaController::class, 'update']);

Route::get('/estudante/edit/{id}', [EstudanteController::class, 'edit']);

Route::post('/estudante/update/{id}', [EstudanteController::class, 'update']);

Route::get('/professor/edit/{id}', [ProfessorController::class, 'edit']);

Route::post('/professor/update/{id}', [ProfessorController::class, 'update']);

require __DIR__ . '/auth.php';
