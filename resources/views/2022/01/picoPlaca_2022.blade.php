@extends('welcome')
@section('contenido')

<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fuente Sogar -----  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<link rel='preconnect' href='https://fonts.googleapis.com'>
<link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
<link href='https://fonts.googleapis.com/css2?family=Sora:wght@100;200;300;400;500;600;700;800&display=swap' rel='stylesheet'>
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin Fuente Sogar -  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->


<!-- ----- ----- ----- ----- ----- ----- ----- ----- Bloque Seccion ----- ----- ----- ----- ----- ----- ----- ----- ----- ------ -->

<div class='container-fluid seccion'>
    <div class='s1'>
        <div class='row'>
            <div class="encabezado">
                <div class='col-xs-12 col-sm-6 col-md-6'>
                    <div class="text-encabezado">
                        <div class="text-center">
                            <h3><span class="enfasis">Abecé</span> del <span class="enfasis">Pico y Placa</span> en <span class="enfasis">Bogotá</span></h3>
                        </div>
                    </div>
                </div>
                <div class='col-xs-12 col-sm-6 col-md-6'>
                    <div class="img-encabezado" alt='Encabezado Pico y placa 2022' title='Encabezado Pico y placa 2022'></div>
                </div>
            </div>
        </div>
    </div>
    <div class="paragraph ph-descripcion">
        <p>Conozca todo lo concerniente a las medidas de pico y placa que aplican en Bogotá para vehículos particulares.</p>
    </div>
    <style>
        .ph-descripcion {
            margin: 8px;
            font-size: 12pt;
            font-weight: 500;
            text-align: left;
            line-height: 1.5;
        }

        @media(min-width:768px) {
            .ph-descripcion {
                margin: 32px;
            }
        }
    </style>
    <div class="s2">
        <div class='row'>
            <div class='col-xs-12 col-sm-12 col-md-12'>

                <!-- <div class='row'>
                    <div class='col-xs-12 col-sm-8 col-sm-offset-2'>
                        <div class='text-center'>
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/YzOM6Bplm-8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div> -->

                <style>
                    .glyphicon {
                        position: absolute;
                        display: inline-block;
                    }
                </style>
                <div>
                    <!-- collapse -->
                    <div class='panel-group ' id='accordion_pp' role='tablist ' aria-multiselectable='true'>

                        <!-- collapseBogota -->
                        <div class='panel panel-default  panel-bogota'>
                            <div class='panel-heading hp' role='tab' id='headingBogota'>
                                <h4 class='panel-title'>
                                    <a role='button' data-toggle='collapse' data-parent='#accordion_pp' href='#collapseBogota' aria-expanded='true' aria-controls='collapseBogota'>
                                        Pico y Placa en Bogotá
                                    </a>
                                </h4>
                            </div>
                            <div id='collapseBogota' class='panel-collapse collapse in' role='tabpanel' aria-labelledby='headingBogota'>
                                <div class='panel-body'>
                                    <div class='panel-group ' id='accordion_pypabc' role='tablist ' aria-multiselectable='true'>

                                        <!-- collapse_pyp1 -->
                                        <div class='panel panel-default'>
                                            <div class='panel-heading' role='tab' id='heading_pyp1'>
                                                <h4 class='panel-title'>
                                                    <a role='button' data-toggle='collapse' data-parent='#accordion_pypabc' href='#collapse_pyp1' aria-expanded='true' aria-controls='collapse_pyp1'>
                                                        1. ¿Dónde puedo inscribir mi vehículo para aplicar a la excepción?
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id='collapse_pyp1' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_pyp1'>
                                                <div class='panel-body'>
                                                    <p>La Secretaría Distrital de Movilidad ha dispuesto como único canal de radicación, la Página web www.movilidadbogota.gov.co, en el aviso: Pico y Placa, todo lo que debe saber.</p>
                                                    <img class='img-responsive w-100 ' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/08-01-2023/sxcv-imagen_230108_hc.png' alt='Fotografiá banner del home Pico y Placa en Bogota - Todo lo que debes saber' title='Fotografia banner del home Pico y Placa en Bogota - Todo lo que debes saber'>
                                                    <p>El ciudadano, deberá adjuntar en un solo archivo, los documentos soportes de su solicitud en formato pdf.</p>
                                                    <p>Las personas con discapacidad podrán acercarse a los siguientes puntos de atención para recibir orientación y facilitar el cargue de la solicitud a través de la página web de la Entidad:</p>
                                                    <ul>
                                                        <li>Centro de Servicio Movilidad Calle 13 (Calle 13 # 37-35).</li>
                                                        <li>Centro de Servicio Movilidad Paloquemao (Carrera 28 # 17 A 20).</li>
                                                        <!-- <li>RedCADE Américas, Suba, 20 de Julio y Fontibón.</li> -->
                                                    </ul>
                                                    <p>Si requiere información o asesoría, comuníquese con nosotros a través de nuestros canales de contacto del <strong><a href="https://www.movilidadbogota.gov.co/web/canales_de_atencion_al_ciudadano" target="_blank" rel="noopener noreferrer">Centro de Contacto de Movilidad</a></strong> o llame a la línea <strong><a href="tel:+6013649400">601 - 364 9400</a></strong>, opción 2.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /#fin _pyp1 -->

                                        <!-- collapse_pyp2 -->
                                        <div class='panel panel-default'>
                                            <div class='panel-heading' role='tab' id='heading_pyp2'>
                                                <h4 class='panel-title'>
                                                    <a role='button' data-toggle='collapse' data-parent='#accordion_pypabc' href='#collapse_pyp2' aria-expanded='true' aria-controls='collapse_pyp2'>
                                                        2. ¿En qué cambió el Pico y Placa en Bogotá?
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id='collapse_pyp2' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_pyp2'>
                                                <div class='panel-body'>
                                                    <p>El Pico y Placa tiene un cambio importante para la ciudadanía:</p>
                                                    <p>La restricción cambió de acuerdo al último de la placa. Desde el 10 de enero, los vehículos podrán circular así: los días pares placas terminadas en 6, 7, 8, 9 y 0, y en los días impares los terminados en 1, 2, 3, 4 y 5.</p>
                                                    <p>El horario en que aplicará la medida de restricción es de lunes a viernes, de 6:00 a.m. a 9:00 p.m.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /#fin _pyp2 -->

                                        <!-- collapse_pyp3 -->
                                        <div class='panel panel-default'>
                                            <div class='panel-heading' role='tab' id='heading_pyp3'>
                                                <h4 class='panel-title'>
                                                    <a role='button' data-toggle='collapse' data-parent='#accordion_pypabc' href='#collapse_pyp3' aria-expanded='true' aria-controls='collapse_pyp3'>
                                                        3. ¿A partir de cuándo se implementaron estos cambios?
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id='collapse_pyp3' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_pyp3'>
                                                <div class='panel-body'>
                                                    <p>La restricción de circulación por Pico y Placa en días hábiles rige a partir del martes, 10 de enero de 2023.</p>
                                                    <p>Del 10 al 16 de enero, la medida es pedagógica. Desde el 17 de enero ya se sanciona la infracción.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /#fin _pyp3 -->

                                        <!-- collapse_pyp4 -->
                                        <div class='panel panel-default'>
                                            <div class='panel-heading' role='tab' id='heading_pyp4'>
                                                <h4 class='panel-title'>
                                                    <a role='button' data-toggle='collapse' data-parent='#accordion_pypabc' href='#collapse_pyp4' aria-expanded='true' aria-controls='collapse_pyp4'>
                                                        4. ¿Cómo es el Pico y Placa en días hábiles?
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id='collapse_pyp4' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_pyp4'>
                                                <div class='panel-body'>
                                                    <p>A partir del 10 de enero, los vehículos podrán circular así:</p>
                                                    <ul>
                                                        <li>Días pares: 6, 7, 8, 9 y 0</li>
                                                        <li>Días impares: 1, 2, 3, 4 y 5</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /#fin _pyp4 -->


                                        <!-- collapse_pyp10 -->
                                        <div class='panel panel-default'>
                                            <div class='panel-heading' role='tab' id='heading_pyp10'>
                                                <h4 class='panel-title'>
                                                    <a role='button' data-toggle='collapse' data-parent='#accordion_pypabc' href='#collapse_pyp10' aria-expanded='true' aria-controls='collapse_pyp10'>
                                                        5. ¿Cuáles son las excepciones para el Pico y Placa Diario y los requisitos para solicitar la inscripción?
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id='collapse_pyp10' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_pyp10'>
                                                <div class='panel-body'>
                                                    <p>Los vehículos exceptuados de la medida de Pico y Placa en Bogotá, según <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/08-01-2023/decreto-003-de-2023_0.pdf">Decreto 003 de 2023</a>, son:</p>

                                                    <div class='panel-group ' id='accordion_excepcion' role='tablist ' aria-multiselectable='true'>

                                                        <!-- collapse_exc1 -->
                                                        <div class='panel panel-default'>
                                                            <div class='panel-heading' role='tab' id='heading_exc1'>
                                                                <h4 class='panel-title'>
                                                                    <a role='button' data-toggle='collapse' data-parent='#accordion_excepcion' href='#collapse_exc1' aria-expanded='true' aria-controls='collapse_exc1'>
                                                                        a. Vehículos eléctricos y de cero emisiones contaminantes.
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id='collapse_exc1' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_exc1'>
                                                                <div class='panel-body'>
                                                                    <p>De manera general, todo vehículo que quiera ser exceptuado de la medida de Pico y Placa debe tener actualizado y vigente en el RUNT.</p>
                                                                    <ol>
                                                                        <li>Seguro Obligatorio de Accidentes de Tránsito.</li>
                                                                        <li>Revisión Técnico Mecánica.</li>
                                                                        <p>Adicional debe realizar la solicitud de excepción de pico y placa por la página web de la SDM <a href="https://www.movilidadbogota.gov.co/web/registro_restriccion_vehicular" target="_blank" rel="noopener noreferrer">https://www.movilidadbogota.gov.co/web/registro_restriccion_vehicular</a></p>
                                                                        <li>Registro de la placa a exceptuar.</li>
                                                                        <li>De manera automática el sistema cotejará en el RUNT el tipo de combustible y los requisitos comunes.</li>
                                                                    </ol>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- /#fin _exc1 -->

                                                        <!-- collapse_exc2 -->
                                                        <div class='panel panel-default'>
                                                            <div class='panel-heading' role='tab' id='heading_exc2'>
                                                                <h4 class='panel-title'>
                                                                    <a role='button' data-toggle='collapse' data-parent='#accordion_excepcion' href='#collapse_exc2' aria-expanded='true' aria-controls='collapse_exc2'>
                                                                        b. Caravana presidencial.
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id='collapse_exc2' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_exc2'>
                                                                <div class='panel-body'>
                                                                    <p>De manera general, todo vehículo que quiera ser exceptuado de la medida de Pico y Placa debe tener actualizado y vigente en el RUNT.</p>
                                                                    <ol>
                                                                        <li>Seguro Obligatorio de Accidentes de Tránsito.</li>
                                                                        <li>Revisión Técnico Mecánica.</li>
                                                                        <p>Adicional debe realizar la solicitud de excepción de pico y placa por la página web de la SDM <a href="https://www.movilidadbogota.gov.co/web/SIMUR/excepciones/login/" target="_blank" rel="noopener noreferrer">https://www.movilidadbogota.gov.co/web/SIMUR/excepciones/login/</a></p>
                                                                        <li>Certificación expedida por la Presidencia de la República o quien haga sus veces en la que se indique que (el) (los) vehículo (s) hacen parte del esquema de seguridad o que están dispuestos para actividades inherentes a la seguridad presidencial, con fecha de expedición no superior a treinta (30) días hábiles a la fecha de radicación de la preinscripción.</li>
                                                                        <li>Copia del acto administrativo de nombramiento de la persona que expide la certificación del literal b, o certificación expedida por el Director de Recursos Humanos o quien haga sus veces, con indicación del cargo, funciones y vigencia del mismo.</li>
                                                                    </ol>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- /#fin _exc2 -->

                                                        <!-- collapse_exc3 -->
                                                        <div class='panel panel-default'>
                                                            <div class='panel-heading' role='tab' id='heading_exc3'>
                                                                <h4 class='panel-title'>
                                                                    <a role='button' data-toggle='collapse' data-parent='#accordion_excepcion' href='#collapse_exc3' aria-expanded='true' aria-controls='collapse_exc3'>
                                                                        c. Vehículo de servicio diplomático o consular.
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id='collapse_exc3' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_exc3'>
                                                                <div class='panel-body'>
                                                                    <p>Se inscribirán de forma automática dentro del trámite de inscripción de los vehículos exceptuados de la restricción de circulación vehicular, de la relación de placas que aporte el Ministerio de Relaciones Exteriores.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- /#fin _exc3 -->

                                                        <!-- collapse_exc4 -->
                                                        <div class='panel panel-default'>
                                                            <div class='panel-heading' role='tab' id='heading_exc4'>
                                                                <h4 class='panel-title'>
                                                                    <a role='button' data-toggle='collapse' data-parent='#accordion_excepcion' href='#collapse_exc4' aria-expanded='true' aria-controls='collapse_exc4'>
                                                                        d. Funerarias o agencias mortuorias.
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id='collapse_exc4' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_exc4'>
                                                                <div class='panel-body'>
                                                                    <p>De manera general, todo vehículo que quiera ser exceptuado de la medida de Pico y Placa debe tener actualizado y vigente en el RUNT.</p>
                                                                    <ol>
                                                                        <li>Seguro Obligatorio de Accidentes de Tránsito.</li>
                                                                        <li>Revisión Técnico Mecánica.</li>
                                                                        <p>Adicional debe realizar la solicitud de excepción de pico y placa por la página web de la SDM li <a href="https://www.movilidadbogota.gov.co/web/SIMUR/excepciones/login/" target="_blank" rel="noopener noreferrer">https://www.movilidadbogota.gov.co/web/SIMUR/excepciones/login/</a></p>
                                                                        <li>Certificado de existencia y representación legal de la funeraria o agencia mortuoria, con fecha de expedición no superior a treinta (30) días hábiles.</li>
                                                                    </ol>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- /#fin _exc4 -->

                                                        <!-- collapse_exc5 -->
                                                        <div class='panel panel-default'>
                                                            <div class='panel-heading' role='tab' id='heading_exc5'>
                                                                <h4 class='panel-title'>
                                                                    <a role='button' data-toggle='collapse' data-parent='#accordion_excepcion' href='#collapse_exc5' aria-expanded='true' aria-controls='collapse_exc5'>
                                                                        e. Vehículos de organismos de seguridad del Estado.
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id='collapse_exc5' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_exc5'>
                                                                <div class='panel-body'>
                                                                    <ol>
                                                                        <li>Seguro Obligatorio de Accidentes de Tránsito.</li>
                                                                        <li>Revisión Técnico Mecánica.</li>
                                                                        <p>Adicional debe realizar la solicitud de excepción de pico y placa por la página web de la SDM <a href="https://www.movilidadbogota.gov.co/web/SIMUR/excepciones/login/" target="_blank" rel="noopener noreferrer">https://www.movilidadbogota.gov.co/web/SIMUR/excepciones/login/</a></p>
                                                                        <li>Certificación expedida por el funcionario competente en la cual se establezca de manera expresa que los vehículos sobre los cuales se solicita la excepción prestan el servicio o ejercen funciones de seguridad del Estado o de Policía Judicial.</li>
                                                                        <li>Copia del acto administrativo de nombramiento o documento que le otorga competencia al funcionario que suscribe la certificación contemplada en el literal b.</li>
                                                                    </ol>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- /#fin _exc5 -->

                                                        <!-- collapse_exc6 -->
                                                        <div class='panel panel-default'>
                                                            <div class='panel-heading' role='tab' id='heading_exc6'>
                                                                <h4 class='panel-title'>
                                                                    <a role='button' data-toggle='collapse' data-parent='#accordion_excepcion' href='#collapse_exc6' aria-expanded='true' aria-controls='collapse_exc6'>
                                                                        f. Vehículos de emergencia.
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id='collapse_exc6' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_exc6'>
                                                                <div class='panel-body'>
                                                                    <ol>
                                                                        <p>De manera general, todo vehículo que quiera ser exceptuado de la medida de Pico y Placa debe tener actualizado y vigente en el RUNT.</p>
                                                                        <li>Seguro Obligatorio de Accidentes de Tránsito.</li>
                                                                        <li>Revisión Técnico Mecánica.</li>
                                                                        <p>Adicional debe realizar la solicitud de excepción de pico y placa por la página web de la SDM <a href="https://www.movilidadbogota.gov.co/web/SIMUR/excepciones/login/" target="_blank" rel="noopener noreferrer">https://www.movilidadbogota.gov.co/web/SIMUR/excepciones/login/</a></p>
                                                                        <li>Certificado de existencia y representación legal con fecha de expedición no superior a treinta (30) días hábiles, donde se especifique como objeto social, la prestación del servicio de emergencia o atención domiciliaria.</li>
                                                                        <li>Certificación expedida por funcionario competente de la entidad o representante legal de la empresa donde se especifique que los vehículos preinscritos son para atención de emergencias y/o desastres, o actividades policiales, o atención médica domiciliaria, con fecha de expedición no superior a treinta (30) días hábiles a la fecha de preinscripción, la cual se entenderá rendida bajo la gravedad de juramento.</li>
                                                                        <li>Para las entidades y/o empresas que presten servicios de atención médica domiciliaria, se verificará la habilitación para la prestación de estos servicios mediante el Registro Especial de Prestadores de Servicios de Salud - REPS. Esto, para efectos de control por parte de la Secretaría Distrital de Movilidad.</li>

                                                                    </ol>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- /#fin _exc6 -->

                                                        <!-- collapse_exc7 -->
                                                        <div class='panel panel-default'>
                                                            <div class='panel-heading' role='tab' id='heading_exc7'>
                                                                <h4 class='panel-title'>
                                                                    <a role='button' data-toggle='collapse' data-parent='#accordion_excepcion' href='#collapse_exc7' aria-expanded='true' aria-controls='collapse_exc7'>
                                                                        g. Vehículos utilizados para el transporte de personas en condición de discapacidad.
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id='collapse_exc7' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_exc7'>
                                                                <div class='panel-body'>
                                                                    <ol>
                                                                        <p>De manera general, todo vehículo que quiera ser exceptuado de la medida de Pico y Placa debe tener actualizado y vigente en el RUNT.</p>
                                                                        <li>Seguro Obligatorio de Accidentes de Tránsito.</li>
                                                                        <li>Revisión Técnico Mecánica.</li>
                                                                        <p>Adicional debe realizar la solicitud de excepción de pico y placa por la página web de la SDM <a href="https://www.movilidadbogota.gov.co/web/SIMUR/excepciones/login/" target="_blank" rel="noopener noreferrer">https://www.movilidadbogota.gov.co/web/SIMUR/excepciones/login/</a></p>
                                                                        <li>La persona debe estar inscrita en el registro de localización y caracterización de Minsalud o de lo contrario aportar certificación de discapacidad expedida en los términos de la circular externa 009 de 2017 de la Superintendencia Nacional de Salud.</li>
                                                                        <li>El vehículo debe estar matriculado en Bogotá los municipios conurbados.</li>
                                                                    </ol>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- /#fin _exc7 -->

                                                        <!-- collapse_exc8 -->
                                                        <div class='panel panel-default'>
                                                            <div class='panel-heading' role='tab' id='heading_exc8'>
                                                                <h4 class='panel-title'>
                                                                    <a role='button' data-toggle='collapse' data-parent='#accordion_excepcion' href='#collapse_exc8' aria-expanded='true' aria-controls='collapse_exc8'>
                                                                        h. Vehículos de empresas de servicios públicos domiciliarios. (Exclusivamente para mantenimiento y reparación de redes).
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id='collapse_exc8' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_exc8'>
                                                                <div class='panel-body'>
                                                                    <ol>
                                                                        <p>De manera general, todo vehículo que quiera ser exceptuado de la medida de Pico y Placa debe tener actualizado y vigente en el RUNT.</p>
                                                                        <li>Seguro Obligatorio de Accidentes de Tránsito.</li>
                                                                        <li>Revisión Técnico Mecánica.</li>
                                                                        <p>Adicional debe realizar la solicitud de excepción de pico y placa por la página web de la SDM <a href="https://www.movilidadbogota.gov.co/web/SIMUR/excepciones/login/" target="_blank" rel="noopener noreferrer">https://www.movilidadbogota.gov.co/web/SIMUR/excepciones/login/</a></p>
                                                                        <li>Certificación suscrita por el representante legal de la empresa de servicios públicos domiciliarios (o quien haga sus veces), donde se indique que los vehículos a exceptuar prestan los servicios de mantenimiento, instalación o reparación de las redes de servicios públicos en Bogotá, la cual se entenderá rendida bajo la gravedad de juramento.</li>
                                                                        <li>Certificado de existencia y representación legal de la empresa de servicios públicos domiciliarios con vigencia no mayor a treinta (30) días a la fecha de radicación del trámite. Este requisito será para efectos de control y verificación de la SDM.</li>
                                                                    </ol>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- /#fin _exc8 -->

                                                        <!-- collapse_exc9 -->
                                                        <div class='panel panel-default'>
                                                            <div class='panel-heading' role='tab' id='heading_exc9'>
                                                                <h4 class='panel-title'>
                                                                    <a role='button' data-toggle='collapse' data-parent='#accordion_excepcion' href='#collapse_exc9' aria-expanded='true' aria-controls='collapse_exc9'>
                                                                        i. Vehículos destinados al control del tráfico y grúas.
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id='collapse_exc9' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_exc9'>
                                                                <div class='panel-body'>
                                                                    <p>De manera general, todo vehículo que quiera ser exceptuado de la medida de Pico y Placa debe tener actualizado y vigente en el RUNT.</p>
                                                                    <li>Seguro Obligatorio de Accidentes de Tránsito.</li>
                                                                    <li>Revisión Técnico Mecánica.</li>
                                                                    <p>Adicional debe realizar la solicitud de excepción de pico y placa por la página web de la SDM <a href="https://www.movilidadbogota.gov.co/web/SIMUR/excepciones/login/" target="_blank" rel="noopener noreferrer">https://www.movilidadbogota.gov.co/web/SIMUR/excepciones/login/</a></p>
                                                                    <li>Certificación suscrita por el representante legal de la empresa donde se especifique que el automotor es destinado al control del tráfico y grúas se identifique plenamente el vehículo, con fecha de expedición no superior a treinta (30) días hábiles, la que se entenderá rendida bajo la gravedad de juramento.</li>
                                                                    <li>Copia del acto administrativo y/o certificación de existencia y representación legal que faculta a la persona que emite la certificación, del literal precedente.</li>
                                                                    <li>Copia del contrato suscrito con la empresa que presta el servicio, cuando sea el caso.</li>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- /#fin _exc9 -->

                                                        <!-- collapse_exc10 -->
                                                        <div class='panel panel-default'>
                                                            <div class='panel-heading' role='tab' id='heading_exc10'>
                                                                <h4 class='panel-title'>
                                                                    <a role='button' data-toggle='collapse' data-parent='#accordion_excepcion' href='#collapse_exc10' aria-expanded='true' aria-controls='collapse_exc10'>
                                                                        j. Vehículos de control de emisiones y vertimientos.
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id='collapse_exc10' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_exc10'>
                                                                <div class='panel-body'>
                                                                    <p>De manera general, todo vehículo que quiera ser exceptuado de la medida de Pico y Placa debe tener actualizado y vigente en el RUNT.</p>
                                                                    <ol>
                                                                        <li>Seguro Obligatorio de Accidentes de Tránsito.</li>
                                                                        <li>Revisión Técnico Mecánica.</li>
                                                                        <p>Adicional debe realizar la solicitud de excepción de pico y placa por la página web de la SDM <a href="https://www.movilidadbogota.gov.co/web/SIMUR/excepciones/login/" target="_blank" rel="noopener noreferrer">https://www.movilidadbogota.gov.co/web/SIMUR/excepciones/login/</a></p>
                                                                        <li>Certificación suscrita por el funcionario competente donde se especifique el servicio que se presta con el automotor con indicación de la placa del vehículo a exceptuar, con fecha de expedición no superior a treinta (30) días hábiles, la que se entenderá rendida bajo la gravedad de juramento.</li>
                                                                        <li>Copia del acto administrativo que le otorga competencia a la persona que suscribe la certificación del literal b.</li>
                                                                    </ol>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- /#fin _exc10 -->

                                                        <!-- collapse_exc11 -->
                                                        <div class='panel panel-default'>
                                                            <div class='panel-heading' role='tab' id='heading_exc11'>
                                                                <h4 class='panel-title'>
                                                                    <a role='button' data-toggle='collapse' data-parent='#accordion_excepcion' href='#collapse_exc11' aria-expanded='true' aria-controls='collapse_exc11'>
                                                                        k. Motocicletas.
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                        </div>
                                                        <!-- /#fin _exc11 -->

                                                        <!-- collapse_exc12 -->
                                                        <div class='panel panel-default'>
                                                            <div class='panel-heading' role='tab' id='heading_exc12'>
                                                                <h4 class='panel-title'>
                                                                    <a role='button' data-toggle='collapse' data-parent='#accordion_excepcion' href='#collapse_exc12' aria-expanded='true' aria-controls='collapse_exc12'>
                                                                        l. Vehículos asignados por la Unidad Nacional de Protección.
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id='collapse_exc12' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_exc12'>
                                                                <div class='panel-body'>
                                                                    <p>De manera general, todo vehículo que quiera ser exceptuado de la medida de Pico y Placa debe tener actualizado y vigente en el RUNT.</p>
                                                                    <ol>
                                                                        <li>Seguro Obligatorio de Accidentes de Tránsito.</li>
                                                                        <li>Revisión Técnico Mecánica.</li>
                                                                        <p>Adicional debe realizar la solicitud de excepción de pico y placa por la página web de la SDM <a href="https://www.movilidadbogota.gov.co/web/SIMUR/excepciones/login/" target="_blank" rel="noopener noreferrer">https://www.movilidadbogota.gov.co/web/SIMUR/excepciones/login/</a></p>
                                                                        <li>Certificación suscrita por el funcionario competente donde se especifique que, los vehículos a los cuales solicita la inscripción corresponden a los destinados para la protección de personas con medidas de seguridad garantizadas por la UNP, con fecha de expedición no superior a treinta (30) días hábiles, la que se entenderá rendida bajo la gravedad de juramento.</li>
                                                                        <li>Copia del acto administrativo que le confiere competencia a la persona que realiza el trámite.</li>
                                                                    </ol>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- /#fin _exc12 -->

                                                        <!-- collapse_exc13 -->
                                                        <div class='panel panel-default'>
                                                            <div class='panel-heading' role='tab' id='heading_exc13'>
                                                                <h4 class='panel-title'>
                                                                    <a role='button' data-toggle='collapse' data-parent='#accordion_excepcion' href='#collapse_exc13' aria-expanded='true' aria-controls='collapse_exc13'>
                                                                        m. Vehículos de medios de comunicación.
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id='collapse_exc13' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_exc13'>
                                                                <div class='panel-body'>
                                                                    <p>De manera general, todo vehículo que quiera ser exceptuado de la medida de Pico y Placa debe tener actualizado y vigente en el RUNT.</p>
                                                                    <ol>
                                                                        <li>Seguro Obligatorio de Accidentes de Tránsito.</li>
                                                                        <li>Revisión Técnico Mecánica.</li>
                                                                        <p>Adicional debe realizar la solicitud de excepción de pico y placa por la página web de la SDM <a href="https://www.movilidadbogota.gov.co/web/SIMUR/excepciones/login/" target="_blank" rel="noopener noreferrer">https://www.movilidadbogota.gov.co/web/SIMUR/excepciones/login/</a></p>
                                                                        <li>El vehículo debe ser propiedad del medio de comunicación.</li>
                                                                        <li>Copia de la licencia donde se autorice a la empresa como medio de comunicación, expedida por la Autoridad Nacional o quien haga sus veces.</li>
                                                                    </ol>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- /#fin _exc13 -->

                                                        <!-- collapse_exc14 -->
                                                        <div class='panel panel-default'>
                                                            <div class='panel-heading' role='tab' id='heading_exc14'>
                                                                <h4 class='panel-title'>
                                                                    <a role='button' data-toggle='collapse' data-parent='#accordion_excepcion' href='#collapse_exc14' aria-expanded='true' aria-controls='collapse_exc14'>
                                                                        n. Vehículos de autoridades judiciales.
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id='collapse_exc14' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_exc14'>
                                                                <div class='panel-body'>
                                                                    <p>De manera general, todo vehículo que quiera ser exceptuado de la medida de Pico y Placa debe tener actualizado y vigente en el RUNT.</p>
                                                                    <ol>
                                                                        <li>Seguro Obligatorio de Accidentes de Tránsito.</li>
                                                                        <li>Revisión Técnico Mecánica.</li>
                                                                        <p>Adicional debe realizar la solicitud de excepción de pico y placa por la página web de la SDM <a href="https://www.movilidadbogota.gov.co/web/SIMUR/excepciones/login/" target="_blank" rel="noopener noreferrer">https://www.movilidadbogota.gov.co/web/SIMUR/excepciones/login/</a></p>
                                                                        <li>Certificación suscrita por autoridad competente donde se indique el cargo, vigencia del nombramiento y especificación de la jurisdicción y municipio donde se presta el servicio en calidad de autoridad judicial o procurador delegado ante las altas cortes.</li>
                                                                        <li>Copia del acto administrativo que le otorga competencia a la persona que suscribe la certificación.</li>
                                                                    </ol>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- /#fin _exc14 -->

                                                        <!-- collapse_exc15 -->
                                                        <div class='panel panel-default'>
                                                            <div class='panel-heading' role='tab' id='heading_exc15'>
                                                                <h4 class='panel-title'>
                                                                    <a role='button' data-toggle='collapse' data-parent='#accordion_excepcion' href='#collapse_exc15' aria-expanded='true' aria-controls='collapse_exc15'>
                                                                        o. Vehículos de transporte escolar.
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id='collapse_exc15' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_exc15'>
                                                                <div class='panel-body'>
                                                                    <p>De manera general, todo vehículo que quiera ser exceptuado de la medida de Pico y Placa debe tener actualizado y vigente en el RUNT.</p>
                                                                    <ol>
                                                                        <li>Seguro Obligatorio de Accidentes de Tránsito.</li>
                                                                        <li>Revisión Técnico Mecánica.</li>
                                                                        <p>Adicional debe realizar la solicitud de excepción de pico y placa por la página web de la SDM <a href="https://www.movilidadbogota.gov.co/web/SIMUR/excepciones/login/" target="_blank" rel="noopener noreferrer">https://www.movilidadbogota.gov.co/web/SIMUR/excepciones/login/</a></p>
                                                                        <li>Estar registrado como ruta de transporte escolar ante la SDM.</li>
                                                                        <p>Para acceder a la inscripción en el registro de ruta escolar siga los pasos de la guía de trámites y servicios accediendo a través de la página <a href="https://bogota.gov.co/servicios/guia-de-tramites-y-servicios/registro-de-ruta-de-transporte-escolar-sdm" target="_blank" rel="noopener noreferrer">https://bogota.gov.co/servicios/guia-de-tramites-y-servicios/registro-de-ruta-de-transporte-escolar-sdm</a></p>
                                                                    </ol>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- /#fin _exc15 -->

                                                        <!-- collapse_exc16 -->
                                                        <div class='panel panel-default'>
                                                            <div class='panel-heading' role='tab' id='heading_exc16'>
                                                                <h4 class='panel-title'>
                                                                    <a role='button' data-toggle='collapse' data-parent='#accordion_excepcion' href='#collapse_exc16' aria-expanded='true' aria-controls='collapse_exc16'>
                                                                        p. Vehículos destinados a la enseñanza automovilística. (Tipo automóvil, campero y camioneta).
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id='collapse_exc16' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_exc16'>
                                                                <div class='panel-body'>
                                                                    <p>De manera general, todo vehículo que quiera ser exceptuado de la medida de Pico y Placa debe tener actualizado y vigente en el RUNT.</p>
                                                                    <ol>
                                                                        <li>Seguro Obligatorio de Accidentes de Tránsito.</li>
                                                                        <li>Revisión Técnico Mecánica.</li>
                                                                        <p>Adicional debe realizar la solicitud de excepción de pico y placa por la página web de la SDM <a href="https://www.movilidadbogota.gov.co/web/SIMUR/excepciones/login/" target="_blank" rel="noopener noreferrer">https://www.movilidadbogota.gov.co/web/SIMUR/excepciones/login/</a></p>
                                                                        <li>Tener Plan Estratégico de Seguridad Vial PESV registrado.</li>
                                                                        <li>El vehículo debe estar registrado en el RUNT como vehículo de enseñanza de lo contrario la preinscripción será rechazada.</li>
                                                                    </ol>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- /#fin _exc16 -->

                                                        <!-- collapse_exc17 -->
                                                        <div class='panel panel-default'>
                                                            <div class='panel-heading' role='tab' id='heading_exc17'>
                                                                <h4 class='panel-title'>
                                                                    <a role='button' data-toggle='collapse' data-parent='#accordion_excepcion' href='#collapse_exc17' aria-expanded='true' aria-controls='collapse_exc17'>
                                                                        q. Vehículos híbridos cuya motorización sea por combustión (diésel o gasolina) y funcionen, alternada o simultáneamente, con motor eléctrico.
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id='collapse_exc17' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_exc17'>
                                                                <div class='panel-body'>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- /#fin _exc17 -->


                                                        <!-- collapse_exc19 -->
                                                        <div class='panel panel-default'>
                                                            <div class='panel-heading' role='tab' id='heading_exc19'>
                                                                <h4 class='panel-title'>
                                                                    <a role='button' data-toggle='collapse' data-parent='#accordion_excepcion' href='#collapse_exc19' aria-expanded='true' aria-controls='collapse_exc19'>
                                                                        s. Los vehículos cuyo propietario o locatario haya solicitado voluntariamente el Permiso Especial de Acceso a Área con Restricción Vehicular (“Pico y Placa Solidario”) y haya aceptado y cumplido todos los términos y condiciones, establecidos por la Secretaría Distrital de Movilidad.**
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id='collapse_exc19' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_exc19'>
                                                                <div class='panel-body'>
                                                                    <p></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- /#fin _exc19 -->

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- /#fin _pyp10 -->

                                        <!-- collapse_pyp11 -->
                                        <!-- <div class='panel panel-default'>
                                            <div class='panel-heading' role='tab' id='heading_pyp11'>
                                                <h4 class='panel-title'>
                                                    <a role='button' data-toggle='collapse' data-parent='#accordion_pypabc' href='#collapse_pyp11' aria-expanded='true' aria-controls='collapse_pyp11'>
                                                        6. ¿Qué sucede con la excepción para el personal de salud?
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id='collapse_pyp11' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_pyp11'>
                                                <div class='panel-body'>
                                                    <p>La excepción para el personal de la salud está vigente en Bogotá hasta cuando lo esté la emergencia sanitaria decretada por el Gobierno Nacional.</p>
                                                </div>
                                            </div>
                                        </div> -->
                                        <!-- /#fin _pyp11 -->



                                        <!-- collapse_pyp13 -->
                                        <div class='panel panel-default'>
                                            <div class='panel-heading' role='tab' id='heading_pyp13'>
                                                <h4 class='panel-title'>
                                                    <a role='button' data-toggle='collapse' data-parent='#accordion_pypabc' href='#collapse_pyp13' aria-expanded='true' aria-controls='collapse_pyp13'>
                                                        6. ¿Cuáles excepciones son automáticas y semiautomáticas?
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id='collapse_pyp13' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_pyp13'>
                                                <div class='panel-body'>
                                                    <p>El acto administrativo que define que es automático y semiautomático es la resolución 118139, el acto administrativo que establece las excepciones es el decreto 003 de 2023</p>
                                                    <p>Despliegue las excepciones contempladas.</p>
                                                    <!-- <p>Serán de trámites automáticos aquellos en que el ciudadano realice la inscripción del vehículo para consulta inmediata. Despliegue las excepciones contempladas.</p> -->

                                                    <div class='panel-group ' id='accordion_auto' role='tablist ' aria-multiselectable='true'>

                                                        <!-- collapse_auto1 -->
                                                        <div class='panel panel-default'>
                                                            <div class='panel-heading' role='tab' id='heading_auto1'>
                                                                <h4 class='panel-title'>
                                                                    <a role='button' data-toggle='collapse' data-parent='#accordion_auto' href='#collapse_auto1' aria-expanded='true' aria-controls='collapse_auto1'>
                                                                        a. Trámites Automáticos
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id='collapse_auto1' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_auto1'>
                                                                <div class='panel-body'>
                                                                    <ol>
                                                                        <li>Vehículos eléctricos, de cero emisiones contaminantes e híbridos.</li>
                                                                        <li>Vehículos de servicio diplomático o consular.</li>
                                                                        <li>Los vehículos escolares de propiedad de establecimientos educativos públicos y privados de la ciudad de Bogotá, los cuales se inscribirán automáticamente con el listado que trata el artículo 6º del Decreto Distrital 036 de 2009 o con la norma que la modifique, adicione o sustituya.</li>
                                                                        <li>Vehículos utilizados para el transporte de personas con discapacidad que se encuentren en el RLCPD de conformidad con lo establecido en la Resolución 113 de 2020 expedida por el Ministerio de Salud, o con la norma que la modifique, adicione o sustituya. <br>También aplicará para los vehículos dispuestos para el transporte de personas con discapacidad, que se encuentren inscritos en la base de datos histórica del RLCPD de la Secretaría Distrital de Salud, solo durante el periodo de transitoriedad de la Resolución 113 de 2020 del Ministerio de Salud y Protección social, o por el periodo contemplado en la norma que la adicione, modifique o sustituya.</li>
                                                                        <li>Vehículos con una ocupación de tres (3) o más personas incluyendo el conductor.</li>
                                                                    </ol>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- /#fin _auto1 -->

                                                        <!-- collapse_auto2 -->
                                                        <div class='panel panel-default'>
                                                            <div class='panel-heading' role='tab' id='heading_auto2'>
                                                                <h4 class='panel-title'>
                                                                    <a role='button' data-toggle='collapse' data-parent='#accordion_auto' href='#collapse_auto2' aria-expanded='true' aria-controls='collapse_auto2'>
                                                                        b. Trámites Semiautomáticos
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id='collapse_auto2' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_auto2'>
                                                                <div class='panel-body'>
                                                                    <p>Y los trámites semiautomáticos, son aquellos donde los requisitos documentales deberán alimentarse en el sistema por parte del solicitante. Para lo anterior, se realizará una preinscripción por parte del interesado quien es el responsable de la información que aporte a la entidad. Despliegue las excepciones contempladas.</p>
                                                                    <ol>
                                                                        <li>Vehículos utilizados para el transporte de personas con Discapacidad que no se encuentren en el Registro para la Localización y Caracterización de Personas con Discapacidad RLCPD del Ministerio de Salud y Protección Social pero que cuenten con certificación de discapacidad en los términos de la Circular externa 009 de 2017 de la Superintendencia Nacional de Salud, en concordancia con lo señalado en el artículo 24 de la Resolución 113 de 2020, expedida por el Ministerio de Salud y Protección Social, o la norma que la modifique, sustituya o derogue.</li>
                                                                        <li>Caravana Presidencial.</li>
                                                                        <li>Carrozas Fúnebres.</li>
                                                                        <li>Vehículos de organismos de seguridad del Estado.</li>
                                                                        <li>Vehículos de emergencia.</li>
                                                                        <li>Vehículos de empresas de servicios públicos domiciliarios.</li>
                                                                        <li>Vehículos destinados al control del tráfico y grúas.</li>
                                                                        <li>Vehículos de control de emisiones y vertimientos.</li>
                                                                        <li>Vehículos asignados por la Unidad Nacional de Protección a ciudadanos que tengan medidas de protección.</li>
                                                                        <li>Vehículos de medios de comunicación.</li>
                                                                        <li>Vehículos de autoridades judiciales.</li>
                                                                        <li>Vehículos particulares destinados a la enseñanza automovilística.</li>
                                                                    </ol>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- /#fin _auto2 -->

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /#fin _pyp13 -->

                                        <!-- collapse_pyp14 -->
                                        <div class='panel panel-default'>
                                            <div class='panel-heading' role='tab' id='heading_pyp14'>
                                                <h4 class='panel-title'>
                                                    <a role='button' data-toggle='collapse' data-parent='#accordion_pypabc' href='#collapse_pyp14' aria-expanded='true' aria-controls='collapse_pyp14'>
                                                        7. ¿Cuáles son los pasos para solicitar la inscripción?
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id='collapse_pyp14' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_pyp14'>
                                                <div class='panel-body'>
                                                    <p>Para excepciones con resultado es automático el ciudadano deberá:</p>
                                                    <ol>
                                                        <li>Registrarse en la plataforma virtual.</li>
                                                        <li>Diligenciar la solicitud de excepción</li>
                                                        <li>Se valida tipo de combustible, RTM, SOAT con el RUNT.</li>
                                                        <li>El Sistema genera respuesta.</li>
                                                        <p>Para excepciones con resultado semiautomático, adicional a los pasos anteriores, el ciudadano recibirá:</p>
                                                        <li>Número de consecutivo de su solicitud.</li>
                                                        <li>Respuesta al correo electrónico registrado.</li>
                                                    </ol>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /#fin _pyp14 -->

                                        <!-- collapse_pyp15 -->
                                        <div class='panel panel-default'>
                                            <div class='panel-heading' role='tab' id='heading_pyp15'>
                                                <h4 class='panel-title'>
                                                    <a role='button' data-toggle='collapse' data-parent='#accordion_pypabc' href='#collapse_pyp15' aria-expanded='true' aria-controls='collapse_pyp15'>
                                                        8. ¿Cómo sé si fue aprobada la inscripción de mi vehículo?
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id='collapse_pyp15' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_pyp15'>
                                                <div class='panel-body'>
                                                    <p>El ciudadano deberá ingresar a través de la página web www.movilidadbogota.gov.co en el aviso Pico y Placa, todo lo que debe saber y dar clic en botón: “Consulta de vehículos exceptuados”.</p>
                                                    <p>En caso de ser negado el trámite de inscripción, el sistema notificará al correo del ciudadano el rechazo de su solicitud.</p>
                                                    <p>Tenga en cuenta que, para las solicitudes de trámites semiautomáticos, el sistema asignará un número consecutivo en el momento de registro y recibirá respuesta al correo electrónico registrado.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /#fin _pyp15 -->

                                        <!-- collapse_pyp16 -->
                                        <div class='panel panel-default'>
                                            <div class='panel-heading' role='tab' id='heading_pyp16'>
                                                <h4 class='panel-title'>
                                                    <a role='button' data-toggle='collapse' data-parent='#accordion_pypabc' href='#collapse_pyp16' aria-expanded='true' aria-controls='collapse_pyp16'>
                                                        9. ¿Cuál es el término de respuesta a la solicitud de inscripción?
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id='collapse_pyp16' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_pyp16'>
                                                <div class='panel-body'>
                                                    <p>El término máximo para resolver el trámite de inscripción en el registro de vehículos exceptuados de la restricción de circulación vehicular por parte de la Secretaría Distrital de Movilidad será máximo de quince (15) días calendario.</p>
                                                    <p>La única excepción que tendrá un término de gestión especial será, para las personas con discapacidad, cuyo término será de cinco (5) días calendario contados a partir de la fecha de preinscripción.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /#fin _pyp16 -->

                                        <!-- collapse_pyp17 -->
                                        <div class='panel panel-default'>
                                            <div class='panel-heading' role='tab' id='heading_pyp17'>
                                                <h4 class='panel-title'>
                                                    <a role='button' data-toggle='collapse' data-parent='#accordion_pypabc' href='#collapse_pyp17' aria-expanded='true' aria-controls='collapse_pyp17'>
                                                        10. Para realizar la solicitud de inscripción a la excepción, ¿debo adjuntar copia del soat, revisión técnico mecánica y licencia de tránsito?
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id='collapse_pyp17' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_pyp17'>
                                                <div class='panel-body'>
                                                    <p>No. La Secretaría Distrital de Movilidad valida de manera automática en la plataforma del Registro Único Nacional de Tránsito - RUNT, y verificará la vigencia de estos requisitos.</p>
                                                    <p>Así mismo, para algunas excepciones que lo requieran se validará:</p>
                                                    <ul>
                                                        <li>Tipo de combustible (aplica para vehículos eléctricos e híbridos).</li>
                                                        <li>La propiedad del automotor (aplica para carrozas fúnebres, vehículos de medios de comunicación, vehículos de atención médica domiciliaria y vehículos de autoridades judiciales).</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /#fin _pyp17 -->

                                        <!-- collapse_pyp18 -->
                                        <div class='panel panel-default'>
                                            <div class='panel-heading' role='tab' id='heading_pyp18'>
                                                <h4 class='panel-title'>
                                                    <a role='button' data-toggle='collapse' data-parent='#accordion_pypabc' href='#collapse_pyp18' aria-expanded='true' aria-controls='collapse_pyp18'>
                                                        11. ¿Qué significa que un vehículo está Preinscrito?
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id='collapse_pyp18' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_pyp18'>
                                                <div class='panel-body'>
                                                    <p>Son aquellos vehículos que el trámite es semiautomático, los cuales desde el momento del registro en la plataforma tecnológica quedarán con un estado temporal de preinscripción, hasta que la Entidad revise los requisitos documentales aportados y emita una respuesta definitiva, siempre y cuando cumpla con la totalidad de requisitos.</p>
                                                    <p>Es de aclarar que, este periodo de preinscripción no superará los (15) días calendario, tiempo en el cual la Secretaría de Movilidad aprobará o negará la inscripción según sea el caso.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /#fin _pyp18 -->

                                        <!-- collapse_pyp19 -->
                                        <div class='panel panel-default'>
                                            <div class='panel-heading' role='tab' id='heading_pyp19'>
                                                <h4 class='panel-title'>
                                                    <a role='button' data-toggle='collapse' data-parent='#accordion_pypabc' href='#collapse_pyp19' aria-expanded='true' aria-controls='collapse_pyp19'>
                                                        12. ¿La Secretaría Distrital de Movilidad entrega algún documento o permiso para el tránsito en horario de Pico y Placa?
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id='collapse_pyp19' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_pyp19'>
                                                <div class='panel-body'>
                                                    <p>No, la información podrá ser consultada únicamente en línea. La entidad no entregará ningún documento o permiso, ya que todo el trámite es en línea.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /#fin _pyp19 -->

                                        <!-- collapse_pyp20 -->
                                        <div class='panel panel-default'>
                                            <div class='panel-heading' role='tab' id='heading_pyp20'>
                                                <h4 class='panel-title'>
                                                    <a role='button' data-toggle='collapse' data-parent='#accordion_pypabc' href='#collapse_pyp20' aria-expanded='true' aria-controls='collapse_pyp20'>
                                                        13. ¿Puedo inscribir un vehículo matriculado fuera de Bogotá?
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id='collapse_pyp20' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_pyp20'>
                                                <div class='panel-body'>
                                                    <p>Sí, pero tenga en cuenta que, para la excepción de vehículos para uso de personas con discapacidad, solo se podrán inscribir vehículos que se encuentren matriculados o registrados en Bogotá y en los municipios de Bojacá, Cajicá, Chía, Cogua, Cota, El Rosal, Facatativá, Funza, Gachancipá, La Calera, Madrid, Mosquera, Nemocón, Soacha, Sibaté, Sopó, Subachoque, Tabio, Tenjo, Tocancipá, Zipacón y Zipaquirá.; siempre que exista en dicho municipio organismo de tránsito.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /#fin _pyp20 -->

                                        <!-- collapse_pyp21 -->
                                        <div class='panel panel-default'>
                                            <div class='panel-heading' role='tab' id='heading_pyp21'>
                                                <h4 class='panel-title'>
                                                    <a role='button' data-toggle='collapse' data-parent='#accordion_pypabc' href='#collapse_pyp21' aria-expanded='true' aria-controls='collapse_pyp21'>
                                                        14. Si no tengo acceso a un computador ¿Cómo puedo realizar la solicitud de inscripción de mi automotor para la Excepción de Pico y Placa?
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id='collapse_pyp21' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_pyp21'>
                                                <div class='panel-body'>
                                                    <p>Desde cualquier dispositivo con conexión a internet podrá realizar el proceso de solicitud de registro en la base de vehículos exceptuados, tenga en cuenta que debe tener los documentos que requiere aportar de acuerdo al tipo de excepción.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /#fin _pyp21 -->

                                        <!-- collapse_pyp22 -->
                                        <div class='panel panel-default'>
                                            <div class='panel-heading' role='tab' id='heading_pyp22'>
                                                <h4 class='panel-title'>
                                                    <a role='button' data-toggle='collapse' data-parent='#accordion_pypabc' href='#collapse_pyp22' aria-expanded='true' aria-controls='collapse_pyp22'>
                                                        15. ¿Qué es el registro de localización y caracterización de personas con discapacidad (el RLCPD)? y ¿Qué puedo hacer si no estoy inscrito?
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id='collapse_pyp22' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_pyp22'>
                                                <div class='panel-body'>
                                                    <p>El RLCPD es una base de datos del Ministerio de Salud y Protección Social, donde se encuentran registradas las personas con algún tipo de discapacidad, su ubicación y el estado de su salud.</p>
                                                    <p>Si usted es una persona con discapacidad y ya fue certificado(a) en algún tiempo como lo señala la Circular 009 de 2017, puede realizar el trámite semiautomático y aportar la certificación de discapacidad la cual será validada por los funcionarios de la Dirección de Atención al Ciudadano.</p>
                                                    <p>No obstante, si usted es una persona con discapacidad que no cuenta con dicha certificación, o nunca ha sido calificada su discapacidad por la EPS, debe seguir los pasos señalados por el Ministerio de Salud y Protección Social: ingresando al link de la guía de trámites y servicios de la Alcaldía mayor de Bogotá: https://bogota.gov.co/servicios/guia-de-tramites-y-servicios/inscripcion-en-el-registro-para-la-localizacion-y-caracterizacion-de-las-personas-con-discapacidad y allí adelantar el registro del inscripción en el RLCPD.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /#fin _pyp22 -->

                                        <!-- collapse_pyp23 -->
                                        <div class='panel panel-default'>
                                            <div class='panel-heading' role='tab' id='heading_pyp23'>
                                                <h4 class='panel-title'>
                                                    <a role='button' data-toggle='collapse' data-parent='#accordion_pypabc' href='#collapse_pyp23' aria-expanded='true' aria-controls='collapse_pyp23'>
                                                        16. ¿Qué vigencia tiene el registro en la base de datos de vehículos exceptuados?
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id='collapse_pyp23' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_pyp23'>
                                                <div class='panel-body'>
                                                    <p>El registro tendrá una vigencia de un (1) año, por lo tanto, una vez cumplido este término cada registro estará sujeto a la renovación, a excepción de las siguientes categorías:</p>
                                                    <ul>
                                                        <li>Vehículos eléctricos e híbridos.</li>
                                                        <li>Vehículos de servicio diplomático o consular.</li>
                                                        <li>Vehículos para el uso o transporte de personas con discapacidad. </li>
                                                        <li>Carrozas fúnebres.</li>
                                                    </ul>
                                                    <!-- <p>Es importante tener presente que, la inscripción en el registro de vehículos exceptuados de la restricción de circulación vehicular será válida mientras subsistan las condiciones que configuran la excepción y estará sujeta a la verificación y depuración de conformidad con lo señalado en el Decreto 846 de 2019 y/o la norma que la modifique, adicione, sustituya o derogue.</p> -->
                                                    <p>La inscripción en el registro de vehículos exceptuados es válida mientras las condiciones que configuran la excepción estén vigentes y está sujeta a verificación y depuración, de conformidad con lo señalado en el Decreto 846 de 2019.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /#fin _pyp23 -->

                                        <!-- collapse_pyp24 -->
                                        <div class='panel panel-default'>
                                            <div class='panel-heading' role='tab' id='heading_pyp24'>
                                                <h4 class='panel-title'>
                                                    <a role='button' data-toggle='collapse' data-parent='#accordion_pypabc' href='#collapse_pyp24' aria-expanded='true' aria-controls='collapse_pyp24'>
                                                        17. ¿A partir de cuando empieza a regir la Resolución 118139 de 2021?
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id='collapse_pyp24' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_pyp24'>
                                                <div class='panel-body'>
                                                    <p>Comenzará a regir sesenta (60) días calendario, posteriores a la fecha de su promulgación. Las solicitudes radicadas antes de esta fecha seguirán rigiéndose por lo dispuesto en la Resolución 011 de 2018.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /#fin _pyp24 -->

                                        <!-- collapse_pyp25 -->
                                        <div class='panel panel-default'>
                                            <div class='panel-heading' role='tab' id='heading_pyp25'>
                                                <h4 class='panel-title'>
                                                    <a role='button' data-toggle='collapse' data-parent='#accordion_pypabc' href='#collapse_pyp25' aria-expanded='true' aria-controls='collapse_pyp25'>
                                                        18. ¿Si ya tengo mi vehículo con un registro activo, debe registrarse nuevamente?
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id='collapse_pyp25' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_pyp25'>
                                                <div class='panel-body'>
                                                    <p>No, siempre y cuando el registro de inscripción esté vigente.</p>

                                                    <hr>

                                                    <h4>Conozca qué es el Plan Estratégico de Seguridad Vial (PESV)</h4>

                                                    <p>Es el Plan Estratégico de Seguridad Vial (PESV) , es una herramienta de gestión que contiene las acciones, mecanismos, estrategias y medidas de planificación, implementación, seguimiento y mejora que deben aportar las diferentes entidades, organizaciones o empresas del sector público o privado de conformidad con el Art. 110 del Decreto Ley 2106 de 2019, encaminadas a generar hábitos, comportamientos y conductas seguras en las vías para prevenir riesgos, reducir la accidentalidad vial y disminuir sus efectos nocivos. Art. 1° del Decreto 1252 de 2021.</p>
                                                    <p>El PESV debe presentarse de manera digital a través del correo <a href="mailto:contactociudadano@movilidadbogota.gov.co">contactociudadano@movilidadbogota.gov.co</a></p>
                                                    <p>Dentro de los 15 días hábiles siguientes a la radicación, la Dirección de Planeación de la Movilidad emitirá un oficio con observaciones de validación o no.</p>
                                                    <p>Cualquier información adicional relacionado con el diseño e implementación del PESV puede solicitarla a través del correo <a href="mailto:pesv@movilidadbogota.gov.co">pesv@movilidadbogota.gov.co</a>, o puede ingresar a la pagina <a href="https://bogota.gov.co/servicios/guia-de-tramites-y-servicios/planes-estrategicos-de-seguridad-vial-pesv-sdm" target="_blank" rel="noopener noreferrer">https://bogota.gov.co/servicios/guia-de-tramites-y-servicios/planes-estrategicos-de-seguridad-vial-pesv-sdm</a></p>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- /#fin _pyp25 -->
                                        <hr>
                                        <div class="documentos">
                                            <div class="title title-h3">
                                                <h4>Descargables</h4>
                                            </div>
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/08-01-2023/decreto-003-de-2023_0.pdf" target="_blank" rel="noopener noreferrer" download="" title="Decreto No. 003 de 06 de enero de 2023">
                                                        <img class="media-object" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/08-01-2023/pdf.png" alt="icono de documento pdf" width="48px">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/08-01-2023/decreto-003-de-2023_0.pdf" target="_blank" rel="noopener noreferrer" download="" title="Ir a descarga de Decreto No. 003 de 06 de enero de 2023">
                                                        <h4 class="media-heading">Decreto No. 003 de 06 de enero de 2023</h4>
                                                    </a>
                                                    <p>"Por medio del cual se dictan disposiciones para el melor ordenamiento del tránsito de vehículos automotores de servicio particular dentro del perímetro urbano de Bogotá y se dictan otras disposiciones."</p>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/servicios/19-01-2022/resolucion_numero_118139_de_2021.pdf" target="_blank" rel="noopener noreferrer" download="" title="Decreto No. 003 de 06 de enero de 2023">
                                                        <img class="media-object" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/08-01-2023/pdf.png" alt="icono de documento pdf" width="48px">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/servicios/19-01-2022/resolucion_numero_118139_de_2021.pdf" target="_blank" rel="noopener noreferrer" download="" title="Ir a descarga de Decreto No. 003 de 06 de enero de 2023">
                                                        <h4 class="media-heading">Resolución 118139 de 2021</h4>
                                                    </a>
                                                    <p>“Mediante la cual se definen las condiciones para el trámite de inscripción de los vehículos particulares exceptuados de la restricción de circulación vehicular en la ciudad de Bogotá”</p>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/servicios/19-01-2022/abc_pico_y_placa.pdf" target="_blank" rel="noopener noreferrer" download="" title="Decreto No. 003 de 06 de enero de 2023">
                                                        <img class="media-object" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/08-01-2023/pdf.png" alt="icono de documento pdf" width="48px">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/servicios/19-01-2022/abc_pico_y_placa.pdf" target="_blank" rel="noopener noreferrer" download="" title="Ir a descarga de Decreto No. 003 de 06 de enero de 2023">
                                                        <h4 class="media-heading">Abecé de las Excepciones de Pico y Placa</h4>
                                                    </a>
                                                    <p>Abecé de las excepciones de Pico y Placa - Resolución 118139 de 2021</p>
                                                </div>
                                            </div>

                                        </div>
                                        <style>
                                            .documentos {
                                                font-size: 12pt;
                                                font-weight: 400;
                                                text-align: left;
                                                line-height: 1.3;
                                                font-style: normal;
                                                color: var(--color-negro);
                                            }

                                            .title-h3 h4 {
                                                font-size: 20px;
                                                font-weight: 700;
                                            }

                                            .documentos .media-left {
                                                padding: 8px;
                                            }

                                            .documentos .media-body {
                                                padding: 8px;
                                            }

                                            .documentos .media-body h4 {
                                                margin: 0px;
                                                font-size: 16px;
                                                font-weight: 700;

                                            }

                                            .documentos .media-body p {
                                                line-height: 1.2 !important;
                                                padding: 0px;
                                            }
                                        </style>



                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /#fin Bogota -->


                        <!-- collapse Región -->
                        <div class='panel panel-default  panel-region'>
                            <div class='panel-heading hp' role='tab' id='heading'>
                                <h4 class='panel-title'>
                                    <a role='button' data-toggle='collapse' data-parent='#accordion_pp' href='#collapse' aria-expanded='true' aria-controls='collapse'>
                                        Pico y Placa Regional
                                    </a>
                                </h4>
                            </div>
                            <div id='collapse' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading'>
                                <div class='panel-body'>

                                    <div class='panel-group ' id='accordionRegional' role='tablist ' aria-multiselectable='true'>

                                        <!-- collapse_pyp5 -->
                                        <div class='panel panel-default'>
                                            <div class='panel-heading' role='tab' id='heading_pyp5'>
                                                <h4 class='panel-title'>
                                                    <a role='button' data-toggle='collapse' data-parent='#accordionRegional' href='#collapse_pyp5' aria-expanded='true' aria-controls='collapse_pyp5'>
                                                        1. ¿Cómo funciona el Pico y Placa Regional?
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id='collapse_pyp5' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_pyp5'>
                                                <div class='panel-body'>
                                                    <p>El Pico y Placa Regional funciona el último día de todos los puentes festivos en los 9 corredores de ingreso a Bogotá. Para el retorno hasta el mediodía, no hay restricción. A partir de las 12:00 del mediodía se permite el ingreso a Bogotá de los vehículos con placas pares hasta las 4:00 p.m. y luego, de 4:00 p.m. a 8:00 p.m. se permite el ingreso de los vehículos con placas impares.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /#fin _pyp5 -->


                                        <!-- collapse_pyp6 -->
                                        <div class='panel panel-default'>
                                            <div class='panel-heading' role='tab' id='heading_pyp6'>
                                                <h4 class='panel-title'>
                                                    <a role='button' data-toggle='collapse' data-parent='#accordionRegional' href='#collapse_pyp6' aria-expanded='true' aria-controls='collapse_pyp6'>
                                                        2. ¿Cuáles son los nueve corredores donde aplica el Pico y Placa Regional?
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id='collapse_pyp6' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_pyp6'>
                                                <div class='panel-body'>
                                                    <p>Los corredores de ingreso donde aplica la medida de Pico y Placa Regional el último día de puentes festivos son:</p>
                                                    <ul>
                                                        <li>Autopista Norte: desde el peaje Andes hasta el portal Norte, sentido norte – sur.</li>
                                                        <li>Autopista Sur: desde el límite municipal de Soacha hasta la avenida Boyacá, sentido sur – norte.</li>
                                                        <li>Avenida Centenario (calle 13): desde el río Bogotá hasta la avenida Ciudad de Cali (avenida carrera 86), sentido occidente – oriente.</li>
                                                        <li>Avenida Calle 80: desde el puente de Guadua hasta el portal 80, sentido occidente – oriente.</li>
                                                        <li>Avenida Carrera 7: desde la calle 245 hasta la calle 183, sentido norte – sur.</li>
                                                        <li>Avenida Boyacá vía al Llano: desde el túnel Argelino Durán Quintero hasta la antigua vía al Llano, sentido sur – norte.</li>
                                                        <li>Vía Suba Cota: desde el río Bogotá hasta la avenida calle 170, sentido norte – sur.</li>
                                                        <li>Vía la Calera: desde el peaje Patios hasta la avenida carrera 7, sentido oriente – occidente.</li>
                                                        <li>Vía a Choachí: desde la vía a Monserrate hasta la avenida circunvalar, sentido oriente – occidente.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /#fin _pyp6 -->

                                        <!-- collapse_pyp7 -->
                                        <div class='panel panel-default'>
                                            <div class='panel-heading' role='tab' id='heading_pyp7'>
                                                <h4 class='panel-title'>
                                                    <a role='button' data-toggle='collapse' data-parent='#accordionRegional' href='#collapse_pyp7' aria-expanded='true' aria-controls='collapse_pyp7'>
                                                        3. ¿La medida de Pico y Placa Regional para el ingreso a Bogotá fue concertada con los municipios aledaños?
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id='collapse_pyp7' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_pyp7'>
                                                <div class='panel-body'>
                                                    <p>Sí. La Alcaldesa de Bogotá y el Secretario Distrital de Movilidad se reunieron con el Gobernador de Cundinamarca y los alcaldes de los municipios aledaños para concertar la medida y agilizar el tránsito en los puentes festivos en beneficio de los usuarios.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /#fin _pyp7 -->

                                        <!-- collapse_pyp8 -->
                                        <div class='panel panel-default'>
                                            <div class='panel-heading' role='tab' id='heading_pyp8'>
                                                <h4 class='panel-title'>
                                                    <a role='button' data-toggle='collapse' data-parent='#accordionRegional' href='#collapse_pyp8' aria-expanded='true' aria-controls='collapse_pyp8'>
                                                        4. ¿Cuáles son las sanciones por incumplir el Pico y Placa?
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id='collapse_pyp8' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_pyp8'>
                                                <div class='panel-body'>
                                                    <p>Las sanciones por el incumplimiento de la medida de Pico y Placa están estipuladas en el Código Nacional de Tránsito para la infracción C.14: “Transitar por sitios restringidos o en horas prohibidas por la autoridad competente. Además, el vehículo será inmovilizado”.</p>
                                                    <p>La multa equivale en el 2022 a $468.500.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /#fin _pyp8 -->

                                        <!-- collapse_pyp9 -->
                                        <div class='panel panel-default'>
                                            <div class='panel-heading' role='tab' id='heading_pyp9'>
                                                <h4 class='panel-title'>
                                                    <a role='button' data-toggle='collapse' data-parent='#accordionRegional' href='#collapse_pyp9' aria-expanded='true' aria-controls='collapse_pyp9'>
                                                        5. ¿Se hará monitoreo a la medida de Pico y Placa?
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id='collapse_pyp9' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_pyp9'>
                                                <div class='panel-body'>
                                                    <p>La secretaría Distrital de Movilidad hace monitoreo permanente a la medida con el personal de Gerencia en Vía, la Policía de Tránsito y el sistema de cámaras del centro de Gestión de Tránsito de Bogotá</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /#fin _pyp9 -->

                                        <!-- collapse_pyp12 -->
                                        <div class='panel panel-default'>
                                            <div class='panel-heading' role='tab' id='heading_pyp12'>
                                                <h4 class='panel-title'>
                                                    <a role='button' data-toggle='collapse' data-parent='#accordionRegional' href='#collapse_pyp12' aria-expanded='true' aria-controls='collapse_pyp12'>
                                                        6. ¿Qué sucede con las excepciones por Pico y Placa Solidario y Carro Compartido durante el Pico y Placa Regional?
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id='collapse_pyp12' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_pyp12'>
                                                <div class='panel-body'>
                                                    <p>Para la medida de Pico y Placa Regional en Bogotá en retorno de puentes festivos durante el ingreso a Bogotá: no aplican las excepciones por 3 o más ocupantes y tampoco aplica la excepción de "Pico y Placa Solidario".</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /#fin _pyp12 -->
                                        <hr>
                                        <!-- 4:3 aspect ratio -->
                                        <div class="embed-responsive embed-responsive-4by3">
                                            <iframe src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/12-10-2022/junio_final_volante_de_pyp_regional_carrocompartido.pdf" width="640" height="480" allow="autoplay"></iframe>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- fin collapse Región-->

                    </div>
                    <!-- /#fin  -->

                </div>
                <!-- <h5>Oficina Asesora de Comunicaciones y Cultura para la Movilidad <br>Secretaría Distrital de Movilidad</h5> -->

            </div>
        </div>
    </div>
    <div class="s3">
        <div class='row'>
            <div class='col-xs-12 col-sm-6'>
                <div class="row">

                    <div class="col-xs-12 col-sm-6">
                        <a href="https://www.youtube.com/user/secretariamovilidad?feature=guide" target="_blank" rel="noopener noreferrer">
                            <div class="icono-pyp22">
                                <div class="img-icono-pyp22">
                                    <div class='img-ico-pyp22'>
                                        <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/30-12-2021/planctilla_abc-07.png' alt='Icono de Youtube' title='Youtube Secretaría Distrital de Movilidad'>
                                    </div>
                                </div>
                                <div class="text-icono-pyp22">
                                    <div>
                                        <p>Secretaria Movilidad</p>
                                    </div>
                                </div>
                            </div>
                    </div>
                    </a>

                    <div class="col-xs-12 col-sm-6">
                        <a href="https://www.facebook.com/secretariamovilidadbogota" target="_blank" rel="noopener noreferrer">
                            <div class="icono-pyp22">
                                <div class="img-icono-pyp22">
                                    <div class='img-ico-pyp22'>
                                        <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/30-12-2021/planctilla_abc-08.png' alt='Icono de Facebook' title='Facebook Secretaría Distrital de Movilidad'>
                                    </div>
                                </div>
                                <div class="text-icono-pyp22">
                                    <div>
                                        <p>secretariamovilidadbogota/</p>
                                    </div>
                                </div>
                            </div>
                    </div>
                    </a>

                    <div class="col-xs-12 col-sm-6">
                        <a href="https://twitter.com/SectorMovilidad" target="_blank" rel="noopener noreferrer">
                            <div class="icono-pyp22">
                                <div class="img-icono-pyp22">
                                    <div class='img-ico-pyp22'>
                                        <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/30-12-2021/planctilla_abc-09.png' alt='Icono de Twitter' title='Twitter Secretaría Distrital de Movilidad'>
                                    </div>
                                </div>
                                <div class="text-icono-pyp22">
                                    <div>
                                        <p>@sectormovilidad</p>
                                    </div>
                                </div>
                            </div>
                    </div>
                    </a>

                    <div class="col-xs-12 col-sm-6">
                        <a href="https://www.instagram.com/sectormovilidad/" target="_blank" rel="noopener noreferrer">
                            <div class="icono-pyp22">
                                <div class="img-icono-pyp22">
                                    <div class='img-ico-pyp22'>
                                        <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/30-12-2021/planctilla_abc-10.png' alt='Icono de Instagram' title='Instagram Secretaría Distrital de Movilidad'>
                                    </div>
                                </div>
                                <div class="text-icono-pyp22">
                                    <div>
                                        <p>sectormovilidad/</p>
                                    </div>
                                </div>
                            </div>
                    </div>
                    </a>


                </div>
            </div>
            <div class='col-xs-12 col-sm-6'>
                <div class="logo-entidad">
                    <div class='text-center'>
                        <img class='img-responsive w-100 ' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/30-12-2021/planctilla_abc-04.png' alt='Logo Secretaría Distrital de Movilidad' title='Logo Secretaría Distrital de Movilidad'>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin Bloque Sección  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->

<!-- ----- ----- ----- ----- ----- ----- ----- -----  Hoja de estilo ---- ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<style type='text/css'>
    :root {
        --color-primario: #f4b300;
        --color-secundario: #c91719;
        --color-terciario: #191C3A;
        /* --color-cuaternario: #98A520; */
        --color-gris: #e5e5e5;
        --color-gris-fuerte: #c5c5c5;
        --color-blanco: #ffffff;
        --color-negro: #191919;
        --color-fondo: #333333;
    }

    .field-item.even h2 {
        visibility: hidden;
        margin-top: -50px;

    }

    .region-content {
        padding: 0px;
        overflow: hidden;
    }

    .seccion {
        font-size: 12pt !important;
        line-height: 1.4 !important;
        max-width: 940px;
        font-family: 'Sora', sans-serif;
    }


    .w-100 {
        width: 100%;
    }

    .s1 {
        border-top: solid 20px #c91719;
        background-color: #f4b300;
        background-image: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/30-12-2021/encabezado_pyp.webp');
        background-size: cover;
        background-position: -110px 136px;
        background-repeat: no-repeat;

    }

    .s1 .encabezado {
        background-color: #f4b300;
    }

    .s1 .text-encabezado {
        background-color: #f4b300;
        height: 200px;
        padding: 50px;
        display: flex;
        flex-direction: column;
        justify-content: center;

    }

    .s1 .text-encabezado h3 {
        color: #151515;
        align-items: center !important;
        font-size: 24px;
        margin: 0px;
        font-weight: 300;
        line-height: 1.4;
        padding-bottom: 10px;
        border-bottom: solid 2px #151515;

    }

    .s1 .enfasis {
        font-size: 1em;
        font-weight: 700;
    }

    .s1 .img-encabezado {
        /* background-image: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/30-12-2021/encabezado_pyp.webp'); */
        height: 200px;
        background-size: cover;
        background-position: center;

    }

    .s2 .panel-bogota .hp {
        color: #f4b300;
        background-color: #252525;
        border-color: #191C3A;
    }

    .s2 .panel-bogota .hp a {
        color: #f4b300;

    }

    .s2 .panel-region .hp {
        color: #151515;
        background-color: #f4b300;
        border-color: #191C3A;
    }

    .s2 .panel-region .hp a {
        color: #151515;

    }

    .s2 .panel-default>.panel-heading {
        background-image: none !important;
    }

    .s2 .panel-region>.panel-heading {
        background-color: #f4b300 !important;
        color: #151515;
    }

    .s2 .panel-bogota>.panel-heading {
        background-color: #252525 !important;
        color: #f4b300;
    }

    .s2 .panel-title {
        font-weight: 501;
    }

    .s2 {
        /* padding: 4%; */
    }

    .s2 ol {
        list-style-type: lower-roman !important;

    }

    .s2 ol>li,
    .s2 ul>li {
        line-height: 1.5;
        color: #252525;


    }

    .s2 p {
        padding: 4px 10px 4px 10px;
        line-height: 1.5;
        text-align: justify;
        color: #252525;
    }

    .s2 a {
        color: #252525;
        font-weight: 500;
    }

    .s3 {
        background-color: #252525;
    }

    .s3 .icono-pyp22 {
        padding: 10px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin: 0px 40px;
    }

    .s3 .img-ico-pyp22 {
        padding: 10px;
    }

    .s3 .img-ico-pyp22 img {
        max-width: 40px;

    }

    .s3 .text-icono-pyp22 p {
        color: #f4b300;
        font-weight: 700;
    }

    .s3 .logo-entidad {
        height: 160px;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 0px 40px;
    }

    .s3 a {
        /* text-decoration: none !important; */
    }

    .panel-body {
        background-color: #fefefe;
    }

    .bs {
        -webkit-box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.16);
        box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.16);
    }

    .btn-nm {
        background-color: #c91719;
        color: #fff;
        padding: 15px 10px;
        text-align: center;
        border-radius: 6px;
        height: 60px;
        font-weight: 900;
        display: flex;
        flex-direction: column;
        justify-content: center;
        justify-items: center;
    }

    .btn-nm:hover {
        background-color: #f4a500;
        color: #c91719;
    }

    .botones a {
        color: #f4a500;
        font-size: 1.15em;
        /* text-decoration: none; */
    }

    .botones a .btn-nm:hover {
        color: #151515;
    }

    .seccion .icono-pdf::before {
        display: inline-block;
        font-style: normal;
        font-variant: normal;
        text-rendering: auto;
        -webkit-font-smoothing: antialiased;
        font-family: "Font Awesome 5 Free";
        font-weight: 900;
        content: "\f007";


    }
</style>
<style>
    @media(max-width:767px) {

        .seccion {
            font-size: 12pt !important;
        }



    }

    @media(min-width:768px) {
        .s1 .text-encabezado h3 {
            /* font-size: 14px; */
            font-size: 30px;
        }

        .s2 {
            font-size: 12pt !important;
        }

        .s2 h3 {
            font-size: 24px !important;
        }


        .s1 {
            /* background-position: -110px 136px; */
            background-position: 163px -84px;
        }


    }

    @media(min-width:992px) {}

    @media(min-width:1200px) {}
</style>
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin hoja de estilo  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<script>
    $(".menu li a").click(function() {
        if ($(this).hasClass('activo')) {
            alert('Si');
        } else {
            alert('No');
        }
    });
</script>
