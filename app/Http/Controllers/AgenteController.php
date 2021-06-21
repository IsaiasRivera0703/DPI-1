<?php

namespace App\Http\Controllers;

use App\agente;
use App\Agentesdesativado;
use Illuminate\Http\Request;
use Illuminate\Queue\NullQueue;
use Illuminate\Support\Facades\DB;


class AgenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $all= null)
    {
        $bus = "";
        $aux = "";
        $ult = "";
        
        if($all == "V"){
            $bus = "Delitos Contra la Vida";
            $ult = "Vida";
        }else{
            if($all == "C"){
                $bus = "Delitos Comunes";
                $ult="Comunes";
            }else{
                if($all == "P"){
                    $bus = "Delitos Contra la Propiedad";
                    $ult="Propiedad";
                }
            }
        }
        
        $texto = trim($request->get('texto'));

        if($bus == ""){
            $sql = 'SELECT * FROM agentes where nombres like "%'.$texto.'%" 
            or apellidos like "%'.$texto.'%" or placa like "%'.$texto.'%" or rango like "%'.$texto.'%"
            or area like "%'.$texto.'%"';
                $aux = "Principal";
                $ult="Principal";
            
        }else{
            $sql = 'SELECT * FROM agentes WHERE area = "'.$bus.'" and (nombres like "%'.$texto.'%" 
            or apellidos like "%'.$texto.'%" or placa like "%'.$texto.'%" or rango like "%'.$texto.'%"
            or area like "%'.$texto.'%")';
            
            $aux = $bus;
        }

        
        $agentes = DB::select($sql);
    
        return view('agente/indexAgente')//vista
            ->with('agentes', $agentes)->with('ult', $ult)->with('aux', $aux)
            ->with('texto', $texto)->with('all', $all);// va la ruta y variable creada
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
        $request->validate([
            'area'=> 'required',
            'placa' => 'required|unique:agentes',
            'rango' => 'required',
            'nombres' => 'required',
            'apellidos' => 'required',
            'telefono' => 'required:numeric',

        ]);

        $nuevoAgente = new agente();

        //formulario en el cual se envian los datos respectivos

        $nuevoAgente->id = $request->input('id');
        $nuevoAgente->area =$request->input('area');
        $nuevoAgente->placa =$request->input('placa');
        $nuevoAgente->rango = $request->input('rango');
        $nuevoAgente->nombres = $request->input('nombres');
        $nuevoAgente->apellidos = $request->input('apellidos');
        $nuevoAgente->telefono = $request->input('telefono');

        $creado = $nuevoAgente->save();

        if ($creado) {
            return redirect()->route('agente.indice')
                ->with('mensaje', '¡El Agente fue creado exitosamente!');
        } else {
            //retornar con un msj de error

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\agente  $agente
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $agente = agente::findOrFail($id);
        return view('agente/showagente')->with('agentes', $agente);
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\agente  $agente
     * @return \Illuminate\Http\Response
     */
    public function edit(agente $agente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\agente  $agente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $agente = agente::findOrFail($id);

        if($agente->area === $request->input('area') && $agente->placa === $request->input('placa' && $agente->rango === $request->input('rango' && $agente->nombres=== $request->input('nombres' && $agente->apellidos === $request->input('apellidos'
         && $agente->telefono === $request->input('telefono')))))){

            return redirect()->route('agente.indice');

        }
        {
        $request->validate([
            'area' => 'required',
            'rango' => 'required',
            'nombres' => 'required',
            'apellidos' => 'required',
            'telefono' => 'required:numeric',

        ]);



        //formulario en el cual se envian los datos respectivos
        $agente->area = $request->input('area');
        $agente->rango = $request->input('rango');
        $agente->nombres = $request->input('nombres');
        $agente->apellidos = $request->input('apellidos');
        $agente->telefono = $request->input('telefono');


        $creado = $agente->save(); //$variable creada

        if ($creado) {
            return redirect()->route('agente.indice')
                ->with('aviso', '¡El Agente fue modificado exitosamente!');
        } else {
            //retornar con un msj de error
        }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\agente  $agente
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $agente = agente::findOrFail($id);

        $nuevoAgenteDes = new Agentesdesativado();

        //formulario en el cual se envian los datos respectivos

        $nuevoAgenteDes->id_agente = $agente->id;
        $nuevoAgenteDes->area = $agente->area;
        $nuevoAgenteDes->placa = $agente->placa;
        $nuevoAgenteDes->rango = $agente->rango;
        $nuevoAgenteDes->nombres = $agente->nombres;
        $nuevoAgenteDes->apellidos = $agente->apellidos;
        $nuevoAgenteDes->telefono = $agente->telefono;

        $creado = $nuevoAgenteDes->save();


        agente::destroy($id);

        return redirect()->back()->with('alerta','Agente desactivado satisfactoriamente');

    }


    }
