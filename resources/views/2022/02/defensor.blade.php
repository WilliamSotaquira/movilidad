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
            <p><span class="txt-enfasis-2">La Secretaría Distrital de Movilidad cuenta con la figura del Defensor del Ciudadano,</span> como herramienta que garantiza el cumplimiento de los derechos y deberes a los ciudadanos para obtener respuestas oportunas y de calidad a sus requerimientos; que sus quejas y reclamos sean solucionados, y sean establecidos mecanismos de participación en el diseño y presentación de servicios.</p>
            <p>Con la Figura del Defensor al Ciudadano se da cumplimiento, <span class="txt-enfasis-2">al Decreto 847 de 2019 y a la Resolución 078 de 2019,</span> de la Secretaría Distrital de Movilidad.</p>
        </div>
        <div class="titulo-v1">
            <div>
                <h3>¿Cuándo <span class="txt-enfasis-2">acudir?</span></h3>
            </div>
        </div>
        <div class="parrafo2">
            <div class='row'>
                <div class='col-xs-12 col-sm-8 col-md-8'>
                    <ul>
                        <li><span class="txt-enfasis-2">Después de haber hecho un requerimiento por otro canal de contacto</span> y no haber encontrado solución a sus peticiones, quejas, reclamos o solicitudes.</li>
                        <li>Después de <span class="txt-enfasis-2">transcurrido el plazo legal y/o no quedar conforme con la respuesta</span> suministrada a sus peticiones, quejas, reclamos o solicitudes.</li>
                        <li><span class="txt-enfasis-2">La figura del defensor</span> participa únicamente en la última instancia del proceso y no reemplaza los canales de comunicación e interacción establecidos por la entidad para los ciudadanos.</li>
                    </ul>
                </div>
                <div class='col-xs-12 col-sm-4 col-md-4'>
                    <div class="img1">
                        <img class='img-responsive w-100 ' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/06-12-2021/defensor_web-03.png' alt='Resumen de iconos de mensajes' title='Resumen de iconos de mensajes'>
                    </div>
                </div>
            </div>
        </div>
        <div class="titulo-v2">
            <div>
                <h3>¿Cuáles son las funciones del <span class="txt-enfasis-2">Defensor del Ciudadano?</span></h3>
            </div>
        </div>
        <div class="parrafo3">
            <div class='row'>
                <div class='col-xs-12 col-sm-4 col-md-4'>
                    <div class="img2">
                        <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/06-12-2021/defensor_web-04.png' alt='Resumen de iconos de diálogo' title='Resumen de iconos de diálogo'>
                    </div>
                </div>
                <div class='col-xs-12 col-sm-8 col-md-8'>
                    <ul>
                        <li><span class="txt-enfasis-2">Ser vocero</span> de los ciudadanos o usuarios, para la protección de sus derechos y hacer conocer sus deberes.</li>
                        <li><span class="txt-enfasis-2">Conocer y hacer seguimiento</span> de manera objetiva a los <span class="txt-enfasis-2">requerimientos, quejas, reclamos o solicitudes</span> de los ciudadanos por el posible <span class="txt-enfasis-2">incumplimiento</span> de la normatividad vigente, <span class="txt-enfasis-2">dentro de los tiempos establecidos;</span> que rigen el desarrollo de los trámites y servicios que presta la Entidad.</li>
                        <li><span class="txt-enfasis-2">Promover y divulgar</span> la figura del Defensor del Ciudadano y el alcance de sus actividades a la ciudadanía.</li>
                        <li><span class="txt-enfasis-2">Diseñar e Implementar</span> estrategias acerca de los derechos y deberes de la ciudadanía.</li>
                        <li><span class="txt-enfasis-2">Ser mediador entre la ciudadanía y la entidad</span> en pro de solucionar de manera oportuna, clara y efectiva las diferencias que se presentan en la relación Estado-ciudadano.</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="img3">
            <div>
                <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/06-12-2021/defensor_web-05.png' alt='Sello del trato digno al ciudadano es transparencia' title='Sello del trato digno al ciudadano es transparencia'>
            </div>
        </div>

    </div>

    <div class="s4">
        <div class="box-btn">
            <div class='row'>
                <div class='col-xs-12'>
                    <a href="https://www.movilidadbogota.gov.co/web/govi-sdqs/crear">
                        <div class="btn-defensor">
                            Realiza aquí tu solicitud al Defensor del Ciudadano
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <hr>
        <h3 class="text-center">Informes Defensor al Ciudadano</h3>
        <br>

        <div class="panel-group" id="accordion">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h4 class="panel-title"><a data-parent="#accordion" data-toggle="collapse" href="#collapse1">2021</a></h4>
                </div>

                <div class="panel-collapse collapse in" id="collapse1">
                    <div class="panel-body">
                        <p><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/08-02-2022/informe_defensor_de_la_ciudadania_ii_semestre_2021_.pdf" target="_blank">INFORME DEFENSOR DEL CIUDADANO II SEMESTRE 2021</a></p>

                        <p><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/30-07-2021/informe_defensor_del_ciudadano_i_semestre_2021.pdf" target="_blank">INFORME DEFENSOR DEL CIUDADANO I SEMESTRE 2021</a></p>
                    </div>
                </div>
            </div>

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h4 class="panel-title"><a data-parent="#accordion" data-toggle="collapse" href="#collapse2">2020</a></h4>
                </div>

                <div class="panel-collapse collapse" id="collapse2">
                    <div class="panel-body">
                        <p><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-02-2021/informe_defensor_del_ciudadano_ii_semestre_2020.pdf" target="_blank">INFORME DEFENSOR DEL CIUDADANO II SEMESTRE 2020</a></p>

                        <p><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/24-07-2020/-informe_defensor_i_semestre_2020.doc_1.pdf" target="_blank">INFORME DEFENSOR DEL CIUDADANO I SEMESTRE 2020</a></p>
                    </div>
                </div>
            </div>

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h4 class="panel-title"><a data-parent="#accordion" data-toggle="collapse" href="#collapse3">2019</a></h4>
                </div>

                <div class="panel-collapse collapse" id="collapse3">
                    <div class="panel-body">
                        <p><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/03-02-2020/informe_defensor_del_ciudadano_ii_semestre_2019.pdf" target="_blank">INFORME DEFENSOR DEL CIUDADANO II SEMESTRE 2019</a></p>

                        <p><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/2019-07-29/informe_defensor_del_ciudadano_i_semestre_2019.pdf" target="_blank">INFORME DEFENSOR DEL CIUDADANO I SEMESTRE 2019</a></p>
                    </div>
                </div>
            </div>

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h4 class="panel-title"><a data-parent="#accordion" data-toggle="collapse" href="#collapse4">2018</a></h4>
                </div>

                <div class="panel-collapse collapse" id="collapse4">
                    <div class="panel-body">
                        <p><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/2019-02-05/Informe%20%20Defensor%20II%20SEMESTRE%202018%20FINAL.pdf" target="_blank">INFORME DEFENSOR DEL CIUDADANO II SEMESTRE 2018</a></p>

                        <p><a href="http://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/2018-09-03/INFORME%20DEFENSOR%20DEL%20CIUDADANO%20I%20SEMESTRE%202018.pdf" target="_blank">INFORME DEFENSOR DEL CIUDADANO I SEMESTRE 2018</a></p>
                    </div>
                </div>
            </div>
        </div>

        <hr>
        <div class="box-btn">
            <div class='row'>
                <div class='col-xs-12'>
                    <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-07-2021/protocolo_de_la_figura_del_defensor_al_ciudadano.pdf">
                        <div class="btn-defensor">
                        Protocolo de la Figura del Defensor al Ciudadano
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="final">

