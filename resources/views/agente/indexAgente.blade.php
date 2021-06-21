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
<?php
$tit = "";

if($aux != "Principal"){
    $tit="de ".$aux;
}
?>
        <h2 class="text-center text-dark font-italic font-weight-bold"> Listado de Agentes {{$tit}}</h2>
<br>

<!--Filtro-->
<div>
<br>
<br>
        <!--Mandamos el texto que escriben en el filtro al controlador-->
        <form action="{{$all}}agentes" method="GET">
            <div id="searc" style="width: 100%;padding-left: 10px;">
                <div style="float: left;width:80%;">
                    <input type="text" class="form-control target" name="texto" placeholder="Buscar" value="{{$texto}}">
                </div>
                
                <div style="float: left;padding-left: 1.5%;width: 20%;">
                    <!--Los botones necesarios para el uso del filtro-->
                    <input style="width:45%" type="submit" class="btn btn-primary" value="Buscar">
    
                    <a style="width:45%" type="button" href='/agentes' class="btn btn-danger">Limpiar</a>
                </div>
            </div>
        </form>
    </div>

<br><br><br>
    </div>
<div class="form-inline">
<!--boton añadir Agente-->
    <a class=" border btn btn-outline-dark  btn-lg ml-2" href='#' data-toggle="modal" data-target="#createAgente">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
  <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
  <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
</svg>
    Añadir Agente
    </a>
    </div>
    <br>

    <a type="submit" class=" border btn btn-outline-dark  btn-lg ml-2" href='#' id="moareas">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-stack" viewBox="0 0 16 16">
      <path d="m14.12 10.163 1.715.858c.22.11.22.424 0 .534L8.267 15.34a.598.598 0 0 1-.534 0L.165 11.555a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.66zM7.733.063a.598.598 0 0 1 .534 0l7.568 3.784a.3.3 0 0 1 0 .535L8.267 8.165a.598.598 0 0 1-.534 0L.165 4.382a.299.299 0 0 1 0-.535L7.733.063z"/>
      <path d="m14.12 6.576 1.715.858c.22.11.22.424 0 .534l-7.568 3.784a.598.598 0 0 1-.534 0L.165 7.968a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.659z"/>
    </svg>
        {{$aux}}
        </a>
        <a type="button" href="/agentes" id="Principal" class="btn btn-dark areas">Principal</a>
        <a type="button" href="/Cagentes" id="Comunes" class="btn btn-dark areas">Delitos Comunes</a>
        <a type="button" href="/Pagentes" id="Propiedad" class="btn btn-dark areas">Delitos Contra la Propiedad</a>
        <a type="button" href="/Vagentes" id="Vida" class="btn btn-dark areas">Delitos Contra la Vida</a>
        <script>$( "#{{$ult}}" ).removeClass( "areas" );$("#{{$ult}}").hide();</script>

