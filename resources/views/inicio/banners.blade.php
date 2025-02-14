@extends('welcome')
@section('title','banners')
@section('contenido')

<!-- Set banners -->
<div class="set-wrapper banners"><!-- ----- ----- ----- ----- ----- ----- ----- ----- Bloque Seccion ----- ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
    <div class="container-fluid box-banners-short">

        <hr>
        <div class="row">
            <div class="col-sm-6"><a href="http://observatorio.movilidadbogota.gov.co/" rel="noopener noreferrer" target="_blank"><img alt="Observatorio de Movilidad de Bogotá" class="img-responsive bs zoom w-100 img-rounded" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/01-11-2024/banner_observatorio_movilidad_banner_omb_450x150.png" title="Observatorio de Movilidad de Bogotá"> </a></div>
            <div class="col-sm-6"><a href="https://www.movilidadbogota.gov.co/web/ventanilla_unica_de_servicios" rel="noopener noreferrer" target="_blank" title="Click aquí para acceder a la Ventanilla Unica de Servicios"><img alt="Clic aquí para Consulta y pagos de comparendos" class="img-responsive bs zoom w-100 img-rounded" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-05-2023/vus_banner_abr2023_2.jpg"> </a></div>
        </div>
        <div class="row">
            <div class="col-sm-6"><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/11-03-2024/diseno_documento_abece_consulta_y_pago_de_comparendos.pdf" rel="noopener noreferrer" target="_blank"><img alt="Ir a abecé consulta y pago de comparendos" class="img-responsive bs zoom w-100 img-rounded" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/11-03-2024/prioridad_-_favor_diseno_banner_abece_consulta_y_pago_de_comparendos_450x150.png" title="Ir a abecé consulta y pago de comparendos"> </a></div>
            <div class="col-sm-6"><a href="https://www.movilidadbogota.gov.co/web/consulta_de_comparendos" rel="noopener noreferrer" target="_blank"><img alt="Click aquí para acceder al sitio de consulta de comparendos" class="img-responsive bs zoom w-100 img-rounded focusable" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-03-2022/comparendos_20220220307_xs.jpg" title="Consulta de Comparendos"> </a></div>
        </div>
        <div class="row">
            <div class="col-sm-6"><a href="https://www.movilidadbogota.gov.co/web/ORVI" rel="noopener noreferrer" target="_blank"><img alt="Clic aquí para acceder a orientación a las victimas de siniestros viales - ORVI" class="img-rounded w-100 img-responsive bs" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/14-04-2023/banner_orvi_450-150.png" title="Clic aquí para acceder a orientación a las victimas de siniestros viales - ORVI"> </a></div>
            <div class="col-sm-6"><a href="https://registrobicibogota.movilidadbogota.gov.co/" rel="noopener noreferrer" target="_blank"><img alt="Ir a Registro Bici Bogotá" class="img-rounded w-100 img-responsive bs" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-11-2023/rb_450x150.jpg" title="Banner de Registro Bici Bogotá"> </a></div>
        </div>
        <div class="row">
            <div class="col-sm-6"><a href="https://www.movilidadbogota.gov.co/web/cero_y_bajas_emisiones/home" rel="noopener noreferrer" target="_blank"><img alt="Clic aqui para ir a la Agencia Regional de Movilidad - ARM" class="img-responsive bs zoom w-100 img-rounded" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/06-12-2024/balance-pcbe-pieza-banner-450px.jpg" title="Clic aquí para ir al sitio web de Cero y bajas emisiones"> </a></div>
            <div class="col-sm-6"><a href="https://www.movilidadbogota.gov.co/web/cursos_teorico_practicos_motociclistas" rel="noopener noreferrer" target="_blank"><img alt="Cursos Teórico Prácticos de Conducción en Moto" class="img-responsive bs zoom w-100 img-rounded" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/23-02-2023/2023-02-08_banner_cursos_motos_900x300.png" title="Cursos Teórico Prácticos de Conducción en Moto"> </a></div>
        </div>
        <hr>

        <!-- Sección de imágenes en contenedor slider para dispositivos panorámicos-->
        <div class="row">
            <div class="col-sm-12 hidden-xs">
                <div class="carousel slide" data-interval="10000" data-ride="carousel" id="carousel_banner_lg">
                    <ol class="carousel-indicators">
                        <li class="active" data-slide-to="0" data-target="#carousel_banner_lg"></li>
                        <li data-slide-to="1" data-target="#carousel_banner_lg"></li>
                        <li data-slide-to="2" data-target="#carousel_banner_lg"></li>
                        <li data-slide-to="3" data-target="#carousel_banner_lg"></li>
                        <li data-slide-to="4" data-target="#carousel_banner_lg"></li>
                        <li data-slide-to="5" data-target="#carousel_banner_lg"></li>
                        <li data-slide-to="6" data-target="#carousel_banner_lg"></li>
                        <li data-slide-to="7" data-target="#carousel_banner_lg"></li>
                        <li data-slide-to="8" data-target="#carousel_banner_lg"></li>
                        <li data-slide-to="9" data-target="#carousel_banner_lg"></li>
                        <li data-slide-to="10" data-target="#carousel_banner_lg"></li>
                        <li data-slide-to="11" data-target="#carousel_banner_lg"></li>
                        <li data-slide-to="12" data-target="#carousel_banner_lg"></li>
                        <li data-slide-to="13" data-target="#carousel_banner_lg"></li>
                        <li data-slide-to="14" data-target="#carousel_banner_lg"></li>
                        <li data-slide-to="15" data-target="#carousel_banner_lg"></li>
                        <li data-slide-to="16" data-target="#carousel_banner_lg"></li>
                        <li data-slide-to="17" data-target="#carousel_banner_lg"></li>
                    </ol>

                    <div class="carousel-inner">
                        <div class="item active"><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/24-10-2023/mimovilidad_abc_oct2023_v3_0.pdf" rel="noopener noreferrer" target="_blank"><img alt="Banner Abecé de Mi Movilida a un Clic" class="img-rounded w-100 img-responsive bs" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/05-07-2024/bitmap_pagina_1_abc_mimovilidad.png"></a></div>
                        <div class="item"><a href="https://datos.movilidadbogota.gov.co/" rel="noopener noreferrer" target="_blank"><img alt="Banner datos abiertos" class="img-rounded w-100 img-responsive bs" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/09-12-2024/bitmap_pagina_1.png"></a></div>
                        <div class="item"><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/05-06-2024/protocolo_vehiculos_inmovilizados_1_3.pdf" rel="noopener noreferrer" target="_blank"><img alt="Banner protocolo salida de vehículo" class="img-rounded w-100 img-responsive bs" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/05-06-2024/banner_protocolo_lg.png"></a></div>
                        <div class="item"><a href="https://www.movilidadbogota.gov.co/subsitp/" rel="noopener noreferrer" target="_blank"><img alt="Banner " class="img-rounded w-100 img-responsive bs" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/28-11-2023/sdm_boton_tullave_1014x169.png"></a></div>
                        <div class="item"><a href="https://tembici.com.co/" rel="noopener noreferrer" target="_blank"><img alt="Click aquí para acceder al sistema de bicicletas compartidas" class="img-rounded w-100 img-responsive bs" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/26-06-2023/banner_compartidas_230626_1920x320.png" title="Click aquí para acceder al sistema de bicicletas compartidas"></a></div>
                        <div class="item"><a href="https://www.movilidadbogota.gov.co/web/beneficio_de_circulacion" rel="noopener noreferrer" target="_blank"><img alt="De clic aquí para conocer más acerca del beneficio de circulación por condiciones ambientales" class="img-rounded w-100 img-responsive bs" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-03-2023/boton_inscripcion_beneficio_ambiental_carga_1014x169.jpg" title="Beneficio de circulación por condiciones ambientales"></a></div>
                        <div class="item"><a href="https://www.movilidadbogota.gov.co/web/sisben_iv" rel="noopener noreferrer" target="_blank"><img alt="Ir a Sisben IV" class="img-rounded w-100 img-responsive bs" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/26-06-2023/banner_sisben_230626_1920x320.png" title="Ir a Sisben IV"></a></div>
                        <div class="item"><a href="https://www.movilidadbogota.gov.co/web/tus_acciones_salvan_vidas" rel="noopener noreferrer" target="_blank"><img alt="Clic aqui para ingresar tus acciones salvan vidas" class="img-rounded w-100 img-responsive bs" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/26-06-2023/banner_mtasv_230626_1920x320.png" title="Clic aqui para ingresar tus acciones salvan vidas"></a></div>
                        <div class="item"><a href="https://www.movilidadbogota.gov.co/web/avisos_electronicos" rel="noopener noreferrer" target="_blank"><img alt="Ingresa aquí para ir a Notificaciones Procesos Disciplinarios" class="img-rounded w-100 img-responsive bs" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/15-03-2022/diciplinarios_sm.png" title="Ingresa aquí para ir a Notificaciones Procesos Disciplinarios"></a></div>
                        <div class="item"><a href="https://www.movilidadbogota.gov.co/web/transparencia/conoce_propone_y_prioriza" rel="noopener noreferrer" target="_blank"><img alt="Aquí puede acceder a la información clave sibre Bogotá, Conoce, Propone y Prioriza" class="img-rounded w-100 img-responsive bs" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-04-2022/conoceproponeprioriza_lg.webp" title="Aquí puede acceder a la información clave sibre Bogotá, Conoce, Propone y Prioriza"></a></div>
                        <div class="item"><a href="https://www.movilidadbogota.gov.co/web/integridad_antisoborno_y_anticorrupcion" rel="noopener noreferrer" target="_blank"><img alt="Portal Transparencia, Antisoborno y Anticorrupción" class="img-rounded w-100 img-responsive bs" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-10-2021/banner_antisoborno_micrositio-02_1.jpg" title="Portal Transparencia, Antisoborno y Anticorrupción"></a></div>
                        <div class="item"><a href="https://www.movilidadbogota.gov.co/web/RoadSafetyLab" rel="noopener noreferrer" target="_blank"><img alt="Road Safety Lab - Convocatoria Internacional de Desarrollo Tecnológicos para la Seguridad Vial" class="img-rounded w-100 img-responsive bs" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/01-10-2021/roadsafetylab_1921x321.jpg" title="Road Safety Lab - Convocatoria Internacional de Desarrollo Tecnológicos para la Seguridad Vial"></a></div>
                        <div class="item"><a href="https://www.movilidadbogota.gov.co/web/nueva-concesion-tramites-servicios-movilidad" rel="noopener noreferrer" target="_blank"><img alt="Concesión de Tramites y Servicios de Movilidad" class="img-rounded w-100 img-responsive bs" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-09-2021/concesion_tramites_sm_0.png" title="Concesión de Tramites y Servicios de Movilidad"></a></div>
                        <div class="item"><a href="https://www.movilidadbogota.gov.co/web/politica_publica_de_la_bicicleta" rel="noopener noreferrer" target="_blank"><img alt="Políica publica de la bicicleta" class="img-rounded w-100 img-responsive bs" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-06-2021/np-politicapublicabicicleta_1.png" title="Política publica de la bicicleta"></a></div>
                        <div class="item"><a href="https://www.movilidadbogota.gov.co/web/encuesta_de_movilidad_2019" rel="noopener noreferrer" target="_blank"><img alt="Encuentra aquí los datos más relevantes para la movilidad en Bogotá" class="img-rounded w-100 img-responsive bs" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-06-2021/np-movilidaddatos_1.png" title="Encuentra aquí los datos más relevantes para la movilidad en Bogotá:"> </a></div>
                        <div class="item"><a href="https://www.movilidadbogota.gov.co/web/plan-desarrollo-economico-social-ambiental-2020-2024" rel="noopener noreferrer" target="_blank"><img alt="Plan de Desarrollo Económico, Social, Ambiental y de Obras Públicas del Distrito Capital  2020 - 2024" class="img-rounded w-100 img-responsive bs" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-06-2021/np-nuevocontratosocialambienta_1.png" title="Plan de Desarrollo Económico, Social, Ambiental y de Obras Públicas del Distrito Capital  2020 - 2024"> </a></div>
                        <div class="item"><a href="https://www.movilidadbogota.gov.co/web/cicloparqueaderos" rel="noopener noreferrer" target="_blank"><img alt="Mas y mejores cicloparqueaderos" class="img-rounded w-100 img-responsive bs" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-06-2021/np-cicloparqueaderos_1.png" title="Mas y mejores cicloparqueaderos"></a></div>
                        <div class="item"><a href="http://zonadeparqueopago.gov.co/" rel="noopener noreferrer" target="_blank"><img alt="Click aquí para ir a Zonas de Parqueo Pago" class="img-rounded w-100 img-responsive bs" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/18-07-2023/banner_zonas_parqueo_1014x169.png" title="Banner Zonas de Parqueo Pago"></a></div>
                        <div class="item"><a href="https://www.movilidadbogota.gov.co/web/abecedesembargos" rel="noopener noreferrer" target="_blank"><img alt="Click aquí para ir a abecé desembargos" class="img-rounded w-100 img-responsive bs" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/10-02-2022/boton_desembargos_boton_desembargo_1920x320_foto.png" title="Banner abecé desembargos"></a></div>
                    </div>
                </div>
            </div>
            <!-- fin carrusel largo --><!-- carrusel en contenedor slider para dispositivos móviles -->

            <div class="col-xs-12 visible-xs-12 visible-xs-block">
                <div class="carousel slide" data-interval="10000" data-ride="carousel" id="carousel-sdm-xs">
                    <ol class="carousel-indicators">
                        <li class="active" data-slide-to="0" data-target="#carousel-sdm-xs"></li>
                        <li data-slide-to="1" data-target="#carousel-sdm-xs"></li>
                        <li data-slide-to="2" data-target="#carousel-sdm-xs"></li>
                        <li data-slide-to="3" data-target="#carousel-sdm-xs"></li>
                        <li data-slide-to="4" data-target="#carousel-sdm-xs"></li>
                        <li data-slide-to="5" data-target="#carousel-sdm-xs"></li>
                        <li data-slide-to="6" data-target="#carousel-sdm-xs"></li>
                        <li data-slide-to="7" data-target="#carousel-sdm-xs"></li>
                    </ol>

                    <div class="carousel-inner">
                        <div class="item active"><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/24-10-2023/mimovilidad_abc_oct2023_v3_0.pdf" rel="noopener noreferrer" target="_blank"><img alt="Banner Abecé de Mi Movilida a un Clic" class="img-rounded w-100 img-responsive bs" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/05-07-2024/bitmap_pagina_2_abc_mimovilidad.png"></a></div>G
                        <div class="item"><a href="https://datos.movilidadbogota.gov.co/" rel="noopener noreferrer" target="_blank"><img alt="Banner datos abiertos movilidad" class="img-rounded w-100 img-responsive bs" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/09-12-2024/bitmap_pagina_2.png"></a></div>
                        <div class="item"><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/05-06-2024/protocolo_vehiculos_inmovilizados_1_3.pdf" rel="noopener noreferrer" target="_blank"><img alt="Banner protocolo salida de vehículo" class="img-rounded w-100 img-responsive bs" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/05-07-2024/protocolo_vehiculos_inmovilizados_xs_pagina_19.png"></a></div>
                        <div class="item"><a href="https://www.movilidadbogota.gov.co/subsitp/" rel="noopener noreferrer" target="_blank"><img alt="Banner tu llave" class="img-rounded w-100 img-responsive bs" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/28-11-2023/sdm_boton_tullave_450x150.png"></a></div>
                        <div class="item"><a href="https://tembici.com.co/" rel="noopener noreferrer" target="_blank"><img alt="Click aquí para acceder al sistema de bicicletas compartidas" class="img-rounded w-100 img-responsive bs" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/28-09-2022/sbcb_900x300.png" title="Click aquí para acceder al sistema de bicicletas compartidas"></a></div>
                        <div class="item"><a href="https://www.movilidadbogota.gov.co/web/beneficio_de_circulacion" rel="noopener noreferrer" target="_blank"><img alt="De clic aquí para conocer más acerca del beneficio de circulación por condiciones ambientales" class="img-rounded w-100 img-responsive bs" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-03-2023/boton_inscripcion_beneficio_ambiental_carga_450x150.jpg" title="Beneficio de circulación por condiciones ambientales"></a></div>
                        <div class="item"><a href="https://www.movilidadbogota.gov.co/web/sisben_iv" rel="noopener noreferrer" target="_blank"><img alt="Ir a Sisben IV" class="img-rounded w-100 img-responsive bs" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-11-2022/banner_sisben_iv_900x300.jpg" title="Ir a Sisben IV"></a></div>
                        <div class="item"><a href="https://www.movilidadbogota.gov.co/web/avisos_electronicos" rel="noopener noreferrer" target="_blank"><img alt="Ingresa aquí para ir a " aqu="" class="img-rounded w-100 img-responsive bs" ingresa="" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/15-03-2022/diciplinarios_xs.png" title=""></a></div>
                        <div class="item"><a href="https://www.movilidadbogota.gov.co/web/transparencia/conoce_propone_y_prioriza" rel="noopener noreferrer" target="_blank"><img alt="Aquí puede acceder a la información clave sibre Bogotá, Conoce, Propone y Prioriza" class="img-rounded w-100 img-responsive bs" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-04-2022/conoceproponeprioriza_xs.webp" title="Aquí puede acceder a la información clave sibre Bogotá, Conoce, Propone y Prioriza"></a></div>
                        <div class="item"><a href="https://www.movilidadbogota.gov.co/web/integridad_antisoborno_y_anticorrupcion" rel="noopener noreferrer" target="_blank"><img alt="Road Safety Lab - Convocatoria Internacional de Desarrollo Tecnológicos para la Seguridad Vial" class="img-rounded w-100 img-responsive bs" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/13-08-2021/banner_t-a-a_anticorrupcion_900.jpg" title="Portal Transparencia, Antisoborno y Anticorrupción"></a></div>
                        <div class="item"><a href="https://www.movilidadbogota.gov.co/web/RoadSafetyLab" rel="noopener noreferrer" target="_blank"><img alt="Portal Transparencia, Antisoborno y Anticorrupción" class="img-rounded w-100 img-responsive bs" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/01-10-2021/roadsafetylab_901x300.jpg" title="Road Safety Lab - Convocatoria Internacional de Desarrollo Tecnológicos para la Seguridad Vial"></a></div>
                        <div class="item"><a href="https://www.movilidadbogota.gov.co/web/nueva-concesion-tramites-servicios-movilidad" rel="noopener noreferrer" target="_blank"><img alt="Concesión de Tramites y Servicios de Movilidad" class="img-rounded w-100 img-responsive bs" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-09-2021/concesion_tramites_xs_0.png" title=""></a></div>
                        <div class="item"><a href="https://www.movilidadbogota.gov.co/web/politica_publica_de_la_bicicleta" rel="noopener noreferrer" target="_blank"><img alt="Política publica de la bicicleta" class="img-rounded w-100 img-responsive bs" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-06-2021/np-politicapublicabicicleta_2.png" title="Política publica de la bicicleta"></a></div>
                        <div class="item"><a href="https://www.movilidadbogota.gov.co/web/encuesta_de_movilidad_2019" rel="noopener noreferrer" target="_blank"><img alt="Encuentra aquí los datos más relevantes para la movilidad en Bogotá" class="img-rounded w-100 img-responsive bs" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-06-2021/np-movilidaddatos_2.png" title="Encuentra aquí los datos más relevantes para la movilidad en Bogotá:"></a></div>
                        <div class="item"><a href="https://www.movilidadbogota.gov.co/web/plan-desarrollo-economico-social-ambiental-2020-2024" rel="noopener noreferrer" target="_blank"><img alt="Plan de Desarrollo Económico, Social, Ambiental y de Obras Públicas del Distrito Capital  2020 - 2024" class="img-rounded w-100 img-responsive bs" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-06-2021/np-nuevocontratosocialambienta_2.png" title="Plan de Desarrollo Económico, Social, Ambiental y de Obras Públicas del Distrito Capital  2020 - 2024"> </a></div>
                        <div class="item"><a href="https://www.movilidadbogota.gov.co/web/cicloparqueaderos" rel="noopener noreferrer" target="_blank"><img alt="Mas y mejores cicloparqueaderos" class="img-rounded w-100 img-responsive bs" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-06-2021/np-cicloparqueaderos_2.png" title="Mas y mejores cicloparqueaderos"></a></div>
                        <div class="item"><a href="https://zonadeparqueopago.gov.co/" rel="noopener noreferrer" target="_blank"><img alt="Click aquí para ir a Zonas de Parqueo Pago" class="img-rounded w-100 img-responsive bs" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/18-07-2023/banner_zonas_parqueo_900x300.png" title="Banner Zonas de Parqueo Pago"></a></div>
                        <div class="item"><a href="https://www.movilidadbogota.gov.co/web/abecedesembargos" rel="noopener noreferrer" target="_blank"><img alt="Click aquí para ir a abecé desembargos" class="img-rounded w-100 img-responsive bs" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/10-02-2022/boton_desembargos_boton_desembargo_900x300.png" title="Banner abecé desembargos"></a></div>
                    </div>
                </div>
            </div>
            <!-- fin carrusel corto -->
        </div>
        <!--Fin Sección de imágenes en contenedor slider -->
        <style type="text/css">
            .box-banners-short .carousel-indicators {
                position: absolute;
                /* margin-left: 100px; */
                bottom: -30px !important;
            }

            .box-banners-short .carousel-indicators li {
                background-color: #fff !important;
                border: 1px solid #191C3A !important;
            }

            .box-banners-short .carousel-indicators .active {
                background-color: #66e026 !important;
            }

            .img-rounded {
                margin: 10px 0px 10px 0px;

                display: flex;
                justify-content: center;
                vertical-align: middle;
                align-items: center;
                border: solid 1px #f5f5f5;

            }
        </style>
        <!-- Fin Bloque   -->
    </div>
    <!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin Bloque Sección  ----- ----- ----- ----- ----- ----- ----- ----- ------ --><!-- ----- ----- ----- ----- ----- ----- ----- -----  Hoja de estilo ---- ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
    <style type="text/css">
        .field-item.even h2 {
            visibility: hidden;
            margin-top: -50px;
        }

        .region-content {
            padding: 0px;
            overflow: hidden;
        }

        .box-banners-short {
            font-size: 13px !important;
            line-height: 1.4 !important;
            max-width: 980px;
        }

        .w-100 {
            width: 100%;
        }
    </style>
    <!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin hoja de estilo  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
    <style type="text/css">
        .img-noticia-hist img {
            max-width: 100%;
            margin: auto;
            padding: 15px;
        }

        .table-borderless img {
            display: flex;
            max-width: 100%;
            width: 350px;
            margin: auto;
            padding: 8px;
            height: 250px;
        }
    </style>
</div>
<!-- Fin Set -->
