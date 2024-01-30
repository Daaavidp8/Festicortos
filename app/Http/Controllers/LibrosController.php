<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use App\Models\Autor;
use Illuminate\Http\Request;

class LibrosController extends Controller
{

    public function index()
    {
        $libros = Libro::paginate(10);
        $autores = Autor::get();
        return view('Libros.Lista_Libros', compact('libros','autores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $libro = new Libro();
        $libro->titulo = $request->get('titulo');
        $libro->editorial = $request->get('editorial');
        $libro->precio = $request->get('precio');
        $libro->id_Autor = $request->get('autor');
        $libro->save();

        return redirect()->route('Libros.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $libro = Libro::find($id);
        $autores = Autor::get();
        return view('Libros.edit',compact('libro','autores'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $libro = Libro::findOrFail($id);
        $libro->titulo = $request->get('titulo');
        $libro->editorial = $request->get('editorial');
        $libro->precio = $request->get('precio');
        $libro->id_Autor = $request->get('autor');
        $libro->save();
        return redirect()->route('Libros.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Libro::findOrFail($id)->delete();
        return redirect()->route('Libros.index');
    }
}
