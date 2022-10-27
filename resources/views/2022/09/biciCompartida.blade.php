@extends('welcome')
@section('contenido')
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fuente Assistant -----  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Assistant:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin Fuente Designed by Adobe Systems Inc., Ben Nathan -  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- Set Wrapper -->
<div class='container-fluid biciCompartidas'>
    <div class='box-wrp'>
        <div class='box-head'>
            <div class='row'>
                <!-- xs -->
                <div class='col-xs-12 visible-xs-12 visible-xs-block'>
                    <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/28-09-2022/sbcb_900x300.png' alt='Encabezado Sistema de Bicicletas Compartidas' title='Encabezado Sistema de Bicicletas Compartidas'>
                </div>
                <!-- lg -->
                <div class='col-sm-12 hidden-xs'>
                    <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/28-09-2022/sbcb_900x300.png' alt='Encabezado Sistema de Bicicletas Compartidas' title='Encabezado Sistema de Bicicletas Compartidas'>
                </div>
            </div>
        </div>
        <div class="box-parrafo">
            <p>¡Es un hecho! Bogotá ya cuenta con su primer Sistema de Bicicletas Compartidas y tú estás invitado a disfrutar de esta nueva opción de movilidad sostenible que hemos dispuesto para ti.</p>
        </div>
        <style>
            .box-wrp .box-parrafo {
                padding: 32px 32px 0px 32px;
            }

            .box-wrp .box-parrafo p {
                font-size: 16px;
                font-weight: 500;
                text-align: left;
                line-height: 1.4;
                color: rgba(25, 25, 25, 1);
            }
        </style>

        <box class="video-ppal">
            <div class='video'>
                <div class='embed-responsive embed-responsive-16by9'>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/NpEaa2P7qZI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </box>
        <div class="box-contador">

            <div class="box-botones">
                <a data-toggle="tab" href="#bici1">
                    <div class="boton zoom">
                        <h3 class="wow animate__animated animate__bounceIn animate__delay-1s animate__slow">1500</h3>
                        <!-- <span><img class='img-responsive w-100' src='https://tembici.com.co/wp-content/uploads/2022/08/Icon-Monocleta.svg' alt='' title=''></span> -->
                        <span class="wow animate__animated animate__heartBeat animate__delay-1s animate__slower animate__repeat-2"><i class="fa-solid fa-person-biking fa-2x"></i></span>
                        <h4>Bicicletas Mecánicas</h4>
                    </div>
                </a>

                <a data-toggle="tab" href="#bici2">
                    <div class="boton zoom">
                        <h3 class="wow animate__animated animate__bounceIn animate__delay-1s animate__slow">150</h3>
                        <span class="wow animate__animated animate__heartBeat animate__delay-1s animate__slower animate__repeat-2"><img class='img-responsive w-100' src='https://tembici.com.co/wp-content/uploads/2022/08/Icon-Monocleta.svg' alt='' title=''></span>
                        <h4>Manocletas </h4>
                    </div>
                </a>

                <a data-toggle="tab" href="#bici3">
                    <div class="boton zoom">
                        <h3 class="wow animate__animated animate__bounceIn animate__delay-1s animate__slow">1500</h3>
                        <!-- <span><img class='img-responsive w-100' src='https://tembici.com.co/wp-content/uploads/2022/08/Icon-Monocleta.svg' alt='' title=''></span> -->
                        <span class="wow animate__animated animate__heartBeat animate__delay-1s animate__slower animate__repeat-2"><i class="fa-sharp fa-solid fa-bolt fa-2x"></i></span>
                        <h4>Bicicletas Asistidas</h4>
                    </div>
                </a>

                <a data-toggle="tab" href="#bici4">
                    <div class="boton zoom">
                        <h3 class="wow animate__animated animate__bounceIn animate__delay-1s animate__slow">150</h3>
                        <span class="wow animate__animated animate__heartBeat animate__delay-1s animate__slower animate__repeat-2"><img class='img-responsive w-100' src='https://tembici.com.co/wp-content/uploads/2022/08/Icon-Cajon.svg' alt='' title=''></span>
                        <h4>Bicicletas de cajón</h4>
                    </div>
                </a>

                <a data-toggle="tab" href="#bici5">
                    <div class="boton zoom">
                        <h3 class="wow animate__animated animate__bounceIn animate__delay-1s animate__slow">300</h3>
                        <span class="wow animate__animated animate__heartBeat animate__delay-1s animate__slower animate__repeat-2"><i class="fa-solid fa-battery-full fa-2x"></i></span>

                        <h4>Estaciones</h4>
                    </div>
                </a>
            </div>



            <style>
                .box-wrp .box-botones {
                    margin-top: 32px;
                    display: grid;
                    gap: 16px;
                    grid-auto-flow: dense;
                    grid-template-columns: repeat(auto-fill, minmax(min(100%, 150px), 1fr));
                    /* grid-template-columns: repeat(5, 1fr); */
                    grid-template-rows: auto;
                }

                .box-wrp .box-botones a {
                    text-decoration: none;
                }

                .box-wrp .box-botones .boton {
                    /* height: px; */
                    display: flex;
                    flex-direction: column;
                    justify-content: center;
                    align-items: center;
                    border-radius: 8px;
                    border: solid 2px rgba(147, 195, 221, 0.5);
                }

                .box-wrp .box-botones .boton:hover {

                    -webkit-box-shadow: 2px 2px 5px 2px rgba(0, 0, 0, 0.16);
                    box-shadow: 2px 2px 5px 2px rgba(0, 0, 0, 0.16);
                }

                .box-wrp .box-botones .boton h3 {
                    font-size: 40px;
                    font-weight: 400;
                    text-align: center;
                    line-height: 1;
                    color: #0045dd;
                }

                .box-wrp .box-botones .boton h4 {
                    /* font-size: 16px; */
                    text-align: center;
                    line-height: 1;
                    font-weight: light;
                    color: rgba(249, 0, 131, 1);

                }

                .box-wrp .box-botones .boton span>i {
                    /* color: #f90083; */
                    color: #6c6d6d;
                    padding: 16px;
                }

                .box-wrp .box-botones .boton span img {
                    color: #f90083;
                    padding: 0px;
                    max-width: 69px;
                    width: 69px;
                }
            </style>



            <!--
            <ul class="nav nav-pills nav-justified">
                <li class="active"><a data-toggle="tab" href="#bici1"><i class="fa fa-bicycle" aria-hidden="true"></i> Bicicletas Mecánicas</a></li>
                <li><a data-toggle="tab" href="#menu2"><i class="fa fa-bolt" aria-hidden="true"></i>Bicicletas Asistidas</a></li>
                <li><a data-toggle="tab" href="#menu2"><i class="fa fa-bolt" aria-hidden="true"></i>Bicicletas de cajón</a></li>
            </ul> -->

            <div class="tab-content">

                <div id="bici1" class="tab-pane fade in active">
                    <div class="content">
                        <h3>Bicicletas Mecánicas</h3>
                        <!-- <p>Some content in menu 1.</p> -->
                        <div class='imagen-bici'>
                            <img class='img-responsive w-100' src='https://tembici.com.co/wp-content/uploads/2022/07/GIF-Bike-fit_sem-numero.gif' alt='' title=''>
                        </div>
                    </div>
                </div>
                <div id="bici2" class="tab-pane fade">
                    <div class="content">
                        <h3>Manocletas</h3>
                        <!-- <p>Some content in menu 2.</p> -->
                        <div class='imagen-bici'>
                            <img class='img-responsive w-100' src='https://tembici.com.co/wp-content/uploads/2022/08/Monocleta.jpg' alt='' title=''>
                        </div>
                    </div>
                </div>
                <div id="bici3" class="tab-pane fade">
                    <div class="content">
                        <h3>Bicicletas Asistidas</h3>
                        <!-- <p>Some content in menu 3.</p> -->
                        <div class='imagen-bici'>
                            <img class='img-responsive w-100' src='https://tembici.com.co/wp-content/uploads/2022/08/Layout-Bogota-2_eletrica.gif' alt='' title=''>
                        </div>
                    </div>
                </div>
                <div id="bici4" class="tab-pane fade">
                    <div class="content">
                        <h3>Bicicletas de Cajón</h3>
                        <!-- <p>Some content in menu 4.</p> -->
                        <div class='imagen-bici'>
                            <img class='img-responsive w-100' src='https://tembici.com.co/wp-content/uploads/2022/08/Bici-Cajon.jpg' alt='' title=''>
                        </div>
                    </div>
                </div>
                <div id="bici5" class="tab-pane fade">
                    <div class="content">
                        <h3>Estaciones</h3>
                        <!-- <p>Some content in menu 5.</p> -->
                        <div class='imagen-bici'>
                            <img class='img-responsive w-100' src='https://tembici.com.co/wp-content/uploads/2022/07/Gif-Estacao_Sem-Numero.gif' alt='' title=''>
                        </div>
                    </div>
                </div>
            </div>

            <style>
                .box-wrp .imagen-bici {
                    max-width: 60%;
                    margin: auto;
                }

                .box-contador .tab-content .tab-pane {}

                .box-contador .tab-content .tab-pane h3 {
                    text-align: center !important;
                    font-size: 34px;
                    font-weight: 500;
                    line-height: 1.3;
                    color: #0045dd;
                    padding: 32px;
                    border-bottom: solid 2px #f9008310;

                }
            </style>
        </div>
        <box class="video-ppal">
            <h3>Usar el Sistema de Bicicletas Compartidas es muy sencillo</h3>
            <div class='video'>
                <div class='embed-responsive embed-responsive-16by9'>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/NpEaa2P7qZI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </box>
        <style>
            .box-wrp .video-ppal h3 {
                background: #f90083;
                text-align: center !important;
                font-size: 34px;
                font-weight: 500;
                line-height: 1.3;
                color: #fff;
                margin: 0px;
                padding: 32px;
            }

            .box-wrp .video-ppal {
                text-align: center !important;
                font-size: 34px;
                font-weight: 500;
                line-height: 1.3;
                /* border-bottom: solid 2px #f9008310; */

            }

            .box-wrp .video-ppal .video {

                padding: 32px 32px 0px 32px;
                /* border-bottom: solid 2px #f9008310; */

            }
        </style>
        <div class="box-pasoPaso">
        </div>

        <div class="box-mapa">
            <iframe src="https://planurb.carto.com/builder/a09ef5b0-ca57-407e-93e2-22f400b18cde/embed#/" width="100%" height="500" frameborder="0" sandbox="allow-forms allow-scripts"></iframe>
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

    .biciCompartidas {
        max-width: 980px;
        margin: auto;
        word-break: break-word;
        word-wrap: break-word;
        font-family: 'Assistant', sans-serif;
        font-size: 16px;
        font-weight: 400;
        text-align: justify;
        line-height: 1.4;
        color: rgba(25, 25, 25, 1);
    }

    /*
    .biciCompartidas [class*='col-'] {
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

    .zoom {
        transition: 0.5s ease;
        -moz-transition: 0.5s ease;
        /* Firefox */
        -webkit-transition: 0.5s ease;
        /* Chrome - Safari */
        -o-transition: 0.5s ease;
        /* Opera */
        -ms-transition: 0.5s ease;
    }

    .zoom:hover {
        transform: scale(1.05);
        -moz-transform: scale(1.05);
        /* Firefox */
        -webkit-transform: scale(1.05);
        /* Chrome - Safari */
        -o-transform: scale(1.05);
        /* Opera */
        -ms-transform: scale(1.05);

    }

    /* IE9 */
</style>
<!-- End Styles -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    new WOW().init();
</script>
