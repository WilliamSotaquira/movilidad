@extends('welcome')
@section('contenido')

<!-- ----- ----- ----- ----- ----- ----- ----- ----- Bloque Seccion ----- ----- ----- ----- ----- ----- ----- ----- ----- ------ -->

<div class='container-fluid seccion'>
    <div class='s1'>
        <!-- Botones Pico y Placa  -->
        <div class='row botones-pyp'>
            <div class='col-xs-12 col-sm-3 col-md-3'>
                <div class="logo-pyp">
                    <div class='row'>
                        <!-- xs -->
                        <div class='col-xs-12 visible-xs-12 visible-xs-block'>
                            <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/20-01-2022/logo_pyp_xs_a.webp' alt='Logo Pico y Placa Bogotá - Todo lo que debes saber' title='Logo Pico y Placa Bogotá - Todo lo que debes saber'>
                        </div>
                        <!-- lg -->
                        <div class='col-sm-12 hidden-xs'>
                            <img class='img-responsive w-100 hidden-xs ' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/20-01-2022/logo_pyp_sm_a.webp' alt='Logo Pico y Placa Bogotá - Todo lo que debes saber' title='Logo Pico y Placa Bogotá - Todo lo que debes saber'>
                        </div>
                    </div>
                </div>
            </div>
            <div class='col-xs-12 col-sm-9 col-md-9'>
                <div class='row box-botones'>
                    <div class='col-xs-6 col-sm-4 col-md-2'>
                        <a href="https://picoyplacasolidario.movilidadbogota.gov.co/PortalCiudadano/#/" target="_blank" rel="noopener noreferrer">
                            <div class="box-pyp">
                                <div class="txt-pyp">
                                    <div>
                                        <h3><span>Pico y Placa</span> Solidario</h3>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class='col-xs-6 col-sm-4 col-md-2'>
                        <a href="https://www.movilidadbogota.gov.co/web/registro_restriccion_vehicular" target="_blank" rel="noopener noreferrer">
                            <div class="box-pyp">
                                <div class="txt-pyp">
                                    <div>
                                        <h3><span>Movilidad</span> Compartida</h3>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class='col-xs-6 col-sm-4 col-md-2'>
                        <a href="https://www.movilidadbogota.gov.co/web/registro_restriccion_vehicular" target="_blank" rel="noopener noreferrer">
                            <div class="box-pyp">
                                <div class="txt-pyp">
                                    <div>
                                        <h3>Registro <span>de vehículos</span> híbridos y eléctricos</h3>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class='col-xs-6 col-sm-4 col-md-2'>
                        <a href="https://www.movilidadbogota.gov.co/web/inscripcion-excepciones" target="_blank" rel="noopener noreferrer">
                            <div class="box-pyp">
                                <div class="txt-pyp">
                                    <div>
                                        <h3>Registro de exceptuados <span>de Pico y Placa</span></h3>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class='col-xs-6 col-sm-4 col-md-2'>
                        <a href="https://www.movilidadbogota.gov.co/web/pico_y_placa_2022" target="_blank" rel="noopener noreferrer">
                            <div class="box-pyp">
                                <div class="txt-pyp">
                                    <div>
                                        <h3>Abecé <span>de Pico y Placa</span></h3>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class='col-xs-6 col-sm-4 col-md-2'>
                        <a href="https://www.movilidadbogota.gov.co/web/SIMUR/EXCEPCIONES_WEB/EX_CONSULTA/" target="_blank" rel="noopener noreferrer">
                            <div class="box-pyp">
                                <div class="txt-pyp">
                                    <div>
                                        <h3>Consulta de <span>vehículos</span> exceptuados</h3>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fin Botones Pico y Placa  -->
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

    .seccion {
        font-size: 16px !important;
        line-height: 1 !important;
        max-width: 940px;
    }


    .w-100 {
        width: 100%;
    }
</style>
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin hoja de estilo  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<style>
    .botones-pyp [class*='col-'] {
        margin: 0px;
        padding: 0px;
        border: 0;
        outline: 0;
        font-size: 100%;
        vertical-align: baseline;
    }

    .botones-pyp {
        font-size: 18px !important;
        font-family: 'Sora', sans-serif;
        background: linear-gradient(70deg, black, transparent), url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/20-01-2022/pyp_fondo_2.webp');
        background-size: revert;
        background-position: bottom;
        border-radius: 6px;
    }

    .botones-pyp .logo-pyp {
        padding: 5% 5% 0% 5%;
    }

    .botones-pyp .box-pyp {
        border: solid 2px #fff;
        height: 130px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        margin: 5px;
    }

    .botones-pyp .box-pyp:hover,
    .botones-pyp .box-pyp:active {
        background-color: #000000;
    }

    .botones-pyp .box-botones {
        padding: 20px;

    }

    .botones-pyp .box-botones a {
        text-decoration: none !important;
        font-size: 1em !important;
    }

    .botones-pyp .txt-pyp {
        text-align: center;
        font-family: 'Sora', sans-serif;
        background-color: #00000090;
        height: 110px;
        width: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;

    }

    .botones-pyp .txt-pyp h3 {
        text-align: center;
        color: #fff;
        font-weight: 700;
        margin: 5px;
        font-size: 1em;
    }

    .botones-pyp .txt-pyp span {
        text-align: center;
        color: #e59c22;

    }
</style>
<style>
    @media(max-width:300px) {

        .botones-pyp .txt-pyp h3 {

            font-size: 12px;
        }
    }

    @media(min-width:768px) {
        .botones-pyp {
            background: linear-gradient(70deg, black, transparent), url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/20-01-2022/pyp_fondo_6a.webp');
            background-size: cover;
            background-position: bottom;
            background-repeat: no-repeat;
        }


        .botones-pyp .logo-pyp {
            height: 320px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 25px;
        }

    }

    @media(min-width:992px) {


        .botones-pyp .logo-pyp {
            /* height: 320px; */
            height: 180px;
        }

        .botones-pyp .txt-pyp h3 {
            /* font-size: 1em; */
            font-size: 16px;
        }

    }

    @media(min-width:1200px) {}
</style>