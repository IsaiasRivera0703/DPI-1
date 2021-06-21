@extends('madre')
@section('contenido')

@foreach($denuncia as $denuncias)
<br>
<h1 class="text-center font-italic font-weight-bold">UDIC-N7-DPI</h1>

</br>
  <h2 class="text-center text-bold"> Detalles sobre: {{$denuncias->anio}}-{{sprintf("%'05d", $denuncias->codigo)}} </h2>

<div  class=" text-center">
</div>

<br>
<br>

<table class="table table-light table-hover table-success ml-2 target">
        <tbody>
            
        <tr style="text-align:center;font-size: 18px;">
            <th colspan="2"><strong> Generalidades de la Denuncia: <strong></th>
        </tr>

        <tr>
            <th scope="row">Código:</th>
            <td>{{$denuncias->anio}}-{{sprintf("%'05d", $denuncias->codigo)}}</td>
        </tr>

        <tr>
            <th scope="row">Fecha denuncia:</th>
            <td>{{$denuncias->fecha_denuncia}}</td>
        </tr>

        <tr>
            <th scope="row">Fecha vencimiento:</th>
            <td>{{$denuncias->fecha_vencimiento}}</td>
        </tr>

        <tr>
            <th scope="row">Tomada por:</th>
            <td>{{$denuncias->tomador_denuncia}}</td>
        </tr>

        <tr style="text-align:center;font-size: 18px;">
            <th colspan="2"><strong> Delitos Asociados: <strong></th>
        </tr>
        
        <tr>
            @foreach($crimenes as $cri)
            <tr>
            <td colspan="2">{{$cri->delito}}</td>
            </tr>
            @endforeach    
        </tr>
            

        <tr style="text-align:center;font-size: 18px;">
            <th colspan="2"><strong> Generalidades del Agente: <strong></th>
        </tr>
        <tr>
            <th scope="row">Placa:</th>
            <td>{{$denuncias->placa}}</td>
        </tr>

        <tr>
            <th scope="row">Nombre:</th>
            <td>{{$denuncias->nombres}} {{$denuncias->apellidos}}</td>
        </tr>

        <tr>
            <th scope="row">Teléfono:</th>
            <td>{{$denuncias->telefono}}</td>
        </tr>

        <tr style="text-align:center;font-size: 18px;">
            <th colspan="2"><strong> Generalidades del Denunciante: <strong></th>
        </tr>

        <tr>
            <th scope="row">Nacionalidad:</th>
            <td>{{$denuncias->nacionalidad}}</td>
        </tr>

        <tr>
            <th scope="row">DNI:</th>
            <td>{{$denuncias->DNI}}</td>
        </tr>

        <tr>
            <th scope="row">Edas:</th>
            <td>{{$denuncias->edad}}</td>
        </tr>

        <tr>
            <th scope="row">Estado Civil:</th>
            <td>{{$denuncias->estado_civil}}</td>
        </tr>

        <tr style="text-align:center;font-size: 18px;">
            <th colspan="2"><strong> Generalidades del Ofendido: <strong></th>
        </tr>

        <tr>
            <th scope="row">IDEM:</th>
            <td>{{$denuncias->IDEM}}</td>
        </tr>

        <tr>
            <th scope="row">DNI:</th>
            <td>{{$denuncias->DNI_ofendido}}</td>
        </tr>

        <tr>
            <th scope="row">Teléfono:</th>
            <td>{{$denuncias->telefono_ofendido}}</td>
        </tr>

        <tr style="text-align:center;font-size: 18px;">
            <th colspan="2"><strong> Generalidades del Sospechoso: <strong></th>
        </tr>

        <tr>
            <th scope="row">Fecha Inicio:</th>
            <td>{{$denuncias->fecha_inicio}}</td>
        </tr>

        <tr>
            <th scope="row">DNI:</th>
            <td>{{$denuncias->DNI_sospechoso}}</td>
        </tr>

        <tr>
            <th scope="row">Horas:</th>
            <td>{{$denuncias->horas}}</td>
        </tr>

    </tbody>
</table>
<br>
    <a type="button" class="btn-primary btn-lg ml-2" href="javascript: history.go(-1)">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
  <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
</svg>
    </a>
    <br><br>

    @endforeach
@stop
