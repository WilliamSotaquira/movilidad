@extends('welcome')
@section('contenido')

<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fuente Montserrat -----  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<link rel='preconnect' href='https://fonts.googleapis.com'>
<link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
<link href='https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap' rel='stylesheet'>
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin Fuente Montserrat -  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->

<!-- Set Wrapper -->
<div class='container-fluid ruta'>
    <div class='box-wrp'>
        <div class='box-head'>
            <h3>Ruta de Inmovilización de un vehículo por infracción a normas de tránsito y transporte, Pago y Salida del Patio</h3>
            <p>Con este paso a paso de todo el procedimiento de inmovilización de vehículo por infracción a las normas de tránsito y transporte, <strong>La Secretaría Distrital de Movilidad (SDM) como garante de los derechos de los usuarios, y el Concesionario GyP Bogotá S.A.S,</strong> hacen transparente un servicio que requiere ser prestado, con calidad y oportunidad, por servidores y colaboradores, y, se ofrece información al ciudadano, para que realice sus trámites con garantía a sus derechos.</p>
        </div>
        <hr>
        <style>
            .box-head h3 {
                font-size: 28px;
                font-weight: 700;
                text-align: center;
                line-height: 1.2;
                color: rgba(25, 25, 25, 1);
                margin: 30px;
            }
            .box-tarifas h3{
                font-size: 28px;
                font-weight: 700;
                text-align: center;
                line-height: 1.2;
                color: rgba(25, 25, 25, 1);
                margin: 30px;
            }
        </style>
        <div class="box-embebido">
        <iframe frameborder="0" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/08-08-2022/guia_protocolos_inmovilizacion_v2.pdf" style="width:100%; height:600px;"></iframe>
        </div>
        <hr>
        <div class="box-tarifas">
            <h3 class="text-center">Tarifas</h3>
            <p></p>
        <iframe frameborder="0" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/08-08-2022/diseno_pieza_grafica_tarifas_subsanaciones_ano_2022_-_16_de_febrero_2022.pdf" style="width:100%; height:600px;"></iframe>
        </div>

    </div>
</div>
<!-- End Set Wrapper -->

<!-- Styles -->
<style type='text/css'>
    .field-item.even h2 {
        visibility: hidden;
        margin-top: -50px;
    }

    .region-content {
        padding: 0px;
        overflow: hidden;
    }

    .ruta {
        max-width: 980px;
        word-wrap: break-word;
        font-family: 'Montserrat', sans-serif;
        font-size: 15px;
        font-weight: 500;
        text-align: justify;
        line-height: 1.4;
        color: rgba(25, 25, 25, 1);
        margin: 8px;
    }

    /*
    .ruta [class*='col-'] {
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
<!-- End Styles -->


<div class='row'>
<!-- xs -->
    <div class='col-xs-12 visible-xs-12 visible-xs-block'>
        <img class='img-responsive w-100 ' src='' alt='' title=''>
    </div>
<!-- lg -->
    <div class='col-sm-12 hidden-xs'>
        <img class='img-responsive w-100 ' src='' alt='' title=''>
    </div>
</div>



        <a href="{{ field_link_categoria }}" target="_blank" rel="noopener noreferrer">
            <div class="card-obsMov zoom">
                <div class='icono'>
                    <img src='{{ field_icono }}' alt='{{ title }}' title='{{ title }}'>
                </div>
                <div class="texto">
                    <h4>{{ title }}</h4>
                </div>
            </div>
        </a>