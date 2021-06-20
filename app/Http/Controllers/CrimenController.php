<?php

namespace App\Http\Controllers;

use App\crimen;
use App\crimendesactivados;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CrimenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $num= null)
    {
        if($num == null){
            $num = 50;
        }

        $texto = trim($request->get('texto'));

        $sql = 'SELECT COUNT(*) AS total FROM crimens WHERE delito like "%'.$texto.'%"';
        $crimen2 = DB::select($sql);

            $crimen= DB::table('crimens')
            ->select('id','delito')
            ->where('delito','like','%'.$texto.'%')
            ->paginate($num);
        return view('crimen/indexCrimen')
        ->with('crimen',$crimen)->with('crimen2',$crimen2)->with('texto',$texto)->with('num',$num);
        
        
        
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
        $request->validate([
            'delito' => 'required|unique:crimens'
    
        ]);

        $nuevoCrimen = new crimen();

        //formulario en el cual se envian los datos respectivos

        $nuevoCrimen->id = $request->input('id');
        $nuevoCrimen->delito = $request->input('delito');

        $creado = $nuevoCrimen->save();

        if ($creado) {
            return redirect()->route('crimen.indice')
                ->with('mensaje', '¡El Delito fue creado exitosamente!');
        } else {
            //retornar con un msj de error

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\crimen  $crimen
     * @return \Illuminate\Http\Response
     */
    public function show(crimen $crimen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\crimen  $crimen
     * @return \Illuminate\Http\Response
     */
    public function edit(crimen $crimen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\crimen  $crimen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $crimen = crimen::findOrFail($id);

        if($crimen->delito === $request->input('delito')){

            return redirect()->route('crimen.indice');

        }{        
        $request->validate([
            'delito' => 'required|unique:crimens'
    
        ]);

        

        //formulario en el cual se envian los datos respectivos

        $crimen->delito = $request->input('delito');

        $creado = $crimen->save(); //$variable creada

        if ($creado) {
            return redirect()->route('crimen.indice')
                ->with('aviso', '¡El delito fue modificado exitosamente!');
        } else {
            //retornar con un msj de error
        }
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\crimen  $crimen
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $crimen = crimen::findOrFail($id);

        $nuevoCrimenDes = new crimendesactivados();

        //formulario en el cual se envian los datos respectivos

        $nuevoCrimenDes->id_crimen = $crimen->id;
        $nuevoCrimenDes->delito = $crimen->delito;

        $men = $crimen->delito;

        $creado = $nuevoCrimenDes->save();


        crimen::destroy($id);

        return redirect()->back()->with('alerta',$men.' desactivado satisfactoriamente');
        
    }

}