</div>
</div>
<style>
    .s3 .parrafos {
        padding: 30px;
        font-family: 'Montserrat', sans-serif;
        font-size: 20px;
        text-align: center;
        line-height: 1.5;
        color: #000;

    }


    .s3 .txt-enfasis-2 {
        font-size: 1.1em;
        font-weight: 700;
    }

    .s3 .titulo-v1 {
        background-color: #d0da41;
        color: #000;
        padding: 15px 30px;
    }

    .s3 .titulo-v1 h3 {
        font-size: 28px !important;

    }

    .s3 .img1 {
        padding: 5%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .s3 .parrafo2 {
        color: #000;
        padding: 15px 30px;
    }

    .s3 .parrafo2 ul>li {
        font-size: 20px;
        line-height: 1.5;
        padding-bottom: 20px;
        font-family: 'Montserrat', sans-serif;

    }

    .s3 .titulo-v2 {
        background-color: #c7d31d;
        color: #000;
        padding: 15px 30px;
    }

    .s3 h3 {
        width: 60%;
        font-size: 32px !important;

    }

    .s3 .parrafo3 {
        color: #000;
        padding: 15px 30px;
    }

    .s3 .parrafo3 ul>li {
        font-size: 20px;
        line-height: 1.5;
        padding-bottom: 20px;
        font-family: 'Montserrat', sans-serif;

    }

    .final {
        height: 25px;
        background-color: #849025;
        margin-top: 20px;
    }

    .s4 .btn-defensor {
        background: #849025 !important;
        color: #000;
        border-radius: 0px;
        border: none;
        font-size: 18px !important;
        font-family: 'Montserrat', sans-serif !important;
        font-weight: 700;
        padding: 15px 20px;
    }

    .s4 .btn-defensor:hover {
        background: #c6d21d !important;
        color: #000;

    }

    /* bootstrap.min.css | https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css */

    .panel-primary>.panel-heading {
        background-color: #4D541F !important;
        border-color: #d5d5d5 !important;
    }

    .panel-primary {
        border-color: #d5d5d5 !important;
    }
</style>

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

    .s1 [class*='col-'] {
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

    .s1 .logo .img-logo img {
        max-height: 180px;

    }

    .s1 .logo .txt-logo {
        height: 245px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: start;

    }

    .s1 .logo .txt-logo h3 {
        color: #fff;
        text-shadow: 0px 0px 15px #00000095;
        font-size: 4.6rem;
        margin: 0px;
    }

    .s1 .logo .txt-logo h1 {
        color: #fff;
        text-shadow: 0px 0px 15px #00000095;
        font-size: 6.2rem;
        font-weight: 700;
        margin: 0px;
    }

    .s2 .titulo {
        background-color: #849024;
        border-top: solid 10px #c6d21d;
        border-bottom: solid 9px #c6d21d;
    }

    .s2 .titulo h1 {
        padding: 10px;
        text-align: center;
        color: #fff;
        font-weight: 300;
        margin: 0px;

    }

    .txt-enfasis-1 {
        font-weight: 700;
        font-size: 1.2em;
    }

    .box-btn {
        display: flex;
        justify-content: center;
        margin: 30px;
    }

    .box-btn a {
        text-decoration: none !important;
        text-align: center;
    }
</style>
<style>
    @media(max-width:767px) {
        .s1 .encabezado .img-enc {
            height: 360px;

        }


        .s1 .encabezado .img-enc {

            height: 360px;
        }

        .s1 .logo .txt-logo h3 {
            font-size: 24px;
        }

        .s1 .logo .txt-logo h1 {
            font-size: 23px;
        }

        .s1 .logo .img-logo img {
            max-height: 70px;
        }

        .s2 .titulo h1 {
            font-size: 24px;
        }

        .s3 h3 {
            width: 100%;
        }

    }

    @media(min-width:768px) {
        .s3 .img1 {
            height: 400;
        }
    }

    @media(min-width:992px) {}

    @media(min-width:1200px) {}
</style>
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin hoja de estilo  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->