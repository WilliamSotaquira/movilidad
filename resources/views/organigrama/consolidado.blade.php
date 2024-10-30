@extends ('welcome')
@section ('contenido')

<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fuente Montserrat -----  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<link href="https://fonts.googleapis.com" rel="preconnect">
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet"><!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin Fuente Montserrat -  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<div class="seccion">
    <div class="cpnt cpnt-1">
        <h3>Estructura Organizacional Secretaría de Movilidad</h3>
        <p class="paragraph ph1">En este espacio se encuentra la estructura organizacional de la Secretaría de Movilidad, también podrá consultar quiénes son las personas que ejercen un rol directivo en nuestra Entidad, haciendo énfasis en sus perfiles profesionales, estudios y experiencia laboral previa. </p>
    </div>
    <hr>
    <div class="row">
        <div class="col-xs-12 text-center">
            <div class="boton_org"><a class="btn-org" href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/20-09-2024/organigrama_sdm_sept_2024_.pdf" rel="noopener noreferrer" target="_blank">Ver Organigrama Completo</a></div>
        </div>
    </div>
    <hr>
    <div class="cpnt cpnt-2">
        <div class="map-org-ppal"><img alt="Organigrama General de la Entidad" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/08-10-2021/1_2.png" title="Organigrama General de la Entidad" usemap="#image-map" width="900px"><map name="image-map"><area alt="Despacho de la Secretaría " coords="312,169,429,122" href="https://www.movilidadbogota.gov.co/web/organigrama#collapseDespacho" id="collapse1" shape="rect" target="" title="Despacho de la Secretaría "> <area alt="Subsecretaría de Política de Movilidad" coords="159,292,16,242" href="https://www.movilidadbogota.gov.co/web/organigrama#collapseSubPolMovilidad" id="collapse2" shape="rect" target="" title="Subsecretaría de Política de Movilidad"> <area alt="Subsecretaría de Gestión de la Movilidad" coords="205,242,347,291" href="https://www.movilidadbogota.gov.co/web/organigrama#collapseSGM" id="collapse3" shape="rect" target="" title="Subsecretaría de Gestión de la Movilidad"> <area alt="Subsecretaría de Servicios a la Ciudadanía" coords="396,242,536,290" href="https://www.movilidadbogota.gov.co/web/organigrama#collapseSSC" id="collapse4" shape="rect" target="" title="Subsecretaría de Servicios a la Ciudadanía"> <area alt="Subsecretaría de Gestión Jurídica" coords="584,242,727,291" href="https://www.movilidadbogota.gov.co/web/organigrama#collapseSGJ" id="collapse5" shape="rect" target="" title="Subsecretaría de Gestión Jurídica"> <area alt="Subsecretaría de Gestión Corporativa" coords="776,242,915,291" href="https://www.movilidadbogota.gov.co/web/organigrama#collapseGestionCorporativa" id="collapse6" shape="rect" target="" title="Subsecretaría de Gestión Corporativa"></map></div>
    </div>
    <hr>
    <div class="cpnt cpnt-3">
        <div class="panel-body-mapa">
            <div class="row">
                <div class="col-xs-12 col-sm-4 text-center">
                    <div class="img-ppal w-100"><img alt="Claudia Díaz Acosta - Secretario Distrital de Movilidad" class="img-responsive" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-01-2024/claudiadiazacosta.png"></div>
                </div>

                <div class="col-xs-12 col-sm-8 ">
                    <div class="descripcion">
                        <h1>Claudia Díaz Acosta</h1>

                        <h4>Secretaria Distrital de Movilidad</h4>

                        <div class="descripcion-xs">
                            <p>Ingeniera ambiental con maestría en Ingeniería Civil en el área de transporte de la Universidad de Los Andes. Tiene más de 13 años de experiencia diseñando, gestionando y ejecutando políticas y proyectos de movilidad tanto en el sector público como para organizaciones internacionales.</p>

                            <p>Fue consultora en el Banco Interamericano de Desarrollo, donde asesoró a varios países de América Latina en el diseño e implementación de iniciativas de transporte seguro, inclusivo y sostenible, así como de estrategias para mejorar la seguridad vial. Así mismo, fue consultora para la Agencia para el Desarrollo Internacional de Estados Unidos y el Servicio Forestal de los Estados Unidos para la Estrategia de Desarrollo Bajo en Carbono de Colombia.</p>

                            <p>A nivel distrital, fue asesora del despacho del secretario de Movilidad y posteriormente jefe de la Oficina de Seguridad Vial y Directora de Seguridad Vial de la Secretaría Distrital de Movilidad, donde lideró la implementación de la política de seguridad vial Visión Cero para Bogotá, logrando reducir el número de muertes por siniestros viales por 4 años consecutivos.</p>

                            <p>Asume el compromiso de hacer de Bogotá un lugar donde se puedan recorrer las calles con tranquilidad, protegiendo la vida en todos los modos de transporte. Seguirá trabajando por la transformación de la movilidad hacia la sostenibilidad, la conciencia vial, un transporte más eficiente y un aire más limpio.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="cpnt cpnt-3 colapsable">
        <div aria-multiselectable="true" class="panel-group" id="accordionPerfiles" role="tablist "><!-- Seccion Collapse Despacho de la Secretaría  -->
            <div class="panel panel-default">
                <div class="panel-heading ph-1" id="despacho" role="tab">
                    <h4 class="panel-title"><a aria-controls="collapseDespacho" aria-expanded="true" data-parent="#accordionPerfiles" data-toggle="collapse" href="#collapseDespacho" role="button">1. Despacho de la Secretaría </a></h4>
                </div>

                <div aria-labelledby="despacho" class="panel-collapse collapse" id="collapseDespacho" role="tabpanel">
                    <div class="panel-body">
                        <div class="panel-body-mapa"><!-- Bloque SVG Despacho de la Secretaría  -->
                            <div class="map-org"><!-- Image Map Generated by http://www.image-map.net/ --><img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/08-10-2021/2_1.png" usemap="#image-map"><map name="image-map"><area alt="Despacho de la Secretaría" coords="546,72,383,10" href="https://www.movilidadbogota.gov.co/web/entorno/#collapseOACCM" shape="rect" target="" title="Despacho de la Secretaría"></map></div>
                            <!-- Fin Bloque SVG Despacho de la Secretaría  -->
                        </div>

                        <div class="panel-body-mapa">
                            <div aria-multiselectable="true" class="panel-group" id="accordionDS" role="tablist "><!-- collapseOACCM -->
                                <div class="panel panel-default">
                                    <div class="panel-heading ph-2" id="headingOACCM" role="tab">
                                        <h4 class="panel-title"><a aria-controls="collapseOACCM" aria-expanded="true" data-parent="#accordionDS" data-toggle="collapse" href="#collapseOACCM" role="button">1.1. Oficina Asesora de Comunicaciones y Cultura para la Movilidad </a></h4>
                                    </div>

                                    <div aria-labelledby="headingOACCM" class="panel-collapse collapse" id="collapseOACCM" role="tabpanel">
                                        <div class="panel-body">
                                            <div class="panel-dependencia">
                                                <p>Asesora a la Secretaría Distrital de Movilidad en la formulación e implementación de políticas y estrategias de comunicación, adicionalmente tiene el rol de promover y fortalecer una cultura ciudadana segura, creando condiciones favorables para mejorar comportamientos en las vías generando un impacto positivo en la seguridad vial y en la seguridad de Bogotá.</p>
                                            </div>

                                            <div class="panel-body-mapa">

                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-4 text-center">
                                                        <div class="img-perfil w-100">
                                                            <img class="img-circle" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/11-07-2024/ana_maria_catano_blanco.png" alt="Foto: Ana María Cataño Blanco">
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-8 ">
                                                        <div class="descripcion">
                                                            <h1>Ana María Cataño Blanco</h1>
                                                            <h4>Jefe de la Oficina Asesora de Comunicaciones y Cultura para la Movilidad</h4>
                                                            <div class="descripcion-xs">
                                                                <p>Comunicadora social y periodista de la Universidad Pontificia Bolivariana, con maestría en Ciencias Políticas de la Universidad de los Andes. Tiene más de 13 años de experiencia en comunicación corporativa, mercadeo, posicionamiento de marca y relaciones públicas.</p>
                                                                <p>Se desempeñó como consultora de comunicaciones estratégicas y de marca, directora de desarrollo de negocios y mercadeo y gerente de comunicaciones en reconocidas empresas privadas, ganando así una sólida reputación como experta en comunicación 360, posicionamiento de marca, comunicación estratégica y corporativa, y estructuración de áreas y procesos de comunicación.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /#fin OACCM --><!-- collapseOTIC -->

                                <div class="panel panel-default">
                                    <div class="panel-heading ph-2" id="headingOTIC" role="tab">
                                        <h4 class="panel-title"><a aria-controls="collapseOTIC" aria-expanded="true" data-parent="#accordionDS" data-toggle="collapse" href="#collapseOTIC" role="button">1.2. Oficina de Tecnologías de la Información y las Comunicaciones </a></h4>
                                    </div>

                                    <div aria-labelledby="headingOTIC" class="panel-collapse collapse" id="collapseOTIC" role="tabpanel">
                                        <div class="panel-body">
                                            <div class="panel-dependencia">
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <p>Diseña lineamientos y metodologías para la definición, establecimiento, difusión y control de estándares de las Tics; así como promueve y apoya el desarrollo de sistemas informáticos y proporcionar los servicios y canales que mejoren la interconexión y calidad de servicios de comunicación, redes y transmisión de datos.</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="panel-body-mapa">

                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-4 text-center">
                                                        <div class="img-perfil w-100">
                                                            <img class="img-circle" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/11-07-2024/edgar_eduardo_romero_bohorquez.png" alt="Foto: Edgar Eduardo Romero Bohórquez">
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-8 ">
                                                        <div class="descripcion">
                                                            <h1>Edgar Eduardo Romero Bohórquez</h1>
                                                            <h4>Jefe Oficina de Tecnología de la Información y las Comunicaciones</h4>
                                                            <div class="descripcion-xs">
                                                                <p>Ingeniero de sistemas y magíster en ingeniería industrial de la Universidad de los Andes, con más de 30 años de experiencia profesional tanto en el sector privado como público. Experiencia en los sectores de hidrocarburos, impuestos, logística, distribución y movilidad.</p>
                                                                <p>Entre su trayectoria laboral se destaca que trabajó en Coljuegos como Jefe Oficina de Tecnología de la Información y en la Secretaría de Movilidad como Jefe Oficina de Información Sectorial entre los años 2016 y 2019. Cuenta con pericia en el liderazgo de las TI y en la gerencia de operaciones en áreas y proyectos de tecnología.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /#fin OTIC --><!-- collapseOSV -->

                                <div class="panel panel-default">
                                    <div class="panel-heading ph-2" id="headingOSV" role="tab">
                                        <h4 class="panel-title"><a aria-controls="collapseOSV" aria-expanded="true" data-parent="#accordionDS" data-toggle="collapse" href="#collapseOSV" role="button">1.3. Oficina de Seguridad Vial </a></h4>
                                    </div>

                                    <div aria-labelledby="headingOSV" class="panel-collapse collapse" id="collapseOSV" role="tabpanel">
                                        <div class="panel-body">
                                            <div class="panel-dependencia">
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <p>Fijar la seguridad vial como eje central de la Secretaría, privilegiando la planificación y formulación de lineamientos en esta materia e incorporando esta noción como eje básico en todos los procesos misionales de la Secretaría.</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="panel-body-mapa">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-4 text-center">
                                                        <div class="img-perfil w-100"><img alt="Foto: José Segundo López Valderrama" class="img-circle" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/06-03-2024/jose_segundo_lopez_valderrama.png"></div>
                                                    </div>

                                                    <div class="col-xs-12 col-sm-8 ">
                                                        <div class="descripcion">
                                                            <h1>José Segundo López Valderrama</h1>

                                                            <h4>Jefe de la Oficina de Seguridad Vial</h4>

                                                            <div class="descripcion-xs">
                                                                <p>Ingeniero civil con maestría en ingeniería civil con énfasis en transporte de la universidad de los Andes.</p>

                                                                <p>Se ha desempeñado como asistente graduado en el grupo de investigación SUR de los Andes, como ingeniero principal en el centro de investigación Despacio, y como coordinador internacional de datos en el equipo de seguridad vial en WRI Centro Ross para Ciudades Sostenibles, rol en el cual desarrolló actividades relacionadas con recolección y análisis de datos e investigación, así como inspecciones y auditorías de seguridad vial. También trabajó en temas de investigación en género y transporte.</p>

                                                                <p>A lo largo de su carrera ha asesorado proyectos de seguridad vial y movilidad sostenible desde su génesis hasta su evaluación aportando en todas las fases en tomar decisiones basadas en datos. Su objetivo en su nuevo cargo es trabajar en equipo para reducir la cantidad de fatalidades y heridas graves en el tránsito, contribuyendo así a una Bogotá de bien-estar.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /#fin OSV --><!-- collapseOGS -->

                                <div class="panel panel-default">
                                    <div class="panel-heading ph-2" id="headingOGS" role="tab">
                                        <h4 class="panel-title"><a aria-controls="collapseOGS" aria-expanded="true" data-parent="#accordionDS" data-toggle="collapse" href="#collapseOGS" role="button">1.4. Oficina de Gestión Social </a></h4>
                                    </div>

                                    <div aria-labelledby="headingOGS" class="panel-collapse collapse" id="collapseOGS" role="tabpanel">
                                        <div class="panel-body">
                                            <div class="panel-dependencia">
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <p>Incorpora lineamientos de política y estrategias para la sostenibilidad social y el logro de los beneficios sociales esperados con una perspectiva inclusiva y diferencial.</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="panel-body-mapa">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-4 text-center">
                                                        <div class="img-perfil w-100"><img alt="Foto: Juan David Villamarín García" class="img-circle" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/08-02-2024/juan_david_villamarin.png"></div>
                                                    </div>

                                                    <div class="col-xs-12 col-sm-8 ">
                                                        <div class="descripcion">
                                                            <h1>Juan David Villamarín García</h1>

                                                            <h4>Jefe de la Oficina de Gestión Social</h4>

                                                            <div class="descripcion-xs">
                                                                <p>Politólogo de la Universidad Nacional, especialista en Proyectos de Desarrollo de la Escuela Superior de Administración Pública, y Máster en Gestión Urbana y Desarrollo de la Erasmus Universiteit Rotterdam. Cuenta con más de una década de experiencia profesional en entidades públicas y privadas así como en organismos internacionales, donde ha gerenciado proyectos relacionados con el desarrollo social y urbano.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /#fin OGS --><!-- collapseOAPI -->

                                <div class="panel panel-default">
                                    <div class="panel-heading ph-2" id="headingOAPI" role="tab">
                                        <h4 class="panel-title"><a aria-controls="collapseOAPI" aria-expanded="true" data-parent="#accordionDS" data-toggle="collapse" href="#collapseOAPI" role="button">1.5. Oficina Asesora de Planeación Institucional. </a></h4>
                                    </div>

                                    <div aria-labelledby="headingOAPI" class="panel-collapse collapse" id="collapseOAPI" role="tabpanel">
                                        <div class="panel-body">
                                            <div class="panel-dependencia">
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <p>Asesorar en la formulación de las políticas de la Secretaría en materia de planeación, formulación y seguimiento a la ejecución de los planes, programas y proyectos para el logro de los objetivos y metas institucionales.</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="panel-body-mapa">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-4 text-center">
                                                        <div class="img-perfil w-100"><img alt="Foto: Julieth Rojas Betancour" class="img-circle" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/06-04-2020/julieth-rojas-betancour.jpg" title="Foto: Julieth Rojas Betancour"></div>
                                                    </div>

                                                    <div class="col-xs-12 col-sm-8 ">
                                                        <div class="descripcion">
                                                            <div>
                                                                <h1>Julieth Rojas Betancour</h1>

                                                                <h4>Jefe Oficina Asesora de Planeación</h4>
                                                            </div>

                                                            <div class="descripcion-xs">
                                                                <p>Administradora de empresas, especialista en Gestión Pública, magíster en Ingeniería Industrial, auditora líder en Sistemas de Gestión Integrados ISO 9001, ISO 14001 y OSHAS 18001, certificados por RABQSA. Con más de 10 años de experiencia profesional en la Secretaría Distrital de Movilidad, en transporte público, concesiones, estudios sectoriales y planeación institucional y estratégica.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /#fin OAPI --><!-- collapseOCD -->

                                <div class="panel panel-default">
                                    <div class="panel-heading ph-2" id="headingOCD" role="tab">
                                        <h4 class="panel-title"><a aria-controls="collapseOCD" aria-expanded="true" data-parent="#accordionDS" data-toggle="collapse" href="#collapseOCD" role="button">1.6. Oficina de Control Disciplinario. </a></h4>
                                    </div>

                                    <div aria-labelledby="headingOCD" class="panel-collapse collapse" id="collapseOCD" role="tabpanel">
                                        <div class="panel-body">
                                            <div class="panel-dependencia">
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <p>Dirige los procesos disciplinarios relacionados con las investigaciones a funcionarios y ex funcionarios con el fin de garantizarles el debido proceso, de conformidad con el Código Único Disciplinario y normas concordantes.</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="panel-body-mapa">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-4 text-center">
                                                        <div class="img-perfil w-100"><img alt="Foto: Guetty Caycedo Caycedo" class="img-circle" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-10-2020/guetty-caycedo.jpg" title="Foto: Guetty Caycedo Caycedo"></div>
                                                    </div>

                                                    <div class="col-xs-12 col-sm-8 ">
                                                        <div class="descripcion">
                                                            <div>
                                                                <h1>Guetty Caycedo Caycedo</h1>

                                                                <h4>Jefe de Oficina de Control Disciplinario</h4>
                                                            </div>

                                                            <div class="descripcion-xs">
                                                                <p>Profesional con amplia trayectoria en el sector público, particularmente en los campos del derecho administrativo, constitucional y disciplinario.</p>

                                                                <p>Es abogada, egresada de la Universidad Colegio Mayor de Cundinamarca, y especialista en Derecho Administrativo y Constitucional de la Universidad Católica de Colombia.</p>

                                                                <p>Trabajó en el Ministerio de Tecnologías de la Información y las Comunicaciones (Mintic), como asesora del despacho, con funciones de coordinación del grupo de talento humano y del grupo de control disciplinario.</p>

                                                                <p>También tiene experiencia laboral en las Superintendencias de Sociedades y de Industria y Comercio, entidades que en las que fue secretaría administrativa del grupo de control disciplinario, además coordinadora del grupo de notificaciones y de atención al ciudadano, por espacio de 13 años.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /#fin OCD --><!-- collapseOCI -->

                                <div class="panel panel-default">
                                    <div class="panel-heading ph-2" id="headingOCI" role="tab">
                                        <h4 class="panel-title"><a aria-controls="collapseOCI" aria-expanded="true" data-parent="#accordionDS" data-toggle="collapse" href="#collapseOCI" role="button">1.7. Oficina de Control Interno. </a></h4>
                                    </div>

                                    <div aria-labelledby="headingOCI" class="panel-collapse collapse" id="collapseOCI" role="tabpanel">
                                        <div class="panel-body">
                                            <div class="panel-dependencia">
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <p>Encargada de los mecanismos de autocontrol, autorregulación, valoración del riesgo y mejoramiento continuo.</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="panel-body-mapa">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-4 text-center">
                                                        <div class="img-perfil w-100"><img alt="Foto: Alba Enidia Villamil Muñoz" class="img-circle" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/12-09-2022/alba_enidia_villamil_munoz.png" title="Foto: Alba Enidia Villamil Muñoz"></div>
                                                    </div>

                                                    <div class="col-xs-12 col-sm-8 ">
                                                        <div class="descripcion">
                                                            <div>
                                                                <h1>Alba Enidia Villamil Muñoz</h1>

                                                                <h4>Jefe Oficina de Control Interno</h4>
                                                            </div>

                                                            <div class="descripcion-xs">
                                                                <p>Contadora Pública egresada de la Universidad Pedagógica y Tecnológica de Colombia. Profesional en planeación para el Desarrollo Social. Especialista en Gestión Pública de la Escuela Superior de Administración Pública - ESAP, y Especialista en Control Interno y en Alta Gerencia, de la Universidad Militar Nueva Granada. Máster en Estrategias Ambientales Territoriales y Desarrollo Local, de la Universidad de Huelva, España.</p>

                                                                <p>Tiene experiencia como Jefe de Oficina de Control Interno en entidades del Orden Nacional y Distrital en gestión e implementación del Sistema de Control Interno para entidades públicas, asesora de planes de desarrollo y plan decenal de educación, en Sistemas de Gestión de Calidad, como auditoría interna de calidad, contable y financiera,, Certificada como auditor líder IRCA (Registro Internacional de Auditores Certificados), auditor interno bajo las normas 9001-2015, 14001-2015 y 27001-2013 y en norma ISO 31000 de gestión de riesgos.</p>

                                                                <p>En su trayectoria profesional ha prestado servicios en las oficinas de control de la Unidad Administrativa Especial de Catastro Distrital –UAECD-, Secretaría Distrital de Hacienda, Departamento Nacional de Planeación Superintendencia de Puertos y Transporte, ahora denominada Superintendencia de Transporte, y en el Fondo Financiero de Proyectos de Desarrollo – FONADE, entre otros.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /#fin OCI -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Fin Seccion Collapse Despacho de la Secretaría  --><!-- collapseSubPolMovilidad -->

            <div class="panel panel-default">
                <div class="panel-heading ph-1" id="headingSubPolMovilidad" role="tab">
                    <h4 class="panel-title"><a aria-controls="collapseSubPolMovilidad" aria-expanded="true" data-parent="#accordionPerfiles" data-toggle="collapse" href="#collapseSubPolMovilidad" role="button">2. Subsecretaría de Política de Movilidad. </a></h4>
                </div>

                <div aria-labelledby="headingSubPolMovilidad" class="panel-collapse collapse" id="collapseSubPolMovilidad" role="tabpanel">
                    <div class="panel-body">
                        <div class="panel-dependencia">
                            <p>Planea las estrategias y el desarrollo articulado para la ejecución de planes, programas y proyectos que impacten de manera positiva la movilidad, el transporte y la infraestructura relacionada con la movilidad en la ciudad de Bogotá D.C., en coordinación con las demás áreas de la Secretaría Distrital de Movilidad, de acuerdo con los objetivos del Plan de Desarrollo Distrital, del Plan Maestro de Movilidad y la normatividad vigente.</p>
                        </div>

                        <div class="panel-body-mapa">
                            <div class="map-org"><!-- Image Map Generated by http://www.image-map.net/ --><img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/08-10-2021/3.png" usemap="#image-map"><map name="image-map"><area alt="Despacho de la Secretaría" coords="546,72,383,10" href="https://www.movilidadbogota.gov.co/web/entorno/#collapseOACCM" shape="rect" target="" title="Despacho de la Secretaría"></map></div>
                        </div>

                        <div class="panel-body-mapa">
                            <div class="row">
                                <div class="col-xs-12 col-sm-4 text-center">
                                    <div class="img-perfil w-100"><img alt="Foto: Ana Milena Gómez Guzmán" class="img-circle" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/06-02-2024/ana_milena_gomez.png"></div>
                                </div>

                                <div class="col-xs-12 col-sm-8 ">
                                    <div class="descripcion">
                                        <h1>Ana Milena Gómez Guzmán</h1>

                                        <h4>Subsecretaria De Política De Movilidad</h4>

                                        <div class="descripcion-xs">
                                            <p>Ingeniera Civil e Ingeniera Ambiental de la Universidad de los Andes, con un título de Magíster en Ingeniería Civil de la misma institución. Con una sólida trayectoria profesional de cerca de 10 años, ha dedicado gran parte de su carrera al ámbito de la movilidad.</p>

                                            <p>En la Secretaría Distrital de Movilidad, ocupó cargos del nivel asesor y directivo desde el 2 de enero de 2017 y hasta el 2 de mayo de 2021. Durante este periodo, desempeñó un papel fundamental en la definición de lineamientos para el transporte público y privado, así como en la formulación y adopción del Plan Estratégico de la Secretaría Distrital de Movilidad.</p>

                                            <p>Además, aportó su experiencia en la Financiera de Desarrollo Territorial S.A. - FINDETER, brindando asesoramiento y respaldo a la Dirección de Ciudades en la revisión y elaboración de términos de referencia para proyectos relacionados con transporte y movilidad. Su compromiso y contribuciones han dejado una huella significativa en el desarrollo y mejoramiento de políticas y proyectos en el campo de la movilidad urbana.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="panel-body-mapa">
                            <div aria-multiselectable="true" class="panel-group" id="accordionSPM" role="tablist "><!-- collapseDIM -->
                                <div class="panel panel-default">
                                    <div class="panel-heading ph-2" id="headingDIM" role="tab">
                                        <h4 class="panel-title"><a aria-controls="collapseDIM" aria-expanded="true" data-parent="#accordionSPM" data-toggle="collapse" href="#collapseDIM" role="button">2.1. Dirección de Inteligencia para la Movilidad. </a></h4>
                                    </div>

                                    <div aria-labelledby="headingDIM" class="panel-collapse collapse" id="collapseDIM" role="tabpanel">
                                        <div class="panel-body">
                                            <div class="panel-dependencia">
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <p>Dirige la realización de las investigaciones, estudios, análisis y propuestas de producción de insumos para la toma de decisiones y la innovación al interior de la Secretaría Distrital de Movilidad, de acuerdo con los Planes Distritales de Movilidad, Planes Distritales de Desarrollo y la normatividad vigente.</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="panel-body-mapa">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-4 text-center">
                                                        <div class="img-perfil w-100">
                                                            <img class="img-circle" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/03-07-2024/rafael_unda_venegas.png" alt="Foto: Rafael Unda Venegas">
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-8 ">
                                                        <div class="descripcion">
                                                            <h1>Rafael Unda Venegas</h1>
                                                            <h4>Director de Inteligencia para la Movilidad</h4>
                                                            <div class="descripcion-xs">
                                                                <p>Ingeniero civil y magíster en ingeniería civil con énfasis en transporte de la Universidad de los Andes. Realizó una maestría en planificación urbana en la Universidad de California en Berkeley, donde vivió tres años, de los cuales trabajó un año en UC Berkeley Safe Transportation Research and Education Center.</p>
                                                                <p>Se ha desempeñado como consultor en el sector transporte, también laboró en TransMilenio, y dentro de su experiencia laboral se destaca que hizo parte del equipo consultor que realizó la Encuesta de Movilidad 2019 para la Secretaría Distrital de Movilidad.</p>
                                                                <p>Pertenecer a la Entidad para él es un orgullo y una gran responsabilidad, se ha propuesto desde esta Dirección encontrar un balance entre los temas administrativos y el ser propositivo con ideas que permitan mejorar la movilidad en Bogotá.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /#fin DIM --><!-- collapseDPM -->

                                <div class="panel panel-default">
                                    <div class="panel-heading ph-2" id="headingDPM" role="tab">
                                        <h4 class="panel-title"><a aria-controls="collapseDPM" aria-expanded="true" data-parent="#accordionSPM" data-toggle="collapse" href="#collapseDPM" role="button">2.2. Dirección de Planeación de la Movilidad. </a></h4>
                                    </div>

                                    <div aria-labelledby="headingDPM" class="panel-collapse collapse" id="collapseDPM" role="tabpanel">
                                        <div class="panel-body">
                                            <div class="panel-dependencia">
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <p>Dirige las acciones relacionadas con el desarrollo de los planes, proyectos, el desarrollo de la movilidad, el tránsito, el transporte en todas sus modalidades y el desarrollo de la infraestructura vial y del transporte, de acuerdo con las Políticas generadas por la Subsecretaría de Política de la Movilidad, el Plan Maestro de Movilidad, el Plan Distrital de Desarrollo y las disposiciones aplicables a la materia.</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="panel-body-mapa">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-4 text-center">
                                                        <div class="img-perfil w-100"><img alt="Foto: Valentina Acuña García" class="img-circle" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/26-02-2024/valentina_acuna_garcia.png"></div>
                                                    </div>

                                                    <div class="col-xs-12 col-sm-8 ">
                                                        <div class="descripcion">
                                                            <h1>Valentina Acuña García</h1>

                                                            <h4>Directora de Planeación para la Movilidad</h4>

                                                            <div class="descripcion-xs">
                                                                <p>Ingeniera Civil y magíster en Transporte de la Universidad Nacional de Colombia.</p>

                                                                <p>Cuenta con amplia experiencia profesional en planeación del transporte, generación de fuentes de financiación para el transporte público e implementación de estrategias de gestión de la demanda.</p>

                                                                <p>En los últimos 3 años se desempeñó en el cargo de Subdirectora de Transporte Privado, en donde lideró proyectos como Pico y Placa Solidario, valet parking, cargue y descargue en horarios no convencionales y las redes empresariales de la Secretaría de Movilidad.</p>

                                                                <p>Desde su rol busca materializar diferentes proyectos reconociendo las necesidades de la ciudadanía en articulación con las diferentes áreas de la Entidad.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div aria-multiselectable="true" class="panel-group" id="accordionSPM_DPM" role="tablist "><!-- collapseSTPublico -->
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading" id="headingSTPublico" role="tab">
                                                            <h4 class="panel-title"><a aria-controls="collapseSTPublico" aria-expanded="true" data-parent="#accordionSPM_DPM" data-toggle="collapse" href="#collapseSTPublico" role="button">2.2.1. Subdirección de Transporte Público. </a></h4>
                                                        </div>

                                                        <div aria-labelledby="headingSTPublico" class="panel-collapse collapse" id="collapseSTPublico" role="tabpanel">
                                                            <div class="panel-body">
                                                                <div class="panel-dependencia">
                                                                    <div class="row">
                                                                        <div class="col-xs-12">
                                                                            <p>Dirige la formulación y ejecución de estrategias, planes, programas, proyectos de inversión y normatividad en materia de Transporte Público en todas sus modalidades, accesibilidad y transporte regional en la ciudad de Bogotá.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="panel-body-mapa">
                                                                    <div class="row">
                                                                        <div class="col-xs-12 col-sm-4 text-center">
                                                                            <div class="img-perfil w-100"><img alt="Foto: Sergio Alejandro Peña Pedreros" class="img-circle" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/09-05-2024/sergio_alejandro_pena_pedreros.png"></div>
                                                                        </div>

                                                                        <div class="col-xs-12 col-sm-8 ">
                                                                            <div class="descripcion">
                                                                                <h1>Sergio Alejandro Peña Pedreros</h1>

                                                                                <h4>Subdirector de Transporte Público</h4>

                                                                                <div class="descripcion-xs">
                                                                                    <p>Ingeniero en Transporte y Vías, especialista en Diseño de Vías, Tránsito y Transporte, magíster en Ingeniería y transporte, cuenta con una amplia experiencia en el desarrollo de diferentes proyectos de movilidad, Planes Maestros de Movilidad, estructuración de Sistemas Estratégicos de Transporte Público, estimaciones de demanda en diferentes modos de transporte y formulación de políticas en materia de movilidad.</p>

                                                                                    <p>Desde su nuevo rol en la Secretaría Distrital de Movilidad se compromete a avanzar en el desarrollo de estrategias de transporte público individual de pasajeros, el Sistema Interoperable de Recaudo, el transporte intermunicipal, el Sistema Integrado de Transporte Público (SITP), la implementación del Fondo de Estabilización Tarifaria (FET) y accesibilidad al transporte público.</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- /#fin STPublico --><!-- collapseSTPrivado -->

                                                    <div class="panel panel-default">
                                                        <div class="panel-heading" id="headingSTPrivado" role="tab">
                                                            <h4 class="panel-title"><a aria-controls="collapseSTPrivado" aria-expanded="true" data-parent="#accordionSPM_DPM" data-toggle="collapse" href="#collapseSTPrivado" role="button">2.2.2. Subdirección de Transporte Privado. </a></h4>
                                                        </div>

                                                        <div aria-labelledby="headingSTPrivado" class="panel-collapse collapse" id="collapseSTPrivado" role="tabpanel">
                                                            <div class="panel-body">
                                                                <div class="panel-dependencia">
                                                                    <div class="row">
                                                                        <div class="col-xs-12">
                                                                            <p>Dirige la formulación y ejecución de estrategias, planes, programas, proyectos de inversión y normatividad en materia de transporte privado en todas sus modalidades, medidas de gestión de la demanda y demás relacionadas en la ciudad de Bogotá D.C.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="panel-body-mapa">
                                                                    <div class="row">
                                                                        <div class="col-xs-12 col-sm-4 text-center">
                                                                            <div class="img-perfil w-100"><img alt="Foto: Francisco Javier Victoria Jaramillo" class="img-circle" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-03-2024/francisco_javier_victoria_jaramillo.png"></div>
                                                                        </div>

                                                                        <div class="col-xs-12 col-sm-8 ">
                                                                            <div class="descripcion">
                                                                                <h1>Francisco Javier Victoria Jaramillo</h1>

                                                                                <h4>Subdirector de Transporte Privado</h4>

                                                                                <div class="descripcion-xs">
                                                                                    <p>Ingeniero civil de la Universidad Nacional de Colombia, Magíster en Diseño Urbano de la misma Universidad y Magíster en Gestión del Desarrollo Urbano de la Universidad Erasmus de Rotterdam.</p>

                                                                                    <p>Ha trabajado en la Secretaría Distrital de movilidad en importantes proyectos relacionados con la promoción del uso de la bicicleta - incluyendo el primer planeador de rutas en bicicleta y la estructuración del actual Sistema de Bicicletas Compartidas - estrategias para la gestión de la demanda del transporte, y en las Zonas de Parqueo Pago. Asimismo trabajó para la Agencia Nacional de Seguridad Vial en la Dirección de Coordinación Interinstitucional para el fortalecimiento de la política pública de seguridad vial.</p>

                                                                                    <p>En su nuevo cargo tiene presentes tres grandes retos: contribuir a cambiar la forma en la que se mueve la carga dentro de la ciudad y entre la región para que sea más sostenible, eficiente y segura; afianzar la movilidad sostenible en empresas, universidades y entidades públicas; y racionalizar el uso de los autos y las motos a la vez que se promueve el uso de medios sostenibles.</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- /#fin STPrivado --><!-- collapseSByP -->

                                                    <div class="panel panel-default">
                                                        <div class="panel-heading" id="headingSByP" role="tab">
                                                            <h4 class="panel-title"><a aria-controls="collapseSByP" aria-expanded="true" data-parent="#accordionSPM_DPM" data-toggle="collapse" href="#collapseSByP" role="button">2.2.3. Subdirección de la Bicicleta y el Peatón </a></h4>
                                                        </div>

                                                        <div aria-labelledby="headingSByP" class="panel-collapse collapse" id="collapseSByP" role="tabpanel">
                                                            <div class="panel-body">
                                                                <div class="panel-dependencia">
                                                                    <div class="row">
                                                                        <div class="col-xs-12">
                                                                            <p>Dirige la formulación y ejecución de estrategias, planes, programas, proyectos de inversión y normatividad en materia de medios alternativos y no motorizados de movilidad segura y sostenible en la ciudad y, su promoción. Fomenta del uso de la bicicleta a través de temáticas como el sistema de bicicletas públicas, el registro de bicicletas, el mejoramiento y rehabilitación de la infraestructura y mobiliario para bicicletas y la ampliación de ellos.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="panel-body-mapa">
                                                                    <div class="row">
                                                                        <div class="col-xs-12 col-sm-4 text-center">
                                                                            <div class="img-perfil w-100"><img alt="Foto: Óscar Mauricio Velásquez Bobadilla" class="img-circle" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-02-2022/oscarmauriciovelasquezbobadilla.jpg" title="Foto: Óscar Mauricio Velásquez Bobadilla"></div>
                                                                        </div>

                                                                        <div class="col-xs-12 col-sm-8 ">
                                                                            <div class="descripcion">
                                                                                <h1>Óscar Mauricio Velásquez Bobadilla</h1>

                                                                                <h4>Subdirector de la Bicicleta y el Peatón</h4>

                                                                                <div class="descripcion-xs">
                                                                                    <p>Es Ingeniero Civil, Especialista en Ingeniería de Pavimentos, y con experiencia de más de 15 años en el sector público en el campo de la construcción, conservación y gestión de infraestructura urbana y rural del transporte.</p>

                                                                                    <p>En el Instituto de Desarrollo Urbano – IDU-, entidad a la que ingresó en el año 2005, tuvo a cargo la planeación, estructuración, ejecución y seguimiento de procesos y proyectos estratégicos para la gestión y desarrollo de la infraestructura de la ciudad.</p>

                                                                                    <p>También es docente desde hace ocho años de la Especialización en Ingeniería de Pavimentos, de la Universidad Católica, su alma Mater.</p>

                                                                                    <p>Ha sido coautor de muchas publicaciones de carácter nacional e internacional en temas como construcción para proyectos de infraestructura vial y de espacio público.</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- /#fin SByP --><!-- collapseSI -->

                                                    <div class="panel panel-default">
                                                        <div class="panel-heading" id="headingSI" role="tab">
                                                            <h4 class="panel-title"><a aria-controls="collapseSI" aria-expanded="true" data-parent="#accordionSPM_DPM" data-toggle="collapse" href="#collapseSI" role="button">2.2.4. Subdirección de Infraestructura. </a></h4>
                                                        </div>

                                                        <div aria-labelledby="headingSI" class="panel-collapse collapse" id="collapseSI" role="tabpanel">
                                                            <div class="panel-body">
                                                                <div class="panel-dependencia">
                                                                    <div class="row">
                                                                        <div class="col-xs-12">
                                                                            <p>Dirige el desarrollo de las políticas para el desarrollo, construcción, mantenimiento y rehabilitación de la infraestructura vial y de transporte.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="panel-body-mapa">
                                                                    <div class="row">
                                                                        <div class="col-xs-12 col-sm-4 text-center">
                                                                            <div class="img-perfil w-100"><img alt="Foto: Juan Carlos Tovar Rincón" class="img-circle" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/06-03-2024/juan_carlos_tovar_rincon.png"></div>
                                                                        </div>

                                                                        <div class="col-xs-12 col-sm-8 ">
                                                                            <div class="descripcion">
                                                                                <h1>Juan Carlos Tovar Rincón</h1>

                                                                                <h4>Subdirector de Infraestructura</h4>

                                                                                <div class="descripcion-xs">
                                                                                    <p>Ingeniero Civil de la Pontificia Universidad Javeriana con especialización en Diseño de Vías Urbanas, Tránsito y Transporte, así como en Gerencia de Proyectos.</p>

                                                                                    <p>Durante 8 años desarrolló proyectos de diseño, construcción e interventoría de infraestructura en el sector privado. Desde el 2005 se vinculó al sector público a través de la Secretaría Distrital de Planeación como profesional y luego como Director Encargado. Más adelante se desempeñó como Director Técnico de Proyectos en el Instituto de Desarrollo Urbano (IDU). En el año 2022 ingresó a la Secretaría Distrital de Movilidad como profesional especializado de carrera administrativa en la Oficina de Seguridad Vial, de la cual fue también Jefe Encargado.</p>

                                                                                    <p>Como Subdirector de Infraestructura se propone priorizar la accesibilidad y seguridad vial de todas las personas, en especial las más vulnerables, en la formulación y ejecución de Instrumentos de Planeación así como de los proyectos de infraestructura vial y de transporte en Bogotá entre los que se destacan la red Metro, Cables, Corredores de Transporte, Bici y Regiotram.</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- /#fin SI -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /#fin DPM -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /#fin SubPolMovilidad --><!-- collapseSGM -->

            <div class="panel panel-default">
                <div class="panel-heading ph-1" id="headingSGM" role="tab">
                    <h4 class="panel-title"><a aria-controls="collapseSGM" aria-expanded="true" data-parent="#accordionPerfiles" data-toggle="collapse" href="#collapseSGM" role="button">3. Subsecretaría de Gestión de la Movilidad </a></h4>
                </div>

                <div aria-labelledby="headingSGM" class="panel-collapse collapse" id="collapseSGM" role="tabpanel">
                    <div class="panel-body">
                        <div class="panel-dependencia">
                            <div class="row">
                                <div class="col-xs-12">
                                    <p>Dirige la ejecución de las políticas, planes y programas de tránsito y transporte de acuerdo con el Plan de Ordenamiento Territorial y el Plan Maestro de Movilidad del Distrito Capital.</p>
                                </div>
                            </div>
                        </div>

                        <div class="panel-body-mapa">
                            <div class="map-org"><!-- Image Map Generated by http://www.image-map.net/ --><img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/08-10-2021/4_1.png" usemap="#image-map"><map name="image-map"><area alt="Despacho de la Secretaría" coords="546,72,383,10" href="https://www.movilidadbogota.gov.co/web/entorno/#collapseOACCM" shape="rect" target="" title="Despacho de la Secretaría"></map></div>
                        </div>

                        <div class="panel-body-mapa">
                            <div class="row">
                                <div class="col-xs-12 col-sm-4 text-center">
                                    <div class="img-perfil w-100"><img alt="Jhon Alexander González Mendoza" class="img-circle" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-11-2021/perfil_jhonalexandergonzalez.jpg" title="Jhon Alexander González Mendoza"></div>
                                </div>

                                <div class="col-xs-12 col-sm-8 ">
                                    <div class="descripcion">
                                        <h1>Jhon Alexander González Mendoza</h1>

                                        <h4>Subsecretario de Gestión de la Movilidad</h4>

                                        <div class="descripcion-xs">
                                            <p>Ingeniero Civil de la Universidad Nacional de Colombia, Especialista en Tránsito, Diseño y Seguridad vial, en proceso de Magister en Ingeniería de Transporte en la misma alma máter. Además, tiene estudios complementarios en modelación del transporte y el tránsito, así como auditorias de seguridad vial y diseño urbano.</p>

                                            <p>Basa su perfil profesional en el marco del diseño seguro y la modelación del transporte y el tránsito, enfocándose en el comportamiento peatonal y de ciclistas. Parte de su experiencia la ha desarrollado en la elaboración de diferentes estudios y diseños a nivel nacional, para diferentes firmas consultoras en términos de: Estudios de transporte y tránsito, modelación del tráfico, diseño geométrico vial, diseño de señalización, planes manejo de tráfico en obra y auditorias de seguridad vial. Su mayor reto es lograr armonizar los diferentes proyectos viales en el marco de la planeación, la gestión y la ejecución en el distrito con altos estándares de calidad, eficiencia y seguridad vial.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="panel-body-mapa">
                            <div aria-multiselectable="true" class="panel-group" id="accordionSGM" role="tablist "><!-- collapseDIT -->
                                <div class="panel panel-default">
                                    <div class="panel-heading ph-2" id="headingDIT" role="tab">
                                        <h4 class="panel-title"><a aria-controls="collapseDIT" aria-expanded="true" data-parent="#accordionSGM" data-toggle="collapse" href="#collapseDIT" role="button">3.1. Dirección de Ingeniería de Tránsito </a></h4>
                                    </div>

                                    <div aria-labelledby="headingDIT" class="panel-collapse collapse" id="collapseDIT" role="tabpanel">
                                        <div class="panel-body">
                                            <div class="panel-dependencia">
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <p>Dirige la ejecución de las políticas, planes, programas y proyectos relacionados con la señalización vertical y horizontal de la ciudad, así como los demás elementos y dispositivos que propendan por garantizar la seguridad vial, el buen uso del espacio público.</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="panel-body-mapa">
                                                <div class="row">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-4 text-center">
                                                            <div class="img-perfil w-100"><img alt="Foto: Juan Camilo Rodríguez Cárdenas" class="img-circle" src="https://www.movilidadbogota.gov.co/web/sites/default/files/juancamilorodriguezcardenas.png" title="Foto: Juan Camilo Rodríguez Cárdenas"></div>
                                                        </div>

                                                        <div class="col-xs-12 col-sm-8 ">
                                                            <div class="descripcion">
                                                                <h1>Juan Camilo Rodríguez Cárdenas</h1>

                                                                <h4>Director de Ingeniería de Tránsito</h4>

                                                                <div class="descripcion-xs">
                                                                    <p>Arquitecto egresado de la Universidad de La Salle, Especialista en Espacio Público y Magister en Planeación Urbana y Regional de la Universidad Javeriana, apasionado por la planeación de la ciudad y la proyección de medidas que mejoren las condiciones de seguridad vial, priorizando peatones y ciclistas. Con más de diez años de trayectoria profesional, trabajó en la Subdirección de Operaciones de la Secretaría de Hábitat de Bogotá, en la formulación, estructuración y diseño de proyectos integrales de espacio público, como componente de las intervenciones integrales del hábitat.</p>

                                                                    <p>En el año 2016 se vinculó a la Secretaría Distrital de Movilidad, en lo que hoy es la Subdirección de la Bicicleta y el Peatón, desarrollando procesos de diseño, viabilización, implementación, análisis y seguimiento de los proyectos de transporte no motorizado. Finalizando el año 2018 se vinculó a la Subsecretaría de Gestión de la Movilidad y la Dirección de Ingeniería de Tránsito, en donde se enfocó en la planeación, priorización, ejecución y seguimiento de las intervenciones del sistema de señalización vial, con alto énfasis en los proyectos de cicloinfraestructura, urbanismos tácticos y corredores arteriales.</p>

                                                                    <p>Dentro de sus objetivos en la Dirección están la planeación integral del sistema de señalización vial, a nivel multiescalar, el robustecimiento de las implementaciones en vía, así como la definición de lineamientos para el diseño de proyectos enfocados en mejorar las condiciones de seguridad vial de peatones y ciclistas.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div aria-multiselectable="true" class="panel-group" id="accordionSGM_DIT" role="tablist "><!-- collapseSS -->
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading" id="headingSS" role="tab">
                                                            <h4 class="panel-title"><a aria-controls="collapseSS" aria-expanded="true" data-parent="#accordionSGM_DIT" data-toggle="collapse" href="#collapseSS" role="button">3.1.1. Subdirección de Señalización. </a></h4>
                                                        </div>

                                                        <div aria-labelledby="headingSS" class="panel-collapse collapse" id="collapseSS" role="tabpanel">
                                                            <div class="panel-body">
                                                                <div class="panel-dependencia">
                                                                    <div class="row">
                                                                        <div class="col-xs-12">
                                                                            <p>Desarrolla la señalización vertical y horizontal de la ciudad, y demás elementos y dispositivos que garanticen la seguridad vial, el buen uso del espacio público y la gestión del tránsito en la ciudad.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="panel-body-mapa">

                                                                    <div class="row">
                                                                        <div class="col-xs-12 col-sm-4 text-center">
                                                                            <div class="img-perfil w-100">
                                                                                <img class="img-circle" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-05-2024/andrea_gutierrez.png" alt="Foto: Francy Andrea Gutiérrez Velandia">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xs-12 col-sm-8 ">
                                                                            <div class="descripcion">
                                                                                <h1>Francy Andrea Gutiérrez Velandia</h1>
                                                                                <h4>Subdirectora de señalización</h4>
                                                                                <div class="descripcion-xs">
                                                                                    <p>Francy Andrea Gutiérrez Velandia es arquitecta urbanista egresada de la Universidad Católica de Colombia, con especialización en Gestión de Ciudad y Territorio de la Universidad Externado de Colombia.</p>
                                                                                    <p>Cuenta con experiencia en el desarrollo de obras de espacio público, desde su diseño inicial hasta su ejecución, interventoría, diseño urbano, investigación, norma urbanística y proyectos de movilidad activa y sostenible con enfoque en urbanismo táctico y participación ciudadana.</p>
                                                                                    <p>Con una trayectoria de cuatro años en la Secretaría de Movilidad - inicialmente en la Subdirección de Infraestructura y posteriormente liderando el proyecto Barrios Vitales en la Dirección de Planeación de Movilidad - busca desde su nuevo rol identificar oportunidades de transformación en la señalización urbana mediante acciones innovadoras. Su objetivo es fortalecer los proyectos en curso de la Entidad, proyectando a Bogotá como una ciudad que garantice una movilidad segura para todos sus habitantes.</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>


                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- /#fin SS --><!-- collapseSPMT -->

                                                    <div class="panel panel-default">
                                                        <div class="panel-heading" id="headingSPMT" role="tab">
                                                            <h4 class="panel-title"><a aria-controls="collapseSPMT" aria-expanded="true" data-parent="#accordionSGM_DIT" data-toggle="collapse" href="#collapseSPMT" role="button">3.1.2. Subdirección de Planes de Manejo de Tránsito. </a></h4>
                                                        </div>

                                                        <div aria-labelledby="headingSPMT" class="panel-collapse collapse" id="collapseSPMT" role="tabpanel">
                                                            <div class="panel-body">
                                                                <div class="panel-dependencia">
                                                                    <div class="row">
                                                                        <div class="col-xs-12">
                                                                            <p>Dirige las actividades para viabilizar, autorizar o denegar los planes de manejo de tránsito (PMT) para obras, de alto, medio y bajo impacto localizado en la malla vial de la ciudad de Bogotá D.C. y realizar seguimiento a su implementación.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="panel-body-mapa">
                                                                    <div class="row">
                                                                        <div class="col-xs-12 col-sm-4 text-center">
                                                                            <div class="img-perfil w-100"><img alt="" class="img-circle" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/03-07-2020/martha-bayona.jpg"></div>
                                                                        </div>

                                                                        <div class="col-xs-12 col-sm-8 ">
                                                                            <div class="descripcion">
                                                                                <h1>Martha Cecilia Bayona Gómez</h1>

                                                                                <h4>Subdirectora de Planes de Manejo de Tránsito</h4>

                                                                                <div class="descripcion-xs">
                                                                                    <p>Es ingeniera civil de la Universidad Gran Colombia, Especialista en Diseño de Vías Urbanas, Tránsito y Transporte de la Universidad Francisco José de Caldas Se ha desempeñó como profesional universitaria en la Secretaría Distrital de Movilidad y en el Instituto de Desarrollo Urbano por más de 12 años. También ha sido consultora y asesora en el sector privado en temas relacionados con señalización, estudios de tránsito y planes de manejo de tránsito.</p>

                                                                                    <p>Desde hace ocho años está vinculada a la Secretaría Distrital de Movilidad como líder del equipo de planes de manejo de tránsito (PMT). Ha participado en la construcción de grandes obras de infraestructura vial en Bogotá con diseños de tránsito.</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- /#fin SPMT -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /#fin DIT --><!-- collapseDGTCTT -->

                                <div class="panel panel-default">
                                    <div class="panel-heading ph-2" id="headingDGTCTT" role="tab">
                                        <h4 class="panel-title"><a aria-controls="collapseDGTCTT" aria-expanded="true" data-parent="#accordionSGM" data-toggle="collapse" href="#collapseDGTCTT" role="button">3.2. Dirección de Gestión de Tránsito y Control de Tránsito y Transporte. </a></h4>
                                    </div>

                                    <div aria-labelledby="headingDGTCTT" class="panel-collapse collapse" id="collapseDGTCTT" role="tabpanel">
                                        <div class="panel-body">
                                            <div class="panel-dependencia">
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <p>Dirige la formulación, ejecución, así como realiza el seguimiento a las políticas, planes, programas y proyectos relacionadas con la Gestión del Tránsito y Control del Tránsito y del Transporte, que permitan el mejoramiento de las condiciones de movilidad, la aplicación de estrategias para la seguridad vial de los diferentes actores que actúan en la vía y ejerce el control sobre el tránsito y el transporte en la ciudad.</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="panel-body-mapa">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-4 text-center">
                                                        <div class="img-perfil w-100"><img alt="Foto: Nathaly Patiño González" class="img-circle" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/05-04-2023/nathalypatinho.png" title="Foto: Nathaly Patiño González"></div>
                                                    </div>

                                                    <div class="col-xs-12 col-sm-8 ">
                                                        <div class="descripcion">
                                                            <div>
                                                                <h1>Nathaly Patiño González</h1>

                                                                <h4>Directora de Gestión de Tránsito y Control de Tránsito y Transporte</h4>
                                                            </div>

                                                            <div class="descripcion-xs">
                                                                <p>Ingeniera Civil de la Universidad Nacional de Colombia, con experiencia en tránsito y transporte, especialmente en temas relacionados con gestión en vía en la Secretaría Distrital de Movilidad y en proyectos de consultoría. Tiene una especialización en Tránsito y Transporte de la Universidad Pedagógica y Tecnológica de Colombia.</p>

                                                                <p>Fue contratista en la Subdirección de Gestión en Vía, donde tenía a su cargo las Localidades de Santa Fe, Candelaria, Chapinero y de la Avenida Caracas. Posteriormente, se desempeñó como Subdirectora, rol en el que se destacó por trabajar para que la ciudadanía reconozca a la Entidad como una mano amiga en la vía. Asume esta dirección con el propósito de continuar cuidando a la Ciudad desde la gestión y el control. Además de fortalecer a los equipos que están en vía, demostrando eficiencia en la atención de situaciones de emergencia, y en momentos claves como la época de lluvias, los planes éxodo y retorno y las manifestaciones que se presentan en Bogotá.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div aria-multiselectable="true" class="panel-group" id="accordionSGM_DGTCTT" role="tablist "><!-- collapseSGV -->
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading" id="headingSGV" role="tab">
                                                            <h4 class="panel-title"><a aria-controls="collapseSGV" aria-expanded="true" data-parent="#accordionSGM_DGTCTT" data-toggle="collapse" href="#collapseSGV" role="button">3.2.1. Subdirección de Gestión en Vía. </a></h4>
                                                        </div>

                                                        <div aria-labelledby="headingSGV" class="panel-collapse collapse" id="collapseSGV" role="tabpanel">
                                                            <div class="panel-body">
                                                                <div class="panel-dependencia">
                                                                    <div class="row">
                                                                        <div class="col-xs-12">
                                                                            <p>Dirige la implementación y ejecución de las políticas, planes, programas y proyectos establecidos para la gestión del tránsito en vía, que permitan el mejoramiento de las condiciones de movilidad y la aplicación de estrategias para la seguridad vial de los diferentes actores que actúan en la vía.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="panel-body-mapa">
                                                                    <div class="row">
                                                                        <div class="col-xs-12 col-sm-4 text-center">
                                                                            <div class="img-perfil w-100"><img alt="Foto: Jhon Freddy Domínguez Fuentes" class="img-circle" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/14-04-2023/jhonfreddydominguezfuentes.png" title="Foto: Jhon Freddy Domínguez Fuentes"></div>
                                                                        </div>

                                                                        <div class="col-xs-12 col-sm-8 ">
                                                                            <div class="descripcion">
                                                                                <h1>Jhon Freddy Domínguez Fuentes</h1>

                                                                                <h4>Subdirector de Gestión en Vía</h4>

                                                                                <div class="descripcion-xs">
                                                                                    <p>Ingeniero civil de la Universidad Industrial de Santander; especialista en gestión de proyectos de la Corporación Universitaria Minuto de Dios; cursó y aprobó todo el contenido académico de la Maestría en Transporte de la Universidad de los Andes.</p>

                                                                                    <p>Jhon Freddy es bumangués, llegó a Bogotá en el 2012 y cuenta con 11 años de experiencia en el sector transporte y seguridad vial. Desde que se radicó en la Ciudad ha trabajado en dos organizaciones, una consultora privada y en la Secretaría Distrital de Movilidad. Ingresó a la Entidad en el 2016 desempeñando diferentes funciones para la Subdirección de Gestión en Vía y posteriormente para la Dirección de Gestión de Tránsito y Control de Tránsito y Transporte, De igual forma contribuyó, desde la Subdirección de la Bicicleta y el Peatón, a que el proyecto de bicicletas compartidas llegara a su operación total en enero de 2023.</p>

                                                                                    <p>Asume este cargo con el objetivo de seguir aportando al mejoramiento de la calidad de vida de la ciudadanía, en términos de minimizar sus tiempos de viaje y de actuar con celeridad ante cualquier eventualidad en las vías.</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- /#fin SGV --><!-- collapseSSemaforizacion -->

                                                    <div class="panel panel-default">
                                                        <div class="panel-heading" id="headingSSmaforizacion" role="tab">
                                                            <h4 class="panel-title"><a aria-controls="collapseSSemaforizacion" aria-expanded="true" data-parent="#accordionSGM_DGTCTT" data-toggle="collapse" href="#collapseSSemaforizacion" role="button">3.2.2. Subdirección de Semaforización. </a></h4>
                                                        </div>

                                                        <div aria-labelledby="headingSSmaforizacion" class="panel-collapse collapse" id="collapseSSemaforizacion" role="tabpanel">
                                                            <div class="panel-body">
                                                                <div class="panel-dependencia">
                                                                    <div class="row">
                                                                        <div class="col-xs-12">
                                                                            <p>Dirige la formulación e implementación de las políticas, planes, programas y proyectos relacionados con los dispositivos de semaforización, que permitan mejorar de las condiciones de movilidad y seguridad vial de los diferentes actores viales de Bogotá D.C</p>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="panel-body-mapa">
                                                                    <div class="row">
                                                                        <div class="col-xs-12 col-sm-4 text-center">
                                                                            <div class="img-perfil w-100"><img alt="Foto: Diego Andrés Suárez Gómez" class="img-circle" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/14-02-2024/diego_andres_suarez_gomez.png"></div>
                                                                        </div>

                                                                        <div class="col-xs-12 col-sm-8 ">
                                                                            <div class="descripcion">
                                                                                <h1>Diego Andrés Suárez Gómez</h1>

                                                                                <h4>Subdirector de Semaforización</h4>

                                                                                <div class="descripcion-xs">
                                                                                    <p>Ingeniero de Transporte con especialización en Tránsito y Transporte, y Magíster en Ingeniería con énfasis en transporte de la Universidad Tecnológica y Pedagógica de Colombia, -UPTC- en Tunja. Su formación académica se complementa con cursos adicionales, entre los cuales se destaca el de Modelos de Elección para Análisis Econométricos en Transporte, realizado en la Universidad de los Andes.</p>

                                                                                    <p>Tiene amplia experiencia en el manejo de herramientas de simulación de transporte, en la generación de modelos de tránsito, así como en la coordinación de grupos de trabajo para la elaboración de documentos de política pública, en varios municipios del país, entre ellos en el área Metropolitana del Valle de Aburrá.</p>

                                                                                    <p>Se ha desempeñado en la Secretaría Distrital de Movilidad como contratista, y en los últimos dos años y medio ejerció el cargo de subdirector de infraestructura, armonizando los distintos proyectos que se están desarrollando en la ciudad en materia de movilidad, privilegiando las personas más vulnerables siempre con principios de conectividad, accesibilidad y funcionalidad.</p>

                                                                                    <p>Se propone continuar trabajando para lograr potenciar el gran sistema inteligente de semáforos que tiene Bogotá, así como aprovechar los grandes beneficios que ofrece el sistema en la obtención de múltiples datos operativos las 24 horas del día.</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- /#fin SSemaforizacion --><!-- collapseSCTT -->

                                                    <div class="panel panel-default">
                                                        <div class="panel-heading" id="heading" role="tab">
                                                            <h4 class="panel-title"><a aria-controls="collapseSCTT" aria-expanded="true" data-parent="#accordionSGM_DGTCTT" data-toggle="collapse" href="#collapseSCTT" role="button">3.2.3. Subdirección de Control de Tránsito y Transporte. </a></h4>
                                                        </div>

                                                        <div aria-labelledby="heading" class="panel-collapse collapse" id="collapseSCTT" role="tabpanel">
                                                            <div class="panel-body">
                                                                <div class="panel-dependencia">
                                                                    <div class="row">
                                                                        <div class="col-xs-12">
                                                                            <p>Dirige las acciones de regulación y control del tránsito y del transporte de los diferentes actores viales.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="panel-body-mapa">
                                                                    <div class="row">
                                                                        <div class="col-xs-12 col-sm-4 text-center">
                                                                            <div class="img-perfil w-100"><img alt="Foto: Jack David Hurtado Casquette" class="img-circle" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/23-05-2022/jackhurtado.png"></div>
                                                                        </div>

                                                                        <div class="col-xs-12 col-sm-8 ">
                                                                            <div class="descripcion">
                                                                                <h1>Jack David Hurtado Casquette</h1>

                                                                                <h4>Subdirector de Control de Tránsito y Transporte</h4>

                                                                                <div class="descripcion-xs">
                                                                                    <p>Ingeniero Industrial de la Universidad Central, Magíster en Ingeniería Civil con Énfasis en Tránsito y Transporte de la Escuela Colombiana de Ingeniería Julio Garavito.</p>

                                                                                    <p>Cuenta con 7 años de experiencia en temáticas asociadas al tránsito y transporte, dirección de personal, diseño e implementación de actividades de control, programación y asignación de recursos, operación de sistemas de préstamo de bicicletas y orientación de tránsito en aglomeraciones de público. Todas estas actividades desarrolladas en campo, buscando proporcionar mejoras a las condiciones de movilidad de los diferentes actores viales.</p>

                                                                                    <p>Ingresó a la Secretaría Distrital de Movilidad en el 2008 como guía en bicicleta hasta el 2012. Desde mediados del 2015 laboró como profesional de la DCV en el programa ruta pila, trabajando temas relacionados al control del transporte y el servicio especial a tricimotores.</p>

                                                                                    <p>Para su gestión como subdirector, asume como reto el lograr que el cuerpo de agentes civiles se afiance y crezca para suplir las necesidades de la ciudad en términos de control al tránsito y transporte.</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- /#fin SCTT -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /#fin DGTCTT -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /#fin SGM --><!-- collapseSSC -->

            <div class="panel panel-default">
                <div class="panel-heading ph-1" id="headingSSC" role="tab">
                    <h4 class="panel-title"><a aria-controls="collapseSSC" aria-expanded="true" data-parent="#accordionPerfiles" data-toggle="collapse" href="#collapseSSC" role="button">4. Subsecretaría de Servicios a la Ciudadanía </a></h4>
                </div>

                <div aria-labelledby="headingSSC" class="panel-collapse collapse" id="collapseSSC" role="tabpanel">
                    <div class="panel-body">
                        <div class="panel-dependencia">
                            <p>Dirige las acciones relacionadas con el desarrollo de los planes, proyectos, el desarrollo de la movilidad, el tránsito, el transporte en todas sus modalidades y el desarrollo de la infraestructura vial y del transporte, de acuerdo con las Políticas generadas por la Subsecretaría de Política de la Movilidad, el Plan Maestro de Movilidad, el Plan Distrital de Desarrollo y las disposiciones aplicables a la materia.</p>
                        </div>

                        <div class="panel-body-mapa">
                            <div class="map-org"><img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/08-10-2021/5_1.png" usemap="#image-map"><map name="image-map"><area alt="Despacho de la Secretaría" coords="546,72,383,10" href="https://www.movilidadbogota.gov.co/web/entorno/#collapseOACCM" shape="rect" target="" title="Despacho de la Secretaría"></map></div>
                        </div>

                        <div class="panel-body-mapa">
                            <div class="row">
                                <div class="col-xs-12 col-sm-4 text-center">
                                    <div class="img-perfil w-100"><img alt="Foto Adriana Ruth Iza Certuche" class="img-circle" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/28-07-2022/adrianaruthizacertuche.png"></div>
                                </div>

                                <div class="col-xs-12 col-sm-8 ">
                                    <div class="descripcion">
                                        <h1>Adriana Ruth Iza Certuche</h1>

                                        <h4>Subsecretaria de Servicios a la Ciudadanía</h4>

                                        <div class="descripcion-xs">
                                            <p>Administradora de empresas con máster en Estudios Políticos de la Universidad Javeriana. Candidata a magíster en Derecho y Gestión Urbanística y especialista en Evaluación Social de Proyectos en la Universidad de los Andes.</p>

                                            <p>Durante su carrera se ha enfocado en la implementación de estrategias de cambio social, es así que, se destaca su labor dentro de la Secretaría Distrital de Movilidad, donde se ha desempeñado desde diferentes cargos: como Directora de Estudios Sectoriales lideró el proceso de sustitución de vehículos de tracción animal para el transporte en Bogotá a nuevas formas de transporte que mejoraran la calidad de vida de las personas menos beneficiadas. Durante su paso por la Oficina de Gestión Social se enfocó en proyectos de eliminación de brechas de género en el sector de tránsito y transporte y creó y lideró el primer Centro de Orientación a Víctimas de Siniestros Viales (ORVI). Como Subsecretaria de Servicio a la Ciudadanía ha logrado innovaciones en la atención a la ciudadanía como la incorporación de mujeres en la flota de operaciones que conducen grúas, estabilizó la puesta en operación plena de la Ventanilla Única de Servicios, articuló en una sola aplicación “Mi Movilidad a un Clic” los servicios de toda la entidad para facilidad de las personas, implementó el nuevo sistema contravencional para disminuir tiempos de atención, además de la ampliación de canales de atención y 5 nuevas salas de cursos pedagógicos.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="panel-body-mapa">
                            <div aria-multiselectable="true" class="panel-group" id="accordionSSC" role="tablist "><!-- collapseDAC -->
                                <div class="panel panel-default">
                                    <div class="panel-heading ph-2" id="headingDAC" role="tab">
                                        <h4 class="panel-title"><a aria-controls="collapseDAC" aria-expanded="true" data-parent="#accordionSSC" data-toggle="collapse" href="#collapseDAC" role="button">4.1. Dirección de Atención al Ciudadano. </a></h4>
                                    </div>

                                    <div aria-labelledby="headingDAC" class="panel-collapse collapse" id="collapseDAC" role="tabpanel">
                                        <div class="panel-body">
                                            <div class="panel-dependencia">
                                                <p>Dirige la ejecución de las políticas, planes, programas y proyectos orientados a la atención a la ciudadanía, promoviendo modelos de gestión, bajo estándares de calidad y oportunidad para los trámites y servicios que se adelanten en el área.</p>
                                            </div>

                                            <div class="panel-body-mapa">

                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-4 text-center">
                                                        <div class="img-perfil w-100">
                                                            <img class="img-circle" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/24-06-2024/alejandra_rojas_posada.png" alt="Foto: Alejandra Rojas Posada">
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-8 ">
                                                        <div class="descripcion">
                                                            <h1>Alejandra Rojas Posada</h1>
                                                            <h4>Directora de Atención al Ciudadano</h4>
                                                            <div class="descripcion-xs">
                                                                <p>Abogada de la Universidad Libre con especialización en Derecho Penal de la Universidad del Rosario. En su trayectoria profesional se ha desempeñado como consultora y asesora de entidades públicas y privadas en asuntos legales, con amplia experiencia en el derecho administrativo y el manejo de relaciones con los clientes. Trabajó en la Superintendencia de Puertos y Transporte, en el bufete del abogado penalista Jaime Granados Peña, además en la Unidad de Restitución de Tierras, y en el Ministerio de Agricultura y Desarrollo Rural, entre otros.</p>
                                                                <p>En el año 2020, llegó a la Secretaría Distrital de Movilidad con el fin de liderar y orientar los procesos contravencionales como subdirectora de Contravenciones. Enfrentando los retos que trajo la pandemia del covid 19, generó estrategias para virtualizar los procesos y así dar continuidad al servicio que prestaba la Entidad.</p>
                                                                <p>Desde septiembre del 2020 se desempeña como Directora de Atención al Ciudadano, con el reto liderar a más de 300 personas en su equipo de trabajo, ha logrado desarrollar nuevas estrategias en beneficio de la ciudadanía, como el agendamiento de los servicios para la atención de los trámites, el desarrollo e implementación de la salida virtual para vehículos inmovilizados para 9 infracciones de tránsito.</p>
                                                                <p>Dentro de sus logros como Directora, en el 2022, la SDM ocupó el 7mo puesto en la mejor atención en las entidades públicas otorgada por la Veeduría Distrital. Ha logrado llevar a cabo 22 subastas de vehículos inmovilizados, descongestionando los patios del Distrito dando aplicación a la Ley 1730. Lideró el proyecto de transición de la Concesión SIM a la Ventanilla única de Servicios, ampliando la cobertura con más puntos de atención y simplificando los trámites para el ciudadano. Su gestión ha llevado a la apertura de 9 salas adicionales para cursos pedagógicos, teniendo actualmente 13 y 4 puntos de atención adicionales para salida de patios presencial. Llevó a cabo con éxito la transición de la entidad al nuevo Centro de Contacto de Movilidad, poniendo al servicio de la ciudadanía diferentes herramientas virtuales de atención como videollamada en lenguaje de señas, chat en línea, el desarrollo de Lucia, la Asistente Virtual, entre otros.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /#fin DAC --><!-- collapseDIATT -->

                                <div class="panel panel-default">
                                    <div class="panel-heading ph-2" id="headingDIATT" role="tab">
                                        <h4 class="panel-title"><a aria-controls="collapseDIATT" aria-expanded="true" data-parent="#accordionSSC" data-toggle="collapse" href="#collapseDIATT" role="button">4.2. Dirección de Investigaciones Administrativas al Tránsito y Transporte. </a></h4>
                                    </div>

                                    <div aria-labelledby="headingDIATT" class="panel-collapse collapse" id="collapseDIATT" role="tabpanel">
                                        <div class="panel-body">
                                            <div class="panel-dependencia">
                                                <p>Establece los lineamientos para el desarrollo de las actividades de carácter sancionatorio, así como el ejercicio de la segunda instancia sobre decisiones de fondo frente a las infracciones a las normas del tránsito y transporte, de acuerdo con la normatividad vigente y las necesidades institucionales.</p>
                                            </div>

                                            <div class="panel-body-mapa">

                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-4 text-center">
                                                        <div class="img-perfil w-100">
                                                            <img class="img-circle" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/02-10-2024/giovanny_andres_garcia.png" alt="Giovanny Andrés García Rodríguez">
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-8 ">
                                                        <div class="descripcion">
                                                            <h1>Giovanny Andrés García Rodríguez</h1>
                                                            <h4>Dirección de Investigaciones Administrativas al Tránsito y Transporte</h4>
                                                            <div class="descripcion-xs">
                                                                <p>Abogado, especialista en Derecho Procesal Penal y actualmente aspirante a Maestría en Gobierno y Políticas Públicas de la Universidad Externado de Colombia. Conocimientos en el diseño e implementación de estrategias jurídicas en el sector público y privado, orientadas a incrementar los índices de sostenibilidad, rentabilidad y reputación organizacional.</p>
                                                                <p>Experiencia de más de 20 años liderando procesos y equipos en el campo administrativo, civil, sanitario y penal. Ya había laborado en la Secretaría Distrital de Movilidad entre el 2016 y el 2022, desempeñándose como abogado, Coordinador Grupo de Defensa Judicial, Director de Representación Judicial y Director de Gestión de Cobro. También trabajó en la DIAN, el Departamento Nacional de Planeación, y la Secretaría Distrital de Hacienda en funciones directivas; regresa a la Entidad con los objetivos de: aportar a los desafíos tecnológicos que se vienen para la Secretaría, y para hacer procesos contravencionales más amigables para la ciudadanía; asimismo, unificar el criterio jurídico de la Dirección y contribuir al funcionamiento y afianzamiento de la herramienta Fénix.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div aria-multiselectable="true" class="panel-group" id="accordionSSC_DIATT" role="tablist "><!-- collapseContravenciones -->
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading ph-3" id="headingContravenciones" role="tab">
                                                            <h4 class="panel-title"><a aria-controls="collapseContravenciones" aria-expanded="true" data-parent="#accordionSSC_DIATT" data-toggle="collapse" href="#collapseContravenciones" role="button">4.2.1. Subdirección de Contravenciones. </a></h4>
                                                        </div>

                                                        <div aria-labelledby="headingContravenciones" class="panel-collapse collapse" id="collapseContravenciones" role="tabpanel">
                                                            <div class="panel-body">
                                                                <div class="panel-dependencia">
                                                                    <p>Lidera y orienta los procesos contravencionales que se deriven del incumplimiento a las normas de tránsito, en concordancia con los lineamientos de orden nacional y distrital.</p>
                                                                </div>

                                                                <div class="panel-body-mapa">

                                                                    <div class="row">
                                                                        <div class="col-xs-12 col-sm-4 text-center">
                                                                            <div class="img-perfil w-100">
                                                                                <img class="img-circle" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/20-09-2024/juan_manuel_garzon.png" alt="Foto: Juan Manuel Garzón Monroy ">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xs-12 col-sm-8 ">
                                                                            <div class="descripcion">
                                                                                <h1>Juan Manuel Garzón Monroy </h1>
                                                                                <h4>Subdirección de Contravenciones (e)</h4>
                                                                                <div class="descripcion-xs">
                                                                                    <p>Abogado y especialista en Derecho Administrativo y Constitucional de la Universidad Católica de Colombia. Magíster en Gobierno y Políticas Públicas de la Universidad Externado de Colombia, tiene una tesis meritoria en seguridad vial y pedagogía. Es auditor interno integral en la norma NTCGP en sistemas integrados de gestión de calidad y gestión del riesgo. </p>
                                                                                    <p>Experto en la formulación, diseño y ejecución de políticas públicas en tránsito, transporte y seguridad vial, enfocadas en la implementación de estrategia preventivas y de protección a la ciudadanía. Cuenta con catorce años de experiencia en el desarrollo de procesos y procedimientos administrativos, sancionatorios y procesos contravencionales y de control e investigaciones al transporte público. Desde el 2007 trabajó en la Secretaría de Movilidad, tiene un corto período fuera de la Entidad y en el año 2021 regresa en carrera administrativa con funciones de autoridad de tránsito. Ahora, desde este rol y esta Subdirección, quiere apostarle a la virtualización de procesos, para que la ciudadanía tenga la posibilidad de acceder a salida de vehículos e impugnaciones de comparendos desde la virtualidad. </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>


                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- /#fin Contravenciones --><!-- collapseSCITP -->

                                                    <div class="panel panel-default">
                                                        <div class="panel-heading ph-3" id="headingSCITP" role="tab">
                                                            <h4 class="panel-title"><a aria-controls="collapseSCITP" aria-expanded="true" data-parent="#accordionSSC_DIATT" data-toggle="collapse" href="#collapseSCITP" role="button">4.2.2. Subdirección de Control e Investigaciones al Transporte Público. </a></h4>
                                                        </div>

                                                        <div aria-labelledby="headingSCITP" class="panel-collapse collapse" id="collapseSCITP" role="tabpanel">
                                                            <div class="panel-body">
                                                                <div class="panel-dependencia">
                                                                    <div class="row">
                                                                        <div class="col-xs-12">
                                                                            <p>Dirige la inspección, vigilancia y control a los sujetos sancionables por el incumplimiento de las normas aplicables al transporte público, de conformidad con la normatividad vigente.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="panel-body-mapa">
                                                                    <div class="row">
                                                                        <div class="col-xs-12 col-sm-4 text-center">
                                                                            <div class="img-perfil w-100"><img alt="Foto: Jhon Alejandro Contreras Torres" class="img-circle" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-03-2024/_jhon_alejandro_contreras_torres.png"></div>
                                                                        </div>

                                                                        <div class="col-xs-12 col-sm-8 ">
                                                                            <div class="descripcion">
                                                                                <h1>Jhon Alejandro Contreras Torres</h1>

                                                                                <h4>Subdirector de Control e Investigaciones al Transporte Público</h4>

                                                                                <div class="descripcion-xs">
                                                                                    <p>Abogado de la Universidad Libre de Colombia, especializado en derecho administrativo candidato a Magister en Derecho Público. Cuenta con más de 20 años de experiencia en el sector Público y Privado.</p>

                                                                                    <p>Se ha desempeñado como Jefe Jurídico del Instituto Distrital de Gestión del Riesgo y Cambio Climático de Bogotá (IDIGER), Gerente de la Lotería de Cundinamarca y Gerente de la Beneficencia de Cundinamarca.</p>

                                                                                    <p>Desde su cargo se compromete a armonizar las exigencias del sector transporte con el cumplimiento a la normatividad vigente, procurando así, consolidar un sistema enfocado en mejorar las condiciones de seguridad, comodidad y accesibilidad en el servicio de transporte público.</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- /#fin SCITP -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /#fin DIATT -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /#fin SSC --><!-- collapseSGJ -->

            <div class="panel panel-default">
                <div class="panel-heading ph-1" id="headingSGJ" role="tab">
                    <h4 class="panel-title"><a aria-controls="collapseSGJ_a" aria-expanded="true" data-parent="#accordionPerfiles" data-toggle="collapse" href="#collapseSGJ_a" role="button">5. Subsecretaría de Gestión Jurídica. </a></h4>
                </div>

                <div aria-labelledby="headingSGJ" class="panel-collapse collapse" id="collapseSGJ_a" role="tabpanel">
                    <div class="panel-body">
                        <div class="panel-dependencia">
                            <p>Establece los lineamientos institucionales y dirige los procesos administrativos de representación judicial y extrajudicial, gestión contractual y compras públicas, emisión de normas, conceptos y doctrina administrativa, y gestión del cobro de obligaciones a favor de la Secretaría Distrital de Movilidad, permitiendo la unidad de criterio y la seguridad jurídica de la entidad a través de la correcta aplicación del ordenamiento jurídico vigente.</p>
                        </div>

                        <div class="panel-body-mapa">
                            <div class="map-org"><!-- Image Map Generated by http://www.image-map.net/ --><img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/08-10-2021/6_1.png" usemap="#image-map"><map name="image-map"><area alt="Despacho de la Secretaría" coords="546,72,383,10" href="https://www.movilidadbogota.gov.co/web/entorno/#collapseOACCM" shape="rect" target="" title="Despacho de la Secretaría"></map></div>
                        </div>

                        <div class="panel-body-mapa">
                            <div class="row">
                                <div class="col-xs-12 col-sm-4 text-center">
                                    <div class="img-perfil w-100"><img alt="Paulo Andrés Rincón Garay" class="img-circle" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/12-09-2022/pauloandresrincongaray.png" title="Paulo Andrés Rincón Garay"></div>
                                </div>

                                <div class="col-xs-12 col-sm-8 ">
                                    <div class="descripcion">
                                        <h1>Paulo Andrés Rincón Garay</h1>

                                        <h4>Subsecretario de Gestión Jurídica</h4>

                                        <div class="descripcion-xs">
                                            <p>Es abogado de la Universidad Externado de Colombia, especialista en Derecho Administrativo y Administración Pública de la Universidad de Buenos Aires, Argentina, y actualmente se encuentra cursando una Maestría en Ciudades Inteligentes en la misma universidad de donde es egresado.</p>

                                            <p>Cuenta con más de doce años de experiencia profesional asesorando jurídicamente al sector público y privado, en temas como regulación normativa y elaboración de política pública, derecho público, derecho de transporte, defensa judicial ante la jurisdicción contencioso administrativa, civil y laboral.</p>

                                            <p>Trabajó como asesor del Despacho y también fue Director de Normatividad y Conceptos en la Secretaría Distrital de Movilidad. En la firma GGC Abogados y Financieros fue coordinador jurídico, alrededor de cinco años.</p>

                                            <p>En Departamento para la Prosperidad Social trabajó en la Subdirección de Programas Especiales, Grupo Paz, Desarrollo y Estabilización.</p>

                                            <p>También representó a la firma CGG Abogados y Financieros Ltda., en el Hospital Simón Bolívar, en la Gobernación de Caldas y en la Industria Licorera de Caldas.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="panel-body-mapa">
                            <div aria-multiselectable="true" class="panel-group " id="collapseSGJ" role="tablist "><!-- collapseDRJ -->
                                <div class="panel panel-default">
                                    <div class="panel-heading ph-2" id="headingDRJ" role="tab">
                                        <h4 class="panel-title"><a aria-controls="collapseDRJ" aria-expanded="true" data-parent="#collapseSGJ" data-toggle="collapse" href="#collapseDRJ" role="button">5.1. Dirección de Representación Judicial </a></h4>
                                    </div>

                                    <div aria-labelledby="headingDRJ" class="panel-collapse collapse" id="collapseDRJ" role="tabpanel">
                                        <div class="panel-body">
                                            <div class="panel-dependencia">
                                                <p>Lidera y coordina la ejecución de las metodologías, procesos y procedimientos de Representación Judicial y Extrajudicial para salvaguardar los intereses de la Secretaría Distrital de Movilidad en todos los procesos prejudiciales, judiciales y administrativos en los que sea parte.</p>
                                            </div>

                                            <div class="panel-body-mapa">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-4 text-center">
                                                        <div class="img-perfil w-100"><img alt="" class="img-circle" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/28-09-2020/maria-isabel-hernandez.png"></div>
                                                    </div>

                                                    <div class="col-xs-12 col-sm-8 ">
                                                        <div class="descripcion">
                                                            <h1>Maria Isabel Hernández Pabón</h1>

                                                            <h4>Directora de Representación Judicial</h4>

                                                            <div class="descripcion-xs">
                                                                <p>Abogada de la Universidad del Cauca, especialista en derecho público de la Universidad Externado y especialista en derecho contractual de la Universidad del Rosario. Tiene amplia experiencia en manejo de los instrumentos legales para la resolución de conflictos, procesos de gestión de calidad, defensa de entidades públicas en la jurisdicción laboral, administrativa y constitucional en entidades como el Ministerio de Educación Nacional y en entidades del sector solidario de carácter nacional.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /#fin DRJ --><!-- collapseDNC -->

                                <div class="panel panel-default">
                                    <div class="panel-heading ph-2" id="headingDNC" role="tab">
                                        <h4 class="panel-title"><a aria-controls="collapseDNC" aria-expanded="true" data-parent="#collapseSGJ" data-toggle="collapse" href="#collapseDNC" role="button">5.2. Dirección de Normatividad y Conceptos </a></h4>
                                    </div>

                                    <div aria-labelledby="headingDNC" class="panel-collapse collapse" id="collapseDNC" role="tabpanel">
                                        <div class="panel-body">
                                            <div class="panel-dependencia">
                                                <p>Lidera el análisis sobre la correcta aplicación del ordenamiento jurídico vigente, la emisión de normas y la elaboración revisión y aprobación de conceptos jurídicos y respuestas derivadas de la resolución de consultas que se eleven a la entidad.</p>
                                            </div>

                                            <div class="panel-body-mapa">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-4 text-center">
                                                        <div class="img-perfil w-100"><img alt="Natalia Catalina Cogollo Uyaban" class="img-circle" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/19-10-2022/nataliacatalinacogollouyaban.png" title="Natalia Catalina Cogollo Uyaban"></div>
                                                    </div>

                                                    <div class="col-xs-12 col-sm-8 ">
                                                        <div class="descripcion">
                                                            <h1>Natalia Catalina Cogollo Uyaban</h1>

                                                            <h4>Directora de Normatividad y Conceptos</h4>

                                                            <div class="descripcion-xs">
                                                                <p>Abogada de la Universidad Pedagógica y Tecnológica de Colombia, especialista en Derecho Internacional del Transporte de la Universidad Externado y especialista en Gobierno y Gestión Pública Territorial de la Universidad Javeriana.</p>

                                                                <p>Cuenta con experiencia profesional de más de 10 años en entidades como el Congreso de la República en la Comisión Sexta del Senado; el Ministerio de Transporte como consultora del BID en el grupo de Seguridad Vial; en la Secretaría Distrital de Movilidad con el grupo de Normatividad y Conceptos de la antigua Dirección de Asuntos Legales y en la Agencia Nacional de Seguridad Vial como asesora de la Dirección de Comportamiento y de la Oficina Asesora Jurídica.</p>

                                                                <p>Las labores desempeñadas han consistido en la asesoría y acompañamiento jurídico en la estructuración normativa y de conceptos relacionados con tránsito, transporte, seguridad vial, así como en la estructuración de política pública en el sector transporte. Asume esta dirección con los retos de innovar en el proceso de estructuración normativa de la SDM y contribuir en la conformación de un marco normativo claro, con calidad técnica y jurídica que permita el cumplimiento de la misión y funciones de la entidad.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /#fin DNC --><!-- collapseContratacion -->

                                <div class="panel panel-default">
                                    <div class="panel-heading ph-2" id="headingContratacion" role="tab">
                                        <h4 class="panel-title"><a aria-controls="collapseContratacion" aria-expanded="true" data-parent="#collapseSGJ" data-toggle="collapse" href="#collapseContratacion" role="button">5.3. Dirección de Contratación </a></h4>
                                    </div>

                                    <div aria-labelledby="headingContratacion" class="panel-collapse collapse" id="collapseContratacion" role="tabpanel">
                                        <div class="panel-body">
                                            <div class="panel-dependencia">
                                                <p>Lidera el proceso de gestión contractual de la Secretaría Distrital de Movilidad y sus respectivas etapas, permitiendo el desarrollo y ejecución de los planes, programas y proyectos a cargo de la entidad, garantizando la correcta aplicación del ordenamiento jurídico vigente, así como los procesos y procedimientos institucionales establecidos para tal fin.</p>
                                            </div>

                                            <div class="panel-body-mapa">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-4 text-center">
                                                        <div class="img-perfil w-100"><img alt="Foto Maria Jimena Yáñez Gelvez" class="img-circle" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/06-02-2024/maria_jimena_yanez.png"></div>
                                                    </div>

                                                    <div class="col-xs-12 col-sm-8 ">
                                                        <div class="descripcion">
                                                            <h1>Maria Jimena Yáñez Gelvez</h1>

                                                            <h4>Directora de Contratación</h4>

                                                            <div class="descripcion-xs">
                                                                <p>Abogada de la Universidad del Rosario, especialista en Derecho Comercial y Derecho Contractual de la misma institución. Adicionalmente, posee un título de Magíster en Derecho Internacional de los Negocios de ESADE Law School.</p>

                                                                <p>Cuenta con una extensa trayectoria profesional relacionada con la dirección en el sector público con amplios conocimientos en contratación estatal y derecho administrativo.</p>

                                                                <p>Ha estado vinculada a varias entidades del orden nacional como la Agencia Nacional del Espectro, la Unidad Nacional de Protección y la Agencia Nacional de Hidrocarburos, en las cuales desempeñó roles orientados a la formulación de estrategias, planes y programas en aras del fortalecimiento jurídico de estas entidades.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /#fin Contratacion --><!-- collapseDGC -->

                                <div class="panel panel-default">
                                    <div class="panel-heading ph-2" id="headingDGC" role="tab">
                                        <h4 class="panel-title"><a aria-controls="collapseDGC" aria-expanded="true" data-parent="#collapseSGJ" data-toggle="collapse" href="#collapseDGC" role="button">5.4. Dirección de Gestión de Cobro </a></h4>
                                    </div>

                                    <div aria-labelledby="headingDGC" class="panel-collapse collapse" id="collapseDGC" role="tabpanel">
                                        <div class="panel-body">
                                            <div class="panel-dependencia">
                                                <p>Lidera y coordina la ejecución de las metodologías, procesos y procedimientos de cobro persuasivo y coactivo, así como la recuperación de cartera de la Secretaría Distrital de Movilidad.</p>
                                            </div>

                                            <div class="panel-body-mapa">

                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-4 text-center">
                                                        <div class="img-perfil w-100"><img alt="Hernan Sebastián Cortés Osorio" class="img-circle" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/12-09-2022/hernancortes.png" title="Hernan Sebastián Cortés Osorio"></div>
                                                    </div>

                                                    <div class="col-xs-12 col-sm-8 ">
                                                        <div class="descripcion">
                                                            <h1>Hernan Sebastián Cortés Osorio</h1>

                                                            <h4>Director de Gestión de Cobro</h4>

                                                            <div class="descripcion-xs">
                                                                <p>Abogado de la Universidad la Gran Colombia, conciliador extrajudicial en derecho, con estudios específicos y afianzados en contratación internacional, además, especialista en Instituciones Jurídico Procesales de la Universidad Nacional de Colombia. Experiencia particular en procesos de cobro jurídico civil y cobro coactivo administrativo, en análisis probatorio, en procesos disciplinarios, emisión de actos administrativos decisorios y conceptos jurídicos dentro de las ramas civil y administrativa.</p>

                                                                <p>Ingresó en el 2016 como contratista a la Dirección de Gestión de Cobro (antes Subdirección de Gestión Coactiva) de la Secretaría de Movilidad y luego pasó a planta provisional donde ha ido escalando varias posiciones gracias al liderazgo, el trabajo en equipo y la responsabilidad.</p>

                                                                <p>Con conocimientos avanzados en el idioma inglés y los sistemas informáticos, se propone desarrollar precisas e innovadoras estrategias para el mejoramiento y óptimo funcionamiento de la Dirección a su cargo.</p>

                                                                <p>También ha laborado como abogado en la Junta Central de Contadores, en la Universidad Nacional de Colombia y Sistemcobro S.A.S.</p>

                                                                <p>&nbsp;</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /#fin DGC -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /#fin SGJ --><!-- collapseGestionCorporativa -->

            <div class="panel panel-default">
                <div class="panel-heading ph-1" id="headingGestionCorporativa" role="tab">
                    <h4 class="panel-title"><a aria-controls="collapseGestionCorporativa" aria-expanded="true" data-parent="#accordionPerfiles" data-toggle="collapse" href="#collapseGestionCorporativa" role="button">6. Subsecretaría de Gestión Corporativa. </a></h4>
                </div>

                <div aria-labelledby="headingGestionCorporativa" class="panel-collapse collapse" id="collapseGestionCorporativa" role="tabpanel">
                    <div class="panel-body">
                        <div class="panel-dependencia">
                            <p>Dirige la formulación de políticas, planes programas y estrategias en materia administrativa, financiera y del Talento Humano.</p>
                        </div>

                        <div class="panel-body-mapa">
                            <div class="map-org"><!-- Image Map Generated by http://www.image-map.net/ --><img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/08-10-2021/7_1.png" usemap="#image-map"><map name="image-map"><area alt="Despacho de la Secretaría" coords="546,72,383,10" href="https://www.movilidadbogota.gov.co/web/entorno/#collapseOACCM" shape="rect" target="" title="Despacho de la Secretaría"></map></div>
                        </div>

                        <div class="panel-body-mapa">
                            <div class="row">
                                <div class="col-xs-12 col-sm-4 text-center">
                                    <div class="img-perfil w-100"><img alt="Foto: Clemencia Rojas Arias" class="img-circle" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/09-05-2024/clemencia_rojas_arias.png"></div>
                                </div>

                                <div class="col-xs-12 col-sm-8 ">
                                    <div class="descripcion">
                                        <h1>Clemencia Rojas Arias</h1>

                                        <h4>Subsecretaria de Gestión Corporativa</h4>

                                        <div class="descripcion-xs">
                                            <p>Clemencia Rojas Arias es abogada de la Universidad de Caldas, con especialización en Derecho Administrativo de la misma universidad, especialización en Contratación Estatal y maestría en Derecho Público, ambas de la Universidad Externado de Colombia.</p>

                                            <p>Con una experiencia de 29 años en el sector público, a nivel nacional y distrital, ha destacado en roles directivos de gran responsabilidad, demostrando habilidades sólidas para liderar equipos. En su nuevo rol, se enfrenta al desafío de consolidar la gestión institucional hacia una Secretaría de Movilidad más moderna, enfocada en la transparencia en sus procesos y contribuyendo activamente al cumplimiento de sus objetivos.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="panel-body-mapa">
                            <div aria-multiselectable="true" class="panel-group " id="collapseSGC" role="tablist "><!-- collapseDireccionAdministrativaFinanciera -->
                                <div class="panel panel-default">
                                    <div class="panel-heading ph-2" id="headingDAF" role="tab">
                                        <h4 class="panel-title"><a aria-controls="collapseDireccionAdministrativaFinanciera" aria-expanded="true" data-parent="#collapseSGC" data-toggle="collapse" href="#collapseDireccionAdministrativaFinanciera" role="button">6.1 Dirección Administrativa y Financiera </a></h4>
                                    </div>

                                    <div aria-labelledby="headingDAF" class="panel-collapse collapse" id="collapseDireccionAdministrativaFinanciera" role="tabpanel">
                                        <div class="panel-body">
                                            <div class="panel-dependencia">
                                                <p>Dirige la formulación, ejecución y control de las políticas, planes, programas y proyectos en materia administrativa y financiera de la Secretaría Distrital de Movilidad, de acuerdo con el Plan Estratégico Institucional y la normatividad vigente.</p>
                                            </div>

                                            <div class="panel-body-mapa">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-4 text-center">
                                                        <div class="img-perfil w-100"><img alt="Luz Mary Peralta" class="img-circle" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/09-12-2022/luzmaryperalta.png" title="Luz Mary Peralta"></div>
                                                    </div>

                                                    <div class="col-xs-12 col-sm-8 ">
                                                        <div class="descripcion">
                                                            <h1>Luz Mary Peralta Rodríguez</h1>

                                                            <h4>Directora Administrativa y Financiera</h4>

                                                            <div class="descripcion-xs">
                                                                <p>Contadora Pública de la Universidad Antonio Nariño, especialista en Derecho Tributario y Aduanero, Finanzas y Gestión Pública, con más de 15 años de labor en el sector público, amplia experiencia en coordinación de equipos de trabajo y ejecución de auditorías; capacidades para la gestión del talento humano, eficiencia en la ejecución presupuestal, causación contable y relacionamiento estratégico.</p>

                                                                <p>Entre las entidades que ha trabajado se encuentran: Auditoría General de la Nación, Ministerio de Tics, Contraloría Distrital de Bogotá, Empresa de Acueducto y Aguas de Bogotá, Instituto Distrital de Gestión de Riesgos y Cambio Climático, Secretaría Distrital de Desarrollo Económico, entre otras. Trayectoria en la que ha obtenido diferentes logros entre los que se destacan: la coordinación de seminarios y talleres a nivel local y distrital asociados con la participación del sector privado en el mejoramiento de la prestación de los servicios públicos, y la conformación de Mesas Ambientales locales con líderes ambientales, para la protección y adecuado uso de los recursos naturales.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div aria-multiselectable="true" class="panel-group " id="collapseDAF" role="tablist "><!-- collapseFinanciera -->
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading ph-3" id="headingFinanciera" role="tab">
                                                            <h4 class="panel-title"><a aria-controls="collapseFinanciera" aria-expanded="true" data-parent="#collapseDAF" data-toggle="collapse" href="#collapseFinanciera" role="button">6.1.1. Subdirección Financiera. </a></h4>
                                                        </div>

                                                        <div aria-labelledby="headingFinanciera" class="panel-collapse collapse" id="collapseFinanciera" role="tabpanel">
                                                            <div class="panel-body">
                                                                <div class="panel-dependencia">
                                                                    <p>Planea, organiza, dirige, hace seguimiento y controla las operaciones financieras, contables y presupuestales de la Secretaría Distrital de Movilidad, a través del seguimiento permanente, de conformidad con la normatividad vigente y lineamientos institucionales.</p>
                                                                </div>

                                                                <div class="panel-body-mapa">
                                                                    <div class="row">
                                                                        <div class="col-xs-12 col-sm-4 text-center">
                                                                            <div class="img-perfil w-100"><img alt="Foto: Jose David Robayo Fonseca" class="img-circle" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/06-02-2024/jose_david_robayo.png"></div>
                                                                        </div>

                                                                        <div class="col-xs-12 col-sm-8 ">
                                                                            <div class="descripcion">
                                                                                <h1>Jose David Robayo Fonseca</h1>

                                                                                <h4>Subdirector Financiero</h4>

                                                                                <div class="descripcion-xs">
                                                                                    <p>Profesional en Comercio Internacional egresado de la Escuela Colombiana de Carrera Industriales, con especialización en Finanzas y Administración Pública de la Universidad Militar Nueva Granada. Actualmente, se encuentra cursando un Máster Universitario en Dirección en la Gestión Pública.</p>

                                                                                    <p>Cuenta con una extensa trayectoria profesional con amplios conocimientos en contratación estatal, manejos presupuestales así como en el desarrollo e implementación de ERP presupuestales como SICAPITAL Y BOGDATA.</p>

                                                                                    <p>Se encuentra vinculado en calidad de contratista en la Secretaría Distrital de Movilidad desde el año 2008. Dentro de la Subdirección Financiera ha venido desarrollando actividades de ejecución del presupuesto entre las cuales se incluyen expedición de Certificados de Disponibilidad y Registro Presupuestal, seguimiento y programación del PAC, entre otras actividades.</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- /#fin Financiera --><!-- collapseAdministrativa -->

                                                    <div class="panel panel-default">
                                                        <div class="panel-heading ph-3" id="headingAdministrativa" role="tab">
                                                            <h4 class="panel-title"><a aria-controls="collapseAdministrativa" aria-expanded="true" data-parent="#collapseDAF" data-toggle="collapse" href="#collapseAdministrativa" role="button">6.1.2. Subdirección Administrativa. </a></h4>
                                                        </div>

                                                        <div aria-labelledby="headingAdministrativa" class="panel-collapse collapse" id="collapseAdministrativa" role="tabpanel">
                                                            <div class="panel-body">
                                                                <div class="panel-dependencia">
                                                                    <p>Dirige la ejecución y hace seguimiento de los procesos administrativos de la entidad conforme a las normas, lineamientos y reglamentos establecidos, con el propósito de asegurar la eficacia y calidad de los procesos y actividades relacionados con la materia.</p>
                                                                </div>

                                                                <div class="panel-body-mapa">
                                                                    <div class="row">
                                                                        <div class="col-xs-12 col-sm-4 text-center">
                                                                            <div class="img-perfil w-100"><img alt="Foto: Ilba Milady Vargas Guiza" class="img-circle" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/09-05-2024/ilba_milady_vargas_guiza.png"></div>
                                                                        </div>

                                                                        <div class="col-xs-12 col-sm-8 ">
                                                                            <div class="descripcion">
                                                                                <h1>Ilba Milady Vargas Guiza</h1>

                                                                                <h4>Subdirectora Administrativa</h4>

                                                                                <div class="descripcion-xs">
                                                                                    <p>Ilba Milady Vargas Guiza es abogada especializada en Derecho Administrativo y Gerencia en Salud y Economía, con un MBA en Dirección y Gestión de Empresas. Tiene 20 años de experiencia en el sector público, con un enfoque en el análisis y la dirección gerencial administrativa, especialmente en temas contractuales y financieros.</p>

                                                                                    <p>Desde su nuevo rol se propone garantizar el suministro eficiente de todos los servicios necesarios para el funcionamiento de la Entidad, cumpliendo con la normativa contractual, para asegurar una operación organizada y una respuesta adecuada a los requerimientos de la Secretaría de Movilidad.</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- /#fin Administrativa -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /#fin DAF --><!-- collapseDTH -->

                                <div class="panel panel-default">
                                    <div class="panel-heading ph-2" id="headingDTH" role="tab">
                                        <h4 class="panel-title"><a aria-controls="collapseDTH" aria-expanded="true" data-parent="#collapseSGC" data-toggle="collapse" href="#collapseDTH" role="button">6.2. Dirección de Talento Humano </a></h4>
                                    </div>

                                    <div aria-labelledby="headingDTH" class="panel-collapse collapse" id="collapseDTH" role="tabpanel">
                                        <div class="panel-body">
                                            <div class="panel-dependencia">
                                                <p>Formula y dirige la formulación, ejecución y evaluación de las políticas, programas, planes y proyectos referentes al talento humano en la entidad, buscando el desarrollo integral del personal y cumpliendo con las disposiciones legales vigentes y objetivos institucionales de la Secretaría Distrital Movilidad.</p>
                                            </div>
                                            <div class="panel-body-mapa">

                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-4 text-center">
                                                        <div class="img-perfil w-100">
                                                            <img class="img-circle" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/12-08-2024/maria_teresa_rodriguez_leal.png" alt="Foto: María Teresa Rodríguez Leal">
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-8 ">
                                                        <div class="descripcion">
                                                            <h1>María Teresa Rodríguez Leal</h1>
                                                            <h4>Directora de Talento Humano</h4>
                                                            <div class="descripcion-xs">
                                                                <p>Abogada y licenciada en Ciencias Políticas. Especializada en Derecho Administrativo con amplia experiencia y conocimiento en la dirección y liderazgo en procesos de gestión integral del talento humano y gestión jurídica.</p>
                                                                <p>Capacidad de planeación y organización, alto nivel de responsabilidad, compromiso, liderazgo, honestidad y facilidad para dinamizar grupos de trabajo en procura de la obtención de los resultados proyectados.</p>
                                                                <p>Cuenta con amplia experiencia en el sector público; se destaca que trabajó en el Departamento Administrativo del Servicio Civil como subdirectora Jurídica, logrando analizar y emitir conceptos de los Proyectos de Acuerdos del Concejo de Bogotá, Decretos Distritales, Proyectos de Ley y demás normativa relacionada con la gestión del talento humano, del empleo público, formulación de planes de bienestar social y estímulos. También laboró en la Secretaría Distrital de la Mujer como directora de Talento Humano y en la Secretaría de Hacienda como subdirectora de Talento Humano, entre otros. </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /#fin DTH -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /#fin GestionCorporativa -->
            </div>
        </div>
    </div>

