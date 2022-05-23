@extends('welcome')
@section('contenido')
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fuente Montserrat -----  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<link rel='preconnect' href='https://fonts.googleapis.com'>
<link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
<link href='https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap' rel='stylesheet'>
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin Fuente Montserrat -  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<!-- Set Wrapper -->
<div class='container-fluid logos-empresas-cybe'>
    <div class='box-wrp'>
        <div class='box-head'>

            <div class="row">
                <div class="col-xs-12">
                </div>
            </div>

            <div id="carousel_empresas" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel_empresas" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel_empresas" data-slide-to="1"></li>
                    <li data-target="#carousel_empresas" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <div class='row logos'>
                            <div class='col-xs-12 col-sm-2'>
                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-05-2022/logo_akt_electric_400.png" alt="">
                            </div>
                            <div class='col-xs-12 col-sm-2'>
                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-05-2022/logo_akuai_400.png" alt="">
                            </div>
                            <div class='col-xs-12 col-sm-2'>
                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-05-2022/logo_andemos_400.png" alt="">
                            </div>
                            <div class='col-xs-12 col-sm-2'>
                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-05-2022/logo_enel_400.png" alt="">
                            </div>
                            <div class='col-xs-12 col-sm-2'>
                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-05-2022/logo_colturex_400.png" alt="">
                            </div>
                            <div class='col-xs-12 col-sm-2'>
                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-05-2022/logo_defencarga_400.png" alt="">
                            </div>
                        </div>

                    </div>
                    <div class="item">
                        <div class="row logos">
                            <div class='col-xs-12 col-sm-2'>
                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-05-2022/logo_uniandes_400.png" alt="">
                            </div>
                            <div class='col-xs-12 col-sm-2'>
                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-05-2022/logo_evoelectric_400.png" alt="">
                            </div>
                            <div class='col-xs-12 col-sm-2'>
                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-05-2022/logo_girozero_400.png" alt="">
                            </div>
                            <div class='col-xs-12 col-sm-2'>
                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-05-2022/logo_heliox_400.png" alt="">
                            </div>
                            <div class='col-xs-12 col-sm-2'>
                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-05-2022/logo_insepet_400.png" alt="">
                            </div>
                            <div class='col-xs-12 col-sm-2'>
                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-05-2022/logo_navisaf_400.png" alt="">
                            </div>

                        </div>
                    </div>
                    <div class="item">
                        <div class="row logos">
                            <div class='col-xs-12 col-sm-2 col-sm-offset-2'>
                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-05-2022/logo_piot_400.png" alt="">
                            </div>
                            <div class='col-xs-12 col-sm-2'>
                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-05-2022/logo_renting_400.png" alt="">
                            </div>
                            <div class='col-xs-12 col-sm-2'>
                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-05-2022/logo_solistica_400.png" alt="">
                            </div>
                            <div class='col-xs-12 col-sm-2'>
                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-05-2022/logo_tractec_400.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#carousel_empresas" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Anterior</span>
                </a>
                <a class="right carousel-control" href="#carousel_empresas" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Siguiente</span>
                </a>
            </div>

            <style>
                #carousel_empresas {
                    margin: 0px 50px;
                }

                #carousel_empresas .carousel-caption {
                    right: 10%;
                    left: 10%;
                    /* text-shadow: 0 1px 2px rgba(255, 255, 255, 0.5); */
                    background-color: rgba(0, 0, 0, 0.9);
                    padding: 15px;
                }

                #carousel_empresas .carousel-caption h3 {
                    color: rgba(255, 255, 255, 1);
                    font-family: 'Montserrat', sans-serif;
                    font-size: 30px;
                    font-weight: 700;
                    text-align: center;
                    line-height: 1.4;
                }

                #carousel_empresas .carousel-control {
                    color: rgb(28, 32, 70, 1) !important;
                    opacity: 1;
                    background-color: #00000000;
                    filter: none;
                    opacity: 1;
                }

                #carousel_empresas .logos {
                    margin: 0px;
                }

                #carousel_empresas .logos img {
                    margin: auto;
                    max-height: 150px;
                    min-width: 60px;
                    width: auto;
                }

                #carousel_empresas .carousel-control .glyphicon-chevron-left,
                #carousel_empresas .carousel-control .glyphicon-chevron-right,
                #carousel_empresas .carousel-control .icon-next,
                #carousel_empresas .carousel-control .icon-prev {
                    top: calc(50% - 20px) !important;
                }

                #carousel_empresas .carousel-control .glyphicon-chevron-right,
                #carousel_empresas .carousel-control .icon-next {
                    right: 10% !important;
                    margin-right: -10px;
                }

                #carousel_empresas .carousel-control .glyphicon-chevron-left,
                #carousel_empresas .carousel-control .icon-prev {
                    left: 10% !important;
                    margin-left: -10px;
                }

                @media(max-width:767px) {
                    #carousel_empresas {
                        margin: 0px;
                    }

                    .carousel-inner>.item {
                        position: relative;
                        height: 400px;
                    }

                    #carousel_empresas {
                        position: relative;
                        height: auto;
                    }


                }

                #carousel_empresas .carousel-control.right,
                #carousel_empresas .carousel-control.left {
                    background-image: none !important;
                    filter: none !important;
                    background-repeat: repeat-x;
                }


                @media screen and (min-width: 768px) {

                    #carousel_empresas .carousel-control .glyphicon-chevron-left,
                    #carousel_empresas .carousel-control .glyphicon-chevron-right,
                    #carousel_empresas .carousel-control .icon-next,
                    #carousel_empresas .carousel-control .icon-prev {

                        width: 40px !important;
                        height: 40px !important;
                        font-size: 40px !important;
                    }

                    #carousel_empresas .carousel-control .glyphicon-chevron-right,
                    #carousel_empresas .carousel-control .icon-next {
                        right: -40% !important;
                        margin-right: -10px;
                    }

                    #carousel_empresas .carousel-control .glyphicon-chevron-left,
                    #carousel_empresas .carousel-control .icon-prev {
                        left: -40% !important;
                        margin-left: -10px;
                    }
                }
            </style>


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

    .logos-empresas-cybe {
        max-width: 980px;
        font-family: 'Montserrat', sans-serif;
        font-size: 15px;
        font-weight: normal;
        text-align: justify;
        line-height: 1.4;
        color: rgba(25, 25, 25, 1);
    }

    /*
    .logos-empresas-cybe [class*='col-'] {
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