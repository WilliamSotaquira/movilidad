@extends('welcome')
@section('contenido')

<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fuente Sogar -----  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<link rel='preconnect' href='https://fonts.googleapis.com'>
<link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
<link href='https://fonts.googleapis.com/css2?family=Sora:wght@100;200;300;400;500;600;700;800&display=swap' rel='stylesheet'>
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin Fuente Sogar -  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->

<!-- ----- ----- ----- ----- ----- ----- ----- ----- Bloque Seccion ----- ----- ----- ----- ----- ----- ----- ----- ----- ------ -->

<div class='container-fluid seccion'>
    <div class='s1'>
        <div class="encabezado">
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <div class="logo-enc">
                        <div>
                            <img class='img-responsive w-100 logo-ppal' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/11-01-2022/logo_movilab.png' alt='Logo Movilab Bogotá' title='Logo Movilab Bogotá'>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="parrafos-enc">
                        <div class="img-details">
                            <div>
                                <img class='img-responsive w-100 ' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/11-01-2022/ads_movilab.png' alt='iconos de relleno' title='iconos de relleno'>
                            </div>
                        </div>
                        <div class="txt-enc">
                            <div>
                                <h3><span class="txt-enfasis">Laboratorio de innovación pública en movilidad de Bogotá</span> colaboración y co-creacción en acción</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="s2">
        <div class='row'>
            <div class='col-xs-12 col-sm-12 col-md-12'>
                <div>

                    <!-- Nav tabs -->
                    <ul class="nav nav-pills nav-justified" role="tablist">
                        <li role="presentation" class="active"><a href="#nosotros" aria-controls="nosotros" role="tab" data-toggle="tab">¿Quiénes somos?</a></li>
                        <li role="presentation"><a href="#proyectos" aria-controls="proyectos" role="tab" data-toggle="tab">¿Qué hacemos?</a></li>
                        <li role="presentation"><a href="#convocatorias" aria-controls="convocatorias" role="tab" data-toggle="tab">Convocatorias</a></li>
                        <li role="presentation"><a href="#publicaciones" aria-controls="publicaciones" role="tab" data-toggle="tab">Publicaciones</a></li>
                        <li role="presentation"><a href="#logros" aria-controls="logros" role="tab" data-toggle="tab">Logros</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">

                        <!-- Seccion Nosotros  -->
                        <div role="tabpanel" class="tab-pane fade active" id="nosotros">
                            <div class='row'>
                                <div class='col-xs-12 col-sm-6 col-md-6'>
                                    <div class="contenido-box">
                                        <div class="titulo-box">
                                            <h3>¿Quiénes somos?</h3>
                                        </div>
                                        <div class="parrafo-box">
                                            <p>El Laboratorio de Innovación de Movilidad en Bogotá, identifica y resuelve problemáticas de movilidad del Distrito de Bogotá, a través de la articulación y co-creación con el sector privado, público, startups, emprendedores, academia y organizaciones multilaterales generando prototipos de solución que respondan a las necesidades identificadas, con desarrollo y mejora de nuevas tecnologías o actividades que no necesariamente incluyan tecnología.</p>
                                            <p>Identificamos con los servidores y ciudadanos, problemáticas y oportunidades de innovación en movilidad para desarrollar y probar soluciones con universidades, emprendedores, startups, centros de investigación, empresas, ONG en movilidad, organismos multilaterales y la ciudadanía en general.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class='col-xs-12 col-sm-6 col-md-6'>

                                </div>
                            </div>
                        </div>
                        <!-- Fin Seccion Nosotros  -->

                        <div role="tabpanel" class="tab-pane fade" id="proyectos">..</div>
                        <div role="tabpanel" class="tab-pane fade" id="convocatorias">...</div>
                        <div role="tabpanel" class="tab-pane fade" id="publicaciones">....</div>
                        <div role="tabpanel" class="tab-pane fade" id="logros">.....</div>
                    </div>

                </div>
            </div>
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
    }

    /* .seccion [class*='col-'] {
        margin: 0px;
        padding: 0px;
        border: 0;
        outline: 0;
        font-size: 100%;
        vertical-align: baseline;
    } */

    .w-100 {
        width: 100%;
    }

    .s1 .encabezado {
        background-color: #191C3A;
        border-bottom: solid 10px #66e026;
    }

    .s1 .logo-enc {
        height: 240px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .s1 .txt-enc {
        margin: 15px;
    }

    .s1 .txt-enc h3 {
        font-family: 'Sora', sans-serif;
        text-align: center;
        font-weight: 300;
        color: #fff;
        font-size: 18px;

    }

    .s1 .txt-enfasis {
        color: #66e026;
        font-weight: 700;
    }

    .s1 .img-details {
        padding: 0px 40px 0px 40px;
        /* padding: 30px 40px 0px 40px; */
    }

    .s1 .parrafos-enc {
        height: 180px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        align-items: center;
    }

    .s2 {
        margin-top: 15px;
    }

    .nav-pills>li.active>a,
    .nav-pills>li.active>a:focus,
    .nav-pills>li.active>a:hover {
        color: #66e026 !important;
        background-color: #191C3A !important;
    }


    .s2  .nav-pills a {
        color: #191C3A !important;
        font-weight: 700;
    }
    .contenido-box {
        font-family: 'Sora', sans-serif;
    }
</style>
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin hoja de estilo  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->