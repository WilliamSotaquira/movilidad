@extends('welcome')
@section('title','peaton')
@section('contenido')

<!-- Google fonts - Montserrat  -->
<link rel='preconnect' href='https://fonts.googleapis.com'>
<link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
<link href='https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap' rel='stylesheet'>


<!-- Set peaton -->
<div class="set-wrapper peaton">

    <!-- bloque box encabezado-->
    <div class="box box-encabezado">
        <div class="cmpnt cmpnt-banner-ppal zoom">
            <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/30-11-2023/doc_conpes_d.c._36_pp_peaton.pdf" download>
                <picture>
                    <source media="(min-width: 650px)" srcset="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-11-2023/940x250.png">
                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-11-2023/340x300.png" alt="name">
                </picture>
            </a>
        </div>
    </div>
    <style>
        .set-wrapper .box-encabezado {
            grid-area: box-encabezado;
            margin: 2em 1em 0 1em;
        }
    </style>


    <!-- bloque box intro-->
    <div class="box box-intro">
        <div class="cmpnt cmpnt-definicion">
            <p>“El peatón es el actor más importante en el sistema de movilidad, por eso Bogotá, a través de la Política Pública del Peatón, busca mejorar la experiencia de la caminata en la ciudad”</p>
        </div>
        <span class="hr-3pts"></span>
    </div>
    <style>
        .set-wrapper .box-intro {
            grid-area: box-intro;
            margin: 8px;
        }

        .box-intro p {
            font-size: 16px;
            text-align: center;
            line-height: 1.5;
            color: #252525;
        }

        @media(min-width:768px) {
            .set-wrapper .box-intro {
                margin: 3em 4em 0 4em;
            }

            .box-intro p {
                font-size: 20px;
            }
        }
    </style>

    <!-- bloque box video-->
    <div class="box box-video">
        <div class="cmpnt cmpnt-frame-video">
            <div class="video video-16by9">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe width='100%' src='https://www.youtube.com/embed/2JDPRjsE88U?si=zUOu0wj1rwh8GWvc' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    <style>
        .set-wrapper .box-video {
            grid-area: box-video;
            margin: 2em 1em 0 1em;
            padding: 16px;
        }
    </style>

    <!-- bloque box definicion-->
    <div class="box box-definicion">
        <div class="cmpnt cmpnt-img">
            <figure>
                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-11-2023/imagen1.png" alt="imagen panorámica de peatones en acera">
                <figcaption>
                    <p>Foto: Panorámica con peatones caminando. (SDM).</p>
                </figcaption>
            </figure>
        </div>
        <div class="cmpnt cmpnt-parrafo">
            <h3 class="title title-type-3 title-id-1">¿Por qué los peatones tienen prioridad?</h3>
            <span class="hr-3pts-izq"></span>
            <p>Las y los peatones somos los actores más importantes de la movilidad en Bogotá pues todos somos peatones aunque sea en una parte de nuestro viaje. Asimismo, los peatones somos los más vulnerables ante siniestros viales.</p>
            <p>Ser peatón abarca un concepto mucho más amplio, pues también incluye personas que se mueven apoyados de algún elemento, como puede ser una silla de ruedas, caminadores o andadores, un bastón e incluso un coche para bebés. Peatones somos todos y todas, bebés, niños, niñas, jóvenes, adultos, personas con discapacidad y adultos mayores.</p>
        </div>
    </div>
    <style>
        .set-wrapper .box-definicion {
            grid-area: box-definicion;
            margin: 2em 1em 0 1em;
            display: grid;
            gap: 8px;
            grid-auto-flow: dense;
            grid-template-columns: 1fr;
            grid-template-rows: auto;
        }

        .box-definicion .cmpnt-img {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .box-definicion img {
            max-height: 280px;
            object-fit: cover;
            object-position: center
        }

        .box-definicion .cmpnt-parrafo {
            padding: 0px;
        }

        @media(min-width:768px) {
            .box-definicion .cmpnt-parrafo {
                padding: 32px;
            }
        }



        .box-definicion .cmpnt-parrafo p {
            font-size: 16px;
            font-weight: 500;
            text-align: justify;
            color: #252525;
        }

        @media(min-width:768px) {
            .set-wrapper .box-definicion {
                grid-template-columns: 1fr 1fr;
            }
        }
    </style>

    <!-- Sección box counter -->
    <div class="box-counter">

        <h3 class="title title-type-3 title-id-2">¡Los peatones en Bogotá!</h3>
        <span class="hr-3pts-izq"></span>

        <!-- <p>Resize the browser window to see the effect.</p> -->

        <div class="row">
            <div class="column">
                <div class="card zoom">
                    <p>&nbsp;</p>
                    <h3>36%</h3>
                    <div class="text">
                        <p>de la población de la ciudad se desplaza caminando.</p>
                        <i>(Viajes con duración igual o mayor a 3 minutos).</i>
                    </div>
                </div>
            </div>

            <div class="column">
                <div class="card zoom">
                    <p>&nbsp;</p>
                    <h3>67%</h3>
                    <div class="text">
                        <p>El modo peatonal es el más utilizado por las niñas, niños y adolescentes.</p>
                    </div>
                </div>
            </div>

            <div class="column">
                <div class="card zoom">
                    <p>&nbsp;</p>
                    <h3>30%</h3>
                    <div class="text">
                        <p>de las personas mayores se movilizan en modo peatonal.</p>
                    </div>
                </div>
            </div>

            <div class="column">
                <div class="card card-danger zoom">
                    <p><small>Cada</small></p>
                    <h3>3 <small>horas</small></h3>
                    <div class="text">
                        <p>ocurre un siniestro grave con peatones en Bogotá.</p>
                    </div>
                </div>
            </div>

            <div class="column">
                <div class="card card-danger zoom">
                    <p><small>Cada</small></p>
                    <h3>2 <small>días</small></h3>
                    <div class="text">
                        <p>lamentablemente fallece un peatón en Bogotá.</p>
                    </div>
                </div>
            </div>

            <div class="column">
            <div class="card card-danger zoom">
                <p><small>Se registraron</small></p>
                <h3>197 <small></small></h3>
                <div class="text">
                    <p>fallecidos y 3.108 lesionados en el 2022.</p>
                </div>
            </div>
            </div>

        </div>

    </div>
    <style>
        .set-wrapper .box-counter {
            grid-area: box-counter;
            box-sizing: border-box;

            margin-top: 40px;
            padding: 32px;
        }

        /* Float four columns side by side */
        .box-counter .column {
            float: left;
            width: 100%;
            padding: 0 12px;
            margin-left: 0px !important;
            margin-right: 0px !important;
        }

        .box-counter .row {
            margin: 0 -5px;
        }

        /* Clear floats after the columns */
        .box-counter .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Style the counter cards */
        .box-counter .card {
            box-shadow: 0 4px 4px 0 rgba(0, 0, 0, 0.2);
            padding: 8px;
            text-align: center;
            /* background-color: #f5f5f5; */
            background-color: #669933;
            background: linear-gradient(to top, #669933, #84C742);
            color: #252525;
            border-radius: 8px;
            padding-top: 24px;
            margin-top: 16px;
        }
        .box-counter .card-danger {
            box-shadow: 0 4px 4px 0 rgba(0, 0, 0, 0.2);
            padding: 8px;
            text-align: center;
            /* background-color: #f5f5f5; */
            background-color: #669933;
            /* background: linear-gradient(to top, #669933, #84C742); */
            background: linear-gradient(to top, #191e3a, #2D3669);
            color: #252525;
            border-radius: 8px;
            padding-top: 24px;
            margin-top: 16px;
        }

        .box-counter .column .card-danger p {
            font-size: 14px;
            font-weight: 500;
            text-align: center;
            color: #ffffff !important;
            line-height: 1.3;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 4;
            line-clamp: 4;
            overflow: hidden;
        }


        .card .text {
            display: flex;
            flex-direction: column;
            justify-content: space-around;
            align-items: center;
        }

        .box-counter .column .card small {
            font-weight: 500;
            text-align: center;
            color: #fff;
            line-height: 1.3;
        }

        .box-counter .column .card p {
            font-size: 14px;
            font-weight: 500;
            text-align: center;
            color: #252525;
            line-height: 1.3;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 4;
            line-clamp: 4;
            overflow: hidden;
        }

        .box-counter .column .card i {
            font-size: 13px;
            font-weight: 500;
            text-align: center;
            color: #252525;
            line-height: 1.3;
        }

        /* Responsive columns */

        @media(min-width:768px) {
            .box-counter .column {
                width: 33%;
                display: block;
                margin-bottom: 10px;
            }

            .card .text {
                height: 130px;
            }
        }

        @media(min-width:992px) {
            .box-counter .column {
                width: 33.3%;
                display: block;
                margin-bottom: 10px;
            }
        }


        .box-counter .fa {
            font-size: 50px;
        }

        .box-counter .card h3 {
            font-weight: 700;
            font-size: 40px;
            margin-top: 0px;
            color: #fff;
        }
    </style>

    <span class="prudencia-centro"></span>


    <!-- bloque box vertical-tabs-->
    <div class="box box-vertical-tabs">

        <div class="cmpnt cmpnt-tabs">

            <div class="tab">
                <button class="tablinks" onclick="openCity(event, 'tab1')" id="defaultOpen">¿Qué propone Bogotá para los Peatones</button>
                <!-- <button class="tablinks" onclick="openCity(event, 'tab2')">¿Cómo se logrará?</button> -->
                <button class="tablinks" onclick="openCity(event, 'tab3')">¿Qué se espera?</button>
            </div>

            <div id="tab1" class="tabcontent">
                <h3 class="title title-type-3 title-id-5">¿Qué propone Bogotá para los Peatones?</h3>
                <span class="hr-3pts-izq"></span>
                <p>Consolidar a Bogotá de aquí al 2035 como una ciudad cuyas condiciones de infraestructura, accesibilidad y seguridad fomenten y mejoren la calidad de la movilidad peatonal y el disfrute en el espacio público.</p>
                <figure>
                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-11-2023/petones_cebra.png" alt="imagen peatones cruzando por la cebra">
                    <figcaption>
                        <p>Foto: Peatones cruzan por la cebra. (SDM).</p>
                    </figcaption>
                </figure>
            </div>
            <!-- <div id="tab2" class="tabcontent">
                <h3 class="title title-type-3 title-id-6">¿Cómo se logrará?</h3>
                <span class="hr-3pts-izq"></span>
                <p>A través de diferentes estrategias enmarcadas en cultura, infraestructura y seguridad.</p>


                <div class="btn-tabs">
                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-11-2023/cultura.png" alt="" title="" style="width: 100px; margin: auto; padding: 20px;">
                    <span>Cultura</span>
                </div>
                <style>

                </style>
                <p>Fomentar el respeto, autocuidado y cordialidad hacia las personas que se movilizan y disfrutan en el espacio público peatonal.</p>
                <figure>
                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-11-2023/sanmiguel.png" alt="imagen peatones transitan por aerea delimitada">
                    <figcaption>
                        <p>Foto: Peatones atravesando areas delimitadas bajo la estrategia Barrios Vitales. (SDM).</p>
                    </figcaption>
                </figure>

                <div class="btn-tabs">
                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-11-2023/infraestructura.png" alt="" title="" style="width: 100px; margin: auto; padding: 20px;">
                    <span>Infraestructura</span>
                </div>
                <p>Mejorar la infraestructura peatonal para que sea accesible, atractiva, cómoda y continua.</p>
                <figure>
                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-11-2023/infraestructura_3.png" alt="imagen de personas camionando por la acera.">
                    <figcaption>
                        <p>Foto: Personas transitan por la acera. (SDM).</p>
                    </figcaption>
                </figure>

                <div class="btn-tabs">
                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-11-2023/seguridad.png" alt="" title="" style="width: 100px; margin: auto; padding: 20px;">
                    <span>Seguridad</span>
                </div>
                <p>Promover una ciudad segura y cuidadora de la vida e integridad de las y los peatones.</p>
                <figure>
                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-11-2023/infraestructura_2.png" alt="imagen de mujeres avazando por el anden">
                    <figcaption>
                        <p>Imagen: Mujeres transitan por la acera. (SDM).</p>
                    </figcaption>
                </figure>
            </div> -->
            <div id="tab3" class="tabcontent">
                <h3 class="title title-type-3 title-id-6">¿Qué se espera?</h3>
                <span class="hr-3pts-izq"></span>
                <p>A través de diferentes estrategias enmarcadas en cultura, infraestructura y seguridad.</p>
                <figure>
                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-11-2023/infraestructura_1.png" alt="imagen personas hacen circulo">
                    <figcaption>
                        <p>Foto: Personas hacen circulo. (SDM).</p>
                    </figcaption>
                </figure>
                <p>578.300 niñas y niños beneficiados con el programa Ciempiés y guarda caminos. Salvar 949 peatones de fallecer en un siniestro vial.</p>
                <figure>
                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-11-2023/guardacaminos.png" alt="imagen guardacaminos controlan el transito.">
                    <figcaption>
                        <p>Foto: Personas de la estrategia guardacaminos. (SDM).</p>
                    </figcaption>
                </figure>
            </div>
        </div>
    </div>
    <style>
        .set-wrapper .box-vertical-tabs {
            grid-area: box-vertical-tabs;
        }

        /* Style the tab */
        .box-vertical-tabs .tab {
            float: left;
            /* border: 1px solid #ccc; */
            background-color: #ffffff;
            width: 100%;
            /* height: 300px; */
        }

        /* Style the buttons inside the tab */
        .box-vertical-tabs .tab button {
            display: block;
            background-color: inherit;
            color: #252525;
            padding: 22px 16px;
            width: calc(100% - 32px);
            outline: none;
            text-align: left;
            cursor: pointer;
            transition: 0.3s;
            font-size: 17px;
            margin: 16px;
            border-radius: 4px;
            border: 1px solid rgba(25, 28, 58, 0.1);

        }

        /* Change background color of buttons on hover */
        .box-vertical-tabs .tab button:hover {
            border: 1px solid rgba(25, 28, 58, 0.2);
            background: linear-gradient(to top, #191e3a, #2D3669);
            color: #84C742;

        }

        /* Create an active/current "tab button" class */
        .box-vertical-tabs .tab button.active {
            background: linear-gradient(to top, #191e3a, #2D3669);

            color: #ffffff;
        }

        /* Style the tab content */
        .box-vertical-tabs .tabcontent {
            float: left;
            padding: 32px;
            width: calc(100% - 32px);
            border: 1px solid rgba(25, 28, 58, 0.2);
            height: auto;
            background: #f5f5f5;
            border-radius: 4px;
            margin: 16px;
        }

        @media(min-width:768px) {
            .set-wrapper .box-vertical-tabs {
                margin: 2em 1em 0 1em;
            }

            .box-vertical-tabs .tab {
                width: 25%;
            }

            .box-vertical-tabs .tab button {
                margin: 0px 8px 16px 16px;
                width: calc(100% - 24px);

            }

            .box-vertical-tabs .tabcontent {
                width: calc(75% - 24px);
                margin: 0px 16px 16px 8px;
            }

        }

        .box-vertical-tabs .btn-tabs {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin: 16px;
        }

        .btn-tabs span {
            font-size: 16px;
            font-weight: 600;
            color: #252525;
            text-align: center;
            line-height: 1.3;
        }
    </style>
    <script>
        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");

            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
    </script>


    <span class="hr-3pts clearfix"></span>
    <p>&nbsp;</p>
    <!-- bloque box acciones-->
    <div class="box box-acciones">
        <div class="cmpnt cmpnt-parrafo">
            <h3 class="title title-type-3 title-id-7">Acciones en curso para peatones… </h3>
            <span class="hr-3pts-izq"></span>
            <p>El objetivo es crear conciencia sobre la vulnerabilidad del peatón en las calles y promover el respeto por el espacio público mediante diversas medidas, incluyendo el control, la disuasión, la infraestructura y la cultura ciudadana.</p>
        </div>
        <div class="cmpnt cmpnt-desplegable">
            <!-- collapse_peatones -->
            <div class='panel-group' id='accordion_peatones' role='tablist ' aria-multiselectable='true'>

                <!-- collapse uno -->
                <div class='panel panel-default'>
                    <div class='panel-heading' role='tab' id='heading_uno'>
                        <h4 class='panel-title'>
                            <a role='button' data-toggle='collapse' data-parent='#accordion_peatones' href='#collapse_uno' aria-expanded='false' aria-controls='collapse_uno'>
                                1. Conservación de andenes
                            </a>
                        </h4>
                    </div>
                    <div id='collapse_uno' class='panel-collapse collapse in' role='tabpanel' aria-labelledby='heading_uno' aria-expanded='false'>
                        <div class='panel-body'>
                            <div class='box-uno'>
                                <div class="cmpnt cmpnt-image">
                                    <figure>
                                        <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-11-2023/infraestructura_3.png" alt="imagen peatones caminando por la acera.">
                                        <figcaption>
                                            <p></p>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="cmpnt cmpnt-parrafo">
                                    <p>Se lleva a cabo el arreglo de los andenes para mejorar la accesibilidad y comodidad de los peatones, esto también ayudará a prevenir accidentes causados por el mal estado de los andenes.</p>
                                </div>
                                <div class="cmpnt cmpnt-lista">
                                    <dl>
                                        <dt>Entidad encargada:</dt>
                                        <dd>Unidad de Mantenimiento Peatonal (UMP)</dd>
                                    </dl>

                                    <dl>
                                        <dt>Intervención total a la fecha:</dt>
                                        <dd>30.000 m²</dd>
                                    </dl>

                                    <dl>
                                        <dt>Proyectos Finalizados:</dt>
                                        <dd>9</dd>
                                    </dl>

                                    <dl>
                                        <dt>Proyectos en ejecución:</dt>
                                        <dd>5</dd>
                                    </dl>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- collapse dos -->
                <div class='panel panel-default'>
                    <div class='panel-heading' role='tab' id='heading_dos'>
                        <h4 class='panel-title'>
                            <a role='button' data-toggle='collapse' data-parent='#accordion_peatones' href='#collapse_dos' aria-expanded='false' aria-controls='collapse_dos'>
                                2. Control por invasión de andenes
                            </a>
                        </h4>
                    </div>
                    <div id='collapse_dos' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_dos' aria-expanded='false'>
                        <div class='panel-body'>
                            <div class='box-dos'>
                                <div class="cmpnt cmpnt-parrafo">
                                    <p>Se trabaja en la recuperación del espacio público, con el apoyo de los Agentes Civiles de Tránsito y los uniformados de la Seccional de Tránsito de Bogotá, quienes regulan la movilidad en la ciudad.</p>
                                </div>
                                <div class="cmpnt cmpnt-lista">
                                    <dl>
                                        <dt>Entidad encargada:</dt>
                                        <dd>Unidad de Gestión Peatonal (UGP)</dd>
                                    </dl>
                                    <dl>
                                        <dt>Operativos:</dt>
                                        <dd>322</dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- collapse tres -->
                <div class='panel panel-default'>
                    <div class='panel-heading' role='tab' id='heading_tres'>
                        <h4 class='panel-title'>
                            <a role='button' data-toggle='collapse' data-parent='#accordion_peatones' href='#collapse_tres' aria-expanded='false' aria-controls='collapse_tres'>
                                3. Recuperación de andenes
                            </a>
                        </h4>
                    </div>
                    <div id='collapse_tres' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_tres' aria-expanded='false'>
                        <div class='panel-body'>
                            <div class='box-tres'>
                                <div class="cmpnt cmpnt-parrafo">
                                    <p>Gracias a la instalación de más de 1.000 'Tótems Peatonales', queremos garantizar el desplazamiento seguro de los peatones en andenes, zonas verdes y antejardines de la ciudad, espacios que son invadidos por carros y motos, impidiendo la circulación de personas.</p>
                                </div>
                                <div class="cmpnt cmpnt-lista">
                                    <dl>
                                        <dt>Meta instalación de Tótems Peatonales en 2023:</dt>
                                        <dd>1.000 </dd>
                                    </dl>
                                    <dl>
                                        <dt>A la fecha se han implementado:</dt>
                                        <dd>1028</dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- collapse cuatro -->
                <div class='panel panel-default'>
                    <div class='panel-heading' role='tab' id='heading_cuatro'>
                        <h4 class='panel-title'>
                            <a role='button' data-toggle='collapse' data-parent='#accordion_peatones' href='#collapse_cuatro' aria-expanded='false' aria-controls='collapse_cuatro'>
                                4. Cultura Ciudadana
                            </a>
                        </h4>
                    </div>
                    <div id='collapse_cuatro' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_cuatro' aria-expanded='false'>
                        <div class='panel-body'>
                            <div class='box-cuatro'>
                                <div class="cmpnt cmpnt-parrafo">
                                    <p>En la ciudad se diseñan e implementan campañas para sensibilizar sobre la importancia de los peatones en la movilidad. Algunas de las campañas son:</p>
                                </div>
                                <div class="cmpnt cmpnt-lista">
                                    <ul class="unlist">
                                        <li><a href="">Tú Negocio Socio</a></li>
                                        <li><a href="">#NiCincoMinuticos</a></li>
                                        <li><a href="">“Toma Peatonal”</a></li>
                                        <li><a href="">Estrategia Digital</a></li>
                                    </ul>
                                    <dl>
                                        <dt>Personas sensibilizadas:</dt>
                                        <dd>24.177</dd>
                                    </dl>
                                    <dl>
                                        <dt>Zonas intervenidas:</dt>
                                        <dd>330</dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /#fin _peatones -->
        </div>
    </div>
    <style>
        .set-wrapper .box-acciones {
            grid-area: box-acciones;
            margin: 2em 1em 0 1em;
        }

        .box-acciones .cmpnt-parrafo {
            margin-bottom: 16px;
        }

        .box-acciones .cmpnt-image {
            max-width: 600px;
            margin: auto;
        }

        .box-acciones ul.unlist {
            list-style-type: none;
            /* Remove bullets */
            padding: 0;
            /* Remove padding */
            margin: 0;
            text-align: center;
            /* Remove margins */
        }

        .box-acciones dl {
            margin-left: 32px;
            margin-bottom: 8;
        }

        .box-acciones dl dd {
            margin-left: 16px;

        }

        .box-acciones .glyphicon-chevron-right::before {
            color: #191e3a !important;
        }

        .box-acciones .glyphicon-chevron-left::before {
            color: #191e3a !important;
        }

        .box-acciones .panel-heading {
            border-color: #669933 !important;
            background: #669933 !important;
            background-image: linear-gradient(to top, #669933, #84C742) !important;
        }

        .box-acciones .panel-heading .panel-title a {
            text-decoration: none;
            color: #fff !important;
            font-size: 18px;
            font-weight: 600;
            letter-spacing: 1px;
        }

        .box-acciones .panel-heading .panel-title a:after {
            font-family: 'Glyphicons Halflings';
            content: "\e080";
            float: right;
            color: #252525;
            font-size: 18px;
        }

        .box-acciones .panel-heading .panel-title a.collapsed:after {
            content: "\e114";
        }
    </style>

    <span class="hr-3pts"></span>

    <!-- bloque box consulta-->
    <div class="box box-consulta">
        <div class="cmpnt cmpnt-parrafo">
            <p>Consulta aquí los documentos que la Administración tiene para promover la movilidad peatonal</p>
        </div>

        <div class="cmpnt cmpnt-baricons">

            <div class="media">
                <div class="media-left">
                    <a href="https://www.sdp.gov.co/gestion-socioeconomica/conpes-dc/politicas-publicas?combine=peaton&title=&field_conpes_date_value%5Bvalue%5D%5Byear%5D=" target="_blank" rel="noopener noreferrer" download="" title="Política Pública del Peatón">
                        <img class="media-object" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/08-01-2023/pdf.png" alt="icono de documento pdf" width="48px">
                    </a>
                </div>
                <div class="media-body">
                    <a href="https://www.sdp.gov.co/gestion-socioeconomica/conpes-dc/politicas-publicas?combine=peaton&title=&field_conpes_date_value%5Bvalue%5D%5Byear%5D=" target="_blank" rel="noopener noreferrer" download="" title="Ir a descarga de Política Pública del Peatón">
                        <h4 class="media-heading">Política Pública del Peatón</h4>
                    </a>
                    <p>"Por el cual se dictan los principios generales, y lineamientos de la política pública del peatón “En Bogotá, primero el peatón” y se dictan otras disposiciones"</p>
                </div>
            </div>

            <div class="media">
                <div class="media-left">
                    <a href="https://www.movilidadbogota.gov.co/web/manual_peatonal" target="_blank" rel="noopener noreferrer" download="" title="Manual Peatonal">
                        <img class="media-object" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/08-01-2023/pdf.png" alt="icono de documento pdf" width="48px">
                    </a>
                </div>
                <div class="media-body">
                    <a href="https://www.movilidadbogota.gov.co/web/manual_peatonal" target="_blank" rel="noopener noreferrer" download="" title="Ir a descarga de Manual Peatonal">
                        <h4 class="media-heading">Manual Peatonal</h4>
                    </a>
                    <p>"Este manual es una guía de ayuda que invita a la ciudadanía a moverse por Bogotá a pie, bajo el cumplimiento de las normas, generando mayor conciencia ambiental y promoviendo entornos seguros, donde prima el cuidado, la inclusión y el respeto por la vida de todos y toda"</p>
                </div>
            </div>

            <div class="media">
                <div class="media-left">
                    <a href="https://www.alcaldiabogota.gov.co/sisjur/normas/Norma1.jsp?i=150378" target="_blank" rel="noopener noreferrer" download="" title="Promoción de Pasos Peatonales a Nivel (Decreto 491 de 2023)">
                        <img class="media-object" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/08-01-2023/pdf.png" alt="icono de documento pdf" width="48px">
                    </a>
                </div>
                <div class="media-body">
                    <a href="https://www.alcaldiabogota.gov.co/sisjur/normas/Norma1.jsp?i=150378" target="_blank" rel="noopener noreferrer" download="" title="Ir a descarga de Promoción de Pasos Peatonales a Nivel (Decreto 491 de 2023)">
                        <h4 class="media-heading">Promoción de Pasos Peatonales a Nivel (Decreto 491 de 2023)</h4>
                    </a>
                    <p>"Por medio del cual se establecen los criterios y condiciones para reemplazar puentes peatonales por pasos a nivel en Bogotá. D.C. y se dictan otras disposiciones"</p>
                </div>
            </div>

        </div>
    </div>

    <style>
        .set-wrapper .box-consulta {
            grid-area: box-consulta;
            margin: 2em 1em 0 1em;
            overflow: auto;
        }

        .box-consulta .cmpnt-parrafo p {
            font-size: 20px;
            text-align: center;
            line-height: 1.5;
            color: #252525;
        }

        .set-wrapper .cmpnt-baricons {
            grid-area: cmpnt-baricons;
            display: grid;
            gap: 8px;
            grid-auto-flow: dense;
            grid-template-columns: 1fr;
            grid-template-rows: auto;
        }

        .cmpnt-baricons .icon a {
            padding: 8px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .cmpnt-baricons .icon a img {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 50%;
            border: 2px solid rgba(77, 84, 31, 0.5);
        }

        .cmpnt-baricons .icon a p {
            margin-top: 12px;
            font-size: 14px;
            font-weight: 600;
            color: rgba(77, 84, 31, 1);
            text-align: center;
        }

        .cmpnt-baricons .media {
            margin-top: 0px;
        }


        @media(min-width:768px) {
            .set-wrapper .cmpnt-baricons {
                padding: 32px;
                grid-template-columns: repeat(3, 33%);
            }
        }
    </style>

    <span class="hr-full"></span>


</div>
<!-- Fin Set -->
<style>
    .field-item.even .centertil {
        visibility: hidden;
        margin-top: -50px;
    }

    .set-wrapper.peaton {
        font-family: 'Montserrat', sans-serif;
        font-size: 15px;
        font-weight: 500;
        text-align: left;
        line-height: 1.5;
        color: #252525;
    }

    span.hr-3pts {
        display: block;
        width: 30px;
        height: 10px;
        background-image: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-11-2023/recurso2.png');
        background-position: center;
        background-repeat: no-repeat;
        margin: 32px auto;
        overflow: auto;

    }

    span.hr-3pts-izq {
        display: block;
        width: 100%;
        height: 10px;
        background-image: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-11-2023/recurso2.png');
        background-position: left;
        background-repeat: no-repeat;
        margin: 16px 0 16px 0;
    }

    span.hr-full {
        display: block;
        width: 100%;
        height: 300px;
        background-image: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-11-2023/recurso3.png');
        background-position: bottom;
        background-size: contain;
        background-repeat: no-repeat;
        margin: -160px 0 16px 0;
        /* position: absolute; */

    }

    figure img {
        -webkit-box-shadow: 0px 0px 10px 3px rgba(0, 0, 0, 0.16);
        box-shadow: 0px 0px 10px 3px rgba(0, 0, 0, 0.16);
        margin-top: 16px;
    }

    figcaption p {
        margin-top: 4px;
        color: #4b4b4b;
        font-style: italic;
        font-size: 14px;
        margin-bottom: 16px;
    }

    .title-type-3 {
        color: #191e3a;
        text-transform: uppercase;
        font-size: 24px;
        font-weight: 700;
    }

    .set-wrapper .prudencia-centro {
        display: block;
        height: 100px;
        width: 100px;
        background-image: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-11-2023/prudencia_80.png');
        background-position: center;
        background-repeat: no-repeat;
        margin: 16px auto;
        overflow: auto;
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
        /* IE9 */
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
        /* IE9 */
    }
</style>
