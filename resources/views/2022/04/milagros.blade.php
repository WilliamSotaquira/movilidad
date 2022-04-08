@extends('welcome')
@section('contenido')

<!-- Fuente de Texto Google  -->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Hind:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script><script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


<!-- Fin Fuente de Texto Google  -->

<!-- ----- ----- ----- ----- ----- ----- ----- ----- Bloque Seccion ----- ----- ----- ----- ----- ----- ----- ----- ----- ------ -->

<div class='container-fluid milagros'>
    <div class='encabezado'>
        <div class="logo">
            <img class='img-responsive w-100' src='/images/milagros/Logos milagros-02.png' alt='Logo Milagros Bogotanos Estupor en la ruta' title='Logo Milagros Bogotanos Estupor en la ruta'>
        </div>

        <div class="arcoiris">
            <div class='row'>
                <div class='col-xs-2'>
                    <img class='img-responsive w-100' src='/images/milagros/arcoiris1.png' alt='vector milagros bogotanos' title='vector milagros bogotanos'>
                </div>
                <div class='col-xs-2 col-xs-offset-8'>
                    <img class='img-responsive w-100' src='/images/milagros/arociris2.png' alt='vector milagros bogotanos' title='vector milagros bogotanos'>
                </div>
            </div>
        </div>
    </div>
    <style>
        .encabezado {
            height: 300px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: rgba(218, 79, 67);
            position: relative;
        }

        .encabezado .logo img {
            max-height: 240px;
            padding: 20px;
        }

        .arcoiris {
            position: absolute;
            bottom: 0px;
        }
    </style>
    <div class="s1">
        <div class="box-parrafos">
            <div>
                <p>Un reporte, apasionado e intrigante, lidera una investigación que pretende resolver el misterio detrás de unos fenómenos milagrosos que se vienen presentando en las vías bogotanas. Testigos señalan que siniestros viales que parecían inevitables de repente se corrigen y sus protagonistas tiene la oportunidad de evitarlos, reviviendo el momento y ajustando su comportamiento.</p>
                <p>Dicha investigación es presentada en una emocionante serie de 10 episodios llamada <strong>MILAGROS BOGOTANOS.</strong></p>
            </div>
        </div>
    </div>
    <style>
        .s1 {
            height: 400px;
            background: url('/images/milagros/fondo_amarillo.png');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }

        .s1 .box-parrafos {
            height: 400px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 10%;

        }

        .s1 .box-parrafos p {
            font-family: 'Hind', sans-serif;
            font-size: 20px;
            font-weight: 500;
            text-align: justify;
            line-height: 1.4;
            color: rgba(25, 25, 25, 1);
        }
    </style>
    <div class="s2">
        <div class="box-tabs">
            <ul class="nav nav-pills nav-justified" data-widget="tab-slider">
                <li class="active"><a data-toggle="pill" href="#home">Home</a></li>
                <li><a data-toggle="pill" href="#menu1">Menu 1</a></li>
                <li><a data-toggle="pill" href="#menu2">Menu 2</a></li>
                <li><a data-toggle="pill" href="#menu2">Menu 2</a></li>
                <li><a data-toggle="pill" href="#menu2">Menu 2</a></li>
                <li><a data-toggle="pill" href="#menu2">Menu 2</a></li>
                <li><a data-toggle="pill" href="#menu2">Menu 2</a></li>
                <li><a data-toggle="pill" href="#menu2">Menu 2</a></li>
                <li><a data-toggle="pill" href="#menu2">Menu 2</a></li>
                <li><a data-toggle="pill" href="#menu2">Menu 2</a></li>
            </ul>

            <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                    <h3>HOME</h3>
                    <p>Some content.</p>
                </div>
                <div id="menu1" class="tab-pane fade">
                    <h3>Menu 1</h3>
                    <p>Some content in menu 1.</p>
                </div>
                <div id="menu2" class="tab-pane fade">
                    <h3>Menu 2</h3>
                    <p>Some content in menu 2.</p>
                </div>
                <div id="menu2" class="tab-pane fade">
                    <h3>Menu 2</h3>
                    <p>Some content in menu 2.</p>
                </div>
                <div id="menu2" class="tab-pane fade">
                    <h3>Menu 2</h3>
                    <p>Some content in menu 2.</p>
                </div>
                <div id="menu2" class="tab-pane fade">
                    <h3>Menu 2</h3>
                    <p>Some content in menu 2.</p>
                </div>
                <div id="menu2" class="tab-pane fade">
                    <h3>Menu 2</h3>
                    <p>Some content in menu 2.</p>
                </div>
                <div id="menu2" class="tab-pane fade">
                    <h3>Menu 2</h3>
                    <p>Some content in menu 2.</p>
                </div>
                <div id="menu2" class="tab-pane fade">
                    <h3>Menu 2</h3>
                    <p>Some content in menu 2.</p>
                </div>
                <div id="menu2" class="tab-pane fade">
                    <h3>Menu 2</h3>
                    <p>Some content in menu 2.</p>
                </div>
            </div>
        </div>
    </div>
    <style>
        .box-tabs {
            height: 500px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
    </style>

</div>

<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin Bloque Sección  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->

<!-- ----- ----- ----- ----- ----- ----- ----- -----  Hoja de estilo ---- ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<style type='text/css'>
    .field-item.even h2 {
        visibility: hidden;
        margin-top: -50px;
    }

    .region-content {
        padding: 0px;
        overflow: hidden;
    }

    .milagros {
        font-size: 13px !important;
        line-height: 1.4 !important;
        max-width: 980px;
    }

    /*
    .milagros [class*='col-'] {
        margin: 0px;
        padding: 0px;
        border: 0;
        outline: 0;
        font-size: 100%;
        vertical-align: baseline;
    }
    */

    .w-100 {
        width: 100%;
    }
</style>
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin hoja de estilo  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<script>
  $(document).ready(function () {

    console.log ("hola consola");


      
  });
</script>