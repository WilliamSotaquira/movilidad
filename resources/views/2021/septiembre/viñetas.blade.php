@extends ('welcome') @section ('contenido')
<link href="https://fonts.googleapis.com" rel="preconnect">
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect">
<link href="https://fonts.googleapis.com/css2?family=Bangers&amp;display=swap" rel="stylesheet">
<div class="seccion">
    <div class="row">
        <div class="col-12">
            <div class="dh">
                <div class="fondo1">
                    <h1 class="text-center">Aliados contra la corrupción</h1>
                </div>
                <p>No te pierdas ningún capítulo de esta serie, y acompañanos en esta aventura donde juntos vamos a aliarnos y a luchar contra la corrupción.</p>
            </div>
        </div>
    </div>
    <div class="row dvs">
        <div class="col-xs-12 col-sm-6">
            <div class="dv">
                <div class="dim"><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/09-09-2021/diseno_campana_integridad_v2_campana_integridad_episodio_1.jpg" rel="noopener noreferrer" target="_blank"><img alt="" class="text-center img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/09-09-2021/diseno_campana_integridad_v2_campana_integridad_episodio_1.jpg"> </a></div>
                <hr class="hr1">
                <h3 class="text-center">Episodio 1</h3>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6  ">
            <div class="dv">
                <div class="dim trans">
                    <!-- <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/09-09-2021/diseno_campana_integridad_v2_campana_integridad_episodio_2.jpg" rel="noopener noreferrer" target="_blank"> -->
                    <img alt="" class="text-center img-responsive w-100 image ghost" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/09-09-2021/diseno_campana_integridad_v2_campana_integridad_episodio_2.jpg">
                    <!-- </a> -->
                    <div class="mensaje">
                        <h1>Disponible el 16 de septiembre</h1>
                    </div>
                </div>
                <hr class="hr1">
                <h3 class=" text-center">Episodio 2</h3>
            </div>

        </div>
        <div class="col-xs-12 col-sm-6">
            <div class="dv">
                <div class="dim trans">
                    <!-- <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/09-09-2021/diseno_campana_integridad_v2_campana_integridad_episodio_3.jpg" rel="noopener noreferrer" target="_blank"> -->
                    <img alt="" class="text-center img-responsive w-100 ghost" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/09-09-2021/diseno_campana_integridad_v2_campana_integridad_episodio_3.jpg">
                    <!-- </a> -->
                    <div class="mensaje">
                        <h1>Disponible el 23 de septiembre</h1>
                    </div>
                </div>
                <hr class="hr1">
                <h3 class="text-center">Episodio 3</h3>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6">
            <div class="dv">
                <div class="dim trans">
                    <!-- <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/09-09-2021/diseno_campana_integridad_v2_campana_integridad_episodio_4.jpg" rel="noopener noreferrer" target="_blank"> -->
                    <img alt="" class="text-center img-responsive w-100 ghost" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/09-09-2021/diseno_campana_integridad_v2_campana_integridad_episodio_4.jpg">
                    <!-- </a> -->
                    <div class="mensaje">
                        <h1>Final de la serie disponible el 1 de octubre </h1>
                    </div>
                </div>
                <hr class="hr1">
                <h3 class="text-center">Episodio 4</h3>
            </div>
        </div>
    </div>
</div>
<style type="text/css">
    .dh {
        margin: 20px;
        border: solid;
        border-width: 2px;
        -webkit-box-shadow: 0px 0px 21px 5px rgba(0, 0, 0, 0.5);
        box-shadow: 0px 0px 21px 5px rgba(0, 0, 0, 0.5);
    }

    .seccion h1 {
        font-family: 'Bangers', cursive;
        font-size: 4em;
        text-shadow: 2px 2px 2px #000;
        color: #4c531fff;

    }

    .seccion p {
        font-family: 'Bangers', cursive;
        font-size: 2em;
        text-align: center;
        padding: 20px;
        /* text-shadow: 2px 2px 2px yellow; */

    }

    .dv {
        margin: 20px;
        padding: 10px;
        font-family: 'Bangers', cursive;
        border: solid;
        border-width: 2px;
        -webkit-box-shadow: 0px 0px 21px 5px rgba(0, 0, 0, 0.5);
        box-shadow: 0px 0px 21px 5px rgba(0, 0, 0, 0.5);
    }

    .w-100 {
        width: 100%;
    }

    .image {
        filter: brightness(0.4);
        filter: blur(10px);
        -webkit-filter: blur(10px);
        -moz-filter: blur(10px);

    }

    .ghost {
        filter: blur(10px) brightness(30%);
        -webkit-filter: blur(10px) brightness(30%);
        -moz-filter: blur(10px) brightness(30%);

    }

    .trans {

        position: relative;
        text-align: center;
        z-index: 1;
        margin: auto !important;
        color: #fff;
    }

    .mensaje {
        padding: 15px;
        position: absolute;
        top: 30%;
        left: 0;
        right: 0;
        margin: auto;
        width: 100%;

    }

    .mensaje h3 {
        font-size: 1.2em;
        line-height: 25px;
        word-spacing: 8px;

    }

    .mensaje h1 {
        font-size: 2em;
        word-spacing: 8px;
        color: yellow;
    }

    .hr1 {
        border-color: #000;
    }

    /* .fondo1{
        background-color: yellow;
    } */
</style>