</div>
<style type="text/css">
    .w-100 {
        width: 100%;
    }

    .seccion {
        /* background-color: #c5c5c5; */
        max-width: 940px;
        margin: auto;
        font-family: 'Montserrat', sans-serif;
        font-size: 13px;
        font-weight: 500;
        text-align: justify;
        line-height: 1.4;
    }



    .field-item.even h2 {
        visibility: hidden;
        margin-top: -50px;
    }

    .mapa_svg {
        /* width: 40%; */
        margin: auto !important;
        text-align: center;
        background: #fff;
    }

    .mapa_svg g {
        fill: #efefef;
        /* stroke: #000; */
        /* stroke-width: 1px; */
    }

    .seccion .cpnt-1 {
        margin-top: 32px;
    }

    .seccion .cpnt-1 h3 {
        font-size: 24px;
        font-weight: 700;
        color: #4D541F;
        margin-bottom: 20px;
        text-align: center;
    }

    .secccion .panel {
        box-shadow: 5px 5px 20px rgba(0, 0, 0, .20) !important;
        border-radius: 15px !important;
    }

    .map-org {
        text-align: center;
        overflow: auto;
        margin-bottom: 30px;
    }

    .secccion .map-org img {
        margin: 0px auto;
        padding: 0px;

    }

    .map-org-ppal {
        text-align: center;
        overflow: auto;
        margin-bottom: 30px;
    }

    .secccion .map-org-ppal>img {
        margin: 0px auto;
        padding: 0px;
        width: 900px;

    }

    .img-ppal {
        display: flex;
        vertical-align: middle;
        justify-content: center;
        align-items: center;
        height: 500px;
    }

    .img-perfil {
        display: flex;
        vertical-align: middle;
        justify-content: center;
        align-items: center;
        height: 500px;
    }

    .img-perfil img {
        width: 90%;
        max-width: 280px;
        object-fit: cover;
        padding: 3px;
        -webkit-box-shadow: 0px 0px 0px 5px #4D541F, inset 0px 10px 27px -8px #828F26, inset 0px -10px 27px -8px #A6B517, 5px 5px 50px 50px rgba(0, 0, 0, 0);
        box-shadow: 0px 0px 0px 5px #4D541F, inset 0px 10px 27px -8px #828F26, inset 0px -10px 27px -8px #A6B517, 5px 5px 50px 50px rgba(0, 0, 0, 0);
    }

    .descripcion {
        height: 500px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: justify;
    }

    .descripcion h1 {
        text-align: center;
        color: #4D541F !important;
        padding: 10 10 0 10px;
        margin: 0px;
        font-weight: 700;
    }

    .descripcion h4 {
        text-align: center;
        padding: 10px;
        margin: 5px;
        border-bottom: solid 2px #A6B517;
        color: #828F26;
        font-weight: 600;
    }

    .descripcion .descripcion-xs {
        color: #363636;
        overflow: auto;
        padding: 20px;
        background-color: #e5e5e5;
        box-shadow: inset 5px 5px 20px rgba(0, 0, 0, .02);
        border-radius: 5px;
    }

    .descripcion .descripcion-xs p {
        color: #363636;
    }

    .btn-org {
        background-color: #4D541F;
        padding: 15px 30px;
        color: #fff;
        border-radius: 1px;
        font-size: 16px;
        text-decoration: none;
        font-weight: 700;
        -webkit-box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.16);
        box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.16);
        transition: 0.5s;
    }

    .btn-org:hover {
        background-color: #A6B517;
        color: #363636;
        text-decoration: none;


    }



    .btn-org:focus,
    .btn-org:active,
    .btn-org::before {
        color: #efefef;
    }
