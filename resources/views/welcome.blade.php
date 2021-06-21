@extends('madre')
@section('contenido')

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/et-lineicon.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />


    </head>

    <body style="background-color:#FFFFFF">

        <!-- Animacion d Carga -->
        <div class="animationload">
            <div class="loader">
                Loading...
            </div>
        </div>
        <!-- Fin de Animacion -->


        <!-- Carrusel -->

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" data-interval="100" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1" ></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2" ></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3" ></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="4" ></li>
            </ol>
            <div class="carousel-inner" style="background-color:#000">
                <div class="carousel-item active" align="center" style="margin-top:10px">
                    <img src="img/GG.gif" alt="logo" height="350px" >
                </div>
                <div class="carousel-item" align="center" style="margin-top:10px">
                    <img src="img/Decreto.png"  alt="Decreto Ejecutivo" height="350px" >
                </div>
                <div class="carousel-item" align="center" style="margin-top:10px">
                    <img src="img/Objetivo.png"   alt="Objetivo General" height="350px" >
                </div>
                <div class="carousel-item" align="center" style="margin-top:10px" >
                    <img src="img/Mision.png"   alt="Mision" height="350px">
                </div>
                <div class="carousel-item" align="center" style="margin-top:10px" >
                    <img src="img/Vision.png"   alt="Vision" height="350px">
                </div>

            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev"  >
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- Fin del Carrusel -->

<?php
$caracter = "color: #FFF;font-size:40px;"

?>

                <!-- =========================  Fecha y Hora ========================== -->
       <div align="center" style="background-color: #000">
           <table align="center">
               <tr>
                       <p class="digit" style="{{$caracter}}"  id="diaSemana" class="diaSemana" ></p>&nbsp;&nbsp;
                       <p class="digit" style="{{$caracter}}" id="dia" class="dia" ></p>&nbsp;&nbsp;
                       <p class="digit" style="{{$caracter}}"> de </p>&nbsp;&nbsp;
                       <p class="digit" style="{{$caracter}}" id="mes" class="mes" ></p>&nbsp;&nbsp;
                       <p class="digit" style="{{$caracter}}" > del </p>&nbsp;&nbsp;
                       <p class="digit" style="{{$caracter}}" id="anio" class="anio"></p>&nbsp;&nbsp;
                       <p class="digit" style="{{$caracter}}">--</p>&nbsp;&nbsp;
               </tr>
               <tr>
                       <p class="digit" style="{{$caracter}}" >Hora: </p>
                       <p class="digit" style="{{$caracter}}" id="horas" class="horas"></p>
                       <p class="digit" style="{{$caracter}}">:</p>
                       <p class="digit" style="{{$caracter}}" id="minutos" class="minutos"></p>
                       <p class="digit" style="{{$caracter}}">:</p>
                       <p class="digit" style="{{$caracter}}" id="segundos" class="segundos"></p>
                       <p class="digit" style="{{$caracter}}">:</p>
                       <p class="digit" style="{{$caracter}}" id="ampm" class="ampm" ></p>

               </tr>
           </table>
       </div>
        <!-- Fin FEcha y Hora -->


    <!-- =========================     Botones     ========================== -->

    <section class="features parallax" data-stellar-background-ratio="0.7" id="features" style="padding: 20px">
            <div class="row text-center">
                <div class="col-lg-4 col-md-4">
                    <div class="features-box">
                        <div class="open-overlay"><i class="fas fa-archive"></i></div>
                        <h4>Denuncia</h4>
                        <p> asdsfgasfdgfdgdsfgd</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="features-box">
                        <div class="open-overlay"><i class="fas fa-book"></i></div>
                        <h4>Catalogo de  Crimenes</h4>
                        <p>af dsfghdgdfgjhd ddgh</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="features-box">
                        <div class="open-overlay"><i class="fas fa-gavel"></i></div>
                        <h4>Ejecutar Denuncia </h4>
                        <p>sdxfgse shsdfg</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="features-box">
                        <div class="open-overlay"><i class="fas fa-list-alt"></i></div>
                        <h4>Delito</h4>
                        <p> sdfsgdh dfgh fghd </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="features-box">
                        <div class="open-overlay"><i class="fas fa-sync"></i></div>
                        <h4>Seguimiento</h4>
                        <p>sdsfgddghd fsdfs</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="features-box">
                        <div class="open-overlay"><i class="fas fa-sign-out-alt"></i></div>
                        <h4>Salir del Sistema</h4>
                        <p>Hdfgdgdfgstry  gfd</p>
                    </div>
                </div>
            </div>
            </div>


    </section> <!-- Fin Botones -->

    <!-- =========================           C@py-R  ========================== -->

    <div class="row"  align="center" style="margin-left: 50px">
        <p class="copyright">Copyright© 2021 <a>Los que no saben nada</a></p>
    </div>
    </div>


    <!-- JAVASCRIPTS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.lwtCountdown-1.0.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/animated.js"></script>
    <script src="js/main.js"></script>

    <script>  <!-- Funcion para Fecha y Hora -->
        $(function(){
            var actualizarHora = function(){
                var fecha = new Date(),
                    hora = fecha.getHours(),
                    minutos = fecha.getMinutes(),
                    segundos = fecha.getSeconds(),
                    diaSemana = fecha.getDay(),
                    dia = fecha.getDate(),
                    mes = fecha.getMonth(),
                    anio = fecha.getFullYear(),
                    ampm;

                var $pHoras = $("#horas"),
                    $pSegundos = $("#segundos"),
                    $pMinutos = $("#minutos"),
                    $pAMPM = $("#ampm"),
                    $pDiaSemana = $("#diaSemana"),
                    $pDia = $("#dia"),
                    $pMes = $("#mes"),
                    $pAnio = $("#anio");
                var semana = ['Domingo','Lunes','Martes','Miercoles','Jueves','Viernes','Sabado'];
                var meses = ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'];

                $pDiaSemana.text(semana[diaSemana]);
                $pDia.text(dia);
                $pMes.text(meses[mes]);
                $pAnio.text(anio);
                if(hora>=12){
                    hora = hora - 12;
                    ampm = "PM";
                }else{
                    ampm = "AM";
                }
                if(hora == 0){
                    hora = 12;
                }
                if(hora<10){$pHoras.text("0"+hora)}else{$pHoras.text(hora)};
                if(minutos<10){$pMinutos.text("0"+minutos)}else{$pMinutos.text(minutos)};
                if(segundos<10){$pSegundos.text("0"+segundos)}else{$pSegundos.text(segundos)};
                $pAMPM.text(ampm);
            };
            actualizarHora();
            var intervalo = setInterval(actualizarHora,1000);
        });
    </script>
    </body>

@stop
