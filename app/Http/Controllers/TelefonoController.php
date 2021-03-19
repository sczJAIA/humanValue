<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use App\Models\Telefono;
use App\Models\Tipo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TelefonoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $telefonos = DB::table('telefonos')
            ->join('tipos', 'telefonos.tipo_id', '=', 'tipos.id')
            ->join('personas', 'telefonos.persona_id', '=', 'personas.id')
            ->select('telefonos.id', 'telefonos.numero', 'personas.nombre', 'tipos.descripcion')
            ->get();
        return view('telefono.index')->with('telefonos',$telefonos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $personas = Persona::all();
        $tipos = Tipo::all();
        return view('telefono.create')->with('personas', $personas)->with('tipos', $tipos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $telefono = new Telefono();
        $telefono->numero = $request->get('numero');
        $telefono->tipo_id = $request->get('tipo');
        $telefono->persona_id = $request->get('persona');
        $telefono->save();
        return redirect('/telefonos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $telefono = Telefono::find($id);
        $tipo = Tipo::find($telefono->tipo_id);
        $persona = Persona::find($telefono->persona_id);
        return view('telefono.show')->with('telefono', $telefono)
                                    ->with('persona', $persona)
                                    ->with('tipo', $tipo);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $telefono = Telefono::find($id);
        $tipo = Tipo::find($telefono->tipo_id);
        $persona = Persona::find($telefono->persona_id);
        $personas = Persona::all();
        $tipos = Tipo::all();
        return view('telefono.edit')->with('telefono', $telefono)
                                    ->with('persona', $persona)
                                    ->with('tipo', $tipo)
                                    ->with('tipos', $tipos)
                                    ->with('personas', $personas);
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
        $telefono = Telefono::find($id);
        $telefono->numero = $request->get('numero');
        $telefono->tipo_id = $request->get('tipo');
        $telefono->persona_id = $request->get('persona');
        $telefono->save();
        return redirect('/telefonos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $telefono = Telefono::find($id);
        $telefono->delete();
        return redirect('/telefonos');
    }
}
