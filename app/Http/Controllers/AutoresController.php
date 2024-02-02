<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Autor;
use App\Models\Libro;


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

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $autor = Autor::findOrFail($id);
        return view('Autores.edit',compact('autor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $autor = Autor::findOrFail($id);
        $autor->nombre = $request->get('nombre');
        $autor->nacimiento = $request->get('nacimiento');
        $autor->save();
        return redirect()->route('Autores.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Autor::findOrFail($id)->delete();
        return redirect()->route('Autores.index');
    }

    public function filtroBuscar(){
        $autores = Autor::get();
        return view('Autores.filtro',compact('autores'));
    }

    public function filtroMostrar(Request $request){
        $autores = Autor::get();

        $libros = Libro::where('id_Autor', '=', $request->get('autor'))->get();
        $autorbuscado = Autor::find($request->get('autor'))['nombre'];
        return view('Autores.filtro',compact('autores','libros','autorbuscado'));
    }

    public function APIgetAutores(): bool|string
    {
        return Autor::all();
    }

    public function APIgetUniqueAutores($id): bool|string
    {
        return Autor::find($id);
    }
    public function APIgetLibrosFromAutor($id){
        return Libro::where('id_Autor','=',$id)->get();
    }

}
