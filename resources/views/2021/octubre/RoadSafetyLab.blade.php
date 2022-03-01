@extends('welcome')
@section('contenido')

<!-- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- -----
                                                          Bloque Seccion
----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ------ -->

<div class='seccion'>
    <div class='row'>
        <!-- xs -->
        <div class='col-xs-12 visible-xs-12 visible-xs-block'>
            <img class='img-responsive w-100 banner-RSL_esp_a' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/01-10-2021/roadsafetylab_901x451.jpg' alt='' title=''>
        </div>
        <!-- lg -->
        <div class='col-sm-12 hidden-xs'>
            <img class='img-responsive w-100 banner-RSL_esp_a' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/01-10-2021/roadsafetylab_1921x421.jpg' alt='' title=''>
        </div>
    </div>
    <hr>
    <div class='row'>
        <div class='col-xs-12'>

            <div class="blind">

                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Español</a></li>
                    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">English</a></li>
                </ul>

                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="home">
                        <!-- Seccion en Español  -->
                        <div class='row'>
                            <div class='col-xs-12'>
                                <div class="RSL-header-txt">
                                    <p>La Secretaría Distrital de Movilidad de Bogotá (SDM), en colaboración con sus aliados: la Organización Mundial de la Salud, La Secretaría Distrital de Desarrollo Económico, la Alta Consejería para las TIC, Transmilenio, Sharecollab y Amazon Web Services, ha diseñado el Road Safety Lab, una convocatoria internacional para construir el principal lugar de encuentro de desarrolladores (oferta) e implementadores (demanda) de soluciones tecnológicas que mejoren la seguridad vial con el enfoque de la Visión Cero.</p>
                                </div>
                                <div class="row">
                                    <div class="text-center">
                                        <h3>Lista de Finalistas </h4>
                                    </div>
                                    <div class="col-xs-10 col-xs-offset-1">
                                        <ul>
                                            <li>Actibump - Edeva AB, Sweden</li>
                                            <li>Urban Hipervisor - EGIS Latam, Brasil</li>
                                            <li>Tachas Solares Electrónicas Sincronizables, Colombia</li>
                                            <li>Head-Up Display - Pontificia Universidad Javeriana, Colombia</li>
                                            <li>Analizador de Patrones de Accidentalidad en Corredores Viales, Universidad Autónoma de Occidente, Colombia</li>
                                            <li>Sistema de Velocidad Promedio, Neology S. de R.L. de C.V., Estados Unidos</li>
                                            <li>B-Safe App - Navisaf SAS, Colombia</li>
                                            <li>Bigo Safe - Cinnov S.A.S., Colombia</li>
                                            <li>Fleetsafe - Open World SPA - Chile</li>
                                            <li>Ojo de Dios - Semintel - Colombia</li>
                                            <li>Airobag - Centro de Innovación para Motociclistas TECH4RIDERS SAS</li>
                                        </ul>
                                    </div>
                                </div>
                                <br>
                            </div>
                        </div>
                        <div class='row'>
                            <div class='col-xs-12'>

                                <!-- collapseRSL_esp_a -->
                                <div class='panel-group ' id='accordion_esp' role='tablist ' aria-multiselectable='true'>

                                    <div class='panel panel-default'>
                                        <div class='panel-heading' role='tab' id='headingRSL_esp_a'>
                                            <h4 class='panel-title'>
                                                <a role='button' data-toggle='collapse' data-parent='#accordion_esp' href='#collapseRSL_esp_a' aria-expanded='true' aria-controls='collapseRSL_esp_a'>
                                                    1. Agenda
                                                </a>
                                            </h4>
                                        </div>
                                        <div id='collapseRSL_esp_a' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingRSL_esp_a'>
                                            <div class='panel-body'>
                                                <div class="RSL-agenda">
                                                    <ul>
                                                        <li><strong>Lanzamiento oficial de la convocatoria (Virtual, público): </strong>Lunes, 4 de Octubre de 2021</li>
                                                        <li><strong>Cierre de la convocatoria (virtual, público): </strong>Domingo, 28 de noviembre de 2021</li>
                                                        <li><strong>Anuncio de finalistas (virtual, privado): </strong>Viernes, 10 de Diciembre de 2021</li>
                                                        <li><strong>Pitch de los finalistas con el panel de jurados (virtual, privado): </strong>Entre el 21 de Febrero y el 4 de Marzo 2022</li>
                                                        <li><strong>Premiación (virtual/presencial): </strong>Abril de 2022</li>
                                                        <li><strong>Pruebas piloto: </strong>Desde Mayo de 2022</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class='panel panel-default'>
                                        <div class='panel-heading' role='tab' id='headingRSL_esp_b'>
                                            <h4 class='panel-title'>
                                                <a role='button' data-toggle='collapse' data-parent='#accordion_esp' href='#collapseRSL_esp_b' aria-expanded='true' aria-controls='collapseRSL_esp_b'>
                                                    2. Desafío
                                                </a>
                                            </h4>
                                        </div>
                                        <div id='collapseRSL_esp_b' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingRSL_esp_b'>
                                            <div class='panel-body'>
                                                <div>
                                                    <h4 class="RSL-h4">Contexto</h4>
                                                    <p>La tecnología al servicio de la seguridad vial cobra relevancia al hacer posible y más efectiva la gestión y el control de factores de riesgo de diversa índole: psicosocial, fisiológico, aquellos asociados al entorno y a la infraestructura vial, así como a hábitos, conductas y comportamientos, entre otros, con lo cual es posible evitar la ocurrencia y/o mitigar la gravedad de los siniestros de tránsito.</p>
                                                    <p>Los Sistemas Inteligentes de Transporte (ITS) – por sus siglas en inglés – y en particular algunos dispositivos implementados sobre los corredores viales o en diferentes tipos de vehículos, en la flota de sistemas de transporte de pasajeros, en vehículos de transporte de carga y mensajería, e incluso en motocicletas o bicicletas, entre otros, tienen el potencial de monitorear la operación o alertar a los conductores para reconocer en forma temprana algunos de los factores de riesgo más influyentes en la seguridad vial.</p>
                                                    <p>Algunos de los factores de riesgo que la tecnología puede ayudar a identificar, para alertar a los actores y que en conjunto actuemos preventivamente, son la fatiga en la conducción, conducir con exceso de velocidad, actores vulnerables en puntos ciegos, distraerse mientras se está al volante (uso de dispositivos móviles, fumar, otros), por mencionar algunos.</p>
                                                    <p>Así mismo, el registro de datos geolocalizados permiten identificar por ejemplo malos hábitos en la conducción o defectos en la infraestructura vial (aceleraciones/frenadas/giros bruscos), o interacciones de riesgo entre actores viales (volúmenes direccionales por tipo de actor, líneas de flujo, puntos de interacción).</p>
                                                    <p>En este sentido, el monitoreo permanente de estos dispositivos y los datos que recopilan permiten emprender planes de mitigación de riesgos de siniestralidad vial, que redundan en mejores condiciones de seguridad para los diferentes actores viales.</p>
                                                    <p>Por lo anterior, esta convocatoria persigue identificar la diversidad de dispositivos y aplicaciones tecnológicas al servicio de la seguridad vial, documentar sus funcionalidades a través de pilotos de prueba que conectan la oferta con la demanda, analizar su impacto y difundir las mejores prácticas. Esta iniciativa también permitirá explorar posibilidades de nuevos desarrollos tecnológicos o aplicaciones que respondan a la identificación de necesidades en la materia.</p>
                                                    <p>Esta convocatoria articula a las entidades del sector movilidad, innovación y desarrollo económico, a desarrolladores y a potenciales implementadores de tecnología, a la academia, entre otros actores clave, con el objetivo de crear alianzas, cooperación, intercambio y gestión de información que permitan un uso más eficiente e integrado de los dispositivos tecnológicos y aplicaciones en uso, o disponibles en el mercado o futuros desarrollos, para mejorar la seguridad vial.</p>
                                                </div>
                                                <div>
                                                    <h4 class="RSL-h4">Objetivo</h4>
                                                    <p>El objetivo de esta iniciativa es en una primer fase identificar y visibilizar las soluciones tecnológicas más significativas, innovadoras y disruptivas que puedan contribuir en la mitigación de factores de riesgo de siniestralidad vial y/o en su severidad cuando ocurran, para evitar la pérdida de vidas, las discapacidades y otras lesiones graves, así como los perjuicios sociales y económicos derivados.</p>
                                                    <p>En una segunda fase planeamos promover la realización de pruebas piloto para testear los desarrollos tecnológicos que resulten seleccionados en el marco del <strong>Road Safety Lab</strong> y documentar diversas funcionalidades, con el fin de contribuir en el fortalecimiento de las capacidades técnicas en la materia y abrir la agenda para dialogar más ampliamente acerca del rol de la tecnología al servicio de la seguridad vial.</p>
                                                </div>


                                            </div>
                                        </div>
                                    </div>

                                    <div class='panel panel-default'>
                                        <div class='panel-heading' role='tab' id='headingRSL_esp_c'>
                                            <h4 class='panel-title'>
                                                <a role='button' data-toggle='collapse' data-parent='#accordion_esp' href='#collapseRSL_esp_c' aria-expanded='true' aria-controls='collapseRSL_esp_c'>
                                                    3. Perfiles de aplicantes
                                                </a>
                                            </h4>
                                        </div>
                                        <div id='collapseRSL_esp_c' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingRSL_esp_c'>
                                            <div class='panel-body'>
                                                <div>
                                                    <p>Estamos buscando aplicantes que estén interesados en participar en pruebas piloto, bien sea apadrinando (oferta) o usando las soluciones tecnológicas (demanda) y compartiendo los datos que resulten del ejercicio. Lo anterior permitirá a la Secretaría de Movilidad y sus aliados acompañar el testeo y documentar las funcionalidades de los desarrollos ganadores.</p>
                                                    <p>Cuatro perfiles conforman nuestra búsqueda:</p>
                                                    <ol>
                                                        <li>Desarrolladores con clientes que ya han validado su tecnología para mejorar la seguridad vial, que quieren visibilizar las funcionalidades de la solución a través de pilotos de prueba y compartir información acerca efectividad de su solución a través de las experiencias de sus clientes.</li>
                                                        <li>Desarrolladores que ya tienen una solución terminada o un proyecto en nivel de madurez tecnológica –TRL 3 o más (Technology Readiness Level por sus siglas en Inglés), enfocado en mejorar la seguridad vial, o con potencial de reorientación en este ámbito. Se espera que dichos desarrollos aún no tengan clientes que validen dicha solución terminada o en proceso, y que en todo caso requieran acompañamiento para afinar y visibilizar su solución a través de pilotos de prueba.</li>
                                                        <li>Organizaciones que ya han implementado desarrollos tecnológicos para mejorar la seguridad vial en sus operaciones, quieren compartir sus casos de éxito, y desean conocer y seguir probando otros desarrollos y funcionalidades.</li>
                                                        <li>Organizaciones que aunque no hayan implementado una tecnología para seguridad vial desean compartir sus principales retos y necesidades frente a este tema, así como conocer y testear desarrollos y funcionalidades.</li>
                                                    </ol>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class='panel panel-default'>
                                        <div class='panel-heading' role='tab' id='headingRSL_esp_d'>
                                            <h4 class='panel-title'>
                                                <a role='button' data-toggle='collapse' data-parent='#accordion_esp' href='#collapseRSL_esp_d' aria-expanded='true' aria-controls='collapseRSL_esp_d'>
                                                    4. Incentivos
                                                </a>
                                            </h4>
                                        </div>
                                        <div id='collapseRSL_esp_d' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingRSL_esp_d'>
                                            <div class='panel-body'>
                                                <div>
                                                    <h4 class="RSL-h4"><i>Para los desarrolladores tecnológicos</i></h4>
                                                    <p>Los mejores desarrollos tecnológicos serán presentados y reconocidos públicamente en un evento de premiación organizado por la <strong>Secretaría Distrital de Movilidad</strong>, serán incluidos en el anuario de seguridad vial empresarial y harán parte de pilotos de testeo en los que se conectarán con empresas que conforman el potencial nicho de demanda de acuerdo con las funcionalidades que ofrecen.</p>
                                                    <p>Los desarrollos tecnológicos seleccionados serán conectados a través de la <strong>Secretaría Distrital de Movilidad</strong> con potenciales implementadores de tecnología como los operadores de transporte público, operadores de empresas de carga, colectivos de bicis, y/o colectivos de motocicletas, según aplique, para dar a conocer sus funcionalidades.</p>
                                                    <p>Los mejores desarrollos tecnológicos podrán visibilizar su producto en una reunión internacional de forma virtual con miembros de las oficinas país de la <strong>Organización Panamericana de la Salud/ Organización Mundial de la Salud OPS/OMS en la región de las Américas</strong>. Así mismo, el desarrollo que tenga mayor impacto en la salud pública, tendrá una sesión de mentoría con una empresa experta en innovación.</p>
                                                    <p>Los proyectos finalistas se vincularán y tendrán visibilidad como proyectos destacados en el Mapping e Inversión de <strong>Connecting The Dots 2021</strong> - Ecosistema de Nuevas Economías en Iberoamérica, y tendrán un descuento especial del 50% en los Talleres de Nuevas Economías que organiza <strong>Sharecollab</strong>.</p>
                                                    <p><strong>Amazon</strong> entregará a los desarrolladores finalistas, uno de los siguientes beneficios:</p>
                                                    <ul>
                                                        <li>$10.000 dólares en crédito AWS Promotional con vencimiento a 2 años.</li>
                                                        <li>$1.500 dólares de AWS Business Support. Vencimiento a 1 año.</li>
                                                        <li>80 créditos para laboratorios de ritmo propio (self-paced labs).</li>
                                                    </ul>
                                                    <p>Aquí también hay espacio para los desarrolladores/desarrollos noveles y/o flexibles a adaptar sus desarrollos para ofrecer funcionalidades para seguridad vial. A la mejor propuesta sin validación aún en el mercado, la <strong>Secretaría Distrital de Desarrollo Económico</strong> a través del Fondo Cuenta Distrital de Innovación, Tecnología e Industrias Creativas – entregará un cupo para acceder a:</p>
                                                    <ul>
                                                        <li>Diagnóstico de identificación de las necesidades particulares de Seguridad Vial en materia de CTeI – Ciencia, Tecnología e Innovación.</li>
                                                        <li>Adopción entre dieciséis (16) y veinte (20) horas de capacitación especializada por medio de Váuchers de Conocimiento de la mano de expertos para conceptualizar la solución enfocada en seguridad vial.</li>
                                                        <li>Acorde al desempeño del ganador de esta categoría en la Convocatoria Road Safety Lab y su adecuado avance en el Váucher de Conocimiento, se le asignará uno de los 150 Váuchers de Innovación del programa Entorno de la SDDE para recibir el acompañamiento especializado requerido para el desarrollo de dichas soluciones de la mano de expertos.</li>
                                                        <li>Este Váucher, que cubrirá hasta COP $23 Millones, podrá utilizarse para recibir los servicios especializados en: el desarrollo de prototipos, adopción de tecnologías, desarrollo de pruebas especializadas y acompañamiento en la formulación de proyectos para presentarse a mecanismos alternativos de financiación, entre otros. Esta fase permitirá validar con el mercado la solución identificada.</li>
                                                    </ul>
                                                </div>
                                                <div>
                                                    <h4 class="RSL-h4"><i>Para los Implementadores</i></h4>
                                                    <p>Los implementadores o potenciales receptores de tecnología que se inscriban tendrán la oportunidad de conocer y testear de primera mano los desarrollos tecnológicos ganadores, sin ningún costo, en el marco de pruebas piloto acompañadas por la Secretaría de Movilidad y sus Aliados.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class='panel panel-default'>
                                        <div class='panel-heading' role='tab' id='headingRSL_esp_e'>
                                            <h4 class='panel-title'>
                                                <a role='button' data-toggle='collapse' data-parent='#accordion_esp' href='#collapseRSL_esp_e' aria-expanded='true' aria-controls='collapseRSL_esp_e'>
                                                    5. Requisitos
                                                </a>
                                            </h4>
                                        </div>
                                        <div id='collapseRSL_esp_e' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingRSL_esp_e'>
                                            <div class='panel-body'>
                                                <div>
                                                    <h4 class="RSL-h4"><i>Por parte de los desarrolladores:</i></h4>
                                                    <ul>
                                                        <li>Expresar tu interés de apadrinar el testeo de tu desarrollo tecnológico, prestando algunos de sus dispositivos a un potencial implementador por un periodo de tiempo definido y compartiendo la información que llegase a recabarse a través de la tecnología durante el ejercicio.</li>
                                                        <li>Compartir información para entender y documentar las funcionalidades del desarrollo tecnológico, así como casos de éxito de forma cualitativa y cuantitativa.</li>
                                                        <li>Para acceder a los beneficios otorgados por Amazon los aplicantes deben tener en cuenta las siguientes consideraciones:
                                                            <ul>
                                                                <li>Los emprendimientos que ya hayan recibido en el pasado un beneficio igual o de mayor tamaño de créditos en AWS no serán elegibles para este beneficio.</li>
                                                                <li>Cualquier aplicación que no se encuentre dentro de la base de datos de la Secretaría será rechazada.</li>
                                                                <li>El email y dominio registrado en la cuenta de AWS debe coincidir con el nombre de la cuenta para recibir aprobación de los créditos. Si la cuenta tiene vinculado un proveedor gratuito de email tipo Gmail, Hotmail, Yahoo tiene alta probabilidad de rechazo por el sistema de verificación automático.</li>
                                                                <li>El proceso de validación de los créditos en la cuenta puede tomar hasta 10 días hábiles.</li>
                                                                <li>Aplican términos y condiciones: <a href="https://aws.amazon.com/activate/terms/" target="_blank" rel="noopener noreferrer">https://aws.amazon.com/activate/terms/</a></li>
                                                            </ul>
                                                        </li>
                                                        <li>Para acceder al premio otorgado por  la Secretaría Distrital de Desarrollo Económico a través del Fondo Cuenta Distrital de Innovación, Tecnología e Industrias Creativas, el solicitante debe ser una empresa y / o aglomeración que cumpla con los siguientes requisitos:
                                                            <ul>
                                                                <li>Estar ubicadas y/o tener sede en la ciudad de Bogotá D.C. (en caso de que el ganador no cumpla con este requisito, deberá tener un aliado que cumpla para poder acceder al premio).</li>
                                                                <li>Contar con mínimo un (1) año de haber sido constituidas legalmente al momento de la apertura de la convocatoria (en caso de que el ganador no cumpla con este requisito, deberá tener un aliado que cumpla para poder acceder al premio).</li>
                                                                <li>Tener registro mercantil vigente ( en caso de que el ganador no cumpla con este requisito, deberá tener un aliado que cumpla para poder acceder al premio).</li>
                                                                <li>Estar operando actualmente.</li>
                                                                <li>No estar incursa en proceso de liquidación.</li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div>
                                                    <h4 class="RSL-h4">Por parte de los potenciales implementadores:</h4>
                                                    <p>Comprometerse a recibir, usar y cuidar en calidad de préstamo los dispositivos a que se diera lugar, y abrir los datos que se puedan recopilar en los pilotos de prueba por un periodo de tiempo determinado.</p>
                                                </div>
                                                <div>
                                                    <h4 class="RSL-h4">Diligencia el formato de aplicación y compártenos tu pitch!</h4>
                                                    <p>Ya sea de tu desarrollo como generador de tecnología (oferta) o de tu implementación como receptor de tecnología (demanda)!</p>
                                                    <p>Sube un video con tu Pitch/presentación de máximo cinco (5) minutos de duración, en altísima calidad, con audio. Tú eliges: Puedes proyectar diapositivas de PowerPoint, mostrar algún render/demo o un vídeo sobre un caso de la vida real. Es un plus si muestras cifras verificables sobre el impacto en términos de seguridad vial. No dejes escapar nada, pero siendo siempre ejecutivo (breve).</p>
                                                    <p>Si aún no has desarrollado o implementado tecnología para gestionar la seguridad vial, no importa! Cuéntanos más sobre tu organización! (actividad económica, tamaño de flota, tipología de vehículos, etc) ¿Cómo están abordando la seguridad vial? ¿Cuáles son sus principales desafíos?</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class='panel panel-default'>
                                        <div class='panel-heading' role='tab' id='headingRSL_esp_evaluacion'>
                                            <h4 class='panel-title'>
                                                <a role='button' data-toggle='collapse' data-parent='#accordion_esp' href='#collapseRSL_esp_evaluacion' aria-expanded='true' aria-controls='collapseRSL_esp_evaluacion'>
                                                    6. Criterios de evaluación
                                                </a>
                                            </h4>
                                        </div>
                                        <div id='collapseRSL_esp_evaluacion' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingRSL_esp_evaluacion'>
                                            <div class='panel-body'>
                                                <div class="RSL-contacto">
                                                    <!-- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- -----
                                                                                                              Bloque Tabla
                                                    ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- -- -->

                                                    <div class='seccion'>
                                                        <div class='row'>
                                                            <div class='col-xs-12 col-sm-10 col-sm-offset-1'>

                                                                <div class='table-responsive'>
                                                                    <!-- <hr>
                                                                    <p class='text-center'><strong>EVALUATION CRITERIA PROPOSAL - ROAD SAFETY LAB</strong></p>
                                                                    <hr> -->
                                                                    <table class='table table-bordered table-striped'>
                                                                        <tr>
                                                                            <th>Criterios</th>
                                                                            <th>Descripción</th>
                                                                            <th>% de evaluación</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>1. Oportunidad y relevancia</td>
                                                                            <td>Se describe en detalle cómo el desarrollo tecnológico contribuye a resolver el problema. Es decir ofrece una funcionalidad que soluciona una problemática de siniestralidad vial en particular, previniendo un determinado factor de riesgo (seguridad activa) o mitigando las consecuencias de la ocurrencia de un siniestro (seguridad pasiva).</td>
                                                                            <td align="center">20%</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>2. Efectividad e impacto en términos de seguridad vial</td>
                                                                            <td>Se describe cuantitativamente la relevancia de la(s) funcionalidad(es) en la mitigación o prevención de algún factor de riesgo de siniestralidad vial o la mitigación de las consecuencias de su ocurrencia.</td>
                                                                            <td align="center">15%</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>3. Diseño y experiencia de usuario</td>
                                                                            <td>El diseño visual de la solución es intuitivo, por lo tanto permite una comprensión rápida de su uso, funcionalidades y/o de los mensajes que se desean expresar a otros usuarios de la vía.</td>
                                                                            <td align="center">10%</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>4. Escalabilidad y adaptabilidad</td>
                                                                            <td>Es un desarrollo adaptable o con capacidad de enfocarse en la prevención de factores de riesgo y es capaz de incrementar su capacidad de trabajo o expandirse a muchos usuarios de un sistema sin comprometer el funcionamiento y calidad del mismo.</td>
                                                                            <td align="center">10%</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>5.Interoperabilidad</td>
                                                                            <td>Es un desarrollo técnicamente capaz de intercambiar datos a través de un conjunto común de formatos de intercambio, para leer y escribir los mismos formatos de archivo, y para usar los mismos protocolos que otras tecnologías para su integración en sistemas de ciudades inteligentes.</td>
                                                                            <td align="center">10%</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>6. Sostenibilidad</td>
                                                                            <td>El desarrollo tecnológico integra los diversos aspectos de la sostenibilidad:
                                                                                <ul>
                                                                                    <li>Social (ej: inclusión y diversidad de usuarios viales, empoderamiento de las organizaciones para gestionar la seguridad vial desde sus competencias, cocreación, envejecimiento de la sociedad, igualdad de género, salud y bienestar global)</li>
                                                                                    <li>Ambiental (ej: cadena de producción - insumo - producto - desperdicio, impacto, medidas para enfrentar o contrarrestar el cambio climático, promoción del cambio modal, soluciones de emisión cero y carbono neutral, etc)</li>
                                                                                    <li>Económica (ej: análisis de costo-beneficio, solidez del estudio de viabilidad, economía circular, financiación, análisis de mercado, requisitos y necesidades de los usuarios, cumplimiento)</li>
                                                                                </ul>
                                                                            </td>
                                                                            <td align="center">10%</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>7. Modelo de negocio</td>
                                                                            <td>El desarrollador propone algún incentivo de negocio a los potenciales implementadores de la solución</td>
                                                                            <td align="center">10%</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>8. Uso y reutilización de datos</td>
                                                                            <td>El desarrollo tecnológico permite recolectar datos relevantes para la gestión de la seguridad vial, para adelantar acciones en tiempo real o análisis en oficina para la prevención de siniestros viales.</td>
                                                                            <td align="center">5%</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>9. Creatividad e innovación</td>
                                                                            <td>El desarrollo es disruptivo en el contexto local del mercado de tecnologías para seguridad vial.</td>
                                                                            <td align="center">5%</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>10. Calidad del pitch (presentación del desarrollo)</td>
                                                                            <td>La presentación del desarrollo es clara, concisa, y permite apreciar cómo funciona la solución de una forma atractiva e integral.</td>
                                                                            <td align="center">5%</td>
                                                                        </tr>
                                                                    </table>
                                                                    <p class='text-center'></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class='panel panel-default'>
                                        <div class='panel-heading' role='tab' id='headingRSL_esp_f'>
                                            <h4 class='panel-title'>
                                                <a role='button' data-toggle='collapse' data-parent='#accordion_esp' href='#collapseRSL_esp_f' aria-expanded='true' aria-controls='collapseRSL_esp_f'>
                                                    7. Contacto
                                                </a>
                                            </h4>
                                        </div>
                                        <div id='collapseRSL_esp_f' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingRSL_esp_f'>
                                            <div class='panel-body'>
                                                <div class="RSL-contacto">
                                                    Alternativamente también puedes escribirnos a <a href="mailto:roadsafetylab@movilidadbogota.gov.co">roadsafetylab@movilidadbogota.gov.co</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class='panel panel-default'>
                                        <div class='panel-heading' role='tab' id='headingRSL_esp_g'>
                                            <h4 class='panel-title'>
                                                <a role='button' data-toggle='collapse' data-parent='#accordion_esp' href='#collapseRSL_esp_g' aria-expanded='true' aria-controls='collapseRSL_esp_g'>
                                                    8. Aliados
                                                </a>
                                            </h4>
                                        </div>
                                        <div id='collapseRSL_esp_g' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingRSL_esp_g'>
                                            <div class='panel-body'>
                                                <h4 class="RSL-h4">Organizador:</h4>
                                                <ul>
                                                    <li>Secretaría Distrital de Movilidad de Bogotá, D.C. (SDM) – <a href="http://www.movilidadbogota.gov.co/">http://www.movilidadbogota.gov.co/</a></li>
                                                </ul>
                                                <h4 class="RSL-h4">Aliados:</h4>
                                                <ul>
                                                    <li>Organización Panamericana de la Salud (OPS) – <a href="http://www.paho.org/es">http://www.paho.org/es</a></li>
                                                    <li>Secretaría de Desarrollo Económico - <a href="http://www.desarrolloeconomico.gov.co/sites/default/files/fitic/">http://www.desarrolloeconomico.gov.co/sites/default/files/fitic/</a></li>
                                                    <li>Transmilenio - <a href="https://www.transmilenio.gov.co/">https://www.transmilenio.gov.co/</a></li>
                                                    <li>Alta Consejería para las TIC - <a href="https://tic.bogota.gov.co/">https://tic.bogota.gov.co/</a></li>
                                                    <li>Sharecollab – <a href="http://www.sharecollab.co/">http://www.sharecollab.co/</a> – Connecting The Dots – <a href="http://www.connectingthedots.co/">http://www.connectingthedots.co/</a></li>
                                                    <li>Amazon Web Services (AWS) – <a href="http://aws.amazon.com/">http://aws.amazon.com/</a></li>
                                                    <li>iNNpulsa Colombia - <a href="https://innpulsacolombia.com/">https://innpulsacolombia.com/</a></li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class='panel panel-default'>
                                        <div class='panel-heading' role='tab' id='headingRSL_esp_h'>
                                            <h4 class='panel-title'>
                                                <a role='button' data-toggle='collapse' data-parent='#accordion_esp' href='#collapseRSL_esp_h' aria-expanded='true' aria-controls='collapseRSL_esp_h'>
                                                    9. Preguntas Frecuentes
                                                </a>
                                            </h4>
                                        </div>
                                        <div id='collapseRSL_esp_h' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingRSL_esp_h'>
                                            <div class='panel-body'>
                                                <ul>
                                                    <li>¿Puedo participar si no resido en Bogotá D.C.? Sí, cualquiera puede participar sin importar su ubicación geográfica. Esta convocatoria está abierta para cualquier organización con sede dentro o fuera de Colombia. Sin embargo, es un factor relevante para la selección de finalistas poder contar con su participación en el desarrollo de pilotos en la ciudad de Bogotá.</li>
                                                    <li>¿Puedo diligenciar el formado en inglés y español? Puedes escoger sólamente uno, ya sea el idioma español o inglés, para enviarnos tu postulación.</li>
                                                    <li>¿Puedo postular más de un desarrollo tecnológico? Si. Puedes postular más de un desarrollo diligenciando nuevamente el formulario por completo (un desarrollo por postulación).</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- /#fin RSL_esp_a -->

                            </div>
                        </div>

                        <!-- Fin Seccion en Español  -->
                    </div>


                    <div role="tabpanel" class="tab-pane fade" id="profile">
                        <!-- Seccion en Ingles  -->
                        <div class='row'>
                            <div class='col-xs-12'>

                                <div class="RSL-header-txt">
                                    <p>The Bogotá District Mobility Secretariat (SDM) in collaboration with its allies: the World Health Organization, The Secretariat of Economic Development, the High Council for ICT, Transmilenio, Sharecollab, and Amazon Web Services, has designed the Road Safety Lab, an international call to build the main meeting place for developers (supply) and implementers (demand) of technological solutions that improve Road Safety with the Vision Zero approach.</p>
                                </div>

                                <div class="row">
                                    <div class="text-center">
                                        <h3>List of finalists</h4>
                                    </div>
                                    <div class="col-xs-10 col-xs-offset-1">
                                        <ul>
                                            <li>Actibump - Edeva AB, Sweden</li>
                                            <li>Urban Hipervisor - EGIS Latam, Brasil</li>
                                            <li>Tachas Solares Electrónicas Sincronizables, Colombia</li>
                                            <li>Head-Up Display - Pontificia Universidad Javeriana, Colombia</li>
                                            <li>Analizador de Patrones de Accidentalidad en Corredores Viales, Universidad Autónoma de Occidente, Colombia</li>
                                            <li>Sistema de Velocidad Promedio, Neology S. de R.L. de C.V., Estados Unidos</li>
                                            <li>B-Safe App - Navisaf SAS, Colombia</li>
                                            <li>Bigo Safe - Cinnov S.A.S., Colombia</li>
                                            <li>Fleetsafe - Open World SPA - Chile</li>
                                            <li>Ojo de Dios - Semintel - Colombia</li>
                                            <li>Airobag - Centro de Innovación para Motociclistas TECH4RIDERS SAS</li>
                                        </ul>
                                    </div>
                                </div>
                                <br>

                                <!-- collapseRSL_eng -->
                                <div class='panel-group ' id='accordion_eng' role='tablist ' aria-multiselectable='true'>

                                    <div class='panel panel-default'>
                                        <div class='panel-heading' role='tab' id='headingRSL_eng_a'>
                                            <h4 class='panel-title'>
                                                <a role='button' data-toggle='collapse' data-parent='#accordion_eng' href='#collapseRSL_eng_a' aria-expanded='true' aria-controls='collapseRSL_eng_a'>
                                                    1. Agenda
                                                </a>
                                            </h4>
                                        </div>
                                        <div id='collapseRSL_eng_a' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingRSL_eng_a'>
                                            <div class='panel-body'>

                                                <div class="RSL-agenda">
                                                    <ul>
                                                        <li><strong>Official call launch (virtual, public): </strong>Monday, October 4, 2021</li>
                                                        <li><strong>Call deadline (virtual, public): </strong>Sunday, November 28, 2021</li>
                                                        <li><strong>Announcement of finalists (virtual, private): </strong>Friday, December 10, 2021</li>
                                                        <li><strong>Finalists’ pitch with the jury panel (virtual, private): </strong>Between February 17th and March 4th, 2022</li>
                                                        <li><strong>Call results and awarding (virtual, public): </strong>March, 2022</li>
                                                        <li><strong>Testing phase: </strong>2022</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class='panel panel-default'>
                                        <div class='panel-heading' role='tab' id='headingRSL_eng_b'>
                                            <h4 class='panel-title'>
                                                <a role='button' data-toggle='collapse' data-parent='#accordion_eng' href='#collapseRSL_eng_b' aria-expanded='true' aria-controls='collapseRSL_eng_b'>
                                                    2. Challenge
                                                </a>
                                            </h4>
                                        </div>
                                        <div id='collapseRSL_eng_b' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingRSL_eng_b'>
                                            <div class='panel-body'>
                                                <div>
                                                    <h4 class="RSL-h4">Context</h4>
                                                    <p>Technology at the service of road safety becomes relevant by making the management and control of risk factors of various kinds possible and more effective: psychosocial, physiological, those associated with the environment and road infrastructure, as well as habits, conducts and behaviors, among others, with which it is possible to avoid the occurrence and/or mitigate the seriousness of road crashes.</p>
                                                    <P>Intelligent Transportation Systems (ITS), and in particular some devices implemented on road corridors or in different types of vehicles, in the fleet of passenger transport systems, in freight and courier transport vehicles, and even on motorcycles or bicycles, among others, they have the potential to monitor the transport operation or alert drivers to early recognize some of the most influential risk factors in road safety.</P>
                                                    <p>Some of the risk factors that technology can help identify to alert actors and act preventively are driving fatigue, speeding, actors in blind spots, being distracted while behind the wheel (use of mobile devices smoking, others), among others.</p>
                                                    <p>Likewise, through the registration of geolocated data, they allow for the identification, for example, of bad driving habits or defects in the road infrastructure (acceleration / braking / sharp turns), or risk interactions between road actors (directional volumes by type of actor, lines flow, interaction points).</p>
                                                    <p>In this sense, the permanent monitoring of these devices and the data they collect allow undertaking road accident risk mitigation plans, which result in better safety conditions for the different road actors.</p>
                                                    <p>Therefore, this call seeks to identify the diversity of devices and technological applications at the service of road safety, document their functionalities through test pilots that connect supply with demand, analyze their impact and disseminate best practices. This initiative will also allow exploring possibilities for new technological developments or applications that respond to the identification of needs in the matter.</p>
                                                    <p>This call brings together entities in the mobility, innovation and economic development sector, developers and potential technology implementers, academia, among other key actors, with the aim of creating alliances, cooperation, exchange and information management, which allow the use of more efficient and integrated technological devices and applications in use, or available on the market or future developments, to improve road safety.</p>
                                                </div>
                                                <div>
                                                    <h4 class="RSL-h4">Target</h4>
                                                    <p>The objective of this initiative is in a first phase to identify and make visible the most significant, innovative and disruptive technological solutions that can contribute to mitigate the main risk factors of road accidents and/or their severity when they occur, to avoid loss of life, disabilities and other serious injuries, as well as the resulting social and economic damages.</p>
                                                    <p>In a second phase, we plan to promote the realization of trials to test the technological developments that are selected in the framework of the <strong>Rod Safety Lab</strong> Call and to register diverse functionalities, in order to strengthening the technical capacities of the organizations and Stakeholders involved and open the agenda for dialogue more broadly about the role of technology at the service of road safety.</p>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class='panel panel-default'>
                                        <div class='panel-heading' role='tab' id='headingRSL_eng_c'>
                                            <h4 class='panel-title'>
                                                <a role='button' data-toggle='collapse' data-parent='#accordion_eng' href='#collapseRSL_eng_c' aria-expanded='true' aria-controls='collapseRSL_eng_c'>
                                                    3. Applicant profile
                                                </a>
                                            </h4>
                                        </div>
                                        <div id='collapseRSL_eng_c' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingRSL_eng_c'>
                                            <div class='panel-body'>
                                                <div>
                                                    <p>We are looking for applicants who are interested in participating in pilot tests, either lending temporary (offer) or using technological solutions (demand) and sharing the data resulting from the exercise. This will allow the Secretariat of Mobility of Bogotá and its allies to monitor the testing and document the functionalities of the winning developments.</p>
                                                    <p>Four profiles make up our search:</p>
                                                    <ol>
                                                        <li>Developers with clients who have already validated their technology to improve road safety, who want to make the functionalities of the solution visible through test pilots and share information about the effectiveness of their solution through their clients' experiences.</li>
                                                        <li>Developers who already have a finished solution or a project at Technology Readiness Level - TRL 3 or more, focused on improving road safety, or with potential for reorientation in this area. It is expected that these developments do not yet have customers who validate said finished or in-process solutions, and that in any case they require support to refine and make their solution visible through test pilots.</li>
                                                        <li>Organizations that have already implemented technological developments to improve road safety in their operations, want to share their success stories, and want to know and continue testing other developments and functionalities.</li>
                                                        <li>Organizations that, although they have not implemented a road safety technology, are willing to share their main challenges and needs regarding this issue, as well as to learn about and test developments and functionalities.</li>
                                                    </ol>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class='panel panel-default'>
                                        <div class='panel-heading' role='tab' id='headingRSL_eng_d'>
                                            <h4 class='panel-title'>
                                                <a role='button' data-toggle='collapse' data-parent='#accordion_eng' href='#collapseRSL_eng_d' aria-expanded='true' aria-controls='collapseRSL_eng_d'>
                                                    4. Incentives
                                                </a>
                                            </h4>
                                        </div>
                                        <div id='collapseRSL_eng_d' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingRSL_eng_d'>
                                            <div class='panel-body'>
                                                <div>
                                                    <h4 class="RSL-h4"><i>For technology developers</i></h4>
                                                    <p>The best technological developments will be presented and publicly recognized in an award event organized by <strong>the Secretariat of Mobility of Bogotá</strong>, they will be included in the business road safety yearbook and will be part of test pilots in which they will connect with companies that make up the potential niche demand according to the functionalities they offer.</p>
                                                    <p>The selected technological developments will be connected through <strong>the Secretariat of Mobility of Bogotá</strong> with potential technology implementers such as public transport operators, freight company operators, bicycle groups, and/or motorcycle groups, as applicable, to publicize its functionalities.</p>
                                                    <p>The best technological developments will be able to make their product visible in a virtual international meeting with members of the country offices of <strong>the Pan American Health Organization / World Health Organization PAHO/WHO</strong> in the Americas region. Likewise, the development that has the greatest impact on public health will have a mentoring session with an expert company in innovation.</p>
                                                    <p>The finalist projects will be linked and will have visibility as outstanding projects in the Mapping and Investment of Connecting the Dots 2021 - Ecosystem of New Economies in Latin America, and will have a special discount of 50% in the New Economies Workshops organized by <strong>Sharecollab</strong>.</p>
                                                    <p><strong>Amazon</strong> will provide finalist developers with one of the following benefits:</p>
                                                    <ul>
                                                        <li>$ 10,000 in AWS Promotional credit with a 2 year expiration date.</li>
                                                        <li>$ 1,500 from AWS Business Support with 1 year expiration date.</li>
                                                        <li>80 credits for self-paced labs.</li>
                                                    </ul>
                                                    <p>There is also room for new and/or flexible developers/developments to adapt their developments to offer functionalities for road safety. For the best proposal without validation still in the market, the <strong>Secretary for Economic Development</strong> through the <strong>Account Fund for Innovation, Technology and Creative Industries</strong> - will deliver a quota to access:</p>
                                                    <ul>
                                                        <li>Diagnosis of identification of the particular needs of Road Safety in matters of CTeI - Science, Technology and Innovation.</li>
                                                        <li>Adoption between sixteen (16) and twenty (20) hours of specialized training through Knowledge Vouchers from the hand of experts to conceptualize the solution focused on road safety.</li>
                                                        <li>According to the performance of the winner of this category in the Road Safety Lab Call and their adequate advancement in the Knowledge Voucher, they will be assigned one of the 150 Innovation Vouchers of the SDDE Environment program to receive the specialized support required for development of these solutions from the hand of experts.</li>
                                                        <li>This Váucher, which will cover up to COP $ 23 Million, may be used to receive specialized services in: the development of prototypes, adoption of technologies, development of specialized tests and support in the formulation of projects to apply for alternative financing mechanisms, among others. This phase will allow the market to validate the identified solution.</li>
                                                    </ul>
                                                </div>
                                                <div>
                                                    <h4 class="RSL-h4"><i>For technology Implementers (supply)</i></h4>
                                                    <p>The implementers or potential recipients of technology who register will have the opportunity to know and test the winning technological developments first-hand, at no cost, in the framework of pilot tests accompanied by the Secretariat of Mobility of Bogotá and its allies.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class='panel panel-default'>
                                        <div class='panel-heading' role='tab' id='headingRSL_eng_e'>
                                            <h4 class='panel-title'>
                                                <a role='button' data-toggle='collapse' data-parent='#accordion_eng' href='#collapseRSL_eng_e' aria-expanded='true' aria-controls='collapseRSL_eng_e'>
                                                    5. Requirements
                                                </a>
                                            </h4>
                                        </div>
                                        <div id='collapseRSL_eng_e' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingRSL_eng_e'>
                                            <div class='panel-body'>
                                                <div>
                                                    <h4 class="RSL-h4"><i>From developers:</i></h4>
                                                    <ul>
                                                        <li>Express your interest in sponsoring the testing of your technological development, lending some of their devices to a potential implementer for a defined period and sharing the information that may be collected through technology during the exercise.</li>
                                                        <li>Share information to understand and document the functionalities of technological development, as well as qualitative and quantitative success stories.</li>
                                                        <li>To access the benefits granted by Amazon, applicants must take into account the following considerations:
                                                            <ul>
                                                                <li>Businesses that have already received equal or larger credit size benefits on AWS in the past will not be eligible for this benefit.</li>
                                                                <li>Any application that is not found within the Secretariat's database will be rejected.</li>
                                                                <li>The email and domain registered in the AWS account must match the name of the account to receive approval of the credits. If the account is linked to a free email provider such as Gmail, Hotmail, Yahoo has a high probability of rejection due to the automatic verification system.</li>
                                                                <li>The process of validating the credits in the account can take up to 10 business days.</li>
                                                                <li>Terms and conditions apply: <a href="https://aws.amazon.com/activate/terms/" target="_blank" rel="noopener noreferrer">https://aws.amazon.com/activate/terms/</a></li>
                                                            </ul>
                                                        </li>
                                                        <li>To access the award granted by the District Secretary for Economic Development through the District Account Fund for Innovation, Technology and Creative Industries, the applicant must be a company and / or agglomeration that meets the following requirements:
                                                            <ul>
                                                                <li>Be located and/or have headquarters in the city of Bogotá D.C. (In the event that the winner does not meet this requirement, they must have a compliant ally in order to access the prize).</li>
                                                                <li>Have at least one (1) year of having been legally constituted at the time of the opening of the call (in case the winner does not comply with this requirement, they must have an ally who complies to be able to access the prize).</li>
                                                                <li>Have a valid commercial register (in case the winner does not comply with this requirement, he must have an ally who complies to be able to access the prize).</li>
                                                                <li>Be currently operating.</li>
                                                                <li>Not be in the liquidation process.</li>
                                                            </ul>
                                                        </li>

                                                    </ul>
                                                </div>
                                                <div>
                                                    <h4 class="RSL-h4"><i>From potential implementers:</i></h4>
                                                    <p>If selected, to commit oneself of receiving, using, and taking care of the devices as a loan for a specified period, as well as sharing the data that could be collected within trial.</p>
                                                </div>
                                                <div>
                                                    <h4 class="RSL-h4"><i>Fill out the application form and share with us your Pitch:</i></h4>
                                                    <p>Either your development as a generator of technology (Offer) or your implementation as a receptor of technology (supply).</p>
                                                    <p>Upload a video with your Pitch of maximum five (5) minutes, highest quality, with audio. You choose: You can display PowerPoint slides, show a render/demo or a video on a real life case. It is a plus if you show verifiable figures on the impact in terms of road safety. Do not miss anything, but always be executive (keep it short).</p>
                                                    <p>If you have not yet developed or implemented any technology, tell us more about how your organization is addressing or how it would address the issue of road safety (for example, fleet size, vehicle type, economic activity, road safety challenges, etc).</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class='panel panel-default'>
                                        <div class='panel-heading' role='tab' id='headingRSL_eng_evaluation'>
                                            <h4 class='panel-title'>
                                                <a role='button' data-toggle='collapse' data-parent='#accordion_eng' href='#collapseRSL_eng_evaluation' aria-expanded='true' aria-controls='collapseRSL_eng_evaluation'>
                                                    6. Evaluation Criteria
                                                </a>
                                            </h4>
                                        </div>
                                        <div id='collapseRSL_eng_evaluation' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingRSL_eng_evaluation'>
                                            <div class='panel-body'>
                                                <div class="RSL-evaluation">
                                                    <!-- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- -----
                                                                                                              Bloque Tabla
                                                    ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- -- -->

                                                    <div class='seccion'>
                                                        <div class='row'>
                                                            <div class='col-xs-12 col-sm-10 col-sm-offset-1'>
                                                                <div class='table-responsive'>
                                                                    <!-- <hr>
                                                                    <p class='text-center'><strong>EVALUATION CRITERIA PROPOSAL - ROAD SAFETY LAB</strong></p>
                                                                    <hr> -->
                                                                    <table class='table table-bordered table-striped'>
                                                                        <tr>
                                                                            <th>Criteria</th>
                                                                            <th>Description</th>
                                                                            <th>% of evaluation</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>1. Timeliness and relevance</td>
                                                                            <td>The application describes in detail how the technological development contributes to solve the problem. In other words, it offers a functionality that solves a particular road safety problem, preventing a certain risk factor (active safety) or mitigating the consequences of the occurrence of a road crashes (passive road safety)</td>
                                                                            <td align="center">20%</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>2. Efectiveness and impact in Road Safety</td>
                                                                            <td>The application quantitatively describes its relevance in mitigating or preventing any risk factor for road crashes or mitigating the consequences of their occurrence.</td>
                                                                            <td align="center">15%</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>3. Design and user experience</td>
                                                                            <td>The visual design of the solution is intuitive; therefore, it allows a quick understanding of its use and functionalities and / or the messages that are intended to be expressed to road users.</td>
                                                                            <td align="center">10%</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>4. Scalability and adaptability</td>
                                                                            <td>It is an adaptable development or with the ability to focus on the prevention of risk factors for road crashes and is capable of increasing its work capacity or expanding to many users of a system without compromising its performance and quality.</td>
                                                                            <td align="center">10%</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>5. Interoperability</td>
                                                                            <td>It is a development technically capable of exchanging data through a common set of exchange formats, to read and write the same file formats, and to use the same protocols as other technologies for its integration into smart city systems</td>
                                                                            <td align="center">10%</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>6. Sustainability</td>
                                                                            <td>The technological development integrates the various aspects of sustainability:
                                                                                <ul>
                                                                                    <li>Social (eg: inclusion and diversity of road users, empowerment of organizations to manage road safety from their competencies, co-creation, aging of society, gender equality, health and global well-being)</li>
                                                                                    <li>Environmental (ex: production chain - input - product - waste, impact, measures to face or counteract climate change, promotion of modal change, zero emission and carbon neutral solutions, etc)</li>
                                                                                    <li>Economic (ex: cost-benefit analysis, robustness of the feasibility study, circular economy, financing, market analysis, user requirements and needs, compliance)</li>
                                                                                </ul>
                                                                            </td>
                                                                            <td align="center">10%</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>7. Business model</td>
                                                                            <td>The developer proposes some business incentive to the potential implementers of the solution</td>
                                                                            <td align="center">10%</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>8. Use and reuse of data</td>
                                                                            <td>The technological development allows the collection of relevant data for the management of road safety, to carry out actions in real time or analysis in the office for the prevention of road crashes.</td>
                                                                            <td align="center">5%</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>9. Creativity and innovation</td>
                                                                            <td>The development is disruptive in the local context of the road safety technology market.</td>
                                                                            <td align="center">5%</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>10. Pitch Quality</td>
                                                                            <td>The development presentation is clear, concise, and allows the jury to appreciate how the solution works in an attractive and comprehensive way.</td>
                                                                            <td align="center">5%</td>
                                                                        </tr>
                                                                    </table>
                                                                    <p class='text-center'></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class='panel panel-default'>
                                        <div class='panel-heading' role='tab' id='headingRSL_eng_f'>
                                            <h4 class='panel-title'>
                                                <a role='button' data-toggle='collapse' data-parent='#accordion_eng' href='#collapseRSL_eng_f' aria-expanded='true' aria-controls='collapseRSL_eng_f'>
                                                    7. Contact
                                                </a>
                                            </h4>
                                        </div>
                                        <div id='collapseRSL_eng_f' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingRSL_eng_f'>
                                            <div class='panel-body'>
                                                <div class="RSL-contacto">
                                                    Alternatively you can also mail us at <a href="mailto:roadsafetylab@movilidadbogota.gov.co">roadsafetylab@movilidadbogota.gov.co</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class='panel panel-default'>
                                        <div class='panel-heading' role='tab' id='headingRSL_eng_g'>
                                            <h4 class='panel-title'>
                                                <a role='button' data-toggle='collapse' data-parent='#accordion_eng' href='#collapseRSL_eng_g' aria-expanded='true' aria-controls='collapseRSL_eng_g'>
                                                    8. Partners
                                                </a>
                                            </h4>
                                        </div>
                                        <div id='collapseRSL_eng_g' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingRSL_eng_g'>
                                            <div class='panel-body'>
                                                <h4 class="RSL-h4">Founder:</h4>
                                                <ul>
                                                    <li>Secretaría Distrital de Movilidad de Bogotá, D.C. (SDM) – <a href="http://www.movilidadbogota.gov.co/">http://www.movilidadbogota.gov.co/</a></li>
                                                </ul>
                                                <h4 class="RSL-h4">Allies:</h4>
                                                <ul>
                                                    <li>Organización Panamericana de la Salud (OPS) – <a href="http://www.paho.org/es">http://www.paho.org/es</a></li>
                                                    <li>Secretaría de Desarrollo Económico - <a href="http://www.desarrolloeconomico.gov.co/sites/default/files/fitic/">http://www.desarrolloeconomico.gov.co/sites/default/files/fitic/</a></li>
                                                    <li>Transmilenio - <a href="https://www.transmilenio.gov.co/">https://www.transmilenio.gov.co/</a></li>
                                                    <li>Alta Consejería para las TIC - <a href="https://tic.bogota.gov.co/">https://tic.bogota.gov.co/</a></li>
                                                    <li>Sharecollab – <a href="http://www.sharecollab.co/">http://www.sharecollab.co/</a> – Connecting The Dots – <a href="http://www.connectingthedots.co/">http://www.connectingthedots.co/</a></li>
                                                    <li>Amazon Web Services (AWS) – <a href="http://aws.amazon.com/">http://aws.amazon.com/</a></li>
                                                    <li>iNNpulsa Colombia - <a href="https://innpulsacolombia.com/">https://innpulsacolombia.com/</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class='panel panel-default'>
                                        <div class='panel-heading' role='tab' id='headingRSL_eng_h'>
                                            <h4 class='panel-title'>
                                                <a role='button' data-toggle='collapse' data-parent='#accordion_eng' href='#collapseRSL_eng_h' aria-expanded='true' aria-controls='collapseRSL_eng_h'>
                                                    9. FAQ
                                                </a>
                                            </h4>
                                        </div>
                                        <div id='collapseRSL_eng_h' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingRSL_eng_h'>
                                            <div class='panel-body'>
                                                <div>
                                                    <ul>
                                                        <li>Can I participate if I do not live in Bogotá D.C.? Yes, everyone can participate regardless of their geographical location. This call is open to any organization based inside or outside of Colombia. However, it is a relevant factor for the selection of finalists to be able to count on their participation in the development of trials in Bogota.</li>
                                                        <li>Can I fill out the form in English and Spanish? You can choose only one of the two languages to send us your application, either Spanish or English.</li>
                                                        <li>Can I postulate more than one technological development? Yes. You can do it by filling out the form completely again (one application per technological development postulation).</li>
                                                    </ul>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- /#fin RSL_eng -->


                            </div>
                        </div>

                        <!-- Fin Seccion en Ingles  -->
                    </div>
                </div>

            </div>

        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-xs-12 col-sm-4">
            <div class="RSL-img zoom">
                <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/06-10-2021/logo_sdm.png" alt="Secretaria Distrital de Movilidad" class="img-responsive w-100">
            </div>
        </div>

        <div class="col-xs-12 col-sm-4">
            <div class="RSL-img zoom">
                <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/06-10-2021/logo-altec_a.png" alt="Logo Alta Consejería Distrital de TIC" class="img-responsive w-100">
            </div>
        </div>

        <div class="col-xs-12 col-sm-4">
            <div class="RSL-img zoom">
                <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/06-10-2021/logo-sde_a.png" alt="Logo Secretaria de Desarrollo Económico " class="img-responsive w-100">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6 col-sm-2">
            <div class="RSL-img zoom"><img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/01-03-2022/logo_10_anhos.png" alt="Logo Innpulsa" class="img-responsive w-100"></div>
        </div>
        <div class="col-xs-6 col-sm-2">
            <div class="RSL-img zoom"><img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/06-10-2021/logo_red_esv_0.png" alt="Logo Red Empresarial de Seguridad Vial" class="img-responsive w-100"></div>
        </div>
        <div class="col-xs-6 col-sm-2">
            <div class="RSL-img zoom"><img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/06-10-2021/logo_aws_bk_a.png" alt="Logo AWS" class="img-responsive w-100"></div>
        </div>
        <div class="col-xs-6 col-sm-2">
            <div class="RSL-img zoom"><img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/06-10-2021/logo_transmilenio_b.png" alt="Logo Transmilenio" class="img-responsive w-100"></div>
        </div>
        <div class="col-xs-6 col-sm-2">
            <div class="RSL-img zoom"><img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/06-10-2021/logo_paho_bk_b.png" alt="Logo OPS - Organización Panamericana de Salud" class="img-responsive w-100"></div>
        </div>
        <div class="col-xs-6 col-sm-2">
            <div class="RSL-img zoom"><img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/06-10-2021/logo_sharecollab_a.png" alt="Logo Sharecollab" class="img-responsive w-100"></div>
        </div>
    </div>
    <hr>

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
        font-size: 16px;
        color: #363636;
        max-width: 940;
        margin: auto;
    }

    .w-100 {
        width: 100%;
    }

    .blind .btn-postulate {
        background-color: #191C3A !important;
        color: #66e026;
        /* width: 40%; */
        padding: 15px;
        text-align: center;
        border-radius: 8px;
        margin-top: 30px;
        margin-bottom: 30px;
        border: solid 3px #191C3A;
    }

    .blind .btn-postulate:hover {
        background-color: #66e026 !important;
        color: #191C3A;

    }

    .blind .btn-postulate a {
        background-color: #191C3A !important;
        color: #66e026;
        font-weight: 700;
        font-size: calc(1rem + 1vh);
        text-decoration: none;

    }

    .blind .btn-postulate:hover a {
        background-color: #66e026 !important;
        color: #191C3A;

    }

    .blind .nav-tabs>li>a,
    .blind .nav-tabs>li>a:focus,
    .blind .nav-tabs>li>a:hover {
        color: #191C3A !important;
        font-weight: 700;
    }

    .blind .nav-tabs>li.active>a,
    .blind .nav-tabs>li.active>a:focus,
    .blind .nav-tabs>li.active>a:hover {
        background-color: #191C3A !important;
        color: #66e026 !important;
        font-weight: 700;
    }

    .blind .nav-tabs>li.active>a,
    .blind .nav-tabs>li.active>a:focus,
    .blind .nav-tabs>li.active>a:hover {
        background-color: #191C3A !important;
        color: #66e026 !important;
        font-weight: 700;
    }

    .blind .RSL-header-txt {
        padding: 30px;
    }

    .blind p {
        padding-left: 15px;
        padding-right: 15px;
        text-align: justify;
    }

    .blind h3 {
        margin: 15px;
        color: #191C3A;
        font-weight: 700;
    }

    .blind .RSL-h4 {
        margin: 30px 15px 15px 15px;
        color: #191C3A;
        text-transform: uppercase;
        font-weight: 600;
        border-bottom: solid 2px #191C3Aee;
        padding-bottom: 8px;

    }

    .blind .panel-default>.panel-heading {
        background-color: #191C3A;
        color: #66e026;
        border-color: #ddd;
        padding: 15px;

    }

    .blind .panel-title>.small,
    .blind .panel-title>.small>a,
    .blind .panel-title>a,
    .blind .panel-title>small,
    .blind .panel-title>small>a {
        color: inherit;
        margin: 15px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .RSL-contacto {
        margin: 30px;
    }

    .RSL-agenda {
        margin: 20px;

    }

    .RSL-img {
        text-align: center;
        height: 100px;
        display: flex;
        justify-content: center;
        align-items: center;

    }

    .RSL-img img {
        margin: 5px;
        /* height: 200px; */
        width: 100%;
    }

    .bs {
        -webkit-box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.16);
        box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.16);
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

    /* IE9 */
    < !-- ----- ----- ----- ----- ----- ----- ----- ----- Hoja de estilo tabla --- ----- ----- ----- ----- ----- ----- ----- ----- --><style>.seccion td {
        vertical-align: middle !important;
    }

    .seccion th {
        background-color: #191C3A;
        color: #66e026;
        text-align: center;
    }
</style>
<!-- ----- ----- ----- ----- ----- ----- ----- ----- Hoja de estilo tabla --- ----- ----- ----- ----- ----- ----- ----- ----- -->

</style>
<!-- ----- ----- ----- ----- ----- ----- ----- ----- Fin hoja de estilo  ----- ----- ----- ----- ----- ----- ----- ----- -->