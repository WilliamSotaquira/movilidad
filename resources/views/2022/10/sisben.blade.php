@extends('welcome')
@section('contenido')
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fuente Montserrat -----  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<link rel='preconnect' href='https://fonts.googleapis.com'>
<link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
<link href='https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap' rel='stylesheet'>
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin Fuente Montserrat -  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<!-- Set Wrapper -->
<div class='container-fluid sisben'>
    <div class='box-wrp'>

        <!-- seccion Ppal Tabs  -->
        <div class="box-tabs">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">

                <li role="presentation" class="active">
                    <a href="#inicio" aria-controls="inicio" role="tab" data-toggle="tab"> INICIO</a>
                </li>

                <li role="presentation">
                    <a href="#normatividad" aria-controls="normatividad" role="tab" data-toggle="tab">NORMATIVIDAD</a>
                </li>

            </ul>

            <!-- Tab panels -->
            <div class="tab-content">

                <div role="tabpanel" class="tab-pane active" id="inicio">

                    <div class="box-inicio">
                        <div class='imagen'>
                            <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/06-09-2022/recurso_1.png' alt='Accede al subsidio' title='Accede al subsidio'>
                        </div>
                        <div class="texto">
                            <div class="titulo">
                                <h3 class="enfasis-text">Accede al subsidio</h3>
                                <h3>en las tarifas del Sistema Integrado de Transporte Público</h3>
                            </div>
                            <p>Sé parte del más de un millón de personas que se beneficiará de este incentivo en los pasajes y apoya a la movilidad sostenible en Bogotá.</p>
                        </div>
                        <style>
                            .box-wrp .box-inicio {
                                display: grid;
                                gap: 10px;
                                grid-area: box-inicio;
                                grid-auto-flow: dense;
                                grid-template-columns: 1fr;
                                grid-template-rows: auto;
                                grid-template-areas:
                                    'imagen'
                                    'texto';
                            }

                            .box-wrp .box-inicio .imagen {
                                grid-area: imagen;
                            }

                            .box-wrp .box-inicio img {
                                margin: auto;
                                padding: 16px 8px;
                                max-width: 320px;
                            }

                            .box-wrp .box-inicio .texto {
                                grid-area: texto;
                                margin: auto;
                                padding: 0px;
                            }

                            .box-wrp .box-inicio .texto .titulo {
                                padding-top: 10px;
                                padding-bottom: 30px;
                            }



                            .box-wrp .box-inicio .texto h3 {
                                /* font-size: 1em; */
                                font-weight: 700;
                                text-align: center;
                                line-height: 1.2;
                                color: #315002;
                                margin: 0px;
                            }

                            .box-wrp .box-inicio .texto .enfasis-text {
                                font-size: 2.2em;
                                font-weight: 700;
                                text-align: center;
                                line-height: 1.2;
                                color: #315002;
                                margin: 0px;
                            }

                            .box-wrp .box-inicio .texto p {
                                text-align: justify;
                            }

                            .btn-desliza {
                                text-decoration: none !important;
                                display: inline-block;
                                padding: 8px 30px;
                                border-radius: 25px;
                                border: solid 2px #315002;
                                /* max-width: 50%; */
                                background-color: rgba(255, 255, 255, 1);
                                color: #315002;
                                /* margin: 30px; */

                                font-size: 1.2em;
                                font-weight: 500;
                                text-align: left;
                                line-height: 1.4;
                                margin: 8px;

                                -webkit-box-shadow: -2px 5px 0px 0px rgba(0, 0, 0, 0.10);
                                box-shadow: -2px 5px 0px 0px rgba(0, 0, 0, 0.10);

                            }

                            .btn-desliza:hover {
                                background-color: #315002;
                                color: rgba(255, 255, 255, 1);
                            }

                            @media(min-width:768px) {

                                .box-wrp .box-inicio {
                                    grid-template-columns: 1fr 1fr;
                                    grid-template-rows: auto;
                                    grid-template-areas:
                                        'imagen texto';
                                }

                                .box-wrp .box-inicio img {
                                    margin: auto;
                                    padding: 32px;
                                    max-width: 400px;
                                }

                                .box-wrp .box-inicio .texto p {
                                    text-align: center;
                                    line-height: 1.5;
                                }

                                .box-wrp .box-inicio .texto {
                                    grid-area: texto;
                                    margin: auto;
                                    padding: 16px;
                                }

                            }
                        </style>

                    </div>

                    <hr>

                    <div class="box-collapsable">

                        <div class="titulo">
                            <h3>Entérate cómo podrías obtener tu subsidio en las tarifas del sitp</h3>
                        </div>
                        <style>
                            .box-wrp .box-collapsable .titulo {
                                padding: 16px 16px 32px 16px;
                            }

                            .box-wrp .box-collapsable .titulo h3 {
                                font-size: 24px;
                                font-weight: 700;
                                text-align: center;
                                line-height: 1;
                                color: #315002;
                                margin: 12px 0px;

                            }
                        </style>

                        <!-- controls -->
                        <div class='box-botones nav nav-pills nav-justified'>


                            <!-- control-solicita -->
                            <div class="card btn-solicita control-solicita">
                                <a data-toggle="tab" href="#solicita">
                                    <div class="card-sisben zoom solicita">
                                        <div class='icono-numero'>
                                            <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/20-07-2022/recurso_1.png' alt='icono numero tres' title='icono numero tres'>
                                        </div>
                                        <div class='imagen'>
                                            <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/16-09-2022/solicita_220916.png' alt='grafico con icono de registro de formulario' title='grafico con icono de registro de formulario'>
                                        </div>
                                        <div class="texto">
                                            <h3>SOLICITA</h3>
                                            <p>tu encuesta Sisbén IV si aún no estás registrado</p>
                                        </div>
                                    </div>
                                </a>
                                <style>
                                    .box-botones .control-solicita {
                                        grid-area: control-solicita;
                                    }
                                </style>
                            </div>

                            <!-- control-consulta -->
                            <div class="card btn-consulta control-consulta">
                                <a data-toggle="tab" href="#consulta">
                                    <div class="card-sisben zoom consulta">
                                        <div class='icono-numero'>
                                            <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/20-07-2022/recurso_3.png' alt='icono numero dos' title='icono numero dos'>
                                        </div>
                                        <div class='imagen'>
                                            <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/16-09-2022/consulta_220916.png' alt='grafica con icono de buscador' title='grafica con icono de buscador'>
                                        </div>
                                        <div class="texto">
                                            <h3>CONSULTA</h3>
                                            <p>en Sisbén IV si perteneces a uno de los grupos beneficiados</p>
                                        </div>
                                    </div>
                                </a>
                                <style>
                                    .box-botones .control-consulta {
                                        grid-area: control-consulta;
                                    }
                                </style>
                            </div>

                            <!-- control-accede -->
                            <div class="card btn-accede control-accede">
                                <a data-toggle="tab" href="#accede">
                                    <div class="card-sisben zoom">
                                        <div class='icono-numero'>
                                            <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/20-07-2022/recurso_6.png' alt='icono numero tres' title='icono numero tres'>
                                        </div>
                                        <div class='imagen'>
                                            <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/16-09-2022/acccede_220916.png' alt='grafico con lector y tarjeta tu llave' title='grafico con lector y tarjeta tu llave'>
                                        </div>
                                        <div class="texto">
                                            <h3>ACCEDE</h3>
                                            <p>con tu tarjeta Tu Llave personalizada, si eres beneficiario</p>
                                        </div>
                                    </div>
                                </a>
                                <style>
                                    .box-botones .control-accede {
                                        grid-area: control-accede;
                                    }
                                </style>
                            </div>

                            <style>
                                .box-wrp .box-botones {
                                    display: grid;
                                    column-gap: 10px;
                                    /* gap: 10px; */
                                    grid-auto-flow: dense;
                                    grid-template-columns: 1fr;
                                    grid-template-rows: auto;
                                    grid-template-areas:
                                        'control-solicita'
                                        'control-consulta'
                                        'control-accede';
                                }

                                .box-wrp .box-botones a {
                                    text-decoration: none;
                                }

                                .box-wrp .box-botones .card a:focus .card-sisben,
                                .box-wrp .box-botones .card a:visited .card-sisben {
                                    background-color: #f5f5f5 !important;
                                    border-radius: 6px;
                                }

                                .box-wrp .box-botones .card:hover .card-sisben {
                                    border-radius: 6px;
                                    background-color: #f5f5f5;
                                    -webkit-box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.16);
                                    box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.16);
                                }

                                .box-wrp .box-botones .card-sisben .icono-numero img {
                                    max-width: 120px;
                                    margin: auto;
                                    padding: 16px 16px 0px 16px;
                                }

                                .box-wrp .box-botones .card-sisben .imagen img {
                                    max-width: 200px;
                                    margin: auto;
                                    margin-top: 15px;
                                    margin-bottom: 15px;
                                    /* background-color: #fff; */
                                    padding: 16px 16px 0px 16px;
                                }

                                .box-wrp .box-botones .card-sisben .texto {
                                    text-align: center;
                                    padding: 16px 16px 16px 16px;

                                }

                                .box-wrp .box-botones .card-sisben .texto h3 {
                                    /* font-size: 28px; */
                                    font-weight: 700;
                                    text-align: center;
                                    line-height: 1.2;
                                    color: #315002;
                                    margin: 8px;
                                    text-transform: uppercase;
                                }

                                .box-wrp .box-botones .card-sisben .texto p {
                                    font-weight: 500;
                                    text-align: center;
                                    line-height: 1.2;
                                    color: rgba(25, 25, 25, 1);
                                }

                                @media(max-width:767px) {
                                    .box-wrp .box-botones .card .card-sisben {
                                        /* height: px; */
                                        display: flex;
                                        /* flex-direction: column; */
                                        justify-content: space-around;
                                        align-items: center;
                                    }

                                    .box-wrp .box-botones .card-sisben .icono-numero img {
                                        max-width: 80px;
                                        min-width: 60px;
                                        width: 100px;
                                        padding: 16px;

                                    }

                                    .box-wrp .box-botones .card-sisben .imagen img {
                                        position: absolute;
                                        visibility: hidden;
                                    }

                                    .box-wrp .box-botones .card-sisben .texto p {
                                        position: absolute;
                                        visibility: hidden;
                                    }

                                    .box-wrp .box-botones .card-sisben .texto h3 {
                                        padding-right: 5vw;
                                        font-size: 24px;
                                    }

                                }

                                @media(min-width:768px) {
                                    .box-wrp .box-botones {
                                        grid-template-columns: repeat(3, 1fr);
                                        grid-template-areas:
                                            'control-solicita control-consulta control-accede';
                                    }
                                }
                            </style>
                        </div>

                        <!-- contents -->
                        <div class="tab-content contents">

                            <!-- content-consulta -->
                            <div id="consulta" class="tab-pane fade">


                                <!-- Sección box enlace -->
                                <div class="box-enlace">
                                    <div class="imagen img-principal">
                                        <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/20-07-2022/recurso_15.png" alt="icono de Grupo de Sisben" title="icono de Grupo de Sisben">
                                    </div>
                                    <div class="texto">
                                        <div class="title title-h3 solicita-btn">
                                            <h3>Consulta</h3>
                                        </div>
                                        <div class="paragraph ph-1 parrafo">
                                            <p>si cuentas con clasificación Sisbén IV y a qué grupo perteneces.</p>
                                            <div class="boton enlace-consulta">
                                                <a href="https://www.sisben.gov.co/Paginas/consulta-tu-grupo.aspx" target="_blank" rel="noopener noreferrer">
                                                    <div class='banner zoom'>
                                                        <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/20-07-2022/recurso_8.png' alt='Botón que direcciona a la consulta de grupo Sisbén' title='Botón que direcciona a la consulta de grupo Sisbén'>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <style>
                                        .box-enlace .img-principal {
                                            padding: 3em;
                                        }

                                        .box-enlace .texto {
                                            /* height: px; */
                                            display: flex;
                                            flex-direction: column;
                                            justify-content: center;
                                            align-items: center;
                                        }

                                        .box-enlace .texto .title {
                                            margin-bottom: 16px;
                                        }

                                        .box-enlace .solicita-btn h3 {
                                            text-transform: uppercase;
                                        }

                                        .box-enlace .texto .enlace-consulta {
                                            padding: 16px;
                                        }

                                        .box-enlace .texto .paragraph {
                                            padding: 8px;
                                        }
                                    </style>
                                </div>
                                <style>
                                    #consulta .box-enlace {
                                        grid-area: box-enlace;
                                        display: grid;
                                        gap: 8px;
                                        grid-auto-flow: dense;
                                        grid-template-columns: 1fr;
                                        grid-template-rows: auto;
                                        grid-template-areas:
                                            '';
                                    }

                                    @media(min-width:768px) {
                                        #consulta .box-enlace {
                                            padding: 32px;
                                            grid-template-columns: 1fr 1fr;
                                            grid-template-areas:
                                                'img-principal texto';
                                        }
                                    }
                                </style>



                                <!-- Sección box mensaje -->
                                <div class="box-mensaje">
                                    <div class="enfasis">
                                        <h3>Importante</h3>
                                        <!-- <p>Si haces parte del <strong>grupo poblacional indígena</strong>, puedes acceder al subsidio teniendo en cuenta que:</p> -->
                                    </div>
                                </div>
                                <style>
                                    #consulta .box-mensaje {
                                        grid-area: box-mensaje;
                                        padding: 16px 3em;
                                        background-color: #BCCF14;
                                        margin-bottom: 8px;
                                    }

                                    #consulta .box-mensaje .enfasis h3 {
                                        /* font-size: 15px; */
                                        font-weight: 700;
                                        text-align: center;
                                        line-height: 1.3;
                                        color: rgba(25, 25, 25, 1);
                                        text-transform: uppercase;
                                        margin: 0px;
                                    }
                                </style>


                                <!-- Sección box collapse -->
                                <div class="box-collapse">

                                    <!-- collapseGrupo -->
                                    <div class='panel-group' id='accordionGrupo' role='tablist ' aria-multiselectable='true'>

                                        <!-- collapse indigena -->
                                        <div class='panel panel-default'>
                                            <div class='panel-heading' role='tab' id='heading_indigena'>
                                                <h4 class='panel-title'>
                                                    <a role='button' data-toggle='collapse' data-parent='#accordionGrupo' href='#collapse_indigena' aria-expanded='false' aria-controls='collapse_indigena'>
                                                        Grupo Poblacional Indígena
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id='collapse_indigena' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_indigena' aria-expanded='false'>
                                                <div class='panel-body'>
                                                    <div class='box-indigena'>
                                                        <div class="paragraph ph-2">
                                                            <p>Si haces parte del <strong>grupo poblacional indígena</strong>, puedes acceder al subsidio teniendo en cuenta que:</p>
                                                            <ul>
                                                                <li>Debes ser mayor de 16 años y estar radicado en Bogotá.</li>
                                                                <li>No es necesario que estés registrado en el Sisbén IV.</li>
                                                                <li>Debes estar incluido en el listado censal realizado por el Resguardo y/o Cabildo respectivo, remitido a la Secretaría Distrital de Gobierno, y posteriormente al Ministerio del Interior.</li>
                                                                <li>Si no tienes la tarjeta Tu Llave personalizada, solicítala para acceder con ella al incentivo en los pasajes del SITP.</li>
                                                            </ul>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <style>
                                                .box-indigena {
                                                    grid-area: indigena;
                                                }
                                            </style>
                                        </div>

                                        <!-- collapse mayor -->
                                        <div class='panel panel-default'>
                                            <div class='panel-heading' role='tab' id='heading_mayor'>
                                                <h4 class='panel-title'>
                                                    <a role='button' data-toggle='collapse' data-parent='#accordionGrupo' href='#collapse_mayor' aria-expanded='false' aria-controls='collapse_mayor'>
                                                        Adulto Mayor
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id='collapse_mayor' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_mayor' aria-expanded='false'>
                                                <div class='panel-body'>
                                                    <div class='box-mayor'>
                                                        <div class="paragraph ph-1">
                                                            <p>Si actualmente tienes descuento en los pasajes del SITP por ser <strong>adulto mayor</strong> no puedes acceder a otro subsidio al mismo tiempo.</p>
                                                            <p>Por tanto, si además estás en los grupos desde el A1 hasta el C4 en la clasificación del Sisbén IV, y quieres optar por el subsidio en las tarifas del SITP a estos grupos:</p>
                                                            <ul>
                                                                <li>Acércate a una caseta de personalización de tarjeta Tu Llave</li>
                                                                <li>Solicita ser beneficiario del subsidio y anular el subsidio de adulto mayor</li>
                                                                <li>Obtén el nuevo beneficio, después de 24 horas de haber hecho la solicitud</li>
                                                                <li>Para volver al beneficio anterior debes esperar un mes para hacer la solicitud</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <style>
                                                .box-mayor {
                                                    grid-area: mayor;
                                                }
                                            </style>
                                        </div>

                                    </div>
                                    <!-- /#fin Grupo -->

                                </div>
                                <style>
                                    #consulta .box-collapse {
                                        grid-area: box-collapse;
                                        padding-bottom: 8px 4px;

                                    }

                                    #consulta .box-collapse ul>li {
                                        padding-bottom: 8px;
                                    }

                                    #consulta .glyphicon-chevron-right::before {
                                        color: #BCCF14 !important;
                                    }

                                    #consulta .glyphicon-chevron-left::before {
                                        color: #BCCF14 !important;
                                    }

                                    #consulta .panel-heading {
                                        border-color: #315002 !important;
                                        background-color: #315002 !important;
                                        background-image: none !important;
                                    }

                                    #consulta .panel-heading .panel-title a {
                                        text-decoration: none;
                                        color: #f5f5f5 !important;
                                        font-size: 18px;
                                        font-weight: 600;
                                        /* letter-spacing: 1px; */
                                    }



                                    @media(min-width:768px) {
                                        #consulta .box-collapse {
                                            grid-area: box-collapse;
                                            padding: 16px 3em;
                                        }

                                        #consulta .panel-heading .panel-title a:after {
                                            font-family: 'Glyphicons Halflings';
                                            content: "\e080";
                                            float: right;
                                            color: #BCCF14;
                                            font-size: 18px;
                                        }

                                        #consulta .panel-heading .panel-title a.collapsed:after {
                                            content: "\e114";
                                        }
                                    }
                                </style>

                            </div>

                            <!-- content-solicita -->
                            <div id="solicita" class="tab-pane fade">

                                <div class="seccion5">
                                    <div class='imagen-solicita'>
                                        <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/20-07-2022/recurso_14.png' alt='Consulta tu grupo Sisbén' title='Consulta tu grupo Sisbén'>
                                    </div>
                                    <div class="texto-solicita">
                                        <div class="solicita-btn">
                                            <h3>SOLICITA</h3>
                                        </div>
                                        <div class="parrafo">
                                            <p>a la Secretaría Distrital de Planeación la aplicación de la encuesta Sisbén IV en la Red CADE o <a href="https://sisbensol.sdp.gov.co" target="_blank" rel="noopener noreferrer">aquí</a></p>
                                        </div>
                                        <div>
                                            <a href="https://sisbensol.sdp.gov.co" target="_blank" rel="noopener noreferrer">https://sisbensol.sdp.gov.co/registro-solicitudes</a>
                                        </div>

                                    </div>
                                </div>
                                <style>
                                    .seccion5 {
                                        display: grid;
                                        gap: 10px;
                                        grid-auto-flow: dense;
                                        grid-template-columns: 1fr;
                                        grid-template-rows: auto;
                                        grid-template-areas:
                                            'imagen-solicita'
                                            'texto-solicita';
                                    }

                                    .seccion5 .imagen-solicita {
                                        grid-area: imagen-solicita;
                                        padding: 5%;
                                        max-width: 80%;
                                        margin: auto;
                                    }

                                    .seccion5 .texto-solicita {
                                        grid-area: texto-solicita;
                                        padding: 5%;
                                        /* height: px; */
                                        display: flex;
                                        flex-direction: column;
                                        justify-content: space-evenly;
                                        align-items: center;
                                    }

                                    .seccion5 .texto-solicita .parrafo {
                                        padding-top: 16px;
                                        padding-bottom: 16px;
                                    }

                                    .solicita-btn {
                                        width: 100%;
                                        border-bottom: solid #BCCF14 2px;
                                    }

                                    .solicita-btn h3 {
                                        font-size: 28px;
                                        font-weight: 700;
                                        text-align: center;
                                        line-height: 1.2;
                                        color: #315002;
                                        margin: 8px;
                                        padding: 5px 16px;
                                        /* margin-bottom: 30px; */
                                    }
                                </style>

                            </div>

                            <!-- content-accede -->
                            <div id="accede" class="tab-pane fade">

                                <div class="seccion6" id="seccion6">
                                    <div class="texto-accede">
                                        <div class="accede-btn">
                                            <h3>ACCEDE</h3>
                                        </div>
                                        <div class="parrafo">
                                            <p>luego de que se te haya asignado a uno de los grupos beneficiarios del Sisbén IV, podrás obtener el descuento en tus pasajes usando tu tarjeta personalizada Tu Llave. Si aún no la tienes, debes esperar un mes después de la resolución para solicitarla y acceder al beneficio.</p>
                                        </div>
                                        <div>
                                            <p>Consulta si ya eres beneficiario <a href="https://sisben.tullaveplus.gov.co/" target="_blank" rel="noopener noreferrer">aquí</a></p>
                                            <a href="https://sisben.tullaveplus.gov.co/" target="_blank" rel="noopener noreferrer">https://sisben.tullaveplus.gov.co/</a>
                                            <!-- <p>También puedes ver las resoluciones en la sección normatividad de esta página</p> -->
                                        </div>
                                    </div>
                                    <div class='imagen-accede'>
                                        <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/20-07-2022/recurso_16.png' alt='Consulta tu grupo Sisbén' title='Consulta tu grupo Sisbén'>
                                        <!-- <div class="text-center">
                                            <a class="btn-desliza" href="#seccion4">Desliza<span class="glyphicon glyphicon-name"></span></a>
                                        </div> -->
                                    </div>
                                </div>
                                <style>
                                    .seccion6 {
                                        display: grid;
                                        gap: 10px;
                                        grid-auto-flow: dense;
                                        grid-template-columns: 1fr;
                                        grid-template-rows: auto;
                                        grid-template-areas:
                                            'texto-accede'
                                            'imagen-accede';
                                    }

                                    .seccion6 .imagen-accede {
                                        grid-area: imagen-accede;
                                        padding: 5%;
                                        max-width: 80%;
                                        margin: auto;
                                    }

                                    .seccion6 .texto-accede {
                                        grid-area: texto-accede;
                                        padding: 5%;
                                        /* height: px; */
                                        display: flex;
                                        flex-direction: column;
                                        justify-content: space-evenly;
                                        align-items: center;
                                    }

                                    .seccion6 .texto-accede .parrafo {
                                        padding-top: 16px;
                                        padding-bottom: 16px;
                                    }

                                    .accede-btn {
                                        width: 100%;
                                        border-bottom: solid #BCCF14 2px;
                                    }

                                    .accede-btn h3 {
                                        font-size: 28px;
                                        font-weight: 700;
                                        text-align: center;
                                        line-height: 1.2;
                                        color: #315002;
                                        margin: 8px;
                                        padding: 5px 16px;
                                        /* margin-bottom: 30px; */
                                    }
                                </style>
                                <!-- <hr> -->
                                <!-- <div class="seccion7">
                                    <div class="enCuenta">
                                        <div>
                                            <h3>TEN EN CUENTA QUE <span class="recurso17"></span></h3>

                                            <p>Si actualmente tienes descuento en los pasajes del SITP por ser adulto mayor no
                                                puedes acceder a otro subsidio al mismo tiempo.</p>
                                            <p>Por tanto, si además estás en los grupos desde el A1 hasta el C4 en la
                                                clasificación del Sisbén IV, y quieres optar por el subsidio en las tarifas del
                                                SITP a estos grupos:</p>
                                        </div>
                                    </div>
                                    <div class="numeros">
                                        <div class="numero numero1">
                                            <div class="img-numero">
                                                <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/20-07-2022/recurso_18.png' alt='numero 18' title='numero 18'>
                                            </div>
                                            <h3>ACÉRCATE</h3>
                                            <p>A una caseta de personalizaciónde tarjeta Tu Llave.</p>
                                        </div>
                                        <div class="numero numero2">
                                            <div class="img-numero">
                                                <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/20-07-2022/recurso_19.png' alt='numero 19' title='numero 19'>
                                            </div>
                                            <h3>SOLICITA</h3>
                                            <p>Ser beneficiario del subsidio a los grupos priorizados del Sisbén IV, y anular el
                                                subsidio de adulto mayor.</p>
                                        </div>
                                        <div class="numero numero3">
                                            <div class="img-numero">
                                                <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/20-07-2022/recurso_20.png' alt='numero 20' title='numero 20'>
                                            </div>
                                            <h3>OBTÉN</h3>
                                            <p>El nuevo beneficio después de 24 horas de haber hecho la solicitud.</p>
                                        </div>
                                        <div class="numero numero4">
                                            <div class="img-numero">
                                                <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/20-07-2022/recurso_21.png' alt='numero 21' title='numero 21'>
                                            </div>
                                            <h3>PARA VOLVER AL BENEFICIO ANTERIOR</h3>
                                            <p>Deberás esperar un mes para hacer la solicitud.</p>
                                        </div>
                                    </div>

                                </div>
                                <style>
                                    .seccion7 {
                                        display: grid;
                                        gap: 10px;
                                        grid-auto-flow: dense;
                                        grid-template-columns: 1fr;
                                        grid-template-rows: auto;
                                        grid-template-areas:
                                            '';
                                    }

                                    .seccion7 .enCuenta {
                                        position: relative;
                                        margin: 16px;
                                        display: flex;
                                        flex-direction: column;
                                        justify-content: space-evenly;
                                        align-items: center;
                                        background-image: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/20-07-2022/recurso_17.png');
                                        background-size: 45%;
                                        background-position: top right;
                                        background-repeat: no-repeat;

                                    }

                                    .seccion7 .enCuenta h3 {
                                        font-size: 28;
                                        font-weight: 700;
                                        text-align: left;
                                        line-height: 1.2;
                                        color: #315002;
                                        border-bottom: #BCCF14 2px solid;
                                        text-align: left;
                                        padding: 10px 16px;
                                        margin: 8px;
                                        width: 60%;
                                    }


                                    .seccion7 .numeros {
                                        display: grid;
                                        gap: 10px;
                                        grid-auto-flow: dense;
                                        grid-template-columns: 1fr;
                                        grid-template-rows: auto;
                                        grid-template-areas:
                                            '';
                                    }

                                    .seccion7 .numero {
                                        padding: 5%;
                                        text-align: center;
                                    }

                                    .seccion7 .numeros .img-numero img {
                                        padding: 5%;
                                        width: 60%;
                                        margin: auto;
                                    }

                                    .seccion7 .numeros h3 {
                                        /* font-size: 1em; */
                                        font-weight: 700;
                                        text-align: center;
                                        line-height: 1;
                                        color: #315002;
                                        margin: 8px;
                                    }

                                    .seccion7 .numeros p {
                                        /* font-size: 1em; */
                                        font-weight: 500;
                                        text-align: center;
                                        line-height: 1.3;
                                        color: rgba(25, 25, 25, 1);
                                        margin: 8px;
                                    }
                                </style> -->

                            </div>

                            <style>
                                .box-wrp .box-collapsable .contents {
                                    border: solid 2px #f5f5f5;
                                    border-radius: 5px;
                                    /* background-color: #f5f5f5; */
                                }

                                .box-wrp .box-collapsable .tab-pane {
                                    border: solid 2px #f5f5f5;
                                    border-radius: 5px;
                                    /* background-color: #f5f5f5; */

                                }

                                @media(min-width:768px) {
                                    .box-wrp .box-collapsable .contents {
                                        border: solid 8px #f5f5f5;
                                        border-radius: 5px;
                                        /* background-color: #f5f5f5; */
                                    }

                                    .box-wrp .box-collapsable .tab-pane {
                                        border: solid 8px #f5f5f5;
                                        border-radius: 5px;
                                        /* background-color: #f5f5f5; */

                                    }
                                }

                                @media(min-width:992px) {}

                                @media(min-width:1200px) {}
                            </style>

                        </div>

                    </div>

                </div>
                <!-- Fin Set -->

                <div role="tabpanel" class="tab-pane" id="normatividad">

                    <!-- Component box recursos -->
                    <div class="box-recursos">
                        <div class="title title-h3">
                            <h3>Recursos</h3>
                        </div>

                        <div class="media">
                            <div class="media-left">
                                <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/08-02-2023/decreto_004_de_2023_1_1.pdf" target="_blank" rel="noopener noreferrer" download="" title="Decreto No. 004 de 06 de enero de 2023">
                                    <img class="media-object" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/08-01-2023/pdf.png" alt="icono de documento pdf" width="48px">
                                </a>
                            </div>
                            <div class="media-body">
                                <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/08-02-2023/decreto_004_de_2023_1_1.pdf" target="_blank" rel="noopener noreferrer" download="" title="Ir a descarga de Decreto No. 004 de 06 de enero de 2023">
                                    <h4 class="media-heading">Decreto No. 004 de 06 de enero de 2023</h4>
                                </a>
                                <p>"Por el medio del cual se fija la tarifa del Sistema Integrado de Transporte Público - SITP y se dictan otras disposiciones."</p>
                            </div>
                        </div>

                        <div class="media">
                            <div class="media-left">
                                <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/08-02-2023/202352000814696_resolucion_sisben_1.pdf" target="_blank" rel="noopener noreferrer" download="" title="resolución número 81469 de 2023">
                                    <img class="media-object" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/08-01-2023/pdf.png" alt="icono de documento pdf" width="48px">
                                </a>
                            </div>
                            <div class="media-body">
                                <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/08-02-2023/202352000814696_resolucion_sisben_1.pdf" target="_blank" rel="noopener noreferrer" download="" title="Ir a descarga de resolución número 81469 de 2023">
                                    <h4 class="media-heading">Resolución Número 81469 de 2023</h4>
                                </a>
                                <p>"Por medio del cual se reglamentan los artículos 6° y 8° del Decreto Distrital 004 de 2023 y se dictan otras disposiciones."</p>
                            </div>
                        </div>

                    </div>
                    <style>
                        .box-wrp .box-recursos {
                            grid-area: box-recursos;
                            padding: 2.2em;
                        }

                        .box-recursos .title-h3 {
                            color: rgba(77, 84, 31, 1);
                            padding-bottom: 4px;
                            border-bottom: 2px solid rgba(77, 84, 31, 0.5);
                        }
                    </style>


                </div>
            </div>
        </div>

        <hr>

        <!-- Sección box full-news -->
        <div class="box-full-news">
            <h2>Noticias</h2>
            <!-- <p></p> -->
            <br>
            <div class="new">
                <div class="imagen img-new">
                    <a href="https://www.movilidadbogota.gov.co/web/noticia/cerca_de_900_mil_personas_podran_ser_beneficiadas_en_las_tarifas_del_sistema_integrado_de" target="_blank" rel="noopener noreferrer">
                        <img class="img-responsive w-100" src="https://lh4.googleusercontent.com/M5Xo0fB9zCyKE2xOYnGsjqck_yk263BOOTd-3dxYcbZ6bS_ND6e9_ZKYRc06i1BDKB9rXtachnx_N_xl6Vi3d_vuhPUZUMZj4rd3vUc67lQl4D5zkpDhuv9t2TnjDbeb5yu0KxOBH7_Gnj_qe68hDw" alt="Foto de parada de bus zonal en el momento de abordaje" title="Foto de parada de bus zonal en el momento de abordaje">
                    </a>
                </div>
                <div class="txt-new">
                    <a href="https://www.movilidadbogota.gov.co/web/noticia/cerca_de_900_mil_personas_podran_ser_beneficiadas_en_las_tarifas_del_sistema_integrado_de" target="_blank" rel="noopener noreferrer">
                        <h3>Cerca de 900 mil personas podrán ser beneficiadas en las tarifas del Sistema Integrado de Transporte Público</h3>
                    </a>
                    <p><strong>Bogotá, 01 de febrero de 2023 (@SectorMovilidad).</strong> A partir de hoy, 01 de febrero, los beneficiarios de la tarifa preferencial para el Sistema Integrado de Transporte Público - SITP son las personas que cuentan con una encuesta validada en Sisbén IV, entre los grupos A1 a B7, la población con menor capacidad de pago en la ciudad.</p>
                    <a href="https://www.movilidadbogota.gov.co/web/noticia/cerca_de_900_mil_personas_podran_ser_beneficiadas_en_las_tarifas_del_sistema_integrado_de" target="_blank" rel="noopener noreferrer">Ver más</a>
                </div>
            </div>
        </div>
        <style>
            .box-wrp .box-full-news {
                grid-area: box-full-news;
                padding: 0 2em;
                margin-top: 2em;
                text-align: left;
            }

            .box-wrp .box-full-news h2 {
                color: rgba(77, 84, 31, 1);
                font-weight: 700;
            }

            .box-full-news .new {
                display: grid;
                gap: 8px;
                grid-auto-flow: dense;
                grid-template-columns: 1fr;
                grid-template-rows: auto;
                grid-template-areas:
                    'imagen'
                    'texto';
            }

            .img-new {
                grid-area: imagen;
                padding: 0 2em 2em 2em;
            }

            .img-new img {
                max-height: 244px;
                object-fit: cover;
                object-position: center;
            }

            .txt-new {
                grid-area: texto;
                padding: 0 2em 2em 2em;
            }

            .txt-new h3 {
                color: rgba(77, 84, 31, 1);
                margin-top: 0px;
            }

            @media(min-width:768px) {
                .box-full-news .new {
                    gap: 8px;
                    grid-template-columns: 1fr 1fr;
                    grid-template-areas:
                        'imagen texto';
                }
            }
        </style>




    </div>
    <!-- Fin seccion Ppal Tabs  -->

