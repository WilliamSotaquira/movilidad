@extends ('welcome')
@section ('contenido')

@extends('welcome')
@section('contenido')

<div class="seccion">

    <div class='row'>
        <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="bullet">
                <img class="img-fluid" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Noticias/13-10-2021/2.png" alt="">
                <span class="titulo">
                    <a class="" role="button" data-toggle="collapse" href="#collapse_bullet" aria-expanded="false" aria-controls="collapse_bullet">Trámites y Servicios</a>
                </span>
            </div>
        </div>

        <div class="collapse" id="collapse_bullet">
            <div class="col-xs-12">
                <div class="well">
                    <div class="bullet">
                        <img class="img-fluid" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Noticias/13-10-2021/2.png" alt="">
                        <span class="titulo">
                            <a class="" role="button" data-toggle="collapse" href="#collapse_bullet" aria-expanded="false" aria-controls="collapse_bullet">Trámites y Servicios</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <!-- <div class='col-xs-6 col-sm-4 col-md-4'>
            <a class="" role="button" data-toggle="collapse" href="#collapse_bullet_a" aria-expanded="false" aria-controls="collapse_bullet_a">
                <div class="bullet">
                    <div class="bullet-img">
                        <img src="https://via.placeholder.com/210">
                        <span class="c1"></span>
                    </div>
                    <div class="bullet-title">
                        <h3>Puntos y Canales de atención a la ciudadania</h3>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xs-12">
            <div class="collapse" id="collapse_bullet_a">
                <div class="well">
                    ...
                </div>
            </div>
        </div> -->
    </div>

</div>




<style>
    .seccion {
        width: 70%;
        margin: auto;
    }

    .w-100 {
        width: 100%;
    }

    .h-100 {
        height: 100%;
    }

    .field-item.even h2 {
        visibility: hidden;
        margin-top: -50px;
    }

    .bullet {
        background-color: #fff;
        display: flex;
        align-items: center;
        padding: 10px;

    }

    .bullet-img {
        z-index: 1;
        width: 100%;
    }

    .bullet-title {
        background-color: #191C3A;
        color: #fff;
        width: 200px;
        z-index: 2;
        margin: 10px;
        text-align: center;
    }


    .bullet-title a {
        text-decoration: none;
    }


    }

    .well {
        margin-top: 15px;
        margin-bottom: 15px;
        padding: 0px;
    }

    #bullet-1 {
        background-image: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Noticias/13-10-2021/2.png');
        background-size: cover;
    }

    #fondo-1 {}

    .cover {
        object-fit: contain !important;
    }

    .img-fluid {
        max-width: 100%;
        height: auto;
    }

    .titulo {
        position: absolute;
        top: 0;
        left: 15px;
        right: 15px;
        bottom: 0;
        display: flex;
        align-items: center;
        padding: 15px;
        justify-content: space-around;
        align-content: flex-end;
    }

    .titulo a {
        font-weight: 700;
        color: #fff;
        font-size: 22px;
        text-align: center;
        line-height: 1;
        background-color: #191C3Adb;
        padding: 9px 15px;
    }

    .titulo a:hover,
    .titulo a:active,
    .titulo a:focus,
    .titulo a::before {
        color: #66e026;
        text-decoration: none;
    }
</style>