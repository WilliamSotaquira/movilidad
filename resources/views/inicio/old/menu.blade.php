@extends('welcome')
@section('title','menu')
@section('contenido')

<!-- Set menu -->
<div class="set-wrapper menu">

    <div class="row">
        <div class="col-md-12 col-centered">
            <div class="sdm_menu" id="">


                <ul class="mnav2">
                    <li><a href="#" class="mnav-li-a">Inicio</a></li>
                    <li><a href="#" class="mnav-li-a">Transparencia y acceso a la información</a></li>
                    <li><a href="#" class="mnav-li-a">Atención y Servicios a la Ciudadanía</a>
                        <ul>
                            <li><a href="https://www.movilidadbogota.gov.co/web/sdqs" class="">Peticiones, quejas, reclamos y denuncias</a>
                                <ul>
                                    <li><a href="https://www.movilidadbogota.gov.co/radicacionwebsdm/formulario.php" class="">Formulario radicación de correspondencia</a></li>
                                    <li><a href="https://bogota.gov.co/sdqs/crear-peticion" class="">Registre PQRSD</a></li>
                                    <li><a href="https://bogota.gov.co/sdqs/consultar-peticion" class="">Consulte Su Petición Bogotá te Escucha</a></li>
                                    <li><a href="https://gestiondocumental.movilidadbogota.gov.co/orfeo-api/" class="">Consulte Radicado SDM</a></li>
                                    <li><a href="https://docs.google.com/forms/d/e/1FAIpQLSf_XK6RvcctCN4nyePLpdZ-rA_dND8Y_fZff3jZyBzx8FUSQw/viewform?vc=0&amp;c=0&amp;w=1" class="">Califique Nuestro Servicio</a></li>
                                    <li><a href="https://www.movilidadbogota.gov.co/web/derechos-anonimos" class="">Notificaciones derechos de petición anónimos</a></li>
                                    <li><a href="https://www.movilidadbogota.gov.co/web/respuestas-a-oficio-sin-notificar" class="">Respuestas a oficio sin notificar</a></li>
                                </ul>
                            </li>
                            <li><a href="https://www.movilidadbogota.gov.co/web/tramites_y_servicios_virtuales" class="">Trámites y Servicios en Línea</a>
                                <ul>
                                    <li><a href="https://www.movilidadbogota.gov.co/radicacionwebsdm/formulario.php" class="">Formulario radicación de correspondencia</a></li>
                                    <li><a href="https://www.movilidadbogota.gov.co/web/SIMUR/excepciones/login/" class="">Solicitud Excepción de Pico y Placa</a></li>
                                    <li><a href="https://www.ventanillamovilidad.com.co/tramites/certificado-de-libertad-y-tradicion" class="">Certificado de tradición vehicular</a></li>
                                    <li><a href="https://www.movilidadbogota.gov.co/web/servicios/liquidacion_de_servicios_de_parqueadero_y_gruas" class="">Liquidación y Pago de Parqueaderos y Grúas</a></li>
                                    <li><a href="https://www.movilidadbogota.gov.co/web/conoce_acerca_de_los_sellos_de_calidad" class="">Sellos de Calidad</a></li>
                                    <li><a href="https://registrobicibogota.movilidadbogota.gov.co" class="">Registro Bici Bogotá</a></li>
                                    <li><a href="https://www.movilidadbogota.gov.co/web/SIMUR/sigatjs/" class="">Informe Policial de Accidente de Tránsito</a></li>
                                    <li><a href="tramites_asociados_a_la_cadena_de_urbanismo_y_construccion" class="">Cadena de Urbanismo y Construcción</a></li>
                                    <li><a href="http://vucapp.habitatbogota.gov.co/vuc/login.seam" class="">Estudios de Transito</a></li>
                                    <li><a href="http://vucapp.habitatbogota.gov.co/vuc/login.seam" class="">Plan de Manejo de Transito</a></li>
                                    <li><a href="http://vucapp.habitatbogota.gov.co/vuc/login.seam" class="">Emisión Concepto Proyectos de Señalización </a></li>
                                    <li><a href="http://vucapp.habitatbogota.gov.co/vuc/login.seam" class="">Verificación Señalización Implementada</a></li>
                                    <li><a href="https://www.movilidadbogota.gov.co/web/autorizacion_en_grua_desintegracion_transporte_publico" class="">Desintegración - Transporte Público</a></li>
                                    <li><a href="https://www.movilidadbogota.gov.co/web/desvinculacion_administrativa" class="">Desvinculación Administrativa</a></li>
                                    <li><a href="https://www.movilidadbogota.gov.co/web/entrega_de_licencia_retenida_y_realizacion_del_curso" class="">Entrega de Licencia de Conducción</a></li>
                                    <li><a href="https://www.movilidadbogota.gov.co/web/avisos_electronicos" class="">Notificaciones Procesos Disciplinario</a></li>
                                    <li><a href="https://www.movilidadbogota.gov.co/web/certificacion_de_procesos_de_investigaciones_administrativas" class="">Paz y Salvos Transporte Público</a></li>
                                </ul>
                            </li>
                            <li><a href="https://bogota.gov.co/sdqs/consultar-peticion" class="">Consultas en Línea</a>
                                <ul>
                                    <li><a href="https://www.movilidadbogota.gov.co/web/SIMUR/SIGAT/" class="">Siniestralidad</a></li>
                                    <li><a href="https://www.ventanillamovilidad.com.co/tramites/orden-de-entrega-de-vehiculos-inmovilizados" class="">Agendamiento Orden de Entrega</a></li>
                                    <li><a href="https://bogota.gov.co/sdqs/consultar-peticion" class="">Bogotá te Escucha</a></li>
                                    <li><a href="https://consultas.transitobogota.gov.co:8010/publico/index3.php" class="">Comparendos</a></li>
                                    <li><a href="https://consulta.simit.org.co/Simit/index.html" class="">Comparendos a Nivel Nacional (SIMIT)</a></li>
                                    <li><a href="https://www.movilidadbogota.gov.co/web/resultados_operativos_de_transito" class="">Consulta Operativos de Tránsito</a></li>
                                    <li><a href="https://www.runt.com.co/consultaCiudadana/#/consultaVehiculo" class="">Consulta RUNT</a></li>
                                    <li><a href="https://www.movilidadbogota.gov.co/web/SIMUR/excepciones/consultarPlaca/" class="">Consulta Vehículos Exceptuados</a></li>
                                    <li><a href="https://www.ventanillamovilidad.com.co/consultas" class="">Consultas VÚS</a></li>
                                    <li><a href="https://gestiondocumental.movilidadbogota.gov.co/orfeo-api/" class="">Consulte su Requerimiento </a></li>
                                    <li><a href="https://www.movilidadbogota.gov.co/web/form-autorizacion-grua" class="">Desintegración - Transporte Público</a></li>
                                    <li><a href="https://www.movilidadbogota.gov.co/web/formularios-tabla" class="">Desvinculación Administrativa</a></li>
                                    <li><a href="https://www.movilidadbogota.gov.co/web/form-entrega-licencia" class="">Licencias de Conducción Retenidas</a></li>
                                    <li><a href="https://www.ventanillamovilidad.com.co/consultas/estado-licencia" class="">Licencias de Conducción Suspendidas</a></li>
                                    <li><a href="https://www.movilidadbogota.gov.co/web/pys-formularios-tabla" class="">Paz y Salvos Transporte Público</a></li>
                                    <li><a href="https://www.movilidadbogota.gov.co/web/SIMUR/sigatjs/" class="">Validar Informe Policial Accidente de Tránsito</a></li>
                                    <li><a href="https://consultas.transitobogota.gov.co:8010/consultas_generales/consulta_vehiculo_inmovilizado.php" class="">Vehiculos Inmovilizados</a></li>
                                </ul>
                            </li>
                            <li><a href="https://bogota.gov.co/servicios/entidad/secretaria-distrital-de-movilidad-sdm" class="">Guía de trámites y servicios</a></li>
                            <li><a href="http://www.movilidadbogota.gov.co/web/puntos_de_atencion" class="">Puntos de Atención</a></li>
                            <li><a href="https://www.movilidadbogota.gov.co/web/preguntas_frecuentes" class="">Preguntas Frecuentes</a></li>
                            <li><a href="https://www.ventanillamovilidad.com.co/formularios" class="">Formularios VÚS</a></li>
                            <li><a href="defensorciudadano" class="">Defensor a la ciudadanía</a></li>
                            <li><a href="https://www.movilidadbogota.gov.co/web/manual_de_servicio_a_la_ciudadania" class="">Manual de Servicio a la Ciudadania</a></li>
                            <li><a href="http://rutadeatencion.sdmujer.gov.co/index.html" class="">Ruta de atención a mujeres víctimas de violencia y en riesgo de feminicidio</a></li>
                            <li><a href="https://www.movilidadbogota.gov.co/web/carta_de_compromiso_a_la_ciudadania" class="">Carta de Compromiso a la Ciudadanía</a></li>
                            <li><a href="https://www.movilidadbogota.gov.co/web/canal_anticorrupcion" class="">Denuncias actos de corrupción</a></li>
                            <li><a href="https://www.movilidadbogota.gov.co/web/informacion-publica" class="">Información Pública</a>
                                <ul>
                                    <li><a href="resoluciones_covid_19" class="">Resoluciones Covid-19</a></li>
                                </ul>
                            </li>
                            <li><a href="https://www.gov.co/" class="">Portal NO+FILAS</a></li>
                            <li><a href="https://www.movilidadbogota.gov.co/web/ley-1730-de-2014" class="">Ley 1730 de 2014</a></li>
                            <li><a href="https://www.gobiernobogota.gov.co/transparencia/tramites-servicios/documentos-extraviados" class="">Consulte su documento extraviado</a></li>
                            <li><a href="centros-locales-de-movilidad" class="">Participación ciudadana</a>
                                <ul>
                                    <li><a href="https://www.movilidadbogota.gov.co/web/calendario_de_actividades" class="">Calendario de actividades</a></li>
                                </ul>
                            </li>
                            <li><a href="https://www.movilidadbogota.gov.co/web/guia_de_inmovilizacion" class="">Guía de inmovilización</a></li>
                            <li><a href="https://www.movilidadbogota.gov.co/web/portafolio_tramites_y_servicios" class="">Portafolio de Trámites y Servicios</a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="mnav-li-a">Participa</a>
                        <ul>
                            <li><a href="https://www.movilidadbogota.gov.co/web/participacion_para_la_identificacion_de_problemas_y_diagnostico_de_necesidades" class="">Participación para la identificación de problemas y diagnóstico de necesidades</a></li>
                            <li><a href="presupuesto_de_gastos" class="">Planeación y/o presupuesto participativo</a></li>
                            <li><a href="/web/" class="">Participación y consulta ciudadana de proyectos, normas, políticas o programas</a>
                                <ul>
                                    <li><a href="https://www.movilidadbogota.gov.co/web/planes_institucionales_y_estrategicos" class="">Participación en planes</a></li>
                                    <li><a href="https://www.movilidadbogota.gov.co/web/proyectos_de_acuerdo_decreto" class="">Participación normativa</a></li>
                                </ul>
                            </li>
                            <li><a href="/web/" class="">Colaboración e innovación abierta </a>
                                <ul>
                                    <li><a href="https://www.movilidadbogota.gov.co/web/transparencia/conoce_propone_y_prioriza" class="">Conoce, Propone y Prioriza</a></li>
                                </ul>
                            </li>
                            <li><a href="/web/" class="">Rendición de Cuentas</a>
                                <ul>
                                    <li><a href="https://www.movilidadbogota.gov.co/web/informes-rendicion-cuentas" class="">Nodo Sector Movilidad Distrital</a></li>
                                    <li><a href="https://www.movilidadbogota.gov.co/web/rendicion_de_cuentas_locales" class="">Rendición de Cuentas Locales</a></li>
                                </ul>
                            </li>
                            <li><a href="https://www.movilidadbogota.gov.co/web/gestion_social" class="">Espacios de participación ciudadana</a></li>
                            <li><a href="https://www.movilidadbogota.gov.co/web/control_social" class="">Control social</a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="mnav-li-a">La Entidad</a>
                        <ul>
                            <li><a href="/web/" class="">Información General</a>
                                <ul>
                                    <li><a href="http://www.movilidadbogota.gov.co/web/mision" class="">Misión, Visión y Objetivos estratégicos</a></li>
                                    <li><a href="Funciones_deberes" class="">Funciones y Deberes</a></li>
                                    <li><a href="directorio_entidades" class="">Directorio de Entidades</a></li>
                                    <li><a href="funcionarios" class="">Directorio de Funcionarios</a></li>
                                    <li><a href="https://www.movilidadbogota.gov.co/web/organigrama" class="">Organigrama</a></li>
                                    <li><a href="https://www.movilidadbogota.gov.co/web/sistemas_de_gestion_sdm" class="">Sistemas de Gestión</a></li>
                                </ul>
                            </li>
                            <li><a href="/web/" class="">Recurso Humano</a>
                                <ul>
                                    <li><a href="https://www.movilidadbogota.gov.co/web/Funciones_deberes" class="">Manual de funciones</a></li>
                                    <li><a href="https://www.movilidadbogota.gov.co/web/organigrama" class="">Perfiles de los servidores públicos principales</a></li>
                                    <li><a href="asignacion-salarial-2019" class="">Asignaciones salariales</a></li>
                                    <li><a href="https://www.movilidadbogota.gov.co/web/puntos_de_atencion" class="">Datos de contacto</a></li>
                                    <li><a href="evaluacion_desempeno" class="">Evaluación del desempeño</a></li>
                                    <li><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/11-08-2021/resolucion_final._20216100800106.pdf" class="">Trabajo Inteligente</a></li>
                                </ul>
                            </li>
                            <li><a href="http://www.movilidadbogota.gov.co/web/historico_noticias" class="">Histórico de Noticias</a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="mnav-li-a">Normatividad</a>
                        <ul>
                            <li><a href="https://www.movilidadbogota.gov.co/web/normatividad_aplicable" class="">Normatividad Aplicable</a></li>
                            <li><a href="notificacion_terceros" class="">Notificación a terceros</a></li>
                            <li><a href="http://www.movilidadbogota.gov.co/web/notificacion" class="">Notificación, Citación y Comunicación de Actos Administrativos</a></li>
                            <li><a href="https://www.movilidadbogota.gov.co/web/proyectos_de_acuerdo_decreto" class="">Proyecto de Acuerdo, Decreto y Resolución</a></li>
                            <li><a href="/web/" class="">Contratación</a>
                                <ul>
                                    <li><a href="http://www.movilidadbogota.gov.co/web/procesos_de_contratacion" class="">Avisos y procesos de contratación</a></li>
                                    <li><a href="https://www.contratacionbogota.gov.co/es/web/cav3/ciudadano" class="">Contratación a la vista</a></li>
                                    <li><a href="https://www.colombiacompra.gov.co/secop-ii" class="">Contratos en ejecución</a></li>
                                    <li><a href="https://www.colombiacompra.gov.co/secop/plan-anual-de-adquisiciones" class="">Plan Anual de Adquisiciones</a></li>
                                    <li><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/guia_contratacion_transparente.pdf" class="">Guía para la contratación transparente</a></li>
                                </ul>
                            </li>
                            <li><a href="http://www.alcaldiabogota.gov.co/sisjur/normas/Norma1.jsp?i=5557" class="">Código Nacional de Tránsito</a></li>
                            <li><a href="https://www.movilidadbogota.gov.co/web/conceptos-juridicos" class="">Conceptos Jurídicos Secretaria Distrital de Movilidad</a></li>
                        </ul>
                    </li>
                </ul>
                <script>
                    // variables
                    let menu = document.querySelector('.mnav2');
                    let item = document.querySelector('.mnav2');

                    registrarEventosListeners();

                    // Registrar eventos
                    function registrarEventosListeners() {

                        // Se activa cuando se desplaza el cursor sobre el enlace
                        menu.addEventListener('click', agregarGift);

                    }

                    function agregarGift(e) {
                        e.preventDefault();
                        if (e.target.classList.contains('mnav-li-a')) {
                            console.log('Agregando GIF');
                        }
                    }
                </script>


            </div>
        </div>
    </div>

</div>
<!-- Fin Set -->
