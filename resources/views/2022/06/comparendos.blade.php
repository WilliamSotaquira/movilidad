@extends('welcome')
@section('contenido')
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fuente Montserrat -----  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<link href="https://fonts.googleapis.com" rel="preconnect">
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet"><!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin Fuente Montserrat -  ----- ----- ----- ----- ----- ----- ----- ----- ------ --><!-- Set Wrapper -->
<hr>
<div class="container-fluid comparendos">
	<div class="set-wrapper">
		<div class="box-head">
			<div class="logo"><!-- <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/servicios/07-03-2022/comparendos_20220307_sm.jpg' alt='logo' title='logo'> --></div>

			<div class="titulo">
				<div>
					<h1>Consulta y pagos de comparendos</h1>

					<p>Con su <strong>número de cédula</strong> y <strong>la placa del vehículo</strong> consulte los comparendos vigentes</p>

					<p>También encontrará la información sobre los descuentos a los que puede acceder</p>
				</div>
			</div>
		</div>
		<style type="text/css">.set-wrapper {}

            .box-head {
                /* grid-area: logo; */
                display: grid;
                grid-auto-flow: dense;
                grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
                grid-template-rows: auto;
                grid-template-areas:
                    'logo titulo';
                border-bottom: solid 5px rgba(102, 224, 38, 1);
            }

            .box-head .logo {
                padding: 10px;
                background-image: url('https://www.movilidadbogota.gov.co/web/sites/default/files/servicios/14-06-2022/paginaweb.png');
                background-size: cover;
                background-position: center;
                grid-area: logo;
                /* height: 180px; */
            }

            .box-head .titulo {
                padding: 20px;
                /* height: px; */
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                background-color: rgba(25, 28, 58, 1);
                grid-area: titulo;
            }

            .box-head .titulo h1 {
                /* font-size: 1em; */
                font-weight: 700;
                text-align: center;
                line-height: 1;
                color: rgba(102, 224, 38, 1);
                margin: 20px 10px;
            }

            .box-head .titulo p {
                font-size: 1.2em;
                font-weight: 500;
                text-align: left;
                line-height: 1.4;
                color: rgba(255, 255, 255, 1);
                margin: 5px;
            }
		</style>
		<hr>
		<div class="box-mensaje">
			<div class="label"><img alt="" class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/servicios/15-06-2022/icono-vehiculos_comparendos.png" title=""></div>

			<div class="mensaje">
				<h3>Ahora <strong>desde la comodidad de tu casa</strong> podrás consultar el <strong>pago de comparendos, acuerdos de pago y embargos.</strong></h3>
			</div>

			<div class="box-boton"><a class="btn btn-nm btn-lg btn-block" href="https://consultas.transitobogota.gov.co:8010/publico/index3.php" rel="noopener noreferrer" target="_blank">Consulte aquí <strong>comparendos, acuerdos de pago y embargos.</strong></a></div>
		</div>

		<hr>
		<style type="text/css">.box-mensaje {
                /* height: 160px; */
                width: 100%;
                border: 3px solid rgba(102, 224, 38, 1);
                position: relative;
                border-radius: 8px;
                margin-bottom: 30px;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                margin-top: 30px;
            }

            .box-mensaje .label {
                position: absolute;
                top: -15px;
                left: calc(50% - 100px);
                height: 30px;
                width: 200px;
                background-color: #fff;

                text-align: center;
            }

            .box-mensaje .label img {
                padding: 0px 15%;
            }

            .mensaje {
                padding: 30px 30px;
            }

            .mensaje h3 {
                /* font-size: 1em; */
                font-weight: 400;
                text-align: center;
                line-height: 1.5;
                color: rgba(25, 28, 58, 1);
                margin: 8px;
            }

            .box-boton {
                padding-bottom: 25px;
            }
		</style>
		<div class="box-acuerdo">
			<div class="imagen"><!-- <img class='img-responsive w-100' src='' alt='funcionario de la Secretaría Distrital de Movilidad realizando acuerdo de pago con ciudadanos' title='funcionario de la Secretaría Distrital de Movilidad realizando acuerdo de pago con ciudadanos'> --></div>

			<div class="texto">
				<div>
					<h4>Haz ya tu <strong>acuerdo de pago</strong> y ponte al día con Bogotá</h4>
				</div>
				<a class="btn btn-lg btn-block btn-nm" href="https://bogota.gov.co/servicios/guia-de-tramites-y-servicios/facilidades-de-pago-para-los-deudores-de-obligaciones-no-tributarias-sdm-37027" rel="noopener noreferrer" target="_blank">Clic aquí para hacer tu <strong>acuerdo de pago</strong></a></div>
		</div>
		<style type="text/css">.box-acuerdo {
                display: grid;
                /* gap: 10px; */
                grid-auto-flow: dense;
                grid-template-rows: auto;
                grid-template-areas:
                    'imagen texto';
            }


            .box-acuerdo .imagen {
                grid-area: imagen;
                background-image: url('https://www.movilidadbogota.gov.co/web/sites/default/files/servicios/15-06-2022/acuerdo_pago.png');
                background-size: cover;
                background-position: center;
                min-height: 300px;
            }

            .box-acuerdo .texto {
                grid-area: texto;
                /* height: px; */
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                padding: 30px;
            }

            .box-acuerdo .texto h4 {
                font-size: 2em;
                font-weight: 400;
                text-align: center;
                line-height: 1.4;
                color: rgba(25, 28, 58, 1);
            }

            .box-acuerdo .texto p {
                font-size: 1em;
                font-weight: 500;
                text-align: center;
                line-height: 1.4;
                color: rgba(25, 28, 58, 1);
            }
		</style>
		<div class="box-normativo">
			<p>Según el artículo 2 del Código Nacional de Tránsito, el comparendo es una orden formal de notificación para que el presunto contraventor o implicado se presente ante la autoridad de tránsito por la comisión de una infracción. Aquí podrá consultar con su número de cedula y placa del vehículo los comparendos que tenga pendientes, acuerdos de pago y embargos.</p>
		</div>

		<div class="box-boton"><a class="btn btn-lg btn-nm" href="https://consultas.transitobogota.gov.co:8010/publico/index3.php" rel="noopener noreferrer" target="_blank">Consulte aquí <strong>comparendos, acuerdos de pago y embargos.</strong></a></div>

		<hr>
		<div class="box-boton"><a class="btn btn-lg btn-nm" href="https://www.movilidadbogota.gov.co/web/sites/default/files/servicios/23-01-2024/tabla_autoliquidacion_2024.pdf" rel="noopener noreferrer" target="_blank">Consulte aquí <strong>Tabla de autoliquidación de infracciones 2024</strong></a></div>

		<hr>
		<style type="text/css">.box-normativo {
                padding: 30px;
            }

            .box-normativo p {
                /* font-size: 1em; */
                font-weight: 400;
                text-align: justify;
                line-height: 1.5;
                color: rgba(25, 25, 25, 1);
            }
		</style>

        <!-- Sección box logo-full -->
        <div class="box-logo-full zoom">
            <a href="https://portalmimovilidad.movilidadbogota.gov.co/#/">
                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/servicios/27-02-2024/banner_mimovilidad.png" alt="logo banner Movilidad a un clic">
            </a>
        </div>
        <style>
            .set-wrapper .box-logo-full {
                grid-area: box-logo-full;
               margin-bottom: 40px;
               border-radius: 6px;
               -webkit-box-shadow: 0px 0px 10px 3px rgba(0, 0, 0, 0.16);
               box-shadow: 0px 0px 10px 3px rgba(0, 0, 0, 0.16);
            }

            .box-logo-full img {
                /* max-width: 500px; */
                border-radius: 6px;
                margin: auto;
            }
        </style>
		<!-- PDF 4:3 aspect ratio -->
		<div class="box-pdf">
			<div class="title title-h3">
				<h3>SISTEMA DE GESTIÓN ANTISOBORNO</h3>

				<h4>Dirección de Gestión de Cobro</h4>
			</div>

			<div class="embed-responsive embed-responsive-4by3"><iframe allow="autoplay" height="480" src="https://www.movilidadbogota.gov.co/web/sites/default/files/servicios/19-04-2023/gestion_antisoborno-3_compressed.pdf" width="640"></iframe></div>
			<br>
			<a download="" href="https://www.movilidadbogota.gov.co/web/sites/default/files/servicios/19-04-2023/gestion_antisoborno-3_compressed.pdf" rel="noopener noreferrer" target="_blank">Descargue aquí documento de la POLÍTICA ANTISOBORNO DE LA SDM (.pdf)</a></div>
		<style type="text/css">.box-pdf .title {
                padding: 16px 16px 32px 16px;

            }

            .box-pdf h3,
            .box-pdf h4 {
                text-align: center;
                color: rgba(25, 28, 58, 1);
            }
            .box-pdf a{
                display: inline-block;
            }
		</style>
	</div>
