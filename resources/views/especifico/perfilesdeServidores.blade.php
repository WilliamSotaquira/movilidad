@extends ('welcome')
@section ('contenido')

<style media="screen" type="text/css">
    .h2,
    h2 {
        font-size: 30px;
        text-align: center;
        color: #EA0B2A !important;
        font-weight: 600;
        max-width: 700px;
        margin: 0 auto;
        padding-bottom: 30px;
    }

    .img-center {
        display: block;
        margin: 0 auto;
        max-width: 100%;
    }

    .nombre-perfil {
        color: #EA0B2A !important;
        font-size: 25px;
        font-weight: 500;
    }

    .cargo-perfil {
        font-size: 20px;
        margin-bottom: 20px;
    }

    .directivo {
        border-bottom: 5px solid rgba(0, 0, 0, .1);
        padding: 20px 0;
    }

    .directivo img {
        max-width: 200px;
    }
</style>
<div class="container-fluid">
    <div class="row directivo">
        <div class="col-sm-12"><img alt="Nicolás  Estupiñán" class="img-circle img-center" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/08-04-2020/nicolas-estupinan_0.jpg" style="max-width:500px !important;">
            <h3 class="nombre-perfil text-center">Nicolás Estupiñán</h3>
            <h4 class="text-center cargo-perfil">Secretario de Movilidad</h4>
            <p>Nicolás Estupiñán Alvarado, Secretario de Movilidad de Bogotá, es Ingeniero Civil de la Universidad de Los Andes. Cuenta con un Magíster en Planificación Urbana y Transporte de la Universidad de Carolina del Norte en Chapel Hill.</p>
            <p>En su trayectoria profesional se ha desempeñado como consultor en Transporte del Banco Mundial, asesor de transporte en el Departamento Nacional de Planeación, Viceministro de Transporte, y durante los últimos cinco años laboró para el Banco de Desarrollo de América Latina como Coordinador de Transporte Urbano y Director de Conocimiento Sectorial.</p>
            <p>Nicolás, fue parte del Comité de ‘Transporte en países en vía de desarrollo’ del Transport Research Board en Estados Unidos, y presidió el Comité de ‘Transporte público e innovación’ del mismo órgano.</p>
            <p>“La movilidad debe ser un instrumento que permita construir una ciudad más igualitaria, más segura y más limpia. Vamos a trabajar incansablemente para garantizar que todas las acciones que tomamos incluyan esta visión, integrando nuestra ciudad-región, y priorizando los modos más sostenibles”, señaló durante su posesión como Secretario de Movilidad de Bogotá.</p>
        </div>
    </div><!-- ***************************************************************************************-->
    <!-- ************************************ SUBSECRETARIOS ***********************************-->
    <!-- ***************************************************************************************-->
    <div class="row directivo">
        <div class="col-sm-3 foto"><img alt="Jonny Leonardo Vásquez Escobar" class="img-circle img-center" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-05-2020/jonny-leonardo-vasquez.jpg"></div>
        <div class="col-sm-9">
            <h3 class="nombre-perfil text-center">Jonny Leonardo Vásquez Escobar</h3>
            <h4 class="text-center cargo-perfil">Subsecretario de Gestión de la Movilidad</h4>
            <p>Ingeniero Civil de la Universidad Nacional de Colombia y Magíster en Ingeniería Civil con énfasis en Transporte de la Universidad de los Andes. Asesor en el desarrollo de sistemas de movilidad sustentables y entornos de movilidad apropiados para cada uno de los actores del sistema; y de la inclusión de tecnología en el desarrollo de la nueva movilidad. Director General de proyectos y su estructuración técnica, legal y financiera bajo la modalidad de Asociación Público Privada y concesiones.</p>
            <p>Ha sido asesor y co-creador de aplicaciones móviles para tránsito y transporte y participado en estructuración de nuevos negocios alrededor de la movilidad. Su experiencia profesional ha sido desarrollada durante más de 12 años en el sector privado como Consultor y Director de Proyectos de transporte Público y Movilidad en Latinoamérica.</p>
        </div>
    </div>
    <div class="row directivo">
        <div class="col-sm-3 foto"><img alt="Juan Esteban Martínez Ruíz" class="img-circle img-center" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-02-2021/juan-esteban-martinez.jpg"></div>
        <div class="col-sm-9">
            <h3 class="nombre-perfil text-center">Juan Esteban Martínez Ruíz</h3>
            <h4 class="text-center cargo-perfil">Subsecretario de Política de Movilidad</h4>
            <p>Es Ingeniero Civil de la Universidad EAFIT; tiene una especialización en Vías y Transporte de la Universidad de Medellín y otra en Economía de la Universidad de los Andes. Complementa sus estudios una Maestría en Ingeniería de la Universidad de EAFIT, donde también es profesor en Sistemas de Transporte desde hace 10 años.</p>
            <p>Lleva más de 16 años trabajando al servicio del sector público en las dos ciudades más importantes del país: Bogotá y Medellín. En esta última fue Secretario de Movilidad entre los años 2016 y 2017, pero antes de asumir esa responsabilidad se desempeñó durante seis años como Ingeniero de planeación en el Metro de Medellín y luego pasó a ser Subdirector de Movilidad del Área Metropolitana, que comprende los 10 municipios del Valle de Aburrá.</p>
            <p>En TransMilenio coordinó el proceso de adquisición de la flota de 500 buses eléctricos. Hace dos años llegó a Bogotá como consultor del Banco Mundial y del Banco Interamericano de Desarrollo (BID) para apoyar los estudios de expansión de la primera línea del Metro, que partirá desde la calle 72 e irá hasta la localidad de Suba.</p>
            <p>Toda su experiencia laboral la ha adquirido en el sector del transporte y de la movilidad, he mantenido un interés genuino por todos los sistemas de transporte, llámense, metro, buses, carga, bicicletas o peatones”.</p>
        </div>
    </div>
    <div class="row directivo">
        <div class="col-sm-3 foto"><img alt="Íngrid Carolina Silva" class="img-circle img-center" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/23-09-2020/ingrid-carolina-silva.jpg"></div>
        <div class="col-sm-9">
            <h3 class="nombre-perfil text-center">Íngrid Carolina Silva</h3>
            <h4 class="text-center cargo-perfil">Subsecretaria de Gestión Jurídica</h4>
            <p>Es abogada de la Universidad Nacional de Colombia, tiene una especialización en Instituciones Jurídico Procesales de la misma universidad, y otra en Derecho Laboral de la Universidad Javeriana.</p>
            <p>Cuenta con 20 años de experiencia laboral en entidades estatales y viene de desempeñarse como jefe de la Oficina Jurídica del Instituto Distrital de la Participación y Acción Comunal (IDPAC).</p>
            <p>Fue jefe de la Oficina Jurídica del Ministerio de Educación Nacional y de la Empresa de Licores de Cundinamarca. Igualmente trabajó algunos años como Secretaria General del SENA.</p>
        </div>
    </div>
    <div class="row directivo">
        <div class="col-sm-3 foto"><img alt="Alejandra Gámez" class="img-circle img-center" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-06-2020/alejandra-gamez.jpg"></div>
        <div class="col-sm-9">
            <h3 class="nombre-perfil text-center">Alejandra Moreno Gámez</h3>
            <h4 class="text-center cargo-perfil">Subsecretaria de Servicios a la Ciudadanía</h4>
            <p>Es Comunicadora Social y Periodista, especializada en Opinión Publica y Mercado Político de la Pontificia Universidad Javeriana, con más de 20 años de experiencia en el sector público y en el mejoramiento de los servicios de atención al ciudadano. Ha sido servidora pública en diferentes entidades como Asesora de la Dirección General del Instituto Distrital de la Participación y la Acción Comunal, de la Unidad Administrativa Especial Migración Colombia, liderando la política de servicio al ciudadano en los servicios migratorios; en el Departamento Administrativo de Seguridad DAS se desempeñó como Coordinadora Nacional de Servicio al Ciudadano, en la Superintendencia de Vigilancia y Seguridad Privada como Asesora del Despacho y Jefe de Comunicaciones y en la Presidencia de la República, en la Secretaría de Prensa y Comunicación.</p>
            <p>Uno de los propósitos más importante al frente de esta Subsecretaría es la virtualización de los servicios ofrecidos a la ciudadanía para que su relacionamiento con la entidad sea de manera rápida, transparente y sencilla.</p>
        </div>
    </div>
    <div class="row directivo">
        <div class="col-sm-3 foto"><img alt="Ligia Rodríguez Hernández" class="img-circle img-center" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-04-2020/ligia-rodriguez-hernandez.jpg"></div>
        <div class="col-sm-9">
            <h3 class="nombre-perfil text-center">Ligia Rodríguez Hernández</h3>
            <h4 class="text-center cargo-perfil">Subsecretaria de Gestión Corporativa</h4>
            <p>Abogada, especializada en Derecho Administrativo de la Universidad del Rosario, con experiencia de 25 años en temas jurídicos, administrativos y financieros en entidades públicas y privadas.</p>
            <p>Fue Subdirectora General de Gestión Corporativa en el IDU, donde lideró proyectos como la certificación de subsistemas de Gestión Seguridad y Salud en el Trabajo, Seguridad de la Información, Empresa Familiarmente Responsable y Continuidad del Negocio.</p>
            <p>Fue secretaria general del Ministerio de Comercio y secretaria general de la Superintendencias de Sociedades y de Industria y Comercio.</p>
        </div>
    </div><!-- ***************************************************************************************-->
    <!-- *********************************** JEFES DE OFICINA **********************************-->
    <!-- ***************************************************************************************-->
    <div class="row directivo">
        <div class="col-sm-3 foto"><img alt="Julieth Rojas Betancour" class="img-circle img-center" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/06-04-2020/julieth-rojas-betancour.jpg"></div>
        <div class="col-sm-9">
            <h3 class="nombre-perfil text-center">Julieth Rojas Betancour</h3>
            <h4 class="text-center cargo-perfil">Jefe Oficina Asesora de Planeación</h4>
            <p>Administradora de empresas, especialista en Gestión Pública, magíster en Ingeniería Industrial, auditora líder en Sistemas de Gestión Integrados ISO 9001, ISO 14001 y OSHAS 18001, certificados por RABQSA. Con más de 10 años de experiencia profesional en la Secretaría Distrital de Movilidad, en transporte público, concesiones, estudios sectoriales y planeación institucional y estratégica.</p>
        </div>
    </div>
    <div class="row directivo">
        <div class="col-sm-3 foto"><img alt="Diego Nairo Useche" class="img-circle img-center" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-04-2020/diego-nairo-useche.jpg"></div>
        <div class="col-sm-9">
            <h3 class="nombre-perfil text-center">Diego Nairo Useche</h3>
            <h4 class="text-center cargo-perfil">Jefe Oficina de Control Interno</h4>
            <p>Es administrador público de la Escuela Superior de Administración Pública - ESAP, especialista en administración de riesgos informáticos de la Universidad Externado de Colombia y Magister en Gestión de Organizaciones de la Universidad Central; con 14 años de experiencia en sector público en temas relacionados con planeación, control interno y gestión social.</p>
            <p>Se ha desempeñado en cargos de responsabilidad en el sector privado y público, en este último participó activamente como miembro de la comisión de personal, comité de ética y del comité de salud ocupacional de la Corporación Autónoma Regional de Cundinamarca – CAR.</p>
        </div>
    </div>
    <div class="row directivo">
        <div class="col-sm-3 foto"><img alt="Adriana Ruth Iza Certuche" class="img-circle img-center" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/03-07-2020/adriana-iza.jpg"></div>
        <div class="col-sm-9">
            <h3 class="nombre-perfil text-center">Adriana Ruth Iza Certuche</h3>
            <h4 class="text-center cargo-perfil">Jefe Oficina de Gestión Social</h4>
            <p>Es administradora de empresas, tiene un máster en Estudios Políticos de la Universidad Javeriana y una especialización en Evaluación Social de Proyectos de la Universidad de los Andes. Por seis años fue Directora de Estudios Sectoriales de la Secretaría de Movilidad, y ahora es la jefe de Gestión Social. Además fue coordinadora de procesos de emprendimiento y líder del proyecto Colegios Amigos del Turismo, en el Instituto Distrital de Turismo. También tiene experiencia en el sector privado donde fue gerente de Cluster de confecciones alrededor de cuatro años.</p>
        </div>
    </div>
    <div class="row directivo">
        <div class="col-sm-3 foto"><img alt="Guetty Caycedo Caycedo" class="img-circle img-center" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-10-2020/guetty-caycedo.jpg"></div>
        <div class="col-sm-9">
            <h3 class="nombre-perfil text-center">Guetty Caycedo Caycedo</h3>
            <h4 class="text-center cargo-perfil">Jefe de Oficina de Control Disciplinario</h4>
            <p>Profesional con amplia trayectoria en el sector público, particularmente en los campos del derecho administrativo, constitucional y disciplinario.</p>
            <p>Es abogada, egresada de la Universidad Colegio Mayor de Cundinamarca, y especialista en Derecho Administrativo y Constitucional de la Universidad Católica de Colombia.</p>
            <p>Trabajó en el Ministerio de Tecnologías de la Información y las Comunicaciones (Mintic), como asesora del despacho, con funciones de coordinación del grupo de talento humano y del grupo de control disciplinario.</p>
            <p>También tiene experiencia laboral en las Superintendencias de Sociedades y de Industria y Comercio, entidades que en las que fue secretaria administrativa del grupo de control disciplinario, además coordinadora del grupo de notificaciones y de atención al ciudadano, por espacio de 13 años.</p>
        </div>
    </div>
    <div class="row directivo">
        <div class="col-sm-3 foto"><img alt="Nathaly Torregroza Vargas" class="img-circle img-center" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/10-02-2021/nathaly-torregroza.jpg"></div>
        <div class="col-sm-9">
            <h3 class="nombre-perfil text-center">Nathaly Torregroza Vargas</h3>
            <h4 class="text-center cargo-perfil">Jefe Oficina de Seguridad Vial</h4>
            <p>Es Ingeniera Civil de la Universidad del Norte, con Maestría en Ingeniería en Transporte en la Universidad de los Andes. Es líder en el desarrollo y aplicación de iniciativas relacionadas con movilidad sostenible, seguridad vial y operacional.</p>
            <p>Ha trabajado en la GIZ-Colombia (Agencia Alemana de Cooperación), como asesora en el proyecto TRANSfer III que busca promover la movilidad eléctrica en sistemas de transporte público masivo. En TransMilenio estuvo como Directora Técnica de Seguridad, donde tenía a su cargo la implementación de estrategias y programas de seguridad vial, operacional y física en el Sistema.</p>
            <p>También prestó sus servicios en la Agencia Nacional de Seguridad Vial como asesora en la coordinación intersectorial para promover la seguridad vial, infraestructura vial, comportamiento humano, y en proyectos estratégicos como gestión de la velocidad y licencias de conducción.</p>
            <p>Su experiencia en la academia se remite al Grupo Sur (Sostenibilidad Urbana Regional) de la Universidad de los Andes, donde se dedicó al desarrollo de proyectos de investigación de seguridad vial, caracterización de tipologías de estacionamiento en vía, e identificación de riesgos de siniestralidad, diagnóstico de seguridad vial en las carreteras de Colombia IRAP, entre otros. Cuenta con publicaciones en el ámbito nacional e internacional.</p>
        </div>
    </div>
    <div class="row directivo">
        <div class="col-sm-3 foto"><img alt="Andrés Contento Muñoz" class="img-circle img-center" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-04-2020/andres-contento.jpg"></div>
        <div class="col-sm-9">
            <h3 class="nombre-perfil text-center">Andrés Contento Muñoz</h3>
            <h4 class="text-center cargo-perfil">Jefe Oficina Asesora de Comunicaciones y Cultura para la Movilidad</h4>
            <p>Es comunicador social y periodista con más de 13 años de experiencia en medios de comunicación y en el desarrollo de proyectos de comunicación estratégica de alcance nacional.</p>
            <p>Durante 8 años trabajó en el periódico El Tiempo como editor y redactor de secciones como Vida de hoy, Nación y Bogotá. Durante 3 años se desempeñó como periodista de CityTv cubriendo principalmente la sección de Movilidad.</p>
            <p>En el sector público trabajó como asesor de comunicaciones para el Ministerio del Interior, y en los últimos años como coordinador de los equipos de comunicación interna y externa de iNNpulsa Colombia (unidad del Gobierno Nacional que promueve el emprendimiento y la innovación) y Bancóldex, banco de desarrollo para el crecimiento empresarial del país.</p>
        </div>
    </div><!-- ***************************************************************************************-->
    <!-- *************************************  DIRECTORES  ************************************-->
    <!-- ***************************************************************************************-->
    <div class="row directivo">
        <div class="col-sm-3 foto"><img alt="Claudia Montoya Campos" class="img-circle img-center" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/06-04-2020/claudia-montoya-campos.jpg"></div>
        <div class="col-sm-9">
            <h3 class="nombre-perfil text-center">Claudia Montoya Campos</h3>
            <h4 class="text-center cargo-perfil">Directora de Normatividad y Conceptos</h4>
            <p>Es abogada de la Universidad Santo Tomas de Aquino, con Especialización en Derecho Administrativo de la Universidad del Rosario. Su experiencia profesional se ha centrado, casi siempre, en la preparación y revisión de normas y conceptos tanto en la Subdirección de Transporte como en la Oficina Jurídica del Ministerio. Tiene 26 años de experiencia al servicio público, en el Ministerio de Transporte.</p>
        </div>
    </div>
    <div class="row directivo">
        <div class="col-sm-3 foto"><img alt="Marcela Neira Medina" class="img-circle img-center" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-05-2020/marcela-neira-medina.jpg"></div>
        <div class="col-sm-9">
            <h3 class="nombre-perfil text-center">Marcela Neira Medina</h3>
            <h4 class="text-center cargo-perfil">Directora de Ingeniería de Tránsito</h4>
            <p>Es ingeniera civil y Magíster en Ingeniería Civil con énfasis en Transporte, de la Universidad de Los Andes. Con experiencia en planeación y gerencia de proyectos de tránsito y transporte, seguridad vial, modos no motorizados y sistemas de transporte sostenible.</p>
            <p>He liderado la estructuración y evaluación técnica y económica de procesos de contratación estatal de gran impacto para el sistema de movilidad de Bogotá. Ha sido consultora en proyectos de sistemas de transporte urbano-regional en Bogotá y Medellín. Adicionalmente, tiene experiencia en la academia en el Grupo de Estudios en Sostenibilidad Urbana y Regional de la Universidad de los Andes y en el Centro de Excelencia BRT de la Pontificia Universidad Católica de Chile.</p>
        </div>
    </div>
    <div class="row directivo">
        <div class="col-sm-3 foto"><img alt="Rafael Alberto González Rodríguez" class="img-circle img-center" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-05-2020/rafael-alberto-gonzalez.jpg"></div>
        <div class="col-sm-9">
            <h3 class="nombre-perfil text-center">Rafael Alberto González Rodríguez</h3>
            <h4 class="text-center cargo-perfil">Director de Gestión de Tránsito y Control de Tránsito y Transporte</h4>
            <p>Bogotano, Ingeniero Civil de la Universidad Nacional de Colombia y Magíster en Ingeniería Civil de la Pontificia Universidad Javeriana.</p>
            <p>Con experiencia profesional de 14 años, de los cuales 9 años han sido en el sector privado en la dirección, planeación y operación de sistemas de transporte, así como líder en la realización de estudios de tránsito y seguridad vial.<br>En el sector público ha trabajado en TransMilenio S.A., en la Secretaría de Movilidad de Soacha como Director de Tránsito y Transporte, así como Subdirector de Control de Tránsito y Transporte de esta Entidad.</p>
        </div>
    </div>
    <div class="row directivo">
        <div class="col-sm-3 foto"><img alt="Giovanny Andrés García Rodríguez" class="img-circle img-center" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/03-07-2020/giovanny-garcia.jpg"></div>
        <div class="col-sm-9">
            <h3 class="nombre-perfil text-center">Giovanny Andrés García Rodríguez</h3>
            <h4 class="text-center cargo-perfil">Director de Gestión de Cobro</h4>
            <p>Abogado de la Universidad Externado de Colombia, y especialista en Derecho Procesal Penal de la misma Universidad.</p>
            <p>Cuenta con 17 años de experiencia profesional en los temas de litigio. Ha trabajado en la Rama Judicial y en diferentes entes estatales como el Instituto Nacional de Vigilancia de Medicamentos y Alimentos -INVIMA-, el Instituto Colombiano para el Fomento de la Educación Superior -ICFES-, la Autoridad Nacional de Televisión -ANTV-, y la Secretaría Distrital de Movilidad, así como el litigio para empresas privadas en temas de procesos administrativos sancionatorios.</p>
        </div>
    </div>
    <div class="row directivo">
        <div class="col-sm-3 foto"><img alt="Lina Marcela Quiñones Sánchez" class="img-circle img-center" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-05-2020/lina-quinones.jpg"></div>
        <div class="col-sm-9">
            <h3 class="nombre-perfil text-center">Lina Marcela Quiñones Sánchez</h3>
            <h4 class="text-center cargo-perfil">Directora de Inteligencia para la Movilidad</h4>
            <p>Bogotana. Ingeniera Ambiental y Economista de la Universidad de los Andes, con un título de Maestría en Urbanización y Desarrollo de London School of Economics. Se ha desempeñado como consultora e investigadora en temas de movilidad urbana sostenible en Colombia y Reino Unido, incluyendo la formulación de política pública con base en datos, los impactos ambientales de las políticas de transporte, las experiencias de las mujeres en los espacios públicos y la promoción del uso de la bicicleta y la movilidad peatonal.</p>
        </div>
    </div>
    <div class="row directivo">
        <div class="col-sm-3 foto"><img alt="Paula Tatiana Arenas González" class="img-circle img-center" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-04-2020/paula-tatiana-arenas.jpg"></div>
        <div class="col-sm-9">
            <h3 class="nombre-perfil text-center">Paula Tatiana Arenas González</h3>
            <h4 class="text-center cargo-perfil">Directora Administrativa y Financiera</h4>
            <p>Es abogada de la Universidad Católica y Profesional en Relaciones Internacionales de la Universidad Jorge Tadeo Lozano, donde también cursó la especialización en Gestión Pública. Además, es especialista en Derecho Administrativo de la Universidad Santo Tomás, y tiene una maestría en Derecho en la Universidad Sergio Arboleda.</p>
            <p>Su más reciente cargo fue como Subdirectora de Recursos Humanos del IDU, donde estuvo por espacio de tres años. Durante siete años estuvo en la Comisión Nacional del Servicio Civil, donde fue Gerente de Provisión del Empleo, y también se desempeñó como asesora de despacho. A su experiencia laboral se le suma empleos en la Fiscalía General de la Nación, y en una caja de compensación familiar.</p>
        </div>
    </div>
    <div class="row directivo">
        <div class="col-sm-3 foto"><img alt="Alejandra Rojas Posada" class="img-circle img-center" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/06-04-2020/alejandra-rojas-posada.jpg"></div>
        <div class="col-sm-9">
            <h3 class="nombre-perfil text-center">Alejandra Rojas Posada</h3>
            <h4 class="text-center cargo-perfil">Directora de Atención al Ciudadano</h4>
            <p>Abogada, especialista en Derecho Penal de la Universidad del Rosario. Se ha desempeñado tanto en el sector público, como en el privado, y su experiencia profesional ha sido con mayor énfasis en derecho administrativo.</p>
            <p>Trabajó en la Superintendencia de Puertos y Transporte y en el bufete del abogado penalista Jaime Granados, además en la Unidad de Restitución de Tierras, y en el Ministerio de Agricultura.</p>
        </div>
    </div>
    <div class="row directivo">
        <div class="col-sm-3 foto"><img alt="Maria Isabel Hernández Pabón" class="img-circle img-center" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/28-09-2020/maria-isabel-hernandez.png"></div>
        <div class="col-sm-9">
            <h3 class="nombre-perfil text-center">Maria Isabel Hernández Pabón</h3>
            <h4 class="text-center cargo-perfil">Directora de Representación Judicial</h4>
            <p>Abogada de la Universidad del Cauca, especialista en derecho público de la Universidad Externado y especialista en derecho contractual de la Universidad del Rosario. Tiene amplia experiencia en manejo de los instrumentos legales para la resolución de conflictos, procesos de gestión de calidad, defensa de entidades públicas en la jurisdicción laboral, administrativa y constitucional en entidades como el Ministerio de Educación Nacional y en entidades del sector solidario de carácter nacional.</p>
        </div>
    </div><!-- ***************************************************************************************-->
    <!-- ***********************************  SUBDIRECTORES  ***********************************-->
    <!-- ***************************************************************************************-->
    <div class="row directivo">
        <div class="col-sm-3 foto"><img alt="Mario Gabriel Carbonell Gutiérrez" class="img-circle img-center" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-05-2020/mario-gabriel-carbonell.jpg"></div>
        <div class="col-sm-9">
            <h3 class="nombre-perfil text-center">Mario Gabriel Carbonell Gutiérrez</h3>
            <h4 class="text-center cargo-perfil">Subdirector de Señalización</h4>
            <p>Es ingeniero civil De la Universidad Militar Nueva Granada. Especialista en Diseño de Vías Urbanas Tránsito y Transporte de la Universidad Distrital Francisco José de Caldas, con más de 20 años de carrera profesional.</p>
            <p>Tiene amplia experiencia en movilidad, tránsito y transporte en el sector público y privado. Ha sido asesor en temas de tránsito y transporte de la Subdirección General de Infraestructura del IDU. Se desempeñó como profesional especializado de la Secretaría Distrital de Movilidad y Secretaria de Tránsito y Transporte de Bogotá. Participó en la revisión y presentación ante la STT del “Manual de Auditorías Viales”, estrategias para contribuir a la disminución de los índices de accidentalidad vial en la ciudad de Bogotá. “CAL &amp; MAYOR – STT – BANCO MUNDIAL.</p>
        </div>
    </div>
    <div class="row directivo">
        <div class="col-sm-3 foto"><img alt="Paola Corona Miranda" class="img-circle img-center" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-04-2020/paola-corona-miranda.jpg"></div>
        <div class="col-sm-9">
            <h3 class="nombre-perfil text-center">Paola Corona Miranda</h3>
            <h4 class="text-center cargo-perfil">Subdirectora Administrativa</h4>
            <p>Es administradora de empresas y con especialización en Finanzas y Administración Pública de la Universidad Militar Nueva Granada. Es líder de la política de derechos humanos y empresa del sector de comercio, industria y turismo. Líder en temas de responsabilidad social, derechos humanos y manager en la gestión de la conciliación de EFR (Empresa Familiarmente Responsable), de la fundación MAS Familia de España.</p>
            <p>También está certificada como Auditoria de Calidad Seguridad y Salud en el Trabajo y el Medio Ambiente y tiene cursos en gestión de proyectos.</p>
            <p>Por espacio de 10 años estuvo al servicio de la Superintendencia de Industria y Comercio, donde se desempeñó en la Secretaría General, apoyando todos los procesos de talento humano, gestión documental, financiera y recursos físicos, entre otros.</p>
        </div>
    </div>
    <div class="row directivo">
        <div class="col-sm-3 foto"><img alt="Vladimiro Estrada Moncayo" class="img-circle img-center" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-05-2020/vladimiro-estrada.jpg"></div>
        <div class="col-sm-9">
            <h3 class="nombre-perfil text-center">Vladimiro Estrada Moncayo</h3>
            <h4 class="text-center cargo-perfil">Subdirector Financiero</h4>
            <p>Es administrador público de la Escuela Superior de Administración Pública -ESAP-, con formación y estudios especializados en alto gobierno del sector público, planeación estratégica, preparación, evaluación, formulación y seguimiento de proyectos. Experiencia y conocimiento en sistemas de gestión de pagos, indicadores de gestión, finanzas distritales y presupuesto, gestión corporativa, ordenación del gasto, contratación, gestión financiera, análisis y gestión de riesgos.</p>
            <p>Su experiencia profesional es de treinta años, en entidades como FOSYGA en el Ministerio de Salud, Hospital Simón Bolívar, Secretaría Distrital de Salud, Secretaría Distrital de Hacienda, Artesanías de Colombia e Instituto de Desarrollo Urbano entre otros.</p>
        </div>
    </div>
    <div class="row directivo">
        <div class="col-sm-3 foto"><img alt="Claudia Mercado Velandia" class="img-circle img-center" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/30-06-2020/claudia-mercado.jpg"></div>
        <div class="col-sm-9">
            <h3 class="nombre-perfil text-center">Claudia Mercado Velandia</h3>
            <h4 class="text-center cargo-perfil">Subdirectora de Transporte Público</h4>
            <p>Es Ingeniera Civil y Magíster en Ingeniería de Transporte de la Universidad Nacional de Colombia, con más de 10 años de experiencia profesional en planeación y gerencia de proyectos de movilidad sostenible.</p>
            <p>Cuenta con experiencia en cargos directivos en Entidades como Transmilenio S.A. y la Secretaría Distrital de Movilidad de Bogotá donde ha liderado el diseño y la implementación de acciones de optimización y mejoras al Sistema Troncal TransMilenio, en el SITP y en el transporte público en sus diferentes modalidades.</p>
        </div>
    </div>
    <div class="row directivo">
        <div class="col-sm-3 foto"><img alt="Diana Lorena Urrego García" class="img-circle img-center" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-05-2020/diana-urrego.jpg"></div>
        <div class="col-sm-9">
            <h3 class="nombre-perfil text-center">Diana Lorena Urrego García</h3>
            <h4 class="text-center cargo-perfil">Subdirectora de Control de Tránsito y Transporte</h4>
            <p>Profesional en ingeniería civil de la Universidad Nacional de Colombia, Especialista en Tránsito y Transporte de la Universidad Pedagógica y Tecnológica de Colombia, con experiencia en el sector público y privado en la planeación y operación de sistemas de transporte, estructuración e implementación de estrategias de gestión del tránsito encaminadas a mejorar la movilidad, así como incentivar cambios positivos en el comportamiento de los usuarios de la vía. Se ha desempeñado como profesional en un concesionario del SITP, la Secretaría de Movilidad de Soacha y la Secretaría Distrital de Movilidad.</p>
        </div>
    </div>
    <div class="row directivo">
        <div class="col-sm-3 foto"><img alt="Carol Angie Pinzón Ruiz" class="img-circle img-center" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-05-2020/carol-pinzon.jpg"></div>
        <div class="col-sm-9">
            <h3 class="nombre-perfil text-center">Carol Angie Pinzón Ruiz</h3>
            <h4 class="text-center cargo-perfil">Subdirectora de Control e Investigaciones al Transporte Público</h4>
            <p>Abogada, egresada de la Universidad Católica de Colombia, especialista en Derecho Comercial y en Derecho de la Empresa de la Universidad del Rosario, Conciliadora en Derecho de la Universidad Gran Colombia.</p>
            <p>Con experiencia profesional de 19 años, se desempeñó en el sector privado, 9 años como asesora en asuntos de seguros, tránsito y transporte y en el sector público, se ha desempeñado por más de 10 años en la Secretaría Distrital de Movilidad, como profesional en la Subdirección de Contravenciones y como Subdirectora en la Subdirección de Jurisdicción Coactiva hoy Dirección de Gestión de Cobro.</p>
        </div>
    </div>
    <div class="row directivo">
        <div class="col-sm-3 foto"><img alt="Martha Cecilia Bayona Gómez" class="img-circle img-center" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/03-07-2020/martha-bayona.jpg"></div>
        <div class="col-sm-9">
            <h3 class="nombre-perfil text-center">Martha Cecilia Bayona Gómez</h3>
            <h4 class="text-center cargo-perfil">Subdirectora de Planes de Manejo de Tránsito</h4>
            <p>Es ingeniera civil de la Universidad Gran Colombia, Especialista en Diseño de Vías Urbanas, Tránsito y Transporte de la Universidad Francisco José de Caldas Se ha desempeñó como profesional universitaria en la Secretaría Distrital de Movilidad y en el Instituto de Desarrollo Urbano por más de 12 años. También ha sido consultora y asesora en el sector privado en temas relacionados con señalización, estudios de tránsito y planes de manejo de tránsito.</p>
            <p>Desde hace ocho años está vinculada a la Secretaría Distrital de Movilidad como líder del equipo de planes de manejo de tránsito (PMT). Ha participado en la construcción de grandes obras de infraestructura vial en Bogotá con diseños de tránsito.</p>
        </div>
    </div>
    
    <div class="row directivo">
        <div class="col-sm-3 foto"><img alt="Johana Catalina Latorre Alarcón" class="img-circle img-center" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/23-09-2020/johana-catalina-latorre.jpg"></div>
        <div class="col-sm-9">
            <h3 class="nombre-perfil text-center">Johana Catalina Latorre Alarcón</h3>
            <h4 class="text-center cargo-perfil">Subdirectora de Contravenciones</h4>
            <p>Es abogada egresada de la Universidad Pedagógica y Tecnológica de Colombia - UPTC, especialista en Derecho Urbano de la Universidad del Rosario, y Magíster en Derecho de la Universidad Sergio Arboleda, con más de seis años de experiencia en el sector público, en la sustanciación de procesos administrativos, sancionatorios, de sometimiento a control y de responsabilidad fiscal.</p>
            <p>Su mayor desafío en los actuales momentos de emergencia sanitaria, es coordinar su equipo para prestar al ciudadano un servicio eficiente y oportuno dentro del regreso a la “Nueva Normalidad.”</p>
        </div>
    </div>

    <div class="row directivo">
        <div class="col-sm-3 foto"><img width="220px" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/12-08-2021/oscar_mauricio_velasquez_bobadilla.jpg" class="img-circle img-center" alt="Óscar Mauricio Velásquez Bobadilla - Subdirector de la Bicicleta y el Peatón" alt="Óscar Mauricio Velásquez Bobadilla - Subdirector de la Bicicleta y el Peatón"></div>
        <div class="col-sm-9">
            <h3 class="nombre-perfil text-center">Óscar Mauricio Velásquez Bobadilla</h3>
            <h4 class="text-center cargo-perfil">Subdirector de la Bicicleta y el Peatón</h4>
            <p>Es Ingeniero Civil, Especialista en Ingeniería de Pavimentos, y con experiencia de más de 15 años en el sector público en el campo de la construcción, conservación y gestión de infraestructura urbana y rural del transporte.</p>
            <p>En el Instituto de Desarrollo Urbano – IDU-, entidad a la que ingresó en el año 2005, tuvo a cargo la planeación, estructuración, ejecución y seguimiento de procesos y proyectos estratégicos para la gestión y desarrollo de la infraestructura de la ciudad.</p>
            <p>También es docente desde hace ocho años de la Especialización en Ingeniería de Pavimentos, de la Universidad Católica, su alma Mater.</p>
            <p>Ha sido coautor de muchas publicaciones de carácter nacional e internacional en temas como construcción para proyectos de infraestructura vial y de espacio público.</p>
        </div>
    </div>

    <!--
      <div class="row directivo">
         <div class="col-sm-3 foto">
            <img src="iiiiii" class="img-circle img-center" alt="nnnnn">
         </div>
         <div class="col-sm-9">
            <h3 class="nombre-perfil text-center">nnnnn</h3>
            <h4 class="text-center cargo-perfil">cccccc</h4>
            <p>dddddd</p>
         </div>
      </div>
      -->
</div>