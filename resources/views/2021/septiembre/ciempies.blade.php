  @extends ('welcome')
  @section ('contenido')
  <style type="text/css">
      .field-item h2 {
          display: none;
      }

      .header {
          padding-top: 150px;
          padding-bottom: 20px;
          background: url("https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-09-2020/bg-header.jpg");
          background-position: center center;
          background-size: cover;
          background-repeat: no-repeat;
      }

      .bg-morado {
          background-color: #330072;
      }

      .bg-azul-claro {
          background-color: #D8F2F9;
      }

      .bg-azul-claro2 {
          background-color: #5BC8E5;
      }

      .bg-rosado {
          background-color: #F7C8D5;
      }

      .bg-fucsia {
          background-color: #DE1B50;
      }

      .bg-bogota {
          background: url("https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-09-2020/bg-bogota.jpg");
          background-size: cover;
          background-position: center center;
          background-repeat: no-repeat;
      }

      .img-center {
          display: block;
          margin: 0 auto;
      }

      .intro {
          background-color: #00B0EA;
          color: #fff;
          padding: 10px 10px 10px 10px;
          text-align: center;
      }

      .intro p {
          margin: 0;
          margin-bottom: 10px;
          font-size: 16px;
      }

      .titulo {
          padding: 20px 0;
      }

      .temas-palabras-clave h3 {
          font-weight: 600;
          font-size: 20px;
      }

      .temas-palabras-clave .tema {
          padding-top: 30px;
          padding-bottom: 30px;
      }

      .infografia-como-se-hace {
          padding-top: 30px;
          padding-bottom: 30px;
      }

      .localidades .tabs-localidades {
          padding-top: 30px;
          padding-bottom: 30px;
      }

      .localidades .tabs-localidades .nav-tabs li a {
          padding: 0;
          padding-right: 15px;
          background-color: rgba(0, 0, 0, 0);
          border: 1px solid #fff;
          font-size: 16px;
          text-transform: uppercase;
          color: #fff;
      }

      .localidades .tabs-localidades .nav-tabs li.active {
          background-color: #DE1B50;
      }

      .localidades .tabs-localidades .nav-tabs li.active a {
          color: #fff !important;
      }

      .localidades .tabs-localidades .tab-content .tab-pane {
          padding: 30px;
      }

      .px-0 {
          padding-left: 0;
          padding-right: 0;
      }

      .galeria {
          padding-top: 30px;
          padding-bottom: 30px;
      }

      .carousel-ninos .carousel-control.right,
      .carousel-ninos .carousel-control.left {
          background-image: none;
      }

      .carousel-ninos .carousel-indicators {
          position: relative;
          left: 0;
          z-index: 15;
          width: 100%;
          padding-left: 0;
          margin-left: 0;
          text-align: left;
          list-style: none;
          bottom: -40px;
      }

      .carousel-ninos .carousel-indicators li {
          width: 130px;
          height: 95px;
          border: 1px solid #330072;
          text-indent: 0;
          overflow: hidden;
      }

      .carousel-ninos .carousel-indicators li img {
          width: 100%;
      }

      .carousel-ninos .carousel-indicators li.active img {
          opacity: .4;
      }

      .footer-ciempies .redes-footer {
          list-style: none;
          padding-left: 0;
          padding-top: 30px;
      }

      .footer-ciempies .redes-footer li {
          padding-bottom: 15px;
      }

      .footer-ciempies .redes-footer li a,
      .footer-ciempies .redes-footer li img {
          display: inline-block;
      }

      .footer-ciempies .redes-footer li img {
          padding-right: 20px;
      }

      .footer-ciempies .redes-footer li a {
          color: #330072;
          font-weight: 600;
          font-size: 18px;
      }

      .footer-ciempies .info-email .info {
          background-color: #5BC8E5;
          border-radius: 0 30px 30px 0;
      }

      .footer-ciempies .info-email .info p {
          padding: 20px;
          margin: 0;
          color: #fff;
          font-weight: 600;
          font-size: 18px;
      }

      .footer-ciempies .info-email a {
          color: #330072;
          font-weight: 600;
          font-size: 18px;
      }

      /*# sourceMappingURL=style-ciempies.css.map */
  </style>
  <div class="container-fluid" style="max-width: 920px">
      <section class="header">
          <p><img alt="" class="img-responsive img-center" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-09-2020/logo-ciempies.png"></p>
          <div class="intro">
              <p>Proyecto de movilidad infantil liderado por la Secretaría de Educación del Distrito y la Secretaría Distrital de Movilidad, que mediante caravanas a pie guiadas acompaña a niñas, niños y adolescentes en los recorridos al colegio y de regreso a casa.</p>
              <p>Ciempiés promueve la movilidad sostenible, mejora la experiencia de viaje y hace los recorridos más seguros , propiciando espacios de recreación y pedagogía, que fortalecen el tejido social de la comunidad y la integración de las niñas niños y adolescentes con su entorno.</p>
          </div>
      </section>
      <section class="palabras-clave row">
          <div class="col-sm-12 titulo"><img alt="" class="img-center img-responsive" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-09-2020/palabras-clave.png"></div>
      </section>
      <section class="temas-palabras-clave row">
          <div class="col-sm-4 tema"><img alt="Camino Seguro" class="img-responsive img-center" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-09-2020/camino-seguro.png">
              <h3>Camino Seguro:</h3>
              <p>Recorrido diseñado para que niñas, niños y acompañantes caminen hacia y desde su colegio de forma segura y entretenida.</p>
          </div>
          <div class="col-sm-4 tema"><img alt="Beneficiarios Ciempies" class="img-responsive img-center" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-09-2020/beneficiarios-ciempies.png">
              <h3>Beneficiarios Ciempiés:</h3>
              <p>Estudiantes que se transportan a pie hacia y desde el colegio que se encuentran inscritos en el proyecto.</p>
          </div>
          <div class="col-sm-4 tema"><img alt="Monitor" class="img-responsive img-center" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-09-2020/monitor.png">
              <h3>Monitor:</h3>
              <p>Es la persona que guía la caravana y está a cargo de los juegos y la seguridad vial de los recorridos.</p>
          </div>
          <div class="col-sm-6 tema"><img alt="Acompañante" class="img-responsive img-center" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-09-2020/acompanante.png">
              <h3>Acompañante:</h3>
              <p>Acudiente o persona adulta, en parentesco con el beneficiario, que voluntariamente acompaña los recorridos.</p>
          </div>
          <div class="col-sm-6 tema"><img alt="Puntos de encuentro" class="img-responsive img-center" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-09-2020/puntos-de-encuentro.png">
              <h3>Puntos de encuentro:</h3>
              <p>Son los lugares específicos a lo largo del Camino Seguro donde los beneficiarios en compañía de sus acudientes, se unen a la caravana de camino al colegio y viceversa.</p>
          </div>
      </section>
      <section class="row bg-morado">
          <div class="col-sm-12 titulo"><img alt="" class="img-center img-responsive" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-09-2020/como-se-hace.png"></div>
      </section>
      <section class="row">
          <div class="col-sm-12 infografia-como-se-hace"><img alt="" class="img-responsive img-center hidden-xs" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-09-2020/infografia-como-se-hace-pc.jpg"> <img alt="" class="img-responsive img-center visible-xs" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-09-2020/infografia-como-se-hace-mobile.jpg"></div>
      </section>
      <section class="row bg-morado">
          <div class="col-sm-12 titulo"><img alt="" class="img-center img-responsive" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-09-2020/como-nacio.png"></div>
      </section>
      <section class="row">
          <div class="col-sm-12 infografia-como-se-hace"><img alt="" class="img-responsive img-center hidden-xs" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-09-2020/infografia-como-nacio-pc.jpg"> <img alt="" class="img-responsive img-center visible-xs" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-09-2020/infografia-como-nacio-mobile.jpg"></div>
      </section>
      <section class="row bg-morado">
          <div class="col-sm-12 titulo"><img alt="" class="img-center img-responsive" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-09-2020/como-vamos.png"></div>
      </section>
      <section class="row localidades">
          <div class="col-sm-12 px-0">
              <div class="tabs-localidades" data-example-id="togglable-tabs">
                  <ul class="nav nav-tabs" role="tablist">
                      <li class="active bg-azul-claro2" role="presentation"><a aria-expanded="true" data-toggle="tab" href="#suba" role="tab"><img alt="" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-09-2020/icon-suba.png"> &nbsp;&nbsp; Suba</a></li>
                      <li class="bg-azul-claro2" role="presentation"><a aria-expanded="false" data-toggle="tab" href="#bosa" role="tab"><img alt="" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-09-2020/icon-bosa.png"> &nbsp;&nbsp; Bosa</a></li>
                      <li class="bg-azul-claro2" role="presentation"><a aria-expanded="false" data-toggle="tab" href="#bogota" role="tab"><img alt="" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-09-2020/icon-bogota.png"> &nbsp;&nbsp; Bogotá</a></li>
                  </ul>
                  <div class="tab-content">
                      <div class="tab-pane fade bg-rosado active in" id="suba" role="tabpanel"><img alt="Suba" class="img-center img-responsive" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-09-2020/suba.png"></div>
                      <div class="tab-pane fade bg-azul-claro" id="bosa" role="tabpanel"><img alt="Bosa" class="img-center img-responsive" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-09-2020/bosa.png"></div>
                      <div class="tab-pane fade bg-bogota" id="bogota" role="tabpanel"><img alt="Bogotá" class="img-center img-responsive hidden-xs" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-09-2020/bogota-pc.png"> <img alt="Bogotá" class="img-center img-responsive visible-xs" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-09-2020/bogota-mobile.png"></div>
                  </div>
              </div>
          </div>
      </section>
      <section class="row bg-morado">
          <div class="col-sm-12 titulo"><img alt="" class="img-center img-responsive" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-09-2020/galeria.png"></div>
      </section>
      <div class="carousel slide carousel-ninos" data-ride="carousel" id="galeria-1">
          <section class="row galeria">
              <div class="col-sm-8 px-0">
                  <div class="carousel-inner" role="listbox">
                      <div class="item active"><img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-09-2020/1.jpg"></div>
                      <div class="item"><img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-09-2020/2.jpg"></div>
                      <div class="item"><img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-09-2020/3.jpg"></div>
                      <div class="item"><img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-09-2020/4.jpg"></div>
                      <div class="item"><img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-09-2020/5.jpg"></div>
                      <div class="item"><img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-09-2020/6.jpg"></div>
                      <div class="item"><img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-09-2020/7.jpg"></div>
                      <div class="item"><img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-09-2020/8.jpg"></div>
                  </div><a class="left carousel-control" data-slide="prev" href="#galeria-1" role="button"><span class="sr-only">Previous</span> </a> <a class="right carousel-control" data-slide="next" href="#galeria-1" role="button"> <span class="sr-only">Next</span> </a>
              </div>
              <div class="col-sm-4">
                  <ol class="carousel-indicators hidden-xs2">
                      <li class="active" data-slide-to="0" data-target="#galeria-1"><img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-09-2020/1.jpg"></li>
                      <li data-slide-to="1" data-target="#galeria-1"><img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-09-2020/2.jpg"></li>
                      <li data-slide-to="2" data-target="#galeria-1"><img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-09-2020/3.jpg"></li>
                      <li data-slide-to="3" data-target="#galeria-1"><img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-09-2020/4.jpg"></li>
                      <li data-slide-to="4" data-target="#galeria-1"><img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-09-2020/5.jpg"></li>
                      <li data-slide-to="5" data-target="#galeria-1"><img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-09-2020/6.jpg"></li>
                      <li data-slide-to="6" data-target="#galeria-1"><img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-09-2020/7.jpg"></li>
                      <li data-slide-to="7" data-target="#galeria-1"><img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-09-2020/8.jpg"></li>
                  </ol>
              </div>
          </section>
      </div>
      <section class="row bg-morado">
          <div class="col-sm-12 titulo"><img alt="" class="img-center img-responsive" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-09-2020/contacto.png"></div>
      </section>
      <section class="row footer-ciempies">
          <div class="col-sm-9">
              <ul class="redes-footer">
                  <li><a href="https://twitter.com/CiempiesNP" target="_blank"><img alt="twitter" class="img-responsive2" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-09-2020/icon-tw.png">https://twitter.com/CiempiesNP</a></li>
                  <li><a href="https://twitter.com/CiempiesNP" target="_blank"><img alt="twitter" class="img-responsive2" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-09-2020/icon-ig.png">https://www.instagram.com/ciempiesninosprimero/</a></li>
                  <li><a href="https://twitter.com/CiempiesNP" target="_blank"><img alt="twitter" class="img-responsive2" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-09-2020/icon-fb.png">https://www.facebook.com/ciempiesninosprimero/</a></li>
                  <li><a href="https://twitter.com/CiempiesNP" target="_blank"><img alt="twitter" class="img-responsive2" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-09-2020/icon-yt.png">https://www.youtube.com/channel/UCxFlIfo_OPM5OK7Gtr18DsA</a></li>
              </ul>
              <div class="row info-email">
                  <div class="col-xs-12 col-sm-6 info">
                      <ul style="list-style-type: none;">
                          <li>
                              <p style="padding:5px; font-size: 1em;"><strong>Secretaría Distrital de Movilidad</strong></p>
                              <ul style="list-style-type: none;">
                                  <li>
                                      <p style="padding:5px; font-size: 1em;">Dirección de Gestión de Tránsito y Control de Tránsito y Transporte</p>
                                  </li>
                              </ul>
                          </li>
                          <li>
                              <p style="padding:5px; font-size: 1em;"><strong>Secretaría de Educación del Distrito</strong></p>
                              <ul style="list-style-type: none;">
                                  <li>
                                      <p style="padding:5px; font-size: 1em;">Dirección de Bienestar Estudiantil</p>
                                  </li>
                              </ul>
                          </li>
                      </ul>
                  </div>
                  <div class="col-xs-12 col-sm-6">
                      <div style="height: 180px; padding: 15px; display: flex; align-items: center; justify-content: center; vertical-align: middle;">
                          <a href="mailto:ciempiescs@movilidadbogota.gov.co">ciempiescs@movilidadbogota.gov.co</a>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-xs-12 col-sm-3">
              <img alt="ciempies" class="img-center img-responsive" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-09-2020/imagen-footer.png">
          </div>
      </section>
  </div>

  Informes de Ejecución de Vigencias Futuras