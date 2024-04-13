<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Get all employees
        // Empleado is the model and $empleados is the variable that will be passed to the view
        $empleados = Empleado::all();
        // with 'empleados' va viajar por la ruta de la vista que se alimenta de la variable local $empleados
        return view('empleado.index')->with('empleados', $empleados);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('empleado.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // ->get the data from the form = name form
        // ->store the data in the database
        $empleado= new Empleado();
        $empleado->codEmpleado = $request->get('codigoEmpleado');
        $empleado->nombre = $request->get('nombre');
        $empleado->apellido = $request->get('apellido');
        $empleado->nivel = $request->get('nivel');
        $empleado->telefono = $request->get('telefono');

        $empleado->save();
        return redirect('/empleado');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $editarRegistro = Empleado::find($id);
        return view('empleado.edit')->with('editarRegistro', $editarRegistro);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $editarRegistro = Empleado::find($id);
        $editarRegistro->codEmpleado = $request->input('codempleado');
        $editarRegistro->nombre = $request->input('nombre');
        $editarRegistro->apellido = $request->input('apellido');
        $editarRegistro->nivel = $request->input('nivel');
        $editarRegistro->telefono = $request->input('telefono');

        $editarRegistro->save();
        return redirect('/empleado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $eliminarRegistro = Empleado::find($id);
        $eliminarRegistro->delete();
        return redirect('/empleado');
    }
}
