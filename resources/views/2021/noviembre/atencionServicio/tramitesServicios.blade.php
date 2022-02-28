@extends('welcome')
@section('contenido')

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<!-- ----- ----- ----- ----- ----- ----- ----- ----- Bloque Seccion ----- ----- ----- ----- ----- ----- ----- ----- ----- ------ -->

<div class='container-fluid seccion'>
    <div class='s1'>
        <div class="encabezado">
            <div class="row">
                <div class="col-xs-12 col-sm-5">
                    <div class="enc-img">
                    </div>
                </div>
                <div class="enc">
                    <div class="col-xs-12 col-sm-7">
                        <div class="enc-titulo">
                            <h3>
                                Tramites y Servicios
                            </h3>
                        </div>
                        <div class="enc-parrafo">
                            <div>
                                <p>En esta sección podrás conocer los horarios y puntos de atención que la Secretaría Distrital de Movilidad tiene disponibles para los ciudadanos y partes interesadas que requieran realizar alguno de los trámites y servicios que presta la Entidad.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="titulo2">
        <div class="box-titulo">
            <h3>Tramites</h3>
        </div>
    </div>
    <div class="s4">
        <div class="row">


            <a data-toggle="modal" data-target="#modal_t1">
                <div class="recuadro-lg col-xs-12 col-sm-4 col-md-6">
                    <!-- xs -->
                    <div class='visible-md-block visible-lg-block'>
                        <img class='img-fluid' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-12-2021/s1_b.webp' alt='Cursos Pedagógicos' title='Cursos Pedagógicos'>
                    </div>
                    <!-- lg -->
                    <div class='visible-xs-block visible-sm-block'>
                        <img class='img-fluid' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-12-2021/t1.webp' alt='Cursos Pedagógicos' title='Cursos Pedagógicos'>
                    </div>
                    <h3 class="titulo">
                        <p>Cursos Pedagógicos</p>
                    </h3>
                </div>
            </a>

            <a data-toggle="modal" data-target="#modal_t2">
                <div class="recuadro col-xs-12 col-sm-4 col-md-3">
                    <img class="img-fluid" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-12-2021/t2.webp" alt="">
                    <h3 class="titulo">
                        <p>Salida de Patios Virtual</p>
                    </h3>
                </div>
            </a>

            <a data-toggle="modal" data-target="#modal_t3">
                <div class="recuadro col-xs-12 col-sm-4 col-md-3">
                    <img class="img-fluid" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-12-2021/t3.webp" alt="">
                    <h3 class="titulo">
                        <p>Salida de Patios Presencial</p>
                    </h3>
                </div>
            </a>

            <a data-toggle="modal" data-target="#modal_t4">
                <div class="recuadro col-xs-12 col-sm-4 col-md-3">
                    <img class="img-fluid" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-12-2021/t4.webp" alt="">
                    <h3 class="titulo">
                        <p>Devolución y/o compensación de pagos en exceso por comparendos y acuerdos de pago</p>
                    </h3>
                </div>
            </a>

            <a data-toggle="modal" data-target="#modal_t5">
                <div class="recuadro col-xs-12 col-sm-4 col-md-3">
                    <img class="img-fluid" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-12-2021/t5.webp" alt="">
                    <h3 class="titulo">
                        <p>Plan de manejo de transito</p>
                    </h3>
                </div>
            </a>

            <a href="http://" target="_blank" rel="noopener noreferrer">
                <div class="recuadro-lg col-xs-12 col-sm-4 col-md-6">
                    <!-- xs -->
                    <div class='visible-md-block visible-lg-block'>
                        <img class='img-fluid' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-12-2021/t6_b.webp' alt='Cursos Pedagógicos' title='Cursos Pedagógicos'>
                    </div>
                    <!-- lg -->
                    <div class='visible-xs-block visible-sm-block'>
                        <img class='img-fluid' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-12-2021/t6.webp' alt='Cursos Pedagógicos' title='Cursos Pedagógicos'>
                    </div>
                    <h3 class="titulo">
                        <p>Facilidades de pago para deudores de obligaciones no tributarias</p>
                    </h3>
                </div>
            </a>

            <a href="http://" target="_blank" rel="noopener noreferrer">
                <div class="recuadro-lg col-xs-12 col-sm-4 col-md-6">
                    <!-- xs -->
                    <div class='visible-md-block visible-lg-block'>
                        <img class='img-fluid' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-12-2021/t7_b.webp' alt='Cursos Pedagógicos' title='Cursos Pedagógicos'>
                    </div>
                    <!-- lg -->
                    <div class='visible-xs-block visible-sm-block'>
                        <img class='img-fluid' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-12-2021/t7.webp' alt='Cursos Pedagógicos' title='Cursos Pedagógicos'>
                    </div>
                    <h3 class="titulo">
                        <p>Inscripción o autorización para la circulación vial Excepciones de pico y placa</p>
                    </h3>
                </div>
            </a>

            <a data-toggle="modal" data-target="#modal_t8">
                <div class="recuadro col-xs-12 col-sm-4 col-md-3">
                    <img class="img-fluid" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/19-12-2021/t8_a.webp" alt="">
                    <h3 class="titulo">
                        <p>Revisión y aprobación de estudios de transito</p>
                    </h3>
                </div>
            </a>

            <a data-toggle="modal" data-target="#modal_t9">
                <div class="recuadro col-xs-12 col-sm-4 col-md-3">
                    <img class="img-fluid" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-12-2021/t9.webp" alt="">
                    <h3 class="titulo">
                        <p>Suministro de copias de Informe de Accidentes</p>
                    </h3>
                </div>
            </a>

            <a data-toggle="modal" data-target="#modal_t10">
                <div class="recuadro col-xs-12 col-sm-4 col-md-3">
                    <img class="img-fluid" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-12-2021/t10.webp" alt="">
                    <h3 class="titulo">
                        <p>Registro Ruta Escolar Ruta Pila</p>
                    </h3>
                </div>
            </a>

            <a data-toggle="modal" data-target="#modal_t11">
                <div class="recuadro col-xs-12 col-sm-4 col-md-3">
                    <img class="img-fluid" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-12-2021/t11.webp" alt="">
                    <h3 class="titulo">
                        <p>Permiso de Circulación para Carga Extrapesada y/o Extradimensionada</p>
                    </h3>
                </div>
            </a>

            <a data-toggle="modal" data-target="#modal_t12">
                <div class="recuadro col-xs-12 col-sm-4 col-md-3">
                    <img class="img-fluid" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-12-2021/t12.webp" alt="">
                    <h3 class="titulo">
                        <p>Consulta en línea de información de Tránsito y Transporte</p>
                    </h3>
                </div>
            </a>

            <a data-toggle="modal" data-target="#modal_t13">
                <div class="recuadro col-xs-12 col-sm-4 col-md-3">
                    <img class="img-fluid" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-12-2021/t13.webp" alt="">
                    <h3 class="titulo">
                        <p>Emisión concepto a técnicas de señalización</p>
                    </h3>
                </div>
            </a>

        </div>
    </div>
    <hr>
    <div class="titulo2">
        <div class="box-titulo">
            <h3>Servicios</h3>
        </div>
    </div>
    <div class="s4">
        <div class="row">

            <a data-toggle="modal" data-target="#myModal">
                <div class="recuadro col-xs-12 col-sm-4 col-md-3">
                    <img class="img-fluid" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-12-2021/s1.webp" alt="">
                    <h3 class="titulo">
                        <p>Impugnación de Comparendos
                    </h3>
                </div>
            </a>

            <a href="http://" target="_blank" rel="noopener noreferrer">
                <div class="recuadro col-xs-12 col-sm-4 col-md-3">
                    <img class="img-fluid" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-12-2021/s2.webp" alt="">
                    <h3 class="titulo">
                        <p>Solicitud de desembargo por multas, e infracciones a las Normas de Tránsito y Transporte Público
                    </h3>
                </div>
            </a>

            <a href="http://" target="_blank" rel="noopener noreferrer">
                <div class="recuadro col-xs-12 col-sm-4 col-md-3">
                    <img class="img-fluid" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-12-2021/s3.webp" alt="">
                    <h3 class="titulo">
                        <p>Solicitud de Revocatoria Directa por Infracciones a las Normas de Tránsito
                    </h3>
                </div>
            </a>

            <a href="http://" target="_blank" rel="noopener noreferrer">
                <div class="recuadro col-xs-12 col-sm-4 col-md-3">
                    <img class="img-fluid" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-12-2021/s4.webp" alt="">
                    <h3 class="titulo">
                        <p>Remisión a Curso de Sensibilización por Conducir en Estado de Embriaguez
                    </h3>
                </div>
            </a>

            <a href="http://" target="_blank" rel="noopener noreferrer">
                <div class="recuadro col-xs-12 col-sm-4 col-md-3">
                    <img class="img-fluid" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-12-2021/s5.webp" alt="">
                    <h3 class="titulo">
                        <p>Entrega de Licencia de Conducción Suspendida
                    </h3>
                </div>
            </a>

            <a href="http://" target="_blank" rel="noopener noreferrer">
                <div class="recuadro col-xs-12 col-sm-4 col-md-3">
                    <img class="img-fluid" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-12-2021/s6.webp" alt="">
                    <h3 class="titulo">
                        <p>Solicitud de Semaforización, Reporte de Semáforos y Señales de Tránsito que presenten daños
                    </h3>
                </div>
            </a>

            <a href="http://" target="_blank" rel="noopener noreferrer">
                <div class="recuadro col-xs-12 col-sm-4 col-md-3">
                    <img class="img-fluid" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-12-2021/s7.webp" alt="">
                    <h3 class="titulo">
                        <p>Desintegración física de vehículos de servicio público
                    </h3>
                </div>
            </a>

            <a href="http://" target="_blank" rel="noopener noreferrer">
                <div class="recuadro col-xs-12 col-sm-4 col-md-3">
                    <img class="img-fluid" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-12-2021/s8.webp" alt="">
                    <h3 class="titulo">
                        <p>Puntos de Atención Registro Bici
                    </h3>
                </div>
            </a>


            <a href="http://" target="_blank" rel="noopener noreferrer">
                <div class="recuadro col-xs-12 col-sm-4 col-md-3">
                    <img class="img-fluid" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/19-12-2021/s9_a.webp" alt="">
                    <h3 class="titulo">
                        <p>Requisitos Sello de Calidad Cicloparqueaderos
                    </h3>
                </div>
            </a>

            <a href="http://" target="_blank" rel="noopener noreferrer">
                <div class="recuadro col-xs-12 col-sm-4 col-md-3">
                    <img class="img-fluid" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-12-2021/s2.webp" alt="">
                    <h3 class="titulo">
                        <p>Punto de contacto y gestión local en temas de movilidad
                    </h3>
                </div>
            </a>

            <a href="http://" target="_blank" rel="noopener noreferrer">
                <div class="recuadro col-xs-12 col-sm-4 col-md-3">
                    <img class="img-fluid" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/19-12-2021/s17.webp" alt="">
                    <h3 class="titulo">
                        <p>Permiso especial de acceso al área con Restricción Vehicular - “Pico y Placa solidario”
                    </h3>
                </div>
            </a>

            <a href="http://" target="_blank" rel="noopener noreferrer">
                <div class="recuadro col-xs-12 col-sm-4 col-md-3">
                    <img class="img-fluid" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/19-12-2021/s15.webp" alt="">
                    <h3 class="titulo">
                        <p>Certificación de procesos de Investigaciones Administrativas
                    </h3>
                </div>
            </a>


            <a href="http://" target="_blank" rel="noopener noreferrer">
                <div class="recuadro col-xs-12 col-sm-4 col-md-3">
                    <img class="img-fluid" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/19-12-2021/s12.webp" alt="">
                    <h3 class="titulo">
                        <p>Desvinculación administrativa de vehículos de transporte público
                    </h3>
                </div>
            </a>

            <a href="http://" target="_blank" rel="noopener noreferrer">
                <div class="recuadro col-xs-12 col-sm-4 col-md-3">
                    <img class="img-fluid" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-12-2021/s9.webp" alt="">
                    <h3 class="titulo">
                        <p>Descuento tributario por la habilitación y mantenimiento de Cicloparqueaderos - Plan Marshall
                    </h3>
                </div>
            </a>

            <a href="http://" target="_blank" rel="noopener noreferrer">
                <div class="recuadro col-xs-12 col-sm-4 col-md-3">
                    <img class="img-fluid" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-12-2021/s14.webp" alt="">
                    <h3 class="titulo">
                        <p>Centro de Orientación para Víctimas de Siniestros Viales - ORVI
                    </h3>
                </div>
            </a>

            <a href="http://" target="_blank" rel="noopener noreferrer">
                <div class="recuadro col-xs-12 col-sm-4 col-md-3">
                    <img class="img-fluid" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/19-12-2021/s16.webp" alt="">
                    <h3 class="titulo">
                        <p>Solicitud y Registro de: RDA - Registro Distrital Automotor, RDC - Registro de Licencias de Conducción, RTO - Registro Tarjetas de Operación
                    </h3>
                </div>
            </a>

        </div>
    </div>

