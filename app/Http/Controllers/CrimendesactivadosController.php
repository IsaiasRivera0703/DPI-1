<?php

namespace App\Http\Controllers;

use App\crimendesactivados;
use App\crimen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CrimendesactivadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $num= null)
    {
        if($num == null){
            $num = 10;
        }
        $texto = trim($request->get('texto'));

        $sql = 'SELECT COUNT(*) AS total FROM crimendesactivados WHERE delito like "%'.$texto.'%"';
        $crimen2 = DB::select($sql);

        $descrimen= DB::table('crimendesactivados')
            ->select('id','delito')
            ->where('delito','like','%'.$texto.'%')
            ->paginate($num);
        return view('crimen/indexDesCrimen')
        ->with('descrimen',$descrimen)->with('crimen2',$crimen2)->with('texto',$texto)->with('num',$num);
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
     * @param  \App\crimendesactivados  $crimendesactivados
     * @return \Illuminate\Http\Response
     */
    public function show(crimendesactivados $crimendesactivados)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\crimendesactivados  $crimendesactivados
     * @return \Illuminate\Http\Response
     */
    public function edit(crimendesactivados $crimendesactivados)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\crimendesactivados  $crimendesactivados
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, crimendesactivados $crimendesactivados)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\crimendesactivados  $crimendesactivados
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $descrimen = crimendesactivados::findOrFail($id);

        $nuevocrimens = new crimen();

        $nuevocrimens->id = $descrimen->id_crimen;
        $nuevocrimens->delito = $descrimen->delito;

        $men = $descrimen->delito;

        $creado = $nuevocrimens->save();

        crimendesactivados::destroy($id);

        return redirect()->back()->with('mensaje',$men.' activado exitosamente');

        
    }
}
