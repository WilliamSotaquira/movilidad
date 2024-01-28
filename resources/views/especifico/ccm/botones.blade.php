
@extends('welcome')
@section('contenido')

<!-- ----- ----- ----- ----- ----- ----- ----- ----- Bloque Seccion ----- ----- ----- ----- ----- ----- ----- ----- ----- ------ -->

<div class='container-fluid seccion'>
    <div class='s1'>
        <div class="encabezado">
            <div class="row titulo">
                <a href="https://www.movilidadbogota.gov.co/web/canales_de_atencion_al_ciudadano">
                    <h3>Centro de Contacto de Movilidad</h3>
                </a>
            </div>
            <div class="row">
                <div class="tabs">

                    <div class="col-xs-6 col-sm-4 col-md-2">
                        <a href="https://agendamiento.movilidadbogota.gov.co/AConect/">
                            <div class="tab zoom">
                                <div class="img-tab">
                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-11-2021/agendamiento_20211117.webp" alt="Dar clic aquí para acceder a Agendamiento Virtual" title="Dar clic aquí para acceder a Agendamiento Virtual">
                                </div>
                                <div class="txt-tab">
                                    <h4>Agendamiento de Citas</h4>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-xs-6 col-sm-4 col-md-2">
                        <a href="https://www.movilidadbogota.gov.co/web/puntos_de_atencion">
                            <div class="tab zoom">
                                <div class="img-tab">
                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-11-2021/presencial_20211117.webp" alt="Dar clic aquí para acceder a Atención Presencial" title="Dar clic aquí para acceder a Atención Presencial">
                                </div>
                                <div class="txt-tab">
                                    <h4>atención presencial</h4>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-xs-6 col-sm-4 col-md-2">
                        <a href="https://chat1-cls21-dal.i6.inconcertcc.com/inconcert/apps/webdesigner/WCSecMovilidadV1?token=CAC157DC8561E02E446D9F25B5FF8C0D&notify=c410e2c6-3dce-133e-5094-1d0c2926858c&dev=false&type=popup">
                            <div class="tab zoom">
                                <div class="img-tab">
                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-11-2021/chatea_20211117.webp" alt="Dar clic aquí para acceder a Chatea con nuestro asesor en linea" title="Dar clic aquí para acceder a Chatea con nuestro asesor en linea">
                                </div>
                                <div class="txt-tab">
                                    <h4>Chatea con nuestro asesor en línea</h4>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-xs-6 col-sm-4 col-md-2">
                        <a href="https://ws-bpm.inconcertcc.com/CALLBACKSECMOV/">
                            <div class="tab zoom">
                                <div class="img-tab">
                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-11-2021/regresamosllamada_20211117.webp" alt="Dar clic aquí para acceder a Te regresamos la llamada" title="Dar clic aquí para acceder a Te regresamos la llamada">
                                </div>
                                <div class="txt-tab">
                                    <h4>Te regresamos la llamada</h4>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-xs-6 col-sm-4 col-md-2">
                        <a href="https://ws-bpm.inconcertcc.com/C2CSECMOV/">
                            <div class="tab zoom">
                                <div class="img-tab">
                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-11-2021/llamanos_20211117.webp" alt="Dar clic aquí para acceder a Llámanos" title="Dar clic aquí para acceder a Llámanos">
                                </div>
                                <div class="txt-tab">
                                    <h4>Llámanos</h4>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-xs-6 col-sm-4 col-md-2">
                        <a href="https://ws-bpm.inconcertcc.com/VCSECMOV/">
                            <div class="tab zoom">
                                <div class="img-tab">
                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-11-2021/videollamada_20211117.webp" alt="Dar clic aquí para acceder a Hagamos una video llamada" title="Dar clic aquí para acceder a Hagamos una video llamada">
                                </div>
                                <div class="txt-tab">
                                    <h4>Hagamos una video llamada</h4>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="txt-footer">
                    <p>Agende sus citas para <span class="enfasis">salida de patios, impugnaciones, cursos pedagógicos y acuerdos pago</span> en nuestros<span class="enfasis"> canales virtuales</span> o comuníquese al<span class="enfasis"> (601) 3649400, opción 2, </span>o en la <span class="enfasis">línea 195</span></p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin Bloque Sección  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->

