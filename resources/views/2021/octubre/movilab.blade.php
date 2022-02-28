<style type="text/css">
    .h2,
    h2 {
        display: none;
    }

    body {
        background-color: #fff !important;
        color: #1D2046;
    }

    .region-content {
        background-color: transparent;
    }

    .color-verde {
        color: #66E026;
    }

    .color-azul {
        color: #1D2046;
    }

    .intro p,
    .intro ul {
        font-size: 18px;
    }

    .intro .fotos img {
        max-width: 200px;
    }

    .titulo {
        color: #1D2046;
        font-size: 30px;
        font-weight: 700;
        margin: 0 0 25px 48px;
        position: relative;
    }

    .titulo:before {
        content: "";
        position: absolute;
        left: -50px;
        top: 0px;
        height: 38px;
        width: 38px;
    }

    .titulo2 {
        font-size: 30px;
        font-weight: 700;
        margin: 20px 20px 20px 0;
    }

    .titulo3 {
        font-size: 20px;
        font-weight: 700;
        margin: 20px 20px 20px 0;
    }

    .fechas-clave li {
        padding-bottom: 20px;
    }

    .fechas-clave li span {
        font-weight: 700;
        color: #66E026;
    }

    .titulo-que-es:before {
        background-image: url("https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/01-07-2020/icon-titulos.png");
    }

    .titulo-quienes-pueden:before {
        background-image: url("https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/01-07-2020/icon-quienes.png");
    }

    .titulo-laboratorio:before {
        background-image: url("https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/01-07-2020/icon-servicios.png");
    }

    .titulo-participa:before {
        background-image: url("https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/01-07-2020/icon-participa.png");
    }

    .titulo-formulario:before {
        background-image: url("https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/01-07-2020/icon-formulario.png");
    }

    .panel-verde {
        border-color: #66E026;
        background-color: #66E026;
        border-radius: 0;
    }

    .panel-verde .panel-heading {
        border-color: #66E026;
        background-color: #66E026;
        background-image: none;
        color: #1C2046;
    }

    .panel-verde .panel-heading a:after {
        font-family: 'Glyphicons Halflings';
        content: "\e080";
        float: right;
        color: #1D2046;
    }

    .panel-verde .panel-heading a.collapsed:after {
        content: "\e114";
    }

    .panel-verde .panel-body a {
        color: #66E026;
        text-decoration: underline;
    }

    .panel-azul {
        border-color: #1D2046;
        background-color: #1D2046;
        border-radius: 0;
    }

    .panel-azul .panel-heading {
        border-color: #1D2046;
        background-color: #1D2046;
        background-image: none;
        color: #66E026;
    }

    .panel-azul .panel-heading a:after {
        font-family: 'Glyphicons Halflings';
        content: "\e080";
        float: right;
        color: #66E026;
    }

    .panel-azul .panel-heading a.collapsed:after {
        content: "\e114";
    }

    .panel-azul .panel-body a {
        color: #66E026;
        text-decoration: underline;
    }

    .panel-group {
        background-color: white;
        color: #000;
    }

    .panel-body {
        background-color: #fff !important;
        color: #1D2046;
        padding: 0;
    }

    .panel-body p,
    .panel-body ul,
    .panel-body ol,
    .panel-body li {
        font-size: 18px;
    }

    .panel {
        border: 0 !important;
        border-radius: 0 !important;
        box-shadow: none !important;
    }

    .panel-heading {
        border-radius: 0 !important;
    }

    .panel-title {
        font-size: 22px;
        font-weight: 600;
    }

    .panel-title a {
        text-decoration: none;
    }

    /*
.panel-heading a:after {
   font-family:'Glyphicons Halflings';
   content:"\e080";
   float: right;
   color: $azul;
}
.panel-heading a.collapsed:after {
   content:"\e114";
}*/
    .footer {
        background: #fff;
        padding: 25px;
        border-top: 10px solid #1D2046;
    }

    .img-center {
        display: block;
        margin: 0 auto;
        max-width: 100%;
    }

    .col-entidad {
        display: flex;
        align-items: center;
        min-height: 80px;
    }

    .d-flex {
        display: flex;
    }

    .align-items-center {
        align-items: center;
    }

    .terminos-referencia a {
        text-decoration: none;
        color: #1D2046;
    }

    .terminos-referencia a i {
        color: #26317F;
    }

    .bg-verde {
        background: #32CC39 !important;
    }

    .btn-propuesta {
        background: #1D2046;
        border: 2px solid #1D2046;
        color: #32CC39 !important;
        width: 100%;
        padding: 10px;
        text-align: center;
        font-size: 20px;
        font-weight: 600;
        text-transform: uppercase;
        border-radius: 30px;
        margin: 20px 0;
        transition: ease all .5s;
        text-decoration: none !important;
    }

    .btn-propuesta:hover {
        background: #32CC39;
        color: #1D2046 !important;
        border: 2px solid #1D2046;
    }

    .bg-motivacion {
        background: url("https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/31-05-2020/bg-motivacion.png");
        background-position: center center;
        background-repeat: no-repeat;
    }

    .border-verde {
        border-left: 2px solid #32CC39;
        padding-left: 10px;
    }

    .btn-animate {
        background-color: #1D2046 !important;
        color: #fff;
        background-image: none !important;
        border-color: #66E026;
        margin: 0 auto;
        font-size: 20px;
        font-weight: 600;
        transition: ease all .5s;
    }

    .btn-animate:hover {
        background-color: #66E026 !important;
        color: #fff;
    }

    .py-50 {
        padding-top: 50px;
        padding-bottom: 50px;
    }

    .py-20 {
        padding-top: 20px;
        padding-bottom: 20px;
    }

    .px-0 {
        padding-left: 0px;
        padding-right: 0px;
    }

    .pr-0 {
        padding-right: 0px;
    }

    .pl-0 {
        padding-left: 0px;
    }

    .pl-30 {
        padding-left: 30px;
    }

    .pl-50 {
        padding-left: 50px;
    }

    .pt-20 {
        padding-top: 20px;
    }

    .pt-30 {
        padding-top: 30px;
    }

    .pt-50 {
        padding-top: 50px;
    }

    .pb-30 {
        padding-bottom: 30px;
    }

    .pb-50 {
        padding-bottom: 50px;
    }

    @media (max-width: 543px) {
        body {
            background-color: #fff !important;
            background-image: none;
        }
    }

    /*# sourceMappingURL=style-mobil-lab.css.map */
