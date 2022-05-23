@extends('welcome')
@section('contenido')

<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fuente Montserrat -----  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<link rel='preconnect' href='https://fonts.googleapis.com'>
<link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
<link href='https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap' rel='stylesheet'>
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin Fuente Montserrat -  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->


<!-- ----- ----- ----- ----- ----- ----- ----- ----- Bloque Seccion ----- ----- ----- ----- ----- ----- ----- ----- ----- ------ -->

<div class='container-fluid prevencionVial'>
    <div class='encabezado'>
        <div class='row'>
            <!-- xs -->
            <div class='col-xs-12 visible-xs-12 visible-xs-block'>
                <img class='img-responsive w-100 ' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-04-2022/bannerlg.jpg' alt='encabezado - Mes de la prevención vial' title='encabezado - Mes de la prevención vial'>
            </div>
            <!-- lg -->
            <div class='col-sm-12 hidden-xs'>
                <img class='img-responsive w-100 ' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-04-2022/bannerlg.jpg' alt='encabezado - Mes de la prevención vial' title='encabezado - Mes de la prevención vial'>
            </div>
        </div>
    </div>
    <div class="s1">
        <div class='row'>
            <div class='col-xs-12 col-sm-6 col-md-6'>
                <div class="box">
                    <div class="paragraph-box">
                        <p>La Administración distrital desarrolla el Mes de la Prevención Vial para Motociclistas, una jornada que busca generar espacios de sensibilización y pedagogía para promover comportamientos responsables en la vía, y en la que los moteros se convierten en protagonistas y líderes en seguridad vial para salvar vidas en las vías.</p>
                        <p>Los usuarios de moto podrán participar en más de 20 actividades gratuitas en diferentes puntos estratégicos de la ciudad como:</p>
                        <ul>
                            <li>Simuladores de conducción e impacto</li>
                            <li>Pistas de Test Drive</li>
                            <li>Marcación de cascos</li>
                            <li>Revisión preventiva de la moto</li>
                            <li>Actividades de puntos ciegos</li>
                            <li>Facebook Live y mucho más</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class='col-xs-12 col-sm-6 col-md-6'>
                <div class="box-video">
                        <!-- <div class='embed-responsive embed-responsive-4by3'> -->
                            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/3dl6d83tPFo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <!-- </div> -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class='col-xs-12 col-sm-12 col-md-12'>
                <iframe src="https://docs.google.com/viewer?srcid=1wVGFA9uO7Fg8PdXGUW1RsSsBdhyUEO8n&pid=explorer&efh=false&a=v&chrome=false&embedded=true&scrollbar=0" width="100%" height="500px"></iframe>
            </div>
        </div>
        <div class='row'>
            <div class='col-xs-12'>
                <br>
                <a download="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/10-05-2022/calendario_090522_.pdf" href="">Descargue aquí la programación en PDF</a>
            </div>
        </div>
    </div>

    <div class="s2">
        <div class='row'>
            <div class='col-xs-12'>
                <div class="box">
                    <div class="title-box">
                        <h3>Cursos Teórico Prácticos de Conducción </h3>
                    </div>
                    <div class="paragraph-box">
                        <p>En el marco del Mes de la Prevención Vial, la Secretaría Distrital de Movilidad y la Policía de Tránsito de Bogotá invitan a las y los motociclistas a participar de manera gratuita en los Cursos Teórico Prácticos de Conducción en Moto, para reforzar conocimiento en normatividad, pericia con la moto, adoptar conductas seguras en la vía y evitar siniestros viales, esto, con el propósito de cuidar la vida en las vías.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class='row'>
            <div class='col-xs-12'>
                <div class="box-btn">
                    <a class="btn-prevencion" href="https://docs.google.com/forms/d/e/1FAIpQLSfW32TbZE8sC0biQeJCgUI_5h4BstSSb3iN_UKVeXcP5oBPhg/viewform">Inscríbete aquí</a>
                </div>
            </div>
        </div>
    </div>
    <div class="s3">
        <div class='row'>
            <div class='col-xs-12'>
                <div class="box">
                    <div class="title-box">
                        <h3>Cifras de fallecidos en el tránsito por siniestros viales</h3>
                    </div>
                    <div class="paragraph-box">
                        <ul>
                            <li>Usuarios de moto (conductor + acompañante): <strong>52</strong></li>
                            <li>Peatones: <strong>46</strong></li>
                            <li>Ciclistas: <strong>18</strong></li>
                            <li>Conductores: <strong>4</strong></li>
                            <li>Pasajeros: <strong>4</strong></li>
                        </ul>
                        <p><strong>Total</strong><br>124 actores viales fallecidos en el tránsito</p>
                        <p class="text-center"><i>*Cifras preliminares con corte a 31 de marzo</i></p>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin Bloque Sección  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<style>
    .box {
        padding: 30px;
    }

    .box-video {
        padding: 20px;
        height: 240px;
    }

    .box-btn {
        padding: 25px;
        height: auto;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .btn-prevencion {
        background-color: #1c1d3c;
        padding: 15px 25px;
        color: #67df25;
        font-size: 1.2em;
        font-weight: 700;
        text-align: center;
        line-height: 1.2;
        text-decoration: none !important;
        border-radius: 3px;
    }

    .btn-prevencion:hover {
        background-color: #67df25;
        color: #1c1d3c;
    }

    .btn-prevencion:focus,
    .btn-prevencion:active {
        background-color: rgba(157, 157, 156, 1);
        color: rgba(25, 25, 25, 1);
    }

    .title-box h3 {
        font-size: 1.5em;
        font-weight: 700;
        text-align: initial;
        line-height: 1.2;
        color: #1c1d3c;
    }

    .paragraph-box {
        font-size: 1em;
        font-weight: normal;
        text-align: justify;
        line-height: 1.4;
        color: rgba(25, 25, 25, 1);
    }

    .box-frame {
        position: relative;
        width: 100%;
        height: 400px;
    }

    .responsive-iframe {
        /* position: absolute; */
        /* top: 0; */
        /* left: 0; */
        /* bottom: 0; */
        /* right: 0; */
        width: 100%;
        height: 100%;
        border: none;
    }

    .prevencionVial ul>li {
        padding-top: 8px;
    }
</style>
<style>
    @media(max-width:767px) {}

    @media(min-width:768px) {
        .box-video {
            height: 580px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
    }

    @media(min-width:992px) {
        .box-video{
            height: 460px;
        }
    }

    @media(min-width:1200px) {}
</style>

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

    .prevencionVial {
        max-width: 980px;
        font-family: 'Montserrat', sans-serif;
        font-size: 15px;
        font-weight: normal;
        text-align: justify;
        line-height: 1.4;
        color: rgba(25, 25, 25, 1);
    }

    /*
    .prevencionVial [class*='col-'] {
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