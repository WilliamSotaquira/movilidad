@extends('welcome')
@section('title','semanaSeguidadVial')
@section('contenido')

<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fuente Montserrat -----  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<link rel='preconnect' href='https://fonts.googleapis.com'>
<link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
<link href='https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap' rel='stylesheet'>
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin Fuente Montserrat -  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->

<!-- Set semanaSeguidadVial -->
<div class="set-wrapper semanaSeguidadVial">

    <div class="box-modals">

        <!-- Modal Claudia López-->
        <div class="modal fade" id="modal_ClaudiaLopez" tabindex="-1" role="dialog" aria-labelledby="modal_ClaudiaLopez" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="foto">
                            <img class="cover" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2023/claudia_lopez.png" alt="Foto: Claudia López" title="Foto: Claudia López">
                        </div>
                        <div class="texto">
                            <h3>Claudia López</h3>
                            <h4>Alcaldesa de Bogotá</h4>
                            <hr>
                            <p>Estudió Finanzas, Gobierno y Relaciones Internacionales en la Universidad Externado de Colombia. Cuenta con un doctorado en Ciencias Políticas de la Universidad NorthWestern de los Estados Unidos; una maestría en Administración Pública y Política Urbana de la Universidad de Columbia, Nueva York; y un diplomado en Gestión de Suelo Urbano de la Universidad Erasmo de Róterdam.</p>
                            <p>Fue Senadora por el Partido Alianza Verde entre 2014-2018. Desde allí promovió importantes leyes como la ‘Ley Probici'. El 27 de octubre de 2019, ganó las elecciones para la Alcaldía de Bogotá, esto la convirtió en la primera mujer en ocupar este cargo en la historia de la capital de Colombia, iniciando su mandato el 1 de enero de 2020.</p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Deyanira Ávila -->
        <div class="modal fade" id="modal_DeyaniraAvila" tabindex="-1" role="dialog" aria-labelledby="modal_DeyaniraAvila" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="foto">
                            <img class="cover" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2023/deyanira_avila_moreno.png" alt="Foto: Deyanira Ávila " title="Foto: Deyanira Ávila ">
                        </div>
                        <div class="texto">
                            <h3>Deyanira Ávila </h3>
                            <h4>Secretaria de Movilidad de Bogotá</h4>
                            <hr>
                            <p>Ingeniera Catastral y Geodesta de la Universidad Distrital Francisco José de Caldas. Especialista en Gestión Ambiental Urbana de la Universidad Piloto de Colombia. Se ha desempeñado como auditora en Seguridad Vial del Instituto de Recursos Mundiales (WRI). Cuenta con más de 10 años de experiencia en el sector público. Ha trabajado en entidades como el Instituto de Desarrollo Urbano (IDU), Catastro Distrital y Metro de Bogotá. Se desempeñó como la primera subdirectora de la Bicicleta y el Peatón en Bogotá, desde donde lideró importantes iniciativas en movilidad sostenible. Actualmente se desempeña como Secretaria de Movilidad de la ciudad.</p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Mary Bottagisio-->
        <div class="modal fade" id="modal_MaryBottagisio" tabindex="-1" role="dialog" aria-labelledby="modal_MaryBottagisio" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="foto">
                            <img class="cover" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2023/mary_botagissio.png" alt="Foto: Mary Bottagisio" title="Foto: Mary Bottagisio">
                        </div>
                        <div class="texto">
                            <h3>Mary Bottagisio</h3>
                            <h4>Directora Ejecutiva - Liga Contra la Violencia Vial</h4>
                            <hr>
                            <p>Ingeniera Industrial con estudios en Políticas Públicas de la Universidad de Los Andes. Activista y líder de seguridad vial en Colombia y Latinoamérica por más de 15 años. Es fundadora de la Liga Contra la Violencia Vial, creada en septiembre de 2007, y desde entonces, ha contribuido a la construcción y puesta en marcha de planes, programas y proyectos de desarrollo, además de la promoción de iniciativas legislativas para el fortalecimiento de la seguridad vial en ámbitos multisectoriales. Es conferencista internacional ante la Comisión Económica de las Naciones Unidas para Europa (UNECE), la Comisión Económica de las Naciones Unidas para América Latina y el Caribe (CEPAL) y el Banco Interamericano de Desarrollo (BID). Cofundadora de la Federación Iberoamericana de Asociaciones de Víctimas Contra la Violencia Vial y de la Global Alliance of NGOs for Road Safety.</p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Jonás Romo-->
        <div class="modal fade" id="modal_JonasRomo" tabindex="-1" role="dialog" aria-labelledby="modal_JonasRomo" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="foto">
                            <img class="cover" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2023/jonas_romo.png" alt="Foto: Jonás Romo" title="Foto: Jonás Romo">
                        </div>
                        <div class="texto">
                            <h3>Jonás Romo</h3>
                            <h4>Director de Programas de Salud Pública para LATAM - Vital Strategies</h4>
                            <hr>
                            <p>Especialista en la elaboración e implementación de políticas públicas en salud. Con una experiencia internacional de más de 15 años, ha trabajado en varios países y ciudades en temas como: vigilancia sanitaria, control del tabaco, tuberculosis, monitoreo de enfermedades no transmisibles, seguridad vial, obesidad y alimentación. Actualmente coordina un consorcio de organizaciones internacionales dentro de la Iniciativa Bloomberg para la Seguridad Vial Mundial (BIGRS) en 15 países y 30 ciudades del mundo.</p>
                            <p>con una maestría en Estudios del Desarrollo de la Universidad de la Sorbona, Paris; un título de Licenciatura en Ciencia Política y Relaciones Internacionales del Instituto Tecnológico Autónomo de México, y un entrenamiento profesional en Ciudades Saludables en Columbia University Mailman School of Public Health, Nueva York.</p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Gina Tambini-->
        <div class="modal fade" id="modal_GinaTambini" tabindex="-1" role="dialog" aria-labelledby="modal_GinaTambini" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="foto">
                            <img class="cover" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2023/gina_tambini.png" alt="Foto: Gina Tambini" title="Foto: Gina Tambini">
                        </div>
                        <div class="texto">
                            <h3>Gina Tambini</h3>
                            <h4>"Representante para Colombia - Organización Mundial de la Salud (OPS/OMS)</h4>
                            <hr>
                            <p>Tiene una experiencia amplia en salud pública, es experta en el área de salud familiar y comunitaria, especialmente por su trabajo en la reducción significativa de las tasas de mortalidad en niños y madres en la Región de las Américas. Se destaca por su experiencia en el tema de vacunas e inmunización, siendo integrante del equipo responsable de la eliminación de enfermedades prevenibles por vacunación. Obtuvo su título de médico en la Universidad Peruana Cayetano Heredia, y su Maestría en Salud Pública de la Escuela de Higiene y Salud Pública de la Universidad Johns Hopkins, en Baltimore, Estados Unidos. Fue Becaria postdoctoral de esta misma universidad en enfermedades infecciosas pediátricas en las reservas de los indígenas Apache y Navajo en Arizona durante 1987-1988, participando en estudios clínicos de vacunas y terapia de rehidratación oral.</p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Dilson Romero-->
        <div class="modal fade" id="modal_DilsonRomero" tabindex="-1" role="dialog" aria-labelledby="modal_DilsonRomero" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="foto">
                            <img class="cover" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2023/dilson_romero.png" alt="Foto: Dilson Romero" title="Foto: Dilson Romero">
                        </div>
                        <div class="texto">
                            <h3>Dilson Romero</h3>
                            <h4>Jefe Oficina de Seguridad Vial - SDM</h4>
                            <hr>
                            <p>Ingeniero en Transporte y Vías de la Universidad Pedagógica y Tecnológica de Colombia, especialista en Transporte de la Universidad Nacional de Colombia, Magíster en Ingeniería con énfasis en Transporte de la Universidad de los Andes; Auditor certificado en Seguridad Vial de la TMS Consultancy de Inglaterra. Realizó el 'Global Road Safety Leadership Course' de la Unidad Internacional de Investigación de Lesiones de la Universidad Johns Hopkins en Baltimore, Estados Unidos. </p>
                            <p>Cuenta con experiencia en la coordinación, diseño y planeación de proyectos de seguridad vial, la gestión de obras de infraestructura vial, la coordinación de proyectos de tránsito y transporte masivo en el sector público, seguimiento presupuestal e interventoría. En 2015, lideró la postulación de Bogotá a la Iniciativa Bloomberg para la Seguridad Vial Mundial (BIGRS), gracias a la cual la ciudad viene recibiendo asistencia técnica en seguridad vial por varios organismos internacionales. Actualmente es el Jefe de la Oficina de Seguridad Vial de la Secretaría de Movilidad de Bogotá, con el reto de continuar articulando acciones enfocadas en la disminución la siniestralidad en las vías de la ciudad.</p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Orlando Santiago Cely-->
        <div class="modal fade" id="modal_OrlandoCely" tabindex="-1" role="dialog" aria-labelledby="modal_OrlandoCely" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="foto">
                            <img class="cover" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2023/orlando_santiago.png" alt="Foto: Orlando Santiago Cely" title="Foto: Orlando Santiago Cely">
                        </div>
                        <div class="texto">
                            <h3>Orlando Santiago Cely</h3>
                            <h4>Gerente General - Transmilenio S.A. </h4>
                            <hr>
                            <p>Egresado de la Universidad Nacional de Colombia. Cuenta con una Maestría en Ingeniería de Transporte de la misma universidad, así como con una especialización en Dirección y Gestión de Proyectos de la Universidad Sergio Arboleda. Estudió un Diplomado en Gerencia de Proyectos y un curso de entrenamiento en Trenes Urbanos con la Agencia de Cooperación Japonesa (JICA). Cuenta con experiencia en la planeación y gerenciamiento de proyectos de infraestructura de transporte, gestión del financiamiento, administración de los recursos y seguimiento técnico de los proyectos, desarrollo de estudios de tránsito y transporte y evaluación económica de proyectos. Trabajó como director técnico en la Empresa Férrea Regional, entidad adscrita a la Gobernación de Cundinamarca encargada de ser el ente gestor de los proyectos Regiotram de Occidente y de la Extensión de la Troncal del Sistema TransMilenio en Soacha. También se desempeñó como Asesor en la Dirección Técnica de Infraestructura y Vehículos para la Agencia Nacional de Seguridad Vial (ANSV).</p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Gema Granados-->
        <div class="modal fade" id="modal_GemaGranados" tabindex="-1" role="dialog" aria-labelledby="modal_GemaGranados" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="foto">
                            <img class="cover" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2023/gema_granados.png" alt="Foto: Gema Granados" title="Foto: Gema Granados">
                        </div>
                        <div class="texto">
                            <h3>Gema Granados</h3>
                            <h4>Representante para Colombia - GHAI </h4>
                            <hr>
                            <p>Comunicadora social con maestría en política pública de la Universidad Javeriana. Cuenta con más de 18 años de experiencia impulsando procesos de incidencia en política pública y comunicación para la salud, los derechos humanos y la equidad de género. Desde hace 4 años coordina el programa de seguridad vial del Global Health Advocacy Incubator (GHAI) y el Global Road Safety Partnership (GRSP) en Colombia, organizaciones aliadas de la Iniciativa Bloomberg para la Seguridad Vial Mundial (BIGRS). </p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Modal Ariel Fernando Ávila Martínez-->
        <div class="modal fade" id="modal_ArielAvila" tabindex="-1" role="dialog" aria-labelledby="modal_ArielAvila" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="foto">
                            <img class="cover" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2023/ariel_avila.png" alt="Foto: Ariel Fernando Ávila Martínez" title="Foto: Ariel Fernando Ávila Martínez">
                        </div>
                        <div class="texto">
                            <h3>Ariel Fernando Ávila Martínez</h3>
                            <h4>Senador de la República</h4>
                            <hr>
                            <p>Senador de la República por la Coalición Alianza Verde y Centro Esperanza. Politólogo y Magister en Sociología de la Universidad Nacional de Colombia. ExSubdirector de la Fundación Paz y Reconciliación.</p>
                            <p>Fue profesor de la Universidad Nacional de Colombia y de la Universidad Externado de Colombia. Se ha desempeñado como columnista en el diario El Espectador, Revista Semana y El País de España. Es autor de los libros: ""Detrás de la Guerra en Colombia"" (2019), ""¿Por qué los matan?"" (2020), ""El mapa criminal en Colombia"" (2022) de Editorial Planeta.</p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Alejandra Leal-->
        <div class="modal fade" id="modal_AlejandraLeal" tabindex="-1" role="dialog" aria-labelledby="modal_AlejandraLeal" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="foto">
                            <img class="cover" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2023/alejandra_leal.png" alt="Foto: Alejandra Leal" title="Foto: Alejandra Leal">
                        </div>
                        <div class="texto">
                            <h3>Alejandra Leal</h3>
                            <h4>Coordinadora de la Coalición Movilidad Segura de México</h4>
                            <hr>
                            <p>Especialista en movilidad, seguridad vial y enlace con sociedad civil y gobierno. Es economista por el CIDE y cuenta con una Maestría en Políticas Públicas por la Hertie School of Governance de Berlín. Ha asesorado a gobiernos locales de México en mejoras al diseño vial para contar con entornos peatonales seguros, la implementación de infraestructura ciclista con criterios de acuerdo al Manual Ciclociudades de ITDP y la implementación de programas de bicicleta pública. También ha asesorado en la redacción de los reglamentos de tránsito de diversas ciudades y su aplicación, así como en programas de cultura para la movilidad.</p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Mariantonia Tabares Pulgarín-->
        <div class="modal fade" id="modal_MariaTabares" tabindex="-1" role="dialog" aria-labelledby="modal_MariaTabares" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="foto">
                            <img class="cover" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2023/mariantonia_tabares.png" alt="Foto: Mariantonia Tabares Pulgarín" title="Foto: Mariantonia Tabares Pulgarín">
                        </div>
                        <div class="texto">
                            <h3>Mariantonia Tabares Pulgarín</h3>
                            <h4>Directora Agencia Nacional de Seguridad Vial </h4>
                            <hr>
                            <p>Abogada de la Universidad de Medellín; politóloga de la Universidad de Antioquia; especialista en Derecho Administrativo de la Universidad de Medellín y especialista en Contratación Estatal de la Universidad Externado de Colombia. Actualmente cursa una maestría en Contratación Pública y su Gestión en la Universidad del Rosario y un máster internacional en Liderazgo en la EADA Business School. Su experiencia profesional la ha desarrollado desde hace 13 años en el sector público y privado, como asesora en contratación, asesora jurídica y contratista en entidades públicas del orden nacional y territorial.</p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Mónica Pachón-->
        <div class="modal fade" id="modal_MonicaPachon" tabindex="-1" role="dialog" aria-labelledby="modal_MonicaPachon" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="foto">
                            <img class="cover" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2023/monica_pachon.png" alt="Foto: Mónica Pachón" title="Foto: Mónica Pachón">
                        </div>
                        <div class="texto">
                            <h3>Mónica Pachón</h3>
                            <h4>Profesora Asociada - Universidad de los Andes</h4>
                            <hr>
                            <p>Politóloga con Magister en Ciencia Política de la Universidad de los Andes, M.Phil en Estudios Latinoamericanos y Doctorado en Ciencia Política de la Universidad de California, San Diego. Actualmente es profesora asociada de la Facultad de Arquitectura y Diseño de la Universidad de los Andes. Su investigación se centra en las relaciones ejecutivo-legislativas, la organización y evolución institucional del Congreso Colombiano, temas de esfuerzo fiscal y descentralización, diseño electoral y comportamiento político. Trabajó como directora del Proyecto Congreso Visible desde agosto de 2009 hasta agosto de 2013 y profesora asociada de la Universidad de los Andes hasta diciembre del 2015. Fue Decana y profesora titular de la Facultad de Ciencia Política, Gobierno y Relaciones Internacionales de la Universidad del Rosario desde enero de 2016 hasta diciembre de 2018, y Tinker Visiting Professor de la Universidad de Columbia hasta diciembre de 2018.</p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Edgar Zamora-->
        <div class="modal fade" id="modal_EdgarZamora" tabindex="-1" role="dialog" aria-labelledby="modal_EdgarZamora" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="foto">
                            <img class="cover" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2023/edgar_zamora.png" alt="Foto: Edgar Zamora" title="Foto: Edgar Zamora">
                        </div>
                        <div class="texto">
                            <h3>Edgar Zamora</h3>
                            <h4> Líder Regional para Viajes Más Seguros - iRAP</h4>
                            <hr>
                            <p>Como Líder Regional para Viajes Más Seguros de iRAP para las Américas, Edgar centra su trabajo en el desarrollo de alianzas estratégicas y proyectos que contribuyan a reducir las muertes y lesiones por siniestros de tránsito en la región. Trabajó 12 años para el Banco Interamericano de Desarrollo, 9 de ellos como Especialista en Transporte, liderando proyectos de infraestructura en diferentes países de América Latina y el Caribe. Además, dirigió numerosos proyectos de movilidad segura y publicaciones sobre temas de seguridad vial. Durante su trayectoria, ha trabajado en múltiples países de América Latina y el Caribe, incluyendo América Central, Haití, Guyana y Surinam.</p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Lina Fuentes-->
        <div class="modal fade" id="modal_LinaFuentes" tabindex="-1" role="dialog" aria-labelledby="modal_LinaFuentes" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="foto">
                            <img class="cover" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2023/lina_fuentes.png" alt="Foto: Lina Fuentes" title="Foto: Lina Fuentes">
                        </div>
                        <div class="texto">
                            <h3>Lina Fuentes</h3>
                            <h4>Portavoz de Fundación MAPFRE en Colombia</h4>
                            <hr>
                            <p>Psicóloga especialista en Gerencia de Recursos Humanos. Con amplios conocimientos y experiencia en el desarrollo de procesos y proyectos estratégicos de talento humano. Actualmente es Vicepresidente de Recursos Humanos, Personas y Organización del grupo MAPFRE en Colombia.</p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Oscar Mauricio Velasquez Bobadilla-->
        <div class="modal fade" id="modal_OscarVelasquez" tabindex="-1" role="dialog" aria-labelledby="modal_OscarVelasquez" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="foto">
                            <img class="cover" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2023/oscar_mauricio_velasquez_bobadilla.png" alt="Foto: Oscar Mauricio Velasquez Bobadilla" title="Foto: Oscar Mauricio Velasquez Bobadilla">
                        </div>
                        <div class="texto">
                            <h3>Oscar Mauricio Velasquez Bobadilla</h3>
                            <h4>Subdirector de la Bicicleta y el Peatón</h4>
                            <hr>
                            <p>Es Ingeniero Civil, Especialista en Ingeniería de Pavimentos, y con experiencia de más de 15 años en el sector público en el campo de la construcción, conservación y gestión de infraestructura urbana y rural del transporte.</p>
                            <p>En el Instituto de Desarrollo Urbano – IDU-, entidad a la que ingresó en el año 2005, tuvo a cargo la planeación, estructuración, ejecución y seguimiento de procesos y proyectos estratégicos para la gestión y desarrollo de la infraestructura de la ciudad.</p>
                            <p>También es docente desde hace ocho años de la Especialización en Ingeniería de Pavimentos, de la Universidad Católica, su alma Mater.</p>
                            <p>Ha sido coautor de muchas publicaciones de carácter nacional e internacional en temas como construcción para proyectos de infraestructura vial y de espacio público.</p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Iván de la Lanza-->
        <div class="modal fade" id="modal_IvanLanza" tabindex="-1" role="dialog" aria-labelledby="modal_IvanLanza" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="foto">
                            <img class="cover" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2023/ivan_de_la_lanza.png" alt="Foto: Iván de la Lanza" title="Foto: Iván de la Lanza">
                        </div>
                        <div class="texto">
                            <h3>Iván de la Lanza</h3>
                            <h4>Gerente Senior - GDCI</h4>
                            <hr>
                            <p>Apoya a ciudades en el liderazgo y dirección al trabajo nacional dentro de las Américas, como parte del programa de la Iniciativa Bloomberg para la Seguridad Vial Mundial (BIGRS), además de ofrecer orientación y supervisión de otros programas de GDCI.</p>
                            <p>Equipos multidisciplinarios, ha colaborado y desarrollado diversos proyectos de movilidad desde áreas gubernamentales y no gubernamentales durante los últimos 15 años, ofreciendo soporte técnico, gestión y desarrollo de capacidades locales en las ciudades. Fue Gerente de Movilidad Activa en el Programa de Ciudades de WRI México, y previamente fue Director de Diseño Cultural e Infraestructura Ciclista en la Secretaría de Medio Ambiente del Gobierno de la Ciudad de México. Es un peatón y ciclista que piensa que tenemos que caminar y andar en bicicleta para lograr ciudades más igualitarias.</p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Alvaro Nogueroles-->
        <div class="modal fade" id="modal_AlvaroNogueroles" tabindex="-1" role="dialog" aria-labelledby="modal_AlvaroNogueroles" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="foto">
                            <img class="cover" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2023/alvaro_nogueroles.png" alt="Foto: Alvaro Nogueroles" title="Foto: Alvaro Nogueroles">
                        </div>
                        <div class="texto">
                            <h3>Alvaro Nogueroles</h3>
                            <h4>Director Regional para LATAM en la empresa sueca-holandesa Sensys Gatso Group</h4>
                            <hr>
                            <p>Alvaro Nogueroles es Ingeniero Civil por la Universidad Politécnica de Madrid y MBA por la Escuela de Organización Industrial. Ha desarrollado sus 20 años de trayectoria profesional en el ámbito de las infraestructuras de transporte, la movilidad sostenible y la seguridad vial en multinacionales españolas como Ineco, Ferrovial y Acciona. Actualmente desempeña el cargo de Director Regional para LATAM en la empresa sueca-holandesa Sensys Gatso Group, referente mundial en soluciones automatizadas de seguridad vial y mejora medioambiental urbana. A través de su filial, Sensys Gatso LATAM, se están desarrollando proyectos de mejora de la seguridad vial actualmente en siete países de la Región. Sensys Gatso desarrolla su actividad en los cinco continentes habiendo establecido filiales en Australia, Oriente Próximo y Estados Unidos. Sensys Gatso Group cotiza en la Bolsa de Estocolmo.</p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Paulo Andrés Rincón Garat-->
        <div class="modal fade" id="modal_PauloRincon" tabindex="-1" role="dialog" aria-labelledby="modal_PauloRincon" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="foto">
                            <img class="cover" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2023/paulo_a_rincon_garay.png" alt="Foto: Paulo Andrés Rincón Garat" title="Foto: Paulo Andrés Rincón Garat">
                        </div>
                        <div class="texto">
                            <h3>Paulo Andrés Rincón Garat</h3>
                            <h4>Subsecretario de Gestión Jurídica </h4>
                            <hr>
                            <p>Abogado de la Universidad Externado de Colombia, especialista en Derecho Administrativo y Administración Pública de la Universidad de Buenos Aires, Argentina, y actualmente se encuentra cursando una Maestría en Ciudades Inteligentes en la misma universidad de donde es egresado.</p>
                            <p>Cuenta con más de doce años de experiencia profesional asesorando jurídicamente al sector público y privado, en temas como regulación normativa y elaboración de política pública, derecho público, derecho de transporte, defensa judicial ante la jurisdicción contencioso administrativa, civil y laboral. Trabajó como asesor del Despacho y también fue Director de Normatividad y Conceptos en la Secretaría Distrital de Movilidad. En la firma GGC Abogados y Financieros fue coordinador jurídico, alrededor de cinco años. Su experiencia lo ha llevado a ocupar cargos en el Departamento para la Prosperidad Social el Hospital Simón Bolívar, en la Gobernación de Caldas y en la Industria Licorera de Caldas.</p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Luis Alejandro Zambrano Ruiz-->
        <div class="modal fade" id="modal_LuisZambrano" tabindex="-1" role="dialog" aria-labelledby="modal_LuisZambrano" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="foto">
                            <img class="cover" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/26-09-2023/luis_zambrano_0.png" alt="Foto: Luis Alejandro Zambrano Ruiz" title="Foto: Luis Alejandro Zambrano Ruiz">
                        </div>
                        <div class="texto">
                            <h3>Luis Alejandro Zambrano Ruiz</h3>
                            <h4>Dirección de Transporte y Tránsito del Ministerio de Transporte</h4>
                            <hr>
                            <p>Abogado, especializado en derecho ambiental y experto en áreas de tránsito y transporte por más de 23 años. Asesor de ministerio de justicia y del derecho, vicepresidente jurídico del sistema de recaudo y control de flota del sistema de transporte de Bogota, subsecretario jurídico de secretaría de tránsito de bogotá, asesor de mintransporte como líder políticas públicas y de regulación y reglamentación consultor de diferentes entidades públicas y privadas como universidad nacional, secretaria de movilidad y alcaldía mayor de Bogotá, de Soacha, Garzon y Cáqueza. Asesor de Gobernación de Cundinamarca, supertransporte y ahora director nacional de transporte y tránsito de Mintransporte</p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Darío Hidalgo-->
        <div class="modal fade" id="modal_DarioHidalgo" tabindex="-1" role="dialog" aria-labelledby="modal_DarioHidalgo" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="foto">
                            <img class="cover" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2023/dario_hidalgo.png" alt="Foto: Darío Hidalgo" title="Foto: Darío Hidalgo">
                        </div>
                        <div class="texto">
                            <h3>Darío Hidalgo</h3>
                            <h4>Docente - Facultad de Ingeniería Universidad Javeriana</h4>
                            <hr>
                            <p>Ingeniero Civil y Especialista en Evaluación de Proyectos de la Universidad de los Andes; Magíster y Doctorado en Ingeniería de Transporte de la Universidad Estatal de Ohio. Profesor de Transporte y Logística de la Universidad Javeriana. Se ha desempeñado como asesor de gobiernos locales, nacionales y organismos internacionales de desarrollo en América Latina, Asia y África. Autor de más de 80 publicaciones académicas. Fue Subgerente de TransMilenio (2000-2003), y Gerente del Proyecto Metro de Bogotá (1998-2000).</p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal John Montoya-->
        <div class="modal fade" id="modal_JhonMontoya" tabindex="-1" role="dialog" aria-labelledby="modal_JohnMontoya" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="foto">
                            <img class="cover" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2023/jhon_montoya.png" alt="Foto: John Montoya" title="Foto: John Montoya">
                        </div>
                        <div class="texto">
                            <h3>John Montoya</h3>
                            <h4>Director de Presales Scania Commercial Operations Colombia</h4>
                            <hr>
                            <p>John Montoya es un experimentado profesional en la industria automotriz, actualmente se desempeña como Director de Presales y miembro del Management Team para Scania Colombia. Cuenta con 18 años de experiencia en el sector automotriz, 10 de ellos en Scania, donde ha desempeñado un papel fundamental en el desarrollo comercial de camiones para la compañía. John es Ingeniero Mecánico, Especialista en Mantenimiento y candidato a Magíster en Comercio Internacional.</p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal William Vallejo -->
        <div class="modal fade" id="modal_WilliamVallejo" tabindex="-1" role="dialog" aria-labelledby="modal_WilliamVallejo" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="foto">
                            <img class="cover" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2023/william_vallejo.png" alt="Foto: William Vallejo " title="Foto: William Vallejo ">
                        </div>
                        <div class="texto">
                            <h3>William Vallejo </h3>
                            <h4>Director de Infraestructura y Vehículos - ANSV</h4>
                            <hr>
                            <p>Ingeniero topográfico de la Universidad del Valle con maestría en Transporte y Urbanismo del University College de Londres.</p>
                            <p>Con 18 años de experiencia, ha sido consultor, asesor y docente universitario. En los últimos 12 años ha trabajado como servidor público. Fue gerente de proyectos especiales para la ciudad de Nueva York, asesor del despacho del Instituto de Desarrollo Urbano (IDU) de Bogotá, y subsecretario de Movilidad Sostenible y Seguridad Vial de Cali. Actualmente es Director técnico de infraestructura y vehículos de la Agencia Nacional de Seguridad Vial (ANSV).</p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Karol García -->
        <div class="modal fade" id="modal_KarolGarcia" tabindex="-1" role="dialog" aria-labelledby="modal_KarolGarcia" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="foto">
                            <img class="cover" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2023/karol_garcia.png" alt="Foto: Karol García " title="Foto: Karol García ">
                        </div>
                        <div class="texto">
                            <h3>Karol García </h3>
                            <h4>Directora de la Cámara de la Industria Automotriz - ANDI</h4>
                            <hr>
                            <p>Abogada, especialista en Derecho Internacional de Transporte y candidata a Magister en Políticas Públicas de la Universidad de los Andes. Cuenta con más de 13 años de experiencia en gestión regulatoria, legislativa y manejo de asuntos públicos de gobierno.</p>
                            <p>Se desempeñó como asesora de la Secretaría de Movilidad de Bogotá, de la Secretaría de Movilidad de San Andrés y Providencia y del Ministerio de Transporte. En estos roles fue gestora de procesos regulatorios en movilidad, seguridad vial, transporte y comercio en territorios continentales e insulares, e hizo seguimiento y evaluación de eficiencia en el desarrollo de políticas públicas.</p>
                            <p>Durante los últimos seis años trabajó en el sector privado como líder responsable de la elaboración, impulso, seguimiento y evaluación de agendas con gobiernos locales, nacionales, embajadas, cámaras de comercio internacionales y cuerpos legislativos, para promover el crecimiento y desarrollo de negocios a nivel nacional.</p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Modal Óscar Julián Gómez-->
        <div class="modal fade" id="modal_OscarGomez" tabindex="-1" role="dialog" aria-labelledby="modal_OscarGomez" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="foto">
                            <img class="cover" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2023/oscar_julian_gomez.png" alt="Foto: Óscar Julián Gómez" title="Foto: Óscar Julián Gómez">
                        </div>
                        <div class="texto">
                            <h3>Óscar Julián Gómez</h3>
                            <h4>Subsecretario de Política de Movilidad - SDM</h4>
                            <hr>
                            <p>Ingeniero civil y Magíster en Ingeniería de Transporte de la Universidad Nacional de Colombia, con especialización en Finanzas de la Universidad Externado de Colombia. Apasionado por la estructuración e implementación técnica y financiera de proyectos de transporte y logística, con amplia experiencia en el sector público en el análisis de la economía del transporte y mejora regulatoria. Fue director de Infraestructura y Vehículos de la Agencia Nacional de Seguridad Vial (ANSV); subdirector de Movilidad y Transporte Urbano del Departamento Nacional de Planeación (DNP); asesor del Ministerio de Transporte; consultor del Banco Interamericano de Desarrollo (BID), entre otros.</p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Angela Gomez-->
        <div class="modal fade" id="modal_AngelaGomez" tabindex="-1" role="dialog" aria-labelledby="modal_AngelaGomez" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="foto">
                            <img class="cover" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2023/angela_gomez.png" alt="Foto: Angela Gomez" title="Foto: Angela Gomez">
                        </div>
                        <div class="texto">
                            <h3>Angela Gomez</h3>
                            <h4>Liga Contra la Violencia Vial </h4>
                            <hr>
                            <p>Coordinadora de proyecto. Bióloga de la Universidad Nacional de Colombia. Coordinadora de proyecto de la Liga Contra La Violencia Vial: estudio sobre la incidencia y prevalencia de la conducción de vehículos motorizados con presencia de sustancias psicotrópicas y alcohol en el organismo en Colombia.</p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Coronel Wilson Barrios-->
        <div class="modal fade" id="modal_WilsonBarrios" tabindex="-1" role="dialog" aria-labelledby="modal_WilsonBarrios" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="foto">
                            <img class="cover" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/26-09-2023/wilson_barrios.png" alt="Foto: Coronel Wilson Barrios" title="Foto: Coronel Wilson Barrios">
                        </div>
                        <div class="texto">
                            <h3>Coronel Wilson Barrios</h3>
                            <h4>Jefe seccional de Tránsito y Transportes de Bogotá</h4>
                            <hr>

                            <!-- <hr> -->
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Daniela Castaño -->
        <div class="modal fade" id="modal_DanielaCastano" tabindex="-1" role="dialog" aria-labelledby="modal_DanielaCastano" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="foto">
                            <img class="cover" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2023/daniela_castano.png" alt="Foto: Daniela Castaño " title="Foto: Daniela Castaño ">
                        </div>
                        <div class="texto">
                            <h3>Daniela Castaño </h3>
                            <h4>Universidad de Antioquia</h4>
                            <hr>
                            <p>Profesora Universidad de Antioquia. Magíster en ciencia, tecnología e innovación. Investigadora del proyecto conducción y consumo de sustancias psicoactivas.</p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Donald Fulbright-->
        <div class="modal fade" id="modal_DonaldFulbright" tabindex="-1" role="dialog" aria-labelledby="modal_DonaldFulbright" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="foto">
                            <img class="cover" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2023/donald_fulbright.png" alt="Foto: Donald Fulbright" title="Foto: Donald Fulbright">
                        </div>
                        <div class="texto">
                            <h3>Donald Fulbright</h3>
                            <h4>Consultor de la Asociación Internacional de Jefes de Policía (IACP)</h4>
                            <hr>

                            <p>Tiene amplia experiencia en operaciones de gestión del tráfico, detección de conducción bajo los efectos del alcohol y procedimientos de investigación de siniestros viales. Su historial de certificaciones incluye Reconstrucción de Siniestros Viales, Instructor de Sobriedad de Campo Estandarizado (SFST), Experto Certificado en Reconocimiento de Drogas. Cuenta con una Licenciatura en Ciencias Deportivas, una Maestría en Administración de Justicia Penal y es un Oficial de la Paz certificado en el estado de Texas. Actualmente se desempeña como miembro de la División de Programas de la Asociación Internacional de Jefes de Policía (IACP).</p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Omar González-->
        <div class="modal fade" id="modal_OmarGonzalez" tabindex="-1" role="dialog" aria-labelledby="modal_OmarGonzalez" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="foto">
                            <img class="cover" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2023/omar_gonzalez.png" alt="Foto: Omar González" title="Foto: Omar González">
                        </div>
                        <div class="texto">
                            <h3>Omar González</h3>
                            <h4>Coordinador de Control y Vigilancia - BIGRS Colombia</h4>
                            <hr>
                            <p>Coronel retirado de la Policía Nacional de Colombia con experiencia y formación en seguridad vial de GRSP y Johns Hopkins. Se unió a BIGRS en 2015 como Coordinador de Control en Bogotá, y desde 2020, ha desempeñado el mismo rol en Colombia para la ciudad de Cali y a nivel nacional para la Agencia Nacional de Seguridad Vial (ANSV). Ha contribuido a actualizar procedimientos operativos estandarizados para embriaguez y exceso de velocidad y, ha ofrecido capacitaciones sobre Sistema Seguro y estrategias de control policial en ciudades de México, Ecuador y Argentina.</p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Jhon Alexander González Mendoza-->
        <div class="modal fade" id="modal_JhonGonzalez" tabindex="-1" role="dialog" aria-labelledby="modal_JhonGonzalez" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="foto">
                            <img class="cover" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2023/jhon_alexander_gonzalez.png" alt="Foto: Jhon Alexander González Mendoza" title="Foto: Jhon Alexander González Mendoza">
                        </div>
                        <div class="texto">
                            <h3>Jhon Alexander González Mendoza</h3>
                            <h4>Subsecretario de Gestión de la Movilidad - SDM</h4>
                            <hr>
                            <p>Ingeniero Civil de la Universidad Nacional de Colombia, Especialista en Tránsito, Diseño y Seguridad vial, candidato a Magister en Ingeniería de Transporte en la misma alma máter. Además, tiene estudios complementarios en modelación del transporte y el tránsito, así como auditorias de seguridad vial y diseño urbano. </p>
                            <p> su perfil profesional en el marco del diseño seguro y la modelación del transporte y el tránsito, enfocándose en el comportamiento peatonal y de ciclistas. Parte de su experiencia la ha desarrollado en la elaboración de diferentes estudios y diseños a nivel nacional, para diferentes firmas consultoras en Estudios de transporte y tránsito, modelación del tráfico, diseño geométrico vial, diseño de señalización, planes manejo de tráfico en obra y auditorias de seguridad vial. Su mayor reto es lograr armonizar los diferentes proyectos viales en el marco de la planeación, la gestión y la ejecución en el Distrito con altos estándares de calidad, eficiencia y seguridad vial.</p>

                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Adriana Iza-->
        <div class="modal fade" id="modal_AdrianaIza" tabindex="-1" role="dialog" aria-labelledby="modal_AdrianaIza" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="foto">
                            <img class="cover" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2023/adriana_iza.png" alt="Foto: Adriana Iza" title="Foto: Adriana Iza">
                        </div>
                        <div class="texto">
                            <h3>Adriana Iza</h3>
                            <h4>Subsecretaria de Servicios a la ciudadanía - Secretaria Distrital de Movilidad de Bogotá</h4>
                            <hr>
                            <p>Administradora de empresas, Especialista en Evaluación Social de Proyectos de la Universidad de los Andes, y Máster en Estudios Políticos de la Universidad Javeriana. Por seis años fue Directora de Estudios Sectoriales de la Secretaría de Movilidad, posteriormente jefe de Gestión Social. Fue coordinadora de procesos de emprendimiento y líder del proyecto Colegios Amigos del Turismo, en el Instituto Distrital de Turismo. Actualmente es la Subsecretaria de Servicio a la Ciudadanía de la Secretaría de Movilidad de Bogotá.</p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Ilse González-->
        <div class="modal fade" id="modal_IlseGonzalez" tabindex="-1" role="dialog" aria-labelledby="modal_IlseGonzalez" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="foto">
                            <img class="cover" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2023/ilse_gonzalez_martinez_.png" alt="Foto: Ilse González" title="Foto: Ilse González">
                        </div>
                        <div class="texto">
                            <h3>Ilse González</h3>
                            <h4>Directora del la Delegación Mexicana del Observatorio de Criminología Vial</h4>
                            <hr>
                            <p>Licenciada en Criminología y Criminalista, Maestra en Perfilación Criminal por el colegio libre de estudios universitarios CLEU. Licenciada en derecho por la Universidad Nacional Autónoma de México UNAM (PROCESO DE TITULACIÓN) Directora del la Delegación Mexicana del Observatorio de Criminología Vial. Miembro de las diversas instituciones académicas :- Red temática de Ciencia forense CONACYT (México)- RED Iberoamericana de Derecho Sanitario (Brasil)- Criminal FACT (España)- RED Internacional de Criminología.</p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Luz Angela Ruíz-->
        <div class="modal fade" id="modal_AngelaRuiz" tabindex="-1" role="dialog" aria-labelledby="modal_AngelaRuiz" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="foto">
                            <img class="cover" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2023/luz_angela_ruiz.png" alt="Foto: Luz Angela Ruíz" title="Foto: Luz Angela Ruíz">
                        </div>
                        <div class="texto">
                            <h3>Luz Angela Ruíz</h3>
                            <h4>Profesional ORVI</h4>
                            <hr>
                            <p>Profesional de Orientación Psicológica en el Centro de Orientación a Victimas de Siniestros Viales -ORVI. Psicóloga de la Universidad Minuto de Dios. Especialista en Juego y desarrollo socio emocional. Psicoterapeuta y miembro activo del Colegio Colombiano de Psicólogos en proyectos para la prevención de comportamientos de riesgo en suicidio.</p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal María Fernanda Cárdenas-->
        <div class="modal fade" id="modal_MariaCardenas" tabindex="-1" role="dialog" aria-labelledby="modal_MariaCardenas" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="foto">
                            <img class="cover" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2023/maria_fernanda_cardenas.png" alt="Foto: María Fernanda Cárdenas" title="Foto: María Fernanda Cárdenas">
                        </div>
                        <div class="texto">
                            <h3>María Fernanda Cárdenas</h3>
                            <h4>Gerente Senior de Comunicaciones para Colombia - Vital Strategies</h4>
                            <hr>
                            <p>Politóloga con énfasis en Mercadeo Político, Especialista en Producción de Televisión y Máster en Teatro. Tiene una amplia experiencia en el diseño e implementación de estrategias de comunicación y políticas públicas, trabajando en entidades públicas y privadas, así como agencias de publicidad. Como experta en campañas de cambio de comportamiento, ofrece asistencia técnica a los socios de Vital Strategies en Colombia y Latinoamérica, en el marco de la Iniciativa Bloomberg para la Seguridad Vial Mundial (BIGRS), en la planificación e implementación de campañas de bien público en seguridad vial. </p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal José Segundo López-->
        <div class="modal fade" id="modal_SegundoLopez" tabindex="-1" role="dialog" aria-labelledby="modal_SegundoLopez" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="foto">
                            <img class="cover" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2023/jose_segundo_lopez.png" alt="Foto: José Segundo López" title="Foto: José Segundo López">
                        </div>
                        <div class="texto">
                            <h3>José Segundo López</h3>
                            <h4>Coordinador Internacional de Datos - WRI</h4>
                            <hr>
                            <p>Es ingeniero civil de la Universidad de los Andes y máster en ingeniería civil con énfasis en transporte de la misma universidad. Sus principales actividades están relacionadas con recolección y análisis de datos e investigación, así como inspecciones y auditorías de seguridad vial. También ha trabajado en temas de investigación en género y transporte. </p>
                            <p>Antes de unirse a WRI, trabajó como asistente de investigación en la Universidad de Los Andes (Bogotá, Colombia) en el grupo de Sostenibilidad Urbana y Regional SUR. También trabajó en Despacio, una ONG colombiana que promueve la movilidad sostenible.</p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Ernesto Varas-->
        <div class="modal fade" id="modal_ErnestoVaras" tabindex="-1" role="dialog" aria-labelledby="modal_ErnestoVaras" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="foto">
                            <img class="cover" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2023/ernesto_varas.png" alt="Foto: Ernesto Varas" title="Foto: Ernesto Varas">
                        </div>
                        <div class="texto">
                            <h3>Ernesto Varas</h3>
                            <h4>Director de la Agencia Nacional de Tránsito de Ecuador </h4>
                            <hr>
                            <p>Magíster en Administración de Empresas y experto en Gestión y Dirección de Seguridad Vial. Cuenta con amplia experiencia en diversas áreas, principalmente en transporte, seguridad vial y educación; además, se ha desempeñado en varios cargos en el sector público y privado.</p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Jim Hutcherson-->
        <div class="modal fade" id="modal_JimHutcherson" tabindex="-1" role="dialog" aria-labelledby="modal_JimHutcherson" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="foto">
                            <img class="cover" src="" alt="Foto: Jim Hutcherson" title="Foto: Jim Hutcherson">
                        </div>
                        <div class="texto">
                            <h3>Jim Hutcherson</h3>
                            <h4>Consultor de la Asociación Internacional de Jefes de Policía (IACP)</h4>
                            <hr>
                            <p>Ha dedicado su carrera profesional a la seguridad vial, trabajando durante los últimos 40 años con la policía hasta desempeñar el cargo de Jefe de Operaciones. Es instructor de cinemómetro, de sobriedad de campo estandarizado (SFST) y reconstructor de siniestros de tránsito. Durante su carrera en la Policía de Carreteras de Tennessee (THP), ayudó a instituir el concepto de reducción de siniestros viales a través de operaciones de control basadas en datos, lo que llevó a que la IACP le otorgara el título de la mejor agencia estatal/provincial de los Estados Unidos en 2014.</p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Taciana Ferreira-->
        <div class="modal fade" id="modal_TacianaFerreira" tabindex="-1" role="dialog" aria-labelledby="modal_TacianaFerreira" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="foto">
                            <img class="cover" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2023/taciana_ferreira.png" alt="Foto: Taciana Ferreira" title="Foto: Taciana Ferreira">
                        </div>
                        <div class="texto">
                            <h3>Taciana Ferreira</h3>
                            <h4>Presidente - Autoridad de Transporte y Tráfico Urbano de Recife (CTTU)</h4>
                            <hr>
                            <p>Licenciada en Ingeniería Civil y Asumió la presidencia de la Autoridad de Transporte y Tráfico Urbano de Recife (CTTU) en enero de 2013, siendo la gestora con más experiencia en ocupar el cargo en el organismo. Es especialista en Ingeniería de Tránsito y tiene una Maestría en Gestión de Infraestructura con énfasis en Transporte Público. Se desempeñó como directora de operaciones del Consorcio de Transportes de la Región Metropolitana de Recife (2009-2012) y como gerente de Programación del Sistema de la Empresa de Transporte Urbano Metropolitano (EMTU) (2007-2009), responsable de la gestión del Sistema Público de Transporte de Pasajeros de la Región Metropolitana. Desde 2020, la ciudad forma parte de la Iniciativa Bloomberg para la Seguridad Vial Mundial (BIGRS). </p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Oscar Julian Gómez-->
        <div class="modal fade" id="modal_OscarGomez" tabindex="-1" role="dialog" aria-labelledby="modal_OscarGomez" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="foto">
                            <img class="cover" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2023/oscar_julian_gomez.png" alt="Foto: Oscar Julian Gómez" title="Foto: Oscar Julian Gómez">
                        </div>
                        <div class="texto">
                            <h3>Oscar Julian Gómez</h3>
                            <h4>Subsecretario de Política de la Movilidad - SDM</h4>
                            <hr>
                            <p>Ingeniero civil y Magíster en Ingeniería de Transporte de la Universidad Nacional de Colombia, con especialización en Finanzas de la Universidad Externado de Colombia. Apasionado por la estructuración e implementación técnica y financiera de proyectos de transporte y logística, con amplia experiencia en el sector público en el análisis de la economía del transporte y mejora regulatoria. Fue director de Infraestructura y Vehículos de la Agencia Nacional de Seguridad Vial (ANSV); subdirector de Movilidad y Transporte Urbano del Departamento Nacional de Planeación (DNP); asesor del Ministerio de Transporte; consultor del Banco Interamericano de Desarrollo (BID), entre otros.</p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Carolina Álvarez Valencia-->
        <div class="modal fade" id="modal_CarolinaAlvarez" tabindex="-1" role="dialog" aria-labelledby="modal_CarolinaAlvarez" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="foto">
                            <img class="cover" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2023/carolina_alvarez.png" alt="Foto: Carolina Álvarez Valencia" title="Foto: Carolina Álvarez Valencia">
                        </div>
                        <div class="texto">
                            <h3>Carolina Álvarez Valencia</h3>
                            <h4>Coordinadora de Infraestructura - BIGRS Colombia </h4>
                            <hr>
                            <p>Es Ingeniera Civil con casi 18 años de experiencia. Cuenta con una maestría en Infraestructura y Sistemas de Transporte y otra en Estudios Urbanos y Regionales. Tiene experiencia en urbanismo, política pública, movilidad sostenible y seguridad vial tanto en el sector público como privado. También ejerció como docente en varias universidades. Desde 2017 hace parte de la Iniciativa Bloomberg para la Seguridad Vial Mundial (BIGRS) como Coordinadora de Infraestructura para Colombia, principalmente para las ciudades de Bogotá y Cali. </p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Fernando Paéz-->
        <div class="modal fade" id="modal_FernandoPaez" tabindex="-1" role="dialog" aria-labelledby="modal_FernandoPaez" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="foto">
                            <img class="cover" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2023/fernando_paez.png" alt="Foto: Fernando Paéz" title="Foto: Fernando Paéz">
                        </div>
                        <div class="texto">
                            <h3>Fernando Paéz</h3>
                            <h4>Director Adjunto para Colombia – WRI</h4>
                            <hr>
                            <p>Cuenta con un Master Business Administration de la Universidad del Rey Juan Carlos de España. Es Especialista en Administración de la Calidad y la Productividad de la Universidad del Valle de Cali, Colombia y Administrador Público egresado de la Escuela Superior de Administración Pública de Bogotá, Colombia. También adelantó estudios en Administración de Gobiernos Municipales con la Unión Iberoamericana de Municipalistas de España. Se vinculó a WRI desde el año 2012 y durante este tiempo ha ocupado las posiciones de director de Operaciones para WRI México y director de Movilidad Urbana para WRI México y Colombia. Ha liderado la formulación e implantación de instrumentos de política pública, proyectos y desarrollo de capacidades en movilidad urbana sustentable para el sector público y privado en Latinoamérica. Actualmente está a cargo de la implantación de la oficina de WRI en Colombia con el propósito de consolidar la acción de WRI en temáticas de acción climática, ciudades sustentables y bosques.</p>
                            <p>En su trayectoria profesional de más de 25 años ha desempeñado diversos cargos en la administración pública local y nacional de Colombia desde 1993 hasta el 2011, entre los que destacan: subdirector y director del Departamento Administrativo de Planeación de Bogotá entre 2001 y 2006; Subgerente y Gerente General de TransMilenio entre 2006 y 2011.</p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Modal Lizette Medina Villalba-->
        <div class="modal fade" id="modal_LizetteMedina" tabindex="-1" role="dialog" aria-labelledby="modal_LizetteMedina" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="foto">
                            <img class="cover" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2023/lizette_medina_villalba.png" alt="Foto: Lizette Medina Villalba" title="Foto: Lizette Medina Villalba">
                        </div>
                        <div class="texto">
                            <h3>Lizette Medina Villalba</h3>
                            <h4>Directora de Estructuras y Sistemas Territoriales de la Secretaria de Planeación de Bogotá</h4>
                            <hr>
                            <p>Ingeniera Industrial de la Universidad de La Sabana especialista en Derecho Urbano, Propiedad y Políticas de Suelo de la Universidad de Los Andes. Con más de 12 años de experiencia en el sector privado de la construcción en el montaje y desarrollo de proyectos inmobiliarios. Con esta administración inició en el sector público como Asesora Técnica en temas de Renovación Urbana, en la Empresa de Renovación Urbana de Bogotá -ERU- y en la Secretaría Distrital de Planeación como Asesora del Despacho, acompañó el proceso de elaboración del Plan de Ordenamiento Territorial. Actualmente es la Directora de Estructuras y Sistemas Territoriales en esta entidad, liderando proyectos estratégicos como el Manual de Espacio Público, El Plan de Sistema del Cuidado y Servicios Sociales y la Reglamentación de Ecourbanismo y Construcción Sostenible.</p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Val Smith-->
        <div class="modal fade" id="modal_ValSmith" tabindex="-1" role="dialog" aria-labelledby="modal_ValSmith" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="foto">
                            <img class="cover" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2023/valerie_smith.png" alt="Foto: Val Smith" title="Foto: Val Smith">
                        </div>
                        <div class="texto">
                            <h3>Val Smith</h3>
                            <h4>Directora del Programa de Seguridad Vial - Parachute</h4>
                            <hr>
                            <p>Supervisa y gestiona todas las iniciativas de movilidad segura y seguridad vial de Parachute. Supervisa el apoyo y movilización de la red Vision Zero de Parachute, formada por partes interesadas de todo Canadá.</p>
                            <p>Ha liderado al equipo de Parachute en el desarrollo de múltiples recursos de vanguardia de Vision Zero, como Change for Good Roads y Parachute Vision Zero: Canadian Landscape 3.0. En 2022, recibió el premio Profesional de Seguridad Vial del Año de Ontario otorgado por el Ministerio de Transporte de Ontario. También es miembro de la junta directiva de la Asociación Canadiense de Profesionales de Seguridad Vial (CARSP) y copresidenta de la Ontario Vision Zero Alliance.</p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Carlos Alberto Ramirez Parra - Directo Bomberos-->
        <div class="modal fade" id="modal_CarlosRamirez" tabindex="-1" role="dialog" aria-labelledby="modal_CarlosRamirez" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="foto">
                            <img class="cover" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2023/carlos_alberto_ramirez_parra.png" alt="Foto: Carlos Alberto Ramirez Parra - Directo Bomberos" title="Foto: Carlos Alberto Ramirez Parra - Directo Bomberos">
                        </div>
                        <div class="texto">
                            <h3>Carlos Alberto Ramirez Parra</h3>
                            <h4>Jefe de Estación del Cuerpo Oficial de Bomberos de Bogotá y experto en rescate vehicular</h4>
                            <hr>
                            <p>Bombero de la Unidad Administrativa Especial Cuerpo Oficial de Bomberos de Bogotá desde el año 2000, actualmente con el grado de Sargento Jefe de Estación, hizo parte del Equipo Técnico de Rescate de la entidad, lidero con el equipo la implementación del curso de Bombero Caído 2 , hace parte de la subcomisión técnica de rescate en vehículos de Dirección Nacional de Bomberos de Colombia, instructor del programa de rescate en vehículos nivel operaciones a nivel nacional, dinamizador del protocolo distrital de atención a siniestros viales de la ciudad de Bogotá, a colaborado con la asociación Latinoamérica de rescate vehicular en la generación de espacios académicos para la atención de rescate en vehículos.</p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Alejandro Gómez López-->
        <div class="modal fade" id="modal_AlejandroGomez" tabindex="-1" role="dialog" aria-labelledby="modal_AlejandroGomez" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="foto">
                            <img class="cover" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2023/alejandro_gomez.png" alt="Foto: Alejandro Gómez López" title="Foto: Alejandro Gómez López">
                        </div>
                        <div class="texto">
                            <h3>Alejandro Gómez López</h3>
                            <h4>Secretario Distrital de Salud de Bogotá</h4>
                            <hr>
                            <p>Es Médico, Especialista en Auditoría de Salud de la Universidad CES y en Finanzas de la Universidad EAFIT, y Máster en Estudios Políticos e Internacionales de la Universidad del Rosario. Tiene más de 20 años de experiencia en el ámbito nacional. Ejerció como médico en diferentes hospitales de Antioquia y se ha desempeñado como vicepresidente de Bonsalud EPS; director de Salud de la Sociedad San Vicente de Paúl; director de Salud Pública de la Alcaldía de Medellín; gerente de Metrosalud y director nacional de Nutrición del Instituto Colombiano de Bienestar Familiar (ICBF). Así mismo, se ha desempeñado como docente en las Universidades CES, Rosario, EAFIT y Autónoma de Bucaramanga.</p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Guillermo Escobar Castro-->
        <div class="modal fade" id="modal_GuillermoEscobar" tabindex="-1" role="dialog" aria-labelledby="modal_GuillermoEscobar" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="foto">
                            <img class="cover" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2023/guillermo_escobar_castro.png" alt="Foto: Guillermo Escobar Castro" title="Foto: Guillermo Escobar Castro">
                        </div>
                        <div class="texto">
                            <h3>Guillermo Escobar Castro</h3>
                            <h4>Director - Instituto Distrital de Gestión de Riesgos y Cambio Climático de Bogotá</h4>
                            <hr>
                            <p>Es ingeniero civil egresado de la Universidad Santo Tomás y Especialista en evaluación de riesgos y desastres de la Universidad de Los Andes. Fue consultor en gestión de riesgo del Banco Mundial y Director de Prevención y Atención de Emergencias.</p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Modal Mario Fernando Cruz Vargas-->
        <div class="modal fade" id="modal_MarioCruz" tabindex="-1" role="dialog" aria-labelledby="modal_MarioCruz" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="foto">
                            <img class="cover" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2023/mario_fernando_cruz_vargas.png" alt="Foto: Mario Fernando Cruz Vargas" title="Foto: Mario Fernando Cruz Vargas">
                        </div>
                        <div class="texto">
                            <h3>Mario Fernando Cruz Vargas</h3>
                            <h4>Vicepresidente de La Asociación Colombiana de Empresas de Medicina Integral - ACEMI</h4>
                            <hr>
                            <p>Economista Universidad Nacional y magister en administración y finanzas de la Universal de Los Andes y en economía de la Universidad Nacional. Actualmente es el Vicepresidente Técnico de La Asociación Colombiana de Empresas de Medicina Integral y además es profesor universitario. Se desempeñó como Director de Seguridad Social y Vida Fasecolda y Jefe de Planeación y Estudios MinSalud.</p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Nathaly Patiño-->
        <div class="modal fade" id="modal_NathalyPatino" tabindex="-1" role="dialog" aria-labelledby="modal_NathalyPatino" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="foto">
                            <img class="cover" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2023/nathaly_patino.png" alt="Foto: Nathaly Patiño" title="Foto: Nathaly Patiño">
                        </div>
                        <div class="texto">
                            <h3>Nathaly Patiño</h3>
                            <h4>Directora de Gestión de Tránsito y Control de Tránsito y Transporte - SDM</h4>
                            <hr>
                            <p>Ingeniera Civil de la Universidad Nacional de Colombia y especialistas en Tránsito y Transporte de la Universidad Pedagógica y Tecnológica de Colombia. Cuenta con experiencia en tránsito y transporte, especialmente en temas relacionados con gestión en vía en la Secretaría de Movilidad y en proyectos de consultoría.</p>
                            <p>Fue contratista en la Subdirección de Gestión en Vía, donde tenía a su cargo las Localidades de Santa Fe, Candelaria, Chapinero y de la Avenida Caracas. Posteriormente, se desempeñó como Subdirectora, rol en el que se destacó por trabajar para que la ciudadanía reconozca a la Entidad como una mano amiga en la vía. Asume esta dirección con el propósito de continuar aportarndo a la ciudad desde la gestión y el control. Además de fortalecer a los equipos que están en vía, demostrando eficiencia en la atención de situaciones de emergencia, y en momentos claves como la época de lluvias, los planes éxodo y retorno, y las manifestaciones que se presentan en Bogotá."</p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Diego Vargas-->
        <div class="modal fade" id="modal_DiegoVargas" tabindex="-1" role="dialog" aria-labelledby="modal_DiegoVargas" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="foto">
                            <img class="cover" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2023/diego_vargas.png" alt="Foto: Diego Vargas" title="Foto: Diego Vargas">
                        </div>
                        <div class="texto">
                            <h3>Diego Vargas</h3>
                            <h4>Coordinador Regional de Vigilancia de Datos de Vital Strategies </h4>
                            <hr>
                            <p>Es Ingeniero de sistemas con maestría en Ingeniería de Transporte de la Universidad Nacional de Colombia con más de 15 años de experiencia en trabajos relacionados con bases de datos y sistemas de información aplicados a áreas de tránsito, transporte, movilidad y seguridad vial.</p>
                            <p>Profesional con habilidades en formulación de soluciones en temas de movilidad, integración de información, análisis estadísticos y geográficos, así como también en generación de estrategias a través de planes de movilidad y seguridad vial tanto en el sector público como privado. Actualmente es Asesor Senior Regional de Vigilancia de Datos de Vital Strategies para Argentina, Colombia y Ecuador.</p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Diana Rodríguez Franco-->
        <div class="modal fade" id="modal_DianaRodriguez" tabindex="-1" role="dialog" aria-labelledby="modal_DianaRodriguez" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="foto">
                            <img class="cover" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2023/diana_rodriguez.png" alt="Foto: Diana Rodríguez Franco" title="Foto: Diana Rodríguez Franco">
                        </div>
                        <div class="texto">
                            <h3>Diana Rodríguez Franco</h3>
                            <h4>Secretaría de la Mujer de Bogotá</h4>
                            <hr>
                            <p>Es doctora en sociología de Northwestern University, con maestría en Sociología de la misma universidad. Es abogada y economista de la Universidad de Los Andes. Ha dedicado su vida al estudio y la defensa de los derechos humanos. Como subdirectora e investigadora del Centro de Estudios de Derecho, Justicia y Sociedad (Dejusticia), se enfocó en temas de participación ciudadana, desplazamiento forzado, acceso a la salud y política ambiental.</p>
                            <p>También ha sido profesora de las facultades de Administración y de Derecho en la Universidad de Los Andes.</p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <style>
            .box-modals .modal-body {
                display: grid;
                /* gap: 10px; */
                grid-auto-flow: dense;
                grid-template-columns: 1fr;
                grid-template-rows: auto;
                grid-template-areas:
                    'foto'
                    'texto'
                    'sub-close';
            }

            @media(min-width:992px) {
                .box-modals .modal-body {
                    /* gap: 16px; */
                    grid-template-columns: 40% 60%;

                    grid-template-areas:
                        'foto texto'
                        'foto texto'
                        'foto sub-close';
                }
            }

            .box-modals .modal-body .foto {
                grid-area: foto;
                /* background-color: #00000010; */
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }

            .box-modals .modal-body .foto img {
                margin: auto;
                width: 20em;
                height: 30em;
                object-fit: cover;
                object-position: center;
                -webkit-box-shadow: 0px 0px 10px 3px rgba(0, 0, 0, 0.16);
                box-shadow: 0px 0px 10px 3px rgba(0, 0, 0, 0.16);
                border-radius: 8px;
            }

            #modal_DeyaniraAvila .modal-body .foto img {
                object-position: 20% 50%;
            }

            #modal_MariaTabares .modal-body .foto img {
                object-position: 20% 50%;
            }

            #modal_DarioHidalgo .modal-body .foto img {
                object-position: 63% 50%;
            }

            #modal_JhonMontoya .modal-body .foto img {
                object-position: 30% 50%;
            }

            #modal_DanielaCastano .modal-body .foto img {
                object-position: 76% 50%;
            }

            #modal_OmarGonzalez .modal-body .foto img {
                object-position: 35% 50%;
            }

            #modal_AngelaRuiz .modal-body .foto img {
                object-position: 70% 50%;
            }

            #modal_ErnestoVaras .modal-body .foto img {
                object-position: 59% 50%;
            }

            #modal_TacianaFerreira .modal-body .foto img {
                object-position: 61% 50%;
            }

            #modal_LizetteMedina .modal-body .foto img {
                object-position: 36% 50%;
            }

            #modal_DianaRodriguez .modal-body .foto img {
                object-position: 77% 50%;
            }

            .box-modals .modal-body .texto {
                grid-area: texto;
                padding: 0px 16px;
            }

            @media(min-width:768px) {
                .box-modals .modal-body .texto {
                    grid-area: texto;
                    padding: 32px 16px;
                }
            }

            .box-modals .modal-body .texto h3 {
                /* font-size: 15px; */
                font-weight: 700;
                text-align: center;
                line-height: 1.2;
                color: rgba(25, 25, 25, 1);
                margin: 8px 0px;
            }

            .box-modals .modal-body .texto h4 {
                /* font-size: 15px; */
                font-weight: 700;
                text-align: center;
                line-height: 1.2;
                color: #454545;
                margin: 8px 0px 24px 0px;
            }

            .box-modals .modal-body .texto p {
                /* font-size: 15px; */
                font-weight: 500;
                text-align: justify;
                line-height: 1.5;
                color: rgba(25, 25, 25, 1);
                padding: 16px;
            }

            .box-modals .modal-body .sub-close {
                grid-area: sub-close;
                margin: auto;
                text-align: center;

            }

            .box-modals .modal-body hr {
                margin-top: 10px !important;
                margin-bottom: 10px !important;

            }

            .box-verticalTabs .box-content h4 {
                font-size: 16px;
                font-weight: 700;
                text-align: left;
                line-height: 1.3;
                color: rgba(25, 25, 25, 1);
            }

            .modal-dialog .sub-close .btn-secondary {
                background-color: #1D1D1B !important;
                color: #fff;
                font-weight: 500;
            }
        </style>

    </div>


    <div class='box-wrp'>

        <div class="set-bloque-1">
            <div class='box-head'>
                <div class='row'>
                    <picture>
                        <source media="(min-width: 768px)" srcset="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-09-2023/ssv_banners_1600x400_d.png">
                        <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2023/piezas_graficas_semana_de_la_seguridad_vial_2023_banners_490x220.png" alt="Encabezado - Semana de la seguridad víal">
                    </picture>
                </div>
            </div>

            <div class="box-description">
                <p>La Semana de la Seguridad Vial es un espacio que convoca a expertos y líderes mundiales en materia de seguridad vial, e invita a la ciudadanía a participar en diferentes actividades gratuitas para aprender sobre la importancia de una movilidad más segura. La Secretaría Distrital de Movilidad de Bogotá, con el apoyo de la Iniciativa Bloomberg para la Seguridad Vial Mundial (BIGRS), lidera este evento para visibilizar la seguridad vial como un asunto de salud pública.</p>
                <p>Este año, en su decimoséptima versión, <strong>la Semana de la Seguridad Vial, bajo la premisa de la campaña ‘No más muertes en las vías’,</strong> busca generar conciencia sobre los principales factores de riesgo en la vía, a través de diferentes escenarios para promover conductas seguras como:</p>
                <ul>
                    <li>No exceder los límites de velocidad</li>
                    <li>Respetar las normas de tránsito</li>
                    <li>Ser tolerante con los demás actores viales</li>
                    <li>Asumir conductas responsables en las vías</li>
                    <li>Conocer las diferentes acciones estratégicas que desarrolla la Administración Distrital para salvar vidas en el tránsito.</li>

                </ul>
            </div>
            <style>
                .box-wrp .box-description {
                    margin-top: 20px;
                    padding: 15px;

                }

                .box-wrp .box-description p {
                    text-align: justify;

                }

                .box-wrp .box-description a {
                    color: #0645AD !important;
                }

                .ref-redes {
                    font-weight: 700 !important;
                }
            </style>

            <div class="box-video">
                <div class='video'>
                    <div class='embed-responsive embed-responsive-16by9'>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/5NxDkCt9d0E" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>

            <div class="box-description">
                <p><strong>Entre el 2 y el 7 de octubre,</strong> Bogotá es protagonista como una ciudad pionera en la implementación de acciones y estrategias encaminadas a reducir el número de víctimas por siniestros viales, esto, a través de actividades en vía en las que los ciudadanos serán los protagonistas.</p>
                <p>Además, el XVII Seminario Internacional de Seguridad Vial, contará con <strong>más de 35 expertos de 6 países,</strong> quienes discutirán sobre temas vitales para construir un sistema de movilidad más seguro, como la planeación de una nueva movilidad, el rol de la seguridad vial en las ciudades y los aprendizajes que ha dejado la transformación de la movilidad a nivel mundial durante los últimos años.</p>
                <p>Estos conversatorios serán transmitidos en tiempo real y las actividades en vía cuentan con cubrimiento a través de las redes sociales de la Secretaría de Movilidad: <a class="ref-redes" href="https://twitter.com/SectorMovilidad" target="_blank" rel="noopener noreferrer">X,</a> <a class="ref-redes" href="https://www.facebook.com/secretariamovilidadbogota" target="_blank" rel="noopener noreferrer">Facebook,</a> <a class="ref-redes" href="https://www.youtube.com/@secretariamovilidad" target="_blank" rel="noopener noreferrer">YouTube</a> y <a class="ref-redes" href="https://www.linkedin.com/company/sec-distrital-de-movilidad/" target="_blank" rel="noopener noreferrer">LinkedIn.</a></p>
                <p><strong>Inscríbete para participar de manera presencial en los diferentes paneles del XVII Seminario Internacional de Seguridad Vial.</strong></p>
            </div>

            <a href="https://forms.gle/GhjhNcNbsxNrSN9t5" target="_blank" rel="noopener noreferrer">
                <div class="boton-ppal">
                    <div class='imagen-inscripcion zoom'>
                        <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/02-10-2023/inscripcion.png' alt='banner animado inscripciones' title='banner animado inscripciones'>
                    </div>
                </div>
            </a>
        </div>

        <div class="box-verticalTabs">
            <div class="titulo">
                <h3>¡Prográmate!</h3>
            </div>
            <!-- Navigation Buttons -->
            <div class="botones">

                <ul class="nav nav-pills nav-stacked" id="myTabs">
                    <li class="active"><a href="#dia1" data-toggle="pill">Lunes 2 de octubre</a></li>
                    <li><a href="#dia2" data-toggle="pill">Martes 3 de octubre</a></li>
                    <li><a href="#dia3" data-toggle="pill">Miércoles 4 de octubre</a></li>
                    <li><a href="#dia4" data-toggle="pill">Jueves 5 de octubre</a></li>
                    <li><a href="#dia5" data-toggle="pill">Viernes 6 de octubre</a></li>
                    <li><a href="#dia6" data-toggle="pill">Sábado 7 de octubre</a></li>
                </ul>
            </div>

            <!-- Content -->
            <div class="contenido">
                <div class="tab-content">

                    <!-- dia 1  -->
                    <div class="tab-pane in active" id="dia1">
                        <div class="box-content">

                            <!-- collapse_dia1 -->
                            <div class='panel-group' id='accordion_dia1' role='tablist ' aria-multiselectable='true'>

                                <!-- collapse dia1_1 -->
                                <div class='panel panel-default'>
                                    <div class='panel-heading' role='tab' id='heading_dia1_1'>
                                        <h4 class='panel-title'>
                                            <a role='button' data-toggle='collapse' data-parent='#accordion_dia1_1' href='#collapse_dia1_1' aria-expanded='false' aria-controls='collapse_dia1_1'>
                                                Lanzamiento Punto Satélite de la XVII Semana de la Seguridad Vial

                                            </a>
                                        </h4>
                                    </div>
                                    <div id='collapse_dia1_1' class='panel-collapse collapse in' role='tabpanel' aria-labelledby='heading_dia1_1' aria-expanded='false'>
                                        <div class='panel-body'>
                                            <div class='box-dia1_1'>
                                                <dl>
                                                    <dt>Hora:</dt>
                                                    <dd>7:00 a.m. a 8:00 a.m.</dd>
                                                </dl>
                                                <dl>
                                                    <dt>Lugar:</dt>
                                                    <dd>Bulevar del Museo Nacional</dd>
                                                    <dd>Carrera 7 entre Calle 28 y Calle 30</dd>
                                                </dl>
                                                <p>Como evento inaugural de la Semana de Seguridad Vial, se realizará el lanzamiento del punto satélite, un espacio permanente dedicado a la ciudadanía para entender el rol de los diferentes actores de la vía a través de actividades pedagógicas, simuladores de conducción y charlas.</p>
                                                <dl>
                                                    <dd>
                                                        <strong>Contará con la presencia de:</strong>
                                                    </dd>
                                                    <dd>
                                                        <ul class="list-unstyled">

                                                            <a data-toggle="modal" data-target="#modal_DeyaniraAvila">
                                                                <li><strong>Deyanira Ávila</strong><br>Secretaria de Movilidad de Bogotá</li>
                                                            </a>
                                                            <a data-toggle="modal" data-target="#modal_JonasRomo">
                                                                <li><strong>Jonás Romo</strong><br>Director de Salud Pública de LATAM de Vital Strategies</li>
                                                            </a>
                                                            <a data-toggle="modal" data-target="#modal_MaryBottagisio">
                                                                <li><strong>Mary Botagissio</strong><br>Fundadora y directora de la Liga Contra la Violencia Vial</li>
                                                            </a>
                                                            <a data-toggle="modal" data-target="#modal_GinaTambini">
                                                                <li><strong>Gina Tambini</strong><br>Representante de la OPS/OMS Colombia</li>
                                                            </a>

                                                        </ul>
                                                    </dd>
                                                </dl>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <!-- collapse dia1_2 -->
                                <div class='panel panel-default'>
                                    <div class='panel-heading' role='tab' id='heading_dia1_2'>
                                        <h4 class='panel-title'>
                                            <a role='button' data-toggle='collapse' data-parent='#accordion_dia1' href='#collapse_dia1_2' aria-expanded='false' aria-controls='collapse_dia1_2'>
                                                <small>2 y 3 de octubre</small><br>Feria de innovación y tecnología en seguridad vial
                                            </a>
                                        </h4>
                                    </div>
                                    <div id='collapse_dia1_2' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_dia1_2' aria-expanded='false'>
                                        <div class='panel-body'>
                                            <div class='box-dia1_2'>
                                                <dl>
                                                    <dt>Hora:</dt>
                                                    <dl>
                                                    <dt>Lunes</dt>
                                                    <dd>8:00 a.m. a 5:00 p.m.</dd>
                                                    <dt>Martes</dt>
                                                    <dd>8:00 a.m. a 1:00 p.m.</dd>
                                                    </dl>
                                                </dl>
                                                <dl>
                                                    <dt>Lugar:</dt>
                                                    <dd>Hall principal Cinemateca de Bogotá</dd>
                                                    <dd>Carrera 3 # 19-10</dd>
                                                </dl>
                                                <p>Este es un espacio adjunto al Seminario Internacional de Seguridad Vial. Allí los asistentes podrán conocer de primera mano diversas soluciones basadas en tecnología e innovación para la gestión de la seguridad vial, la mitigación de riesgos o de la gravedad de las consecuencias de los siniestros viales cuando estos ocurren. Algunas de estas soluciones incluyen funcionalidades asociadas a la telemática, la analítica de video y datos, dispositivos para la predicción y gestión de riesgos como la fatiga y la velocidad, y elementos de protección para usuarios vulnerables (peatón, ciclistas y motociclista).</p>
                                                <dl>
                                                    <dt>Participantes:</dt>
                                                    <dd>Emprendedores y empresarios con dispositivos y estrategias de seguridad vial.</dd>
                                                </dl>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- collapse dia1_3 -->
                                <div class='panel panel-default'>
                                    <div class='panel-heading' role='tab' id='heading_dia1_3'>
                                        <h4 class='panel-title'>
                                            <a role='button' data-toggle='collapse' data-parent='#accordion_dia1' href='#collapse_dia1_3' aria-expanded='false' aria-controls='collapse_dia1_3'>
                                                <small>Panel - XVII Seminario Internacional de Seguridad Vial </small><br>Lanzamiento del libro digital ‘Soluciones innovadoras y uso de tecnología para la seguridad vial’
                                            </a>
                                        </h4>
                                    </div>
                                    <div id='collapse_dia1_3' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_dia1_3' aria-expanded='false'>
                                        <div class='panel-body'>
                                            <div class='box-dia1_3'>
                                                <dl>
                                                    <dt>Hora:</dt>
                                                    <dd>8:00 a.m. a 9:00 a.m.</dd>
                                                </dl>
                                                <dl>
                                                    <dt>Lugar:</dt>
                                                    <dd>Cinemateca de Bogotá</dd>
                                                    <dd>Carrera 3 # 19-10</dd>
                                                </dl>
                                                <p>Para dar inicio al Seminario Internacional se hará el Lanzamiento del libro digital ‘Soluciones innovadoras y uso de tecnología para la seguridad vial’. En este espacio la Secretaria de Movilidad, Deyanira Ávila, presentará la compilación de innovaciones y emprendimientos que buscan hacer la movilidad más segura.</p>
                                                <dl>
                                                    <dd>
                                                        <strong>Panelistas:</strong>
                                                    </dd>
                                                    <dd>
                                                        <ul class="list-unstyled">

                                                            <a data-toggle="modal" data-target="#modal_OrlandoCely">
                                                                <li><strong>Orlando Santiago Cely</strong><br>Gerente General - Transmilenio</li>
                                                            </a>
                                                            <a data-toggle="modal" data-target="#modal_MaryBottagisio">
                                                                <li><strong>Mary Botagissio</strong><br>Fundadora y Directora - Liga contra la Violencia Vial</li>
                                                            </a>
                                                            <a data-toggle="modal" data-target="#modal_DilsonRomero">
                                                                <li><strong>Dilson Romero</strong><br>Jefe de la Oficina de Seguridad Vial - SDM</li>
                                                            </a>
                                                        </ul>
                                                    </dd>
                                                    <a href="https://forms.gle/GhjhNcNbsxNrSN9t5">
                                                        <div class='imagen-inscripcion zoom'>
                                                            <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/02-10-2023/inscripcion.png' alt='banner animado inscripciones' title='banner animado inscripciones'>
                                                        </div>
                                                    </a>
                                                    <a href="https://www.facebook.com/secretariamovilidadbogota" target="_blank" rel="noopener noreferrer">
                                                        <div class='imagen-transmision zoom'>
                                                            <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/02-10-2023/transmision.png' alt='transmisión en vivo' title='transmisión en vivo'>
                                                        </div>
                                                    </a>
                                                </dl>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- collapse dia1_4 -->
                                <div class='panel panel-default'>
                                    <div class='panel-heading' role='tab' id='heading_dia1_4'>
                                        <h4 class='panel-title'>
                                            <a role='button' data-toggle='collapse' data-parent='#accordion_dia1' href='#collapse_dia1_4' aria-expanded='false' aria-controls='collapse_dia1_4'>
                                                <small>Panel - XVII Seminario Internacional de Seguridad Vial </small><br>Gobiernos que salvan vidas: avances de la gobernanza y leyes en seguridad vial en Latinoamérica
                                            </a>
                                        </h4>
                                    </div>
                                    <div id='collapse_dia1_4' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_dia1_4' aria-expanded='false'>
                                        <div class='panel-body'>
                                            <div class='box-dia1_4'>
                                                <dl>
                                                    <dt>Hora:</dt>
                                                    <dd>9:00 a.m. a 10:30 a.m.</dd>
                                                </dl>
                                                <dl>
                                                    <dt>Lugar:</dt>
                                                    <dd>Cinemateca de Bogotá</dd>
                                                    <dd>Carrera 3 # 19-10</dd>
                                                </dl>
                                                <p>Estrategias integrales de seguridad vial requieren de un marco normativo que evite o mitigue los posibles riesgos para todos los usuarios del sistema de movilidad y que a su vez prioricen este tema en la agenda política. Así mismo, las ciudades requieren de instrumentos de planeación que se conviertan en hojas de ruta que determinan el desarrollo de una movilidad segura.</p>
                                                <p>En este espacio, representantes del legislativo, sociedad civil y entidades del sector transporte compartirán su experiencia en el apoyo, desarrollo e implementación de leyes y planes que buscan salvar vidas en el tránsito.</p>
                                                <dl>
                                                    <dd>
                                                        <strong>Panelistas:</strong>
                                                    </dd>
                                                    <dd>
                                                        <ul class="list-unstyled">

                                                            <a data-toggle="modal" data-target="#modal_GemaGranados">
                                                                <li><strong>Gema Granados</strong><br>Representante en Colombia - GHAI</li>
                                                            </a>
                                                            <a data-toggle="modal" data-target="#modal_AlejandraLeal">
                                                                <li><strong>Alejandra Leal</strong><br>Coordinadora de la Coalición Movilidad Segura de México</li>
                                                            </a>
                                                            <a data-toggle="modal" data-target="#modal_ArielAvila">
                                                                <li><strong>Ariel Ávila</strong><br>Senador de la República</li>
                                                            </a>
                                                            <a data-toggle="modal" data-target="#modal_MonicaPachon">
                                                                <li><strong>Mónica Pachón</strong><br>Profesora Asociada - Universidad de los Andes</li>
                                                            </a>
                                                            <a data-toggle="modal" data-target="#modal_MariaTabares">
                                                                <li><strong>Maríantonia Tabares Pulgarín</strong><br>Directora - ANSV</li>
                                                            </a>
                                                            <a data-toggle="modal" data-target="#modal_DeyaniraAvila">
                                                                <li><strong>Deyanira Ávila</strong><br>Secretaria de Movilidad de Bogotá</li>
                                                            </a>

                                                        </ul>
                                                    </dd>
                                                </dl>
                                                <a href="https://forms.gle/GhjhNcNbsxNrSN9t5">
                                                    <div class='imagen-inscripcion zoom'>
                                                        <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/02-10-2023/inscripcion.png' alt='banner animado inscripciones' title='banner animado inscripciones'>
                                                    </div>
                                                </a>
                                                <a href="https://www.facebook.com/secretariamovilidadbogota" target="_blank" rel="noopener noreferrer">
                                                    <div class='imagen-transmision zoom'>
                                                        <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/02-10-2023/transmision.png' alt='transmisión en vivo' title='transmisión en vivo'>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- collapse dia1_5 -->
                                <div class='panel panel-default'>
                                    <div class='panel-heading' role='tab' id='heading_dia1_5'>
                                        <h4 class='panel-title'>
                                            <a role='button' data-toggle='collapse' data-parent='#accordion_dia1' href='#collapse_dia1_5' aria-expanded='false' aria-controls='collapse_dia1_5'>
                                                <small>Panel - XVII Seminario Internacional de Seguridad Vial </small><br>Ciclorrutas seguras mediante la tecnología y la infraestructura
                                            </a>
                                        </h4>
                                    </div>
                                    <div id='collapse_dia1_5' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_dia1_5' aria-expanded='false'>
                                        <div class='panel-body'>
                                            <div class='box-dia1_5'>
                                                <dl>
                                                    <dt>Hora:</dt>
                                                    <dd>9:00 a.m. a 10:30 a.m.</dd>
                                                </dl>
                                                <dl>
                                                    <dt>Lugar:</dt>
                                                    <dd>Cinemateca de Bogotá</dd>
                                                    <dd>Carrera 3 # 19-10</dd>
                                                </dl>
                                                <p>Bogotá es una ciudad que ha impulsado el uso de la bicicleta como un medio de transporte sostenible y seguro, logrando crear la red más extensa de ciclorrutas de América Latina, con más de 620 km.</p>
                                                <p>Durante 2023, con el apoyo del programa CycleRap, la ciudad analizó la seguridad vial de 50 km de su infraestructura como parte de un trabajo continuo para mejorar las condiciones de circulación de los ciclistas. En este panel se conocerán los resultados de este análisis y se compartirán experiencias y alternativas para seguir trabajando en este eje de la movilidad de Bogotá.</p>
                                                <dl>
                                                    <dd>
                                                        <strong>Panelistas:</strong>
                                                    </dd>
                                                    <dd>
                                                        <ul class="list-unstyled">

                                                            <a data-toggle="modal" data-target="#modal_EdgarZamora">
                                                                <li><strong>Edgar Zamora</strong><br>Líder Regional de viajes más seguros - iRAP</li>
                                                            </a>
                                                            <a data-toggle="modal" data-target="#modal_LinaFuentes">
                                                                <li><strong>Lina Fuentes</strong><br>Portavoz en Colombia - Fundación MAPFRE</li>
                                                            </a>
                                                            <a data-toggle="modal" data-target="#modal_IvanLanza">
                                                                <li><strong>Iván de la Lanza</strong><br>Gerente Regional para las Américas GDCI</li>
                                                            </a>
                                                            <a data-toggle="modal" data-target="#modal_OscarVelasquez">
                                                                <li><strong>Óscar Velásquez Bobadilla</strong><br>Subdirector de la Bicicleta y el Peatón - SDM</li>
                                                            </a>
                                                        </ul>
                                                    </dd>
                                                </dl>
                                                <a href="https://forms.gle/GhjhNcNbsxNrSN9t5">
                                                    <div class='imagen-inscripcion zoom'>
                                                        <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/02-10-2023/inscripcion.png' alt='banner animado inscripciones' title='banner animado inscripciones'>
                                                    </div>
                                                </a>
                                                <a href="https://www.facebook.com/secretariamovilidadbogota" target="_blank" rel="noopener noreferrer">
                                                    <div class='imagen-transmision zoom'>
                                                        <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/02-10-2023/transmision.png' alt='transmisión en vivo' title='transmisión en vivo'>
                                                    </div>
                                                </a>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- collapse dia1_6 -->
                                <div class='panel panel-default'>
                                    <div class='panel-heading' role='tab' id='heading_dia1_6'>
                                        <h4 class='panel-title'>
                                            <a role='button' data-toggle='collapse' data-parent='#accordion_dia1' href='#collapse_dia1_6' aria-expanded='false' aria-controls='collapse_dia1_6'>
                                                <small>Panel - XVII Seminario Internacional de Seguridad Vial </small><br>Casos de éxito y avances en en control electrónico para la seguridad vial
                                            </a>
                                        </h4>
                                    </div>
                                    <div id='collapse_dia1_6' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_dia1_6' aria-expanded='false'>
                                        <div class='panel-body'>
                                            <div class='box-dia1_6'>
                                                <dl>
                                                    <dt>Hora:</dt>
                                                    <dd>12:00 m. a 1:00 p.m.</dd>
                                                </dl>
                                                <dl>
                                                    <dt>Lugar:</dt>
                                                    <dd>Cinemateca de Bogotá</dd>
                                                    <dd>Carrera 3 # 19-10</dd>
                                                </dl>
                                                <p>En este panel se expondrá y discutirá cómo los dispositivos electrónicos y de control representan una herramienta para salvar vidas, y como la implementación de los Sistemas Inteligentes de Transporte en el país permitirán mayor eficiencia en el control del tránsito en las ciudades colombianas.</p>

                                                <dl>
                                                    <dd>
                                                        <strong>Panelistas:</strong>
                                                    </dd>
                                                    <dd>
                                                        <ul class="list-unstyled">
                                                            <a data-toggle="modal" data-target="#modal_AlvaroNogueroles">
                                                                <li><strong>Alvaro Nogueroles</strong><br>Director para LATAM de Sensys Gatso Group</li>
                                                            </a>
                                                            <a data-toggle="modal" data-target="#modal_PauloRincon">
                                                                <li><strong>Paulo Rincón Garay</strong><br>Subsecretario de Gestión Jurídica - SDM</li>
                                                            </a>
                                                            <a data-toggle="modal" data-target="#modal_LuisZambrano">
                                                                <li><strong>Luis Alejandro Zambrano</strong><br>Dirección de Transporte y Tránsito del Ministerio de Transporte</li>
                                                            </a>
                                                        </ul>
                                                    </dd>
                                                </dl>
                                                <a href="https://forms.gle/GhjhNcNbsxNrSN9t5">
                                                    <div class='imagen-inscripcion zoom'>
                                                        <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/02-10-2023/inscripcion.png' alt='banner animado inscripciones' title='banner animado inscripciones'>
                                                    </div>
                                                </a>
                                                <a href="https://www.facebook.com/secretariamovilidadbogota" target="_blank" rel="noopener noreferrer">
                                                    <div class='imagen-transmision zoom'>
                                                        <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/02-10-2023/transmision.png' alt='transmisión en vivo' title='transmisión en vivo'>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- collapse dia1_7 -->
                                <div class='panel panel-default'>
                                    <div class='panel-heading' role='tab' id='heading_dia1_7'>
                                        <h4 class='panel-title'>
                                            <a role='button' data-toggle='collapse' data-parent='#accordion_dia1' href='#collapse_dia1_7' aria-expanded='false' aria-controls='collapse_dia1_7'>
                                                <small>Panel - XVII Seminario Internacional de Seguridad Vial </small><br>Vehículos seguros: a la vanguardia de la seguridad vehicular
                                            </a>
                                        </h4>
                                    </div>
                                    <div id='collapse_dia1_7' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_dia1_7' aria-expanded='false'>
                                        <div class='panel-body'>
                                            <div class='box-dia1_7'>
                                                <dl>
                                                    <dt>Hora:</dt>
                                                    <dd>2:00 p.m. a 3:00 p.m.</dd>
                                                </dl>
                                                <dl>
                                                    <dt>Lugar:</dt>
                                                    <dd>Cinemateca de Bogotá</dd>
                                                    <dd>Carrera 3 # 19-10</dd>
                                                </dl>
                                                <p>Desde 2022, Colombia cuenta con nuevas disposiciones normativas que orientan la política pública de seguridad vial con enfoque seguro. Este tiene en cuenta la vulnerabilidad de las personas a las lesiones graves causadas por siniestros viales y reconoce que el sistema se debería concebir para tolerar el error humano. Uno de los factores determinantes es la seguridad vehicular para la protección de la vida. En este espacio, expertos del sector automotriz y del gobierno nacional discutirán las reglas y normas técnicas en el diseño, fabricación e importación de vehículos para la integridad personal de los conductores y pasajeros.</p>
                                                <dl>
                                                    <dd>
                                                        <strong>Panelistas:</strong>
                                                    </dd>
                                                    <dd>
                                                        <ul class="list-unstyled">
                                                            <a data-toggle="modal" data-target="#modal_DarioHidalgo">
                                                                <li><strong>Dario Hidalgo</strong><br>Docente Facultad de Ingeniería - Universidad Javeriana</li>
                                                            </a>
                                                            <a data-toggle="modal" data-target="#modal_WilliamVallejo">
                                                                <li><strong>William Vallejo</strong><br>Director de Infraestructura y Vehículos - ANSV</li>
                                                            </a>
                                                            <a data-toggle="modal" data-target="#modal_KarolGarcia">
                                                                <li><strong>Karol Garcia</strong><br> Directora Cámara de la Industria Automotriz - ANDI</li>
                                                            </a>
                                                            <a data-toggle="modal" data-target="#modal_OscarGomez">
                                                                <li><strong>Óscar Julián Gómez</strong><br>Subsecretario de Política de Movilidad - SDM</li>
                                                            </a>
                                                            <a data-toggle="modal" data-target="#modal_JhonMontoya">
                                                                <li><strong>Jhon Montoya</strong><br>Coord. Comercial de Scania en Colombia</li>
                                                            </a>
                                                        </ul>
                                                    </dd>
                                                </dl>
                                                <a href="https://forms.gle/GhjhNcNbsxNrSN9t5">
                                                    <div class='imagen-inscripcion zoom'>
                                                        <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/02-10-2023/inscripcion.png' alt='banner animado inscripciones' title='banner animado inscripciones'>
                                                    </div>
                                                </a>
                                                <a href="https://www.facebook.com/secretariamovilidadbogota" target="_blank" rel="noopener noreferrer">
                                                    <div class='imagen-transmision zoom'>
                                                        <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/02-10-2023/transmision.png' alt='transmisión en vivo' title='transmisión en vivo'>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- collapse dia1_8 -->
                                <div class='panel panel-default'>
                                    <div class='panel-heading' role='tab' id='heading_dia1_8'>
                                        <h4 class='panel-title'>
                                            <a role='button' data-toggle='collapse' data-parent='#accordion_dia1' href='#collapse_dia1_8' aria-expanded='false' aria-controls='collapse_dia1_8'>
                                                <small>Panel - XVII Seminario Internacional de Seguridad Vial </small><br>Embriaguez no alcohólica: una primera mirada a un riesgo creciente

                                            </a>
                                        </h4>
                                    </div>
                                    <div id='collapse_dia1_8' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_dia1_8' aria-expanded='false'>
                                        <div class='panel-body'>
                                            <div class='box-dia1_8'>
                                                <dl>
                                                    <dt>Hora:</dt>
                                                    <dd>3:30 p.m. a 5:30 p.m.</dd>
                                                </dl>
                                                <dl>
                                                    <dt>Lugar:</dt>
                                                    <dd>Cinemateca de Bogotá</dd>
                                                    <dd>Carrera 3 # 19-10</dd>
                                                </dl>
                                                <p>La región de las Américas actualmente ocupa el primer lugar en muertes en eventos de tránsito asociadas al consumo de cannabis y cocaína. En Colombia, el porcentaje de conductores con presencia de sustancias supera el 20%, del cual, al menos el 22% consume más de una sustancia, aumentando así el riesgo al volante. El THC es la sustancia detectada con mayor frecuencia entre los conductores, combinada con una o dos sustancias adicionales.</p>
                                                <p>La Liga contra la Violencia Vial realizó un estudio sobre el consumo de sustancias psicoactivas y la conducción, en el cual mostró alarmantes datos sobre lo que sucede con este tipo de conductores en Bogotá. En este conversatorio, se busca hacer un análisis situacional de lo que implica la conducción bajo el efecto de sustancias, mostrar a los asistentes la situación crítica que tenemos hoy en día y cómo a largo plazo se va a convertir en uno de los principales riesgos de siniestralidad. Este análisis se hará a la luz de la normatividad vigente sobre el tema para poder puntualizar y definir los retos a los que como ciudad nos enfrentamos frente a este riesgo creciente.</p>
                                                <dl>
                                                    <dd>
                                                        <strong>Panelistas:</strong>
                                                    </dd>
                                                    <dd>
                                                        <ul class="list-unstyled">
                                                            <a data-toggle="modal" data-target="#modal_DanielaCastano">
                                                                <li><strong>Daniela Castaño</strong><br>Universidad de Antioquia</li>
                                                            </a>
                                                            <a data-toggle="modal" data-target="#modal_AngelaGomez">
                                                                <li><strong>Angela Gómez</strong><br>Liga Contra la Violencia Vial</li>
                                                            </a>
                                                            <a data-toggle="modal" data-target="#modal_WilsonBarrios">
                                                                <li><strong>Coronel Wilson Barrios</strong><br>Jefe seccional de Tránsito y Transportes de Bogotá</li>
                                                            </a>
                                                            <a data-toggle="modal" data-target="#modal_OmarGonzalez">
                                                                <li><strong>Omar González</strong><br>Coordinador de Control y Vigilancia - BIGRS Colombia</li>
                                                            </a>
                                                            <a data-toggle="modal" data-target="#modal_DonaldFulbright">
                                                                <li><strong>Donald Fulbright</strong><br>Consultor - Asociación Internacional de Jefes de Policía (IACP)</li>
                                                            </a>
                                                            <a data-toggle="modal" data-target="#modal_JhonGonzalez">
                                                                <li><strong>Jhon Alexander González</strong><br>Subsecretario de Gestión de la Movilidad - SDM</li>
                                                            </a>
                                                        </ul>
                                                    </dd>
                                                </dl>
                                                <a href="https://forms.gle/GhjhNcNbsxNrSN9t5">
                                                    <div class='imagen-inscripcion zoom'>
                                                        <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/02-10-2023/inscripcion.png' alt='banner animado inscripciones' title='banner animado inscripciones'>
                                                    </div>
                                                </a>
                                                <a href="https://www.facebook.com/secretariamovilidadbogota" target="_blank" rel="noopener noreferrer">
                                                    <div class='imagen-transmision zoom'>
                                                        <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/02-10-2023/transmision.png' alt='transmisión en vivo' title='transmisión en vivo'>
                                                    </div>
                                                </a>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- /#fin _dia1 -->



                        </div>
                    </div>

                    <!-- día 2  -->
                    <div class="tab-pane" id="dia2">
                        <div class="box-content">

                            <!-- collapse_dia2 -->
                            <div class='panel-group' id='accordion_dia2' role='tablist ' aria-multiselectable='true'>

                                <!-- collapse dia2_1 -->
                                <div class='panel panel-default'>
                                    <div class='panel-heading' role='tab' id='heading_dia2_1'>
                                        <h4 class='panel-title'>
                                            <a role='button' data-toggle='collapse' data-parent='#accordion_dia2' href='#collapse_dia2_1' aria-expanded='false' aria-controls='collapse_dia2_1'>
                                                <small>Panel</small><br>‘Reencontrémonos en la vía’: el trabajo del Distrito con el Centro de Orientación para Víctimas de Siniestros Viales
                                            </a>
                                        </h4>
                                    </div>
                                    <div id='collapse_dia2_1' class='panel-collapse collapse in' role='tabpanel' aria-labelledby='heading_dia2_1' aria-expanded='false'>
                                        <div class='panel-body'>
                                            <div class='box-dia2_1'>
                                                <dl>
                                                    <dt>Hora:</dt>
                                                    <dd>8:00 a.m. a 9:30 a.m.</dd>
                                                </dl>
                                                <dl>
                                                    <dt>Lugar:</dt>
                                                    <dd>Cinemateca de Bogotá</dd>
                                                    <dd>Carrera 3 # 19-10</dd>
                                                </dl>
                                                <p>Este panel busca ampliar la discusión sobre la importancia de la atención a las víctimas de siniestros viales y cómo Bogotá es referente en América Latina con ORVI, el <a href="https://www.movilidadbogota.gov.co/web/ORVI">Centro de Orientación para Víctimas de Siniestros Viales.</a></p>
                                                <p>A través de una conversación reparadora y de reconocimiento de los involucrados en un siniestro vial, se busca evidenciar cómo un incidente de tránsito trae diferentes consecuencias, como la pérdida del trabajo, dificultades de reinserción social, problemas psicológicos y jurídicos, además de múltiples dificultades que deben enfrentar los involucrados en el siniestro vial.</p>
                                                <dl>
                                                    <dd>
                                                        <strong>Panelistas:</strong>
                                                    </dd>
                                                    <dd>
                                                        <ul class="list-unstyled">
                                                            <a data-toggle="modal" data-target="#modal_AdrianaIza">
                                                                <li><strong>Adriana Iza</strong><br>Subsecretaria de Servicios a la Ciudadanía - SDM</li>
                                                            </a>
                                                            <a data-toggle="modal" data-target="#modal_IlseGonzalez">
                                                                <li><strong>Ilse González</strong><br>Dir. Delegación Mexicana Observatorio de Criminología Vial</li>
                                                            </a>
                                                            <a data-toggle="modal" data-target="#modal_AngelaRuiz">
                                                                <li><strong>Luz Ángela Ruiz</strong><br>Psicológica de ORVI</li>
                                                            </a>
                                                            <li><strong>Víctimas de siniestros viales.</strong></li>
                                                        </ul>
                                                    </dd>
                                                    <a href="https://forms.gle/GhjhNcNbsxNrSN9t5">
                                                        <div class='imagen-inscripcion zoom'>
                                                            <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/02-10-2023/inscripcion.png' alt='banner animado inscripciones' title='banner animado inscripciones'>
                                                        </div>
                                                    </a>
                                                    <a href="https://www.facebook.com/secretariamovilidadbogota" target="_blank" rel="noopener noreferrer">
                                                        <div class='imagen-transmision zoom'>
                                                            <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/02-10-2023/transmision.png' alt='transmisión en vivo' title='transmisión en vivo'>
                                                        </div>
                                                    </a>
                                                </dl>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- collapse dia2_2 -->
                                <div class='panel panel-default'>
                                    <div class='panel-heading' role='tab' id='heading_dia2_2'>
                                        <h4 class='panel-title'>
                                            <a role='button' data-toggle='collapse' data-parent='#accordion_dia2' href='#collapse_dia2_2' aria-expanded='false' aria-controls='collapse_dia2_2'>
                                                <small>Panel</small><br>Los motociclistas y el exceso de velocidad: cómo abordar este factor de riesgo con las principales víctimas de siniestros en las vías
                                            </a>
                                        </h4>
                                    </div>
                                    <div id='collapse_dia2_2' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_dia2_2' aria-expanded='false'>
                                        <div class='panel-body'>
                                            <div class='box-dia2_2'>
                                                <dl>
                                                    <dt>Hora:</dt>
                                                    <dd>9:00 a.m. a 10:30 a.m.</dd>
                                                </dl>
                                                <dl>
                                                    <dt>Lugar:</dt>
                                                    <dd>Cinemateca de Bogotá</dd>
                                                    <dd>Carrera 3 # 19-10</dd>
                                                </dl>
                                                <p>El aumento de las muertes de motociclistas en siniestros viales es un fenómeno en aumento que las autoridades no pueden pasar por alto. Desde la pandemia, las fatalidades de estos actores viales se han incrementado en Bogotá y otras ciudades de la región.</p>
                                                <p>De acuerdo con los expertos, el exceso de velocidad prevalece como el factor que más influye en la ocurrencia de siniestros fatales. En este espacio, representantes de gobiernos locales y expertos en comunicación, control e infraestructura, analizan el panorama actual de la seguridad vial de los motociclistas en la región y compartirán experiencias para poder mitigar los efectos del exceso de velocidad en estos usuarios.</p>
                                                <dl>
                                                    <dd>
                                                        <strong>Panelistas:</strong>
                                                    </dd>
                                                    <dd>
                                                        <ul class="list-unstyled">
                                                            <a data-toggle="modal" data-target="#modal_MariaCardenas">
                                                                <li><strong>María Fernanda Cárdenas</strong><br>Asesora Técnica Regional - Vital Strategies</li>
                                                            </a>
                                                            <a data-toggle="modal" data-target="#modal_SegundoLopez">
                                                                <li><strong>Segundo López</strong><br>Coordinador Internacional de Datos - WRI</li>
                                                            </a>
                                                            <a data-toggle="modal" data-target="#modal_JamesHutcherson">
                                                                <li><strong>Teniente Coronel James Hutcherson</strong><br>Consultor de la Asociación Internacional de Jefes de Policía</li>
                                                            </a>
                                                            <a data-toggle="modal" data-target="#modal_ErnestoVaras">
                                                                <li><strong>Ernesto Varas</strong><br>Dir. Agencia Nacional de Tránsito del Ecuador (ANT)</li>
                                                            </a>
                                                            <a data-toggle="modal" data-target="#modal_TacianaFerreira">
                                                                <li><strong>Taciana Ferreira</strong><br>Presidenta Autoridad de Transporte y Tráfico Urbano de Recife</li>
                                                            </a>
                                                            <a data-toggle="modal" data-target="#modal_DilsonRomero">
                                                                <li><strong>Dilson Javier Romero Velandia</strong><br>Jefe de la Oficina de Seguridad Vial - SDM</li>
                                                            </a>

                                                        </ul>
                                                    </dd>
                                                </dl>
                                                <a href="https://forms.gle/GhjhNcNbsxNrSN9t5">
                                                    <div class='imagen-inscripcion zoom'>
                                                        <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/02-10-2023/inscripcion.png' alt='banner animado inscripciones' title='banner animado inscripciones'>
                                                    </div>
                                                </a>
                                                <a href="https://www.facebook.com/secretariamovilidadbogota" target="_blank" rel="noopener noreferrer">
                                                    <div class='imagen-transmision zoom'>
                                                        <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/02-10-2023/transmision.png' alt='transmisión en vivo' title='transmisión en vivo'>
                                                    </div>
                                                </a>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- collapse dia2_3 -->
                                <div class='panel panel-default'>
                                    <div class='panel-heading' role='tab' id='heading_dia2_3'>
                                        <h4 class='panel-title'>
                                            <a role='button' data-toggle='collapse' data-parent='#accordion_dia2' href='#collapse_dia2_3' aria-expanded='false' aria-controls='collapse_dia2_3'>
                                                <small>Panel</small><br>Ciudades para usuarios vulnerables: movilidad e inclusión
                                            </a>
                                        </h4>
                                    </div>
                                    <div id='collapse_dia2_3' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_dia2_3' aria-expanded='false'>
                                        <div class='panel-body'>
                                            <div class='box-dia2_3'>
                                                <dl>
                                                    <dt>Hora:</dt>
                                                    <dd>11:00 a.m. a 12:00 m.</dd>
                                                </dl>
                                                <dl>
                                                    <dt>Lugar:</dt>
                                                    <dd>Cinemateca de Bogotá</dd>
                                                    <dd>Carrera 3 # 19-10</dd>
                                                </dl>
                                                <p>El desarrollo de ciudades accesibles e incluyentes que promuevan el cumplimiento de los derechos fundamentales, y en especial el derecho a la movilidad, es una prioridad en la política pública, así como, reconocer la heterogeneidad de los seres humanos con sus diversas características físicas, mentales, cognitivas y/o sensoriales.</p>
                                                <p>Este panel busca exponer los diferentes desafíos, enfoques y perspectivas que permitan trabajar hacia la construcción de ciudades seguras que cuenten con medios de transporte accesibles para la ciudadanía, políticas públicas como marco general de desarrollo de planes, programas y proyectos que beneficien la seguridad vial.</p>
                                                <dl>
                                                    <dd>
                                                        <strong>Panelistas:</strong>
                                                    </dd>
                                                    <dd>
                                                        <ul class="list-unstyled">

                                                            <a data-toggle="modal" data-target="#modal_CarolinaAlvarez">
                                                                <li><strong>Carolina Álvarez Valencia</strong><br>Coordinadora de Infraestructura Iniciativa Bloomberg para la Seguridad Vial</li>
                                                            </a>
                                                            <a data-toggle="modal" data-target="#modal_FernandoPaez">
                                                                <li><strong>Fernando Páez</strong><br>Director Adjunto en Colombia - WRI</li>
                                                            </a>
                                                            <a data-toggle="modal" data-target="#modal_IvanLanza">
                                                                <li><strong>Iván de la Lanza</strong><br>Gerente Regional para las Américas - GDCI</li>
                                                            </a>
                                                            <a data-toggle="modal" data-target="#modal_LizetteMedina">
                                                                <li><strong>Lizette Medina Villalba</strong><br>Dir. Estructuras y Sistemas Territoriales de Secretaria de Planeación de Bogotá</li>
                                                            </a>
                                                            <a data-toggle="modal" data-target="#modal_ValSmith">
                                                                <li><strong>Valerie Smith</strong><br>Directora del Programa de Seguridad Vial - Parachute</li>
                                                            </a>


                                                        </ul>
                                                    </dd>
                                                    <a href="https://forms.gle/GhjhNcNbsxNrSN9t5">
                                                        <div class='imagen-inscripcion zoom'>
                                                            <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/02-10-2023/inscripcion.png' alt='banner animado inscripciones' title='banner animado inscripciones'>
                                                        </div>
                                                    </a>
                                                    <a href="https://www.facebook.com/secretariamovilidadbogota" target="_blank" rel="noopener noreferrer">
                                                        <div class='imagen-transmision zoom'>
                                                            <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/02-10-2023/transmision.png' alt='transmisión en vivo' title='transmisión en vivo'>
                                                        </div>
                                                    </a>
                                                </dl>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- collapse dia2_4 -->
                                <div class='panel panel-default'>
                                    <div class='panel-heading' role='tab' id='heading_dia2_4'>
                                        <h4 class='panel-title'>
                                            <a role='button' data-toggle='collapse' data-parent='#accordion_dia2' href='#collapse_dia2_4' aria-expanded='false' aria-controls='collapse_dia2_4'>
                                                <small>Panel</small><br>La cadena de respuesta Distrital ante siniestros viales
                                            </a>
                                        </h4>
                                    </div>
                                    <div id='collapse_dia2_4' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_dia2_4' aria-expanded='false'>
                                        <div class='panel-body'>
                                            <div class='box-dia2_4'>
                                                <dl>
                                                    <dt>Hora:</dt>
                                                    <dd>12:00 m. a 1:00 p.m.</dd>
                                                </dl>
                                                <dl>
                                                    <dt>Lugar:</dt>
                                                    <dd>Cinemateca de Bogotá</dd>
                                                    <dd>Carrera 3 # 19-10</dd>
                                                </dl>
                                                <p>La armonización de los protocolos definidos en la cadena de reacción para la atención de siniestros viales y su amplia socialización, permite mayor eficiencia en la atención de emergencias, optimizando los recursos disponibles para brindar una atención integral, eficiente y oportuna. En este panel, los principales actores de reacción de ciudad y expertos internacionales discutirán sobre las formas de mejorar la atención en siniestros viales para reducir los efectos en sus víctimas.</p>
                                                <dl>
                                                    <dd>
                                                        <strong>Panelistas:</strong>
                                                    </dd>
                                                    <dd>
                                                        <ul class="list-unstyled">
                                                            <a data-toggle="modal" data-target="#modal_CarlosRamirez">
                                                                <li><strong>Carlos Alberto Ramirez</strong><br>Experto en rescate vehicular - Cuerpo Oficial de Bomberos de Bogotá</li>
                                                            </a>
                                                            <a data-toggle="modal" data-target="#modal_AlejandroGomez">
                                                                <li><strong>Alejandro Gómez López</strong><br>Secretario Distrital de Salud de Bogotá</li>
                                                            </a>
                                                            <a data-toggle="modal" data-target="#modal_GuillermoEscobar">
                                                                <li><strong>Guillermo Escobar Castro</strong><br>Dir. Instituto Distrital de Riesgos y Cambio Climático de Bogotá</li>
                                                            </a>
                                                            <a data-toggle="modal" data-target="#modal_MarioCruz">
                                                                <li><strong>Mario Fernando Cruz</strong><br>Vicepresidente Asociación Colombiana de Empresas de Medicina Integral</li>
                                                            </a>
                                                            <a data-toggle="modal" data-target="#modal_NathalyPatino">
                                                                <li><strong>Nathaly Patiño</strong><br>Directora de Gestión de Tránsito y Control de Tránsito y Transporte - SDM</li>
                                                            </a>
                                                        </ul>
                                                    </dd>
                                                </dl>
                                                <a href="https://forms.gle/GhjhNcNbsxNrSN9t5">
                                                    <div class='imagen-inscripcion zoom'>
                                                        <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/02-10-2023/inscripcion.png' alt='banner animado inscripciones' title='banner animado inscripciones'>
                                                    </div>
                                                </a>
                                                <a href="https://www.facebook.com/secretariamovilidadbogota" target="_blank" rel="noopener noreferrer">
                                                    <div class='imagen-transmision zoom'>
                                                        <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/02-10-2023/transmision.png' alt='transmisión en vivo' title='transmisión en vivo'>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- collapse dia2_6 -->
                                <div class='panel panel-default'>
                                    <div class='panel-heading' role='tab' id='heading_dia2_6'>
                                        <h4 class='panel-title'>
                                            <a role='button' data-toggle='collapse' data-parent='#accordion_dia2' href='#collapse_dia2_6' aria-expanded='false' aria-controls='collapse_dia2_6'>
                                                <small>Actividad en vía</small><br>Jornada de conciencia vial
                                            </a>
                                        </h4>
                                    </div>
                                    <div id='collapse_dia2_6' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_dia2_6' aria-expanded='false'>
                                        <div class='panel-body'>
                                            <div class='box-dia2_6'>
                                                <dl>
                                                    <dt>Hora:</dt>
                                                    <dd>10:00 m. a 3:00 p.m.</dd>
                                                </dl>
                                                <dl>
                                                    <dt>Lugar:</dt>
                                                    <dd>Universidad UDCA</dd>
                                                    <dd>Calle 222 # 55 - 37</dd>
                                                </dl>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- collapse dia2_5 -->
                                <div class='panel panel-default'>
                                    <div class='panel-heading' role='tab' id='heading_dia2_5'>
                                        <h4 class='panel-title'>
                                            <a role='button' data-toggle='collapse' data-parent='#accordion_dia2' href='#collapse_dia2_5' aria-expanded='false' aria-controls='collapse_dia2_5'>
                                                <small>Taller</small><br>Movilidades diferenciales: cómo hacer nuestras ciudades más inclusivas
                                            </a>
                                        </h4>
                                    </div>
                                    <div id='collapse_dia2_5' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_dia2_5' aria-expanded='false'>
                                        <div class='panel-body'>
                                            <div class='box-dia2_5'>
                                                <p>El taller busca orientar sobre la ruptura de paradigmas tradicionales de la movilidad y el diseño de ciudades, la movilidad y de la inclusión como una herramienta de construcción de ciudad; a saber el condicionamiento etáreo, de la discapacidad, de la diversidad.</p>
                                                <p>Mediante el análisis de problemáticas puntuales distribuidas en mesas de actores clave, se abordarán las herramientas que desde la ciudad y la perspectiva de los invitados, permiten alcanzar una gradual implementación y construcción de ciudades accesibles y seguras.</p>
                                                <dl>
                                                    <dt>Hora:</dt>
                                                    <dd>2:00 p.m. a 4:00 p.m.</dd>
                                                </dl>
                                                <dl>
                                                    <dt>Lugar:</dt>
                                                    <dd>Cl 22 #6-27 Auditorio IDU</dd>
                                                </dl>
                                                <a href="https://forms.gle/GhjhNcNbsxNrSN9t5">
                                                    <div class='imagen-inscripcion zoom'>
                                                        <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/02-10-2023/inscripcion.png' alt='banner animado inscripciones' title='banner animado inscripciones'>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- /#fin _dia2 -->

                        </div>
                    </div>

                    <!-- dia 3  -->
                    <div class="tab-pane" id="dia3">
                        <div class="box-content">

                            <!-- collapse_dia3 -->
                            <div class='panel-group' id='accordion_dia3' role='tablist ' aria-multiselectable='true'>

                                <!-- collapse dia3_1 -->
                                <div class='panel panel-default'>
                                    <div class='panel-heading' role='tab' id='heading_dia3_1'>
                                        <h4 class='panel-title'>
                                            <a role='button' data-toggle='collapse' data-parent='#accordion_dia3' href='#collapse_dia3_1' aria-expanded='false' aria-controls='collapse_dia3_1'>
                                                <small>Actividad en vía</small><br>Zona Franca se mueve segura: acción en vía dirigida a conductores y trabajadores de transporte de carga
                                            </a>
                                        </h4>
                                    </div>
                                    <div id='collapse_dia3_1' class='panel-collapse collapse in' role='tabpanel' aria-labelledby='heading_dia3_1' aria-expanded='false'>
                                        <div class='panel-body'>
                                            <div class='box-dia3_1'>
                                                <p>La Secretaría de Movilidad desarrollará una actividad pedagógica con los conductores de vehículos pesados de este importante centro logístico, peatones, ciclistas y motociclistas que trabajan en el transporte de carga de la ciudad, como principales actores que interactúan en la vía. Según las últimas cifras, se ha visto un incremento de víctimas fatales en la interacción de vehículos pesados con los usuarios más vulnerables.</p>
                                                <dl>
                                                    <dt>Hora:</dt>
                                                    <dd>8:00 a.m. a 11:00 a.m.</dd>
                                                </dl>
                                                <dl>
                                                    <dt>Lugar:</dt>
                                                    <dd>Zona Franca de Bogotá</dd>
                                                    <dd>Cra 106 # 15a 25 </dd>
                                                    <dd>Patio ingreso de carga</dd>
                                                    <dd>Fontibón</dd>
                                                </dl>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- collapse dia3_1a -->
                                <div class='panel panel-default'>
                                    <div class='panel-heading' role='tab' id='heading_dia3_1a'>
                                        <h4 class='panel-title'>
                                            <a role='button' data-toggle='collapse' data-parent='#accordion_dia3' href='#collapse_dia3_1a' aria-expanded='false' aria-controls='collapse_dia3_1a'>
                                                <small>Actividad en vía</small><br>Jornada de conciencia vial
                                            </a>
                                        </h4>
                                    </div>
                                    <div id='collapse_dia3_1a' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_dia3_1a' aria-expanded='false'>
                                        <div class='panel-body'>
                                            <div class='box-dia3_1a'>
                                                <dl>
                                                    <dt>Hora:</dt>
                                                    <dd>10:00 - 3:00 p.m.</dd>
                                                </dl>
                                                <dl>
                                                    <dt>Lugar:</dt>
                                                    <dd>Universidad Uniagustiniana Avenida</dd>
                                                    <dd>Carrera 86 # 11b - 95 Bogotá</dd>
                                                    <dd>Localidad de Kennedy</dd>
                                                </dl>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- collapse dia3_2 -->
                                <div class='panel panel-default'>
                                    <div class='panel-heading' role='tab' id='heading_dia3_2'>
                                        <h4 class='panel-title'>
                                            <a role='button' data-toggle='collapse' data-parent='#accordion_dia3' href='#collapse_dia3_2' aria-expanded='false' aria-controls='collapse_dia3_2'>
                                                <small>Evento</small><br>Reconocimiento de buenas prácticas empresariales de la Red de Seguridad Vial
                                            </a>
                                        </h4>
                                    </div>
                                    <div id='collapse_dia3_2' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_dia3_2' aria-expanded='false'>
                                        <div class='panel-body'>
                                            <div class='box-dia3_2'>
                                                <div class="imagen img-reconocimiento">
                                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2023/reconocimiento.png" alt="Asistentes al avento de reconocimiento buenas prácticas empresariales 2022" title="">
                                                </div>
                                                <br>
                                                <p>En este espacio empresarial, la Secretaría de Movilidad hace un reconocimiento a las empresas que se destacan por tener actualizado y aplicar de manera adecuada el PESV. Se hará la entrega de los sellos de excelencia en seguridad vial, y a todas aquellas que por medio del programa de Plan Padrino, han podido incentivar a otras organizaciones a trabajar en pro de la seguridad vial.</p>
                                                <dl>
                                                    <dt>Hora:</dt>
                                                    <dd>8:00 a.m. a 12:00 m.</dd>
                                                </dl>
                                                <dl>
                                                    <dt>Lugar:</dt>
                                                    <dd>Auditorio principal Biblioteca Virgilio Barco</dd>

                                                </dl>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- collapse dia3_3 -->
                                <div class='panel panel-default'>
                                    <div class='panel-heading' role='tab' id='heading_dia3_3'>
                                        <h4 class='panel-title'>
                                            <a role='button' data-toggle='collapse' data-parent='#accordion_dia3' href='#collapse_dia3_3' aria-expanded='false' aria-controls='collapse_dia3_3'>
                                                <small>Evento</small><br>Café con mirada de género: lanzamiento del Anuario de Siniestralidad Vial de 2022
                                            </a>
                                        </h4>
                                    </div>
                                    <div id='collapse_dia3_3' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_dia3_3' aria-expanded='false'>
                                        <div class='panel-body'>
                                            <div class='box-dia3_3'>
                                                <p>Cada año la Secretaría de Movilidad con el apoyo de la Iniciativa Bloomberg para la Seguridad Vial Mundial (BIGRS), desarrollan un análisis sobre las características y cambios en las variables de la siniestralidad vial de la ciudad.</p>
                                                <p>Este año, mediante la implementación de los lineamientos de género de la Secretaría Distrital de La Mujer, se desarrolló un capítulo específico en género y adultos mayores. Alrededor de este café, líderes de la comunidad y representantes del Distrito conversarán sobre el efecto de la siniestralidad en las movilidades diferenciales.</p>
                                                <dl>
                                                    <dd>
                                                        <strong>Panelistas:</strong>
                                                    </dd>
                                                    <dd>
                                                        <ul class="list-unstyled">
                                                            <a data-toggle="modal" data-target="#modal_DiegoVargas">
                                                                <li><strong>Diego Vargas</strong><br>Coord. Regional de Vigilancia de Datos de Vital Strategies</li>
                                                            </a>
                                                            <a data-toggle="modal" data-target="#modal_DianaRodriguez">
                                                                <li><strong>Diana Rodríguez Franco</strong><br>Secretaria de la Mujer de Bogotá</li>
                                                            </a>
                                                            <a data-toggle="modal" data-target="#modal_DeyaniraAvila">
                                                                <li><strong>Deyanira Ávila Moreno</strong><br>Secretaria de Movilidad de Bogotá</li>
                                                            </a>
                                                        </ul>
                                                    </dd>
                                                </dl>
                                                <dl>
                                                    <dt>Hora:</dt>
                                                    <dd>2:00 p.m. a 3:30 p.m.</dd>
                                                </dl>
                                                <dl>
                                                    <dt>Lugar:</dt>
                                                    <dd>Auditorio Teresa Cuervo Borda</dd>
                                                    <dd> Museo Nacional de Colombia, Cra. 7 #28 - 66</dd>
                                                </dl>
                                                <a href="https://www.facebook.com/secretariamovilidadbogota" target="_blank" rel="noopener noreferrer">
                                                    <div class='imagen-transmision zoom'>
                                                        <img class='img-responsive w-100' src='/images/seguridadVial/transmision.gif' alt='transmisión en vivo' title='transmisión en vivo'>
                                                    </div>
                                                </a>


                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>

                        </div>
                    </div>

                    <!-- dia 4  -->
                    <div class="tab-pane" id="dia4">

                        <div class="box-content">
                            <!-- collapse_dia4 -->
                            <div class='panel-group' id='accordion_dia4' role='tablist ' aria-multiselectable='true'>


                                <!-- collapse dia4_1 -->
                                <div class='panel panel-default'>
                                    <div class='panel-heading' role='tab' id='heading_dia4_1'>
                                        <h4 class='panel-title'>
                                            <a role='button' data-toggle='collapse' data-parent='#accordion_dia4' href='#collapse_dia4_1' aria-expanded='false' aria-controls='collapse_dia4_1'>
                                                <small>Evento</small><br>Innovadores y Promotores Escolares en Seguridad Vial
                                            </a>
                                        </h4>
                                    </div>
                                    <div id='collapse_dia4_1' class='panel-collapse collapse in' role='tabpanel' aria-labelledby='heading_dia4_1' aria-expanded='false'>
                                        <div class='panel-body'>
                                            <div class='box-dia4_1'>
                                                <p>Este evento tiene como objetivo ofrecer a los Promotores Escolares en Seguridad Vial, espacios de fortalecimiento y visibilización de sus acciones de sensibilización y promoción de la seguridad vial en el contexto escolar.</p>
                                                <p>En este espacio se acoge a estudiantes interesados en orientar, informar, sensibilizar y promover la seguridad vial en sus colegios. Además, se fomenta el desarrollo de líderes que inspiren a otros estudiantes, docentes y directivos para que se concienticen y desarrollen competencias de cultura para la movilidad en sus recorridos.</p>
                                                <dl>
                                                    <dt>Hora:</dt>
                                                    <dd>8:00 a.m. a 11:00 a.m.</dd>
                                                </dl>
                                                <dl>
                                                    <dt>Lugar:</dt>
                                                    <dd>IED Lucila Rubio de Laverde</dd>
                                                    <dd></dd>
                                                </dl>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- collapse dia4_2 -->
                                <div class='panel panel-default'>
                                    <div class='panel-heading' role='tab' id='heading_dia4_2'>
                                        <h4 class='panel-title'>
                                            <a role='button' data-toggle='collapse' data-parent='#accordion_dia4' href='#collapse_dia4_2' aria-expanded='false' aria-controls='collapse_dia4_2'>
                                                <small>Actividad en vía</small><br>Simulacro de reacción ante un siniestro vial
                                            </a>
                                        </h4>
                                    </div>
                                    <div id='collapse_dia4_2' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_dia4_2' aria-expanded='false'>
                                        <div class='panel-body'>
                                            <div class='box-dia4_2'>
                                                <div class="imagen img-simulacro">
                                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2023/simulacro.png" alt="imagen de vehiculo usado para simuilacros de accidentes" title="imagen de vehiculo usado para simuilacros de accidentes">
                                                </div>
                                                <br>
                                                <p>Como parte del nuevo Protocolo Distrital para la Respuesta a Emergencias por Siniestros Viales, las entidades involucradas en la cadena de respuesta realizarán un simulacro de un siniestro vial, con el objetivo de responder en la atención de estos eventos adecuadamente.</p>
                                                <dl>
                                                    <dd>
                                                        <strong>Participantes:</strong>
                                                    </dd>
                                                    <dd>
                                                        <ul>
                                                            <li>Unidad Administrativa Especial Cuerpo Oficial Bomberos </li>
                                                            <li>Cuerpo de Policías y Agentes de Tránsito </li>
                                                            <li>Instituto Distrital de Gestión de Riesgos y Cambio Climático</li>
                                                            <li>Secretaría Distrital de Movilidad</li>
                                                            <li>Secretaria de Salud Distrital</li>
                                                        </ul>
                                                    </dd>
                                                </dl>
                                                <dl>
                                                    <dt>Hora:</dt>
                                                    <dd>11:00 a.m. a 1:00 p.m.</dd>
                                                </dl>
                                                <dl>
                                                    <dt>Lugar:</dt>
                                                    <dd>Carrera 7 entre Calle 28 y Calle 30</dd>
                                                </dl>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- collapse dia4_3 -->
                                <div class='panel panel-default'>
                                    <div class='panel-heading' role='tab' id='heading_dia4_3'>
                                        <h4 class='panel-title'>
                                            <a role='button' data-toggle='collapse' data-parent='#accordion_dia4' href='#collapse_dia4_3' aria-expanded='false' aria-controls='collapse_dia4_3'>
                                                <small>Actividad en vía</small><br>Recuperando los andenes para peatones
                                            </a>
                                        </h4>
                                    </div>
                                    <div id='collapse_dia4_3' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_dia4_3' aria-expanded='false'>
                                        <div class='panel-body'>
                                            <div class='box-dia4_3'>
                                                <p>En esta actividad de cultura ciudadana de las Secretarías de Movilidad y de Cultura, mediante una intervención urbana, se busca recuperar el espacio público peatonal que ha sido invadido por vehículos parqueados en el andén.</p>
                                                <dl>
                                                    <dt>Hora:</dt>
                                                    <dd>2:00 p.m. a 4:00 p.m.</dd>
                                                </dl>
                                                <dl>
                                                    <dt>Lugar:</dt>
                                                    <dd>Carrera 24 con Calle 63</dd>
                                                </dl>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                    <!-- dia 5 -->
                    <div class="tab-pane" id="dia5">

                        <div class="box-content">
                            <!-- collapse_dia5 -->
                            <div class='panel-group' id='accordion_dia5' role='tablist ' aria-multiselectable='true'>

                                <!-- collapse dia5_1 -->
                                <div class='panel panel-default'>
                                    <div class='panel-heading' role='tab' id='heading_dia5_1'>
                                        <h4 class='panel-title'>
                                            <a role='button' data-toggle='collapse' data-parent='#accordion_dia5' href='#collapse_dia5_1' aria-expanded='false' aria-controls='collapse_dia5_1'>
                                                <small>Actividad</small><br>‘La Rolita me lleva seguro’
                                            </a>
                                        </h4>
                                    </div>
                                    <div id='collapse_dia5_1' class='panel-collapse collapse in' role='tabpanel' aria-labelledby='heading_dia5_1' aria-expanded='false'>
                                        <div class='panel-body'>
                                            <div class='box-dia5_1'>
                                                <p>Se realizará una jornada de sensibilización en seguridad vial sobre los riesgos viales que se pueden presentar en la interacción con vehículos de gran tamaño, a través de actividades como el juego de roles, la identificación de puntos ciegos y una pista de pericia asumiendo el rol de ciclista.</p>
                                                <dl>
                                                    <dt>Hora:</dt>
                                                    <dd>10:00 a.m. a 12:00 m.</dd>
                                                </dl>
                                                <dl>
                                                    <dt>Lugar:</dt>
                                                    <dd>Calle 59A Sur – 76A-82</dd>
                                                </dl>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- collapse dia5_2 -->
                                <div class='panel panel-default'>
                                    <div class='panel-heading' role='tab' id='heading_dia5_2'>
                                        <h4 class='panel-title'>
                                            <a role='button' data-toggle='collapse' data-parent='#accordion_dia5' href='#collapse_dia5_2' aria-expanded='false' aria-controls='collapse_dia5_2'>
                                                <small>Actividad en vía</small><br>Voy seguro en Taxi
                                            </a>
                                        </h4>
                                    </div>
                                    <div id='collapse_dia5_2' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_dia5_2' aria-expanded='false'>
                                        <div class='panel-body'>
                                            <div class='box-dia5_2'>
                                                <p>Para los conductores de Taxi, en La Terminal de Transportes de Bogotá se llevará a cabo una jornada de pedagogía de este servicio, con el fin de socializar buenas prácticas al momento de realizar un desplazamiento.</p>
                                                <dl>
                                                    <dt>Hora:</dt>
                                                    <dd>3:00 p.m. a 5:00 p.m.</dd>
                                                </dl>
                                                <dl>
                                                    <dt>Lugar:</dt>
                                                    <dd>Terminal de Transporte de Bogotá Sede Salitre </dd>
                                                </dl>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- collapse dia5_3 -->
                                <div class='panel panel-default'>
                                    <div class='panel-heading' role='tab' id='heading_dia5_3'>
                                        <h4 class='panel-title'>
                                            <a role='button' data-toggle='collapse' data-parent='#accordion_dia5' href='#collapse_dia5_3' aria-expanded='false' aria-controls='collapse_dia5_3'>
                                                <small>Actividad en vía</small><br>Carpa bar
                                            </a>
                                        </h4>
                                    </div>
                                    <div id='collapse_dia5_3' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_dia5_3' aria-expanded='false'>
                                        <div class='panel-body'>
                                            <div class='box-dia5_3'>
                                                <div class="imagen img-carpa">
                                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2023/carpa.png" alt="Imagen de evento en carpa" title="">
                                                </div>
                                                <br>
                                                <p>La Secretaría de Movilidad instalará una carpa que simula un bar. Un espacio realizado con apoyo de DIAGEO y ALLIANZ en donde los transeúntes podrán vivir la experiencia de manejar bajo los efectos del alcohol o la embriaguez no alcohólica, con el fin de generar conciencia sobre esta grave conducta a la hora de conducir.</p>
                                                <dl>
                                                    <dt>Hora:</dt>
                                                    <dd>5:00 p.m. a 10:00 p.m.</dd>
                                                </dl>
                                                <dl>
                                                    <dt>Lugar:</dt>
                                                    <dd>Modelia - Kr. 80 A entre Cll. 24 C y Cll. 24 D</dd>
                                                </dl>
                                                <dl>
                                                    <dd>
                                                        <strong>Panelistas:</strong>
                                                    </dd>
                                                    <dd>
                                                        <ul class="">
                                                            <li>Terminal de Transportes</li>
                                                            <li>Liga contra la violencia Vial</li>
                                                            <li>ALLIANZ</li>
                                                            <li>SDM</li>

                                                        </ul>
                                                    </dd>
                                                </dl>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- /#fin _dia5 -->
                        </div>

                    </div>
                    <!-- Fin dia 5 - jueves 6 de octubre  -->

                    <!-- dia 6 - viernes 7 de octubre -->
                    <div class="tab-pane" id="dia6">

                        <div class="box-content">

                            <!-- collapse_dia6 -->
                            <div class='panel-group' id='accordion_dia6' role='tablist ' aria-multiselectable='true'>

                                <!-- collapse dia6_1 -->
                                <div class='panel panel-default'>
                                    <div class='panel-heading' role='tab' id='heading_dia6_1'>
                                        <h4 class='panel-title'>
                                            <a role='button' data-toggle='collapse' data-parent='#accordion_dia6' href='#collapse_dia6_1' aria-expanded='false' aria-controls='collapse_dia6_1'>
                                                <small>Actividad en vía</small><br>Dia del Motociclista - Cierre de la XVII Semana de La Seguridad Vial
                                            </a>
                                        </h4>
                                    </div>
                                    <div id='collapse_dia6_1' class='panel-collapse collapse in' role='tabpanel' aria-labelledby='heading_dia6_1' aria-expanded='false'>
                                        <div class='panel-body'>
                                            <div class='box-dia6_1'>
                                                <div class="imagen img-motociclista">
                                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2023/motociclista.png" alt="Mujer morociclista" title="">
                                                </div>
                                                <br>
                                                <p>En el marco del Día Distrital del Motociclista, se desarrollará una gran jornada de pedagogía y cultura ciudadana que busca generar conciencia sobre el rol de este actor vial en el tránsito, promoviendo una conducción responsable y segura.</p>
                                                <p>En este espacio, los motociclistas contarán con diferentes actividades y servicios gratuitos:</p>
                                                <ul>
                                                    <li>Exhibición de motos antiguas y clásicas</li>
                                                    <li>Simulador de colisión y conducción</li>
                                                    <li>Marcación de motocicletas</li>
                                                    <li>Revisión de gases</li>
                                                    <li>Actividades pedagógicas y mucho más</li>
                                                </ul>
                                                <dl>
                                                    <dt>Hora:</dt>
                                                    <dd>10:00 a.m. - 4:00 p.m.</dd>
                                                </dl>
                                                <dl>
                                                    <dt>Lugar:</dt>
                                                    <dd>Bahía Los Tres Elefantes</dd>
                                                    <dd>Av. Boyacá con calle 23</dd>
                                                    <dd>Sentido N - S</dd>
                                                </dl>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- /#fin _dia6 -->

                        </div>
                    </div>
                    <!-- Fin dia 6 - viernes 7 de octubre -->

                </div>
            </div>


        </div>
        <style>
            .box-wrp .box-verticalTabs {
                display: grid;
                /* gap: 8px; */
                grid-auto-flow: dense;
                grid-template-columns: 1fr;
                grid-template-rows: auto;
                grid-template-areas:
                    'titulo'
                    'botones'
                    'contenido'
                    'aliados';
            }

            .box-wrp .box-verticalTabs .titulo {
                grid-area: titulo;
            }

            .box-wrp .box-verticalTabs .titulo h3 {
                text-align: center;
                font-weight: 700;
                margin-bottom: 24px;
                font-size: 28px;
                border-top: solid 2px #71B602;
                border-bottom: solid 2px #71B602;
                padding: 16px 15px;
            }

            .box-wrp .box-verticalTabs .botones {
                grid-area: botones;
                background-color: #f5f5f5;
            }

            #myTabs {
                background-color: #ffffff;
                border: solid 1px #e5e5e5;
                border-radius: 5px;
                margin: 8px;
            }

            .box-wrp .box-verticalTabs .contenido {
                grid-area: contenido;
            }

            .box-wrp .box-verticalTabs .contenido .box-content {
                padding: 0px;
            }

            .box-wrp .box-verticalTabs .contenido .box-content p {
                margin: 0px;
                padding-bottom: 16px !important;
                text-align: justify;
            }

            .box-wrp .box-verticalTabs .contenido .box-content ol>li {
                margin: 0px;
                padding-bottom: 12px !important;
            }

            /* css modals */











            /* end css modals */

            .box-wrp .box-aliados {
                grid-area: aliados;
                display: grid;
                gap: 10px;
                grid-auto-flow: dense;
                grid-template-columns: 1fr;
                grid-template-rows: auto;
                grid-template-areas:
                    'empresas'
                    'carousel-empresas';
                margin-top: 24px;

            }
        </style>

        <div class="box-aliados">

            <div class="box-empresas">
                <h3>Nuestros aliados:</h3>
                <p>Durante el desarrollo de la XVII Semana de la Seguridad Vial, contamos con el apoyo de diferentes empresas, organizaciones nacionales e internacionales que nos acompañan en los eventos y lanzamientos de la semana, y que velan por la seguridad vial. A todos, un agradecimiento especial.</p>
            </div>
            <style>
                .box-wrp .box-empresas {
                    /* margin-top: 30px; */
                    grid-area: empresas;
                    background-color: #1D1D1B;
                    padding: 16px;

                }

                .box-wrp .box-empresas h3 {
                    /* font-size: 18px; */
                    font-weight: 700;
                    text-align: center;
                    line-height: 1.2;
                    color: #71B602;
                    padding: 16px;
                }

                .box-wrp .box-empresas p {
                    grid-area: resultados;
                    padding: 0px 15px 15px 15px;
                    font-size: 15px;
                    font-weight: 500;
                    text-align: justify;
                    line-height: 1.3;
                    color: #FFFFFF;
                }
            </style>

            <!-- Carousel carousel -->
            <div class='box-carousel-empresas'>
                <div id='carousel' class='carousel slide' data-ride='carousel'>

                    <!-- Wrapper for slides -->
                    <div class='carousel-inner'>
                        <!-- entes -->


                        <div class='item active'>
                            <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2023/9.png' alt='logo'>
                            <p><small>Aliado</small></p>
                        </div>
                        <div class='item'>
                            <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2023/3.png' alt='logo'>
                            <p><small>Aliado</small></p>
                        </div>
                        <div class='item'>
                            <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2023/1.png' alt='logo'>
                            <p><small>Aliado</small></p>
                        </div>
                        <div class='item'>
                            <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2023/2.png' alt='logo'>
                            <p><small>Aliado</small></p>
                        </div>
                        <div class='item'>
                            <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2023/4.png' alt='logo'>
                            <p><small>Aliado</small></p>
                        </div>
                        <div class='item'>
                            <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2023/6.png' alt='logo'>
                            <p><small>Aliado</small></p>
                        </div>
                        <div class='item'>
                            <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2023/12.png' alt='logo'>
                            <p><small>Aliado</small></p>
                        </div>
                        <div class='item'>
                            <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2023/18.png' alt='logo'>
                            <p><small>Aliado</small></p>
                        </div>

                        <!-- marcas1 -->
                        <div class='item'>
                            <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2023/11.png' alt='logo'>
                            <p><small>Aliado</small></p>
                        </div>
                        <div class='item'>
                            <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2023/10.png' alt='logo'>
                            <p><small>Aliado</small></p>
                        </div>
                        <div class='item'>
                            <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2023/8.png' alt='logo'>
                            <p><small>Aliado</small></p>
                        </div>


                        <div class='item'>
                            <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2023/5.png' alt='logo'>
                            <p><small>Aliado</small></p>
                        </div>
                        <div class='item'>
                            <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-09-2023/13_a.png' alt='logo'>
                            <p><small>Aliado</small></p>
                        </div>
                        <div class='item'>
                            <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2023/7.png' alt='logo'>
                            <p><small>Aliado</small></p>
                        </div>



                        <div class='item'>
                            <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2023/14.png' alt='logo'>
                            <p><small>Aliado</small></p>
                        </div>
                        <div class='item'>
                            <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2023/15.png' alt='logo'>
                            <p><small>Aliado</small></p>
                        </div>
                        <div class='item'>
                            <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2023/16.png' alt='logo'>
                            <p><small>Aliado</small></p>
                        </div>
                        <div class='item'>
                            <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2023/17.png' alt='logo'>
                            <p><small>Aliado</small></p>
                        </div>

                        <div class='item'>
                            <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2023/19.png' alt='logo'>
                            <p><small>Aliado</small></p>
                        </div>
                        <div class='item'>
                            <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2023/20.png' alt='logo'>
                            <p><small>Aliado</small></p>
                        </div>
                        <div class='item'>
                            <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-09-2023/21.png' alt='logo'>
                            <p><small>Aliado</small></p>
                        </div>


                    </div>

                    <!-- Left and right controls -->
                    <a class='left carousel-control' href='#carousel' data-slide='prev'>
                        <span class='glyphicon glyphicon-chevron-left'></span>
                        <span class='sr-only'>Anterior</span>
                    </a>
                    <a class='right carousel-control' href='#carousel' data-slide='next'>
                        <span class='glyphicon glyphicon-chevron-right'></span>
                        <span class='sr-only'>Siguinente</span>
                    </a>
                </div>
            </div>
            <style>
                .box-wrp .box-carousel-empresas {
                    grid-area: carousel-empresas;
                    margin: auto;
                    width: 100%;

                }

                .box-carousel-empresas .item img {
                    padding: 16px;
                    max-width: 250px !important;
                    margin: auto;
                }

                .box-carousel-empresas .item p {
                    text-align: center;
                }
            </style>

        </div>

    </div>
