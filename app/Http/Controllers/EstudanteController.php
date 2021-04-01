<?php

namespace App\Http\Controllers;

use App\Models\Estudante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EstudanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        Estudante::create([
            'codigo' => $request->codigo,
            'nome' => $request->nome,
            'cpf' => $request->cpf,
            'nascimento' => $request->nascimento,
            'user_id' => Auth::user()->id,
        ]);
        return redirect()->back()->with('create', 'Estudante adicionado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Estudante  $estudante
     * @return \Illuminate\Http\Response
     */
    public function show(Estudante $estudante)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Estudante  $estudante
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $estudante = Estudante::findOrFail($id);
        return view('edit-estud', compact('estudante'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Estudante  $estudante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        Estudante::findOrFail($id)->update([
            'codigo' => $request->codigo,
            'nome' => $request->nome,
            'cpf' => $request->cpf,
            'nascimento' => $request->nascimento,
        ]);
        return redirect()->to('/dashboard')->with('update', 'Dados de Estudante editado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Estudante  $estudante
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Estudante::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Estudante excluído com sucesso!');
    }
}
