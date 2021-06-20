@extends('madre')
@section('contenido')
<br>
<h1 class="text-center font-italic font-weight-bold">UDIC-N7-DPI</h1>

</br>
  <h2 class="text-center text-bold"> Detalles sobre: {{$agentes->nombres}} {{$agentes->apellidos}}. </h2>

<div  class=" text-center">
</div>

<br>
<br>
<table class="table table-light table-hover table-success ml-2 target">
    <thead>

        </thead>
        <tbody>

        <tr>
            <th scope="row">Área:</th>
            <td>{{$agentes->area}}</td>
        </tr>

        <tr>
            <th scope="row">Rango:</th>
            <td>{{$agentes->rango}}</td>
        </tr>

        <tr>
            <th scope="row">Placa:</th>
            <td>{{$agentes->placa}}</td>
        </tr>

        <tr>
            <th scope="row">Nombre:</th>
            <td>{{$agentes->nombres}}</td>
        </tr>

        <tr>
            <th scope="row">Apellido:</th>
            <td>{{$agentes->apellidos}}</td>
        </tr>

        <tr>
            <th scope="row">Teléfono:</th>
            <td>{{$agentes->telefono}}</td>
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


@stop
