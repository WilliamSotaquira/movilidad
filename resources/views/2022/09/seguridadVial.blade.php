@extends('welcome')
@section('contenido')
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fuente Montserrat -----  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<link rel='preconnect' href='https://fonts.googleapis.com'>
<link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
<link href='https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap' rel='stylesheet'>
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin Fuente Montserrat -  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<!-- Set Wrapper -->
<div class='container-fluid seguridadVial'>
    <div class="box-modals">

    <!-- Modal Susan Galeano Vásquez -->
    <div class='modal fade' id='modalSusanGaleano' tabindex='-1' role='dialog' aria-labelledby='exampleModalLongTitle' aria-hidden='true'>
        <div class='modal-dialog' role='document'>
            <div class='modal-content'>
                <div class='modal-body'>
                    <div class='foto'>
                        <div class='imagen'>
                            <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-10-2022/2._susan_galeano_vasquez.jpeg' alt='Foto: Susan Galeano Vásquez' title='Foto: Susan Galeano Vásquez'>
                        </div>
                    </div>
                    <div class='texto'>
                        <hr>
                        <h3>Susan Galeano Vásquez</h3>
                        <h4> Jefe de Gestión Regional - Red PaPaz</h4>
                        <p>Mamá de Joaquín, Comunicadora Social, con más de 10 años de experiencia en el trabajo con comunidades, enfocado al acompañamiento de instituciones educativas con el objetivo de propiciar entornos protectores para niñas, niños y adolescentes.</p>
                        <hr>
                    </div>
                    <div class='sub-close'>
                        <button type='button' class='btn btn-secondary' data-dismiss='modal'>Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Andrés Contento Muñoz -->
    <div class='modal fade' id='modalAndresContento' tabindex='-1' role='dialog' aria-labelledby='exampleModalLongTitle' aria-hidden='true'>
        <div class='modal-dialog' role='document'>
            <div class='modal-content'>
                <div class='modal-body'>
                    <div class='foto'>
                        <div class='imagen'>
                            <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-10-2022/andrescontento.png' alt='Foto: Andrés Contento Muñoz' title='Foto: Andrés Contento Muñoz'>
                        </div>
                    </div>
                    <div class='texto'>
                        <hr>
                        <h3>Andrés Contento Muñoz</h3>
                        <h4>Jefe Oficina Asesora de Comunicaciones y Cultura para la Movilidad</h4>
                        <p>Es comunicador social y periodista con más de 13 años de experiencia en medios de comunicación y en el desarrollo de proyectos de comunicación estratégica de alcance nacional. <br>Durante 8 años trabajó en el periódico El Tiempo como editor y redactor de secciones como Vida de hoy, Nación y Bogotá. Durante 3 años se desempeñó como periodista de CityTv cubriendo principalmente la sección de Movilidad. <br>En el sector público trabajó como asesor de comunicaciones para el Ministerio del Interior, y en los últimos años como coordinador de los equipos de comunicación interna y externa de iNNpulsa Colombia (unidad del Gobierno Nacional que promueve el emprendimiento y la innovación) y Bancóldex, banco de desarrollo para el crecimiento empresarial del país.</p>
                        <hr>
                    </div>
                    <div class='sub-close'>
                        <button type='button' class='btn btn-secondary' data-dismiss='modal'>Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- Modal Mauricio Cerpa -->
        <div class='modal fade' id='modalMauricioCerpa' tabindex='-1' role='dialog' aria-labelledby='exampleModalLongTitle' aria-hidden='true'>
            <div class='modal-dialog' role='document'>
                <div class='modal-content'>
                    <div class='modal-body'>
                        <div class='foto'>
                            <div class='imagen'>
                                <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/03-10-2022/5._mauricio_cerpa.jpg' alt='Foto: Mauricio Cerpa' title='Foto: Mauricio Cerpa'>
                            </div>
                        </div>
                        <div class='texto'>
                            <hr>
                            <h3>Mauricio Cerpa</h3>
                            <h4>Especialista de Vigilancia - Organización Panamericana de la Salud</h4>
                            <p>El Dr. Mauricio Cerpa es un médico epidemiólogo peruano, especialista en Medicina Preventiva y Salud Publica y máster en Salud Publica.</p>
                            <p>El Dr. Cerpa ingresó a la OPS hace 13 años, trabajando en enfermedades infecciosas y emergencias en salud en Washington DC, Haiti y Colombia. Actualmente es el asesor de Emergencias en Salud en la oficina OPS en Colombia."</p>
                            <hr>
                        </div>
                        <div class='sub-close'>
                            <button type='button' class='btn btn-secondary' data-dismiss='modal'>Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Luis Fernando Ramírez Contreras  -->
        <div class='modal fade' id='modalLuisRamirez' tabindex='-1' role='dialog' aria-labelledby='exampleModalLongTitle' aria-hidden='true'>
            <div class='modal-dialog' role='document'>
                <div class='modal-content'>
                    <div class='modal-body'>
                        <div class='foto'>
                            <div class='imagen'>
                                <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/30-09-2022/5._luis_ramirez.png' alt='Foto: Luis Fernando Ramírez Contreras ' title='Foto: Luis Fernando Ramírez Contreras '>
                            </div>
                        </div>
                        <div class='texto'>
                            <hr>
                            <h3>Luis Fernando Ramírez Contreras </h3>
                            <h4>Ex-magistrado Tribunal Superior de Bogotá</h4>
                            <p>Abogado, Doctor en Derecho y Ciencias Políticas de la Universidad Nacional de Colombia. Fue magistrado de la Sala penal del Tribunal Superior de Bogotá. Es profesor de diferentes universidades y autor de libros especializados en derecho y derecho penal.</p>
                            <hr>
                        </div>
                        <div class='sub-close'>
                            <button type='button' class='btn btn-secondary' data-dismiss='modal'>Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Magnolia del Pilar Ballesteros -->
        <div class='modal fade' id='modalMagnoliaBallesteros' tabindex='-1' role='dialog' aria-labelledby='exampleModalLongTitle' aria-hidden='true'>
            <div class='modal-dialog' role='document'>
                <div class='modal-content'>
                    <div class='modal-body'>
                        <div class='foto'>
                            <div class='imagen'>
                                <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/30-09-2022/4._magnolia_ballesteros.jpeg' alt='Foto: Magnolia del Pilar Ballesteros' title='Foto: Magnolia del Pilar Ballesteros'>
                            </div>
                        </div>
                        <div class='texto'>
                            <hr>
                            <h3>Magnolia del Pilar Ballesteros</h3>
                            <h4>Directora del grupo de investigación estilo de vida y desarrollo humano – UNAL y Coordinadora del espacio de orientación psicológica - ORVI</h4>
                            <p>Psicóloga de la Universidad Surcolombiana, Magíster en Psicología con énfasis en Salud, Doctora en Salud Pública de la Universidad Nacional de Colombia. Profesora de Métodos de Investigación Cualitativa en Psicología. Directora del Grupo de Investigación Estilo de Vida y Desarrollo Humano. Experiencia en el diseño y aplicación de Proyectos, coordinación de equipos de trabajo, elaboración de estudios diagnósticos y Planes de salud mental a nivel Departamental, programas de promoción de la salud y prevención de la enfermedad a nivel nacional.</p>
                            <hr>
                        </div>
                        <div class='sub-close'>
                            <button type='button' class='btn btn-secondary' data-dismiss='modal'>Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Diego Laserna -->
        <div class='modal fade' id='modalDiegoLaserna' tabindex='-1' role='dialog' aria-labelledby='exampleModalLongTitle' aria-hidden='true'>
            <div class='modal-dialog' role='document'>
                <div class='modal-content'>
                    <div class='modal-body'>
                        <div class='foto'>
                            <div class='imagen'>
                                <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/28-09-2022/6._diego_laserna.jpg' alt='Foto: Diego Laserna' title='Foto: Diego Laserna'>
                            </div>
                        </div>
                        <div class='texto'>
                            <hr>
                            <h3>Diego Laserna</h3>
                            <h4>Concejal de Bogotá</h4>
                            <p>Estudió Ciencia Política y Economía en Columbia (EE UU) y tiene una Maestría en Planeación Urbana en MIT (EE. UU). <br>Fue gerente de la campaña de Juanita Goebertus a la Cámara, promotor de la Consulta Anticorrupción y cofundador del colectivo ciudadano Combo2600. <br>Sus nichos: planeación urbana, seguridad vial y seguridad ciudadana, movilidad, transporte público y patrimonio.</p>
                            <hr>
                        </div>
                        <div class='sub-close'>
                            <button type='button' class='btn btn-secondary' data-dismiss='modal'>Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Iván Rodrigues Durán -->
        <div class='modal fade' id='modalIvanDuran' tabindex='-1' role='dialog' aria-labelledby='exampleModalLongTitle' aria-hidden='true'>
            <div class='modal-dialog' role='document'>
                <div class='modal-content'>
                    <div class='modal-body'>
                        <div class='foto'>
                            <div class='imagen'>
                                <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/26-09-2022/5._ivan_rodriguez.jpg.crdownload.jpg' alt='Foto: Iván Rodrigues Durán' title='Foto: Iván Rodrigues Durán'>
                            </div>
                        </div>
                        <div class='texto'>
                            <hr>
                            <h3>Iván Rodrigues Durán</h3>
                            <h4>Director de Tránsito Bucaramanga</h4>
                            <p>Director general de la dirección de Tránsito de Bucaramanga, es ingeniero mecánico, especialista en gerencia de proyectos y maestro en ingeniería de vías y transporte.</p>
                            <hr>
                        </div>
                        <div class='sub-close'>
                            <button type='button' class='btn btn-secondary' data-dismiss='modal'>Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal María del Mar Solanilla -->
        <div class='modal fade' id='modalMarSolanilla' tabindex='-1' role='dialog' aria-labelledby='exampleModalLongTitle' aria-hidden='true'>
            <div class='modal-dialog' role='document'>
                <div class='modal-content'>
                    <div class='modal-body'>
                        <div class='foto'>
                            <div class='imagen'>
                                <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/26-09-2022/4._maria_del_mar_solanilla.jpeg' alt='Foto: María del Mar Solanilla' title='Foto: María del Mar Solanilla'>
                            </div>
                        </div>
                        <div class='texto'>
                            <hr>
                            <h3>María del Mar Solanilla</h3>
                            <h4>Subsecretaria de Movilidad Sostenible - Secretaría de Movilidad de Cali</h4>
                            <p>La ingeniera Civil María del Mar Solanilla Arango desde octubre del año 2020 asumió la Subsecretaría de Movilidad Sostenible y Seguridad Vial, entidad encargada de desarrollar estrategias y programas sostenibles de movilidad y seguridad vial.</p>
                            <p>Solanilla, es egresada de la Universidad Javeriana, con maestría en infraestructura y transporte del Politécnico de Turín, Italia. Se ha destacado por su trayectoria en empresas del sector público y privado de Cali.</p>
                            <hr>
                        </div>
                        <div class='sub-close'>
                            <button type='button' class='btn btn-secondary' data-dismiss='modal'>Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Victor Hugo Piedrahita -->
        <div class='modal fade' id='modalVictorPiedrahita' tabindex='-1' role='dialog' aria-labelledby='exampleModalLongTitle' aria-hidden='true'>
            <div class='modal-dialog' role='document'>
                <div class='modal-content'>
                    <div class='modal-body'>
                        <div class='foto'>
                            <div class='imagen'>
                                <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/26-09-2022/3._victor_piedrahita.jpg' alt='Foto: Victor Hugo Piedrahita' title='Foto: Victor Hugo Piedrahita'>
                            </div>
                        </div>
                        <div class='texto'>
                            <hr>
                            <h3>Victor Hugo Piedrahita</h3>
                            <h4>Secretario de movilidad Medelín</h4>
                            <p>Ingeniero Civil de la Universidad EAFIT, especialista en Alta Gerencia de la Universidad de Medellín, Magister en Administración de esta misma Institución y Magister en Procesos Urbanos y Ambientales - Urbam EAFIT.</p>
                            <p>Tiene un amplio bagaje en el sector público donde se ha desempeñado como Alcalde del municipio de Gómez Plata, Secretario de Planeación de los Municipios de Gómez Plata y Valdivia en el Departamento de Antioquia, Contralor Auxiliar de Medellín, Secretario General del Concejo de Medellín, Subdirector de Planificación integral del Área Metropolitana del Valle de Aburrá, Subgerente Técnico y Operativo de Terminales Medellín y como Subsecretario Técnico de la Secretaría de Movilidad de Medellín.</p>
                            <p>Ha Liderado procesos como el Plan Básico de Ordenamiento Territorial del muncipio de Gómez Plata, el plan de gestión Territorios Sostenibles del Área Metropolitana del Valle de Aburrá 2016-2019, el Primer Plan Estratégico Metropolitano de Ordenamiento Territorial PEMOT, el Plan Metrópoli Diamante Medellín y el Plan estratégico Terminales Medellín Futuro.</p>|
                            <hr>
                        </div>
                        <div class='sub-close'>
                            <button type='button' class='btn btn-secondary' data-dismiss='modal'>Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Nathaly Patiño -->
        <div class='modal fade' id='modalNathalyPatinho' tabindex='-1' role='dialog' aria-labelledby='exampleModalLongTitle' aria-hidden='true'>
            <div class='modal-dialog' role='document'>
                <div class='modal-content'>
                    <div class='modal-body'>
                        <div class='foto'>
                            <div class='imagen'>
                                <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-09-2022/1._nathaly_patino_gonzalez.jpg' alt='Foto: Nathaly Patiño' title='Foto: Nathaly Patiño'>
                            </div>
                        </div>
                        <div class='texto'>
                            <hr>
                            <h3>Nathaly Patiño</h3>
                            <h4>Subdirectora de Gestión en Vía - Secretaría Distrital de Movilidad de Bogotá</h4>
                            <p>Ingeniera Civil de la Universidad Nacional de Colombia, con experiencia en tránsito y transporte, especialmente temas relacionados con gestión en vía y en proyectos de consultoría. Cuenta con una especialización en Tránsito y Transporte de la Universidad Pedagógica y Tecnológica de Colombia. Fue contratista en la misma subdirección de la Secretaría de Movilidad, donde era gerente de las localidades de Santa Fe, Candelaria, Chapinero y de la Avenida Caracas. Su mayor meta es lograr que la ciudadanía reconozca a la entidad como una mano amiga en la vía, y que la misma comunidad ayude a mejorar los tiempos de atención y de respuesta a los eventos en vía, subiendo fotos o reportando a las redes sociales de movilidad.</p>
                            <hr>
                        </div>
                        <div class='sub-close'>
                            <button type='button' class='btn btn-secondary' data-dismiss='modal'>Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal María Fernanda Ramírez -->
        <div class='modal fade' id='modalMariaRamirez' tabindex='-1' role='dialog' aria-labelledby='exampleModalLongTitle' aria-hidden='true'>
            <div class='modal-dialog' role='document'>
                <div class='modal-content'>
                    <div class='modal-body'>
                        <div class='foto'>
                            <div class='imagen'>
                                <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/24-09-2022/6._maria_f._ramirez.png' alt='Foto: María Fernanda Ramírez' title='Foto: María Fernanda Ramírez'>
                            </div>
                        </div>
                        <div class='texto'>
                            <h3>María Fernanda Ramírez</h3>
                            <h4>Líder de movilidad sostenible y segura - Despacio</h4>
                            <hr>
                            <p>Responsable de Movilidad Sostenible y Segura en Despacio. Trabaja en proyectos relacionados con la seguridad vial a traves del diseño, el transporte sostenible, los modos alternativos y la micromovilidad como solución al transporte público y de carga. Profesora de prácticas del curso ""Movilidad y espacio urbano"" de la Universidad del Rosario de Colombia.</p>
                            <p>Cuenta con una maestria en Ingeniería Civil, con especialización en Ingeniería de Transporte, una maestría en Planificación Comunitaria con Concentraciones de Planificación Física y de Transporte. Especializada en alternativas sostenibles de movilidad basadas en Visión Cero, calles completas, diseño de calles inclusivas e infraestructura no motorizada.</p>
                            <hr>
                        </div>
                        <div class='sub-close'>
                            <button type='button' class='btn btn-secondary' data-dismiss='modal'>Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Oscar Julián Gómez -->
        <div class='modal fade' id='modalOscarGomez' tabindex='-1' role='dialog' aria-labelledby='exampleModalLongTitle' aria-hidden='true'>
            <div class='modal-dialog' role='document'>
                <div class='modal-content'>
                    <div class='modal-body'>
                        <div class='foto'>
                            <div class='imagen'>
                                <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/24-09-2022/1._oscar_julian_gomez.jpg' alt='Foto: Oscar Julián Gómez' title='Foto: Oscar Julián Gómez'>
                            </div>
                        </div>
                        <div class='texto'>
                            <h3>Oscar Julián Gómez</h3>
                            <h4>Subsecretario de Política de Movilidad - Secretaría Distrital de Movilidad de Bogotá</h4>
                            <hr>
                            <p>Ingeniero civil y magíster en Ingeniería de Transporte de la Universidad Nacional de Colombia, con especialización en Finanzas de la Universidad Externado de Colombia. Apasionado por la estructuración e implementación técnica y financiera de proyectos de transporte y logística, con amplia experiencia en el sector público en el análisis de la economía del transporte y mejora regulatoria. Fue director de Infraestructura y vehículos de la Agencia Nacional de Seguridad Vial (ANSV); subdirector de Movilidad y Transporte Urbano del Departamento Nacional de Planeación (DNP); asesor del Ministerio de Transporte; consultor del Banco Interamericano de Desarrollo; entre otros.</p>
                            <hr>
                        </div>
                        <div class='sub-close'>
                            <button type='button' class='btn btn-secondary' data-dismiss='modal'>Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Jesús Carlos Soto -->
        <div class='modal fade' id='modalJesusCarlos' tabindex='-1' role='dialog' aria-labelledby='exampleModalLongTitle' aria-hidden='true'>
            <div class='modal-dialog' role='document'>
                <div class='modal-content'>
                    <div class='modal-body'>
                        <div class='foto'>
                            <div class='imagen'>
                                <img class='img-responsive w-100' src='' alt='Foto: Jesús Carlos Soto' title='Foto: Jesús Carlos Soto'>
                            </div>
                        </div>
                        <div class='texto'>
                            <h3>Jesús Carlos Soto</h3>
                            <h4>Director de Movilidad y Transporte de Guadalajara</h4>
                            <hr>
                            <p>Actual Director de Movilidad y Transporte del municipio de Guadalajara y coordinador de la Mesa Metropolitana de Movilidad de Guadalajara. Se desempeñó como Director de Movilidad y Transporte del Municipio de Zapopan, México. A través de su gestión ha impulsado estrategias y proyectos de movilidad sostenible y planeación urbana, que contribuyan a la creación de ciudades más justas e incluyentes, desde una óptica de concientización y combate a la crisis climática y la justicia social. En su trayectoria, ha promovido la agenda de la movilidad sostenible y la calidad de vida en las ciudades desde distintos ámbitos, primero desde la sociedad civil organizada, en la cual participó como activista en el colectivo ciudadano Ciudad para Todos, coordinó el X Congreso Internacional Hacia Ciudades Libres de Autos en Guadalajara, y fue miembro del Observatorio Ciudadano De Movilidad y Transporte Público de Jalisco (2013-2015).</p>
                            <hr>
                        </div>
                        <div class='sub-close'>
                            <button type='button' class='btn btn-secondary' data-dismiss='modal'>Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Nathaly Torregroza Vargas -->
        <div class='modal fade' id='modalNathalyTorregroza' tabindex='-1' role='dialog' aria-labelledby='exampleModalLongTitle' aria-hidden='true'>
            <div class='modal-dialog' role='document'>
                <div class='modal-content'>
                    <div class='modal-body'>
                        <div class='foto'>
                            <div class='imagen'>
                                <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/23-09-2022/4._nathaly_torregroza_0.png' alt='Foto: Nathaly Torregroza Vargas' title='Foto: Nathaly Torregroza Vargas'>
                            </div>
                        </div>
                        <div class='texto'>
                            <h3>Nathaly Torregroza Vargas</h3>
                            <h4>Jefe de la Oficina Seguridad vial - Secretaría Distrital de Movilidad de Bogotá </h4>
                            <hr>
                            <p>Con más de 12 años de experiencia en transporte y seguridad vial, Nathaly es actualmente la Jefe de la Oficina de Seguridad Vial de la Secretaría de Movilidad de Bogotá. Se desempeñó como directora de seguridad vial en Transmilenio, y como asesora de la Agencia Nacional de Seguridad Vial. También fue asesora técnica de la GIZ, y coordinadora del Grupo de Mitigación del Ministerio de Ambiente y Desarrollo Sostenible. Es Ingeniera Civil, y tiene una maestría en Transporte de la Universidad de los Andes</p>
                            <hr>
                        </div>
                        <div class='sub-close'>
                            <button type='button' class='btn btn-secondary' data-dismiss='modal'>Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Constanza Delón -->
        <div class='modal fade' id='modalConstanzaDelon' tabindex='-1' role='dialog' aria-labelledby='exampleModalLongTitle' aria-hidden='true'>
            <div class='modal-dialog' role='document'>
                <div class='modal-content'>
                    <div class='modal-body'>
                        <div class='foto'>
                            <div class='imagen'>
                                <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/23-09-2022/3._constanza_delon.jpeg' alt='Foto: Constanza Delón' title='Foto: Constanza Delón'>
                            </div>
                        </div>
                        <div class='texto'>
                            <h3>Constanza Delón</h3>
                            <h4>Directora de Seguridad Vial y Seguimiento a la Información - Secretaría de Movilidad de la Ciudad de México</h4>
                            <hr>
                            <p>Arquitecta de la Universidad Nacional Autónoma de México y cuenta con un posgrado en Medioambiente Urbano y Sostenibilidad de la Universidad Politécnica de Cataluña. Es ciclista urbana y ha trabajado en el desarrollo de estrategias de movilidad sustentable, urbanismo táctico y diseño urbano, así como en proyectos de mejoramiento de espacio público y ciclovías. Fue responsable del área de imagen urbana y proyectos especiales en la Autoridad del Espacio Público, Subdirectora de Infraestructura Ciclista y Peatonal, coordinando la planeación e implementación de proyectos de infraestructuras verdes a escala metropolitana. Actualmente se desempeña como Directora de Seguridad Vial y Seguimiento a la Información en la Secretaría de Movilidad de la Ciudad de México.</p>
                            <hr>
                        </div>
                        <div class='sub-close'>
                            <button type='button' class='btn btn-secondary' data-dismiss='modal'>Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Andrés Vecino -->
        <div class='modal fade' id='modalAndresVecino' tabindex='-1' role='dialog' aria-labelledby='exampleModalLongTitle' aria-hidden='true'>
            <div class='modal-dialog' role='document'>
                <div class='modal-content'>
                    <div class='modal-body'>
                        <div class='foto'>
                            <div class='imagen'>
                                <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/23-09-2022/4._andres_vecino.jpg' alt='Foto: Andrés Vecino' title='Foto: Andrés Vecino'>
                            </div>
                        </div>
                        <div class='texto'>
                            <h3>Andrés Vecino</h3>
                            <h4>Científico asociado - Departamento Internacional de Salud, Universidad Johns Hopkins </h4>
                            <hr>
                            <p>Experto en sistemas de salud de la Escuela de Salud Pública Johns Hopkins Bloomberg. Cuenta con más de 15 años de experiencia en diferentes posiciones académicas y de investigación en salud global. El doctor Vecino tiene como campo de investigación los sistemas de salud, las actividades de prevención y salud publica y la traducción del conocimiento científico para resolver problemas de política pública en salud. Desde su rol en la Iniciativa Bloomberg para la Seguridad Vial Mundial (BIGRS), supervisa el trabajo del equipo de Johns Hopkins en todas las ciudades de Latinoamérica, centrándose en los estudios observacionales de los factores de riesgo de seguridad vial.</p>
                            <hr>
                        </div>
                        <div class='sub-close'>
                            <button type='button' class='btn btn-secondary' data-dismiss='modal'>Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Claudia Adriazola-Steil -->
        <div class='modal fade' id='modalClaudiaAdriazola' tabindex='-1' role='dialog' aria-labelledby='exampleModalLongTitle' aria-hidden='true'>
            <div class='modal-dialog' role='document'>
                <div class='modal-content'>
                    <div class='modal-body'>
                        <div class='foto'>
                            <div class='imagen'>
                                <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/23-09-2022/3._claudia_adriazola_profile_picture.jpeg' alt='Foto: Claudia Adriazola-Steil' title='Foto: Claudia Adriazola-Steil'>
                            </div>
                        </div>
                        <div class='texto'>
                            <h3>Claudia Adriazola-Steil</h3>
                            <h4>Directora Global de Salud y Seguridad Vial - Centro Ross de WRI para Ciudades Sustentables</h4>
                            <hr>
                            <p>Abogada de profesión con estudios en Gestión del Transporte en Alemania. Tiene Maestría Ejecutiva en Administración Pública y otra Maestría de Artes en Relaciones Internacionales de la Escuela Maxwell de Administración Pública de la Universidad de Syracuse, en Nueva York. Cuenta con más de 20 años de experiencia en el área de transporte y en 2019 fue reconocida como Mujer Destacada en este sector por GIZ. Actualmente dirige la investigación, así como la implementación de políticas y proyectos en movilidad sostenible, incluyendo la caminata, el uso de la bicicleta, transporte masivo, carga, vehículos eléctricos y diseño urbano. Claudia se ha desempeñado en el Comité Directivo a cargo de la organización de la Tercera Reunión Ministerial Mundial sobre Seguridad Vial en Suecia 2020. </p>
                            <hr>
                        </div>
                        <div class='sub-close'>
                            <button type='button' class='btn btn-secondary' data-dismiss='modal'>Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Natalia Ariza Donado -->
        <div class='modal fade' id='modalNataliaAriza' tabindex='-1' role='dialog' aria-labelledby='exampleModalLongTitle' aria-hidden='true'>
            <div class='modal-dialog' role='document'>
                <div class='modal-content'>
                    <div class='modal-body'>
                        <div class='foto'>
                            <div class='imagen'>
                                <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/23-09-2022/2._natalia_ariza.jpg' alt='Foto: Natalia Ariza Donado' title='Foto: Natalia Ariza Donado'>
                            </div>
                        </div>
                        <div class='texto'>
                            <h3>Natalia Ariza Donado</h3>
                            <h4>Especialista en Transporte- Banco Interamericano de Desarrollo</h4>
                            <hr>
                            <p>Cuenta con más de 10 años de experiencia en la estructuración, financiación y gestión de proyectos de infraestructura. Tiene una maestría en Finanzas Corporativas e Inversión de London Metropolitan University. Es profesional en Finanzas y Relaciones Internacionales de la Universidad Externado de Colombia. Ha trabajado en el sector público de Colombia, como asesora para FONADE en la estructuración de la 'Cuarta Generación de Concesiones de Carreteras' y en la financiación de proyectos de infraestructura desde la Financiera de Desarrollo Nacional. En el sector privado trabajó en Bloomberg en el análisis de la estructura de capital de empresas españolas. Actualmente lidera la cartera de proyectos de transporte del BID en Colombia en los temas de APP, transporte sostenible y seguridad vial.</p>
                            <hr>
                        </div>
                        <div class='sub-close'>
                            <button type='button' class='btn btn-secondary' data-dismiss='modal'>Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Ezequiel Dantas de A. G. Menezes -->
        <div class='modal fade' id='modalEzequielDantas' tabindex='-1' role='dialog' aria-labelledby='exampleModalLongTitle' aria-hidden='true'>
            <div class='modal-dialog' role='document'>
                <div class='modal-content'>
                    <div class='modal-body'>
                        <div class='foto'>
                            <div class='imagen'>
                                <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/23-09-2022/1_-_ezequiel_dantas.jpeg' alt='Foto: Ezequiel Dantas de A. G. Menezes' title='Foto: Ezequiel Dantas de A. G. Menezes'>
                            </div>
                        </div>
                        <div class='texto'>
                            <h3>Ezequiel Dantas de A. G. Menezes</h3>
                            <h4>Asesor Técnico Regional para Vigilancia de Resultados de Seguridad Vial - Vital Strategies</h4>
                            <hr>
                            <p>Ingeniero civil, cuenta con una maestría en Ingeniería de Transporte. Antes de unirse a Vital Strategies, se desempeñó como planificador de transporte en la ciudad de Fortaleza, colaborando con la transformación del sistema de movilidad urbana de Fortaleza hacia soluciones más sostenibles. Desde su rol como Asesor Técnico Regional para Vigilancia de Resultados de Seguridad Vial de Vital Strategies, supervisa el seguimiento de datos de todas las ciudades de Latinoamérica que pertenecen a la Iniciativa Bloomberg para la Seguridad Vial Mundial (BIGRS).</p>
                            <hr>
                        </div>
                        <div class='sub-close'>
                            <button type='button' class='btn btn-secondary' data-dismiss='modal'>Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Fernanda Torres -->
        <div class='modal fade' id='modalFernandaTorres' tabindex='-1' role='dialog' aria-labelledby='exampleModalLongTitle' aria-hidden='true'>
            <div class='modal-dialog' role='document'>
                <div class='modal-content'>
                    <div class='modal-body'>
                        <div class='foto'>
                            <div class='imagen'>
                                <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/23-09-2022/3._fernanda_torres_0.jpeg' alt='Foto: Fernanda Torres' title='Foto: Fernanda Torres'>
                            </div>
                        </div>
                        <div class='texto'>
                            <h3>Fernanda Torres</h3>
                            <h4>Fundadora - Fundación Julián Esteban</h4>
                            <hr>
                            <p>Enfermera y fundadora de la Fundación Julián Esteban. Es la mamá del niño que conmovió el mundo, una mujer con un corazón resiliente, que a través del servicio a los demás, y la fé puesta en Dios, quiere llevar el legado y sueño de su hijo, que se verá reflejado en cada niño y niña del país. "Siempre recuerda que hay que luchar por tus sueños. Mente, Corazón y Piernas": Julián Esteban Torres</p>
                            <hr>
                        </div>
                        <div class='sub-close'>
                            <button type='button' class='btn btn-secondary' data-dismiss='modal'>Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Ilse González Martínez -->
        <div class='modal fade' id='modalIlseGonzalez' tabindex='-1' role='dialog' aria-labelledby='exampleModalLongTitle' aria-hidden='true'>
            <div class='modal-dialog' role='document'>
                <div class='modal-content'>
                    <div class='modal-body'>
                        <div class='foto'>
                            <div class='imagen'>
                                <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/23-09-2022/2._ilse_gonzalez_0.jpeg' alt='Foto: Ilse González Martínez' title='Foto: Ilse González Martínez'>
                            </div>
                        </div>
                        <div class='texto'>
                            <h3>Ilse González Martínez</h3>
                            <h4>Delegación Mexicana del Observatorio de criminología vial</h4>
                            <hr>
                            <p>Licenciada en Criminología y Criminalista, Maestra en Perfilación Criminal del Colegio Libre de Estudios Universitarios (CLEU). Licenciada en derecho de la Universidad Nacional Autónoma de México (UNAM). Directora de la Delegación Mexicana del Observatorio de Criminología Vial. Miembro de diversas instituciones académicas: Red Temática de Ciencia Forense (CONACYT), México; RED Iberoamericana de Derecho Sanitario, Brasil; Criminal FACT, España) y la Red Internacional de Criminología.</p>
                            <hr>
                        </div>
                        <div class='sub-close'>
                            <button type='button' class='btn btn-secondary' data-dismiss='modal'>Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="modalAdrianaIza" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="foto">
                            <div class='imagen'>
                                <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/23-09-2022/1._adriana_ruth_iza_0.png' alt='Foto: Adriana Iza' title='Foto: Adriana Iza'>
                            </div>
                        </div>
                        <div class="texto">
                            <h3>Adriana Iza</h3>
                            <h4>Subsecretaria de Servicios a la ciudadanía - Secretaria Distrital de Movilidad de Bogotá </h4>
                            <hr>
                            <p>Administradora de empresas con un máster en Estudios Políticos de la Universidad Javeriana y una especialización en Evaluación Social de Proyectos de la Universidad de los Andes. Por seis años fue Directora de Estudios Sectoriales de la Secretaría de Movilidad, posteriormente jefe de Gestión Social. Actualmente es la Subsecretaria de Servicio a la Ciudadanía. Fue coordinadora de procesos de emprendimiento y líder del proyecto Colegios Amigos del Turismo, en el Instituto Distrital de Turismo.</p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Nicolas Correal -->
        <div class='modal fade' id='modalNicolasCorreal' tabindex='-1' role='dialog' aria-labelledby='exampleModalLongTitle' aria-hidden='true'>
            <div class='modal-dialog' role='document'>
                <div class='modal-content'>
                    <div class='modal-body'>
                        <div class='foto'>
                            <div class='imagen'>
                                <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-09-2022/6._nicolas_correal.jpg' alt='Foto: Nicolas Correal' title='Foto: Nicolas Correal'>
                            </div>
                        </div>
                        <div class='texto'>
                            <h3>Nicolas Correal</h3>
                            <h4>Subsecretario de Gestión de la Movilidad - Secretaría Distrital de Movilidad de Bogotá</h4>
                            <hr>
                            <p>Ingeniero Civil de la Universidad de los Andes, donde también cursó una Maestría en Ingeniería. Ha complementado su formación con diplomados en Gestión del Cambio, Gestión por Procesos y en Alta Gerencia. Cuenta con más de 9 años de experiencia, en los que se destaca su paso por la Universidad de los Andes en el campo de la investigación, y su trabajo en la Secretaría de Movilidad de Bogotá entre 2017 y 2020 como Asesor de Despacho, Director de Control y Vigilancia, y Director de Gestión de Tránsito y Control de Transporte. Trabajó en TransMilenio S.A. donde, desde el cargo de Subgerente Técnico y de Servicios, era el responsable de la planeación de corto, mediano y largo plazo del sistema y la gestión de infraestructura. Actualmente se desempeña como Subsecretario de Gestión de la Movilidad en la Secretaría de Movilidad de Bogotá.</p>
                            <hr>
                        </div>
                        <div class='sub-close'>
                            <button type='button' class='btn btn-secondary' data-dismiss='modal'>Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="modalKristiSaporito" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="foto">
                            <div class='imagen'>
                                <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-09-2022/5._saporito_kristi_0327.jpg' alt='Foto: Kristi Saporito' title='Foto: Kristi Saporito'>
                            </div>
                        </div>
                        <div class="texto">
                            <h3>Kristi Saporito</h3>
                            <h4>Gerente Senior de Comunicaciones para los programas de Seguridad Vial y Registro Civil y Estadísticas Vitales - Vital Strategies</h4>
                            <hr>
                            <p>Cuenta con más de 10 años de experiencia en comunicación estratégica, apoya a los socios dentro de la Iniciativa Bloomberg para la Seguridad Vial Mundial (BIGRS) en el desarrollo de planes de comunicación estratégica y en el relacionamiento con medios de comunicación para promover las mejores prácticas y acciones de seguridad vial. Antes de unirse a Vital Strategies, Kristi se desempeñó como Asociada de Comunicaciones en la Universidad George Washington en Washington D.C., institución en la que obtuvo su Licenciatura en Comunicaciones.</p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="modalDonaldFulbright" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="foto">
                            <div class='imagen'>
                                <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-09-2022/4._donald_fulbright.jpg' alt='Foto: Donald Fulbright' title='Foto: Donald Fulbright'>
                            </div>
                        </div>
                        <div class="texto">
                            <h3>Donald Fulbright</h3>
                            <h4>Miembro - División de Programas de la Asociación Internacional de Jefes de Policía (IACP)</h4>
                            <hr>
                            <p>Licenciado en Ciencias del Ejercicio, con Maestría en Administración de Justicia Penal y actualmente es Oficial de Paz, maestro certificado en Texas, Estados Unidos. Cuenta con más de veinte años de experiencia en control y vigilancia y ha trabajado en múltiples roles, incluidos patrullaje, tráfico, investigaciones criminales y eventos especiales. Tiene una amplia experiencia en operaciones de gestión de tráfico, detección de problemas de conducción y procedimientos de investigación de siniestros viales. Cuenta con certificaciones en Reconstrucción de Siniestros Intermedio y Avanzado, Sobriedad de Campo Estandarizado (SFST), Reconocimiento de Drogas (DRE), y fue el capacitador para la detección y fiscalización de comportamientos riesgosos en la vía en una agencia de aplicación de leyes de tránsito.</p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="modalPabloBocarejo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="foto">
                            <div class='imagen'>
                                <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-09-2022/2._juan_pablo_bocarejo.jpeg' alt='Foto: Juán Pablo Bocarejo' title='Foto: Juán Pablo Bocarejo'>
                            </div>
                        </div>
                        <div class="texto">
                            <h3>Juán Pablo Bocarejo</h3>
                            <h4>Profesor Asociado - Universidad de los Andes/Proyecto Conduce a 50 Vive al 100</h4>
                            <hr>
                            <p>Ingeniero civil de la Universidad de los Andes con Doctorado en Transporte de la Universidad de París. Fue el cofundador del Grupo de Estudios en Sostenibilidad de la Universidad de los Andes, donde ha dirigido investigaciones con múltiples socios internacionales, generando publicaciones relevantes en importantes revistas científicas.</p>
                            <p>Participó en el Plan Maestro de Ciclorrutas de Bogotá y asesoró al Banco Interamericano de Desarrollo (BID), en su plan de apoyo al fortalecimiento del uso de la bicicleta en América Latina.</p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="modalFernandaCardenas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="foto">
                            <div class='imagen'>
                                <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-09-2022/1._maria_fernanda_cardenas.jpeg' alt='Foto: María Fernanda Cárdenas' title='Foto: María Fernanda Cárdenas'>
                            </div>
                        </div>
                        <div class="texto">
                            <h3>María Fernanda Cárdenas</h3>
                            <h4>Gerente Senior de Comunicaciones para Colombia - Vital Strategies</h4>
                            <hr>
                            <p>Politóloga con énfasis en mercadeo político. Cuenta con una especialización en producción de televisión y una maestría en teatro. Tiene una amplia experiencia en el diseño e implementación de estrategias de comunicación y políticas públicas, trabajando en entidades públicas y privadas, así como agencias de publicidad. Como experta en campañas de cambio de comportamiento, ofrece asistencia técnica a los socios de Vital Strategies en Colombia y Latinoamérica en la planificación e implementación de campañas de bien público en seguridad vial y alimentación saludable.</p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="modalFernandaCardenas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="foto">
                            <div class='imagen'>
                                <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-09-2022/1._maria_fernanda_cardenas.jpeg' alt='Foto: María Fernanda Cárdenas' title='Foto: María Fernanda Cárdenas'>
                            </div>
                        </div>
                        <div class="texto">
                            <h3>María Fernanda Cárdenas</h3>
                            <h4>Gerente Senior de Comunicaciones para Colombia - Vital Strategies</h4>
                            <hr>
                            <p>Politóloga con énfasis en mercadeo político. Cuenta con una especialización en producción de televisión y una maestría en teatro. Tiene una amplia experiencia en el diseño e implementación de estrategias de comunicación y políticas públicas, trabajando en entidades públicas y privadas, así como agencias de publicidad. Como experta en campañas de cambio de comportamiento, ofrece asistencia técnica a los socios de Vital Strategies en Colombia y Latinoamérica en la planificación e implementación de campañas de bien público en seguridad vial y alimentación saludable.</p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="modalAlfredoAlbornoz" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="foto">
                            <div class='imagen'>
                                <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-09-2022/5._alfredo_albornoz.webp' alt='Foto: Alfredo Albornoz Guerrero' title='Foto: Alfredo Albornoz Guerrero'>
                            </div>
                        </div>
                        <div class="texto">
                            <h3>Alfredo Albornoz Guerrero</h3>
                            <h4>Gerente General Touring & Automóvil Club de Colombia - FIA FOUNDATION</h4>
                            <hr>
                            <p>Es Gerente General de Automóvil Club de Colombia desde 2011. Considera que sus mayores desafíos son continuar con el crecimiento logrado en los últimos años y en el campo de la movilidad, convertirse en el referente más importante de Colombia, haciendo de la movilidad una actividad permanente y autosostenible para el club.</p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="modalJavierMorales" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="foto">
                            <div class='imagen'>
                                <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-09-2022/4._javier_morales_jacome.jpeg' alt='Foto: Javier Morales Jácome' title='Foto: Javier Morales Jácome'>
                            </div>
                        </div>
                        <div class="texto">
                            <h3>Javier Morales Jácome</h3>
                            <h4>Director Alianzas y Cooperacion - Fundación Casa de la Infancia</h4>
                            <hr>
                            <p>Odontólogo Especialista en áreas administrativas y salud pública, tras su formación como salubrista publico, su trayectoria profesional se ha centrado en el diseño y gestión de proyectos sociales y de salud innovadores de protección y promoción de los derechos de los niños y sus familias, fortalecimiento de capacidades, gobernabilidad, desarrollo local e incidencia. Gerencio el diseño y puesta en marcha de la ruta integral de atenciones desde la gestación hasta la adolescencia del Distrito Capital. Centra su carrera en la generación de condiciones para un adecuado desarrollo integral de a primera infancia en entornos urbanos sanos, seguros y amigables. Actualmente es asesor de primera infancia, salud y estudios relacionados con la niñez, espacio público- movilidad y calidad del aire a nivel nacional.</p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="modalMJosePessano" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="foto">
                            <div class='imagen'>
                                <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-09-2022/3._maria_jose_pessano.jpeg' alt='Foto: María José Pessano' title='Foto: María José Pessano'>
                            </div>
                        </div>
                        <div class="texto">
                            <h3>María José Pessano</h3>
                            <h4>Directora Ejecutiva - Fundación Gonzalo Rodriguez</h4>
                            <hr>
                            <p>Directora Ejecutiva de la Fundación Gonzalo Rodríguez, es diplomada en Gerencia, experta en planificación y gestión. Integra el equipo de la organización desde sus inicios en el año 2001 y ha liderado los proyectos referidos a seguridad vial infantil en los diferentes paises de Latinoamérica durantela última década. La Fundación Gonzalo Rodríguez es referente internacional en materia de seguridad vial infantil, desde su expertis técnico y experiencia en la promoción de regulaciones y políticas públicas referidas al cuidado de los niños, niñas y adolescentes en el tránsito colabora con los gobiernos nacionales y subnacionales, con la academia y la sociedad civil de diferentes países de LAC para lograr avances en la materia.</p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="modalDarioHidalgo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="foto">
                            <div class='imagen'>
                                <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-09-2022/2._dario_hidalgo.jpg' alt='Foto: Dario Hidalgo' title='Foto: Dario Hidalgo'>
                            </div>
                        </div>
                        <div class="texto">
                            <h3>Dario Hidalgo</h3>
                            <h4>Asesor Técnico en Seguridad Vial - Red PaPaz</h4>
                            <hr>
                            <p>Ingeniero Civil de la Universidad de los Andes. Cuenta con Maestría y Doctorado de la Universidad Estatal de Ohio. Es profesor de Transporte y Logística de la Universidad Javeriana. Se ha desempeñado como asesor de gobiernos locales, nacionales y organismos internacionales en seguridad vial y movilidad sostenible en Latinoamérica, Asia y África. Apoyó el proceso de preparación e implantación de Visión Cero y gestión de velocidad en Bogotá, dirigió el proyecto Carros Más Seguros y actualmente apoya el programa de seguridad vial infantil de Red PaPaz, el cual busca hacer obligatorio el uso de sillas de retención y su reglamentación de acuerdo con estándares internacionales.</p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="modalCarlosSoto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="foto">
                            <div class='imagen'>
                                <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-09-2022/jesus_carlos_soto_morfin.jpg' alt='Foto: Jesús Carlos Soto' title='Foto: Jesús Carlos Soto'>
                            </div>
                        </div>
                        <div class="texto">
                            <h3>Jesús Carlos Soto</h3>
                            <h4>Director de Movilidad y Transporte de Guadalajara</h4>
                            <hr>
                            <p>Director de Movilidad y Transporte del municipio de Guadalajara y coordinador de la Mesa Metropolitana de Movilidad del Área Metropolitana de Guadalajara. Entre 2015 y septiembre de 2021, se desempeñó como Director de Movilidad y Transporte del Municipio de Zapopan, México. A través de su gestión ha impulsado estrategias y proyectos de movilidad sostenible y planeación urbana, que contribuyan a la creación de ciudades más justas e incluyentes, desde una óptica de concientización y combate a la crisis climática y la justicia social. En su trayectoria, Jesús Carlos ha promovido la agenda de la movilidad sostenible y la calidad de vida en las ciudades desde distintos ámbitos, primero desde la sociedad civil organizada, en la cual participó como activista en el colectivo 'Ciudad para Todos' desde el 2007, coordinó el X Congreso Internacional Hacia Ciudades Libres de Autos en Guadalajara en 2011, y fue miembro del Observatorio Ciudadano De Movilidad y Transporte Público de Jalisco (2013-2015).</p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="modalGildaToro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="foto">
                            <div class='imagen'>
                                <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-09-2022/gilda_toro.jpeg' alt='Foto: Gilda Toro' title='Foto: Gilda Toro'>
                            </div>
                        </div>
                        <div class="texto">
                            <h3>Gilda Toro</h3>
                            <h4>Docente e Investigadora - Universidad de La Salle</h4>
                            <hr>
                            <p>Docente de la Universidad de La Salle del programa de Arquitectura y experta en temas de inclusión Social y Educación Inclusiva. Fue reconocida por la Presidencia de la República desde la Consejería Presidencial, para la participación de las personas con Discapacidad, por su compromiso, dedicación y apoyo brindado a todas las personas en condición de discapacidad, familiares y cuidadores. Hace parte de la Secretaria Ejecutiva de la Comisión Intersectorial de Movilidad y accesibilidad CIMA, Mesa técnica del Consejo Nacional de Discapacidad (CND). </p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="modalAgustinaCalatayud" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="foto">
                            <div class='imagen'>
                                <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-09-2022/agustina_calatayud.png' alt='Foto: Agustina Calatayud' title='Foto: Agustina Calatayud'>
                            </div>
                        </div>
                        <div class="texto">
                            <h3>Agustina Calatayud</h3>
                            <h4>Especialista líder de transporte - Banco Interamericano de Desarrollo (BID)</h4>
                            <hr>
                            <p>Es especialista Líder de Transporte en la División de Transporte del Banco Interamericano de Desarrollo (BID). Su trabajo en el BID se focaliza en la investigación aplicada, la estructuración de préstamos de inversión y la provisión de asesoramiento técnico para mejorar los sistemas de transporte en Latinoamérica y el Caribe. Lidera el área de investigación y tecnología en transporte y logística del BID. Antes de unirse a esta institución en 2010, trabajó en las áreas de planificación del transporte y desarrollo del sector privado en organismos internacionales (Comisión Europea, Organización Internacional del Trabajo y Naciones Unidas), el sector público (Alcaldía de Turín, Italia) y el sector privado. Agustina posee un Doctorado en Ingeniería Mecánica y de Sistemas por la Universidad de Newcastle, Reino Unido, y dos Maestrías por la Universidad de California, Berkeley y la Universidad de Padua, Italia. Sus investigaciones en logística y transporte marítimo han recibido premios internacionales del UK Charter Institute from Transport and Logistics, Emerald Publishing y la Asociación Europea de Logística, y han sido publicadas por revistas científicas, organismos internacionales y la academia.</p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="modalIvanLanza" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="foto">
                            <div class='imagen'>
                                <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-09-2022/ivan_de_la_lanza.jpg' alt='Foto: Iván de la Lanza' title='Foto: Iván de la Lanza'>
                            </div>
                        </div>
                        <div class="texto">
                            <h3>Iván de la Lanza</h3>
                            <h4>Gerente Senior - Global Designing Cities Initiative (GDCI)</h4>
                            <hr>
                            <p>Desde su rol en GDCI coordina a los equipos de las ciudades latinoamericanas que forman parte de la red de la Iniciativa Bloomberg para la Seguridad Vial Mundiall (BIGRS). También ofrece orientación y supervisión a otros programas de GDCI. En los últimos 15 años ha colaborado y desarrollado proyectos de movilidad con equipos multidisciplinarios, desde áreas gubernamentales y no gubernamentales, proporcionando soporte técnico, gestión y construcción de capacidades locales en las ciudades. Recientemente fue consultor en transporte para el Banco Mundial, Gerente de Movilidad Activa en el Programa de Ciudades de WRI México. También fue director de Cultura, Diseño e Infraestructura Ciclista en la Secretaría de Medio Ambiente de la Ciudad de México. </p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="modalMaryBottagisio" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="foto">
                            <div class='imagen'>
                                <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-09-2022/mary_bottagisio.jpg' alt='Foto: Mary Bottagisio' title='Foto: Mary Bottagisio'>
                            </div>
                        </div>
                        <div class="texto">
                            <h3>Mary Bottagisio</h3>
                            <h4>Directora Ejecutiva - Liga Contra la Violencia Vial</h4>
                            <hr>
                            <p>Ingeniera Industrial con estudios en Políticas Públicas de la Universidad de Los Andes. Líder, activista y adalid de la seguridad vial en Colombia y Latinoamérica por más de 15 años. Es fundadora de la Liga Contra la Violencia Vial, creada en septiembre de 2007, y desde entonces, ha contribuido a la construcción y puesta en marcha de planes, programas y proyectos de desarrollo, además de la promoción de iniciativas legislativas para el fortalecimiento de la seguridad vial en ámbitos multisectoriales. Es conferencista internacional ante la Comisión Económica de las Naciones Unidas para Europa (UNECE), la Comisión Económica de las Naciones Unidas para América Latina y el Caribe (CEPAL) y el Banco Interamericano de Desarrollo (BID). Cofundadora de la Federación Iberoamericana de Asociaciones de Víctimas Contra la Violencia Vial y de la Global Alliance of NGOs for Road Safety.</p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="modalFeyitaDedyaba" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="foto">
                            <div class='imagen'>
                                <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-09-2022/fetiya_dedgeba_.jpg' alt='Foto: Fetiya Dedgeba ' title='Foto: Fetiya Dedgeba '>
                            </div>
                        </div>
                        <div class="texto">
                            <h3>Fetiya Dedgeba </h3>
                            <h4>Directora ejecutiva adjunta - Servicio del Fondo de Seguros y Seguridad Vial de Etiopía</h4>
                            <hr>
                            <p>Licenciada en Idiomas y Literatura y cuenta con una maestría en Liderazgo. Ha trabajado como líder en diferentes áreas de la administración de la ciudad de Addis Abeba, Etiopía, así como en el gobierno federal. Además, ha trabajado como experta en relaciones internacionales en la oficina del alcalde de Addis Abeba. Actualmente se desempeña como directora ejecutiva adjunta del Servicio del Fondo de Seguros y Seguridad Vial de Etiopía, agencia federal responsable de todas las actividades e iniciativas en seguridad vial del país. </p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="modalGinaTambini" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="foto">
                            <div class='imagen'>
                                <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-09-2022/5._gina_tambini.jpg' alt='Foto: Gina Tambini' title='Foto: Gina Tambini'>
                            </div>
                        </div>
                        <div class="texto">
                            <h3>Gina Tambini</h3>
                            <h4>Representante para Colombia - Organización Panamericana de la Salud (OPS/OMS)</h4>
                            <hr>
                            <p>Médico de la Universidad Peruana Cayetano Heredia, y Magister en Salud Pública de la Escuela de Higiene y Salud Pública de la Universidad Johns Hopkins, en Baltimore, Estados Unidos. Desde 2018 es representante de la OPS/OMS en Colombia. Tiene una experiencia amplia en salud pública, salud familiar y comunitaria.</p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="modalLuisLota" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="foto">
                            <div class='imagen'>
                                <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-09-2022/4._luis_felipe_lota.png' alt='Foto: Luis Felipe Lota' title='Foto: Luis Felipe Lota'>
                            </div>
                        </div>
                        <div class="texto">
                            <h3>Luis Felipe Lota </h3>
                            <h4>Director de la Agencia Nacional de Seguridad Vial (ANSV)</h4>
                            <hr>
                            <p>Ingeniero Civil con Maestría en Transporte de la Universidad Nacional de Colombia. Cuenta con una Especialización en Gobierno, Gerencia y Asuntos Públicos de la Universidad Externado. Se desempeñó como director de Infraestructura y Energía Sostenible del Departamento Nacional de Planeación (DNP), entidad técnica del Gobierno. Desde abril de 2019 dirige la Agencia Nacional de Seguridad Vial (ANSV).</p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="modalGuillermoReyes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="foto">
                            <div class='imagen'>
                                <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-09-2022/3._guillermo_reyes_gonzalez.jpg' alt='Foto: Guillermo Reyes' title='Foto: Guillermo Reyes'>
                            </div>
                        </div>
                        <div class="texto">
                            <h3>Guillermo Reyes</h3>
                            <h4>Ministro de Transporte</h4>
                            <hr>
                            <p>Abogado de la Universidad del Rosario y cuenta con un doctorado en Filosofía del Derecho de la Universidad Complutense de Madrid. Tiene una amplia experiencia en el sector público, académico y privado. Además, fue viceministro de Justicia. Se desempeñó como rector de la Universidad del Sinú, sede Bogotá. Fue nombrado Viceministro de Justicia, en 2006, y participó en el ejercicio democrático de la Séptima Papeleta, lo que le permitió ser asesor de la Asamblea Constituyente de 1991. Por otra parte, se ha desempeñado como profesor de varias universidades del país, como la Javeriana, los Andes, el Rosario, la Libre, Santiago de Cali, de Cartagena, CESA, entre otras.</p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="modalDeyaniraAvila" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="foto">
                            <div class='imagen'>
                                <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-09-2022/2._deyanira_avila_moreno.png' alt='Foto: Deyanira Ávila' title='Foto: Deyanira Ávila'>
                            </div>
                        </div>
                        <div class="texto">
                            <h3>Deyanira Ávila</h3>
                            <h4>Secretaria de Movilidad de Bogotá</h4>
                            <hr>
                            <p>Ingeniera Catastral y Geodesta de la Universidad Distrital Francisco José de Caldas. Tiene además una especialización en Gestión Ambiental Urbana de la Universidad Piloto de Colombia. Se ha desempeñado como auditora en Seguridad Vial del Instituto de Recursos Mundiales (WRI). Cuenta con más de 10 años de experiencia en el sector público. Ha trabajado en entidades como el Instituto de Desarrollo Urbano (IDU), Catastro Distrital y Metro de Bogotá. Se desempeñó como la primera subdirectora de la Bicicleta y el Peatón en Bogotá, desde donde lideró importantes iniciativas en términos de movilidad sostenible. Actualmente se desempeña como Secretaria de Movilidad de la ciudad.</p>
                            <hr>
                        </div>
                        <div class="sub-close">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Modal -->
        <div class="modal fade" id="modalClaudiaLopez" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="foto">
                            <div class='imagen'>
                                <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-09-2022/1._claudia_nayibe_lopez.jpeg' alt='Foto: Claudia López' title='Foto: Claudia López'>
                            </div>
                        </div>
                        <div class="texto">
                            <h3>Claudia López</h3>
                            <h4>Alcaldesa de Bogotá</h4>
                            <hr>
                            <p>Estudió Finanzas, Gobierno y Relaciones Internacionales en la Universidad Externado de Colombia. Cuenta con un diplomado en Gestión de Suelo Urbano de la Universidad Erasmo de Róterdam; una maestría en Administración Pública y Política Urbana de la Universidad de Columbia, Nueva York; y un doctorado en Ciencias Políticas de la Universidad NorthWestern de los Estados Unidos. Fue Senadora por el Partido Alianza Verde entre 2014-2018. Desde allí promovió importantes leyes como la ‘Ley Probici”. El 27 de octubre de 2019, López ganó las elecciones para la Alcaldía de Bogotá, esto la convirtió en la primera en ocupar este cargo en la historia de la capital colombiana. Inició su mandato el 1 de enero de 2020 y se extenderá por un período de cuatro años.</p>
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


    <div class='box-wrp'>

        <div class='box-head'>
            <div class='row'>
                <!-- xs -->
                <div class='col-xs-12 visible-xs-12 visible-xs-block'>
                    <img class='img-responsive w-100 ' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-09-2022/sv_490x220.png' alt='Encabezado - Semana de la seguridad vial 2022' title='Encabezado - Semana de la seguridad vial 2022'>
                </div>
                <!-- lg -->
                <div class='col-sm-12 hidden-xs'>
                    <img class='img-responsive w-100 ' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-09-2022/banners_ii_1600x400.png' alt='Encabezado - Semana de la seguridad vial 2022' title='Encabezado - Semana de la seguridad vial 2022'>
                </div>
            </div>
        </div>

        <div class="box-description">
            <p>La Semana de la Seguridad Vial es un espacio que convoca a expertos y líderes mundiales en materia de seguridad vial. La Secretaría Distrital de Movilidad de Bogotá ha liderado este evento para visibilizar la seguridad vial como un asunto de salud pública.</p>
            <p>Este año, en su decimosexta versión, la Semana de <strong>la Seguridad Vial: Ojos en las vías, salvando vidas,</strong> busca generar conciencia sobre los principales factores de riesgo en la vía, a través de diferentes escenarios teniendo como eje principal la importancia de cumplir con las normas de tránsito, no exceder los límites máximos de velocidad, ser tolerante con los demás actores viales, tener conductas responsables en las vías y saber que la administración Distrital desarrolla a diario diferentes acciones para salvar vidas en el tránsito.</p>
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
        <!-- <div class="box-video">
            <div class='video'>
                <div class='embed-responsive embed-responsive-16by9'>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/ScMzIvxBSi4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div> -->

        <div class="box-description">
            <p><strong>Entre el 1 y el 7 de octubre,</strong> Bogotá es protagonista como una ciudad pionera en la implementación de diferentes acciones y estrategias encaminadas a reducir el número de víctimas por siniestros viales, esto, a través de actividades en vía en las que los ciudadanos serán los protagonistas, y espacios de debate con <strong>cerca de 30 expertos de 6 países,</strong> en la planeación de una nueva movilidad, el rol de la seguridad vial en las ciudades y los aprendizajes que ha dejado la transformación de la movilidad a nivel mundial durante los últimos años.</p>
            <p>Durante la Semana de la Seguridad Vial: Ojos en las vías, salvando vidas, habrá transmisiones en vivo y cubrimiento en tiempo real de lo que sucederá en las diferentes actividades a través de las redes sociales de la Secretaría Distrital de Movilidad: <a class="ref-redes" href="https://twitter.com/SectorMovilidad?t=7hVjOT5dYRhoqGYekIUX7Q&s=09" target="_blank" rel="noopener noreferrer">Twitter,</a> <a class="ref-redes" href="https://www.facebook.com/secretariamovilidadbogota" target="_blank" rel="noopener noreferrer">Facebook,</a> <a class="ref-redes" href="https://youtube.com/user/secretariamovilidad" target="_blank" rel="noopener noreferrer">YouTube</a> y <a class="ref-redes" href="https://www.linkedin.com/company/sec-distrital-de-movilidad/" target="_blank" rel="noopener noreferrer">LinkedIn.</a></p>
            <p><strong>Inscríbete aquí para participar de manera presencial en los diferentes paneles del XVI Seminario Internacional de Seguridad Vial, entre el 4 y el 6 de octubre en Maloka, cupos limitados.</strong></p>
        </div>
        <a href="https://docs.google.com/forms/d/e/1FAIpQLSdDdVZ2yguZ6pmVG4udbIeVFGmSjVxLfW78JmPr0sft-sK8kg/viewform" target="_blank" rel="noopener noreferrer">
            <div class="boton-ppal">
                <div class='imagen-inscripcion zoom'>
                    <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-09-2022/inscripciones.gif' alt='banner animado inscripciones' title='banner animado inscripciones'>
                </div>
            </div>
        </a>

        <hr>
        <div class="box-verticalTabs">

            <div class="titulo">
                <h3>Programación</h3>
            </div>

            <!-- Navigation Buttons -->
            <div class="botones">
                <ul class="nav nav-pills nav-stacked" id="myTabs">
                    <li class="active"><a href="#dia1" data-toggle="pill">Sábado 1 de octubre</a></li>
                    <li><a href="#dia2" data-toggle="pill">Lunes 3 de octubre</a></li>
                    <li><a href="#dia3" data-toggle="pill">Martes 4 de octubre</a></li>
                    <li><a href="#dia4" data-toggle="pill">Miércoles 5 de octubre</a></li>
                    <li><a href="#dia5" data-toggle="pill">Jueves 6 de octubre</a></li>
                    <li><a href="#dia6" data-toggle="pill">Viernes 7 de octubre</a></li>
                </ul>
            </div>

            <!-- Content -->
            <div class="contenido">
                <div class="tab-content">

                    <!-- dia 1 - sabado 1  -->
                    <div class="tab-pane in active" id="dia1">
                        <div class="box-content">

                            <!-- collapse_dia1 -->
                            <div class='panel panel-default'>
                                <div class='panel-heading' role='tab' id='heading_dia1'>
                                    <h4 class='panel-title'>
                                        <a role='button' data-toggle='collapse' data-parent='#accordion' href='#collapse_dia1' aria-expanded='true' aria-controls='collapse_dia1'>
                                            MotoPicnic
                                        </a>
                                    </h4>
                                </div>
                                <div id='collapse_dia1' class='panel-collapse collapse in' role='tabpanel' aria-labelledby='heading_dia1'>
                                    <div class='panel-body'>
                                        <p>En el marco del Día Distrital del Motociclista, <strong>entre las 11:00 a.m y las 5:00 p.m.</strong> en la Av. Boyacá con calle 23, bahía Los Tres Elefantes (Sentido N - S), se desarrollará el <strong>MotoPicnic,</strong> una jornada de pedagogía y cultura ciudadana que busca generar conciencia sobre el rol de este actor vial en el tránsito, promoviendo una conducción responsable y segura, entendiendo el cuidado de la vida como un valor fundamental, a través de la identificación de factores de riesgo como el exceso de la velocidad y la corresponsabilidad en las vías.</p>
                                        <p>Los motociclistas, sus familias, amigos y todo el parche motero están invitados a participar de <strong>manera gratuita en actividades lúdico-pedagógicas experienciales y divertidas,</strong> que les permitirá adquirir buenas prácticas en seguridad vial.</p>
                                        <p><strong>Actividades:</strong></p>
                                        <ol>
                                            <li><strong>Futbolín Humano:</strong> La importancia de la seguridad vial para todos, independientemente de la manera de movilizarse.</li>
                                            <li><strong>Tumbalón:</strong> Pericia y eventos inesperados en la vía.</li>
                                            <li><strong>Tornado:</strong> Tiempo de reacción adecuado ante cualquier dificultad en la vía</li>
                                            <li><strong>Gladiadores:</strong> Reconocer la interacción con los diferentes actores viales y el respeto.</li>
                                            <li><strong>Muro de escalar:</strong> Entender el peligro que genera el exceso de confianza y la necesidad de la concentración en la vía.</li>
                                            <li><strong>Feria inflable:</strong> Fomentar estrategias sobre los comportamientos de riesgo en el tránsito.</li>
                                            <li><strong>Simulador de conducción:</strong> Recomendaciones para una conducción segura.</li>
                                            <li><strong>Foto Selfie:</strong> Inmortalizar a través de una fotografía el compromiso con una conducción más segura.</li>
                                            <li>Inspección de gases.</li>
                                            <li>Verificación de frenos.</li>
                                            <li>Marcación de motos.</li>
                                            <li>Revisión preventiva.</li>
                                            <li>Juego de roles, souvenirs y mucho más.</li>
                                        </ol>
                                        <p>Adicionalmente, la jornada contará con el apoyo de empresas privadas que pondrán a disposición de los visitantes un parque itinerante sobre el cambio de roles entre diferentes actores viales. </p>
                                        <p><strong>Nota:</strong> contaremos con parqueadero gratuito para los participantes</p>
                                        <a href="https://docs.google.com/forms/d/e/1FAIpQLSdgJNYMUiJQC1yGroF-wWxJhBOeT0aBr-w9AXKinGF0v4_5pw/viewform" target="_blank" rel="noopener noreferrer">
                                            <div class='imagen-inscripcion zoom'>
                                                <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-09-2022/inscripciones.gif' alt='banner animado inscripciones' title='banner animado inscripciones'>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- /#fin _dia1 -->


                        </div>
                    </div>
                    <!-- Fin dia 1 - sabado 1  -->


                    <!-- día 2 - Lunes 3 de octubre  -->
                    <div class="tab-pane" id="dia2">
                        <div class="box-content">

                            <!-- collapse_dia2 -->
                            <div class='panel panel-default'>
                                <div class='panel-heading' role='tab' id='heading_dia2'>
                                    <h4 class='panel-title'>
                                        <a role='button' data-toggle='collapse' data-parent='#accordion' href='#collapse_dia2' aria-expanded='true' aria-controls='collapse_dia2'>
                                            Café femenino: Seguridad Vial y Género
                                        </a>
                                    </h4>
                                </div>
                                <div id='collapse_dia2' class='panel-collapse collapse in' role='tabpanel' aria-labelledby='heading_dia2'>
                                    <div class='panel-body'>
                                        <p>En las localidades de Antonio Nariño, Puente Aranda y Mártires, donde han surgido iniciativas para reducir los eventos asociados a la movilidad y violencia de género, se reunirán ciudadanas usuarias del transporte público frecuentes, patrulleras de la Dirección de Tránsito y Transporte de Bogotá y conductoras del SITP, para discutir alrededor de un café, como su desde su género y posición en la sociedad vivencian su movilidad: dificultades, retos e ideas para construir comunidad.</p>

                                        <dl>
                                            <dd><strong>Hora: </strong>10:00 a.m. a 1:00 p.m.</dd>
                                        </dl>
                                        <p><strong>Lugar (3 zonas): </strong></p>
                                        <dl>
                                            <ol>
                                                <li>Puente Aranda: Av. NQS con Calle 6 - Costado Occidental</li>
                                                <li>Mártires: Av. NQS con Calle 6 - Costado Oriental</li>
                                                <li>Antonio Nariño: Parque Carlos E. Restrepo - Carrera 18 # 19 Sur - 1</li>
                                            </ol>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                            <!-- /#fin _dia2 -->

                        </div>
                    </div>
                    <!-- Fin día 2 - Lunes 3 de octubre  -->


                    <!-- dia 3 - martes 4 de octubre  -->
                    <div class="tab-pane" id="dia3">
                        <div class="box-content">
                            <!-- collapse_dia3 -->
                            <div class='panel-group' id='accordion_dia3' role='tablist ' aria-multiselectable='true'>

                                <!-- collapse_actividad1 -->
                                <div class='panel panel-default'>
                                    <div class='panel-heading' role='tab' id='heading_actividad1'>
                                        <h4 class='panel-title'>
                                            <a role='button' data-toggle='collapse' data-parent='#accordion_dia3' href='#collapse_actividad1' aria-expanded='true' aria-controls='collapse_actividad1'>
                                                <small>Lanzamiento</small><br>Semana de la Seguridad Vial: Ojos en las vías, salvando vidas

                                            </a>
                                        </h4>
                                    </div>
                                    <div id='collapse_actividad1' class='panel-collapse collapse in' role='tabpanel' aria-labelledby='heading_actividad1'>
                                        <div class='panel-body'>
                                            <p>En el marco de la Semana de la Seguridad Vial, la Secretaría de Movilidad lanza la <strong>campaña ‘Ojos en las vías, salvando vidas’</strong>, que busca generar conciencia sobre los principales factores de riesgo en la vía y la importancia la importancia de cumplir con las normas de tránsito, no exceder los límites máximos de velocidad, ser tolerante con los demás actores viales, tener conductas responsables en las vías y que el control en vía es constante para salvar vidas en el tránsito.</p>
                                            <dl>
                                                <dd><strong>Hora: </strong>7:30 a.m. a 8:30 a.m.</dd>
                                            </dl>

                                            <a href="https://fb.watch/fXVZXcp4Qo/" target="_blank" rel="noopener noreferrer">
                                                <div class='imagen-transmision zoom'>
                                                    <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-09-2022/transmision.gif' alt='transmisión en vivo' title='transmisión en vivo'>
                                                </div>
                                            </a>

                                        </div>
                                    </div>
                                </div>
                                <!-- /#fin _actividad1 -->

                                <!-- collapse_actividad2 -->
                                <div class='panel panel-default'>
                                    <div class='panel-heading' role='tab' id='heading_actividad2'>
                                        <h4 class='panel-title'>
                                            <a role='button' data-toggle='collapse' data-parent='#accordion_dia3' href='#collapse_actividad2' aria-expanded='true' aria-controls='collapse_actividad2'>
                                                <small>Mesa de Instalación</small><br>Inauguración Seminario Internacional
                                            </a>
                                        </h4>
                                    </div>
                                    <div id='collapse_actividad2' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_actividad2'>
                                        <div class='panel-body'>
                                            <p>La mesa de instalación dará inicio al Seminario Internacional de Seguridad Vial con las principales autoridades de tránsito del Distrito, la Nación y Organizaciones Internacionales expertas en el manejo y estudio de la materia, teniendo como eje fundamental la Visión Cero y el cumplimiento de los Objetivos de Desarrollo Sostenible, sobre todo, aquellos relacionados con la mitigación de las problemáticas de salud pública, como en este caso, las fatalidades ocasionadas por siniestros viales.</p>
                                            <dl>
                                                <dd><strong>Hora: </strong>8:00 a.m. a 8:30 a.m.</dd>
                                                <dd><strong>Entrada libre: </strong>Cine Domo Maloka</dd>
                                            </dl>
                                            <a href="https://fb.watch/fXVZXcp4Qo/" target="_blank" rel="noopener noreferrer">
                                                <div class='imagen-transmision zoom'>
                                                    <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-09-2022/transmision.gif' alt='transmisión en vivo' title='transmisión en vivo'>
                                                </div>
                                            </a>
                                            <dl>
                                                <dd>
                                                    <strong>Invitados:</strong>
                                                </dd>
                                                <dd>
                                                    <ul class="list-unstyled">

                                                        <a data-toggle="modal" data-target="#modalClaudiaLopez">
                                                            <li><strong>Claudia López</strong><br>Alcaldesa de Bogotá</li>
                                                        </a>
                                                        <a data-toggle="modal" data-target="#modalDeyaniraAvila">
                                                            <li><strong>Deyanira Ávila</strong><br>Secretaria de Movilidad de Bogotá</li>
                                                        </a>
                                                        <a data-toggle="modal" data-target="#modalLuisLota">
                                                            <li><strong>Luis Felipe Lota</strong><br>Director de la Agencia Nacional de Seguridad Vial </li>
                                                        </a>
                                                        <a data-toggle="modal" data-target="#modalMauricioCerpa">
                                                            <li><strong>Mauricio Cerpa</strong><br>Especialista de Vigilancia - Organización Panamericana de la Salud</li>
                                                        </a>

                                                    </ul>
                                                </dd>

                                            </dl>


                                        </div>
                                    </div>
                                </div>
                                <!-- /#fin _actividad2 -->


                                <!-- collapse_actividad3 -->
                                <div class='panel panel-default'>
                                    <div class='panel-heading' role='tab' id='heading_actividad3'>
                                        <h4 class='panel-title'>
                                            <a role='button' data-toggle='collapse' data-parent='#accordion_dia3' href='#collapse_actividad3' aria-expanded='true' aria-controls='collapse_actividad3'>
                                                <small>Seminario</small><br>Perspectivas para la Segunda Década de Acción para la Seguridad Vial
                                            </a>
                                        </h4>
                                    </div>
                                    <div id='collapse_actividad3' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_actividad3'>
                                        <div class='panel-body'>

                                            <p>En octubre de 2021 la ONU presentó el Plan Global del Segundo Decenio de Acción para la Seguridad Vial, una hoja de ruta con las recomendaciones y acciones necesarias para alcanzar la meta de disminuir las víctimas fatales y lesionadas por siniestros viales.</p>
                                            <p>El Segundo Decenio de Acción por la Seguridad Vial tiene como objetivo entre el 2021 - 2030, reducir las muertes y lesiones por siniestros de tránsito en al menos un 50%.</p>
                                            <p>En este conversatorio, expertos de organizaciones internacionales y representantes de entidades gubernamentales de Colombia, compartirán las acciones realizadas y cómo están trabajando para cumplir con los 12 objetivos globales para lograr el reto de este nuevo decenio.</p>
                                            <dl>
                                                <dd><strong>Hora: </strong>8:30 a.m. a 10:00 a.m.</dd>
                                                <dd><strong>Entrada libre: </strong>Cine Domo Maloka</dd>
                                            </dl>
                                            <a href="https://docs.google.com/forms/d/e/1FAIpQLSdDdVZ2yguZ6pmVG4udbIeVFGmSjVxLfW78JmPr0sft-sK8kg/viewform">
                                                <div class='imagen-inscripcion zoom'>
                                                    <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-09-2022/inscripciones.gif' alt='banner animado inscripciones' title='banner animado inscripciones'>
                                                </div>
                                            </a>

                                            <dl>
                                                <dt><strong>Modera:</strong></dt>
                                                <dd><a data-toggle="modal" data-target="#modalClaudiaAdriazola"><strong>Claudia Adriazola-Steil</strong><br>Directora Global de Salud y Seguridad Vial - Centro Ross de WRI para Ciudades Sustentables</a></dd>
                                            </dl>
                                            <dl>
                                                <dt>Panelistas:</dt>
                                                <dd>
                                                    <ul class="list-unstyled">
                                                        <a data-toggle="modal" data-target="#modalMaryBottagisio">
                                                            <li><strong>Mary Bottagisio</strong><br>Directora Ejecutiva - Liga Contra la Violencia Vial</li>
                                                        </a>
                                                        <a data-toggle="modal" data-target="#modalLuisLota">
                                                            <li><strong>Luis Felipe Lota</strong><br>Director de la Agencia Nacional de Seguridad Vial </li>
                                                        </a>
                                                        <a data-toggle="modal" data-target="#modalOscarGomez">
                                                            <li><strong>Oscar Julián Gómez</strong><br>Subsecretario de Política de Movilidad - Secretaría Distrital de Movilidad de Bogotá</li>
                                                        </a>
                                                        <a data-toggle="modal" data-target="#modalJesusCarlos">
                                                            <li><strong>Jesús Carlos Soto</strong><br>Director de Movilidad y Transporte de Guadalajara</li>
                                                        </a>
                                                        <a data-toggle="modal" data-target="#modalMauricioCerpa">
                                                            <li><strong>Mauricio Cerpa</strong><br>Especialista de Vigilancia - Organización Panamericana de la Salud</li>
                                                        </a>
                                                    </ul>
                                                </dd>
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                                <!-- /#fin _actividad3 -->


                                <!-- collapse_actividad4 -->
                                <div class='panel panel-default'>
                                    <div class='panel-heading' role='tab' id='heading_actividad4'>
                                        <h4 class='panel-title'>
                                            <a role='button' data-toggle='collapse' data-parent='#accordion_dia3' href='#collapse_actividad4' aria-expanded='true' aria-controls='collapse_actividad4'>
                                                <small>Actividad en Vía</small><br>¡Si voy seguro en taxi!
                                            </a>
                                        </h4>
                                    </div>
                                    <div id='collapse_actividad4' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_actividad4'>
                                        <div class='panel-body'>
                                            <p>A través de diversas actividades lúdico pedagógicas, se busca sensibilizar a las y los conductores de taxis acerca de puntos ciegos, riesgos a la hora de conducir durante su jornada de trabajo, convivencia entre actores viales y prácticas seguras en sus recorridos diarios.</p>
                                            <dl>
                                                <dd><strong>Hora:</strong> 10:00 a.m. a 12:00 m.</dd>
                                                <dd><strong>Lugar:</strong> Terminal de Transporte Sede Salitre</dd>
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                                <!-- /#fin _actividad4 -->

                                <!-- collapse_actividad5 -->
                                <div class='panel panel-default'>
                                    <div class='panel-heading' role='tab' id='heading_actividad5'>
                                        <h4 class='panel-title'>
                                            <a role='button' data-toggle='collapse' data-parent='#accordion_dia3' href='#collapse_actividad5' aria-expanded='true' aria-controls='collapse_actividad5'>
                                                <small>Panel</small><br>Ciudades para todos: Espacios seguros y accesibles para todos los usuarios
                                            </a>
                                        </h4>
                                    </div>
                                    <div id='collapse_actividad5' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_actividad5'>
                                        <div class='panel-body'>
                                            <p>Este panel buscará exponer los diferentes desafíos para lograr una ciudad segura, desde medios de transporte accesibles para toda la ciudadanía, políticas públicas como marco general de desarrollo de planes, programas y proyectos que beneficien la seguridad vial. En especial, es relevante reconocer la heterogeneidad de los seres humanos con sus diversas características físicas, mentales, cognitivas y/o sensoriales.</p>
                                            <p>El desarrollo de ciudades accesibles e incluyentes que promuevan el cumplimiento de los derechos fundamentales y en especial el derecho a la movilidad recapitulando los desafíos, enfoques y perspectivas que son importantes identificar y debatir.</p>
                                            <dl>
                                                <dd><strong>Hora:</strong> 11:00 a.m. a 12:00 p.m.</dd>
                                                <dd><strong>Lugar:</strong> Cine Domo Maloka</dd>
                                            </dl>
                                            <a href="https://docs.google.com/forms/d/e/1FAIpQLSdDdVZ2yguZ6pmVG4udbIeVFGmSjVxLfW78JmPr0sft-sK8kg/viewform">
                                                <div class='imagen-inscripcion zoom'>
                                                    <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-09-2022/inscripciones.gif' alt='banner animado inscripciones' title='banner animado inscripciones'>
                                                </div>
                                            </a>
                                            <a href="https://fb.watch/fY5qQrwOYq/" target="_blank" rel="noopener noreferrer">
                                                <div class='imagen-transmision zoom'>
                                                    <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-09-2022/transmision.gif' alt='transmisión en vivo' title='transmisión en vivo'>
                                                </div>
                                            </a>
                                            <dl>
                                                <dt>Modera:</dt>
                                                <dd><a data-toggle="modal" data-target="#modalOscarGomez"><strong>Oscar Julián Gómez</strong><br>Subsecretario de Política de Movilidad - Secretaría Distrital de Movilidad de Bogotá</a></dd>
                                            </dl>
                                            <dl>
                                                <dt>Panelistas:</dt>
                                                <dd>
                                                    <ul class="list-unstyled">
                                                        <a data-toggle="modal" data-target="#modalIvanLanza">
                                                            <li><strong>Iván de la Lanza</strong><br>Program Manager - The Global Designing Cities Initiative</li>
                                                        </a>
                                                        <a data-toggle="modal" data-target="#modalAgustinaCalatayud">
                                                            <li><strong>Agustina Calatayud</strong><br>Especialista líder de transporte BID</li>
                                                        </a>
                                                        <a data-toggle="modal" data-target="#modalGildaToro">
                                                            <li><strong>Gilda Toro</strong><br>Docente e Investigadora - Universidad de La Salle</li>
                                                        </a>
                                                        <a data-toggle="modal" data-target="#modalCarlosSoto">
                                                            <li><strong>Jesús Carlos Soto</strong><br>Director de Movilidad y Transporte de Guadalajara </li>
                                                        </a>


                                                    </ul>
                                                </dd>
                                            </dl>

                                        </div>
                                    </div>
                                </div>
                                <!-- /#fin _actividad5 -->

                                <!-- collapse_actividad6 -->
                                <div class='panel panel-default'>
                                    <div class='panel-heading' role='tab' id='heading_actividad6'>
                                        <h4 class='panel-title'>
                                            <a role='button' data-toggle='collapse' data-parent='#accordion_dia3' href='#collapse_actividad6' aria-expanded='true' aria-controls='collapse_actividad6'>
                                                <small>Actividad en Vía</small><br>Voy seguro en el Transporte Público
                                            </a>
                                        </h4>
                                    </div>
                                    <div id='collapse_actividad6' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_actividad6'>
                                        <div class='panel-body'>
                                            <p>El nuevo operador de servicio público de Bogotá ‘La Rolita’ realizará actividades de sensibilización en seguridad vial sobre los riesgos viales que se pueden presentar en la interacción de vehículos de gran tamaño como los del SITP con los demás actores viales; esto, a través de actividades lúdico pedagógicas como juego de roles, identificación de puntos ciegos y pista de pericia asumiendo el rol de ciclistas.</p>
                                            <dl>
                                                <dd><strong>Hora:</strong> 3:00 pm a 5:00 pm</dd>
                                                <dd><strong>Lugar:</strong> Patio Operador Distrital de Transporte S.A.S ‘La Rolita´, Calle 59A Sur # 76A-82 - Localidad Ciudad Bolívar</dd>
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                                <!-- /#fin _actividad6 -->




                            </div>
                            <!-- /#fin _dia3 -->
                        </div>
                    </div>
                    <!-- Fin dia 3 - martes 4 de octubre  -->

                    <!-- dia 4 - miercoles 5 de octubre  -->
                    <div class="tab-pane" id="dia4">

                        <div class="box-content">
                            <!-- collapse_dia4 -->
                            <div class='panel-group' id='accordion_dia4' role='tablist ' aria-multiselectable='true'>

                                <!-- collapse_actividad7 -->
                                <div class='panel panel-default'>
                                    <div class='panel-heading' role='tab' id='heading_actividad7'>
                                        <h4 class='panel-title'>
                                            <a role='button' data-toggle='collapse' data-parent='#accordion_dia4' href='#collapse_actividad7' aria-expanded='true' aria-controls='collapse_actividad7'>
                                                <small>Panel</small><br>Ciudades seguras para niños y niñas: ¿Cómo estamos protegiendo a los niños en el Sistema de movilidad?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id='collapse_actividad7' class='panel-collapse collapse in' role='tabpanel' aria-labelledby='heading_actividad7'>
                                        <div class='panel-body'>
                                            <p>Las nuevas dinámicas de movilidad de las ciudades, transformadas por la pandemia mundial, han influido en la forma en que las familias se transportan y en especial las niñas, niños y adolescentes. Ofrecer un espacio para la movilidad segura, requiere de iniciativas que involucren a la comunidad educativa, que generen un ámbito institucional que priorice la movilidad escolar y que articule esfuerzos para proteger a esta población vulnerable para lograr desplazamientos seguros.</p>
                                            <p>En este panel, expertos en movilidad discutirán sobre diferentes estrategias para la planeación de recorridos seguros con enfoque en infraestructura, institucionalidad y ciudadanía.</p>
                                            <dl>
                                                <dd><strong>Hora:</strong> 8:00 a.m a 9:00 a.m.</dd>
                                                <dd><strong>Lugar:</strong> Cine Domo Maloka</dd>
                                            </dl>
                                            <a href="https://docs.google.com/forms/d/e/1FAIpQLSdDdVZ2yguZ6pmVG4udbIeVFGmSjVxLfW78JmPr0sft-sK8kg/viewform">
                                                <div class='imagen-inscripcion zoom'>
                                                    <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-09-2022/inscripciones.gif' alt='banner animado inscripciones' title='banner animado inscripciones'>
                                                </div>
                                            </a>
                                            <a href="https://fb.watch/fZfTR3gGdI/" target="_blank" rel="noopener noreferrer">
                                                <div class='imagen-transmision zoom'>
                                                    <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-09-2022/transmision.gif' alt='transmisión en vivo' title='transmisión en vivo'>
                                                </div>
                                            </a>
                                            <dl>
                                                <dt>Modera:</dt>
                                                <dd><a data-toggle="modal" data-target="#modalNathalyPatinho"><strong>Nathaly Patiño</strong><br>Subdirectora de Gestión en Vía - Secretaría Distrital de Movilidad de Bogotá</a></dd>
                                            </dl>
                                            <dl>
                                                <dt>Panelistas:</dt>
                                                <dd>
                                                    <ul class="list-unstyled">

                                                        <!-- <a data-toggle="modal" data-target="#modalMJosePessano">
                                                            <li><strong>María José Pessano</strong><br>Dir. Ejecutiva Fundación Gonzalo Rodríguez</li>
                                                        </a> -->
                                                        <a data-toggle="modal" data-target="#modalJavierMorales">
                                                            <li><strong>Javier Morales Jácome</strong><br>Dir. Alianzas y Cooperación - Fundación Casa de la Infancia</li>
                                                        </a>
                                                        <a data-toggle="modal" data-target="#modalAlfredoAlbornoz">
                                                            <li><strong>Alfredo Albornoz Guerrero</strong><br>Gerente General Touring & Automóvil Club de Colombia - FIA FOUNDATION </li>
                                                        </a>
                                                        <a data-toggle="modal" data-target="#modalMariaRamirez">
                                                            <li><strong>María Fernanda Ramírez</strong><br>Líder de movilidad sostenible y segura - Despacio</li>
                                                        </a>
                                                        <a data-toggle="modal" data-target="#modalSusanGaleano">
                                                            <li><strong>Susan Galeano Vásquez</strong><br> Jefe de Gestión Regional - Red PaPaz</li>
                                                        </a>

                                                    </ul>
                                                </dd>
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                                <!-- /#fin _actividad7 -->

                                <!-- collapse_actividad8 -->
                                <div class='panel panel-default'>
                                    <div class='panel-heading' role='tab' id='heading_actividad8'>
                                        <h4 class='panel-title'>
                                            <a role='button' data-toggle='collapse' data-parent='#accordion_dia4' href='#collapse_actividad8' aria-expanded='true' aria-controls='collapse_actividad8'>
                                                Campamento Promotores Escolares de Seguridad Vial
                                            </a>
                                        </h4>
                                    </div>
                                    <div id='collapse_actividad8' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_actividad8'>
                                        <div class='panel-body'>
                                            <p>Este evento tiene como objetivo brindar a los Promotores Escolares en Seguridad Vial, espacios de fortalecimiento sobre seguridad vial y visibilización de sus acciones de sensibilización y promoción de la seguridad vial en el contexto escolar. En este espacio se acoge a estudiantes interesados en orientar, informar, sensibilizar y promover la seguridad vial en sus colegios.</p>
                                            <p>Además se fomenta el desarrollo de líderes y agentes dinamizadores que inspiren a los demás estudiantes, docentes y directivos para que se concienticen y desarrollen competencias de cultura para la movilidad en sus recorridos.</p>
                                            <dl>
                                                <dd><strong>Hora:</strong> 8:00 a.m. a 5:00 p.m.</dd>
                                                <dd><strong>Lugar:</strong> Plazoleta occidental de Maloka</dd>
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                                <!-- /#fin _actividad8 -->

                                <!-- collapse_actividad9 -->
                                <div class='panel panel-default'>
                                    <div class='panel-heading' role='tab' id='heading_actividad9'>
                                        <h4 class='panel-title'>
                                            <a role='button' data-toggle='collapse' data-parent='#accordion_dia4' href='#collapse_actividad9' aria-expanded='true' aria-controls='collapse_actividad9'>
                                                <small>Panel</small><br>Cambios de comportamientos riesgosos en la vía a través de estrategias de control, educación y comunicación.
                                            </a>
                                        </h4>
                                    </div>
                                    <div id='collapse_actividad9' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_actividad9'>
                                        <div class='panel-body'>

                                            <p>En este panel, se compartirán experiencias exitosas en las que han participado los expertos invitados, para dar una perspectiva global sobre el tema, aportando al diseño de nuevas acciones basadas en la importancia de la educación, la comunicación y el control.</p>
                                            <p>Con el apoyo de la Iniciativa Bloomberg para la Seguridad Vial Mundial, la Secretaría de Movilidad ha desarrollado diferentes estrategias de comunicación para persuadir a los diferentes actores viales en el mejoramiento de su comportamiento en la vía, y concientizar sobre los diferentes factores de riesgo.</p>
                                            <dl>
                                                <dd><strong>Hora:</strong> 9:00 a.m. a 10:30 a.m.</dd>
                                                <dd><strong>Lugar:</strong> Cine Domo Maloka</dd>
                                            </dl>
                                            <a href="https://docs.google.com/forms/d/e/1FAIpQLSdDdVZ2yguZ6pmVG4udbIeVFGmSjVxLfW78JmPr0sft-sK8kg/viewform">
                                                <div class='imagen-inscripcion zoom'>
                                                    <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-09-2022/inscripciones.gif' alt='banner animado inscripciones' title='banner animado inscripciones'>
                                                </div>
                                            </a>
                                            <a href="https://fb.watch/fZfTR3gGdI/" target="_blank" rel="noopener noreferrer">
                                                <div class='imagen-transmision zoom'>
                                                    <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-09-2022/transmision.gif' alt='transmisión en vivo' title='transmisión en vivo'>
                                                </div>
                                            </a>
                                            <dl>
                                                <dt>Modera:</dt>
                                                <a data-toggle="modal" data-target="#modalFernandaCardenas">
                                                    <dd><strong>María Fernanda Cárdenas</strong><br>Gerente Senior de Comunicaciones Vital Strategies
                                                </a>

                                                </dd>
                                            </dl>
                                            <dl>
                                                <dt>Panelistas:</dt>
                                                <dd>
                                                    <ul class="list-unstyled">
                                                        <a data-toggle="modal" data-target="#modalFeyitaDedyaba">
                                                            <li><strong>Feyita Dedgaba</strong><br>Directora ejecutiva adjunta - Servicio del Fondo de Seguros y Seguridad Vial de Etiopía</li>
                                                        </a>
                                                        <a data-toggle="modal" data-target="#modalDonaldFulbright">
                                                            <li><strong>Donald Fulbright</strong><br> División de Programas de la Asociación Internacional de Jefes de Policía (IACP)</li>
                                                        </a>
                                                        <a data-toggle="modal" data-target="#modalKristiSaporito">
                                                            <li><strong>Kristy Saporito</strong><br> Gerente Senior de Comunicaciones para la Seguridad Vial y Registro Civil de Vital Strategies</li>
                                                        </a>
                                                        <a data-toggle="modal" data-target="#modalNicolasCorreal">
                                                            <li><strong>Nicolas Correal</strong><br> Subsecretario de Gestión de la Movilidad SDM</li>
                                                        </a>
                                                        <a data-toggle="modal" data-target="#modalPabloBocarejo">
                                                            <li><strong>Juan Pablo Bocarejo</strong><br> Profesor Asociado - Universidad de los Andes / Proyecto ‘Conduce a 50 Vive al 100’</li>
                                                        </a>
                                                        <a data-toggle="modal" data-target="#modalAndresContento">
                                                            <li><strong>Andrés Contento Muñoz</strong><br>Jefe Oficina Asesora de Comunicaciones y Cultura para la Movilidad</li>
                                                        </a>

                                                    </ul>
                                                </dd>
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                                <!-- /#fin _actividad9 -->

                                <!-- collapse_actividad10 -->
                                <div class='panel panel-default'>
                                    <div class='panel-heading' role='tab' id='heading_actividad10'>
                                        <h4 class='panel-title'>
                                            <a role='button' data-toggle='collapse' data-parent='#accordion_dia4' href='#collapse_actividad10' aria-expanded='true' aria-controls='collapse_actividad10'>
                                                <small>Actividad en vía</small><br>Plan piloto para mejorar el espacio público peatonal en el INEM de Kennedy
                                        </h4>
                                        </a>
                                        </h4>
                                    </div>
                                    <div id='collapse_actividad10' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_actividad10'>
                                        <div class='panel-body'>
                                            <p>La Secretaría de Movilidad busca generar espacios más seguros para la movilidad de la población escolar, y esta estrategia hace parte del Proyecto bandera ‘Niñas y Niños Primero’, que junto con la Secretaría de Educación garantiza el acceso y permanencia en el sistema de educación de esta población.</p>
                                            <p>Este plan piloto, además coincide con el <strong>Día Mundial de caminar y montar bici al colegio,</strong> que busca promover el desplazamiento de los estudiantes a sus colegios en modos sostenibles.</p>
                                            <dl>
                                                <dd><strong>Hora:</strong> 11:00 a.m. a 12:30 m</dd>
                                                <dd><strong>Lugar:</strong> INEM Kennedy</dd>
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                                <!-- /#fin _actividad10 -->

                                <!-- collapse_actividad11 -->
                                <div class='panel panel-default'>
                                    <div class='panel-heading' role='tab' id='heading_actividad11'>
                                        <h4 class='panel-title'>
                                            <a role='button' data-toggle='collapse' data-parent='#accordion_dia4' href='#collapse_actividad11' aria-expanded='true' aria-controls='collapse_actividad11'>
                                                <small>Panel</small><br>Fortaleciendo la atención y la comprensión de las víctimas por siniestros viales
                                            </a>
                                        </h4>
                                    </div>
                                    <div id='collapse_actividad11' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_actividad11'>
                                        <div class='panel-body'>

                                            <p>En 2021 en Bogotá se registraron alrededor de 18 mil víctimas directas entre lesionados y fallecidos y un número de víctimas indirectas desconocido entre familiares, parejas, y demás personas involucradas en el incidente de tránsito.</p>
                                            <p>Las lesiones o la pérdida de la vida de una persona por un siniestro vial, conlleva diferentes consecuencias que pueden llegar a abarcar otros aspectos como la pérdida del trabajo, dificultades de reinserción social, problemas psicológicos y jurídicos, además de las dificultades que deben enfrentar los familiares de las víctimas.</p>
                                            <p>En este sentido, el panel busca ampliar la discusión sobre la importancia de la atención a las víctimas de siniestros viales y cómo Bogotá es referente en América Latina con el <a href="https://www.movilidadbogota.gov.co/web/ORVI" target="_blank" rel="noopener noreferrer">Centro de Orientación para Víctimas de Siniestros Viales.</a></p>
                                            <dl>
                                                <dd><strong>Hora:</strong> 11:00 a.m. a 12:00 m.</dd>
                                                <dd><strong>Lugar:</strong> Cine Domo Maloka</dd>
                                            </dl>
                                            <a href="https://docs.google.com/forms/d/e/1FAIpQLSdDdVZ2yguZ6pmVG4udbIeVFGmSjVxLfW78JmPr0sft-sK8kg/viewform">
                                                <div class='imagen-inscripcion zoom'>
                                                    <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-09-2022/inscripciones.gif' alt='banner animado inscripciones' title='banner animado inscripciones'>
                                                </div>
                                            </a>
                                            <a href="https://fb.watch/fZqG6dl4Bf/" target="_blank" rel="noopener noreferrer">
                                                <div class='imagen-transmision zoom'>
                                                    <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-09-2022/transmision.gif' alt='transmisión en vivo' title='transmisión en vivo'>
                                                </div>
                                            </a>
                                            <dl>
                                                <dt>Modera:</dt>
                                                <a data-toggle="modal" data-target="#modalAdrianaIza">
                                                    <dd><strong>Adriana Iza</strong><br>Subsecretaria de Servicios a la ciudadanía - Secretaria Distrital de Movilidad de Bogotá </i></dd>
                                                </a>
                                            </dl>
                                            <dl>
                                                <dt>Panelistas:</dt>
                                                <dd>
                                                    <ul class="list-unstyled">
                                                        <a data-toggle="modal" data-target="#modalIlseGonzalez">
                                                            <li><strong>Ilse González Martínez</strong><br>Delegación Mexicana del Observatorio de criminología vial</li>
                                                        </a>
                                                        <a data-toggle="modal" data-target="#modalFernandaTorres">
                                                            <li><strong>Fernanda Torres</strong><br>Fundadora fundación Julián Esteban</li>
                                                        </a>
                                                        <a data-toggle="modal" data-target="#modalMagnoliaBallesteros">
                                                            <li><strong>Magnolia del Pilar Ballesteros</strong><br>Directora del grupo de investigación estilo de vida y desarrollo humano – UNAL y Coordinadora del espacio de orientación psicológica - ORVI</li>
                                                        </a>
                                                        <a data-toggle="modal" data-target="#modalLuisRamirez">
                                                            <li><strong>Luis Fernando Ramírez Contreras </strong><br>Ex-magistrado Tribunal Superior de Bogotá</li>
                                                        </a>

                                                    </ul>
                                                </dd>
                                            </dl>

                                        </div>
                                    </div>
                                </div>
                                <!-- /#fin _actividad11 -->

                            </div>
                            <!-- /#fin _dia4 -->
                        </div>

                    </div>
                    <!-- Fin dia 4 - miercoles 5 de octubre  -->

                    <!-- dia 5 - jueves 6 de octubre  -->
                    <div class="tab-pane" id="dia5">

                        <div class="box-content">
                            <!-- collapse_dia5 -->
                            <div class='panel-group' id='accordion_dia5' role='tablist ' aria-multiselectable='true'>

                                <!-- collapse_dia4_1 -->
                                <div class='panel panel-default'>
                                    <div class='panel-heading' role='tab' id='heading_dia4_1'>
                                        <h4 class='panel-title'>
                                            <a role='button' data-toggle='collapse' data-parent='#accordion_dia5' href='#collapse_dia4_1' aria-expanded='true' aria-controls='collapse_dia4_1'>
                                                <small>Panel</small><br>¿Cómo estamos en siniestralidad vial de motociclistas? - Reporte técnico
                                            </a>
                                        </h4>
                                    </div>
                                    <div id='collapse_dia4_1' class='panel-collapse collapse in' role='tabpanel' aria-labelledby='heading_dia4_1'>
                                        <div class='panel-body'>

                                            <p>La siniestralidad vial en los motociclistas, ha sido una preocupación de diversos organismos que trabajan por la seguridad vial de los usuarios de este medio de transporte, dadas las características de este vehículo como el bajo costo y la eficiencia del combustible, han hecho que la motocicleta predomine en la región. En este espacio, Vital Strategies, El Banco InterAmericano de Desarrollo y la Universidad Johns Hopkins, presentan los resultados de ejercicios académicos en el análisis de este fenómeno.</p>
                                            <dl>
                                                <dd><strong>Hora:</strong> 8:00 a.m. a 9:00 a.m.</dd>
                                                <dd><strong>Lugar:</strong> Cine Domo Maloka</dd>
                                            </dl>
                                            <a href="https://docs.google.com/forms/d/e/1FAIpQLSdDdVZ2yguZ6pmVG4udbIeVFGmSjVxLfW78JmPr0sft-sK8kg/viewform">
                                                <div class='imagen-inscripcion zoom'>
                                                    <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-09-2022/inscripciones.gif' alt='banner animado inscripciones' title='banner animado inscripciones'>
                                                </div>
                                            </a>
                                            <a href="https://fb.watch/f_AmbantbK/" target="_blank" rel="noopener noreferrer">
                                                <div class='imagen-transmision zoom'>
                                                    <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-09-2022/transmision.gif' alt='transmisión en vivo' title='transmisión en vivo'>
                                                </div>
                                            </a>
                                            <dl>
                                                <dt>Modera:</dt>
                                                <a data-toggle="modal" data-target="#modalEzequielDantas">
                                                    <dd><strong>Ezequiel Dantas</strong><br>Asesor Técnico Regional para Vigilancia de Resultados de Seguridad Vial - Vital Strategies</i></dd>
                                                </a>
                                            </dl>
                                            <dl>
                                                <dt>Panelistas:</dt>
                                                <dd>
                                                    <ul class="list-unstyled">
                                                        <a data-toggle="modal" data-target="#modalNataliaAriza">
                                                            <li><strong>Natalia Ariza Donado</strong><br>Especialista en Transporte- Banco Interamericano de Desarrollo</li>
                                                        </a>
                                                        <a data-toggle="modal" data-target="#modalAndresVecino">
                                                            <li><strong>Andrés Vecino</strong><br>Científico asociado - Departamento Internacional de Salud, Universidad Johns Hopkins</li>
                                                        </a>
                                                        <a data-toggle="modal" data-target="#modalClaudiaAdriazola">
                                                            <li><strong>Claudia Adriazola-Steil</strong><br>Directora Global de Salud y Seguridad Vial - Centro Ross de WRI para Ciudades Sustentables</li>
                                                        </a>

                                                    </ul>
                                                </dd>
                                            </dl>


                                        </div>
                                    </div>
                                </div>
                                <!-- /#fin _dia4_1 -->

                                <!-- collapse_dia4_2 -->
                                <div class='panel panel-default'>
                                    <div class='panel-heading' role='tab' id='heading_dia4_2'>
                                        <h4 class='panel-title'>
                                            <a role='button' data-toggle='collapse' data-parent='#accordion_dia5' href='#collapse_dia4_2' aria-expanded='true' aria-controls='collapse_dia4_2'>
                                                <small>Panel</small><br>¿Qué está pasando con la seguridad vial de los motociclistas en la región?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id='collapse_dia4_2' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_dia4_2'>
                                        <div class='panel-body'>

                                            <p>El aumento del uso de la motocicleta, la preferencia de este medio de transporte individual y la prevalencia de comportamientos riesgosos por parte de los conductores de estos vehículos, han sido factores determinantes para el aumento de muertes y lesiones graves para este actor vial en la región.</p>
                                            <p>En este espacio, expertos internacionales compartirán sus experiencias, preocupaciones, lecciones aprendidas y desafíos para hacerle frente a esta nueva coyuntura que ha encendido las alertas de las autoridades del sector transporte en el continente.</p>
                                            <dl>
                                                <dd><strong>Hora:</strong> 9:00 a.m. a 10:00 a.m.</dd>
                                                <dd><strong>Lugar:</strong> Cine Domo Maloka</dd>
                                            </dl>
                                            <a href="https://docs.google.com/forms/d/e/1FAIpQLSdDdVZ2yguZ6pmVG4udbIeVFGmSjVxLfW78JmPr0sft-sK8kg/viewform">
                                                <div class='imagen-inscripcion zoom'>
                                                    <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-09-2022/inscripciones.gif' alt='banner animado inscripciones' title='banner animado inscripciones'>
                                                </div>
                                            </a>
                                            <a href="https://fb.watch/f_AmbantbK/" target="_blank" rel="noopener noreferrer">
                                                <div class='imagen-transmision zoom'>
                                                    <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-09-2022/transmision.gif' alt='transmisión en vivo' title='transmisión en vivo'>
                                                </div>
                                            </a>
                                            <dl>
                                                <dt>Modera:</dt>
                                                <a data-toggle="modal" data-target="#modalEzequielDantas">
                                                    <dd><strong>Ezequiel Dantas</strong><br>Asesor Técnico Regional para Vigilancia de Resultados de Seguridad Vial - Vital Strategies</dd>
                                                </a>
                                            </dl>
                                            <dl>
                                                <dt>Panelistas:</dt>
                                                <dd>
                                                    <ul class="list-unstyled">
                                                        <a data-toggle="modal" data-target="#modalNathalyTorregroza">
                                                            <li><strong>Nathaly Torregroza</strong><br>Jefe de la Oficina Seguridad Vial - Secretaría de Movilidad de Bogotá</li>
                                                        </a>
                                                        <a data-toggle="modal" data-target="#modalConstanzaDelon">
                                                            <li><strong>Constanza Delón</strong><br>Dir. Seguridad Vial y Seguimiento a la Información - Secretaría de Movilidad de la Ciudad de México</li>
                                                        </a>
                                                        <a data-toggle="modal" data-target="#modalJesusCarlos">
                                                            <li><strong>Jesús Carlos Soto</strong><br>Director de Movilidad y Transporte de Guadalajara</li>
                                                        </a>
                                                        <a data-toggle="modal" data-target="#modalNataliaAriza">
                                                            <li><strong>Natalia Ariza Donado</strong><br>Especialista en Transporte- Banco Interamericano de Desarrollo</li>
                                                        </a>
                                                        <a data-toggle="modal" data-target="#modalClaudiaAdriazola">
                                                            <li><strong>Claudia Adriazola-Steil</strong><br>Directora Global de Salud y Seguridad Vial - Centro Ross de WRI para Ciudades Sustentables</li>
                                                        </a>
                                                        <a data-toggle="modal" data-target="#modalAndresVecino">
                                                            <li><strong>Andrés Vecino</strong><br>Científico asociado - Departamento Internacional de Salud, Universidad Johns Hopkins</li>
                                                        </a>

                                                    </ul>
                                                </dd>
                                            </dl>

                                        </div>
                                    </div>
                                </div>
                                <!-- /#fin _dia4_2 -->

                                <!-- collapse_dia4_3 -->
                                <div class='panel panel-default'>
                                    <div class='panel-heading' role='tab' id='heading_dia_3'>
                                        <h4 class='panel-title'>
                                            <a role='button' data-toggle='collapse' data-parent='#accordion_dia5' href='#collapse_dia4_3' aria-expanded='true' aria-controls='collapse_dia4_3'>
                                                <small>Lanzamiento</small><br>Campaña ‘Un Pedido por la Vida’ enfocada a ciclistas domiciliarios
                                            </a>
                                        </h4>
                                    </div>
                                    <div id='collapse_dia4_3' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_dia_3'>
                                        <div class='panel-body'>

                                            <p>A partir del <strong> ACUERDO 749 DE 2019</strong>, por el cual se establecen lineamientos para promover buenas conductas viales y el uso apropiado del espacio público por parte de los domiciliarios en bicicleta en Bogotá, la Secretaría de Movilidad lanzó en 2020 <strong>la campaña ‘Un Pedido por la Vida’</strong> inicialmente dirigida para motociclistas. En esta ocasión, la campaña se lanza en una segunda fase enfocada a ciclistas, con la que se busca generar en esta población mejores comportamientos a la hora de desarrollar su labor de domiciliarios en bicicleta.</p>
                                            <dl>
                                                <dd><strong>Hora:</strong> 10:00 a.m. a 11:00 a.m.</dd>
                                                <dd><strong>Lugar:</strong> Plazoleta de la Calle 85 con Carrera 15</dd>
                                            </dl>
                                            <a href="" target="_blank" rel="noopener noreferrer">
                                                <div class='imagen-transmision zoom'>
                                                    <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-09-2022/transmision.gif' alt='transmisión en vivo' title='transmisión en vivo'>
                                                </div>
                                            </a>

                                        </div>
                                    </div>
                                </div>
                                <!-- /#fin _dia4_3 -->

                                <!-- collapse4_4 -->
                                <div class='panel panel-default'>
                                    <div class='panel-heading' role='tab' id='heading4_4'>
                                        <h4 class='panel-title'>
                                            <a role='button' data-toggle='collapse' data-parent='#accordion_dia5' href='#collapse4_4' aria-expanded='true' aria-controls='collapse4_4'>
                                                <small>Panel</small><br>Mesa de gobernanza para la seguridad vial y palabras de cierre
                                            </a>
                                        </h4>
                                    </div>
                                    <div id='collapse4_4' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading4_4'>
                                        <div class='panel-body'>

                                            <p>La Mesa de Gobernanza será un espacio de diálogo para promover la articulación de estrategias encaminadas a reducir la siniestralidad vial con base en las nuevas disposiciones normativas a nivel nacional, y los retos que implica el cumplimiento de los objetivos de la II Década de Acción para la Seguridad Vial.</p>
                                            <p>Estará abierta a todas las ciudades, empresas, colectivos, grupos de interés, academia, entre otros, que estén dispuestos a participar de manera proactiva y permanente, en la generación de espacios para garantizar la implementación de acciones para el nuevo Plan Nacional de Seguridad Vial.</p>
                                            <p>La mesa servirá de marco para la presentación de las principales conclusiones del seminario internacional de seguridad vial.</p>
                                            <dl>
                                                <dd><strong>Hora:</strong> 10:30 a.m. a 12:00 m.</dd>
                                            </dl>
                                            <dl>
                                                <dt>Modera:</dt>
                                                <a data-toggle="modal" data-target="#modalMaryBottagisio">
                                                    <li><strong>Mary Bottagisio</strong><br>Directora Ejecutiva - Liga Contra la Violencia Vial</li>
                                                </a>
                                            </dl>
                                            <dl>
                                                <dt>Panelistas:</dt>
                                                <dd>
                                                    <ul class="list-unstyled">
                                                        <a data-toggle="modal" data-target="#modalLuisLota">
                                                            <li><strong>Luis Felipe Lota</strong><br>Director de la Agencia Nacional de Seguridad Vial </li>
                                                        </a>
                                                        <a data-toggle="modal" data-target="#modalVictorPiedrahita">
                                                            <li><strong>Victor Hugo Piedrahita</strong><br>Secretario de movilidad Medelín</li>
                                                        </a>
                                                        <a data-toggle="modal" data-target="#modalMarSolanilla">
                                                            <li><strong>María del Mar Solanilla</strong><br>Subsecretaria de Movilidad Sostenible - Secretaría de Movilidad de Cali</li>
                                                        </a>
                                                        <a data-toggle="modal" data-target="#modalIvanDuran">
                                                            <li><strong>Iván Rodrigues Durán</strong><br>Director de Tránsito Bucaramanga</li>
                                                        </a>
                                                        <a data-toggle="modal" data-target="#modalDiegoLaserna">
                                                            <li><strong>Diego Laserna</strong><br>Concejal de Bogotá</li>
                                                        </a>

                                                    </ul>
                                                </dd>
                                            </dl>

                                        </div>
                                    </div>
                                </div>
                                <!-- /#fin 4_4 -->
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

                                <!-- collapse_dia6_1 -->
                                <div class='panel panel-default'>
                                    <div class='panel-heading' role='tab' id='heading_dia6_1'>
                                        <h4 class='panel-title'>
                                            <a role='button' data-toggle='collapse' data-parent='#accordion_dia6' href='#collapse_dia6_1' aria-expanded='true' aria-controls='collapse_dia6_1'>
                                                <strong>Jornada de Seguridad Vial en Corabastos</strong>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id='collapse_dia6_1' class='panel-collapse collapse in' role='tabpanel' aria-labelledby='heading_dia6_1'>
                                        <div class='panel-body'>
                                            <p>La Central de Corabastos es la plaza de mercado más grande de Colombia y la segunda más grande de Latinoamérica, ubicada en la localidad de Kennedy, actualmente registra algunos de los índices más altos de siniestralidad vial en Bogotá. Por esto, la Secretaría de Movilidad desarrollará una actividad pedagógica con los conductores de vehículos pesados y ciclistas, como principales actores que interactúan en la vía.</p>
                                            <p>Además, se hará presencia en el sector con el propósito de realizar acciones que mejoren las maniobras de descenso y ascenso de pasajeros de Transporte Intermunicipal y el uso del espacio público circundante a Corabastos.</p>
                                            <dl>
                                                <dd><strong>Hora:</strong> 6:00 a.m. a 12:00 m.</dd>
                                                <dd><strong>Lugar:</strong> Corabastos</dd>
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                                <!-- /#fin _dia6_1 -->

                                <!-- collapse_dia6_2 -->
                                <div class='panel panel-default'>
                                    <div class='panel-heading' role='tab' id='heading_dia6_2'>
                                        <h4 class='panel-title'>
                                            <a role='button' data-toggle='collapse' data-parent='#accordion_dia6' href='#collapse_dia6_2' aria-expanded='true' aria-controls='collapse_dia6_2'>
                                                <strong>Reconocimiento de buenas practicas</strong>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id='collapse_dia6_2' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_dia6_2'>
                                        <div class='panel-body'>
                                            <p>Se presentarán y premiarán las mejores prácticas empresariales de seguridad vial y empresas salvavidas en moto que operan en Bogotá. Las prácticas premiadas serán aquellas que se puedan replicar y que contribuyan a la disminución de la siniestralidad vial en la ciudad.</p>
                                            <dl>
                                                <dd><strong>Hora:</strong> 8:00 a.m. a 12:00 m.</dd>
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                                <!-- /#fin _dia6_2 -->

                                <!-- collapse_dia6_3 -->
                                <div class='panel panel-default'>
                                    <div class='panel-heading' role='tab' id='heading_dia6_3'>
                                        <h4 class='panel-title'>
                                            <a role='button' data-toggle='collapse' data-parent='#accordion_dia6' href='#collapse_dia6_3' aria-expanded='true' aria-controls='collapse_dia6_3'>
                                                <strong>Reconocimiento a operadores del SITP </strong>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id='collapse_dia6_3' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_dia6_3'>
                                        <div class='panel-body'>
                                            <p>Reconocimiento a 200 conductores del Sistema Integrado de Transporte Público (SITP) en sus diversos componentes (Troncal/Dual, zonal y alimentación), por su excelente desempeño y su compromiso con la seguridad vial de la ciudad.</p>
                                            <dl>
                                                <dd><strong>Hora:</strong> 2:00 p.m. a 3:00 p.m.</dd>
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                                <!-- /#fin _dia6_3 -->

                                <!-- collapse_dia6_4 -->
                                <div class='panel panel-default'>
                                    <div class='panel-heading' role='tab' id='heading_dia6_4'>
                                        <h4 class='panel-title'>
                                            <a role='button' data-toggle='collapse' data-parent='#accordion_dia6' href='#collapse_dia6_4' aria-expanded='true' aria-controls='collapse_dia6_4'>
                                                <small>Actividad en vía</small><br><strong>Carpa Bar: Planea tu regreso a casa</strong>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id='collapse_dia6_4' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_dia6_4'>
                                        <div class='panel-body'>
                                            <p>La Secretaría de Movilidad instalará una carpa que simula un bar. Un espacio donde los transeúntes podrán vivir la experiencia de manejar bajo los efectos del alcohol o la embriaguez no alcohólica, con el fin de generar conciencia sobre esta grave conducta a la hora de conducir.</p>
                                            <dl>
                                                <dd><strong>Hora:</strong> 6:00 p.m. a 10:00 p.m.</dd>
                                                <dd><strong>Lugar:</strong> Plazoleta Calle 85 con Carrera 15</dd>
                                            </dl>

                                        </div>
                                    </div>
                                </div>
                                <!-- /#fin _dia6_4 -->

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
                padding: 5px 15px;
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

            .box-modals .modal-body {
                display: grid;
                gap: 10px;
                grid-auto-flow: dense;
                grid-template-columns: 1fr;
                grid-template-rows: auto;
                grid-template-areas:
                    'foto'
                    'texto'
                    'sub-close';
            }

            .box-modals .modal-body .foto {
                grid-area: foto;
                padding: 15px;
                background-color: #00000010;
            }

            .box-modals .modal-body .foto img {
                margin: auto;
                max-height: 250px;
                width: auto;
                border-radius: 5px;
            }

            .box-modals .modal-body .texto {
                grid-area: texto;
                padding: 0px 16px;
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
                background-color: #ffc600 !important;
                color: #252525;
                font-weight: 500;
            }

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
                <h3>Nuestros Aliados:</h3>
                <p>Durante el desarrollo de la XVI Semana de la Seguridad Vial: Ojos en las vías, salvando vidas; contamos con el apoyo de diferentes empresas, organizaciones nacionales e internacionales que nos acompañan en los eventos y lanzamientos de la semana, y que velan por la seguridad vial. A todos, un agradecimiento especial.</p>
            </div>
            <style>
                .box-wrp .box-empresas {
                    /* margin-top: 30px; */
                    grid-area: empresas;
                    background-color: #ffc600;

                }

                .box-wrp .box-empresas h3 {
                    /* font-size: 18px; */
                    font-weight: 700;
                    text-align: center;
                    line-height: 1.2;
                    color: rgba(25, 25, 25, 1);
                    padding: 16px;
                }

                .box-wrp .box-empresas p {
                    grid-area: resultados;
                    padding: 0px 15px 15px 15px;
                    font-size: 15px;
                    font-weight: 500;
                    text-align: justify;
                    line-height: 1.3;
                    color: rgba(25, 25, 25, 1);
                }
            </style>

            <!-- Carousel carousel -->
            <div class='box-carousel-empresas'>
                <div id='carousel' class='carousel slide' data-ride='carousel'>

                    <!-- Indicators -->
                    <!-- <ol class='carousel-indicators'>
                        <li data-target='#carousel' data-slide-to='0' class='active'></li>
                        <li data-target='#carousel' data-slide-to='1'></li>
                        <li data-target='#carousel' data-slide-to='2'></li>
                        <li data-target='#carousel' data-slide-to='3'></li>
                        <li data-target='#carousel' data-slide-to='4'></li>
                        <li data-target='#carousel' data-slide-to='5'></li>
                        <li data-target='#carousel' data-slide-to='6'></li>
                        <li data-target='#carousel' data-slide-to='7'></li>
                        <li data-target='#carousel' data-slide-to='8'></li>
                    </ol> -->

                    <!-- Wrapper for slides -->
                    <div class='carousel-inner'>
                        <div class='item'>
                            <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/26-09-2022/sv_recurso2.png' alt='logo La Rolita Operadora de Transporte'>
                            <p><small>Aliado</small></p>
                        </div>
                        <div class='item'>
                            <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/26-09-2022/sv_recurso4.png' alt='logo La Terminal'>
                            <p><small>Aliado</small></p>
                        </div>
                        <div class='item'>
                            <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/26-09-2022/sv_recurso3.png' alt='logo Maloka'>
                            <p><small>Aliado</small></p>
                        </div>
                        <!-- <div class='item'>
                            <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/26-09-2022/sv_recurso5.png' alt='logo Liga Contra la Violencia Vial'>
                            <p><small>Aliado</small></p>
                        </div> -->
                        <!-- <div class='item'>
                            <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/28-09-2022/sbcb_recurso15.png' alt='logo Diageo'>
                            <p><small>Aliado</small></p>
                        </div> -->
                        <div class='item active'>
                            <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/26-09-2022/sv_recurso1.png' alt='logo Bloomberg Philanthropies'>
                            <p><small>Aliado</small></p>
                        </div>
                        <div class='item'>
                            <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/26-09-2022/sv_recurso6.png' alt='logo Agencia Nacional de Seguridad Vial'>
                            <p><small>Aliado</small></p>
                        </div>
                        <div class='item'>
                            <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/26-09-2022/sv_recurso7.png' alt='logo Policia Nacional'>
                            <p><small>Aliado</small></p>
                        </div>
                        <div class='item'>
                            <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-09-2022/sv_recurso8.png' alt='logo Transmilenio'>
                            <p><small>Aliado</small></p>
                        </div>
                        <div class='item'>
                            <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/26-09-2022/sv_recurso9.png' alt='logo Metro Bogotá'>
                            <p><small>Aliado</small></p>
                        </div>
                        <div class='item'>
                            <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-09-2022/sv_recurso10.png' alt='logo ANDI'>
                            <p><small>Aliado</small></p>
                        </div>
                        <div class='item'>
                            <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/01-10-2022/recurso22.png' alt='logo ANDI'>
                            <p><small>Aliado</small></p>
                        </div>
                        <div class='item'>
                            <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-09-2022/sv_recurso11.png' alt='logo 3M'>
                            <p><small>Aliado</small></p>
                        </div>
                        <div class='item'>
                            <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-09-2022/sv_recurso12.png' alt='logo AKT Motos'>
                            <p><small>Aliado</small></p>
                        </div>
                        <div class='item'>
                            <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-09-2022/sv_recurso13.png' alt='logo Grupo UMA'>
                            <p><small>Aliado</small></p>
                        </div>
                        <div class='item'>
                            <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-09-2022/sv_recurso14.png' alt='logo Industrias JAPAN'>
                            <p><small>Aliado</small></p>
                        </div>
                        <div class='item'>
                            <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/28-09-2022/sbcb_recurso16.png' alt='logo Auteco'>
                            <p><small>Aliado</small></p>
                        </div>
                        <div class='item'>
                            <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/28-09-2022/sbcb_recurso17.png' alt='logo Hero'>
                            <p><small>Aliado</small></p>
                        </div>
                        <div class='item'>
                            <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/01-10-2022/recurso21.png' alt='logo Honda'>
                            <p><small>Aliado</small></p>
                        </div>
                        <div class='item'>
                            <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/28-09-2022/sbcb_recurso19.png' alt='logo Suzuki'>
                            <p><small>Aliado</small></p>
                        </div>
                        <div class='item'>
                            <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/28-09-2022/sbcb_recurso20.png' alt='logo Yamaha'>
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

    .seguridadVial {
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
        color: #252525 !important;
        background-color: #ffc600 !important;
    }

    .box-wrp .nav>li>a:focus,
    .nav>li>a:hover {
        color: #252525 !important;
    }

    .box-wrp .panel-default>.panel-heading {
        background-image: -webkit-linear-gradient(top, #f5f5f5 0, #e8e8e8 100%);
        background-image: -o-linear-gradient(top, #f5f5f5 0, #e8e8e8 100%);
        /*! background-image:-webkit-gradient(linear,left top,left bottom,from(#f5f5f5),to(#ffc600)); */
        background-image: none;
        filter: progid: DXImageTransform.Microsoft.gradient(startColorstr='#fff5f5f5', endColorstr='#ffe8e8e8', GradientType=0);
        background-repeat: repeat-x;
        background-color: #ffc600 !important;
    }

    .box-wrp .box-verticalTabs small {
        font-weight: 700 !important;
        color: #252525 !important;
    }

    .box-wrp a {
        color: #252525 !important;
    }


    /* bootstrap.min.css | https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css */

    .box-wrp .nav>li>a:focus,
    .nav>li>a:hover {
        font-weight: 600;
    }

    .box-wrp .nav>li>a {
        font-weight: 600;
    }

    /* En línea #3 | http://localhost:8000/2022/09/seguridadVial */

    .box-wrp .nav>li>a:focus,
    .nav>li>a:hover {
        font-weight: 600;
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


    /* IE9 */

    /*
    .seguridadVial [class*='col-'] {
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

    @media(max-width:767px) {}

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

    @media(min-width:992px) {}

    @media(min-width:1200px) {}
</style>
<!-- End Styles -->
