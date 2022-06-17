@extends('welcome')
@section('contenido')
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fuente Montserrat -----  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<link rel='preconnect' href='https://fonts.googleapis.com'>
<link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
<link href='https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap' rel='stylesheet'>
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin Fuente Montserrat -  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<!-- Set Wrapper -->
<div class='container-fluid atencionServicio'>
    <div class='box-wrp'>
        <div class='box-head'>
            <div class="titulo">
                <h1>Trámites, Servicios y PQRSD</h1>
                <p>En esta sección podrás acceder a la información, gestionar y hacer seguimiento a los trámites y servicios en línea de la Secretaría Distrital de Movilidad.</p>
            </div>
        </div>
        <div class="box-botones">
            <div class="box-boton box-tramites zoom">
                <div class="btn-tramites">
                    <div class='imagen'></div>
                    <div class='titulo'>
                        <h3>Tramites</h3>
                        <p>¡Conoce el portafolio de trámites que la Entidad dispone para ti!</p>
                    </div>
                </div>
            </div>
            <div class="box-boton box-servicios zoom">
                <div class="btn-servicios">
                    <div class='imagen'></div>
                    <div class='titulo'>
                        <h3>Servicios</h3>
                        <p>¡Conoce el portafolio de servicios que la Entidad dispone para ti!</p>
                    </div>
                </div>
            </div>
            <div class="box-boton box-pqrsd zoom">
                <div class="btn-pqrsd">
                    <div class='imagen'></div>
                    <div class='titulo'>
                        <h3>PQRSD</h3>
                        <p>En este espacio podrás registrar y/o hacer seguimiento a tus Peticiones, Quejas, Reclamos, Sugerencias y Denuncias.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .box-wrp {
        display: grid;
        gap: 10px;
        grid-auto-flow: dense;
        /* grid-template-columns: repeat(auto-fill, minmax(100px, 1fr)); */
        grid-template-rows: auto;
        grid-template-areas:
            '';
    }

    .box-wrp .box-head .titulo {
        /* height: px; */
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 30px;
    }

    .box-wrp .box-head .titulo h1 {
        font-size: 2em;
        font-weight: 700;
        text-align: center;
        line-height: 1;
        margin: 5px;
    }

    .box-wrp .box-head .titulo p {
        padding-top: 20px;
        /* font-size: 1em; */
        font-weight: 400;
        text-align: center;
        line-height: 1.5;
        color: rgba(25, 25, 25, 1);
        margin: 5px;
    }

    .box-botones {
        display: grid;
        gap: 30px;
        grid-auto-flow: dense;
        /* grid-template-columns: repeat(3, 1fr); */
        grid-template-columns: repeat(auto-fill, minmax(min(100%, 270px), 1fr));
        grid-template-rows: 450px;
        /* grid-template-areas:
            'tramites servicios pqrsd'; */
        padding: 20px;
        text-align: center;
        justify-content: space-around;

    }

    .box-boton {
        background: #f6f6f6;
        border: 1px solid #d5d5d5;
        border-radius: 8px;
        /* height: px; */
        display: flex;
        flex-direction: column;
        /* justify-content: center; */
        justify-content: space-between;
        align-items: center;

    }
    .box-boton:hover {
        background: #d5d5d5;
        border: 1px solid #c1c1c1;
        -webkit-box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.16);
        box-shadow: 1px 1px 10px rgba(0, 0, 0, 0.16);

    }

    .box-boton .imagen {
        height: 270px;
        border-radius: 8px 8px 0px 0px;
    }

    .box-boton .titulo {
        height: 178px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 20px;
    }

    .box-boton h3 {
        margin: 10px;
        font-size: 1.5em;
        font-weight: 700;
        text-align: center;
        line-height: 1;
        color: rgba(25, 25, 25, 1);
    }

    .box-tramites .btn-tramites .imagen {
        background-image: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/30-11-2021/tramitesservicios_a.webp');
        background-position: center;
        background-size: cover;

    }

    .box-servicios .btn-servicios .imagen {
        background-image: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/24-11-2021/tramitesservicios.webp');
        background-position: center;
        background-size: cover;
    }

    .box-pqrsd .btn-pqrsd .imagen {
        background-image: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/30-11-2021/pqrsd.webp');
        background-position: center;
        background-size: cover;
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
        transform: scale(1.05);
        -moz-transform: scale(1.05);
        /* Firefox */
        -webkit-transform: scale(1.05);
        /* Chrome - Safari */
        -o-transform: scale(1.05);
        /* Opera */
        -ms-transform: scale(1.05);

    }
    @media(max-width:767px){
        .box-botones {
        padding: 0px;
    }
    }
    @media(min-width:768px){}
    @media(min-width:992px){}
    @media(min-width:1200px){}

    /* IE9 */
</style>


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

    .atencionServicio {
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
    .atencionServicio [class*='col-'] {
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
<!-- End Styles -->