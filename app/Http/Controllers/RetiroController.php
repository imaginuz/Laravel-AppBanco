<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Retiro;
use App\Models\Empleado; // Import the Empleado model
use App\Models\Afiliado; // Import the Afiliado model

class RetiroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $retiros = Retiro::all();
        return view('retiros.index')->with('retiros', $retiros);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $id, string $id2)
    {
        //
        $afiliado = Afiliado::find($id);
        $empleado = Empleado::find($id2);
        return view('retiros.create')->with('id', $id)
                                     ->with('id2', $id2);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $retiro=new Retiro();
        $retiro->codempleado = $request->get('codempleado');
        $retiro->codafiliado = $request->get('codafiliado');
        $retiro->fecha = $request->get('fecha');
        $retiro->monto = $request->get('monto');
        $retiro->save();

        // return redirect('/empleado'); // SOLUCION BORRAR ABAJO
        $retiros = Retiro::all();
        return view('retiros.index')->with('retiros', $retiros)
                                    ->with('afiliado', $request->get('codafiliado'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id, string $id2)
    {
        //
        $afiliado = Afiliado::find($id);
        $empleado = Empleado::find($id2);
        $retiros = Retiro::all();
        return view('retiros.index2')->with('retiros', $retiros)
                                     ->with('afiliado', $afiliado)
                                     ->with('empleado', $empleado);
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
