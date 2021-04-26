<?php

namespace App\Http\Controllers;

use App\tarifa;
use Illuminate\Http\Request;
use App\Http\Requests\StoreTarifaRequest;

class TarifasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tarifas = tarifa::all();
        return view('tarifas.index', compact('tarifas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tarifas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTarifaRequest $request)
    {
        $tarifa = New tarifa();
        $tarifa->valorTarifa = $request->input('valorTarifa');
        $tarifa->save();

        return redirect()->route('tarifas.index')->with('status', 'Tarifa agregada correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(tarifa $tarifa)
    {
        return view('tarifas.edit', compact('tarifa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tarifa $tarifa)
    {
        $tarifa->fill($request->all());
        $tarifa->save();
        return redirect()->route('tarifas.index')->with('status', 'Tarifa actualizada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(tarifa $tarifa)
    {
        $tarifa->delete();
        return redirect()->route('tarifas.index')->with('status', 'Tarifa eliminada correctamente');
    }
}