<!-- ----- ----- ----- ----- ----- ----- ----- -----  Hoja de estilo ---- ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<style type='text/css'>
    .field-item.even h2 {
        visibility: hidden;
        margin-top: -50px;
    }

    .region-content {
        padding: 0px;
        overflow: hidden;
    }

    .container-fluid {
        padding: 0px !important;
    }

    .seccion {
        font-size: 12px !important;
        line-height: 1 !important;
        margin-top: 20px;
        max-width: 940px;
    }



    .seccion [class*='col-'] {
        margin: 0px;
        padding: 0px;
        border: 0;
        outline: 0;
        font-size: 100%;
        vertical-align: baseline;
    }

    .w-100 {
        width: 100%;
    }

    .s1 {
        overflow: hidden;
        white-space: normal;
    }

    .s1>.encabezado {
        background-color: #191C3A;
        border-radius: 6px;

    }

    .s1>.encabezado>.titulo {
        text-align: center;
        text-transform: uppercase;
    }

    .s1>.encabezado>.titulo h3 {
        font-weight: 900;
        font-size: 14px;
        margin: 40px 10px 10px 10px;
        padding: 0px 15px;
    }

    .s1>.encabezado>.titulo a {
        text-decoration: none;
        color: #66e026;
    }

    .s1 .tabs {
        margin: 0px 15px 15px 15px;
        padding: 0px 10px 10px 10px;
    }

    .s1 .tab>.img-tab {
        padding: 5px 5px 0px 5px;
    }

    .s1 .tab>.txt-tab {
        margin: 0px 0px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        height: 60px;
        max-height: 70px;
    }

    .s1 .tab>.txt-tab h4 {
        text-align: center;
        color: #66e026;
        font-weight: 900;
        text-transform: uppercase;
        font-size: 8px;
        margin: 0px 10px 2px 10px;
        padding: 0px 5px;
    }

    .s1 .txt-footer {
        text-align: center;
        padding: 10px 20px;
    }

    .s1 .txt-footer a {
        text-decoration: none;
        margin: 0px;
        padding: 0px;
    }

    .s1 .txt-footer p {
        width: 100%;
        color: #fff !important;
        font-weight: 900;
        font-size: 9px;
        margin: 0px;
        line-height: 1.3;
        padding: 0px 15px;
    }

    .s1 .txt-footer .enfasis {
        color: #66e026;
        font-weight: 900;
    }

    .zoom {
        transition: 0.5s ease;
        -moz-transition: 0.5s ease;
        /* Firefox */
        -webkit-transition: 0.5s ease;
        /* Chrome - Safari */
        -o-transition: 0.5s ease;
        /* Opera */
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
</style>
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin hoja de estilo  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<style>
    @media(max-width:767px) {
        .s1 .tab>.txt-tab h4 {
            font-size: 12px !important;
        }

        .s1 .txt-footer p {
            font-size: 12px !important;
        }
    }

    @media(min-width:992px) {
        .s1 .tab>.txt-tab h4 {
            text-align: center;
            color: #66e026;
            font-weight: 900;
            text-transform: uppercase;
            font-size: calc(1vw + 0.3rem);
            margin: 0px 5px 5px 5px;
        }
    }

    @media(min-width:1200px) {
        .s1 .tab>.txt-tab h4 {
            font-size: 1rem;
        }
    }
</style>
<style>
    @media(max-width:767px) {
        .s1 .tab>.txt-tab h4 {
            font-size: 8px;
        }
    }

    @media(min-width:768px) {


        .s1>.encabezado>.titulo h3 {
            /* font-size: 14px; */
            font-size: 30px;
        }

        .s1 .tab>.txt-tab h4 {
            /* font-size: 8px; */
            font-size: 12px;
        }

        .s1 .txt-footer p {
            /* font-size: 6px; */
            font-size: 13px;
        }

    }

    @media(min-width:992px) {
        .s1 .txt-footer p {
            /* font-size: 6px; */
            font-size: 12px;
        }
    }

    @media(min-width:1200px) {}
</style>