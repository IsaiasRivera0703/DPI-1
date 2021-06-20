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
<h2 class="azul" style="text-align: center;"><strong>Catálogo de Delitos</strong></h2>
<br>

    <div>

<br>
        <!--Mandamos el texto que escriben en el filtro al controlador-->
        <form action="{{route('crimen.indice')}}" method="GET">
            <div id="searc" style="width: 100%;padding-left: 10px;">
                <div style="float: left;width:80%;">
                    <input type="text" class="form-control target" name="texto" placeholder="Buscar" value="{{$texto}}">
                </div>
                
                <div style="float: left;padding-left: 1.5%;width: 20%;">
                    <!--Los botones necesarios para el uso del filtro-->
                    <input style="width:45%" type="submit" class="btn btn-primary" value="Buscar">
    
                    <a style="width:45%" type="button" href='/crimenes' class="btn btn-danger">Limpiar</a>
                </div>
            </div>
        </form>
    </div>

<br><br><br>
<!--boton añadir delito-->
    <a class=" border btn btn-outline-primary  btn-lg ml-2" href='#' data-toggle="modal" data-target="#createCrimen">
    Añadir Delito
    </a>
<!--Boton que nos envia a la parte de delitos desactivados-->
<div style="float:right;">
    <a class=" border btn btn-outline-danger  btn-lg ml-2" href='/crimenesdesactivado'>
        Delitos Desactivados
    </a>
