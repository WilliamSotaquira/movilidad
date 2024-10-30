@extends('welcome')
@section('title','ssv')
@section('contenido')

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">


<!-- Set ssv -->
<style>
    .field-item.even .centertil {
        visibility: hidden;
        margin-top: -50px;
    }

    .ssv {
        font-family: 'Montserrat', sans-serif;
        /* background: #f5f5f5; */
        padding: 0px;
        font-optical-sizing: auto;
        font-size: 14px;
        font-weight: normal;
        text-align: left;
        line-height: 1.5;
        color: #00000099;
    }

    @media(min-width:768px) {
        .ssv {
            font-family: 'Montserrat', sans-serif;
            /* background: #f5f5f5; */
            padding: 16px;
            font-optical-sizing: auto;
            font-size: 14px;
            font-weight: normal;
            text-align: left;
            line-height: 1.5;
            color: #00000099;
        }
    }
</style>
<div class="set-wrapper ssv">

    <style>
        .ssv .cpnt-modals {
            display: flex;
            flex-wrap: wrap;
            justify-content: start;
            align-items: start;

        }

        .ssv .cpnt-modals .profile {
            display: none;
        }

        .ssv .event-profiles {
            padding: 8px;
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: center;
            align-items: flex-start;
            align-content: center;
            text-align: center;
            gap: 16px;
        }

        .ssv .profile {
            padding: 0px 8px 8px 8px;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            align-content: center;
            text-align: center;
            max-width: 180px;
        }

        .ssv .profile .img-profile img {
            display: inline-block;
            max-width: 180px;
            width: 100%;
            transition: 0.5s ease;
            -moz-transition: 0.5s ease;
            /* Firefox */
            -webkit-transition: 0.5s ease;
            /* Chrome - Safari */
            -o-transition: 0.5s ease;
            /* Opera */
            -ms-transition: 0.5s ease;
            /* IE9 */
        }

        .ssv .profile a:hover .img-profile img {
            cursor: pointer;
            transform: scale(1.05);
            -moz-transform: scale(1.05);
            /* Firefox */
            -webkit-transform: scale(1.05);
            /* Chrome - Safari */
            -o-transform: scale(1.05);
            /* Opera */
            -ms-transform: scale(1.05);
            /* IE9 */
        }

        .ssv .profile .title-profile h3 {
            font-optical-sizing: auto;
            font-size: 18px;
            font-weight: bold;
            text-align: center;
            line-height: 1.2;
        }

        .ssv .profile .subtitle-profile h4 {
            font-optical-sizing: auto;
            font-size: 16px;
            font-weight: normal;
            text-align: center;
            line-height: 1;

        }

        .ssv .profile .title-profile h3,
        .ssv .profile .subtitle-profile h4 {
            display: inline-block;
            margin: 1px;
            color: #4d541f;

        }

        .ssv .profile a:hover .title-profile h3,
        .ssv .profile a:hover .subtitle-profile h4 {
            color: #4d541f99;
            text-decoration: underline;
            cursor: pointer;
        }

        .ssv .modal .modal-body {
            padding: 32px;
            text-align: center;
        }

        .ssv .modal .modal-body .img-modal img {
            max-width: 250px;
            margin: auto;
        }

        .ssv .modal .modal-body .text-modal h3 {
            color: #4d541f;
        }

        .ssv .modal .modal-body .text-modal h4 {
            color: #4d541f;
        }

        .ssv .modal .modal-body .text-modal .paragraph {
            text-align: justify;
        }
    </style>
    <div class="cpnt cpnt-0 cpnt-modals">

        <!-- Modal Claudia Díaz-->
        <div class="modal fade" id="modal-1" tabindex="-1" role="dialog" aria-labelledby="modal-1" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="image img-modal">
                            <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/1_-_claudia_diaz.png" alt="Foto: Claudia Díaz" title="Foto: Claudia Díaz">
                        </div>
                        <div class="text text-modal">
                            <h3>Claudia Díaz</h3>
                            <h4>Secretaria Distrital de Movilidad</h4>
                            <hr>
                            <p class="paragraph ph-modal">Ingeniera ambiental con maestría en Ingeniería Civil en el área de transporte de la Universidad de Los Andes. Tiene más de 13 años de experiencia diseñando, gestionando y ejecutando políticas y proyectos de movilidad tanto en el sector público como para organizaciones internacionales.
                            <p class="paragraph ph-modal">Fue consultora en el Banco Interamericano de Desarrollo, donde asesoró a varios países de América Latina en el diseño e implementación de iniciativas de transporte seguro, inclusivo y sostenible, así como de estrategias para mejorar la seguridad vial. Así mismo, fue consultora para la Agencia para el Desarrollo Internacional de Estados Unidos y el Servicio Forestal de los Estados Unidos para la Estrategia de Desarrollo Bajo en Carbono de Colombia.</p>
                            <p class="paragraph ph-modal">A nivel distrital, fue asesora del despacho del secretario de Movilidad y posteriormente jefe de la Oficina de Seguridad Vial y Directora de Seguridad Vial de la Secretaría Distrital de Movilidad, donde lideró la implementación de la política de seguridad vial Visión Cero para Bogotá, logrando reducir el número de muertes por siniestros viales por 4 años consecutivos.</p>
                            <p class="paragraph ph-modal">Asume el compromiso de hacer de Bogotá un lugar donde se puedan recorrer las calles con tranquilidad, protegiendo la vida en todos los modos de transporte. Seguirá trabajando por la transformación de la movilidad hacia la sostenibilidad, la conciencia vial, un transporte más eficiente y un aire más limpio.</p>
                            </p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Claudia Adriazola Steil-->
        <div class="modal fade" id="modal-2" tabindex="-1" role="dialog" aria-labelledby="modal-2" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="image img-modal">
                            <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/2_-_claudia_adriazola.png" alt="Foto: Claudia Adriazola Steil" title="Foto: Claudia Adriazola Steil">
                        </div>
                        <div class="text text-modal">
                            <h3>Claudia Adriazola Steil</h3>
                            <h4>Directora Adjunta - WRI</h4>
                            <hr>
                            <p class="paragraph ph-modal">Claudia es la Directora Adjunta Global de Movilidad Urbana y Directora del Programa Global de Salud y Seguridad Vial en el Instituto de Recursos Mundiales. Claudia tiene más de 20 años de experiencia en el sector del Transporte. Lidera investigación, implementación de políticas y proyectos en movilidad sostenible, incluyendo caminata, ciclismo, transporte masivo, carga, vehículos eléctricos y diseño urbano. Dentro de estas áreas de trabajo, se enfoca mejorar la calidad de vida mediante la seguridad vial, la calidad del aire, el cambio climático y la equidad. Claudia ha trabajado en el Comité Directivo a cargo de organizar la Tercera Reunión Ministerial Mundial en Seguridad Vial en Suecia 2020 y es parte del actual Comité Directivo a cargo de organizar la Cuarta Reunión Ministerial Mundial en Seguridad Vial en Marruecos 2025. Claudia ha sido reconocida como una Mujer Destacada en el Transporte 2019 por GIZ. Ha sido distinguida por el Gobierno de Brasil con la Medalla Maua al Mérito.</p>
                            <p class="paragraph ph-modal">Claudia es abogada, formada en Alemania en Gestión del Transporte. En 2008 se graduó de la Maestría Ejecutiva en Administración Pública y de la Maestría en Relaciones Internacionales en la Maxwell School of Public Administration de la Universidad de Syracuse, Nueva York, en Estados Unidos. En 2022, Claudia completó una Maestría Ejecutiva en Cambio de Comportamiento en la Universidad de Harvard.</p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Orlando Molano-->
        <div class="modal fade" id="modal-3" tabindex="-1" role="dialog" aria-labelledby="modal-3" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="image img-modal">
                            <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/3_-_orlando_molano.png" alt="Foto: Orlando Molano" title="Foto: Orlando Molano">
                        </div>
                        <div class="text text-modal">
                            <h3>Orlando Molano</h3>
                            <h4>Director IDU </h4>
                            <hr>
                            <p class="paragraph ph-modal">Orlando Molano Pérez, quien a partir de hoy, 11 de enero, asume la dirección general del Instituto de Desarrollo Urbano (IDU) es un bogotano orgulloso de la ciudad que lo vio nacer y lo acompañó a luchar para alcanzar una destacada trayectoria profesional.</p>
                            <p class="paragraph ph-modal">En su amplia trayectoria se destaca por liderar, durante su gestión frente al Instituto Distrital de Recreación y Deporte (IDRD) entre 2016 y 2019, el desarrollo de más de 1.400 parques nuevos en la capital, así como cinco centros recreativos, deportivos y culturales, 200 escenarios deportivos y múltiples espacios metropolitanos.</p>
                            <p class="paragraph ph-modal">Asimismo, durante su gestión como director de Parques Nacionales Naturales de Colombia, entre 2020 y 2022, Colombia logró proteger un 30 por ciento de las áreas marinas antes de 2030.</p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Carlos Alberto Tovar-->
        <div class="modal fade" id="modal-4" tabindex="-1" role="dialog" aria-labelledby="modal-4" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="image img-modal">
                            <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/4_-_carlos_torres_tovar.png" alt="Foto: Carlos Alberto Tovar" title="Foto: Carlos Alberto Tovar">
                        </div>
                        <div class="text text-modal">
                            <h3>Carlos Alberto Tovar</h3>
                            <h4>Director de Ordenamiento y Desarrollo Físico - Universidad Nacional de Colombia Sede Bogotá</h4>
                            <hr>
                            <p class="paragraph ph-modal"></p>
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
        <div class="modal fade" id="modal-5" tabindex="-1" role="dialog" aria-labelledby="modal-5" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="image img-modal">
                            <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/5_-_mary_bottagisio.png" alt="Foto: Mary Bottagisio" title="Foto: Mary Bottagisio">
                        </div>
                        <div class="text text-modal">
                            <h3>Mary Bottagisio</h3>
                            <h4> Directora Ejecutiva - Fundación Liga contra la Violencia Vial </h4>
                            <hr>
                            <p class="paragraph ph-modal">Líder y activista de la seguridad vial en Colombia y la región por más de 15 años. Fundadora de la Liga contra la Violencia Vial, liderazgo interdisciplinario enfocado en resultados concretos a favor de la construcción y puesta en marcha de planes, programas y proyectos de desarrollo y fortalecimiento de la seguridad vial en ámbitos multisectoriales. Ha dedicado los últimos 15 años en la defensa de los derechos ciudadanos por una movilidad segura y sostenible.</p>
                            <p class="paragraph ph-modal">Conferencista internacional ante la Comisión Económica de las Naciones Unidas para Europa (UNECE), la Comisión Económica de las Naciones Unidas para América Latina y el Caribe (CEPAL) y el Banco Interamericano de Desarrollo (BID).</p>
                            <p class="paragraph ph-modal">Cofundadora de la Federación Iberoamericana de Asociaciones de Víctimas Contra la Violencia Vial y de la Global Alliance of NGOs for Road Safety.</p>
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
        <div class="modal fade" id="modal-6" tabindex="-1" role="dialog" aria-labelledby="modal-6" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="image img-modal">
                            <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/6_-_gina_tambini.png" alt="Foto: Gina Tambini" title="Foto: Gina Tambini">
                        </div>
                        <div class="text text-modal">
                            <h3>Gina Tambini</h3>
                            <h4>Representante en Colombia · Organizacion Panamericana de la Salud / Organizacion Mundial de la Salud</h4>
                            <hr>
                            <p class="paragraph ph-modal">La doctora Gina Tambini, de origen peruano, es una experta en salud pública con amplia experiencia en la Región de las Américas. Su labor se centra en mejorar la salud de poblaciones vulnerables, brindando cooperación técnica para fortalecer capacidades nacionales y contribuir a iniciativas regionales y globales. Reconocida por su liderazgo inspirador, Tambini es experta en salud familiar y comunitaria, con un enfoque en vacunas e inmunización. Inició su carrera en la Universidad Peruana Cayetano Heredia y ha ocupado posiciones clave en la OPS/OMS, incluyendo Gerente del Área de Salud Familiar y Representante en Ecuador y Colombia. Ha sido parte de comités importantes para el desarrollo de programas de salud global.</p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- Modal Laurent Carnis-->
        <div class="modal fade" id="modal-7" tabindex="-1" role="dialog" aria-labelledby="modal-7" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="image img-modal">
                            <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/7_-_laurent_carnis.png" alt="Foto: Laurent Carnis" title="Foto: Laurent Carnis">
                        </div>
                        <div class="text text-modal">
                            <h3>Laurent Carnis</h3>
                            <h4>Director de investigación - Universidad Gustave Eiffel</h4>
                            <hr>
                            <p class="paragraph ph-modal"></p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Fred Wegman -->
        <div class="modal fade" id="modal-8" tabindex="-1" role="dialog" aria-labelledby="modal-8" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="image img-modal">
                            <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/8_-_fred_wegman.png" alt="Foto: Fred Wegman " title="Foto: Fred Wegman ">
                        </div>
                        <div class="text text-modal">
                            <h3>Fred Wegman </h3>
                            <h4>Profesor emérito de Seguridad Vial - Universidad Técnica de Delft</h4>
                            <hr>
                            <p class="paragraph ph-modal">El profesor Fred Wegman es uno de los expertos en seguridad vial más respetados del mundo. La residencia de Fred se ha centrado en hacer que nuestras carreteras sean más seguras, analizando nuestras carreteras, los vehículos, los usuarios de las carreteras y las velocidades de viaje.</p>
                            <p class="paragraph ph-modal">El profesor Wegman también ha contribuido a la Estrategia de Seguridad Vial del Sur de Australia y sus recomendaciones marcarán el camino para reducir el número de muertes y lesiones graves en las carreteras del sur de Australia.</p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Santiago Torrado-->
        <div class="modal fade" id="modal-9" tabindex="-1" role="dialog" aria-labelledby="modal-9" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="image img-modal">
                            <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/9_-_santiago_torrado.png" alt="Foto: Santiago Torrado" title="Foto: Santiago Torrado">
                        </div>
                        <div class="text text-modal">
                            <h3>Santiago Torrado</h3>
                            <h4>Corresponsal Colombia - Periódico El País</h4>
                            <hr>
                            <p class="paragraph ph-modal">Corresponsal de EL PAÍS en Colombia, donde cubre temas de política, posconflicto y la migración venezolana en la región. Periodista de la Universidad Javeriana y becario del Programa Balboa, ha trabajado con AP y AFP. Ha cubierto eventos y elecciones sobre el terreno en México, Brasil, Venezuela, Ecuador y Haití, así como el Mundial de Fútbol 2014.</p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Ana Milena Gómez -->
        <div class="modal fade" id="modal-10" tabindex="-1" role="dialog" aria-labelledby="modal-10" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="image img-modal">
                            <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/10_-_ana_milena_gomez.png" alt="Foto: Ana Milena Gómez " title="Foto: Ana Milena Gómez ">
                        </div>
                        <div class="text text-modal">
                            <h3>Ana Milena Gómez </h3>
                            <h4>"</h4>
                            <hr>
                            <p class="paragraph ph-modal">Ingeniera Civil e Ingeniera Ambiental de la Universidad de los Andes, con un título de Magíster en Ingeniería Civil de la misma institución. Con una sólida trayectoria profesional de cerca de 10 años, ha dedicado gran parte de su carrera al ámbito de la movilidad.</p>
                            <p class="paragraph ph-modal">En la Secretaría Distrital de Movilidad, ocupó cargos del nivel asesor y directivo desde el 2 de enero de 2017 y hasta el 2 de mayo de 2021. Durante este periodo, desempeñó un papel fundamental en la definición de lineamientos para el transporte público y privado, así como en la formulación y adopción del Plan Estratégico de la Secretaría Distrital de Movilidad.</p>
                            <p class="paragraph ph-modal">Además, aportó su experiencia en la Financiera de Desarrollo Territorial S.A. - FINDETER, brindando asesoramiento y respaldo a la Dirección de Ciudades en la revisión y elaboración de términos de referencia para proyectos relacionados con transporte y movilidad. Su compromiso y contribuciones han dejado una huella significativa en el desarrollo y mejoramiento de políticas y proyectos en el campo de la movilidad urbana.</p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Leonardo Cañon Rubiano-->
        <div class="modal fade" id="modal-11" tabindex="-1" role="dialog" aria-labelledby="modal-11" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="image img-modal">
                            <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/11_-_leonardo_canon.png" alt="Foto: Leonardo Cañon Rubiano" title="Foto: Leonardo Cañon Rubiano">
                        </div>
                        <div class="text text-modal">
                            <h3>Leonardo Cañon Rubiano</h3>
                            <h4>Especialista Senior de Transporte - Banco Mundial </h4>
                            <hr>
                            <p class="paragraph ph-modal">Leonardo Canon Rubiano es Especialista en Transporte Urbano en la Práctica Global de Transporte y Desarrollo Digital del Banco Mundial en la Ciudad de Washington. Actualmente, Leonardo desarrolla actividades analíticas y de asistencia técnica en la región del Asia Pacífico (Indonesia, Vietnam y Myanmar, principalmente), con una agenda enfocada en movilidad urbana, transporte urbano y masivo, modelación de la demanda y regulación de sistemas de autobuses. Ha trabajado extensamente en proyectos del Banco en México, Colombia, Perú y Brasil. Antes de regresar al Banco en 2017, ocupó cargos en el sector público colombiano, incluyendo Director de Operaciones de BRT con TransMilenio, la autoridad de transporte masivo de Bogotá, y asesor de infraestructura del Departamento Nacional de Planeación de Colombia (DNP) para el Proyecto Primera Línea de Metro de Bogotá. Leonardo cuenta con un MSc en Planificación Urbana y Desarrollo del University College London, y es ingeniero civil de la Universidad de los Andes en Bogotá, Colombia. Leonardo ha sido docente, y es un aspirante a piloto deportivo de aviación. También es buzo, toca el bajo eléctrico y participa en carreras atléticas</p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Antonio Trujillo-->
        <div class="modal fade" id="modal-12" tabindex="-1" role="dialog" aria-labelledby="modal-12" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="image img-modal">
                            <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-09-2024/44_-_antonio_trujillo.png" alt="Foto: Antonio Trujillo" title="Foto: Antonio Trujillo">
                        </div>
                        <div class="text text-modal">
                            <h3>Antonio Trujillo</h3>
                            <h4>Profesor asociado Departamento de Salud Internacional y Unidad de Investigación de Lesiones Internacionales - Universidad Johns Hopkins</h4>
                            <hr>
                            <p class="paragraph ph-modal">El Dr. Antonio Trujillo es profesor de la Escuela de Salud Pública Bloomberg de Johns Hopkins y trabaja en políticas de sistemas de salud que mejoran el acceso a medicamentos y la vida de las personas mayores con enfermedades crónicas en América Latina, Estados Unidos y todo el mundo. Antonio tiene experiencia en economía de la salud, economía del comportamiento y econometría aplicada. Antonio es el codirector del programa de Maestría en Ciencias de la Salud (MHS) en Economía de la Salud Global. Imparte un curso de econometría avanzada sobre evaluación del impacto de programas utilizando datos de observación y un curso sobre economía del comportamiento y salud pública. Desde 2020 hasta 2022, el Dr. Trujillo fue miembro del Consejo Asesor de Política Nacional COVID-19 de Colombia. Antonio tiene más de 100 publicaciones sobre la intercepción de la economía y la salud pública.</p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal María Fernanda Cárdenas -->
        <div class="modal fade" id="modal-13" tabindex="-1" role="dialog" aria-labelledby="modal-13" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="image img-modal">
                            <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/13_-_ma._fernanda_cardenas.png" alt="Foto: María Fernanda Cárdenas " title="Foto: María Fernanda Cárdenas ">
                        </div>
                        <div class="text text-modal">
                            <h3>María Fernanda Cárdenas </h3>
                            <h4>Asesora técnica regional - Vital Strategies </h4>
                            <hr>
                            <p class="paragraph ph-modal">María Fernanda Cárdenas es líder regional de comunicaciones para LATAM en Vital Strategies. Como experta en campañas de cambio de comportamiento, brinda asistencia técnica a los socios de Vital Strategies en Colombia y Latinoamerica en la planificación e implementación de campañas de bien público.</p>
                            <p class="paragraph ph-modal">Es politóloga con énfasis en mercadeo político, tiene una especialización en producción de televisión y una maestría en teatro. Tiene más de 15 años de experiencia en el diseño e implementación de estrategias de comunicación y políticas públicas, trabajando en entidades tanto públicas como privadas, así como agencias de publicidad. </p>

                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Jose Stallin-->
        <div class="modal fade" id="modal-14" tabindex="-1" role="dialog" aria-labelledby="modal-14" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="image img-modal">
                            <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/14_-_jose_stalin_rojas.png" alt="Foto: Jose Stallin" title="Foto: Jose Stallin">
                        </div>
                        <div class="text text-modal">
                            <h3>Jose Stallin</h3>
                            <h4>Docente y Director observatorio de movilidad y logística de la Universidad Nacional de Colombia </h4>
                            <hr>
                            <p class="paragraph ph-modal">Director OMLT. Profesor Gestión de las operaciones y la Producción. Administración de Empresas. Universidad Nacional de Colombia. Postgrado en calidad total y Productividad Universidad del Valle. Diplome Universitario Du gestión Universite du Rouen. Ha sido Director de Carrera de Administración de empresas UN. Consultor asociado de la International Bussines Clearinghouse, Miembro Grupo de Apoyo Fiscal – Jefatura de Determinación Dirección Distrital de Impuestos (Secretaria de Hacienda).</p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Bella Castiblanco-->
        <div class="modal fade" id="modal-15" tabindex="-1" role="dialog" aria-labelledby="modal-15" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="image img-modal">
                            <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/30-09-2024/57_-_bella_castiblanco_-_correcta.png" alt="Foto: Bella Castiblanco" title="Foto: Bella Castiblanco">
                        </div>
                        <div class="text text-modal">
                            <h3>Bella Castiblanco</h3>
                            <h4>Activista con la reivindicación de las Mujeres Trans </h4>
                            <hr>
                            <p class="paragraph ph-modal">Bella Castiblanco es una activista comprometida con la reivindicación de los derechos de las mujeres trans. Ha luchado por la visibilidad, la igualdad de género y la justicia social, siendo una voz influyente en el sector LGBTQ+,Además de su activismo en las calles y en redes sociales, Bella ha participado en diversas iniciativas y movimientos que buscan no solo la inclusión, sino también el reconocimiento de las mujeres trans que buscan sensibilizar a la sociedad sobre los desafíos que enfrentan las mujeres en su día a día.</p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Jessica Giraldo-->
        <div class="modal fade" id="modal-16" tabindex="-1" role="dialog" aria-labelledby="modal-16" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="image img-modal">
                            <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/30-09-2024/58_-_jessica_giraldo_-_correcta.png" alt="Foto: Jessica Giraldo" title="Foto: Jessica Giraldo">
                        </div>
                        <div class="text text-modal">
                            <h3>Jessica Giraldo</h3>
                            <h4>Lider para Bogotá Colectivo Mujeres en Tenis</h4>
                            <hr>
                            <p class="paragraph ph-modal">Profesional en relaciones económicas internacionales, especialista en educación y gestión ambiental. Escritora del libro Resplandece (donde cuenta como un siniestro vial cambió su vida). Coach ontológico y mentora de mujeres. Lidera Mujeres en tenis en la ciudad de Bogotá, colectivo enfocado en mujeres.</p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Camila Gómez -->
        <div class="modal fade" id="modal-17" tabindex="-1" role="dialog" aria-labelledby="modal-17" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="image img-modal">
                            <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/17_-_camila_gomez.png" alt="Foto: Camila Gómez " title="Foto: Camila Gómez ">
                        </div>
                        <div class="text text-modal">
                            <h3>Camila Gómez </h3>
                            <h4>Directora del Sistema Distrital de Cuidado de Bogotá - Secretaría Distrital de la Mujer </h4>
                            <hr>
                            <p class="paragraph ph-modal">Directora Distrital de Sistema de Cuidado de Bogotá de la Secretaría Distrital de la Mujer. Mujer feminista, psicóloga con especialización en Resolución de Conflictos y Maestría en Estudios de Paz de la Pontificia Universidad Javeriana; estudios en género y diseño de proyectos sociales con perspectiva de género, y con una amplia experiencia en el sector público de más de 15 años, en la defensa de los derechos humanos de las mujeres, perspectivas de paz y en la transversalización del enfoque de género a nivel distrito y nación, experiencia que se enmarca en una actitud ética y comprometida con el necesario cambio social, para el logro de sociedades equitativas, justas e incluyentes.</p>
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
        <div class="modal fade" id="modal-18" tabindex="-1" role="dialog" aria-labelledby="modal-18" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="image img-modal">
                            <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/18_-_adriana_iza.png" alt="Foto: Adriana Iza" title="Foto: Adriana Iza">
                        </div>
                        <div class="text text-modal">
                            <h3>Adriana Iza</h3>
                            <h4>Subsecretaria de Servicios a la ciudadanía - Secretaría Distrital de Movilidad</h4>
                            <hr>
                            <p class="paragraph ph-modal">"Administradora de empresas con máster en Estudios Políticos de la Universidad Javeriana. Candidata a magíster en Derecho y Gestión Urbanística y especialista en Evaluación Social de Proyectos en la Universidad de los Andes.</p>
                            <p class="paragraph ph-modal">Durante su carrera se ha enfocado en la implementación de estrategias de cambio social, es así que, se destaca su labor dentro de la Secretaría Distrital de Movilidad, donde se ha desempeñado desde diferentes cargos: como Directora de Estudios Sectoriales lideró el proceso de sustitución de vehículos de tracción animal para el transporte en Bogotá a nuevas formas de transporte que mejoraran la calidad de vida de las personas menos beneficiadas. Durante su paso por la Oficina de Gestión Social se enfocó en proyectos de eliminación de brechas de género en el sector de tránsito y transporte y creó y lideró el primer Centro de Orientación a Víctimas de Siniestros Viales (ORVI). Como Subsecretaria de Servicio a la Ciudadanía ha logrado innovaciones en la atención a la ciudadanía como la incorporación de mujeres en la flota de operaciones que conducen grúas, estabilizó la puesta en operación plena de la Ventanilla Única de Servicios, articuló en una sola aplicación “Mi Movilidad a un Clic” los servicios de toda la entidad para facilidad de las personas, implementó el nuevo sistema contravencional para disminuir tiempos de atención, además de la ampliación de canales de atención y 5 nuevas salas de cursos pedagógicos.</p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Diana Parra-->
        <div class="modal fade" id="modal-19" tabindex="-1" role="dialog" aria-labelledby="modal-19" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="image img-modal">
                            <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/19_-_diana_parra.png" alt="Foto: Diana Parra" title="Foto: Diana Parra">
                        </div>
                        <div class="text text-modal">
                            <h3>Diana Parra</h3>
                            <h4>Asesora en Asuntos de Género y Política Exterior del Ministerio de Relaciones Exteriores</h4>
                            <hr>
                            <p class="paragraph ph-modal">"Asesora en Asuntos de Género y Política Exterior Feminista del Ministerio de Relaciones Exteriores</p>
                            <p class="paragraph ph-modal">Se ha desempeñado como Subsecretaria del cuidado y Políticas de Igualdad de la Secretaría de la Mujer</p>
                            <p class="paragraph ph-modal">Psicóloga, con formación interdisciplinaria, de la Universidad Externado de Colombia, Maestría en Estudios Políticos, Especialista en estudios feministas y de género. Experiencia en la construcción y ejecución de proyectos de investigación social, conocimiento y experiencia en el análisis de datos cualitativos y cuantitativos. Experiencia y conocimiento en Conflicto Armado Colombiano, Derecho Internacional Humanitario y Derechos Humanos. Aplicación de los enfoques diferencial y de género.</p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Diana Herrera-->
        <div class="modal fade" id="modal-20" tabindex="-1" role="dialog" aria-labelledby="modal-20" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="image img-modal">
                            <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/20_-_diana_herrera.png" alt="Foto: Diana Herrera" title="Foto: Diana Herrera">
                        </div>
                        <div class="text text-modal">
                            <h3>Diana Herrera</h3>
                            <h4>Pintora comprometida con la reivindicaicón de género y la justicia social.</h4>
                            <hr>
                            <p class="paragraph ph-modal">Actriz y artista multidisciplinaria, reconocida por su participación en producciones como Bronx y Los Medallistas.</p>
                            <p class="paragraph ph-modal">Su trabajo va más allá de la actuación, destacándose también como pintora comprometida con la reivindicación de género y la justicia social. A través de su arte, explora la feminidad, la resistencia y la igualdad, utilizando el color y la forma como herramientas para visibilizar las luchas de las mujeres. </p>
                            <p class="paragraph ph-modal">Diana es una ferviente defensora de la sostenibilidad y el bienestar social, buscando generar un impacto positivo y transformador tanto en la comunidad artística como en la sociedad en general.</p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- Modal Yu Wu-->
        <div class="modal fade" id="modal-21" tabindex="-1" role="dialog" aria-labelledby="modal-21" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="image img-modal">
                            <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/21_-_yu_wu.png" alt="Foto: Yu Wu" title="Foto: Yu Wu">
                        </div>
                        <div class="text text-modal">
                            <h3>Yu Wu</h3>
                            <h4>Senior Advisor de Metro Línea 1</h4>
                            <hr>
                            <p class="paragraph ph-modal">Con quince años en América Latina, Yu Wu ejercía como vicepresidente para América Latina de China Harbour Engineering Corp. (CHEC) y se movía entre Bogotá y Panamá. Aterrizó en el pais como ingeniero de la multinacional Sinohydro, empresa que participó sin éxito en las licitaciones de Hidroituango y la navegación del río Magdalena.</p>
                            <p class="paragraph ph-modal">La CHEC aprovechó su familiaridad con la región para nombrarlo cabeza de la división de America Latina de la mega compañía de infraestrcutura en la que el gobierno chino tiene peso. Obtuvieron con una primera licitación, la Autopista al Mar Fase II, entre Sopetrán y Cañasgordas (Antioquia).</p>
                            <p class="paragraph ph-modal">Responsable de la ejecución de una doble calzada en Costa Rica y un terminal de cruceros en Ciudad de Panamá, fue promovido para el proyecto estrella de los chinos en el continente.</p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Dario Hildalgo-->
        <div class="modal fade" id="modal-23" tabindex="-1" role="dialog" aria-labelledby="modal-23" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="image img-modal">
                            <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/23_-_dario_hidalgo.png" alt="Foto: Dario Hildalgo" title="Foto: Dario Hildalgo">
                        </div>
                        <div class="text text-modal">
                            <h3>Dario Hildalgo</h3>
                            <h4>Phd. Profesor Facultad de Ingenieria - Universidad Javierana</h4>
                            <hr>
                            <p class="paragraph ph-modal">Es profesor de transporte y logística en la Pontificia Universidad Javeriana. Se ha desempeñado como asesor de gobiernos locales, nacionales y organismos internacionales de desarrollo en América Latina, Asia y África. Fue subgerente de TransMilenio (2000-2003) y gerente del proyecto Metro de Bogotá (1998-2000). Estudió ingeniería civil y una especialización en evaluación de proyectos en la Universidad de los Andes, una maestrpia y un doctorado en ingeniería de transporte en la Universidad Estatal de Ohio</p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- Modal Maria Fernanda Ortiz-->
        <div class="modal fade" id="modal-24" tabindex="-1" role="dialog" aria-labelledby="modal-24" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="image img-modal">
                            <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/24_-_ma._fernanda_ortiz.png" alt="Foto: Maria Fernanda Ortiz" title="Foto: Maria Fernanda Ortiz">
                        </div>
                        <div class="text text-modal">
                            <h3>Maria Fernanda Ortiz</h3>
                            <h4>Gerente Transmilenio SA</h4>
                            <hr>
                            <p class="paragraph ph-modal">"Cuenta con más de 15 años de trayectoria en la estructuración, desarrollo e implementación de proyectos de Infraestructura y transporte, tanto en el sector privado como en el público.</p>
                            <p class="paragraph ph-modal">María Fernanda es Ingeniera Civil de la Universidad de los Andes. Para complementar su formación académica cursó dos maestrías, una en Ingeniería de Transportes de la misma alma mater y otra en Ciudades Inteligentes y Analítica Urbana de University College London. María Fernanda se desempeñó como asesora de despacho de la Secretaría Distrital de Movilidad de Bogotá y participó en la planeación e implementación de proyectos como la Primera Línea del Metro de la capital.</p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Eric Dumbaugh-->
        <div class="modal fade" id="modal-25" tabindex="-1" role="dialog" aria-labelledby="modal-25" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="image img-modal">
                            <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/25_-_eric_dumbaugh.png" alt="Foto: Eric Dumbaugh" title="Foto: Eric Dumbaugh">
                        </div>
                        <div class="text text-modal">
                            <h3>Eric Dumbaugh</h3>
                            <h4>Profesor y Director del Centro de Ciencias Colaborativas para la Seguridad VIal - Universidad Atlantica de Florida </h4>
                            <hr>
                            <p class="paragraph ph-modal">El Dr. Eric Dumbaugh es un líder mundial en planificación y diseño de calles urbanas seguras. Su trabajo se centra en la aplicación de conceptos de sistemas seguros a la práctica del transporte, con especial atención en las relaciones entre el diseño urbano y la seguridad vial. Es autor de más de 100 trabajos técnicos y ha recibido los premios académicos más importantes de la profesión del transporte, incluido el Mejor Artículo de la Revista de la Asociación Estadounidense de Planificación y el Premio al Trabajo Sobresaliente en Diseño Geométrico de la Junta de Investigación del Transporte de las Academias Nacionales de Ciencias. El Dr. Dumbaugh ha dirigido programas de investigación y capacitación para grupos como la Organización Mundial de la Salud, el Instituto de Recursos Mundiales y numerosos gobiernos estatales y locales en todo Estados Unidos. Su investigación ha aparecido en el New York Times, Scientific American, NPR y The Atlantic, entre muchos otros.</p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Wes Marshal-->
        <div class="modal fade" id="modal-26" tabindex="-1" role="dialog" aria-labelledby="modal-26" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="image img-modal">
                            <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/26_-_wes_marshall.png" alt="Foto: Wes Marshal" title="Foto: Wes Marshal">
                        </div>
                        <div class="text text-modal">
                            <h3>Wes Marshal</h3>
                            <h4>Profesor Facultad de Ingeniería y Ciencias Aplicadas y Autor del libro: Asesinado por un ingeniero de tránsito</h4>
                            <hr>
                            <p class="paragraph ph-modal">"Wes Marshall, PhD, PE, es profesor de ingeniería civil en la Universidad de Colorado en Denver, donde ocupa un puesto conjunto en planificación urbana. Desempeña un papel fundamental como director del programa de Transporte Centrado en las Personas de CU Denver y del Centro de Investigación del Transporte de CU Denver. Wes es un ingeniero profesional autorizado y se centra en la enseñanza y la investigación sobre transporte dedicadas a crear sistemas de transporte más seguros y sostenibles.</p>
                            <p class="paragraph ph-modal">Wes es el autor del libro de 2024 Asesinado por un ingeniero de tráfico. También tiene más de 80 publicaciones en revistas revisadas por pares y capítulos de libros a su nombre y ha recibido millones de dólares en financiación para investigación. Wes fue el ganador del Premio al Profesorado Sobresaliente en Investigación de CU Denver en todo el campus. También le apasiona enseñar y orientar a los estudiantes y es el único ganador en tres ocasiones del Premio a la Facultad Destacada en Enseñanza de la Facultad de Ingeniería de CU Denver.</p>
                            <p class="paragraph ph-modal">Nativo de Watertown, Massachusetts, Wes se graduó de la Universidad de Virginia (BS) y de la Universidad de Connecticut (MS y PhD). Ha recibido la beca Eisenhower Transportation Fellowship, la beca Endeavor de Australia y el premio Wootan de la Junta de Investigación del Transporte por su destacado trabajo en política y organización.</p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Anne Eriksonn-->
        <div class="modal fade" id="modal-27" tabindex="-1" role="dialog" aria-labelledby="modal-27" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="image img-modal">
                            <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/27_-_anne_eriksson.png" alt="Foto: Anne Eriksonn" title="Foto: Anne Eriksonn">
                        </div>
                        <div class="text text-modal">
                            <h3>Anne Eriksonn</h3>
                            <h4>Ingeniera de Seguridad Vial - Dirección de Carreteras de Dinamarca.</h4>
                            <hr>
                            <p class="paragraph ph-modal">Se graduó en la Universidad Técnica de Dinamarca en 1988 y desde entonces ha trabajado en carreteras y tráfico rodado en la administración de carreteras públicas. Desde 1999, su campo de trabajo ha sido la seguridad vial, enfocándose en el tráfico urbano tanto en la ciudad de Copenhague como en el municipio de Gladsaxe, con especial atención en la seguridad de ciclistas y peatones. Actualmente, trabaja en la Dirección de Carreteras de Dinamarca en temas de seguridad vial en las carreteras estatales. Además de su experiencia en Dinamarca, también ha participado en misiones breves de seguridad vial en el extranjero, principalmente en América del Sur. También es profesor invitado en la Universidad Técnica de Dinamarca.</p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Juan Pablo Bocarejo-->
        <div class="modal fade" id="modal-28" tabindex="-1" role="dialog" aria-labelledby="modal-28" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="image img-modal">
                            <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/28_-_juan_pablo_bocarejo.png" alt="Foto: Juan Pablo Bocarejo" title="Foto: Juan Pablo Bocarejo">
                        </div>
                        <div class="text text-modal">
                            <h3>Juan Pablo Bocarejo</h3>
                            <h4>Director del Departamento de Ingeniería Civil y Ambiental - Universidad de Los Andes</h4>
                            <hr>
                            <p class="paragraph ph-modal">"Juan Pablo Bocarejo es ingeniero civil de la Universidad de los Andes, magíster en Estudios Avanzados en Transporte de la Universidad de Paris-Est Créteil y Ph.D. en Transporte de la Universidad de París.</p>
                            <p class="paragraph ph-modal">Su experiencia se refleja en más de 100 investigaciones y proyectos, que abordan temáticas cruciales como movilidad urbana, seguridad vial, economía del transporte, cambio climático y desigualdades, entre otras. </p>
                            <p class="paragraph ph-modal">Como cofundador y director del Grupo de Estudios en Sostenibilidad Urbana y Regional (SUR), ha liderado numerosas iniciativas orientadas a la generación de conocimiento, que han contribuido significativamente al entendimiento y resolución de problemas en áreas clave como movilidad, transporte, ciudad y bienestar, desde una perspectiva innovadora y sostenible. </p>
                            <p class="paragraph ph-modal">Desde el Departamento de Ingeniería Civil y Ambiental ha logrado el financiamiento para diversos proyectos e investigaciones, colaborando con instituciones como el Banco Interamericano de Desarrollo (BID), la Agence Française de Développement (AFD), el Banco Mundial y el Banco de Desarrollo de América Latina y el Caribe (CAF). Su capacidad para liderar iniciativas de importancia internacional es evidente en estas colaboraciones exitosas.</p>
                            <p class="paragraph ph-modal">Bocarejo ha participado en proyectos significativos como el diseño del primer cable urbano en Medellín, el Transmetro en Barranquilla, así como diversos estudios de metro y proyectos de transporte no motorizado. Entre los años 2016 y 2019, ocupó el cargo de secretario de Movilidad de Bogotá.</p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Marcin Flieger-->
        <div class="modal fade" id="modal-29" tabindex="-1" role="dialog" aria-labelledby="modal-29" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="image img-modal">
                            <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/29_-_marcin_flieger.png" alt="Foto: Marcin Flieger" title="Foto: Marcin Flieger">
                        </div>
                        <div class="text text-modal">
                            <h3>Marcin Flieger</h3>
                            <h4>Gerente de desarrollo de capacidades de vigilancia vial - Alianza mundial para la seguridad vial (GRSP)</h4>
                            <hr>
                            <p class="paragraph ph-modal"></p>
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
        <div class="modal fade" id="modal-30" tabindex="-1" role="dialog" aria-labelledby="modal-30" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="image img-modal">
                            <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/30_-_nathaly_patino.png" alt="Foto: Nathaly Patiño" title="Foto: Nathaly Patiño">
                        </div>
                        <div class="text text-modal">
                            <h3>Nathaly Patiño</h3>
                            <h4>Directora de Gestión de Tránsito y Control de Tránsito y Transporte - Secretaría Distrital de Movilidad</h4>
                            <hr>
                            <p class="paragraph ph-modal">"Ingeniera Civil de la Universidad Nacional de Colombia, con experiencia en tránsito y transporte, especialmente en temas relacionados con gestión en vía en la Secretaría Distrital de Movilidad y en proyectos de consultoría. Tiene una especialización en Tránsito y Transporte de la Universidad Pedagógica y Tecnológica de Colombia.</p>
                            <p class="paragraph ph-modal">Fue contratista en la Subdirección de Gestión en Vía, donde tenía a su cargo las Localidades de Santa Fe, Candelaria, Chapinero y de la Avenida Caracas. Posteriormente, se desempeñó como Subdirectora, rol en el que se destacó por trabajar para que la ciudadanía reconozca a la Entidad como una mano amiga en la vía. Asume esta dirección con el propósito de continuar cuidando a la Ciudad desde la gestión y el control. Además de fortalecer a los equipos que están en vía, demostrando eficiencia en la atención de situaciones de emergencia, y en momentos claves como la época de lluvias, los planes éxodo y retorno y las manifestaciones que se presentan en Bogotá.</p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Paula Caporal-->
        <div class="modal fade" id="modal-31" tabindex="-1" role="dialog" aria-labelledby="modal-31" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="image img-modal">
                            <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/31_-_paula_caporal.png" alt="Foto: Paula Caporal" title="Foto: Paula Caporal">
                        </div>
                        <div class="text text-modal">
                            <h3>Paula Caporal</h3>
                            <h4>Investigadora Asociada - Universidad Johns Hopkins</h4>
                            <hr>
                            <p class="paragraph ph-modal">Paula Caporal es médica pediatra e intensivista, especializada en trauma y lesiones, con amplia experiencia en la práctica clínica y en investigación. Cuenta con una maestría en Efectividad Clínica de la Universidad de Buenos Aires/Instituto de Efectividad Clínica y Sanitaria (UBA/IECS), con énfasis en epidemiología e investigación clínica, y otra maestría en Salud Pública de la Escuela de Salud Pública de la Universidad de Johns Hopkins. Actualmente es Investigadora Asociada en la Unidad de Investigación en Lesiones Internacionales de la Universidad Johns Hopkins, donde colabora con la Iniciativa Bloomberg para la Seguridad Vial Mundial. Su trabajo se centra en evaluar lesiones por siniestros de tránsito en América Latina, con el fin de promover intervenciones basadas en evidencia y fomentar la equidad entre los distintos usuarios viales.</p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Ked Wills-->
        <div class="modal fade" id="modal-32" tabindex="-1" role="dialog" aria-labelledby="modal-32" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="image img-modal">
                            <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-09-2024/52_-_ked_wills.png" alt="Foto: Ked Wills" title="Foto: Ked Wills">
                        </div>
                        <div class="text text-modal">
                            <h3>Ked Wills</h3>
                            <h4>Consultor de la Asociación Internacional de Jefes de Policía - IACP</h4>
                            <hr>
                            <p class="paragraph ph-modal">"El coronel Wills, un policía de segunda generación, ha sido miembro del Departamento de Policía del Estado de Idaho desde 1996 y ha ocupado el cargo de coronel desde 2017. Su liderazgo y dedicación han dejado una huella profunda, y su ausencia se sentirá notablemente. Inició su carrera en enero de 1996 como oficial en el sureste de Idaho y ha ocupado varios puestos en diversas áreas del estado. En 2017, el gobernador Butch Otter lo nombró director de la Policía Estatal de Idaho, y en 2020, el gobernador Brad Little le pidió que continuara en este cargo, confirmación que recibió del Senado de Idaho.</p>
                            <p class="paragraph ph-modal">Durante su gestión, ha sido miembro de varias organizaciones, incluyendo el Consejo de Normas y Capacitación de Oficiales de Paz de Idaho. También fue presidente regional de la Asociación Internacional de Jefes de Policía. Wills posee títulos de licenciatura y maestría de la Universidad Estatal de Idaho y ha completado programas en la Academia Nacional del FBI. Bajo su liderazgo, la ISP ha crecido significativamente, destacándose por su compromiso con la tradición y un enfoque moderno en la aplicación de la ley. Ha impulsado iniciativas para mejorar la seguridad pública, incluyendo avances tecnológicos, programas de capacitación mejorados y fortalecimiento de asociaciones comunitarias.</p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Ana Maria Cataño-->
        <div class="modal fade" id="modal-33" tabindex="-1" role="dialog" aria-labelledby="modal-33" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="image img-modal">
                            <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/33_-_ana_maria_catano.png" alt="Foto: Ana Maria Cataño" title="Foto: Ana Maria Cataño">
                        </div>
                        <div class="text text-modal">
                            <h3>Ana Maria Cataño</h3>
                            <h4>Jefe de la Oficina de Comunicaciones y Cultura para la Movilidad - Secretaría Distrital de Movilidad</h4>
                            <hr>
                            <p class="paragraph ph-modal">"Comunicadora social y periodista de la Universidad Pontificia Bolivariana, con maestría en Ciencias Políticas de la Universidad de los Andes. Tiene más de 13 años de experiencia en comunicación corporativa, mercadeo, posicionamiento de marca y relaciones públicas.</p>
                            <p class="paragraph ph-modal">Se desempeñó como consultora de comunicaciones estratégicas y de marca, directora de desarrollo de negocios y mercadeo y gerente de comunicaciones en reconocidas empresas privadas, ganando así una sólida reputación como experta en comunicación 360, posicionamiento de marca, comunicación estratégica y corporativa, y estructuración de áreas y procesos de comunicación.</p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Natalia Ariza-->
        <div class="modal fade" id="modal-34" tabindex="-1" role="dialog" aria-labelledby="modal-34" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="image img-modal">
                            <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/34_-_natalia_ariza.png" alt="Foto: Natalia Ariza" title="Foto: Natalia Ariza">
                        </div>
                        <div class="text text-modal">
                            <h3>Natalia Ariza</h3>
                            <h4>Especialista de Transporte - Banco Interamericano de Desarrollo </h4>
                            <hr>
                            <p class="paragraph ph-modal">Natalia Ariza Donado tiene una destacada carrera en el ámbito del transporte y la infraestructura, con una amplia experiencia en la estructuración, financiación y gestión de proyectos de transporte, tanto en el sector público como en el privado. En su rol como Especialista en Transporte del Banco Interamericano de Desarrollo, lidera la cartera de proyectos en Colombia relacionados con asociaciones público-privadas (APP), transporte urbano sostenible y seguridad vial.</p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Marcela Neira-->
        <div class="modal fade" id="modal-35" tabindex="-1" role="dialog" aria-labelledby="modal-35" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="image img-modal">
                            <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/35_-_marcela_neira.png" alt="Foto: Marcela Neira" title="Foto: Marcela Neira">
                        </div>
                        <div class="text text-modal">
                            <h3>Marcela Neira</h3>
                            <h4>Asesora Técnica - Agencia de Cooperación Alemana en Colombia (GIZ)</h4>
                            <hr>
                            <p class="paragraph ph-modal">"Ingeniero motivado con 11 años de experiencia en gestión, movilidad y desarrollo urbano sostenible. Actualmente soy estudiante de maestría en Gestión. Con muchas ganas e ilusión de asumir nuevos retos, seguir aprendiendo y creciendo en mi vida profesional, y contribuir a desarrollar proyectos para las personas y para un mundo mejor. Listo para poner a disposición mi facilidad para el trabajo interdisciplinario, mis habilidades para la toma de decisiones, coordinación y planificación, así como mi pensamiento estratégico, capacidad analítica e interpersonal.</p>
                            <p class="paragraph ph-modal">Como ingeniero, tengo capacidad analítica y de resolución de problemas, soy práctico, ingenioso y recursivo. Aunque mi enfoque laboral ha sido en el sector de la movilidad, soy capaz de implementar estas habilidades en diferentes áreas, incluso fuera de la ingeniería.</p>
                            <p class="paragraph ph-modal">Soy un viajero apasionado y curioso por la gastronomía, lo que me ha abierto la mente, me ha enseñado a valorar la riqueza de la diversidad y ha desarrollado mis habilidades de adaptabilidad, sociabilidad, observación y atención al detalle.</p>
                            <p class="paragraph ph-modal">Mi experiencia laboral en diferentes roles demuestra que soy un trabajador dinámico y altamente comprometido, capaz de realizar tareas de investigación y técnicas, así como aquellas relacionadas con la gestión, presupuesto, planificación, liderazgo de equipos, gestión del cambio y toma de decisiones.</p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Ricardo Montezuma-->
        <div class="modal fade" id="modal-36" tabindex="-1" role="dialog" aria-labelledby="modal-36" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="image img-modal">
                            <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/36_-_ricardo_montezuma.png" alt="Foto: Ricardo Montezuma" title="Foto: Ricardo Montezuma">
                        </div>
                        <div class="text text-modal">
                            <h3>Ricardo Montezuma</h3>
                            <h4>PhD en Urbanismo y Movilidad - Universidad Nacional de Colombia</h4>
                            <hr>
                            <p class="paragraph ph-modal"></p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal William Castro García-->
        <div class="modal fade" id="modal-37" tabindex="-1" role="dialog" aria-labelledby="modal-37" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="image img-modal">
                            <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/37_-_william_castro.png" alt="Foto: William Castro García" title="Foto: William Castro García">
                        </div>
                        <div class="text text-modal">
                            <h3>William Castro García</h3>
                            <h4>MSc en Transporte - Universidad Nacional de Colombia</h4>
                            <hr>
                            <p class="paragraph ph-modal">Ingeniero Civil. Especialista y Maestría en Transporte. Profesor Asociado de la Facultad de Ingeniería de la Universidad Nacional de Colombia sede Bogotá. Director y Especialista de múltiples proyectos de movilidad, transporte, tránsito e infraestructura desarrollados en ciudades como Cartagena, Barranquilla, Cúcuta, San Andrés, Ibagué, Ciénaga, Pasto, Maicao, Fusagasugá, Armenia, Yopal, Santa Marta, Valledupar, Villavicencio y Montería, entre otros. Miembro por Colombia ante la Red Universitaria Iberoamericana de Territorio y Movilidad (RUITEM) y del Congreso Latinoamericano de Transporte Público Urbano (CLATPU). Secretario General de la Red Académica de Movilidad (RAM) en Colombia.</p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Jose Segundo Lopez Valderrama-->
        <div class="modal fade" id="modal-41" tabindex="-1" role="dialog" aria-labelledby="modal-41" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="image img-modal">
                            <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-09-2024/51_-_segundo_lopez.png" alt="Foto: Jose Segundo Lopez Valderrama" title="Foto: Jose Segundo Lopez Valderrama">
                        </div>
                        <div class="text text-modal">
                            <h3>Jose Segundo Lopez Valderrama</h3>
                            <h4>Jefe Oficina de Seguridad Vial - Secretaría Distrital de Movilidad</h4>
                            <hr>
                            <p class="paragraph ph-modal">"Ingeniero civil con maestría en ingeniería civil con énfasis en transporte de la universidad de los Andes.</p>
                            <p class="paragraph ph-modal">Se ha desempeñado como asistente graduado en el grupo de investigación SUR de los Andes, como ingeniero principal en el centro de investigación Despacio, y como coordinador internacional de datos en el equipo de seguridad vial en WRI Centro Ross para Ciudades Sostenibles, rol en el cual desarrolló actividades relacionadas con recolección y análisis de datos e investigación, así como inspecciones y auditorías de seguridad vial. También trabajó en temas de investigación en género y transporte.</p>
                            <p class="paragraph ph-modal">A lo largo de su carrera ha asesorado proyectos de seguridad vial y movilidad sostenible desde su génesis hasta su evaluación aportando en todas las fases en tomar decisiones basadas en datos. Su objetivo en su nuevo cargo es trabajar en equipo para reducir la cantidad de fatalidades y heridas graves en el tránsito, contribuyendo así a una Bogotá de bien-estar.</p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Oscar Díaz-->
        <div class="modal fade" id="modal-42" tabindex="-1" role="dialog" aria-labelledby="modal-42" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="image img-modal">
                            <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/42_-_oscar_diaz.png" alt="Foto: Oscar Díaz" title="Foto: Oscar Díaz">
                        </div>
                        <div class="text text-modal">
                            <h3>Oscar Díaz</h3>
                            <h4>Asesor para Latinoamerica - Fundación FIA</h4>
                            <hr>
                            <p class="paragraph ph-modal">Oscar Edmundo Díaz ha dedicado su carrera de 22 años a la planificación urbana, el transporte y la seguridad vial. Es reconocido por liderar la planificación e implementación de proyectos de transporte, incluidos sistemas de autobús de tránsito rápido (BRT) e infraestructura segura para transporte no motorizado-NMT (ciclismo y caminata) en ciudades de América, África y Asia.</p>
                            <p class="paragraph ph-modal">Esta experiencia se complementa con un sólido conocimiento financiero para estructurar proyectos en las principales áreas urbanas. Oscar ha trabajado dos veces como Asesor Especial del Alcalde de Bogotá, Enrique Peñalosa (1998-2000 y 2016-2019), en el último mandato trabajó en un nuevo modelo de negocio para la renovación del sistema de autobuses BRT de la ciudad, separando los contratos de adquisiciones de los operación, adjudicando una nueva flota de más de 2.700 autobuses eléctricos y de bajas emisiones. El año pasado, Oscar realizó consultoría para organizaciones multilaterales y otros socios de la Fundación FIA, como ITDP y C40. Se incorporó a la Fundación FIA en abril de 2021 como Asesor para América Latina. Tiene una licenciatura en Finanzas de la Universidad Externado de Colombia y una Maestría en Asuntos Internacionales con concentración en Finanzas y Negocios Internacionales de la Universidad de Columbia, en Nueva York, Estados Unidos. Habla español, inglés y portugués.</p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Jhon Gonzalez-->
        <div class="modal fade" id="modal-43" tabindex="-1" role="dialog" aria-labelledby="modal-43" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="image img-modal">
                            <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/43_-_jhon_gonzalez.png" alt="Foto: Jhon Gonzalez" title="Foto: Jhon Gonzalez">
                        </div>
                        <div class="text text-modal">
                            <h3>Jhon Gonzalez</h3>
                            <h4>Subsecretario de Gestión de la Movilidad - Secretaria Distrital de Movilidad</h4>
                            <hr>
                            <p class="paragraph ph-modal">"Ingeniero Civil de la Universidad Nacional de Colombia, Especialista en Tránsito, Diseño y Seguridad vial, en proceso de Magister en Ingeniería de Transporte en la misma alma máter. Además, tiene estudios complementarios en modelación del transporte y el tránsito, así como auditorias de seguridad vial y diseño urbano.</p>
                            <p class="paragraph ph-modal">Basa su perfil profesional en el marco del diseño seguro y la modelación del transporte y el tránsito, enfocándose en el comportamiento peatonal y de ciclistas. Parte de su experiencia la ha desarrollado en la elaboración de diferentes estudios y diseños a nivel nacional, para diferentes firmas consultoras en términos de: Estudios de transporte y tránsito, modelación del tráfico, diseño geométrico vial, diseño de señalización, planes manejo de tráfico en obra y auditorias de seguridad vial. Su mayor reto es lograr armonizar los diferentes proyectos viales en el marco de la planeación, la gestión y la ejecución en el distrito con altos estándares de calidad, eficiencia y seguridad vial.</p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Nancy Jeanet Molina Achury-->
        <div class="modal fade" id="modal-44" tabindex="-1" role="dialog" aria-labelledby="modal-44" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="image img-modal">
                            <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-09-2024/50_-_nancy_molina.png" alt="Foto: Nancy Jeanet Molina Achury" title="Foto: Nancy Jeanet Molina Achury">
                        </div>
                        <div class="text text-modal">
                            <h3>Nancy Jeanet Molina Achury</h3>
                            <h4>Vicerrectora encargada - Universidad Nacional de Colombia Sede Bogotá</h4>
                            <hr>
                            <p class="paragraph ph-modal">"La profesora Nancy es Fisioterapeuta (Universidad Nacional de Colombia); Magister en Salud de los trabajadores Universidad Autónoma Metropolitana ¿ Xochimilco - México); Doctorada en Ciencias de la Salud (Universidad de Sao Paulo ¿ Brasil). Investigadora Colciencias Asociada. Profesora universitaria del programa de Fisioterapia de la Universidad Nacional de Colombia, con experiencia de 22 años, ha trabajado con instituciones gubernamentales y no gubernamentales en la dirección, coordinación, diseño, documentación, implementación, control, seguimiento y evaluación de proyectos innovadores en el campo de la salud con énfasis en Política Social, Salud Pública, Salud de los Trabajadores.</p>
                            <p class="paragraph ph-modal">Fue presidenta del Colegio Colombiano de Fisioterapeutas -COLFI y actualmente es la Directora de la Dirección de Bienestar Universitario de la Sede Bogotá.</p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Clara López García-->
        <div class="modal fade" id="modal-45" tabindex="-1" role="dialog" aria-labelledby="modal-45" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="image img-modal">
                            <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-09-2024/45_-_clara_lopez.png" alt="Foto: Clara López García" title="Foto: Clara López García">
                        </div>
                        <div class="text text-modal">
                            <h3>Clara López García</h3>
                            <h4>Consultora ONU Mujeres para el Ministerio de Relaciones Exteriores</h4>
                            <hr>
                            <p class="paragraph ph-modal"></p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Fabrizio Prati-->
        <div class="modal fade" id="modal-46" tabindex="-1" role="dialog" aria-labelledby="modal-46" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="image img-modal">
                            <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-09-2024/46_-_fabrizio.png" alt="Foto: Fabrizio Prati" title="Foto: Fabrizio Prati">
                        </div>
                        <div class="text text-modal">
                            <h3>Fabrizio Prati</h3>
                            <h4>Global Designing Cities Initiative"</h4>
                            <hr>
                            <p class="paragraph ph-modal">Fabrizio Prati es el Director de Diseño de la Iniciativa Global de Diseño de Ciudades, donde supervisa iniciativas de diseño urbano. Con más de 12 años de experiencia en diseño urbano y planificación, se especializa en movilidad sostenible y diseño de espacios públicos. Es graduado de la Universidad de California, Berkeley, y de la Escuela de Planificación de París. Fabrizio ha trabajado en proyectos en Europa, Norte de África y Asia. Le apasiona crear ciudades habitables e inclusivas.</p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Carolina Piñeros-->
        <div class="modal fade" id="modal-47" tabindex="-1" role="dialog" aria-labelledby="modal-47" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="image img-modal">
                            <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-09-2024/53_-_carolina_pineros.png" alt="Foto: Carolina Piñeros" title="Foto: Carolina Piñeros">
                        </div>
                        <div class="text text-modal">
                            <h3>Carolina Piñeros</h3>
                            <h4>Fundadora y directora ejecutiva RedPapaz</h4>
                            <hr>
                            <p class="paragraph ph-modal">Colombiana, casada y madre de tres hijos adultos. Ingeniera Industrial con Especialización en Desarrollo personal y familiar. Una de las fundadores de Red PaPaz desde la Asociación de Padres de Familia del Gimnasio La Montaña en el 2003, desde entonces es su Directora Ejecutiva. Participa en varias juntas directivas e iniciativas desde su compromiso con la garantía de derechos de niñas, niños y adolescentes.</p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Luis Yair Aguilar Rojas-->
        <div class="modal fade" id="modal-48" tabindex="-1" role="dialog" aria-labelledby="modal-48" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="image img-modal">
                            <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-09-2024/48_-_luis_yair.png" alt="Foto: Luis Yair Aguilar Rojas" title="Foto: Luis Yair Aguilar Rojas">
                        </div>
                        <div class="text text-modal">
                            <h3>Luis Yair Aguilar Rojas</h3>
                            <h4>Director de Coordinación Interinstitucional de la Agencia Nacional de Seguridad Vial</h4>
                            <hr>
                            <p class="paragraph ph-modal">Ingeniero Civil, Especialista en Recursos Hídricos, Especialista en Economía y Magister en Ingeniería Civil de la Universidad de los Andes. Con experiencia en Infraestructura de Transporte vial, se ha desempeñado como Gestor de Proyectos en la Subdirección de Vías Regionales y Asesor de la Dirección General Del Instituto Nacional de Vías - INVÍAS, Líder de Proyecto de la Agencia Nacional de Infraestructura - ANI, donde Laboró hasta su nombramiento como Director de Coordinación Interinstitucional en la Agencia Nacional de Seguridad Vial - ANSV.</p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Maria Fernanda Ramirez-->
        <div class="modal fade" id="modal-49" tabindex="-1" role="dialog" aria-labelledby="modal-49" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="image img-modal">
                            <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-09-2024/49_-_maria_fernanda_ramirez.png" alt="Foto: Maria Fernanda Ramirez" title="Foto: Maria Fernanda Ramirez">
                        </div>
                        <div class="text text-modal">
                            <h3>Maria Fernanda Ramirez</h3>
                            <h4>Presidenta de la RAM y Líder de movilidad de Despacio</h4>
                            <hr>
                            <p class="paragraph ph-modal">María es la actual Líder Segura y Sostenible de Despacio. Tiene casi 20 años de experiencia docente e investigadora como profesora universitaria sobre movilidad activa e inclusiva. Tiene experiencia liderando y coordinando proyectos de movilidad sostenible y seguridad vial en Colombia y América Latina, orientados a la inclusión y a los usuarios vulnerables. María es Ingeniera Civil y especialista en diseño vial de la Escuela Colombiana de Ingeniería (COL); y Máster en Ingeniería Civil y Máster en Planificación Comunitaria por la Universidad de Cincinnati (EE.UU.).</p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Miguel Ángel Cuéllar-->
        <div class="modal fade" id="modal-50" tabindex="-1" role="dialog" aria-labelledby="modal-50" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="image img-modal">
                            <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-09-2024/54_-_miguel_angel_cuellar.png" alt="Foto: Miguel Ángel Cuéllar" title="Foto: Miguel Ángel Cuéllar">
                        </div>
                        <div class="text text-modal">
                            <h3>Miguel Ángel Cuéllar</h3>
                            <h4>Youth Coalition for Globlal Road Safety</h4>
                            <hr>
                            <p class="paragraph ph-modal"></p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Rafael Unda-->
        <div class="modal fade" id="modal-38" tabindex="-1" role="dialog" aria-labelledby="modal-38" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="image img-modal">
                            <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/38_-_rafael_unda.png" alt="Foto: Rafael Unda" title="Foto: Rafael Unda">
                        </div>
                        <div class="text text-modal">
                            <h3>Rafael Unda</h3>
                            <h4>Director de Inteligencia para la Movilidad - Secretaría Distrital de Movilidad</h4>
                            <hr>
                            <p class="paragraph ph-modal">Ingeniero civil y magíster en ingeniería civil con énfasis en transporte de la Universidad de los Andes. Realizó una maestría en planificación urbana en la Universidad de California en Berkeley, donde vivió tres años, de los cuales trabajó un año en UC Berkeley Safe Transportation Researchand Education Center.</p>
                            <p class="paragraph ph-modal">Se ha desempeñado como consultor en el sector transporte, también laboró en TransMilenio, y dentro de su experiencia laboral se destaca que hizo parte del equipo consultor que realizó la Encuesta de Movilidad 2019 para la Secretaría Distrital de Movilidad.</p>
                            <p class="paragraph ph-modal">Pertenecera la Entidad para él es un orgullo y una gran responsabilidad, se hapropuesto desde esta Dirección encontrar un balance entre los temas administrativos y el ser propositivo con ideas que permitan mejorar la movilidad en Bogotá.</p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <!-- Modal Marco Peres-->
        <div class="modal fade" id="modal-51" tabindex="-1" role="dialog" aria-labelledby="modal-51" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="image img-modal">
                            <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/42_-_marco_peres.png" alt="Foto: Marco Peres" title="Foto: Marco Peres">
                        </div>
                        <div class="text text-modal">
                            <h3>Marco Peres</h3>
                            <h4>Universidad Externado de Colombia</h4>
                            <hr>
                            <p class="paragraph ph-modal"></p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- Modal Olga Sarmiento-->
        <div class="modal fade" id="modal-52" tabindex="-1" role="dialog" aria-labelledby="modal-52" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="image img-modal">
                            <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-09-2024/55_-_olga_sarmiento_.png" alt="Foto: Olga Sarmiento" title="Foto: Olga Sarmiento">
                        </div>
                        <div class="text text-modal">
                            <h3>Olga Sarmiento</h3>
                            <h4></h4>
                            <hr>
                            <p class="paragraph ph-modal"></p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Alex Quistberg-->
        <div class="modal fade" id="modal-53" tabindex="-1" role="dialog" aria-labelledby="modal-53" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="image img-modal">
                            <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-09-2024/56_-_alex_quistberg.png" alt="Foto: Alex Quistberg" title="Foto: Alex Quistberg">
                        </div>
                        <div class="text text-modal">
                            <h3>Alex Quistberg</h3>
                            <h4></h4>
                            <hr>
                            <p class="paragraph ph-modal"></p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Modal Angie Buitrago-->
        <div class="modal fade" id="modal-54" tabindex="-1" role="dialog" aria-labelledby="modal-54" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="image img-modal">
                            <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/30-09-2024/59_-_angie_buitrago_orvi.png" alt="Foto: Angie Buitrago" title="Foto: Angie Buitrago">
                        </div>
                        <div class="text text-modal">
                            <h3>Angie Buitrago</h3>
                            <h4>ORVI, Centro de orientación a víctimas de siniestros viales</h4>
                            <hr>
                            <p class="paragraph ph-modal"></p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>





    </div>

    <style>
        .ssv .cpnt-1 {
            /* background: #f5f5f5; */
            padding: 0px;
        }

        @media(min-width:768px) {
            .ssv .cpnt-1 {
                /* background: #f5f5f5; */
                padding: 16px;
            }
        }

        .cpnt-1 .logo {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .cpnt-1 .logo img {
            max-width: 100%;
            height: auto;
        }
    </style>
    <div class="cpnt cpnt-1 cpnt-logo">
        <picture>
            <source media="(min-width: 465px)" srcset="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/28-08-2024/16_-_banner_general_semana_agosto28_mesa_de_trabajo_1.png">
            <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/28-08-2024/16_-_banner_general_semana_agosto28_mesa_de_trabajo_1.png" class="img-responsive w-100" alt="Logo Semana de la Seguridad Vial" title="Image: Logo Semana de la Seguridad Vial">
        </picture>
    </div>

    <style>
        .ssv .cpnt-2 {
            /* background: #f5f5f5; */
            padding: 0px;
            display: grid;
            gap: 8px;
            grid-auto-flow: dense;
            grid-template-columns: 1fr;
            grid-template-rows: auto;
        }

        @media(min-width:768px) {
            .ssv .cpnt-2 {
                /* background: #f5f5f5; */
                padding: 16px;
                display: grid;
                column-gap: 32px;
                grid-auto-flow: dense;
                grid-template-columns: 1fr 1fr;
                grid-template-rows: auto;
                align-items: center;
            }
        }

        .cpnt-2 .title-1 {
            color: #4d541f;
            text-align: center;
            font-size: 18px;
        }

        .cpnt-2 .ph-1 {
            font-family: 'Montserrat', sans-serif;
            font-size: 16px;
            text-align: justify;
        }
    </style>
    <div class="cpnt cpnt-2 cpnt-intro">
        <div class="left">
            <h3 class="title title-1">#NoSomosUnaCifra</h3>
            <p class="paragraph ph-1">Del 1 al 5 de octubre, Bogotá celebra la Semana de la XVIII Seguridad Vial, un espacio para priorizar la protección de quienes se movilizan por la ciudad, porque no somos una cifra, sino personas con alguien que nos espera en casa.</p>
            <p class="paragraph ph-1">Esta semana invitamos a peatones, ciclistas, motociclistas y conductores a hacer de Bogotá un lugar más seguro, reconociendo la importancia de cuidarnos y respetarnos en la vía.</p>
            <p class="paragraph ph-1">Además, contaremos con expertos internacionales y nacionales, actividades para estudiantes, y el Seminario Internacional que tocará temas como el control de velocidad, el enfoque de género e innovación en infraestructura.</p>
        </div>
        <div class="right">
            <div class="video video-2 video-16by9">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe width='100%' src='https://www.youtube.com/embed/StgH9BDP9u4' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>

    <style>
        .ssv .cpnt-3 {
            background: #f5f5f5;
            padding: 8px 0px 8px 0px;

            display: grid;
            gap: 8px;
            grid-auto-flow: dense;
            grid-template-columns: 1fr;
            grid-template-rows: auto;
        }

        @media(min-width:768px) {
            .ssv .cpnt-3 {
                padding: 16px;
                grid-template-columns: 1fr 3fr;
            }
        }

        .ssv .cpnt-3 .tabs {
            /* background: #fff; */
        }

        .ssv .cpnt-3 .panes {
            /* background: #fff; */
            padding: 0px;
        }

        @media(min-width:768px) {
            .ssv .cpnt-3 .panes {
                padding: 16px;

            }

        }

        .ssv .cpnt-3 .enfasis-text {
            font-optical-sizing: auto;
            font-size: 12px;
            font-weight: bold;
            text-align: left;
            line-height: 18px;
            text-transform: uppercase;
        }

        .ssv .event .event-allies .aliados {
            display: flex;
            gap: 16px;
            align-content: center;
            justify-content: space-evenly;
            align-items: flex-start;
            flex-direction: row;
            flex-wrap: wrap;
            margin-bottom: 24px;

        }


        .ssv .event .event-allies .item {
            max-width: 200px;
            text-align: center;
        }

        .ssv .event .event-allies .item img {
            width: 100%;
            max-width: 200px;
            margin: auto;
        }

        .ssv .event .event-allies .item-large {
            max-width: 400px;
            text-align: center;
        }


        .ssv .event .event-allies .item-large img {
            width: 100%;
            max-width: 400px;
            margin: auto;
        }

        .ssv .invitados {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: center;
            align-items: flex-start;
            align-content: normal;
        }

        .ssv #tab6 .title-1 {
            color: #4d541f;
            margin: 32px;
            padding: 16px;
            text-align: center;
            border-bottom: solid 2px #4d541f;
        }

        .ssv #tab7 .title-1 {
            color: #4d541f;
            margin: 32px;
            padding: 16px;
            text-align: center;
            border-bottom: solid 2px #4d541f;
        }
    </style>
    <div class="cpnt cpnt-3 cpnt-pills">
        <div class="tabs">
            <ul class="nav nav-pills nav-stacked" role="presentation">
                <li role="presentation" class="active"><a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab">Martes, 1 octubre</a></li>
                <li role="presentation"><a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab">Miércoles, 2 octubre</a></li>
                <li role="presentation"><a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab">Jueves, 3 octubre</a></li>
                <li role="presentation"><a href="#tab4" aria-controls="tab4" role="tab" data-toggle="tab">Viernes, 4 octubre</a></li>
                <li role="presentation"><a href="#tab5" aria-controls="tab5" role="tab" data-toggle="tab">Sábado, 5 octubre</a></li>
                <li role="presentation"><a href="#tab7" aria-controls="tab7" role="tab" data-toggle="tab">Plan Distrital de Seguridad Vial 2023 - 2032</a></li>
                <li role="presentation"><a href="#tab6" aria-controls="tab6" role="tab" data-toggle="tab">Invitados</a></li>
            </ul>
        </div>
        <div class="panes">
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="tab1">

                    <!-- collapse group dia1 -->
                    <div class='panel-group' id='accordion-dia1' role='tablist ' aria-multiselectable='true'>

                        <!-- collapse d1-1 -->
                        <!-- <div class='panel panel-primary'>
                            <div class='panel-heading' role='tab' id='heading-d1-1'>
                                <h4 class='panel-title'>
                                    <a role='button' data-toggle='collapse' data-parent='#accordion-dia1' href='#collapse-d1-1' aria-expanded='false' aria-controls='collapse-d1-1'>
                                        <span class="enfasis-text">APERTURA XVIII SEMANA DE LA SEGURIDAD VIAL</span><br>PRESENTACIÓN DE LA IMPLEMENTACIÓN DE RESALTOS PARABÓLICOS - RUEDA DE PRENSA
                                    </a>
                                </h4>
                            </div>
                            <div id='collapse-d1-1' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading-d1-1' aria-expanded='false'>
                                <div class='panel-body'>
                                    <div class='body-collapse-d1-1'>

                                        <div class="event event-1">
                                            <div class="event-info">
                                                <p class="paragraph ph-hora"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>6:00 a.m. a 7:00 a.m.</p>
                                                <p class="paragraph ph-lugar"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Av. Guayacanes</p>
                                            </div>
                                            <div class="event-description">
                                                <p class="paragraph ph-1">La Secretaría Distrital de Movilidad convoca a la rueda de prensa para presentar una de las principales estrategias de infraestructura en seguridad vial para reducir la velocidad en corredores arteriales: los resaltos parabólicos.</p>
                                            </div>
                                            <div class="event-panelists">
                                                <p class="paragraph ph-1"><b>Contará con la presencia de:</b></p><br>
                                                <div class="event-profiles">

                                                    <div class="profile profile-1">
                                                        <a data-toggle="modal" data-target="#modal-1">
                                                            <div class="imagen img-profile">
                                                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/1_-_claudia_diaz.png" alt="Claudia Díaz" title="Claudia Díaz">
                                                            </div>
                                                            <div class="title title-profile">
                                                                <h3>Claudia Díaz</h3>
                                                            </div>
                                                            <div class="subtitle subtitle-profile">
                                                                <h4>Secretaria Distrital de Movilidad</h4>
                                                            </div>
                                                        </a>
                                                    </div>

                                                    <div class="profile profile-2">
                                                        <a data-toggle="modal" data-target="#modal-2">
                                                            <div class="imagen img-profile">
                                                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/2_-_claudia_adriazola.png" alt="Claudia Adriazola Steil" title="Claudia Adriazola Steil">
                                                            </div>
                                                            <div class="title title-profile">
                                                                <h3>Claudia Adriazola Steil</h3>
                                                            </div>
                                                            <div class="subtitle subtitle-profile">
                                                                <h4>Directora Adjunta - WRI</h4>
                                                            </div>
                                                        </a>
                                                    </div>

                                                    <div class="profile profile-3">
                                                        <a data-toggle="modal" data-target="#modal-3">
                                                            <div class="imagen img-profile">
                                                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/3_-_orlando_molano.png" alt="Orlando Molano" title="Orlando Molano">
                                                            </div>
                                                            <div class="title title-profile">
                                                                <h3>Orlando Molano</h3>
                                                            </div>
                                                            <div class="subtitle subtitle-profile">
                                                                <h4>Director IDU </h4>
                                                            </div>
                                                        </a>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="">
                                                <p class="paragraph ph-1"><b>Evento Cerrado</b></p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->

                        <!-- collapse d1-2 -->
                        <div class='panel panel-primary'>
                            <div class='panel-heading' role='tab' id='heading-d1-2'>
                                <h4 class='panel-title'>
                                    <a role='button' data-toggle='collapse' data-parent='#accordion-dia1' href='#collapse-d1-2' aria-expanded='false' aria-controls='collapse-d1-2'>
                                        XVIII SEMINARIO INTERNACIONAL DE SEGURIDAD VIAL
                                    </a>
                                </h4>
                            </div>
                            <div id='collapse-d1-2' class='panel-collapse collapse in' role='tabpanel' aria-labelledby='heading-d1-2' aria-expanded='false'>
                                <div class='panel-body'>
                                    <div class='body-collapse-d1-2'>

                                        <div class="event event-seminario">
                                            <div class="event-data">
                                                <p class="paragraph ph-lugar"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span><a href="https://maps.app.goo.gl/tuNV9whYCgXvfowb9">Universidad Nacional de Colombia Sede Bogotá - Edificio 303 C - Teatro Nuevos Espacios para las Artes</a></p>
                                            </div>
                                            <div class="event-allies">
                                                <p class="paragraph ph-1"><b>Aliados (con el apoyo de):</b></p>
                                                <div class="aliados">
                                                    <div class='item'>
                                                        <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-09-2024/ssv_universidad_nacional.png' alt='logo Universidad Nacional de Colombia - Logo de la red Académica de Movilidad'>
                                                        <p>Universidad Nacional de Colombia - Logo de la red Académica de Movilidad</p>
                                                    </div>
                                                    <div class='item'>
                                                        <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-09-2024/ssv_iniciativa_bloomberg.png' alt='logo Iniciativa Bloomberg para la Seguridad Vial'>
                                                        <p>Iniciativa Bloomberg para la Seguridad Vial</p>
                                                    </div>
                                                    <div class='item'>
                                                        <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-09-2024/ssv_liga_contra_la_violencia_vial.png' alt='logo Liga contra la Violencia Vial '>
                                                        <p>Liga contra la Violencia Vial </p>
                                                    </div>
                                                    <div class="item">
                                                        <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/30-09-2024/onu_habitat_2.png" alt="logo ONU hábitat">
                                                        <p>ONU hábitat</p>
                                                    </div>
                                                    <div class="item">
                                                        <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-09-2024/ssv_octubre_urbano.png" alt="logo Octubre Urbano">
                                                        <p>Octubre Urbano</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="event-ali">

                                            <div class="event-link">
                                                <p class="paragraph ph-1"><b>Evento abierto, inscripciones aquí: </b></p>
                                                <p class="paragraph ph2"><span class="glyphicon glyphicon-link" aria-hidden="true"></span>https://docs.google.com/forms/d/1ymLTy-51H2_2KFfefvwn4_sL48gL2C1Kg8xtQeAPnlc/edit</p>
                                            </div>
                                        </div>

                                        <!-- collapse group seminario-d1 -->
                                        <div class='panel-group' id='accordion-seminario-d1' role='tablist ' aria-multiselectable='true'>

                                            <!-- collapse sd1-2 -->
                                            <div class='panel panel-primary'>
                                                <div class='panel-heading' role='tab' id='heading-sd1-2'>
                                                    <h4 class='panel-title'>
                                                        <a role='button' data-toggle='collapse' data-parent='#accordion-seminario-d1' href='#collapse-sd1-2' aria-expanded='false' aria-controls='collapse-sd1-2'>
                                                            <span class="enfasis-text">MESA DE APERTURA</span><br>PRESENTACIÓN DE LA XVIII SEMANA DE LA SEGURIDAD VIAL</a>
                                                    </h4>
                                                </div>
                                                <div id='collapse-sd1-2' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading-sd1-2' aria-expanded='false'>
                                                    <div class='panel-body'>
                                                        <div class='body-collapse-sd1-2'>
                                                            <div class="event event-sd1-2">
                                                                <div class="event-data">
                                                                    <p class="paragraph ph-hora"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>Hora: 8:00 a.m. a 8:30 a.m.</p>
                                                                </div>
                                                                <div class="event-panelists">
                                                                    <p class="paragraph ph-1"><b>Contará con la presencia de:</b></p><br>
                                                                    <div class="event-profiles">

                                                                        <div class="profile profile-1">
                                                                            <a data-toggle="modal" data-target="#modal-1">
                                                                                <div class="imagen img-profile">
                                                                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/1_-_claudia_diaz.png" alt="Claudia Díaz" title="Claudia Díaz">
                                                                                </div>
                                                                                <div class="title title-profile">
                                                                                    <h3>Claudia Díaz</h3>
                                                                                </div>
                                                                                <div class="subtitle subtitle-profile">
                                                                                    <h4>Secretaria Distrital de Movilidad</h4>
                                                                                </div>
                                                                            </a>
                                                                        </div>

                                                                        <div class="profile profile-5">
                                                                            <a data-toggle="modal" data-target="#modal-5">
                                                                                <div class="imagen img-profile">
                                                                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/5_-_mary_bottagisio.png" alt="Mary Bottagisio" title="Mary Bottagisio">
                                                                                </div>
                                                                                <div class="title title-profile">
                                                                                    <h3>Mary Bottagisio</h3>
                                                                                </div>
                                                                                <div class="subtitle subtitle-profile">
                                                                                    <h4> Directora Ejecutiva - Fundación Liga contra la Violencia Vial </h4>
                                                                                </div>
                                                                            </a>
                                                                        </div>

                                                                        <div class="profile profile-6">
                                                                            <a data-toggle="modal" data-target="#modal-6">
                                                                                <div class="imagen img-profile">
                                                                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/6_-_gina_tambini.png" alt="Gina Tambini" title="Gina Tambini">
                                                                                </div>
                                                                                <div class="title title-profile">
                                                                                    <h3>Gina Tambini</h3>
                                                                                </div>
                                                                                <div class="subtitle subtitle-profile">
                                                                                    <h4>Representante en Colombia · Organizacion Panamericana de la Salud / Organizacion Mundial de la Salud</h4>
                                                                                </div>
                                                                            </a>
                                                                        </div>


                                                                        <div class="profile profile-44">
                                                                            <a data-toggle="modal" data-target="#modal-44">
                                                                                <div class="imagen img-profile">
                                                                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-09-2024/50_-_nancy_molina.png" alt="Nancy Jeanet Molina Achury" title="Nancy Jeanet Molina Achury">
                                                                                </div>
                                                                                <div class="title title-profile">
                                                                                    <h3>Nancy Jeanet Molina Achury</h3>
                                                                                </div>
                                                                                <div class="subtitle subtitle-profile">
                                                                                    <h4>Vicerrectora encargada - Universidad Nacional de Colombia Sede Bogotá</h4>
                                                                                </div>
                                                                            </a>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- collapse sd1-3 -->
                                            <div class='panel panel-primary'>
                                                <div class='panel-heading' role='tab' id='heading-sd1-3'>
                                                    <h4 class='panel-title'>
                                                        <a role='button' data-toggle='collapse' data-parent='#accordion-seminario-d1' href='#collapse-sd1-3' aria-expanded='false' aria-controls='collapse-sd1-3'>
                                                            <span class="enfasis-text">PANEL:</span><br>"REDEFINIENDO LÍMITES: LA VELOCIDAD SÍ ES EL PROBLEMA"
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id='collapse-sd1-3' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading-sd1-3' aria-expanded='false'>
                                                    <div class='panel-body'>
                                                        <div class='body-collapse-sd1-3'>
                                                            <div class="event-data">
                                                                <p class="paragraph ph-hora"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>Hora: 8:30 a.m. a 10:00 a.m</p>
                                                            </div>
                                                            <div class="event-panelists">
                                                                <p class="paragraph ph-1"><b>Panelistas:</b></p><br>
                                                                <div class="event-profiles">

                                                                    <div class="profile profile-2">
                                                                        <a data-toggle="modal" data-target="#modal-2">
                                                                            <div class="imagen img-profile">
                                                                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/2_-_claudia_adriazola.png" alt="Claudia Adriazola Steil" title="Claudia Adriazola Steil">
                                                                            </div>
                                                                            <div class="title title-profile">
                                                                                <h3>Claudia Adriazola Steil</h3>
                                                                            </div>
                                                                            <div class="subtitle subtitle-profile">
                                                                                <h4>Directora Adjunta - WRI</h4>
                                                                            </div>
                                                                        </a>
                                                                    </div>

                                                                    <div class="profile profile-7">
                                                                        <a data-toggle="modal" data-target="#modal-7">
                                                                            <div class="imagen img-profile">
                                                                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/7_-_laurent_carnis.png" alt="Laurent Carnis" title="Laurent Carnis">
                                                                            </div>
                                                                            <div class="title title-profile">
                                                                                <h3>Laurent Carnis</h3>
                                                                            </div>
                                                                            <div class="subtitle subtitle-profile">
                                                                                <h4>Director de investigación - Universidad Gustave Eiffel</h4>
                                                                            </div>
                                                                        </a>
                                                                    </div>

                                                                    <div class="profile profile-8">
                                                                        <a data-toggle="modal" data-target="#modal-8">
                                                                            <div class="imagen img-profile">
                                                                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/8_-_fred_wegman.png" alt="Fred Wegman " title="Fred Wegman ">
                                                                            </div>
                                                                            <div class="title title-profile">
                                                                                <h3>Fred Wegman </h3>
                                                                            </div>
                                                                            <div class="subtitle subtitle-profile">
                                                                                <h4>Profesor emérito de Seguridad Vial - Universidad Técnica de Delft</h4>
                                                                            </div>
                                                                        </a>
                                                                    </div>

                                                                    <div class="profile profile-9">
                                                                        <a data-toggle="modal" data-target="#modal-9">
                                                                            <div class="imagen img-profile">
                                                                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/9_-_santiago_torrado.png" alt="Santiago Torrado" title="Santiago Torrado">
                                                                            </div>
                                                                            <div class="title title-profile">
                                                                                <h3>Santiago Torrado</h3>
                                                                            </div>
                                                                            <div class="subtitle subtitle-profile">
                                                                                <h4>Corresponsal Colombia - Periódico El País</h4>
                                                                            </div>
                                                                        </a>
                                                                    </div>

                                                                    <div class="profile profile-1">
                                                                        <a data-toggle="modal" data-target="#modal-1">
                                                                            <div class="imagen img-profile">
                                                                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/1_-_claudia_diaz.png" alt="Claudia Díaz" title="Claudia Díaz">
                                                                            </div>
                                                                            <div class="title title-profile">
                                                                                <h3>Claudia Díaz</h3>
                                                                            </div>
                                                                            <div class="subtitle subtitle-profile">
                                                                                <h4>Secretaria Distrital de Movilidad</h4>
                                                                            </div>
                                                                        </a>
                                                                    </div>


                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- collapse sd1-4 -->
                                            <div class='panel panel-primary'>
                                                <div class='panel-heading' role='tab' id='heading-sd1-4'>
                                                    <h4 class='panel-title'>
                                                        <a role='button' data-toggle='collapse' data-parent='#accordion-seminario-d1' href='#collapse-sd1-4' aria-expanded='false' aria-controls='collapse-sd1-4'>
                                                            <span class="enfasis-text">TALKSHOW:</span><br>“FINANZAS DE LA SEGURIDAD VIAL: LA INVERSIÓN DE LAS CIUDADES EN SALVAR VIDAS”
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id='collapse-sd1-4' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading-sd1-4' aria-expanded='false'>
                                                    <div class='panel-body'>
                                                        <div class='body-collapse-sd1-4'>
                                                            <div class="event event-sd1-4">
                                                                <div class="event-data">
                                                                    <p class="paragraph ph-hora"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>Hora: 10:30 a.m. a 12:00 a.m.</p>
                                                                </div>
                                                                <div class="event-panelists">
                                                                    <p class="paragraph ph-1"><b>Panelistas:</b></p><br>
                                                                    <div class="event-profiles">

                                                                        <div class="profile profile-10">
                                                                            <a data-toggle="modal" data-target="#modal-10">
                                                                                <div class="imagen img-profile">
                                                                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/10_-_ana_milena_gomez.png" alt="Ana Milena Gómez " title="Ana Milena Gómez ">
                                                                                </div>
                                                                                <div class="title title-profile">
                                                                                    <h3>Ana Milena Gómez </h3>
                                                                                </div>
                                                                                <div class="subtitle subtitle-profile">
                                                                                    <h4>"Subsecretaría de Política de la Movilidad - Secretaria de Movilidad de Bogotá </h4>
                                                                                </div>
                                                                            </a>
                                                                        </div>

                                                                        <div class="profile profile-11">
                                                                            <a data-toggle="modal" data-target="#modal-11">
                                                                                <div class="imagen img-profile">
                                                                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/11_-_leonardo_canon.png" alt="Leonardo Cañon Rubiano" title="Leonardo Cañon Rubiano">
                                                                                </div>
                                                                                <div class="title title-profile">
                                                                                    <h3>Leonardo Cañon Rubiano</h3>
                                                                                </div>
                                                                                <div class="subtitle subtitle-profile">
                                                                                    <h4>Especialista Senior de Transporte - Banco Mundial </h4>
                                                                                </div>
                                                                            </a>
                                                                        </div>

                                                                        <div class="profile profile-14">
                                                                            <a data-toggle="modal" data-target="#modal-14">
                                                                                <div class="imagen img-profile">
                                                                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/14_-_jose_stalin_rojas.png" alt="Jose Stallin" title="Jose Stallin">
                                                                                </div>
                                                                                <div class="title title-profile">
                                                                                    <h3>Jose Stallin</h3>
                                                                                </div>
                                                                                <div class="subtitle subtitle-profile">
                                                                                    <h4>Docente y Director observatorio de movilidad y logística de la Universidad Nacional de Colombia </h4>
                                                                                </div>
                                                                            </a>
                                                                        </div>

                                                                        <div class="profile profile-12">
                                                                            <a data-toggle="modal" data-target="#modal-12">
                                                                                <div class="imagen img-profile">
                                                                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-09-2024/44_-_antonio_trujillo.png" alt="Antonio Trujillo" title="Antonio Trujillo">
                                                                                </div>
                                                                                <div class="title title-profile">
                                                                                    <h3>Antonio Trujillo</h3>
                                                                                </div>
                                                                                <div class="subtitle subtitle-profile">
                                                                                    <h4>Profesor asociado Departamento de Salud Internacional y Unidad de Investigación de Lesiones Internacionales - Universidad Johns Hopkins</h4>
                                                                                </div>
                                                                            </a>
                                                                        </div>

                                                                        <div class="profile profile-13">
                                                                            <a data-toggle="modal" data-target="#modal-13">
                                                                                <div class="imagen img-profile">
                                                                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/13_-_ma._fernanda_cardenas.png" alt="María Fernanda Cárdenas " title="María Fernanda Cárdenas ">
                                                                                </div>
                                                                                <div class="title title-profile">
                                                                                    <h3>María Fernanda Cárdenas </h3>
                                                                                </div>
                                                                                <div class="subtitle subtitle-profile">
                                                                                    <h4>Asesora técnica regional - Vital Strategies </h4>
                                                                                </div>
                                                                            </a>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- collapse sd1-5 -->
                                            <div class='panel panel-primary'>
                                                <div class='panel-heading' role='tab' id='heading-sd1-5'>
                                                    <h4 class='panel-title'>
                                                        <a role='button' data-toggle='collapse' data-parent='#accordion-seminario-d1' href='#collapse-sd1-5' aria-expanded='false' aria-controls='collapse-sd1-5'>
                                                            <span class="enfasis-text">PANEL:</span><br>“GÉNERO Y SINIESTRALIDAD VIAL”
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id='collapse-sd1-5' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading-sd1-5' aria-expanded='false'>
                                                    <div class='panel-body'>
                                                        <div class='body-collapse-sd1-5'>
                                                            <div class="event event-sd1-5">
                                                                <div class="event-data">
                                                                    <p class="paragraph ph-hora"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>Hora: 2:00 p.m. a 3:15 p.m.</p>
                                                                </div>
                                                                <div class="event-panelists">
                                                                    <p class="paragraph ph-1"><b>Panelistas:</b></p><br>
                                                                    <div class="event-profiles">

                                                                        <div class="profile profile-15">
                                                                            <a data-toggle="modal" data-target="#modal-15">
                                                                                <div class="imagen img-profile">
                                                                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/30-09-2024/57_-_bella_castiblanco_-_correcta.png" alt="Bella Castiblanco" title="Bella Castiblanco">
                                                                                </div>
                                                                                <div class="title title-profile">
                                                                                    <h3>Bella Castiblanco</h3>
                                                                                </div>
                                                                                <div class="subtitle subtitle-profile">
                                                                                    <h4>Activista con la reivindicación de las Mujeres Trans </h4>
                                                                                </div>
                                                                            </a>
                                                                        </div>

                                                                        <div class="profile profile-16">
                                                                            <a data-toggle="modal" data-target="#modal-16">
                                                                                <div class="imagen img-profile">
                                                                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/30-09-2024/58_-_jessica_giraldo_-_correcta.png" alt="Jessica Giraldo" title="Jessica Giraldo">
                                                                                </div>
                                                                                <div class="title title-profile">
                                                                                    <h3>Jessica Giraldo</h3>
                                                                                </div>
                                                                                <div class="subtitle subtitle-profile">
                                                                                    <h4>Lider para Bogotá Colectivo Mujeres en Tenis </h4>
                                                                                </div>
                                                                            </a>
                                                                        </div>


                                                                        <div class="profile profile-17">
                                                                            <a data-toggle="modal" data-target="#modal-17">
                                                                                <div class="imagen img-profile">
                                                                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/17_-_camila_gomez.png" alt="Camila Gómez " title="Camila Gómez ">
                                                                                </div>
                                                                                <div class="title title-profile">
                                                                                    <h3>Camila Gómez</h3>
                                                                                </div>
                                                                                <div class="subtitle subtitle-profile">
                                                                                    <h4>Directora del Sistema Distrital de Cuidado de Bogotá - Secretaría Distrital de la Mujer</h4>
                                                                                </div>
                                                                            </a>
                                                                        </div>

                                                                        <div class="profile profile-45">
                                                                            <a data-toggle="modal" data-target="#modal-45">
                                                                                <div class="imagen img-profile">
                                                                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-09-2024/45_-_clara_lopez.png" alt="Clara López García" title="Clara López García">
                                                                                </div>
                                                                                <div class="title title-profile">
                                                                                    <h3>Clara López García</h3>
                                                                                </div>
                                                                                <div class="subtitle subtitle-profile">
                                                                                    <h4>Consultora ONU Mujeres para el Ministerio de Relaciones Exteriores</h4>
                                                                                </div>
                                                                            </a>
                                                                        </div>

                                                                        <div class="profile profile-20">
                                                                            <a data-toggle="modal" data-target="#modal-20">
                                                                                <div class="imagen img-profile">
                                                                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/20_-_diana_herrera.png" alt="Diana Herrera" title="Diana Herrera">
                                                                                </div>
                                                                                <div class="title title-profile">
                                                                                    <h3>Diana Herrera</h3>
                                                                                </div>
                                                                                <div class="subtitle subtitle-profile">
                                                                                    <h4>Pintora comprometida con la reivindicaicón de género y la justicia social.</h4>
                                                                                </div>
                                                                            </a>
                                                                        </div>

                                                                        <div class="profile profile-54">
                                                                            <a data-toggle="modal" data-target="#modal-54">
                                                                                <div class="imagen img-profile">
                                                                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/30-09-2024/59_-_angie_buitrago_orvi.png" alt="Angie Buitrago" title="Angie Buitrago">
                                                                                </div>
                                                                                <div class="title title-profile">
                                                                                    <h3>Angie Buitrago</h3>
                                                                                </div>
                                                                                <div class="subtitle subtitle-profile">
                                                                                    <h4>ORVI, Centro de orientación a víctimas de siniestros viales</h4>
                                                                                </div>
                                                                            </a>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- collapse sd1-6 -->
                                            <div class='panel panel-primary'>
                                                <div class='panel-heading' role='tab' id='heading-sd1-6'>
                                                    <h4 class='panel-title'>
                                                        <a role='button' data-toggle='collapse' data-parent='#accordion-seminario-d1' href='#collapse-sd1-6' aria-expanded='false' aria-controls='collapse-sd1-6'>
                                                            <span class="enfasis-text">Panel :</span><br>“TRANSPORTE PÚBLICO SEGURO Y EFICIENTE: UNA SOLUCIÓN DE CIUDAD PARA LA SINIESTRALIDAD VIAL Y PREMIACIÓN DE OPERADORES DEL SITP”
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id='collapse-sd1-6' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading-sd1-6' aria-expanded='false'>
                                                    <div class='panel-body'>
                                                        <div class='body-collapse-sd1-6'>
                                                            <div class="event event-sd1-6">
                                                                <div class="event-data">
                                                                    <p class="paragraph ph-hora"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>Hora: 3:30 p.m. a 5:00 p.m.</p>
                                                                </div>
                                                                <div class="event-panelists">
                                                                    <p class="paragraph ph-1"><b>Panelistas:</b></p><br>
                                                                    <div class="event-profiles">

                                                                        <div class="profile profile-23">
                                                                            <a data-toggle="modal" data-target="#modal-23">
                                                                                <div class="imagen img-profile">
                                                                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/23_-_dario_hidalgo.png" alt="Dario Hildalgo" title="Dario Hildalgo">
                                                                                </div>
                                                                                <div class="title title-profile">
                                                                                    <h3>Dario Hildalgo</h3>
                                                                                </div>
                                                                                <div class="subtitle subtitle-profile">
                                                                                    <h4>Phd. Profesor Facultad de Ingenieria - Universidad Javierana</h4>
                                                                                </div>
                                                                            </a>
                                                                        </div>

                                                                        <div class="profile profile-21">
                                                                            <a data-toggle="modal" data-target="#modal-21">
                                                                                <div class="imagen img-profile">
                                                                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/21_-_yu_wu.png" alt="Yu Wu" title="Yu Wu">
                                                                                </div>
                                                                                <div class="title title-profile">
                                                                                    <h3>Yu Wu</h3>
                                                                                </div>
                                                                                <div class="subtitle subtitle-profile">
                                                                                    <h4>Senior Advisor de Metro Línea 1</h4>
                                                                                </div>
                                                                            </a>
                                                                        </div>

                                                                        <div class="profile profile-25">
                                                                            <a data-toggle="modal" data-target="#modal-25">
                                                                                <div class="imagen img-profile">
                                                                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/25_-_eric_dumbaugh.png" alt="Eric Dumbaugh" title="Eric Dumbaugh">
                                                                                </div>
                                                                                <div class="title title-profile">
                                                                                    <h3>Eric Dumbaugh</h3>
                                                                                </div>
                                                                                <div class="subtitle subtitle-profile">
                                                                                    <h4>Profesor y Director del Centro de Ciencias Colaborativas para la Seguridad VIal - Universidad Atlantica de Florida </h4>
                                                                                </div>
                                                                            </a>
                                                                        </div>


                                                                        <div class="profile profile-24">
                                                                            <a data-toggle="modal" data-target="#modal-24">
                                                                                <div class="imagen img-profile">
                                                                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/24_-_ma._fernanda_ortiz.png" alt="Maria Fernanda Ortiz" title="Maria Fernanda Ortiz">
                                                                                </div>
                                                                                <div class="title title-profile">
                                                                                    <h3>Maria Fernanda Ortiz</h3>
                                                                                </div>
                                                                                <div class="subtitle subtitle-profile">
                                                                                    <h4>Gerente Transmilenio SA</h4>
                                                                                </div>
                                                                            </a>
                                                                        </div>

                                                                        <div class="profile profile-1">
                                                                            <a data-toggle="modal" data-target="#modal-1">
                                                                                <div class="imagen img-profile">
                                                                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/1_-_claudia_diaz.png" alt="Claudia Díaz" title="Claudia Díaz">
                                                                                </div>
                                                                                <div class="title title-profile">
                                                                                    <h3>Claudia Díaz</h3>
                                                                                </div>
                                                                                <div class="subtitle subtitle-profile">
                                                                                    <h4>Secretaria Distrital de Movilidad</h4>
                                                                                </div>
                                                                            </a>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>

                </div>
                <div role="tabpanel" class="tab-pane" id="tab2">

                    <!-- collapse group dia2 -->
                    <div class='panel-group' id='accordion-dia2' role='tablist ' aria-multiselectable='true'>

                        <!-- collapse d2-1 -->
                        <div class='panel panel-primary'>
                            <div class='panel-heading' role='tab' id='heading-d2-1'>
                                <h4 class='panel-title'>
                                    <a role='button' data-toggle='collapse' data-parent='#accordion-dia2' href='#collapse-d2-1' aria-expanded='false' aria-controls='collapse-d2-1'>
                                        XVIII SEMINARIO INTERNACIONAL DE SEGURIDAD VIAL
                                    </a>
                                </h4>
                            </div>
                            <div id='collapse-d2-1' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading-d2-1' aria-expanded='false'>
                                <div class='panel-body'>
                                    <div class='body-collapse-d2-1'>

                                        <div class="event event-seminario">
                                            <div class="event-data">
                                                <p class="paragraph ph-lugar"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span><a href="https://maps.app.goo.gl/tuNV9whYCgXvfowb9">Universidad Nacional de Colombia Sede Bogotá - Edificio 303 C - Teatro Nuevos Espacios para las Artes</a></p>
                                            </div>
                                            <div class="event-allies">
                                                <p class="paragraph ph-1"><b>Aliados (con el apoyo de):</b></p>
                                                <div class="aliados">
                                                    <div class='item'>
                                                        <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-09-2024/ssv_universidad_nacional.png' alt='logo Universidad Nacional de Colombia - Logo de la red Académica de Movilidad'>
                                                        <p>Universidad Nacional de Colombia - Logo de la red Académica de Movilidad</p>
                                                    </div>
                                                    <div class='item'>
                                                        <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-09-2024/ssv_iniciativa_bloomberg.png' alt='logo Iniciativa Bloomberg para la Seguridad Vial'>
                                                        <p>Iniciativa Bloomberg para la Seguridad Vial</p>
                                                    </div>
                                                    <div class='item'>
                                                        <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-09-2024/ssv_liga_contra_la_violencia_vial.png' alt='logo Liga contra la Violencia Vial '>
                                                        <p>Liga contra la Violencia Vial </p>
                                                    </div>
                                                    <div class="item">
                                                        <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-09-2024/ssv_onu_habitat.png" alt="logo ONU hábitat">
                                                        <p>ONU hábitat</p>
                                                    </div>
                                                    <div class="item">
                                                        <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-09-2024/ssv_octubre_urbano.png" alt="logo Octubre Urbano">
                                                        <p>Octubre Urbano</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="event-link">
                                                <p class="paragraph ph-1"><b>Evento abierto, inscripciones aquí: </b></p>
                                                <p class="paragraph ph2"><span class="glyphicon glyphicon-link" aria-hidden="true"></span>https://docs.google.com/forms/d/1ymLTy-51H2_2KFfefvwn4_sL48gL2C1Kg8xtQeAPnlc/edit</p>
                                            </div>
                                        </div>

                                        <!-- collapse group seminario-d2 -->
                                        <div class='panel-group' id='accordion-seminario-d2' role='tablist ' aria-multiselectable='true'>

                                            <!-- collapse sd2-1 -->
                                            <div class='panel panel-primary'>
                                                <div class='panel-heading' role='tab' id='heading-sd2-1'>
                                                    <h4 class='panel-title'>
                                                        <a role='button' data-toggle='collapse' data-parent='#accordion-seminario-d2' href='#collapse-sd2-1' aria-expanded='false' aria-controls='collapse-sd2-1'>
                                                            <span class="enfasis-text">PANEL:</span><br>“SEGURIDAD VIAL Y LA INFRAESTRUCTURA. CÓMO HISTÓRICAMENTE SE HAN DISEÑADO CIUDADES PARA LOS VEHÍCULOS Y CÓMO LO ESTAMOS CAMBIANDO”
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id='collapse-sd2-1' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading-sd2-1' aria-expanded='false'>
                                                    <div class='panel-body'>
                                                        <div class='body-collapse-sd2-1'>
                                                            <div class="event-data">
                                                                <p class="paragraph ph-hora"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>Hora: 8:00 a.m. a 9:00 a.m.</p>
                                                            </div>
                                                            <div class="event-panelists">
                                                                <p class="paragraph ph-1"><b>Panelistas:</b></p><br>
                                                                <div class="event-profiles">

                                                                    <div class="profile profile-26">
                                                                        <a data-toggle="modal" data-target="#modal-26">
                                                                            <div class="imagen img-profile">
                                                                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/26_-_wes_marshall.png" alt="Wes Marshal" title="Wes Marshal">
                                                                            </div>
                                                                            <div class="title title-profile">
                                                                                <h3>Wes Marshal</h3>
                                                                            </div>
                                                                            <div class="subtitle subtitle-profile">
                                                                                <h4>Profesor Facultad de Ingeniería y Ciencias Aplicadas y Autor del libro: Asesinado por un ingeniero de tránsito</h4>
                                                                            </div>
                                                                        </a>
                                                                    </div>

                                                                    <div class="profile profile-27">
                                                                        <a data-toggle="modal" data-target="#modal-27">
                                                                            <div class="imagen img-profile">
                                                                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/27_-_anne_eriksson.png" alt="Anne Eriksonn" title="Anne Eriksonn">
                                                                            </div>
                                                                            <div class="title title-profile">
                                                                                <h3>Anne Eriksonn</h3>
                                                                            </div>
                                                                            <div class="subtitle subtitle-profile">
                                                                                <h4>Ingeniera de Seguridad Vial - Dirección de Carreteras de Dinamarca.</h4>
                                                                            </div>
                                                                        </a>
                                                                    </div>

                                                                    <div class="profile profile-28">
                                                                        <a data-toggle="modal" data-target="#modal-28">
                                                                            <div class="imagen img-profile">
                                                                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/28_-_juan_pablo_bocarejo.png" alt="Juan Pablo Bocarejo" title="Juan Pablo Bocarejo">
                                                                            </div>
                                                                            <div class="title title-profile">
                                                                                <h3>Juan Pablo Bocarejo</h3>
                                                                            </div>
                                                                            <div class="subtitle subtitle-profile">
                                                                                <h4>Director del Departamento de Ingeniería Civil y Ambiental - Universidad de Los Andes</h4>
                                                                            </div>
                                                                        </a>
                                                                    </div>

                                                                    <div class="profile profile-3">
                                                                        <a data-toggle="modal" data-target="#modal-3">
                                                                            <div class="imagen img-profile">
                                                                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/3_-_orlando_molano.png" alt="Orlando Molano" title="Orlando Molano">
                                                                            </div>
                                                                            <div class="title title-profile">
                                                                                <h3>Orlando Molano</h3>
                                                                            </div>
                                                                            <div class="subtitle subtitle-profile">
                                                                                <h4>Director IDU </h4>
                                                                            </div>
                                                                        </a>
                                                                    </div>

                                                                    <div class="profile profile-41">
                                                                        <a data-toggle="modal" data-target="#modal-41">
                                                                            <div class="imagen img-profile">
                                                                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-09-2024/51_-_segundo_lopez.png" alt="Jose Segundo Lopez Valderrama" title="Jose Segundo Lopez Valderrama">
                                                                            </div>
                                                                            <div class="title title-profile">
                                                                                <h3>Jose Segundo Lopez Valderrama</h3>
                                                                            </div>
                                                                            <div class="subtitle subtitle-profile">
                                                                                <h4>Jefe Oficina de Seguridad Vial - Secretaría Distrital de Movilidad</h4>
                                                                            </div>
                                                                        </a>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- collapse sd2-2 -->
                                            <div class='panel panel-primary'>
                                                <div class='panel-heading' role='tab' id='heading-sd2-2'>
                                                    <h4 class='panel-title'>
                                                        <a role='button' data-toggle='collapse' data-parent='#accordion-seminario-d2' href='#collapse-sd2-2' aria-expanded='false' aria-controls='collapse-sd2-2'>
                                                            <span class="enfasis-text">PANEL:</span><br>¿CÓMO CAMBIAR COMPORTAMIENTOS RIESGOSOS EN LAS VÍAS?: ¿ES LA EDUCACIÓN EL ÚNICO CAMINO?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id='collapse-sd2-2' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading-sd2-2' aria-expanded='false'>
                                                    <div class='panel-body'>
                                                        <div class='body-collapse-sd2-2'>
                                                            <div class="event-data">
                                                                <p class="paragraph ph-hora"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>Hora: 10:00 a.m. a 11:00 a.m.</p>
                                                            </div>
                                                            <div class="event-panelists">
                                                                <p class="paragraph ph-1"><b>Panelistas:</b></p><br>
                                                                <div class="event-profiles">

                                                                    <div class="profile profile-29">
                                                                        <a data-toggle="modal" data-target="#modal-29">
                                                                            <div class="imagen img-profile">
                                                                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/29_-_marcin_flieger.png" alt="Marcin Flieger" title="Marcin Flieger">
                                                                            </div>
                                                                            <div class="title title-profile">
                                                                                <h3>Marcin Flieger</h3>
                                                                            </div>
                                                                            <div class="subtitle subtitle-profile">
                                                                                <h4>Gerente de desarrollo de capacidades de vigilancia vial - Alianza mundial para la seguridad vial (GRSP)</h4>
                                                                            </div>
                                                                        </a>
                                                                    </div>

                                                                    <div class="profile profile-7">
                                                                        <a data-toggle="modal" data-target="#modal-7">
                                                                            <div class="imagen img-profile">
                                                                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/7_-_laurent_carnis.png" alt="Laurent Carnis" title="Laurent Carnis">
                                                                            </div>
                                                                            <div class="title title-profile">
                                                                                <h3>Laurent Carnis</h3>
                                                                            </div>
                                                                            <div class="subtitle subtitle-profile">
                                                                                <h4>Director de investigación - Universidad Gustave Eiffel</h4>
                                                                            </div>
                                                                        </a>
                                                                    </div>

                                                                    <div class="profile profile-13">
                                                                        <a data-toggle="modal" data-target="#modal-13">
                                                                            <div class="imagen img-profile">
                                                                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/13_-_ma._fernanda_cardenas.png" alt="María Fernanda Cárdenas " title="María Fernanda Cárdenas ">
                                                                            </div>
                                                                            <div class="title title-profile">
                                                                                <h3>María Fernanda Cárdenas </h3>
                                                                            </div>
                                                                            <div class="subtitle subtitle-profile">
                                                                                <h4>Asesora técnica regional - Vital Strategies </h4>
                                                                            </div>
                                                                        </a>
                                                                    </div>

                                                                    <div class="profile profile-30">
                                                                        <a data-toggle="modal" data-target="#modal-30">
                                                                            <div class="imagen img-profile">
                                                                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/30_-_nathaly_patino.png" alt="Nathaly Patiño" title="Nathaly Patiño">
                                                                            </div>
                                                                            <div class="title title-profile">
                                                                                <h3>Nathaly Patiño</h3>
                                                                            </div>
                                                                            <div class="subtitle subtitle-profile">
                                                                                <h4>Directora de Gestión de Tránsito y Control de Tránsito y Transporte - Secretaría Distrital de Movilidad</h4>
                                                                            </div>
                                                                        </a>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- collapse sd2-3 -->
                                            <div class='panel panel-primary'>
                                                <div class='panel-heading' role='tab' id='heading-sd2-3'>
                                                    <h4 class='panel-title'>
                                                        <a role='button' data-toggle='collapse' data-parent='#accordion-seminario-d2' href='#collapse-sd2-3' aria-expanded='false' aria-controls='collapse-sd2-3'>
                                                            <span class="enfasis-text">PANEL:</span><br>“FORTALECIENDO LA GOBERNANZA PARA MEJORAR LA SEGURIDAD VIAL MEDIANTE UN ENFOQUE MULTIDISCIPLINARIO”
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id='collapse-sd2-3' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading-sd2-3' aria-expanded='false'>
                                                    <div class='panel-body'>
                                                        <div class='body-collapse-sd2-3'>
                                                            <div class="event event-sd2-3">
                                                                <div class="event-data">
                                                                    <p class="paragraph ph-hora"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>Hora: 2:00 p.m. a 3:00 p.m.</p>
                                                                </div>
                                                            </div>
                                                            <div class="event-panelists">
                                                                <p class="paragraph ph-1"><b>Panelistas:</b></p><br>
                                                                <div class="event-profiles">

                                                                    <div class="profile profile-31">
                                                                        <a data-toggle="modal" data-target="#modal-31">
                                                                            <div class="imagen img-profile">
                                                                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/31_-_paula_caporal.png" alt="Paula Caporal" title="Paula Caporal">
                                                                            </div>
                                                                            <div class="title title-profile">
                                                                                <h3>Paula Caporal</h3>
                                                                            </div>
                                                                            <div class="subtitle subtitle-profile">
                                                                                <h4>Investigadora Asociada - Universidad Johns Hopkins</h4>
                                                                            </div>
                                                                        </a>
                                                                    </div>

                                                                    <div class="profile profile-5">
                                                                        <a data-toggle="modal" data-target="#modal-5">
                                                                            <div class="imagen img-profile">
                                                                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/5_-_mary_bottagisio.png" alt="Mary Bottagisio" title="Mary Bottagisio">
                                                                            </div>
                                                                            <div class="title title-profile">
                                                                                <h3>Mary Bottagisio</h3>
                                                                            </div>
                                                                            <div class="subtitle subtitle-profile">
                                                                                <h4> Directora Ejecutiva - Fundación Liga contra la Violencia Vial </h4>
                                                                            </div>
                                                                        </a>
                                                                    </div>

                                                                    <div class="profile profile-32">
                                                                        <a data-toggle="modal" data-target="#modal-32">
                                                                            <div class="imagen img-profile">
                                                                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-09-2024/52_-_ked_wills.png" alt="Ked Wills" title="Ked Wills">
                                                                            </div>
                                                                            <div class="title title-profile">
                                                                                <h3>Ked Wills</h3>
                                                                            </div>
                                                                            <div class="subtitle subtitle-profile">
                                                                                <h4>Consultor de la Asociación Internacional de Jefes de Policía - IACP</h4>
                                                                            </div>
                                                                        </a>
                                                                    </div>

                                                                    <div class="profile profile-34">
                                                                        <a data-toggle="modal" data-target="#modal-34">
                                                                            <div class="imagen img-profile">
                                                                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/34_-_natalia_ariza.png" alt="Natalia Ariza" title="Natalia Ariza">
                                                                            </div>
                                                                            <div class="title title-profile">
                                                                                <h3>Natalia Ariza</h3>
                                                                            </div>
                                                                            <div class="subtitle subtitle-profile">
                                                                                <h4>Especialista de Transporte - Banco Interamericano de Desarrollo </h4>
                                                                            </div>
                                                                        </a>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- collapse sd2-4 -->
                                            <div class='panel panel-primary'>
                                                <div class='panel-heading' role='tab' id='heading-sd2-4'>
                                                    <h4 class='panel-title'>
                                                        <a role='button' data-toggle='collapse' data-parent='#accordion-seminario-d2' href='#collapse-sd2-4' aria-expanded='false' aria-controls='collapse-sd2-4'>
                                                            <span class="enfasis-text">PANEL:</span><br>“NUESTRA NIÑEZ CAMINA SEGURA: LA APUESTA POR CIUDADES MÁS SEGURAS PARA LOS MÁS VULNERABLES”
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id='collapse-sd2-4' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading-sd2-4' aria-expanded='false'>
                                                    <div class='panel-body'>
                                                        <div class='body-collapse-sd2-4'>
                                                            <div class="event event-sd2-4">
                                                                <div class="event-data">
                                                                    <p class="paragraph ph-hora"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>Hora: 3:00 p.m. a 4:00 p.m.</p>
                                                                </div>
                                                                <div class="event-panelists">
                                                                    <p class="paragraph ph-1"><b>Panelistas:</b></p><br>
                                                                    <div class="event-profiles">

                                                                        <div class="profile profile-42">
                                                                            <a data-toggle="modal" data-target="#modal-42">
                                                                                <div class="imagen img-profile">
                                                                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/42_-_oscar_diaz.png" alt="Oscar Díaz" title="Oscar Díaz">
                                                                                </div>
                                                                                <div class="title title-profile">
                                                                                    <h3>Oscar Díaz</h3>
                                                                                </div>
                                                                                <div class="subtitle subtitle-profile">
                                                                                    <h4>Asesor para Latinoamerica - Fundación FIA</h4>
                                                                                </div>
                                                                            </a>
                                                                        </div>

                                                                        <div class="profile profile-35">
                                                                            <a data-toggle="modal" data-target="#modal-35">
                                                                                <div class="imagen img-profile">
                                                                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/35_-_marcela_neira.png" alt="Marcela Neira" title="Marcela Neira">
                                                                                </div>
                                                                                <div class="title title-profile">
                                                                                    <h3>Marcela Neira</h3>
                                                                                </div>
                                                                                <div class="subtitle subtitle-profile">
                                                                                    <h4>Asesora Técnica - Agencia de Cooperación Alemana en Colombia (GIZ)</h4>
                                                                                </div>
                                                                            </a>
                                                                        </div>

                                                                        <div class="profile profile-36">
                                                                            <a data-toggle="modal" data-target="#modal-36">
                                                                                <div class="imagen img-profile">
                                                                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/36_-_ricardo_montezuma.png" alt="Ricardo Montezuma" title="Ricardo Montezuma">
                                                                                </div>
                                                                                <div class="title title-profile">
                                                                                    <h3>Ricardo Montezuma</h3>
                                                                                </div>
                                                                                <div class="subtitle subtitle-profile">
                                                                                    <h4>PhD en Urbanismo y Movilidad - Universidad Nacional de Colombia</h4>
                                                                                </div>
                                                                            </a>
                                                                        </div>

                                                                        <div class="profile profile-47">
                                                                            <a data-toggle="modal" data-target="#modal-47">
                                                                                <div class="imagen img-profile">
                                                                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-09-2024/53_-_carolina_pineros.png" alt="Carolina Piñeros" title="Carolina Piñeros">
                                                                                </div>
                                                                                <div class="title title-profile">
                                                                                    <h3>Carolina Piñeros</h3>
                                                                                </div>
                                                                                <div class="subtitle subtitle-profile">
                                                                                    <h4>Fundadora y directora ejecutiva RedPapaz</h4>
                                                                                </div>
                                                                            </a>
                                                                        </div>

                                                                        <div class="profile profile-43">
                                                                            <a data-toggle="modal" data-target="#modal-43">
                                                                                <div class="imagen img-profile">
                                                                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/43_-_jhon_gonzalez.png" alt="Jhon Gonzalez" title="Jhon Gonzalez">
                                                                                </div>
                                                                                <div class="title title-profile">
                                                                                    <h3>Jhon Gonzalez</h3>
                                                                                </div>
                                                                                <div class="subtitle subtitle-profile">
                                                                                    <h4>Subsecretario de Gestión de la Movilidad - Secretaria Distrital de Movilidad</h4>
                                                                                </div>
                                                                            </a>
                                                                        </div>

                                                                        <div class="profile profile-48">
                                                                            <a data-toggle="modal" data-target="#modal-48">
                                                                                <div class="imagen img-profile">
                                                                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-09-2024/48_-_luis_yair.png" alt="Luis Yair Aguilar Rojas" title="Luis Yair Aguilar Rojas">
                                                                                </div>
                                                                                <div class="title title-profile">
                                                                                    <h3>Luis Yair Aguilar Rojas</h3>
                                                                                </div>
                                                                                <div class="subtitle subtitle-profile">
                                                                                    <h4>Director de Coordinación Interinstitucional de la Agencia Nacional de Seguridad Vial</h4>
                                                                                </div>
                                                                            </a>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- collapse sd2-5 -->
                                            <div class='panel panel-primary'>
                                                <div class='panel-heading' role='tab' id='heading-sd2-5'>
                                                    <h4 class='panel-title'>
                                                        <a role='button' data-toggle='collapse' data-parent='#accordion-seminario-d2' href='#collapse-sd2-5' aria-expanded='false' aria-controls='collapse-sd2-5'>
                                                            <span class="enfasis-text">PANEL:</span><br>“MESA DE CIERRE: "LECCIONES APRENDIDAS Y PASOS HACIA LA NUEVA ERA DE LA SEGURIDAD VIAL EN BOGOTÁ"
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id='collapse-sd2-5' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading-sd2-5' aria-expanded='false'>
                                                    <div class='panel-body'>
                                                        <div class='body-collapse-sd2-5'>
                                                            <div class="event event-sd2-5">
                                                                <div class="event-data">
                                                                    <p class="paragraph ph-hora"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>Hora: 4:00 p.m. a 5:00 p.m.</p>
                                                                </div>
                                                                <div class="event-panelists">
                                                                    <p class="paragraph ph-1"><b>Panelistas:</b></p><br>
                                                                    <div class="event-profiles">

                                                                        <div class="profile profile-25">
                                                                            <a data-toggle="modal" data-target="#modal-25">
                                                                                <div class="imagen img-profile">
                                                                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/25_-_eric_dumbaugh.png" alt="Eric Dumbaugh" title="Eric Dumbaugh">
                                                                                </div>
                                                                                <div class="title title-profile">
                                                                                    <h3>Eric Dumbaugh</h3>
                                                                                </div>
                                                                                <div class="subtitle subtitle-profile">
                                                                                    <h4>Profesor y Director del Centro de Ciencias Colaborativas para la Seguridad VIal - Universidad Atlantica de Florida </h4>
                                                                                </div>
                                                                            </a>
                                                                        </div>


                                                                        <div class="profile profile-49">
                                                                            <a data-toggle="modal" data-target="#modal-49">
                                                                                <div class="imagen img-profile">
                                                                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-09-2024/49_-_maria_fernanda_ramirez.png" alt="Maria Fernanda Ramirez" title="Maria Fernanda Ramirez">
                                                                                </div>
                                                                                <div class="title title-profile">
                                                                                    <h3>Maria Fernanda Ramirez</h3>
                                                                                </div>
                                                                                <div class="subtitle subtitle-profile">
                                                                                    <h4>Presidenta de la RAM y Líder de movilidad de Despacio</h4>
                                                                                </div>
                                                                            </a>
                                                                        </div>

                                                                        <div class="profile profile-2">
                                                                            <a data-toggle="modal" data-target="#modal-2">
                                                                                <div class="imagen img-profile">
                                                                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/2_-_claudia_adriazola.png" alt="Claudia Adriazola Steil" title="Claudia Adriazola Steil">
                                                                                </div>
                                                                                <div class="title title-profile">
                                                                                    <h3>Claudia Adriazola Steil</h3>
                                                                                </div>
                                                                                <div class="subtitle subtitle-profile">
                                                                                    <h4>Directora Adjunta - WRI</h4>
                                                                                </div>
                                                                            </a>
                                                                        </div>

                                                                        <div class="profile profile-27">
                                                                            <a data-toggle="modal" data-target="#modal-27">
                                                                                <div class="imagen img-profile">
                                                                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/27_-_anne_eriksson.png" alt="Anne Eriksonn" title="Anne Eriksonn">
                                                                                </div>
                                                                                <div class="title title-profile">
                                                                                    <h3>Anne Eriksonn</h3>
                                                                                </div>
                                                                                <div class="subtitle subtitle-profile">
                                                                                    <h4>Ingeniera de Seguridad Vial - Dirección de Carreteras de Dinamarca.</h4>
                                                                                </div>
                                                                            </a>
                                                                        </div>

                                                                        <div class="profile profile-8">
                                                                            <a data-toggle="modal" data-target="#modal-8">
                                                                                <div class="imagen img-profile">
                                                                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/8_-_fred_wegman.png" alt="Fred Wegman " title="Fred Wegman ">
                                                                                </div>
                                                                                <div class="title title-profile">
                                                                                    <h3>Fred Wegman </h3>
                                                                                </div>
                                                                                <div class="subtitle subtitle-profile">
                                                                                    <h4>Profesor emérito de Seguridad Vial - Universidad Técnica de Delft</h4>
                                                                                </div>
                                                                            </a>
                                                                        </div>

                                                                        <div class="profile profile-26">
                                                                            <a data-toggle="modal" data-target="#modal-26">
                                                                                <div class="imagen img-profile">
                                                                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/26_-_wes_marshall.png" alt="Wes Marshal" title="Wes Marshal">
                                                                                </div>
                                                                                <div class="title title-profile">
                                                                                    <h3>Wes Marshal</h3>
                                                                                </div>
                                                                                <div class="subtitle subtitle-profile">
                                                                                    <h4>Profesor Facultad de Ingeniería y Ciencias Aplicadas y Autor del libro: Asesinado por un ingeniero de tránsito</h4>
                                                                                </div>
                                                                            </a>
                                                                        </div>

                                                                        <div class="profile profile-12">
                                                                            <a data-toggle="modal" data-target="#modal-12">
                                                                                <div class="imagen img-profile">
                                                                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-09-2024/44_-_antonio_trujillo.png" alt="Antonio Trujillo" title="Antonio Trujillo">
                                                                                </div>
                                                                                <div class="title title-profile">
                                                                                    <h3>Antonio Trujillo</h3>
                                                                                </div>
                                                                                <div class="subtitle subtitle-profile">
                                                                                    <h4>Profesor asociado Departamento de Salud Internacional y Unidad de Investigación de Lesiones Internacionales - Universidad Johns Hopkins</h4>
                                                                                </div>
                                                                            </a>
                                                                        </div>

                                                                        <div class="profile profile-41">
                                                                            <a data-toggle="modal" data-target="#modal-41">
                                                                                <div class="imagen img-profile">
                                                                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-09-2024/51_-_segundo_lopez.png" alt="Jose Segundo Lopez Valderrama" title="Jose Segundo Lopez Valderrama">
                                                                                </div>
                                                                                <div class="title title-profile">
                                                                                    <h3>Jose Segundo Lopez Valderrama</h3>
                                                                                </div>
                                                                                <div class="subtitle subtitle-profile">
                                                                                    <h4>Jefe Oficina de Seguridad Vial - Secretaría Distrital de Movilidad</h4>
                                                                                </div>
                                                                            </a>
                                                                        </div>

                                                                        <div class="profile profile-7">
                                                                            <a data-toggle="modal" data-target="#modal-7">
                                                                                <div class="imagen img-profile">
                                                                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/7_-_laurent_carnis.png" alt="Laurent Carnis" title="Laurent Carnis">
                                                                                </div>
                                                                                <div class="title title-profile">
                                                                                    <h3>Laurent Carnis</h3>
                                                                                </div>
                                                                                <div class="subtitle subtitle-profile">
                                                                                    <h4>Director de investigación - Universidad Gustave Eiffel</h4>
                                                                                </div>
                                                                            </a>
                                                                        </div>


                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- collapse d2-2 -->
                        <div class='panel panel-primary'>
                            <div class='panel-heading' role='tab' id='heading-d2-2'>
                                <h4 class='panel-title'>
                                    <a role='button' data-toggle='collapse' data-parent='#accordion-dia2' href='#collapse-d2-2' aria-expanded='false' aria-controls='collapse-d2-2'>
                                        <span class="enfasis-text">TALLER:</span><br>“UNA MIRADA A ESCALA INFANTIL, RECORRIDOS CON PERISCOPIOS INVERTIDOS”
                                    </a>
                                </h4>
                            </div>
                            <div id='collapse-d2-2' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading-d2-2' aria-expanded='false'>
                                <div class='panel-body'>
                                    <div class='body-collapse-d2-2'>
                                        <div class="event event-d2-2">
                                            <div class="event-data">
                                                <p class="paragraph ph-lugar"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Lugar: Bosanova, El porvenir</p>
                                                <p class="paragraph ph-hora"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>Hora: 8:00 am - 12:00 pm</p>
                                            </div>

                                            <div class="event-allies">
                                                <p class="paragraph ph-1"><b>Aliados (con el apoyo de):</b></p>
                                                <div class="aliados">
                                                    <div class='item'>
                                                        <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-09-2024/ssv_cities_4_children.png' alt='logo Cities 4 Children'>
                                                        <p>Cities 4 Children</p>
                                                    </div>
                                                    <div class='item'>
                                                        <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-09-2024/ssv_fundacion_despacio.png' alt='logo Fundación Despacio'>
                                                        <p>Fundación Despacio</p>
                                                    </div>
                                                    <div class='item'>
                                                        <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-09-2024/ssv_instituto_de_recursos_mundiales.png' alt='logo Instituto de Recursos Mundiales'>
                                                        <p>Instituto de Recursos Mundiales</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="event-description">
                                                <p class="paragraph ph-1">Diálogo estructurado alrededor de un Recorrido “Poniéndose en los apatos de la niñez” para identificar y difundir buenas prácticas de diseño urbano para mejorar la seguridad vial.</p>
                                                <b>Evento Cerrado</b>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- collapse d2-3 -->
                        <div class='panel panel-primary'>
                            <div class='panel-heading' role='tab' id='heading-d2-3'>
                                <h4 class='panel-title'>
                                    <a role='button' data-toggle='collapse' data-parent='#accordion-dia2' href='#collapse-d2-3' aria-expanded='false' aria-controls='collapse-d2-3'>
                                        <span class="enfasis-text">taller</span><br>“GRSP: TRANSFERENCIA DE CONOCIMIENTOS SOBRE CONTROL”
                                    </a>
                                </h4>
                            </div>
                            <div id='collapse-d2-3' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading-d2-3' aria-expanded='false'>
                                <div class='panel-body'>
                                    <div class='body-collapse-d2-3'>
                                        <div class="event event-d2-3">
                                            <div class="event-data">
                                                <p class="paragraph ph-lugar"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Lugar: Universidad de Los Andes</p>
                                                <p class="paragraph ph-hora"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>Hora: 2:00 pm - 5:00 pm</p>
                                            </div>
                                            <div class="event-allies">
                                                <p class="paragraph ph-1"><b>Aliados (con el apoyo de):</b></p>
                                                <div class="aliados">
                                                    <div class="item">
                                                        <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-09-2024/ssv_universidad_de_los_andes.png" alt="logo Universidad de los Andes">
                                                        <p>Universidad de los Andes</p>
                                                    </div>
                                                    <div class="item">
                                                        <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-09-2024/ssv_velocidades_seguras.png" alt="logo Velocidades Seguras">
                                                        <p>Velocidades Seguras</p>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="event-description">
                                                <p class="paragraph ph-1">Transferencia de conocimiento del personal de agentes y policías de tránsito frente a buenas prácticas en operativos de control para la Seguridad vial.</p>
                                            </div>
                                            <div class="event-panelists">
                                                <p class="paragraph ph-1"><b>Expertos:</b></p><br>
                                                <div class="event-profiles">

                                                    <div class="profile profile-29">
                                                        <a data-toggle="modal" data-target="#modal-29">
                                                            <div class="imagen img-profile">
                                                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/29_-_marcin_flieger.png" alt="Marcin Flieger" title="Marcin Flieger">
                                                            </div>
                                                            <div class="title title-profile">
                                                                <h3>Marcin Flieger</h3>
                                                            </div>
                                                            <div class="subtitle subtitle-profile">
                                                                <h4>Gerente de desarrollo de capacidades de vigilancia vial - Alianza mundial para la seguridad vial (GRSP)</h4>
                                                            </div>
                                                        </a>
                                                    </div>

                                                    <div class="profile profile-28">
                                                        <a data-toggle="modal" data-target="#modal-28">
                                                            <div class="imagen img-profile">
                                                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/28_-_juan_pablo_bocarejo.png" alt="Juan Pablo Bocarejo" title="Juan Pablo Bocarejo">
                                                            </div>
                                                            <div class="title title-profile">
                                                                <h3>Juan Pablo Bocarejo</h3>
                                                            </div>
                                                            <div class="subtitle subtitle-profile">
                                                                <h4>Director del Departamento de Ingeniería Civil y Ambiental - Universidad de Los Andes</h4>
                                                            </div>
                                                        </a>
                                                    </div>

                                                </div>
                                                <b>Evento Cerrado</b>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <div role="tabpanel" class="tab-pane" id="tab3">
                    <!-- collapse group dia3 -->
                    <div class='panel-group' id='accordion-dia3' role='tablist ' aria-multiselectable='true'>

                        <!-- collapse d3-1 -->
                        <div class='panel panel-primary'>
                            <div class='panel-heading' role='tab' id='heading-d3-1'>
                                <h4 class='panel-title'>
                                    <a role='button' data-toggle='collapse' data-parent='#accordion-dia3' href='#collapse-d3-1' aria-expanded='false' aria-controls='collapse-d3-1'>
                                        CELEBRANDO EL DÍA DE LA MOVILIDAD SOSTENIBLE CON LAS NIÑAS, NIÑOS Y JÓVENES DE BOGOTÁ
                                    </a>
                                </h4>
                            </div>
                            <div id='collapse-d3-1' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading-d3-1' aria-expanded='false'>
                                <div class='panel-body'>
                                    <div class='body-collapse-d3-1'>
                                        <div class="event event-d3-1">
                                            <div class="event-description">
                                                <h3 class="title title-1">Evento en conjunto entre la Secretaría Distrital de Educación y la Secretaría Distrital de Movilidad</h3>
                                                <h4 class="title title-2">Objetivo del evento:</h4>
                                                <p class="paragraph ph-1">El Distrito celebra el primer jueves de cada mes el “Día de la movilidad sostenible” (Decreto 37 de 2019) el 3 de octubre en el marco de la Semana de Seguridad Vial, se han reunido los programas del Distrito que buscan una movilidad más segura para las niñas, niños y adolescentes de Bogotá. Esta celebración pretende priorizar la apropiación del espacio público por parte de los más jóvenes y la comunidad en general, destacando la importancia de que estos espacios sean seguros, accesibles y disfrutables para todos.</p>
                                                <p class="paragraph ph-1"><b>Lugar:</b> Recorrido del programa Ciempiés y sus beneficiarios en la Localidad de Kennedy hacia la Institución Educativa Distrital Rafael Uribe Uribe.</p>
                                                <p class="paragraph ph-1"><b>Primer momento:</b> Además, el evento abrirá un espacio especial para los estudiantes de secundaria interesados en la seguridad vial a través de una feria o laboratorio de experiencias innovadoras, esto en el marco del <b>Decreto 317 de 2020.</b> En este contexto, los jóvenes podrán presentar sus propuestas creativas para mejorar la seguridad en las calles de Bogotá, fomentando un diálogo constructivo entre la juventud y los proyectos públicos distritales. Este laboratorio servirá como plataforma para que los estudiantes compartan ideas innovadoras, desde soluciones tecnológicas hasta nuevas estrategias de seguridad vial, y contribuyan activamente a la transformación de su entorno urbano. La participación de los jóvenes no sólo impulsará la generación de ideas frescas y relevantes, sino que también reforzará su compromiso con la seguridad vial y la apropiación del espacio público, empoderandose para ser agentes de cambio en su comunidad. Este enfoque busca no sólo escuchar, sino integrar las perspectivas de quienes serán los futuros ciudadanos y líderes en la construcción de una ciudad más segura y accesible para todos.</p>
                                                <p class="paragraph ph-1"><b>Segundo momento:</b> A través del recorrido peatonal guiado por el programa Ciempiés, se promoverá la participación activa de las niñas, niños y adolescentes en la transformación de su entorno urbano, resaltando cómo una movilidad sostenible y un respeto hacia los peatones pueden contribuir a la creación de una ciudad más inclusiva. Las intervenciones del alcalde y de las Secretarías de Movilidad y de Educación reforzarán el compromiso de Bogotá con la construcción de un espacio público que fomente la interacción social y el bienestar comunitario, al mismo tiempo que educa sobre la importancia de diseñar rutas seguras y accesibles para los menores. Este evento simboliza una oportunidad para que los niños se apropien de su ciudad y para que la comunidad se una en la promoción de un futuro urbano más equitativo y sustentable.</p>
                                            </div>
                                        </div>
                                        <!-- collapse d3-1-a -->
                                        <div class='panel panel-primary'>
                                            <div class='panel-heading' role='tab' id='heading-d3-1-a'>
                                                <h4 class='panel-title'>
                                                    <a role='button' data-toggle='collapse' data-parent='#accordion-d3-1' href='#collapse-d3-1-a' aria-expanded='false' aria-controls='collapse-d3-1-a'>
                                                        LABORATORIO EXPERIENCIAS INSPIRADORAS E INNOVADORAS EN SEGURIDAD VIAL EN LA INSTITUCIÓN EDUCATIVA DISTRITAL RAFAEL URIBE URIBE Y RECORRIDO DEL PROGRAMA CIEMPIÉS Y SUS BENEFICIARIOS HACIA SUS VIVIENDAS.
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id='collapse-d3-1-a' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading-d3-1-a' aria-expanded='false'>
                                                <div class='panel-body'>
                                                    <div class='body-collapse-d3-1-a'>
                                                        <div class="event event-d3-1-a">
                                                            <div class="event-data">
                                                                <p class="paragraph ph-hora"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>Hora: 8:00 am - 12:00 pm</p>
                                                                <p class="paragraph ph-lugar"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Lugar: Institución Educativa Distrital Rafael Uribe Uribe</p>
                                                            </div>
                                                            <div class="event-organizer">
                                                                <p class="paragraph ph1"><b>Organizadores:</b></p>
                                                                <p class="paragraph ph2">SDM y SDE</p>
                                                            </div>
                                                            <div class="event-allies">
                                                                <p class="paragraph ph-1"><b>Aliados (con el apoyo de):</b></p>
                                                                <div class="aliados">
                                                                    <div class='item'>
                                                                        <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-09-2024/ssv_logo-fia-members.png' alt='logo FÍA Foundation'>
                                                                        <p>FÍA Foundation</p>
                                                                    </div>
                                                                    <div class='item'>
                                                                        <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-09-2024/ssv_ops.png' alt='logo OPS'>
                                                                        <p>OPS</p>
                                                                    </div>
                                                                    <div class='item'>
                                                                        <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-09-2024/ssv_yours.png' alt='logo Youth For Road Safety'>
                                                                        <p>Youth For Road Safety</p>
                                                                    </div>
                                                                    <div class="item">
                                                                        <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-09-2024/ssv_global_road_safety_partnership.png" alt="logo Global Road Safety Partnership">
                                                                        <p>Global Road Safety Partnership</p>
                                                                    </div>
                                                                    <div class="item">
                                                                        <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-09-2024/ssv_ramo.png" alt="logo Productos Ramo">
                                                                        <p>Productos Ramo</p>
                                                                    </div>
                                                                    <div class="item">
                                                                        <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-09-2024/ssv_alpina.png" alt="logo Alpina">
                                                                        <p>Alpina</p>
                                                                    </div>
                                                                    <div class="item">
                                                                        <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-09-2024/ssv_allianz.png" alt="logo Grupo Allianz">
                                                                        <p>Grupo Allianz</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="event-participants">
                                                                <p class="paragraph ph1"><b>Participantes:</b></p>
                                                                <p class="paragraph ph2">50 niñas y niños beneficiarios de la Ruta de Ciempiés y 80 estudiantes de secundaria que participan en los programas de Promotores e Innovadores en Seguridad Vial.</p>
                                                            </div>
                                                            <div class="event-panel">
                                                                <p class="paragraph ph1"><b>Panel apertura:</b></p>
                                                                <p class="paragraph ph2">"Panel juventud: La seguridad vial desde la mirada de la niñez y adolescencia "</p>
                                                            </div>
                                                            <div class="event-panelists">
                                                                <p class="paragraph ph1"><b>Panelistas:</b></p><br>
                                                                <div class="event-profiles">

                                                                    <div class="profile profile-50">
                                                                        <a data-toggle="modal" data-target="#modal-50">
                                                                            <div class="imagen img-profile">
                                                                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-09-2024/54_-_miguel_angel_cuellar.png" alt="Miguel Ángel Cuéllar" title="Miguel Ángel Cuéllar">
                                                                            </div>
                                                                            <div class="title title-profile">
                                                                                <h3>Miguel Ángel Cuéllar</h3>
                                                                            </div>
                                                                            <div class="subtitle subtitle-profile">
                                                                                <h4>Youth Coalition for Globlal Road Safety</h4>
                                                                            </div>
                                                                        </a>
                                                                    </div>


                                                                </div>
                                                                <ul>
                                                                    <li>Ganadores Promotores Escolares 2023</li>
                                                                    <li>Voceros Programas Niñas y Niños Primero</li>
                                                                </ul>
                                                                <b>Evento Cerrado</b>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- collapse d3-2 -->
                        <div class='panel panel-primary'>
                            <div class='panel-heading' role='tab' id='heading-d3-2'>
                                <h4 class='panel-title'>
                                    <a role='button' data-toggle='collapse' data-parent='#accordion-dia3' href='#collapse-d3-2' aria-expanded='false' aria-controls='collapse-d3-2'>
                                        ENCUENTRO MOVI-INNOVA
                                    </a>
                                </h4>
                            </div>
                            <div id='collapse-d3-2' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading-d3-2' aria-expanded='false'>
                                <div class='panel-body'>
                                    <div class='body-collapse-d3-2'>
                                        <div class="event event-d3-2">

                                            <div class="event-data">
                                                <p class="paragraph ph-lugar"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Lugar: Universidad Externado de Colombia</p>
                                                <p class="paragraph ph-hora"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>Hora: 8:00 am - 12:00 pm</p>
                                            </div>
                                            <div class="event-allies">
                                                <p class="paragraph ph-1"><b>Aliados (con el apoyo de):</b></p>
                                                <div class="aliados">
                                                    <div class="item-large">
                                                        <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-09-2024/image1-98-0.png" alt="logo Universidad Externado de Colombia">
                                                        <p>Universidad Externado de Colombia</p>
                                                    </div>


                                                </div>
                                            </div>
                                            <div class="event-description">
                                                <p class="paragraph ph-1">Como resultado de la convocatoria de soluciones para la movilidad sostenible se presentarán las investigaciones y metodologías innovadoras para contribuir a la promoción de más viajes en modos sostenibles y seguros en la ciudad.</p>
                                            </div>
                                            <div class="event-organizer">
                                                <p class="paragraph ph-1"><b>Conversatorios:</b></p>
                                                <p class="paragraph ph-2">Presentaciones de las soluciones innovadoras en la categoría "Lograr un uso seguro y eficiente de la motocicleta"</p>
                                                <p class="paragraph ph-2">Presentaciones de las soluciones innovadoras en la categoría "Lograr que el 74% de los viajes sean en modos sostenibles"</p>
                                            </div>
                                            <div class="event-p anelists">
                                                <p class="paragraph ph1"><b>Expertos:</b></p><br>
                                                <div class="event-profiles">

                                                    <div class="profile profile-38">
                                                        <a data-toggle="modal" data-target="#modal-38">
                                                            <div class="imagen img-profile">
                                                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/38_-_rafael_unda.png" alt="Rafael Unda" title="Rafael Unda">
                                                            </div>
                                                            <div class="title title-profile">
                                                                <h3>Rafael Unda</h3>
                                                            </div>
                                                            <div class="subtitle subtitle-profile">
                                                                <h4>Director de Inteligencia para la Movilidad - Secretaría Distrital de Movilidad</h4>
                                                            </div>
                                                        </a>
                                                    </div>

                                                    <div class="profile profile-51">
                                                        <a data-toggle="modal" data-target="#modal-51">
                                                            <div class="imagen img-profile">
                                                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/42_-_marco_peres.png" alt="Marco Peres" title="Marco Peres">
                                                            </div>
                                                            <div class="title title-profile">
                                                                <h3>Marco Peres</h3>
                                                            </div>
                                                            <div class="subtitle subtitle-profile">
                                                                <h4>Universidad Externado de Colombia</h4>
                                                            </div>
                                                        </a>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="event-link">
                                                <p class="paragraph ph1"><b>Evento abierto, inscripciones aqui:</b></p>
                                                <p class="paragraph ph2"><span class="glyphicon glyphicon-link" aria-hidden="true"></span>https://docs.google.com/forms/d/e/1FAIpQLSccgAJZCw-gmJL5-c6dOQt6kfVZd01lDzIDXe7SsyNqHfpILQ/viewform</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- collapse d3-3 -->
                        <div class='panel panel-primary'>
                            <div class='panel-heading' role='tab' id='heading-d3-3'>
                                <h4 class='panel-title'>
                                    <a role='button' data-toggle='collapse' data-parent='#accordion-dia3' href='#collapse-d3-3' aria-expanded='false' aria-controls='collapse-d3-3'>
                                        <span class="enfasis-text">TALLER RED ACADÉMICA</span><br>“LA SEGURIDAD VIAL COMO UN ASUNTO DE SALUD PÚBLICA”
                                    </a>
                                </h4>
                            </div>
                            <div id='collapse-d3-3' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading-d3-3' aria-expanded='false'>
                                <div class='panel-body'>
                                    <div class='body-collapse-d3-3'>
                                        <div class="event event-d3-3">
                                            <div class="event-data">
                                                <p class="paragraph ph-hora"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>Hora: 2:00 pm - 5:00 pm</p>
                                                <p class="paragraph ph-lugar"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Lugar: Universidad De Los Andes</p>
                                            </div>
                                            <div class="event-description">
                                                <p class="paragraph ph-1">De la mano de expertos investigadores de la Universidad de los Andes y el proyecto SALURBAL-Clima profundizaremos en el entendimiento de la seguridad vial como un asunto de salud pública, su campo de investigación y cómo puede abordarse desde la política pública.</p>
                                            </div>
                                            <div class="event-allies">
                                                <p class="paragraph ph-1"><b>Aliados (con el apoyo de):</b></p>
                                                <div class="aliados">
                                                    <div class='item'>
                                                        <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-09-2024/ssv_universidad_de_los_andes.png' alt='logo Universidad De Los Andes'>
                                                        <p>Universidad De Los Andes</p>
                                                    </div>
                                                    <div class="item">
                                                        <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-09-2024/salurbal.png" alt="logo Salurbal">
                                                        <p>Salurbal</p>
                                                    </div>


                                                </div>
                                            </div>
                                            <div class="event-panelists">
                                                <p class="paragraph ph1"><b>Expertos:</b></p><br>
                                                <div class="event-profiles">

                                                    <div class="profile profile-52">
                                                        <a data-toggle="modal" data-target="#modal-52">
                                                            <div class="imagen img-profile">
                                                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-09-2024/55_-_olga_sarmiento_.png" alt="Olga Sarmiento" title="Olga Sarmiento">
                                                            </div>
                                                            <div class="title title-profile">
                                                                <h3>Olga Sarmiento</h3>
                                                            </div>
                                                            <div class="subtitle subtitle-profile">
                                                                <h4></h4>
                                                            </div>
                                                        </a>
                                                    </div>

                                                    <div class="profile profile-53">
                                                        <a data-toggle="modal" data-target="#modal-53">
                                                            <div class="imagen img-profile">
                                                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-09-2024/56_-_alex_quistberg.png" alt="Alex Quistberg" title="Alex Quistberg">
                                                            </div>
                                                            <div class="title title-profile">
                                                                <h3>Alex Quistberg</h3>
                                                            </div>
                                                            <div class="subtitle subtitle-profile">
                                                                <h4></h4>
                                                            </div>
                                                        </a>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="event-link">
                                                <p class="paragraph ph1"><b>Evento abierto, inscripciones aquí:</b></p>
                                                <p class="paragraph ph2"><span class="glyphicon glyphicon-link" aria-hidden="true"></span>https://docs.google.com/forms/d/e/1FAIpQLSc9C9vU--n8XpbheqT2Estt5ge1n3abq3Pbq3V2q40VUkmw9A/viewform?usp=sf_link</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- collapse d3-4 -->
                        <div class='panel panel-primary'>
                            <div class='panel-heading' role='tab' id='heading-d3-4'>
                                <h4 class='panel-title'>
                                    <a role='button' data-toggle='collapse' data-parent='#accordion-dia3' href='#collapse-d3-4' aria-expanded='false' aria-controls='collapse-d3-4'>
                                        <span class="enfasis-text">TALLER INTRODUCTORIO:</span><br>“VISIÓN CERO Y EL SISTEMA SEGURO”
                                    </a>
                                </h4>
                            </div>
                            <div id='collapse-d3-4' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading-d3-4' aria-expanded='false'>
                                <div class='panel-body'>
                                    <div class='body-collapse-d3-4'>
                                        <div class="event event-d3-4">
                                            <div class="event-data">
                                                <p class="paragraph ph-hora"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>Hora: 2:00 pm - 5:00 pm</p>
                                                <p class="paragraph ph-lugar"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Lugar: : Universidad De Los Andes</p>
                                            </div>
                                            <div class="event-allies">
                                                <p class="paragraph ph-1"><b>Aliados (con el apoyo de):</b></p>
                                                <div class="aliados">
                                                    <div class='item'>
                                                        <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-09-2024/ssv_instituto_de_recursos_mundiales.png' alt='logo Instituto de recursos Mundiales'>
                                                        <p>Instituto de recursos Mundiales</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="event-description">
                                                <p class="paragraph ph-1">Taller introductorio a los enfoques de Visión Cero y el Sistema Seguro y cómo podemos aplicar estos conceptos al diseño de calles seguras.</p>
                                            </div>
                                            <div class="event-panelists">
                                                <p class="paragraph ph1"><b>Expertos:</b></p><br>
                                                <div class="event-profiles">


                                                    <div class="profile profile-27">
                                                        <a data-toggle="modal" data-target="#modal-27">
                                                            <div class="imagen img-profile">
                                                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/27_-_anne_eriksson.png" alt="Anne Eriksonn" title="Anne Eriksonn">
                                                            </div>
                                                            <div class="title title-profile">
                                                                <h3>Anne Eriksonn</h3>
                                                            </div>
                                                            <div class="subtitle subtitle-profile">
                                                                <h4>Ingeniera de Seguridad Vial - Dirección de Carreteras de Dinamarca.</h4>
                                                            </div>
                                                        </a>
                                                    </div>

                                                    <div class="profile profile-8">
                                                        <a data-toggle="modal" data-target="#modal-8">
                                                            <div class="imagen img-profile">
                                                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/8_-_fred_wegman.png" alt="Fred Wegman " title="Fred Wegman ">
                                                            </div>
                                                            <div class="title title-profile">
                                                                <h3>Fred Wegman </h3>
                                                            </div>
                                                            <div class="subtitle subtitle-profile">
                                                                <h4>Profesor emérito de Seguridad Vial - Universidad Técnica de Delft</h4>
                                                            </div>
                                                        </a>
                                                    </div>


                                                </div>
                                            </div>
                                            <div class="event-link">
                                                <p class="paragraph ph1"><b>Enlace al formulario de inscripción:</b></p>
                                                <p class="paragraph ph2"><span class="glyphicon glyphicon-link" aria-hidden="true"></span>https://docs.google.com/forms/d/e/1FAIpQLScQBP_r5OXVCKXr4PME1x1Kx9F6Wi-GktXB8ai_fCdTVEn_cA/viewform?usp=sf_link</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- collapse d3-5 -->
                        <div class='panel panel-primary'>
                            <div class='panel-heading' role='tab' id='heading-d3-5'>
                                <h4 class='panel-title'>
                                    <a role='button' data-toggle='collapse' data-parent='#accordion-dia3' href='#collapse-d3-5' aria-expanded='false' aria-controls='collapse-d3-5'>
                                        <span class="enfasis-text">VISITA TÉCNICA:</span><br>PUNTO CRÍTICO AV. AMÉRICAS POR LA CARA 80
                                    </a>
                                </h4>
                            </div>
                            <div id='collapse-d3-5' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading-d3-5' aria-expanded='false'>
                                <div class='panel-body'>
                                    <div class='body-collapse-d3-5'>
                                        <div class="event event-d3-5">
                                            <div class="event-data">
                                                <p class="paragraph ph-lugar"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Lugar: Localidad de Kennedy</p>
                                                <p class="paragraph ph-hora"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>Hora: 8:00 am - 12:00 pm</p>
                                            </div>
                                            <div class="event-description">
                                                <p class="paragraph ph-1">Ejercicio de observación e inspección de uno de los puntos críticos de siniestralidad vial de peatones para identificar oportunidades de mejora en infraestructura.</p>
                                            </div>
                                            <div class="event-allies">
                                                <p class="paragraph ph-1"><b>Aliados (con el apoyo de):</b></p>
                                                <div class="aliados">
                                                    <div class='item'>
                                                        <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-09-2024/ssv_instituto_de_recursos_mundiales.png' alt='logo Instituto de recursos Mundiales'>
                                                        <p>Instituto de recursos Mundiales</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="event-panelists">
                                                <p class="paragraph ph1"><b>Invitados:</b></p><br>
                                                <div class="event-profiles">
                                                    <p>Expertos y personal IDU y SDM</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- collapse d3-6 -->
                        <div class='panel panel-primary'>
                            <div class='panel-heading' role='tab' id='heading-d3-6'>
                                <h4 class='panel-title'>
                                    <a role='button' data-toggle='collapse' data-parent='#accordion-dia3' href='#collapse-d3-6' aria-expanded='false' aria-controls='collapse-d3-6'>
                                        ESTRATEGIA DE CONTROL EN VÍA EN VELOCIDAD
                                    </a>
                                </h4>
                            </div>
                            <div id='collapse-d3-6' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading-d3-6' aria-expanded='false'>
                                <div class='panel-body'>
                                    <div class='body-collapse-d3-6'>
                                        <div class="event event-d3-6">
                                            <div class="event-data">
                                                <p class="paragraph ph-lugar"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Lugar: Corredores principales de la ciudad</p>
                                                <p class="paragraph ph-hora"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>Hora: 6:00 pm - 8:00 pm</p>
                                            </div>
                                            <div class="event-description">
                                                <p class="paragraph ph-1">Refuerzo de los operativos de control de la ciudad para contrarrestar el factor de riesgo por velocidad.</p>
                                            </div>
                                            <div class="event-panelists">
                                                <p class="paragraph ph1"><b>Invitados:</b></p><br>
                                                <div class="event-profiles">

                                                    <div class="profile profile-1">
                                                        <a data-toggle="modal" data-target="#modal-1">
                                                            <div class="imagen img-profile">
                                                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/1_-_claudia_diaz.png" alt="Claudia Díaz" title="Claudia Díaz">
                                                            </div>
                                                            <div class="title title-profile">
                                                                <h3>Claudia Díaz</h3>
                                                            </div>
                                                            <div class="subtitle subtitle-profile">
                                                                <h4>Secretaria Distrital de Movilidad</h4>
                                                            </div>
                                                        </a>
                                                    </div>

                                                    <div class="profile profile-7">
                                                        <a data-toggle="modal" data-target="#modal-7">
                                                            <div class="imagen img-profile">
                                                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/7_-_laurent_carnis.png" alt="Laurent Carnis" title="Laurent Carnis">
                                                            </div>
                                                            <div class="title title-profile">
                                                                <h3>Laurent Carnis</h3>
                                                            </div>
                                                            <div class="subtitle subtitle-profile">
                                                                <h4>Director de investigación - Universidad Gustave Eiffel</h4>
                                                            </div>
                                                        </a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="tab4">

                    <!-- collapse group dia4 -->
                    <div class='panel-group' id='accordion-dia4' role='tablist ' aria-multiselectable='true'>

                        <!-- collapse d4-1 -->
                        <div class='panel panel-primary'>
                            <div class='panel-heading' role='tab' id='heading-d4-1'>
                                <h4 class='panel-title'>
                                    <a role='button' data-toggle='collapse' data-parent='#accordion-dia4' href='#collapse-d4-1' aria-expanded='false' aria-controls='collapse-d4-1'>
                                        <span class="enfasis-text">RECONOCIMIENTOS RED EMPRESARIAL</span><br>DESAYUNO DE RECONOCIMIENTO A LAS EMPRESAS DESTACADAS DE LA RED DE SEGURIDAD VIAL.
                                    </a>
                                </h4>
                            </div>
                            <div id='collapse-d4-1' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading-d4-1' aria-expanded='false'>
                                <div class='panel-body'>
                                    <div class='body-collapse-d4-1'>
                                        <div class="event event-d4-1">
                                            <div class="event-data">
                                                <p class="paragraph ph-lugar"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Lugar: Salon Cristal View - Hotel Tequendama</p>
                                                <p class="paragraph ph-hora"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>Hora: 8:00 am - 12:00 pm</p>
                                            </div>
                                            <div class="event-description">
                                                <p class="paragraph ph-1">El desayuno de la Red de Seguridad Vial se realiza en el marco de los Reconocimientos en buenas prácticas 2024, en este, se premiarán las empresas que han demostrado trabajo y compromiso en la promoción de la Seguridad Vial dentro de su organización y la comunidad.</p>
                                            </div>
                                            <div class="event-allies">
                                                <p class="paragraph ph-1"><b>Aliados (con el apoyo de):</b></p>
                                                <div class="aliados">
                                                    <div class='item'>
                                                        <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-09-2024/ssv_gruposura.png' alt='logo SURA'>
                                                        <p>SURA</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="event-panelists">
                                                <p class="paragraph ph1"><b>Invitados:</b></p><br>
                                                <div class="event-profiles">

                                                    <div class="profile profile-1">
                                                        <a data-toggle="modal" data-target="#modal-1">
                                                            <div class="imagen img-profile">
                                                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/1_-_claudia_diaz.png" alt="Claudia Díaz" title="Claudia Díaz">
                                                            </div>
                                                            <div class="title title-profile">
                                                                <h3>Claudia Díaz</h3>
                                                            </div>
                                                            <div class="subtitle subtitle-profile">
                                                                <h4>Secretaria Distrital de Movilidad</h4>
                                                            </div>
                                                        </a>
                                                    </div>

                                                    <div class="profile profile-41">
                                                        <a data-toggle="modal" data-target="#modal-41">
                                                            <div class="imagen img-profile">
                                                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-09-2024/51_-_segundo_lopez.png" alt="Jose Segundo Lopez Valderrama" title="Jose Segundo Lopez Valderrama">
                                                            </div>
                                                            <div class="title title-profile">
                                                                <h3>Jose Segundo Lopez Valderrama</h3>
                                                            </div>
                                                            <div class="subtitle subtitle-profile">
                                                                <h4>Jefe Oficina de Seguridad Vial - Secretaría Distrital de Movilidad</h4>
                                                            </div>
                                                        </a>
                                                    </div>

                                                </div>
                                                <b>Evento Cerrado*</b>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- collapse d4-2 -->
                        <div class='panel panel-primary'>
                            <div class='panel-heading' role='tab' id='heading-d4-2'>
                                <h4 class='panel-title'>
                                    <a role='button' data-toggle='collapse' data-parent='#accordion-dia4' href='#collapse-d4-2' aria-expanded='false' aria-controls='collapse-d4-2'>
                                        <span class="enfasis-text">ACCIÓN VÍA</span><br>“ZONA FRANCA SE MUEVE SEGURA: ACCIÓN EN VÍA DIRIGIDA A CONDUCTORES Y TRABAJADORES DE TRANSPORTE DE CARGA"
                                    </a>
                                </h4>
                            </div>
                            <div id='collapse-d4-2' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading-d4-2' aria-expanded='false'>
                                <div class='panel-body'>
                                    <div class='body-collapse-d4-2'>
                                        <div class="event event-d4-2">
                                            <div class="event-data">
                                                <p class="paragraph ph-lugar"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Lugar: Av. calle 13 No. 108A - 85 - Zona Franca de Bogotá</p>
                                                <p class="paragraph ph-hora"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>Hora: 8:00 am - 12:00 pm</p>
                                            </div>
                                            <div class="event-description">
                                                <p class="paragraph ph1">La Secretaría de Movilidad desarrolló una actividad pedagógica con los conductores de vehículos pesados de este importante centro logístico, peatones, ciclistas y motociclistas que trabajan en el transporte de carga de la ciudad, como principales actores que interactúan en la vía.</p>
                                            </div>
                                            <div class="event-allies">
                                                <p class="paragraph ph-1"><b>Aliados (con el apoyo de):</b></p>
                                                <div class="aliados">
                                                    <div class='item'>
                                                        <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-09-2024/ssv_logo-zf.png' alt='logo Zona Franca de Bogotá'>
                                                        <p>Zona Franca de Bogotá</p>
                                                    </div>
                                                    <div class="item">
                                                        <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-09-2024/calle13.png" alt="logo Corporación Calle 13">
                                                        <p>Corporación Calle 13</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="event-profiles">
                                                <b>Evento Cerrado*</b>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- collapse d4-3 -->
                        <div class='panel panel-primary'>
                            <div class='panel-heading' role='tab' id='heading-d4-3'>
                                <h4 class='panel-title'>
                                    <a role='button' data-toggle='collapse' data-parent='#accordion-dia4' href='#collapse-d4-3' aria-expanded='false' aria-controls='collapse-d4-3'>
                                        <span class="enfasis-text">VISITA TÉCNICA:</span><br>PUNTO CRÍTICO AV. BOYACÁ CON AV. AMÉRICAS
                                    </a>
                                </h4>
                            </div>
                            <div id='collapse-d4-3' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading-d4-3' aria-expanded='false'>
                                <div class='panel-body'>
                                    <div class='body-collapse-d4-3'>
                                        <div class="event event-d4-3">
                                            <div class="event-data">
                                                <p class="paragraph ph-lugar"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Lugar: Localidad de Bosa</p>
                                                <p class="paragraph ph-hora"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>Hora: 8:00 am - 12:00 pm</p>
                                            </div>
                                            <div class="event-description">
                                                <p class="paragraph ph1">Ejercicio de observación e inspección de uno de los puntos críticos de siniestralidad vial de motociclistas para identificar oportunidades de mejora en infraestructura.</p>
                                            </div>
                                            <div class="event-allies">
                                                <p class="paragraph ph-1"><b>Aliados (con el apoyo de):</b></p>
                                                <div class="aliados">
                                                    <div class='item'>
                                                        <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-09-2024/ssv_instituto_de_recursos_mundiales.png' alt='logo Instituto de Recursos Mundiales'>
                                                        <p>Instituto de Recursos Mundiales</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="event-profiles">
                                                <b>Evento Cerrado*</b>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- collapse d4-4 -->
                        <div class='panel panel-primary'>
                            <div class='panel-heading' role='tab' id='heading-d4-4'>
                                <h4 class='panel-title'>
                                    <a role='button' data-toggle='collapse' data-parent='#accordion-dia4' href='#collapse-d4-4' aria-expanded='false' aria-controls='collapse-d4-4'>
                                        <span class="enfasis-text">TALLER:</span><br>“EL MANUAL DE ESPACIO PÚBLICO Y LA SEGURIDAD VIAL - DISEÑO DE CALLES COMPLETAS”
                                    </a>
                                </h4>
                            </div>
                            <div id='collapse-d4-4' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading-d4-4' aria-expanded='false'>
                                <div class='panel-body'>
                                    <div class='body-collapse-d4-4'>
                                        <div class="event event-d4-4">
                                            <div class="event-data">
                                                <p class="paragraph ph-lugar"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Lugar: Universidad De Los Andes</p>
                                                <p class="paragraph ph-hora"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>Hora: 2:00 pm - 5:00 pm</p>
                                            </div>
                                            <div class="event-description">
                                                <p class="paragraph ph-1">Taller conjunto para armonizar la implementación del Manual de Espacio Público con las recomendaciones para el diseño de calles seguras.</p>
                                            </div>

                                            <div class="event-allies">
                                                <p class="paragraph ph-1"><b>Aliados (con el apoyo de):</b></p>
                                                <div class="aliados">
                                                    <div class='item'>
                                                        <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-09-2024/ssv_instituto_de_recursos_mundiales.png' alt='logo Instituto de Recursos Mundiales'>
                                                        <p>Instituto de Recursos Mundiales</p>
                                                    </div>
                                                    <div class='item'>
                                                        <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/30-09-2024/secretaria_general.png' alt='logo Secretaría Distrital de Planeación'>
                                                        <p>Secretaría Distrital de Planeación</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="event-panelists">
                                                <p class="paragraph ph1"><b>Invitados:</b></p><br>
                                                <div class="event-profiles">

                                                    <div class="profile profile-27">
                                                        <a data-toggle="modal" data-target="#modal-27">
                                                            <div class="imagen img-profile">
                                                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/27_-_anne_eriksson.png" alt="Anne Eriksonn" title="Anne Eriksonn">
                                                            </div>
                                                            <div class="title title-profile">
                                                                <h3>Anne Eriksonn</h3>
                                                            </div>
                                                            <div class="subtitle subtitle-profile">
                                                                <h4>Ingeniera de Seguridad Vial - Dirección de Carreteras de Dinamarca.</h4>
                                                            </div>
                                                        </a>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="event-link">
                                                <p class="paragraph ph1"><b>Evento abierto, inscripciones aqui:</b></p>
                                                <p class="paragraph ph2"><span class="glyphicon glyphicon-link" aria-hidden="true"></span>https://forms.gle/uhnRTHBsxDzvMRSK6</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- collapse d4-5 -->
                        <div class='panel panel-primary'>
                            <div class='panel-heading' role='tab' id='heading-d4-5'>
                                <h4 class='panel-title'>
                                    <a role='button' data-toggle='collapse' data-parent='#accordion-dia4' href='#collapse-d4-5' aria-expanded='false' aria-controls='collapse-d4-5'>
                                        <span class="enfasis-text">TALLER:</span><br>“ALIANZA DE VELOCIDADES SEGURAS”
                                    </a>
                                </h4>
                            </div>
                            <div id='collapse-d4-5' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading-d4-5' aria-expanded='false'>
                                <div class='panel-body'>
                                    <div class='body-collapse-d4-5'>
                                        <div class="event event-d4-5">
                                            <div class="event-data">
                                                <p class="paragraph ph-lugar"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Lugar: Universidad De Los Andes</p>
                                                <p class="paragraph ph-hora"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>Hora: 2:00 pm - 5:00 pm</p>
                                            </div>
                                            <div class="event-description">
                                                <p class="paragraph ph-1">Espacio para ampliar el conocimiento en la gestión de la velocidad en el territorio nacional.</p>
                                            </div>
                                            <div class="event-allies">
                                                <p class="paragraph ph-1"><b>Aliados (con el apoyo de):</b></p>
                                                <div class="aliados">
                                                    <div class="item">
                                                        <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-09-2024/ssv_universidad_de_los_andes.png" alt="logo Universidad de los Andes">
                                                        <p>Universidad de los Andes</p>
                                                    </div>
                                                    <div class="item">
                                                        <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-09-2024/ssv_velocidades_seguras.png" alt="logo Alianza de Velocidades Seguras">
                                                        <p>Alianza de Velocidades Seguras</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="event-organizer">
                                                <p class="paragraph ph1"><b>Organizadores:</b></p>
                                                <p class="paragraph ph2">Universidad de los Andes</p>
                                                <p class="paragraph ph2">Alianza de Velocidades Seguras</p>
                                            </div>
                                            <b>Evento cerrado*</b>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- collapse d4-6 -->
                        <div class='panel panel-primary'>
                            <div class='panel-heading' role='tab' id='heading-d4-6'>
                                <h4 class='panel-title'>
                                    <a role='button' data-toggle='collapse' data-parent='#accordion-dia4' href='#collapse-d4-6' aria-expanded='false' aria-controls='collapse-d4-6'>
                                        <span class="enfasis-text">ACTIVIDAD EN VÍA:</span><br>“PLANEA TU REGRESO A CASA - ESTRATEGIA DE PREVENCIÓN DE CONSUMO DE ALCOHOL Y OTRAS SUSTANCIAS PSICOACTIVAS”
                                    </a>
                                </h4>
                            </div>
                            <div id='collapse-d4-6' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading-d4-6' aria-expanded='false'>
                                <div class='panel-body'>
                                    <div class='body-collapse-d4-6'>
                                        <div class="event event-d4-6">
                                            <div class="event-data">
                                                <p class="paragraph ph-lugar"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Lugar: Plazoleta Calle 85 por Carrera 15 </p>
                                                <p class="paragraph ph-hora"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>Hora: 7:00 pm - 10:00 pm</p>
                                            </div>
                                            <div class="event-description">
                                                <p class="paragraph ph-1">La Secretaría de Movilidad, junto con la Secretaría de Cultura, Recreación y Deporte y la Secretaría de Salud, realizará el montaje de una carpa que simula un bar. Un espacio en donde los transeúntes pudieron vivir la experiencia de manejar bajo los efectos del alcohol o la embriaguez no alcohólica, con el fin de generar conciencia sobre esta grave conducta a la hora de conducir.</p>
                                            </div>
                                            <div class="event-allies">
                                                <p class="paragraph ph-1"><b>Aliados (con el apoyo de):</b></p>
                                                <div class="aliados">
                                                    <div class="item">
                                                        <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/30-09-2024/secretaria_general.png" alt="logo Secretaría Distrital de Cultura, Recreación y Deporte">
                                                        <p>Secretaría Distrital de Cultura, Recreación y Deporte</p>
                                                    </div>
                                                    <div class="item">
                                                        <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/30-09-2024/secretaria_general.png" alt="logo Secretaría Distrital de Salud">
                                                        <p>Secretaría Distrital de Salud</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <div role="tabpanel" class="tab-pane" id="tab5">

                    <!-- collapse group dia5 -->
                    <div class='panel-group' id='accordion-dia5' role='tablist ' aria-multiselectable='true'>

                        <!-- collapse d5-1 -->
                        <div class='panel panel-primary'>
                            <div class='panel-heading' role='tab' id='heading-d5-1'>
                                <h4 class='panel-title'>
                                    <a role='button' data-toggle='collapse' data-parent='#accordion-dia5' href='#collapse-d5-1' aria-expanded='false' aria-controls='collapse-d5-1'>
                                        <span class="enfasis-text">ESTRATEGIA CONTROL EN VÍA: </span><br>“EMBRIAGUEZ”
                                    </a>
                                </h4>
                            </div>
                            <div id='collapse-d5-1' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading-d5-1' aria-expanded='false'>
                                <div class='panel-body'>
                                    <div class='body-collapse-d5-1'>
                                        <div class="event event-d5-1">
                                            <div class="event-data">
                                                <p class="paragraph ph-lugar"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Lugar: Corredores principales de la ciudad</p>
                                                <p class="paragraph ph-hora"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>Hora: 5:00 am - 8:00 am</p>
                                            </div>
                                            <div class="event-description">
                                                <p class="paragraph ph-1">Refuerzo de los operativos de control de la ciudad para contrarrestar el factor de riesgo por consumo de alcohol y otras sustancias.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- collapse d5-2 -->
                        <div class='panel panel-primary'>
                            <div class='panel-heading' role='tab' id='heading-d5-2'>
                                <h4 class='panel-title'>
                                    <a role='button' data-toggle='collapse' data-parent='#accordion-dia5' href='#collapse-d5-2' aria-expanded='false' aria-controls='collapse-d5-2'>
                                        Día del motociclista - ACUERDO 550 DE 20214
                                    </a>
                                </h4>
                            </div>
                            <div id='collapse-d5-2' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading-d5-2' aria-expanded='false'>
                                <div class='panel-body'>
                                    <div class='body-collapse-d5-2'>

                                        <!-- collapse group d5-motos -->
                                        <div class='panel-group' id='accordion-d5-motos' role='tablist ' aria-multiselectable='true'>

                                            <!-- collapse d5-m1 -->
                                            <div class='panel panel-primary'>
                                                <div class='panel-heading' role='tab' id='heading-d5-m1'>
                                                    <h4 class='panel-title'>
                                                        <a role='button' data-toggle='collapse' data-parent='#accordion-d5-motos' href='#collapse-d5-m1' aria-expanded='false' aria-controls='collapse-d5-m1'>
                                                            <span class="enfasis-text">FORO-TALLER: </span><br>“INFRAESTRUCTURA SEGURA PARA MOTOCICLISTAS”
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id='collapse-d5-m1' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading-d5-m1' aria-expanded='false'>
                                                    <div class='panel-body'>
                                                        <div class='body-collapse-d5-m1'>
                                                            <div class="event event-d5-m1">
                                                                <div class="event-data">
                                                                    <p class="paragraph ph-lugar"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Lugar: Cámara de Comercio de Bogotá Sede Chapinero: Calle 67 # 8-32. Salón 207/208</p>
                                                                    <p class="paragraph ph-hora"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>Hora: 8:00 pm - 12:00 pm
                                                                    <div class="event-panelists">
                                                                        <p class="paragraph ph1"><b>Conversatorio Inicial:</b></p><br>
                                                                        <div class="event-profiles">

                                                                            <div class="profile profile-50">
                                                                                <a data-toggle="modal" data-target="#modal-50">
                                                                                    <div class="imagen img-profile">
                                                                                        <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-09-2024/54_-_miguel_angel_cuellar.png" alt="Miguel Ángel Cuéllar" title="Miguel Ángel Cuéllar">
                                                                                    </div>
                                                                                    <div class="title title-profile">
                                                                                        <h3>Miguel Ángel Cuéllar</h3>
                                                                                    </div>
                                                                                    <div class="subtitle subtitle-profile">
                                                                                        <h4>Youth Coalition for Globlal Road Safety</h4>
                                                                                    </div>
                                                                                </a>
                                                                            </div>

                                                                            <div class="profile profile-7">
                                                                                <a data-toggle="modal" data-target="#modal-7">
                                                                                    <div class="imagen img-profile">
                                                                                        <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/7_-_laurent_carnis.png" alt="Laurent Carnis" title="Laurent Carnis">
                                                                                    </div>
                                                                                    <div class="title title-profile">
                                                                                        <h3>Laurent Carnis</h3>
                                                                                    </div>
                                                                                    <div class="subtitle subtitle-profile">
                                                                                        <h4>Director de investigación - Universidad Gustave Eiffel</h4>
                                                                                    </div>
                                                                                </a>
                                                                            </div>

                                                                            <div class="profile profile-18">
                                                                                <a data-toggle="modal" data-target="#modal-18">
                                                                                    <div class="imagen img-profile">
                                                                                        <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/18_-_adriana_iza.png" alt="Adriana Iza" title="Adriana Iza">
                                                                                    </div>
                                                                                    <div class="title title-profile">
                                                                                        <h3>Adriana Iza</h3>
                                                                                    </div>
                                                                                    <div class="subtitle subtitle-profile">
                                                                                        <h4>Subsecretaria de Servicios a la ciudadanía - Secretaría Distrital de Movilidad</h4>
                                                                                    </div>
                                                                                </a>
                                                                            </div>

                                                                            <div class="profile profile-5">
                                                                                <a data-toggle="modal" data-target="#modal-5">
                                                                                    <div class="imagen img-profile">
                                                                                        <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/5_-_mary_bottagisio.png" alt="Mary Bottagisio" title="Mary Bottagisio">
                                                                                    </div>
                                                                                    <div class="title title-profile">
                                                                                        <h3>Mary Bottagisio</h3>
                                                                                    </div>
                                                                                    <div class="subtitle subtitle-profile">
                                                                                        <h4> Directora Ejecutiva - Fundación Liga contra la Violencia Vial </h4>
                                                                                    </div>
                                                                                </a>
                                                                            </div>

                                                                            <div class="profile profile-8">
                                                                                <a data-toggle="modal" data-target="#modal-8">
                                                                                    <div class="imagen img-profile">
                                                                                        <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/8_-_fred_wegman.png" alt="Fred Wegman " title="Fred Wegman ">
                                                                                    </div>
                                                                                    <div class="title title-profile">
                                                                                        <h3>Fred Wegman </h3>
                                                                                    </div>
                                                                                    <div class="subtitle subtitle-profile">
                                                                                        <h4>Profesor emérito de Seguridad Vial - Universidad Técnica de Delft</h4>
                                                                                    </div>
                                                                                </a>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                    </p>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- collapse d5-m3 -->
                                            <div class='panel panel-primary'>
                                                <div class='panel-heading' role='tab' id='heading-d5-m3'>
                                                    <h4 class='panel-title'>
                                                        <a role='button' data-toggle='collapse' data-parent='#accordion-d5-motos' href='#collapse-d5-m3' aria-expanded='false' aria-controls='collapse-d5-m3'>
                                                            FERIA INSTITUCIONAL DE SERVICIOS PARA MOTOCICLISTAS
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id='collapse-d5-m3' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading-d5-m3' aria-expanded='false'>
                                                    <div class='panel-body'>
                                                        <div class='body-collapse-d5-m3'>
                                                            <div class="event event-d5-m3">
                                                                <div class="event-data">
                                                                    <p class="paragraph ph-lugar"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Lugar: Bahía 3 elefantes Cl. 23 #72a-80 (Ingreso Av. Boyacá por Calle 23)</p>
                                                                    <p class="paragraph ph-hora"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>Hora: 10:00 am - 3:30 pm</p>
                                                                </div>
                                                                <div class="event-description">
                                                                    <p class="paragraph ph-1">En el marco de la XVIII Semana de la Seguridad Vial y el XI Día Distrital del Motociclista, se organizará la I feria institucional de servicios para el y la motociclista, en la que este actor vial encontrará información de la oferta distrital dirigida a ellas y ellos como actores principales de la vía, así como también actividades de cultura para la movilidad y pedagogía en seguridad vial.</p>
                                                                    <p class="paragraph ph-1">Dentro de la oferta y servicios se encuentra un test drive de fortalecimiento de habilidades para el y la motociclista, ejercicios de pedagogía sobre puntos ciegos y primer respondiente, servicios de gestión de cobros, ABC de salida de patios, promoción de servicios del Centro de Orientación a Víctimas por Siniestros Viales (ORVI), información de emprendimientos, entre otras ofertas del distrito.</p>
                                                                </div>
                                                                <div class="event-allies">
                                                                    <p class="paragraph ph-1"><b>Aliados (con el apoyo de):</b></p>
                                                                    <div class="aliados">
                                                                        <div class='item'>
                                                                            <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/30-09-2024/secretaria_general.png' alt='logo Bogotá, Distrito Capital'>
                                                                            <p>Bogotá, Distrito Capital</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="event-link">
                                                                    <p class="paragraph ph1"><b>EVENTO ABIERTO: ENTRADA LIBRE</b></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <div role="tabpanel" class="tab-pane" id="tab6">
                    <h3 class="title title-1">Lista de invitados</h3>
                    <div class="invitados">


                        <div class="profile profile-1">
                            <a data-toggle="modal" data-target="#modal-1">
                                <div class="imagen img-profile">
                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/1_-_claudia_diaz.png" alt="Claudia Díaz" title="Claudia Díaz">
                                </div>
                                <div class="title title-profile">
                                    <h3>Claudia Díaz</h3>
                                </div>
                                <div class="subtitle subtitle-profile">
                                    <h4>Secretaria Distrital de Movilidad</h4>
                                </div>
                            </a>
                        </div>

                        <div class="profile profile-2">
                            <a data-toggle="modal" data-target="#modal-2">
                                <div class="imagen img-profile">
                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/2_-_claudia_adriazola.png" alt="Claudia Adriazola Steil" title="Claudia Adriazola Steil">
                                </div>
                                <div class="title title-profile">
                                    <h3>Claudia Adriazola Steil</h3>
                                </div>
                                <div class="subtitle subtitle-profile">
                                    <h4>Directora Adjunta - WRI</h4>
                                </div>
                            </a>
                        </div>

                        <div class="profile profile-3">
                            <a data-toggle="modal" data-target="#modal-3">
                                <div class="imagen img-profile">
                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/3_-_orlando_molano.png" alt="Orlando Molano" title="Orlando Molano">
                                </div>
                                <div class="title title-profile">
                                    <h3>Orlando Molano</h3>
                                </div>
                                <div class="subtitle subtitle-profile">
                                    <h4>Director IDU </h4>
                                </div>
                            </a>
                        </div>

                        <div class="profile profile-4">
                            <a data-toggle="modal" data-target="#modal-4">
                                <div class="imagen img-profile">
                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/4_-_carlos_torres_tovar.png" alt="Carlos Alberto Tovar" title="Carlos Alberto Tovar">
                                </div>
                                <div class="title title-profile">
                                    <h3>Carlos Alberto Tovar</h3>
                                </div>
                                <div class="subtitle subtitle-profile">
                                    <h4>Director de Ordenamiento y Desarrollo Físico - Universidad Nacional de Colombia Sede Bogotá</h4>
                                </div>
                            </a>
                        </div>

                        <div class="profile profile-5">
                            <a data-toggle="modal" data-target="#modal-5">
                                <div class="imagen img-profile">
                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/5_-_mary_bottagisio.png" alt="Mary Bottagisio" title="Mary Bottagisio">
                                </div>
                                <div class="title title-profile">
                                    <h3>Mary Bottagisio</h3>
                                </div>
                                <div class="subtitle subtitle-profile">
                                    <h4> Directora Ejecutiva - Fundación Liga contra la Violencia Vial </h4>
                                </div>
                            </a>
                        </div>

                        <div class="profile profile-6">
                            <a data-toggle="modal" data-target="#modal-6">
                                <div class="imagen img-profile">
                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/6_-_gina_tambini.png" alt="Gina Tambini" title="Gina Tambini">
                                </div>
                                <div class="title title-profile">
                                    <h3>Gina Tambini</h3>
                                </div>
                                <div class="subtitle subtitle-profile">
                                    <h4>Representante en Colombia · Organizacion Panamericana de la Salud / Organizacion Mundial de la Salud</h4>
                                </div>
                            </a>
                        </div>

                        <div class="profile profile-7">
                            <a data-toggle="modal" data-target="#modal-7">
                                <div class="imagen img-profile">
                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/7_-_laurent_carnis.png" alt="Laurent Carnis" title="Laurent Carnis">
                                </div>
                                <div class="title title-profile">
                                    <h3>Laurent Carnis</h3>
                                </div>
                                <div class="subtitle subtitle-profile">
                                    <h4>Director de investigación - Universidad Gustave Eiffel</h4>
                                </div>
                            </a>
                        </div>

                        <div class="profile profile-8">
                            <a data-toggle="modal" data-target="#modal-8">
                                <div class="imagen img-profile">
                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/8_-_fred_wegman.png" alt="Fred Wegman " title="Fred Wegman ">
                                </div>
                                <div class="title title-profile">
                                    <h3>Fred Wegman </h3>
                                </div>
                                <div class="subtitle subtitle-profile">
                                    <h4>Profesor emérito de Seguridad Vial - Universidad Técnica de Delft</h4>
                                </div>
                            </a>
                        </div>

                        <div class="profile profile-9">
                            <a data-toggle="modal" data-target="#modal-9">
                                <div class="imagen img-profile">
                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/9_-_santiago_torrado.png" alt="Santiago Torrado" title="Santiago Torrado">
                                </div>
                                <div class="title title-profile">
                                    <h3>Santiago Torrado</h3>
                                </div>
                                <div class="subtitle subtitle-profile">
                                    <h4>Corresponsal Colombia - Periódico El País</h4>
                                </div>
                            </a>
                        </div>

                        <div class="profile profile-10">
                            <a data-toggle="modal" data-target="#modal-10">
                                <div class="imagen img-profile">
                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/10_-_ana_milena_gomez.png" alt="Ana Milena Gómez " title="Ana Milena Gómez ">
                                </div>
                                <div class="title title-profile">
                                    <h3>Ana Milena Gómez </h3>
                                </div>
                                <div class="subtitle subtitle-profile">
                                    <h4>"Subsecretaría de Política de la Movilidad - Secretaria de Movilidad de Bogotá </h4>
                                </div>
                            </a>
                        </div>

                        <div class="profile profile-11">
                            <a data-toggle="modal" data-target="#modal-11">
                                <div class="imagen img-profile">
                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/11_-_leonardo_canon.png" alt="Leonardo Cañon Rubiano" title="Leonardo Cañon Rubiano">
                                </div>
                                <div class="title title-profile">
                                    <h3>Leonardo Cañon Rubiano</h3>
                                </div>
                                <div class="subtitle subtitle-profile">
                                    <h4>Especialista Senior de Transporte - Banco Mundial </h4>
                                </div>
                            </a>
                        </div>

                        <div class="profile profile-12">
                            <a data-toggle="modal" data-target="#modal-12">
                                <div class="imagen img-profile">
                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-09-2024/44_-_antonio_trujillo.png" alt="Antonio Trujillo" title="Antonio Trujillo">
                                </div>
                                <div class="title title-profile">
                                    <h3>Antonio Trujillo</h3>
                                </div>
                                <div class="subtitle subtitle-profile">
                                    <h4>Profesor asociado Departamento de Salud Internacional y Unidad de Investigación de Lesiones Internacionales - Universidad Johns Hopkins</h4>
                                </div>
                            </a>
                        </div>

                        <div class="profile profile-13">
                            <a data-toggle="modal" data-target="#modal-13">
                                <div class="imagen img-profile">
                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/13_-_ma._fernanda_cardenas.png" alt="María Fernanda Cárdenas " title="María Fernanda Cárdenas ">
                                </div>
                                <div class="title title-profile">
                                    <h3>María Fernanda Cárdenas </h3>
                                </div>
                                <div class="subtitle subtitle-profile">
                                    <h4>Asesora técnica regional - Vital Strategies </h4>
                                </div>
                            </a>
                        </div>

                        <div class="profile profile-14">
                            <a data-toggle="modal" data-target="#modal-14">
                                <div class="imagen img-profile">
                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/14_-_jose_stalin_rojas.png" alt="Jose Stallin" title="Jose Stallin">
                                </div>
                                <div class="title title-profile">
                                    <h3>Jose Stallin</h3>
                                </div>
                                <div class="subtitle subtitle-profile">
                                    <h4>Docente y Director observatorio de movilidad y logística de la Universidad Nacional de Colombia </h4>
                                </div>
                            </a>
                        </div>

                        <div class="profile profile-15">
                            <a data-toggle="modal" data-target="#modal-15">
                                <div class="imagen img-profile">
                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/30-09-2024/57_-_bella_castiblanco_-_correcta.png" alt="Bella Castiblanco" title="Bella Castiblanco">
                                </div>
                                <div class="title title-profile">
                                    <h3>Bella Castiblanco</h3>
                                </div>
                                <div class="subtitle subtitle-profile">
                                    <h4>Activista con la reivindicación de las Mujeres Trans </h4>
                                </div>
                            </a>
                        </div>

                        <div class="profile profile-16">
                            <a data-toggle="modal" data-target="#modal-16">
                                <div class="imagen img-profile">
                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/30-09-2024/58_-_jessica_giraldo_-_correcta.png" alt="Jessica Giraldo" title="Jessica Giraldo">
                                </div>
                                <div class="title title-profile">
                                    <h3>Jessica Giraldo</h3>
                                </div>
                                <div class="subtitle subtitle-profile">
                                    <h4>Lider para Bogotá Colectivo Mujeres en Tenis </h4>
                                </div>
                            </a>
                        </div>

                        <div class="profile profile-17">
                            <a data-toggle="modal" data-target="#modal-17">
                                <div class="imagen img-profile">
                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/17_-_camila_gomez.png" alt="Camila Gómez " title="Camila Gómez ">
                                </div>
                                <div class="title title-profile">
                                    <h3>Camila Gómez </h3>
                                </div>
                                <div class="subtitle subtitle-profile">
                                    <h4>Directora del Sistema Distrital de Cuidado de Bogotá - Secretaría Distrital de la Mujer </h4>
                                </div>
                            </a>
                        </div>

                        <div class="profile profile-18">
                            <a data-toggle="modal" data-target="#modal-18">
                                <div class="imagen img-profile">
                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/18_-_adriana_iza.png" alt="Adriana Iza" title="Adriana Iza">
                                </div>
                                <div class="title title-profile">
                                    <h3>Adriana Iza</h3>
                                </div>
                                <div class="subtitle subtitle-profile">
                                    <h4>Subsecretaria de Servicios a la ciudadanía - Secretaría Distrital de Movilidad</h4>
                                </div>
                            </a>
                        </div>

                        <div class="profile profile-19">
                            <a data-toggle="modal" data-target="#modal-19">
                                <div class="imagen img-profile">
                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/19_-_diana_parra.png" alt="Diana Parra" title="Diana Parra">
                                </div>
                                <div class="title title-profile">
                                    <h3>Diana Parra</h3>
                                </div>
                                <div class="subtitle subtitle-profile">
                                    <h4>Asesora en Asuntos de Género y Política Exterior del Ministerio de Relaciones Exteriores</h4>
                                </div>
                            </a>
                        </div>

                        <div class="profile profile-20">
                            <a data-toggle="modal" data-target="#modal-20">
                                <div class="imagen img-profile">
                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/20_-_diana_herrera.png" alt="Diana Herrera" title="Diana Herrera">
                                </div>
                                <div class="title title-profile">
                                    <h3>Diana Herrera</h3>
                                </div>
                                <div class="subtitle subtitle-profile">
                                    <h4>Pintora comprometida con la reivindicaicón de género y la justicia social.</h4>
                                </div>
                            </a>
                        </div>

                        <div class="profile profile-21">
                            <a data-toggle="modal" data-target="#modal-21">
                                <div class="imagen img-profile">
                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/21_-_yu_wu.png" alt="Yu Wu" title="Yu Wu">
                                </div>
                                <div class="title title-profile">
                                    <h3>Yu Wu</h3>
                                </div>
                                <div class="subtitle subtitle-profile">
                                    <h4>Senior Advisor de Metro Línea 1</h4>
                                </div>
                            </a>
                        </div>

                        <div class="profile profile-23">
                            <a data-toggle="modal" data-target="#modal-23">
                                <div class="imagen img-profile">
                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/23_-_dario_hidalgo.png" alt="Dario Hildalgo" title="Dario Hildalgo">
                                </div>
                                <div class="title title-profile">
                                    <h3>Dario Hildalgo</h3>
                                </div>
                                <div class="subtitle subtitle-profile">
                                    <h4>Phd. Profesor Facultad de Ingenieria - Universidad Javierana</h4>
                                </div>
                            </a>
                        </div>

                        <div class="profile profile-24">
                            <a data-toggle="modal" data-target="#modal-24">
                                <div class="imagen img-profile">
                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/24_-_ma._fernanda_ortiz.png" alt="Maria Fernanda Ortiz" title="Maria Fernanda Ortiz">
                                </div>
                                <div class="title title-profile">
                                    <h3>Maria Fernanda Ortiz</h3>
                                </div>
                                <div class="subtitle subtitle-profile">
                                    <h4>Gerente Transmilenio SA</h4>
                                </div>
                            </a>
                        </div>

                        <div class="profile profile-25">
                            <a data-toggle="modal" data-target="#modal-25">
                                <div class="imagen img-profile">
                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/25_-_eric_dumbaugh.png" alt="Eric Dumbaugh" title="Eric Dumbaugh">
                                </div>
                                <div class="title title-profile">
                                    <h3>Eric Dumbaugh</h3>
                                </div>
                                <div class="subtitle subtitle-profile">
                                    <h4>Profesor y Director del Centro de Ciencias Colaborativas para la Seguridad VIal - Universidad Atlantica de Florida </h4>
                                </div>
                            </a>
                        </div>

                        <div class="profile profile-26">
                            <a data-toggle="modal" data-target="#modal-26">
                                <div class="imagen img-profile">
                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/26_-_wes_marshall.png" alt="Wes Marshal" title="Wes Marshal">
                                </div>
                                <div class="title title-profile">
                                    <h3>Wes Marshal</h3>
                                </div>
                                <div class="subtitle subtitle-profile">
                                    <h4>Profesor Facultad de Ingeniería y Ciencias Aplicadas y Autor del libro: Asesinado por un ingeniero de tránsito</h4>
                                </div>
                            </a>
                        </div>

                        <div class="profile profile-27">
                            <a data-toggle="modal" data-target="#modal-27">
                                <div class="imagen img-profile">
                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/27_-_anne_eriksson.png" alt="Anne Eriksonn" title="Anne Eriksonn">
                                </div>
                                <div class="title title-profile">
                                    <h3>Anne Eriksonn</h3>
                                </div>
                                <div class="subtitle subtitle-profile">
                                    <h4>Ingeniera de Seguridad Vial - Dirección de Carreteras de Dinamarca.</h4>
                                </div>
                            </a>
                        </div>

                        <div class="profile profile-28">
                            <a data-toggle="modal" data-target="#modal-28">
                                <div class="imagen img-profile">
                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/28_-_juan_pablo_bocarejo.png" alt="Juan Pablo Bocarejo" title="Juan Pablo Bocarejo">
                                </div>
                                <div class="title title-profile">
                                    <h3>Juan Pablo Bocarejo</h3>
                                </div>
                                <div class="subtitle subtitle-profile">
                                    <h4>Director del Departamento de Ingeniería Civil y Ambiental - Universidad de Los Andes</h4>
                                </div>
                            </a>
                        </div>

                        <div class="profile profile-29">
                            <a data-toggle="modal" data-target="#modal-29">
                                <div class="imagen img-profile">
                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/29_-_marcin_flieger.png" alt="Marcin Flieger" title="Marcin Flieger">
                                </div>
                                <div class="title title-profile">
                                    <h3>Marcin Flieger</h3>
                                </div>
                                <div class="subtitle subtitle-profile">
                                    <h4>Gerente de desarrollo de capacidades de vigilancia vial - Alianza mundial para la seguridad vial (GRSP)</h4>
                                </div>
                            </a>
                        </div>

                        <div class="profile profile-30">
                            <a data-toggle="modal" data-target="#modal-30">
                                <div class="imagen img-profile">
                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/30_-_nathaly_patino.png" alt="Nathaly Patiño" title="Nathaly Patiño">
                                </div>
                                <div class="title title-profile">
                                    <h3>Nathaly Patiño</h3>
                                </div>
                                <div class="subtitle subtitle-profile">
                                    <h4>Directora de Gestión de Tránsito y Control de Tránsito y Transporte - Secretaría Distrital de Movilidad</h4>
                                </div>
                            </a>
                        </div>

                        <div class="profile profile-31">
                            <a data-toggle="modal" data-target="#modal-31">
                                <div class="imagen img-profile">
                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/31_-_paula_caporal.png" alt="Paula Caporal" title="Paula Caporal">
                                </div>
                                <div class="title title-profile">
                                    <h3>Paula Caporal</h3>
                                </div>
                                <div class="subtitle subtitle-profile">
                                    <h4>Investigadora Asociada - Universidad Johns Hopkins</h4>
                                </div>
                            </a>
                        </div>

                        <div class="profile profile-32">
                            <a data-toggle="modal" data-target="#modal-32">
                                <div class="imagen img-profile">
                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-09-2024/52_-_ked_wills.png" alt="Ked Wills" title="Ked Wills">
                                </div>
                                <div class="title title-profile">
                                    <h3>Ked Wills</h3>
                                </div>
                                <div class="subtitle subtitle-profile">
                                    <h4>Consultor de la Asociación Internacional de Jefes de Policía - IACP</h4>
                                </div>
                            </a>
                        </div>

                        <div class="profile profile-33">
                            <a data-toggle="modal" data-target="#modal-33">
                                <div class="imagen img-profile">
                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/33_-_ana_maria_catano.png" alt="Ana Maria Cataño" title="Ana Maria Cataño">
                                </div>
                                <div class="title title-profile">
                                    <h3>Ana Maria Cataño</h3>
                                </div>
                                <div class="subtitle subtitle-profile">
                                    <h4>Jefe de la Oficina de Comunicaciones y Cultura para la Movilidad - Secretaría Distrital de Movilidad</h4>
                                </div>
                            </a>
                        </div>

                        <div class="profile profile-34">
                            <a data-toggle="modal" data-target="#modal-34">
                                <div class="imagen img-profile">
                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/34_-_natalia_ariza.png" alt="Natalia Ariza" title="Natalia Ariza">
                                </div>
                                <div class="title title-profile">
                                    <h3>Natalia Ariza</h3>
                                </div>
                                <div class="subtitle subtitle-profile">
                                    <h4>Especialista de Transporte - Banco Interamericano de Desarrollo </h4>
                                </div>
                            </a>
                        </div>

                        <div class="profile profile-35">
                            <a data-toggle="modal" data-target="#modal-35">
                                <div class="imagen img-profile">
                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/35_-_marcela_neira.png" alt="Marcela Neira" title="Marcela Neira">
                                </div>
                                <div class="title title-profile">
                                    <h3>Marcela Neira</h3>
                                </div>
                                <div class="subtitle subtitle-profile">
                                    <h4>Asesora Técnica - Agencia de Cooperación Alemana en Colombia (GIZ)</h4>
                                </div>
                            </a>
                        </div>

                        <div class="profile profile-36">
                            <a data-toggle="modal" data-target="#modal-36">
                                <div class="imagen img-profile">
                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/36_-_ricardo_montezuma.png" alt="Ricardo Montezuma" title="Ricardo Montezuma">
                                </div>
                                <div class="title title-profile">
                                    <h3>Ricardo Montezuma</h3>
                                </div>
                                <div class="subtitle subtitle-profile">
                                    <h4>PhD en Urbanismo y Movilidad - Universidad Nacional de Colombia</h4>
                                </div>
                            </a>
                        </div>

                        <div class="profile profile-37">
                            <a data-toggle="modal" data-target="#modal-37">
                                <div class="imagen img-profile">
                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/37_-_william_castro.png" alt="William Castro García" title="William Castro García">
                                </div>
                                <div class="title title-profile">
                                    <h3>William Castro García</h3>
                                </div>
                                <div class="subtitle subtitle-profile">
                                    <h4>MSc en Transporte - Universidad Nacional de Colombia</h4>
                                </div>
                            </a>
                        </div>

                        <div class="profile profile-41">
                            <a data-toggle="modal" data-target="#modal-41">
                                <div class="imagen img-profile">
                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-09-2024/51_-_segundo_lopez.png" alt="Jose Segundo Lopez Valderrama" title="Jose Segundo Lopez Valderrama">
                                </div>
                                <div class="title title-profile">
                                    <h3>Jose Segundo Lopez Valderrama</h3>
                                </div>
                                <div class="subtitle subtitle-profile">
                                    <h4>Jefe Oficina de Seguridad Vial - Secretaría Distrital de Movilidad</h4>
                                </div>
                            </a>
                        </div>

                        <div class="profile profile-42">
                            <a data-toggle="modal" data-target="#modal-42">
                                <div class="imagen img-profile">
                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/42_-_oscar_diaz.png" alt="Oscar Díaz" title="Oscar Díaz">
                                </div>
                                <div class="title title-profile">
                                    <h3>Oscar Díaz</h3>
                                </div>
                                <div class="subtitle subtitle-profile">
                                    <h4>Asesor para Latinoamerica - Fundación FIA</h4>
                                </div>
                            </a>
                        </div>

                        <div class="profile profile-43">
                            <a data-toggle="modal" data-target="#modal-43">
                                <div class="imagen img-profile">
                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/43_-_jhon_gonzalez.png" alt="Jhon Gonzalez" title="Jhon Gonzalez">
                                </div>
                                <div class="title title-profile">
                                    <h3>Jhon Gonzalez</h3>
                                </div>
                                <div class="subtitle subtitle-profile">
                                    <h4>Subsecretario de Gestión de la Movilidad - Secretaria Distrital de Movilidad</h4>
                                </div>
                            </a>
                        </div>

                        <div class="profile profile-44">
                            <a data-toggle="modal" data-target="#modal-44">
                                <div class="imagen img-profile">
                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-09-2024/50_-_nancy_molina.png" alt="Nancy Jeanet Molina Achury" title="Nancy Jeanet Molina Achury">
                                </div>
                                <div class="title title-profile">
                                    <h3>Nancy Jeanet Molina Achury</h3>
                                </div>
                                <div class="subtitle subtitle-profile">
                                    <h4>Vicerrectora encargada - Universidad Nacional de Colombia Sede Bogotá</h4>
                                </div>
                            </a>
                        </div>

                        <div class="profile profile-45">
                            <a data-toggle="modal" data-target="#modal-45">
                                <div class="imagen img-profile">
                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-09-2024/45_-_clara_lopez.png" alt="Clara López García" title="Clara López García">
                                </div>
                                <div class="title title-profile">
                                    <h3>Clara López García</h3>
                                </div>
                                <div class="subtitle subtitle-profile">
                                    <h4>Consultora ONU Mujeres para el Ministerio de Relaciones Exteriores</h4>
                                </div>
                            </a>
                        </div>

                        <div class="profile profile-46">
                            <a data-toggle="modal" data-target="#modal-46">
                                <div class="imagen img-profile">
                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-09-2024/46_-_fabrizio.png" alt="Fabrizio Prati" title="Fabrizio Prati">
                                </div>
                                <div class="title title-profile">
                                    <h3>Fabrizio Prati</h3>
                                </div>
                                <div class="subtitle subtitle-profile">
                                    <h4>"Director de Diseño e Investigación</h4>
                                </div>
                            </a>
                        </div>

                        <div class="profile profile-47">
                            <a data-toggle="modal" data-target="#modal-47">
                                <div class="imagen img-profile">
                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-09-2024/53_-_carolina_pineros.png" alt="Carolina Piñeros" title="Carolina Piñeros">
                                </div>
                                <div class="title title-profile">
                                    <h3>Carolina Piñeros</h3>
                                </div>
                                <div class="subtitle subtitle-profile">
                                    <h4>Fundadora y directora ejecutiva RedPapaz</h4>
                                </div>
                            </a>
                        </div>

                        <div class="profile profile-48">
                            <a data-toggle="modal" data-target="#modal-48">
                                <div class="imagen img-profile">
                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-09-2024/48_-_luis_yair.png" alt="Luis Yair Aguilar Rojas" title="Luis Yair Aguilar Rojas">
                                </div>
                                <div class="title title-profile">
                                    <h3>Luis Yair Aguilar Rojas</h3>
                                </div>
                                <div class="subtitle subtitle-profile">
                                    <h4>Director de Coordinación Interinstitucional de la Agencia Nacional de Seguridad Vial</h4>
                                </div>
                            </a>
                        </div>

                        <div class="profile profile-49">
                            <a data-toggle="modal" data-target="#modal-49">
                                <div class="imagen img-profile">
                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-09-2024/49_-_maria_fernanda_ramirez.png" alt="Maria Fernanda Ramirez" title="Maria Fernanda Ramirez">
                                </div>
                                <div class="title title-profile">
                                    <h3>Maria Fernanda Ramirez</h3>
                                </div>
                                <div class="subtitle subtitle-profile">
                                    <h4>Presidenta de la RAM y Líder de movilidad de Despacio</h4>
                                </div>
                            </a>
                        </div>

                        <div class="profile profile-50">
                            <a data-toggle="modal" data-target="#modal-50">
                                <div class="imagen img-profile">
                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-09-2024/54_-_miguel_angel_cuellar.png" alt="Miguel Ángel Cuéllar" title="Miguel Ángel Cuéllar">
                                </div>
                                <div class="title title-profile">
                                    <h3>Miguel Ángel Cuéllar</h3>
                                </div>
                                <div class="subtitle subtitle-profile">
                                    <h4>Youth Coalition for Globlal Road Safety</h4>
                                </div>
                            </a>
                        </div>

                        <div class="profile profile-38">
                            <a data-toggle="modal" data-target="#modal-38">
                                <div class="imagen img-profile">
                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/38_-_rafael_unda.png" alt="Rafael Unda" title="Rafael Unda">
                                </div>
                                <div class="title title-profile">
                                    <h3>Rafael Unda</h3>
                                </div>
                                <div class="subtitle subtitle-profile">
                                    <h4>Director de Inteligencia para la Movilidad - Secretaría Distrital de Movilidad</h4>
                                </div>
                            </a>
                        </div>

                        <div class="profile profile-51">
                            <a data-toggle="modal" data-target="#modal-51">
                                <div class="imagen img-profile">
                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2024/42_-_marco_peres.png" alt="Marco Peres" title="Marco Peres">
                                </div>
                                <div class="title title-profile">
                                    <h3>Marco Peres</h3>
                                </div>
                                <div class="subtitle subtitle-profile">
                                    <h4>Universidad Externado de Colombia</h4>
                                </div>
                            </a>
                        </div>

                        <div class="profile profile-52">
                            <a data-toggle="modal" data-target="#modal-52">
                                <div class="imagen img-profile">
                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-09-2024/55_-_olga_sarmiento_.png" alt="Olga Sarmiento" title="Olga Sarmiento">
                                </div>
                                <div class="title title-profile">
                                    <h3>Olga Sarmiento</h3>
                                </div>
                                <div class="subtitle subtitle-profile">
                                    <h4></h4>
                                </div>
                            </a>
                        </div>

                        <div class="profile profile-53">
                            <a data-toggle="modal" data-target="#modal-53">
                                <div class="imagen img-profile">
                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-09-2024/56_-_alex_quistberg.png" alt="Alex Quistberg" title="Alex Quistberg">
                                </div>
                                <div class="title title-profile">
                                    <h3>Alex Quistberg</h3>
                                </div>
                                <div class="subtitle subtitle-profile">
                                    <h4></h4>
                                </div>
                            </a>
                        </div>

                        <div class="profile profile-54">
                            <a data-toggle="modal" data-target="#modal-54">
                                <div class="imagen img-profile">
                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/30-09-2024/59_-_angie_buitrago_orvi.png" alt="Angie Buitrago" title="Angie Buitrago">
                                </div>
                                <div class="title title-profile">
                                    <h3>Angie Buitrago</h3>
                                </div>
                                <div class="subtitle subtitle-profile">
                                    <h4>ORVI, Centro de orientación a víctimas de siniestros viales</h4>
                                </div>
                            </a>
                        </div>


                    </div>
                </div>

                <div role="tabpanel" class="tab-pane" id="tab7">
                    <h3 class="title title-1">Plan Distrital de Seguridad Vial 2023 - 2032</h3>
                    <!-- PDF 4:3 aspect ratio -->
                    <div class='box-pdf'>
                        <div class='embed-responsive embed-responsive-4by3'>
                            <iframe src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/30-09-2024/pdsv_-_2024_-_grafico.pdf' width='640' height='480' allow='autoplay'></iframe>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <style>
        .ssv .cpnt-x {
            max-width: 320px !important;
            width: 320px;
            height: 400px;
            margin: 0px auto;
        }

        @media(min-width:768px) {
            .ssv .cpnt-x {
                max-width: 450px !important;
                width: 450px;
                height: 600px;
                margin: 32px auto;
            }
        }
    </style>
    <div class="cpnt cpnt-4 cpnt-x">
        <a class="twitter-timeline" data-lang="es" data-width="450" data-height="600" data-dnt="true" data-theme="light" href="https://twitter.com/SectorMovilidad?ref_src=twsrc%5Etfw">Tweets by SectorMovilidad</a>
        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    </div>

    <style>
        .ssv .cpnt-5 {
            display: grid;
            gap: 8px;
            grid-auto-flow: dense;
            grid-template-columns: 1fr;
            grid-template-rows: auto;
        }

        @media(min-width:768px) {
            .ssv .cpnt-5 {
                display: grid;
                gap: 8px;
                grid-auto-flow: dense;
                grid-template-columns: 1fr 1fr;
                grid-template-rows: auto;
            }
        }

        .ssv .box-verticalTabs {
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

        .ssv .box-verticalTabs .titulo {
            grid-area: titulo;
        }

        .ssv .box-verticalTabs .titulo h3 {
            text-align: center;
            font-weight: 700;
            margin-bottom: 24px;
            font-size: 28px;
            border-top: solid 2px #71B602;
            border-bottom: solid 2px #71B602;
            padding: 16px 15px;
        }

        .ssv .box-verticalTabs .botones {
            grid-area: botones;
            background-color: #f5f5f5;
        }

        #myTabs {
            background-color: #ffffff;
            border: solid 1px #e5e5e5;
            border-radius: 5px;
            margin: 8px;
        }

        .ssv .box-verticalTabs .contenido {
            grid-area: contenido;
        }

        .ssv .box-verticalTabs .contenido .box-content {
            padding: 0px;
        }

        .ssv .box-verticalTabs .contenido .box-content p {
            margin: 0px;
            padding-bottom: 16px !important;
            text-align: justify;
        }

        .ssv .box-verticalTabs .contenido .box-content ol>li {
            margin: 0px;
            padding-bottom: 12px !important;
        }
    </style>
    <div class="cpnt cpnt-5 cpnt-aliados">

        <style>
            .ssv .empresas {
                /* margin-top: 30px; */
                background-color: #4d541f;
                padding: 16px;

            }

            .ssv .empresas h3 {
                /* font-size: 18px; */
                font-weight: 700;
                text-align: center;
                line-height: 1.2;
                color: #ffffff;
                padding: 16px;
            }

            .ssv .empresas p {
                grid-area: resultados;
                padding: 0px 15px 15px 15px;
                font-size: 15px;
                font-weight: 500;
                text-align: justify;
                line-height: 1.3;
                color: #FFFFFF;
            }
        </style>
        <div class="empresas">
            <h3>Nuestros aliados:</h3>
            <p>Durante el desarrollo de la XVIII Semana de la Seguridad Vial, contamos con el apoyo de diferentes empresas, organizaciones nacionales e internacionales que nos acompañan en los eventos y lanzamientos de la semana, y que velan por la seguridad vial. A todos, un agradecimiento especial.</p>
        </div>


        <style>
            .ssv .carousel-empresas {
                margin: auto;
                width: 100%;

            }

            .carousel-empresas .item img {
                padding: 16px;
                max-width: 360px !important;
                margin: auto;
            }

            .carousel-empresas .item p {
                text-align: center;
            }
        </style>
        <div class='carousel-empresas'>
            <div id='carousel' class='carousel slide' data-ride='carousel'>

                <div class='carousel-inner'>
                    <div class='item active'>
                        <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-09-2024/ssv_logo-fia-members.png' alt='logo'>
                    </div>
                    <div class='item'>
                        <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-09-2024/ssv_cities_4_children.png' alt='logo'>
                    </div>
                    <div class='item'>
                        <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-09-2024/ssv_fundacion_despacio.png' alt='logo'>
                    </div>
                    <div class='item'>
                        <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-09-2024/ssv_gruposura.png' alt='logo'>
                    </div>
                    <div class='item'>
                        <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-09-2024/ssv_iniciativa_bloomberg.png' alt='logo'>
                    </div>
                    <div class='item'>
                        <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-09-2024/ssv_liga_contra_la_violencia_vial.png' alt='logo'>
                    </div>
                    <div class='item'>
                        <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-09-2024/ssv_logo_grsp.png' alt='logo'>
                    </div>
                    <div class='item'>
                        <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-09-2024/ssv_logo-zf.png' alt='logo'>
                    </div>
                    <div class='item'>
                        <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-09-2024/ssv_ops.png' alt='logo'>
                    </div>
                    <div class='item'>
                        <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-09-2024/ssv_universidad_nacional.png' alt='logo'>
                    </div>
                    <div class='item'>
                        <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-09-2024/ssv_universidad_de_los_andes.png' alt='logo'>
                    </div>
                    <div class='item'>
                        <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-09-2024/ssv_velocidades_seguras.png' alt='logo'>
                    </div>
                    <div class='item'>
                        <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-09-2024/ssv_yours.png' alt='logo'>
                    </div>
                    <div class='item'>
                        <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-09-2024/ssv_octubre_urbano.png' alt='logo'>
                    </div>
                    <div class='item'>
                        <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-09-2024/ssv_iniciativa_bloomberg.png' alt='logo'>
                    </div>
                    <div class='item'>
                        <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-09-2024/ssv_instituto_de_recursos_mundiales.png' alt='logo'>
                    </div>
                    <div class='item'>
                        <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-09-2024/ssv_global_road_safety_partnership.png' alt='logo'>
                    </div>
                    <div class='item'>
                        <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-09-2024/ssv_allianz.png' alt='logo'>
                    </div>
                    <div class='item'>
                        <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-09-2024/ssv_alpina.png' alt='logo'>
                    </div>
                    <div class='item'>
                        <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-09-2024/ssv_ramo.png' alt='logo'>
                    </div>
                    <div class='item'>
                        <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-09-2024/ssv_universidad_externado.png' alt='logo'>
                    </div>
                    <div class='item'>
                        <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-09-2024/salurbal.png' alt='logo'>
                    </div>
                    <div class='item'>
                        <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-09-2024/calle13.png' alt='logo'>
                    </div>
                    <div class='item'>
                        <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/30-09-2024/onu_habitat_2.png' alt='logo'>
                    </div>
                    <div class='item'>
                        <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/30-09-2024/secretaria_general.png' alt='logo'>
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

    </div>

</div>
<br>
<!-- Fin Set -->

