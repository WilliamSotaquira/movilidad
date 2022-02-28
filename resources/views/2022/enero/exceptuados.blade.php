@extends('welcome')
@section('contenido')

<!-- ----- ----- ----- ----- ----- ----- ----- ----- Bloque Seccion ----- ----- ----- ----- ----- ----- ----- ----- ----- ------ -->

<div class='container-fluid seccion'>
    <div class='s1'>
        <div class='row'>
            <div class='col-xs-12 col-sm-12 col-md-12'>
                <hr>
                <div class="text-center">
                    <a class="btn btn-primary" href="https://www.movilidadbogota.gov.co/web/SIMUR/excepcionesTemporal/radicarSolicitud/" target="_blank">Registro de vehículos exceptuados para 3 o más personas, eléctricos e híbridos </a>
                </div>
                <hr>
            </div>
        </div>
    </div>
    <div class="s2">
        <div class="titulo">
            <h3>Paso a paso para obtener el permiso de circulación en Carro Compartido en Bogotá</h3>
        </div>
        <div class="detalle">
            <ol>
                <li>Haga clic en el botón verde "Registro de vehículos exceptuados para tres o más personas, eléctricos e híbridos".</li>
                <li>Haga clic en el botón azul  "Tenga en cuenta" en la parte de arriba a la derecha del formulario y verifique que cumple con los requisitos mínimos.</li>
                <li>Diligencie todos los campos del formulario y haga clic en el botón  "Registra información".</li>
                <li>Luego, debe verificar en la página de SIMUR <a href="https://www.movilidadbogota.gov.co/web/SIMUR/excepciones/consultarPlaca/" target="_blank" rel="noopener noreferrer">https://www.movilidadbogota.gov.co/web/SIMUR/excepciones/consultarPlaca/</a> que el permiso esté vigente, introduciendo el número de placa del carro.</li>
                <li>Con esto, queda listo su permiso. Si Agentes de Tránsito Civiles o la Policía de Tránsito detienen el vehículo, consultarán la base de datos y verán que el permiso está vigente. Recuerde mantener la ocupación de 3 o más personas en el vehículo.</li>
                <li>Disfrute su permiso viajando en el vehículo siempre con 3 o más ocupantes durante todo el recorrido entre el origen y el destino.</li>
                <li>Recuerde que la base de datos de vehículos exceptuados por Carro Compartido (3 o más ocupantes) se descarga los viernes en la noche por lo que desde el sábado debe solicitar el permiso nuevamente para la semana siguiente, si lo requiere.</li>
            </ol>
        </div>

    </div>
    <div class="s3">
        <div class="titulo">
            <h3>Paso a paso para obtener el permiso de circulación para vehículos eléctricos o híbridos en Bogotá</h3>
        </div>
        <div class="detalle">
            <ol>
                <li>Haga clic en el botón verde "Registro de vehículos exceptuados para tres o más personas, eléctricos e híbridos".</li>
                <li>Haga clic en el botón azul "Tenga en cuenta" en la parte de arriba a la derecha del formulario y verifique que cumple con los requisitos mínimos.</li>
                <li>Diligencie todos los campos del formulario y haga clic en el botón  "Registra información".</li>
                <li>Luego, debe verificar en la página de SIMUR <a href="https://www.movilidadbogota.gov.co/web/SIMUR/excepciones/consultarPlaca/" target="_blank" rel="noopener noreferrer">https://www.movilidadbogota.gov.co/web/SIMUR/excepciones/consultarPlaca/</a> que el permiso esté vigente, introduciendo el número de placa del carro.</li>
                <li>Con esto, queda listo su permiso. Si Agentes Civiles de Tránsito o la Policía de Tránsito detienen el vehículo, consultarán la base de datos y verán que el permiso está vigente.</li>
                <li>Recuerde que el permiso tiene vigencia de un año, luego del cual deberá renovarlo.</li>
            </ol>
            <p><strong>Gracias por hacer de Bogotá una ciudad con movilidad sostenible.</strong></p>
        </div>
    </div>
    <div class="s4">
        <div class="titulo">
            <h3>Tenga en cuenta que de acuerdo con el Decreto Distrital 073 de 2021, en su artículo 3, se establece:</h3>
        </div>
        <div class="detalle">
         <p><strong>Parágrafo 4.-</strong> La Secretaría Distrital de Movilidad llevará a cabo un registro de las placas de vehículos, para efectos de permitir la circulación de los vehículos exceptuados con la presente medida. La excepción será válida una vez el registro del vehículo se encuentre confirmado en la plataforma dispuesta por la Secretaría Distrital de Movilidad para tal fin.</p>
         <p><strong>Parágrafo 5.-</strong> Para la excepción prevista en el numeral 18, quien se haya registrado de conformidad con las condiciones y requisitos exigidos por la Secretaría Distrital de Movilidad en el registro de exceptuados y se compruebe el incumplimiento de dichas condiciones y requisitos, perderá la posibilidad de registrarse nuevamente durante el término de seis (6) meses siguientes a la fecha en que se encuentre en firme la multa de tránsito. Lo anterior sin perjuicio de las acciones penales a que hubiere lugar.</p>
         <p><strong>Artículo 4°.-</strong> La Secretaría Distrital de Movilidad, en un término no mayor a quince (15) días calendario contados a partir de la publicación del presente decreto, definirá mediante acto administrativo las condiciones y requisitos para el registro de las excepciones mencionadas en los numerales 17, 18 y 20 señaladas en artículo 30 de este decreto.</p>
        </div>
        <hr>
        <div class="text-center"> 
        <a class="btn btn-primary" href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/18-03-2021/decreto_073_de_2021.pdf" target="_blank">Decreto 073 de 2021</a>
        </div>
        <hr>
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
    .titulo h3{
        color: #4D541F;
        padding-bottom: 8px;
        border-bottom: solid 2px #4D541F;
        margin-top: 35px;
        margin-bottom: 25px;
        font-weight: 700;
    }
    .detalle ol li{
        margin-bottom: 10px;
        margin-top: 10px;
        line-height: 1.3;

    }
    .detalle p{
        margin-bottom: 10px;
        margin-top: 10px;
        text-align: justify;
        line-height: 1.3;
    }
</style>
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin hoja de estilo  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
