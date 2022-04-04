@extends('welcome')
@section('contenido')

<!-- ----- ----- ----- ----- ----- ----- ----- ----- Bloque Seccion ----- ----- ----- ----- ----- ----- ----- ----- ----- ------ -->

<div class='container-fluid prueba'>
    <div class='s2'>
        
<div class="row">

    <div class='col-xs-12'>
        <a class="enlace" href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/05-02-2022/2022-01-24_boletinbem.pdf">
            <div class="btn-boletin">
                <div class="titulo-boletin">
                    <h4>BOLETÍN 23</h4>
                    <i>Lunes, 24 de Enero de 2022</i>
                </div>
                <div class="descripcion-boletin">
                    <p>El Plan de Choque llegó al sector de Timiza en Kennedy para mejorar el estado de sus calles. Grupo 2: Entre Avenida Bosa y Avenida Villavicencio Afectaciones viales por Avance de Av. Guayacanes. Álvaro Rengifo, nuevo gerente de TRANSMILENIO S.A. Y más.</p>
                </div>
            </div>
        </a>
    </div>
   
    <div class='col-xs-12'>
        <a class="enlace" href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/05-02-2022/2022-01-24_boletinbem.pdf">
            <div class="btn-boletin">
                <div class="titulo-boletin">
                    <h4>BOLETÍN 23</h4>
                    <i>Lunes, 24 de Enero de 2022</i>
                </div>
                <div class="descripcion-boletin">
                    <p>El Plan de Choque llegó al sector de Timiza en Kennedy para mejorar el estado de sus calles. Grupo 2: Entre Avenida Bosa y Avenida Villavicencio Afectaciones viales por Avance de Av. Guayacanes. Álvaro Rengifo, nuevo gerente de TRANSMILENIO S.A. Y más.</p>
                </div>
            </div>
        </a>
    </div>

</div>
<div>
    <!-- collapse -->
    <div class='panel panel-default'>
        <div class='panel-heading' role='tab' id='heading'>
            <h4 class='panel-title'>
                <a role='button' data-toggle='collapse' data-parent='#accordion' href='#collapse' aria-expanded='true' aria-controls='collapse'>
                    Demo
                </a>
            </h4>
        </div>
        <div id='collapse' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading'>
            <div class='panel-body'>
                
            </div>
        </div>
    </div>
    <!-- /#fin  -->
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

    .prueba {
        font-size: 13px !important;
        line-height: 1.4 !important;
        max-width: 980px;
    }

/*
    .prueba [class*='col-'] {
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

    

    .s2 .btn-boletin {
        padding: 10px;
        /* border: solid 2px #f4b300; */
        border-radius: 1px;
        margin: 1% 5%;
        /* height: 100px; */
        display: flex;
        flex-direction: column;
        justify-content: center;
        background-color: #eeeeee;

        border: 2px transparent solid;
        border-image: -webkit-linear-gradient(left, #c9171950, #f4b30050) 1 10;


    }

    .s2 .btn-boletin:hover {
        border: solid 2px #c91719;
        background-color: #c5c5c5;
    }



    .s2 .btn-boletin .titulo-boletin {
        padding-bottom: 8px;
    }

    .s2 .btn-boletin .titulo-boletin h4 {
        margin: 5px 0px 5px 0px;
        padding: 0px;
        margin: 0px;
        font-size: 16px;
        font-weight: 700;
        text-align: justify;
        line-height: 1.2;
        color: rgba(25, 25, 25, 1);

    }

    .s2 .btn-boletin .titulo-boletin i {
        margin: 0px;
        padding: 0px 0px 5px 0px;

    }

    .s2 .btn-boletin .descripcion-boletin {
        padding: 0px;
        height: 20px;
        white-space: nowrap; 
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .s2 .btn-boletin .descripcion-boletin p {
        text-align: justify;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .s2 .enlace {
        text-decoration: none;
        color: #252525;
    }


    .s2 .descripcion-boletin {
        /* padding: 8%; */
        padding: 4%;
    }



</style>
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin hoja de estilo  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->