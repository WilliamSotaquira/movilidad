@extends('welcome')
@section('contenido')

<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fuente Montserrat -----  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<link rel='preconnect' href='https://fonts.googleapis.com'>
<link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
<link href='https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap' rel='stylesheet'>
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin Fuente Montserrat -  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->


<!-- ----- ----- ----- ----- ----- ----- ----- ----- Bloque Seccion ----- ----- ----- ----- ----- ----- ----- ----- ----- ------ -->

<div class='container-fluid contraflujo'>
    <div class='encabezado clear-box'>
        <div class='row'>
            <div class='col-xs-12 col-sm-6 col-md-6'>
                <div class="box-img-titulo">

                </div>
            </div>
            <div class='col-xs-12 col-sm-6 col-md-6'>
                <div class="line-encabezado"></div>
                <div class="box-titulo">
                    <div>
                        <h3><span class="enfasis">Abecé</span> sobre el <span class="enfasis2">Contraﬂujo de la</span> Avenida Las Américas</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .encabezado {
            background-color: rgba(31, 34, 62, 1);
        }


        .clear-box [class*='row'],
        .clear-box [class*='col-'] {
            margin: 0px;
            padding: 0px;
            border: 0;
            outline: 0;
            font-size: 100%;
            vertical-align: baseline;
        }


        .encabezado .box-img-titulo {
            height: 300px;
            background: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-03-2022/contraflujo_encabezado.webp');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }

        .encabezado .line-encabezado {
            height: 20px;
            background-color: rgba(190, 208, 0, 1);
            width: 50%;
        }

        .encabezado .box-titulo {
            height: 280px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 50px;
        }

        .encabezado .box-titulo h3 {
            font-size: 40px;
            font-weight: 700;
            text-align: left;
            line-height: 1.2;
            color: rgba(255, 255, 255, 1);
            margin: 0px;
        }

        .enfasis {
            font-size: 60px;
            font-weight: 700;
            text-align: justify;
            line-height: 1.2;
            color: rgba(190, 208, 0, 1);
        }

        .enfasis2 {
            font-size: 45px;
            font-weight: 700;
            text-align: justify;
            line-height: 1.2;
            color: rgba(255, 255, 255, 1);
        }
    </style>
    <div class="s1">
        <div class="box-parrafos">
            <h3>¿En qué consiste la medida? </h3>
            <p>La medida consiste en habilitar un carril sobre la calzada norte de la Avenida de las Américas en sentido occidente-oriente. El contraﬂujo iniciará en la carrera 74 cerca al Portal Banderas y ﬁnalizará en la carrera 62 sector Outlets de las Américas, con una distancia aproximada de 3 kilómetros. Sobre la carrera 62 mediante semáforo humano se incorporan a la carrera 62 transitando al norte para tomar la calle 13 y así puedan continuar al oriente y/o retornar a la Av. de las Américas.</p>
            <h3>¿En qué horario se realizará esta</h3>
            <p>La medida se contempla en las horas pico del corredor, por lo que <strong>su operación será de 6:00 a.m. a las 9:00 a.m. de lunes a viernes.</strong></p>
            <h3>¿Cuál es el problema de movilidad en ese sector?</h3>
            <p>El corredor de la Avenida de las Américas presenta alta congestión vehicular hacia el oriente en las horas pico. Para las horas de la mañana se satura la capacidad vial y factores como cambios de infraestructura de pasar de 5 a 3 carriles en los ascensos a los puentes vehiculares generan cuellos de botella y altas demoras. </p>
            <p>Actualmente, en la ciudad se están ejecutando obras de alto impacto tales como la construcción del sistema Transmilenio en la Av. Ciudad de Cali, la construcción del sistema Transmilenio en la Carrera 68, las obras derivadas del proyecto de la primera línea del Metro en la Av. 1 de Mayo, por lo que estamos en un cambio de las rutas tradicionales que utilizaba la ciudadanía del suroccidente para movilizarse hacia el centro de la ciudad.</p>
        </div>
        <div>
            <div class="msj-box">
                <div class='row'>
                    <div class='col-xs-12 col-sm-3 col-md-3'>
                        <div class="icono-box">
                            <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-03-2022/reloj-de-pared.png' alt='Icono de reloj' title='Icono de reloj'>
                        </div>
                    </div>
                    <div class='col-xs-12 col-sm-9 col-md-9'>
                        <div class="txticon-box">
                            <p>La medida consiste en habilitar un carril sobre la calzada norte de la Avenida de las Américas <strong>en el periodo pico de la mañana de 6:00 a.m. a 9:00 a.m., en sentido occidente-oriente.</strong></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <style>
            .msj-box {
                background-color: #efefef;
                border: solid 1px #d5d5d5;
            }

            .icono-box {
                height: 200px;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }

            .icono-box img {
                max-height: 100px;
                width: auto;
            }

            .txticon-box {
                height: 200px;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }

            .txticon-box p {
                font-size: 20px;
                font-weight: 700;
                text-align: justify;
                line-height: 1.2;
                color: rgba(31, 34, 62, 1);
                padding: 20px;
            }
        </style>
        <div class="box-parrafos">
            <h3>¿Cuál es la solución? </h3>
            <p>Optimizar el uso de la infraestructura vial mediante acciones temporales de gestión del tráﬁco, aumentando la capacidad de la Avenida de las Américas hacia el oriente mediante el uso de un carril de contraﬂujo solo para vehículos livianos (automóviles, camionetas y camperos), con prioridad para vehículos compartidos.</p>
            <h3>¿Quiénes se beneﬁciarán con el carril adicional?</h3>
            <p>Los usuarios que viven en las localidades de Bosa y Kennedy y que se desplazan por este corredor sentido occidente-oriente y preferiblemente que comparten su vehículo.</p>
            <p>La medida busca beneﬁciar directamente a los usuarios que tomen el carril adicional y que se dirigen al centro de la ciudad.</p>
            <p>Adicionalmente, los usuarios que seguirán usando la calzada de circulación en sentido occidente-oriente se verán de algún modo beneﬁciados <strong>al tener mayor capacidad para circular.</strong></p>
            <h3>¿Por qué un carril adicional en la Av. de las Américas?</h3>
            <p>Según estudios de la Secretaría Distrital de Movilidad (SDM), por este corredor en sentido occidente-oriente se movilizan más de 7.500 vehículos y oriente-occidente más de 3.300 vehículos en la hora pico de la mañana, además se buscan alternativas y rutas alternas por frentes de obras que se adelantan en la ciudad. </p>
            <p>Cifras de la Entidad muestran que en las horas pico de la mañana la calzada norte del corredor Avenida de las Américas presenta buenas condiciones de movilidad ya que el volumen vehicular que circula en sentido Oriente-Occidente (3.300 veh/h) es inferior al volumen que circula en sentido Occidente-Oriente (7.500 veh/h), entonces, con el ﬁn de optimizar el uso de la infraestructura el sector movilidad quiere atender la necesidad de los usuarios que viajan al oriente brindándoles un carril adicional.</p>
            <h3>¿Para qué sirve este carril?</h3>
            <p>Sirve para que los vehículos livianos (automóviles, camionetas y camperos) que se desplazan desde el sector de Banderas y cuyos destinos están al oriente de la carrera 62 puedan usar el carril de forma directa, ya que no se tiene ingreso ni salidas intermedias, esto conlleva a tener una mejor velocidad y por ende una reducción en tiempos de recorrido. Es de mencionar que el ﬂujo habitual de la calzada sur también se verá beneﬁciado al desviar estos vehículos al carril "express".</p>
        </div>

        <div class="img-map">

        </div>
        <style>
            .s1 .img-map {
                height: 200px;
                background: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-03-2022/contraflujo_2.png');
                background-size: cover;
                background-repeat: no-repeat;
                background-position: center;
                border: solid 1px #d5d5d5;

            }
        </style>
        <div class="box-parrafos">
            <h3>¿Quiénes pueden ingresar al carril?</h3>
            <p>Sólo los vehículos livianos (automóviles, camperos, camionetas) podrán ingresar al carril en contraﬂujo, ellos deben ubicarse únicamente en el carril derecho del retorno de la carrera 74 para incorporarse en la calzada norte al carril en contraﬂujo.</p>
            <h3>¿Si un vehículo ingresa por la carrera 74, puede salir antes de la carrera 68 o por otro lugar?</h3>
            <p>No, esta medida no contempla ingreso ni salida por otro lugar a los mencionados dado que representa un riesgo para los actores viales.</p>
            <h3>¿Los vehículos podrán ingresar por algún lado del carril de contraﬂujo?</h3>
            <p>No, en la medida no está permitido ninguna incorporación durante el trayecto, solo se tendrá un ingreso (carrera 74) y una salida (carrera 62), incluso no está permitido adelantar en el carril de contraﬂujo.</p>
            <h3>¿El contraﬂujo afectará el carril exclusivo de TransMilenio?</h3>
            <p>No, dado que no se hará uso de las vías de Transmilenio, tampoco se intervendrá en su infraestructura.</p>
            <h3>¿Qué es un contraﬂujo?</h3>
            <p>Es una medida que consiste en habilitar un carril de una calzada para que circulen vehículos en sentido contrario al habitual. </p>
            <h3>¿Cuál es la diferencia con el reversible? </h3>
            <p>El reversible consiste en cambiar el sentido de circulación total de una vía, es decir que quedaría en un único sentido en el periodo que se desee implementar.</p>
            <h3>¿Qué buscamos con el carril adicional?</h3>
            <p>Aprovechar la capacidad disponible sobre la calzada norte con medidas de gestión en vía que permitan un mejor ﬂujo hacia el oriente de los vehículos, y así disminuir los tiempos de viaje para los usuarios.</p>
            <p>De acuerdo a análisis de la Secretaría Distrital de Movilidad los tiempos de recorrido a las 7:00 a.m. genera tiempos de 25 a 30 minutos en el trayecto de occidente oriente, entre la carrera 74 y la carrera 62.</p>
            <p>En un principio se plantea dar mayor capacidad vial en sentido occidente-oriente, disminuyendo los tiempos de recorrido y mejorando la velocidad de circulación en el tramo de estudio.</p>
        </div>

        <div class="img2"></div>
        <style>
            .s1 .img2 {
                height: 200px;
                background: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-03-2022/contraflujo_4.jpg');
                background-size: cover;
                background-repeat: no-repeat;
                background-position: center;
                border: solid 1px #d5d5d5;

            }
        </style>

        <div class="box-parrafos">
            <h3>¿Cuáles son los volúmenes de vehículos y velocidad que circulan en este trayecto?</h3>
            <p>Según información reciente de monitoreo tomada el 1 de marzo de este año, por el corredor circulan en la hora pico 7.500 vehículos mixtos en sentido occidente -oriente y 3300 en sentido oriente-occidente. Asimismo, según monitoreo del mes de marzo entre las 6:00 y 9:00 de la mañana para días típicos se presenta una velocidad promedio de 14 km/h en el tramo de la carrera 74 hasta la carrera 62 en sentido occidente -oriente.</p>
            <h3>¿Qué otras medidas de movilidad se implementarán en este corredor?</h3>
            <p>Como medida complementaria se implementará un cierre de la oreja del costado sur-occidental de la Av. de las Américas en horario de 6:30 a.m. a 8:30 a.m. de lunes a viernes. Está medida busca eliminar los conﬂictos que se presentan en la salida de la conectante y así beneﬁciar a los vehículos que circulan de forma directa occidente-oriente.</p>
        </div>
    </div>
    <style>
        .s1 .box-parrafos {
            padding: 30px;
            column-count: 2;
            column-gap: 60px;
        }

        .s1 .box-parrafos h3 {
            font-size: 20px;
            font-weight: 700;
            text-align: justify;
            line-height: 1.2;
            color: rgba(31, 34, 62, 1);
            padding-top: 20px;
        }

        .s1 .box-parrafos p {
            font-size: 15px;
            font-weight: 500;
            text-align: justify;
            line-height: 1.4;
            color: rgba(31, 34, 62, 1);
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

    .contraflujo {
        font-size: 13px !important;
        line-height: 1.4 !important;
        max-width: 980px;
    }

    /*
    .contraflujo [class*='col-'] {
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
<style>
    @media(max-width:767px) {


        .encabezado .box-img-titulo {
            height: 200px;
        }

        .enfasis {
            /* font-size: 60px; */
            font-size: 40px;
        }

        .encabezado .box-titulo h3 {
            /* font-size: 40px; */
            font-size: 26px;
        }

        .enfasis2 {
            /* font-size: 45px; */
            font-size: 30px;
        }

        .s1 .box-parrafos {
            column-count: 1;
            padding: 0px;
        }

        .s1 .img-map {
            height: 80px;
        }


    }

    @media(min-width:768px) {


        .enfasis {
            /* font-size: 60px; */
            font-size: 50px;
        }

        .encabezado .box-titulo h3 {
            /* font-size: 40px; */
            font-size: 30px;
        }

        .enfasis2 {
            /* font-size: 45px; */
            font-size: 38px;
        }
        .s1 .img-map {
            height: 200px;
        }
        .s1 .box-parrafos {
            padding: 30px;
            column-count: 2;
            column-gap: 20px;
        }

    }

    @media(min-width:992px) {

        .s1 .box-parrafos {
            padding: 30px;
            column-count: 2;
            column-gap: 60px;
        }
        .enfasis {
            font-size: 60px;
        }
        .encabezado .box-titulo h3 {
            font-size: 40px;
        }
        .enfasis2 {
            font-size: 45px;
        }
        .s1 .img-map {
            height: 260px;
        }
        
    }

</style>
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin hoja de estilo  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->