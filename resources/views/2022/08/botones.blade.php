@extends('welcome')
@section('contenido')
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fuente Montserrat -----  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<link rel='preconnect' href='https://fonts.googleapis.com'>
<link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
<link href='https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap' rel='stylesheet'>
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin Fuente Montserrat -  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<!-- Set Wrapper -->
<div class='container-fluid botones'>
    <div class='box-cards row'>

        <div class="col-xs-12 col-sm-4 col-md-3">
            <a href="#" target="_blank" rel="noopener noreferrer">
                <div class="card-obsMov zoom">
                    <div class='icono'>
                        <img src='https://observatorio.movilidadbogota.gov.co/sites/observatorio.movilidadbogota.gov.co/files/styles/medium/public/2022-08/ICONOS%20_Comportamiento%20ciudadano.png?itok=yF7OyiyV' alt='' title=''>
                    </div>
                    <div class="texto">
                        <h4>Movilidad y su Impacto en el Medio Ambiente</h4>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-3">
            <a href="#" target="_blank" rel="noopener noreferrer">
                <div class="card-obsMov">
                    <div class='icono'>
                        <img src='https://observatorio.movilidadbogota.gov.co/sites/observatorio.movilidadbogota.gov.co/files/styles/medium/public/2022-08/ICONOS%20_Comportamiento%20ciudadano.png?itok=yF7OyiyV' alt='' title=''>
                    </div>
                    <div class="texto">
                        <h4>Movilidad y su Impacto en el Medio Ambiente</h4>
                    </div>
                </div>
            </a>
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

    .botones {
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

    {
        padding: 30px;
    
    }

    .card-obsMov {
        background-color: #f6f6f6;
        border: solid 2px rgba(25, 28, 58, 1);
        border-radius: 8px;
    }
    
    a>.card-obsMov {
        margin: 8px 0px;
        text-decoration: none !important;
        /* margin: 0px; */
        /* padding: 5px; */
        font-size: 16px;
        font-weight: 700;
        text-align: center;
        line-height: 1;
        color: rgba(255, 255, 255, 1);
    }

    a.card-obsMov {
        text-decoration: none !important;
    }

   a>.card-obsMov:hover h4 {
        color: rgba(102, 224, 38, 1);
    }

    .card-obsMov .icono {
        background-color: #f6f6f6;
        /* height: px; */
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        border-radius: 8px 8px 0px 0px;

    }

    .card-obsMov .icono img {
        max-width: 120px;
    }

    .card-obsMov .texto {
        background-color: rgba(25, 28, 58, 1);
        height: 60px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .card-obsMov .texto h4 {
        margin: 0px;
        padding: 5px;
        font-size: 16px;
        font-weight: 700;
        text-align: center;
        line-height: 1;
        color: rgba(255, 255, 255, 1);
        /* margin: 8px; */
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
        /* IE9 */
    }

    /*
    .botones [class*='col-'] {
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