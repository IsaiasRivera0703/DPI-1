<?php

namespace App\Http\Controllers;

use App\Denuncia;
use App\crimen;
use App\agente;
use App\crimendenuncia;
use App\denunciante;
use App\ofendido;
use App\sospechoso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DenunciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $sql = 'SELECT denuncias.id, anio, codigo, nombres, apellidos, fecha_denuncia, fecha_vencimiento, telefono FROM denuncias JOIN agentes ON denuncias.id_agente=agentes.id';
        $denuncias = DB::select($sql);

        return view('denuncia/denuncia')//vista
            ->with('denuncias', $denuncias);// va la ruta y variable creada
    }

    public function codig(){
        $codigos=0;
        $codi= Denuncia::all();

        foreach($codi as $cod){
            if($cod->anio === idate("Y")){
                if($cod->codigo > $codigos){
                    $codigos = $cod->codigo;
                }
            }
        }

        $codigos=$codigos+1;

        return $codigos;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $codigos = $this->codig();

        $crimenes = crimen::all();
        $agentes = agente::all();

        return view('denuncia/createdenuncia')//vista
            ->with('codigos', $codigos)->with('crimenes',$crimenes)->with('agentes',$agentes);;// va la ruta y variable creada

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'agente'=> 'required',
            'delitos'=>'required',
            'identidad_denunciante'=>'required',
            'edad'=>'required',
            'estadocivil'=>'required',
            'idem' => 'required',
            'identidad_ofendido'=>'required',
            'telefono'=>'required',
            'sector_ofendido'=>'required',
            'horainicio'=>'required',
            'identidad_sospechoso'=>'required',
            'horas' => 'required',
            'sector_sospechoso'=>'required',
            'tomada' => 'required',

        ]);

        //funcion para la fecha actual
        $fecha_actual = date("Y-m-d g:i");

        //creacion de los datos del ofendido
        $nuevoOfendido = new ofendido();

        $nuevoOfendido->IDEM = $request->input('idem');
        $nuevoOfendido->DNI_ofendido = $request->input('identidad_ofendido');
        $nuevoOfendido->telefono_ofendido = $request->input('telefono');
        $nuevoOfendido->departamento = "El Paraiso";
        $nuevoOfendido->municipio = "Danli";
        $nuevoOfendido->sector = $request->input('sector_ofendido');

        $creado4 = $nuevoOfendido->save();

        //creacion de los datos del sospechoso
        $nuevoSospechoso = new sospechoso();

        $nuevoSospechoso->fecha_inicio = $request->input('horainicio');
        $nuevoSospechoso->DNI_sospechoso = $request->input('identidad_sospechoso');
        $nuevoSospechoso->horas = $request->input('horas');
        $nuevoSospechoso->departamento = "El Paraiso";
        $nuevoSospechoso->municipio = "Danli";
        $nuevoSospechoso->sector = $request->input('sector_sospechoso');

        $creado5 = $nuevoSospechoso->save();

        //creacion de los datos del denunciante
        $nuevoDenunciante = new denunciante();

        $nuevoDenunciante->nacionalidad = "HONDUREÑA";
        $nuevoDenunciante->DNI = $request->input('identidad_denunciante');
        $nuevoDenunciante->edad = $request->input('edad');
        $nuevoDenunciante->estado_civil = $request->input('estadocivil');
        
        $creado3 = $nuevoDenunciante->save();
    
        //creacion de la denuncia
        $nuevaDenuncia= new Denuncia();

        $nuevaDenuncia->id_denunciante = $nuevoDenunciante->id;
        $nuevaDenuncia->id_sospechoso = $nuevoSospechoso->id;
        $nuevaDenuncia->id_ofendido = $nuevoOfendido->id;
        $nuevaDenuncia->anio = idate("Y");
        $nuevaDenuncia->codigo = $this->codig();
        $nuevaDenuncia->id_agente = $request->input('agente');
        $nuevaDenuncia->fecha_denuncia = $fecha_actual;
        $nuevaDenuncia->fecha_vencimiento = date("Y'-m-d",strtotime($fecha_actual."+ 30 days"));
        $nuevaDenuncia->tomador_denuncia = $request->input('tomada');

        $creado = $nuevaDenuncia->save();

        //recuperar el dato de los crimenes
        $crist = explode (',', $request->input('delitos'));

        //guardar los datos de los crimenes
        foreach($crist as $ed){
            $nuevoCri = new crimendenuncia();
            $nuevoCri->id_crimen =  $ed;
            $nuevoCri->id_denuncia =  $nuevaDenuncia->id;
            $creado2 = $nuevoCri->save(); 
        }

        if ($creado && $creado2 && $creado3 && $creado4 && $creado5) {
            return redirect()->route('denuncia.index')
                ->with('mensaje', '¡La denuncia fue registrada exitosamente!');
        } else {
            ofendido::destroy($nuevoOfendido->id);
            sospechoso::destroy($nuevoSospechoso->id);
            denunciante::destroy($nuevoDenunciante->id);
            Denuncia::destroy($nuevaDenuncia->id);

        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Denuncia  $denuncia
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $sql = 'SELECT * 
        FROM agentes 
        JOIN denuncias ON agentes.id=denuncias.id_agente 
        JOIN denunciantes ON denuncias.id_denunciante = denunciantes.id
        JOIN sospechosos ON sospechosos.id = denunciantes.id
        JOIN ofendidos ON ofendidos.id = denunciantes.id
        WHERE denuncias.id='.$id.';';
        $denuncia = DB::select($sql);

        $sql2 = 'SELECT denuncias.id, anio, codigo, crimendenuncias.id, crimens.delito
        FROM crimendenuncias
        JOIN denuncias ON denuncias.id = crimendenuncias.id_denuncia
        JOIN crimens ON crimendenuncias.id_crimen= crimens.id
        WHERE denuncias.id='.$id.';';
        $crimenes = DB::select($sql2);


        return view('denuncia/detalledenuncia')->with('denuncia', $denuncia)
        ->with('crimenes', $crimenes);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Denuncia  $denuncia
     * @return \Illuminate\Http\Response
     */
    public function edit(Denuncia $denuncia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Denuncia  $denuncia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Denuncia $denuncia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Denuncia  $denuncia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Denuncia $denuncia)
    {
        //
    }
}
