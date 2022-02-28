@extends('welcome')
@section('contenido')

<!-- ----- ----- ----- ----- ----- ----- ----- ----- Bloque Seccion ----- ----- ----- ----- ----- ----- ----- ----- ----- ------ -->

<div class='container-fluid seccion'>
    <div class='s1'>
        <div class="encabezado">
            <div class="row titulo">
                <h3>Centro de Contacto de Movilidad</h3>
            </div>
            <div class="row">
                <div class="col-xs-6 col-sm-4 col-md-2">
                    <div class="tab">
                        <div class="img-tab">
                            <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/16-11-2021/atenciontelefonica.png" alt="">
                        </div>
                        <div class="txt-tab">
                            <h4>Agendamiento virtual</h4>
                        </div>
                    </div>
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

    .seccion {
        font-size: 16px !important;
        line-height: 1 !important;
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

    .s1>.encabezado {
        background-color: #191C3A;
    }

    .s1>.encabezado>.titulo {
        text-align: center;
        text-transform: uppercase;
        color: #77b428;
    }

    .s1>.encabezado>.titulo>h3 {
        font-weight: 900;
        font-size: calc(2rem + 1vw);
        padding: 15px 30px;
        margin: 10px;
    }
</style>
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin hoja de estilo  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->