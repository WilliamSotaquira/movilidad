@extends('welcome')
@section('contenido')

<!-- ----- ----- ----- ----- ----- ----- ----- ----- Bloque Seccion ----- ----- ----- ----- ----- ----- ----- ----- ----- ------ -->

<div class='container-fluid milagros'>
    <div class='encabezado'>
        <div class="logo">
            <img class='img-responsive w-100' src='/images/milagros/Logos milagros-04.png' alt='Logo Milagros Bogotanos Estupor en la ruta' title='Logo Milagros Bogotanos Estupor en la ruta'>
        </div>

        <div class="arcoiris">
            <div class='row'>
                <div class='col-xs-2'>
                    <img class='img-responsive w-100' src='/images/milagros/arcoiris1.png' alt='vector milagros bogotanos' title='vector milagros bogotanos'>
                </div>
                <div class='col-xs-2 col-xs-offset-8'>
                    <img class='img-responsive w-100' src='/images/milagros/arociris2.png' alt='vector milagros bogotanos' title='vector milagros bogotanos'>
                </div>
            </div>
        </div>
    </div>
    <style>
        .encabezado {
            height: 300px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: #ec413a;
            position: relative;
        }

        .encabezado .logo img {
            max-height: 240px;
            padding: 20px;
        }

        .arcoiris {
            position: absolute;
            bottom: 0px;
        }
    </style>
    <div class="s1">

    </div>
    <style>
        .s1{
            height: 400px;
            background: url('/images/milagros/fondo_amarillo.png');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }
    </style>
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

    .milagros {
        font-size: 13px !important;
        line-height: 1.4 !important;
        max-width: 980px;
    }

    /*
    .milagros [class*='col-'] {
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
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin hoja de estilo  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->