</style>
<div class="container-fluid" style="">
    <section class="header-especial">
        <p><img alt="Movil Lab Bogotá" class="img-responsive" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/01-07-2020/header-movil-lab.jpg"></p>
    </section>
    <section class="row intro py-50">
        <div class="col-sm-4 fotos">
            <p class="pb-30"><img alt="¿Qué es?" class="img-responsive img-center" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/01-07-2020/que-es-1.png"></p>
            <p class="hidden-xs"><img alt="¿Qué es?" class="img-responsive img-center" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/01-07-2020/que-es-2.png"></p>
        </div>
        <div class="col-sm-7">
            <h3 class="titulo titulo-que-es">¿Qué es?</h3>
            <p>El laboratorio de innovación en movilidad de Bogotá es un espacio dinámico que promueve el trabajo colaborativo, la participación ciudadana, la inteligencia colectiva y la experimentación ágil con el objetivo de diseñar y desarrollar iniciativas de valor público y soluciones innovadoras para la movilidad de Bogotá región.</p>
            <p>A través del laboratorio se propenderá por habilitar en torno a la movilidad de la ciudad región, herramientas, dinámicas y metodologías para:</p>
            <ul>
                <li>Analizar, difundir y aprovechar datos abiertos.</li>
                <li>Co-crear, experimentar e implementar servicios, procesos y acciones apalancados en tecnologías digitales.</li>
                <li>Incluir, conectar y articular los actores interesados en participar del ecosistema de innovación en movilidad.</li>
            </ul>
        </div>
    </section>
    <section class="row pb-50">
        <div class="col-sm-4 col-sm-offset-4"><a class="btn btn-primary btn-animate" href="https://docs.google.com/forms/d/e/1FAIpQLSeiW4GXysqo_LhRZ5pFkBsX7Vr0iYIdLN_j7-klStGBfMPEZQ/viewform?embedded=true" target="_blank">Haz click y anímate a participar</a></div>
    </section>
    <div class="panel-group" id="accordion-concurso">
        <div class="panel panel-primary panel-verde">
            <div class="panel-heading">
                <h4 class="panel-title"><a aria-expanded="true" class="collapsed" data-parent="#accordion-concurso" data-toggle="collapse" href="#retos-ciudad">Retos la ciudad la movemos todos</a></h4>
            </div>
            <div aria-expanded="true" class="panel-collapse collapse" id="retos-ciudad" style="">
                <div class="panel-body pr-0">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel-group" id="accordion-convocatoria-u">
                                <div class="panel panel-primary panel-azul">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><a aria-expanded="true" class="collapsed" data-parent="#accordion-convocatoria-u" data-toggle="collapse" href="#convocatoria-u">¡Mídele la congestión a Bogotá!</a></h4>
                                    </div>
                                    <div aria-expanded="true" class="panel-collapse collapse in" id="convocatoria-u" style="">
                                        <div class="panel-body pr-0">
                                            <div class="row">
                                                <div class="col-sm-12"><img alt="" class="img-responsive" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/18-08-2020/header-convocatoria-u.jpg">
                                                    <h3 class="titulo2 color-verde pt-20">¡Mídele la congestión a Bogotá!</h3>
                                                    <h4 class="titulo3 color-azul py-20">Retos para innovación con estudiantes y docentes de Instituciones de Educación Superior</h4>
                                                    <h4 class="titulo3 color-verde pb-20">Descripción</h4>
                                                    <p>Convocatoria para promover la participación de las Instituciones de Educación Superior en el diseño de soluciones a retos de innovación en movilidad identificados desde la Secretaría Distrital de Movilidad.</p>
                                                    <p>Las IES interesadas abordarán el o los retos de su interés en al menos una de sus unidades académicas en el segundo semestre del 2020 (materia o asignatura con duración del semestre o ciclo, con menor duración) para que los estudiantes conformen equipos de entre 2 y 4 integrantes y generen soluciones al reto.</p>
                                                    <p>Esta convocatoria busca fortalecer los procesos de innovación abierta de la Secretaría Distrital de Movilidad y habilitar escenarios que faciliten la adopción de propuestas que deriven en proyectos de innovación colaborativa.</p>
                                                    <p>Por lo anterior, servidores de la SDM participarán de manera simultánea con todas las IES participantes en el reto respectivo, en las siguientes sesiones, que se realizarán remotamente a través de internet:</p>
                                                    <ul>
                                                        <li>Kickoff: Presentación a profundidad de los retos</li>
                                                        <li>Sesión de revisión y retroalimentación de avances, preguntas y respuestas de docentes y equipos de estudiantes</li>
                                                        <li>Presentación y ranking de soluciones</li>
                                                    </ul>
                                                    <p>Con las propuestas con más alto puntaje en el ranking el MoviLab Bogotá podrá establecer el desarrollo de piloto o similares.</p>
                                                    <p>Los retos de la convocatoria son:</p>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <h4 class="titulo3 color-verde pt-20">Reto 1:</h4>
                                                            <h4 class="titulo3 color-azul pb-20">¿Cómo generar cicloparqueaderos de calidad con mayor seguridad, comodidad, accesibilidad y con amplia cobertura en la ciudad para los biciusuarios?</h4>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <h4 class="titulo3 color-verde pt-20">Reto 2:</h4>
                                                            <h4 class="titulo3 color-azul pb-20">¿Cómo georreferenciar la señalización de tránsito en Bogotá para asegurar la actualización y facilitar su consulta con mecanismos complementarios o diferentes a la recolección en campo?</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-3 hidden-xs"><img alt="" class="img-responsive" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/18-08-2020/bg-dirigido-u.jpg"></div>
                                                <div class="col-sm-9">
                                                    <h4 class="titulo3 color-verde pb-20">Dirigido a</h4>
                                                    <h4 class="titulo3 color-azul pb-20">Instituciones de Educación Superior en el territorio colombiano</h4>
                                                    <h4 class="titulo3 color-verde pb-20">Fechas clave</h4>
                                                    <ul class="fechas-clave">
                                                        <li>Apertura de inscripciones:<br><span>20 de agosto</span></li>
                                                        <li>Cierre de inscripciones:<br><span>8 de septiembre</span></li>
                                                        <li>Kickoff:<br><span>Entre el 14 y el 18 de septiembre </span></li>
                                                        <li>Sesión de revisión y retroalimentación de avances:<br>Para materias o asignaturas de duración semestral:<br><span>19 al 23 de octubre</span><br>Para ciclos o unidades más cortas:<br><span>por programar</span></li>
                                                        <li>Presentación y ranking de soluciones:<br>Para materias o asignaturas de duración semestral:<br><span>23 al 27 de noviembre</span><br>Para ciclos o unidades más cortas:<br><span>por programar</span></li>
                                                    </ul>
                                                    <h4 class="titulo3 color-verde pb-20"><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/20-08-2020/tyc_retos_1_la_ciudad_la_movemos_todos-20200820.pdf" target="_blank">Términos y Condiciones</a></h4>
                                                    <h4 class="titulo3 color-verde pb-20"><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/02-09-2020/qa.pdf" target="_blank">Respuestas a preguntas frecuentes</a></h4>
                                                    <h4 class="titulo3 color-verde pb-20"><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/02-09-2020/anexo_2.docx" target="_blank">Anexo 2 - Carta de compromiso universidad editable</a></h4>
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
        <!--
      <div class="panel panel-primary panel-verde">
        <div class="panel-heading">
          <h4 class="panel-title"><a data-parent="#accordion-concurso" data-toggle="collapse"
              href="#quienes-pueden-ser-parte" class="collapsed" aria-expanded="true"></i>¿Quienes pueden ser parte?</a>
          </h4>
        </div>
        <div class="panel-collapse collapse in" id="quienes-pueden-ser-parte" aria-expanded="true" style="">
          <div class="panel-body pr-0">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-1 pt-50">
                <h3 class="titulo titulo-quienes-pueden">¿Quiénes pueden ser parte?</h3>
                <p>El laboratorio busca construir y dinamizar un ecosistema de innovación abierta en movilidad de Bogotá
                  región diverso y multidisciplinar, integrando la ciudadanía, instituciones de educación superior,
                  emprendedores, el sector privado, agremiaciones, organizaciones y colectivos alrededor de la
                  movilidad.</p>
              </div>
              <div class="col-sm-4 col-sm-offset-1 bg-quienes-pueden">
                <img class="img-responsive"
                  src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/01-07-2020/quienes-pueden-ser-parte.jpg"
                  alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="panel panel-primary panel-verde">
        <div class="panel-heading">
          <h4 class="panel-title"><a data-parent="#accordion-concurso" data-toggle="collapse"
              href="#servicio-laboratorio" class="collapsed" aria-expanded="false">Servicios del laboratorio
              (próximamente)</a></h4>
        </div>
        <div class="panel-collapse collapse" id="servicio-laboratorio" aria-expanded="false" style="">
          <div class="panel-body">
            <div class="row">
              <div class="col-sm-10 col-sm-offset-1 py-50">
                <h3 class="titulo titulo-laboratorio">Servicios del laboratorio (próximamente)</h3>
                <p><img class="img-responsive"
                    src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/01-07-2020/en-construccion.jpg"
                    alt=""></p>
                <ul>
                  <li>Datos públicos abiertos sobre movilidad en Bogotá</li>
                  <li>Convocatorias para ideas y startups en movilidad incluyente y sostenible y/o mejoramiento de la
                    gestión pública de la movilidad</li>
                  <li>Espacios de conexión e interacción con otros actores interesados en innovar en la movilidad de la
                    ciudad</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="panel panel-primary panel-verde">
        <div class="panel-heading panel-heading-objetivos">
          <h4 class="panel-title"><a data-parent="#accordion-concurso" data-toggle="collapse" href="#participa"
              class="collapsed" aria-expanded="false">Participa</a></h4>
        </div>
        <div class="panel-collapse collapse" id="participa" aria-expanded="false" style="height: 0px;">
          <div class="panel-body">
            <div class="row">
              <div class="col-sm-10 col-sm-offset-1 py-50">
                <h3 class="titulo titulo-participa">Participa</h3>
                <p><img class="img-responsive"
                    src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/01-07-2020/en-construccion.jpg"
                    alt=""></p>
                <p>Actividad inicial proyecto <strong>M Hackathon</strong> para dar solución a al menos un reto
                  identificado interna ó externamente.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="panel panel-primary panel-verde">
        <div class="panel-heading panel-heading-certificacion">
          <h4 class="panel-title"><a data-parent="#accordion-concurso" data-toggle="collapse" href="#formulario-cta"
              class="collapsed" aria-expanded="false">Formulario - CTA</a></h4>
        </div>
        <div class="panel-collapse collapse" id="formulario-cta" aria-expanded="false" style="height: 0px;">
          <div class="panel-body">
            <div class="panel-body">
              <div class="row">
                <div class="col-sm-10 col-sm-offset-1 py-50">
                  <h3 class="titulo titulo-formulario">Formulario - CTA</h3>
                  <iframe
                    src="https://docs.google.com/forms/d/e/1FAIpQLSeiW4GXysqo_LhRZ5pFkBsX7Vr0iYIdLN_j7-klStGBfMPEZQ/viewform?embedded=true"
                    width="100%" height="1600" frameborder="0" marginheight="0" marginwidth="0">Cargando…</iframe>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      -->
    </div>
    <section class="footer">
        <div class="row">
            <div class="col-sm-6 col-entidad"><a href="#"><img alt="" class="img-center" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/01-07-2020/logo-la-nueva-modalidad.png"></a></div>
            <div class="col-sm-6 col-entidad"><a href="#"><img alt="" class="img-center" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/01-07-2020/logo-sdm.png"></a></div>
        </div>
    </section>