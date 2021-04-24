<?php

namespace App\Http\Controllers;

use App\libro;
use Illuminate\Http\Request;

class LibrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $libros = libro::all();
        return view('libros.index', compact('libros'));
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
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombrelibro' => 'required|max:100',
            'autorlibro' => 'required|max:100',
            'categorialibro' => 'required|max:100',
            'cantidadlibro' => 'required|max: 10'
        ]);

        $libro = New libro();
        $libro->nombrelibro = $request->input('nombrelibro');
        $libro->autorlibro = $request->input('autorlibro');
        $libro->categorialibro = $request->input('categorialibro');
        $libro->cantidadlibro = $request->input('cantidadlibro');
        $libro->slug = $request->input('nombrelibro');
        $libro->save();
        return 'Saved';
        // return $request->input('nombrelibro');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(libro $libro)
    {
        return view('libros.show', compact('libro'));
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