<!--Boton que nos envia a la parte de delitos desactivados-->
    <a class=" border btn btn-outline-dark  btn-lg ml-2" href='/agentesdesactivado' style="float: right;">
        Agentes Desactivados
    </a>

    <!--Modal de creacion de Agente-->
    <div class="modal fade" id="createAgente"  data-keyboard="false" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-image: linear-gradient(to left,  #4d55c4,#0b15a7);color:white;">
                    <h5 class="modal-title" id="exampleModalLabel">
                         Agregar Agente</h5>
                    <button type="button"  class="close" data-dismiss="modal" aria-label="Close">
                        <span class="btn-border btn-outline-danger btn-lg">X</span>
                    </button>
                </div>

                <form method="post" action="">
                    @csrf
                    <div class="modal-body">

                    <div class="form-group">
                        <label form="area">Área:</label>
                         <select class="form-control form-control-user" name="area" id="area">
                         <option style="display:none" value="">Seleccione el área</option>
                         <option >Delitos Comunes</option>
                         <option>Delitos Contra la Propiedad</option>
                         <option>Delitos Contra la Vida</option>
                          </select>
                        </div>

                        <div class="form-group">
                            <label for="placa" class="col-form-label">Placa:</label>
                            <input required type="number" class="form-control form-control-user" maxlength="4" name="placa" id="placa"
                            placeholder="Ingrese la placa" maxlength="4" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                        </div>

                        <div class="form-group">
                        <label form="rango">Rango:</label>
                         <select class="form-control form-control-user" name="rango" id="rango">
                         <option style="display:none" value="">Seleccione el rango</option>
                         <option>Clase I de Policia</option>
                         <option>Agente de Policia</option>
                          </select>
                        </div>

                        <div class="form-group">
                        <label for="nombres" class="col-form-label">Nombre:</label>
                        <input type="text" require placeholder="Ingrese el nombre del Agente" maxlength="50" id="nombres" name="nombres" class="form-control
                        form-control-user">
                        </div>

                        <div class="form-group">
                        <label for="apellidos"  maxlength="50" class="col-form-label"> Apellido:</label>
                        <input type="text" placeholder="Ingrese el apellido del agente" require id="apellidos" name="apellidos"
                        class="form-control form-control-user">
                        </div>

                        <div class="form-group">
                        <label for="telefono" class="col-form-label">Teléfono:</label>
                        <input  type="tel" require placeholder="Ingrese el número teléfónico" maxlength="8" id="telefono" name="telefono"
                        class="form-control form-control-user"  onload="ValidarTell()" 
                        oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                        pattern="^[9|8|3|2]\d{7}$"title="Ingrese un numero telefonico valido que inicie con 2,3, 8 o 9">

                        </div>

                    </div>
                    <div class="modal-footer">
                    <!--Boton Guardar-->
                    <button type="button" class="btn btn-primary" id="save"
                    data-toggle="modal" data-target="#crearage">
                        Guardar
                    </button>

                    <!--modal de confirmacion de creacion de Agente-->
                        <div class="modal" id="crearage"tabindex="-1" role="dialog">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header"style="background-image: linear-gradient(to left,  #30bfea,#87ddf6);color:black;">
                                    <h5 class="modal-title">Guardar Agente</h5>
                                    <button type="button"  class="close" data-dismiss="modal" aria-label="Close">
                                        <span class="btn-border btn-outline-danger btn-lg">X</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>¿Desea registrar el Agente?</p>
                                </div>
                                <div class="modal-footer">
                                <button type="submit" id="btn-save" name="btnsave" class="btn btn-primary">Guardar</button>

                                <button type="button" class="btn btn-danger" data-dismiss="modal">Volver</button>
                                </div>
                                </div>
                            </div>
                            </div>
                        <!--final del modal creacion de Agente-->
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
<?php $valor = 0;?>
    @foreach($agentes as $age)
        <?php $valor = $valor+1?>
    @endforeach

        @if($texto != null)
            <label for="" class="col-form-label">Exiten {{$valor}} coincidencias con la busqueda {{$texto}}:</label>
        @endif



<!--Tabla para mostrar los delitos-->
<table class="table table-bordered table-light mytableAgentes" id="data_table">
    <thead class="table-dark">
        <tr class="text-center">
            <th>Placa</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Área</th>
            <th>Rango</th>
            <th>Detalle</th>
            <th>Editar</th>
            <th>Desactivar</th>
            <th>Estado</th>
        </tr>
    </thead>
    <tbody>

    @forelse($agentes as $age)
        <tr>
            <td>{{$age->placa}}</td>
            <td>{{$age->nombres}}</td>
            <td>{{$age->apellidos}}</td>
            <td>{{$age->area}}</td>
            <td>{{$age->rango}}</td>

         <!--Definimos el boton de Detalle-->

         <td>
         <a class="btn-border btn-outline-success btn-lg"
            href="{{route('agentes.show',['id'=>$age->id])}}">
            <i class="fa fa-info"></i></a>
         </td>
           <!--Definimos el boton de Editar-->
            <td>
            <a class="btn-border btn-outline-warning btn-lg"  data-toggle="modal" data-target="#editAgente-{{$age->id}}"
            href="">
            <i class="fa fa-edit"></i></a>

            <!--Modal de editar el Agente-->
            <div class="modal fade" id="editAgente-{{$age->id}}"  data-keyboard="false" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header" style="background-image: linear-gradient(to left,  #51bb51,#247919);color:white;">
                            <h5 class="modal-title" id="exampleModalLabel">
                                 Editar Agente
                            </h5>
                            <button type="button"  class="close" data-dismiss="modal" aria-label="Close">
                                <span class="btn-border btn-outline-danger btn-lg">X</span>
                            </button>
                        </div>

                        <form method="post" action="{{route('agente.update',['id'=> $age-> id])}}">
                            @csrf
                            @method('put')
                            <div class="modal-body">

                            <div class="form-group">
                                <label form="area">Área:</label>
                               <select class="form-control form-control-user" name="area" id="area">
                               <option style="display:none">{{$age->area}}</option>
                               <option >Delitos Comunes</option>
                               <option>Delitos Contra la Propiedad</option>
                               <option>Delitos Contra la Vida</option>

                                 </select>
                                </div>

                            <div class="form-group">
                                <label for="placa" class="col-for-label">Placa:</label>
                                <input require type="text" class="form-control form-control-user" maxlength="20" name="placa" id="placa" disabled
                                value="{{$age->placa}}" autocomplete="off" placeholder="Ingrese la placa "  onkeyup="validar()" onkeydown="validar()">
                                </div>


                                <div class="form-group">
                                <label form="rango">Rango del Agente:</label>
                               <select class="form-control form-control-user" name="rango" id="rango">
                               <option style="display:none">{{$age->rango}}</option>
                               <option>Clase I de Policia</option>
                                <option>Agente de Policia</option>
                                 </select>
                                </div>


                                <div class="form-group">
                                    <label for="nombres" class="col-form-label">Nombre:</label>
                                    <input required type="text" class="form-control form-control-user" maxlength="50" name="nombres" id="nombres"
                                    value="{{$age->nombres}}" autocomplete="off" placeholder="Ingrese el nombre" onkeydown="validar()" onkeyup="validar()">
                                </div>

                                <div class="form-group">
                                <label for="apellidos" class="col-form-label">Apellido:</label>
                                <input type="text" require class="form-control form-control-user" maxlength="50" id="apellidos" name="apellidos"
                                value="{{$age->apellidos}}" autocomplete="off" placeholder="Ingrese el apellido" onkeyup="validar()" onkeydown="validar()">
                                </div>

                                <div class="form-group">
                                <label for="telefono" class="col-form-label">Teléfono:</label>
                                <input type="text" require autocomplete="off" class="form-control form-control-user" maxlength="8" id="telefono" name="telefono"
                                value="{{$age->telefono}}" placeholder="Numero telefónico" onkeydown="validar()" onkeyup="validar()"
                                  onload="ValidarTell()"     oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                                </div>


                            </div>

                            <div class="modal-footer">
                <!--Boton Actualizar-->
                <button type="button" class="btn btn-primary" id="btnActualizar"
                data-toggle="modal" data-target="#editage-{{$age->id}}">
                    Actualizar
                </button>

                <!--Modal de confirmacion de edicion-->
                    <div class="modal" id="editage-{{$age->id}}"tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header"style="background-image: linear-gradient(to left,  #57a986,#0edb83);color:black;">
                                <h5 class="modal-title">Editar Agente</h5>
                                <button type="button"  class="close" data-dismiss="modal" aria-label="Close">
                                    <span class="btn-border btn-outline-danger btn-lg">X</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>¿Desea editar los datos del agente?</p>
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
            <!--Final del modal editar Agente-->
        </td>

        <td>
            <!--Boton desactivar-->
            <a class="btn-border btn-outline-danger btn-lg" data-toggle="modal" data-target="#deletmodal-{{$age->id}}"
            href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-toggle2-off" viewBox="0 0 16 16">
<path d="M9 11c.628-.836 1-1.874 1-3a4.978 4.978 0 0 0-1-3h4a3 3 0 1 1 0 6H9z"/>
<path d="M5 12a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm0 1A5 5 0 1 0 5 3a5 5 0 0 0 0 10z"/>
</svg></a>

             <!-- Modal para confirmar la desactivacion del Agente-->
            <div class="modal fade" id="deletmodal-{{$age->id}}"  data-keyboard="false" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header" style="background-image: linear-gradient(to left,  #e46c5e,#c53c38);color:white;">
                            <h5 class="modal-title" id="exampleModalLabel">
                                 Desactivar Agente
                            </h5>
                            <button type="button"  class="close" data-dismiss="modal" aria-label="Close">
                                <span class="btn-border btn-outline-danger btn-lg">X</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            ¿Desea realmente desactivar el agente {{$age->nombres}} {{$age->apellidos}}?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            <form method="post" action="{{route('agente.borrar',['id'=>$age->id])}}">

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

        <td>
            <h6 class="text-center text-primary font-italic font-weight-bold">habilitado</h6>
            </td>

        </tr>
    @empty
        <tr>
            <th colspan="5">¡No hay Agentes!</th><!--Si la tabla esta vacia mostramos el mensaje no hay Agentes-->
        </tr>
    @endforelse<!--fin del forelse-->
    </script>
    </tbody>
</table>
<!--Conteo de cuantos datos se muestra-->

    <!--Final del conteo de datos que se muestran-->
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
function cambio(){
    var x = document.getElementById("mySelect").value;
    window.location.href = "agentes"+x;
}

//fin efecto de busqueda

$(document).ready(function(){
                $("#search").keyup(function(){
                _this = this;
                $.each($(".mytableAgentes tbody tr"), function() {
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

function validacion() {
    var t = document.getElementById("telefono").value;

    if (t!=8) {

        alert(' El campo debe tener un valor de 8');
        return false;
    }

}
</script>

<p><strong>Se muestran {{$valor}} agentes</strong> </p>
    @stop
