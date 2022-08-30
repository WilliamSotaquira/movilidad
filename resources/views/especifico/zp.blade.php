@extends('welcome')
@section('contenido')
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fuente Montserrat -----  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<link rel='preconnect' href='https://fonts.googleapis.com'>
<link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
<link href='https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap' rel='stylesheet'>
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin Fuente Montserrat -  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<!-- Set Wrapper -->
<div class='container-fluid zp'>
    <div class='box-wrp'>
        <div class='box-head'></div>
        <div class="box-transicion">

            <div class="btn-transicion zoom">
                <a data-toggle="tab" href="#menu1">
                    <div class='imagen'>
                        <img class='img-responsive' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/26-08-2022/economico.png' alt='' title=''>
                    </div>
                    <div class="titulo">
                        <h3>
                            Con incentivos económicos y no económicos ¡Conoce los beneficios!
                        </h3>
                    </div>
                </a>
            </div>

            <div class="btn-transicion zoom">
                <a data-toggle="tab" href="#menu2">
                    <div class='imagen'>
                        <img class='img-responsive' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/26-08-2022/economico.png' alt='' title=''>
                    </div>
                    <div class="titulo">
                        <h3>
                            Con infraestructura de recarga ¡Conoce dónde recargar!
                        </h3>
                    </div>
                </a>
            </div>

            <div class="btn-transicion zoom">
                <a data-toggle="tab" href="#menu3">
                    <div class='imagen'>
                        <img class='img-responsive' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/26-08-2022/economico.png' alt='' title=''>
                    </div>
                    <div class="titulo">
                        <h3>
                            Con más información y nuevas capacidades ¡Conoce estos recursos!
                        </h3>
                    </div>
                </a>
            </div>

            <div class="btn-transicion zoom">
                <a data-toggle="tab" href="#menu4">
                    <div class='imagen'>
                        <img class='img-responsive' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/26-08-2022/economico.png' alt='' title=''>
                    </div>
                    <div class="titulo">
                        <h3>
                            Con alianzas y acciones de tod@s ¡Únete aquí!
                        </h3>
                    </div>
                </a>
            </div>

        </div>
        <hr>
        <style>
            .box-transicion {
                display: grid;
                gap: 15px;
                grid-auto-flow: dense;
                grid-template-columns: 1fr;
                grid-template-rows: auto;
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

            .box-transicion a {
                text-decoration: none !important;
            }

            .btn-transicion .imagen {

            }

            .btn-transicion .imagen img {
                max-width: 180px;
                margin: auto;
                padding: 15px;
            }

            .btn-transicion .titulo {
                padding: 0px 15px 10px 15px;
            }

            .btn-transicion .titulo h3 {
                font-size: 18px;
                font-weight: 700;
                text-align: center;
                line-height: 1.2;
                color: rgba(25, 25, 25, 1);
                margin: 8px;
            }

            .btn-transicion:hover{
                background-color: #d5d5d5;
            }

           .btn-transicion:hover a,
           .btn-transicion:focus a,
           .btn-transicion:visited a{
                background-color: rgba(25, 28, 58, 1) !important;
            }
 
            @media(max-width:767px) {}

            @media(min-width:768px) {
                .box-transicion {
                    grid-template-columns: repeat(2, 1fr);
                }
            }

            @media(min-width:992px) {}

            @media(min-width:1200px) {}
        </style>

        <div class="tab-content">

            <div id="menu1" class="tab-pane fade in active">
                <h3>Menu 1</h3>
                <p>Some content in menu 1.</p>
            </div>
            <div id="menu2" class="tab-pane fade">
                <h3>Menu 2</h3>
                <p>Some content in menu 2.</p>
            </div>
            <div id="menu3" class="tab-pane fade">
                <h3>Menu 3</h3>
                <p>Some content in menu 3.</p>
            </div>
            <div id="menu3" class="tab-pane fade">
                <h3>HOME</h3>
                <p>Some content in menu 4.</p>
            </div>
        </div>

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

    .zp {
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
    .zp [class*='col-'] {
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