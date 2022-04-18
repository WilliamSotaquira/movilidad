@extends ('welcome')
@section ('contenido')

<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fuente Montserrat -----  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<link rel='preconnect' href='https://fonts.googleapis.com'>
<link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
<link href='https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap' rel='stylesheet'> 
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin Fuente Montserrat -  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->


<div class="seccion">
    <hr>
    <div class="row">
        <div class="col-xs-12 text-center">
            <div class="boton_org">
                <a class="btn-org" href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-04-2022/organigrama_2022_06_04.pdf" target="_blank" rel="noopener noreferrer">Ver Organigrama Completo</a>
            </div>
        </div>
    </div>
    <hr>
    <div class="map-org-ppal">
        <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/08-10-2021/1_2.png" width="900px" title="Organigrama General de la Entidad" alt="Organigrama General de la Entidad" usemap="#image-map">

        <map name="image-map">
            <area id="collapse1" target="" alt="Despacho de la Secretaría " title="Despacho de la Secretaría " href="https://www.movilidadbogota.gov.co/web/organigrama#collapseDespacho" coords="312,169,429,122" shape="rect">
            <area id="collapse2" target="" alt="Subsecretaría de Política de Movilidad" title="Subsecretaría de Política de Movilidad" href="https://www.movilidadbogota.gov.co/web/organigrama#collapseSubPolMovilidad" coords="159,292,16,242" shape="rect">
            <area id="collapse3" target="" alt="Subsecretaría de Gestión de la Movilidad" title="Subsecretaría de Gestión de la Movilidad" href="https://www.movilidadbogota.gov.co/web/organigrama#collapseSGM" coords="205,242,347,291" shape="rect">
            <area id="collapse4" target="" alt="Subsecretaría de Servicios a la Ciudadanía" title="Subsecretaría de Servicios a la Ciudadanía" href="https://www.movilidadbogota.gov.co/web/organigrama#collapseSSC" coords="396,242,536,290" shape="rect">
            <area id="collapse5" target="" alt="Subsecretaría de Gestión Jurídica" title="Subsecretaría de Gestión Jurídica" href="https://www.movilidadbogota.gov.co/web/organigrama#collapseSGJ" coords="584,242,727,291" shape="rect">
            <area id="collapse6" target="" alt="Subsecretaría de Gestión Corporativa" title="Subsecretaría de Gestión Corporativa" href="https://www.movilidadbogota.gov.co/web/organigrama#collapseGestionCorporativa" coords="776,242,915,291" shape="rect">
        </map>
    </div>

    <hr>

    <!-- Seccion perfil del Secretario Distrital  -->
    <div class="panel-body-mapa">
        <div class="row">
            <div class="col-xs-12 col-sm-4 text-center">
                <div class="img-perfil w-100">
                    <img class="img-circle" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-02-2022/felipeandresramirez.webp" alt="Felipe Andrés Ramírez - Secretario Distrital de Movilidad">
                </div>
            </div>
            <div class="col-xs-12 col-sm-8 ">
                <div class="descripcion">
                    <h1>Felipe Andrés Ramírez</h1>
                    <h4>Secretario Distrital de Movilidad</h4>
                    <div class="descripcion-xs">
                        <p>Tiene 37 años es Ingeniero Civil e Industrial de la Universidad de los Andes, donde realizó su maestría en Ingeniería Civil. Complementó su formación académica en el London School of Economics and Political Science con una maestría en planeación regional y urbana. En esta institución fue becado y se desempeñó como asistente de investigación.</p>
                        <p>En el campo profesional, cuenta con más de 12 años de experiencia desarrollando proyectos del sector transporte en Colombia, Perú, México, Panamá y Londres. Se destaca, entre sus cualidades, su amplio conocimiento en los temas de movilidad y específicamente de Bogotá gracias al trabajo que desempeñó en TRANSMILENIO S.A. durante seis años donde inició como Asesor de Gerencia, fue Subgerente Técnico y de Servicios y, finalmente estuvo en la Gerencia de la organización durante dos años.</p>
                        <p>Su paso por la Gerencia General de TRANSMILENIO S.A. estuvo marcado por los grandes retos que tuvo que asumir y su liderazgo en proyectos de renovación del sistema, innovando en los procesos de estructuración para lograr la adquisición de flota ambientalmente sostenible y de tecnología eléctrica más grande de Latinoamérica.</p>
                        <p>Bajo su liderazgo se garantizó la prestación del servicio de transporte público con todas las medidas de bioseguridad durante la emergencia sanitaria causada por el Covid-19, que se convirtieron en buenas prácticas para toda la ciudad.</p>
                        <p>Encabezó la reingeniería del transporte público con la vinculación de 1.770 buses nuevos de cero y bajas emisiones, dirigió la nueva señalética del sistema y la ampliación de las estaciones del componente troncal, entre otras.</p>
                        <p>A la Secretaría llega a impulsar grandes proyectos que impactarán positivamente la vida de los ciudadanos, como el Operador Público de Transporte, Estacionamiento en Vía, la recuperación del espacio público y la consolidación de la cofinanciación de la Segunda Línea del Metro y de las obras del Borde Occidental.</p>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <hr>
    <!-- Fin Seccion perfil del Secretario Distrital  -->
    <div class="colapsable">

        <div class='panel-group' id='accordionPerfiles' role='tablist ' aria-multiselectable='true'>

            <!-- Seccion Collapse Despacho de la Secretaría  -->
            <div class="panel panel-default">
                <div class="panel-heading ph-1" role="tab" id="despacho">
                    <h4 class="panel-title">
                        <a role="button" data-toggle="collapse" data-parent="#accordionPerfiles" href="#collapseDespacho" aria-expanded="true" aria-controls="collapseDespacho">
                            1. Despacho de la Secretaría
                        </a>
                    </h4>
                </div>
                <div id="collapseDespacho" class="panel-collapse collapse" role="tabpanel" aria-labelledby="despacho">
                    <div class="panel-body">

                        <div class="panel-body-mapa">
                            <!-- Bloque SVG Despacho de la Secretaría  -->
                            <div class="map-org">
                                <!-- Image Map Generated by http://www.image-map.net/ -->
                                <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/08-10-2021/2_1.png" usemap="#image-map">

                                <map name="image-map">
                                    <area target="" alt="Despacho de la Secretaría" title="Despacho de la Secretaría" href="https://www.movilidadbogota.gov.co/web/entorno/#collapseOACCM" coords="546,72,383,10" shape="rect">
                                </map>
                            </div>
                            <!-- Fin Bloque SVG Despacho de la Secretaría  -->
                        </div>


                        <div class="panel-body-mapa">
                            <div class='panel-group' id='accordionDS' role='tablist ' aria-multiselectable='true'>

                                <!-- collapseOACCM -->
                                <div class='panel panel-default'>
                                    <div class='panel-heading ph-2' role='tab' id='headingOACCM'>
                                        <h4 class='panel-title'>
                                            <a role='button' data-toggle='collapse' data-parent='#accordionDS' href='#collapseOACCM' aria-expanded='true' aria-controls='collapseOACCM'>
                                                1.1. Oficina Asesora de Comunicaciones y Cultura para la Movilidad
                                            </a>
                                        </h4>
                                    </div>
                                    <div id='collapseOACCM' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingOACCM'>
                                        <div class="panel-body">

                                            <div class="panel-dependencia">
                                                <p>Asesora a la Secretaría Distrital de Movilidad en la formulación e implementación de políticas y estrategias de comunicación, adicionalmente tiene el rol de promover y fortalecer una cultura ciudadana segura, creando condiciones favorables para mejorar comportamientos en las vías generando un impacto positivo en la seguridad vial y en la seguridad de Bogotá.</p>
                                            </div>
                                            <div class='panel-body-mapa'>

                                                <div class="row">

                                                    <div class="col-xs-12 col-sm-4 text-center">
                                                        <div class="img-perfil w-100">
                                                            <img class="img-circle" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-04-2020/andres-contento.jpg" alt="Foto: Andrés Contento Muñoz" title="Foto: Andrés Contento Muñoz">
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-8 ">
                                                        <div class="descripcion">
                                                            <div>
                                                                <h1>Andrés Contento Muñoz</h1>
                                                                <h4>Jefe Oficina Asesora de Comunicaciones y Cultura para la Movilidad</h4>
                                                            </div>
                                                            <div class="descripcion-xs">
                                                                <p>Es comunicador social y periodista con más de 13 años de experiencia en medios de comunicación y en el desarrollo de proyectos de comunicación estratégica de alcance nacional.</p>
                                                                <p>Durante 8 años trabajó en el periódico El Tiempo como editor y redactor de secciones como Vida de hoy, Nación y Bogotá. Durante 3 años se desempeñó como periodista de CityTv cubriendo principalmente la sección de Movilidad.</p>
                                                                <p>En el sector público trabajó como asesor de comunicaciones para el Ministerio del Interior, y en los últimos años como coordinador de los equipos de comunicación interna y externa de iNNpulsa Colombia (unidad del Gobierno Nacional que promueve el emprendimiento y la innovación) y Bancóldex, banco de desarrollo para el crecimiento empresarial del país.</p>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                                <!-- /#fin OACCM -->

                                <!-- collapseOTIC -->
                                <div class='panel panel-default'>
                                    <div class='panel-heading ph-2' role='tab' id='headingOTIC'>
                                        <h4 class='panel-title'>
                                            <a role='button' data-toggle='collapse' data-parent='#accordionDS' href='#collapseOTIC' aria-expanded='true' aria-controls='collapseOTIC'>
                                                1.2. Oficina de Tecnologías de la Información y las Comunicaciones
                                            </a>
                                        </h4>
                                    </div>
                                    <div id='collapseOTIC' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingOTIC'>
                                        <div class="panel-body">
                                            <div class="panel-dependencia">
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <p>Diseña lineamientos y metodologías para la definición, establecimiento, difusión y control de estándares de las Tics; así como promueve y apoya el desarrollo de sistemas informáticos y proporcionar los servicios y canales que mejoren la interconexión y calidad de servicios de comunicación, redes y transmisión de datos.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class='panel-body-mapa'>

                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-4 text-center">
                                                        <div class="img-perfil w-100">
                                                            <img class="img-circle" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-11-2021/perfil_jadyperezcruz.png" alt="Foto: Jady Marina Pérez Cruz" title="Foto: Jady Marina Pérez Cruz">
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-8 ">
                                                        <div class="descripcion">
                                                            <div>
                                                                <h1>Jady Marina Pérez Cruz</h1>
                                                                <h4>Jefe Oficina de Tecnologías de la Información y las Comunicaciones</h4>
                                                            </div>
                                                            <div class="descripcion-xs">
                                                                <p>Es especialista en Gerencia de Proyectos, tiene más de seis años de experiencia en formulación, evaluación, gestión en gerencia de proyectos de ingeniería tanto tecnológicos como de obra civil en el sector público y privado, así como gestión de personal y procesos de contratación estatal.</p>
                                                                <p>Es ingeniería Electrónica de la Universidad de Ibagué, con especialización en Gerencia de Proyectos de la Universidad del Tolima. Su experiencia profesional se centra en áreas como telemetría, telemática, telecomunicaciones, medicina, control, sistemas de seguridad en el área de la electrónica. En la Secretaría Distrital de Movilidad estaba al frente del Proyecto de Sistema Inteligente de Transporte para Bogotá (SIT).</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- /#fin OTIC -->

                                <!-- collapseOSV -->
                                <div class='panel panel-default'>
                                    <div class='panel-heading ph-2' role='tab' id='headingOSV'>
                                        <h4 class='panel-title'>
                                            <a role='button' data-toggle='collapse' data-parent='#accordionDS' href='#collapseOSV' aria-expanded='true' aria-controls='collapseOSV'>
                                                1.3. Oficina de Seguridad Vial
                                            </a>
                                        </h4>
                                    </div>
                                    <div id='collapseOSV' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingOSV'>
                                        <div class="panel-body">
                                            <div class="panel-dependencia">
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <p>Fijar la seguridad vial como eje central de la Secretaría, privilegiando la planificación y formulación de lineamientos en esta materia e incorporando esta noción como eje básico en todos los procesos misionales de la Secretaría.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class='panel-body-mapa'>
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-4 text-center">
                                                        <div class="img-perfil w-100">
                                                            <img class="img-circle" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/10-02-2021/nathaly-torregroza.jpg" alt="Foto: Nathaly Torregroza Vargas" title="Foto: Nathaly Torregroza Vargas">
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-8 ">
                                                        <div class="descripcion">
                                                            <h1>Nathaly Torregroza Vargas</h1>
                                                            <h4>Jefe Oficina de Seguridad Vial</h4>
                                                            <div class="descripcion-xs">
                                                                <p>Es Ingeniera Civil de la Universidad del Norte, con Maestría en Ingeniería en Transporte en la Universidad de los Andes. Es líder en el desarrollo y aplicación de iniciativas relacionadas con movilidad sostenible, seguridad vial y operacional.</p>
                                                                <p>Ha trabajado en la GIZ-Colombia (Agencia Alemana de Cooperación), como asesora en el proyecto TRANSfer III que busca promover la movilidad eléctrica en sistemas de transporte público masivo. En TransMilenio estuvo como Directora Técnica de Seguridad, donde tenía a su cargo la implementación de estrategias y programas de seguridad vial, operacional y física en el Sistema.</p>
                                                                <p>También prestó sus servicios en la Agencia Nacional de Seguridad Vial como asesora en la coordinación intersectorial para promover la seguridad vial, infraestructura vial, comportamiento humano, y en proyectos estratégicos como gestión de la velocidad y licencias de conducción.</p>
                                                                <p>Su experiencia en la academia se remite al Grupo Sur (Sostenibilidad Urbana Regional) de la Universidad de los Andes, donde se dedicó al desarrollo de proyectos de investigación de seguridad vial, caracterización de tipologías de estacionamiento en vía, e identificación de riesgos de siniestralidad, diagnóstico de seguridad vial en las carreteras de Colombia IRAP, entre otros. Cuenta con publicaciones en el ámbito nacional e internacional.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- /#fin OSV -->

                                <!-- collapseOGS -->
                                <div class='panel panel-default'>
                                    <div class='panel-heading ph-2' role='tab' id='headingOGS'>
                                        <h4 class='panel-title'>
                                            <a role='button' data-toggle='collapse' data-parent='#accordionDS' href='#collapseOGS' aria-expanded='true' aria-controls='collapseOGS'>
                                                1.4. Oficina de Gestión Social
                                            </a>
                                        </h4>
                                    </div>
                                    <div id='collapseOGS' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingOGS'>
                                        <div class="panel-body">
                                            <div class="panel-dependencia">
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <p>Incorpora lineamientos de política y estrategias para la sostenibilidad social y el logro de los beneficios sociales esperados con una perspectiva inclusiva y diferencial.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class='panel-body-mapa'>

                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-4 text-center">
                                                        <div class="img-perfil w-100">
                                                            <img class="img-circle" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/03-07-2020/adriana-iza.jpg" alt="Foto: Adriana Ruth Iza Certuche" title="Foto: Adriana Ruth Iza Certuche">
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-8 ">
                                                        <div class="descripcion">
                                                            <div>
                                                                <h1>Adriana Ruth Iza Certuche</h1>
                                                                <h4>Jefe Oficina de Gestión Social</h4>
                                                            </div>
                                                            <div class="descripcion-xs">
                                                                <p>Es administradora de empresas, tiene un máster en Estudios Políticos de la Universidad Javeriana y una especialización en Evaluación Social de Proyectos de la Universidad de los Andes. Por seis años fue Directora de Estudios Sectoriales de la Secretaría de Movilidad, y ahora es la jefe de Gestión Social. Además fue coordinadora de procesos de emprendimiento y líder del proyecto Colegios Amigos del Turismo, en el Instituto Distrital de Turismo. También tiene experiencia en el sector privado donde fue gerente de Cluster de confecciones alrededor de cuatro años.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- /#fin OGS -->

                                <!-- collapseOAPI -->
                                <div class='panel panel-default'>
                                    <div class='panel-heading ph-2' role='tab' id='headingOAPI'>
                                        <h4 class='panel-title'>
                                            <a role='button' data-toggle='collapse' data-parent='#accordionDS' href='#collapseOAPI' aria-expanded='true' aria-controls='collapseOAPI'>
                                                1.5. Oficina Asesora de Planeación Institucional.
                                            </a>
                                        </h4>
                                    </div>

                                    <div id='collapseOAPI' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingOAPI'>
                                        <div class="panel-body">
                                            <div class="panel-dependencia">
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <p>Asesorar en la formulación de las políticas de la Secretaría en materia de planeación, formulación y seguimiento a la ejecución de los planes, programas y proyectos para el logro de los objetivos y metas institucionales.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class='panel-body-mapa'>
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-4 text-center">
                                                        <div class="img-perfil w-100">
                                                            <img class="img-circle" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/06-04-2020/julieth-rojas-betancour.jpg" alt="Foto: Julieth Rojas Betancour" title="Foto: Julieth Rojas Betancour">
                                                        </div>
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
                                <!-- /#fin OAPI -->

                                <!-- collapseOCD -->
                                <div class='panel panel-default'>
                                    <div class='panel-heading ph-2' role='tab' id='headingOCD'>
                                        <h4 class='panel-title'>
                                            <a role='button' data-toggle='collapse' data-parent='#accordionDS' href='#collapseOCD' aria-expanded='true' aria-controls='collapseOCD'>
                                                1.6. Oficina de Control Disciplinario.
                                            </a>
                                        </h4>
                                    </div>
                                    <div id='collapseOCD' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingOCD'>

                                        <div class="panel-body">
                                            <div class="panel-dependencia">
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <p>Dirige los procesos disciplinarios relacionados con las investigaciones a funcionarios y ex funcionarios con el fin de garantizarles el debido proceso, de conformidad con el Código Único Disciplinario y normas concordantes.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class='panel-body-mapa'>
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-4 text-center">
                                                        <div class="img-perfil w-100">
                                                            <img class="img-circle" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-10-2020/guetty-caycedo.jpg" alt="Foto: Guetty Caycedo Caycedo" title="Foto: Guetty Caycedo Caycedo">
                                                        </div>
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
                                <!-- /#fin OCD -->

                                <!-- collapseOCI -->
                                <div class='panel panel-default'>
                                    <div class='panel-heading ph-2' role='tab' id='headingOCI'>
                                        <h4 class='panel-title'>
                                            <a role='button' data-toggle='collapse' data-parent='#accordionDS' href='#collapseOCI' aria-expanded='true' aria-controls='collapseOCI'>
                                                1.7. Oficina de Control Interno.
                                            </a>
                                        </h4>
                                    </div>
                                    <div id='collapseOCI' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingOCI'>

                                        <div class="panel-body">
                                            <div class="panel-dependencia">
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <p>Encargada de los mecanismos de autocontrol, autorregulación, valoración del riesgo y mejoramiento continuo.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class='panel-body-mapa'>
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-4 text-center">
                                                        <div class="img-perfil w-100">
                                                            <img class="img-circle" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-02-2022/alba_enidia_villamil_munoz.webp" alt="Foto: Alba Enidia Villamil Muñoz" title="Foto: Alba Enidia Villamil Muñoz">
                                                        </div>
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
            <!-- Fin Seccion Collapse Despacho de la Secretaría  -->

            <!-- collapseSubPolMovilidad -->
            <div class='panel panel-default'>
                <div class='panel-heading ph-1' role='tab' id='headingSubPolMovilidad'>
                    <h4 class='panel-title'>
                        <a role='button' data-toggle='collapse' data-parent='#accordionPerfiles' href='#collapseSubPolMovilidad' aria-expanded='true' aria-controls='collapseSubPolMovilidad'>
                            2. Subsecretaría de Política de Movilidad.
                        </a>
                    </h4>
                </div>
                <div id='collapseSubPolMovilidad' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingSubPolMovilidad'>
                    <div class="panel-body">

                        <div class="panel-dependencia">
                            <p>Planea las estrategias y el desarrollo articulado para la ejecución de planes, programas y proyectos que impacten de manera positiva la movilidad, el transporte y la infraestructura relacionada con la movilidad en la ciudad de Bogotá D.C., en coordinación con las demás áreas de la Secretaría Distrital de Movilidad, de acuerdo con los objetivos del Plan de Desarrollo Distrital, del Plan Maestro de Movilidad y la normatividad vigente.</p>
                        </div>
                        <div class='panel-body-mapa'>
                            <div class="map-org">
                                <!-- Image Map Generated by http://www.image-map.net/ -->
                                <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/08-10-2021/3.png" usemap="#image-map">

                                <map name="image-map">
                                    <area target="" alt="Despacho de la Secretaría" title="Despacho de la Secretaría" href="https://www.movilidadbogota.gov.co/web/entorno/#collapseOACCM" coords="546,72,383,10" shape="rect">
                                </map>
                            </div>
                        </div>
                        <div class="panel-body-mapa">

                            <div class="row">
                                <!-- <div class="col-xs-12 col-sm-4 text-center">
                                    <div class="img-perfil w-100">
                                        <img class="img-circle" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/18-11-2021/juanestebanmartinez_b.webp" alt="Juan Esteban Martínez Ruíz" title="Juan Esteban Martínez Ruíz">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-8 ">
                                    <div class="descripcion">
                                        <h1>Juan Esteban Martínez Ruíz</h1>
                                        <h4>Subsecretario de Política de Movilidad</h4>
                                        <div class="descripcion-xs">
                                            <p>Es Ingeniero Civil de la Universidad EAFIT; tiene una especialización en Vías y Transporte de la Universidad de Medellín y otra en Economía de la Universidad de los Andes. Complementa sus estudios una Maestría en Ingeniería de la Universidad de EAFIT, donde también es profesor en Sistemas de Transporte desde hace 10 años.</p>
                                            <p>Lleva más de 16 años trabajando al servicio del sector público en las dos ciudades más importantes del país: Bogotá y Medellín. En esta última fue Secretario de Movilidad entre los años 2016 y 2017, pero antes de asumir esa responsabilidad se desempeñó durante seis años como Ingeniero de planeación en el Metro de Medellín y luego pasó a ser Subdirector de Movilidad del Área Metropolitana, que comprende los 10 municipios del Valle de Aburrá.</p>
                                            <p>En TransMilenio coordinó el proceso de adquisición de la flota de 500 buses eléctricos. Hace dos años llegó a Bogotá como consultor del Banco Mundial y del Banco Interamericano de Desarrollo (BID) para apoyar los estudios de expansión de la primera línea del Metro, que partirá desde la calle 72 e irá hasta la localidad de Suba.</p>
                                            <p>Toda su experiencia laboral la ha adquirido en el sector del transporte y de la movilidad, "He mantenido un interés genuino por todos los sistemas de transporte, llámense, metro, buses, carga, bicicletas o peatones”.</p>
                                        </div>
                                    </div>
                                </div> -->

                                <div class="col-xs-12 col-sm-4 text-center">
                                    <div class="img-perfil w-100">
                                        <img class="img-circle" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-11-2021/perfil_susanamorales.png" alt="Foto: Susana Morales" title="Foto: Susana Morales">
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-8 ">
                                    <div class="descripcion">
                                        <h1>Susana Morales</h1>
                                        <h4>Subsecretaría de Política de Movilidad (e)</h4>
                                        <div class="descripcion-xs">
                                            <p>Arquitecta de la Universidad de los Andes, especialista en Diseño Urbano de la Universidad Nacional de Colombia y Magister en Planeamiento Urbano y Políticas Territoriales del Politécnico de Milán. Cuenta con más de 13 años de experiencia en el sector público y privado en dirección, estructuración y gestión de proyectos territoriales y de movilidad, contratación pública, diseño urbano y desarrollo orientado por el transporte sostenible.</p>
                                            <p>Ha coordinado proyectos de ciudad, y grandes eventos de contenido internacional. Se ha desempeñado como asesora de la Dirección General en el Instituto de Desarrollo Urbano, IDU, coordinadora del componente urbano del programa Ciudades Sostenibles y Competitivas de Findeter, directora de operaciones estratégicas en la Secretaría Distrital de Planeación, entre otros. Es docente de la Maestría de Ciudades Inteligentes de la Universidad Externado de Colombia.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="panel-body-mapa">

                            <div class='panel-group' id='accordionSPM' role='tablist ' aria-multiselectable='true'>
                                <!-- collapseDIM -->
                                <div class='panel panel-default'>
                                    <div class='panel-heading ph-2' role='tab' id='headingDIM'>
                                        <h4 class='panel-title'>
                                            <a role='button' data-toggle='collapse' data-parent='#accordionSPM' href='#collapseDIM' aria-expanded='true' aria-controls='collapseDIM'>
                                                2.1. Dirección de Inteligencia para la Movilidad.
                                            </a>
                                        </h4>
                                    </div>
                                    <div id='collapseDIM' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingDIM'>
                                        <div class="panel-body">

                                            <div class="panel-dependencia">
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <p>Dirige la realización de las investigaciones, estudios, análisis y propuestas de producción de insumos para la toma de decisiones y la innovación al interior de la Secretaría Distrital de Movilidad, de acuerdo con los Planes Distritales de Movilidad, Planes Distritales de Desarrollo y la normatividad vigente.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class='panel-body-mapa'>
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-4 text-center">
                                                        <div class="img-perfil w-100">
                                                            <img class="img-circle" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-02-2022/alimarbenitezmolina.webp" alt="Alimar Benítez Molina" title="Alimar Benítez Molina">
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-8 ">
                                                        <div class="descripcion">
                                                            <h1>Alimar Benítez Molina</h1>
                                                            <h4>Directora de Inteligencia para la Movilidad</h4>
                                                            <div class="descripcion-xs">
                                                                <p>Es Licenciada en Estadística, Magister Scientiae en Estadística y se encuentra finalizando su Doctorado en Estadística, estudios que ha adelantado en la Universidad de Los Andes (ULA), Mérida - Venezuela.</p>
                                                                <p>Dedica su vida a liderar procesos de investigación para entender los problemas a los que se enfrentan las organizaciones, con el fin de desarrollar soluciones orientadas a resultados eficientes y coherentes.</p>
                                                                <p>Cuenta con 16 años de experiencia profesional, tiempo en el cual se resalta su trayectoria en el ámbito académico como docente, investigadora, ponente y escritora de artículos indexados; además, su desempeño como profesional especializada en estadística para instituciones como la ULA, Cabildo Verde y Empresa de Transporte del Tercer Milenio TRANSMILENIO S.A.</p>
                                                                <p>En Transmilenio S.A. se destaca su experiencia en el desarrollo de herramientas de BI especializadas con integración de análisis exploratorio, construcción de indicadores multidimensionales, metodologías para el ajuste de la supervisión de los servicios Zonales del SITP. Tiene destrezas en el manejo de software R, Python, SQL. ArcGis, QGIS, SAS, SPSS y SPSS Modeler, STATA, Minitab y manejo avanzado en herramientas de visualización de información como Qlik Sense, R, Tableu, Power BI, Shiny y Dash.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>


                                    </div>
                                </div>
                                <!-- /#fin DIM -->

                                <!-- collapseDPM -->
                                <div class='panel panel-default'>
                                    <div class='panel-heading ph-2' role='tab' id='headingDPM'>
                                        <h4 class='panel-title'>
                                            <a role='button' data-toggle='collapse' data-parent='#accordionSPM' href='#collapseDPM' aria-expanded='true' aria-controls='collapseDPM'>
                                                2.2. Dirección de Planeación de la Movilidad.
                                            </a>
                                        </h4>
                                    </div>
                                    <div id='collapseDPM' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingDPM'>

                                        <div class="panel-body">

                                            <div class="panel-dependencia">
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <p>Dirige las acciones relacionadas con el desarrollo de los planes, proyectos, el desarrollo de la movilidad, el tránsito, el transporte en todas sus modalidades y el desarrollo de la infraestructura vial y del transporte, de acuerdo con las Políticas generadas por la Subsecretaría de Política de la Movilidad, el Plan Maestro de Movilidad, el Plan Distrital de Desarrollo y las disposiciones aplicables a la materia.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class='panel-body-mapa'>


                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-4 text-center">
                                                        <div class="img-perfil w-100">
                                                            <img class="img-circle" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-02-2022/deyaniraconsueloavilamoreno.webp" alt="Foto: Deyanira Consuelo Avila Moreno" title="Foto: Deyanira Consuelo Avila Moreno">
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-8 ">
                                                        <div class="descripcion">
                                                            <h1>Deyanira Consuelo Avila Moreno</h1>
                                                            <h4>Directora de Planeación para la Movilidad (e)</h4>
                                                            <div class="descripcion-xs">
                                                                <p>Es ingeniera catastral y geodesta de la Universidad Distrital Francisco José de Caldas, Especialista en Gestión Ambiental Urbana de la Universidad Piloto de Colombia, auditora en Seguridad Vial del WRI, auditora interna en Sistemas de Gestión de la Calidad ISO 9001:2015. Tiene más de 17 años de experiencia en el sector público, donde ha prestado sus servicios profesionales en entidades como el IDU, Catastro Distrital y la Secretaría de Movilidad.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- 
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-4 text-center">
                                                        <div class="img-perfil w-100">
                                                            <img class="img-circle" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-11-2021/perfil_susanamorales.png" alt="Foto: Susana Morales" title="Foto: Susana Morales">
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-8 ">
                                                        <div class="descripcion">
                                                            <h1>Susana Morales</h1>
                                                            <h4>Directora de Planeación para la Movilidad</h4>
                                                            <div class="descripcion-xs">
                                                                <p>Arquitecta de la Universidad de los Andes, especialista en Diseño Urbano de la Universidad Nacional de Colombia y Magister en Planeamiento Urbano y Políticas Territoriales del Politécnico de Milán. Cuenta con más de 13 años de experiencia en el sector público y privado en dirección, estructuración y gestión de proyectos territoriales y de movilidad, contratación pública, diseño urbano y desarrollo orientado por el transporte sostenible.</p>
                                                                <p>Ha coordinado proyectos de ciudad, y grandes eventos de contenido internacional. Se ha desempeñado como asesora de la Dirección General en el Instituto de Desarrollo Urbano, IDU, coordinadora del componente urbano del programa Ciudades Sostenibles y Competitivas de Findeter, directora de operaciones estratégicas en la Secretaría Distrital de Planeación, entre otros. Es docente de la Maestría de Ciudades Inteligentes de la Universidad Externado de Colombia.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> -->

                                                <div class='panel-group' id='accordionSPM_DPM' role='tablist ' aria-multiselectable='true'>

                                                    <!-- collapseSTPublico -->
                                                    <div class='panel panel-default'>
                                                        <div class='panel-heading' role='tab' id='headingSTPublico'>
                                                            <h4 class='panel-title'>
                                                                <a role='button' data-toggle='collapse' data-parent='#accordionSPM_DPM' href='#collapseSTPublico' aria-expanded='true' aria-controls='collapseSTPublico'>
                                                                    2.2.1. Subdirección de Transporte Público.
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id='collapseSTPublico' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingSTPublico'>

                                                            <div class="panel-body">

                                                                <div class="panel-dependencia">
                                                                    <div class="row">
                                                                        <div class="col-xs-12">
                                                                            <p>Dirige la formulación y ejecución de estrategias, planes, programas, proyectos de inversión y normatividad en materia de Transporte Público en todas sus modalidades, accesibilidad y transporte regional en la ciudad de Bogotá.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class='panel-body-mapa'>
                                                                    <div class="row">

                                                                        <div class="col-xs-12 col-sm-4 text-center">
                                                                            <div class="img-perfil w-100">
                                                                                <img class="img-circle" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/09-03-2022/rafaelalbertogonzalezrodriguez.webp" alt="Rafael Alberto González Rodríguez">
                                                                            </div>
                                                                        </div>
                                                                        
                                                                        <div class="col-xs-12 col-sm-8 ">
                                                                            <div class="descripcion">
                                                                                <h1>Rafael Alberto González Rodríguez</h1>
                                                                                <h4>Subdirector de Transporte Público</h4>
                                                                                <div class="descripcion-xs">
                                                                                    <p>Ingeniero Civil egresado de la Universidad Nacional de Colombia, especialista en Gerencia de Proyectos de la Universidad del Tolima y magíster en Ingeniería Civil de la Pontificia Universidad Javeriana.</p>
                                                                                    <p>Tiene más de 15 años de experiencia en transporte urbano, ingeniería de tránsito, seguridad vial, control y fiscalización, liderando proyectos tanto en el sector público como en el privado, formulando estrategias y dirigiendo la ejecución de programas enfocados a mejorar las condiciones de movilidad.</p>
                                                                                    <p>Trabajó en la Secretaría Distrital de Movilidad desde el año 2017 a 2021 desempeñándose en cargos como: director de Gestión de Tránsito y Control de Tránsito y Transporte, subdirector de Control de Tránsito y Transporte y asesor de la Dirección de Control y Vigilancia; y regresa con el fin de aportar al planteamiento de la política pública de transporte y de asumir los retos que se lideran desde esta subdirección. Rafael afirma que la SDM tiene un equipo humano dispuesto a responder a las necesidades de la ciudadanía, entre ellos, a la reactivación económica como un tema fuerte para estos próximos años de gestión.</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>

                                                            </div>


                                                        </div>
                                                    </div>
                                                    <!-- /#fin STPublico -->

                                                    <!-- collapseSTPrivado -->
                                                    <div class='panel panel-default'>
                                                        <div class='panel-heading' role='tab' id='headingSTPrivado'>
                                                            <h4 class='panel-title'>
                                                                <a role='button' data-toggle='collapse' data-parent='#accordionSPM_DPM' href='#collapseSTPrivado' aria-expanded='true' aria-controls='collapseSTPrivado'>
                                                                    2.2.2. Subdirección de Transporte Privado.
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id='collapseSTPrivado' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingSTPrivado'>

                                                            <div class="panel-body">

                                                                <div class="panel-dependencia">
                                                                    <div class="row">
                                                                        <div class="col-xs-12">
                                                                            <p>Dirige la formulación y ejecución de estrategias, planes, programas, proyectos de inversión y normatividad en materia de transporte privado en todas sus modalidades, medidas de gestión de la demanda y demás relacionadas en la ciudad de Bogotá D.C.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class='panel-body-mapa'>
                                                                    <div class="row">

                                                                        <div class="col-xs-12 col-sm-4 text-center">
                                                                            <div class="img-perfil w-100">
                                                                                <img class="img-circle" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-11-2021/perfil_valentinaacunagarcia.jpg" alt="Foto: Valentina Acuña García" title="Foto: Valentina Acuña García">
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-xs-12 col-sm-8 ">
                                                                            <div class="descripcion">
                                                                                <h1>Valentina Acuña García</h1>
                                                                                <h4>Subdirectora de Transporte Privado</h4>
                                                                                <div class="descripcion-xs">
                                                                                    <p>Valentina Acuña García, de 30 años de edad, y quien gracias a su excelente desempeño fue nombrada como Subdirectora de Transporte Privado en la entidad, viene de prestar sus servicios como profesional en la misma Subdirección donde se ocupó de diversos temas como el proceso de interventoría del Sistema Inteligente de Estacionamientos y las excepciones de vehículos particulares a la medida de pico y placa, entre otros.</p>
                                                                                    <p>Valentina es Ingeniera Civil de la Universidad Nacional de Colombia y cursó una maestría en Transporte en la misma alma máter. Además, tiene estudios complementarios en Análisis de Sistemas de Transporte, y en Introducción a los Modelos de Demanda de Transporte en la Pontificia Universidad Católica de Chile.</p>
                                                                                    <p>Fue elegida como estudiante de intercambio por la convocatoria de Mejores Promedios, de la Universidad Nacional de Colombia, por lo cual viajó a estudiar un año en Francia.</p>
                                                                                    <p>Su experiencia ha sido específicamente en la planeación del transporte y la creación de estrategias de movilidad. En TransMilenio estuvo alrededor de cuatro años en la Subgerencia Técnica y de Servicios, donde se encargó de la elaboración de un modelo estadístico para las modificaciones a las rutas del SITP y de los procesos de planeación operacional, técnica y estratégica de la Dirección Técnica de Buses. En la Universidad Nacional de Colombia trabajó como ingeniera de apoyo en el programa de Investigación de Tránsito y Transporte.</p>
                                                                                    <p>Se muestra complacida con el excelente equipo de trabajo que recibe, el cual se destaca por su capacidad técnica y los valores personales, atributos que son fundamentales para potencializar esta Subdirección. Busca trabajar de manera articulada con los otros grupos de la Secretaría para alcanzar las metas propuestas como cambiar el paradigma con respecto a la nueva normalidad y desestimular el uso del vehículo particular a través de la implementación de estrategias de movilidad sostenible, entre otras.</p>
                                                                                    <p>Se declara amante de la naturaleza, hacer caminatas y pasar tiempo al aire libre. Le encanta el glamping* y por supuesto disfruta de compartir tiempo en familia.</p>
                                                                                    <p>¡Bienvenida y muchos éxitos!</p>
                                                                                    <p>*glamping (actividad de disfrutar al aire libre, con las comodidades de un hotel)</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                    <!-- /#fin STPrivado -->

                                                    <!-- collapseSByP -->
                                                    <div class='panel panel-default'>
                                                        <div class='panel-heading' role='tab' id='headingSByP'>
                                                            <h4 class='panel-title'>
                                                                <a role='button' data-toggle='collapse' data-parent='#accordionSPM_DPM' href='#collapseSByP' aria-expanded='true' aria-controls='collapseSByP'>
                                                                    2.2.3. Subdirección de la Bicicleta y el Peatón
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id='collapseSByP' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingSByP'>

                                                            <div class="panel-body">

                                                                <div class="panel-dependencia">
                                                                    <div class="row">
                                                                        <div class="col-xs-12">
                                                                            <p>Dirige la formulación y ejecución de estrategias, planes, programas, proyectos de inversión y normatividad en materia de medios alternativos y no motorizados de movilidad segura y sostenible en la ciudad y, su promoción. Fomenta del uso de la bicicleta a través de temáticas como el sistema de bicicletas públicas, el registro de bicicletas, el mejoramiento y rehabilitación de la infraestructura y mobiliario para bicicletas y la ampliación de ellos.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class='panel-body-mapa'>

                                                                    <div class="row">
                                                                        <div class="col-xs-12 col-sm-4 text-center">
                                                                            <div class="img-perfil w-100">
                                                                                <img class="img-circle" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-02-2022/oscarmauriciovelasquezbobadilla.jpg" alt="Foto: Óscar Mauricio Velásquez Bobadilla" title="Foto: Óscar Mauricio Velásquez Bobadilla">
                                                                            </div>
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
                                                    <!-- /#fin SByP -->

                                                    <!-- collapseSI -->
                                                    <div class='panel panel-default'>
                                                        <div class='panel-heading' role='tab' id='headingSI'>
                                                            <h4 class='panel-title'>
                                                                <a role='button' data-toggle='collapse' data-parent='#accordionSPM_DPM' href='#collapseSI' aria-expanded='true' aria-controls='collapseSI'>
                                                                    2.2.4. Subdirección de Infraestructura.
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id='collapseSI' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingSI'>

                                                            <div class="panel-body">

                                                                <div class="panel-dependencia">
                                                                    <div class="row">
                                                                        <div class="col-xs-12">
                                                                            <p>Dirige el desarrollo de las políticas para el desarrollo, construcción, mantenimiento y rehabilitación de la infraestructura vial y de transporte.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class='panel-body-mapa'>
                                                                    <div class="row">

                                                                        <div class="col-xs-12 col-sm-4 text-center">
                                                                            <div class="img-perfil w-100">
                                                                                <img class="img-circle" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-11-2021/perfil_diegoandressuerezgomez.jpg" alt="Foto: Diego Andrés Suérez Gómez" title="Foto: Diego Andrés Suérez Gómez">
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-xs-12 col-sm-8 ">
                                                                            <div class="descripcion">
                                                                                <h1>Diego Andrés Suérez Gómez</h1>
                                                                                <h4>Subdirector de Infraestructura</h4>
                                                                                <div class="descripcion-xs">
                                                                                    <p>El Subdirector de Infraestructura es Ingeniero de Transporte, con especialización en Tránsito y Transporte, y tiene un Magíster en Ingeniería, con énfasis en transporte, en la Universidad Tecnológica y Pedagógica de Colombia, -UPTC- en Tunja. En otros cursos complementarios, se destaca el de Modelos de Elección para Análisis Econométricos en Transporte, adelantado en la Universidad de los Andes.</p>
                                                                                    <p>Se ha desempeñado como contratista en esa misma Subdirección de la Secretaría Distrital de Movilidad, donde tenía bajo su cargo el seguimiento a los estudios de tránsito de los proyectos de infraestructura vial y de transporte, bajo los estándares de seguridad vial.</p>
                                                                                    <p>Tiene nueve años de experiencia en el manejo de herramientas de simulación de transporte, en la generación de modelos de tránsito, así como en la coordinación de grupos de trabajo para la elaboración de documentos de política pública, en varios municipios del país, entre ellos en el área Metropolitana del Valle de Aburrá.</p>
                                                                                    <p>Se propone armonizar los distintos proyectos que se están desarrollando en la ciudad en materia de movilidad, a partir de la visión del POT, privilegiando los usuarios más vulnerables como peatones, personas en condición de discapacidad, adultos mayores, mujeres embarazadas, entre otros actores viales, siempre con principios de conectividad, accesibilidad y funcionalidad.</p>
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
            <!-- /#fin SubPolMovilidad -->

            <!-- collapseSGM -->
            <div class='panel panel-default'>
                <div class='panel-heading ph-1' role='tab' id='headingSGM'>
                    <h4 class='panel-title'>
                        <a role='button' data-toggle='collapse' data-parent='#accordionPerfiles' href='#collapseSGM' aria-expanded='true' aria-controls='collapseSGM'>
                            3. Subsecretaría de Gestión de la Movilidad
                        </a>
                    </h4>
                </div>

                <div id='collapseSGM' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingSGM'>

                    <div class="panel-body">
                        <div class="panel-dependencia">
                            <div class="row">
                                <div class="col-xs-12">
                                    <p>Dirige la ejecución de las políticas, planes y programas de tránsito y transporte de acuerdo con el Plan de Ordenamiento Territorial y el Plan Maestro de Movilidad del Distrito Capital.</p>
                                </div>
                            </div>
                        </div>
                        <div class='panel-body-mapa'>
                            <div class="map-org">
                                <!-- Image Map Generated by http://www.image-map.net/ -->
                                <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/08-10-2021/4_1.png" usemap="#image-map">

                                <map name="image-map">
                                    <area target="" alt="Despacho de la Secretaría" title="Despacho de la Secretaría" href="https://www.movilidadbogota.gov.co/web/entorno/#collapseOACCM" coords="546,72,383,10" shape="rect">
                                </map>
                            </div>
                        </div>

                        <div class='panel-body-mapa'>
                            <div class="row">

                                <div class="col-xs-12 col-sm-4 text-center">
                                    <div class="img-perfil w-100">
                                        <img class="img-circle" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-02-2022/nicolas_adolfo_correal.webp" alt="Nicolás Adolfo Correal" title="Nicolás Adolfo Correal">
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-8 ">
                                    <div class="descripcion">
                                        <h1>Nicolás Adolfo Correal</h1>
                                        <h4>Subsecretario de Gestión de la Movilidad</h4>
                                        <div class="descripcion-xs">
                                            <p>Es Ingeniero Civil de la Universidad de los Andes, donde también cursó una Maestría en Ingeniería. Ha complementado su formación con diplomados en gestión del cambio, gestión por procesos y en alta gerencia.</p>
                                            <p>Cuenta con más de 9 años de experiencia donde se destaca su paso por la Universidad de los Andes en el campo de la investigación, y el hecho de que, desde el 2017 al 2020, se desempeñó en la Secretaría de Movilidad como Asesor de Despacho, Director de Control y Vigilancia, y Director de Gestión de Tránsito y Control de Transporte. Posterior a ello, trabajó en TransMilenio S.A. donde, desde el cargo de Subgerente Técnico y de Servicios, era el responsable de la planeación de corto, mediano y largo plazo del sistema y la gestión de infraestructura.</p>
                                            <p>Nicolás se ha planteado como retos durante su labor: mejorar la congestión en corredores y zonas más relevantes de la Ciudad; priorizar el transporte público y optimizar la velocidad de este; seguir trabajando por la movilidad sostenible y por el respeto a la pirámide invertida donde prima el uso de la bici, el transporte público y después los otros modos.</p>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>



                        <div class="panel-body-mapa">
                            <div class='panel-group' id='accordionSGM' role='tablist ' aria-multiselectable='true'>

                                <!-- collapseDIT -->
                                <div class='panel panel-default'>
                                    <div class='panel-heading ph-2' role='tab' id='headingDIT'>
                                        <h4 class='panel-title'>
                                            <a role='button' data-toggle='collapse' data-parent='#accordionSGM' href='#collapseDIT' aria-expanded='true' aria-controls='collapseDIT'>
                                                3.1. Dirección de Ingeniería de Tránsito
                                            </a>
                                        </h4>
                                    </div>
                                    <div id='collapseDIT' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingDIT'>

                                        <div class="panel-body">

                                            <div class="panel-dependencia">
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <p>Dirige la ejecución de las políticas, planes, programas y proyectos relacionados con la señalización vertical y horizontal de la ciudad, así como los demás elementos y dispositivos que propendan por garantizar la seguridad vial, el buen uso del espacio público.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class='panel-body-mapa'>

                                                <div class="row">

                                                    <!-- <div class="col-xs-12 col-sm-4 text-center">
                                                        <div class="img-perfil w-100">
                                                            <img class="img-circle" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-05-2020/mario-gabriel-carbonell.jpg" alt="">
                                                        </div>
                                                    </div>

                                                    <div class="col-xs-12 col-sm-8 ">
                                                        <div class="descripcion">
                                                            <h1>Mario Gabriel Carbonell Gutiérrez</h1>
                                                            <h4>Director de Ingeniería de Tránsito (e)</h4>
                                                            <div class="descripcion-xs">
                                                                <p>Es ingeniero civil De la Universidad Militar Nueva Granada. Especialista en Diseño de Vías Urbanas Tránsito y Transporte de la Universidad Distrital Francisco José de Caldas, con más de 20 años de carrera profesional.</p>
                                                                <p>Tiene amplia experiencia en movilidad, tránsito y transporte en el sector público y privado. Ha sido asesor en temas de tránsito y transporte de la Subdirección General de Infraestructura del IDU. Se desempeñó como profesional especializado de la Secretaría Distrital de Movilidad y Secretaría de Tránsito y Transporte de Bogotá. Participó en la revisión y presentación ante la STT del “Manual de Auditorías Viales”, estrategias para contribuir a la disminución de los índices de accidentalidad vial en la ciudad de Bogotá. “CAL & MAYOR – STT – BANCO MUNDIAL.</p>
                                                            </div>
                                                        </div>
                                                    </div> -->

                                                    <div class="col-xs-12 col-sm-4 text-center">
                                                        <div class="img-perfil w-100">
                                                            <img class="img-circle" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-11-2021/perfil_jhonalexandergonzalez.jpg" alt="Jhon Alexander González Mendoza" title="Jhon Alexander González Mendoza">
                                                        </div>
                                                    </div>

                                                    <div class="col-xs-12 col-sm-8 ">
                                                        <div class="descripcion">
                                                            <h1>Jhon Alexander González Mendoza</h1>
                                                            <h4>Director de Ingeniería de Tránsito </h4>
                                                            <div class="descripcion-xs">
                                                                <p>Ingeniero Civil de la Universidad Nacional de Colombia, Especialista en Tránsito, Diseño y Seguridad vial, en proceso de Magister en Ingeniería de Transporte en la misma alma máter. Además, tiene estudios complementarios en modelación del transporte y el tránsito, así como auditorias de seguridad vial y diseño urbano.</p>
                                                                <p>Basa su perfil profesional en el marco del diseño seguro y la modelación del transporte y el tránsito, enfocándose en el comportamiento peatonal y de ciclistas. Parte de su experiencia la ha desarrollado en la elaboración de diferentes estudios y diseños a nivel nacional, para diferentes firmas consultoras en términos de: Estudios de transporte y tránsito, modelación del tráfico, diseño geométrico vial, diseño de señalización, planes manejo de tráfico en obra y auditorias de seguridad vial. Su mayor reto es lograr armonizar los diferentes proyectos viales en el marco de la planeación, la gestión y la ejecución en el distrito con altos estándares de calidad, eficiencia y seguridad vial.</p>
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>

                                                <div class='panel-group' id='accordionSGM_DIT' role='tablist ' aria-multiselectable='true'>

                                                    <!-- collapseSS -->
                                                    <div class='panel panel-default'>
                                                        <div class='panel-heading' role='tab' id='headingSS'>
                                                            <h4 class='panel-title'>
                                                                <a role='button' data-toggle='collapse' data-parent='#accordionSGM_DIT' href='#collapseSS' aria-expanded='true' aria-controls='collapseSS'>
                                                                    3.1.1. Subdirección de Señalización.
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id='collapseSS' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingSS'>

                                                            <div class="panel-body">

                                                                <div class="panel-dependencia">
                                                                    <div class="row">
                                                                        <div class="col-xs-12">
                                                                            <p>Desarrolla la señalización vertical y horizontal de la ciudad, y demás elementos y dispositivos que garanticen la seguridad vial, el buen uso del espacio público y la gestión del tránsito en la ciudad.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class='panel-body-mapa'>
                                                                    <div class="row">

                                                                        <div class="col-xs-12 col-sm-4 text-center">
                                                                            <div class="img-perfil w-100">
                                                                                <img class="img-circle" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-05-2020/mario-gabriel-carbonell.jpg" alt="">
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-xs-12 col-sm-8 ">
                                                                            <div class="descripcion">
                                                                                <h1>Mario Gabriel Carbonell Gutiérrez</h1>
                                                                                <h4>Subdirector de Señalización</h4>
                                                                                <div class="descripcion-xs">
                                                                                    <p>Es ingeniero civil De la Universidad Militar Nueva Granada. Especialista en Diseño de Vías Urbanas Tránsito y Transporte de la Universidad Distrital Francisco José de Caldas, con más de 20 años de carrera profesional.</p>
                                                                                    <p>Tiene amplia experiencia en movilidad, tránsito y transporte en el sector público y privado. Ha sido asesor en temas de tránsito y transporte de la Subdirección General de Infraestructura del IDU. Se desempeñó como profesional especializado de la Secretaría Distrital de Movilidad y Secretaría de Tránsito y Transporte de Bogotá. Participó en la revisión y presentación ante la STT del “Manual de Auditorías Viales”, estrategias para contribuir a la disminución de los índices de accidentalidad vial en la ciudad de Bogotá. “CAL & MAYOR – STT – BANCO MUNDIAL.</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                    <!-- /#fin SS -->

                                                    <!-- collapseSPMT -->
                                                    <div class='panel panel-default'>
                                                        <div class='panel-heading' role='tab' id='headingSPMT'>
                                                            <h4 class='panel-title'>
                                                                <a role='button' data-toggle='collapse' data-parent='#accordionSGM_DIT' href='#collapseSPMT' aria-expanded='true' aria-controls='collapseSPMT'>
                                                                    3.1.2. Subdirección de Planes de Manejo de Tránsito.
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id='collapseSPMT' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingSPMT'>

                                                            <div class="panel-body">

                                                                <div class="panel-dependencia">
                                                                    <div class="row">
                                                                        <div class="col-xs-12">
                                                                            <p>Dirige las actividades para viabilizar, autorizar o denegar los planes de manejo de tránsito (PMT) para obras, de alto, medio y bajo impacto localizado en la malla vial de la ciudad de Bogotá D.C. y realizar seguimiento a su implementación.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class='panel-body-mapa'>
                                                                    <div class="row">

                                                                        <div class="col-xs-12 col-sm-4 text-center">
                                                                            <div class="img-perfil w-100">
                                                                                <img class="img-circle" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/03-07-2020/martha-bayona.jpg" alt="">
                                                                            </div>
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
                                <!-- /#fin DIT -->

                                <!-- collapseDGTCTT -->
                                <div class='panel panel-default'>
                                    <div class='panel-heading ph-2' role='tab' id='headingDGTCTT'>
                                        <h4 class='panel-title'>
                                            <a role='button' data-toggle='collapse' data-parent='#accordionSGM' href='#collapseDGTCTT' aria-expanded='true' aria-controls='collapseDGTCTT'>
                                                3.2. Dirección de Gestión de Tránsito y Control de Tránsito y Transporte.
                                            </a>
                                        </h4>
                                    </div>
                                    <div id='collapseDGTCTT' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingDGTCTT'>

                                        <div class="panel-body">

                                            <div class="panel-dependencia">
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <p>Dirige la formulación, ejecución, así como realiza el seguimiento a las políticas, planes, programas y proyectos relacionadas con la Gestión del Tránsito y Control del Tránsito y del Transporte, que permitan el mejoramiento de las condiciones de movilidad, la aplicación de estrategias para la seguridad vial de los diferentes actores que actúan en la vía y ejerce el control sobre el tránsito y el transporte en la ciudad.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class='panel-body-mapa'>

                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-4 text-center">
                                                        <div class="img-perfil w-100">
                                                            <img class="img-circle" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-11-2021/perfil_sergioraultovarfarfan.jpg" alt="Foto: Sergio Raúl Tovar Farfán" title="Foto: Sergio Raúl Tovar Farfán">
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-8 ">
                                                        <div class="descripcion">
                                                            <h1>Sergio Raúl Tovar Farfán</h1>
                                                            <h4>Director de Gestión de Tránsito y Control de Tránsito y Transporte</h4>
                                                            <div class="descripcion-xs">
                                                                <p>Ingeniero Civil y Magister con énfasis en Transporte de la Universidad de los Andes. Durante sus más de 10 años de trayectoria profesional se ha desempeñado en diferentes ámbitos relacionados con el análisis de sistemas de transporte, gestión de tráfico, planeación y modelación del transporte. Su experiencia en la Secretaría de Movilidad ha sido como Subdirector técnico de Gestión en Vía, así como contratista en temas de gestión y modelación de transporte. También, se ha desempeñado como docente universitario, consultor de la firma Steer y modelador y entrenador certificado de PTV en la Universidad de los Andes.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class='panel-group' id='accordionSGM_DGTCTT' role='tablist ' aria-multiselectable='true'>

                                                    <!-- collapseSGV -->
                                                    <div class='panel panel-default'>
                                                        <div class='panel-heading' role='tab' id='headingSGV'>
                                                            <h4 class='panel-title'>
                                                                <a role='button' data-toggle='collapse' data-parent='#accordionSGM_DGTCTT' href='#collapseSGV' aria-expanded='true' aria-controls='collapseSGV'>
                                                                    3.2.1. Subdirección de Gestión en Vía.
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id='collapseSGV' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingSGV'>

                                                            <div class="panel-body">
                                                                <div class="panel-dependencia">
                                                                    <div class="row">
                                                                        <div class="col-xs-12">
                                                                            <p>Dirige la implementación y ejecución de las políticas, planes, programas y proyectos establecidos para la gestión del tránsito en vía, que permitan el mejoramiento de las condiciones de movilidad y la aplicación de estrategias para la seguridad vial de los diferentes actores que actúan en la vía.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class='panel-body-mapa'>
                                                                    <div class="row">

                                                                        <div class="col-xs-12 col-sm-4 text-center">
                                                                            <div class="img-perfil w-100">
                                                                                <img class="img-circle" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-11-2021/perfil_nathalypatinogonzalez.jpg" alt="Foto: Nathaly Patiño González" title="Foto: Nathaly Patiño González">
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-xs-12 col-sm-8 ">
                                                                            <div class="descripcion">
                                                                                <h1>Nathaly Patiño González</h1>
                                                                                <h4>Subdirectora de Gestion en Vía</h4>
                                                                                <div class="descripcion-xs">
                                                                                    <p>Ingeniera Civil de la Universidad Nacional de Colombia, con experiencia en tránsito y transporte, especialmente temas relacionados con gestión en vía en la Secretaría Distrital de Movilidad y en proyectos de consultoría y tiene una especialización en Tránsito y Transporte de la Universidad Pedagógica y Tecnológica de Colombia.</p>
                                                                                    <p>Fue contratista en la misma subdirección de la Secretaría de Movilidad, donde era gerente de las Localidades de Santa Fe, Candelaria, Chapinero y de la avenida Caracas. Su mayor meta es lograr que la ciudadanía reconozca a la entidad como una mano amiga en la vía, y que la misma comunidad ayude a mejorar los tiempos de atención y de respuesta a los eventos en vía, subiendo fotos o reportando a las redes sociales de movilidad.</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <!-- /#fin SGV -->

                                                    <!-- collapseSSemaforizacion -->
                                                    <div class='panel panel-default'>
                                                        <div class='panel-heading' role='tab' id='headingSSmaforizacion'>
                                                            <h4 class='panel-title'>
                                                                <a role='button' data-toggle='collapse' data-parent='#accordionSGM_DGTCTT' href='#collapseSSemaforizacion' aria-expanded='true' aria-controls='collapseSSemaforizacion'>
                                                                    3.2.2. Subdirección de Semaforización.
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id='collapseSSemaforizacion' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingSSmaforizacion'>

                                                            <div class="panel-body">
                                                                <div class="panel-dependencia">
                                                                    <div class="row">
                                                                        <div class="col-xs-12">
                                                                            <p>Dirige la formulación e implementación de las políticas, planes, programas y proyectos relacionados con los dispositivos de semaforización, que permitan mejorar de las condiciones de movilidad y seguridad vial de los diferentes actores viales de Bogotá D.C</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class='panel-body-mapa'>

                                                                    <!-- <div class="row">
                                                                        <div class="col-xs-12 col-sm-4 text-center">
                                                                            <div class="img-perfil w-100">
                                                                                <img class="img-circle" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-11-2021/perfil_sandrapatriciagiraldoclavijo.jpg" alt="Foto: Sandra Patricia Giraldo Clavijo" title="Foto: Sandra Patricia Giraldo Clavijo">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xs-12 col-sm-8 ">
                                                                            <div class="descripcion">
                                                                                <h1>Sandra Patricia Giraldo Clavijo</h1>
                                                                                <h4>Subdirectora de Semaforización</h4>
                                                                                <div class="descripcion-xs">
                                                                                    <p>Ingeniera civil de la Universidad de La Salle, con especialización en Diseño Geométrico de Vías Urbanas, Tránsito y Transporte.</p>
                                                                                    <p>Vinculada a la Secretaría Distrital de Movilidad en el área de semaforización desde el año 2009, actualmente es uno de los supervisores del contrato de interventoría del Sistema de Semáforos Inteligente, proyecto de más de 40 Millones de USD que renovó tecnológicamente el sistema de semaforización de Bogotá y lo posiciona a la vanguardia en tecnología a nivel mundial.</p>
                                                                                    <p>Trabajó en la Secretaría de Tránsito en temas de señalización y en el proyecto piloto de conceptos técnicos para soportar los fallos de las autoridades de tránsito ante la impugnación de comparendos de tránsito. Además, tiene experiencia en obras civiles de construcciones verticales, prefabricados para obras en serie y estructuras metálicas.</p>
                                                                                    <p>En el sector privado trabajó en temas de señalización e interventoría de señalización, para Bogotá, Cundinamarca, Eje Cafetero, en estudios de tránsito y PMTs.</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div> -->
                                                                    <div class="row">
                                                    <div class="col-xs-12 col-sm-4 text-center">
                                                        <div class="img-perfil w-100">
                                                            <img class="img-circle" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-11-2021/perfil_sergioraultovarfarfan.jpg" alt="Foto: Sergio Raúl Tovar Farfán" title="Foto: Sergio Raúl Tovar Farfán">
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-8 ">
                                                        <div class="descripcion">
                                                            <h1>Sergio Raúl Tovar Farfán</h1>
                                                            <h4>Subdirector de Semaforización (e)</h4>
                                                            <div class="descripcion-xs">
                                                                <p>Ingeniero Civil y Magister con énfasis en Transporte de la Universidad de los Andes. Durante sus más de 10 años de trayectoria profesional se ha desempeñado en diferentes ámbitos relacionados con el análisis de sistemas de transporte, gestión de tráfico, planeación y modelación del transporte. Su experiencia en la Secretaría de Movilidad ha sido como Subdirector técnico de Gestión en Vía, así como contratista en temas de gestión y modelación de transporte. También, se ha desempeñado como docente universitario, consultor de la firma Steer y modelador y entrenador certificado de PTV en la Universidad de los Andes.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <!-- /#fin SSemaforizacion -->

                                                    <!-- collapseSCTT -->
                                                    <div class='panel panel-default'>
                                                        <div class='panel-heading' role='tab' id='heading'>
                                                            <h4 class='panel-title'>
                                                                <a role='button' data-toggle='collapse' data-parent='#accordionSGM_DGTCTT' href='#collapseSCTT' aria-expanded='true' aria-controls='collapseSCTT'>
                                                                    3.2.3. Subdirección de Control de Tránsito y Transporte.
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id='collapseSCTT' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading'>
                                                            <div class="panel-body">
                                                                <div class="panel-dependencia">
                                                                    <div class="row">
                                                                        <div class="col-xs-12">
                                                                            <p>Dirige las acciones de regulación y control del tránsito y del transporte de los diferentes actores viales.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class='panel-body-mapa'>

                                                                    <div class="row">

                                                                        <div class="col-xs-12 col-sm-4 text-center">
                                                                            <div class="img-perfil w-100">
                                                                                <img class="img-circle" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-05-2020/diana-urrego.jpg" alt="">
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-xs-12 col-sm-8 ">
                                                                            <div class="descripcion">
                                                                                <h1>Diana Lorena Urrego García</h1>
                                                                                <h4>Subdirectora de Control de Tránsito y Transporte</h4>
                                                                                <div class="descripcion-xs">
                                                                                    <p>Profesional en ingeniería civil de la Universidad Nacional de Colombia, Especialista en Tránsito y Transporte de la Universidad Pedagógica y Tecnológica de Colombia, con experiencia en el sector público y privado en la planeación y operación de sistemas de transporte, estructuración e implementación de estrategias de gestión del tránsito encaminadas a mejorar la movilidad, así como incentivar cambios positivos en el comportamiento de los usuarios de la vía. Se ha desempeñado como profesional en un concesionario del SITP, la Secretaría de Movilidad de Soacha y la Secretaría Distrital de Movilidad.</p>
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
            <!-- /#fin SGM -->

            <!-- collapseSSC -->
            <div class='panel panel-default'>
                <div class='panel-heading ph-1' role='tab' id='headingSSC'>
                    <h4 class='panel-title'>
                        <a role='button' data-toggle='collapse' data-parent='#accordionPerfiles' href='#collapseSSC' aria-expanded='true' aria-controls='collapseSSC'>
                            4. Subsecretaría de Servicios a la Ciudadanía
                        </a>
                    </h4>
                </div>
                <div id='collapseSSC' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingSSC'>

                    <div class="panel-body">

                        <div class='panel-dependencia'>
                            <p>Dirige las acciones relacionadas con el desarrollo de los planes, proyectos, el desarrollo de la movilidad, el tránsito, el transporte en todas sus modalidades y el desarrollo de la infraestructura vial y del transporte, de acuerdo con las Políticas generadas por la Subsecretaría de Política de la Movilidad, el Plan Maestro de Movilidad, el Plan Distrital de Desarrollo y las disposiciones aplicables a la materia.</p>
                        </div>


                        <div class='panel-body-mapa'>
                            <div class="map-org">
                                <!-- Image Map Generated by http://www.image-map.net/ -->
                                <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/08-10-2021/5_1.png" usemap="#image-map">

                                <map name="image-map">
                                    <area target="" alt="Despacho de la Secretaría" title="Despacho de la Secretaría" href="https://www.movilidadbogota.gov.co/web/entorno/#collapseOACCM" coords="546,72,383,10" shape="rect">
                                </map>
                            </div>
                        </div>

                        <div class='panel-body-mapa'>
                            <div class="row">

                                <div class="col-xs-12 col-sm-4 text-center">
                                    <div class="img-perfil w-100">
                                        <img class="img-circle" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-06-2020/alejandra-gamez.jpg" alt="">
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-8 ">
                                    <div class="descripcion">
                                        <h1>Alejandra Moreno Gámez</h1>
                                        <h4>Subsecretaría de Servicios a la Ciudadanía</h4>
                                        <div class="descripcion-xs">
                                            <p>Es Comunicadora Social y Periodista, especializada en Opinión Publica y Mercado Político de la Pontificia Universidad Javeriana, con más de 20 años de experiencia en el sector público y en el mejoramiento de los servicios de atención al ciudadano. Ha sido servidora pública en diferentes entidades como Asesora de la Dirección General del Instituto Distrital de la Participación y la Acción Comunal, de la Unidad Administrativa Especial Migración Colombia, liderando la política de servicio al ciudadano en los servicios migratorios; en el Departamento Administrativo de Seguridad DAS se desempeñó como Coordinadora Nacional de Servicio al Ciudadano, en la Superintendencia de Vigilancia y Seguridad Privada como Asesora del Despacho y Jefe de Comunicaciones y en la Presidencia de la República, en la Secretaría de Prensa y Comunicación.</p>
                                            <p>Uno de los propósitos más importante al frente de esta Subsecretaría es la virtualización de los servicios ofrecidos a la ciudadanía para que su relacionamiento con la entidad sea de manera rápida, transparente y sencilla.</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>


                        <div class="panel-body-mapa">
                            <div class='panel-group' id='accordionSSC' role='tablist ' aria-multiselectable='true'>

                                <!-- collapseDAC -->
                                <div class='panel panel-default'>
                                    <div class='panel-heading ph-2' role='tab' id='headingDAC'>
                                        <h4 class='panel-title'>
                                            <a role='button' data-toggle='collapse' data-parent='#accordionSSC' href='#collapseDAC' aria-expanded='true' aria-controls='collapseDAC'>
                                                4.1. Dirección de Atención al Ciudadano.
                                            </a>
                                        </h4>
                                    </div>
                                    <div id='collapseDAC' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingDAC'>

                                        <div class="panel-body">

                                            <div class='panel-dependencia'>
                                                <p>Dirige la ejecución de las políticas, planes, programas y proyectos orientados a la atención a la ciudadanía, promoviendo modelos de gestión, bajo estándares de calidad y oportunidad para los trámites y servicios que se adelanten en el área.</p>
                                            </div>
                                            <div class='panel-body-mapa'>

                                                <!-- <div class="row">

                                                    <div class="col-xs-12 col-sm-4 text-center">
                                                        <div class="img-perfil w-100">
                                                            <img class="img-circle" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/06-04-2020/alejandra-rojas-posada.jpg" alt="">
                                                        </div>
                                                    </div>

                                                    <div class="col-xs-12 col-sm-8 ">
                                                        <div class="descripcion">
                                                            <h1>Alejandra Rojas Posada</h1>
                                                            <h4>Directora de Atención al Ciudadano</h4>
                                                            <div class="descripcion-xs">
                                                                <p>Abogada, especialista en Derecho Penal de la Universidad del Rosario. Se ha desempeñado tanto en el sector público, como en el privado, y su experiencia profesional ha sido con mayor énfasis en derecho administrativo.</p>
                                                                <p>Trabajó en la Superintendencia de Puertos y Transporte y en el bufete del abogado penalista Jaime Granados, además en la Unidad de Restitución de Tierras, y en el Ministerio de Agricultura.</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div> -->

                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-4 text-center">
                                                        <div class="img-perfil w-100">
                                                            <img class="img-circle" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/03-07-2020/adriana-iza.jpg" alt="Foto: Adriana Ruth Iza Certuche" title="Foto: Adriana Ruth Iza Certuche">
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-8 ">
                                                        <div class="descripcion">
                                                            <div>
                                                                <h1>Adriana Ruth Iza Certuche</h1>
                                                                <h4>Dirección de Atención al Ciudadano (e)</h4>
                                                            </div>
                                                            <div class="descripcion-xs">
                                                                <p>Es administradora de empresas, tiene un máster en Estudios Políticos de la Universidad Javeriana y una especialización en Evaluación Social de Proyectos de la Universidad de los Andes. Por seis años fue Directora de Estudios Sectoriales de la Secretaría de Movilidad, y ahora es la jefe de Gestión Social. Además fue coordinadora de procesos de emprendimiento y líder del proyecto Colegios Amigos del Turismo, en el Instituto Distrital de Turismo. También tiene experiencia en el sector privado donde fue gerente de Cluster de confecciones alrededor de cuatro años.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <!-- /#fin DAC -->

                                <!-- collapseDIATT -->
                                <div class='panel panel-default'>
                                    <div class='panel-heading ph-2' role='tab' id='headingDIATT'>
                                        <h4 class='panel-title'>
                                            <a role='button' data-toggle='collapse' data-parent='#accordionSSC' href='#collapseDIATT' aria-expanded='true' aria-controls='collapseDIATT'>
                                                4.2. Dirección de Investigaciones Administrativas al Tránsito y Transporte.
                                            </a>
                                        </h4>
                                    </div>
                                    <div id='collapseDIATT' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingDIATT'>

                                        <div class="panel-body">

                                            <div class='panel-dependencia'>
                                                <p>Establece los lineamientos para el desarrollo de las actividades de carácter sancionatorio, así como el ejercicio de la segunda instancia sobre decisiones de fondo frente a las infracciones a las normas del tránsito y transporte, de acuerdo con la normatividad vigente y las necesidades institucionales.</p>
                                            </div>
                                            <div class='panel-body-mapa'>

                                                <div class="row">

                                                    <div class="col-xs-12 col-sm-4 text-center">
                                                        <div class="img-perfil w-100">
                                                            <img class="img-circle" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-11-2021/perfil_dannyusma.jpg" alt="Foto: Danny Stiwar Usma Monsalve" title="Foto: Danny Stiwar Usma Monsalve">
                                                        </div>
                                                    </div>

                                                    <div class="col-xs-12 col-sm-8 ">
                                                        <div class="descripcion">
                                                            <h1>Danny Stiwar Usma Monsalve</h1>
                                                            <h4>Director de Investigaciones Administrativas al Tránsito y Transporte</h4>
                                                            <div class="descripcion-xs">
                                                                <p>Abogado titulado con especialización en Alta Dirección del Estado. Experiencia en los asuntos relacionados con los procesos de planeación y seguimiento de políticas públicas, especialmente en los sectores de Seguridad y Defensa, así como Agricultura y Desarrollo Rural en lo que a la Política de Restitución de Tierras se refiere.</p>
                                                                <p>Cuenta con extensa capacitación nacional e internacional en materia de seguridad de Estado, análisis criminal, pensamiento prospectivo, investigación criminal, Derechos Humanos y Derecho Internacional Humanitario.</p>
                                                                <p>Entre sus fortalezas se resalta su destreza para identificar y analizar fenómenos y situaciones que tienen la potencialidad de afectar la integridad institucional y el rol misional de las entidades públicas en las que ha laborado, orientando los análisis y las estrategias requeridas para comprender tales riesgos y los cursos de acción tendientes a eliminarlos.</p>
                                                                <p>Ha interactuado en escenarios nacionales e internacionales del sector justicia, seguridad y defensa y agricultura, en los cuales a través de su experiencia y aptitudes, ha logrado la integración de conocimiento especializado útil para el cumplimiento de sus funciones.</p>
                                                                <p>Su desafío en la Entidad está en dirigir su visión de servicio a la rigurosidad del trabajo, la calidad en los procedimientos y la contundencia en las decisiones, resaltando la importancia del trabajo en equipo al unísono por brindar a los ciudadanos un servicio digno y de calidad que represente positivamente al Estado y Distrito.</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class='panel-group' id='accordionSSC_DIATT' role='tablist ' aria-multiselectable='true'>

                                                    <!-- collapseContravenciones -->
                                                    <div class='panel panel-default'>
                                                        <div class='panel-heading ph-3' role='tab' id='headingContravenciones'>
                                                            <h4 class='panel-title'>
                                                                <a role='button' data-toggle='collapse' data-parent='#accordionSSC_DIATT' href='#collapseContravenciones' aria-expanded='true' aria-controls='collapseContravenciones'>
                                                                    4.2.1. Subdirección de Contravenciones.
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id='collapseContravenciones' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingContravenciones'>

                                                            <div class="panel-body">
                                                                <div class='panel-dependencia'>
                                                                    <p>Lidera y orienta los procesos contravencionales que se deriven del incumplimiento a las normas de tránsito, en concordancia con los lineamientos de orden nacional y distrital.</p>
                                                                </div>
                                                                <div class='panel-body-mapa'>


                                                                    <div class="row">

                                                                        <div class="col-xs-12 col-sm-4 text-center">
                                                                            <div class="img-perfil w-100">
                                                                                <img class="img-circle" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/23-09-2020/johana-catalina-latorre.jpg" alt="">
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-xs-12 col-sm-8 ">
                                                                            <div class="descripcion">
                                                                                <h1>Johana Catalina Latorre Alarcón</h1>
                                                                                <h4>Subdirectora de Contravenciones</h4>
                                                                                <div class="descripcion-xs">
                                                                                    <p>Es abogada egresada de la Universidad Pedagógica y Tecnológica de Colombia - UPTC, especialista en Derecho Urbano de la Universidad del Rosario, y Magíster en Derecho de la Universidad Sergio Arboleda, con más de seis años de experiencia en el sector público, en la sustanciación de procesos administrativos, sancionatorios, de sometimiento a control y de responsabilidad fiscal.</p>
                                                                                    <p>Su mayor desafío en los actuales momentos de emergencia sanitaria, es coordinar su equipo para prestar al ciudadano un servicio eficiente y oportuno dentro del regreso a la “Nueva Normalidad”.</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- /#fin Contravenciones -->

                                                    <!-- collapseSCITP -->
                                                    <div class='panel panel-default'>
                                                        <div class='panel-heading ph-3' role='tab' id='headingSCITP'>
                                                            <h4 class='panel-title'>
                                                                <a role='button' data-toggle='collapse' data-parent='#accordionSSC_DIATT' href='#collapseSCITP' aria-expanded='true' aria-controls='collapseSCITP'>
                                                                    4.2.2. Subdirección de Control e Investigaciones al Transporte Público.
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id='collapseSCITP' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingSCITP'>

                                                            <div class="panel-body">

                                                                <div class='panel-dependencia'>
                                                                    <div class="row">
                                                                        <div class="col-xs-12">
                                                                            <p>Dirige la inspección, vigilancia y control a los sujetos sancionables por el incumplimiento de las normas aplicables al transporte público, de conformidad con la normatividad vigente.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class='panel-body-mapa'>

                                                                    <div class="row">

                                                                        <div class="col-xs-12 col-sm-4 text-center">
                                                                            <div class="img-perfil w-100">
                                                                                <img class="img-circle" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-05-2020/carol-pinzon.jpg" alt="">
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-xs-12 col-sm-8 ">
                                                                            <div class="descripcion">
                                                                                <h1>Carol Angie Pinzón Ruiz</h1>
                                                                                <h4>Subdirectora de Control e Investigaciones al Transporte Público</h4>
                                                                                <div class="descripcion-xs">
                                                                                    <p>Abogada, egresada de la Universidad Católica de Colombia, especialista en Derecho Comercial y en Derecho de la Empresa de la Universidad del Rosario, Conciliadora en Derecho de la Universidad Gran Colombia.</p>
                                                                                    <p>Con experiencia profesional de 19 años, se desempeñó en el sector privado, 9 años como asesora en asuntos de seguros, tránsito y transporte y en el sector público, se ha desempeñado por más de 10 años en la Secretaría Distrital de Movilidad, como profesional en la Subdirección de Contravenciones y como Subdirectora en la Subdirección de Jurisdicción Coactiva hoy Dirección de Gestión de Cobro.</p>
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
            <!-- /#fin SSC -->

            <!-- collapseSGJ -->
            <div class='panel panel-default'>
                <div class='panel-heading ph-1' role='tab' id='headingSGJ'>
                    <h4 class='panel-title'>
                        <a role='button' data-toggle='collapse' data-parent='#accordionPerfiles' href='#collapseSGJ_a' aria-expanded='true' aria-controls='collapseSGJ_a'>
                            5. Subsecretaría de Gestión Jurídica.
                        </a>
                    </h4>
                </div>

                <div id='collapseSGJ_a' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingSGJ'>

                    <div class="panel-body">
                        <div class='panel-dependencia'>
                            <p>Establece los lineamientos institucionales y dirige los procesos administrativos de representación judicial y extrajudicial, gestión contractual y compras públicas, emisión de normas, conceptos y doctrina administrativa, y gestión del cobro de obligaciones a favor de la Secretaría Distrital de Movilidad, permitiendo la unidad de criterio y la seguridad jurídica de la entidad a través de la correcta aplicación del ordenamiento jurídico vigente.</p>
                        </div>

                        <div class='panel-body-mapa'>
                            <div class="map-org">
                                <!-- Image Map Generated by http://www.image-map.net/ -->
                                <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/08-10-2021/6_1.png" usemap="#image-map">

                                <map name="image-map">
                                    <area target="" alt="Despacho de la Secretaría" title="Despacho de la Secretaría" href="https://www.movilidadbogota.gov.co/web/entorno/#collapseOACCM" coords="546,72,383,10" shape="rect">
                                </map>
                            </div>
                        </div>

                        <div class='panel-body-mapa'>
                            <div class="row">
                                <div class="col-xs-12 col-sm-4 text-center">
                                    <div class="img-perfil w-100">
                                        <img class="img-circle" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-02-2022/pauloandresrincongaray.webp" alt="Paulo Andrés Rincón Garay" title="Paulo Andrés Rincón Garay">
                                    </div>
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

                            <div class='panel-group ' id='collapseSGJ' role='tablist ' aria-multiselectable='true'>

                                <!-- collapseDRJ -->
                                <div class='panel panel-default'>
                                    <div class='panel-heading ph-2' role='tab' id='headingDRJ'>
                                        <h4 class='panel-title'>
                                            <a role='button' data-toggle='collapse' data-parent='#collapseSGJ' href='#collapseDRJ' aria-expanded='true' aria-controls='collapseDRJ'>
                                                5.1. Dirección de Representación Judicial
                                            </a>
                                        </h4>
                                    </div>
                                    <div id='collapseDRJ' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingDRJ'>
                                        <div class="panel-body">
                                            <div class='panel-dependencia'>
                                                <p>Lidera y coordina la ejecución de las metodologías, procesos y procedimientos de Representación Judicial y Extrajudicial para salvaguardar los intereses de la Secretaría Distrital de Movilidad en todos los procesos prejudiciales, judiciales y administrativos en los que sea parte.</p>
                                            </div>
                                            <div class='panel-body-mapa'>
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-4 text-center">
                                                        <div class="img-perfil w-100">
                                                            <img class="img-circle" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/28-09-2020/maria-isabel-hernandez.png" alt="">
                                                        </div>
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
                                <!-- /#fin DRJ -->

                                <!-- collapseDNC -->
                                <div class='panel panel-default'>
                                    <div class='panel-heading ph-2' role='tab' id='headingDNC'>
                                        <h4 class='panel-title'>
                                            <a role='button' data-toggle='collapse' data-parent='#collapseSGJ' href='#collapseDNC' aria-expanded='true' aria-controls='collapseDNC'>
                                                5.2. Dirección de Normatividad y Conceptos
                                            </a>
                                        </h4>
                                    </div>
                                    <div id='collapseDNC' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingDNC'>

                                        <div class="panel-body">
                                            <div class='panel-dependencia'>
                                                <p>Lidera el análisis sobre la correcta aplicación del ordenamiento jurídico vigente, la emisión de normas y la elaboración revisión y aprobación de conceptos jurídicos y respuestas derivadas de la resolución de consultas que se eleven a la entidad.</p>
                                            </div>

                                            <div class='panel-body-mapa'>
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-4 text-center">
                                                        <div class="img-perfil w-100">
                                                            <img class="img-circle" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/16-03-2022/nataliacatalinacogollouyaban.webp" alt="Natalia Catalina Cogollo Uyaban" title="Natalia Catalina Cogollo Uyaban">
                                                        </div>
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
                                <!-- /#fin DNC -->

                                <!-- collapseContratacion -->
                                <div class='panel panel-default'>
                                    <div class='panel-heading ph-2' role='tab' id='headingContratacion'>
                                        <h4 class='panel-title'>
                                            <a role='button' data-toggle='collapse' data-parent='#collapseSGJ' href='#collapseContratacion' aria-expanded='true' aria-controls='collapseContratacion'>
                                                5.3. Dirección de Contratación
                                            </a>
                                        </h4>
                                    </div>
                                    <div id='collapseContratacion' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingContratacion'>
                                        <div class="panel-body">
                                            <div class='panel-dependencia'>
                                                <p>Lidera el proceso de gestión contractual de la Secretaría Distrital de Movilidad y sus respectivas etapas, permitiendo el desarrollo y ejecución de los planes, programas y proyectos a cargo de la entidad, garantizando la correcta aplicación del ordenamiento jurídico vigente, así como los procesos y procedimientos institucionales establecidos para tal fin.</p>
                                            </div>
                                            <div class='panel-body-mapa'>

                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-4 text-center">
                                                        <div class="img-perfil w-100">
                                                            <img class="img-circle" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-02-2022/johannapaolarestreposierra.webp" alt="Foto: Johanna Paola Restrepo Sierra" title="Foto: Johanna Paola Restrepo Sierra">
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-8 ">
                                                        <div class="descripcion">
                                                            <h1>Johanna Paola Restrepo Sierra</h1>
                                                            <h4>Directora de Contratación</h4>
                                                            <div class="descripcion-xs">
                                                             <p>Abogada titulada de la Facultad de Derecho de la Universidad Manuela Beltrán, especialista en Contratación Pública y especialista en Gerencia en Gobierno y Gestión Pública.</p>
                                                             <p>Ha trabajado en diferentes entidades del sector público a nivel nacional y distrital en materia de contratación, gestión pública y ejecución de proyectos, entre las que se encuentran: el Ministerio de Defensa Nacional, Secretaría de Educación y la Secretaría Distrital de Integración Social; así mismo, asesorando entidades como KOICA Agencia de Cooperación Internacional de Corea.</p>
                                                             <p>Entre su experiencia también se destaca su labor como docente en la Universidad Jorge Tadeo Lozano y en la Universidad Popular del Cesar; su paso por la Superintendencia de la Economía Solidaria en los roles de jefe de oficina, secretaria general y asesora de despacho. Recientemente, apoyó todos los temas jurídicos de la Subgerencia Técnica y de Servicios de Transmilenio S.A.</p>
                                                             <p>Entre el 2016 y el 2019 nos acompañó en la Secretaría Distrital de Movilidad como contratista y ahora, regresa a la Entidad con el compromiso de trabajar por Bogotá.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /#fin Contratacion -->

                                <!-- collapseDGC -->
                                <div class='panel panel-default'>
                                    <div class='panel-heading ph-2' role='tab' id='headingDGC'>
                                        <h4 class='panel-title'>
                                            <a role='button' data-toggle='collapse' data-parent='#collapseSGJ' href='#collapseDGC' aria-expanded='true' aria-controls='collapseDGC'>
                                                5.4. Dirección de Gestión de Cobro
                                            </a>
                                        </h4>
                                    </div>
                                    <div id='collapseDGC' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingDGC'>

                                        <div class="panel-body">
                                            <div class='panel-dependencia'>
                                                <p>Lidera y coordina la ejecución de las metodologías, procesos y procedimientos de cobro persuasivo y coactivo, así como la recuperación de cartera de la Secretaría Distrital de Movilidad.</p>
                                            </div>
                                            <div class='panel-body-mapa'>
                                                <!-- <div class="row">
                                                    <div class="col-xs-12 col-sm-4 text-center">
                                                        <div class="img-perfil w-100">
                                                            <img class="img-circle" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/03-07-2020/giovanny-garcia.jpg" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-8 ">
                                                        <div class="descripcion">
                                                            <h1>Giovanny Andrés García Rodríguez</h1>
                                                            <h4>Director de Gestión de Cobro</h4>
                                                            <div class="descripcion-xs">
                                                                <p>Abogado de la Universidad Externado de Colombia, y especialista en Derecho Procesal Penal de la misma Universidad.</p>
                                                                <p>Cuenta con 17 años de experiencia profesional en los temas de litigio. Ha trabajado en la Rama Judicial y en diferentes entes estatales como el Instituto Nacional de Vigilancia de Medicamentos y Alimentos -INVIMA-, el Instituto Colombiano para el Fomento de la Educación Superior -ICFES-, la Autoridad Nacional de Televisión -ANTV-, y la Secretaría Distrital de Movilidad, así como el litigio para empresas privadas en temas de procesos administrativos sancionatorios.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> -->
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-4 text-center">
                                                        <div class="img-perfil w-100">
                                                            <img class="img-circle" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-02-2022/hernancortes.webp" alt="Hernan Sebastian Cortés Osorio" title="Hernan Sebastian Cortés Osorio">
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-8 ">
                                                        <div class="descripcion">
                                                            <h1>Hernan Sebastian Cortés Osorio</h1>
                                                            <h4>Director de Gestión de Cobro</h4>
                                                            <div class="descripcion-xs">
                                                                <p>Abogado de la Universidad la Gran Colombia, conciliador extrajudicial en derecho, con estudios específicos y afianzados en contratación internacional, además, especialista en Instituciones Jurídico Procesales de la Universidad Nacional de Colombia. Experiencia particular en procesos de cobro jurídico civil y cobro coactivo administrativo, en análisis probatorio, en procesos disciplinarios, emisión de actos administrativos decisorios y conceptos jurídicos dentro de las ramas civil y administrativa.</p>
                                                                <p>Ingresó en el 2016 como contratista a la Dirección de Gestión de Cobro (antes Subdirección de Gestión Coactiva) de la Secretaría de Movilidad y luego pasó a planta provisional donde ha ido escalando varias posiciones gracias al liderazgo, el trabajo en equipo y la responsabilidad.</p>
                                                                <p>Con conocimientos avanzados en el idioma inglés y los sistemas informáticos, se propone desarrollar precisas e innovadoras estrategias para el mejoramiento y óptimo funcionamiento de la Dirección a su cargo.</p>
                                                                <p>También ha laborado como abogado en la Junta Central de Contadores, en la Universidad Nacional de Colombia y Sistemcobro S.A.S.</p>
                                                                <p></p>
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
            <!-- /#fin SGJ -->

            <!-- collapseGestionCorporativa -->
            <div class='panel panel-default'>
                <div class='panel-heading ph-1' role='tab' id='headingGestionCorporativa'>
                    <h4 class='panel-title'>
                        <a role='button' data-toggle='collapse' data-parent='#accordionPerfiles' href='#collapseGestionCorporativa' aria-expanded='true' aria-controls='collapseGestionCorporativa'>
                            6. Subsecretaría de Gestión Corporativa.
                        </a>
                    </h4>
                </div>
                <div id='collapseGestionCorporativa' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingGestionCorporativa'>

                    <div class="panel-body">

                        <div class='panel-dependencia'>
                            <p>Dirige la formulación de políticas, planes programas y estrategias en materia administrativa, financiera y del Talento Humano.</p>
                        </div>

                        <div class='panel-body-mapa'>
                            <div class="map-org">
                                <!-- Image Map Generated by http://www.image-map.net/ -->
                                <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/08-10-2021/7_1.png" usemap="#image-map">

                                <map name="image-map">
                                    <area target="" alt="Despacho de la Secretaría" title="Despacho de la Secretaría" href="https://www.movilidadbogota.gov.co/web/entorno/#collapseOACCM" coords="546,72,383,10" shape="rect">
                                </map>
                            </div>
                        </div>

                        <div class='panel-body-mapa'>
                            <div class="row">

                                <div class="col-xs-12 col-sm-4 text-center">
                                    <div class="img-perfil w-100">
                                        <img class="img-circle" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-04-2020/paula-tatiana-arenas.jpg" alt="">
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-8 ">
                                    <div class="descripcion">
                                        <h1>Paula Tatiana Arenas González</h1>
                                        <h4>Subsecretaría de Gestión Corporativa</h4>
                                        <div class="descripcion-xs">
                                            <p>Es abogada de la Universidad Católica y Profesional en Relaciones Internacionales de la Universidad Jorge Tadeo Lozano, donde también cursó la especialización en Gestión Pública. Además, es especialista en Derecho Administrativo de la Universidad Santo Tomás, y tiene una maestría en Derecho en la Universidad Sergio Arboleda.</p>
                                            <p>Su más reciente cargo fue como Subdirectora de Recursos Humanos del IDU, donde estuvo por espacio de tres años. Durante siete años estuvo en la Comisión Nacional del Servicio Civil, donde fue Gerente de Provisión del Empleo, y también se desempeñó como asesora de despacho. A su experiencia laboral se le suma empleos en la Fiscalía General de la Nación, y en una caja de compensación familiar.</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="panel-body-mapa">

                            <div class='panel-group ' id='collapseSGC' role='tablist ' aria-multiselectable='true'>

                                <!-- collapseDireccionAdministrativaFinanciera -->
                                <div class='panel panel-default'>
                                    <div class='panel-heading ph-2' role='tab' id='headingDAF'>
                                        <h4 class='panel-title'>
                                            <a role='button' data-toggle='collapse' data-parent='#collapseSGC' href='#collapseDireccionAdministrativaFinanciera' aria-expanded='true' aria-controls='collapseDireccionAdministrativaFinanciera'>
                                                6.1 Dirección Administrativa y Financiera
                                            </a>
                                        </h4>
                                    </div>
                                    <div id='collapseDireccionAdministrativaFinanciera' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingDAF'>

                                        <div class="panel-body">
                                            <div class='panel-dependencia'>
                                                <p>Dirige la formulación, ejecución y control de las políticas, planes, programas y proyectos en materia administrativa y financiera de la Secretaría Distrital de Movilidad, de acuerdo con el Plan Estratégico Institucional y la normatividad vigente.</p>
                                            </div>

                                            <div class='panel-body-mapa'>

                                                <div class="row">

                                                    <div class="col-xs-12 col-sm-4 text-center">
                                                        <div class="img-perfil w-100">
                                                            <img class="img-circle" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/12-04-2022/sandramilenavargasjurado.webp" alt="Sandra Milena Vargas Jurado" title="Sandra Milena Vargas Jurado">
                                                        </div>
                                                    </div>

                                                    <div class="col-xs-12 col-sm-8 ">
                                                        <div class="descripcion">
                                                            <h1>Sandra Milena Vargas Jurado</h1>
                                                            <h4>Directora Administrativa y Financiera (E)</h4>
                                                            <div class="descripcion-xs">
                                                                <p>Abogada de la Universidad Autónoma de Colombia, especialista en Derecho Administrativo y actualmente en proceso de grado de la maestría en Derecho Administrativo de la Universidad Santo Tomás. Certificada como auditora interna del Sistema de Gestión EFR – (Empresa Familiarmente Responsable) de la Fundación Másfamilia de España, con experiencia laboral tanto en el sector público como en el privado.</p>
                                                                <p>Trabajó en la Secretaría Distrital de Movilidad los años 2020 y 2021, vinculada a la Dirección Administrativa y Financiera y apoyando en general varios procesos de la Subsecretaría de Gestión Corporativa y sus dependencias adscritas. Regresa con el reto de continuar consolidando equipo, dispuesta a sacar los logros y objetivos adelante. También ha laborado en entidades distritales como el IDU, en donde estuvo por más de dos años en la Dirección Técnica Administrativa y Financiera, esta experiencia le permitió desempeñarse en actividades relacionadas con los procesos administrativos como: gestión documental, adquisición de bienes y servicios, sistema de gestión de la calidad y formulación de políticas estratégicas.</p>
                                                                <p>De igual forma, dentro de su experiencia laboral se encuentra su paso por la Comisión Nacional del Servicio Civil, donde ejerció el cargo de Asesora de Despacho y su desempeño como Directora Comercial de Servicios de Información y Valor Agregado SAS - SINVA, entre otros. En el desarrollo de su profesión como abogada posee mayor énfasis en asuntos contractuales y en general en los diferentes campos del derecho administrativo.</p>

                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class='panel-group ' id='collapseDAF' role='tablist ' aria-multiselectable='true'>

                                                    <!-- collapseFinanciera -->
                                                    <div class='panel panel-default'>
                                                        <div class='panel-heading ph-3' role='tab' id='headingFinanciera'>
                                                            <h4 class='panel-title'>
                                                                <a role='button' data-toggle='collapse' data-parent='#collapseDAF' href='#collapseFinanciera' aria-expanded='true' aria-controls='collapseFinanciera'>
                                                                    6.1.1. Subdirección Financiera.
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id='collapseFinanciera' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingFinanciera'>
                                                            <div class='panel-body'>

                                                                <div class='panel-dependencia'>
                                                                    <p>Planea, organiza, dirige, hace seguimiento y controla las operaciones financieras, contables y presupuestales de la Secretaría Distrital de Movilidad, a través del seguimiento permanente, de conformidad con la normatividad vigente y lineamientos institucionales.</p>
                                                                </div>

                                                                <div class='panel-body-mapa'>
                                                                    <div class="row">

                                                                        <div class="col-xs-12 col-sm-4 text-center">
                                                                            <div class="img-perfil w-100">
                                                                                <img class="img-circle" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-05-2020/vladimiro-estrada.jpg" alt="">
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-xs-12 col-sm-8 ">
                                                                            <div class="descripcion">
                                                                                <h1>Vladimiro Estrada Moncayo</h1>
                                                                                <h4>Subdirector Financiero</h4>
                                                                                <div class="descripcion-xs">
                                                                                    <p>Es administrador público de la Escuela Superior de Administración Pública -ESAP-, con formación y estudios especializados en alto gobierno del sector público, planeación estratégica, preparación, evaluación, formulación y seguimiento de proyectos. Experiencia y conocimiento en sistemas de gestión de pagos, indicadores de gestión, finanzas distritales y presupuesto, gestión corporativa, ordenación del gasto, contratación, gestión financiera, análisis y gestión de riesgos.</p>
                                                                                    <p>Su experiencia profesional es de treinta años, en entidades como FOSYGA en el Ministerio de Salud, Hospital Simón Bolívar, Secretaría Distrital de Salud, Secretaría Distrital de Hacienda, Artesanías de Colombia e Instituto de Desarrollo Urbano entre otros.</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>

                                                    </div>
                                                    <!-- /#fin Financiera -->

                                                    <!-- collapseAdministrativa -->
                                                    <div class='panel panel-default'>
                                                        <div class='panel-heading ph-3' role='tab' id='headingAdministrativa'>
                                                            <h4 class='panel-title'>
                                                                <a role='button' data-toggle='collapse' data-parent='#collapseDAF' href='#collapseAdministrativa' aria-expanded='true' aria-controls='collapseAdministrativa'>
                                                                    6.1.2. Subdirección Administrativa.
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id='collapseAdministrativa' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingAdministrativa'>
                                                            <div class="panel-body">
                                                                <div class='panel-dependencia'>
                                                                    <p>Dirige la ejecución y hace seguimiento de los procesos administrativos de la entidad conforme a las normas, lineamientos y reglamentos establecidos, con el propósito de asegurar la eficacia y calidad de los procesos y actividades relacionados con la materia.</p>
                                                                </div>
                                                                <div class='panel-body-mapa'>

                                                                    <div class="row">

                                                                        <div class="col-xs-12 col-sm-4 text-center">
                                                                            <div class="img-perfil w-100">
                                                                                <img class="img-circle" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/01-03-2022/neyfi_rubiela_martinez_guauta.webp" alt="Foto de Neyfi Rubiela Martinez">
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-xs-12 col-sm-8 ">
                                                                            <div class="descripcion">
                                                                                <h1>Neyfi Rubiela Martínez Guauta</h1>
                                                                                <h4>Subdirectora Administrativa (e)</h4>
                                                                                <div class="descripcion-xs">
                                                                                   <p>Economista egresada de la Universidad Católica de Colombia, especialista en Gerencia Financiera Sistematizada de la Universidad Libre.</p>
                                                                                   <p>Ha trabajado en organizaciones de carácter público y privado. Inicialmente laboró en entidades financieras entre las que se destacan: Credisocial en Funza, donde se desempeñó como Gerente de Oficina, y Cooperativa Avancemos cumpliendo el rol de Directora de Oficina en Trinidad Galán. Posteriormente, trabajó en la Secretaría de Hacienda de Bojacá y en la Secretaría Distrital de Gobierno, en esta última permaneció por diez (10) años manejando todo el proceso de bienes.</p>
                                                                                   <p>Ingresó en el 2009 como profesional especializada a la Secretaría Distrital de Movilidad y durante estos doce (12) años en la entidad ha podido aprender de diferentes temas y áreas. De igual forma, gracias a las oportunidades de formación que le ha ofrecido la SDM es auditora ISO 9001:2015.</p>
                                                                                   <p>Desde su gestión como subdirectora espera contribuir en todos los proyectos que desde la Subsecretaría de Gestión Corporativa se lideran y que brindan un apoyo transversal a todas las áreas de la entidad.</p>
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
                                <!-- /#fin DAF -->

                                <!-- collapseDTH -->
                                <div class='panel panel-default'>
                                    <div class='panel-heading ph-2' role='tab' id='headingDTH'>
                                        <h4 class='panel-title'>
                                            <a role='button' data-toggle='collapse' data-parent='#collapseSGC' href='#collapseDTH' aria-expanded='true' aria-controls='collapseDTH'>
                                                6.2. Dirección de Talento Humano
                                            </a>
                                        </h4>
                                    </div>
                                    <div id='collapseDTH' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingDTH'>

                                        <div class="panel-body">
                                            <div class='panel-dependencia'>
                                                <p>Formula y dirige la formulación, ejecución y evaluación de las políticas, programas, planes y proyectos referentes al talento humano en la entidad, buscando el desarrollo integral del personal y cumpliendo con las disposiciones legales vigentes y objetivos institucionales de la Secretaría Distrital Movilidad.</p>
                                            </div>
                                            <div class='panel-body-mapa'>

                                            <div class="row">
                                                    <div class="col-xs-12 col-sm-4 text-center">
                                                        <div class="img-perfil w-100">
                                                            <img class="img-circle" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-02-2022/anamariacorredor.webp" alt="Foto: Ana María Corredor" title="Foto: Ana María Corredor">
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-8 ">
                                                        <div class="descripcion">
                                                            <h1>Ana María Corredor Yunis</h1>
                                                            <h4>Directora de Talento Humano</h4>
                                                            <div class="descripcion-xs">
                                                                <p>Abogada egresada de la Universidad Santo Tomás, especialista en Derecho Administrativo del Colegio Mayor de Nuestra Señora del Rosario.</p>
                                                                <p>Su experiencia profesional inició realizando su judicatura en la Corte Constitucional, luego trabajó como asesora en materia de contratación para el Instituto de Casas Fiscales del Ejército. Durante algún tiempo se dedicó al litigio y ejerció un rol de profesional de apoyo en la Comisión Nacional de Televisión, donde llevaba temas de asuntos disciplinarios y asesoraba a la directora de la oficina.</p>
                                                                <p>Ingresó en el año 2007 como profesional universitaria de la oficina de Control Interno a la Secretaría Distrital de Movilidad, por un concurso de la Comisión Nacional del Servicio Civil, luego ascendió a profesional especializado en el área de Control Disciplinario; se ha desempeñado en diferentes dependencias y roles dentro de la SDM, entre los cuales se destacan: Dirección de Atención al Ciudadano y Dirección de Contratación.</p>
                                                                <p>Sus quince (15) años de labor en la entidad, donde ha contribuido en temas misionales y de apoyo, le dan grandes herramientas para asumir la gestión del talento humano como el reto más significado, pues Ana María afirma que el personal de la secretaría es alma de la entidad y su propósito es que se sientan en familia, a través de procesos oportunos, eficientes y humanos que deben ser liderados por este equipo.</p>
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



<style>
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

<style>
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
            font-size:  16px;
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