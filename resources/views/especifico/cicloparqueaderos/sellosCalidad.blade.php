@extends ('welcome')
@section ('contenido')


<div class="mpv-body">
    <div class="container-fluid">
        <section>
            <!-- row banner principal -->
            <div class="row">
                <div class="col-xs-12"><img alt="Contador de sellos de cicloparqueaderos. Oro 121, Plata 064, Total Cupos para ciclistas 17.487" class="bs" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/08-03-2022/contador_cicloparqueaderos_0.png" style="width: 100%;" title="Contador de cupos de cicloparqueaderos de Bogotá"></div>
            </div><!-- fin row banner principal -->
            <hr>
            <div class="row">
                <div class="col-xs-12">
                    <h1 class="text-center"><strong>Conoce acerca de los Sellos de Calidad</strong></h1>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-xs-12">
                    <h3><strong>ABC del Sello ORO:</strong></h3>
                </div>
                <div class="col-xs-12">
                    <h4><strong>Condiciones adicionales:</strong></h4>
                    <ul>
                        <li>Duplicar al menos el número mínimo de cupos requeridos por la norma y/o contar con uno o más cupos para bicicletas especiales (manocleta, bicicleta de carga, bicicleta eléctrica, etc).</li>
                        <li>Contar con bicicleteros en `U` invertida o similar y/o tipologías variadas para mayor comodidad.</li>
                        <li>Contar con demarcación del lugar de parqueo de bicicletas, señalización horizontal de prioridad para peatones y biciusuarios y/o con señalización vertical.</li>
                        <li>Tener el cicloparqueadero cubierto y/o que tenga una ubicación accesible (distancia del acceso principal menor a 50 mts.)</li>
                        <li>Contar con sistema de registro en máquina y expedición de recibo impreso/tarjeta especializada con servicio de préstamos de candado y/o con casillero para guardar casco y accesorios.</li>
                        <li>Contar con baño, banca para descansar, servicio de préstamos de bomba de aire, herramienta, servicio de lavado y limpieza de bicicletas, punto de hidratación, máquina dispensadora de comida y bebidas y/o buzón de quejas, reclamos y sugerencias.</li>
                    </ul>
                    <h4><strong>Condiciones de nivel superior:</strong></h4>
                    <ul>
                        <li>Triplicar al menos el número mínimo de cupos requeridos por la norma.</li>
                        <li>Contar con otras tipologías de cicloparqueadero de calidad y confort superior.</li>
                        <li>Contar con un sistema de registro con foto/video y expedición de recibo impreso o tarjeta especializada.</li>
                        <li>Contar con cámara de video en la zona de cicloparqueadero.</li>
                        <li>Brindar el valet parking para bicicletas.</li>
                        <li>Contar con baño y vestier.</li>
                        <li>Tener un punto de carga para bicicletas eléctricas.</li>
                        <li>Brindar el servicio de venta de repuestos de despinche o en general.</li>
                        <li>Contar con café de descanso.</li>
                    </ul>
                </div>
                <div class="col-xs-12">
                    <h3><strong>ABC del Sello PLATA:</strong></h3>
                </div>
                <div class="col-xs-12">
                    <h4><strong>Condiciones mínimas:</strong></h4>
                    <ul>
                        <li>Número mínimo de cupos por norma (1 por cada 10 cupos para automóviles, mínimo 12).</li>
                        <li>Tarifa máxima establecida por la norma ($10 COP/minuto).</li>
                        <li>Bicicleteros tipo M100 o M101, sujeción de rueda, sujeción de gancho para colgar o U invertida.</li>
                        <li>Información de servicio al usuario y tarifa en un lugar visible.</li>
                        <li>Seguridad de la bicicleta (el parqueadero se hace responsable en caso de daño o hurto).</li>
                        <li>Sistema de registro de la bicicleta y del usuario con expedición de recibo.</li>
                    </ul>
                </div>
            </div>
            <div class="row row-btn">
                <div class="col-xs-12 col-sm-4 col-sm-offset-2">
                    <div class="btn-enlace bs">
                        <div class="navbar-header"><img alt="" class="icon-btn" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-05-2021/17.09_-_icono_bici_cicloparqueadero_2.png"></div><a href="https://docs.google.com/a/movilidadbogota.gov.co/forms/d/e/1FAIpQLScmxJreGcrc1LUuQ1I5XyAf373k2qA-erkzGvdF5MGRhKqV_g/viewform">Postula tu cicloparqueadero</a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 ">
                    <div class="btn-enlace bs">
                        <div class="navbar-header"><img alt="" class="icon-btn" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-05-2021/17.10_-_icono_sello_oro_2.png"></div><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/08-03-2022/lista_de_cp_certificados_2022_0.xlsx" target="_blank">Conoce aquí los cicloparqueaderos certificados</a>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-xs-2 col-xs-offset-5">
                    <div class="btn-return"><a href="https://www.movilidadbogota.gov.co/web/cicloparqueaderos" target="_blank"><img alt="btn-return" class="bs" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/03-05-2021/piezas_para_micrositio_cicloparqueaderos_3_-_btn_cicloparqueaderos.png" width="100%"></a></div>
                </div>
            </div>
            <hr>
        </section>
    </div>
