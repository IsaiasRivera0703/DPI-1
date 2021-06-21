@extends('madre')
@section('contenido')

<!--Mensajes de error-->
@if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>
                        {{$error}}
                    </li>
                @endforeach
            </ul>
        </div>
    @endif
<!--Mensaje de confirmacion de creacion-->
@if(session('mensaje'))
<div class="alert alert-success">
    {{session('mensaje')}}
</div>
@endif
<!--Mensaje de confirmacion de edicion-->
@if(session('aviso'))
<div class="alert alert-warning">
    {{session('aviso')}}
</div>
@endif
<!--Mensaje de desactivacion de delito-->
@if(session('alerta'))
<div class="alert alert-danger">
    {{session('alerta')}}
</div>
@endif


<br>
<!--Titulo-->
<h2 class="azul" style="text-align: center;"><strong>DENUNCIAS</strong></h2>
<br>

<a  class="btn border btn-outline-danger btn-lg" id="denuncia" href="/denuncianuevo"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-credit-card-2-front-fill" viewBox="0 0 16 16">
  <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2.5 1a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-2zm0 3a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm3 0a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm3 0a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm3 0a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1z"/>
</svg> Denuncia </a>

<!--Tabla para mostrar los delitos-->
<table class="table table-bordered" id="data_table" >
        <thead class="table-dark">
            <tr class="text-center">
                <th>Código</th>
                <th>Agente</th>
                <th>Tel. Agente</th>
                <th>Fecha</th>
                <th>Detalles</th>
                <th>Seguimiento</th>
                <th>Progreso</th>
                <th>Vencimiento</th>
            </tr>
        </thead>
        <tbody>
        
        @forelse($denuncias as $den)
        <tr>
            <td>{{$den->anio}}-{{sprintf("%'05d", $den->codigo)}}</td>
            <td>{{$den->nombres}} {{$den->apellidos}}</td>
            <td>{{$den->telefono}}</td>
            <td>{{$den->fecha_denuncia}}</td>

            <td>
              <a class="btn-border btn-outline-success btn-lg" href="{{route('denuncia.show',['id'=>$den->id])}}">
                  <i class="fa fa-info"></i>
                </a>
            </td>

            <td></td>
            <td></td>
            <td>{{$den->fecha_vencimiento}}</td>
        </tr>
            @empty
            <tr>
                <th colspan="5">¡No hay crimenes!</th><!--Si la tabla esta vacia mostramos el mensaje no hay crimenes-->
            </tr>
        @endforelse<!--fin del forelse-->
        </tbody>
    </table>
    <!--Conteo de cuantos datos se muestra-->





@stop