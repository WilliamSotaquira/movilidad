@extends('welcome')
@section('contenido')

<!-- noticia -->
<!-- Styles -->
<style type='text/css'>
    :root {
        --color-primario: #4c531e;
        --color-secundario: #879225;
        --color-terciario: #bed000;
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

    .noticia {
        max-width: 980px;
        margin: auto;
        padding-bottom: 20px;
        word-break: break-word;
        word-wrap: break-word;
    }
</style>
<!-- End Styles -->

<!-- Set Wrapper -->
<div class='container-fluid noticia'>
    <div class='set-wrapper'>

        <!-- Sección box video -->
        <div class="box-video">
            <div class='video video-ppal video-4by3'>
                <div class='embed-responsive embed-responsive-4by3'>
                    <iframe width='100%' src='https://www.youtube.com/embed/y6p8cYbbZWI' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <style>
            .set-wrapper .box-video {
                grid-area: box-video;
            }
        </style>


        <!-- Sección box noticias -->
        <div class="box-noticias">

            <div class="title title-h2">
                <h2>Lo ultimo</h2>
            </div>
            <style>
                .box-noticias .title-h2 {
                    /* grid-area: cpte-titulo; */
                }
            </style>


            <div class="box-noticia">
                <h3>Noticia 1 </h3>
                <i>Fecha desde hasta</i>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Totam eius quam iure adipisci error impedit placeat odit, eum minus, omnis minima sit. Itaque facilis modi ea nulla voluptates tenetur voluptate.</p>
            </div>
            <div class="box-noticia">
                <h3>Noticia 1 </h3>
                <i>Fecha desde hasta</i>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Totam eius quam iure adipisci error impedit placeat odit, eum minus, omnis minima sit. Itaque facilis modi ea nulla voluptates tenetur voluptate.</p>
            </div>
            <div class="box-noticia">
                <h3>Noticia 1 </h3>
                <i>Fecha desde hasta</i>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Totam eius quam iure adipisci error impedit placeat odit, eum minus, omnis minima sit. Itaque facilis modi ea nulla voluptates tenetur voluptate.</p>
            </div>


            <style>
                .box-noticias .box-noticia {
                    /* grid-area: box-noticia; */
                }
            </style>


        </div>
        <style>
            .set-wrapper .box-noticias {
                grid-area: box-noticias;
                display: grid;
                gap: 8px;
                grid-auto-flow: dense;
                grid-template-columns: 1fr;
                grid-template-rows: auto;

        </style>


    </div>
    <style>
        .set-wrapper {
            display: grid;
            gap: 8px;
            grid-auto-flow: dense;
            grid-template-columns: 1fr;
            grid-template-rows: auto;
            grid-template-areas:
                'box-video'
                'box-noticias';
        }

        @media(min-width:768px) {
            .set-wrapper {
                grid-template-columns: 1fr 1fr;
                grid-template-areas:
                    'box-video box-noticias';

            }
        }

        @media(min-width:992px) {}
    </style>
</div>
<br>
<!-- End Set Wrapper -->
<!-- End noticia  -->
