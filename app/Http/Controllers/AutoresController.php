<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Autor;

class AutoresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $autores = Autor::paginate(10);
        return view('Autores.Lista_Autores',compact('autores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $autor = new Autor();
        $autor->nombre = $request->get('nombre');
        $autor->nacimiento = $request->get('nacimiento');
        $autor->save();

        return redirect()->route('Autores.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $autor = Autor::find($id);
        return view('Autores.show',compact('autor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
