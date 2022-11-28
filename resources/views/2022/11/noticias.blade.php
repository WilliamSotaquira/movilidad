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
                display: grid;
                align-content: center;
                padding: 8px;
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

                .box-noticias .title-h2 h2 {
                    font-size: 22px;
                    font-weight: 700;
                    color: var(--color-primario);
                    text-transform: uppercase;
                    margin-top: 8px;
                    margin-bottom: 16px;
                    padding-bottom: 8px;
                    border-bottom: solid 1px var(--color-primario);
                }
            </style>


            <div class="box-noticia ">
                <h3>Noticia 1 </h3>
                <i>Fecha desde hasta</i>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta et voluptatem voluptatum fuga ipsum nemo. <strong>(ver más)</strong></p>
            </div>
            <div class="box-noticia">
                <h3>Noticia 2 </h3>
                <i>Fecha desde hasta</i>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A quas quasi facilis, saepe animi rem molestiae quam. <strong>(ver más)</strong></p>
            </div>
            <div class="box-noticia">
                <h3>Noticia 3 </h3>
                <i>Fecha desde hasta</i>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime culpa, libero asperiores sunt labore id at! <strong>(ver más)</strong></p>
            </div>


            <style>
                .box-noticias .box-noticia {
                    /* grid-area: box-noticia; */
                    padding: 8px;
                    border-radius: 4px;
                    border: solid 2px transparent;


                }

                .box-noticias .box-noticia:hover {
                    /* grid-area: box-noticia; */
                    background-color: #e5e5e5;
                    -webkit-box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.5);
                    box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.5);
                    border: solid 2px var(--color-gris);

                }
            </style>


        </div>
        <style>
            .set-wrapper .box-noticias {
                grid-area: box-noticias;
                padding: 2em;
                display: grid;
                gap: 4px;
                grid-auto-flow: dense;
                grid-template-columns: 1fr;
                grid-template-rows: auto;
            }

            .box-noticia h3 {
                margin: 0px;
            }

            .box-noticia p {
                margin: 0px;
            }
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
