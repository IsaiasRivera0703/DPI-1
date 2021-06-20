<?php

namespace App\Http\Controllers;

use App\Agentesdesativado;
use App\agente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AgentesdesativadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $num= null)
    {
        //

        if($num == null){
            $num = 10;
        }
        $texto = trim($request->get('texto'));

        $ageDes= DB::table('agentesdesativados')
            ->select('id','area','placa','rango','nombres','apellidos','telefono',
            'telefono')
            ->where('nombres','like','%'.$texto.'%')
            ->paginate($num);
        return view('agente/indexAgentesDesactivados')
        ->with('ageDes',$ageDes)->with('texto',$texto)->with('num',$num);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Agentesdesativado  $agentesdesativado
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

        $agentesdesativado = Agentesdesativado::findOrFail($id);
        return view('agente/showdesactivado')->with('agentesdesactivado',$agentesdesativado);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Agentesdesativado  $agentesdesativado
     * @return \Illuminate\Http\Response
     */
    public function edit(Agentesdesativado $agentesdesativado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Agentesdesativado  $agentesdesativado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Agentesdesativado $agentesdesativado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Agentesdesativado  $agentesdesativado
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $ageDes = Agentesdesativado::findOrFail($id);

        $nuevoagentes = new agente();

        $nuevoagentes->id = $ageDes->id_agente;
        $nuevoagentes->area = $ageDes->area;
        $nuevoagentes->placa = $ageDes->placa;
        $nuevoagentes->rango = $ageDes->rango;
        $nuevoagentes->nombres = $ageDes->nombres;
        $nuevoagentes->apellidos = $ageDes->apellidos;
        $nuevoagentes->telefono = $ageDes->telefono;
        $nuevoagentes->telefono = $ageDes->telefono;

        $creado = $nuevoagentes->save();

        Agentesdesativado::destroy($id);

        return redirect()->back()->with('mensaje','Agente activado exitosamente');

    }
}