</div>

<!-- Modal t1-->
<div class=" modal fade" id="modal_t1" tabindex="-1" role="dialog" aria-labelledby="modal_t1_label">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title text-uppercase" id="modal_t1_label">Cursos Pedagógicos por infracción a las normas de tránsito</h4>
            </div>
            <div class="modal-body">

                <div class="row">
                    <div class="col-xs-12">
                        <div class="txt-modal">
                            <div class="descripcion-modal">
                                <p>Promover en los asistentes la participación, reflexión y sensibilización frente a los cambios de comportamiento y hábitos en la vía.</p>
                                <p>La cita para el Curso Pedagógico debe ser agendada a través del Centro de Contacto de Movilidad en <a href="http://www.movilidadbogota.gov.co" target="_blank" rel="noopener noreferrer">www.movilidadbogota.gov.co</a></p>
                            </div>
                            <div>
                                <h3>Requisitos del trámite</h3>
                                <ol>
                                    <li>Documento de identidad
                                        <ul>
                                            <li>Cédula de ciudadanía, aplica para ciudadanos.</li>
                                            <li>Cédula de extranjería o pasaporte, aplica para extranjeros.</li>
                                            <li>Tarjeta de identidad (Menores de edad). Debe presentarse con el representante legal.</li>
                                        </ul>
                                    </li>
                                    <li>Una vez realizado el curso podrá expedir su volante de pago ingresando a la página <a href="www.movilidadbogota.gov.co" target="_blank" rel="noopener noreferrer">www.movilidadbogota.gov.co</a>, al link “consulta de comparendos“, clic en “consulta“, introduzca el número de documento de identidad, clic en “buscar”, clic en “volante”. Allí decide si genera volante con el 50% o el 25% según corresponda.
                                        <ul>
                                            <li>Generar e imprimir el volante de pago en la página web de la Secretaría de Movilidad o reclamarlo en uno de los siguientes puntos una vez finalizado el curso:
                                                <ul>
                                                    <li>SuperCADE Américas - (Temporalmente fuera de servicio)</li>
                                                    <li>SuperCADE 20 de Julio.</li>
                                                    <li>SuperCADE Suba.</li>
                                                    <li>Centro de Servicios de Movilidad Calle 13</li>
                                                    <li>CADE Fontibón</li>
                                                    <li>Centro de Servicios de Movilidad Paloquemao</li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ol>
                                <p><strong>NOTA:</strong> Si usted, por diferentes motivos NO GENERA EL VOLANTE DE PAGO, en los diferentes puntos de atención de la Secretaría Distrital de Movilidad, se expide de manera gratuita. <strong>NO PAGUE A TERCEROS POR LA IMPRESIÓN.</strong></p>
                            </div>
                            <div>
                                <h3>Puntos de pago</h3>
                                <ul>
                                    <li>Banco de Occidente: En todas las sucursales a nivel nacional (Solamente efectivo); Centro de Servicios de Movilidad Calle 13.</li>
                                    <li>Banco Caja Social: SuperCADE Movilidad / Centro de Servicios de Movilidad Calle 13. (efectivo).</li>
                                    <li>Corresponsales no bancarios del grupo Éxito.</li>
                                    <li>Surtimax, Super Inter, Carulla, Grupo Éxito, solo se reciben operaciones en efectivo o Tarjeta de Crédito Éxito.</li>
                                </ul>
                                <p><strong>Nota:</strong> Una vez finalizado el curso usted deberá cancelar el comparendo con el descuento correspondiente.</p>
                                <p>El Pago electrónico, por el botón PSE de la página web de la Secretaría Distrital de Movilidad.</p>
                            </div>
                            <div>
                                <h3>Para mayor información:</h3>
                                <p>Centro de contacto de Movilidad <strong>(601) 364-94-00 opción 2</strong>, o nuestros canales virtuales en <a href="http://www.movilidadbogota.gov.co" target="_blank" rel="noopener noreferrer">www.movilidadbogota.gov.co</a></p>
                                <h3>Línea:</h3>
                                <p><strong>195</strong></p>
                            </div>
                            <hr>
                            <div>
                                <a href="http://" target="_blank" rel="noopener noreferrer">Consulte aquí l Abecé de Cursos Pedagógicos (link incluir el PDF)</a>
                            </div>

                        </div>

                        <div class="videos_modal">
                            <div class='row'>
                                <div class='col-xs-12 col-sm-6'>
                                    <div class='embed-responsive embed-responsive-4by3'>
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/F4YHT4B0B7U" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                </div>
                                <div class='col-xs-12 col-sm-6'>
                                    <div class='embed-responsive embed-responsive-4by3'>
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/-5n-WiWIb80" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 text-center">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    </div>
                    <div class="col-xs-12 col-sm-6 text-center">
                        <a href="http://www.movilidadbogota.gov.co" class="btn btn-primary" target="_blank" rel="noopener noreferrer">Abrir</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal t2-->
