@extends('welcome')
@section('contenido')

<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fuente Montserrat -----  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<link rel='preconnect' href='https://fonts.googleapis.com'>
<link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
<link href='https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap' rel='stylesheet'>
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin Fuente Montserrat -  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->


<!-- ----- ----- ----- ----- ----- ----- ----- ----- Bloque Seccion ----- ----- ----- ----- ----- ----- ----- ----- ----- ------ -->

<div class='container-fluid seccion'>
   <div class="encabezado">
   <div class='row'>
      <div class='col-xs-12 col-sm-6 col-md-6 '>
         <div class="icono-box">
               <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-03-2022/logo_efr.png' alt='logo Empresa Familiarmente Responsable' title='logo Empresa Familiarmente Responsable'>
            </div>
      
         </div>
      </div>
   </div>
   <style>
      .encabezado {
         background: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/10-03-2022/familia.webp');
         background-size: cover;
         position: relative;
         height: 300px;
         background-position: center;
         -webkit-box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.16);
         box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.16);

      }
      .encabezado .icono-box{
         height: 300px;
         display: flex;
         flex-direction: column;
         justify-content: center;
         align-items: center;
         padding: 30px;
      }

      .encabezado .icono-box img{
         max-width: 250px;
         bs
      }

      .encabezado .titulo {
         background-color: #ff6600;
         font-family: 'Montserrat', sans-serif;
         font-size: 35px;
         font-weight: 500;
         text-align: center;
         line-height: 1.1;
         color: white;
         margin: 30px;
         padding: 10px;
         -webkit-box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.16);
         box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.16);
      }

      .encabezado .enfasis-enc {
         /* color: #ff6600; */
         color: #bccd41;
         font-weight: 700;
         font-size: 1.1em;
      }
   </style>
   <div class='s1'>
      <div class="box-parrafo">
         <div class="titulo">
            <h3>??Qu?? es <span class="enfasis2">efr?</span></h3>
         </div>
         <div class="parrafos">
            <p>Empresa Familiarmente Responsable <strong>EFR</strong>, es una norma Internacional certificable que forma parte de la Responsabilidad Social Empresarial. Es un modelo de gesti??n orientado a la conciliaci??n o equilibrio de la vida personal, familiar y laboral, basado en la mejora continua y orientado a la obtenci??n de resultados.</p>
         </div>
      </div>
   </div>
   <div class="sv">
      <div class='row'>
         <div class='col-xs-12 col-sm-8 col-sm-offset-2'>
            <div class='text-center'>
               <video id="video" controls='' style='width: 100%;' poster="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-03-2022/poster_efr.png">
                  <source src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/11-03-2022/programa_efr.mp4' type='video/mp4'>
            </div>
         </div>
      </div>
   </div>
   <div class="s2">
      <div class="box-parrafo">
         <div class="titulo">
            <h3>??Quien es <span class="enfasis2">fundaci??n m??s familia?</span></h3>
         </div>
         <div class="parrafos">
            <div class="row">
               <div class='col-xs-12 col-sm-8 col-md-8'>
                  <p>Es una entidad privada, sin ??nimo de lucro, aconfesional e independiente, que se constituye en el 2003, para la <strong>protecci??n, defensa y promoci??n de las familias,</strong> y en especial de aquellas con dependencias (menores, mayores, personas con discapacidad, etc.), en su seno.</p>
               </div>
               <div class='col-xs-12 col-sm-4 col-md-4'>
                  <div class="img1">
                     <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/10-03-2022/logo-headerv2.webp' alt='Logo M??s Familia' title='Logo M??s Familia'>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="s3">
      <div class="box-parrafo">
         <div class="titulo">
            <h3>Prop??sito <span class="enfasis2">efr</span></h3>
         </div>
         <div class="parrafos">
            <p>La Secretar??a Distrital de Movilidad encuentra en el Sistema de Gesti??n <span class="enfasis2">efr</span> la alternativa para afrontar una nueva forma de direcci??n y gesti??n de las personas, con nuevos m??todos y herramientas para cimentar un equipo <strong>comprometido, productivo, eficiente y de la misma manera feliz, en entornos flexibles y arm??nicos.</strong></p>
            <p>Alcanzando as?? un mayor equilibrio entre <strong>la vida personal, laboral y familiar</strong> que parte de la responsabilidad y el compromiso bidireccional <span class="enfasis2">Entidad - Persona</span></p>
         </div>
         <div class="img1">
            <br>
            <div class="row">
               <div class='col-xs-12 col-sm-8 col-sm-offset-2 col-md-8'>
                  <img id="img-efr" class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/10-03-2022/proposito_efr.webp' alt='imagen est??ndar es de calidad efr' title='imagen estandar  es de calidad efr'>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="s4">
      <div class="box-parrafo">
         <div class='row'>
            <div class='col-xs-12 col-sm-4 col-md-4'>
               <div class="btn-efr">
                  <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/13-11-2020/5._cartilla_de_medidas_efr.pdf">
                     <div class="titulo">
                        <div>
                           Medidas <strong>efr</strong>
                        </div>
                     </div>
                  </a>
               </div>
            </div>
            <div class='col-xs-12 col-sm-4 col-md-4'>
               <div class="btn-efr">
                  <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/13-11-2020/6._diangostico_efr_.pdf">
                     <div class="titulo">
                        <div>
                           Resultados de Diagn??stico del <strong>Sistema de Gesti??n efr</strong>
                        </div>
                     </div>
                  </a>
               </div>
            </div>
            <div class='col-xs-12 col-sm-4 col-md-4'>
               <div class="btn-efr">
                  <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/13-11-2020/7._indicadores.pdf">
                     <div class="titulo">
                        <div>
                           Sistemas de Gesti??n <strong>efr - Indicadores</strong>
                        </div>
                     </div>
                  </a>
               </div>
            </div>
            <div class='col-xs-12 col-sm-4 col-md-4'>
               <div class="btn-efr">
                  <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/19-11-2020/objetivos-de-mejora-efr.pdf">
                     <div class="titulo">
                        <div>
                           Objetivos de <strong>Mejora efr</strong>
                        </div>
                     </div>
                  </a>
               </div>
            </div>
            <div class='col-xs-12 col-sm-4 col-md-4'>
               <div class="btn-efr">
                  <a href="https://intranetmovilidad.movilidadbogota.gov.co/intranet/sites/default/files/2020-09-11/cartilla_efr-v2-1.pdf">
                     <div class="titulo">
                        <div>
                           Cartilla <strong>efr</strong>
                        </div>
                     </div>
                  </a>
               </div>
            </div>
            <div class='col-xs-12 col-sm-4 col-md-4'>
               <div class="btn-efr">
                  <a href="https://intranetmovilidad.movilidadbogota.gov.co/intranet/sites/default/files/2020-08-31/mailing_efr_mesa-de-trabajo-1-copia.jpg">
                     <div class="titulo">
                        <div>
                           Direcci??n y orientaci??n estrat??gica <strong>efr</strong>
                        </div>
                     </div>
                  </a>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="footer-efr">
      <div class='row'>
         <div class='col-xs-12 col-sm-5 col-md-5'>
            <div class="titulo">
               <h3>
                  Canales de comunicaci??n <span class="enfasis3"> <br>efr</span>
               </h3>
            </div>
         </div>
         <div class='col-xs-12 col-sm-7 col-md-7'>
            <div class="resumen">
               <dl>
                  <dt>Fundaci??n M??s Familia:</dt>
                  <dd> <a href="https://www.masfamilia.org/canal/">https://www.masfamilia.org/canal/</a></dd>
               </dl>

               <dl>
                  <dt>Correo electr??nico:</dt>
                  <dd><a href="mailto:tufelicidadnosmueve@movilidadbogota.gov.co">tufelicidadnosmueve@movilidadbogota.gov.co</a></dd>
               </dl>
            </div>
         </div>
      </div>
   </div>
   <style>
      #video,
      #img-efr {
         -webkit-box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.16);
         box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.16);
      }

      .sv {
         padding: 20px;
      }

      .footer-efr {
         /* height: 200px; */
         padding: 30px;
         /* background-color: #ff6600; */
         background: linear-gradient(135deg, #ff6600 0%, #000000 200%);

      }

      .footer-efr .titulo {
         height: 140px;
         display: flex;
         justify-content: center;
         align-items: center;
         background-color: #fff;
      }

      .footer-efr .resumen dt {
         margin: 0px;
         color: #333333;
      }

      .footer-efr .resumen dl {
         margin: 5px;

      }

      .footer-efr .titulo h3 {
         color: #ff6600;
         font-size: 22px;
         font-weight: 700;
         text-align: center;
         margin: 0px;
      }

      .footer-efr .resumen {
         height: 150px;
         display: flex;
         flex-direction: column;
         justify-content: center;
         align-items: flex-start;
         font-size: 16px;
         font-weight: 500;
      }

      .footer-efr .resumen a {
         color: rgba(255, 255, 255, 1);
      }

      .box-parrafo {
         padding: 30px 35px 0px 30px;
      }

   
      .box-parrafo .titulo h3 {
         font-weight: 700;
         color: #ff6600;
         margin-bottom: 25px;
      }

      .s2 .img1 {
         display: flex;
         justify-content: center;
      }

      .s2 .box-parrafo .parrafos img {
         max-width: 300px;
         text-align: center;
         margin: 15px;
      }

      .enfasis2 {
         color: #ff6600;
         font-size: 1.2em;
         font-weight: 700;
      }

      .enfasis3 {
         color: #ff6600;
         font-size: 1.4em;
         font-weight: 700;
      }

      .s4 {
         padding: 30px;
      }

      .btn-efr {
         display: flex;
         flex-direction: column;
         justify-content: center;
         align-items: center;
         background: linear-gradient(45deg, #999999 0%, #00000080 150%);
         padding: 15px;
         margin: 10px;
         -webkit-box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.16);
         box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.16);
      }

      .btn-efr a {
         text-decoration: none !important;
      }

      .btn-efr:hover {
         background: linear-gradient(135deg, #ff6600 0%, #000000 200%);

      }


      .s4 .box-parrafo [class*='col-'] {
         margin: 0px;
         padding: 0px;
         border: 0;
         outline: 0;
         font-size: 100%;
         vertical-align: baseline;
      }


      .btn-efr .titulo {
         text-align: center;
         font-size: 20px;
         font-weight: 700px;
         padding: 20px;
         margin: 0px;
         line-height: 1.1;
         height: 100px;
         display: flex;
         justify-content: center;
         align-items: center;
         color: #000;

      }

      .btn-efr:hover .titulo {
         color: #fff;
      }

      .btn-efr .icono {
         background-image: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/11-03-2022/hacer-clic2.webp');
         height: 50px;
         width: 100%;
         background-size: contain;
         background-repeat: no-repeat;
         background-position: right;
      }

      .btn-efr:hover .icono {
         background-image: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/10-03-2022/hacer-clic.png');
      }
   </style>
</div>

<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin Bloque Secci??n  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->

<!-- ----- ----- ----- ----- ----- ----- ----- -----  Hoja de estilo ---- ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<style type='text/css'>
   .field-item.even h2 {
      visibility: hidden;
      margin-top: -50px;
   }

   .region-content {
      padding: 0px;
      overflow: hidden;
   }

   .seccion {
      font-family: 'Montserrat', sans-serif;
      font-size: 14px;
      font-weight: 500;
      text-align: justify;
      line-height: 1.4;
      max-width: 980px;
   }

   /*
   .seccion [class*='col-'] {
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
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin hoja de estilo  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->