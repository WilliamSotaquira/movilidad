@extends('welcome')
@section('contenido')
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fuente Montserrat -----  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<link rel='preconnect' href='https://fonts.googleapis.com'>
<link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
<link href='https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap' rel='stylesheet'>
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin Fuente Montserrat -  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<!-- Set Wrapper -->
<div class='container-fluid panking'>
    <div class='box-wrp'>

        <div class="box-contents">

            <div class='box-head head'>
                <div class='row'>
                    <!-- xs -->
                    <div class='col-xs-12 visible-xs-12 visible-xs-block'>
                        <img class='img-responsive w-100 logo' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-06-2022/parking_b.jpg' alt='Abecé Valet Parking' title='Abecé Valet Parking'>
                    </div>
                    <!-- lg -->
                    <div class='col-sm-12 hidden-xs'>
                        <img class='img-responsive w-100 logo' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-06-2022/parking.jpg' alt='Abecé Valet Parking' title='Abecé Valet Parking'>
                    </div>
                </div>
            </div>

            <div class="texto texto1">
                <p>La Secretaría Distrital de Movilidad expidió la reglamentación del servicio de valet parking en tres zonas de Bogotá donde se desarrolla está actividad. Conoce qué es y cómo funciona.</p>
            </div>

            <div class="texto texto2">
                <ol>
                    <li>
                        <h3>1. ¿Qué es el Valet Parking?</h3>
                        <p>Es el servicio prestado por personas naturales o jurídicas que reciben vehículos en la vía pública frente a establecimientos comerciales, de recreación o de servicios, los ubican en un estacionamiento durante la estadía temporal de sus conductores o propietarios en dicho establecimiento y los regresan al mismo punto haciendo la entrega del vehículo al usuario.</p>
                    </li>
                </ol>
            </div>
            <!-- Carousel carousel_vallet -->
            <div class='box-carousel carrusel-vallet'>
                <div id='carousel_vallet' class='carousel slide' data-ride='carousel'>
                    <!-- Indicators -->
                    <ol class='carousel-indicators'>
                        <li data-target='#carousel_vallet' data-slide-to='0' class='active'></li>
                        <li data-target='#carousel_vallet' data-slide-to='1'></li>
                        <li data-target='#carousel_vallet' data-slide-to='2'></li>
                        <li data-target='#carousel_vallet' data-slide-to='3'></li>
                        <li data-target='#carousel_vallet' data-slide-to='4'></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class='carousel-inner'>
                        <div class='item active'>
                            <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/28-06-2022/parking_foto.png' alt='' title=''>
                        </div>
                        <div class='item'>
                            <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/28-06-2022/valet_parking.png' alt='' title=''>
                        </div>
                        <div class='item'>
                            <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/28-06-2022/valet_parking_c.png' alt='' title=''>
                        </div>
                        <div class='item'>
                            <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/28-06-2022/valet_parking_e.png' alt='' title=''>
                        </div>
                        <div class='item'>
                            <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/28-06-2022/valet_parking_d.png' alt='' title=''>
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class='left carousel-control' href='#carousel_vallet' data-slide='prev'>
                        <span class='glyphicon glyphicon-chevron-left'></span>
                        <span class='sr-only'>Anterior</span>
                    </a>
                    <a class='right carousel-control' href='#carousel_vallet' data-slide='next'>
                        <span class='glyphicon glyphicon-chevron-right'></span>
                        <span class='sr-only'>Siguinente</span>
                    </a>
                </div>
                <i>Fotos de referencia.</i>
            </div>
            <div class="texto texto3">
                <ol>
                    <li>
                        <h3>2. ¿Por qué regular la actividad de Valet Parking en tres zonas de Bogotá?</h3>
                        <p>Porque actualmente se realiza en el espacio público de estas tres zonas de la ciudad, de manera indiscriminada y sin control. Se requiere que esta actividad sea organizada, evitando el estacionamiento indebido de vehículos y la congestión vial en vías arteriales o con prioridad de modos sostenibles, y que promueva garantías a los usuarios del servicio de que su carro estará en un parqueadero fuera de vía mientras les es regresado. Además, dado que el servicio requiere el uso del espacio público, es necesario retribuir este uso a la Ciudad por parte del operador de manera equitativa y con un fin de beneficio social.</p>
                    </li>
                </ol>
            </div>
	
            
            
            <div class="texto texto4">
                <ol>
                    <li>
                        <h3>3. ¿Cuáles son los principios de operación del valet parking en las tres zonas inicialmente autorizadas en Bogotá?</h3>
                        <p>Para el aprovechamiento económico de la actividad de valet parking en el espacio público se tienen en cuenta los siguientes principios:</p>
                        <ul>
                            <li>Disminución a la afectación de la movilidad</li>
                            <li>Seguridad vial</li>
                            <li>Uso adecuado del espacio público</li>
                            <li>Protección al usuario</li>
                        </ul>
                    </li>
                    <li>
                        <h3>4. ¿Cómo opera el valet parking de acuerdo con el Protocolo establecido?</h3>
                        <p>La operación tiene en cuenta los siguientes aspectos:</p>
                        <ul>
                            <li><strong>La detención momentánea del vehículo en el cajón de valet parking.</strong> Esta se hace en un tiempo máximo de 5 minutos, que es suficiente para que el propietario o el conductor estacione y descienda del vehículo.</li>
                            <li><strong>La ubicación de los cajones o celdas autorizadas para valet parking.</strong> Se hace sobre la malla vial local o intermedia, en vías de doble o único sentido con mínimo dos carriles por sentido. No se podrán ubicar cajones de valet parking en vías arteriales, vías peatonales, accesos vehiculares a predios, a menos de 5 metros de una intersección, donde existan ciclorrutas o en vías de un solo carril por sentido.</li>
                            <li><strong>La demarcación del cajón autorizado de valet parking.</strong> Para los primeros seis (6) meses de entrega de cada cajón es temporal con conos. No se permite mobiliario auxiliar como sombrillas o parasoles que obstruyen el espacio funcional del andén o sus franjas de paisajismo. En caso de que la autorización supere el plazo de seis (6) meses o sea renovada, el operador instala la señalización definitiva de acuerdo con el manual de señalización nacional vigente y con elementos de demarcación horizontal y/o vertical.</li>
                            <li><strong>Identificación de los operadores y entrega de factura.</strong> Los operadores deben estar debidamente identificados, deberán entregar factura de servicio con correo de contacto y deberán presentar el permiso de actividad en caso de que las autoridades se lo exijan.</li>
                            <li><strong>Póliza de seguro.</strong> Los aprovechadores deberán constituir una póliza de seguro que cubra, durante el término del permiso otorgado, todos los perjuicios que se puedan causar con el ejercicio de la actividad.</li>
                        </ul>
                    </li>
                    <li>
                        <h3>5. ¿Cómo serán los controles al cumplimiento de la normatividad?</h3>
                        <p>La Secretaría Distrital de Movilidad realiza inspecciones en las zonas y cajones autorizados, en cualquier momento y sin previo aviso, para verificar el cumplimiento de las condiciones en las que fue entregado el espacio público para la operación de la actividad de valet parking en vía pública. Igualmente, en su calidad de autoridad de tránsito, vigila el cumplimiento del Código Nacional de Tránsito Terrestre.</p>
                        <p>También coordina con las Alcaldías Locales de las zonas de operación, el control a la actividad de los operadores no autorizados o a quienes no hayan realizado el correspondiente pago por retribución al uso del espacio público que se encuentren prestando el servicio de valet parking en condición de informalidad, adelantando las acciones pertinentes por una indebida ocupación del espacio público.</p>
                        <p>Dichos controles y seguimiento a la actividad iniciarán un mes después de la emisión de la Circular que expedirá la Secretaría Distrital de Movilidad, la cual establece los segmentos de vía donde se autorizan los cajones e incluye los formatos para solicitar el permiso. Esto, para efectos de facilitar la solicitud y expedición de los permisos a los interesados en la operación de los cajones de valet parking.</p>
                    </li>
               
                    <li>
                        <h3>6. ¿Cuáles son las zonas iniciales en las cuales opera el servicio de valet parking en Bogotá y con cuántos cajones en total se contará?</h3>
                        <p>Son tres zonas de operación inicial en dos localidades, Usaquén y Chapinero (Zona G, Zona T y Usaquén), para un total de 35 cajones autorizados inicialmente.</p>
                        <ul>
                            <li><strong>Zona G,</strong> comprendida entre la av. calle 63 hasta la av. calle 72 desde la carrera 4 hasta la av. Caracas.</li>
                            <li><strong>Zona T,</strong> comprendida entre la calle 76 hasta la calle 88 desde la av. carrera 7 hasta la av. Caracas.</li>
                            <li><strong>Zona Usaquén,</strong> comprendida entre la calle 114 hasta la calle 121 desde la carrera 5 hasta la av. carrera 7.</li>
                        </ul>
                    </li>
                </ol>
            </div>
            <div class="mapa mapa1 zoom">
                <h4>Zona G</h4>
                <div class='imagen'>
                    <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/28-06-2022/mapa1.png" target="_blank" rel="noopener noreferrer">
                        <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/28-06-2022/mapa1.png' alt='Mapa Zona G, comprendida entre la av. calle 63 hasta la av. calle 72 desde la carrera 4 hasta la av. Caracas.' title='Mapa Zona G, comprendida entre la av. calle 63 hasta la av. calle 72 desde la carrera 4 hasta la av. Caracas.'>
                    </a>
                </div>

            </div>
            <div class="mapa mapa2 zoom">
                <h4>Zona T</h4>
                <div class='imagen'>
                    <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/28-06-2022/mapa2.png" target="_blank" rel="noopener noreferrer">
                        <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/28-06-2022/mapa2.png' alt='Mapa Zona T, comprendida entre la calle 76 hasta la calle 88 desde la av. carrera 7 hasta la av. Caracas.' title='Mapa Zona T, comprendida entre la calle 76 hasta la calle 88 desde la av. carrera 7 hasta la av. Caracas.'>
                    </a>
                </div>
            </div>
            <div class="mapa mapa3 zoom">
                <h4>Usaquén</h4>
                <div class='imagen'>
                    <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/28-06-2022/mapa3.png" target="_blank" rel="noopener noreferrer">
                        <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/28-06-2022/mapa3.png' alt='Mapa Zona Usaquén, comprendida entre la calle 114 hasta la calle 121 desde la carrera 5 hasta la av. carrera 7.' title='Mapa Zona Usaquén, comprendida entre la calle 114 hasta la calle 121 desde la carrera 5 hasta la av. carrera 7.'>
                    </a>
                </div>
            </div>


            <div class="texto texto5">
                <i>*De clic sobre la imagen para ver los detalles</i>
                <ol>
                    <li>
                        <h3>7. ¿Habrá otras zonas donde pueda operar el valet parking en Bogotá?</h3>
                        <p>En las tres zonas de la ciudad descritas anteriormente existe mayor demanda del servicio; sin embargo, los operadores y personas interesadas pueden solicitar otras ubicaciones que serán evaluadas y autorizadas por la Secretaría Distrital de Movilidad bajo el cumplimiento de las condiciones establecidas en el Protocolo.</p>
                        <p>La actividad de valet parking solo podrá prestarse en los cajones autorizados y que hayan realizado el pago por retribución del espacio público en la ciudad, los demás, serán objeto de medidas de control y levantamiento por parte de las autoridades competentes.</p>
                    </li>
                    <li>
                        <h3>8. ¿Cuánto dinero debe pagar al Distrito una persona natural o jurídica que opere un cajón de valet parking?</h3>
                        <p>Para cada una de las tres zonas el valor puede variar en función de la Unidad de Planeamiento Zonal en la cual esté ubicada. Para el caso de los cajones autorizados, estos son los montos estimados para cada una:</p>
                        <dl class="dl-horizontal">
                            <dt>Zonas G y T:</dt>
                            <dd>$809.967 mensuales que equivalen a $2.429.901 trimestrales, $4.859.802 semestrales o $9.719.705 anuales</dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>Usaquén:</dt>
                            <dd>$767.116 mensuales que equivalen a $2.301.349 trimestrales, $4.602.699 semestrales o $9.205.397 anuales</dd>

                        </dl>
                    </li>
                    <li>
                        <h3>9. ¿Cuál es el destino del dinero recaudado por el Distrito?</h3>
                        <p>Los recursos recaudados por concepto de permisos de valet parking serán invertidos en la recuperación, mantenimiento, y sostenibilidad de los elementos del espacio público en diferentes zonas y sectores de Bogotá.</p>
                    </li>
                </ol>
            </div>
            <br>
            <div class="texto texto6">
                <p><strong>Oficina Asesora de Comunicaciones y Cultura para la Movilidad <br>Secretaría Distrital de Movilidad</strong></p>
            </div>
        </div>

    </div>
