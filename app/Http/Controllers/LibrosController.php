<?php

namespace App\Http\Controllers;

use App\libro;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\StoreLibroRequest;

class LibrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $user = user::all();
        // return $user;
        $libros = libro::all();
        return view('libros.index', compact('libros', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('libros.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLibroRequest $request)
    {
        $libro = New libro();
        $libro->nombrelibro = $request->input('nombrelibro');
        $libro->autorlibro = $request->input('autorlibro');
        $libro->categorialibro = $request->input('categorialibro');
        $libro->cantidadlibro = $request->input('cantidadlibro');
        $libro->slug = $request->input('nombrelibro');
        $libro->save();
        return redirect()->route('libros.index')->with('status', 'Libro agregado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(libro $libro)
    {
        // return view('libros.show', compact('libro'));
        
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(libro $libro)
    {
        return view('libros.edit', compact('libro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, libro $libro)
    {
        $libro->fill($request->all());
        $libro->save();
        // return view('libros.index', compact('libro'));
        return redirect()->route('libros.index')->with('status', 'Libro actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(libro $libro)
    {
        $libro->delete();
        return redirect()->route('libros.index')->with('status', 'Libro eliminado correctamente');
    }
}
