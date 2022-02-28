@extends('welcome')
@section('contenido')

<!-- ----- ----- ----- ----- ----- ----- ----- ----- Bloque Seccion ----- ----- ----- ----- ----- ----- ----- ----- ----- ------ -->

<div class='container-fluid seccion'>
    <div class='s1'>
        <div  class="titulo-encabezado">
            <h3>Pico y Placa</h3>
        </div>
        <div class="parrafo-encabezado">
            <p>Conozca la reglamentación y las restricciones a la circulación de vehículos en Bogotá por tipo de servicio.</p>
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
        overflow:hidden;
    }

    .seccion {
        font-size: 16px !important;
        line-height:1 !important;
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
    .titulo-encabezado{
        text-align: center;
        border-bottom: solid 3px #4D541F;
    }
    .titulo-encabezado h3{
        color: #4D541F;
    }
    .parrafo-encabezado{
        padding: 2vw;
    }


</style>
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin hoja de estilo  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->