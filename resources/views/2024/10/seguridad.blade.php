@extends('welcome')
@section('title','seguridad')
@section('contenido')

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

<!-- Set seguridad -->
<style>
    .field-item.even .centertil {
        visibility: hidden;
        margin-top: -50px;
    }

    .set-wrapper.seguridad {
        max-width: 940px;
        font-family: 'Montserrat', sans-serif;
        font-weight: normal;
        font-size: clamp(12px, 3vw + 2rem, 15px);
        color: #4c4c4cff;

        & .title {
            font-weight: bold;
            font-size: clamp(14px, 3vw + 2rem, 24px);
            margin-bottom: 16px;
            color: #4c4c4cff;
            line-height: 1.2;
        }

        & .paragraph {
            font-weight: 500;
            font-size: clamp(12px, 3vw + 2rem, 15px);
            color: #4c4c4cff;

        }
    }

    .seguridad .dual {
        grid-column: span 2;
    }
</style>
<div class="set-wrapper seguridad">

    <style>
        .seguridad .cpnt-1 {
            position: relative;
        }

        .seguridad .cpnt-1 .img-1 {
            margin: auto;
        }

        .seguridad .cpnt-1 .img-1 img {
            width: 100%;
            background-size: contain;
        }

        .seguridad .cpnt-1 .span-title {
            position: absolute;
            bottom: 0px;
        }

        .seguridad .cpnt-1 .span-title .title-1 {
            font-family: 'Montserrat', sans-serif;
            font-weight: bold;
            font-size: clamp(2rem, 3vw + 2rem, 5rem);
            margin: 0px;
            padding: 32px;
            color: #ffffff;
        }

        .seguridad .cpnt-1 .logo-1 {
            position: absolute;
            top: 0px;

            right: 0px;
            margin: 0px;
            padding: 32px;

            & img {
                max-width: 60px;

                @media(min-width:768px) {
                    max-width: 110px;
                }

            }
        }
    </style>
    <div class="cpnt cpnt-1">
        <picture>
            <source media="(min-width: 465px)" srcset="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/11-10-2024/portada_ms.png">
            <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/11-10-2024/portada_xs_ms.png" class="img-responsive w-100" alt="Mujer sostiene en sus manos un un portaretrato" title="Movilidad Segura">
        </picture>
        <span class="span-title">
            <h3 class="title title-1">Movilidad Segura</h3>
        </span>
        <div class="logo logo-1">
            <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/09-10-2024/micasa_logo_ms.png" alt="logo mi casa">
        </div>
    </div>

    <style>
        .seguridad .cpnt-2 {
            display: grid;
            gap: 8px;
            grid-auto-flow: dense;
            grid-template-columns: 1fr;
            grid-template-rows: auto;

            & .summary {
                padding: 8px;
            }

            & .summary .paragraph {
                text-align: justify;
            }

            @media(min-width:768px) {
                grid-template-columns: 1fr 1fr;
                padding: 32px 64px 32px 64px;
                column-gap: 32px;

                & .summary {
                    padding: 0px;
                }

                & .img-1 {
                    max-width: 400px;
                    margin: auto;
                }
            }
        }
    </style>
    <div class="cpnt cpnt-2">
        <div class="summary">
            <h3 class="title title-1">Campañas de cambio de <br> comportamiento</h3>
            <p class="paragraph ph-1">Movernos de manera segura y llegar sanos y salvos a nuestro destino debe ser una prioridad para todos. Por eso dispusimos de este espacio donde encontrarás las campañas de cambio de comportamiento que ha implementado Bogotá en alianza con la iniciativa Bloomberg para la Seguridad Vial Mundial (BIGRS), y su socio Vital Strategies, en un trabajo conjunto de casi una década.</p>
            <p class="paragraph ph-1">Estas campañas se realizan bajo las mejores prácticas a nivel internacional avaladas por la Organización mundial de la salud para la construcción de mensajes efectivos que han probado ser útiles a nivel internacional para cambiar el comportamiento riesgoso en la vía.</p>
            <p class="paragraph ph-1">Para salvar vidas, necesitamos cambiar los comportamientos riesgosos en las vías. ¡Te invitamos a compartir nuestro contenido!</p>
        </div>
        <div class="imagen img-1">
            <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/11-10-2024/50_ms.png" alt="Señal horizontal limite de velocidad 50 km/h" title="Señal horizontal limite de velocidad 50 km/h">
        </div>
    </div>

    <style>
        .cpnt-3 {
            margin-top: 32px;
        }

        .card {
            display: none;
            position: relative;

            & .lashing {
                display: grid;
                grid-template-columns: 1fr;
                align-items: center;
                justify-content: center;

                @media(min-width:768px) {
                    grid-template-columns: 1fr 1fr;
                    column-gap: 32px;
                    padding: 32px;
                    margin-left: 60px;
                }

                & .summary-card {

                    margin-top: 22px;

                    & .year-summary {
                        background: #828F26;
                        display: inline-block;

                        & .paragraph {
                            color: #ffffff;
                            margin: 4px 16px;
                        }
                    }

                    & .title-summary {
                        position: relative;

                        background-color: #BED000;
                        padding: 12px;
                        max-width: 75%;
                        left: 0;
                        margin-top: 16px;
                        padding-left: 0px;
                        margin-left: 0px;


                        @media(min-width:768px) {
                            padding-left: 94px;
                            margin-left: -92px;
                            max-width: 500px;
                            z-index: 1;

                        }

                    }

                    & .description-summary {
                        margin-top: 24px;

                        & .paragraph {
                            text-align: justify;
                        }
                    }

                    & .line-summary {
                        visibility: hidden;
                        position: absolute;

                        @media(min-width:768px) {
                            visibility: visible;
                            width: 16px;
                            height: 100%;
                            position: absolute;
                            top: 0;
                            clip-path: inset(0% 0% 0% 0%);
                            z-index: 0;
                            margin-left: -50px;



                        }
                    }

                }

                & .collage-card {
                    margin-top: 16px;
                    margin-bottom: 16px;
                    display: flex;
                    gap: 16px;
                    flex-wrap: wrap-reverse;
                    justify-content: space-evenly;

                    & .video {
                        display: block;
                        max-width: 150px;
                        width: 120px;
                    }
                }
            }

        }

        /* Clear floats after rows */
        .grid-buttons {
            display: flex;
            margin-bottom: 16px;
        }

        .cards-campaigns .card:nth-child(odd) {
            background: #ecececff;
        }

        .cards-campaigns:after {
            content: "";
            display: table;
            clear: both;
        }

        /* The "show" class is added to the filtered elements */
        .show {
            display: block;
        }

        /* Style the buttons */
        .btn {
            border: none;
            outline: none;
            padding: 12px 16px;
            background-color: white;
            cursor: pointer;
        }

        /* Add a dark background color to the active button */
        .btn.active {
            background-color: #BED000;
            color: #4d541f;
        }

        /* Add a grey background color on mouse-over */
        .btn:hover {
            background-color: #4d541f;
            color: #ffffff !important;
        }
    </style>
    <div class="cpnt cpnt-3">
        <div class="grid-buttons">
            <button class="btn active" onclick="filterSelection('todas')"> Mostrar todos</button>
            <button class="btn" onclick="filterSelection('embriaguez')"> Embriaguez</button>
            <button class="btn" onclick="filterSelection('velocidad')"> Velocidad</button>
        </div>
        <div class="cards-campaigns">

            <div class="card card-embriaguez embriaguez">
                <div class="lashing">
                    <div class="summary-card">
                        <div class="year-summary">
                            <p class="paragraph ph-1">2023</p>
                        </div>
                        <div class="title-summary">
                            <h4 class="title title-1">No tomes si vas a manejar <br>¡No más muertes en las vías!</h4>
                        </div>
                        <div class="description-summary">
                            <p class="paragraph ph-1"><b>Factor de riesgo: Embriaguez</b></p>
                            <p class="paragraph ph-1">Esta campaña hizo parte del plan de Seguridad Vial para las festividades decembrinas del año 2023 en Bogotá. Tuvo como objetivo evidenciar las consecuencias de conducir bajo los efectos de bebidas alcohólicas, reflejando situaciones que se den en dicho contexto como el exceso de velocidad, la falta de control del vehículo y la pérdida de coordinación a la hora de conducir.</p>
                        </div>
                        <div class="line-summary">
                            <div class="logo logo-1">
                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/10-10-2024/line_a.png" alt="logo line">
                            </div>
                        </div>
                    </div>
                    <div class="video-card">
                        <div class="video video-1 video-16by9">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe width='100%' src='https://www.youtube.com/embed/7hWFsPvngVI' title='YouTube video player' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card card-velocidad velocidad">
                <div class="lashing">
                    <div class="summary-card">
                        <div class="year-summary">
                            <p class="paragraph ph-1">2023</p>
                        </div>
                        <div class="title-summary">
                            <h4 class="title title-1">No tenía que pasar</h4>
                        </div>
                        <div class="description-summary">
                            <p class="paragraph ph-1"><b>Factor de riesgo: Velocidad</b></p>
                            <p class="paragraph ph-1">Esta campaña tuvo como objetivo principal crear conciencia sobre las graves consecuencias de exceder los límites de velocidad. En ella, familiares de jóvenes motociclistas que fallecieron en siniestros viales, hacen un llamado a los conductores de moto sobre los riesgos a los que están expuestos si sobrepasan los límites de velocidad. La campaña fue replicada a nivel nacional dado que se realizó gracias al trabajo conjunto de las Secretarías de Movilidad de Bogotá y Cali, la Agencia Nacional de Seguridad Vial, la iniciativa Bloomberg para la Seguridad Vial Mundial (BIGRS), y su socio Vital Strategies.</p>
                        </div>
                        <div class="line-summary">
                            <div class="logo logo-1">
                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/10-10-2024/line_b.png" alt="logo line">
                            </div>
                        </div>
                    </div>
                    <div class="video-card">
                        <div class="video video-1 video-16by9">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe width='100%' src='https://www.youtube.com/embed/2LQ2myHgs0A' title='YouTube video player' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="collage-card dual">
                        <div class='video video-1 video-16by9'>
                            <div class='embed-responsive embed-responsive-16by9'>
                                <iframe width='100%' src='https://www.youtube.com/embed/V0cW1_A3nOQ' title='YouTube video player' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class='video video-2 video-16by9'>
                            <div class='embed-responsive embed-responsive-16by9'>
                                <iframe width='100%' src='https://www.youtube.com/embed/g2ObNxXqZBc' title='YouTube video player' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class='video video-3 video-16by9'>
                            <div class='embed-responsive embed-responsive-16by9'>
                                <iframe width='100%' src='https://www.youtube.com/embed/YBvOw6U3B94' title='YouTube video player' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class='video video-4 video-16by9'>
                            <div class='embed-responsive embed-responsive-16by9'>
                                <iframe width='100%' src='https://www.youtube.com/embed/GAH_5p_6Y5Y' title='YouTube video player' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class='video video-5 video-16by9'>
                            <div class='embed-responsive embed-responsive-16by9'>
                                <iframe width='100%' src='https://www.youtube.com/embed/bhtIbxjUyH8' title='YouTube video player' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class='video video-6 video-16by9'>
                            <div class='embed-responsive embed-responsive-16by9'>
                                <iframe width='100%' src='https://www.youtube.com/embed/jStzrXkfcZw' title='YouTube video player' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="card card-velocidad Velocidad">
                <div class="lashing">
                    <div class="summary-card">
                        <div class="year-summary">
                            <p class="paragraph ph-1">2022</p>
                        </div>
                        <div class="title-summary">
                            <h4 class="title title-1">Tus acciones salvan vidas</h4>
                        </div>
                        <div class="description-summary">
                            <p class="paragraph ph-1"><b>Factor de riesgo: Velocidad</b></p>
                            <p class="paragraph ph-1">Esta campaña ilustra cómo el exceso de velocidad aumenta el riesgo de sufrir un siniestro y puede marcar la diferencia entre la vida y la muerte. El anuncio muestra a dos motociclistas que conducen en idénticas condiciones; la única diferencia es la velocidad a la que viajan.</p>
                        </div>
                        <div class="line-summary">
                            <div class="logo logo-1">
                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/10-10-2024/line_a.png" alt="logo line">
                            </div>
                        </div>
                    </div>
                    <div class="video-card">
                        <div class="video video-1 video-16by9">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe width='100%' src='https://www.youtube.com/embed/Bq7-rEv3Dpg' title='YouTube video player' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card card-velocidad Velocidad">
                <div class="lashing">
                    <div class="summary-card">
                        <div class="year-summary">
                            <p class="paragraph ph-1">2021</p>
                        </div>
                        <div class="title-summary">
                            <h4 class="title title-1">Bájale al acelere</h4>
                        </div>
                        <div class="description-summary">
                            <p class="paragraph ph-1"><b>Factor de riesgo: Velocidad</b></p>
                            <p class="paragraph ph-1">Esta campaña de Movilidad Segura desarrollada con el apoyo de la Iniciativa Bloomberg para la Seguridad Vial Mundial y su aliado Vital Strategies, se concentra en el testimonio de Juan Carlos Gil, un joven que perdió a su novia y parte de su pierna tras sufrir un siniestro de tránsito. En su relato, además de compartir lo sucedido, hace una reflexión sobre cómo el exceso de velocidad no les permite a los conductores reaccionar a tiempo y prevenir las consecuencias graves de los incidentes en la vía.</p>
                        </div>
                        <div class="line-summary">
                            <div class="logo logo-1">
                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/10-10-2024/line_a.png" alt="logo line">
                            </div>
                        </div>
                    </div>
                    <div class="video-card">
                        <div class="video video-1 video-16by9">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe width='100%' src='https://www.youtube.com/embed/v3dbdIYZBrs' title='YouTube video player' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card card-velocidad Velocidad">
                <div class="lashing">
                    <div class="summary-card">
                        <div class="year-summary">
                            <p class="paragraph ph-1">2019</p>
                        </div>
                        <div class="title-summary">
                            <h4 class="title title-1">Experimento social <br>velocidad en zonas residenciales</h4>
                        </div>
                        <div class="description-summary">
                            <p class="paragraph ph-1"><b>Factor de riesgo: Velocidad</b></p>
                            <p class="paragraph ph-1">La Secretaría de Movilidad de Bogotá, lanzó esta campaña de experimento social para mostrar la importancia de los límites de velocidad más bajos en áreas residenciales. Este concepto se desarrolló originalmente en Bangkok y se adaptó al contenido local en Bogotá. El anuncio de servicio público circuló en medios de comunicación en los años 2019 y 2021.</p>
                        </div>
                        <div class="line-summary">
                            <div class="logo logo-1">
                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/10-10-2024/line_a.png" alt="logo line">
                            </div>
                        </div>
                    </div>
                    <div class="video-card">
                        <div class="video video-1 video-16by9">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe width='100%' src='https://www.youtube.com/embed/ARyjdkX70NQ' title='YouTube video player' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card card-velocidad Velocidad">
                <div class="lashing">
                    <div class="summary-card">
                        <div class="year-summary">
                            <p class="paragraph ph-1">2019</p>
                        </div>
                        <div class="title-summary">
                            <h4 class="title title-1">¿Podrías vivir con esa culpa?</h4>
                        </div>
                        <div class="description-summary">
                            <p class="paragraph ph-1"><b>Factor de riesgo: Velocidad</b></p>
                            <p class="paragraph ph-1">Esta campaña de cambio de comportamiento muestra las graves consecuencias del exceso de velocidad, invitando a motociclistas a pensar en los sueños que se pueden destruir si se conduce por encima del límite de velocidad.</p>
                        </div>
                        <div class="line-summary">
                            <div class="logo logo-1">
                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/10-10-2024/line_a.png" alt="logo line">
                            </div>
                        </div>
                    </div>
                    <div class="video-card">
                        <div class="video video-1 video-16by9">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe width='100%' src='https://www.youtube.com/embed/lWIQ7QCxp8Q' title='YouTube video player' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card card-velocidad Velocidad">
                <div class="lashing">
                    <div class="summary-card">
                        <div class="year-summary">
                            <p class="paragraph ph-1">2018</p>
                        </div>
                        <div class="title-summary">
                            <h4 class="title title-1">Que el afán no destruya los sueños, bájale a la velocidad</h4>
                        </div>
                        <div class="description-summary">
                            <p class="paragraph ph-1"><b>Factor de riesgo: Velocidad</b></p>
                            <p class="paragraph ph-1">Bogotá lanzó la campaña mediática “Sueños” para disuadir a los conductores del exceso de velocidad. El anuncio de servicio público ilustra las consecuencias mortales del exceso de velocidad, especialmente para los niños y los ancianos y se difundió por televisión y radio. Esta campaña se coordinó con los esfuerzos de aplicación de la ley.</p>
                        </div>
                        <div class="line-summary">
                            <div class="logo logo-1">
                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/10-10-2024/line_a.png" alt="logo line">
                            </div>
                        </div>
                    </div>
                    <div class="video-card">
                        <div class="video video-1 video-16by9">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe width='100%' src='https://www.youtube.com/embed/o9H0jJcWS70' title='YouTube video player' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card card-velocidad Velocidad">
                <div class="lashing">
                    <div class="summary-card">
                        <div class="year-summary">
                            <p class="paragraph ph-1">2017</p>
                        </div>
                        <div class="title-summary">
                            <h4 class="title title-1">Errores</h4>
                        </div>
                        <div class="description-summary">
                            <p class="paragraph ph-1"><b>Factor de riesgo: Velocidad</b></p>
                            <p class="paragraph ph-1">Esta campaña de Bogotá se inspiró en la exitosa campaña “Errores” de Nueva Zelanda que cuestiona la falsa idea de que los conductores tienen la habilidad suficiente para exceder la velocidad sin consecuencias. La campaña se coordinó con una fuerte aplicación de la ley para impulsar el cambio de comportamiento.</p>
                        </div>
                        <div class="line-summary">
                            <div class="logo logo-1">
                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/10-10-2024/line_a.png" alt="logo line">
                            </div>
                        </div>
                    </div>
                    <div class="video-card">
                        <div class="video video-1 video-16by9">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe width='100%' src='https://www.youtube.com/embed/teyVENoiRCI' title='YouTube video player' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card card-embriaguez embriaguez">
                <div class="lashing">
                    <div class="summary-card">
                        <div class="year-summary">
                            <p class="paragraph ph-1">2016</p>
                        </div>
                        <div class="title-summary">
                            <h4 class="title title-1">Tomar y manejar arruina vidas</h4>
                        </div>
                        <div class="description-summary">
                            <p class="paragraph ph-1"><b>Factor de riesgo: Embriaguez</b></p>
                            <p class="paragraph ph-1">Esta campaña destaca el impacto devastador de la conducción bajo los efectos del alcohol en las familias. La campaña se llevó a cabo en Bogotá alrededor de la temporada navideña de 2016 y se vio reforzada por una mayor aplicación de la ley.</p>
                        </div>
                        <div class="line-summary">
                            <div class="logo logo-1">
                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/10-10-2024/line_a.png" alt="logo line">
                            </div>
                        </div>
                    </div>
                    <div class="video-card">
                        <div class="video video-1 video-16by9">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe width='100%' src='https://www.youtube.com/embed/W1q8M7JA3SQ' title='YouTube video player' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card card-embriaguez embriaguez">
                <div class="lashing">
                    <div class="summary-card">
                        <div class="year-summary">
                            <p class="paragraph ph-1">2015</p>
                        </div>
                        <div class="title-summary">
                            <h4 class="title title-1">Tomar y manejar</h4>
                        </div>
                        <div class="description-summary">
                            <p class="paragraph ph-1"><b>Factor de riesgo: Embriaguez</b></p>
                            <p class="paragraph ph-1">La campaña fue una adaptación de un anuncio realizado originalmente en el norte del Reino Unido y demostró ser muy eficaz para influir en las actitudes del público y cambiar el comportamiento. La campaña se llevó a cabo en coordinación con las actividades de aplicación de la ley.</p>
                        </div>
                        <div class="line-summary">
                            <div class="logo logo-1">
                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/10-10-2024/line_a.png" alt="logo line">
                            </div>
                        </div>
                    </div>
                    <div class="video-card">
                        <div class="video video-1 video-16by9">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe width='100%' src='https://www.youtube.com/embed/t36QXBVuJ3Y' title='YouTube video player' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <script>
        filterSelection("todas")

        function filterSelection(c) {
            var x, i;
            x = document.getElementsByClassName("card");
            if (c == "todas") c = "";
            for (i = 0; i < x.length; i++) {
                w3RemoveClass(x[i], "show");
                if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
            }
        }

        // Show filtered elements
        function w3AddClass(element, name) {
            var i, arr1, arr2;
            arr1 = element.className.split(" ");
            arr2 = name.split(" ");
            for (i = 0; i < arr2.length; i++) {
                if (arr1.indexOf(arr2[i]) == -1) {
                    element.className += " " + arr2[i];
                }
            }
        }

        // Hide elements that are not selected
        function w3RemoveClass(element, name) {
            var i, arr1, arr2;
            arr1 = element.className.split(" ");
            arr2 = name.split(" ");
            for (i = 0; i < arr2.length; i++) {
                while (arr1.indexOf(arr2[i]) > -1) {
                    arr1.splice(arr1.indexOf(arr2[i]), 1);
                }
            }
            element.className = arr1.join(" ");
        }

        // Add active class to the current button (highlight it)
        var btnContainer = document.querySelector(".grid-buttons");
        var btns = btnContainer.getElementsByClassName("btn");
        for (var i = 0; i < btns.length; i++) {
            btns[i].addEventListener("click", function() {
                var current = document.getElementsByClassName("active");
                current[0].className = current[0].className.replace(" active", "");
                this.className += " active";
            });
        }
    </script>

    <style>
        .seguridad .cpnt-4 {
            background-color: #BED000;
            display: grid;
            gap: 16px;
            grid-auto-flow: dense;
            grid-template-columns: 1fr;
            grid-template-rows: auto;
            padding: 16px;
            justify-content: center;
            align-items: center;

            @media(min-width:768px) {
                grid-template-columns: 30% 70%;
                padding: 8px 32px;
            }
        }

        .seguridad .cpnt-4 .text-aliados {
            border-bottom: #4d541f solid 4px;
            padding: 12px;

            @media(min-width:768px) {
                border-right: #4d541f solid 4px;
                border-bottom: none;

            }
        }

        .cpnt-4 .logos-aliados {

            display: flex;
            gap: 16px;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;


            @media(min-width:768px) {
                padding: 24px;
            }

            & .logo {
                margin: auto;
            }

            & .logo img {
                background-size: contain;
                height: 40px;
            }
        }
    </style>
    <div class="cpnt cpnt-4">
        <div class="text-aliados">
            <h3 class="title title-1">Nuestros Aliados</h3>
        </div>
        <div class="logos-aliados">
            <div class="logo logo-1">
                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/09-10-2024/bloomberg_logo_ms.png" alt="logo Bloomberg">
            </div>
            <div class="logo logo-2">
                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/09-10-2024/vital_logo_ms.png" alt="logo Vital Strategies">
            </div>
        </div>
    </div>

    <style>
        .seguridad .cpnt-5 {
            display: grid;
            gap: 16px;
            grid-auto-flow: dense;
            grid-template-columns: 1fr;
            grid-template-rows: auto;
            padding: 16px;
            justify-content: center;
            align-items: center;

            @media(min-width:768px) {
                grid-template-columns: 1fr 1fr;
                padding: 32px;
            }

            & .text-herramientas {
                padding: 12px;

                & .text {
                    padding: 12px;
                }

                & .paragraph {
                    text-align: justify;
                }

                & .boton {
                    padding: 12px;
                    max-width: 300px;
                    margin: auto;
                }



            }

            & .caratula-herramientas {
                padding: 12px;

                & .imagen {
                    max-width: 300px;
                    margin: auto;
                }
            }


        }
    </style>
    <div class="cpnt cpnt-5">
        <div class="text-herramientas">
            <div class="text">
                <h3 class="title title-1">Herramientas para las campañas de Seguridad Vial en los medios de difusión masiva:</h3>
                <p class="paragraph ph-1">Descarga la guía de campañas para Seguridad Vial realizada por la Organización Mundial para la Salud con el apoyo de Bloomberg Philanthropies.</p>
            </div>
            <div class="boton">
                <a href="">
                    <div class="imagen img-1">
                        <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/09-10-2024/boton_ms.png" alt="Botón descarga" title="Botón descarga">
                    </div>
                </a>
            </div>

        </div>
        <div class="caratula-herramientas">
            <div class="imagen img-1">
                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/09-10-2024/caratula_ms.png" alt="Caratula herramientas" title="Caratula herramientas">
            </div>

        </div>

    </div>

</div>
<!-- Fin Set -->
