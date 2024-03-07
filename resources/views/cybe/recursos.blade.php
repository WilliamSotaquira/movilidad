@extends('welcome')
@section('title','recursos')
@section('contenido')

<!-- Set recursos -->
<style>
    .recursos .title-type-ppal {
        font-size: 32px;
        color: #252525;
        text-align: center;
        margin-bottom: 32px;
        color: #1c2046;
        font-family: 'Montserrat', sans-serif;
        text-transform: uppercase;
        font-weight: light;
    }

    .recursos .img-r1 {
        margin-bottom: 32px;
        padding: 32px;
        max-width: 800px;
        margin: auto;

    }

    .recursos .title-type-2 {
        font-size: 20px;
        color: #1c2046;
        text-align: left;
        font-weight: 500;
        margin-bottom: 32px;
        display: inline-block;
        border-bottom: solid 2px #1c2046;
        width: 100%;
        padding-bottom: 12px;
    }

    .recursos .ph-type-1 {
        font-size: 16px;
        color: #252525;
        text-align: left;
        margin-bottom: 24px;
    }

    .recursos ul li {
        font-size: 16px;
        color: #252525;
        text-align: left;
        margin-bottom: 16px;
    }
</style>
<div class="set-wrapper recursos">
    <h2 class="title title-type-ppal title-id-1">Recursos</h2>

    <section id="escolares" class="escolares">
        <h3 class="title title-type-2 title-id-1-1">Proyecto de electrificación de rutas escolares</h3>
        <div class="imagen img-r1">
            <img class="img-responsive w-100" src="https://via.placeholder.com/800x350" alt="" title="">
        </div>
        <p class="paragraph ph-type-1 ph-id-r1">Con el apoyo de la Cooperación internacional City Climate Finance Gap Fund (Gap Fund) la Secretaría Distrital de Movilidad adelantó la consultoría "Previabilidad del ascenso tecnológico de la flota escolar para la ciudad de Bogotá" cuyo alcance fue, conceptualizar un proyecto piloto y opciones de escalabilidad para la electrificación de la flota escolar de Bogotá, tanto para colegios públicos como privados.</p>
        <p class="paragraph ph-type-1 ph-id-r2">Producto de esta consultoría, se realizaron tres entregas documentadas, cuyos temas centrales son los siguientes:</p>
        <ul>
            <li>Desarrollar una comprensión integral del estado actual de operación de las flotas de buses escolares de Bogotá. <a href="">Estudio de la flota actual de buses escolares que operan en Bogotá.</a></li>
            <li>Identificar las partes interesadas, los posibles modelos de negocio y las estructuras de financiación para la electrificación. <a href="">Actores claves, modelos de negocio posibles y estructuras de financiación para la electrificación de la flota.</a></li>
            <li>Diseñar una hoja de ruta con acciones prioritarias para la fase piloto del proceso de electrificación. <a href="">Hoja de ruta con acciones prioritarias para la fase piloto y la fase de escalabilidad.</a></li>
        </ul>
    </section>

    <section id="recarga" class="recarga">
        <h3 class="title title-type-2 title-id-1-2">Infraestructura de recarga</h3>
        <div class="imagen img-r1">
            <img class="img-responsive w-100" src="https://via.placeholder.com/800x350" alt="" title="">
        </div>
        <p class="paragraph ph-type-1 ph-id-r3"><a href="">Guía de provisión de de energía para vehículos eléctricos en Colombia modelos de negocio</a> - Desarrollado por Transconsult a partir de cooperación técnica con GIZ, se analizaron diferentes esquemas y modelos de negocio para la proveeduría de energía para vehículos eléctricos en Colombia.</p>
        <p class="paragraph ph-type-1 ph-id-r4"><a href="">Asesoría Bogotá modelos de negocio para recarga de vehículos eléctricos</a> - Desarrollado por Transconsult a partir de cooperación técnica con GIZ, se analizó el marco normativo, contractual y técnico para el desarrollo del modelo de negocio de recarga de vehículos eléctricos en el mediano plazo con enfoque en la flota de taxis.</p>
        <p class="paragraph ph-type-1 ph-id-r5"><a href="">Lineamientos para la implementación de la estrategia de despliegue de infraestructura (primera etapa)</a> - En asistencia técnica con Asociación Sustentar - LEDS LAC, se realizó el estado del arte, incluyendo análisis normativo, mapeo de actores, descripción de oferta de vehículos eléctricos y de infraestructura de recarga.</p>
        <p class="paragraph ph-type-1 ph-id-r6"><a href="">Lineamientos para la implementación de la estrategia de despliegue de infraestructura (segunda etapa)</a> - En asistencia técnica con Asociación Sustentar - LEDS LAC, se revisaron las mejores prácticas internacionales, los incentivos, costos y se desarrolló la guía de despliegue de infraestructura de recarga para vehículos eléctricos. </p>
        <p class="paragraph ph-type-1 ph-id-r5"><a href=""></a></p>
    </section>

    <section id="logistica" class="logistica">
        <h3 class="title title-type-2 title-id-1-3">Logística baja en carbono</h3>
        <div class="imagen img-r1">
            <img class="img-responsive w-100" src="https://via.placeholder.com/800x350" alt="" title="">
        </div>
        <p class="paragraph ph-type-1 ph-id-r7"><a href="">Plan de acción de logística urbana baja en carbono</a> - En asistencia técnica con ICLEI - Gobiernos Locales por la Sustentabilidad, orienta el camino para que Bogotá reduzca las emisiones de gases de efecto invernadero (GEI) en el sector de logística urbana.</p>
        <p class="paragraph ph-type-1 ph-id-r8"><a href="">Piloto de Bicicarga</a> - Micrositio del Piloto de bicicarga implementado por la SDM, que buscó promover alternativas de distribución final de carga en la ciudad, mediante el uso de bicicletas eléctricas.</p>
    </section>

    <section id="logistica" class="logistica">
        <h3 class="title title-type-2 title-id-1-4">Impactos del transporte</h3>
        <div class="imagen img-r1">
            <img class="img-responsive w-100" src="https://via.placeholder.com/800x350" alt="" title="">
        </div>
        <p class="paragraph ph-type-1 ph-id-r9"><a href="">Desarrollo de herramientas para la evaluación integrada de impactos en salud del transporte en América Latina </a> - Desarrollado por el Banco Mundial, evalúa de manera integral los impactos en salud del transporte bajo escenarios que incentivan el uso de la bicicleta, en ciudades de países de ingresos bajos y medios.</p>
    </section>



</div>
<!-- Fin Set -->
