@extends('welcome')
@section('contenido')
@extends('welcome')
@section('contenido')

<div class="seccion">
    <div class="row">
        <div class="col-xs-4">
            <div class="btn-dinamico">
                <figure>
                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/09-09-2021/boton1_cyb.png" alt="">
                    <div class="transparencia">
                        <h3>Evite/Reduzca</h3>
                        <p>Evite viajes innecesarios y reduzca las distancias de viaje</p>
                    </div>
                </figure>
            </div>
        </div>
        <div class="col-xs-4">
            <div class="btn-dinamico">
                <figure>
                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/09-09-2021/boton2_cyb.png" alt="">
                    <div class="transparencia">
                        <h3>Cambie</h3>
                        <p>Promueva un cambio modal a medios no motorizados y transporte público</p>
                    </div>
                </figure>
            </div>
        </div>
        <div class="col-xs-4">
            <div class="btn-dinamico">
                <figure>
                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/09-09-2021/boton3_cyb.png" alt="">
                    <div class="transparencia">
                        <h3>Mejore</h3>
                        <p>Mejore las tecnologías de los vehículos y los comportamientos de los usuarios</p>
                    </div>
                </figure>
            </div>
        </div>
    </div>
</div>

<style>
    .seccion * {
        margin: 0px;
        padding: 0px;
        font-size: 12px;
    }
    .w-100{
        width: 100%;
    }

    .btn-dinamico {
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .btn-dinamico figure {
        position: relative;
        height: 300px;
        width: 350px;
        overflow: hidden;
        border-radius: 6px;
        box-shadow: 0px 15px 25px rgba(0, 0, 0, 0.50);
        cursor: pointer;
    }

    .btn-dinamico figure img {

        transition: all 500ms ease-out;
    }

    .btn-dinamico figure .transparencia {
        position: absolute;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(22, 16, 64, 0.9);
        transition: all 500ms ease-out;
        opacity: 0;
        visibility: hidden;
        text-align: center;
    }

    .btn-dinamico figure:hover>.transparencia {
        opacity: 1;
        visibility: visible;
    }

    .btn-dinamico figure .transparencia h3 {
        color: #66e026;
        font-weight: 600;
        margin-bottom: 120px;
        transition: all 500ms ease-out;
        margin-top: 20px;
        font-size: calc(1rem + 1.2vw);

    }

    .btn-dinamico figure:hover>img {
        transform: scale(1.3);
        transition: all 700ms ease-out;
    }

    .btn-dinamico figure:hover>.transparencia h3 {
        margin-top: 70px;
        margin-bottom: 15px;
    }

    .btn-dinamico figure .transparencia p {
        color: #fff;
        font-size: calc(1rem + 1vw);
        line-height: 1.2;
        width: 100%;
        max-width: 220px;
        margin: auto;
    }
</style>