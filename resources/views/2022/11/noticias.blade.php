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
    <div class='set-noticias'>

        <!-- Sección box video -->
        <div class="box-video">
            <div class='video video-ppal video-4by3'>
                <div class='embed-responsive embed-responsive-4by3'>
                    <iframe width='100%' src='https://www.youtube.com/embed/y6p8cYbbZWI' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <style>
            .set-noticias .box-video {
                grid-area: box-video;
                display: grid;
                align-content: center;
                padding: 8px;
            }
        </style>


        <!-- Sección box noticias -->
        <div class="box-noticias">

            <div class="title title-h2">
                <h2>Noticias</h2>
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

            <a href="https://www.movilidadbogota.gov.co/web/noticia/la_ciudad_se_consolida_como_un_referente_mundial_en_el_uso_y_promocion_de_la_bicicleta" target="_blank" rel="noopener noreferrer">
                <div class="box-noticia ">
                    <h3>La ciudad se consolida como un referente mundial en el uso y promoción de la bicicleta</h3>
                    <i>Miércoles, Enero 4, 2023 - 11:11</i>
                    <strong><a href="https://www.movilidadbogota.gov.co/web/noticia/la_ciudad_se_consolida_como_un_referente_mundial_en_el_uso_y_promocion_de_la_bicicleta" target="_blank" rel="noopener noreferrer">(ver más)</a></strong>
                </div>
            </a>
            <a href="https://www.movilidadbogota.gov.co/web/noticia/zonas_urbanas_por_un_mejor_aire_estrategia_para_reducir_concentraciones_atmosfericas_en" target="_blank" rel="noopener noreferrer">
                <div class="box-noticia ">
                    <h3>Zonas Urbanas por un Mejor Aire: estrategia para reducir concentraciones atmosféricas en áreas específicas de Bogotá</h3>
                    <i>Lunes, Diciembre 19, 2022 - 07:44</i>
                    <strong><a href="https://www.movilidadbogota.gov.co/web/noticia/zonas_urbanas_por_un_mejor_aire_estrategia_para_reducir_concentraciones_atmosfericas_en" target="_blank" rel="noopener noreferrer">(ver más)</a></strong>
                </div>
            </a>
            <a href="https://www.movilidadbogota.gov.co/web/noticia/la_secretaria_de_movilidad_expone_su_estrategia_bogota_capital_mundial_de_la_bici_en_bicigo" target="_blank" rel="noopener noreferrer">
                <div class="box-noticia ">
                    <h3>La Secretaría de Movilidad expone su estrategia Bogotá Capital Mundial de la Bici, en biciGO 2022</h3>
                    <i>Jueves, Diciembre 1, 2022 - 14:44</i>
                    <strong><a href="https://www.movilidadbogota.gov.co/web/noticia/la_secretaria_de_movilidad_expone_su_estrategia_bogota_capital_mundial_de_la_bici_en_bicigo" target="_blank" rel="noopener noreferrer">(ver más)</a></strong>
                </div>
            </a>

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

                .box-noticia h3 {
                    display: -webkit-box;
                    -webkit-box-orient: vertical;
                    -webkit-line-clamp: 3;
                    line-clamp: 3;
                    overflow: hidden;
                    font-size: 1.4em;
                    color: var(--color-negro);
                }

                .box-noticia p {
                    display: -webkit-box;
                    -webkit-box-orient: vertical;
                    -webkit-line-clamp: 2;
                    line-clamp: 2;
                    overflow: hidden;
                }
            </style>
          </div>
        <style>
            .set-noticias .box-noticias {
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
        .set-noticias {
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
            .set-noticias {
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
