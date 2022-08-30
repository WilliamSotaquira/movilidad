@extends('welcome')
@section('contenido')
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fuente Montserrat -----  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<link rel='preconnect' href='https://fonts.googleapis.com'>
<link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
<link href='https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap' rel='stylesheet'>
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin Fuente Montserrat -  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<!-- Set Wrapper -->
<div class='container-fluid convocatoriaMujer'>
    <div class='box-wrp'>
        <div class='box-head'>
            <div class="img-ppal">
                <div class='imagen'>
                </div>
            </div>
            <div class="titulo">
                <h1>¡MUJER!</h1>
                <h4><strong>¿Quieres capacitarte gratuitamente y participar de un proceso de formación para trabajar en la operación del Sistema Integrado de Transporte Público SITP de la ciudad?</strong></h4>
                <h4>Estamos buscando mujeres para hacer parte de un proceso de recategorización de licencias de B3 o C1 a C2, que les permita aplicar en las vacantes laborales como conductoras de buses del SITP.</h4>
            </div>
        </div>
        <style>
            .box-head {
                display: grid;
                /* gap: 10px; */
                grid-auto-flow: dense;
                grid-template-columns: 1fr;
                grid-template-rows: auto;
                grid-template-areas:
                    'img-ppal'
                    'titulo';
                background-color: #fff;

            }

            .box-head .img-ppal {
                grid-area: img-ppal;
                min-height: 250px;
                background-image: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/23-08-2022/convocatoriamujer_a.png');
                background-size: cover;
                background-position: right;
                background-repeat: no-repeat;
            }

            .box-head .titulo {
                height: auto;
                padding: 16px;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;

                /* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#9670ae+0,207cca+0,9670ae+100&0.75+1,0+100,1+100 */
                background: -moz-linear-gradient(-45deg, rgba(32, 124, 202, 0.75) 0%, rgba(33, 124, 202, 0.75) 1%, rgba(150, 112, 174, 1) 100%);
                /* FF3.6-15 */
                background: -webkit-linear-gradient(-45deg, rgba(32, 124, 202, 0.75) 0%, rgba(33, 124, 202, 0.75) 1%, rgba(150, 112, 174, 1) 100%);
                /* Chrome10-25,Safari5.1-6 */
                background: linear-gradient(135deg, rgba(32, 124, 202, 0.75) 0%, rgba(33, 124, 202, 0.75) 1%, rgba(150, 112, 174, 1) 100%);
                /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
                filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#bf207cca', endColorstr='#9670ae', GradientType=1);
                /* IE6-9 fallback on horizontal gradient */

            }

            .box-head .titulo h1 {
                font-size: 42px;
                font-weight: 700;
                text-align: center;
                line-height: 1;
                color: rgba(255, 255, 255, 1);
                margin: 16px;
                letter-spacing: 2;
                background-color: #d31d7c;
                padding: 8px;
            }

            .box-head .titulo h4 {
                /* font-size: 1em; */
                font-weight: 500;
                text-align: center;
                line-height: 1.2;
                color: rgba(255, 255, 255, 1);
                margin: 8px;
            }
        </style>
        <div class="box-body">

            <div class="box-boton">
                <a href="https://forms.gle/PdQGMSkyu6VQXpfm8" target="_blank" rel="noopener noreferrer">Inscríbete aquí</a>
            </div>

            <ol>
                <li>
                    <div>
                        <h4>¿Por qué emplear mujeres en el sector transporte público y/o de servicios en los roles de conductoras?</h4>
                        <p>El sector transporte es un sector masculinizado, así es que la mayor parte de la fuerza laboral en conducción y mantenimiento ha estado ocupada por hombres.</p>
                        <p>Desde la articulación intersectorial, interinstitucional, pública y privada, para el desarrollo de este proyecto, se contribuye con el cierre de brechas de género en la ciudad relacionadas con el acceso al empleo, convirtiéndose así en un ejemplo de buenas prácticas frente a la garantía del derecho al trabajo de las mujeres en condiciones de igualdad y dignidad.</p>
                    </div>
                </li>
                <li>
                    <h4>¿En qué consiste la convocatoria a mujeres que abre el Distrito?</h4>
                    <p>Consiste en la búsqueda y selección de mujeres quienes harán parte de un proceso de recategorización de licencias de conducción y de formación para alcanzar el cumplimiento de los requisitos que se necesitan para ser operadoras del transporte público en Bogotá.</p>
                </li>
                <li>
                    <h4>¿Desde cuándo está abierta y cuándo se cierra?</h4>
                    <p>La convocatoria está abierta desde el 24 de agosto de 2022 y cierra el 30 de septiembre de 2022.</p>
                </li>
                <li>
                    <h4>¿A qué mujeres va dirigida? </h4>
                    <p>A todas las mujeres mayores de edad, es decir que hayan cumplido 18 años, en sus diversidades, que cuenten con bachillerato completo, licencia de conducción categoría C1 activa, y que quieran hacer parte de un proceso de recategorización de licencias de conducción y preparación para la incursión como operadoras del sistema de transporte público de Bogotá.</p>
                </li>
                <li>
                    <h4>¿La convocatoria está abierta a mujeres de otros países o únicamente a las de Colombia?</h4>
                    <p>Cualquier mujer mayor de edad, con nacionalidad colombiana o migrante, que cuente, en el caso de ser venezolana, con el permiso de protección temporal o la condición de refugiada, o que tenga visa de trabajo, puede aplicar a la convocatoria del proceso de formación. En todo caso sus documentos deben estar vigentes. Además, debe cumplir con los demás criterios de selección.</p>
                </li>
                <li>
                    <h4>¿Qué sucede si una mujer quiere atender la convocatoria y no cuenta con licencia de conducción?</h4>
                    <p>Es condición que tenga licencia C1, activa y experiencia en la conducción.</p>
                </li>
                <li>
                    <h4>Cuántas mujeres podrán participar en el programa?</h4>
                    <p>Pueden aplicar todas las mujeres que cumplan con los requisitos definidos en la presente convocatoria y de ellas serán seleccionadas 300, para su proceso de recategorización.</p>
                </li>
                <li>
                    <h4>¿Hay preferencia por la localidad donde habitan las mujeres que atiendan la convocatoria?</h4>
                    <p>Pueden presentarse mujeres de todas las localidades de Bogotá y el municipio de Soacha.</p>
                </li>
                <li>
                    <h4>¿Qué grado de escolaridad se necesita para aplicar a la convocatoria?</h4>
                    <p>Como mínimo bachillerato completo.</p>
                </li>
                <li>
                    <h4>Si una mujer se quiere postular y tiene niños pequeños o de brazos ¿Puede hacerlo?</h4>
                    <p>Sí.</p>
                </li>
                <li>
                    <h4>Si soy una mujer transexual o me identifico como una pero no he cambiado mi documentación, ¿puedo aplicar a la oferta? </h4>
                    <p>Sí.</p>
                </li>
                <li>
                    <h4>Si el cónyuge ya trabaja en el SITP o en el transporte de servicios, ¿la esposa o compañera puede aplicar a la oferta?</h4>
                    <p>Sí.</p>
                </li>
                <li>
                    <h4>¿Cuántos cupos habrá para etnias y minorías?</h4>
                    <p>No se ha estipulado un porcentaje especial para etnias y minorías. El proyecto contempla la selección de mujeres en sus diversidades.</p>
                </li>
                <li>
                    <h4>Yo quiero participar y cumplo con los requisitos pero no tengo ni idea de cómo conducir un bus SITP o del transporte de servicios. ¿Me puedo postular?</h4>
                    <p>Sí, siempre y cuando cumpla el perfil de los requisitos: ser mayor de 18 años, licencia C1 vigente y como mínimo bachillerato completo.</p>
                </li>
                <li>
                    <h4>¿Tengo licencia de conducción internacional, esta me sirve para aplicar a la vacante?</h4>
                    <p>Si, siempre y cuando esa licencia sea convalidable con C1. En el proyecto se hará la recategorización a C2.</p>
                </li>
                <li>
                    <h4>Esta es una convocatoria distrital de formación en eco-conducción dirigida a mujeres. ¿Qué estratos tendrán prioridad?</h4>
                    <p>Todos.</p>
                </li>
                <li>
                    <h4>¿Cómo participar en la convocatoria?</h4>
                    <p>Lo primero es diligenciar el formulario de preinscripción que se encuentra en el siguiente enlace:</p>
                    <div class="box-boton">
                        <a href="https://forms.gle/PdQGMSkyu6VQXpfm8" target="_blank" rel="noopener noreferrer">Inscríbete aquí</a>
                    </div>
                    <p>Una vez enviado el formulario, la participante debe esperar a que el tiempo de convocatoria de inscripción cierre y sea convocada para surtir los requisitos necesarios en el proceso de selección.</p>
                </li>
                <li>
                    <h4>Si una mujer se postula ¿Cómo sabrá que quedó seleccionada?</h4>
                    <p>La participante será informada por llamada telefónica, Whatsapp o correo electrónico, si fue seleccionada para iniciar el ciclo formativo.</p>
                </li>
                <li>
                    <h4>Si una mujer no queda seleccionada ¿Cómo lo sabrá?</h4>
                    <p>Se le informará por llamada telefónica, Whatsapp o correo electrónico.</p>
                </li>
                <li>
                    <h4>¿Qué documentación deben entregar las mujeres que atiendan la convocatoria?</h4>
                    <p>Solamente deben diligenciar el formulario de preinscripción que se encuentra en el enlace:</p>
                    <div class="box-boton">
                        <a href="https://forms.gle/PdQGMSkyu6VQXpfm8" target="_blank" rel="noopener noreferrer">Inscríbete aquí</a>
                    </div>
                    <p>Una vez cumplan con el proceso de selección de aspirantes y sean seleccionadas, se les solicitará la documentación requerida para el desarrollo del proceso.</p>
                </li>
                <li>
                    <h4>¿Dónde y cuándo deben entregar la documentación?</h4>
                    <p>Una vez se comunique a la participante que ingresa al proceso de selección se iniciará la comunicación con ella para la solicitud de documentos y la información de inicio del proceso.</p>
                </li>
                <li>
                    <h4>¿Qué sucede si una mujer quiere participar pero no tiene cómo pagar ni el curso ni la licencia de conducción que debe tener para ser conductora de SITP?</h4>
                    <p>El desarrollo del proyecto ¡Más mujeres en el sector transporte! Estrategia integral para la capacitación y formación de mujeres en oficios no convencionales para el transporte urbano de Bogotá́, incluye el pago total de la recategorización de las licencias (de B3 a C2 o de C1 a C2).</p>
                </li>
                <li>
                    <h4>¿Pueden aplicar a la oferta laboral mujeres con movilidad reducida?</h4>
                    <p>No hay restricción alguna para la vinculación. Debe tenerse en cuenta sin embargo, que los vehículos a manejar están clasificados como vehículos pesados de pasajeros.</p>
                </li>
                <li>
                    <h4>¿Esta es una convocatoria de formación para el trabajo o de trabajo?</h4>
                    <p>Es una convocatoria de formación para el trabajo.</p>
                </li>
                <li>
                    <p>¿Cuánto dura el tiempo de capacitación?</p>
                    <p>8 meses aproximadamente.</p>
                </li>
                <li>
                    <h4>De llegar a darse un futuro proceso de vinculación ¿Cuál es el tiempo mínimo de experiencia para aplicar a la vacante?</h4>
                    <p>Un año de experiencia laboral, no necesariamente en el oficio al cual se postula. Pero para el proceso de formación es necesario que la aspirante sepa conducir y cuente con licencia de conducción activa, B3 o C1.</p>
                </li>
                <li>
                    <h4>¿Hay diferencia entre los requisitos para manejar un vehículo Troncal (rojo) y un Zonal (azul)?</h4>
                    <p>Sí. Especialmente la categoría de la licencia, experiencia y la capacitación de ingreso requerida.</p>
                </li>
                <li>
                    <h4>¿Hay diferencia salarial entre un conductor de vehículo Troncal (rojo) y de Zonal (azul)?</h4>
                    <p>Sí existen diferencias, sin embargo, es importante aclarar que la convocatoria es únicamente para la operación de vehículos zonales (azules) del SITP de capacidad de 50 pasajeros.</p>
                </li>
                <li>
                    <h4>En el SITP ¿hay diferencia salarial entre mujeres y hombres que conducen vehículos?</h4>
                    <p>No existe ninguna diferencia derivada del género de la persona.</p>
                </li>
                <li>
                    <h4>Si una mujer se postula, hace la capacitación y le sale otro trabajo ¿Qué sucede?</h4>
                    <p>Cuando se decide avanzar en el proceso de formación y capacitación para cumplir con los requisitos exigidos para manejar un vehículo de transporte público, la persona recibirá una serie de beneficios económicos durante todo el proceso. Por tal razón, firmará una cláusula donde estipula la devolución del 50% de lo invertido en su proceso si no lleva a cabo la vinculación al trabajo.</p>
                </li>
                <li>
                    <h4>¿Si soy mujer víctima del conflicto armado puedo participar libremente en la convocatoria?</h4>
                    <p>Sí. Debe cumplir con los requisitos de la convocatoria, el proceso de formación y toda la documentación requerida.</p>
                </li>

            </ol>
        </div>
        <style>
            .box-body {
                padding: 25px;
            }

            .box-body>ol {
                font-weight: 700;
            }

            .box-body ol>li {
                padding-top: 8px;
            }

            .box-body h4 {
                /* font-size: 1em; */
                font-weight: 700;
                text-align: left;
                line-height: 1.4;
                color: rgba(25, 25, 25, 1);
                margin: 8px;
            }

            .box-body p {
                /* font-size: 1em; */
                font-weight: 500;
                text-align: justify;
                line-height: 1.3;
                color: rgba(25, 25, 25, 1);
                margin: 8px;
            }

            /* .box-body ol>li a {
                text-align: center;
                margin: auto;
                display: inline-block;
                width: 100%;
                margin: 25px;
            } */
        </style>

        <div class="box-boton">
            <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/23-08-2022/2022-08-22_abc_ecoconductoras.pdf" target="_blank" rel="noopener noreferrer">Descarga esta información</a>
        </div>

        <style>
            .box-boton {
                /* height: px; */
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }

            .box-boton a {
                background-color: #d31d7c;
                color: #fff;
                text-align: center;
                text-decoration: none !important;
                font-size: 18px;
                padding: 15px;
                border-radius: 5px;
                -webkit-box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.16);
                box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.16);
                margin: 20px;
            }

            .box-boton a:hover {
                background-color: #9670ae;
                color: #fff;
            }
        </style>
    </div>
</div>
<br><br>
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

    .convocatoriaMujer {
        max-width: 980px;
        word-wrap: break-word;
        font-family: 'Montserrat', sans-serif;
        font-size: 15px;
        font-weight: 500;
        text-align: justify;
        line-height: 1.4;
        color: rgba(25, 25, 25, 1);
        margin: 8px;
    }

    /*
    .convocatoriaMujer [class*='col-'] {
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
        .box-head {
            grid-template-columns: repeat(2, 1fr);
            grid-template-areas:
                'img-ppal titulo';
        }

        .box-head .img-ppal {
            grid-area: img-ppal;
            min-height: 250px;
            background-image: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/23-08-2022/convocatoriamujer_b.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

    }

    @media(min-width:992px) {}

    @media(min-width:1200px) {}
</style>
<!-- End Styles -->