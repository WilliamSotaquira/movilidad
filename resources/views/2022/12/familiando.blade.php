@extends('welcome')
@section('contenido')

<!-- familiando -->
<link href="https://www.dafontfree.net/embed/aXRjLXNvdXZlbmlyLWJvbGQmZGF0YS81MS9pLzIwNTI1L1NvdXZlbmlyLUJvbGQub3Rm" rel="stylesheet" type="text/css" />

<!-- Styles -->
<style type='text/css'>
    :root {
        --color-primario: #FF885F;
        --color-secundario: #FFF5D0;
        --color-terciario: #FFF9E6;
        --color-cuaternario: #fdce66;
        --color-quinario: #3db783;
        --color-sextario: #e95173;
        --color-gris: #e5e5e5;
        --color-blanco: #ffffff;
        --color-negro: #191919;
        --color-fondo: #333333;
    }

    .field-item.even h2 {
        visibility: hidden;
        margin-top: -50px;
    }

    .region-content {
        padding: 0px;
        overflow: hidden;
    }

    .w-100 {
        width: 100%;
    }

    .familiando {
        max-width: 980px;
        margin: auto;
        padding-bottom: 20px;
        word-break: break-word;
        word-wrap: break-word;
    }
</style>
<!-- End Styles -->

<!-- Set Wrapper -->
<div class='container-fluid familiando'>
    <div class='set-wrapper'>


        <!-- Sección box header -->
        <div class="box-header">
            <div class="gph gph-1">
                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-12-2022/recurso2.png">
            </div>
            <div class="gph gph-2">
                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-12-2022/recurso3.png">
            </div>
            <div class="gph gph-3">
                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-12-2022/recurso4.png">
            </div>
            <div class="gph gph-4">
                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-12-2022/recurso5.png">
            </div>

        </div>
        <style>
            .set-wrapper .box-header {
                grid-area: box-header;
                position: relative;
                background: var(--color-secundario) url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-12-2022/recurso1.png') no-repeat center / cover;
                height: 600px;
            }

            .box-header .gph-1 {
                position: absolute;
                max-width: 100%;
                border-top: 80px solid var(--color-primario);
            }

            .box-header .gph-2 {
                position: absolute;
                top: 20px;
                right: calc(50% - 150px);
                max-width: 300px;
                transition: all 1s ease-in;

            }

            .box-header .gph-3 {
                position: absolute;
                bottom: 80px;
                left: calc(50% - 150px);
                max-width: 300px;
                transition: all 1s ease-in;
            }

            .box-header .gph-4 {
                position: absolute;
                bottom: 0px;
                right: calc(50% - 150px);
                max-width: 300px;
                transition: all 1s ease-in;

            }

            @media(min-width:500px) {
                .box-header .gph-2 {
                    position: absolute;
                    top: 40px;
                    right: calc(50% - 150px);
                    max-width: 300px;
                }

                .box-header .gph-3 {
                    position: absolute;
                    bottom: 0px;
                    left: 0px;
                    max-width: 340px;
                }

                .box-header .gph-4 {
                    position: absolute;
                    bottom: 0px;
                    right: 0px;
                    max-width: 340px;
                }
            }

            @media(min-width:768px) {
                .box-header .gph-2 {
                    position: absolute;
                    right: 56px;
                    top: 56px;
                    max-width: 40%;
                }

                .box-header .gph-3 {
                    position: absolute;
                    bottom: 0px;
                    left: 0px;
                    max-width: 470px;
                }

                .box-header .gph-4 {
                    position: absolute;
                    bottom: 0px;
                    right: 0px;
                    max-width: 340px;
                }
            }

            @media(min-width:992px) {
                .box-header .gph-4 {
                    position: absolute;
                    bottom: 0px;
                    right: 80px;
                    max-width: 340px;
                }
            }
        </style>


        <!-- Sección box pdf -->
        <div class="box-pdf">

            <!-- PDF 4:3 aspect ratio -->
            <div class='embed-responsive embed-responsive-4by3'>
                <iframe src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-12-2022/portafoliofamilias_20221207.pdf' width='640' height='480' allow='autoplay'></iframe>
            </div>

        </div>
        <style>
            .set-wrapper .box-pdf {
                grid-area: box-pdf;
                background: var(--color-quinario);
                visibility: hidden;
                transition: all 1s ease-in;
                position: absolute;
            }
            @media(min-width:768px){
                .set-wrapper .box-pdf {
                visibility: visible;
                padding: 3em;
                position: relative;
            }
            }
            @media(min-width:992px){}
        </style>


        <!-- Sección box boton -->
        <div class="box-boton">
            <div class="boton">
                <a href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-12-2022/portafoliofamilias_20221207.pdf' download="">Descargue aquí el <strong>Portafolio de trámites y servicios dirigido a las familias de Bogotá</strong></a>

            </div>
        </div>
        <style>
            .set-wrapper .box-boton {
                grid-area: box-boton;
                background: var(--color-sextario);
                padding: 32px;
            }
            .box-boton .boton{
                max-width: 300px;
                margin: auto;
                background: var(--color-cuaternario);
                padding: 16px;
                text-align: center;
                transition: all 0.4s ease-in;



            }
            .box-boton .boton a{
                text-align: center;
                font-size: 18px;
                font-weight: 500;
                text-align: center;
                line-height: 1.3;
                color: var(--color-negro);
                text-decoration: none !important;

            }

            .box-boton .boton:hover{
                background: var(--color-fondo);
                -webkit-box-shadow: inset 5px 5px 15px 5px rgba(0, 0, 0, 0.16);
                box-shadow: inset 5px 5px 15px 5px rgba(0, 0, 0, 0.16);
                border-radius: 15px;
            }

            .box-boton .boton:hover a{
                color: var(--color-blanco);
            }
        </style>




    </div>
    <style>
        .set-wrapper h3 {
            font-family: itc-souvenir-bold, sans-serif !important;

        }
    </style>
</div>
<br>
<!-- End Set Wrapper -->
<!-- End familiando  -->
