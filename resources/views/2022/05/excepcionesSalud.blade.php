@extends('welcome')
@section('contenido')
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fuente Montserrat -----  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<link rel='preconnect' href='https://fonts.googleapis.com'>
<link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
<link href='https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap' rel='stylesheet'>
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin Fuente Montserrat -  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<!-- Set Wrapper -->
<div class='container-fluid excepcionesSalud'>
    <div class='box-wrp'>
        <div class='box-head'>
            <h3>Abecé de las excepciones de Pico y Placa <br> para el talento humano en salud</h3>
            <p>Bogotá reconoce el trabajo maravilloso del talento humano en salud en el cuidado de la vida de todos.</p>
            <p>Hoy, con una ciudad en obra, necesitamos su participación usando las alternativas que tenemos diseñadas en la ciudad para movernos sosteniblemente.</p>
            <div class='box-video'>
                <div class='video'>
                    <div class='row'>
                        <div class='col-xs-12 col-sm-8 col-sm-offset-2'>
                            <div class='embed-responsive embed-responsive-16by9'>
                                <iframe width="100%" src="https://www.youtube.com/embed/lrGMt52poXQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-body">
            <div class='box-txt'>
                <div class='title4'>
                    <h4>¿Qué es el Carro Compartido?</h4>
                </div>
                <div class='paragraph'>
                    <p>Es la posibilidad que tienen todos los propietarios de vehículos particulares de contribuir con la disminución de la congestión y la contaminación en la ciudad, mejorando la calidad del aire y la salud de los habitantes de Bogotá.</p>
                    <p>Consiste en viajar en el carro particular con 3 o más ocupantes desde un origen hasta un destino durante todo el recorrido.</p>
                </div>
            </div>
            <div class='box-txt'>
                <div class='title4'>
                    <h4>¿Los viajes pueden ser habituales o esporádicos?</h4>
                </div>
                <div class='paragraph'>
                    <p>Si son habituales deben registrarse cada semana en la página web de la Secretaría Distrital de Movilidad porque la base de datos se descarga los viernes a la media noche.</p>
                    <p>Si son esporádicos debe registrarlos una sola vez cada que los vaya a realizar.</p>
                </div>
            </div>
            <div class='box-txt'>
                <div class='title4'>
                    <h4>¿Por qué se deben registrar los viajes en Carro Compartido?</h4>
                </div>
                <div class='paragraph'>
                    <p>Porque así hacen parte de la base de datos de vehículos exceptuados de Pico y Placa por Carro Compartido.</p>
                    <p>Si los Agentes de Tránsito Civiles o la Policía de Tránsito de Bogotá detienen el vehículo, consultarán la base de datos en línea y verán que el permiso está vigente</p>
                </div>
            </div>
            <div class='box-txt'>
                <div class='title4'>
                    <h4>¿Cuál es el paso a paso para acceder a la excepción de Carro Compartido?</h4>
                </div>
                <div class='paragraph'>
                    <ol>
                        <li>Ingrese a la página de Registro de Datos para Carro Compartido: <a href="https://www.movilidadbogota.gov.co/web/SIMUR/excepcionesTemporal/radicarSolicitud/" target="_blank" rel="noopener noreferrer">https://www.movilidadbogota.gov.co/web/SIMUR/excepcionesTemporal/radicarSolicitud/</a></li>
                        <li>Haga clic en el botón azul "Tenga en cuenta" en la parte de arriba a la derecha del formulario y verificar que se cumple con los requisitos mínimos</li>
                        <li>Diligencie todos los campos del formulario y haga clic en el botón "Registrar información"</li>
                        <li>Posteriormente, verifique en la página web de SIMUR <a href="https://www.movilidadbogota.gov.co/web/SIMUR/excepciones/consultarPlaca/" target="_blank" rel="noopener noreferrer">https://www.movilidadbogota.gov.co/web/SIMUR/excepciones/consultarPlaca/</a> que el permiso esté vigente, introduciendo el número de placa del carro para que quede listo el permiso</li>
                        <li>Es importante disfrutar del permiso viajando en el vehículo siempre con 3 o más ocupantes durante todo el recorrido desde el origen hasta el destino.</li>
                        <li>La base de datos de vehículos exceptuados por Carro Compartido (con 3 o más ocupantes durante todo el recorrido), se descarga los viernes en la noche por lo que desde el sábado debe solicitar el permiso nuevamente para la semana siguiente, si lo requiere.</li>
                        <li>Un vehículo no puede tener dos excepciones vigentes, por lo que si hace el registro en Carro Compartido deberá esperar a que este caduque el viernes a la media noche para solicitar otra excepción como Pico y Placa Solidario.</li>
                    </ol>
                </div>
            </div>
            <div class='box-txt'>
                <div class='title4'>
                    <h4>¿Qué es el Pico y Placa Solidario?</h4>
                </div>
                <div class='paragraph'>
                    <p>El Pico y Placa Solidario exime a un vehículo cuyo propietario o locatario haya adquirido el permiso de circulación por un día, un mes o un semestre, de las restricciones del Pico y Placa Extendido, el cual opera desde las 6:00 a.m. hasta las 9 p.m. en días hábiles dependiendo del último dígito de la placa del carro.</p>
                    <p>De acuerdo con la medida de Pico y Placa Extendido, en días pares se restringe la movilidad de los vehículos con placas terminadas en números pares (0,2,4,6,8) y en días impares no pueden circular aquellos con placas impares (1,3,5,7,9).</p>
                </div>
            </div>
            <div class='box-txt'>
                <div class='title4'>
                    <h4>¿Cómo se adquiere el permiso de Pico y Placa Solidario?</h4>
                </div>
                <div class='paragraph'>
                    <p>El permiso se adquiere haciendo el registro de los datos del carro y del propietario o locatario en la página web <a href="https://picoyplacasolidario.movilidadbogota.gov.co/ target="_blank" rel="noopener noreferrer"">https://picoyplacasolidario.movilidadbogota.gov.co/</a> </p>
                </div>
            </div>
            <div class='box-txt'>
                <div class='title4'>
                    <h4>¿Qué es el simulador de tarifa?</h4>
                </div>
                <div class='paragraph'>
                    <p>Es una herramienta que le permite al propietario o locatario del carro calcular el valor del permiso dependiendo de características del vehículo como el cilindraje, el tipo de combustible que usa, el modelo, el avalúo y le municipio de matrícula, además de la temporalidad del permiso (por un día, por un mes o por un semestre).</p>
                </div>
            </div>
            <div class='box-txt'>
                <div class='title4'>
                    <h4>¿Cuánto vale adquirir el permiso de Pico y Placa Solidario?</h4>
                </div>
                <div class='paragraph'>
                    <p>Si definitivamente se requiere usar el vehículo y quedar eximido de la restricción de circulación, se pagan desde $51.700 por día, desde $413.200 por el mes o desde $2.066.200 por el semestre, dependiendo de las características del carro.</p>
                </div>
            </div>
            <div class='box-txt'>
                <div class='title4'>
                    <h4>¿Cómo se hace el registro?</h4>
                </div>
                <div class='paragraph'>
                    <p>Para adquirir el permiso de circulación de Pico y Placa Solidario se debe:</p>
                    <ol>
                        <li>Ingresar a la página: <a href="https://picoyplacasolidario.movilidadbogota.gov.co/" target="_blank" rel="noopener noreferrer">https://picoyplacasolidario.movilidadbogota.gov.co/</a></li>
                        <li>Antes de iniciar el registro, es necesario usar el ‘Simulador de Tarifa’ que indicará el valor simulado a pagar por el permiso dependiendo de la duración (un día, un mes o un semestre), de las características del carro y de si está matriculado en Bogotá o no.</li>
                        <li>Una vez conocido el valor simulado a pagar, se requiere hacer clic en el botón o en el Menú ‘Inicia tu registro’ / ‘Persona Natural’ y diligenciar con los datos de la persona propietaria, los del carro y los del permiso que se solicita.</li>
                        <li>Posteriormente hay que verificar que la información ingresada es correcta y registrar la solicitud haciendo clic en el botón respectivo.</li>
                        <li>Para el pago en línea se debe diligenciar el formulario con los datos de la persona que va a realizar el pago (dueña de la cuenta desde donde se va a debitar), ingresar a la plataforma de pago PSE (Pagos Seguros En línea) y efectuar el pago.</li>
                        <li>Una vez aprobado el pago, se debe ingresar al ambiente del módulo de sensibilización, validar la identidad del propietario registrado, hacer el curso de sensibilización observando unos videos, respondiendo unas preguntas sobre los contenidos y haciendo un compromiso con Bogotá. El módulo de sensibilización debe aprobarse una vez al año.</li>
                        <li>Luego de aprobado el pago, el permiso queda programado para iniciar en la fecha indicada en la plataforma y en la que será registrado el carro en la base de datos de vehículos exceptuados de la restricción de Pico y Placa.</li>
                        <li>Si se desea, voluntariamente se puede hacer una donación en dinero al Sistema Distrital Bogotá Solidaria para poblaciones vulnerables o participar en el Programa de reciclaje del Distrito haciendo clic en los botones respectivos. En este caso se debe decidir si se quiere donar, hacer reciclaje o no hacer nada cada vez que se adquiere un permiso.</li>
                        <li>Finalmente, verificar en la página web de SIMUR <a href="https://www.movilidadbogota.gov.co/web/SIMUR/excepciones/consultarPlaca/" target="_blank" rel="noopener noreferrer">https://www.movilidadbogota.gov.co/web/SIMUR/excepciones/consultarPlaca/</a> que el permiso esté vigente, introduciendo el número de placa del carro para que quede listo el permiso.</li>
                    </ol>
                </div>
                <div class='row'>
                    <div class='col-xs-12 col-sm-8 col-sm-offset-2'>
                        <div class='video'>
                            <div class='embed-responsive embed-responsive-16by9'>
                                <iframe width="100%" src="https://www.youtube.com/embed/dCm6iqa2U0s" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class='box-txt'>
                <div class='title4'>
                    <h4>¿Es cierto que hay personas que no finalizan la solicitud del permiso?</h4>
                </div>
                <div class='paragraph'>
                    <p>Es cierto. Si al solicitar el permiso por segunda vez el sistema anuncia que hay una solicitud pendiente, se debe:</p>
                    <ol>
                        <li>Entrar a la sección "Consulta tus solicitudes" <a href="https://picoyplacasolidario.movilidadbogota.gov.co/PortalCiudadano/#/detallesSolicitud/seleccionar" target="_blank" rel="noopener noreferrer"> https://picoyplacasolidario.movilidadbogota.gov.co/PortalCiudadano/#/detallesSolicitud/seleccionar</a> e ingresar los datos del número de documento de identificación de la persona propietaria o locataria y la placa del carro</li>
                        <li>En la sección siguiente aparecerán las solicitudes pendientes y tramitadas</li>
                        <li>Se debe buscar la más reciente y entrar para finalizar la solicitud</li>
                        <li>Para "Finalizar" una solicitud y que no genere problemas, se debe finalizar todo el proceso; es decir, cerrar el paso del módulo de sensibilización (aprobando el módulo una vez al año) y decidir si se dona una suma de dinero, se hace reciclaje o se decide no hacer nada al respecto.</li>
                        <li>Por la reglamentación del Pico y Placa Solidario, para la Secretaría Distrital de Movilidad es importante que la persona confirme qué quiere hacer con la compensación social (donar, reciclar o no hacer nada). Esto es parte del componente social de la medida, y en cada transacción se invita a las personas a realizarla, aunque pueden decidir no hacerla.</li>
                        <li>Para evitar que vuelva a suceder que aparece una solicitud en curso sin cerrar, y en caso de que no se quiera realizar la donación o reciclar, solo es necesario dar 3 clics más después del pago haciendo uso de los botones que despliega la plataforma.</li>
                        <li>El tiempo adicional que tomará este proceso no será mayor de 20 segundos.</li>
                    </ol>
                </div>
            </div>
            <div class='box-txt'>
                <div class='title4'>
                    <h4>¿Para dónde van los recursos recaudados con el Pico y Placa Solidario?</h4>
                </div>
                <div class='paragraph'>
                    <p>Desde el 11 de enero hasta el 5 de mayo de 2022, el recaudo del Pico y Placa Solidario es cercano a los $60.000 millones, que se destinan al mejoramiento del Sistema Integrado de Transporte Público y al subsidio a la tarifa de las poblaciones preferenciales de adultos mayores y Sisbén.</p>
                </div>
                <div class='box-video'>
                    <div class='video'>
                        <div class='row'>
                            <div class='col-xs-23 col-sm-8 col-sm-offset-2'>
                                <div class='embed-responsive embed-responsive-16by9'>
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/dLm98Wdxm6A" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <div class='title4'>
                    <h4>Oficina Asesora de Comunicaciones y Cultura para la Movilidad <br>Secretaría Distrital de Movilidad</h4>
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

    .excepcionesSalud {
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
    .excepcionesSalud [class*='col-'] {
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

    .box-head {
        padding: 0px 20px;
    }
    .box-head .video {
        padding: 30px;
    }

    .box-head h3 {
        font-weight: 700;
        text-align: center;
        line-height: 1.2;
        color: rgba(25, 25, 25, 1);
        padding-bottom: 30px;
        
    }

    .box-txt {
        padding: 8px 15px;
    }

    .box-txt .title4 {
        border-bottom: solid 2px #828F26;
        margin-bottom: 15px;
    }

    .box-txt .title4 h4 {
        font-weight: 700;
        text-align: initial;
        line-height: 1.2;
        color: rgba(25, 25, 25, 1);
        margin: 5px;
    }

    .box-txt .paragraph {
        padding: 10px;
    }

    .box-txt .paragraph p {
        font-weight: 500;
        text-align: justify;
        line-height: 1.5;
        color: rgba(25, 25, 25, 1);
    }

    .box-txt ol>li {
        padding: 8px;
        text-align: left;
    }

    .box-txt .video {
        padding: 30px;
    }
    rgba(77, 84, 31, 1)
    #A6B517
    #828F26
    rgba(77, 84, 31, 1)
    #363636
    #C9D64F
    #D6DE80
    #E3E8AD
    #A6B517
</style>
<!-- End Styles -->


