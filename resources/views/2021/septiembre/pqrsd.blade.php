@extends ('welcome')
@section ('contenido')

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Signika:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">


<div class="container-fluid seccion">

    <div class="row">
        <!-- xs -->
        <div class="col-xs-12 visible-xs-12 visible-xs-block">
            <div class="h3-xs d-flex align-items-center">
                <h1 class="text-center w-75">Tipos de Peticiones</h1>
            </div>
        </div>
        <!-- sm -->
        <div class="col-sm-12 hidden-xs">
            <div class="h3-sm d-flex align-items-center">
                <h1 class="text-center w-75">Tipos de Peticiones</h1>
            </div>
        </div>
    </div>

    <div class="row rh">

        <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="panel bs panel-default">
                <div class="panel-heading ph-c1">
                    <h1>1</h1>
                    <h3 class="panel-title text-center">Derecho de Petición en Interés General</h3>
                </div>
                <div class="panel-body container-fluid align-items-center">
                    <p>Solicitud que busca respuesta a una situación que concierne a un colectivo de individuos.</p>
                </div>
                <div class="panel-footer">
                    <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/servicios/28-08-2021/icono1.png" alt="Manos alzadas participando" title="Derecho de petición en interés general">
                </div>

            </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="panel bs panel-default">
                <div class="panel-heading ph-c1">
                    <h1>2</h1>
                    <h3 class="panel-title text-center">Derecho de Petición en Interés Particular</h3>
                </div>
                <div class="panel-body container-fluid align-items-center">
                    <p>Solicitud en busca de una respuesta a una situación que le afecta ole concierne a un ciudadano.</p>
                </div>
                <div class="panel-footer">
                    <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/servicios/28-08-2021/icono2.png" alt="Mano de sujeto participando" title="Derecho de petición en interés particular" class="img-responsive">
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="panel bs panel-default">
                <div class="panel-heading ph-c1">
                    <h1>3</h1>
                    <h3 class="panel-title text-center">Queja</h3>
                </div>
                <div class="panel-body container-fluid align-items-center">
                    <p><br>Manifestación de descontento o inconformidad en relación con una conducta que se considera irregular de uno o varios servidores públicos en el desarrollo de sus funciones.</p>
                </div>
                <div class="panel-footer">
                    <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/servicios/28-08-2021/icono3.png" alt="Icono teléfono y sobre email radiando señal" title="Queja" class="img-responsive">
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="panel bs panel-default">
                <div class="panel-heading ph-c1">
                    <h1>4</h1>
                    <h3 class="panel-title text-center">Reclamo</h3>
                </div>
                <div class="panel-body container-fluid align-items-center">
                    <p>Manifestación de descontento o inconformidad por un proceso relacionado con la prestación de servicios.</p>
                </div>
                <div class="panel-footer">
                    <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/servicios/28-08-2021/icono4.png" alt="Icono teléfono y sobre email radiando señal con engranajes" title="Reclamo" class="img-responsive">
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="panel bs panel-default">
                <div class="panel-heading ph-c1">
                    <h1>5</h1>
                    <h3 class="panel-title text-center">Sugerencia</h3>
                </div>
                <div class="panel-body container-fluid align-items-center">
                    <p>Propuesta para mejorar un proceso relacionado con la prestación de un tramite o servicio.</p>
                </div>
                <div class="panel-footer">
                    <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/servicios/28-08-2021/icono5.png" alt="Bombilla destellando" title="Sugerencia" class="img-responsive">
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="panel bs panel-default">
                <div class="panel-heading ph-c1">
                    <h1>6</h1>
                    <h3 class="panel-title text-center">Denuncia posible Acto de Corrupción</h3>
                </div>
                <div class="panel-body container-fluid align-items-center">
                    <p>
                        Es la puesta en conocimiento de un presunta conducta irregular por parte de un servidor publico.
                    </p>
                </div>
                <div class="panel-footer">
                    <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/servicios/28-08-2021/icono6.png" alt="Balanza de justicia" title="Denuncia posible acto de corrupción" class="img-responsive">
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="panel bs panel-default">
                <div class="panel-heading ph-c1">
                    <h1>7</h1>
                    <h3 class="panel-title text-center">Felicitación</h3>
                </div>
                <div class="panel-body container-fluid align-items-center">
                    <p>
                        Manifestación por la satisfacción del servicio prestado.
                    </p>
                </div>
                <div class="panel-footer">
                    <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/servicios/28-08-2021/icono7.png" alt="Manos aplaudiendo" title="Felicitación" class="img-responsive">
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="panel bs panel-default">
                <div class="panel-heading ph-c2">
                    <h1>8</h1>
                    <h3 class="panel-title text-center">Solicitud de Acceso a la Información</h3>
                </div>
                <div class="panel-body container-fluid align-items-center">
                    <p>
                        Solicitud para tener acceso a la información sobre las funciones de la entidad y sus distintas dependencias.
                    </p>
                </div>
                <div class="panel-footer">
                    <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/servicios/28-08-2021/icono8.png" alt="Lupa enfocando gráfico de datos" title="Solicitud de acceso a la información" class="img-responsive">
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-3 col-md-offset-3">
            <div class="panel bs panel-default">
                <div class="panel-heading ph-c2">
                    <h1>9</h1>
                    <h3 class="panel-title text-center">Solicitud de Copias</h3>
                </div>
                <div class="panel-body container-fluid align-items-center">
                    <p>
                        Reproducción y entrega de documentos que no tengan el carácter de reservado al interior de una
                    </p>
                </div>
                <div class="panel-footer">
                    <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/servicios/28-08-2021/icono9.png" alt="Documentos agrupados" title="Solicitud de copias" class="img-responsive">
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="panel bs panel-default">
                <div class="panel-heading ph-c3">
                    <h1>10</h1>
                    <h3 class="panel-title text-center">Consulta</h3>
                </div>
                <div class="panel-body container-fluid align-items-center">
                    <p>
                        Consulta a las autoridades en relación con las materias a su cargo.
                    </p>
                </div>
                <div class="panel-footer">
                    <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/servicios/28-08-2021/icono10.png" alt="Icono signo de pregunta" title="Consulta" class="img-responsive">
                </div>
            </div>
        </div>

    </div>

    <hr>
    <div class="row">
        <div class="col-xs-12 col-sm-6">
            <div class="termino-box c-verde">
                <div class="">
                    <h3>Término para resolver*</h3>
                    <p>Decreto 491 del 28 de marzo de 2020</p>
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-6 bs">
            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th class="text-center">Color:</th>
                        <th class="text-center">Pasa de:</th>
                        <th class="text-center">A:</th>
                    </tr>
                    <tr>
                        <td class="text-center" style="margin: auto;">
                            <p class="pc1"></p>
                        </td>
                        <td class="text-center">
                            <p>15 días hábiles</p>
                        </td>
                        <td class="text-center">
                            <p>30 días hábiles</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <p class="pc2"></p>
                        </td>
                        <td class="text-center">
                            <p>10 días hábiles</p>
                        </td>
                        <td class="text-center">
                            <p>20 días hábiles</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <p class="pc3"></p>
                        </td>
                        <td class="text-center">
                            <p>30 días hábiles</p>
                        </td>
                        <td class="text-center">
                            <p>35 días hábiles</p>
                        </td>
                    </tr>
                    <!-- <tr class="c-verde">
                        <td class="text-center" colspan="2"><strong>Ley 1755 de 2015</strong></td>
                    </tr> -->
                </table>
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="c-verde-2 bs">
            <h3 class="text-center">Canales donde se puede realizar</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-4">
            <div class="btn-icon bs">
                <div>
                    <h3>Telefónico</h3>
                </div>
                <div>
                    <i class="fa fa-phone fa-4x" aria-hidden="true"></i>
                </div>
                <div>
                    <p class="p-btn-icon">Linea <strong>195</strong> <br> Teléfono <br><strong><a href="6013649400">(601) 364 9400</a>, opción 2</strong></p>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4">
            <div class="btn-icon bs">
                <a href="https://www.movilidadbogota.gov.co/web/govi-sdqs/crear" target="_blank" rel="noopener noreferrer">
                    <div>
                        <h3>Virtual</h3>
                    </div>
                    <div>
                        <i class="fa fa-envelope-o fa-4x" aria-hidden="true"></i>
                    </div>
                    <div>
                        <p class="p-btn-icon">Correo institucional <br><strong> Bogotá te escucha</strong></p>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4">
            <div class="btn-icon bs">
                <a href="http://www.movilidadbogota.gov.co/web/puntos_de_atencion" target="_blank" rel="noopener noreferrer">
                    <div>
                        <h3>Presencial</h3>
                    </div>
                    <div>
                        <i class="fa fa-university fa-4x" aria-hidden="true"></i>
                    </div>
                    <div>
                        <p class="p-btn-icon">Puntos de <br> <strong>Correspondencia </strong></p>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs 12 col-sm-6">
            <div class="text-center p-pn bs">
                <small>General</small>
                <h3>Radicación Documentos</h3>
                <p class=""><a href="mailto:contactociudadano@movilidadbogota.gov.co">contactociudadano@movilidadbogota.gov.co</a></p>
            </div>
        </div>
        <div class="col-xs 12 col-sm-6">
            <div class="text-center p-pn bs">
                <small>Exclusivo</small>
                <h3>Notificaciones Judiciales</h3>
                <p class=""><a href="mailto:judicial@movilidadbogota.gov.co">judicial@movilidadbogota.gov.co</a></p>
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-xs-12">
            <h2 class="text-center"><strong>MÁS SERVICIOS</strong></h2>
        </div>
    </div>
    <br>

    <div class="row">

        <div class="col-xs-12 col-sm-4">
            <div class="thumbnail bs">
                <a href="https://bogota.gov.co/sdqs/crear-peticion" target="_blank" rel="noopener noreferrer">
                    <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/servicios/30-08-2021/imagen-bogota-te-escucha.jpg" alt="Logo Bogotá te escucha" title="Registre PQRS">
                    <div class="caption">
                        <div>
                            <h3>Registre <br> PQRSD</h3>
                            <p>Aquí podrás crear peticiones con tu usuario, con las diferentes opciones que te ofrece el sistema. <br> </p>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-xs-12 col-sm-4">
            <div class="thumbnail bs">
                <a href="https://bogota.gov.co/sdqs/consultar-peticion" target="_blank" rel="noopener noreferrer">
                    <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/servicios/30-08-2021/imagen-bogota-te-escucha.jpg" alt="Logo Bogotá te escucha" title="Consulte su petición">
                    <div class="caption">
                        <div>
                            <h3>Consulte su <br> Petición</h3>
                            <p>Aquí podrás consultar las peticiones con tu usuario, siguiendo las diferentes opciones.</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-xs-12 col-sm-4">
            <div class="thumbnail bs">
                <a href="https://gestiondocumental.movilidadbogota.gov.co/orfeo-api/" target="_blank" rel="noopener noreferrer">
                    <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/26-11-2020/orfeo.png" style="height: 134px;" alt="Logo ORFEO" title="Consulte su radicado">
                    <div class="caption">
                        <div>
                            <h3>Consulte Radicado SDM</h3>
                            <p>Aquí podrá consultar, con su número de radicado, el estado de su petición.</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-xs-12 col-sm-4">
            <div class="thumbnail bs">
                <a href="https://www.movilidadbogota.gov.co/web/derechos-anonimos" target="_blank" rel="noopener noreferrer">
                    <!-- <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/servicios/30-08-2021/correo-electronico_0.png" style="height: 155px; color:#4D541F !important" alt="..."> -->
                    <div class="caption">
                        <div>
                            <h3><small>Notificaciones Derechos de </small><br> Petición Anónimos</h3>
                            <p>Aquí reposan las respuesta que no tienen datos de los peticionarios</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-xs-12 col-sm-4">
            <div class="thumbnail bs">
                <a href="https://docs.google.com/forms/d/e/1FAIpQLSf_XK6RvcctCN4nyePLpdZ-rA_dND8Y_fZff3jZyBzx8FUSQw/viewform?vc=0&c=0&w=1" target="_blank" rel="noopener noreferrer">
                    <!-- <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/servicios/30-08-2021/correo-electronico_0.png" style="height: 155px; color:#4D541F !important" alt="..."> -->
                    <div class="caption">
                        <div>
                            <h3>Califique Nuestro Servicio</h3>
                            <p>Apreciado ciudadano: Lo invitamos a calificar la calidad de la respuesta a su requerimiento, ésto nos ayudará a prestar un mejor servicio.</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-xs-12 col-sm-4">
            <div class="thumbnail bs">
                <a href="https://www.movilidadbogota.gov.co/web/respuestas-a-oficio-sin-notificar" target="_blank" rel="noopener noreferrer">
                    <!-- <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/servicios/30-08-2021/correo-electronico_0.png" style="height: 155px; color:#4D541F !important" alt="..."> -->
                    <div class="caption">
                        <div>
                            <h3>Respuestas a Oficio sin Notificar</h3>
                            <p>Respuestas a sus solicitudes que no pudieron ser entregadas a la dirección física registrada.</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-xs-12 col-sm-4">
            <div class="thumbnail bs">
                <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/servicios/08-03-2022/pm04-m02-manual-de-gestion-de-pqrsd-v5.0-23-12-2021_2.pdf" target="_blank" rel="noopener noreferrer">
                    <!-- <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/servicios/30-08-2021/correo-electronico_0.png" style="height: 155px; color:#4D541F !important" alt="..."> -->
                    <div class="caption">
                        <div>
                            <h3>Manual de Gestión de PQRSD</h3>
                            <p>Con el propósito de orientar de forma clara y concreta sobre el manejo de las peticiones.</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-xs-12 col-sm-4">
            <div class="thumbnail bs">
                <a href="https://www.movilidadbogota.gov.co/web/trato-digno" target="_blank" rel="noopener noreferrer">
                    <!-- <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/servicios/30-08-2021/correo-electronico_0.png" style="height: 155px; color:#4D541F !important" alt="..."> -->
                    <div class="caption">
                        <div>
                            <h3>Carta de Compromiso Ciudadano</h3>
                            <p>Establece el trato entre ciudadanos y la entidad. Exalta las practicas de un buen Gobierno.</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-xs-12 col-sm-4">
            <div class="thumbnail bs">
                <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/servicios/07-09-2020/pm04-mn02-pt01_protocolo_de_denuncias_por_corrupcion_version_1.0.pdf" target="_blank" rel="noopener noreferrer">
                    <!-- <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/servicios/30-08-2021/correo-electronico_0.png" style="height: 155px; color:#4D541F !important" alt="..."> -->
                    <div class="caption">
                        <div>
                            <h3><small>Protocolo de Denuncias por</small> Actos de Corrupción</h3>
                            <p>Directrices y el procedimiento a seguir en la recepción y atención de las denuncias de presuntos hechos de corrupción</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>

    </div>

