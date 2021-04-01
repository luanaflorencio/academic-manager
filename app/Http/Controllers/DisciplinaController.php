<?php

namespace App\Http\Controllers;

use App\Models\Disciplina;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class DisciplinaController extends Controller
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
        Disciplina::create([
            'codigo' => $request->codigo,
            'nome' => $request->nome,
            'professor' => $request->professor,
            'estudantes' => $request->estudantes,
            'user_id' => Auth::user()->id,
        ]);
        return redirect()->back()->with('create', 'Disciplina criada com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Disciplina  $disciplina
     * @return \Illuminate\Http\Response
     */
    public function show(Disciplina $disciplina)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Disciplina  $disciplina
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $disciplina = Disciplina::findOrFail($id);
        return view('edit-disc', compact('disciplina'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Disciplina  $disciplina
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        Disciplina::findOrFail($id)->update([
            'codigo' => $request->codigo,
            'nome' => $request->nome,
            'professor' => $request->professor,
            'estudantes' => $request->estudantes,
        ]);
        return redirect()->to('/dashboard')->with('update', 'Disciplina editada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Disciplina  $disciplina
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Disciplina::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Disciplina excluída com sucesso!');
    }
}
