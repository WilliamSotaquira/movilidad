@extends('welcome')
@section('title','cartaCompromiso')
@section('contenido')

<!-- Set cartaCompromiso -->
<div class="set-wrapper cartaCompromiso">

    <style type="text/css">
        h2.centertil {
            display: none;
        }

        .container-carta .header {
            background-image: url("https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/10-05-2023/bg-header.jpg");
            background-size: cover;
            background-position: top center;
            color: #fff;
            text-align: center;
            padding-top: 4rem;
            padding-bottom: 7rem;
        }

        .container-carta .header .intro {
            padding: 4rem;
        }

        .container-carta .header h1 {
            font-size: 3.2rem;
            font-weight: 600;
        }

        .container-carta .header p {
            font-size: 2rem;
        }

        .container-carta .modulo {
            padding-top: 3rem;
            padding-bottom: 3rem;
        }

        .container-carta .modulo h2 {
            font-size: 3.2rem;
            font-weight: 600;
            text-align: center;
        }

        .container-carta .modulo p {
            font-size: 2rem;
            text-align: center;
        }

        .container-carta .derechos .well {
            font-size: 12.5px;
            min-height: 165px;
            text-align: center;
        }

        .container-carta .derechos .card {
            background: #e9e9e9;
            color: #333333;
            font-size: 1.5rem;
            padding: 20px;
            margin-bottom: 20px;
            margin-top: 20px;
            border-radius: 20px;
        }

        .container-carta .derechos .card .img-card {
            width: 120px;
            height: auto;
            border-radius: 20px;
            margin: 0 auto;
            margin-bottom: 20px;
        }

        .container-carta .derechos .card .btn-card {
            background: #BDCF44;
            color: #1B1D39;
            text-align: left;
            font-size: 1.5rem;
            font-weight: 600;
            padding: 1rem;
            border-radius: 10px 10px 0 0;
            text-align: center;
        }

        .container-carta .btn-carta {
            background: #BDCF44;
            color: #1B1D39;
            font-size: 1.6rem;
            padding: 15px 20px 15px 25px;
            font-weight: 600;
            border-radius: 30px;
            text-decoration: none;
            transition: ease all 0.5s;
            margin: 0 auto;
        }

        .container-carta .btn-carta i {
            background-color: #fff;
            border-radius: 50%;
            padding: 8px;
        }

        .container-carta .btn-carta:hover {
            background: #fff;
        }

        .container-carta .btn-carta:hover i {
            background-color: #BDCF44;
        }

        .container-carta .vulneraron {
            background: url("https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/18-05-2023/bg-vulneraron.png");
            background-position: center center;
            background-size: cover;
        }

        .container-carta .vulneraron h2 {
            color: #fff;
        }

        .container-carta .vulneraron .btn-vulneraron {
            background-color: #1B1D39;
            border-color: #1B1D39 2px solid;
            color: #fff;
            font-size: 1.8rem;
            padding: 10px 15px;
            margin-top: 20px;
            border-radius: 10px;
            transition: ease all 0.5s;
        }

        .container-carta .vulneraron .btn-vulneraron:hover {
            background-color: #fff;
            color: #1B1D39;
            border: #1B1D39 2px solid;
        }

        .container-carta .deberes {
            background-color: #1B1D39;
            margin-top: 40px;
            padding: 100px;
        }

        .container-carta .deberes h2 {
            color: #fff;
        }

        .container-carta .deberes p {
            color: #BDCF44;
            padding-bottom: 50px;
        }

        .container-carta .deberes .bg-blanco {
            background-color: #fff;
            min-height: 510px;
        }

        .container-carta .deberes .image .logo-deberes {
            position: absolute;
            left: -80px;
            bottom: 0;
        }

        .container-carta .deberes .intro ul {
            margin-left: -50px;
            padding: 20px 20px 20px 0;
            font-size: 1.4rem;
        }

        .container-carta .deberes .intro ul li {
            padding-bottom: 1.05rem;
        }

        .container-carta .descarga {
            background: url("https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/18-05-2023/bg-descarga.png");
            background-size: cover;
            border-radius: 20px;
            padding-top: 3rem;
            padding-bottom: 3rem;
        }

        .container-carta .descarga h2 {
            color: #fff;
        }

        .container-carta .descarga .col-descarga {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
        }

        .container-carta .descarga .btn-descarga {
            margin-top: 20px;
        }

        @media (max-width: 768px) {
            .container-carta .deberes {
                padding: 10px;
            }

            .container-carta .deberes .bg-blanco {
                min-height: auto;
            }

            .container-carta .deberes .image .logo-deberes {
                position: relative;
                left: 0;
                bottom: 0;
            }

            .container-carta .deberes .intro ul {
                margin-left: 20px;
                padding: 20px;
                font-size: 1.5rem;
            }
        }

        /*# sourceMappingURL=estilos-carta.css.map */
    </style>

    <script src="https://kit.fontawesome.com/a9ffffd256.js" crossorigin="anonymous"></script>
    <div class="container container-carta">
        <section class="row header">
            <div class="col-sm-12 intro">
                <h1>Carta de compromiso a la ciudadanía</h1>

                <p>Te presentamos la carta de compromiso a la ciudadanía, donde están tus derechos y deberes como ciudadano y ciudadana.</p>
            </div>

            <div class="col-xs-6"><a class="btn-carta" href="#derechos">Derechos </a></div>

            <div class="col-xs-6"><a class="btn-carta" href="#deberes">Deberes </a></div>
        </section>

        <section class="row modulo derechos" id="derechos">
            <div class="col-sm-12">
                <h2>Derechos</h2>

                <p>Conoce los derechos que como ciudadano tienes ante la Secretaría Distrital de Movilidad.</p>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-4 col-card">
                    <div class="card"><img class="img-responsive img-card" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/10-05-2023/buen-trato.jpg"> <a class="btn btn-card"> Buen trato </a>

                        <div>
                            <div class="well">Recibirás un buen trato, sin discriminaciones de raza, color, sexo, nacionalidad, idioma, religión, cultura, etnia, orientación sexual, opinión política o jurídica, situación económica, atributos físicos o cualquier otra condición.</div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-4 col-card">
                    <div class="card"><img class="img-responsive img-card" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/10-05-2023/atencion-oportuna.jpg"> <a class="btn btn-card"> Atención oportuna </a>

                        <div>
                            <div class="well">Recibirás atención oportuna, eficiente y de calidad sin importar las limitaciones de movilidad, habla o escucha, durante la atención del trámite y servicio.</div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-4 col-card">
                    <div class="card"><img class="img-responsive img-card" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/10-05-2023/participacion-activa.jpg"> <a class="btn btn-card"> Participación activa </a>

                        <div>
                            <div class="well">Podrás participar activamente de los procesos de transformación de la Entidad por medio de los canales autorizados.</div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-4 col-card">
                    <div class="card"><img class="img-responsive img-card" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/10-05-2023/obtener-informacion.jpg"> <a class="btn btn-card"> Obtener orientación </a>

                        <div>
                            <div class="well">Te daremos información, orientación y respuestas claras de forma gratuita sobre las PQRSD* instauradas a través de los canales de atención y en los tiempos establecidos por la Ley.</div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-4 col-card">
                    <div class="card"><img class="img-responsive img-card" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/10-05-2023/informacion-confidencial.jpg"> <a class="btn btn-card"> Información confidencial </a>

                        <div>
                            <div class="well">Recibirás atención oportuna, eficiente y de calidad sin importar las limitaciones de movilidad, habla o escucha, durante la atención del trámite y servicio.</div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-4 col-card">
                    <div class="card"><img class="img-responsive img-card" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/10-05-2023/actualizacion-datos.jpg"> <a class="btn btn-card"> Actualización de datos </a>

                        <div>
                            <div class="well">Puedes solicitar aclaración, actualización o rectificación de los datos contenidos en la base de datos de la Entidad.</div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-4 col-card">
                    <div class="card"><img class="img-responsive img-card" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/10-05-2023/sin-intermediarios.jpg"> <a class="btn btn-card"> Sin intermediarios </a>

                        <div>
                            <div class="well">Realizarás los trámites ante la Secretaría de Movilidad establecidos en los procedimientos y sin intermediarios.</div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-4 col-card">
                    <div class="card"><img class="img-responsive img-card" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/10-05-2023/ser-notificado.jpg"> <a class="btn btn-card"> Ser notificado </a>

                        <div>
                            <div class="well">Te informamos y notificamos sobre las actuaciones y recursos administrativos a que haya lugar, cuando se incurra en una falta a la normatividad de tránsito y transporte.</div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-4 col-card">
                    <div class="card"><img class="img-responsive img-card" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/10-05-2023/acceso-informacion.jpg"> <a class="btn btn-card"> Acceso a la información </a>

                        <div>
                            <div class="well">Tienes acceso a información de interés general, su divulgación activa y la posibilidad de consulta a través de los canales de comunicación habilitados.</div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-4 col-card">
                    <div class="card"><img class="img-responsive img-card" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/10-05-2023/espacios-adecuados.jpg"> <a class="btn btn-card"> Espacios adecuados </a>

                        <div>
                            <div class="well">Puedes acceder a espacios adecuados para la atención o prestación del servicio al ciudadano en condiciones de comodidad, seguridad, aseo y accesibilidad universal.</div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-4 col-card">
                    <div class="card"><img class="img-responsive img-card" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/10-05-2023/peticiones-reclamos.jpg"> <a class="btn btn-card"> Peticiones y reclamos </a>

                        <div>
                            <div class="well">Tener acceso a presentar peticiones, quejas, reclamos, sugerencias, solicitudes, derechos de petición, felicitaciones y denuncias, a través de los canales oficiales de la Entidad.</div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4"><img class="img-responsive" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/10-05-2023/logo-trato-digno.png"></div>
            </div>
        </section>

        <section class="row modulo vulneraron">
            <div class="col-sm-12">
                <h2>¿Te vulneraron algún derecho?</h2>

                <p><a class="btn btn-vulneraron" href="https://bogota.gov.co/sdqs/crear-peticion">&nbsp; Contacta el(la) Defensor(a) de la Ciudadanía</a></p>
            </div>
        </section>

        <section class="row modulo deberes" id="deberes">
            <div class="container-fluid">
                <div class="col-sm-12">
                    <h2>Deberes</h2>

                    <p>Para una buena prestación del servicio, es importante que los conozcas y practiques.</p>
                </div>

                <div class="col-sm-19">&nbsp;</div>

                <div class="col-sm-5 image bg-blanco"><img alt="" class="img-responsive logo-deberes" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/10-05-2023/deberes.png"></div>

                <div class="col-sm-7 bg-blanco intro">
                    <ul>
                        <li><b>Cumplir</b> con los requisitos establecidos por la <b>Autoridad de Tránsito y Transporte</b>, para realizar los trámites y solicitar servicios de la Entidad.</li>
                        <li><b>Respetar</b> y cumplir la <b>Constitución</b>, las leyes, reglamentos y las demás normatividades para <b>adelantar trámites o solicitar servicios</b> de la Secretaría Distrital de Movilidad.</li>
                        <li><b>Respetar a la autoridad en Movilidad</b>, en su condición de Organismo de Tránsito y Transporte en el territorio Distrital.</li>
                        <li><b>Garantizar</b> el uso adecuado de la información y documentos suministrados por la Secretaría Distrital de Movilidad, en especial aquellos que tienen carácter <b>reservado y confidencial</b>.</li>
                        <li><b>Conocer</b> la normatividad referente a <b>trámites y servicios</b> con el objeto de dar cumplimiento y <b>evitar sanciones</b>.</li>
                        <li><b>Obrar</b> de acuerdo con el principio de <b>buena fe</b>, abstenerse de retrasar las actuaciones administrativas y de oficio, así como aportar declaraciones o documentos falsos o afirmaciones temerarias.</li>
                        <li>Dar un <b>trato respetuoso</b> a los servidores públicos y contratistas que le atienden.</li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="row modulo">
            <div class="row descarga">
                <div class="col-sm-9">
                    <h2>Descarga el contenido completo de la carta de compromiso a la ciudadanía</h2>
                </div>

                <div class="col-sm-3 col-descarga"><a class="btn-descarga btn-carta" href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/14-11-2023/sdm_cartaalciudadano_v4.pdf" target="_blank">Descargar &nbsp; </a></div>
            </div>
        </section>
    </div>


</div>
<!-- Fin Set -->
