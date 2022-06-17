@extends('welcome')
@section('contenido')
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fuente Montserrat -----  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<link rel='preconnect' href='https://fonts.googleapis.com'>
<link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
<link href='https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap' rel='stylesheet'>
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin Fuente Montserrat -  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<!-- Set Wrapper -->
<div class='container-fluid acuerdos'>
    <div class='box-wrp'>
        <div class='box-head'>
            <div class="logo"></div>
            <div class="titulo">
                <h1>Acuerdos de pago</h1>
                <h3>Haz ya tu <strong>acuerdo de pago</strong> y ponte al día con Bogotá</h3>
            </div>
        </div>
        <style>
            .box-head {
                display: grid;
                /* gap: 10px; */
                grid-auto-flow: dense;
                grid-template-columns: 1fr 1fr;
                grid-template-rows: auto;
                grid-template-areas:
                    'logo titulo';
                border-bottom: 5px solid rgba(102, 224, 38, 1);
            }

            .box-head .logo {
                background-image: url('https://www.movilidadbogota.gov.co/web/sites/default/files/servicios/15-06-2022/acuerdo_pago.png');
                background-position: top;
                background-size: cover;
                height: 200px;
            }

            .box-head .titulo {
                grid-area: titulo;
                /* height: px; */
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                background-color: rgba(25, 28, 58, 1);
                padding: 15px;
            }

            .box-head .titulo h1 {
                color: rgba(255, 255, 255, 1);
            }

            .box-head .titulo h3 {
                /* font-size: 1em; */
                font-weight: 400;
                text-align: center;
                line-height: 1.2;
                color: rgba(102, 224, 38, 1);
            }

            @media(max-width:767px) {
                .box-head {
                    grid-template-columns: 1fr;
                    grid-template-areas:
                        'titulo'
                        'logo';
                }
            }

            @media(min-width:768px) {}

            @media(min-width:992px) {}

            @media(min-width:1200px) {}
        </style>
        <div class='box-contenido'>
            <br>
            <h4><strong>Facilidades de pago para deudores de obligaciones no tributarias</strong></h4>
            <p>Obtener por el deudor o por un tercero a su nombre, facilidades para el pago de las obligaciones no tributarias. </p>
            <h3><strong>Requisitos</strong></h3>
            <ol>
                <li> <strong>Reunir los siguientes documentos y cumplir con las condiciones establecidas:</strong>
                    <ul>

                        <li>Cédula de ciudadanía del deudor y/o codeudor (Fotocopia).</li>
                        <li>Cédula de extranjería del deudor y/o codeudor (Fotocopia – Cuando sea el Caso).</li>
                        <li>Certificación de estado de cédula de ciudadanía expedida por la Registraduría. (En caso de que el documento de identidad se encuentre en trámite).</li>
                        <li>Fotocopia del recibo de un servicio público.</li>
                        <li>Certificación bancaria.</li>
                        <li>Certificación laboral y/o declaración de renta.</li>
                        <li>El deudor debe aportar, garantías personales, reales, bancarias o de compañía de seguros.</li>
                        <li>El acuerdo de pago se debe realizar personalmente o a través de un abogado con poder autenticado ante notario o a través de un tercero mediante autorización.</li>
                        <li>Certificado de existencia y representación legal. En caso de ser persona jurídica.</li>

                    </ul>
                </li>
                <li>
                    <strong>Solicitar la suscripción del pre-acuerdo en los puntos de atención Centros de servicios de Movilidad Calle 13 y Paloquemao.</strong>
                    <ul>
                        <li>Los ciudadanos se pueden agendar para las facilidades de pago a través de la página web <a href="www.movilidadbogota.gov.co" target="_blank" rel="noopener noreferrer">www.movilidadbogota.gov.co</a> en el banner de Centro de Contacto de Movilidad.</li>
                    </ul>
                    <p>Hacer clic en <a href="https://agendamiento.movilidadbogota.gov.co/AConect/" target="_blank" rel="noopener noreferrer">acuerdos de pago</a> y allí deberá diligenciar el formulario con los datos del solicitante.</p>
                    <p>Centro de Servicios de Movilidad Calle 13 o Centro de Servicio de Movilidad Paloquemao, en horario de lunes a viernes entre las 7:00 a.m. y 5:00 p.m., sábados de 8:00 a.m. a 12:00 p.m.</p>
                    <p><strong>Red CADE:</strong> SuperCADE 20 de Julio, SuperCADE Américas, SuperCADE Suba. </p>
                    <p>En estos puntos se atenderá de lunes a viernes: 7 a.m. a 05:30 p.m. y sábados de 8:00 a.m. a 12:00 p.m.</p>
                </li>
                <li>
                    <strong>Realizar el pago de la primera cuota dentro de los primeros cinco (5) días hábiles de realizado el pre-acuerdo de pago, a través de los siguientes canales.</strong>
                    <ul>
                        <li>Virtual: botón de pago PSE Consulta acuerdos de pago, comparendos y embargos, solo para facilidades de pago por <strong>infracciones de tránsito.</strong></li>
                        <li>Sucursales del Banco de Occidente y Banco Caja Social, presentando el volante de pago.</li>
                        <li>Tarjeta crédito Visa y Master Card, únicamente en la sucursal del Banco de Occidente ubicada en el SuperCADE Movilidad y en efectivo. horario: Lunes a viernes, de 7:00 a.m. a 6 p.m. y sábados: 8:00 a.m. a 11:00 a.m.</li>
                        <li>Corresponsal Bancario Grupo Éxito (Carulla, SuperInter, Surtimax y Éxito)</li>
                    </ul>
                    <p>Para las facilidades de pago por concepto de transporte público, subsanaciones y grúa y patios, los ciudadanos se pueden agendar para las facilidades de pago a través de la página web <a href="www.movilidadbogota.gov.co" target="_blank" rel="noopener noreferrer">www.movilidadbogota.gov.co</a> en el banner de agendamiento virtual y diligenciar el formulario o solicitar la expedición de volante de pago llamando al Conmutador <strong>(601) 364-94-00</strong> marcando la extensión <strong>7815</strong>.</p>
                </li>
                <li>
                    <strong>Reclamar la resolución del acuerdo de pago, según el caso.</strong>
                    <ul>
                        <li>Para facilidades de pago de tránsito dentro de los tres (3) días hábiles siguientes después del pago de la primera cuota, en los puntos de atención.</li>
                        <li>Para facilidades de pago de transporte público, subsanaciones y grúa y patios dentro de los quince (15) días hábiles siguientes al pago de la primera cuota, en el Centro de Servicios de Movilidad Paloquemao.</li>
                    </ul>
                </li>
                <br>
                <p><strong>Para mayor información: </strong></p>
                <p>Centro de contacto de Movilidad (601) 364-94-00 opción 2, o nuestros canales virtuales en <a href="www.movilidadbogota.gov.co" target="_blank" rel="noopener noreferrer">www.movilidadbogota.gov.co</a> </p>
            </ol>
        </div>
        <style>
            .box-contenido ol>li {
                margin-top: 30px;
                text-align: left;
            }
            .box-contenido ul {
                margin-top: 30px;
                text-align: left;
            }
            .box-contenido li {
                margin: 8px;
                text-align: left;
            }
        </style>
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

    .acuerdos {
        max-width: 980px;
        word-wrap: break-word;
        font-family: 'Montserrat', sans-serif;
        font-size: 15px;
        font-weight: 500;
        text-align: justify;
        line-height: 1.4;
        color: rgba(25, 25, 25, 1);
    }

    /*
    .acuerdos [class*='col-'] {
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
<!-- End Styles -->