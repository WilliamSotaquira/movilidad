@extends('welcome')
@section('contenido')
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fuente Montserrat -----  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<link rel='preconnect' href='https://fonts.googleapis.com'>
<link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
<link href='https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap' rel='stylesheet'>
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin Fuente Montserrat -  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<!-- Set Wrapper -->
<div class='container-fluid mesTaxista'>
    <div class='box-wrp'>
        <div class='box-head'>
            <div class='imagenPpal'>
                <!-- <img class='img-responsive w-100' src='' alt='' title=''> -->
            </div>
            <div class="tituloPpal">
                <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/26-07-2022/logo_si_voy_en_taxi-02.png' alt='Logo #SiVoyEnTaxi' title='Logo #SiVoyEnTaxi'>
                <h3 class="text-center">
                    Agosto: Mes del Taxista en Bogotá
                </h3>

            </div>
        </div>
        <style>
            .box-head {
                display: grid;
                gap: 10px;
                grid-auto-flow: dense;
                grid-template-columns: 1fr;
                grid-template-rows: auto;
                grid-template-areas:
                    'imagenPpal'
                    'tituloPpal';
                height: 320px;
                background: #fdcd04 url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/26-07-2022/mestaxista_980.png') top center no-repeat;
                background-size: cover;

            }

            .box-head .imagenPpal {
                grid-area: imagenPpal;

            }

            .box-head .tituloPpal {

                grid-area: tituloPpal;
                /* margin: auto 8%; */
                /* height: px; */
                background-color: rgba(255, 255, 255, 1);
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                margin: 30px;
                padding: 0% 5%;
                border-top: 4px solid #fdcd04;
                border-bottom: 10px solid #fdcd04;
                border-radius: 8px;

            }

            .box-head .tituloPpal img {
                max-width: 120px;
                justify-content: center;
                align-items: center;
                text-align: center;
            }

            .box-head h3 {
                display: inline;
                font-size: 26px;
                font-weight: 700;
                text-align: center;
                line-height: 1.1;
                color: rgba(0, 0, 0, 1);
                margin: 8px
            }
        </style>
        <div class="box-intro">
            <p>Durante el <strong>Mes del Taxista</strong> destacamos las buenas prácticas de las y los taxistas, y celebramos con diferentes actividades que les ayudará a mejorar su calidad de vida y el servicio que prestan.</p>
            <h3>¡Participa!</h3>
        </div>
        <style>
            .box-intro {
                padding: 3% 10%;
            }

            .box-intro p {
                font-size: 20px;
                font-weight: 500;
                text-align: center;
                line-height: 1.5;
                color: rgba(25, 25, 25, 1);
                margin: 8px;
            }

            .box-intro h3 {
                font-size: 24px;
                font-weight: 700;
                text-align: center;
                line-height: 1;
                color: rgba(25, 25, 25, 1);

            }
        </style>
        <div class="box-body">
            <div class="titulo">
                <h3>Agenda</h3>
            </div>
            <div class="timeline">
                <!-- collapse_agendaTaxis -->
                <div class='panel-group' id='accordion_agendaTaxis' role='tablist ' aria-multiselectable='true'>

                    <div class="box-card left">
                        <div class="content">
                            <!-- collapse_fecha1 -->
                            <div class='panel panel-default'>
                                <div class='panel-heading' role='tab' id='heading_fecha1'>
                                    <h4 class='panel-title'>
                                        <a role='button' data-toggle='collapse' data-parent='#accordion_agendaTaxis' href='#collapse_fecha1' aria-expanded='true' aria-controls='collapse_fecha1'>
                                            Inauguración
                                        </a>
                                    </h4>
                                </div>
                                <div id='collapse_fecha1' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_fecha1'>
                                    <div class='panel-body'>

                                        <dl>
                                            <dd>Conversatorio de Buenas Prácticas en Taxis</dd>
                                            <dd>Exhibición de electromovilidad</dd>
                                            <dd>Fecha: 5 de agosto</dd>
                                            <dd>Hora: 8:00 a.m. a 10:00 m. </dd>
                                            <dd>Lugar: Auditorio Plaza de los Artesanos</dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                            <!-- /#fin _fecha1 -->
                        </div>
                    </div>

                    <div class="box-card right">
                        <div class="content">
                            <!-- collapse_fecha2 -->
                            <div class='panel panel-default'>
                                <div class='panel-heading' role='tab' id='heading_fecha2'>
                                    <h4 class='panel-title'>
                                        <a role='button' data-toggle='collapse' data-parent='#accordion_agendaTaxis' href='#collapse_fecha2' aria-expanded='true' aria-controls='collapse_fecha2'>
                                            Taller: Conciencia Financiera
                                        </a>
                                    </h4>
                                </div>
                                <div id='collapse_fecha2' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_fecha2'>
                                    <div class='panel-body'>
                                        <dl>
                                            <dd>Fecha: 8 de agosto</dd>
                                            <dd>Hora: 9:00 a 10:00 a.m.</dd>
                                            <dd>Lugar: Auditorio Plaza de los Artesanos</dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                            <!-- /#fin _fecha2 -->
                        </div>
                    </div>

                    <div class="box-card left">
                        <div class="content">
                            <!-- collapse-fecha3 -->
                            <div class='panel panel-default'>
                                <div class='panel-heading' role='tab' id='heading-fecha3'>
                                    <h4 class='panel-title'>
                                        <a role='button' data-toggle='collapse' data-parent='#accordion' href='#collapse-fecha3' aria-expanded='true' aria-controls='collapse-fecha3'>
                                            Obra teatral: La Labor del Taxi
                                        </a>
                                    </h4>
                                </div>
                                <div id='collapse-fecha3' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading-fecha3'>
                                    <div class='panel-body'>
                                        <dl>
                                            <dd>Fecha: 9 de agosto </dd>
                                            <dd>Lugar: Terminal El Salitre </dd>
                                            <dd>Hora: 9:00 a.m.</dd>
                                            <hr>
                                            <dd>Fecha: 9 de agosto </dd>
                                            <dd>Lugar: Aeropuerto El Dorado </dd>
                                            <dd>Hora: 11:00 a.m.</dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                            <!-- /#fin -fecha3 -->
                        </div>
                    </div>

                    <div class="box-card right">
                        <div class="content">
                            <!-- collapse_fecha4 -->
                            <div class='panel panel-default'>
                                <div class='panel-heading' role='tab' id='heading_fecha4'>
                                    <h4 class='panel-title'>
                                        <a role='button' data-toggle='collapse' data-parent='#accordion' href='#collapse_fecha4' aria-expanded='true' aria-controls='collapse_fecha4'>
                                            Taller: Endeudamiento Responsable e Inteligente
                                        </a>
                                    </h4>
                                </div>
                                <div id='collapse_fecha4' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_fecha4'>
                                    <div class='panel-body'>
                                        <dl>
                                            <dd>Fecha: 10 de agosto</dd>
                                            <dd>Hora: 10:00 a 11:00 a.m.</dd>
                                            <dd>Lugar: Auditorio Plaza de los Artesanos</dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                            <!-- /#fin _fecha4 -->
                        </div>
                    </div>

                    <div class="box-card left">
                        <div class="content">
                            <!-- collapse-fecha5 -->
                            <div class='panel panel-default'>
                                <div class='panel-heading' role='tab' id='heading-fecha5'>
                                    <h4 class='panel-title'>
                                        <a role='button' data-toggle='collapse' data-parent='#accordion' href='#collapse-fecha5' aria-expanded='true' aria-controls='collapse-fecha5'>
                                            Charla: Beneficios por cotizar a los sistemas de seguridad social
                                        </a>
                                    </h4>
                                </div>
                                <div id='collapse-fecha5' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading-fecha5'>
                                    <div class='panel-body'>
                                        <dl>
                                            <dd>Fecha: 11 de agosto</dd>
                                            <dd>Hora: 9:00 a 10:00 a.m. </dd>
                                            <dd>Lugar: Auditorio Plaza de los Artesanos</dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                            <!-- /#fin -fecha5 -->
                        </div>
                    </div>

                    <div class="box-card right">
                        <div class="content">
                            <!-- collapse_fecha6 -->
                            <div class='panel panel-default'>
                                <div class='panel-heading' role='tab' id='heading_fecha6'>
                                    <h4 class='panel-title'>
                                        <a role='button' data-toggle='collapse' data-parent='#accordion' href='#collapse_fecha6' aria-expanded='true' aria-controls='collapse_fecha6'>
                                            Capacitación: Mecanismos de protección para la vejez - BEPS
                                        </a>
                                    </h4>
                                </div>
                                <div id='collapse_fecha6' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_fecha6'>
                                    <div class='panel-body'>
                                        <dl>
                                            <dd>Fecha: 11 de agosto</dd>
                                            <dd>Hora: 10:00 a 11:00 a.m.</dd>
                                            <dd>Lugar: Auditorio Plaza de los Artesanos</dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                            <!-- /#fin _fecha6 -->
                        </div>
                    </div>

       
                    <div class="box-card right">
                        <div class="content">
                            <!-- collapse_fecha8 -->
                            <div class='panel panel-default'>
                                <div class='panel-heading' role='tab' id='heading_fecha8'>
                                    <h4 class='panel-title'>
                                        <a role='button' data-toggle='collapse' data-parent='#accordion' href='#collapse_fecha8' aria-expanded='true' aria-controls='collapse_fecha8'>
                                            Capacitación: Finanzas personales
                                        </a>
                                    </h4>
                                </div>
                                <div id='collapse_fecha8' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_fecha8'>
                                    <div class='panel-body'>
                                        <dl>
                                            <dd><strong>Revisión Técnico mecánica</strong></dd>
                                            <dd>Fecha: 12 de agosto</dd>
                                            <dd>Hora: 10:00 a 11:00 a.m.</dd>
                                            <dd>Lugar: Plaza de los Artesanos</dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                            <!-- /#fin _fecha8 -->
                        </div>
                    </div>

                    <div class="box-card left">
                        <div class="content">
                            <!-- collapse-fecha9 -->
                            <div class='panel panel-default'>
                                <div class='panel-heading' role='tab' id='heading-fecha9'>
                                    <h4 class='panel-title'>
                                        <a role='button' data-toggle='collapse' data-parent='#accordion' href='#collapse-fecha9' aria-expanded='true' aria-controls='collapse-fecha9'>
                                            Capacitación: Manejo del estrés y clase de yoga
                                        </a>
                                    </h4>
                                </div>
                                <div id='collapse-fecha9' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading-fecha9'>
                                    <div class='panel-body'>
                                        <dl>
                                            <dd>Fecha: 16 de agosto</dd>
                                            <dd>Hora: 2:00 a 5:00 p.m. </dd>
                                            <dd>Lugar: Plaza de los Artesanos</dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                            <!-- /#fin -fecha9 -->
                        </div>
                    </div>

                    <div class="box-card right">
                        <div class="content">
                            <!-- collapse_fecha10 -->
                            <div class='panel panel-default'>
                                <div class='panel-heading' role='tab' id='heading_fecha10'>
                                    <h4 class='panel-title'>
                                        <a role='button' data-toggle='collapse' data-parent='#accordion' href='#collapse_fecha10' aria-expanded='true' aria-controls='collapse_fecha10'>
                                            Jornada de toma de peso y tamizajes
                                        </a>
                                    </h4>
                                </div>
                                <div id='collapse_fecha10' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_fecha10'>
                                    <div class='panel-body'>
                                        <dl>
                                            <dd>Fecha: 17 y 24 de agosto</dd>
                                            <dd>Hora: 8:00 a. m. a 12:00 m. </dd>
                                            <dd>Lugar: La Terminal Salitre</dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                            <!-- /#fin _fecha10 -->
                        </div>
                    </div>

                    <div class="box-card left">
                        <div class="content">
                            <!-- collapse_fecha11 -->
                            <div class='panel panel-default'>
                                <div class='panel-heading' role='tab' id='heading_fecha11'>
                                    <h4 class='panel-title'>
                                        <a role='button' data-toggle='collapse' data-parent='#accordion' href='#collapse_fecha11' aria-expanded='true' aria-controls='collapse_fecha11'>
                                            Jornada primer respondiente
                                        </a>
                                    </h4>
                                </div>
                                <div id='collapse_fecha11' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_fecha11'>
                                    <div class='panel-body'>
                                        <dd>Fecha: 19 y 23 de agosto</dd>
                                        <dd>Hora: 8:00 a.m. a 5:00 p.m.</dd>
                                        <dd>Lugar: Secretaría de Salud</dd>
                                    </div>
                                </div>
                            </div>
                            <!-- /#fin _fecha11 -->
                        </div>
                    </div>

                    <div class="box-card right">
                        <div class="content">
                            <!-- collapse-fecha12 -->
                            <div class='panel panel-default'>
                                <div class='panel-heading' role='tab' id='heading-fecha12'>
                                    <h4 class='panel-title'>
                                        <a role='button' data-toggle='collapse' data-parent='#accordion' href='#collapse-fecha12' aria-expanded='true' aria-controls='collapse-fecha12'>
                                            Capacitación: Vulneración durante la conducción
                                        </a>
                                    </h4>
                                </div>
                                <div id='collapse-fecha12' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading-fecha12'>
                                    <div class='panel-body'>
                                        <dl>
                                            <dd>Revisión Técnico mecánica</dd>
                                            <dd>Fecha: 25 de agosto</dd>
                                            <dd>Hora: 9:00 a 11:00 a. m.</dd>
                                            <dd>Lugar: Plaza de Artesanos</dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                            <!-- /#fin -fecha12 -->
                        </div>
                    </div>

                    <div class="box-card left">
                        <div class="content">
                            <!-- collapse_fecha13 -->
                            <div class='panel panel-default'>
                                <div class='panel-heading' role='tab' id='heading_fecha13'>
                                    <h4 class='panel-title'>
                                        <a role='button' data-toggle='collapse' data-parent='#accordion' href='#collapse_fecha13' aria-expanded='true' aria-controls='collapse_fecha13'>
                                            Rally Turístico por Bogotá
                                        </a>
                                    </h4>
                                </div>
                                <div id='collapse_fecha13' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_fecha13'>
                                    <div class='panel-body'>
                                        <dl>
                                            <dd>Fecha: Desde el 18 hasta el 21 de agosto</dd>
                                            <dd>Hora: Disposición del conductor</dd>
                                            <dd>Lugar: Atractivos turísticos de Bogotá</dd>
                                            <dd><i>Para mas información consulte el siguiente <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/19-08-2022/2022-08-17_taxi-_rally_turistico_a.pdf" target="_blank" rel="noopener noreferrer">documento PDF</a></i></dd>
                                        </dl>
                                        
                                    </div>
                                </div>
                            </div>
                            <!-- /#fin _fecha13 -->
                        </div>
                    </div>

                    <div class="box-card right">
                        <div class="content">
                            <!-- collapse_fecha14 -->
                            <div class='panel panel-default'>
                                <div class='panel-heading' role='tab' id='heading_fecha14'>
                                    <h4 class='panel-title'>
                                        <a role='button' data-toggle='collapse' data-parent='#accordion' href='#collapse_fecha14' aria-expanded='true' aria-controls='collapse_fecha14'>
                                            Feria de convivencia
                                        </a>
                                    </h4>
                                </div>
                                <div id='collapse_fecha14' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_fecha14'>
                                    <div class='panel-body'>
                                        <dl>
                                            <dd>Fecha: 29 de agosto</dd>
                                            <dd>Hora: 10:00 a. m. a 2:00 p. m.</dd>
                                            <dd>Lugar: Por confirmar</dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                            <!-- /#fin _fecha14 -->
                        </div>
                    </div>

                    <div class="box-card left">
                        <div class="content">
                            <!-- collapse_fecha15 -->
                            <div class='panel panel-default'>
                                <div class='panel-heading' role='tab' id='heading_fecha15'>
                                    <h4 class='panel-title'>
                                        <a role='button' data-toggle='collapse' data-parent='#accordion' href='#collapse_fecha15' aria-expanded='true' aria-controls='collapse_fecha15'>
                                            Ceremonia de Clausura
                                        </a>
                                    </h4>
                                </div>
                                <div id='collapse_fecha15' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_fecha15'>
                                    <div class='panel-body'>
                                        <dl>
                                            <dd>Reconocimiento: las y los mejores conductores</dd>
                                            <dd>Empresas con un buen desempeño</dd>
                                            <dd>Ganadores del Rally Turístico</dd>
                                            <dd>Conductor(a) certificado en equidad de género</dd>
                                            <dd>Fecha: 31 de agosto</dd>
                                            <dd>Hora: 8:00 a 10:00 a. m.</dd>
                                            <dd>Lugar: Auditorio Plaza de los Artesanos</dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                            <!-- /#fin _fecha15 -->
                        </div>
                    </div>

                </div>
                <!-- /#fin _agendaTaxis -->

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

    .mesTaxista {
        max-width: 980px;
        word-wrap: break-word;
        font-family: 'Montserrat', sans-serif;
        font-size: 15px;
        font-weight: 500;
        text-align: left;
        line-height: 1.3;
        color: rgba(25, 25, 25, 1);
        margin: 8px;
    }

    /*
    .mesTaxista [class*='col-'] {
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

    @media(max-width:767px) {}

    @media(min-width:768px) {

        .box-head {
            grid-template-columns: 1fr 1fr;
            grid-template-areas:
                'tituloPpal imagenPpal';
        }


    }

    @media(min-width:992px) {}

    @media(min-width:1200px) {}
</style>
<!-- End Styles -->

<style>
    /* Set a background color */
    .panel-default>.panel-heading {
        background-color: #fff !important;
        background-image: none !important;
    }


    .panel-heading {
        border-top-left-radius: 8px !important;
        border-top-right-radius: 8px !important;
    }

    .panel-group .panel {
        border-radius: 8px !important;
    }


    .box-body {
        border-radius: 15px;
        box-sizing: border-box;
        background-color: #ffefa4;
        padding: 1% 3%;
    }

    .box-body .titulo {
        background-color: #fdcd04;
        border-radius: 8px;
    }

    .box-body .titulo h3 {
        padding: 20px;
        margin: 15px 15px 30px 15px;
        font-size: 18px;
        font-weight: 800;
        text-align: center;
        line-height: 1;
        color: rgba(25, 25, 25, 1);
        text-transform: uppercase;
    }

    /* The actual timeline (the vertical ruler) */
    .box-body .timeline {
        position: relative;
        max-width: 980px;
        margin: 0 auto;
    }

    /* The actual timeline (the vertical ruler) */
    .box-body .timeline::after {
        content: '';
        position: absolute;
        width: 6px;
        background-color: white;
        top: 0;
        bottom: 0;
        left: 50%;
        margin-left: -3px;
    }

    /* Container around content */
    .box-card {
        padding: 10px 25px;
        position: relative;
        background-color: inherit;
        width: 50%;
    }

    /* The circles on the timeline */
    .box-card::after {
        content: '';
        position: absolute;
        width: 25px;
        height: 25px;
        right: -17px;
        background-color: white;
        border: 4px solid #FF9F55;
        top: 15px;
        border-radius: 50%;
        z-index: 1;
    }

    /* Place the container to the left */
    .left {
        left: 0;
    }

    /* Place the container to the right */
    .right {
        left: 50%;
    }

    /* Add arrows to the left container (pointing right) */
    .left::before {
        content: " ";
        height: 0;
        position: absolute;
        top: 22px;
        width: 0;
        z-index: 1;
        right: 15px;
        border: medium solid white;
        border-width: 10px 0 10px 10px;
        border-color: transparent transparent transparent #ddd;
    }

    /* Add arrows to the right container (pointing left) */
    .right::before {
        content: " ";
        height: 0;
        position: absolute;
        top: 22px;
        width: 0;
        z-index: 1;
        left: 15px;
        border: medium solid white;
        border-width: 10px 10px 10px 0;
        border-color: transparent #ddd transparent transparent;
    }

    /* Fix the circle for containers on the right side */
    .right::after {
        left: -16px;
    }

    /* The actual content */
    .content {
        /* padding: 15px 15px; */
        background-color: white;
        position: relative;
        border-radius: 6px;
    }

    .content dl {
        margin-top: 0;
        margin-bottom: 0px;
    }

    .content a {
        /* font-size: 1em; */
        font-weight: 700;
        text-align: left;
        line-height: 1.2;
        color: rgba(25, 25, 25, 1);
        margin: 8px;
    }

    /* Media queries - Responsive timeline on screens less than 600px wide */
    @media screen and (max-width: 600px) {

        /* Place the timelime to the left */
        .box-body .timeline::after {
            left: 31px;
        }

        /* Full-width containers */
        .box-card {
            width: 100%;
            padding-left: 70px;
            padding-right: 25px;
        }

        /* Make sure that all arrows are pointing leftwards */
        .box-card::before {
            left: 60px;
            border: medium solid white;
            border-width: 10px 10px 10px 0;
            border-color: transparent white transparent transparent;
        }

        /* Make sure all circles are at the same spot */
        .left::after,
        .right::after {
            left: 15px;
        }

        /* Make all right containers behave like the left ones */
        .right {
            left: 0%;
        }
    }
</style>