</style>
<style type="text/css">
    .colapsable .panel {
        margin-bottom: 5px;
    }

    .colapsable .p-panel {
        margin-left: 15px;
        margin-right: 15px;
    }

    .colapsable .panel-title {
        font-weight: 700;
    }


    .node-unpublished {
        background-color: #ffffff;
    }

    .colapsable .panel-heading {
        background-color: #c9d64f !important;
    }

    .colapsable .ph-1 {
        background-color: #4D541F !important;
    }

    .colapsable .ph-1 a {
        color: #FFFFFF !important;
    }

    .colapsable .ph-1 a:hover {
        color: #c9d64f !important;
    }

    .colapsable .ph-2 {
        background-color: #909D2A !important;
    }

    .colapsable .ph-2 a {
        color: #000 !important;
        font-weight: #363636;
    }

    .colapsable .ph-2 a:hover {
        color: #4D541F !important;
    }

    .colapsable .ph-3 {
        background-color: #A6B517 !important;
    }

    .colapsable .ph-3 a {
        color: #212121 !important;
    }

    .colapsable .ph-3 a:hover {
        color: #4D541F !important;
    }

    .colapsable .panel-body {
        background-color: #F0F2D9 !important;
        padding: 0px;
    }

    .colapsable .panel-body-mapa {
        background-color: #ffffff !important;
        margin: 10px;
        border: solid 1px #ccc;
        border-radius: 8px;
        padding: 10px;
        -webkit-box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.16);
        box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.16);
    }

    .colapsable .panel-dependencia {
        background-color: #e5e5e5 !important;
        color: #1A1A1A;
        margin: 15px;
        border-radius: 8px;
        padding: 30px;
        -webkit-box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.16);
        box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.16);
        text-align: justify;
        border: solid 1px #ccc;
        text-align: center;
    }

    .colapsable .panel .panel-default {
        margin-top: 5px;
        margin-bottom: 5px;
    }

    .seccion .panel-default>.panel-heading {
        border: solid 2px #4D541F;
        padding: 12px;
    }

    .content ol {
        list-style: none;
        /* Remove list bullets */
        /* padding: 0; */
        /* margin: 3px; */
    }

    .content li {
        margin-top: 6px;
    }

    .content .btn-cpp {
        background-color: #4D541F !important;
        color: #ffffff !important;
        font-weight: 700 !important;
        padding: 10 20 10 20px;
        text-transform: uppercase;
        border-color: #4D541F;
        border-width: 3px;
    }

    .content .btn-cpp:hover {
        background-color: #A6B517 !important;
        color: #212121 !important;
        border-style: solid;
        border-color: #212121;
        border-width: 3px;
    }

    .seccion .img-circle {
        max-width: 80%;

    }
