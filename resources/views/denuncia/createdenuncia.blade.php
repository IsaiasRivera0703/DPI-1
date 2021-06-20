@extends('madre')
@section('contenido')

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

<!--titulo de la pagina-->
<h3 style="text-align: center;"><strong>Centro de recepción de denuncias</strong></h3>
<h3 style="text-align: center;"><strong>Regional local de Danlí</strong></h3>
<h3 style="text-align: center;"><strong>Generales del caso</strong></h3>
<br>

<?php
$fecha = date("d/m/Y g:i A");
?>
<?php $anio = date("Y");?>

<?php
  $num = sprintf("%'05d", $codigos);
?>

<!--Inicio de formulario con el metodo post-->
<form method="post" action="">
  @csrf

  <!--Campo con el numero de denuncia-->
  <div class="form-group">
    <label style="float: left;padding-right: 0.5%;line-height: 220%;width: 9%;" for="ndenuncia">Denuncia N°:</label>
    <input style="float: left;width: 10%;" type="text" class="form-control form-control-user" name="ndenuncia" id="ndenuncia"
    value="{{$anio}}-{{$num}}" disabled>
  </div>

    <!--Campo con el numero de denuncia-->
    <div class="form-group">
      <label style="float: left;margin-left: 2%;line-height: 220%;width: 15%;" for="fechareport">Fecha y Hora del reporte:</label>
        <input style="float: left; width: 16%;margin-left: 0.5%;" type="text" class="form-control form-control-user" name="fechareport" id="fechareport"
        value="{{$fecha}}" disabled>
      </div>

    <!--Campo seleccion de agentes-->
    <div class="form-group">
    <label style="float: left; margin-left: 2%;line-height: 220%;width: 12%;" for="agente">Seleccione Agente:</label>
    <select style="float: left; width: 30.5%;margin-left: 1%;height: 30px;" class=" " data-show-subtext="true" data-live-search="true" name="agente" id="agente">
      <option style="display: none;">Seleccione un Agente</option>
      @foreach($agentes as $agente)
      <option value="{{$agente->id}}">
          {{$agente->nombres}} {{$agente->apellidos}}
      </option>
      @endforeach
    </select>
  </div>
<br><br><br>
  <!--Campo con los delitos asociados-->
  <div class="form-group">
    <label style="float: left;padding-right: 1%;line-height: 220%;width: 17%;" for="delasoc">Delitos Asociados al Caso:</label>
    <select  onchange="prueba()" style="float: right;width: 81%;height:30px;margin-right: 2%;"  id="selectcrimen" class="mi-selector" data-show-subtext="true" data-live-search="true" multiple>
      @foreach($crimenes as $crimen)
      <option value="{{$crimen->id}}">{{$crimen->delito}}</option>
      @endforeach
    </select>
  </div>

  <div class="form-group" style="display: none;">
    <input type="text" id="delitos" name="delitos" class="form-control form-control-user">
  </div>


  <h4 style="text-align: center;"><strong>Denunciante</strong></h4>
  <div class="form-group"></div>

      <!--Campo con la nacionalidad-->
      <div class="form-group">
        <label style="float: left;margin-left: 0.5%;line-height: 220%;width: 9%;" for="nacionalidad">Nacionalidad:</label>
        <input style="float: left;width: 15%;" type="text" class="form-control form-control-user" name="nacionalidad" id="nacionalidad"
        value="HONDUREÑA" disabled>
      </div>

        <!--Campo con la identidad-->
        <div class="form-group">
          <label style="float: left; margin-left: 2%;line-height: 220%;width: 7%;" for="identidad">N° de DNI:</label>
          <input require style="float: left;width: 19%;" type="number" class="form-control form-control-user" name="identidad_denunciante" id="identidad_denunciante" maxlength="13"
          oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
        </div>

        <!--Campo con la edad-->
        <div class="form-group">
          <label style="float: left; margin-left: 2%;line-height: 220%;width: 4%;" for="edad">Edad:</label>
          <input require style="float: left;width: 10%;" type="number" class="form-control form-control-user" name="edad" id="edad" maxlength="3" min="18"
          oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
        </div>

        <!--Campo con el estado civil-->
        <div class="form-group">
          <label style="float: left; margin-left: 2%;line-height: 220%;width: 8%;" for="estadocivil">Estado Civil:</label>
          <select  style="float: right;width: 20%;height:30px;margin-right: 1%;"  id="estadocivil" class=" " data-show-subtext="true" data-live-search="true"
           name="estadocivil">
            <option style="display: none;" value=" ">Seleccione el estado civil</option>
            <option value="soltero">Soltero</option>
            <option value="casado ">Casado</option>
          </select>
        </div>

<br><br><br>
        <h4 style="text-align: center;"><strong>Ofendido</strong></h4>
  <div class="form-group"></div>

      <!--Campo de IDEM-->
      <div class="form-group">
        <label style="float: left;margin-left: 0.5%;line-height: 220%;width: 9%;" for="idem">IDEM:</label>
        <input require style="float: left;width: 27%;" type="text" class="form-control form-control-user" name="idem" id="idem">
      </div>

        <!--Campo con la identidad-->
        <div class="form-group">
          <label style="float: left; margin-left: 2%;line-height: 220%;width: 7%;" for="identidad2">N° de DNI:</label>
          <input require style="float: left;width: 27%;" type="number" class="form-control form-control-user" name="identidad_ofendido" id="identidad_ofendido" maxlength="13"
          oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
        </div>

        <!--Campo con el telefono-->
        <div class="form-group">
          <label style="float: left; margin-left: 2%;line-height: 220%;width: 6%;" for="telefono">telefono:</label>
          <input require style="float: left;width: 18%;" type="tel" class="form-control form-control-user" name="telefono" id="telefono" maxlength="8"
          oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
        </div>
        <br><br>
        <h5>Direccíon</h5>
