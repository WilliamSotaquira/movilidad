@extends('welcome')
@section('contenido')


    <!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin Fuente Montserrat -  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
    <!-- Set Wrapper -->
    <div class='container-fluid politicas'>
        <div class='box-wrp'>
            <div class='box-head'></div>

            <hr>
            <div class="box-collapse">

                <!-- collapse_politicas -->
                <div class='panel-group' id='accordion_politicas' role='tablist ' aria-multiselectable='true'>

                    <!-- collapse_lideradas -->
                    <div class='panel panel-primary'>
                        <div class='panel-heading ph-1' role='tab' id='heading_lideradas'>
                            <h4 class='panel-title'>
                                <a role='button' data-toggle='collapse' data-parent='#accordion_politicas'
                                    href='#collapse_lideradas' aria-expanded='true' aria-controls='collapse_lideradas'>
                                    Políticas públicas lideradas por la SDM
                                </a>
                            </h4>
                        </div>
                        <div id='collapse_lideradas' class='panel-collapse collapse' role='tabpanel'
                            aria-labelledby='heading_lideradas'>
                            <div class='panel-body'>

                                <!-- collapse_politicasLideradas -->
                                <div class='panel-group' id='accordion_politicasLideradas' role='tablist '
                                    aria-multiselectable='true'>

                                    <!-- collapse_polBicicleta -->
                                    <div class='panel panel-default'>
                                        <div class='panel-heading ph-2' role='tab' id='heading_polBicicleta'>
                                            <h4 class='panel-title'>
                                                <a role='button' data-toggle='collapse'
                                                    data-parent='#accordion_politicasLideradas'
                                                    href='#collapse_polBicicleta' aria-expanded='true'
                                                    aria-controls='collapse_polBicicleta'>
                                                    Política Pública de la Bicicleta
                                                </a>
                                            </h4>
                                        </div>
                                        <div id='collapse_polBicicleta' class='panel-collapse collapse' role='tabpanel'
                                            aria-labelledby='heading_polBicicleta'>
                                            <div class='panel-body'>
                                                <div class="box-bodyCollapse">
                                                    <dl>
                                                        <dt>Decreto que lo adopta:</dt>
                                                        <dd>Documento CONPES D.C 15 “POLÍTICA PÚBLICA DE LA BICICLETA
                                                            2021-2039” Publicado en el Registro Distrital No. 7085 de fecha
                                                            23 de marzo de 2021.</dd>
                                                    </dl>
                                                    <dl>
                                                        <dt>Vigencia de la Política:</dt>
                                                        <dd>2021-2039</dd>
                                                    </dl>
                                                    <dl>
                                                        <dd><strong>Objetivo:</strong> Mejorar las condiciones físicas,
                                                            socioeconómicas y culturales de la
                                                            ciudad para el uso y disfrute de la bicicleta.</dd>
                                                    </dl>
                                                    <dl>
                                                        <dd><strong>Objetivos específicos de la Política:</strong></dd>
                                                        <ul>
                                                            <li>“Más seguridad personal” - Optimizar las condiciones de
                                                                seguridad
                                                                personal para la ciudadanía que usa la bicicleta en Bogotá.
                                                            </li>
                                                            <li>“Mayor seguridad vial” - Proteger a los ciclistas de la
                                                                ciudad
                                                                frente a siniestros viales asociados al uso de la bicicleta.
                                                            </li>
                                                            <li>“Más y mejores viajes en bicicleta” - Mejorar la experiencia
                                                                de
                                                                viaje de los ciclistas en Bogotá.</li>
                                                            <li>“Más bici para todas y todos” - Fortalecer la cultura en
                                                                torno a la
                                                                bicicleta.</li>
                                                            <li>“Bogotá polo productor de la bicicleta” - Fortalecer las
                                                                actividades
                                                                económicas asociadas al uso y disfrute de la bicicleta.</li>
                                                        </ul>
                                                    </dl>
                                                    <dl>
                                                        <dt>Recursos de consulta:</dt>
                                                        <ul>
                                                            <li><a href="#" target="_blank"
                                                                    rel="noopener noreferrer">Matriz Plan de acción</a></li>
                                                            <li><a href="#" target="_blank"
                                                                    rel="noopener noreferrer">Informes cualitativo de
                                                                    seguimiento</a></li>
                                                            <li><a href="#" target="_blank"
                                                                    rel="noopener noreferrer">Documento CONPES 15</a></li>
                                                            <li><a href="https://www.movilidadbogota.gov.co/web/politica_publica_de_la_bicicleta"
                                                                    target="_blank" rel="noopener noreferrer">Sitio web -
                                                                    Política Publica de la Bicicleta</a></li>
                                                        </ul>
                                                    </dl>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- /#fin _polBicicleta -->

                                    <!-- collapse_polMovilidad -->
                                    <div class='panel panel-default'>
                                        <div class='panel-heading ph-2' role='tab' id='heading_polMovilidad'>
                                            <h4 class='panel-title'>
                                                <a role='button' data-toggle='collapse'
                                                    data-parent='#accordion_politicasLideradas'
                                                    href='#collapse_polMovilidad' aria-expanded='true'
                                                    aria-controls='collapse_polMovilidad'>
                                                    Política Pública de Movilidad
                                                </a>
                                            </h4>
                                        </div>
                                        <div id='collapse_polMovilidad' class='panel-collapse collapse' role='tabpanel'
                                            aria-labelledby='heading_polMovilidad'>
                                            <div class='panel-body'>

                                                <div class="box-bodyCollapse">
                                                    <dl>
                                                        <dt>Objetivo:</dt>
                                                        <dd>Hacer seguimiento a la Política
                                                            Pública de
                                                            Movilidad consolidando los reportes del sector movilidad y
                                                            presentándolos en
                                                            los comités correspondientes para tomar las decisiones a que
                                                            haya lugar.
                                                        </dd>
                                                    </dl>
                                                    <dl>
                                                        <dt>Lineamientos y/o Políticas de Operación</dt>
                                                        <dd>
                                                            <ul>
                                                                <li>El Plan Maestro de Movilidad vigente enmarca la Política
                                                                    Pública de
                                                                    Movilidad de acuerdo a las disposiciones del Plan de
                                                                    Ordenamiento
                                                                    Territorial - POT.</li>
                                                                <li>El seguimiento a la Política Pública de Movilidad, se
                                                                    realiza a
                                                                    través de la rendición del Informe del Acuerdo 223 de
                                                                    2006,
                                                                    el
                                                                    Comité Administrativo Intersectorial de Movilidad, el
                                                                    Comité
                                                                    Técnico
                                                                    Interinstitucional y los compromisos de cada entidad del
                                                                    sector en
                                                                    el Plan Distrital de Desarrollo - PDD que reportan en el
                                                                    sistema
                                                                    SEGPLAN.</li>
                                                                <li>La producción documental que se realice como sector y
                                                                    cuya
                                                                    información esté relacionada con el PDD debe contener
                                                                    los
                                                                    datos
                                                                    oficiales resultado de este procedimiento y conservar el
                                                                    sentido de
                                                                    la información inicialmente reportado.</li>
                                                                <li>La información de seguimiento al avance de las metas de
                                                                    producto del
                                                                    Plan de Desarrollo Distrital en el aplicativo SEGPLAN,
                                                                    por
                                                                    parte de
                                                                    las entidades del Sector Movilidad, es responsabilidad
                                                                    de
                                                                    cada una
                                                                    de ellas.</li>
                                                                <li>El documento PM01-PR05-F01 diligenciado y el informe del
                                                                    Acuerdo 223
                                                                    de 2016, se deben publicar en la intranet y en la página
                                                                    web
                                                                    de la
                                                                    entidad.</li>
                                                            </ul>
                                                        </dd>
                                                    </dl>
                                                    <dl>
                                                        <dt>Recursos de consulta:</dt>
                                                        <ul>
                                                            <li><a href="https://www.alcaldiabogota.gov.co/sisjur/normas/Norma1.jsp?i=20552"
                                                                    target="_blank" rel="noopener noreferrer">Acuerdo 223 de
                                                                    2006</a></li>
                                                            <li><a href="https://www.movilidadbogota.gov.co/web/plan-maestro-movilidad"
                                                                    target="_blank" rel="noopener noreferrer">Seguimiento a
                                                                    la Política Pública de Movilidad</a></li>
                                                            <li><a href="https://www.movilidadbogota.gov.co/intranet/Evaluaci%C3%B3n%20de%20Resultados"
                                                                    target="_blank" rel="noopener noreferrer">Seguimiento a
                                                                    la Política Pública de Movilidad</a></li>
                                                        </ul>
                                                    </dl>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /#fin _polMovilidad -->


                                </div>
                                <!-- /#fin _politicasLideradas -->

                            </div>
                        </div>
                    </div>
                    <!-- /#fin _lideradas -->

                    <!-- collapse_participa -->
                    <div class='panel panel-primary'>
                        <div class='panel-heading ph-1' role='tab' id='heading_participa'>
                            <h4 class='panel-title'>
                                <a role='button' data-toggle='collapse' data-parent='#accordion_politicas'
                                    href='#collapse_participa' aria-expanded='true' aria-controls='collapse_participa'>
                                    Políticas públicas en las que participa la SDM
                                </a>
                            </h4>
                        </div>
                        <div id='collapse_participa' class='panel-collapse collapse' role='tabpanel'
                            aria-labelledby='heading_participa'>
                            <div class='panel-body'>

                                <!-- collapse_polParticipa -->
                                <div class='panel-group' id='accordion_polParticipa' role='tablist '
                                    aria-multiselectable='true'>



                                    <!-- collapse_polRuralidad -->
                                    <div class='panel panel-default'>
                                        <div class='panel-heading ph-2' role='tab' id='heading_polRuralidad'>
                                            <h4 class='panel-title'>
                                                <a role='button' data-toggle='collapse'
                                                    data-parent='#accordion_polParticipa' href='#collapse_polRuralidad'
                                                    aria-expanded='true' aria-controls='collapse_polRuralidad'>
                                                    Política Pública de Ruralidad del Distrito Capital
                                                </a>
                                            </h4>
                                        </div>
                                        <div id='collapse_polRuralidad' class='panel-collapse collapse' role='tabpanel'
                                            aria-labelledby='heading_polRuralidad'>
                                            <div class='panel-body'>
                                                <div class="box-bodyCollapse">
                                                    <dl>
                                                        <dt>Vigencia:</dt>
                                                        <dd> 2007-2027</dd>
                                                    </dl>
                                                    <dl>
                                                        <dt>Entidad Líder de la Política:</dt>
                                                        <dd> Secretaría Distrital de Ambiente</dd>
                                                    </dl>
                                                    <dl>
                                                        <dt>Decreto que lo adopta:</dt>
                                                        <dd> Decreto 327 de 2007</dd>
                                                    </dl>
                                                    <dl>
                                                        <dt>Objetivo General de la Política:</dt>
                                                        <dd> Garantizar el desarrollo humano sostenible de las comunidades
                                                            rurales y la protección del patrimonio ambiental del Distrito
                                                            Capital, a través de una adecuada articulación entre los
                                                            ciudadanos,
                                                            la sociedad civil y las entidades del Distrito Capital.</dd>
                                                    </dl>
                                                    <dl>
                                                        <dt>Recursos de consulta:</dt>
                                                        <dd>
                                                            <ul>
                                                                <li><a
                                                                        href="http://ambientebogota.gov.co/eu/politica-publica-distrital-de-ruralidad">Sitio
                                                                        web - Política Pública Distrital de Ruralidad</a>
                                                                </li>
                                                            </ul>
                                                        </dd>
                                                    </dl>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /#fin _polRuralidad -->

                                    <!-- collapse_polEspacioPublico -->
                                    <div class='panel panel-default'>
                                        <div class='panel-heading ph-2' role='tab' id='heading_polEspacioPublico'>
                                            <h4 class='panel-title'>
                                                <a role='button' data-toggle='collapse'
                                                    data-parent='#accordion_polParticipa'
                                                    href='#collapse_polEspacioPublico' aria-expanded='true'
                                                    aria-controls='collapse_polEspacioPublico'>
                                                    Política Pública de Espacio Público
                                                </a>
                                            </h4>
                                        </div>
                                        <div id='collapse_polEspacioPublico' class='panel-collapse collapse'
                                            role='tabpanel' aria-labelledby='heading_polEspacioPublico'>
                                            <div class='panel-body'>
                                                <div class="box-bodyCollapse">
                                                    <dl>
                                                        <dt>Vigencia:</dt>
                                                        <dd>2019-2038</dd>
                                                    </dl>
                                                    <dl>
                                                        <dt>Entidad Líder de la Política:</dt>
                                                        <dd>Departamento Administrativo de la Defensoría de Espacio Público
                                                        </dd>
                                                    </dl>
                                                    <dl>
                                                        <dt>Decreto que lo adopta:</dt>
                                                        <dd>Decreto 327 de 2007</dd>
                                                    </dl>
                                                    <dl>
                                                        <dt>Objetivo General de la Política:</dt>
                                                        <dd>Aumentar la oferta cuantitativa y cualitativa de espacio público
                                                            de
                                                            Bogotá, garantizando su uso, goce y disfrute con acceso
                                                            universal y
                                                            la igualdad de oportunidades para toda la ciudadanía, reforzando
                                                            su
                                                            carácter estructurante como configurador del territorio y su
                                                            valoración ciudadana, con la implementación de acciones en las
                                                            líneas de acción de Generación, Recuperación y Sostenibilidad.
                                                        </dd>
                                                    </dl>
                                                    <dl>
                                                        <dt>Recursos de consulta:</dt>
                                                        <dd>
                                                            <ul>
                                                                <li><a
                                                                        href="https://observatorio.dadep.gov.co/politica-de-espacio-publico">Sitio
                                                                        web - Política Distrital de Espacio Público</a></li>
                                                            </ul>
                                                        </dd>
                                                    </dl>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /#fin _polEspacioPublico -->

                                    <!-- collapse_polSaludAmbiental -->
                                    <div class='panel panel-default'>
                                        <div class='panel-heading ph-2' role='tab' id='heading_polSaludAmbiental'>
                                            <h4 class='panel-title'>
                                                <a role='button' data-toggle='collapse'
                                                    data-parent='#accordion_polParticipa'
                                                    href='#collapse_polSaludAmbiental' aria-expanded='true'
                                                    aria-controls='collapse_polSaludAmbiental'>
                                                    Política Pública de Salud Ambiental
                                                </a>
                                            </h4>
                                        </div>
                                        <div id='collapse_polSaludAmbiental' class='panel-collapse collapse'
                                            role='tabpanel' aria-labelledby='heading_polSaludAmbiental'>
                                            <div class='panel-body'>
                                                <div class="box-bodyCollapse">
                                                    <dl>
                                                        <dt>Vigencia:</dt>
                                                        <dd>2011-2023</dd>
                                                    </dl>
                                                    <dl>
                                                        <dt>Entidad Líder de la Política:</dt>
                                                        <dd>Secretaría Distrital de Ambiente</dd>
                                                    </dl>
                                                    <dl>
                                                        <dt>Decreto que lo adopta:</dt>
                                                        <dd>Decreto 596 de 2011</dd>
                                                    </dl>
                                                    <dl>
                                                        <dt>Objetivo General de la Política:</dt>
                                                        <dd>Orientar la gestión para el mejoramiento de la salud ambiental
                                                            en el
                                                            territorio urbano y rural del Distrito Capital, mediante el
                                                            fortalecimiento institucional, el trabajo articulado de la
                                                            Administración y la construcción de espacios de coordinación,
                                                            investigación y acción participativa en las diferentes líneas de
                                                            intervención, que permitan una alta calidad de vida y de salud
                                                            para
                                                            todas las personas que en él habitan.</dd>
                                                    </dl>
                                                    <dl>
                                                        <dt>Recursos de consulta:</dt>
                                                        <dd>
                                                            <ul>

                                                                <li><a target="_blank" rel="noopener noreferrer"
                                                                        href="https://ambientebogota.gov.co/es/web/sda/politica-distrital-de-salud-ambiental">Sitio
                                                                        web - Política Distrital de Salud Ambiental para
                                                                        Bogotá
                                                                        D.C. 2011-2023</a></li>
                                                            </ul>
                                                        </dd>
                                                    </dl>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /#fin _polSaludAmbiental -->

                                    <!-- collapse_polServiciosSexuales -->
                                    <div class='panel panel-default'>
                                        <div class='panel-heading ph-2' role='tab' id='heading_polServiciosSexuales'>
                                            <h4 class='panel-title'>
                                                <a role='button' data-toggle='collapse'
                                                    data-parent='#accordion_polParticipa'
                                                    href='#collapse_polServiciosSexuales' aria-expanded='true'
                                                    aria-controls='collapse_polServiciosSexuales'>
                                                    Política Pública de Servicios Sexuales Pagados
                                                </a>
                                            </h4>
                                        </div>
                                        <div id='collapse_polServiciosSexuales' class='panel-collapse collapse'
                                            role='tabpanel' aria-labelledby='heading_polServiciosSexuales'>
                                            <div class='panel-body'>
                                                <div class="box-bodyCollapse">
                                                    <dl>
                                                        <dt>Vigencia:</dt>
                                                        <dd>2020-2029</dd>
                                                    </dl>
                                                    <dl>
                                                        <dt>Entidad Líder de la Política:</dt>
                                                        <dd>Secretaría Distrital de la Mujer</dd>
                                                    </dl>
                                                    <dl>
                                                        <dt>Decreto que lo adopta:</dt>
                                                        <dd>Resolución 0490 de 2015 /CONPES D.C 11 / 2019</dd>
                                                    </dl>
                                                    <dl>
                                                        <dt>Objetivo General de la Política:</dt>
                                                        <dd>Contribuir a la transformación de las condiciones políticas,
                                                            culturales, sociales y económicas que restringen el goce
                                                            efectivo de
                                                            derechos de las personas que realizan actividades sexuales
                                                            pagadas
                                                            en el Distrito Capital.</dd>
                                                    </dl>
                                                    <dl>
                                                        <dt>Recursos de consulta:</dt>
                                                        <dd>
                                                            <ul>
                                                                <li><a target="_blank" rel="noopener noreferrer"
                                                                        href="https://www.sdmujer.gov.co/la-entidad/politica-publica-de-actividades-sexuales-pagadas">Sitio
                                                                        web - Política Pública de Actividades Sexuales
                                                                        Pagadas</a></li>
                                                            </ul>
                                                        </dd>
                                                    </dl>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /#fin _polServiciosSexuales -->

                                    <!-- collapse_polDiscapacidad -->
                                    <div class='panel panel-default'>
                                        <div class='panel-heading ph-2' role='tab' id='heading_polDiscapacidad'>
                                            <h4 class='panel-title'>
                                                <a role='button' data-toggle='collapse'
                                                    data-parent='#accordion_polParticipa' href='#collapse_polDiscapacidad'
                                                    aria-expanded='true' aria-controls='collapse_polDiscapacidad'>
                                                    Política Pública de Discapacidad
                                                </a>
                                            </h4>
                                        </div>
                                        <div id='collapse_polDiscapacidad' class='panel-collapse collapse'
                                            role='tabpanel' aria-labelledby='heading_polDiscapacidad'>
                                            <div class='panel-body'>
                                                <div class="box-bodyCollapse">
                                                    <dl>
                                                        <dt>Vigencia:</dt>
                                                        <dd>2007-2020 Actualmente en reformulación.</dd>
                                                    </dl>
                                                    <dl>
                                                        <dt>Entidad Líder de la Política:</dt>
                                                        <dd>Secretaría Distrital de Gobierno</dd>
                                                    </dl>
                                                    <dl>
                                                        <dt>Decreto que lo adopta:</dt>
                                                        <dd>Decreto 470 de 2007</dd>
                                                    </dl>
                                                    <dl>
                                                        <dt>Objetivo General de la Política:</dt>
                                                        <dd>Tiene dos propósitos: El primero, hacia la inclusión social. Es
                                                            decir, hacia una cultura que promocione, reconozca, garantice o
                                                            restituya los derechos y deberes de las personas con
                                                            discapacidad y
                                                            sus familias. La inclusión social implica acceder, disponer,
                                                            aportar
                                                            y transformar las condiciones que determinan la desigualdad.
                                                            Implica
                                                            también, reconocer y hacer uso de los recursos conceptuales,
                                                            técnicos y metodológicos que contribuyen a reconstruir los lazos
                                                            sociales y culturales para disfrutar de la vida y de la ciudad.
                                                        </dd>
                                                        <dd>El segundo propósito, hacia la calidad de vida con dignidad. Es
                                                            decir, hacia la búsqueda del bienestar de las personas con
                                                            discapacidad –PCD-, sus familias, cuidadoras y cuidadores,
                                                            mediante
                                                            la satisfacción de necesidades que permitan conseguir una vida
                                                            digna
                                                            y libre desde las perspectivas: humana, social, económica,
                                                            cultural
                                                            y política.</dd>
                                                    </dl>
                                                    <dl>
                                                        <dt>Recursos de consulta:</dt>
                                                        <dd>
                                                            <ul>
                                                                <li><a target="_blank" rel="noopener noreferrer"
                                                                        href="https://www.gobiernobogota.gov.co/noticias/nivel-central/reformulacion-la-politica-publica-distrital-discapacidad">Sitio
                                                                        web - Reformulación de la Política Pública Distrital
                                                                        de
                                                                        Discapacidad</a></li>
                                                            </ul>
                                                        </dd>
                                                    </dl>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /#fin _polDiscapacidad -->

                                    <!-- collapse_polServicioCiudadania -->
                                    <div class='panel panel-default'>
                                        <div class='panel-heading ph-2' role='tab'
                                            id='heading_polServicioCiudadania'>
                                            <h4 class='panel-title'>
                                                <a role='button' data-toggle='collapse'
                                                    data-parent='#accordion_polParticipa'
                                                    href='#collapse_polServicioCiudadania' aria-expanded='true'
                                                    aria-controls='collapse_polServicioCiudadania'>
                                                    Política Pública Distrital de Servicio a la Ciudadanía en la ciudad de
                                                    Bogotá D.C
                                                </a>
                                            </h4>
                                        </div>
                                        <div id='collapse_polServicioCiudadania' class='panel-collapse collapse'
                                            role='tabpanel' aria-labelledby='heading_polServicioCiudadania'>
                                            <div class='panel-body'>
                                                <div class="box-bodyCollapse">
                                                    <dl>
                                                        <dt>Vigencia:</dt>
                                                        <dd>2019-2028</dd>
                                                    </dl>
                                                    <dl>
                                                        <dt>Entidad Líder de la Política:</dt>
                                                        <dd>Secretaría General de la Alcaldía Mayor</dd>
                                                    </dl>
                                                    <dl>
                                                        <dt>Decreto que lo adopta:</dt>
                                                        <dd>Decreto 197 de 2014/ CONPES D.C 03 / 2019</dd>
                                                    </dl>
                                                    <dl>
                                                        <dt>Objetivo General de la Política:</dt>
                                                        <dd>Garantizar el derecho de la ciudadanía a una vida digna, aportar
                                                            en
                                                            la superación de las necesidades sociales, la discriminación y
                                                            la
                                                            segregación como factores esenciales de la pobreza y desarrollar
                                                            atributos del servicio como: recibir de las entidades públicas
                                                            distritales un servicio digno, efectivo, de calidad, oportuno,
                                                            cálido y confiable, bajo los principios de transparencia,
                                                            prevención
                                                            y lucha contra la corrupción, que permita satisfacer sus
                                                            necesidades
                                                            y mejorar la calidad de vida.</dd>
                                                    </dl>
                                                    <dl>
                                                        <dt>Recursos de consulta:</dt>
                                                        <dd>
                                                            <ul>
                                                                <li><a target="_blank" rel="noopener noreferrer"
                                                                        href="https://secretariageneral.gov.co/transparencia/informacion-interes/publicacion/politica-publica-distrital-servicio-a-la-ciudadania">Sitio
                                                                        web - Política Pública Distrital de Servicio a la
                                                                        Ciudadanía</a></li>
                                                            </ul>
                                                        </dd>
                                                    </dl>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /#fin _polServicioCiudadania -->

                                    <!-- collapse_polManejoSuelo -->
                                    <div class='panel panel-default'>
                                        <div class='panel-heading ph-2' role='tab' id='heading_polManejoSuelo'>
                                            <h4 class='panel-title'>
                                                <a role='button' data-toggle='collapse'
                                                    data-parent='#accordion_polParticipa' href='#collapse_polManejoSuelo'
                                                    aria-expanded='true' aria-controls='collapse_polManejoSuelo'>
                                                    Política para el manejo del Suelo de la protección en el Distrito
                                                    Capital
                                                </a>
                                            </h4>
                                        </div>
                                        <div id='collapse_polManejoSuelo' class='panel-collapse collapse' role='tabpanel'
                                            aria-labelledby='heading_polManejoSuelo'>
                                            <div class='panel-body'>
                                                <div class="box-bodyCollapse">
                                                    <dl>
                                                        <dt>Vigencia:</dt>
                                                        <dd>N/D</dd>
                                                    </dl>
                                                    <dl>
                                                        <dt>Entidad Líder de la Política:</dt>
                                                        <dd>Secretaría Distrital de Ambiente</dd>
                                                    </dl>
                                                    <dl>
                                                        <dt>Decreto que lo adopta:</dt>
                                                        <dd>Decreto 462 de 2008</dd>
                                                    </dl>
                                                    <dl>
                                                        <dt>Objetivo General de la Política:</dt>
                                                        <dd>Consolidar la gestión sobre el suelo de protección, como parte
                                                            integral del ordenamiento territorial del Distrito Capital, en
                                                            todas
                                                            las clases de suelo, a las formas más convenientes para el
                                                            cumplimiento de sus funciones, asegurando su apropiación
                                                            colectiva.
                                                        </dd>
                                                    </dl>
                                                    <dl>
                                                        <dt>Recursos de consulta:</dt>
                                                        <dd>
                                                            <ul>
                                                                <li><a target="_blank" rel="noopener noreferrer"
                                                                        href="https://oab.ambientebogota.gov.co/politica-para-el-manejo-de-suelo-de-proteccion-en-el-d-c/">Sitio
                                                                        web - Política para el Manejo de suelo de Protección
                                                                        en
                                                                        el D.C.</a></li>
                                                            </ul>
                                                        </dd>
                                                    </dl>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /#fin _polManejoSuelo -->
                                    <!-- collapse_polJuventud -->
                                    <div class='panel panel-default'>
                                        <div class='panel-heading ph-2' role='tab' id='heading_polJuventud'>
                                            <h4 class='panel-title'>
                                                <a role='button' data-toggle='collapse'
                                                    data-parent='#accordion_polParticipa' href='#collapse_polJuventud'
                                                    aria-expanded='true' aria-controls='collapse_polJuventud'>
                                                    Política Pública Juventud
                                                </a>
                                            </h4>
                                        </div>
                                        <div id='collapse_polJuventud' class='panel-collapse collapse' role='tabpanel'
                                            aria-labelledby='heading_polJuventud'>
                                            <div class='panel-body'>
                                                <div class="box-bodyCollapse">
                                                    <dl>
                                                        <dt>Vigencia:</dt>
                                                        <dd>2018-2030</dd>
                                                    </dl>
                                                    <dl>
                                                        <dt>Entidad Líder de la Política:</dt>
                                                        <dd>Secretaría Distrital de Integración Social</dd>
                                                    </dl>
                                                    <dl>
                                                        <dt>Decreto que lo adopta:</dt>
                                                        <dd>CONPES D.C 08/2019</dd>
                                                    </dl>
                                                    <dl>
                                                        <dt>Objetivo General de la Política:</dt>
                                                        <dd>Ampliar las oportunidades, individuales y colectivas, de las y
                                                            los
                                                            jóvenes para que puedan elegir lo que quieren ser y hacer hacia
                                                            la
                                                            construcción de proyectos de vida, que permitan el ejercicio
                                                            pleno
                                                            de su ciudadanía para beneficio personal y de la sociedad, a
                                                            través
                                                            del mejoramiento del conjunto de acciones institucionales y el
                                                            fortalecimiento de sus entornos relacionales.</dd>
                                                    </dl>
                                                    <dl>
                                                        <dt>Recursos de consulta:</dt>
                                                        <dd>
                                                            <ul>
                                                                <li><a target="_blank" rel="noopener noreferrer"
                                                                        href="https://www.integracionsocial.gov.co/index.php/politicas-publicas/lidera-sdis/politica-publica-juventud">Sitio
                                                                        web - Política Pública de Juventud</a></li>
                                                            </ul>
                                                        </dd>
                                                    </dl>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /#fin _polJuventud -->

                                    <!-- collapse_polLGBTI -->
                                    <div class='panel panel-default'>
                                        <div class='panel-heading ph-2' role='tab' id='heading_polLGBTI'>
                                            <h4 class='panel-title'>
                                                <a role='button' data-toggle='collapse'
                                                    data-parent='#accordion_polParticipa' href='#collapse_polLGBTI'
                                                    aria-expanded='true' aria-controls='collapse_polLGBTI'>
                                                    Política Pública para la garantía plena de los Derechos de las Personas
                                                    LGBTI y sobre Identidades de Género y Orientaciones Sexuales en el D.C.
                                                    2021-2032
                                                </a>
                                            </h4>
                                        </div>
                                        <div id='collapse_polLGBTI' class='panel-collapse collapse' role='tabpanel'
                                            aria-labelledby='heading_polLGBTI'>
                                            <div class='panel-body'>
                                                <div class="box-bodyCollapse">
                                                    <dl>
                                                        <dt>Vigencia:</dt>
                                                        <dd>2021-2032</dd>
                                                    </dl>
                                                    <dl>
                                                        <dt>Entidad Líder de la Política:</dt>
                                                        <dd>Dirección de Diversidad Sexual de la Secretaría Distrital de
                                                            Planeación</dd>
                                                    </dl>
                                                    <dl>
                                                        <dt>Decreto que lo adopta:</dt>
                                                        <dd>Acuerdo 371 de 2009 / Decreto 062 de 2014</dd>
                                                    </dl>
                                                    <dl>
                                                        <dt>Objetivo General de la Política:</dt>
                                                        <dd>La política pública para las personas de los sectores LGBTI del
                                                            Distrito Capital, pretende garantizar el ejercicio pleno de
                                                            derechos
                                                            a las personas de los sectores LGBTI como parte de la
                                                            producción,
                                                            gestión social y bienestar colectivo de la ciudad.</dd>
                                                    </dl>
                                                    <dl>
                                                        <dt>Recursos de consulta:</dt>
                                                        <dd>
                                                            <ul>
                                                                <li><a target="_blank" rel="noopener noreferrer"
                                                                        href="https://www.sdp.gov.co/content/politica-publica-lgbti-identidades-de-genero-y-orientaciones-sexuales-dc-2021-2032">Sitio
                                                                        web - Política Pública LGBTI, identidades de género
                                                                        y
                                                                        orientaciones sexuales en el D.C. 2021-2032</a></li>
                                                            </ul>
                                                        </dd>
                                                    </dl>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /#fin _polLGBTI -->

                                    <!-- collapse_polFamilias -->
                                    <div class='panel panel-default'>
                                        <div class='panel-heading ph-2' role='tab' id='heading_polFamilias'>
                                            <h4 class='panel-title'>
                                                <a role='button' data-toggle='collapse'
                                                    data-parent='#accordion_polParticipa' href='#collapse_polFamilias'
                                                    aria-expanded='true' aria-controls='collapse_polFamilias'>
                                                    Política Pública para las Familias
                                                </a>
                                            </h4>
                                        </div>
                                        <div id='collapse_polFamilias' class='panel-collapse collapse' role='tabpanel'
                                            aria-labelledby='heading_polFamilias'>
                                            <div class='panel-body'>
                                                <div class="box-bodyCollapse">
                                                    <dl>
                                                        <dt>Vigencia:</dt>
                                                        <dd>2011-2025</dd>
                                                    </dl>
                                                    <dl>
                                                        <dt>Entidad Líder de la Política:</dt>
                                                        <dd>Secretaría Distrital de Integración Social</dd>
                                                    </dl>
                                                    <dl>
                                                        <dt>Decreto que lo adopta:</dt>
                                                        <dd>Decreto 545 DE 2011</dd>
                                                    </dl>
                                                    <dl>
                                                        <dt>Objetivo General de la Política:</dt>
                                                        <dd>Promover la trasformación de patrones culturales hegemónicos y
                                                            excluyentes a través del reconocimiento de la diversidad de
                                                            estructuras, arreglos, formas, relaciones, roles y
                                                            subjetividades
                                                            familiares, para la garantía de los derechos de las familias del
                                                            Distrito.</dd>
                                                    </dl>
                                                    <dl>
                                                        <dt>Recursos de consulta:</dt>
                                                        <dd>
                                                            <ul>
                                                                <li><a target="_blank" rel="noopener noreferrer"
                                                                        href="https://www.integracionsocial.gov.co/index.php/politicas-publicas/lidera-sdis/politica-publica-familias">Sitio
                                                                        web - Política Pública para las Familias</a></li>
                                                            </ul>
                                                        </dd>
                                                    </dl>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /#fin _polFamilias -->

                                    <!-- collapse_polCTyI -->
                                    <div class='panel panel-default'>
                                        <div class='panel-heading ph-2' role='tab' id='heading_polCTyI'>
                                            <h4 class='panel-title'>
                                                <a role='button' data-toggle='collapse'
                                                    data-parent='#accordion_polParticipa' href='#collapse_polCTyI'
                                                    aria-expanded='true' aria-controls='collapse_polCTyI'>
                                                    Política Pública de Ciencia, Tecnología e Innovación 2019-2038
                                                </a>
                                            </h4>
                                        </div>
                                        <div id='collapse_polCTyI' class='panel-collapse collapse' role='tabpanel'
                                            aria-labelledby='heading_polCTyI'>
                                            <div class='panel-body'>
                                                <div class="box-bodyCollapse">
                                                    <dl>
                                                        <dt>Vigencia:</dt>
                                                        <dd>2019-2038</dd>
                                                    </dl>
                                                    <dl>
                                                        <dt>Entidad Líder de la Política:</dt>
                                                        <dd>Secretaría Distrital de Desarrollo Económico</dd>
                                                    </dl>
                                                    <dl>
                                                        <dt>Decreto que lo adopta:</dt>
                                                        <dd>CONPES D.C 04/ 2019</dd>
                                                    </dl>
                                                    <dl>
                                                        <dt>Objetivo General de la Política:</dt>
                                                        <dd>Fortalecer el Ecosistema Regional de Ciencia, Tecnología e
                                                            Innovación para lograr insertar a Bogotá dentro de las
                                                            denominadas
                                                            sociedades de conocimiento, como una ciudad región competitiva,
                                                            sostenible, innovadora, e integradora con base a su capacidad
                                                            para
                                                            crear valor por medio de la generación y aplicación de
                                                            conocimiento.
                                                        </dd>
                                                    </dl>
                                                    <dl>
                                                        <dt>Recursos de consulta:</dt>
                                                        <dd>
                                                            <ul>
                                                                <li><a target="_blank" rel="noopener noreferrer"
                                                                        href="http://www.desarrolloeconomico.gov.co/transparencia/planeacion/politicas-y-lineamientos/plan-accion-politica-publica-ciencia-tecnologia-e">Sitio
                                                                        web - Plan de Acción Política Pública de Ciencia,
                                                                        Tecnología e Innovación 2019-2038</a></li>
                                                            </ul>
                                                        </dd>
                                                    </dl>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /#fin _polCTyI -->

                                    <!-- collapse_polAdultez -->
                                    <div class='panel panel-default'>
                                        <div class='panel-heading ph-2' role='tab' id='heading_polAdultez'>
                                            <h4 class='panel-title'>
                                                <a role='button' data-toggle='collapse'
                                                    data-parent='#accordion_polParticipa' href='#collapse_polAdultez'
                                                    aria-expanded='true' aria-controls='collapse_polAdultez'>
                                                    Política Pública para la Adultez en la D.C 2011-2044
                                                </a>
                                            </h4>
                                        </div>
                                        <div id='collapse_polAdultez' class='panel-collapse collapse' role='tabpanel'
                                            aria-labelledby='heading_polAdultez'>
                                            <div class='panel-body'>
                                                <div class="box-bodyCollapse">
                                                    <dl>
                                                        <dt>Vigencia:</dt>
                                                        <dd>2011-2044</dd>
                                                    </dl>
                                                    <dl>
                                                        <dt>Entidad Líder de la Política:</dt>
                                                        <dd>Secretaría Distrital de Integración Social</dd>
                                                    </dl>
                                                    <dl>
                                                        <dt>Decreto que lo adopta:</dt>
                                                        <dd>Decreto 544 de 2011 / Actualización Plan de Acción CONPES 21 de
                                                            2021
                                                        </dd>
                                                    </dl>
                                                    <dl>
                                                        <dt>Objetivo General de la Política:</dt>
                                                        <dd>Promover, defender y garantizar progresivamente los derechos de
                                                            los/as adultos/as urbanos/as y rurales que habitan en Bogotá,
                                                            D.C.,
                                                            a través de la movilización social y la transformación de los
                                                            conflictos, que impacten las condiciones socioeconómicas,
                                                            políticas,
                                                            culturales y ambientales de la población adulta hacia la
                                                            construcción de una ciudad equitativa, pluralista e incluyente,
                                                            que
                                                            respete las diferencias y las diversidades para fortalecer el
                                                            ejercicio pleno de la ciudadanía.</dd>
                                                    </dl>
                                                    <dl>
                                                        <dt>Recursos de consulta:</dt>
                                                        <dd>
                                                            <ul>
                                                                <li><a target="_blank" rel="noopener noreferrer"
                                                                        href="https://www.integracionsocial.gov.co/index.php/politicas-publicas/lidera-sdis/politica-publica-de-y-para-la-adultez">Sitio
                                                                        web - Política Pública de y para la Adultez</a></li>
                                                            </ul>
                                                        </dd>
                                                    </dl>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /#fin _polAdultez -->

                                    <!-- collapse_polVejez -->
                                    <div class='panel panel-default'>
                                        <div class='panel-heading ph-2' role='tab' id='heading_polVejez'>
                                            <h4 class='panel-title'>
                                                <a role='button' data-toggle='collapse'
                                                    data-parent='#accordion_polParticipa' href='#collapse_polVejez'
                                                    aria-expanded='true' aria-controls='collapse_polVejez'>
                                                    Política Pública Social para el Envejecimiento y la Vejez 2010-2025
                                                </a>
                                            </h4>
                                        </div>
                                        <div id='collapse_polVejez' class='panel-collapse collapse' role='tabpanel'
                                            aria-labelledby='heading_polVejez'>
                                            <div class='panel-body'>
                                                <div class='panel-body'>
                                                    <div class="box-bodyCollapse">
                                                        <dl>
                                                            <dt>Vigencia:</dt>
                                                            <dd>2010-2025</dd>
                                                        </dl>
                                                        <dl>
                                                            <dt>Entidad Líder de la Política:</dt>
                                                            <dd>Secretaría Distrital de Integración Social</dd>
                                                        </dl>
                                                        <dl>
                                                            <dt>Decreto que lo adopta:</dt>
                                                            <dd>Acuerdo 254 de 2006 /Decreto 345 de 2010/ Actualización Plan
                                                                de
                                                                Acción CONPES 19 de 2021</dd>
                                                        </dl>
                                                        <dl>
                                                            <dt>Objetivo General de la Política:</dt>
                                                            <dd>Garantizar la promoción, protección, restablecimiento y
                                                                ejercicio pleno de los derechos humanos de las personas
                                                                mayores
                                                                sin distingo alguno, que permita el desarrollo humano,
                                                                social,
                                                                económico, político, cultural y recreativo, promoviendo el
                                                                envejecimiento activo para que las personas mayores de hoy y
                                                                del
                                                                futuro en el Distrito Capital vivan una vejez con dignidad,
                                                                a
                                                                partir de la responsabilidad que le compete al Estado en su
                                                                conjunto y de acuerdo con los lineamientos distritales,
                                                                nacionales e internacionales.</dd>
                                                        </dl>
                                                        <dl>
                                                            <dt>Recursos de consulta:</dt>
                                                            <dd>
                                                                <ul>
                                                                    <li><a target="_blank" rel="noopener noreferrer"
                                                                            href="https://www.integracionsocial.gov.co/index.php/politicas-publicas/lidera-sdis/politica-publica-envejecimiento-y-la-vejez">Sitio
                                                                            web - Política Pública Social para El
                                                                            Envejecimiento
                                                                            y la Vejez</a></li>
                                                                </ul>
                                                            </dd>
                                                        </dl>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /#fin _polVejez -->

                                    <!-- collapse_polRecreacion -->
                                    <div class='panel panel-default'>
                                        <div class='panel-heading ph-2' role='tab' id='heading_polRecreacion'>
                                            <h4 class='panel-title'>
                                                <a role='button' data-toggle='collapse'
                                                    data-parent='#accordion_polParticipa' href='#collapse_polRecreacion'
                                                    aria-expanded='true' aria-controls='collapse_polRecreacion'>
                                                    Política Pública de Deporte, Recreación, Actividad Física, Parques y
                                                    Escenarios para Bogotá
                                                </a>
                                            </h4>
                                        </div>
                                        <div id='collapse_polRecreacion' class='panel-collapse collapse' role='tabpanel'
                                            aria-labelledby='heading_polRecreacion'>
                                            <div class='panel-body'>
                                                <div class="box-bodyCollapse">
                                                    <dl>
                                                        <dt>Vigencia:</dt>
                                                        <dd>N/D</dd>
                                                    </dl>
                                                    <dl>
                                                        <dt>Entidad Líder de la Política:</dt>
                                                        <dd>Secretaría Distrital de Cultura, Recreación y Deporte</dd>
                                                    </dl>
                                                    <dl>
                                                        <dt>Decreto que lo adopta:</dt>
                                                        <dd>Decreto 229 de 2015_ modificado por el Decreto 483 de 2018</dd>
                                                    </dl>
                                                    <dl>
                                                        <dt>Objetivo General de la Política:</dt>
                                                        <dd>Garantizar el goce efectivo, gradual y progresivo de los
                                                            derechos a
                                                            la recreación, el deporte, la actividad física y al disfrute de
                                                            los
                                                            parques y escenarios para los habitantes del D.C.</dd>
                                                    </dl>
                                                    <dl>
                                                        <dt>Recursos de consulta:</dt>
                                                        <dd>
                                                            <ul>
                                                                <li><a target="_blank" rel="noopener noreferrer"
                                                                        href="#">Sitio web - Política Pública Social
                                                                        para
                                                                        El Envejecimiento y la Vejez</a></li>
                                                            </ul>
                                                        </dd>
                                                    </dl>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /#fin _polRecreacion -->

                                    <!-- collapse_polMujer -->
                                    <div class='panel panel-default'>
                                        <div class='panel-heading ph-2' role='tab' id='heading_polMujer'>
                                            <h4 class='panel-title'>
                                                <a role='button' data-toggle='collapse'
                                                    data-parent='#accordion_polParticipa' href='#collapse_polMujer'
                                                    aria-expanded='true' aria-controls='collapse_polMujer'>
                                                    Política Pública de Mujeres y Equidad de Género 2020-2030
                                                </a>
                                            </h4>
                                        </div>
                                        <div id='collapse_polMujer' class='panel-collapse collapse' role='tabpanel'
                                            aria-labelledby='heading_polMujer'>
                                            <div class='panel-body'>
                                                <div class="box-bodyCollapse">
                                                    <dl>
                                                        <dt>Vigencia:</dt>
                                                        <dd>2020-2030</dd>
                                                    </dl>
                                                    <dl>
                                                        <dt>Entidad Líder de la Política:</dt>
                                                        <dd>Secretaría Distrital de la Mujer</dd>
                                                    </dl>
                                                    <dl>
                                                        <dt>Decreto que lo adopta:</dt>
                                                        <dd>Decreto 166 de 2010/ Acuerdo 584 de 2015/ CONPES 14 de 2020</dd>
                                                    </dl>
                                                    <dl>
                                                        <dt>Objetivo General de la Política:</dt>
                                                        <dd>Reconocer, garantizar y restablecer los derechos de las mujeres
                                                            que
                                                            habitan en el Distrito Capital, de manera que se modifiquen de
                                                            forma
                                                            progresiva y sostenible, las condiciones injustas y evitables de
                                                            discriminación, subordinación y exclusión que enfrentan las
                                                            mujeres
                                                            en los ámbitos público y privado, promoviendo la igualdad real
                                                            de
                                                            oportunidades y la equidad de género en el Distrito Capital.
                                                        </dd>
                                                    </dl>
                                                    <dl>
                                                        <dt>Recursos de consulta:</dt>
                                                        <dd>
                                                            <ul>
                                                                <li><a target="_blank" rel="noopener noreferrer"
                                                                        href="https://sdmujer.gov.co/la-entidad/politica-publica-de-mujeres-y-equidad-de-genero/documento-conpes">Sitio
                                                                        web - Política Pública de Mujeres y Equidad de
                                                                        Género</a></li>
                                                            </ul>
                                                        </dd>
                                                    </dl>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /#fin _polMujer -->

                                </div>
                                <!-- /#fin _polParticipa -->

                            </div>
                        </div>
                    </div>
                    <!-- /#fin _participa -->

                </div>
                <!-- /#fin _politicas -->
            </div>
            <style>
                .politicas {
                    max-width: 980px;
                    margin: auto;
                    word-break: break-word;
                    word-wrap: break-word;

                    font-size: 15px;
                    font-weight: 500;
                    text-align: left;
                    line-height: 1.3;
                    color: rgba(25, 25, 25, 1);
                }



                .politicas .box-bodyCollapse {
                    padding: 2%
                }

                .box-bodyCollapse dd {
                    margin-bottom: 8px;

                }

                .box-collapse .panel-title {
                    font-size: 16px;
                    font-weight: 700;
                    text-align: justify;
                    line-height: 1;
                    color: rgba(25, 25, 25, 1);
                }

                .box-collapse .ph-1 {
                    background-color: #4D541F !important;
                    background-image: none !important;

                }

                .box-collapse .ph-1 a {
                    color: #FFFFFF !important;
                }

                .box-collapse .ph-1 a:hover {
                    color: #c9d64f !important;
                }

                .box-collapse .ph-2 {
                    background-color: #909D2A !important;
                    background-image: none !important;
                }

                .box-collapse .ph-2 a {
                    color: #000 !important;
                }

                .box-collapse .ph-2 a:hover {
                    color: #4D541F !important;
                }

                .box-collapse .ph-3 {
                    background-color: #A6B517 !important;
                    background-image: none !important;
                }

                .box-collapse .ph-3 a {
                    color: #212121 !important;
                }

                .box-collapse .ph-3 a:hover {
                    color: #4D541F !important;
                }
            </style>

            <hr>
            <div class="box-protocolos">
                <!-- collapse_protocolos -->
                <div class='panel panel-default'>
                    <div class='panel-heading ph-1' role='tab' id='heading_protocolos'>
                        <h4 class='panel-title'>
                            <a role='button' data-toggle='collapse' data-parent='#accordion_protocolos'
                                href='#collapse_protocolos' aria-expanded='true' aria-controls='collapse_protocolos'>
                                Protocolos
                            </a>
                        </h4>
                    </div>
                    <div id='collapse_protocolos' class='panel-collapse collapse in' role='tabpanel'
                        aria-labelledby='heading_protocolos'>
                        <div class='panel-body'>
                            <ul>
                                <li><a href="" target="_blank" rel="noopener noreferrer"><strong>Resolución
                                            Número172834 de 2021 </strong></a>Por medio de la cual se adopta el Protocolo
                                    para
                                    el fortalecimiento de los mecanismos de consulta participativos frente a la información
                                    de
                                    ley de transparencia y acceso a la información”</li>
                                <li><a href="" target="_blank" rel="noopener noreferrer"><strong>PM06-PT01
                                        </strong></a>Protocolo para el fortalecimiento de os mecanismos de consulta
                                    participativos V2.0 de 24-12-2021</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /#fin _protocolos -->

                <!-- collapse_eticos -->
                <div class='panel panel-default'>
                    <div class='panel-heading ph-1' role='tab' id='heading_eticos'>
                        <h4 class='panel-title'>
                            <a role='button' data-toggle='collapse' data-parent='#accordion_eticos'
                                href='#collapse_eticos' aria-expanded='true' aria-controls='collapse_eticos'>
                                Protocolos éticos
                            </a>
                        </h4>
                    </div>
                    <div id='collapse_eticos' class='panel-collapse collapse in' role='tabpanel'
                        aria-labelledby='heading_eticos'>
                        <div class='panel-body'>
                            <a href="https://www.movilidadbogota.gov.co/web/protocolos_eticos"><strong>Ir a sitio web de
                                    Protocolos
                                    éticos</strong></a>

                        </div>
                    </div>
                </div>
                <!-- /#fin _eticos -->
            </div>
            <style>
                .box-protocolos {
                    max-width: 980px;
                    margin: auto;
                    word-break: break-word;
                    word-wrap: break-word;

                    font-size: 15px;
                    font-weight: 500;
                    text-align: left;
                    line-height: 1.3;
                    color: rgba(25, 25, 25, 1);
                }

                .box-protocolos .panel-title {
                    font-size: 16px;
                    font-weight: 700;
                    text-align: justify;
                    line-height: 1;
                    color: rgba(25, 25, 25, 1);
                }

                .box-protocolos .ph-1 {
                    background-color: #4D541F !important;
                    background-image: none !important;

                }

                .box-protocolos .ph-1 a {
                    color: #FFFFFF !important;
                }

                .box-protocolos .ph-1 a:hover {
                    color: #c9d64f !important;
                }

                .box-protocolos .ph-2 {
                    background-color: #909D2A !important;
                    background-image: none !important;
                }

                .box-protocolos .ph-2 a {
                    color: #000 !important;
                }

                .box-protocolos .ph-2 a:hover {
                    color: #4D541F !important;
                }

                .box-protocolos .ph-3 {
                    background-color: #A6B517 !important;
                    background-image: none !important;
                }

                .box-protocolos .ph-3 a {
                    color: #212121 !important;
                }

                .box-protocolos .ph-3 a:hover {
                    color: #4D541F !important;
                }
            </style>





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


        /*
                                                                        .politicas [class*='col-'] {
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
    </style>
    <!-- End Styles -->
