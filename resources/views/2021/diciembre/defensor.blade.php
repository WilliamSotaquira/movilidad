@extends('welcome')
@section('contenido')

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">

<!-- ----- ----- ----- ----- ----- ----- ----- ----- Bloque Seccion ----- ----- ----- ----- ----- ----- ----- ----- ----- ------ -->

<div class='container-fluid seccion'>
    <div class='s1'>
        <div class="lv1"></div>
        <div class="encabezado">
            <div class="img-enc">
            </div>
        </div>
        <div class="logo">
            <div class="row">
                <div class="col-xs-3">
                    <div class="img-logo">
                        <div>
                            <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/06-12-2021/defensor_web-02.png" alt="Logo Defensor del Ciudadano">
                        </div>
                    </div>
                </div>
                <div class="col-xs-9">
                    <div class="txt-logo">
                        <div>
                            <h3>Soy Defensor del Ciudadano</h3>
                            <h1>¡Estoy para Servirte!</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="s2">
        <div class="titulo">
            <h1>Todos nuestros trámites y servicios <span class="txt-enfasis-1">son gratuitos.</span></h1>
        </div>
    </div>
    <div class="s3">
        <div class="parrafos">
            <p><span class="txt-enfasis-2"></span></p>
        </div>
    </div>
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

    .seccion {
        font-size: 16px !important;
        line-height: 1 !important;
        max-width: 940px;
        font-family: 'Montserrat', sans-serif;
        font-family: 'Open Sans', sans-serif;
    }

    .seccion [class*='col-'] {
        margin: 0px;
        padding: 0px;
        border: 0;
        outline: 0;
        font-size: 100%;
        vertical-align: baseline;
    }

    .w-100 {
        width: 100%;
    }

    .s1 .lv1 {
        background-color: #a7b717;
        height: 2rem;
        width: 100%;
    }


    .s1 .encabezado .img-enc {
        height: 800px;
        width: 100%;
        background-image: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/06-12-2021/fondo_defensor.webp');
        background-size: 100%;
        background-repeat: no-repeat;
        background-position: top center;

    }

    .s1 .logo {
        /* background-color: #c5c5c5; */
        text-align: center;
        margin-top: -300px;
        max-width: 940px;
    }

    .s1 .logo .img-logo {
        height: 280px;
        display: flex;
        justify-content: end;
        align-items: center;
        
    }
    .s1 .logo .img-logo img{
    max-height: 180px;

    }
    .s1 .logo .txt-logo{
        height: 245px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: start;

    }
    .s1 .logo .txt-logo h3{
        color: #fff;
        text-shadow: 0px 0px 15px #00000095;
        font-size: 4.6rem;
        margin: 0px;
    }
    .s1 .logo .txt-logo h1{
        color: #fff;
        text-shadow: 0px 0px 15px #00000095;
        font-size: 6.2rem;
        font-weight: 700;
        margin: 0px;
    }
    .s2 .titulo{
        background-color: #849024;
        border-top: solid 10px #c6d21d;
        border-bottom: solid 9px #c6d21d;
    }
    .s2 .titulo h1{
        padding: 10px;
        text-align: center;
        color: #fff;
        font-weight: 300;
        margin: 0px;

    }
    .txt-enfasis-1{
        font-weight: 700;
        font-size: 1.2em;
    }
</style>
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin hoja de estilo  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->