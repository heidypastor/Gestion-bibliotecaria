<?php

namespace App\Http\Controllers;

use App\reservacion;
use Illuminate\Http\Request;
use App\Http\Requests\StoreReservacionRequest;

class ReservacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservacions = reservacion::all();
        return view('reservaciones.index', compact('reservacions'));
        // return $reservacions;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reservaciones.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreReservacionRequest $request)
    {
        $reservacion = New reservacion();
        $reservacion->fechaDevoReservación = $request->input('fechaDevoReservación');
        $reservacion->save();

        return redirect()->route('reservaciones.index')->with('status', 'Reservación programada correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\reservaciones  $reservaciones
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // return view('reservaciones.show', compact('reservacion'));
        // return $reservacion;
        $reservacion = reservacion::find($id);
        return view('reservaciones.show', compact('reservacion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\reservaciones  $reservaciones
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reservacion = reservacion::find($id);
        return view('reservaciones.edit', compact('reservacion'));
        // return $reservacion;

        // return view('reservaciones.edit', compact('reservacion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\reservaciones  $reservaciones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $reservacion = reservacion::find($id);
        $reservacion->fill($request->all());
        $reservacion->save();
        return redirect()->route('reservaciones.index')->with('status', 'Reservacion actualizada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\reservaciones  $reservaciones
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reservacion = reservacion::find($id);
        $reservacion->delete();
        return redirect()->route('reservaciones.index')->with('status', 'Reservación eliminada correctamente');
    }
}