</div>

<p><br>
	<!-- End Set Wrapper --><!-- Styles -->
	<style type="text/css">.field-item.even h2 {
        visibility: hidden;
        margin-top: -50px;
    }

    .region-content {
        padding: 0px;
        overflow: hidden;
    }

    .comparendos {
        max-width: 980px;
        word-wrap: break-word;
        font-family: 'Montserrat', sans-serif;
        font-size: 15px;
        font-weight: 500;
        text-align: justify;
        line-height: 1.3;
        color: rgba(25, 25, 25, 1);
    }

    /*
    .comparendos [class*='col-'] {
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

    .box-boton {
        text-align: center;
        padding: 15px;
    }

    .btn-nm {
        background-color: rgba(102, 224, 38, 1) !important;
        /* font-size: 1em; */
        font-weight: 500 !important;
        text-align: center;
        line-height: 1;
        color: rgba(25, 25, 25, 1);
        white-space: normal !important;
        word-wrap: break-word !important;
        max-width: 100%;
    }

    .btn-nm:hover {
        background-color: rgba(62, 194, 8, 1) !important;
        color: rgba(5, 5, 5, 1) !important;

    }

    /* .btn-nm:visited, */
    .btn-nm:active,
    .btn-nm:focus {
        background-color: rgba(25, 28, 58, 1) !important;
        color: rgba(255, 255, 255, 1) !important;

    }

    @media(max-width:767px) {
        .box-head {
            grid-template-areas:
                'titulo'
                'logo';
        }

        .box-head .logo {
            height: 200px;
        }

        .box-head .titulo p {
            text-align: center;
            font-size: 1em;
        }

        .box-acuerdo {
            /* grid-template-columns: repeat(auto-fill, minmax(180px, 1fr)); */
            grid-template-areas:
                'imagen imagen'
                'texto texto';
        }

    }


    @media(min-width:768px) {
        .box-acuerdo {
            grid-template-columns: 40% 60%;
            grid-template-areas:
                'imagen texto';
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
            /* IE9 */
        }

        .zoom:hover {
            transform: scale(1.05);
            -moz-transform: scale(1.05);
            /* Firefox */
            -webkit-transform: scale(1.05);
            /* Chrome - Safari */
            -o-transform: scale(1.05);
            /* Opera */
            -ms-transform: scale(1.05);
            /* IE9 */
        }
    }
	</style>
	<!-- End Styles --></p>