<div class=" modal fade" id="modal_t2" tabindex="-1" role="dialog" aria-labelledby="modal_t2_label">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title text-uppercase" id="modal_t2_label">Salida de patios virtual</h4>
            </div>
            <div class="modal-body">

                <div class="row">
                    <div class="col-xs-12">
                        <div class="txt-modal">
                            <div class="descripcion-modal">
                                <p>Retirar el vehículo del parqueadero de patios, que por infracciones de tránsito fue inmovilizado.</p>
                                <a href="http://salidadepatios.movilidadbogota.gov.co/#/" target="_blank" rel="noopener noreferrer">Haga clic en Trámite Virtual para Salida de Patios</a>
                                <p>Son nueve (9) las infracciones habilitadas en la plataforma de Salida de Patios: <strong>B01, C14, D02, D03, D04, D05, D06, D07 y la H02.</strong></p>
                            </div>
                            <div>
                                <h3>Para tener en cuenta:</h3>
                                <ol type="a">
                                    <li>En el caso de los <strong>automóviles particulares</strong> únicamente aplica para las infracciones <strong>B01, C14, D02 y H02.</strong></li>
                                    <li>En el caso de <strong>motocicletas</strong> aplica las <strong>nueve (9)</strong> infracciones habilitadas en la plataforma.
                                        <ul>
                                            <li>Condiciones
                                                <ul>
                                                    <li>Para realizar el registro y validación virtual de las infracciones D03, D04, D05, D06 y D07, previamente se debe efectuar el pago del comparendo.</li>
                                                    <li>Se deben registrar los datos del propietario, infractor o autorizado con poder debidamente autenticado. La solicitud se debe realizar a nombre del ciudadano que va a realizar el trámite.</li>
                                                    <li>Debe activar la cuenta con el código de seguridad que le llega al número de celular registrado.</li>
                                                    <li>Debe superar las preguntas reto que le presenta el sistema.</li>
                                                    <li>Adjuntar los documentos solicitados por el sistema.</li>
                                                    <li>Realizar el pago por concepto de parqueaderos y grúa.</li>
                                                    <li>Una vez reciba el acto administrativo correspondiente a la orden de Salida puede dirigirse a realizar el retiro del vehículo.</li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ol>
                            </div>
                            <div>
                                <h3>Para mayor información:</h3>
                                <p>Centro de contacto de Movilidad <a href="tel:+(601) 364-94-00">(601) 364-94-00 opción 2</a>, o nuestros canales virtuales en <a href="http://www.movilidadbogota.gov.co" target="_blank" rel="noopener noreferrer">www.movilidadbogota.gov.co</a></p>
                            </div>


                        </div>

                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 text-center">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    </div>
                    <div class="col-xs-12 col-sm-6 text-center">
                        <a href="http://salidadepatios.movilidadbogota.gov.co/#/" class="btn btn-primary" target="_blank" rel="noopener noreferrer">Abrir</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal t3-->
