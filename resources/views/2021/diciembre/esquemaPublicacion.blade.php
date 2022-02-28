@extends('welcome')
@section('contenido')


<!-- ----- ----- ----- ----- ----- ----- ----- ----- Bloque Seccion ----- ----- ----- ----- ----- ----- ----- ----- ----- ------ -->

<div class='container-fluid seccion'>
    <div class='s1'>
        <div class='row'>
            
            <h3 class="text-center">Esquema de publicación de información</h3>
            <hr>
            <div class='col-xs-12 col-sm-12 col-md-12'>
             <div class="form-group">

                 <blockquote>
                     <p class="text-justify">Este esquema presenta toda la información alojada en la página para conocimiento y acceso público, describiendo entre otras características el formato del documento, la fecha de generación del mismo, su frecuencia de actualización, y el área o dependencia responsable de su producción y actualización. La Secretaría Distrital de Movilidad hace consolidación de esta información mensualmente.</p>
                 </blockquote>
             </div>
            </div>
        </div>
        <div class='row'>
            <div class='col-xs-12 col-sm-12 col-md-12'>
                <div class="text-center">
                    <p class="rtejustify"><a class="btn btn-primary" href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/28-09-2021/matriz_final.xlsx" target="_blank">Descargar Esquema de publicación Secretaria Distrital de Movilidad (.xlsx)</a></p>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class='row'>
            <h3 class="text-center">Registro de Publicaciónes de los sitios web de la Secretaría Distrital de Movilidad</h3>
            <hr>
            <div class='col-xs-12 col-sm-12 col-md-12'>
                <iframe width="100%" height="350px" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRQ1kx9cf0l0fPeL3eCaOhOAwe34s0o7VUZ_v0KybxSGISFi6iJyNAUoA46DruAuX6_G0hVvpz0A0iu/pubhtml?gid=1982336003&amp;single=true&amp;widget=true&amp;headers=false"></iframe>
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
    .s1 h3{
        color: #4D541F;
    }
</style>
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin hoja de estilo  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->