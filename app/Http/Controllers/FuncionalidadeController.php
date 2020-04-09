<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Funcionalidades;

class FuncionalidadeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $funcionalidade = Funcionalidades::all();
        return view('funcionalidades.index')->with(['funcionalidade' => $funcionalidade]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('funcionalidades.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Funcionalidades::create($request->all());
        return redirect()->route('perfis.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $funcionalidade = Funcionalidades::find($id);
        return view('funcionalidades.show')->with(['funcionalidade' => $funcionalidade]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $funcionalidade = Funcionalidades::find($id);
        return view('funcionalidades.edit')->with(['funcionalidade' => $funcionalidade]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $funcionalidade = Funcionalidades::find($id)->update($request->all());
        return redirect()->route('funcionalidades.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $funcionalidade = Funcionalidades::find($id)->delete();
        return redirect()->route('funcionalidades.index');
    }
}
