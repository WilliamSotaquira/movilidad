@extends('welcome')
@section('title','sistemas')
@section('contenido')

<!-- Set sistemas -->
<div class="set-wrapper sistemas">

    <!-- Component box title-center -->
    <div class="box-title-center">
        <h2>Sistemas de Gestión de Secretaría Distrital de Movilidad</h2>
    </div>
    <style>
        .field-item.even .centertil {
            visibility: hidden;
            margin-top: -50px;
        }

        .set-wrapper .box-title-center {
            grid-area: box-title-center;
            margin-bottom: 2em;
        }

        .box-title-center h2 {
            text-align: center;
            font-size: 2em;
            font-weight: 600;
            color: rgba(77, 84, 31, 1);
        }
    </style>


    <!-- Sección box video -->
    <div class="box box-video">
        <video controls="" style="width: 100%;" poster="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/05-08-2023/vlcsnap-2023-08-04-16h51m38s582.png">
            <source src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/12-10-2022/sistemas_de_gestion.mp4" type="video/mp4">
        </video>
    </div>
    <style>
        .set-wrapper .box-video {
            grid-area: box-video;
            padding: 0 1em;
        }

        @media(min-width:768px) {
            .set-wrapper .box-video {
                padding: 0 6em;
            }
        }
    </style>


    <!-- Sección box descripcion -->
    <div class="box box-descripcion">
        <p class="paragraph ph-type-1 ph-id-1">En consistencia con el estándar del Modelo Integrado de Planeación y Gestión (MIPG), el Sistema Integrado de Gestión de la Secretaría de Movilidad está conformado por cinco sistemas que tienen como propósito la <strong>mejora continua y el fortalecimiento del desempeño institucional de la Entidad.</strong></p>
    </div>
    <style>
        .set-wrapper .box-descripcion {
            grid-area: box-descripcion;
            /* height: px; */
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 2em;
        }

        .box-descripcion p {
            font-size: 1.2em;
            font-weight: normal;
            text-align: center;
            line-height: 1.5;
        }
    </style>



    <!-- Sección box buttons -->
    <div class="box box-buttons">

        <div class="card zoom">
            <a href="https://www.movilidadbogota.gov.co/web/sistema_de_gestion_de_calidad">
                <div class="card-button card-sg-1">
                    <div class="img-logo logo-sg-1">
                        <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/13-06-2022/propuesta_logo_sgc_op2_b.png" alt="logo sistema de gestión de calidad" title="logo sistema de gestión de calidad">
                    </div>
                    <div class="text-card-sg">
                        <h3 class="title title-type-2 title-id-2">Sistema de Gestión de Calidad</h3>
                    </div>
                </div>
            </a>
        </div>

        <div class="card zoom">
            <a href="https://www.movilidadbogota.gov.co/web/canal-denuncias-antisoborno">
                <div class="card-button card-sg-2">
                    <div class="img-logo logo-sg-1">
                        <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/13-12-2021/micrositio_sys_no_al_soborno.png" alt="logo Sistema de Gestión Antisoborno" title="logo Sistema de Gestión Antisoborno">
                    </div>
                    <div class="text-card-sg">
                        <h3 class="title title-type-2 title-id-2">Sistema de Gestión Antisoborno</h3>
                    </div>
                </div>
            </a>
        </div>

        <div class="card zoom">
            <a href="https://www.movilidadbogota.gov.co/web/SGSST">
                <div class="card-button card-sg-3">
                    <div class="img-logo logo-sg-1">
                        <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/12-12-2021/micrositio_sys_seguridad_y_salud.png" alt="logo Sistema de Gestión de Seguridad y Salud en el Trabajo" title="logo Sistema de Gestión de Seguridad y Salud en el Trabajo">
                    </div>
                    <div class="text-card-sg">
                        <h3 class="title title-type-2 title-id-2">Sistema de Gestión de Seguridad y Salud en el Trabajo</h3>
                    </div>
                </div>
            </a>
        </div>

        <div class="card zoom">
            <a href="https://www.movilidadbogota.gov.co/web/sistema_de_gestion_ambiental">
                <div class="card-button card-sg-4">
                    <div class="img-logo logo-sg-1">
                        <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/13-12-2021/micrositio_sys_gestion_ambiental.png" alt="logo Sistema de Gestión Ambiental" title="logo Sistema de Gestión Ambiental">
                    </div>
                    <div class="text-card-sg">
                        <h3 class="title title-type-2 title-id-2">Sistema de Gestión Ambiental</h3>
                    </div>
                </div>
            </a>
        </div>

        <div class="card zoom">
            <a href="https://www.movilidadbogota.gov.co/web/sistema_de_gestion_de_seguridad_de_la_informacion">
                <div class="card-button card-sg-5">
                    <div class="img-logo logo-sg-1">
                        <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/05-08-2023/sgsi_icono-mini_001_800x400.png" alt="logo Sistema de Gestión de Seguridad de la Información" title="logo Sistema de Gestión de Seguridad de la Información">
                    </div>
                    <div class="text-card-sg">
                        <h3 class="title title-type-2 title-id-2">Sistema de Gestión de Seguridad de la Información</h3>
                    </div>
                </div>
            </a>
        </div>

        <div class="card zoom">
            <a href="https://www.movilidadbogota.gov.co/web/sistema_de_gestion_de_continuidad_del_negocio">
                <div class="card-button card-sg-6">
                    <div class="img-logo logo-sg-1">
                        <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/28-06-2023/logo-sistea-gestion-continuidad-negocio.jpg" alt="logo Sistema de Gestión de Continuidad del Negocio" title="logo Sistema de Gestión de Continuidad del Negocio">
                    </div>
                    <div class="text-card-sg">
                        <h3 class="title title-type-2 title-id-2">Sistema de Gestión de Continuidad del Negocio</h3>
                    </div>
                </div>
            </a>
        </div>

        <div class="card zoom">
            <a href="https://www.movilidadbogota.gov.co/web/sistema_gestion_efr">
                <div class="card-button card-sg-7">
                    <div class="img-logo logo-sg-1">
                        <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/13-12-2021/micrositio_sys_efr.png" alt="logo Empresa Familiarmente Responsable" title="logo Empresa Familiarmente Responsable">
                    </div>
                    <div class="text-card-sg">
                        <h3 class="title title-type-2 title-id-2">Empresa Familiarmente Responsable</h3>
                    </div>
                </div>
            </a>
        </div>

    </div>
    <style>
        .set-wrapper .box-buttons {
            padding-top: 1em;
            padding-bottom: 1em;
            grid-area: box-buttons;
            display: grid;
            gap: 0px;
            grid-auto-flow: dense;
            grid-template-columns: 1fr;
            grid-template-rows: auto;
            border-top: solid 2px #4e4e4e40;
            border-bottom: solid 2px #4e4e4e40;

        }

        @media(min-width:768px) {
            .set-wrapper .box-buttons {
                grid-area: box-buttons;
                display: grid;
                grid-auto-flow: dense;
                grid-template-columns: 1fr 1fr 1fr;
                grid-template-rows: auto;
            }

        }


        .box-buttons .card-button {
            display: grid;
            grid-auto-flow: dense;
            grid-template-columns: 30% 70%;
            grid-template-rows: auto;

            padding: 4px;
            margin: 8px 16px;
            border-radius: 8px;

        }


        @media(min-width:768px) {
            .box-buttons .card-button {
                display: grid;
                grid-auto-flow: dense;
                grid-template-columns: 30% 70%;
                grid-template-rows: auto;
                padding: 4px;
                margin: 4px 0.5vh;
                border-radius: 8px;
            }

        }

        .box-buttons .card-button:hover {
            opacity: 0.8;
        }

        .card-button .img-logo {
            background-color: #fff;
            height: 100%;
            width: 100%;
            object-fit: cover;
            border-radius: 6px 0 0 6px;
        }

        .card-button .img-logo img {
            border-radius: 6px 0 0 6px;
            margin: auto;
            padding: 4px;
        }



        .card-button .text-card-sg {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .card-button .text-card-sg h3 {
            margin: 0px 0.5em;
            font-size: 1.2em;
            font-weight: 500;
            text-align: left;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 3;
            line-clamp: 3;
            overflow: hidden;
        }

        .card-sg-1 {
            background: #104568;
            color: #fff;
        }

        .card-sg-2 {
            background: #d81918;
            color: #fff;
        }

        .card-sg-3 {
            background: #50b9d9;
            color: #353535;
        }

        .card-sg-4 {
            background: #4e4e4e;
            color: #fff;
        }

        .card-sg-5 {
            background: #4c531f;
            color: #fff;
        }

        .card-sg-6 {
            background: #bed00c;
            color: #353535;
        }

        .card-sg-7 {
            background: #ff6600;
            color: #ffffff;
        }
    </style>


</div>
<!-- Fin Set -->

<style>
    .set-wrapper.sistemas {
        display: grid;
        gap: 8px;
        grid-auto-flow: dense;
        grid-template-columns: 1fr;
        grid-template-rows: auto;
        grid-template-areas:
            'box-title-center'
            'box-video'
            'box-descripcion'
            'box-buttons';
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;

    }

    @media(min-width:768px) {
        .set-wrapper.sistemas {
            display: grid;
            gap: 16px;
            grid-auto-flow: dense;
            grid-template-columns: calc(2, 1fr);
            grid-template-rows: auto;
            grid-template-areas:
                'box-title-center box-title-center'
                'box-video box-video'
                'box-descripcion box-descripcion'
                'box-buttons box-buttons';
        }
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
