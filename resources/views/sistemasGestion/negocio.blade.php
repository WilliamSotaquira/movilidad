@extends('welcome')
@section('title','negocio')
@section('contenido')

<!-- Set negocio -->
<div class="set-wrapper negocio">
    <style type="text/css">
        h2.centertil {
            display: none;
        }

        .img-center {
            display: block;
            margin: 0 auto;
        }

        .container-sgcn .objetivos,
        .container-sgcn .alcance,
        .container-sgcn .beneficios {
            margin-top: 50px;
        }

        .container-sgcn .objetivos h2,
        .container-sgcn .alcance h2,
        .container-sgcn .beneficios h2 {
            color: #BDCF44 !important;
            font-size: 30px;
            font-weight: 700;
        }

        .container-sgcn .objetivos p,
        .container-sgcn .objetivos ul,
        .container-sgcn .objetivos li,
        .container-sgcn .alcance p,
        .container-sgcn .alcance ul,
        .container-sgcn .alcance li,
        .container-sgcn .beneficios p,
        .container-sgcn .beneficios ul,
        .container-sgcn .beneficios li {
            font-size: 18px;
        }

        .container-sgcn .tenemos-futuro {
            background: url("https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/20-06-2023/bg-tenemos-futuro.jpg");
            margin-top: 70px;
            padding-top: 70px;
            padding-bottom: 50px;
            background-color: #191c3a;
            background-position: center center;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            -ms-background-size: cover;
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: top center;
        }

        .container-sgcn .tenemos-futuro h2 {
            color: #fff;
            font-size: 30px;
            text-align: center;
        }

        .container-sgcn .beneficios .titular,
        .container-sgcn .beneficios .beneficio {
            padding-bottom: 30px;
        }

        @media (max-width: 768px) {
            .container-carta .deberes {
                padding: 10px;
            }

            .container-carta .deberes .bg-blanco {
                min-height: auto;
            }

            .container-carta .deberes .image .logo-deberes {
                position: relative;
                left: 0;
                bottom: 0;
            }

            .container-carta .deberes .intro ul {
                margin-left: 20px;
                padding: 20px;
                font-size: 1.5rem;
            }
        }
    </style>
    <div class="container container-sgcn">
        <section class="row header">
            <div class="col-sm-12 intro"><img alt="Sistema de Gestión de Continuidad del Negocio" class="img-responsive img-center" src="https://www.movilidadbogota.gov.co/web/sites/default/files/field/image/logo-sgcn.png"></div>
        </section>

        <section class="row objetivos">
            <div class="col-sm-6">
                <h2>Objetivo general</h2>

                <p>Implementar los procedimientos y medios necesarios de recuperación para responder a escenarios de interrupción que afecten la continuidad en la prestación de servicios y atención de trámites de la Secretaría Distrital de Movilidad; gestionando constantemente las estrategias y soluciones de recuperación operativas y tecnológicas de manera segura, reduciendo los impactos negativos.</p>
            </div>

            <div class="col-sm-6"><img alt="" class="img-responsive img-border" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/20-06-2023/objetivo-general.jpg"></div>
        </section>

        <section class="row objetivos">
            <div class="col-sm-6"><img alt="" class="img-responsive img-border" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/20-06-2023/objetivos-especificos.jpg"></div>

            <div class="col-sm-6">
                <h2>Objetivos específicos</h2>

                <ul>
                    <li>Identificar los procesos, servicios y trámites críticos de la entidad, que requieren de una estrategia de continuidad, debido al impacto que podría tener para la entidad su interrupción a causa de un incidente o crisis.</li>
                    <li>Implementar planes y medios necesarios para desarrollar en la entidad la capacidad de recuperación para responder a los diferentes escenarios de interrupción.</li>
                    <li>Gestionar el óptimo manejo de incidentes de continuidad del negocio en la Secretaría Distrital de Movilidad.</li>
                    <li>Desarrollar las competencias mínimas requeridas para cada uno de los roles que hacen parte de la estructura de recuperación de la entidad.</li>
                </ul>
            </div>
        </section>

        <section class="row tenemos-futuro parallax-bg">
            <div class="col-sm-12">
                <h2 class="parallax-content">Tenemos el futuro de la SDM<br>
                    en nuestras manos <img alt="" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/20-06-2023/icon-tenemos.png"></h2>
            </div>
        </section>

        <section class="row alcance">
            <div class="col-sm-6">
                <h2>Alcance</h2>

                <p>El Sistema de Gestión de Continuidad del Negocio – SGCN de la Secretaría Distrital de Movilidad tiene como alcance la definición, implementación, mantenimiento y mejora continua de la estrategia y planes de continuidad para responder a los escenarios de interrupción particular que puedan poner en riesgo la prestación de los servicios y atención a trámites (en la sede principal de la SDM); así como los impactos que puede generar su materialización.</p>
            </div>

            <div class="col-sm-6">
                <div class="embed-responsive embed-responsive-16by9 img-border"><iframe allowfullscreen="" class="embed-responsive-item" src="https://www.youtube.com/embed/6Mqb9SU2XPQ?rel=0"></iframe></div>
            </div>
        </section>

        <section class="beneficios">
            <div class="row titular">
                <div class="col-som-12">
                    <h2 class="text-center">Beneficios</h2>
                </div>
            </div>

            <div class="row beneficio">
                <div class="col-sm-2"><img alt="Beneficios" class="img-responsive img-center" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/20-06-2023/icon-beneficios-1.png"></div>

                <div class="col-sm-10">
                    <p>El Sistema de Gestión de Continuidad de Negocio (SGCN) incluye las actividades necesarias para preservar la operación de los procesos críticos de la Secretaría Distrital de Movilidad ante situaciones disruptivas generadas por eventos naturales u ocasionados por el ser humano.</p>
                </div>
            </div>

            <div class="row beneficio">
                <div class="col-sm-2"><img alt="Beneficios" class="img-responsive img-center" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/20-06-2023/icon-beneficios-2.png"></div>

                <div class="col-sm-10">
                    <p>La Gestión de Continuidad de Negocio nos permite estar preparados, responder oportunamente y con efectividad ante incidentes de interrupción o crisis.</p>
                </div>
            </div>

            <div class="row beneficio">
                <div class="col-sm-2"><img alt="Beneficios" class="img-responsive img-center" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/20-06-2023/icon-beneficios-3.png"></div>

                <div class="col-sm-10">
                    <p>Nos otorga un grado de seguridad razonable a la sostenibilidad de la entidad a través del restablecimiento de los servicios y trámites críticos de la SDM.</p>
                </div>
            </div>

            <div class="row beneficio">
                <div class="col-sm-2"><img alt="Beneficios" class="img-responsive img-center" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/20-06-2023/icon-beneficios-4.png"></div>

                <div class="col-sm-10">
                    <p>Brinda una tranquilidad a los grupos de interés ante incidentes de interrupción o crisis de la SDM, con una respuesta oportuna a sus requerimientos y necesidades ante situaciones disruptivas.</p>
                </div>
            </div>
        </section>
    </div>

</div>
<!-- Fin Set -->