</div>

    <!--Modal de creacion de delito-->
    <div class="modal fade" id="createCrimen"  data-keyboard="false" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-image: linear-gradient(to left,  #4d55c4,#0b15a7);color:white;">
                    <h5 class="modal-title" id="exampleModalLabel">
                         Agregar Delito</h5>
                    <button type="button"  class="close" data-dismiss="modal" aria-label="Close">
                        <span class="btn-border btn-outline-danger btn-lg">X</span>
                    </button>
                </div>

                <form method="post" action="">
                    @csrf
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="delito" class="col-form-label">Delito:</label>
                            <input required type="text" class="form-control form-control-user" maxlength="150" name="delito" id="delito"
                            placeholder="Ingrese el nombre del delito">
                        </div>

                    </div>
                    <div class="modal-footer">
                    <!--Boton Guardar-->
                    <button type="button" class="btn btn-primary" id="save"
                    data-toggle="modal" data-target="#creardel">
                        Guardar
                    </button>  

                    <!--modal de confirmacion de creacion de delito-->
                        <div class="modal" id="creardel"tabindex="-1" role="dialog">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header"style="background-image: linear-gradient(to left,  #30bfea,#87ddf6);color:black;">
                                    <h5 class="modal-title">Guardar Delito</h5>
                                    <button type="button"  class="close" data-dismiss="modal" aria-label="Close">
                                        <span class="btn-border btn-outline-danger btn-lg">X</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>¿Desea crear el Delito?</p>
                                </div>
                                <div class="modal-footer">
                                <button type="submit" id="btn-save" name="btnsave" class="btn btn-primary">Guardar</button>
                                
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Volver</button>
                                </div>
                                </div>
                            </div>
                            </div>
                        <!--final del modal creacion de delito-->

                        <button type="reset" class="btn btn-success">
                            Limpiar
                        </button>

                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>

                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--Final del modal añadir-->
<br><br>
<!--Inicio de Paginacion-->
<div style="float:right;">
    {{$crimen->links()}}
</div>
<!--Final de paginacion-->

<!--Selecccionar el numero de delitos a mostrar por pagina-->
<div style="font-size:18px;">
        <label>
            Mostrar
            <select id="mySelect" name="example_length" aria-controls="example" class="form-select input-sm" onchange="cambio()">
                <option style="display: none;">{{$num}}</option>
                <option value="50">50</option>
                <option value="100">100</option>
                <option value="150">150</option>
                <option value="200">200</option>
            </select> 
            delitos
        </label>
</div>
<!--Final del seleccionar el numero de delito a mostrar por pagina-->

<!--Guardamos el numero seleccionado en el select anterior y lo enviamos al controlador-->
<script>

//fin efecto de busqueda

function cambio(){
    var x = document.getElementById("mySelect").value;
    window.location.href = "crimenes"+x;
}
</script>


<?php $valor = 0; $un =0;?>
    @foreach ($crimen2 as $cri2)
    <?php $un = $cri2->total?>
    @endforeach
    @foreach($crimen as $cri)
        <?php $valor = $valor+1?>
    @endforeach

        @if($texto != null)
            <label for="" class="col-form-label">Exiten {{$un}} coincidencias con la busqueda {{$texto}}:</label>
        @endif
<!--Tabla para mostrar los delitos-->
    <table class="table table-bordered" id="data_table" >
        <thead class="table-dark">
            <tr class="text-center">
                <th>Delito</th>
                <th>Editar</th>
                <th>Desactivar</th>
            </tr>
        </thead>
        <tbody>
        
        @forelse($crimen as $cri)
        
            <tr>
                <td>{{$cri->delito}}</td>
               <!--Definimos el boton de Editar-->
                <td>
                <a href="javascript:void(0)" class="btn-border btn-outline-success btn-lg " id="edit-customer" data-toggle="modal" data-target="#editCrimen-{{$cri->id}}">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
                <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
                </svg></a>
                
                <!--Modal de editar el delito-->
                <div class="modal fade" id="editCrimen-{{$cri->id}}"  data-keyboard="false" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header" style="background-image: linear-gradient(to left,  #51bb51,#247919);color:white;">
                                <h5 class="modal-title" id="exampleModalLabel">
                                     Editar Delito
                                </h5>
                                <button type="button"  class="close" data-dismiss="modal" aria-label="Close">
                                    <span class="btn-border btn-outline-danger btn-lg">X</span>
                                </button>
                            </div>
            
                            <form method="post" action="{{route('crimen.update',['id'=> $cri-> id])}}">
                                @csrf
                                @method('put')
                                <div class="modal-body">
            
                                    <div class="form-group">
                                        <label for="delito" class="col-form-label">Delito:</label>
                                        <input required type="text" class="form-control form-control-user" maxlength="150" name="delito" id="delito"
                                        value="{{$cri->delito}}" autocomplete="off" placeholder="Ingrese el nombre del delito">
                                    </div>
            
                                </div>
                                <div class="modal-footer">
                    <!--Boton Actualizar-->
                    <button type="button" class="btn btn-primary" id="btnActualizar"
                    data-toggle="modal" data-target="#editdel-{{$cri->id}}">
                        Actualizar
                    </button>


                    <!--Modal de confirmacion de edicion-->
                        <div class="modal" id="editdel-{{$cri->id}}"tabindex="-1" role="dialog">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header"style="background-image: linear-gradient(to left,  #57a986,#0edb83);color:black;">
                                    <h5 class="modal-title">Editar Delito</h5>
                                    <button type="button"  class="close" data-dismiss="modal" aria-label="Close">
                                        <span class="btn-border btn-outline-danger btn-lg">X</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>¿Desea editar el Delito?</p>
                                </div>
                                <div class="modal-footer">
                                <button type="submit" id="btn-save" name="btnsave" class="btn btn-primary">Aceptar</button>
                                
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Volver</button>
                                </div>
                                </div>
                            </div>
                            </div>
                        <!--final del modal de confirmacion de editar-->

                                    <button type="reset" class="btn btn-success">
                                        Restaurar
                                    </button>
            
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!--Final del modal editar delito-->

            </td>


            <td>
                <!--Boton desactivar-->

                <a class="btn-border btn-outline-danger btn-lg"data-toggle="modal" data-target="#deletmodal-{{$cri->id}}"
                href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-slash-fill" viewBox="0 0 16 16">
                <path d="m10.79 12.912-1.614-1.615a3.5 3.5 0 0 1-4.474-4.474l-2.06-2.06C.938 6.278 0 8 0 8s3 5.5 8 5.5a7.029 7.029 0 0 0 2.79-.588zM5.21 3.088A7.028 7.028 0 0 1 8 2.5c5 0 8 5.5 8 5.5s-.939 1.721-2.641 3.238l-2.062-2.062a3.5 3.5 0 0 0-4.474-4.474L5.21 3.089z"/>
                <path d="M5.525 7.646a2.5 2.5 0 0 0 2.829 2.829l-2.83-2.829zm4.95.708-2.829-2.83a2.5 2.5 0 0 1 2.829 2.829zm3.171 6-12-12 .708-.708 12 12-.708.708z"/>
                </svg></a>

                 <!-- Modal para confirmar la desactivacion del delito-->
                <div class="modal fade" id="deletmodal-{{$cri->id}}"  data-keyboard="false" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header" style="background-image: linear-gradient(to left,  #e46c5e,#c53c38);color:white;">
                                <h5 class="modal-title" id="exampleModalLabel">
                                     Desactivar Delito
                                </h5>
                                <button type="button"  class="close" data-dismiss="modal" aria-label="Close">
                                    <span class="btn-border btn-outline-danger btn-lg">X</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                ¿Desea realmente eliminar el delito {{$cri->delito}}?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                <form method="post" action="{{route('crimen.borrar',['id'=>$cri->id])}}">

                                    @csrf
                                    @method('delete')
                                    <input type="submit" value="Desactivar" class="btn btn-danger">
                                </form>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <!--Final del modal de desactivar delito-->
            </td>

            </tr>
        @empty
            <tr>
                <th colspan="5">No hay crimenes</th><!--Si la tabla esta vacia mostramos el mensaje no hay crimenes-->
            </tr>
        @endforelse<!--fin del forelse-->
        </script>
        </tbody>
    </table>
    <!--Conteo de cuantos datos se muestra-->


    <div style="float:right;">
        {{$crimen->links()}}
    </div>
    <p><strong>Se muestran {{$valor}} delitos de {{$un}}</strong> </p>
    <!--Final del conteo de datos que se muestran-->
    
    
@stop