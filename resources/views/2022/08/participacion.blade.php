@extends('welcome')
@section('contenido')

<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fuente Montserrat -----  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<link rel='preconnect' href='https://fonts.googleapis.com'>
<link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
<link href='https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap' rel='stylesheet'>
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin Fuente Montserrat -  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<!-- Set Wrapper -->
<div class='container-fluid participacion'>
    <div class='box-wrp'>
        <div class='box-head'>
            <h3 class="text-center"><strong>Participación Ciudadana</strong></h3>
        </div>
        <div>
            <hr>
        </div>
        <div class="box-definicion">
            <h4>De acuerdo a nuestro <strong><i>Plan Institucional de Participación</i></strong> nuestro objetivo es:</h4>
            <p>El objetivo general del presente PIP es <i>“Promover la incidencia de la participación ciudadana en las acciones, proyectos, programas, planes y políticas de la Secretaría Distrital de Movilidad, orientadas al desarrollo de iniciativas de movilidad segura, accesible, incluyente, sostenible y multimodal en el Distrito Capital.”</i></p>
        </div>
        <div class="box-estrategicos">
            <h4 class="text-center"><strong>Ejes Estratégicos del Plan Institucional de Participación</strong></h4>
            <br>
            <ul>
                <li>
                    <p><strong>EJE 1. GESTIÓN DEL CONOCIMIENTO</strong> Aportar herramientas y conocimientos a la ciudadanía, incentivando su participación de manera incidente, viable y efectiva en las políticas, programas y proyectos liderados por la Secretaría Distrital de Movilidad.</p>
                </li>
                <li>
                    <p><strong>EJE 2: MEDIACIÓN COMUNITARIA: GESTIÓN DE CONFLICTOS, RIESGOS SOCIALES Y HECHOS VICTIMIZANTES</strong> Gestionar los conflictos ocasionados por temas de movilidad, o que la afecten, así como los impactos negativos de la implementación, operaciones e infraestructura vial, y los hechos victimizantes de los siniestros viales identificados en el Distrito.</p>
                </li>
                <li>
                    <p><strong>EJE 3: GESTIÓN SOCIAL DE PROYECTOS</strong> Generar acciones que garanticen la inclusión de los procesos de gestión social en las fases de desarrollo del ciclo de programas y proyectos de tránsito, transporte y movilidad, operación e infraestructura vial del servicio de transporte público de pasajeros y transporte no motorizado a cargo de la SDM.</p>
                </li>
                <li>
                    <p><strong>EJE 4: RENDICIÓN DE CUENTAS</strong> Promover la transparencia de la gestión de la administración pública y lograr la adopción de los principios de Buen Gobierno, eficiencia, eficacia, transparencia y rendición de cuentas, en la cotidianidad de la gestión pública de la Secretaría Distrital de Movilidad.</p>
                </li>
                <li>
                    <p><strong>EJE 5: GESTIÓN SOCIAL DE LAS POLÍTICAS PÚBLICAS</strong> Incorporar los enfoques diferenciales, poblacionales, territoriales y de género en los procesos participativos, así como en los planes, programas y proyectos de la Secretaría Distrital de Movilidad, desde una perspectiva incluyente e intersectorial.</p>
                </li>
            </ul>
        </div>
        <div class="box-botonPIP">
            <div class="pip">
                <a href="https://www.movilidadbogota.gov.co/web/transparencia/plan_institucional_de_participacion" target="_blank" rel="noopener noreferrer">
                    <img class='zoom img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/13-07-2022/pip_001.png' alt='Portada de el Plan Institucional de Participación' title='De clic aqui para ir al historico de Plan Institucional De Participación – PIP'>
                </a>
            </div>
            <div class="parrafo-pip">
                <div>
                    <div class='imagen-clm'>
                        <a href="https://www.movilidadbogota.gov.co/web/centros-locales-de-movilidad" target="_blank" rel="noopener noreferrer">
                            <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-07-2022/clm_ninos_logo_0.png' alt='Centros Locales de Movilidad' title='Centros Locales de Movilidad'>
                        </a>
                    </div>
                </div>
                <div>
                    <h4>Aquí podrás acceder al Plan Institucional De Participación</h4>
                </div>
                <a href="https://www.movilidadbogota.gov.co/web/transparencia/plan_institucional_de_participacion" target="_blank" rel="noopener noreferrer">
                    <div class="btn-pip">
                        Ingrese aquí
                    </div>
                </a>
            </div>
        </div>
        <div>
            <hr>
        </div>
        <div class="box-botones">
            <a class="featured" href="https://www.movilidadbogota.gov.co/web/rendicion_de_cuentas_locales" target="_blank" rel="noopener noreferrer">
                <div class="boton-clm zoom">
                    <h4>Rendición de Cuentas Locales</h4>
                </div>
            </a>
            <a class="featured" href="https://www.movilidadbogota.gov.co/web/centros-locales-de-movilidad" target="_blank" rel="noopener noreferrer">
                <div class="boton-clm zoom">
                    <h4>Centros Locales de Movilidad</h4>
                </div>
            </a>
            <a href="https://www.movilidadbogota.gov.co/web/agendas_participativas" target="_blank" rel="noopener noreferrer">
                <div class="boton-clm zoom">
                    <h4>Informes y seguimiento de agendas participativas</h4>
                </div>
            </a>
            <a href="https://www.movilidadbogota.gov.co/web/grupos_de_valor_partes_interesadas_sdm" target="_blank" rel="noopener noreferrer">
                <div class="boton-clm zoom">
                    <h4>Grupos de Valor - Partes Interesadas</h4>
                </div>
            </a>
            <a href="https://www.movilidadbogota.gov.co/web/barrios_vitales" target="_blank" rel="noopener noreferrer">
                <div class="boton-clm zoom">
                    <h4>Barrios Vitales</h4>
                </div>
            </a>
            <a href="https://www.movilidadbogota.gov.co/web/ferias_de_servicio_movil" target="_blank" rel="noopener noreferrer">
                <div class="boton-clm zoom">
                    <h4>Ferias de Servicio Móvil</h4>
                </div>
            </a>
        </div>

    </div>
