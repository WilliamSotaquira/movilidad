  @extends ('welcome')
  @section ('contenido')

  <hr>
  <div class="seccion">
      <div class="row">
          <div class="col-xs-12 col-sm-8 col-sm-offset-2">
              <img class="img-responsive p-10" alt="" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/05-09-2021/jr1_8121.jpg">
          </div>
      </div>
      <div class="row">
          <div class="col-xs-12">
              <h3>MISIÓN</h3>
              <p>La <strong>Secretaría Distrital de Movilidad</strong> como líder del sector, formula políticas e implementa estrategias de movilidad multimodal, incluyente y sostenible que contribuyen a la equidad y mejoran la calidad de vida de la ciudadanía y la seguridad de los actores viales, potenciando la productividad, la competitividad y la integración de Bogotá y la región, con una gestión íntegra y transparente.</p>
          </div>
      </div>
      <div class="row">
          <div class="col-xs-12">
              <h3>VISIÓN</h3>
              <p>A 2030 la <strong>Secretaría Distrital de Movilidad</strong> de Bogotá D.C. será referente mundial en movilidad sostenible, accesible, equitativa, y segura mediante la promoción de cambios comportamentales en la ciudadanía y los actores viales, la incorporación de enfoques territorial, de género y diferencial, la distribución eficiente y equitativa del espacio público, el incremento de la satisfacción en las experiencias de viaje, y la transformación digital y virtual de los trámites y servicios, con un equipo humano comprometido y competente</p>
          </div>
      </div>
      <div class="row">
          <div class="col-xs-12">
              <h3>OBJETIVOS ESTRATÉGICOS</h3>
              <ol class="c_ol">
                  <li class="li-1">Reducir las víctimas fatales en siniestros de tránsito a través de la implementación de acciones integrales con criterios de seguridad vial.</li>
                  <li class="li-1">Formular e implementar estrategias de movilidad que reverdezcan a Bogotá y mejoren la experiencia de viaje de la ciudadanía y visitantes de Bogotá Región, en los aspectos de tiempo, calidad y costo, a través de la tecnología y la innovación.</li>
                  <li class="li-1">Generar e implementar políticas de movilidad basadas en el análisis de datos fomentando la productividad, eficiencia y bienestar de la ciudad.</li>
                  <li class="li-1">Desarrollar estrategias de cultura y respeto en la ciudadanía para el sistema de movilidad, protegiendo en especial a los actores vulnerables y promoviendo los modos activos, con enfoque incluyente diferencial, de género y territorial.</li>
                  <li class="li-1">Prestar trámites y servicios eficientes, oportunos y de calidad, con una gestión ambiental adecuada, soportados en tecnologías de la información y las comunicaciones.</li>
                  <li class="li-1">Fortalecer el bienestar de los (las) colaboradores (as), con un equipo humano altamente calificado, comprometido e íntegro, encaminado al logro de los objetivos de la Entidad.</li>
                  <li class="li-1">Garantizar transparencia, oportunidad, inclusión y equidad de género en los procesos de la entidad, que promuevan la legalidad, participación, control social y rendición de cuentas.</li>
              </ol>
          </div>
      </div>
  </div>

  <style>
      h2 {
          text-align: center;
      }

      .seccion img {
          width: 100%;
      }

      .seccion h3 {
          padding-bottom: 8px;
          padding-left: 5px;
          /* font-weight: 700; */
          border-bottom: solid;
          border-width: 3px;
          border-color: #828F26;
      }

      .seccion p {
          text-align: justify;
          padding: 15px;
      }

      .seccion ol {
          padding: 15px 30px 15px 30px !important;
      }

      .seccion li {
          margin: 0;
          padding: 0 0 1em 2em;
          text-indent: -1em;
          list-style-type: none;
          counter-increment: item;
      }

      .seccion ol>li:before {
          display: inline-block;
          width: 1em;
          padding-right: 0.5em;
          font-weight: bold;
          text-align: right;
          content: counter(item) ".";
      }


      .p-10 {
          padding: 10px;
      }
  </style>