</div>
<!-- End Set Wrapper -->

<!-- Styles -->
<style type='text/css'>
    .field-item.even h2 {
        visibility: hidden;
        margin-top: -50px;
    }

    .region-content {
        padding: 0px;
        overflow: hidden;
    }

    .panking {
        max-width: 980px;
        word-wrap: break-word;
        font-family: 'Montserrat', sans-serif;
        font-size: 15px;
        font-weight: 500;
        text-align: justify;
        line-height: 1.7;
        letter-spacing: 0.4;
        color: rgba(25, 25, 25, 1);
    }

    .w-100 {
        width: 100%;
    }

    .box-contents {
        margin-top: 30px;
        display: grid;
        column-gap: 30px;
        row-gap: 10px;
        grid-auto-flow: dense;
        grid-template-columns: repeat(3, 1fr);
        grid-template-rows: auto;

    }
    .zoom {
        transition: 0.5s ease;
        -moz-transition: 0.5s ease;
        /* Firefox */
        -webkit-transition: 0.5s ease;
        /* Chrome - Safari */
        -o-transition: 0.5s ease;
        /* Opera */
        -ms-transition: 0.5s ease;
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
        
    }/* IE9 */

    .head {
        grid-area: head;
    }

    .texto1 {
        grid-area: texto1;
    }

    .texto2 {
        grid-area: texto2;
    }

    .texto3 {
        grid-area: texto3;
    }

    .texto4 {
        grid-area: texto4;
    }

    .texto5 {
        grid-area: texto5;
    }

    .texto6 {
        grid-area: texto6;
    }

    .carrusel-vallet {
        grid-area: carrusel-vallet;
        padding: 2% 10% ;
    }

    .mapa1 {
        grid-area: mapa1;
    }

    .mapa2 {
        grid-area: mapa2;
    }

    .mapa3 {
        grid-area: mapa3;
    }

    .imagen1 {
        grid-area: imagen1;
    }

    .imagen2 {
        grid-area: imagen2;
    }

    .logo1 {
        grid-area: logo1;
    }


    .box-contents ol>li {
        margin-top: 30px;
        list-style-type: none;
        /* font-size: 24px; */

    }

    .box-contents ul.a {
        /* list-style-position: outside; */
    }

    .box-contents ol>li h3 {
        font-size: 18px !important;
        font-weight: 700;
        text-align: left;
        line-height: 1.7;
        color: rgba(25, 25, 25, 1);
    }

    .box-contents ul>li {
        padding: 6px;
    }

    .imagen {
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        /* min-height: 300px; */
    }



    .mapa h4 {
        /* font-size: 1em; */
        font-weight: 700;
        text-align: center;
        line-height: 1.4;
        color: rgba(25, 25, 25, 1);
        margin: 8px;
    }

    @media(max-width:767px) {
        .box-contents {

            grid-auto-flow: dense;
            grid-template-columns: 1fr 1fr 1fr;
            grid-template-areas:
                'head head head'
                'carrusel-vallet carrusel-vallet carrusel-vallet'
                'texto1 texto1 texto1'
                'texto2 texto2 texto2'
                'texto3 texto3 texto3'
                'texto4 texto4 texto4'
                'mapa1 mapa1 mapa1'
                'mapa2 mapa2 mapa2'
                'mapa3 mapa3 mapa3'
                'texto5 texto5 texto5'
                'texto6 texto6 texto6';
        }

        .imagen {
            min-height: 300px;
        }
    }

    @media(min-width:768px) {
        .box-contents {
            grid-template-columns: 1fr 1fr 1fr;
            grid-template-areas:
                'head head head'
                'carrusel-vallet carrusel-vallet carrusel-vallet'
                'texto1 texto1 texto1'
                'texto2 texto2 texto2'
                'texto3 texto3 texto3'
                'texto4 texto4 texto4'
                'mapa1 mapa2 mapa3'
                'texto5 texto5 texto5'
                'texto6 texto6 texto6';
        }

    }

    @media(min-width:992px) {}

    @media(min-width:1200px) {}
</style>
<!-- End Styles -->