@extends('welcome')
@section('contenido')

<!-- ----- ----- ----- ----- ----- ----- ----- ----- Bloque Seccion ----- ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<br>
<div class='container-fluid seccion'>
    <div class="encabezado">
        <div class='row'>
            <div class='col-xs-12 col-sm-6 col-sm-offset-6'>
                <div class="titulo">
                    <h3>Cursos Teórico Prácticos de Conducción en Moto</h3>
                </div>
            </div>
        </div>
    </div>
    <style>
        .encabezado {
            height: 275px;

            background: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/15-03-2022/motociclista_0.webp');

            background-size: cover;
            background-repeat: no-repeat;
            background-position: top center;
        }

        .encabezado .titulo {
            position: relative;

            background: linear-gradient(45deg, rgba(0, 0, 0, 0.6) 0%, rgba(0, 0, 0, 1) 150%);


            height: 275px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            justify-items: center;
        }

        .encabezado .titulo h3 {
            font-family: 'Montserrat', sans-serif;
            font-size: 30px;
            font-weight: 700;
            text-align: center;
            line-height: 1.1;
            color: #A6B517;
            text-shadow: 2px 2px 5px #000;
            padding: 25px;
        }

        .encabezado .titulo p {
            padding: 25px;
            font-family: 'Montserrat', sans-serif;
            font-size: 16px;
            font-weight: normal;
            text-align: justify;
            line-height: 1.4;
            color: rgba(255, 255, 255, 1);
            text-shadow: 2px 2px 5px #000;
        }
    </style>
    <div class='s1'>
        <div class='row'>
            <div class='col-xs-12 col-sm-12 col-md-12'>
                <div class="parrafo">
                    <p>La Secretaría Distrital de Movilidad y la Policía de Tránsito de Bogotá, continúan trabajando para reducir el número de usuarios de moto (conductor + acompañante) víctimas de siniestros viales en la ciudad, a través de diferentes acciones de pedagogía y cultura ciudadana cuyo énfasis son las buenas prácticas de conducción y seguridad vial, que permitan proteger la vida en las vías.</p>
                </div>
            </div>
        </div>
        <div class='row'>
            <div class='col-xs-12 col-sm-12 col-md-12'>
                <div class='row'>
                    <div class='col-xs-12 col-sm-8 col-sm-offset-2'>
                        <div class="video">
                            <div class='embed-responsive embed-responsive-16by9'>
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/J4-NHEEW1cU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class='row'>
            <div class='col-xs-12 col-sm-12 col-md-12'>
                <div class="parrafo">
                    <p>Por eso, la entidad invita a las y los motociclistas de la ciudad a participar de manera gratuita en los Cursos Teórico Prácticos de Conducción en Moto, para reforzar técnicas de conducción, adoptar conductas seguras en la vía, evitar siniestros viales y aprender sobre normatividad.</p>
                </div>
            </div>
        </div>
        <div class='row'>
            <div class='col-xs-12 col-sm-4 col-sm-offset-4'>
                <a href="https://docs.google.com/forms/d/e/1FAIpQLScmgB5MsnEkvTx2UWRSiAiho98YqBE_BSeQX__3yuhyBe_1Rw/viewform">
                    
                    <div>
                        <div class="btn-form">
                            Inscribete aquí

                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <style>
        .s1 {
            padding: 40px;
        }

        .s1 .parrafo {
            padding: 40px;
        }

        .s1 .parrafo p {
            font-family: 'Montserrat', sans-serif;
            font-size: 14px;
            font-weight: 500;
            text-align: justify;
            line-height: 1.4;
        }

        .s1 .btn-form {
            background-color: rgba(77, 84, 31, 1);
            color: rgba(255, 255, 255, 1);
            padding: 15px 30px;
            text-align: center;
            font-weight: 700;
            text-transform: uppercase;
        }

        .s1 .btn-form:hover {
            background-color: #A6B517;
            color: rgba(0, 0, 0, 1);
       
        }

        .s1 a {
            color: rgba(255, 255, 255, 1);
            text-decoration: none !important;
        }
        .s1 a .btn-form:hover{
            color: rgba(0, 0, 0, 1);
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

    .seccion {
        font-size: 13px !important;
        line-height: 1.4 !important;
        max-width: 980px;
    }

    /*
    .seccion [class*='col-'] {
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

