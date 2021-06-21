
@extends('madre')
@section('contenido')

@if(session('mensaje'))
<div class="alert alert-success">
    {{session('mensaje')}}
</div>
@endif

<br>

<h2 class="azul" style="text-align: center;"><strong>Agentes Desactivados</strong></h2>
<br>

<div>
    <form action="{{route('agentedesactivado.indice')}}" method="GET">
    <div style="width: 100%;padding-left: 10px;">
        <div style="float: left;width:80%;">
            <input type="text" class="form-control" name="texto" placeholder="Buscar" value="{{$texto}}">
        </div>
        <div style="float: left;padding-left: 1.5%;width: 20%;">
            <button style="width:45%"  type="submit" class="btn btn-primary" value="Buscar">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
    </svg></button>
            <a style="width:45%"  type="button" href='/agentesdesactivado' class="btn btn-danger">Limpiar</a>
        </div>
    </div>
    </form>
</div>
<br>
<br>
<br>
<div class="form-inline"></div>
    <a class=" border btn btn-outline-primary  btn-lg ml-2" href='/agentes'>
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-shield-shaded" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 14.933a.615.615 0 0 0 .1-.025c.076-.023.174-.061.294-.118.24-.113.547-.29.893-.533a10.726 10.726 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067v13.866zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.775 11.775 0 0 1-2.517 2.453 7.159 7.159 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7.158 7.158 0 0 1-1.048-.625 11.777 11.777 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 62.456 62.456 0 0 1 5.072.56z"/>
</svg>  Agentes Activos
    </a>
</div>
<br>
    <a type="submit" class=" border btn btn-outline-dark  btn-lg ml-2" href='#' id="moareas">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-stack" viewBox="0 0 16 16">
      <path d="m14.12 10.163 1.715.858c.22.11.22.424 0 .534L8.267 15.34a.598.598 0 0 1-.534 0L.165 11.555a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.66zM7.733.063a.598.598 0 0 1 .534 0l7.568 3.784a.3.3 0 0 1 0 .535L8.267 8.165a.598.598 0 0 1-.534 0L.165 4.382a.299.299 0 0 1 0-.535L7.733.063z"/>
      <path d="m14.12 6.576 1.715.858c.22.11.22.424 0 .534l-7.568 3.784a.598.598 0 0 1-.534 0L.165 7.968a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.659z"/>
    </svg>
        Índices
        </a>
        <a type="button" href="/agentes" id="Principal" class="btn btn-dark areas">Principal</a>
        <a type="button" href="/Cagentes" id="Comunes" class="btn btn-dark areas">Delitos Comunes</a>
        <a type="button" href="/Pagentes" id="Propiedad" class="btn btn-dark areas">Delitos Contra la Propiedad</a>
        <a type="button" href="/Vagentes" id="Vida" class="btn btn-dark areas">Delitos Contra la Vida</a>
<div style="float:right;">
    {{$ageDes->links()}}
</div>
<div style="font-size:18px; float: right; margin-right: 2%;">
    <label>
        Mostrar
        <select id="mySelect" name="example_length" aria-controls="example" class="form-select input-sm" onchange="cambio()">
            <option style="display: none;">{{$num}}</option>
            <option value="10">10</option>
            <option value="20">25</option>
            <option value="50">50</option>
        </select>
        Agentes
    </label>
</div>
<br><br>
<script>
function cambio(){
var x = document.getElementById("mySelect").value;
window.location.href = "agentesdesactivado"+x;
}
</script>

<?php $valor = 0; $un =0;?>
    @foreach ($ageDes2 as $ades2)
    <?php $un = $ades2->total?>
    @endforeach
    @foreach($ageDes as $ades)
    <?php $valor = $valor+1?>
    @endforeach

    @if($texto != null)
            <label for="" class="col-form-label">Exiten {{$un}} coincidencias con la busqueda {{$texto}}:</label>
        @endif

    <table class="table table-bordered table-light mytableAgentedes " id="data_table">
        <thead class="table-dark">
            <tr class="text-center">
            <th>Placa</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Rango</th>
                <th>Detalle</th>
                <th>Restaurar</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
        @forelse($ageDes as $ades)<!--Definimos un forelse para recuperar los valores de cada proveedor-->
            <tr>
            <!--recuperamos los datos en el orden de los campos para ser mostrados-->
                <td>{{$ades->placa}}</td>
                <td>{{$ades->nombres}}</td>
                <td>{{$ades->apellidos}}</td>
                <td>{{$ades->rango}}</td>
                <td>
             <a class="btn-border btn-outline-success btn-lg"
                href="{{route('agentedesactivado.show',['id'=>$ades->id])}}">
                <i class="fa fa-info"></i></a>
             </td>

                <!--Definimos el boton de Activar-->
                <td>
                    <a class="btn btn-outline-primary" data-toggle="modal" data-target="#deletmodal-{{$ades->id}}"
                    href="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-toggle2-on" viewBox="0 0 16 16">
  <path d="M7 5H3a3 3 0 0 0 0 6h4a4.995 4.995 0 0 1-.584-1H3a2 2 0 1 1 0-4h3.416c.156-.357.352-.692.584-1z"/>
  <path d="M16 8A5 5 0 1 1 6 8a5 5 0 0 1 10 0z"/>
</svg></a>

                 <!-- Modal -->
                <div class="modal fade" id="deletmodal-{{$ades->id}}"  data-keyboard="false" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header" style="background-image: linear-gradient(to left,  #51bb51,#247919);color:white;">
                                <h5 class="modal-title" id="exampleModalLabel"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
                        </svg> Activar Agente</h5>
                                <button type="button"  class="close" data-dismiss="modal" aria-label="Close">
                                    <span class="btn-border btn-outline-danger btn-lg">X</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                ¿Desea restaurar el Agente {{$ades->nombres}} {{$ades->apellidos}}?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
</svg> Cerrar</button>
                                <form method="post" action="{{route('agentedesactivado.borrar',['id'=>$ades->id])}}">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" value="Activar" class="btn btn-danger" > <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
  <path d="M13.485 1.431a1.473 1.473 0 0 1 2.104 2.062l-7.84 9.801a1.473 1.473 0 0 1-2.12.04L.431 8.138a1.473 1.473 0 0 1 2.084-2.083l4.111 4.112 6.82-8.69a.486.486 0 0 1 .04-.045z"/>
</svg> Activar</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </td>
                </td>
                <td>
                <h6 class="text-center text-danger font-italic font-weight-bold">Deshabilitado</h6>
                </td>
            </tr>
        @empty
            <tr>
                <th colspan="5">No hay Agentes</th><!--Si la tabla esta vacia mostramos el mensaje no hay productos-->
            </tr>
        @endforelse<!--fin del forelse-->
        </script>
        </tbody>
    </table>

    <p><strong>Se muestran {{$valor}} Agentes de {{$un}}</strong></p>
    <script>
   //efecto boton de busqueda
$(document).ready(function(e){

$(".oculto").hide();

    $("#mostrar").click(function(e){

        $('.oculto').toggle(500);

        e.preventDefault();
     });
});

//fin efecto de busqueda

    $(document).ready(function(){
                $("#search").keyup(function(){
                _this = this;
                $.each($(".mytableAgentedes tbody tr"), function() {
                if($(this).text().toLowerCase().indexOf($(_this).val().toLowerCase()) === -1)
                    $(this).hide();
                else
                    $(this).show();
                });
            });
        });

        // fin funcion filtro

        $(document).ready(function(e){

$(".areas").hide();

$("#moareas").click(function(e){

$('.areas').toggle(500);

e.preventDefault();
});
});
    </script>
@stop