<div class=' modal fade' id='modal_t3' tabindex='-1' role='dialog' aria-labelledby='modal_t3_label'>
    <div class='modal-dialog modal-lg' role='document'>
        <div class='modal-content'>
            <div class='modal-header'>
                <button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
                <h4 class='modal-title text-uppercase' id='modal_t3_label'>Salida de Patios Presencial</h4>
            </div>
            <div class='modal-body'>
                <div class='row'>
                    <div class='col-xs-12'>
                        <div class='txt-modal'>
                            <div class='descripcion-modal'>
                                <p>En caso de ser una infracción diferente a las anteriormente mencionadas se debe agendar la cita para realizar el trámite de manera presencial, siguiendo las estos pasos:</p>
                                <ul>
                                    <li>Haga clic en <a href="https://agendamiento.movilidadbogota.gov.co/AConect/" target="_blank" rel="noopener noreferrer">Agendamiento Virtual</a> y regístrese.</li>
                                    <li>Agendamiento a través del Centro de Contacto <a href="tel:+(601) 3649400">(601) 3649400</a> opción 2 o a través de la <strong>Línea 195 opción 4.</strong></li>
                                </ul>
                                <p>Para realizar el proceso de entrega del vehículo inmovilizado, el propietario, infractor o autorizado del propietario con poder debidamente autenticado, deberá asistir previo agendamiento al punto de atención del Centro de Servicios de Movilidad con los documentos requeridos.</p>
                            </div>
                            <div>
                                <h3>Condiciones:</h3>
                                <p>Para realizar el trámite de entrega del vehículo inmovilizado, el propietario, infractor o autorizado del propietario con poder debidamente autenticado, deberá asistir previo agendamiento al Centro de Servicios de Movilidad.</p>
                                <p>Si usted presenta alguno de los siguientes signos o síntomas como fiebre, tos, secreciones nasales y malestar general, le solicitamos abstenerse de asistir a su agendamiento. Siga las recomendaciones médicas y evite asistir a espacios concurridos.</p>
                            </div>
                            <div>
                                <h3>Documentos que deben presentarse en el Centro de Servicios de Movilidad Calle 13 o Paloquemao:</h3>
                                <!-- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- -----
                                                                                          Bloque Tabla
                                ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- -- -->

                                <div class='row'>
                                    <div class='col-xs-12 col-sm-10 col-sm-offset-1'>
                                        <div class='table-responsive'>
                                            <p class='text-center'></p>
                                            <table class='table table-bordered table-striped'>
                                                <tr>
                                                    <th>NOMBRE</th>
                                                    <th>CARACTERÍSTICA</th>
                                                    <th>OBSERVACIÓN</th>
                                                </tr>
                                                <tr>
                                                    <td>Cédula de ciudadanía </td>
                                                    <td>Documento exigido al propietario, infractor y/o autorizado del propietario.</td>
                                                    <td>Para los menores de edad habilitados, debe presentar la tarjeta de identidad o registro Civil de Nacimiento. Además, el menor de edad podrá o no presentarse con su representante legal acreditando el parentesco con el registro civil de nacimiento o resolución de albacea (para menores de edad solamente en el Centro de Servicios de Movilidad Calle 13).</td>
                                                </tr>
                                                <tr>
                                                    <td>Cédula de extranjería o Pasaporte vigente</td>
                                                    <td>Documento exigido para los extranjeros, que no tienen cédula de extranjería.</td>
                                                    <td>En el caso que la persona no presente el documento de identidad, el requisito se surtirá con la exhibición del comprobante del documento en trámite, expedido por la Registraduría Nacional del Estado Civil. En caso tal que, se verifique que el documento definitivo ya está para entrega, se exigirá éste para la realización del trámite.</td>
                                                </tr>
                                                <tr>
                                                    <td>Licencia de tránsito</td>
                                                    <td>Documento exigido para el propietario, infractor y/o autorizado del propietario.</td>
                                                    <td>Original y que sea la última registrada en el RUNT.</td>
                                                </tr>
                                                <tr>
                                                    <td>Licencia de conducción</td>
                                                    <td>Documento exigido al propietario, infractor y/o autorizado del propietario para retirar el vehículo inmovilizado y con la categoría correspondiente para movilizarlo. Este debe estar vigente y de conformidad con la categoría y el vehículo que se pretende retirar. </td>
                                                    <td>En el evento de las infracciones que den lugar a la suspensión o cancelación de la licencia de conducción se verificará la expedición del respectivo acto administrativo. En tal caso, el Ciudadano debe presentarse con un autorizado con licencia de conducción vigente para retirar el vehículo. Ahora bien, en caso de no existir retención preventiva en vía, se exigirá la presentación de la misma para la realización del trámite.</td>
                                                </tr>
                                                <tr>
                                                    <td>Poder general</td>
                                                    <td>Únicamente para apoderados generales</td>
                                                    <td>Debe presentar la escritura pública, exigible únicamente para apoderados generales, junto con la nota de vigencia expedida por la notaría respectiva.</td>
                                                </tr>
                                                <tr>
                                                    <td>Autorización salida de patios a un tercero</td>
                                                    <td>Debe hacerse con presentación personal ante notaría por el propietario del vehículo.</td>
                                                    <td>- En el caso que esté fuera del país, el trámite se adelantará ante el consulado del lugar donde se encuentre. <br>- En caso de Leasing será otorgado por el representante legal de la entidad propietaria del vehículo. Aplica en caso de que el propietario no pueda hacerse presente para el retiro, la autorización y entrega del vehículo. El documento debe contener la identificación del vehículo, del poderdante, y del autorizado, además de estar dirigida a la Secretaría Distrital de Movilidad.</td>
                                                </tr>
                                                <tr>
                                                    <td>Certificado de existencia y representación legal</td>
                                                    <td colspan="2">Expedido por la Cámara de Comercio o la entidad a la cual se encuentra registrada. Exigible para persona jurídica que pretenda demostrar la calidad de tal y con una vigencia no mayor a tres meses.</td>
                                                </tr>

                                            </table>
                                            <p class='text-center'></p>
                                        </div>
                                    </div>
                                </div>

                                <!-- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- -----
                                                                                          Bloque Tabla
                                ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- -- -->
                                <h3>ADICIONAL PARA SERVICIO PÚBLICO</h3>
                                <div class='row'>
                                    <div class='col-xs-12 col-sm-10 col-sm-offset-1'>
                                        <div class='table-responsive'>
                                            <p class='text-center'></p>
                                            <table class='table table-bordered table-striped'>
                                                <tr>
                                                    <td>Extracto de contrato</td>
                                                    <td>Documento exigido para vehículos de servicio especial, de transporte de personas (escolar y turismo), el cual deberá cumplir con los requisitos exigidos por la norma vigente para el momento de la autorización y entrega del vehículo o autorización de la Superintendencia de Puertos y Transportes.</td>
                                                </tr>
                                                <tr>
                                                    <td>Tarjeta de control</td>
                                                    <td>Documento exigido para vehículos tipo taxis, y que deberá poseer e infractor. Si es retirado por una persona autorizada, debe presentar la tarjeta de control de mismo vehículo. El documento deberá estar vigente.</td>
                                                </tr>
                                            </table>
                                            <p class='text-center'></p>
                                        </div>
                                    </div>
                                </div>


                                <!-- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- -----
                                                                                          Bloque Tabla
                                ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- -- -->
                                <h3>OTROS CASOS</h3>
                                <div class='row'>
                                    <div class='col-xs-12 col-sm-10 col-sm-offset-1'>
                                        <div class='table-responsive'>
                                            <p class='text-center'></p>
                                            <table class='table table-bordered table-striped'>
                                                <tr>
                                                    <td>Resolución de asignación de vehículo</td>
                                                    <td>Aplica para vehículos de servicio oficial, y que fueron inmovilizados por infracción C-02.</td>
                                                    <td>Deberán tener el membrete de la entidad oficial propietaria del vehículo.</td>
                                                </tr>
                                                <tr>
                                                    <td>Resolución de nombramiento</td>
                                                    <td>Aplica para vehículos de servicio oficial, y que fueron inmovilizados por infracción C-02. Deberán tener el membrete de la entidad oficial propietaria del vehículo.</td>
                                                    <td>Requiere la presentación personal del jefe de transportes.</td>
                                                </tr>
                                                <tr>
                                                    <td>Orden de salida de patios por Fiscalía</td>
                                                    <td>Documento exigido cuando el vehículo fue inmovilizado con ocasión a una orden de comparendo y estuvo involucrado en un accidente de tránsito. Esta será expedida por la Fiscalía que tenga conocimiento del hecho.</td>
                                                    <td>En el caso que la inmovilización sólo obedezca a un accidente de tránsito no habrá lugar a realizar audiencia de entrega del vehículo, ante la autoridad de tránsito en el área del Centro de Servicios de Movilidad.</td>
                                                </tr>
                                                <tr>
                                                    <td>Pago de la multa impuesta en virtud de la orden de comparendo</td>
                                                    <td>Aplica para inmovilizaciones de motocicletas cuyos conductores hayan incurrido en las infracciones D03, D04, D05, D06 y D07.</td>
                                                    <td>- Excepción: En el caso que el conductor decida impugnar la orden de comparendo, la entrega no se realizará hasta tanto no se decida sobre la imposición de la multa en los términos del artículo 135 y 136 del CNT</td>
                                                </tr>
                                                <tr>
                                                    <td>Autoridad Judicial</td>
                                                    <td colspan="2">Los documentos de la Autoridad Judicial competente deben ser presentados en original.</td>
                                                </tr>
                                            </table>
                                            <p class='text-center'></p>
                                        </div>
                                    </div>
                                </div>



                                <!-- ----- ----- ----- ----- ----- ----- ----- ----- Hoja de estilo tabla --- ----- ----- ----- ----- ----- ----- ----- ----- -->
                                <style>
                                    .txt-modal td {
                                        vertical-align: middle !important;
                                    }

                                    .txt-modal th {
                                        background-color: #4C531E;
                                        color: #fff;
                                        text-align: center;
                                    }
                                </style>
                                <!-- ----- ----- ----- ----- ----- ----- ----- ----- Hoja de estilo tabla --- ----- ----- ----- ----- ----- ----- ----- ----- -->
                            </div>
                            <div>
                                <h3>Momentos:</h3>
                                <ol>
                                    <li>Subsanar la infracción de tránsito y transporte que generó la inmovilización, según sea el caso.</li>
                                    <li><strong>Realizar agendamiento a través de la página de la Secretaría Distrital de Movilidad en Agendamiento Virtual o trámite virtual mediante la página de la Entidad haciendo clic en “Trámite Virtual para Salida de Patios”,</strong> reuniendo los documentos en original según corresponda y cumplir con las condiciones requeridas.</li>
                                    <li>Solicitar la orden de salida del vehículo inmovilizado en el Centro de Servicios de Movilidad Calle 13 ubicado en la Calle 13 # 37-35 o Paloquemao ubicado en la Cra 28 A # 17 A 20.</li>
                                    <li>Liquidación del valor por concepto de parqueaderos y grúas en Centro de Servicios de Movilidad Calle 13 o Paloquemao donde está realizando el trámite, o en la página web: <a href="https://cmovilgyp.com/wliquidacion/" target="_blank" rel="noopener noreferrer">https://cmovilgyp.com/wliquidacion/</a> si su vehículo fue inmovilizado después del 1 de abril de 2019 y una vez generada la orden de entrega de vehículo.</li>
                                    <li>Pago de parqueaderos y grúas:
                                        <ul>
                                            <li>Pago en efectivo, en los siguientes puntos:
                                                <ul>
                                                    <li>Banco de Occidente: En la red de oficinas del banco incluyendo el Centro de Servicios de Movilidad y CADE Fontibón en los horarios de atención establecidos para cada punto.</li>
                                                    <li>REVAL: CADE Fontibón en los horarios de atención establecidos para cada punto, sean o no clientes del banco.</li>
                                                    <li>Recaudo con tarjetas débito y crédito de las franquicias MasterCard y Visa en el <strong>Centro de Servicios de Movilidad</strong>.</li>
                                                    <li>En las ventanillas del Banco de Occidente ubicadas en el <strong>Centro de Servicios de Movilidad</strong> y CADE Fontibón y en las oficinas: Avenida Colón, Fontibón, Salitre y Avenida el Dorado.</li>
                                                    <li>En las ventanillas de REVAL del CADE Fontibón.</li>
                                                    <li>Pago electrónico, por el botón PSE de la página web de la Secretaría Distrital de Movilidad. <a href="https://cmovilgyp.com/wliquidacion/" target="_blank" rel="noopener noreferrer">https://cmovilgyp.com/wliquidacion/</a></li>
                                                    <li>Corresponsales no bancarios (Grupo Éxito): Pago en efectivo o Tarjeta de Crédito Éxito:
                                                        <ul>
                                                            <li>Surtimax</li>
                                                            <li>Super Inter</li>
                                                            <li>Carulla</li>
                                                            <li>Grupo Éxito</li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>Retiro de vehículos:
                                        <ul>
                                            <li>Para vehículos inmovilizados hasta el 31 de marzo de 2019, retirar el vehículo del Parqueadero Público o Parqueadero Particular.</li>
                                            <li>Para vehículos inmovilizados a partir del 01 de abril de 2019, retirar el vehículo del Parqueadero #1 Álamos ubicado en la Transversal 93 # 53 – 35, localidad de Engativá.</li>
                                            <li>Para el retiro del vehículo en patios lo debe efectuar la misma persona que realizó la solicitud de orden de entrega del vehículo inmovilizado, y que fue autorizada en el acto administrativo que ordena la entrega del vehículo.</li>
                                            <li>Parqueadero #1 – Álamos
                                                <ul>
                                                    <li>Dirección: TV 93 # 53 – 35</li>
                                                    <li>Teléfono: <a href="tel:+3124985077">312 498 5077</a></li>
                                                    <li>Horario: lunes a domingo las 24 horas del día</li>
                                                </ul>
                                            </li>
                                            <li>Patio Único Particular
                                                <ul>
                                                    <li>Dirección: Transversal 93 No 52 - 03 Entrada Álamos</li>
                                                    <li>Teléfono: <a href="tel:+3058195188">305 819 5188</a></li>
                                                    <li>Horario: lunes a viernes: 7:00 a.m. a 7:00 p.m., sábado: 8:00 a.m. a 1:00 p.m.</li>
                                                </ul>
                                            </li>
                                            <li>Patio Único Público
                                                <ul>
                                                    <li>Dirección: Calle 17 # 90 - 90</li>
                                                    <li>Teléfono: <a href="tel:+(601)4133946">(061) 413 3946</a> Extensión: 7450 y 7451 - Celular: <a href="tel:+3058125105">305 812 5105</a></li>
                                                    <li>Horario: lunes a viernes: 7:00 a.m. a 7:00 p.m., sábado: 8:00 a.m. a 1:00 p.m.</li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ol>
                            </div>
                            <div>
                                <p><strong>Importante:</strong> Los ciudadanos podrán retirar del  parqueadero Autorizado No. 1, el vehículo durante las 24 horas del día en el cual fue autorizada la orden de salida expedida por la Autoridad de Tránsito. Para el retiro del vehículo en patios lo debe efectuar la misma persona que realizó la solicitud de orden de entrega del vehículo inmovilizado, y que fue autorizada en el acta de entrega del vehículo.</p>
                                <ul>
                                    <li><strong>Exclusivo para motociclistas – Salida de Parqueaderos.</strong> Infracción C24 (conducir motocicleta sin observar las normas de tránsito): debe llevar el elemento (casco y/o chaleco) en el que se puede constatar la subsanación.</li>
                                </ul>
                            </div>
                            <div>
                                <h3>Para mayor información:</h3>
                                <p>Centro de contacto de Movilidad (601) 364-94-00 opción 2, o nuestros canales virtuales en <a href="http://www.movilidadbogota.gov.co" target="_blank" rel="noopener noreferrer">www.movilidadbogota.gov.co</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class='modal-footer'>
            <div class='row'>
                <div class='col-xs-12 col-sm-6 text-center'>
                    <button type='button' class='btn btn-default' data-dismiss='modal'>Cerrar</button>
                </div>
                <div class='col-xs-12 col-sm-6 text-center'>
                    <a href='https://agendamiento.movilidadbogota.gov.co/AConect/' class='btn btn-primary' target='_blank' rel='noopener noreferrer'>Agendar</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal t4-->
