@extends('welcome')
@section('contenido')

<!-- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- -----
                                                          Bloque Seccion
----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ------ -->

<div class='seccion'>
    <div class='row'>
        <!-- xs -->
        <div class='col-xs-12 visible-xs-12 visible-xs-block'>
            <img class='img-responsive w-100 img-sisben' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/16-09-2021/encuestasisben_xs.jpg' alt='Encabezado:  Consulta el ABC de la encuesta SISBÉN' title='Encabezado:  Consulta el ABC de la encuesta SISBÉN'>
        </div>
        <!-- lg -->
        <div class='col-sm-12 hidden-xs'>
            <img class='img-responsive w-100 img-sisben' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/16-09-2021/encuestasisben_lg.jpg' alt='Encabezado:  Consulta el ABC de la encuesta SISBÉN' title='Encabezado:  Consulta el ABC de la encuesta SISBÉN'>
        </div>
    </div>
    <hr>
    <div class='row'>
        <div class='col-xs-12'>
            <!-- <h1>Abecé de la Encuesta SISBÉN</h1> -->
            <p>Encuentra la respuesta a tus preguntas sobre la Encuesta SISBÉN y la transición a la nueva forma de presentar sus resultados.</p>
        </div>
        <div class='col-xs-12'>
            <h3>¿Qué es el SISBÉN?</h3>
            <p>El SISBÉN es una encuesta que permite conocer las condiciones socioeconómicas de los hogares y los clasifica por su capacidad para generar ingresos y calidad de vida.</p>
            <h3>¿Por qué se actualiza el SISBÉN?</h3>
            <p>Porque las condiciones de vida de los hogares cambian en el tiempo y los programas sociales requieren información confiable y actual para priorizar sus ayudas. El 74 % de los registros del SISBÉN no se actualizaba desde 2011</p>
            <h3>¿Cómo puedo saber si tengo SISBÉN y/o si mi SISBÉN está vigente?</h3>
            <p>La metodología vigente de SISBÉN (SISBÉN IV) clasifica a los potenciales beneficiarios en grupos denominados por letras y no por números (puntajes). Si tu encuesta se encuentra vigente deberás aparecer con alguna de las siguientes clasificaciones:</p>
            <ul>
                <li>
                    <h4>Grupo A (de A1 a A5)</h4>
                    <p class="enfasis">Pobreza extrema</p>
                    <p>Comprende a hogares en pobreza extrema. En este grupo los hogares estarán clasificados en 5 subgrupos de A1 hasta A5.</p>
                </li>
                <li>
                    <h4>Grupo B (de B1 a B7)</h4>
                    <p class="enfasis">Pobreza moderada</p>
                    <p>Corresponde a hogares en condición de pobreza moderada. Este grupo tendrá 7 subgrupos desde el B1 hasta el B7.</p>
                </li>
                <li>
                    <h4>Grupo C (de C1 a C18)</h4>
                    <p class="enfasis">Vulnerabilidad</p>
                    <p>Corresponde a hogares en condición de vulnerabilidad. Este grupo tendrá 18 subgrupos desde el C1 hasta el C18.</p>
                </li>
                <li>
                    <h4>Grupo D (de D1 a D21)</h4>
                    <p class="enfasis">No pobre, no vulnerable</p>
                    <p>Comprende hogares que no están en situación de pobreza. Este grupo tendrá 21 subgrupos desde el D1 hasta el D21.</p>
                </li>
            </ul>
            <p>Para verificar si cuentas con encuesta vigente, puedes consultar la página <a href="https://www.sisben.gov.co/Paginas/consulta-tu-grupo.html" target="_blank" rel="noopener noreferrer">https://www.sisben.gov.co/Paginas/consulta-tu-grupo.html</a></p>
            <h3>¿Para qué sirve tener la Encuesta SISBÉN vigente?</h3>
            <p>Para que las entidades del Distrito evalúen si estás dentro de los grupos de beneficiarios potenciales de los programas sociales del Distrito. Para el caso de la Secretaría Distrital de Movilidad, para que evalúe si estás dentro de los beneficiarios del subsidio a la tarifa del pasaje en el Sistema Integrado de Transporte Público (SITP) de Bogotá.</p>
            <h3>¿Qué ocurre si no tengo SISBÉN vigente?</h3>
            <p>Teniendo en cuenta que los beneficios tarifarios entregados por el Distrito empezarán a utilizar como fuente de información el SISBÉN IV, te recomendamos que realices la solicitud de tu encuesta lo más pronto posible con el fin de conocer tu grupo en el SISBÉN IV.</p>
            <p>En caso de no contar con encuesta SISBÉN vigente, puedes solicitarla a la Secretaría Distrital de Planeación siguiendo el procedimiento definido, el cual puedes consultar en el siguiente enlace: <a href="https://bit.ly/AccessoEncuestaSISBEN" target="_blank" rel="noopener noreferrer">https://bit.ly/AccessoEncuestaSISBEN</a></p>
            <h3>¿Si no tengo SISBÉN vigente y actualmente soy beneficiario o beneficiaria del subsidio a la tarifa del pasaje del SITP, desde cuando dejaré de tenerlo?</h3>
            <p>Teniendo en cuenta que los beneficios tarifarios entregados por el Distrito empezarán a utilizar como fuente de información el SISBÉN IV, te recomendamos que realices la solicitud de tu encuesta lo más pronto posible.</p>
            <p>La Secretaría Distrital de Movilidad comunicará con anticipación las fechas en las que quienes no cuenten con SISBÉN IV dejarán de ser beneficiarios.</p>
            <p>Es importante resaltar que puedes solicitar la encuesta en cualquier momento y, de contar con la clasificación SISBÉN IV requerida, podrás acceder a los beneficios tarifaríos.</p>
            <h3>¿Cómo puedo solicitar una encuesta SISBÉN?</h3>
            <p>Si tu lugar de residencia permanente es Bogotá, puedes enviar tu solicitud firmada por ti si eres mayor de edad o por una persona mayor de 18 años residente habitual del hogar del que haces parte, al correo <a href="mailto:encuestasisben@sdp.gov.co" target="_blank" rel="noopener noreferrer">encuestasisben@sdp.gov.co</a>, y anexar los siguientes documentos:</p>
            <ul>
                <li>
                    <p>Fotocopias legibles de los documentos de identidad del solicitante y de todos los integrantes del hogar.</p>
                </li>
                <li>
                    <p>Último recibo de servicio público de energía o acueducto del lugar donde residen.</p>
                </li>
                <li>
                    <p>Último recibo de servicio público de energía o acueducto del lugar donde residen.</p>
                </li>
            </ul>
            <p>También puedes realizar la solicitud personalmente, acercándote a los diferentes puntos de atención, los cuales puedes consultar en este enlace: <a href="http://www.sdp.gov.co/gestion-estudios-estrategicos/sisben/canales-atencion" target="_blank" rel="noopener noreferrer">http://www.sdp.gov.co/gestion-estudios-estrategicos/sisben/canales-atencion</a></p>
            <p>Luego de esto, te será asignada una cita para aplicar la encuesta en tu lugar de residencia. La encuesta se aplicará preferiblemente al jefe de hogar.</p>
            <h3>¿Qué pasa si tengo encuesta SISBÉN vigente en una ciudad diferente a Bogotá?</h3>
            <p>El SISBÉN de una persona no se traslada. Para que una persona aparezca registrada en Bogotá debe solicitar la encuesta siguiendo los pasos anteriormente descritos.</p>
            <h3>¿Qué pasa si no estoy de acuerdo con el resultado de la Encuesta SISBÉN?</h3>
            <p>Los hogares y personas que ya han sido encuestadas y tengan interés en revisar y/o actualizar la información recogida en el momento de la visita, se pueden acercar a cualquier punto de atención de SISBÉN de la Red de CADE de Bogotá y solicitar dicho trámite, para lo cual es importante que lleven consigo copia de los documentos de identidad de los integrantes del hogar y un recibo de servicio público.</p>
            <h3>¿Quién asigna los resultados de la Encuesta SISBÉN?</h3>
            <p>La información que se registra en el SISBÉN obedece al método e instrumentos diseñados por la Nación, y es a partir de estos que se obtienen los resultados correspondientes; por lo tanto, ni la Secretaría Distrital de Planeación ni el encuestador asignan un determinado resultado ni les es posible ajustarlo o cambiarlo.</p>
            <p>La información de los hogares es enviada al Departamento Nacional de Planeación, entidad que verifica y realiza controles para asignar el resultado.</p>
            <p>El método de asignación es exclusivo de la Nación y conforme a la ley, las entidades territoriales están en la obligación de aplicarlo.</p>
            <br><br>
            <p><strong>Oficina Asesora de Comunicaciones y Cultura para la Movilidad <br>
                    Secretaría Distrital de Movilidad
                </strong></p>


        </div>
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
        font-size: 14px;
        background-color: #efefef !important;
    }

    .w-100 {
        width: 100%;
    }

    .seccion h1 {
        color: #4D541F;
        margin-top: 30px;
        padding-bottom: 8px;
        font-size: 3rem;
        font-weight: 600;
        text-align: center;
    }

    .seccion h3 {
        color: #4D541F;
        margin-top: 30px;
        padding-bottom: 8px;
        font-size: 2rem;
        font-weight: 600;
    }

    .seccion ul {
        margin-top: 25px;
        margin-bottom: 25px;
    }
    .seccion li {
        margin-top: 25px;
        margin-bottom: 25px;
    }

    .seccion li h4 {
        color: #4D541F;
        font-size: 1.6rem;
        font-weight: 600;
    }

    .seccion p {
        color: #363636;
        font-size: 1.6rem;
        padding-left: 15px;
        padding-right: 15px;
        text-align: justify;

    }

    .seccion a {
        text-decoration: none;
        color: #828F26;
    }
    .enfasis{
        font-weight: 700;
        margin-bottom: 0px;
    }
</style>
<!-- ----- ----- ----- ----- ----- ----- ----- ----- Fin hoja de estilo  ----- ----- ----- ----- ----- ----- ----- ----- -->