</style>
<style type="text/css">
    .seccion h1 {
        font-size: 24px;
    }

    .seccion h4 {
        font-size: 14px;
        font-weight: 700;
    }

    .seccion p {
        font-size: 14px !important;
    }


    /* Small devices (landscape phones, 576px and up) */
    @media(min-width: 576px) {

        .seccion h1 {
            font-size: 18px;
        }

        .seccion h4 {
            font-size: 13px;
            font-weight: 700;
        }

        .seccion p {
            font-size: 13px;
        }
    }

    /* Medium devices (tablets, 768px and up) */
    @media(min-width: 768px) {
        .seccion h1 {
            font-size: 26px;
        }

        .seccion h4 {
            font-size: 16px;
            font-weight: 700;
        }

        .seccion p {
            font-size: 14px;
        }
    }

    /* Large devices (desktops, 992px and up) */
    @media(min-width: 992px) {
        .seccion h4 {
            font-size: 26px;
        }

        .seccion h4 {
            font-size: 16px;
        }

        .seccion p {
            font-size: 14px;
        }
    }

    /* Extra large devices (large desktops, 1200px and up) */
    @media(min-width: 1200px) {
        .seccion h4 {
            font-size: 14px;
        }

        .seccion p {
            font-size: 14px;
        }
    }
</style>
<script>
    $(document).ready(function() {

        $('#collapse1').click(function() {
            $("#collapseDespacho").addClass("in");
        });

        $('#collapse2').click(function() {
            $("#collapseSubPolMovilidad").addClass("in");
        });

        $('#collapse3').click(function() {
            $("#collapseSGM").addClass("in");
        });

        $('#collapse4').click(function() {
            $("#collapseSSC").addClass("in");
        });

        $('#collapse5').click(function() {
            $("#collapseSGJ").addClass("in");
        });

        $('#collapse6').click(function() {
            $("#collapseGestionCorporativa").addClass("in");
        });
    });
</script>
