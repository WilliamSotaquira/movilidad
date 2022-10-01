@extends('welcome')
@section('contenido')
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fuente Montserrat -----  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<link href='https://fonts.googleapis.com' rel='preconnect'>
<link href='https://fonts.gstatic.com' rel='preconnect' crossorigin>
<link href='https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap' rel='stylesheet'>
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin Fuente Montserrat -  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<!-- Set Wrapper -->
<div class='container-fluid semanaBici'>
    <div class='box-wrp'>
        <div class='box-head'>
            <div class='logo'>
                <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/15-09-2022/recurso_1.png' title='Logo Semana de la Bici' alt='Logo Semana de la Bici'>
            </div>
        </div>
        <style>
            .box-wrp .box-head .logo img {
                max-width: 450px;
                margin: auto;
            }
        </style>
        <hr>
        <div class="box-agenda">
            <h3>Agenda Semana de la Bici 2022</h3>
            <!-- 4:3 aspect ratio -->
            <div class="embed-responsive embed-responsive-4by3">
                <iframe src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/20-09-2022/ok_agenda_semana_de_la_bici_2022_version2.pdf" width="640" height="480" allow="autoplay"></iframe>
            </div>
            <div>
                <a class="btn btn-sdb" href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/20-09-2022/ok_agenda_semana_de_la_bici_2022_version2.pdfhttps://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/15-09-2022/agenda_semana_de_la_bici_2022_version2.pdf" download>Descargar Agenda Semana de la Bici 2022</a>
            </div>
        </div>
        <hr>
        <style>
            .box-wrp .box-agenda h3 {
                margin: 0px;
                padding: 15px 25px 30px 25px;
                font-weight: 700;
                text-align: left;
                line-height: 1.2;
                color: #00973b;
            }

            .box-wrp .box-agenda a {
                padding-bottom: 24px;
                padding-top: 24px;
            }
        </style>
        <div class="box-venue">
            <h3>Agenda Venue</h3>
            <!-- 4:3 aspect ratio -->
            <div class="embed-responsive embed-responsive-4by3">
                <iframe src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/20-09-2022/ok_agenda_venue_version2.pdf" width="640" height="480" allow="autoplay"></iframe>
            </div>
            <div>
                <a class="btn btn-sdb" href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/20-09-2022/ok_agenda_venue_version2.pdf" download>Descargar Agenda Venue</a>
            </div>
        </div>
        <hr>
        <style>
            .box-wrp .box-venue h3 {
                margin: 0px;
                padding: 15px 25px 30px 25px;
                font-weight: 700;
                text-align: left;
                line-height: 1.2;
                color: #606060;
            }

            .box-wrp .box-venue a {
                padding-bottom: 24px;
                padding-top: 24px;
            }
        </style>

    </div>
</div>
<!-- End Set Wrapper -->

<!-- Styles -->
<style type='text/css'>
    .field-item.even h2 {
        visibility: hidden;
        margin-top: -40px;
    }

    .region-content {
        padding: 0px;
        overflow: hidden;
    }

    .semanaBici {
        max-width: 980px;
        margin: auto;
        word-break: break-all;
        word-wrap: break-word;
        font-family: 'Montserrat', sans-serif;
        font-size: 15px;
        font-weight: 500;
        text-align: justify;
        line-height: 1.3;
        color: rgba(25, 25, 25, 1);
    }

    /*
                                                        .semanaBici [class*='col-'] {
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
</style>
<!-- End Styles -->