<div class=' modal fade' id='modal_t4' tabindex='-1' role='dialog' aria-labelledby='modal_t4_label'>
    <div class='modal-dialog modal-lg' role='document'>
        <div class='modal-content'>
            <div class='modal-header'>
                <button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
                <h4 class='modal-title text-uppercase' id='modal_t4_label'>Devolución y/o compensación de pagos en exceso y de lo no debido por conceptos no tributarios</h4>
            </div>
            <div class='modal-body'>
                <div class='row'>
                    <div class='col-xs-12'>
                        <div class='txt-modal'>
                            <div class='descripcion-modal'>
                                <p>Obtener la devolución y/o compensación de pagos en exceso o lo no debido, si ha cancelado sumas mayores por concepto de obligaciones no tributarias o ha efectuado pagos sin que exista causa legal para hacer exigible su cumplimiento.</p>
                            </div>
                            <div>
                                <h3>Requisitos</h3>
                                <ul>
                                    <li>Formulario: <a href="https://bogota.gov.co/sites/default/files/tys/2017/11/PA03-PR11-F01-FORMATO-SOLICITUD-DE-DEVOLUCION1.xlsx" target="_blank" rel="noopener noreferrer">PA03-PR11-F01</a></li>
                                </ul>
                                <p>Reunir los siguientes documentos y cumplir condiciones requeridas para realizar el mismo. Descargue el <strong>formulario para devolución</strong> y diligéncielo en su totalidad.</p>
                            </div>
                            <div>
                                <!-- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- -----
                                                                                          Bloque Tabla
                                ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- -- -->
                                
                                <div class='seccion'>
                                    <div class='row'>
                                        <div class='col-xs-12 col-sm-10 col-sm-offset-1'>
                                            <div class='table-responsive'>
                                                <p class='text-center'></p>
                                                <table class='table table-bordered table-striped'>
                                                    <tr>
                                                        <th>Nombre</th>
                                                        <th>Cantidad</th>
                                                        <th>Característica</th>
                                                    </tr>
                                                    <tr>
                                                        <td>Documento de identificación (Cédula de Ciudadanía o Cédula de Extranjería</td>
                                                        <td>1</td>
                                                        <td>Copia.</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Fotocopia de recibo de pago</td>
                                                        <td>1</td>
                                                        <td>Copia.</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Fotocopia de la certificación bancaria</td>
                                                        <td>1</td>
                                                        <td>Copia.</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Autorización autenticada</td>
                                                        <td>1</td>
                                                        <td>Fotocopia (Cuando se deba realizar la devolución a una cuenta de un tercero).</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Para el trámite realizado por personas jurídicas, estar legalmente constituida ante Cámara y Comercio</td>
                                                        <td colspan="2">La SDM verificará en el RUES que el representante legal sea quien realice la solicitud.</td>
                                                    </tr>
                                                </table>
                                                <p class='text-center'></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <h3>Momentos:</h3>
                                <ul>
                                    <li>Reunir documentos.</li>
                                    <li>Radica de forma virtual o física en la Centro de Servicios de Movilidad Calle 13.</li>
                                    <li>Espera la respuesta del radicado.</li>
                                </ul>
                            </div>
                            <div>
                                <h3>Para mayor información:</h3>
                                <p>Centro de contacto de Movilidad <a href="tel:+(601)3649400">(601) 364 9400</a> opción 2, o nuestros canales virtuales en <a href="http://www.movilidadbogota.gov.co" target="_blank" rel="noopener noreferrer">www.movilidadbogota.gov.co</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class='modal-footer'>
            <div class='row'>
                <div class='col-xs-12 col-sm-6 text-center'>
                    <button type='button' class='btn btn-default' data-dismiss='modal'>Cerrar</button>
                </div>
                <div class='col-xs-12 col-sm-6 text-center'>
                    <a href='https://bogota.gov.co/sites/default/files/tys/2017/11/PA03-PR11-F01-FORMATO-SOLICITUD-DE-DEVOLUCION1.xlsx' class='btn btn-primary' target='_blank' rel='noopener noreferrer'>Formulario</a>
                </div>
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
        background-image: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/19-12-2021/dot-grid.png');
        /* background-repeat: no-repeat; */

    }


    .w-100 {
        width: 100%;
    }

    .img-fluid {
        max-width: 100%;
        height: auto;
    }

    .s1 {
        background-color: #191C3A;
        margin-bottom: 25px;
        border-top: solid 3px #66e026;
        border-bottom: solid 10px #66e026;

    }

    .s1 .enc [class*='col-'] {
        margin: 0px;
        padding: 0px;
        border: 0;
        outline: 0;
        font-size: 100%;
        vertical-align: baseline;
    }

    .s1 .enc-parrafo div {
        padding-right: 30px;

    }

    .s1 .enc-titulo {
        text-align: center;
        margin: 0px;
        padding: 2em 2em;
        height: 90px;
    }

    .s1 .enc-img {
        height: 240px;
        background-image: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/30-11-2021/tramitesservicios_a.webp');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center top;
    }

    .s1 .enc h3 {
        margin: 0px;
        color: #66e026;
        text-transform: uppercase;
        font-weight: 900;
        padding-top: 15px;

    }

    .s1 .enc-parrafo {
        height: 150px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        justify-items: center;
    }

    .s1 .enc-parrafo p {
        color: #fff;
        margin: 10px;
        padding: 15px;
        border-top: solid 3px #fff;
        border-bottom: solid 3px #fff;
        text-align: justify;
        font-size: 1rem;
    }

    .s2 video {
        width: 100%;
        margin: auto;
        padding-top: 30px;
        padding-bottom: 30px;
    }

    .s3 {
        padding: 3%;
    }

    .s4 {
        padding: 20px;
        font-size: 13px !important;
    }

    .s3 p {
        overflow: auto;
        text-align: center;
        border-top: solid 10px #66e026;
        border-bottom: solid 3px #66e026;
        padding: 15px;
        color: #191C3A;
    }

    .titulo2 {
        padding: 8px 15px;
        margin-bottom: 15px;
        border-bottom: solid 3px #191C3A;
    }

    .s4 [class*='col-'] {
        margin: 0px;
        padding: 0px;
        border: 0;
        outline: 0;
        font-size: 100%;
        vertical-align: baseline;
    }

    .videos_modal {
        padding: 2vw;
    }

    .txt-modal {
        padding: 1.5vw;
        background-color: #fff;
        border: solid 1px #35353555;
        border-radius: 6px;
        text-align: justify;
    }


    .modal-header {
        background-color: #191C3A;
    }

    .modal-title {
        color: #66e026;
        font-weight: 700;
    }

    .modal-body {
        background-image: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/19-12-2021/dot-grid.png');

    }

    .modal-footer {
        background-color: #191C3A;
        padding: 30px !important;

    }

    .modal .btn {
        margin: 2px;
        font-weight: 600;
        width: 60%;

    }

    .modal .btn-default {
        background-color: #fff;
    }

    .modal .btn-primary {
        background-color: #66e026;
        color: #191C3A;
    }


    .embed-responsive-4by3 {
        margin: 5px;
    }

    .descripcion-modal {
        font-size: 1.5rem;
        font-weight: 700;
        background-color: #f5f5f5;
        padding: 18px;
        border-radius: 5px;
    }

    .txt-modal h3 {
        border-bottom: solid 2px #191C3A;
        color: #191C3A;
        padding-bottom: 8px;
    }
