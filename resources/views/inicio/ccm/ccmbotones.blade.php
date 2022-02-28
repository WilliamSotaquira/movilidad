@extends('welcome')
@section('contenido')

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

<!-- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- -----
                                                          Bloque Seccion
----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<hr>
<div class='seccion'>
    <div class="encabezado">
        <div class="titulo">
            <h3>CENTRO DE CONTACTO DE MOVILIDAD</h3>
        </div>
    </div>

    <div class="botones">
        <div class="row">
            <div class="col-xs-12 col-sm-3">
                <a href="https://www.movilidadbogota.gov.co/web/content/agendamiento_cursos" target="_blank" rel="noopener noreferrer">
                    <div class="boton zoom">
                        <h4>Agendamiento Virtual</h4>
                        <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/19-10-2021/centrodecontactodemovilidad_icon_1_0.png" class="img-responsive w-100" alt="Acceda a Agendamiento Virtual" title="Agendamiento Virtual">
                    </div>
                </a>
            </div>
            <vl></vl>
            <div class="col-xs-12 col-sm-3">
                <a href="https://www.movilidadbogota.gov.co/web/canales_de_atencion_al_ciudadano">
                    <div class="boton zoom">
                        <h4>Canales de atención</h4>
                        <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/19-10-2021/centrodecontactodemovilidad_icon_2_0.png" class="img-responsive w-100" alt="Acceda a Canales de atención" title="Canales de atención">
                    </div>
                </a>
            </div>
            <vl></vl>
            <div class="col-xs-12 col-sm-3">
                <a href="https://www.movilidadbogota.gov.co/web/puntos_de_atencion" target="_blank" rel="noopener noreferrer">
                    <div class="boton zoom">
                        <h4>Puntos de atención</h4>
                        <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/19-10-2021/centrodecontactodemovilidad_icon_3_0.png" class="img-responsive w-100" alt="Acceda a Puntos de atención" title="Puntos de atención">
                    </div>
                </a>
            </div>
            <vl></vl>
            <div class="col-xs-12 col-sm-3">
                <a href="https://www.movilidadbogota.gov.co/web/content/agendamiento_facilidades_de_pago" target="_blank" rel="noopener noreferrer">
                    <div class="boton zoom">
                        <h4>Acuerdos de Pago</h4>
                        <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-10-2021/centrodecontactodemovilidad_icon_4.png" class="img-responsive w-100" alt="Acceda a Acuerdos de Pago" title="Acuerdos de Pago">
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

<hr>
  <div class="row">
      <div class="col-xs-12 visible-xs-12 visible-xs-block">
          <a href="https://www.movilidadbogota.gov.co/web/canales_de_atencion_al_ciudadano">
              <img alt="Centro de Contacto de Movilidad" class="img-responsive w-100 img-rounded" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/11-11-2021/11_-_actualziacion_banner_pagina_web_-_banner_900_x_450_1.jpg" title="Centro de Contacto de Movilidad">
            </a>
        </div>
        <div class="col-sm-12 hidden-xs">
          <a href="https://www.movilidadbogota.gov.co/web/canales_de_atencion_al_ciudadano">
              <img alt="Centro de Contacto de Movilidad" class="img-responsive w-100 img-rounded" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/11-11-2021/11_-_actualziacion_banner_pagina_web_-_banner_1920_x_640_1.jpg" title="Centro de Contacto de Movilidad">
          </a>
      </div>
  </div>


<!-- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- -----
                                                        Fin Bloque Sección 
----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ------ -->


<!-- ----- ----- ----- ----- ----- ----- ----- ----- Hoja de estilo --- ----- ----- ----- ----- ----- ----- ----- ----- -->
<style type='text/css'>
    .field-item.even h2 {
        visibility: hidden;
        margin-top: -50px;
    }

    .seccion {
        font-size: 10px;
        font-family: 'Raleway', sans-serif;
        max-width: 940px;
    }

    .w-100 {
        width: 100%;
    }

    div .encabezado {
        background-color: #191C3A;
        text-align: center;
        border-top: solid 4px #66e026;
        border-bottom: solid 2px #66e026;

    }

    div .titulo {
        padding: 1rem;
    }

    div .titulo h3 {
        font-weight: 900;
        color: #66e026;
        font-size: calc(1rem + 1vw);
        margin-top: 8px;
        margin-bottom: 8px;
    }

    div .botones {
        padding-left: 1rem;
        padding-right: 1rem;
        padding-bottom: 2rem;
        background-color: #191C3A;
        border-bottom: solid 8px #66e026;


    }

    div .boton {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        align-items: center;
        padding: 0.5rem;
        text-align: center;
        border-bottom: solid 3px #191C3A;

    }

    div .botones a {
        text-decoration: none;
        color: #fff;

    }

    div .boton h4 {
        color: #fff;
        font-weight: 800;
        font-size: calc(1rem + 0.5vw);
        padding: 0.5rem;
        margin-top: 0px;
        margin-bottom: 0px;
    }

    div .boton:hover {
        border-bottom: solid 3px #66e026;
    }


    div .boton img {
        width: 100px;
    }

    .zoom {
        transition: 0.5s ease;
        -moz-transition: 0.5s ease;
        /* Firefox */
        -webkit-transition: 0.5s ease;
        /* Chrome - Safari */
        -o-transition: 0.5s ease;
        /* Opera */
    }

    .zoom:hover {
        transform: scale(1.05);
        -moz-transform: scale(1.05);
        /* Firefox */
        -webkit-transform: scale(1.05);
        /* Chrome - Safari */
        -o-transform: scale(1.05);
        /* Opera */
        -ms-transform: scale(1.05);

    }

    .vl {
        border-left: 6px solid #fff;
        height: 500px;
        position: absolute;
        left: 50%;
        margin-left: -3px;
        top: 0;
    }

    /* IE9 */
</style>
<!-- ----- ----- ----- ----- ----- ----- ----- ----- Fin hoja de estilo  ----- ----- ----- ----- ----- ----- ----- ----- -->