</div>


<style>
    .field-item.even h2 {
        visibility: hidden;
        margin-top: -50px;
    }

    .region-content {
        margin: 0;
        padding: 15px;
    }

    /* .col-sm-12 {
        margin: 0 !important;
        padding: 0 !important;
    } */

    .seccion {
        background-color: #fff;
        max-width: 940px;
    }

    .w-100 {
        max-width: 100%;
    }

    .w-75 {
        width: 75%;
    }

    /* .d-flex {
        display: flex;
    } */

    .align-items-center {
        align-items: center;
    }

    .justify-content-center {
        justify-content: center;
    }

    .rh {
        margin-top: 15px !important;
    }

    .h3-xs {
        font-family: 'Signika', sans-serif;
        margin: 0px !important;
        font-size: 5rem;
        background-image: url('https://www.movilidadbogota.gov.co/web/sites/default/files/servicios/28-08-2021/banner_xs_0.png');
        background-size: 100%;
        background-repeat: no-repeat;
    }

    .h3-xs h1 {
        padding: 6%;
        margin: 0px 20px 15px 20px;
        color: #fff;
        font-weight: 700;
        font-size: 5rem;

    }

    .h3-sm {
        font-family: 'Signika', sans-serif;
        margin: 0px !important;
        font-size: 5rem;
        background-image: url('https://www.movilidadbogota.gov.co/web/sites/default/files/servicios/28-08-2021/banner_lg_0.png');
        background-size: 100%;
        background-repeat: no-repeat;
    }

    .h3-sm h1 {
        padding: 6%;
        margin: 0px 20px 15px 20px;
        color: #fff;
        font-weight: 700;
        font-size: 40px;

    }


    img {
        /* margin: 5px; */
        /* width: 0%; */

    }

    .bs {
        -webkit-box-shadow: 3px 3px 20px -10px rgba(0, 0, 0, 0.78) !important;
        box-shadow: 3px 3px 20px -10px rgba(0, 0, 0, 0.78) !important;
    }

    .panel-body {
        padding: 10px !important;
        text-align: center;
        font-size: 2rem;
        font-weight: 500;
        color: #080808 !important;
        /* text-align: justify; */
        height: 282px;
        display: flex;
        line-height: 1.3 !important;
    }

    .panel-heading {
        height: 190px;

    }

    .panel-footer {
        background-color: #fff !important;
        height: 160px;
        display: flex;
        justify-content: center;
        border-top: none !important;
        padding: 0px !important;

    }

    .ph-c1 {
        text-align: center;
        background-color: #A12B46 !important;
        color: #fff !important;
    }

    .ph-c1 h1 {
        font-size: 6rem !important;
        font-weight: 700;
    }

    .ph-c1 h3 {
        font-size: 2rem !important;
        font-weight: 600;
    }

    .ph-c2 {
        text-align: center;
        background-color: #8C90F2 !important;
        color: #080808 !important;
    }

    .ph-c2 h1 {
        font-size: 6rem !important;
        font-weight: 700;
    }

    .ph-c2 h3 {
        font-size: 2rem !important;
        font-weight: 600;
    }

    .ph-c3 {
        text-align: center;
        background-color: #76cbd0ff !important;
        color: #080808 !important;
    }

    .ph-c3 h1 {
        font-size: 6rem !important;
        font-weight: 700;
    }

    .ph-c3 h3 {
        font-size: 2rem !important;
        font-weight: 600;
    }

    .c-verde {
        background-color: #F0F2D9;

    }

    .c-verde h3 {
        font-weight: 700;
    }

    .pc1 {
        background-color: #A12B46;
        height: 30px;
        width: 60px;
    }

    .pc2 {
        background-color: #8C90F2;
        height: 30px;
        width: 60px;
    }

    .pc3 {
        background-color: #76cbd0ff;
        height: 30px;
        width: 60px;
    }

    .c-verde-2 {
        background-color: #c9d41eff;
        padding: 15px;
        color: #080808;
        margin-left: 15px;
        margin-right: 15px;
        margin-top: 25px;
        text-align: center;
        display: flex;
        vertical-align: middle;
        justify-content: center;
        align-items: center;
    }

    .c-verde-2 h3 {
        font-weight: 700;
    }

    .btn-icon {
        height: 280px;
        padding: 0px 25px 25px 25px;
        margin: 20px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        align-items: center;
        text-align: center;
        vertical-align: middle;
        background-color: #4D541F;
        color: #fff;
        border-radius: 4px;
        /* transition: 0.5s all; */
    }
    .btn-icon a{
        color: #fff;
        text-decoration: none !important;
    }
    .btn-icon:hover a{
        color: #000;
    }

    .btn-icon:hover,
    .btn-icon:hover p,
    .btn-icon:hover .fa {
        background-color: #c9d41eff;
        color: #000 !important;
    }

    .p-btn-icon {
        font-size: 2rem;
        color: #fff !important;
        text-decoration: none;
        vertical-align: middle;
    }


    .p-btn-icon a {
        font-size: 2rem;
        color: #fff !important;
        text-decoration: none;
    }
    .p-btn-icon:hover a {
        color: #000 !important;
    }


    .fa {
        margin: 20px;
        color: #c9d41eff !important;
    }

    .caption {
        text-align: center;
        display: flex;
        align-items: center;
        justify-content: center;
        vertical-align: middle;


    }

    .caption h3 {
        height: 70px;
        /* color: #4D541F; */
        font-weight: 700;
        border-bottom: solid #777 1px;
        font-size: 2rem;
    }

    .caption p {
        height: 80px;
    }

    .thumbnail>a>img {
        height: 150px !important;

    }

    .p-pn {
        padding: 30px;
        margin: 35px;
        border: solid;
        border-color: #4D541F;
        border-width: 0.1px;
        border-radius: 5px;

    }

    .p-pn h3,
    .p-pn a,
    .p-pn p {
        color: #080808 !important;
        font-weight: 700;
        text-decoration: none !important;


    }

    .p-pn p {
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;

    }

    .termino-box {
        height: 230px;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 5px;
        text-align: center;
    }
</style>