</div>
<br>
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

    .semanaSeguidadVial {
        max-width: 980px;
        margin: auto;
        word-break: break-word;
        word-wrap: break-word;
        font-family: 'Montserrat', sans-serif;
        font-size: 15px;
        font-weight: 500;
        text-align: left;
        line-height: 1.5;
        color: rgba(25, 25, 25, 1);
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

    }

    .box-content .panel-body li {
        padding: 8px 16px;
        line-height: 1.2 !important;
    }

    .box-content .panel-body dt {
        padding-bottom: 8px;
        padding-left: 0px;
        line-height: 1.2 !important;
    }

    .box-content .panel-body dd {
        padding-bottom: 8px;
        padding-left: 0px;
        line-height: 1.2 !important;
    }

    .box-wrp .nav-pills>li.active>a,
    .nav-pills>li.active>a:focus,
    .nav-pills>li.active>a:hover {
        /* color: #fff; */
        /* background-color: #337ab7; */
        color: #71B602 !important;
        background-color: #1D1D1B !important;
    }

    .box-wrp .nav>li>a {
        color: #1D1D1B !important;
        font-weight: 600;
    }

    .box-wrp .nav>li>a:focus,
    .nav>li>a:hover {
        font-weight: 600;
        color: #71B602 !important;
    }

    .box-wrp .panel-default>.panel-heading {
        background-image: -webkit-linear-gradient(top, #f5f5f5 0, #e8e8e8 100%);
        background-image: -o-linear-gradient(top, #f5f5f5 0, #e8e8e8 100%);
        /*! background-image:-webkit-gradient(linear,left top,left bottom,from(#f5f5f5),to(#1D1D1B)); */
        background-image: none;
        filter: progid: DXImageTransform.Microsoft.gradient(startColorstr='#fff5f5f5', endColorstr='#ffe8e8e8', GradientType=0);
        background-repeat: repeat-x;
        background-color: #1D1D1B !important;
    }

    .box-wrp .box-verticalTabs small {
        font-weight: 700 !important;
        color: #FFFFFF99 !important;
    }

    .box-wrp h4.panel-title>a {
        color: #71B602 !important;
    }



    .box-verticalTabs .imagen-inscripcion,
    .box-verticalTabs .imagen-transmision {
        padding: 8px 15px;
    }

    .carousel-control.left {
        background-image: none !important;
    }

    .carousel-control.right {
        background-image: none !important;
    }

    .box-wrp .boton-ppal {
        width: 100%;
        margin: auto;
        padding: 16px;
    }

    .box-wrp .list-unstyled>a {

        color: #191919 !important;
        text-decoration: underline;
    }

    .box-wrp .list-unstyled>a:hover {
        color: #19191999 !important;
        cursor: pointer;
    }

    .w-100 {
        width: 100%;
    }

    @media(min-width:768px) {
        .box-video {
            padding: 30px;
        }

        .box-verticalTabs .titulo h4 {
            font-weight: 700;
        }

        .box-wrp .box-verticalTabs {

            grid-template-columns: 30% 70%;
            grid-template-areas:
                'titulo titulo'
                'botones contenido';
        }

        .box-wrp .box-verticalTabs .box-content {
            background-color: #f5f5f5;
            padding: 15px;
        }

        .box-verticalTabs .imagen-inscripcion,
        .box-verticalTabs .imagen-transmision {
            padding: 15px;
        }

        .box-verticalTabs .imagen-inscripcion img {
            max-width: 300px;
            margin: auto;
        }

        .box-verticalTabs .imagen-transmision img {
            max-width: 300px;
            margin: auto;
        }

        .box-wrp .box-verticalTabs .contenido .box-content {
            padding: 8px 32px;
        }

        .box-wrp .box-aliados {
            display: grid;
            gap: 10px;
            grid-auto-flow: dense;
            grid-template-columns: 1fr 1fr;
            grid-template-rows: auto;
            grid-template-areas:
                'empresas carousel-empresas';

        }

        .box-wrp .boton-ppal {
            max-width: 40%;
            margin: auto;
            padding: 16px;
        }


    }
</style>
<!-- End Styles -->