</div>
<!-- End Set Wrapper -->

<!-- Styles -->
<style type='text/css'>
    .field-item.even .centertil {
        visibility: hidden;
        margin-top: -50px;
    }

    .region-content {
        padding: 0px;
        overflow: hidden;
    }

    .sisben {
        max-width: 980px;
        word-wrap: break-word;
        font-family: 'Montserrat', sans-serif;
        font-size: 15px;
        font-weight: 500;
        text-align: justify;
        line-height: 1.4;
        color: rgba(25, 25, 25, 1);
        /* margin: 8px; */
        margin-top: 30px;

    }

    /*
            .sisben [class*='col-'] {
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
    @media(max-width:767px) {}

    @media(min-width:768px) {

        .box-content-consulta {

            grid-template-columns: 1fr 1fr;
            grid-template-areas:
                'imagen-consulta texto-sec2';
        }

        .seccion4 {
            /* gap: 30px; */
            column-gap: 30px;

            grid-template-columns: repeat(3, 1fr);
            grid-template-areas:
                'box-grupos box-grupos box-grupos'
                'titulo titulo titulo'
                'unoseis listado tarjeta';
        }

        .seccion4 .card-sisben .texto p {
            margin: 16px 8px;
        }


        .seccion5 {
            grid-template-columns: 1fr 1fr;
            grid-template-areas:
                'imagen-solicita texto-solicita';
        }

        .seccion6 {
            grid-template-columns: 1fr 1fr;
            grid-template-areas:
                'texto-accede imagen-accede';
        }

        .seccion7 {
            grid-template-columns: 1fr 1fr;
        }

        .seccion7 .numeros {
            grid-template-columns: 1fr 1fr;
        }

    }

    @media(min-width:992px) {}

    @media(min-width:1200px) {}
</style>
<!-- End Styles -->