<div class="form-group"></div>
              <!--Campo con el departamento-->
      <div class="form-group">
        <label style="float: left;margin-left: 0.5%;line-height: 220%;width: 10%;" for="departamento">Departamento:</label>
        <input style="float: left;width: 10%;" type="text" class="form-control form-control-user" name="departamento" id="departamento"
        value="El Paraiso" disabled>
      </div>

      <!--Campo con el municipio-->
      <div class="form-group">
        <label style="float: left; margin-left: 2%;line-height: 220%;width: 7%;" for="municipio">Municipio:</label>
        <input style="float: left;width: 20%;height:30px;margin-right: 1%;" type="text" class="form-control form-control-user" name="municipio" id="municipio"
        value="Danli" disabled>
        </select>
      </div>

      <!--Campo con el sector-->
      <div class="form-group">
        <label style="float: left;margin-left: 0.5%;line-height: 220%;width: 5.5%;" for="sector">Sector:</label>
        <input require style="float: left;width: 42%;" type="text" class="form-control form-control-user" name="sector_ofendido" id="sector_ofendido">
      </div>



      <br><br><br>
        <h4 style="text-align: center;"><strong>Sospechoso</strong></h4>
  <div class="form-group"></div>

      <!--Campo de Hora y fecha de incio-->
      <div class="form-group">
        <label style="float: left;margin-left: 0.5%;line-height: 220%;width: 15%;" for="horainicio">Fecha y Hora de Inicio:</label>
        <input require style="float: left;width: 25%;" type="datetime-local" class="form-control form-control-user" name="horainicio" id="horainicio">
      </div>

        <!--Campo con la identidad-->
        <div class="form-group">
          <label style="float: left; margin-left: 2%;line-height: 220%;width: 7%;" for="identidad3">N° de DNI:</label>
          <input require style="float: left;width: 25%;" type="number" class="form-control form-control-user" name="identidad_sospechoso" id="identidad_sospechoso" maxlength="13"
          oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
        </div>

        <!--Campo numero de horas-->
        <div class="form-group">
          <label style="float: left; margin-left: 2%;line-height: 220%;width: 6%;" for="horas">Horas:</label>
          <input require style="float: left;width: 16%;" type="number" class="form-control form-control-user" name="horas" id="horas">
        </div>
        <br><br>
        <h5>Direccíon</h5>
<div class="form-group"></div>
              <!--Campo con el departamento-->
      <div class="form-group">
        <label style="float: left;margin-left: 0.5%;line-height: 220%;width: 10%;" for="departamento2">Departamento:</label>
        <input style="float: left;width: 10%;" type="text" class="form-control form-control-user" name="departamento2" id="departamento2"
        value="El Paraiso" disabled>
      </div>

      <!--Campo con el municipio-->
      <div class="form-group">
        <label style="float: left; margin-left: 2%;line-height: 220%;width: 7%;" for="municipio2">Municipio:</label>
          <input style="float: left;width: 20%;height:30px;margin-right: 1%;" type="text" class="form-control form-control-user" name="municipio2" id="municipio2"
        value="Danli" disabled>
        </select>
        </select>
      </div>

      <!--Campo con el sector-->
      <div class="form-group">
        <label style="float: left;margin-left: 0.5%;line-height: 220%;width: 5.5%;" for="sector2">Sector:</label>
        <input require style="float: left;width: 42%;" type="text" class="form-control form-control-user" name="sector_sospechoso" id="sector_sospechoso">
      </div>

<br><br><br><br>

      <!--Denuncia Tomada-->
      <div class="form-group">
        <label style="float: left;margin-left: 0.5%;line-height: 220%;width: 15%;" for="tomada">Denuncia Tomada por:</label>
        <input style="float: left;width: 83%;" type="text" class="form-control form-control-user" name="tomada" id="tomada">
      </div>

      <?php
      setlocale(LC_ALL, 'es_ES');
      $anio = date("Y");
      $mes = date("m");
      $mes = DateTime::createFromFormat('!m', $mes);
      $mes = strftime('%B', $mes->getTimestamp());
      $dia = date("d");
      ?>


<br><br>
<label for="mensaje">Dado en la ciudad de Danli, El Paraiso a los {{$dia}} dias del mes de {{$mes}} del {{$anio}}</label>

<br><br>

<button type="submit" class="btn btn-primary" >
  Guardar
  </button>
</form>

<script>
  jQuery(document).ready(function($){
    $(document).ready(function() {
        $('.mi-selector').select2();
    });
});

//De esta manera retornamos un arreglo con los campos seleccionados en crimenes//

function prueba(){
  var select = $('#selectcrimen').val();

  document.getElementById('delitos').value= select;

}
</script>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>



 @stop