</div>
<br><br>
<!-- End Set Wrapper -->
<style>
    .box-wrp {
        padding: 16px;
        display: grid;
        gap: 20px;
        grid-auto-flow: dense;
        grid-template-columns: 1fr;
        grid-template-rows: auto;
        grid-template-areas:
            '';
    }

    .box-wrp ul>li {
        padding-top: 16px;
    }

    .box-botonPIP {
        display: grid;
        /* gap: 10px; */
        grid-auto-flow: dense;
        grid-template-columns: 1fr 1fr;
        grid-template-rows: auto;

    }

    .box-botonPIP .pip {
        /* height: px; */
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .box-botonPIP .pip img {
        width: 60%;
        margin: auto;
        border: solid 1px #d5d5d5;
        border-radius: 6px;
        -webkit-box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.16);
        box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.16);
    }

    .parrafo-pip {
        /* height: px; */
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
    }
    .parrafo-pip img{
        max-width: 250px;
        margin: auto;
        padding: 20px;
    }

    .parrafo-pip h4 {
        /* font-size: 1em; */
        font-weight: 700;
        text-align: center;
        line-height: 1.3;
        color: rgba(25, 25, 25, 1);
        margin: 8px;
    }

    .parrafo-pip .btn-pip {
        background-color: rgba(77, 84, 31, 1);
        color: rgba(255, 255, 255, 1);
        padding: 8px 16px;
        margin: 20px;
        border-radius: 3px;
    }

    .parrafo-pip .btn-pip:hover {
        background-color: #A6B517;
        color: rgba(25, 25, 25, 1);

    }

    .parrafo-pip a .btn-pip {
        color: rgba(255, 255, 255, 1);
        text-decoration: none !important;
    }

    .parrafo-pip a .btn-pip:hover {
        color: rgba(25, 25, 25, 1);
    }



    .box-botones {
        display: grid;
        gap: 20px;
        grid-auto-flow: dense;
        grid-template-columns: repeat(auto-fill, minmax(min(100%, 200px), 1fr));
        grid-auto-rows: 90px;
        grid-template-areas:
            '';
    }

    .box-botones a {
        text-decoration: none !important;
        font-size: 16px;
        font-weight: 600;
        text-align: center;
        line-height: 1.1;
        color: rgba(255, 255, 255, 1);

    }

    .box-botones a .boton-clm {
        height: 100%;
        /* height: px; */
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-decoration: none !important;
        border-radius: 4px;
        -webkit-box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.16);
        box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.16);
    }

    .box-botones .boton-clm {
        /* margin: 20px; */
        padding: 10px 8px;
        background-color: rgba(77, 84, 31, 1);
    }

    .box-botones .boton-clm:hover {
        background-color: #A6B517;
    }

    .box-botones .boton-clm h4 {
        font-size: 16px;
        font-weight: 600;
        text-align: center;
        line-height: 1.1;
        color: rgba(255, 255, 255, 1);
        margin: 8px;
    }

    .box-botones .boton-clm:hover h4 {
        color: rgba(25, 25, 25, 1);
    }

</style>

<!-- Styles -->
<style type='text/css'>
    .field-item.even h2 {
        visibility: hidden;
        margin-top: -50px;
    }

    .featured{
       grid-column: span 2;
    }

    .region-content {
        padding: 0px;
        overflow: hidden;
    }

    .participacion {
        max-width: 980px;
        word-wrap: break-word !important;
        font-family: 'Montserrat', sans-serif;
        font-size: 15px;
        font-weight: 500;
        text-align: justify;
        line-height: 1.4;
        color: rgba(25, 25, 25, 1);
        margin: auto;
        padding: 8px;
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
        transform: scale(1.02);
        -moz-transform: scale(1.02);
        /* Firefox */
        -webkit-transform: scale(1.02);
        /* Chrome - Safari */
        -o-transform: scale(1.02);
        /* Opera */
        -ms-transform: scale(1.02);
    }

    /* IE9 */

    .w-100 {
        width: 100%;
    }

    @media(max-width:767px) {}

    @media(min-width:768px) {}

    @media(min-width:992px) {}

    @media(min-width:1200px) {}
</style>
<!-- End Styles -->

Wilmer Caro Ruiz <wilmer.caro@circulemosdigital.com.co>