</style>
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin hoja de estilo  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<style>
    .recuadro {
        position: relative;
        min-height: 50px;
        background-color: #191C3A;
        background-clip: content-box;
        color: #fff;
        padding: 10px !important;
    }

    .recuadro:hover {
        position: relative;
        min-height: 50px;
        background-color: #0066cd;
        background-clip: content-box;
        color: #fff;
    }

    .recuadro img {
        width: 100%;
        vertical-align: middle;
        border-style: none;
    }

    .img-fluid {
        max-width: 100%;
        height: auto;
    }

    .recuadro .titulo {
        position: absolute;
        top: 0;
        bottom: 0;
        display: flex;
        align-items: end;
        justify-content: center;
        padding: 15px;
        right: 10px;
        left: 10px;
        margin-top: 0px;
        margin-bottom: 0px;
    }

    .recuadro:hover .titulo {
        background-color: #191C3A;
        margin: 10px;
        right: 0px;
        left: 0px;
        align-items: center;
    }

    .recuadro h3 {
        font-family: Montserrat;
        font-weight: 500;
        color: #0066cd;
    }

    .recuadro p {
        font-weight: 700;
        color: #fff;
        font-size: 1.4rem;
        text-align: center;
        line-height: 1;
        background-color: #191C3ADB;
        padding: 5px;
    }

    .recuadro:hover p {
        font-weight: 700;
        color: #66e026;
        font-size: 1.4rem;
        text-align: center;
        line-height: 1;
        background-color: #191C3A;
        padding: 5px;
        text-decoration: none;
    }
