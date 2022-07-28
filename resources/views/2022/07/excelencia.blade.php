@extends('welcome')
@section('contenido')
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fuente Montserrat -----  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<link rel='preconnect' href='https://fonts.googleapis.com'>
<link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
<link href='https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap' rel='stylesheet'>
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin Fuente Montserrat -  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<!-- Set Wrapper -->
<div class='container-fluid excelencia2022'>
    <div class='box-wrp'>
        <div class='box-head'>
            <div class="titulo">
                <h1 class="text-1">Reconocimiento</h1>
                <h1 class="text-2">Excelencia<br>Logística 2022</h1>
                <h3>Red de Logística Urbana</h3>
            </div>
            <div class="vacio">

            </div>
        </div>
        <style>
            .box-head {
                background-image: linear-gradient(#1c2046d2, #1c2046d2), url('https://lh3.googleusercontent.com/Er5CHix7D6bbGid99RGLJXK_0oSuGPNF69iLrC2tH9bKUqPFqoY_PTea7AnnraqjtKkDTt_m6ibARlNgCrb2ShWE_prBDJcfZ7-x1e0JQ-iaNQghjvLicn03E3fwM99ZWviD5Lg');
                background-size: cover;
                background-repeat: no-repeat;
                background-position: bottom center;
                padding: 2% 4%;
                display: grid;
                gap: 10px;
                grid-auto-flow: dense;
                grid-template-columns: 1fr 1fr;
                grid-template-rows: 260px;
                grid-template-areas:
                    'titulo vacio';
            }

            .box-head .titulo {
                /* height: px; */
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: flex-start;
            }

            .box-head .titulo h1,
            .box-head .titulo h3 {
                margin: 8px;
                color: rgba(102, 224, 38, 1);
                font-weight: 700;
            }

            .box-head .titulo .text-1 {
                font-size: 26px;
                font-weight: 400;
            }

            .box-head .titulo .text-2 {
                color: rgba(255, 255, 255, 1);
                font-size: 40px;
                font-weight: 700;
            }
        </style>
        <div class="texto-excelencia">
            <p>Participa en el reconocimiento Excelencia Logística 2022 – Red de Logística Urbana, sellos de buenas prácticas logística que otorga la Secretaría Distrital de Movilidad. </p>
            <p>Si tu empresa desarrolla buenas prácticas de logística sostenibles, eficientes e innovadoras que aportan de manera significativa a la ciudad de Bogotá y su Región Metropolitana, te invitamos a inscribirte en este reconocimiento con premiación de sellos en oro, plata o bronce; son tres categorías para la postulación:</p>
            <ul>
                <li>Sostenibilidad social</li>
                <li>Sostenibilidad ambiental</li>
                <li>Eficiencia logística</li>
            </ul>
            <h3 class="txt-fecha">Cierre inscripciones: 31 de agosto de 2022</h3>
        </div>
        <style>
            .texto-excelencia {
                padding: 8px 16px;
            }

            .texto-excelencia p,
            .texto-excelencia li,
            .texto-excelencia h3 {
                /* font-size: 1em; */
                font-weight: 500;
                text-align: left;
                line-height: 1.4;
                color: rgba(25, 25, 25, 1);
                margin: 20px;
            }
            .texto-excelencia .txt-fecha {
                /* text-align: center !important; */
                /* font-size: 1em; */
                font-weight: 700;
                text-align: center;
                line-height: 1.2;
                color: rgba(25, 25, 25, 1);
                margin: 8px;
                padding: 10px;
                border-bottom: 2px solid rgba(102, 224, 38, 1);
                border-top: 2px solid rgba(102, 224, 38, 1);
            }
        </style>
        
        <div class="texto-excelencia">
            <p><strong>Bases para participar:</strong></p>
            <p>Si tu organización aún no es miembro de la Red de Logística Urbana, diligencia este formulario:</p>
            <div class='imagen'>
                <a href="http://bit.ly/InscripcionRLU" target="_blank" rel="noopener noreferrer">
                    <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/26-07-2022/formulario_inscripcion.png' alt='Recorte de pantalla del formulario de Inscripción' title='Recorte de pantalla del formulario de Inscripción'>
                </a>
            </div>
            <div class="box-boton">
                <a href="http://bit.ly/InscripcionRLU" target="_blank" rel="noopener noreferrer">
                    <div class="boton-excelencia">Formulario de inscripción RLU</div>
                </a>
            </div>
        </div>
        <style>
            .texto-excelencia .imagen {
                width: 80%;
                margin: auto;
                padding: 10px;
            }

            .box-boton {
                height: 40px;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }

            .box-boton a {
                color: rgba(102, 224, 38, 1);
                text-decoration: none !important;
            }

            .box-boton a .boton-excelencia:hover {
                color: rgba(25, 25, 25, 1);
            }

            .box-boton .boton-excelencia {
                background-color: rgba(25, 28, 58, 1);
                color: rgba(102, 224, 38, 1);
                padding: 8px 16px;
                margin: 20px;
                border-radius: 4px;
            }

            .box-boton .boton-excelencia:hover {
                background-color: rgba(102, 224, 38, 1);
                color: rgba(25, 25, 25, 1);
            }
        </style>
        
        <div class="texto-excelencia">
            <p>Para inscribir a tu empresa como participante por el reconocimiento Excelencia Logística 2022 - Red de Logística Urbana, usa este formulario (debes tener una cuenta de Google habilitada ya que es necesario cargar algunos archivos):</p>
            <div class='imagen'>
                <a href="http://bit.ly/InscripcionRLU" target="_blank" rel="noopener noreferrer">
                    <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/26-07-2022/formulario_inscripcion.png' alt='Recorte de pantalla del formulario de Inscripción' title='Recorte de pantalla del formulario de Inscripción'>
                </a>
            </div>
            <div class="box-boton">
                <a href="http://bit.ly/InscripcionRLU" target="_blank" rel="noopener noreferrer">
                    <div class="boton-excelencia">Reconocimiento Excelencia Logística</div>
                </a>
            </div>
        </div>
    </div>
</div>
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

    .excelencia2022 {
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
    .excelencia2022 [class*='col-'] {
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
    @media(max-width:767px){}
    @media(min-width:768px){
        .texto-excelencia .imagen {
                width: 40%;
                margin: auto;
                padding: 30px;
            }
    }
    @media(min-width:992px){}
    @media(min-width:1200px){}
</style>
<!-- End Styles -->