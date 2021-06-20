@extends('madre')
@section('contenido')


@if(session('mensaje'))
<div class="alert alert-success">
    {{session('mensaje')}}
</div>
@endif

<br>

<h2 class="azul" style="text-align: center;"><strong>Delitos Desactivados</strong></h2>
<br>

<div>
    <form action="{{route('crimendesactivado.indice')}}" method="GET">
    <div style="width: 100%;padding-left: 10px;">
        <div style="float: left;width:80%;">
            <input type="text" class="form-control" name="texto" placeholder="Buscar" value="{{$texto}}">
        </div>
        <div style="float: left;padding-left: 1.5%;width: 20%;">
            <input style="width:45%"  type="submit" class="btn btn-primary" value="Buscar">
            <a style="width:45%"  type="button" href='/crimenesdesactivado' class="btn btn-danger">Limpiar</a>
        </div>
    </div>
    </form>
</div>
<br>
<br><br>
    <a class=" border btn btn-outline-primary  btn-lg ml-2" href='/crimenes'>
        Delitos Activos
    </a>
<br><br>

<div style="float:right;">
    {{$descrimen->links()}}
</div>
<div style="font-size:18px;">
    <label>
        Mostrar
        <select id="mySelect" name="example_length" aria-controls="example" class="form-select input-sm" onchange="cambio()">
            <option style="display: none;">{{$num}}</option>
            <option value="10">10</option>
            <option value="25">25</option>
            <option value="50">50</option>
            <option value="100">100</option>
        </select> 
        delitos
    </label>
</div>

<script>
function cambio(){
var x = document.getElementById("mySelect").value;
window.location.href = "crimenesdesactivado"+x;
}
</script>

<?php $valor = 0; $un =0;?>
    @foreach ($crimen2 as $cri2)
    <?php $un = $cri2->total?>
    @endforeach
    @foreach($descrimen as $dcri)
        <?php $valor = $valor+1?>
    @endforeach

        @if($texto != null)
            <label for="" class="col-form-label">Exiten {{$un}} coincidencias con la busqueda {{$texto}}:</label>
        @endif

    <table class="table table-bordered" id="data_table">
        <thead class="table-dark">
            <tr class="text-center">
                <th>Delito</th>
                <th>Restaurar</th>
            </tr>
        </thead>
        <tbody>
        @forelse($descrimen as $dcri)<!--Definimos un forelse para recuperar los valores de cada proveedor-->
            <tr>
            <!--recuperamos los datos en el orden de los campos para ser mostrados-->
                <td>{{$dcri->delito}}</td>

                <!--Definimos el boton de Editar-->
                <td>
                <div style="margin-left: 45%;">
                    <a class="btn-border btn-outline-success btn-lg" data-toggle="modal" data-target="#deletmodal-{{$dcri->id}}"
                    href="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                    <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                    </svg></a>
                </div>

                 <!-- Modal -->
                <div class="modal fade" id="deletmodal-{{$dcri->id}}"  data-keyboard="false" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header" style="background-image: linear-gradient(to left,  #51bb51,#247919);color:white;">
                                <h5 class="modal-title" id="exampleModalLabel"> Activar Delito</h5>
                                <button type="button"  class="close" data-dismiss="modal" aria-label="Close">
                                    <span class="btn-border btn-outline-danger btn-lg">X</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                ¿Desea restaurar el delito {{$dcri->delito}}?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                <form method="post" action="{{route('crimendesactivado.borrar',['id'=>$dcri->id])}}">

                                    @csrf
                                    @method('delete')
                                    <input type="submit" value="Activar" class="btn btn-success">
                                </form>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </td>

                </td>

            </tr>
        @empty
            <tr>
                <th colspan="5">No hay crimenes</th><!--Si la tabla esta vacia mostramos el mensaje no hay productos-->
            </tr>
        @endforelse<!--fin del forelse-->
        </script>
        </tbody>
    </table>

    <div style="float:right;">
        {{$descrimen->links()}}
    </div>

    <p><strong>Se muestran {{$valor}} delitos de {{$un}}</strong></p>



@stop