</style>
<style>
    .recuadro-lg {
        position: relative;
        min-height: 50px;
        /* max-height: 195px; */
        background-color: #191C3A;
        background-clip: content-box;
        color: #fff;
        padding: 10px !important;
    }

    .recuadro-lg:hover {
        position: relative;
        /* max-height: 225px; */
        background-color: #0066cd;
        background-clip: content-box;
        color: #fff;
    }

    .recuadro-lg img {
        width: 100%;
        /* max-height: 205px; */
        vertical-align: middle;
        border-style: none;
    }

    .img-fluid {
        max-width: 100%;
        height: auto;
    }

    .recuadro-lg .titulo {
        position: absolute;
        top: 0;
        bottom: 0;
        display: flex;
        align-items: end;
        justify-content: center;
        padding: 15px;
        right: 10px;
        left: 10px;
        margin-top: 0px;
        margin-bottom: 0px;
    }

    .recuadro-lg:hover .titulo {
        background-color: #191C3A;
        margin: 10px;
        right: 0px;
        left: 0px;
        align-items: center;
    }

    .recuadro-lg h3 {
        font-family: Montserrat;
        font-weight: 500;
        color: #0066cd;
    }

    .recuadro-lg p {
        font-weight: 700;
        color: #fff;
        font-size: 1.4rem;
        text-align: center;
        line-height: 1;
        background-color: #191C3ADB;
        padding: 9px 15px;
    }

    .recuadro-lg:hover p {
        font-weight: 700;
        color: #66e026;
        font-size: 1.4rem;
        text-align: center;
        line-height: 1;
        background-color: #191C3A;
        padding: 9px 15px;
        text-decoration: none;
    }
</style>
<style>
    @media(max-width:767px) {
        .s1 .enc-parrafo p {
            font-size: 1.5rem !important;
        }

        .s1 .enc h3 {
            font-size: 1.6rem !important;

        }

        .s1 .enc-titulo {
            padding: 1em;
            height: 70px;
        }

        .s1 .enc-parrafo div {
            padding-left: 30px;
        }


    }

    @media(min-width:768px) {


        .s1 .enc-titulo {
            height: 90px;
        }

        .s1 .enc-parrafo p {
            font-size: 1.5rem;
        }

    }

    @media(min-width:992px) {}

    @media(min-width:1200px) {}
</style>