</div>

<style type="text/css">
    .node-unpublished {
        background: none;
    }

    .field-name-title {
        visibility: hidden;
        height: 0px;
    }

    h2 {
        /* visibility: hidden; */
        text-align: center;
        padding: 1rem;
        color: #1C2046 !important;
    }

    html {
        width: 100%;
        background: #ffffffff;
        color: rgb(30, 30, 30);
        font-size: 14pt !important;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        line-height: normal;
        line-height: 1.4;
    }

    /*Margin and Padding helpers*/
    /*xs*/

    .f-table {
        margin-top: -1.8rem;
    }

    .p-xs {
        padding: .25em;
    }

    .p-x-xs {
        padding: 0 .25em;
    }

    .p-y-xs {
        padding: .25em 0;
    }

    .p-t-xs {
        padding-top: .25em;
    }

    .p-r-xs {
        padding-right: .25em;
    }

    .p-b-xs {
        padding-bottom: .25em;
    }

    .p-l-xs {
        padding-left: .25em;
    }

    .m-xs {
        margin: .25em;
    }

    .m-x-xs {
        margin: 0 .25em;
    }

    .m-y-xs {
        margin: .25em 0;
    }

    .m-r-xs {
        margin-right: .25em;
    }

    .m-l-xs {
        margin-left: .25em;
    }

    .m-t-xs {
        margin-top: .25em;
    }

    .m-b-xs {
        margin-bottom: .25em;
    }

    /*sm*/

    @media (min-width:768px) {

        /*sm*/
        .p-sm {
            padding: .5em;
        }

        .p-x-sm {
            padding: 0 .5em;
        }

        .p-y-sm {
            padding: .5em 0;
        }

        .p-t-sm {
            padding-top: .5em;
        }

        .p-r-sm {
            padding-right: .5em;
        }

        .p-b-sm {
            padding-bottom: .5em;
        }

        .p-l-sm {
            padding-left: .5em;
        }

        .m-sm {
            margin: .5em;
        }

        .m-x-sm {
            margin: 0 .5em;
        }

        .m-y-sm {
            margin: .5em 0;
        }

        .m-t-sm {
            margin-top: .5em;
        }

        .m-r-sm {
            margin-right: .5em;
        }

        .m-b-sm {
            margin-bottom: .5em;
        }

        .m-l-sm {
            margin-left: .5em;
        }
    }

    /*md*/

    @media (min-width: 992px) {
        .p-md {
            padding: 1em;
        }

        .p-x-md {
            padding: 0 1em;
        }

        .p-y-md {
            padding: 1em 0;
        }

        .p-t-md {
            padding-top: 1em;
        }

        .p-r-md {
            padding-right: 1em;
        }

        .p-b-md {
            padding-bottom: 1em;
        }

        .p-l-md {
            padding-left: 1em;
        }

        .m-md {
            margin: 1em;
        }

        .m-x-md {
            margin: 0 1em;
        }

        .m-y-md {
            margin: 1em 0;
        }

        .m-t-md {
            margin-top: 1em;
        }

        .m-r-md {
            margin-right: 1em;
        }

        .m-b-md {
            margin-bottom: 1em;
        }

        .m-l-md {
            margin-left: 1em;
        }
    }

    /*lg*/

    @media (min-width: 1200px) {
        .p-lg {
            padding: 1.5em;
        }

        .p-x-lg {
            padding: 0 1.5em;
        }

        .p-y-lg {
            padding: 1.5em 0;
        }

        .p-t-lg {
            padding-top: 1.5em;
        }

        .p-r-lg {
            padding-right: 1.5em;
        }

        .p-b-lg {
            padding-bottom: 1.5em;
        }

        .p-l-lg {
            padding-left: 1.5em;
        }

        .m-lg {
            margin: 1.5em;
        }

        .m-x-lg {
            margin: 0 1.5em;
        }

        .m-y-lg {
            margin: 1.5em 0;
        }

        .m-t-lg {
            margin-top: 1.5em;
        }

        .m-r-lg {
            margin-right: 1.5em;
        }

        .m-b-lg {
            margin-bottom: 1.5em;
        }

        .m-l-lg {
            margin-left: 1.5em;
        }
    }

    /*xl*/

    .p-xl {
        padding: 3em;
    }

    .p-x-xl {
        padding: 0 3em;
    }

    .p-y-xl {
        padding: 3em 0;
    }

    .p-t-xl {
        padding-top: 3em;
    }

    .p-r-xl {
        padding-right: 3em;
    }

    .p-b-xl {
        padding-bottom: 3em;
    }

    .p-l-xl {
        padding-left: 3em;
    }

    .m-xl {
        margin: 3em;
    }

    .m-x-xl {
        margin: 0 3em;
    }

    .m-y-xl {
        margin: 3em 0;
    }

    .m-t-xl {
        margin-top: 3em;
    }

    .m-r-xl {
        margin-right: 3em;
    }

    .m-b-xl {
        margin-bottom: 3em;
    }

    .m-l-xl {
        margin-left: 3em;
    }

    /*------------------------------------------------------------------------------------------------------  Contenido CSS editable --------------------------------------------------------------------------------- */

    .cp-hr {
        margin-top: 0px;
        margin-bottom: 0px;
    }

    .cp-col {
        padding-left: 0px;
        padding-right: 0px;
    }

    .row-cp-nt {
        margin: 50px 0px 20px 0px;
    }

    .cp-video {
        display: flex;
        height: 100%;
        margin: auto 0rem auto 0rem;
        /* display: table-cell; */
        /* vertical-align: middle; */
    }

    .cp-card {
        padding: 10px;
        /* max-height: 300px; */
    }

    .cp-card a {
        /* max-height: 300px; */
        text-decoration: none;
        color: black;
    }

    .cp-np-img {
        padding: 5px;
        max-width: 140px;
        min-width: 100px;
    }

    .cp-btn-img {
        max-width: 100px;
        min-width: 80px;
    }

    .cp-np-text {
        overflow: hidden !important;
    }

    .cp-np-text p,
    h4 {
        padding: 4px;
    }

    .cp-np-text h4 {
        height: 50px;
        white-space: wrap;
        overflow: hidden;
        text-overflow: ellipsis;
        font-size: 0.8rem;
        font-weight: 600;
        color: #1C2046;
    }

    .cp-np-text p {
        height: 80px;
        white-space: wrap;
        overflow: hidden;
        text-overflow: ellipsis;
        font-size: small;
        text-align: left;
        /* font-weight: 600; */
    }

    .row-cp-cont-bn {
        margin: 20px 0px 20px 0px;
        background: #66e026 !important;
    }

    .div-cp-cont-bn {
        display: block;
        margin: auto;
        text-align: center;
    }

    .cp-bn-img {
        padding: 15px 30px 15px 30px;
        /* width: 100%; */
        height: 8%;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .cp-bn-img img {
        width: 100%;
        border-radius: 6px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .row-cp-cont-tp {
        margin: 40px 0px 20px 0px;
        background: #55555565;
    }

    .cp-tp-li {
        border-radius: 0%;
        list-style: square !important;
    }

    .cp-tp-li a {
        color: #1C2046 !important;
        font-size: 0.8rem;
        font-weight: 500;
        /* font-style: italic; */
    }

    .cp-tp-li a:hover {
        color: #1C2046 !important;
        font-size: 0.8rem;
        font-weight: 600;
        /* font-style: italic; */
        border-radius: 0px;
    }

    .nav-pills>li.active>a,
    .nav-pills>li.active>a:focus,
    .nav-pills>li.active>a:hover {
        color: #66e026 !important;
        background-color: #1C2046;
        border-radius: 0%;
    }

    .cp-tp-img-text {
        padding: 10px;
        color: #66e026;
        text-align: center;
        /* position: absolute; */
        /* top: 10px;
            left: 10px;
            margin: -80px 0px 0px 15px; */
    }

    .cp-modal {
        background: #1C2046;
        /* height: 10vh; */
    }

    .cp-mp-title {
        background: #1C2046;
        min-height: 60px;
        padding: 10px 0px 10px 0px;
        text-align: center;
        color: #ffffffff;
        font-size: medium;
    }

    .row-mp {
        margin: 40px 0px 20px 0px;
    }

    .cp-mp-img {
        width: 100%;
        padding: 20px 0px 20px 0px;
    }

    .row-report-btn {
        margin: 15px 0px 10px 0px;
    }

    .col-cp-car {
        padding-right: 0%;
        padding-left: 0%;
    }

    .col-nav {
        margin: 15px 0px 15px 0px;
        padding: 0px;
    }

    .cp-carousel {
        padding: 15px;
    }

    .carousel-caption {
        background: #33333365;
        border-radius: 5px;
    }


    .zoom {
        transition: 1.5s ease;
        -moz-transition: 1.5s ease;
        /* Firefox */
        -webkit-transition: 1.5s ease;
        /* Chrome - Safari */
        -o-transition: 1.5s ease;
        /* Opera */
    }

    .zoom:hover {
        transform: scale(1.2);
        -moz-transform: scale(1.2);
        /* Firefox */
        -webkit-transform: scale(1.2);
        /* Chrome - Safari */
        -o-transform: scale(1.2);
        /* Opera */
        -ms-transform: scale(1.2);
        /* IE9 */
    }

    .bs {
        box-shadow: 5px 5px 15px #1c204654;
    }

    .bs-n {
        box-shadow: 5px 5px 15px #00000054;
    }

    .ts-b {
        text-shadow: 1.5px 1.5px 1.5px 1.5px #ffffff54;
    }

    .row-btn {
        text-align: center;
        margin: 45px 0px;
    }

    h1,
    h3,
    h4 {
        color: #1C2046;
    }

    .btn-enlace {
        background: #ffffffff;
        width: 100%;
        height: 100px;
        text-align: center;
        display: table;
        padding: 15px;
        margin: 15px;
        border: solid #66e026;
        border-width: 5px;
    }

    .btn-enlace:hover,
    .btn-enlace:active {
        background: rgb(218, 218, 218);
    }

    .btn-enlace a {
        text-decoration: none;
        color: #1C2046 !important;
        display: table-cell;
        vertical-align: middle;
        font-weight: 700;
        margin: 0 auto;
        text-align: left;
        width: 100%;
    }

    .btn-enlace a:hover,
    .btn-enlace a:hover {
        text-decoration: none;
        color: #1C2046 !important;
        display: table-cell;
        vertical-align: middle;
        font-weight: 700;
    }

    .icon-btn {
        padding: 10px;
        width: 60px;
    }

    /*------------------------------------------------------------------------------------------------------ Fin Contenido editable --------------------------------------------------------------------------------- */
</style>