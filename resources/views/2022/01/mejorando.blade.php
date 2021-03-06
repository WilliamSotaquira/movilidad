@extends('welcome')
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fuente Montserrat -----  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<link rel='preconnect' href='https://fonts.googleapis.com'>
<link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
<link href='https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap' rel='stylesheet'>
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin Fuente Montserrat -  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->


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
        line-height: 1 !important;
        max-width: 940px;
        background: rgba(255, 255, 255, 1);
        /* background-image: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/08-01-2022/03-1-general_textura_1_fondo_claro.png'); */
        font-family: 'Montserrat', sans-serif;
        font-size: 15px;
        font-weight: 500;
        text-align: justify;
        line-height: 1.4;
    }

    /* .seccion [class*='col-'] {
        margin: 0px;
        padding: 0px;
        border: 0;
        outline: 0;
        font-size: 100%;
        vertical-align: baseline;
    } */

    .w-100 {
        width: 100%;
    }

    .color1 {
        color: #c10000 !important;
    }

    .color2 {
        color: #ff7400 !important;
    }

    .color3 {
        color: #c59700 !important;
    }

    .color4 {
        color: #929700 !important;
    }

    .color5 {
        color: #475211 !important;
    }



    /* Seccion 1 -----------> encabezado */

    .encabezado {
        /* height: 630px; */
        /* max-height: 350px; */
        background: linear-gradient(45deg, black, #ffffff11), url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/08-01-2022/03-seccion-1_fondo_contenedor_logo.png');
        background: rgba(228, 238, 187, 1);
        background-position: center bottom;
        background-size: cover;
        background-repeat: no-repeat;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        align-items: center;
    }

    .s1 .logo-encabezado {
        padding: 0px;
        width: 80%;
        margin: auto;
    }


    .s1 .v-encabezado {
        padding: 0px 20px 20px 20px;
    }

    .s1 .video-encabezado {
        padding: 0px;
        /* height: 230px; */
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .s1 .video-encabezado iframe {
        /* height: 230px; */
    }

    .s1 .img-encabezado {
        margin: 0px 10%;
    }

    .s1 .p-encabezado {
 
        padding: 0px 30px 30px 30px;
        /* height: 230px; */
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }



    .s1 .p-encabezado p {
        font-weight: 500;
        text-align: justify;
        line-height: 1.5;
        color: rgba(25, 25, 25, 1);
    }

    .s1 .p-encabezado strong {
        text-align: justify;
        font-family: 'Montserrat', sans-serif;
        font-size: 16px;
        font-weight: normal;
        text-align: justify;
        line-height: 1.4;
        color: rgba(255, 255, 255, 1);

    }

    .s1 p strong {
        font-size: 14px !important;
    }

    /* botones navtabs bem */

    .botones .btn1 {
        background-color: #c10000;
    }

    .botones .btn2 {
        background-color: #ff7400;
    }

    .botones .btn3 {
        background-color: #c59700;
    }

    .botones .btn4 {
        background-color: #929700;
    }

    .botones .btn5 {
        background-color: #475211;
    }

    .colorpper-btnbem :hover {
        background-color: rgba(228, 238, 187, 1) !important;
    }

    .botones .wrapper-btnbem a:hover {
        color: #252525 !important;
    }

    /* Seccion nav-tabs -------------------------- tabs */

    .s2 .nav {
        padding: 15px;
    }

    .s2 .nav-tabs>li {
        width: 100%;
    }

    .s2 .img-btn-tabs {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .s2 .img-btn-tabs img {
        width: 50%;
    }

    .s2 .txt-btn-tabs {
        text-align: center;
    }

    .s2 .txt-btn-tabs h3 {
        font-family: 'Montserrat', sans-serif;
        font-size: 16px;
        color: rgba(69, 81, 34, 1);

    }

    .s2 .nav-tabs>li.active>a,
    .nav-tabs>li.active>a:focus,
    .nav-tabs>li.active>a:hover {
        border: 2px solid rgba(255, 182, 32, 1) !important;
        background-color: rgba(228, 238, 187, 1) !important;
    }

    .s2 .nav-tabs>li>a {
        border-radius: 4px;
    }

    .s2 .tab-pane {
        /* background-color: #fdfdfd !important; */
    }

    /* .tabs .box-paragraph p {
        font-size: 1em;
        font-weight: 500;
        text-align: left;
        line-height: 1.4;
        color: rgba(25, 25, 25, 1);
        /* padding: 15px 30px; */
    }

    */
    /* .tabs .paragraph-video {
        padding: 8px;
        height: 120px;
        display: flex;
        flex-direction: column;
        justify-content: start;
        align-items: center;
    }

    .tabs .paragraph-video p {
        font-size: 1em;
        font-weight: 500;
        text-align: justify;
        line-height: 1.4;
        color: rgba(25, 25, 25, 1);
    } */


    .s2 .introduccion {
        font-size: 1em;
        font-weight: 500;
        text-align: left;
        line-height: 1.4;
        color: rgba(25, 25, 25, 1);
        margin: 16px;

    }

    .s2 .introduccion h3 {
        font-family: 'Montserrat', sans-serif;
        font-weight: 900;
        font-size: 18px;
        color: rgba(255, 182, 32, 1);
        text-align: initial;
        padding: 8px;
        border: solid 2px rgba(69, 81, 34, 1);
        background-color: rgba(69, 81, 34, 1);
        text-transform: uppercase;
    }

    .s2 .descripcion {
        /* padding: 15px; */
        /* height: 400px; */
        /* overflow-y: scroll; */
        margin-bottom: 16px;
    }

    .s2 .descripcion h3 {
        /* font-family: 'Montserrat', sans-serif;
        font-size: 18px;
        color: rgba(228, 238, 187, 1);
        padding: 8px;
        border: solid 2px rgba(69, 81, 34, 1);
        background-color: rgba(69, 81, 34, 1);*/
        font-weight: 700;
        text-align: left;
        text-transform: uppercase;
    }

    .s2 .descripcion p {
        padding: 5px;
        overflow: hidden;
        text-overflow: clip;
        font-size: 1em;
        font-weight: 500;
        text-align: justify;
        line-height: 1.4;
        color: rgba(25, 25, 25, 1);
    }

    .s2 .descripcion a {
        word-wrap: break-word !important;
        overflow: hidden !important;
        text-overflow: clip !important;
        font-size: 1em;
        font-weight: 500;
        text-align: left;
        line-height: 1.4;

    }

    .s2 .descripcion .ver {
        text-align: initial;
        padding: 5px;
        font-size: 14px !important;
        line-height: 1.4;
        font-family: 'Montserrat', sans-serif;
    }


    #clips {
        /* background-image: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/08-01-2022/03-seccion-4-bg-tito_mejor.png'); */
    }

    .s2 .btn-boletin {
        padding: 10px;
        /* border: solid 2px rgba(255, 182, 32, 1); */
        border-radius: 1px;
        margin: 1% 5%;
        /* height: 100px; */
        display: flex;
        flex-direction: column;
        justify-content: center;
        background-color: #eeeeee;

        /* border: 2px transparent solid; */
        /* border-image: -webkit-linear-gradient(left, rgba(69, 81, 34, 1), rgba(255, 182, 32, 1)) 1 10; */


    }

    .s2 .btn-boletin:hover {
        background-color: rgba(228, 238, 187, 1);
    }


    .s2 .btn-boletin .titulo-boletin {
        padding-bottom: 8px;
    }


    .s2 .btn-boletin .titulo-boletin h4 {
        margin: 5px 0px 5px 0px;
        padding: 0px;
        margin: 0px;
        font-size: 16px;
        font-weight: 700;
        text-align: justify;
        line-height: 1.2;
        color: rgba(25, 25, 25, 1);
    }

    .s2 .btn-boletin .titulo-boletin i {
        margin: 0px;
        padding: 0px 0px 5px 0px;
        padding-top: 20px;
    }

    .s2 .btn-boletin .descripcion-boletin {
        padding: 0px;
        height: 75px;
        /* white-space: nowrap; */
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .s2 .btn-boletin .descripcion-boletin p {
        text-align: justify;
        overflow: hidden;
        text-overflow: ellipsis;
        /* font-size: 1em; */
        font-weight: 500;
        text-align: left;
        line-height: 1.4;
        color: rgba(25, 25, 25, 1);
        margin: 8px;
    }

    .s2 .enlace {
        text-decoration: none;
        color: #252525;
    }


    .s2 .descripcion-boletin {
        /* padding: 8%; */
        padding: 4%;
    }

    .s2 dl {
        margin: 15px;
    }

    .s2 dt,
    .s2 dd {

        font-weight: 500;
        color: rgba(25, 25, 25, 1);
    }

    .s2 .box-boletines [class*='col-'] {
        margin: 0px;
        padding: 0px;
        border: 0;
        outline: 0;
        font-size: 100%;
        vertical-align: baseline;
    }

    .checklist li:before {
        content: "\2714\0020";
    }

    .checklist {
        list-style-type: none;
    }

    .checklist li {
        font-family: 'Montserrat', sans-serif;
        font-size: 12px;
        line-height: 1.5;

    }

    .s2 ul>li {
        font-family: 'Montserrat', sans-serif;
        font-size: 12px !important;
        padding-bottom: 8px;
        line-height: 1.4;

    }

    .zoom {
        transition: 0.5s ease;
        -moz-transition: 0.5s ease;
        /* Firefox */
        -webkit-transition: 0.5s ease;
        /* Chrome - Safari */
        -o-transition: 0.5s ease;
        /* Opera */
    }

    .zoom:hover {
        transform: scale(1.02);
        -moz-transform: scale(1.02);
        /* Firefox */
        -webkit-transform: scale(1.02);
        /* Chrome - Safari */
        -o-transform: scale(1.02);
        /* Opera */
        -ms-transform: scale(1.02);
        z-index: 100;
        /* IE9 */

    }

    .imagen-6 {
        background-image: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/30-06-2022/foto_0.png');
        background-size: cover;
        background-position: right;
        background-repeat: no-repeat;
        min-height: 300px;


    }

    .imagen-7 {
        background-image: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/08-01-2022/03-seccion-3-transmilenio-2.png');
        background-size: cover;
        background-position: right;
        background-repeat: no-repeat;
        height: 100%;
        width: 100%;

    }

    .imagen-8 {
        background-image: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-01-2022/img1.png');
        background-size: cover;
        background-position: left;
        background-repeat: no-repeat;
        height: 100%;
        width: 100%;

    }

    .imagen-9 {
        background-image: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/08-01-2022/03-seccion-3-planifica_tu_viaje-2.png');
        background-size: cover;
        background-position: left;
        background-repeat: no-repeat;
        height: 100%;
        width: 100%;

    }

    .tabs .box-videos {
        /* padding: 30px; */
    }

    .video-bem {
        /* margin-top: 30px; */
        /* padding: 16px; */
        /* border: 3px transparent solid; */
        /* border-image: -webkit-linear-gradient(left, rgba(69, 81, 34, 1), rgba(255, 182, 32, 1)) 1 10; */
        /* margin: 10px; */
    }

    #clips .row {
        margin-right: 0px;
        margin-left: 0px;
    }

    .s2 .video-bem .titulo-video-bem {
        text-align: center;
        font-family: 'Montserrat', sans-serif;
        color: rgba(69, 81, 34, 1);
        font-size: 16px;
        margin: 0px;
        padding: 0px;
        font-weight: 700;

    }

    .s2 .video-bem .titulo-video-bem h4 {

        font-size: 16px;
        margin: 0px;
        padding: 20px;
        font-weight: 700;

    }

    .s2 .video-bem .descripcion-video-bem {

        height: 100px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .s2 .video-bem .descripcion-video-bem p {
        margin: 0px;
        padding: 0px;

        font-size: 1em;
        font-weight: 500;
        text-align: justify;
        line-height: 1.4;
        color: rgba(25, 25, 25, 1);
    }

    .s2 .box-video-bem {
        /* padding: 16px; */

    }

    #accordion_boletines21 .panel-body {
        padding: 15px 0px;
    }
</style>


<style>
    .botones {
        padding: 15px 0px;
        display: flex;
        justify-content: center;

    }

    .wrapper-btnbem {
        margin: 5px;
        padding: 4px;
        background-color: rgba(69, 81, 34, 1);
        color: #fff !important;

    }

    /**/
    .wrapper-btnbem:hover,
    .wrapper-btnbem:active {
        background-color: rgba(228, 238, 187, 1);
        color: #252525 !important;

    }

    .wrapper-btnbem a {
        text-decoration: none !important;
    }

    .box-btnbem {

        height: 100px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .boton-bem {
        /* height: 415px; */
        background-position: center bottom;
    }

    .boton-bem img {
        max-width: 80px;
        width: 80%;
        min-width: 40px;
        margin: auto;
    }

    .box-btnbem .txt-btn-bem {
        height: 100px;
        width: 70%;
        max-width: 70%;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .box-btnbem .txt-btn-bem h3 {
        color: rgba(255, 255, 255, 1);
        margin: 0px;
        padding: 5px;
        font-size: 14px;
        font-weight: 700;
        text-align: left;
        text-transform: uppercase;
        text-shadow: 1px rgba(69, 81, 34, 1);
        font-family: 'Montserrat', sans-serif;

        word-wrap: break-word;
        overflow: hidden !important;
        text-overflow: clip !important;
    }


    .wrapper-btnbem:hover .txt-btn-bem h3,
    .wrapper-btnbem:hover .txt-btn-bem a,
    .wrapper-btnbem:active .txt-btn-bem h3,
    .wrapper-btnbem:active .txt-btn-bem a {
        color: rgba(25, 25, 25, 1) !important;
        text-shadow: 1px #f3f4f5 !important;
    }

    .s2 .tabs .box-title h3 {
        font-weight: 900;
        text-align: center;
        line-height: 1.2;
        color: #c10000;
        text-transform: uppercase;
        margin: 10px;
    }



    @media(max-width:767px) {

        .s2 .descripcion-tito {
            height: 520px;
        }

        /* .box-btnbem {
            margin: 25px;
        }

        .boton-bem {
            height: 263px;
        } */


    }

    @media(min-width:768px) {}


    @media (min-width: 768px) {
        .s1 .v-encabezado {
            /* height: 570px; */
        }
    }

    .s1 .video-encabezado {
        height: 196px;
    }

    .s1 .video-encabezado iframe {
        height: 196px;
    }


    .s1 .v-encabezado {
        padding: 0px 0px 20px 20px;
    }

    .video-bem {
        padding: 16px;
    }

    .s2 .descripcion {
        padding: 15px;
        height: 400px;
        overflow-y: scroll;
        margin-bottom: 16px;
    }

    .tabs .box-paragraph p {
        padding: 15px 30px;
    }

    @media(min-width:992px) {}

    @media(min-width:1200px) {}
</style>

<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin hoja de estilo  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<style>
    @media(max-width:767px) {
        .imgd-1 {
            margin-top: 16px;

        }

        .imgd-2 {
            height: 320px;

        }

        .imgd-3 {
            height: 320px;

        }

        .imgd-4 {
            height: 320px;

        }

        .imgd-5 {
            height: 380px;

        }


        .imgd-6 {
            height: 500px;

        }

        .imgd-7 {
            height: 500px;

        }

        .imgd-8 {
            height: 470px;

        }

        .imgd-9 {
            height: 380px;

        }

        .imgd-10 {
            height: auto;

        }

        .imgd-11 {
            height: 450px;

        }



    }

    @media(min-width:768px) {


        .s2 .nav-tabs>li {
            /* width: 100%; */
            width: 20%;
        }

        .s1 .encabezado {
            /* height: 570px; */
            /* height: 600px; */
        }

        .s1 .v-encabezado {
            /* height: 570px; */
            /* height: 600px; */
        }


        .s2 .descripcion {
            /* padding: 8%; */
            padding: 16px;

        }

        .s2 .descripcion p {
            /* font-size: 11px !important; */
            font-size: 14px !important;
        }

        .s2 .nav {
            padding: 40px;
        }

        .s2 .descripcion-tito {
            height: 490px;
        }

        .s2 .descripcion-tito p {
            /* font-size: 11px !important; */
            font-size: 14px !important;

        }

        .img-descripcion {
            display: flex;
            justify-content: center;
            align-items: center;
        }


        .imgd-1 {
            height: 400px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            padding: 15px;
        }

        .imgd-2 {
            height: 400px;
            padding: 15px;

        }

        .imgd-3 {
            height: 400px;
            padding: 15px;

        }

        .imgd-4 {
            height: 400px;
            padding: 15px;

        }

        .imgd-5 {
            height: 400px;
            padding: 15px;

        }

        .imgd-6 {
            height: 400px;
            padding: 15px;

        }

        .imgd-7 {
            height: 400px;
            padding: 15px;

        }

        .imgd-8 {
            height: 400px;
            padding: 15px;

        }

        .imgd-9 {
            height: 400px;
            padding: 15px;

        }

        .imgd-10 {
            height: 400px;
            padding: 15px;

        }

        .imgd-11 {
            height: 400px;
            padding: 15px;

        }


        .s2 .carousel {
            object-fit: cover;
            object-position: center;
            /* height: 100%; */
        }

        .box-btnbem .txt-btn-bem h3 {
            font-size: 11px;
        }


    }


    @media(min-width:992px) {

        .box-btnbem .txt-btn-bem h3 {
            font-size: 14px;
        }

        .imgd-1 {
            height: 500px;

        }

        .imgd-2 {
            height: 500px;

        }

        .imgd-3 {
            height: 500px;

        }

        .imgd-4 {
            height: 500px;

        }

        .imgd-5 {
            height: 500px;

        }

        .imgd-6 {
            height: 500px;

        }

        .imgd-7 {
            height: 500px;

        }

        .imgd-8 {
            height: 500px;

        }

        .imgd-9 {
            height: 500px;
            background-position: center;

        }

        .imgd-10 {
            height: 500px;

        }

        .imgd-11 {
            height: 500px;

        }

        .s2 .descripcion-tito {
            height: 500px;
        }

        .s2 .descripcion-tito p {
            font-size: 15px !important;
        }

        .s2 .descripcion-tito h3 {
            font-size: 24px;
        }

        .s2 .box-boletines .panel-heading .panel-title a:after {
            font-family: 'Glyphicons Halflings';
            content: '\e080';
            float: right;
            color: #475211;
            font-size: 16px;
            font-weight: 700;
        }

        .s2 .box-boletines .panel-heading .panel-title a.collapsed:after {
            content: '\e114';
        }

        .s2 .box-boletines .panel-default>.panel-heading {
            background-color: #e4eeba;
        }

        .s2 .box-boletines .panel-default>.panel-heading h4 {
            font-size: 16px;
            font-weight: 700;
            text-align: left;
            line-height: 1.2;
            color: #475211;
            font-family: 'Montserrat', sans-serif !important;
        }

        .s2 .box-boletines .panel-group .panel {
            border-radius: 0px;
        }

        .s1 .video-encabezado {
            height: 230px;
        }

        .s1 .video-encabezado iframe {
            height: 230;
        }

        .tabs .paragraph-video {
            padding: 8px;
            height: 120px;
            display: flex;
            /* flex-direction: column; */
            justify-content: start;
            align-items: center;
        }

        .s2 .descripcion {
            padding: 15px;
            height: 500px;
            overflow-y: scroll;
            margin-bottom: 16px;
        }

    }

    @media(min-width:1200px) {}
</style>

<style>
    .boxcordion {
        /* padding: 4%; */
    }

    .boxcordion .panel-default .panel-heading {
        background-color: rgba(69, 81, 34, 1);
        border-radius: 0px;
    }

    .boxcordion .panel-heading a {
        color: #fff !important;
        font-weight: 700;
    }


    .boxcordion .panel-collapse>.panel-body {
        background-color: #ffffef;
        padding: 15px 0px !important;
    }
</style>
<style>
    .col-xs-5ths,
    .col-sm-5ths,
    .col-md-5ths,
    .col-lg-5ths {
        position: relative;
        min-height: 1px;
        /* padding-right: 15px;
        padding-left: 15px; */
    }

    .col-xs-5ths {
        width: 20%;
        float: left;
    }

    @media (min-width: 768px) {
        .col-sm-5ths {
            width: 20%;
            float: left;
        }
    }

    @media (min-width: 992px) {
        .col-md-5ths {
            width: 20%;
            float: left;
        }
    }

    @media (min-width: 1200px) {
        .col-lg-5ths {
            width: 20%;
            float: left;
        }
    }
</style>


<!-- ----- ----- ----- ----- ----- ----- ----- ----- Bloque Seccion ----- ----- ----- ----- ----- ----- ----- ----- ----- ------ -->

<div class='container-fluid seccion'>
    <div class='s1'>

        <!-- Seccion de encabezado  -->
        <div class='row encabezado'>
            <div class='row'>
                <div class='col-xs-12'>
                    <div class="img-encabezado">
                        <div class='logo-encabezado'>
                            <img class='img-responsive w-100 ' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/01-04-2022/bogotaestamosconstruyendo-03.png' alt='Logo Bogot?? esta mejorando' title='Logo Bogot?? esta mejorando'>
                        </div>
                    </div>
                </div>

                <div class='col-xs-12 col-sm-12'>
                    <div class="p-encabezado">
                        <p>La ciudad viene trabajando en un ambicioso plan que no solo busca recuperar la malla vial, ponerse al d??a en obras e infraestructura sino tambi??n invitar a los ciudadanos y actores viales a incorporar comportamientos que le permitan a la ciudad reducir la congesti??n y mejorar la calidad del aire.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fin Seccion de encabezado  -->

        <style>

        </style>
    </div>
    <div class="s2">

        <div class="botones">
            <div class='row'>

                <div class='col-sm-5ths'>
                    <div class="wrapper-btnbem zoom btn1">
                        <a href="#infraestructura" aria-controls="infraestructura" role="tab" data-toggle="tab">
                            <div class="box-btnbem">
                                <div class="boton-bem">
                                    <div class='imagen'>
                                        <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-05-2022/2022-05-27_iconos_bec_1.png' alt='icono pel??cula' title='icono pel??cula'>
                                    </div>
                                </div>
                                <div class="txt-btn-bem">
                                    <div>
                                        <h3>
                                            Bogot?? en obra
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class='col-sm-5ths'>
                    <div class="wrapper-btnbem zoom btn2">
                        <a href="#alternativas" aria-controls="alternativas" role="tab" data-toggle="tab">
                            <div class="box-btnbem">
                                <div class="boton-bem">
                                    <div class='imagen'>
                                        <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-05-2022/2022-05-27_iconos_bec_2.png' alt='icono pel??cula' title='icono pel??cula'>
                                    </div>
                                </div>
                                <div class="txt-btn-bem">
                                    <div>
                                        <h3>
                                            Detalles de las obras
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class='col-sm-5ths'>
                    <div class="wrapper-btnbem zoom btn3">
                        <a href="#comportamientos" aria-controls="comportamientos" role="tab" data-toggle="tab">
                            <div class="box-btnbem">
                                <div class="boton-bem">
                                    <div class='imagen'>
                                        <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-05-2022/2022-05-27_iconos_bec_3.png' alt='icono pel??cula' title='icono pel??cula'>
                                    </div>
                                </div>
                                <div class="txt-btn-bem">
                                    <div>
                                        <h3>
                                            Plan tapahuecos
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class='col-sm-5ths'>
                    <div class="wrapper-btnbem zoom btn4">
                        <a href="#actualidad" aria-controls="actualidad" role="tab" data-toggle="tab">
                            <div class="box-btnbem">
                                <div class="boton-bem">
                                    <div class='imagen'>
                                        <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-06-2022/menu-historias-tito.png' alt='icono pel??cula' title='icono pel??cula'>
                                    </div>
                                </div>
                                <div class="txt-btn-bem">
                                    <div>
                                        <h3>
                                            Historias de Bogot?? en obra
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class='col-sm-5ths'>
                    <div class="wrapper-btnbem zoom btn5">
                        <a href="#clips" aria-controls="clips" role="tab" data-toggle="tab">
                            <div class="box-btnbem">
                                <div class="boton-bem">
                                    <div class='imagen'>
                                        <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-05-2022/2022-05-27_iconos_bec_5.png' alt='icono pel??cula' title='icono pel??cula'>
                                    </div>
                                </div>
                                <div class="txt-btn-bem">
                                    <div>
                                        <h3>
                                            Noticias
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </div>
        <hr>
        <div class="tabs">
            <div>
                <!-- Tab panes -->
                <div class="tab-content">

                    <div role="tabpanel" class="tab-pane fade in" id="infraestructura">

                        <div class="row">
                            <div class="box-tabs">
                                <div class="box-title">
                                    <h3 class="color1">Bogot?? en obra</h3>
                                </div>
                                <div class="box-paragraph">
                                    <p>La ciudad actualmente cuenta con cientos de obras que apuestan al mejoramiento de malla vial y la movilidad de los bogotanos y bogotanas. Conoce en los siguientes videos, algunos informes de estas obras.</p>
                                </div>
                                <div class="box-videos-beo">

                                    <div class="video-beo">
                                        <div class='embed-responsive embed-responsive-4by3'>
                                            <iframe width="100%" src="https://www.youtube.com/embed/cLsR1RteF4s" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                        <div class="paragraph-video">
                                            <p>En la localidad de Bosa se construye la instituci??n educativa IED. La Palestina. Mira este video y conoce los detalles.</p>
                                        </div>
                                    </div>

                                    <div class="video-beo">
                                        <div class='embed-responsive embed-responsive-4by3'>
                                            <iframe width="100%" src="https://www.youtube.com/embed/9F_d__v3T0g" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                        <div class="paragraph-video">
                                            <p>El metro beneficiar?? a 2.9 millones de personas y avanza r??pidamente. Mira este video y conoce los detalles.</p>
                                        </div>
                                    </div>

                                    <div class="video-beo">
                                        <div class='embed-responsive embed-responsive-4by3'>
                                            <iframe width="100%" src="https://www.youtube.com/embed/QpzW-cbfuW0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                        <div class="paragraph-video">
                                            <p>280.000 huecos ha tapado la administraci??n desde que inicio el plan de choque para mejorar la malla vial. Mira este video y conoce los detalles de este plan.</p>
                                        </div>
                                    </div>

                                    <div class="video-beo">
                                        <div class='embed-responsive embed-responsive-4by3'>
                                            <iframe width="100%" src="https://www.youtube.com/embed/iNbQBHBr9Nk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                        <div class="paragraph-video">
                                            <p>Con la extensi??n de la Av Caracas desde Molinos hasta el Portal de Usme en el sur de la ciudad, acabar?? con la congesti??n de esta zona. Mira este video y conoce detalles de la obra.</p>
                                        </div>
                                    </div>

                                    <div class="video-beo">
                                        <div class='embed-responsive embed-responsive-4by3'>
                                            <iframe width="100%" src="https://www.youtube.com/embed/bDeliwBXFOg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                        <div class="paragraph-video">
                                            <p>La extensi??n de la Av Ciudad de Cali conectar?? San Bernandino y el municipio de Soacha. Mira este video y conoce detalles.</p>
                                        </div>
                                    </div>

                                    <div class="video-beo">
                                        <div class='embed-responsive embed-responsive-4by3'>
                                            <iframe width="100%" src="https://www.youtube.com/embed/TY5qZivoKTI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                        <div class="paragraph-video">
                                            <p>En este video te contaremos c??mo la ampliaci??n de la Av Rinc??n desde la Av Boyac?? hasta la Cra 91, promete descongestionar la movilidad a los que quieran llegar a Suba por esta v??a.</p>
                                        </div>
                                    </div>

                                    <div class="video-beo">
                                        <div class='embed-responsive embed-responsive-4by3'>
                                            <iframe width="100%" src="https://www.youtube.com/embed/AbtgM1ggChA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                        <div class="paragraph-video">
                                            <p>El barrio 12 de Octubre est?? en obra y la intervenci??n de sus aceras y pasos peatonales busca beneficiar la accesibilidad y protecci??n de los peatones. Mira este video y conoce los detalles.</p>
                                        </div>
                                    </div>

                                    <div class="video-beo">
                                        <div class='embed-responsive embed-responsive-4by3'>
                                            <iframe width="100%" src="https://www.youtube.com/embed/-Ij6-KQeCDQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                        <div class="paragraph-video">
                                            <p>La localidad de Kennedy y Bosa se beneficiar?? con la construcci??n de este puente veh??cular el cual conectar?? la ciudad de Oriente a Sur. Mira este video y conoce m??s detalles.</p>
                                        </div>
                                    </div>

                                    <div class="video-beo">
                                        <div class='embed-responsive embed-responsive-4by3'>
                                            <iframe width="100%" src="https://www.youtube.com/embed/jIl4l4om338" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                        <div class="paragraph-video">
                                            <p>El ciclo puente de los Molinos de 290 metros brindar?? seguridad a los ciclistas para cruzar la autopista norte. Si montas Bici este video te interesa.</p>
                                        </div>
                                    </div>

                                    <div class="video-beo">
                                        <div class='embed-responsive embed-responsive-4by3'>
                                            <iframe width="100%" src="https://www.youtube.com/embed/ZyJcky2uCeY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                        <div class="paragraph-video">
                                            <p>La ciudad se encuentra construyendo la Av Guayacanes que ayudar?? a descongestionar esta zona de la ciudad con 13 km.</p>
                                        </div>
                                    </div>

                                </div>
                                <style>
                                    .box-videos-beo {
                                        display: grid;
                                        gap: 30px;
                                        grid-auto-flow: dense;
                                        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
                                        grid-template-rows: auto;
                                        grid-template-areas:
                                            '';
                                    }

                                    .video-beo .paragraph-video {
                                        padding-top: 16px;
                                    }
                                </style>


                            </div>
                        </div>


                    </div>

                    <div role="tabpanel" class="tab-pane fade" id="alternativas">

                        <div class="row">
                            <div class="box-tabs">
                                <div class="box-title">
                                    <h3 class="color2">Detalle de las obras</h3>
                                </div>
                                <div class="box-paragraph">
                                    <p>Las grandes obras de infraestructura vial y de transporte que los bogotanos a??oraban desde hace a??os hoy est??n en plena ejecuci??n. La transformaci??n comenz?? para que la ciudad d?? un gran salto hacia una movilidad sostenible en la que todos podemos movernos y acceder a nuevas y mejores oportunidades.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Seccion Detalle las obras  -->

                        <div class='row'>

                            <div class='col-xs-12 visible-xs'>
                                <div class="descripcion">
                                    <h3 class="color2">Avenida 68, Alimentadora de la L??nea Metro</h3>

                                    <dl>
                                        <dt>Longitud:</dt>
                                        <dd>Desde Autopista sur hasta calle 100 con 9?? (17 km)</dd>
                                    </dl>
                                    <dl>
                                        <dt>Costo total:</dt>
                                        <dd>$709.430 millones entre obra e interventor??a</dd>
                                    </dl>
                                    <p>Esta obra de 17 kil??metros consta de nueve tramos y beneficiar?? a los habitantes de 10 localidades de Bogot?? que reducir??n sus tiempos de viaje al 50% del tiempo a trav??s del sistema de transporte masivo de la ciudad, pues se conectar?? con la Primera L??nea de Metro y con 5 troncales.</p>
                                    <br>
                                    <p class="ver">Ver m??s sobre esta obra en ejecuci??n: <a href="https://www.idu.gov.co/page/avenida-68" target="_blank" rel="noopener noreferrer">https://www.idu.gov.co/page/avenida-68</a></p>

                                </div>
                            </div>
                            <div class='col-xs-12 col-sm-6'>
                                <div class='img-descripcion imgd-1'>
                                    <div>
                                        <img class='img-responsive w-100 ' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/08-01-2022/03-seccion-2_metro-2.png' alt='Mapa Avenida 68' title='Mapa Avenida 68'>
                                    </div>
                                    <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-01-2022/mapa_68_bem-logo.pdf" target="_blank" rel="noopener noreferrer">
                                        <div class="boton-mapa">
                                            <div>
                                                <p>Clic aqu?? para ver mapa Avenida 68 Alimentadora de la Linea Metro</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class='col-sm-6 hidden-xs'>
                                <div class="descripcion">
                                    <h3 class="color2">Avenida 68, Alimentadora de la L??nea Metro</h3>

                                    <dl>
                                        <dt>Longitud:</dt>
                                        <dd>Desde Autopista sur hasta calle 100 con 9?? (17 km)</dd>
                                    </dl>
                                    <dl>
                                        <dt>Costo total:</dt>
                                        <dd>$709.430 millones entre obra e interventor??a</dd>
                                    </dl>
                                    <p>Esta obra de 17 kil??metros consta de nueve tramos y beneficiar?? a los habitantes de 10 localidades de Bogot?? que reducir??n sus tiempos de viaje al 50% del tiempo a trav??s del sistema de transporte masivo de la ciudad, pues se conectar?? con la Primera L??nea de Metro y con 5 troncales.</p>
                                    <br>
                                    <p class="ver">Ver m??s sobre esta obra en ejecuci??n: <a href="https://www.idu.gov.co/page/avenida-68" target="_blank" rel="noopener noreferrer">https://www.idu.gov.co/page/avenida-68</a></p>

                                </div>
                            </div>


                        </div>
                        <br>
                        <br>

                        <style>
                            .s2 .imgd-1 a {
                                text-decoration: none;
                            }

                            .s2 .boton-mapa {
                                background-color: rgba(255, 182, 32, 1);
                                height: 70px;
                                display: flex;
                                flex-direction: column;
                                justify-content: center;
                                align-items: center;
                                padding: 15px;
                            }

                            .s2 .boton-mapa p {
                                color: #252525;
                                text-align: center;
                                font-size: 16px;
                                font-weight: 700;
                                font-family: 'Montserrat', sans-serif;
                                margin: 0px;
                                padding: 0px;
                            }

                            .s2 .boton-mapa:hover {
                                background-color: rgba(69, 81, 34, 1);
                                transition: background-color 1000ms linear;
                            }

                            .s2 .boton-mapa:hover p {
                                color: #fff;
                            }
                        </style>
                        <!--   -->
                        <div class='row'>
                            <div class='col-xs-12 col-sm-6'>
                                <div class="descripcion">
                                    <h3 class="color2">Avenida Ciudad de Cali, Alimentadora de la L??nea del Metro</h3>
                                    <dl>
                                        <dt>Longitud:</dt>
                                        <dd>Desde la Av. Circunvalar del Sur hasta la Av. Manuel Cepeda Vargas (7,4 km)</dd>
                                    </dl>
                                    <dl>
                                        <dt>Costo total:</dt>
                                        <dd>2,6 billones de pesos</dd>
                                    </dl>
                                    <p>Este corredor beneficiar?? a 1 mill??n 100 mil habitantes de las localidades de Bosa (14 barrios) y Kennedy (22 barrios), aumentar?? la frecuencia y velocidad de viaje en el transporte p??blico, y facilitar?? la conexi??n con el municipio de Soacha. Su construcci??n contempla 8 estaciones de TransMilenio nuevas, 7 cicloestaciones, 1 puente peatonal de acceso al sistema y la futura estaci??n del Metro, 1 puente peatonal y conexi??n a trav??s de una pasarela, con la futura estaci??n del Metro. Adem??s tendr?? una glorieta elevada de tr??fico mixto, 1 glorieta vehicular a nivel para buses biarticulados y una ciclorruta bidireccional por el costado occidental.</p>
                                    <br>
                                    <p class="ver">Ver m??s sobre esta obra en ejecuci??n: <a href="https://www.idu.gov.co/page/avenida-ciudad-de-cali" target="_blank" rel="noopener noreferrer">https://www.idu.gov.co/page/avenida-ciudad-de-cali</a></p>
                                </div>
                            </div>

                            <div class='col-xs-12 col-sm-6'>
                                <div class='img-descripcion imgd-2'>
                                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/N-juJJ5tKMk" title="Avenida Ciudad de Cali, Alimentadora de la L??nea del Metro" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                        <!-- Fin   -->
                        <br>
                        <br>
                        <!--   -->
                        <div class='row'>
                            <div class='col-xs-12 visible-xs'>
                                <div class="descripcion">
                                    <h3 class="color2">Avenida Rinc??n por Boyac??</h3>
                                    <dl>
                                        <dt>Longitud:</dt>
                                        <dd>Desde la Carrera 91 hasta la Boyac?? y la intersecci??n de las dos v??as</dd>
                                    </dl>
                                    <p>El proyecto en construcci??n contempla dos tramos principales: la prolongaci??n de la Avenida Rinc??n, desde la Carrera 91 hasta la Boyac??; y la intersecci??n de las dos Avenidas.</p>
                                    <p>Tendr?? dos conexiones clave: operacional con la Troncal Am??ricas de TM e intermodal con Primera L??nea de Metro de Bogot?? a la altura de la Av. 1??. de Mayo. Contempla 137.897 m2 de espacio p??blico, 75.212,78 m2 de zonas verdes, 421,25 metros de ciclorruta en andenes, 5.466,17 metros de ciclorruta continua, 242,58 m de ciclorruta reconstruida. La operaci??n de transporte p??blico por este corredor se har?? con buses cero emisiones.</p>
                                    <p>El proyecto se ubica en la localidad de Suba, donde se espera que beneficie a 1.200.000 personas, entre los habitantes de las UPZ Niza, Rinc??n y Floresta, con sus 82 barrios, y ciudadan??a que transita por las v??as en ejecuci??n.</p>

                                </div>
                            </div>
                            <div class='col-xs-12 col-sm-6'>
                                <div class='img-descripcion imgd-4'>
                                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/_KSi20NK_Qk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>


                            </div>
                            <div class='col-sm-6 hidden-xs'>
                                <div class="descripcion">
                                    <h3 class="color2">Avenida Rinc??n por Boyac??</h3>
                                    <dl>
                                        <dt>Longitud:</dt>
                                        <dd>Desde la Carrera 91 hasta la Boyac?? y la intersecci??n de las dos v??as</dd>
                                    </dl>
                                    <p>El proyecto en construcci??n contempla dos tramos principales: la prolongaci??n de la Avenida Rinc??n, desde la Carrera 91 hasta la Boyac??; y la intersecci??n de las dos Avenidas.</p>
                                    <p>Tendr?? dos conexiones clave: operacional con la Troncal Am??ricas de TM e intermodal con Primera L??nea de Metro de Bogot?? a la altura de la Av. 1??. de Mayo. Contempla 137.897 m2 de espacio p??blico, 75.212,78 m2 de zonas verdes, 421,25 metros de ciclorruta en andenes, 5.466,17 metros de ciclorruta continua, 242,58 m de ciclorruta reconstruida. La operaci??n de transporte p??blico por este corredor se har?? con buses cero emisiones.</p>
                                    <p>El proyecto se ubica en la localidad de Suba, donde se espera que beneficie a 1.200.000 personas, entre los habitantes de las UPZ Niza, Rinc??n y Floresta, con sus 82 barrios, y ciudadan??a que transita por las v??as en ejecuci??n.</p>

                                </div>
                            </div>
                        </div>
                        <!-- Fin   -->
                        <br><br>
                        <div class='row'>
                            <div class='col-xs-12 col-sm-6 col-md-6'>
                                <div class="descripcion">
                                    <h3 class="color2">Primera L??nea del Metro </h3>
                                    <p>Gracias a los aportes de la Naci??n y el Distrito, desde el a??o 2017 se ha venido ejecutando la Primera L??nea del Metro de Bogot??, el proyecto de infraestructura m??s importante del pa??s, cumpliendo diferentes hitos que han permitido lograr el mayor avance en la construcci??n de este sistema de transporte que necesita la ciudad.</p>
                                    <p>Como parte de los hitos del proyecto, el pasado 20 de octubre de 2020, la Empresa Metro de Bogot?? (EMB) y el concesionario Metro L??nea 1 firmaron el acta de inicio de obras, lo que permiti?? que en 2021, el 16 de agosto y el 17 de septiembre, respectivamente, se diera inicio a las obras del patio taller, en el sector de El Corzo (Bosa), y del intercambiador vial en la calle 72 con avenida Caracas.</p>
                                    <p>Conozca aqu?? el detalle de estas obras previas: </p>


                                    <div class="boxcordion">

                                        <div class='panel-group ' id='accordion' role='tablist ' aria-multiselectable='true'>

                                            <!-- collapsePatio -->
                                            <div class='panel panel-default'>
                                                <div class='panel-heading' role='tab' id='headingPatio'>
                                                    <h4 class='panel-title'>
                                                        <a role='button' data-toggle='collapse' data-parent='#accordion' href='#collapsePatio' aria-expanded='true' aria-controls='collapsePatio'>
                                                            Patio Taller
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id='collapsePatio' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingPatio'>
                                                    <div class='panel-body'>
                                                        <div>
                                                            <p>El metro ya est?? en obra. El pasado 17 de agosto comenz?? la adecuaci??n de los terrenos del patio taller en el sector de El Corzo, en la localidad de Bosa. Esta obra se desarrollar?? en tres frentes de trabajo de manera simult??nea, en un terreno de 35,9 hect??reas, el equivalente de unas 50 canchas de f??tbol.</p>
                                                            <p>En el patio taller se alojar?? el coraz??n de la operaci??n de la Primera L??nea del Metro de Bogot?? (PLMB); contar?? inicialmente con capacidad para el parqueo de 30 trenes, pero, por contrato, debe quedar dise??ado y habilitado el espacio para 60 trenes.</p>
                                                            <p>Lo anterior, debido a la demanda futura que vaya teniendo el sistema. Asimismo, el complejo incluir?? v??as de acceso al patio y de salida de los trenes a la l??nea comercial, se instalar??n v??as f??rreas, bodegas, talleres para arreglos mec??nicos y el??ctricos de los trenes, zonas de lavado, planta de tratamiento de agua, edificios administrativos, etc., de tal manera que asegure, d??a a d??a, la prestaci??n del servicio.</p>
                                                            <br>
                                                            <img class='img-responsive w-100 ' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-01-2022/patio_taller.webp' alt='Foto de Patio Taller' title='Foto de Patio Taller'>
                                                            <br>
                                                            <p>De este modo, en la localidad de Bosa quedar?? el punto de partida de la Primera L??nea del Metro de Bogot??. Durante su construcci??n no se ver?? perjudicada la comunidad, teniendo en cuenta que los predios donde se est?? construyendo el patio taller no interfieren con viviendas, colegios, ni instalaciones colindantes.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /#fin Patio -->

                                            <!-- collapseIntercambiador -->
                                            <div class='panel panel-default'>
                                                <div class='panel-heading' role='tab' id='headingIntercambiador'>
                                                    <h4 class='panel-title'>
                                                        <a role='button' data-toggle='collapse' data-parent='#accordion' href='#collapseIntercambiador' aria-expanded='true' aria-controls='collapseIntercambiador'>
                                                            Intercambiador vial calle 72
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id='collapseIntercambiador' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingIntercambiador'>
                                                    <div class='panel-body'>
                                                        <p>El pasado 17 de septiembre comenzaron las obras del intercambiador vial en el sector de la avenida Caracas con calle 72, en la localidad de Chapinero. En este lugar, el concesionario Metro L??nea 1, encargado de la construcci??n de la Primera L??nea del Metro de Bogot??, realizar?? un intercambiador vial de dos (2) niveles con el fin de mejorar el flujo vehicular.</p>
                                                        <p>Se construir?? un paso a desnivel que permitir?? el cruce de la calle 72 por debajo de la carrera 15 y la avenida Caracas sin interrumpir el flujo vehicular, con lo cual se dar?? continuidad a los flujos de ambos sentidos (occidente ??? oriente y viceversa), priorizando la troncal de TransMilenio y, en el futuro, el viaducto elevado de la Primera L??nea del Metro de Bogot??.</p>
                                                        <br>
                                                        <img class='img-responsive w-100 ' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-01-2022/intercambiador_calle72.webp' alt=' Foto Intercambiador Calle 72' title=' Foto Intercambiador Calle 72'>
                                                        <br>
                                                        <p>La obra del intercambiador vial de la calle 72, est?? programada para su puesta en operaci??n el primer semestre de 2023 y forma parte de la llamada fase previa del proyecto, la cual comenz?? el 20 de octubre de 2020 y se desarrollar?? en 27 meses, hasta enero de 2023, cuando comenzar??n las obras de construcci??n del viaducto.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /#fin Intercambiador -->

                                        </div>

                                    </div>

                                </div>
                            </div>

                            <div class='col-xs-12 col-sm-6 col-md-6'>
                                <div class='img-descripcion imgd-5'>

                                    <div id="carousel-metro" class="carousel slide" data-ride="carousel">
                                        <!-- Indicators -->
                                        <ol class="carousel-indicators">
                                            <li data-target="#carousel-metro" data-slide-to="0" class="active"></li>
                                            <li data-target="#carousel-metro" data-slide-to="1"></li>
                                        </ol>

                                        <!-- Wrapper for slides -->
                                        <div class="carousel-inner" role="listbox">
                                            <div class="item active">
                                                <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/24-01-2022/03-seccion-2_metro-3_a.webp" alt="...">
                                                <div class="carousel-caption">
                                                    <!-- Obras en ... -->
                                                </div>
                                            </div>

                                            <div class="item">
                                                <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/24-01-2022/03-seccion-2_metro-1_a.webp" alt="...">
                                                <!-- <div class="img5-2"></div> -->
                                                <div class="carousel-caption">
                                                    <!-- Obras en ... -->
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Controls -->
                                        <a class="left carousel-control" href="#carousel-metro" role="button" data-slide="prev">
                                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                            <span class="sr-only">Anterior</span>
                                        </a>
                                        <a class="right carousel-control" href="#carousel-metro" role="button" data-slide="next">
                                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                            <span class="sr-only">Siguiente</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <br>

                        <div class='row'>
                            <div class='col-xs-12 visible-xs'>
                                <div class="descripcion">
                                    <h3 class="color2">Avenida Guayacanes</h3>

                                    <p>Esta v??a de 13 km de longitud atraviesa las localidades de Bosa y Kennedy. Es una enorme avenida con 6 carriles (tres por cada sentido) andenes amplios y una ciclorruta en toda su extensi??n. Se trata de una v??a paralela a las avenidas Ciudad de Cali y Boyac??, que tambi??n se conectar?? con la Avenida Bosa para salir de la ciudad por el vecino municipio de Soacha.</p>
                                    <p>Esta obra beneficiar?? a 1.500.000 personas y habitantes de 130 barrios que hoy en d??a se demoran hasta 2 horas desplaz??ndose desde el suroccidente al centro de la ciudad, cuando la obra termine podr??n hacerlo en tan solo 30 minutos.</p>
                                    <p>Tendr?? dos conexiones clave: operacional con la Troncal Am??ricas de TM e intermodal con Primera L??nea de Metro de Bogot?? a la altura de la Av. 1??. de Mayo. Contempla 137.897 m2 de espacio p??blico, 75.212,78 m2 de zonas verdes, 421,25 metros de ciclorruta en andenes, 5.466,17 metros de ciclorruta continua, 242,58 m de ciclorruta reconstruida. La operaci??n de transporte p??blico por este corredor se har?? con buses cero emisiones.</p>
                                    <br>
                                    <p class="ver">Ver m??s sobre esta obra en ejecuci??n: <a href="https://www.idu.gov.co/page/avenida-68" target="_blank" rel="noopener noreferrer">https://www.idu.gov.co/page/avenida-68</a></p>

                                </div>
                            </div>
                            <div class='col-xs-12 col-sm-6 col-md-6'>
                                <div class='img-descripcion imgd-3'>
                                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/m1HTIgKAD2s" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class='col-sm-6 hidden-xs'>
                                <div class="descripcion">
                                    <h3 class="color2">Avenida Guayacanes</h3>

                                    <p>Esta v??a de 13 km de longitud atraviesa las localidades de Bosa y Kennedy. Es una enorme avenida con 6 carriles (tres por cada sentido) andenes amplios y una ciclorruta en toda su extensi??n. Se trata de una v??a paralela a las avenidas Ciudad de Cali y Boyac??, que tambi??n se conectar?? con la Avenida Bosa para salir de la ciudad por el vecino municipio de Soacha.</p>
                                    <p>Esta obra beneficiar?? a 1.500.000 personas y habitantes de 130 barrios que hoy en d??a se demoran hasta 2 horas desplaz??ndose desde el suroccidente al centro de la ciudad, cuando la obra termine podr??n hacerlo en tan solo 30 minutos.</p>
                                    <p>Tendr?? dos conexiones clave: operacional con la Troncal Am??ricas de TM e intermodal con Primera L??nea de Metro de Bogot?? a la altura de la Av. 1??. de Mayo. Contempla 137.897 m2 de espacio p??blico, 75.212,78 m2 de zonas verdes, 421,25 metros de ciclorruta en andenes, 5.466,17 metros de ciclorruta continua, 242,58 m de ciclorruta reconstruida. La operaci??n de transporte p??blico por este corredor se har?? con buses cero emisiones.</p>
                                    <br>
                                    <p class="ver">Ver m??s sobre esta obra en ejecuci??n: <a href="https://www.idu.gov.co/page/avenida-68" target="_blank" rel="noopener noreferrer">https://www.idu.gov.co/page/avenida-68</a></p>

                                </div>
                            </div>
                        </div>


                        <!-- Fin Seccion Detalle las obras  -->

                    </div>

                    <div role="tabpanel" class="tab-pane fade" id="comportamientos">

                        <!-- seccion Plan Tapahuecos  -->
                        <div class="row">
                            <div class="box-tabs">
                                <div class="box-title">
                                    <h3 class="color3">Plan Tapahuecos</h3>
                                </div>
                                <br>
                            </div>
                        </div>
                        <div class="box-content-th">
                            <div class="img-th">
                                <div class="imagen-6"></div>
                            </div>
                            <div class="descripcion-th">
                                <p>La Unidad de Mantenimiento Vial (UMV), como encargada de conservar la malla vial local, intermedia y rural, as?? como la cicloinfraestructura, en compa????a del Instituto de Desarrollo Urbano (IDU) avanzan en el Plan Tapahuecos dentro de la estrategia de La Bogot?? que Estamos Construyendo que incluye reparar 56.000 huecos y hacer mantenimiento a 18,7 km/carril (equivalentes a 117 calles de doble carril).</p>
                                <br>
                                <p class="ver">Ver m??s sobre el Plan Tapahuecos: <a href="https://experience.arcgis.com/experience/a061a336dc2a4a8b9aebb57e2924f24d/" target="_blank" rel="noopener noreferrer">https://experience.arcgis.com/experience/a061a336dc2a4a8b9aebb57e2924f24d/</a></p>
                            </div>
                        </div>
                        <style>
                            .box-content-th {
                                display: grid;
                                gap: 30px;
                                grid-auto-flow: dense;
                                grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
                                /* grid-template-columns: repeat(2, 1fr); */
                                grid-template-rows: auto;
                                grid-template-areas:
                                    '';
                            }

                            .box-content-th .descripcion-th p {
                                /* font-size: 1em; */
                                font-weight: 500;
                                text-align: justify;
                                line-height: 1.4;
                                color: rgba(25, 25, 25, 1);
                                margin: 8px;
                                margin-bottom: 30px;
                            }
                        </style>

                        <br>
                        <div class='row'>
                            <div class='col-xs-12 col-sm-12'>
                                <div class="">
                                    <p>A continuaci??n puedes conocer el detalles de los reportes de huecos y los avences de los mismos.</p>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div>
                                <div class='video'>
                                    <div class='embed-responsive embed-responsive-4by3'>
                                        <iframe src="https://app.powerbi.com/view?r=eyJrIjoiYjEyMGQ1N2YtNDY4YS00ZTJjLTgwYWQtNDNkYjlhNWY2ODIzIiwidCI6IjFjMTg4ZWY2LTllOGYtNGQ5My04YjhjLWM4Njg4ZWFiYTAyYiIsImMiOjR9" frameborder="0"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Fin seccion Plan Tapahuecos  -->
                    </div>

                    <div role="tabpanel" class="tab-pane fade" id="actualidad">

                        <!-- hisotias de Bogota en obra  -->
                        <div class="row">
                            <div class="box-tabs">
                                <div class="box-title">
                                    <h3 class="color4">Historias de Bogot?? en obra</h3>
                                </div>
                                <br>
                            </div>
                        </div>
                        <div class='row'>

                            <!-- <div class='col-xs-12'>
                                <div class='img-descripcion'>

                                    <div id="carousel-tito" class="carousel slide" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li data-target="#carousel-tito" data-slide-to="0" class="active"></li>
                                            <li data-target="#carousel-tito" data-slide-to="1"></li>
                                        </ol>

                                        <div class="carousel-inner" role="listbox">
                                            <div class="item active">
                                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/24-01-2022/tito1_a.webp" alt="...">

                                            </div>
                                            <div class="item">
                                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/24-01-2022/tito2_a.webp" alt="...">

                                            </div>
                                        </div>

                                        <a class="left carousel-control" href="#carousel-tito" role="button" data-slide="prev">
                                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                            <span class="sr-only">Anterior</span>
                                        </a>
                                        <a class="right carousel-control" href="#carousel-tito" role="button" data-slide="next">
                                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                            <span class="sr-only">Siguiente</span>
                                        </a>
                                    </div>
                                </div>
                            </div> -->
                            <div class='col-xs-12'>
                                <div class="introduccion">
                                    <p>En esta secci??n encontrar??s historias de c??mo Bogot?? est?? en obra, c??mo podemos ayudar a descongestionar la ciudad y las alternativas que tenemos para movilizarnos. Disfruta cada uno de los siguientes cap??tulos.</p>
                                </div>
                            </div>

                        </div>
                        <hr>
                        <div class='grid-videos-historias'>
                            <div class='video'>
                                <div class='embed-responsive embed-responsive-16by9'>
                                    <iframe width='100%' src="https://www.youtube.com/embed/RfxRpoa4YAI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                                <h4>Bloqueo de intersecciones</h4>
                                <p>Bloquear las intersecciones parece un acto inofensivo, pero no lo es tanto. Hacerlo genera grandes trancones en la ciudad. Mira este video y compartelo.</p>
                            </div>
                            <div class='video'>
                                <div class='embed-responsive embed-responsive-16by9'>
                                    <iframe width='100%' src="https://www.youtube.com/embed/T7xPeCBFgFs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                                <h4>Mal parqueados</h4>
                                <p>Los mal parqueados una pesadilla que pone en riesgo a los peatones y pone en caos la movilidad de la ciudad. Mira este video y compartelo.</p>
                            </div>
                            <div class='video'>
                                <div class='embed-responsive embed-responsive-16by9'>
                                    <iframe width='100%' src="https://www.youtube.com/embed/Qa_1vnJzGfc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                                <h4>25 mil ojos</h4>
                                <p>Si??ntete seguro en TransMilenio, ahora tienes 25 mil ojos cuid??ndote. En este v??deo te contamos c??mo te acompa??amos y te cuidamos durante tus recorridos.</p>
                            </div>
                            <div class='video'>
                                <div class='embed-responsive embed-responsive-16by9'>
                                    <iframe width='100%' src="https://www.youtube.com/embed/wJPwr2E33NQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                                <h4>Transporte p??blico</h4>
                                <p>Ir en tu bici, dejarla parqueada en un lugar seguro, continuar en un TransMilenio tu recorrido y tomar un bus alimentador de manera ??gil y segura hoy es una realidad. Mira este video e inf??rmate.</p>
                            </div>
                            <div class='video'>
                                <div class='embed-responsive embed-responsive-16by9'>
                                    <iframe width='100%' src="https://www.youtube.com/embed/8OB5vG487W8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                                <h4>Buses el??ctricos</h4>
                                <p>Se est?? respirando un nuevo aire en el sistema de Transporte p??blico de Bogot?? con la flota de buses el??ctricos que est??n funcionando. Mira este video y conoce todos los detalles.</p>
                            </div>
                            <div class='video'>
                                <div class='embed-responsive embed-responsive-16by9'>
                                    <iframe width='100%' src="https://www.youtube.com/embed/gDZlPbRP2wE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                                <h4>TransmiApp</h4>
                                <p>TransMilenio la est?? sacando del estadio con TransmiApp, una aplicaci??n que te brinda informaci??n certera y ver??s de todo acerca de este sistema de transporte p??blico. Mira este video e inf??rmate.</p>
                            </div>
                            <div class='video'>
                                <div class='embed-responsive embed-responsive-16by9'>
                                    <iframe width='100%' src="https://www.youtube.com/embed/qgh2TDS5Py4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                                <h4>Tu llave</h4>
                                <p>Tu tienes la llave para no perder tu ritmo al usar el transporte p??blico en la ciudad. Conoce todos los beneficios de la tarjeta TULLAVE en este video.</p>
                            </div>
                            <div class='video'>
                                <div class='embed-responsive embed-responsive-16by9'>
                                    <iframe width='100%' src="https://www.youtube.com/embed/ECspQF9KOCY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                                <h4>??C??mo est?? mejorando Bogot???</h4>
                                <p>Moverte en Bogot?? con medios de transporte alternativos, es una buena opci??n en tiempos de obra . Mira este video y conoce que te ofrece el Distrito para esta alternativa transporte y m??ntate a esta onda.</p>
                            </div>
                            <div class='video'>
                                <div class='embed-responsive embed-responsive-16by9'>
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/2IsHPlMG_V0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                                <h4>??En que va el plan de choque?</h4>
                                <p>La ciudad entr?? en obra y tapar los huecos es una prioridad . Mira este video y conoce detalles de c??mo se est?? haciendo</p>
                            </div>
                            <div class='video'>
                                <div class='embed-responsive embed-responsive-16by9'>
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/kNSHg2uvDck" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                                <h4>Bogot?? est?? mejorando construyendo la Troncal de la Av. 68</h4>
                                <p>Cientos de obras se realizan hoy en Bogot??. La Av 68 es una de las m??s representativas . Mira este video y conoce detalles</p>
                            </div>
                            <div class='video'>
                                <div class='embed-responsive embed-responsive-16by9'>
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/SQtQltzt9fk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                                <h4>C??mo aplicar a la excepci??n de carro compartido</h4>
                                <p>Compartir el carro es una forma de ayudar a construir la ciudad que queremos. Descontamina y ayuda a la movilidad . Mira este video y comp??rtelo.</p>
                            </div>

                        </div>
                        <style>
                            .tab-pane .grid-videos-historias {
                                display: grid;
                                /* grid-auto-flow: dense; */
                                column-gap: 40px;
                                row-gap: 40px;
                                grid-template-rows: auto;
                                grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
                            }

                            .grid-videos-historias h4 {
                                font-weight: 700;
                                text-align: left;
                                line-height: 1.2;
                                color: rgba(25, 25, 25, 1);
                                margin: 8px;
                            }

                            .grid-videos-historias p {
                                font-size: 1em;
                                font-weight: 500;
                                text-align: left;
                                line-height: 1.4;
                                color: rgba(25, 25, 25, 1);
                                margin: 8px;
                            }
                        </style>
                        <hr>

                        <!-- Fin hisotias de Bogota en obra  -->



                    </div>

                    <div role="tabpanel" class="tab-pane fade" id="clips">
                        <!-- seccion de noticias  -->
                        <div class="row">
                            <div class="box-tabs">
                                <div class="box-title">
                                    <h3 class="color5">Noticias</h3>
                                </div>
                                <div class="box-paragraph">
                                    <p>Encuentra toda la actualidad de La Bogot?? que Estamos Construyendo en est?? secci??n.</p>
                                </div>
                                <br>
                            </div>
                        </div>
                        <hr>

                        <div class="box-boletines">
                            <div class='row'>
                                <!-- collapse_boletines21 -->
                                <div class='panel-group ' id='accordion_boletines21' role='tablist ' aria-multiselectable='true'>

                                    <!-- collapse_jul22 -->
                                    <div class='panel panel-default'>
                                        <div class='panel-heading' role='tab' id='heading_jul22'>
                                            <h4 class='panel-title'>
                                                <a role='button' data-toggle='collapse' data-parent='#accordion_boletines21' href='#collapse_jul22' aria-expanded='true' aria-controls='collapse_jul22'>
                                                Boletines Julio 2022
                                                </a>
                                            </h4>
                                        </div>
                                        <div id='collapse_jul22' class='panel-collapse collapse in' role='tabpanel' aria-labelledby='heading_jul22'>
                                            <div class='panel-body'>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://drive.google.com/file/d/13hSfMRuGFwr14wNrqeTieIPfRPtndDKM/view?usp=sharing'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLET??N 135</h4>
                                                                <i>lunes, 11 de julio de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Cierre parcial de ciclorruta para mantenimiento.  La UMV retorna a su horario habitual de atenci??n al ciudadano.  Usuarios de TransMilenio han reciclado m??s de 50.000 kilos de material en m??quinas EcoTransMi.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://drive.google.com/file/d/16xfvWtrqEfzBjztZ8TO3m5sSAowrxCue/view?usp=sharing'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLET??N 134</h4>
                                                                <i>viernes, 8 de julio de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Conservaci??n malla vial rural.  Se realiz?? una nueva jornada de "UMV de Puertas Abiertas", en la que participaron m??s de 30 ciudadanos.  Nueva ruta zonal A334 Centro Financiero ??? K334 Fontib??n Versalles.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://drive.google.com/file/d/19DAQwlDjckOVqXZUrlyZYcIeVA-g5ufa/view?usp=sharing'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLET??N 133</h4>
                                                                <i>jueves, 7 de julio de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>En jornada nocturna, la UMV trabaja en la localidad de Chapinero, para arreglar un importante tramo de la carrera s??ptima.  Conoce m??s del Cable A??reo San Crist??bal.  Feria de empleo del Sistema de Transporte de Bogot?? estar?? en Fontib??n.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://drive.google.com/file/d/1S18ClperUw0gZ6MCTdGcBDXnDq57VWqq/view?usp=sharing'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLET??N 132</h4>
                                                                <i>mi??rcoles, 6 de julio de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Gracias al programa ???Calles Completas???, la UMV trabaja en la recuperaci??n de un and??n en la localidad de Kennedy.  Mejores andenes en la localidad de Suba.  Ruta alimentadora 9-2 Metrovivienda hace dos nuevas paradas en hora valle.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://drive.google.com/file/d/1RXVCKgzGZl9FuL7UgpZ0hoSxw62LRFgM/view?usp=sharing'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLET??N 131</h4>
                                                                <i>martes, 5 de julio de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Trabajos nocturnos en el Canal Molinos.  La UMV realiza el cambio de carpeta de una importante calle del barrio Santa Luc??a, en la localidad Rafael Uribe Uribe.  Patio taller puso en marcha sistema de suministro de energ??a con paneles solares.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://drive.google.com/file/d/1ovcO2E6TtLWcAFMfd3Rkg46C-LtVK5vK/view?usp=sharing'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLET??N 130</h4>
                                                                <i>viernes, 1 de julio de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>La UMV est?? en el barrio El Vergel, de la localidad de Kennedy. All?? hace cambio de losas en una de las v??as.  ??Las basuras en su lugar!  Desde este s??bado estar?? cerrado el acceso norte de la estaci??n CAD.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /#fin _jul22 -->

                                    <!-- collapse_jun22 -->
                                    <div class='panel panel-default'>
                                        <div class='panel-heading' role='tab' id='heading_jun22'>
                                            <h4 class='panel-title'>
                                                <a role='button' data-toggle='collapse' data-parent='#accordion_boletines21' href='#collapse_jun22' aria-expanded='true' aria-controls='collapse_jun22'>
                                                    Boletines Junio 2022
                                                </a>
                                            </h4>
                                        </div>
                                        <div id='collapse_jun22' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_jun22'>
                                            <div class='panel-body'>
                                            
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://drive.google.com/file/d/14anj3CylDXHDYqq3XpkRFGrNd_Q8EhuK/view?usp=sharing'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLET??N 129</h4>
                                                                <i>jueves, 30 de junio de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Reparaciones nocturnas en la avenida Boyac??.  En menos de 6 meses, la UMV mejor?? m??s de 286 mil da??os viales, cifra superior a la de todo 2021.  Tenemos m??s de 2.000 vacantes para trabajar en el Sistema de Transporte P??blico de Bogot??.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://drive.google.com/file/d/1r5PzExO-seYc8SYeVuiAyK1KJMKNyP__/view?usp=sharing'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLET??N 128</h4>
                                                                <i>mi??rcoles, 29 de junio de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>V??as rehabilitadas en San Crist??bal y Rafael Uribe Uribe.  La UMV arregl?? una importante v??a en el barrio Gratamira Real, de la localidad de Suba.  16 personas capturadas en flagrancia y una por orden judicial en el Sistema de Transporte de Bogot??.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://drive.google.com/file/d/13xjtqCwWRXiWOGBEMZpbbPo3iNRfTGi4/view?usp=sharing'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLET??N 127</h4>
                                                                <i>martes, 28 de junio de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Las obras y los Planes de Manejo de Tr??nsito.  Conozca el cierre por carriles de la calzada r??pida sentido Norte ??? Sur de la Autopista Norte entre calles 146 y 140.  Estaci??n Flores retorna a su operaci??n normal desde este mi??rcoles 29 de junio.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://drive.google.com/file/d/1R47UbvWdwx__IE5NkkDg-PvkrsxJDEeS/view?usp=sharing'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLET??N 126</h4>
                                                                <i>viernes, 24 de junio de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Cierre en la av. carrera 68 por av. calle 26.  La UMV rehabilita una importante v??a en Puente Aranda.  Nuevas rutas zonales empiezan a operar este s??bado.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://drive.google.com/file/d/1re7an4u_1YuHJRD8hfTOPyzDCFTQGVOR/view?usp=sharing'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLET??N 125</h4>
                                                                <i>jueves, 23 de junio de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Cierres parciales por obra de la avenida 68.  La UMV repar?? una importante v??a en el barrio Jos?? Joaqu??n Vargas, en la localidad de Barrios Unidos.  Desde este viernes estar?? cerrado el acceso norte de la estaci??n Comuneros.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://drive.google.com/file/d/1Qj2KWk3Ls65TqCoiKsM5MI-tEqRbQyDO/view?usp=sharing'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLET??N 124</h4>
                                                                <i>mi??rcoles, 22 de junio de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>La Unidad M??vil de Parcheo de la UMV est?? en la localidad de Suba. Mantenimiento en andenes de la calle 80. 416 armas blancas incautaron las autoridades en el Sistema de Transporte de Bogot??. </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://drive.google.com/file/d/1VuZlHbKWyQdjKgPN1NAOThqnnqhsylyi/view?usp=sharing'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLET??N 123</h4>
                                                                <i>martes, 21 de junio de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Conservaci??n de puentes vehiculares. Desde este martes, el servicio zonal 19 ??? 12 Tober??n, extiende su recorrido. Gremio taxista en Bogot?? se capacita para mejorar el servicio a las mujeres. </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://drive.google.com/file/d/1wc8MZHrAzey3hluuo2eXX2JgMGv1veDk/view?usp=sharing'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLET??N 122</h4>
                                                                <i>viernes, 17 de junio de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Biciusuario, estas son las nuevas rutas alternativas en la ciclov??a dominical del sector calle 72. As?? funcionar?? TransMilenio durante la jornada electoral del pr??ximo domingo. Miembros de la UMV y comunidad del sector de Fontib??n realizaron una jornada de siembra de plantas alrededor de la sede operativa. Conoce m??s del ChatBot Fulvia, el nuevo canal de comunicaci??n con el IDU. </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://drive.google.com/file/d/1kWRJU2rpR-FxwdIjLABIk3gjCH_MEF3Y/view?usp=sharing'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLET??N 121</h4>
                                                                <i>jueves, 16 de junio de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Nuevos recorridos para el transporte p??blico, por cierres del metro en la calle 72. Mantenimiento vial en Usaqu??n. Atenci??n Tunjuelito: Este viernes, TRANSMILENIO S.A. apoyar?? feria de empleabilidad en la localidad. Chat Virtual: el canal de la UMV para escuchar a la ciudadan??a.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://drive.google.com/file/d/1Lsw9Rh-dBGcd2apkLeDganV8Vxkn1mSz/view?usp=sharing'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLET??N 120</h4>
                                                                <i>mi??rcoles, 15 de junio de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Estas son las rutas alternas para veh??culos particulares, por cierres del metro en la calle 72. La UMV hizo mejoras en el espacio p??blico ubicado alrededor de Corabastos. Inician reparaciones en la malla vial de Usaqu??n. Por primera vez realiz?? simulacro de rescate vertical simult??neo en TransmiCable. </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://drive.google.com/file/d/14B8YYl458Oze513o59U2EgJvQpPpbaXj/view?usp=sharing'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLET??N 119</h4>
                                                                <i>martes, 14 de junio de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Conozca las v??as que cambian de sentido con el cierre de la calle 72. La UMV mejora la malla vial de importantes v??as en la localidad de Chapinero. TransMilenio pone a disposici??n de los usuarios un servicio zonal adicional para la segunda vuelta de elecciones presidenciales. IDU: Con la temporada de lluvias se retrasan las obras que estamos construyendo en Bogot??. </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://drive.google.com/file/d/1Vu_AMxC6Xxjc2MNhf_qgPAaaz4czDlNP/view?usp=sharing'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLET??N 118</h4>
                                                                <i>lunes, 13 de junio de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Cierre de andenes en la Avenida Ciudad de Cali. 4 rutas troncales ampl??an su horario de funcionamiento. A la UMV lleg?? una nueva m??quina trituradora, que optimizar?? el proceso de producci??n de mezcla de asfalto en fr??o o fresado estabilizado. </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://drive.google.com/file/d/1HTQ1cS4FiA5o1chv0_MbxAEGk0kMjqLt/view?usp=sharing'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLET??N 117</h4>
                                                                <i>viernes, 10 de junio de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>La Unidad de Mantenimiento Vial atendi?? los da??os viales que afectaban la movilidad de la carrera 60 alrededor de la biblioteca Virgilio Barco. Desde el pr??ximo lunes habr?? cambios en dos rutas zonales. Cierres viales por obras en Zona Rosa. </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://drive.google.com/file/d/1KXShzqz27gQK4627s_oaZrQH9hrZqS0z/view?usp=sharing'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLET??N 116</h4>
                                                                <i>jueves, 9 de junio de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Obras en la Av. Boyac?? entre calles 170 y 183. ??En la Unidad de Mantenimiento Vial cuidamos el medio ambiente! Este viernes TRANSMILENIO S.A. apoyar?? feria de empleabilidad en la localidad Rafael Uribe Uribe, </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/08-06-2022/2022-06-08_boletin_la_bogota_que_estamos_construyendo.pdf'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLET??N 115</h4>
                                                                <i>mi??rcoles, 8 de junio de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Cierres en obra de Avenida 68, Alimentadora de la L??nea Metro. C??mo bloquear la tarjeta Tullave en caso de p??rdida. Conozca el trabajo que adelanta la UMV en el barrio Santa Lucia, localidad Rafael Uribe Uribe. </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/08-06-2022/2022-06-07_boletin_la_bogota_que_estamos_construyendo.pdf'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLET??N 114</h4>
                                                                <i>martes, 7 de junio de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>La UMV est?? en el barrio San Eusebio en la localidad de Puente Aranda. Trabajos de conservaci??n vial en la localidad de Suba. 32 personas capturadas en flagrancia y una por orden judicial en el Sistema de Transporte de Bogot??. </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/08-06-2022/2022-06-06_boletin_la_bogota_que_estamos_construyendo.pdf'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLET??N 113</h4>
                                                                <i>lunes, 6 de junio de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Bogot?? se uni?? a la celebraci??n del D??a Mundial de la Bicicleta. Cierre de espacio p??blico por avance de obra en Canal Molinos. M??s de 190 mil tarjetas se han perdido en lo corrido del a??o. </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/03-06-2022/2022-06-03_boletin_la_bogota_que_estamos_construyendo.pdf'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLET??N 112</h4>
                                                                <i>viernes, 3 de junio de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>La UMV apoya a los campesinos de Ciudad Bol??var con el mejoramiento de sus v??as rurales. Avances de la Avenida El Rinc??n. Desde el pr??ximo lunes habr?? cambios en dos rutas zonales. </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/03-06-2022/2022-06-02_boletin_la_bogota_que_estamos_construyendo.pdf'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLET??N 111</h4>
                                                                <i>jueves, 2 de junio de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>As?? fue nuestro trabajo en la localidad Rafael Uribe Uribe durante los primeros cinco meses del a??o. Trabajos para mejorar el estado de los andenes. Cambio temporal en recorrido de la ruta zonal C97A. </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/03-06-2022/2022-06-01_boletin_la_bogota_que_estamos_construyendo.pdf'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLET??N 110</h4>
                                                                <i>mi??rcoles, 1 de junio de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Inicio de actividades en calles de Engativ??. Sandra Chaves, la mujer detr??s de la operaci??n de buses m??s grande del pa??s. Conozca qu?? es el material bituminoso reciclado que utiliza la UMV para intervenir, en tiempo r??cord, peque??os da??os viales. </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- /#fin _jun22 -->

                                    <!-- collapse_may22 -->
                                    <div class='panel panel-default'>
                                        <div class='panel-heading' role='tab' id='heading_may22'>
                                            <h4 class='panel-title'>
                                                <a role='button' data-toggle='collapse' data-parent='#accordion_boletines21' href='#collapse_may22' aria-expanded='true' aria-controls='collapse_may22'>
                                                    Boletines Mayo 2022
                                                </a>
                                            </h4>
                                        </div>
                                        <div id='collapse_may22' class='panel-collapse collapse ' role='tabpanel' aria-labelledby='heading_may22'>
                                            <div class='panel-body'>

                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/03-06-2022/2022-05-31_boletin_la_bogota_que_estamos_construyendo.pdf'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLET??N 109</h4>
                                                                <i>martes, 31 de mayo de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Desde el martes, 31 de mayo, algunos servicios zonales modifican sus horarios. En la tradicional cuadra de los cueros, en el barrio Siete de Agosto, la UMV mejor?? sus calles aleda??as. </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/03-06-2022/2022-05-27_boletin_la_bogota_que_estamos_construyendo.pdf'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLET??N 108</h4>
                                                                <i>viernes, 27 de mayo de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>La UMV mejora las ciclorrutas del barrio Salitre en la localidad de Teusaquillo. TransMilenio pone a disposici??n de los usuarios un servicio zonal adicional para las elecciones. Cierres en la Avenida 68. </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/03-06-2022/2022-05-26_boletin_la_bogota_que_estamos_construyendo.pdf'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLET??N 107</h4>
                                                                <i>jueves, 26 de mayo de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Grandes empresas del sector p??blico y privado se unen para promover el ???Carro Compartido??? en Bogot??. Cierres en la Zona Rosa. As?? funcionar?? TransMilenio durante la jornada electoral del 29 de mayo. </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/03-06-2022/2022-05-25_boletin_la_bogota_que_estamos_construyendo.pdf'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLET??N 106</h4>
                                                                <i>mi??rcoles, 25 de mayo de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Traslados de paradas de rutas alimentadoras de la estaci??n Molinos. Cierres en andenes sobre la Avenida 68. As?? trabaja la fresadora nueva que adquiri?? recientemente la UMV. </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/24-05-2022/2022-05-24_boletin_la_bogota_que_estamos_construyendo_compressed.pdf'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLET??N 105</h4>
                                                                <i>martes, 24 de mayo de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Finaliza mantenimiento en la Calle 80. En lo corrido del a??o, la UMV ha liderado importantes obras de infraestructura que mejorar??n la movilidad de Bogot??. Autoridades incautaron 443 armas blancas y capturaron a 29 personas en flagrancia en el Sistema de Transporte. </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/23-05-2022/2022-05-23_boletin_la_bogota_que_estamos_construyendo.pdf'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLET??N 104</h4>
                                                                <i>lunes, 23 de mayo de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>La sede de producci??n de la UMV le abri?? las puertas a estudiantes universitarios interesados en conocer el trabajo para mejorar las v??as. Intervenciones en la Malla Vial Troncal de Suba. Entra en operaci??n nuevo servicio alimentador en el Portal del Norte. </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/23-05-2022/2022-05-20_boletin_la_bogota_que_estamos_construyendo.pdf'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLET??N 103</h4>
                                                                <i>viernes, 20 de mayo de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Desde este s??bado habr?? cierre temporal del acceso norte de la estaci??n Comuneros. Cinco cosas que debes saber acerca de la construcci??n de la Avenida Rinc??n. Parte del equipo directivo de la UMV visit?? el nuevo laboratorio de suelos y pavimentos de la Universidad Militar Nueva Granada.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/23-05-2022/2022-05-19_boletin_la_bogota_que_estamos_construyendo.pdf'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLET??N 102</h4>
                                                                <i>jueves, 19 de mayo de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>En este primer cap??tulo de #MilagrosBogotanos, un afanado conductor invade la ciclorruta y est?? a punto de cometer un error fatal. En la localidad de San Crist??bal la UMV ha tapado cerca de cuatro mil huecos y logrado la conservaci??n de 8,68 km carril. Sede IDU cuenta con un m??dulo de atenci??n preferencial. Dos rutas zonales tendr??n cambios a partir del 23 de mayo. </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/23-05-2022/2022-05-18_boletin_la_bogota_que_estamos_construyendo.pdf'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLET??N 101</h4>
                                                                <i>mi??rcoles, 18 de mayo de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Estaci??n Calle 127 vuelve a prestar servicio. V??as con una nueva cara. La UMV ha tapado m??s de 1.800 huecos en siete barrios de las localidades de Santa Fe y La Candelaria. </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/23-05-2022/2022-05-17_boletin_la_bogota_que_estamos_construyendo_1.pdf'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLET??N 100</h4>
                                                                <i>martes, 17 de mayo de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Con sus obras de arreglo de la malla vial la UMV beneficia a los comerciantes del barrio Bat??n, Suba. Mejoramos v??as en la localidad de Puente Aranda. 26 personas fueron capturadas por las autoridades en el Sistema de Transporte. Respeta el espacio de los dem??s!. </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/23-05-2022/2022-05-16_boletin_la_bogota_que_estamos_construyendo_1.pdf'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLET??N 99</h4>
                                                                <i>lunes, 16 de mayo de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Bogot?? present?? su visi??n al 2040 en movilidad de cero y bajas emisiones. ??Sabes en d??nde consultar los proyectos que estamos construyendo en la ciudad? Entra en operaci??n nuevo servicio zonal para beneficio de los usuarios del Sistema de Transporte de Bogot??</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/23-05-2022/2022-05-13_boletin_la_bogota_que_estamos_construyendo.pdf'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLET??N 98</h4>
                                                                <i>viernes, 13 de mayo de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>#LaBogot??QueEstamosConstruyendo !A partir de ahora el barrio San Felipe cuenta con m??s espacio p??blico! Construcci??n de la estaci??n de TransMilenio Av. Suba Calle 100. La UMV participa de las actividades en el marco del Mes de Prevenci??n Vial. Cambian las paradas de los servicios A52 y D22 en Portal del Sur. </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/12-05-2022/2022-05-12_boletin_la_bogota_que_estamos_construyendo.pdf'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLET??N 97</h4>
                                                                <i>jueves, 12 de mayo de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>La UMV tap?? m??s de 1.500 huecos que afectaban el flujo vehicular en la carrera s??ptima. Atentos a los cambios y cierres en la Avenida 68. </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/12-05-2022/2022-05-11_boletin_la_bogota_que_estamos_construyendo.pdf'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLET??N 96</h4>
                                                                <i>mi??rcoles, 11 de mayo de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>#LaBogot??QueEstamosConstruyendo Lo que debes saber de las obras de prolongaci??n de la Avenida El Rinc??n. Cierre de un carril y del separador de la Avenida Ciudad de Cali. Dos nuevos servicios zonales para beneficio de los usuarios del Sistema de Transporte de Bogot??. Resiliencia es la palabra que define a Martha Casta??eda, auxiliar de tr??fico que comenz?? una nueva vida en Bogot?? tras perder a toda su familia en Armero.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/12-05-2022/2022-05-10_boletin_la_bogota_que_estamos_construyendo.pdf'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLET??N 95</h4>
                                                                <i>martes, 10 de mayo de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>La Avenida Boyac?? tendr?? tres nuevos puentes vehiculares. IDU adelanta trabajos de conservaci??n y mantenimiento en calles y v??as de la ciudad. M??s de 19 mil personas se benefician con la reapertura de la estaci??n Virrey. As?? son los planes de manejo de tr??nsito que debe realizar la UMV previo al inicio de las obras de mantenimiento vial. </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/12-05-2022/2022-05-09_boletin_la_bogota_que_estamos_construyendo.pdf'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLET??N 94</h4>
                                                                <i>lunes, 9 de mayo de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Nuevos Patio-talleres, ubicados en Cota, fortalecer??n servicio de Transmilenio e impulsan la consolidaci??n de Regi??n Metropolitana. Entre 40 y 50 colaboradores de la UMV trabajaron para habilitar el paso peatonal de Meissen. Cierres viales por construcci??n de redes secas y h??medas. </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/06-05-2022/2022-05-06_boletin_la_bogota_que_estamos_construyendo.pdf'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLET??N 93</h4>
                                                                <i>viernes, 6 de mayo de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Se entrega nuevo paso peatonal de Meissen, que beneficiar?? a m??s de 22 mil ciudadanos de Tunjuelito y Ciudad Bol??var. En el mes de las madres la UMV reconoce la labor de las mujeres que tienen el privilegio de portar este t??tulo. Trabajos de conservaci??n en la Calle 80. Dos rutas zonales tendr??n cambios a partir del 9 de mayo.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/06-05-2022/2022-05-05_boletin_la_bogota_que_estamos_construyendo.pdf'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLET??N 92</h4>
                                                                <i>jueves, 5 de mayo de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>??Otro sue??o cumplido para la ciudad! Bogot?? tendr?? su sistema de bicicletas compartidas: ser??n 300 estaciones y 3.300 bicis p??blicas. Listo PMT para avanzar en la construcci??n del puente la Calle 3 con Avenida 68. La UMV intervino cerca de 1.000 m2 de malla vial en el barrio Santa Catalina, Kennedy. ??Sab??as que los nombres de las estaciones de la Calle Sexta son muiscas?</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/06-05-2022/2022-05-04_boletin_la_bogota_que_estamos_construyendo.pdf'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLET??N 91</h4>
                                                                <i>mi??rcoles, 4 de mayo de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>La UMV interviene la Avenida la Conejera que conecta al municipio de Cota con Bogot??. Cierres viales por obras en red peatonal Zona Rosa. Cinco avances de #LaBogotaQueEstamosConstruyendo que debes conocer. </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/03-05-2022/2022-05-03_boletinlbqec.pdf'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLET??N 90</h4>
                                                                <i>martes, 3 de mayo de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>La UMV da recomendaciones a los conductores y ciudadan??a en general durante la temporada de lluvias que afronta Bogot??. En San Crist??bal iniciaron trabajos de conservaci??n en el espacio p??blico. Autoridades incautaron 477 armas blancas y capturaron 33 personas en flagrancia en el Sistema de Transporte. Marat??n de actividades gratuitas para motociclistas durante el Mes de la Prevenci??n Vial. </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/03-05-2022/2022-05-02_boletinlbqec.pdf'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLET??N 89</h4>
                                                                <i>lunes, 2 de mayo de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Avanza obra en la Avenida Ciudad de Cali. La UMV mejor?? un importante tramo de la Avenida Ciudad de Cali. Nueva ruta zonal conecta a los usuarios con la Estaci??n Calle 187. </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- /#fin _may22 -->

                                    <!-- collapse_abr22 -->
                                    <div class='panel panel-default'>
                                        <div class='panel-heading' role='tab' id='heading_abr22'>
                                            <h4 class='panel-title'>
                                                <a role='button' data-toggle='collapse' data-parent='#accordion_boletines21' href='#collapse_abr22' aria-expanded='true' aria-controls='collapse_abr22'>
                                                    Boletines abril 2022
                                                </a>
                                            </h4>

                                        </div>
                                        <div id='collapse_abr22' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_abr22'>
                                            <div class='panel-body'>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-04-2022/2022-04-29_boletinlbqec.pdf'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLET??N 88</h4>
                                                                <i>viernes, 29 de abril de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Mantenimiento en puente vehicular de la Avenida NQS con Avenida Calle 13. Prep??rese para el cierre total de la calzada lenta de Calle 100 entre av. Carrera 11 y carrera 8A. El Director de la UMV comparti??, en el XXII Simposio Colombiano sobre Ingenier??a de Pavimentos, el trabajo de la entidad para mejorar las ciclorrutas. Dos nuevos servicios zonales para beneficio de los usuarios del Sistema de Transporte de Bogot??. </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href=''>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLET??N 87</h4>
                                                                <i>jueves, 28 de abril de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Mantenimiento en v??as de Tunjuelito. 11 soluciones de innovaci??n tecnol??gica para la seguridad vial. Atenci??n: el pr??ximo s??bado y domingo, TransMiCable ajustar?? su horario por mantenimiento. La UMV particip??, junto con otras entidades, de una nueva jornada de socializaci??n de gesti??n que se realiz?? en Engativ?? preventivo.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-04-2022/2022-04-27_boletinlbqec.pdf'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLET??N 86</h4>
                                                                <i>mi??rcoles, 27 de abril de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Durante los primeros cuatro meses de 2022 la UMV ha tapado m??s de 200 mil mts2 de huecos. 531 armas blancas incautaron las autoridades en el Sistema de Transporte. #LaBogot??QueEstamosConstruyendo ??Por qu?? parquear en zonas autorizadas es construir una mejor movilidad para todos?</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-04-2022/2022-04-26_boletinlbqec.pdf'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLET??N 85</h4>
                                                                <i>martes, 26 de abril de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Gracias al Consejo de Gobierno realizado en Puente Aranda, la UMV mejor?? la malla vial de un tramo de la carrera 36. Cierres en el espacio p??blico en puente vehicular de la avenida Ciudad de Quito con calle 13. Plan para reponer informaci??n en paraderos del SITP.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-04-2022/2022-04-25_boletinlbqec.pdf'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLET??N 84</h4>
                                                                <i>lunes, 25 de abril de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>En Usme la UMV adelanta trabajos de bioingenier??a para garantizar la conectividad de v??as rurales. Obras de mantenimiento vial en la localidad de San Crist??bal. #LaBogot??QueEstamosConstruyendo Antes de salir de casa, consulta Waze o TransMiApp para conocer la mejor ruta a tu destino ??Mu??vete bien informado! S??guenos en Twitter @BogotaTransito En el barrio San Rafael de la localidad de San Crist??bal comenzaron la obras de mantenimiento peri??dico con el fin de mejorar el estado actual de estas v??as. Las actividades consisten en el sello de fisuras, reparaci??n, limpieza y reposici??n de las losas deterioradas, entre otras. Ser?? intervenida la Carrera 15 C este entre calles 58 Sur y 61 Sur, y en la Carrera 15 A Este entre calles 57 A Sur y 58 Sur, donde habr?? cierre total de calzada para actividades de mantenimiento peri??dico las 24 horas. La localidad de San Crist??bal, en el suroriente de Bogot??, cuenta con m??s de 394.000 habitantes quienes se ver??n beneficiados de estas obras. La Unidad de Mantenimiento Vial est?? con la comunidad de Usme. En esta localidad la UMV realiza trabajos de bioingenier??a en siete sitios priorizados en el Anillo Vial, con el fin de garantizar la conectividad en v??as rurales donde hay taludes y laderas que presentan problemas por derrumbes, conocidos t??cnicamente como procesos de remoci??n en masa. BOLET??N 25 DE ABRIL DE 2022 De acuerdo con Jairo Augusto Rojas, ingeniero experto en bioingenier??a de suelos encargado de la ejecuci??n de estos trabajos, la bioingenier??a es alternativa a las obras duras como muros de contenci??n que, adem??s de ser demasiado costosos, dificultan su implementaci??n por ser una zona de manejo ambiental especial donde nace el r??o Tunjuelo, en la cuenca alta del r??o Bogot??, siendo un p??ramo donde la comunidad hace el esfuerzo por conservar el medio ambiente. ???La bioingenier??a es muy amigable con el medio ambiente, pues no genera residuos, no genera escombros y lo que busca es el proceso de revegetalizaci??n o restauraci??n natural del suelo???, se??al?? Rojas. En estas obras se utilizan dos insumos, guadua y el material vegetal, y mano de obra de personas de la comunidad, quienes en lugar de usar maquinaria pesada emplean herramientas manuales (picas, palas, hoyadoras). De acuerdo con Jorge Navarro Wolff, coordinador de estas obras, con el trabajo la Entidad est?? devolvi??ndole la conexi??n al Anillo Vial de Usme que arranca desde la Troncal Bolivariana y regresando a esta unos 8 km adelante, pasando por las veredas El Hato, Andes, La Uni??n, las Margaritas, sirviendo incluso como v??a alterna a la misma. ???Actualmente se est??n haciendo 7 obras de mantenimiento vial correctivo, pero tambi??n se aprovecha la presencia para hacer obras de car??cter preventivo que no tienen mayores costos, pero s?? importantes efectos???, asegur?? Navarro Finalmente, este trabajo reviste una gran importancia ambiental y social, por ser obras biol??gicas que se incorporan al paisaje, que restauran el equilibrio natural del suelo al generar bosques de sucesi??n natural que reemplazan las obras bioingenieriles de madera, las cuales se incorporan al suelo al degradarse, desarrollando as?? un proceso de econom??a circular. Socialmente, involucran a la comunidad al contratar personas de la zona para hacer las obras, capacit??ndolos en la conservaci??n de los suelos, aprendiendo a manejar el agua de escorrent??a y as?? cuando se presente alg??n problema puedan realizar labores sencillas como: zanja de drenaje, limpieza de alcantarilla, mantenimiento de cunetas u obras con disipadores en madera, haci??ndolos part??cipes de las soluciones, que reducen el riesgo de accidentes, sobrecostos, en general afectaciones en su entorno y calidad de vida; por el contrario impactar??n de forma positiva en sus labores diarias en armon??a con el medio ambiente. ??T?? tambi??n haces parte de la soluci??n a los trancones de Bogot??!</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-04-2022/2022-04-22_boletinlbqec.pdf'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLET??N 83</h4>
                                                                <i>viernes, 22 de abril de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>La UMV mejora el estado de importantes v??as en la localidad de Puente Aranda. Idu inici?? trabajos de conservaci??n vial en la localidad de Suba. Estaci??n Calle 127 deja de operar temporalmente desde este s??bado 23 de abril. </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-04-2022/2022-04-21_boletinlbqec.pdf'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLET??N 82</h4>
                                                                <i>jueves, 21 de abril de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>IDU concluye mantenimiento en varias v??as de Usaqu??n. Cierre temporal de un vag??n de la estaci??n Suba Calle 100 por obras. </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/20-04-2022/2022-04-20_boletinlbqec_0.pdf'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLET??N 81</h4>
                                                                <i>mi??rcoles, 20 de abril de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>El paso peatonal Paseo de Meissen se encuentra en un 60% de avance. Trabajos de conservaci??n en el espacio p??blico. Servicio zonal T16 pasa a llamarse A324 Perseverancia ??? K324 Refugio. Y mucho m??s.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/20-04-2022/2022-04-19_boletinlbqec_0.pdf'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLET??N 80</h4>
                                                                <i>martes, 19 de abril de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Durante el primer trimestre de 2022 la UMV tap?? 2.538 huecos en la localidad de Tunjuelito. Cierre total del and??n y del carril Sur de la Calle 116 entre las carreras 14 y 14A. 240 armas blancas incautadas durante Semana Santa en el Sistema de Transporte de Bogot??. Y mucho m??s.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/18-04-2022/2022-04-18_boletinlbqec.pdf'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLET??N 79</h4>
                                                                <i>lunes, 18 de abril de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Tres nuevos servicios zonales para beneficio de los usuarios del Sistema de Transporte de Bogot??. La se??alizaci??n en obra est?? dise??ada para la seguridad de todos los actores viales, y mucho m??s.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/18-04-2022/2022-04-13_boletinlbqec.pdf'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLET??N 78</h4>
                                                                <i>mi??rcoles, 13 de abril de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Conozca el cierre del carril oriental sentido Sur- Norte de la av. Carrera 68 entre calle 27 sur y transversal 53. La UMV mejor?? la malla vial de un sector del barrio Santa Bibiana, Usaqu??n, y mucho m??s.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/12-04-2022/2022-04-12_boletinlbqec.pdf'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLET??N 77</h4>
                                                                <i>martes, 12 de abril de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>La UMV adelanta obras de mejoramiento de la ciclorruta del Canal Fucha. Entraron en operaci??n nuevos vagones de las estaciones Polo y Santa Isabel. Cambio de horario de atenci??n en los Puntos IDU, y mucho m??s.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/11-04-2022/2022-04-11_boletinlbqem.pdf'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLET??N 76</h4>
                                                                <i>lunes, 11 de abril de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Avanza la reparaci??n de la Autopista Norte. Durante los tres primeros meses del a??o la UMV realiz?? m??s del 60% del trabajo para tapar huecos efectuado en 2021. La lectura se mueve en TransMilenio, mucho m??s.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/11-04-2022/2022-04-08_boletinlbqem.pdf'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLET??N 75</h4>
                                                                <i>viernes, 8 de abril de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Entre Carrera 7 y Autopista Norte Habr?? traslado de paraderos SITP en el costado oriental. 74 capturas y m??s de 1.500 armas blancas incautadas deja el primer mes de la estrategia #M??sDe25MilOjosAtentos, y mucho m??s.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-04-2022/2022-04-07_boletin_la_bogota_que_estamos_construyendo.pdf'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLET??N 74</h4>
                                                                <i>jueves, 7 de abril de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>As?? funciona el contraflujo en la Av. de las Am??ricas para descongestionar el occidente de Bogot??. La UMV apoy?? la implementaci??n del nuevo carril de contraflujo en la Avenida de las Am??ricas para descongestionar el occidente de la ciudad, y mucho m??s.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/05-04-2022/2022-04-06_boletinlbqec.pdf'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLET??N 73</h4>
                                                                <i>mi??rcoles, 6 de abril de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>El Portal del Sur contar?? con m??s cupos para las bicis. Conozca la m??quina niveladora de arrastre con la que se interven??an las v??as a finales de 1800, y mucho m??s.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/05-04-2022/2022-04-05_boletinlbqec.pdf'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLET??N 72</h4>
                                                                <i>martes, 5 de abril de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>La UMV adelanta obras de mantenimiento vial a los desv??os que se implementar??n para las obras del metro de Bogot??. Prep??rese para el cierre de la calzada norte en sentido Oriente - Occidente en la Avenida Villavicencio entre la Avenida Primero de Mayo y carrera 78i, mucho m??s. </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-04-2022/2022-04-04_boletinlbqec.pdf'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLET??N 71</h4>
                                                                <i>lunes, 4 de abril de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>La UMV ha priorizado varias v??as de la localidad de Teusaquillo para su intervenci??n. Para actividades de conexi??n de tuber??a de redes secas Cierre parcial de carril en bocacalles en Avenida 68, mucho ,??s.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/01-04-2022/2022-04-01_boletinlbqec.pdf'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLET??N 70</h4>
                                                                <i>viernes, 1 de abril de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Distrito lanz?? campa??a para proteger a los peatones y cambiar la historia del mal parqueo. 213 nuevos buses el??ctricos del Sistema de Transporte de Bogot?? comienzan su operaci??n este s??bado 2 de abril. Inician actividades de conservaci??n de espacio p??blico, y mucho m??s.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /#fin _abr22 -->

                                    <!-- collapse_mar22 -->
                                    <div class='panel panel-default'>
                                        <div class='panel-heading' role='tab' id='heading_mar22'>
                                            <h4 class='panel-title'>
                                                <a role='button' data-toggle='collapse' data-parent='#accordion_boletines21' href='#collapse_mar22' aria-expanded='true' aria-controls='collapse_mar22'>
                                                    Boletines marzo 2022
                                                </a>
                                            </h4>
                                        </div>
                                        <div id='collapse_mar22' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_mar22'>

                                            <div class='panel-body'>
                                                <div class="row">

                                                    <div class='col-xs-12'>
                                                        <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/31-03-2022/2022-03-31_boletinlbqec.pdf'>
                                                            <div class='btn-boletin'>
                                                                <div class='titulo-boletin'>
                                                                    <h4>BOLET??N 69</h4>
                                                                    <i>jueves, 31 de marzo de 2022</i>
                                                                </div>
                                                                <div class='descripcion-boletin'>
                                                                    <p>#LaBogot??QueEstamosCostruyendo Bogot?? ya cuenta con 1.061 buses el??ctricos que estar??n operando a finales de abril. Para descongestionar el occidente de Bogot??, se implementa contraflujo en la Av. de las Am??ricas. Espacio p??blico accesible, y mucho m??s.</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>

                                                    <div class='col-xs-12'>
                                                        <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/31-03-2022/2022-03-30_boletinlbqec.pdf'>
                                                            <div class='btn-boletin'>
                                                                <div class='titulo-boletin'>
                                                                    <h4>BOLET??N 68</h4>
                                                                    <i>mi??rcoles, 30 de marzo de 2022</i>
                                                                </div>
                                                                <div class='descripcion-boletin'>
                                                                    <p>As?? ve la comunidad las obras del patio taller, abitantes del barrio Chic?? Norte ahora disfrutan de mejores espacio p??blicos, Distrito busca a propietarios de 194 veh??culos del desmontado servicio de Transporte P??blico Colectivo (TPC), y mucho m??s.</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>

                                                    <div class='col-xs-12'>
                                                        <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/31-03-2022/2022-03-29_boletinlbqec.pdf'>
                                                            <div class='btn-boletin'>
                                                                <div class='titulo-boletin'>
                                                                    <h4>BOLET??N 67</h4>
                                                                    <i>martes, 29 de marzo de 2022</i>
                                                                </div>
                                                                <div class='descripcion-boletin'>
                                                                    <p>Los habitantes del barrio Timiza en la localidad de Kennedy podr??n disfrutar de una renovada v??a gracias a trabajo de la UMV. Prolongaci??n de cierres viales en Avenida 68 con Calle 100. 519 armas blancas incautadas en el Sistema, otro logro de la estrategia #M??sDe25MilOjosAtentos, y mucho m??s.</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>

                                                    <div class='col-xs-12'>
                                                        <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/31-03-2022/2022-03-28_boletinlbqec.pdf'>
                                                            <div class='btn-boletin'>
                                                                <div class='titulo-boletin'>
                                                                    <h4>BOLET??N 66</h4>
                                                                    <i>lunes, 28 de marzo de 2022</i>
                                                                </div>
                                                                <div class='descripcion-boletin'>
                                                                    <p>La Unidad de Mantenimiento Vial mejor?? las calles aleda??as a una de las iglesias m??s importantes de la ciudad. As?? ser?? el dise??o de la Avenida Ciudad de Cali, alimentadora de la l??nea Metro. </p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>

                                                    <div class='col-xs-12'>
                                                        <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/31-03-2022/2022-03-24_boletinbem.pdf'>
                                                            <div class='btn-boletin'>
                                                                <div class='titulo-boletin'>
                                                                    <h4>BOLET??N 65</h4>
                                                                    <i>jueves, 24 de marzo de 2022</i>
                                                                </div>
                                                                <div class='descripcion-boletin'>
                                                                    <p>Finalizado en cinco cruces, traslado anticipado de redes de alta tensi??n para el Metro. UMV mejora espacio p??blico del barrio Las Margaritas en la Localidad de Kennedy. Cierres viales por inicio de obras en Zona Rosa, y mucho m??s.</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>

                                                    <div class='col-xs-12'>
                                                        <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/31-03-2022/2022-03-23_boletinbem.pdf'>
                                                            <div class='btn-boletin'>
                                                                <div class='titulo-boletin'>
                                                                    <h4>BOLET??N 64</h4>
                                                                    <i>mi??rcoles, 23 de marzo de 2022</i>
                                                                </div>
                                                                <div class='descripcion-boletin'>
                                                                    <p>La UMV lleg?? al barrio Muequet?? para adelantar jornadas nocturnas para mejorar las v??as. Nuevo servicio zonal K333 Est. Av. Rojas ??? F333 Ciudad Alsacia. </p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>

                                                    <div class='col-xs-12'>
                                                        <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/31-03-2022/2022-03-22_boletinbem.pdf'>
                                                            <div class='btn-boletin'>
                                                                <div class='titulo-boletin'>
                                                                    <h4>BOLET??N 63</h4>
                                                                    <i>martes, 22 de marzo de 2022</i>
                                                                </div>
                                                                <div class='descripcion-boletin'>
                                                                    <p>La UMV adelanta labores de parcheo en un tramo de la carrera s??ptima ubicado en la localidad de Chapinero. As?? ser?? la Avenida 68, troncal alimentadora de la l??nea del Metro. Servicios zonales ampl??an sus horarios, y mucho m??s.</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>

                                                    <div class='col-xs-12'>
                                                        <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/31-03-2022/2022-03-18_boletinbem.pdf'>
                                                            <div class='btn-boletin'>
                                                                <div class='titulo-boletin'>
                                                                    <h4>BOLET??N 62</h4>
                                                                    <i>viernes, 18 de marzo de 2022</i>
                                                                </div>
                                                                <div class='descripcion-boletin'>
                                                                    <p>La UMV trabaja para mejorar la malla vial de la localidad de Barrios Unidos. Patio Taller de la Primera L??nea del Metro, ahora produce el concreto para su construcci??n. Cierre de separadores por obras en la Avenida 68, y m??s.</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>

                                                    <div class='col-xs-12'>
                                                        <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/31-03-2022/2022-03-17_boletinbem.pdf'>
                                                            <div class='btn-boletin'>
                                                                <div class='titulo-boletin'>
                                                                    <h4>BOLET??N 61</h4>
                                                                    <i>jueves, 17 de marzo de 2022</i>
                                                                </div>
                                                                <div class='descripcion-boletin'>
                                                                    <p>IDU concluye la conservaci??n de v??as que soportan el SITP en las localidades de Kennedy, Teusaquillo, Puente Aranda y Fontib??n. La UMV inici?? la se??alizaci??n de 300 v??as en varias localidades de la ciudad, y mucho m??s.</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>

                                                    <div class='col-xs-12'>
                                                        <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/16-03-2022/2022-03-16_boletinbem.pdf'>
                                                            <div class='btn-boletin'>
                                                                <div class='titulo-boletin'>
                                                                    <h4>BOLET??N 60</h4>
                                                                    <i>mi??rcoles, 16 de marzo de 2022</i>
                                                                </div>
                                                                <div class='descripcion-boletin'>
                                                                    <p>Con la estrategia ???Controles Salvavidas??? el Distrito busca reducir el n??mero de v??ctimas en el tr??nsito. Fatalidades por siniestros viales en Bogot??. Se realiz?? la primera jornada de "UMV De Puertas Abiertas" de este a??o 2022. Y m??s.</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class='col-xs-12'>
                                                        <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/16-03-2022/2022-03-15_boletinbem.pdf'>
                                                            <div class='btn-boletin'>
                                                                <div class='titulo-boletin'>
                                                                    <h4>BOLET??N 59</h4>
                                                                    <i>martes, 15 de marzo de 2022</i>
                                                                </div>
                                                                <div class='descripcion-boletin'>
                                                                    <p>En los ??ltimos meses la UMV atendi?? 25 emergencias que di???cultaban la movilidad en Bogot??. En la localidad de San Crist??bal Inicia construcci??n de andenes y de segmento vial en el barrio San Jacinto. Y m??s.</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class='col-xs-12'>
                                                        <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/16-03-2022/2022-03-14_boletinbem.pdf'>
                                                            <div class='btn-boletin'>
                                                                <div class='titulo-boletin'>
                                                                    <h4>BOLET??N 58</h4>
                                                                    <i>lunes, 14 de marzo de 2022</i>
                                                                </div>
                                                                <div class='descripcion-boletin'>
                                                                    <p>M??s de 5.000 mujeres mueven a Bogot?? Bogot?? reconoce la labor de m??s de 5.000 mujeres que trabajan por el Sistema de Transporte P??blico. Ma??ana 15 de marzo se desarrollar?? la primera jornada de ???UMV de Puertas Abiertas??? de 2022, y m??s.</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class='col-xs-12'>
                                                        <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/11-03-2022/2022-03-11_boletinbem.pdf'>
                                                            <div class='btn-boletin'>
                                                                <div class='titulo-boletin'>
                                                                    <h4>BOLET??N 57</h4>
                                                                    <i>viernes, 11 de marzo de 2022</i>
                                                                </div>
                                                                <div class='descripcion-boletin'>
                                                                    <p>??Juntos Cuidamos Suba! En esta localidad la UMV ha tapado m??s de 35.700 huecos. TransMilenio pone a disposici??n de los usuarios un servicio zonal adicional para las elecciones. Y m??s.</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class='col-xs-12'>
                                                        <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/10-03-2022/2022-03-10_boletin_bogota_esta_mejorando_.pdf'>
                                                            <div class='btn-boletin'>
                                                                <div class='titulo-boletin'>
                                                                    <h4>BOLET??N 56</h4>
                                                                    <i>jueves, 10 de marzo de 2022</i>
                                                                </div>
                                                                <div class='descripcion-boletin'>
                                                                    <p>Con ??xito inici?? en firme la restauraci??n la escultura ???Bol??var Ecuestre???. Este s??bado 12 de marzo, inician obras de externalizaci??n de taquillas en la estaci??n calle 127. Cierre de dos carriles y separador en Autopista al Llano. Y m??s.</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class='col-xs-12'>
                                                        <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/10-03-2022/2022-03-09_boletin_bogota_esta_mejorando_.pdf'>
                                                            <div class='btn-boletin'>
                                                                <div class='titulo-boletin'>
                                                                    <h4>BOLET??N 55</h4>
                                                                    <i>mi??rcoles, 9 de marzo de 2022</i>
                                                                </div>
                                                                <div class='descripcion-boletin'>
                                                                    <p>La UMV est?? comprometida con mejorar la calidad del aire en Ciudad Bol??var. Estrategia #MasDe25MilOjosAtentos arroja primeros resultados. El Metro de Bogot?? genera oportunidades de trabajo y espacios seguros para la mujer. Y m??s.</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class='col-xs-12'>
                                                        <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/10-03-2022/2022-03-08_boletin_bogota_esta_mejorando_.pdf'>
                                                            <div class='btn-boletin'>
                                                                <div class='titulo-boletin'>
                                                                    <h4>BOLET??N 54</h4>
                                                                    <i>martes, 8 de marzo de 2022</i>
                                                                </div>
                                                                <div class='descripcion-boletin'>
                                                                    <p>Entra en operaci??n segunda ??rea de implementaci??n de la Zona de Parqueo Pago. En Avenida Suba Inician las obras de conservaci??n del espacio p??blico y ciclorruta. Ocho servicios zonales ampliaron su horario desde el 7 de marzo, y m??s.</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class='col-xs-12'>
                                                        <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-03-2022/2022-03-07_boletinbem_0.pdf'>
                                                            <div class='btn-boletin'>
                                                                <div class='titulo-boletin'>
                                                                    <h4>BOLET??N 53</h4>
                                                                    <i>lunes, 7 de marzo de 2022</i>
                                                                </div>
                                                                <div class='descripcion-boletin'>
                                                                    <p>La UMV intervino las calles alrededor del Parque de la 93, con este trabajo se mejoran los recorridos de los residentes. Comerciantes y transe??ntes de la zona, entre la Carrera 7 y Autopista Norte Se adelanta la construcci??n de aceras y ciclorrutas de las calles 92 y 94. Y m??s.</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class='col-xs-12'>
                                                        <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-03-2022/2022-03-04_boletinbem_0.pdf'>
                                                            <div class='btn-boletin'>
                                                                <div class='titulo-boletin'>
                                                                    <h4>BOLET??N 52</h4>
                                                                    <i>viernes, 4 de marzo de 2022</i>
                                                                </div>
                                                                <div class='descripcion-boletin'>
                                                                    <p>Distrito implementa nuevas medidas de movilidad en la Autopista Norte para beneficiar a estudiantes. Cerca de 30 mil c??maras y m??s de 25 mil ojos brindan seguridad a los usuarios en TransMilenio, y m??s.</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class='col-xs-12'>
                                                        <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/02-03-2022/2022-03-03_boletinbem.pdf'>
                                                            <div class='btn-boletin'>
                                                                <div class='titulo-boletin'>
                                                                    <h4>BOLET??N 51</h4>
                                                                    <i>jueves, 3 de marzo de 2022</i>
                                                                </div>
                                                                <div class='descripcion-boletin'>
                                                                    <p>En 2021, Bogot?? avanz?? en movilidad sostenible, cobertura, seguridad y planes anti-evasi??n. Ajustes operativos en servicios de la Troncal Am??ricas. Empresa Metro implementa con ??xito brigada de supervisi??n de predios, y m??s. </p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class='col-xs-12'>
                                                        <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/02-03-2022/2022-03-02_boletinbem.pdf'>
                                                            <div class='btn-boletin'>
                                                                <div class='titulo-boletin'>
                                                                    <h4>BOLET??N 50</h4>
                                                                    <i>mi??rcoles, 2 de marzo de 2022</i>
                                                                </div>
                                                                <div class='descripcion-boletin'>
                                                                    <p>En 2021, Bogot?? avanz?? en movilidad sostenible, cobertura, seguridad y planes anti-evasi??n, La Unidad de Mantenimiento Vial le da una nueva cara a las v??as del barrio Bat??n en Suba, gracias a las obras adelantadas para tapar los huecos, y m??s.</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class='col-xs-12'>
                                                        <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/01-03-2022/2022-04-01_boletinbem.pdf'>
                                                            <div class='btn-boletin'>
                                                                <div class='titulo-boletin'>
                                                                    <h4>BOLET??N 49</h4>
                                                                    <i>martes, 1 de marzo de 2022</i>
                                                                </div>
                                                                <div class='descripcion-boletin'>
                                                                    <p>Logros de Movilidad en 2021 y metas para el 2022 Con el inicio de alrededor de 200 frentes de obra en 2021, Bogot?? sigue mejorando en su movilidad.</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /#fin _mar22 -->

                                    <!-- collapse_feb22 -->
                                    <div class='panel panel-default'>
                                        <div class='panel-heading' role='tab' id='heading_feb22'>
                                            <h4 class='panel-title'>
                                                <a role='button' data-toggle='collapse' data-parent='#accordion_boletines21' href='#collapse_feb22' aria-expanded='true' aria-controls='collapse_feb22'>
                                                    Boletines febrero 2022
                                                </a>
                                            </h4>
                                        </div>
                                        <div id='collapse_feb22' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_feb22'>
                                            <div class='panel-body'>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/01-03-2022/2022-02-28_boletinbem.pdf'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLET??N 48</h4>
                                                                <i>lunes, 28 de febrero de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Recuerde que el 1 de marzo inicia la operaci??n de la Ventanilla ??nica de Servicios de Movilidad, Los trabajos de mantenimiento vial llegaron a la localidad de Teusaquillo con mejoras contundentes, y m??s.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/01-03-2022/2022-02-25_boletinbem.pdf'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLET??N 47</h4>
                                                                <i>viernes, 25 de febrero de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>En la nueva Avenida Guayacanes se abre calzada vehicular, Movilidad avanza en la descongesti??n de patios de veh??culos declarados en abandono, Desde la topograf??a, Diego Figueredo aporta en la construcci??n del metro de Bogot??, y m??s.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/01-03-2022/2022-02-24_boletinbem.pdf'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLET??N 46</h4>
                                                                <i>jueves, 24 de febrero de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>M??s kil??metros de ciclorruta en la ciudad Avanza la construcci??n de aceras y ciclorrutas en la Calle 116, uenos resultados en operativos de seguridad en el Sistema de Transporte, y m??s.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/01-03-2022/2022-02-23_boletinbem.pdf'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLET??N 45</h4>
                                                                <i>mi??rcoles, 23 de febrero de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>En marzo se acaba el SIM y nace la Ventanilla ??nica de Servicios de Movilidad en Bogot??, En la localidad de Bosa Avanza la construcci??n de una nueva estaci??n de TransMilenio, y m??s.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/01-03-2022/2022-02-22_boletinbem.pdf'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLET??N 44</h4>
                                                                <i>martes, 22 de febrero de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>En las localidades Suba y Teusaquillo Habitantes y transe??ntes disfrutan de nuevos espacios p??blicos, En Engativ??, la UMV realiza obras nocturnas para mejorar algunas v??as del occidente de la ciudad, y m??s.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/01-03-2022/2022-02-21_boletinbem.pdf'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLET??N 43</h4>
                                                                <i>lunes, 21 de febrero de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Una ind??gena de la comunidad Wayuu es la nueva integrante del equipo de atenci??n al ciudadano de la UMV y el enlace entre la entidad y esta poblaci??n, Inician labores de conservaci??n y mantenimiento en espacio p??blico, y m??s.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/01-03-2022/2022-02-18_boletinbem.pdf'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLET??N 42</h4>
                                                                <i>viernes, 18 de febrero de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Acacias y Santa Teresa, los 2 barrios en Usaqu??n que se vieron beneficiados con las obras viales de la UMV, En obras de la Avenida 68 Comunidades de Kennedy y Puente Aranda son convocadas para ejercer veedur??a ciudadana, y m??s.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/01-03-2022/2022-02-17_boletinbem.pdf'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLET??N 41</h4>
                                                                <i>Jueves, 17 de febrero de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>La UMV aprovechar?? las noches de esta semana para intervenir importantes v??as en la localidad de Fontib??n, Contratistas llevan a cabo sensibilizaci??n para ciclistas La Avenida 68 suma kil??metros a la red de ciclorrutas en la ciudad, y m??s.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class="enlace" href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/01-03-2022/2022-02-16_boletinbem.pdf">
                                                        <div class="btn-boletin">
                                                            <div class="titulo-boletin">
                                                                <h4>BOLET??N 40</h4>
                                                                <i>Mi??rcoles, 16 de febrero de 2022</i>
                                                            </div>
                                                            <div class="descripcion-boletin">
                                                                <p>El Pico y Placa Extendido en Bogot?? cumpli?? un mes de implementaci??n, Nuevos buses el??ctricos impactar??n en la calidad del aire de Bogot??, En horario nocturno Cierres viales por actividades preliminares en Avenida 68, y m??s.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class="enlace" href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/15-02-2022/2022-02-15_boletinbem.pdf">
                                                        <div class="btn-boletin">
                                                            <div class="titulo-boletin">
                                                                <h4>BOLET??N 39</h4>
                                                                <i>Martes, 15 de Febrero de 2022</i>
                                                            </div>
                                                            <div class="descripcion-boletin">
                                                                <p>M??s de 30.000 usuarios se benefician diariamente con los 172 nuevos buses el??ctricos. La UMV sigue trabajando para mejorar las v??as de la localidad de Bosa. Con un avance del 67.3% avanza la construcci??n del ciclopuente Canal Molinos, y m??s.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class="enlace" href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/15-02-2022/2022-02-14_boletinbem.pdf">
                                                        <div class="btn-boletin">
                                                            <div class="titulo-boletin">
                                                                <h4>BOLET??N 38</h4>
                                                                <i>Lunes, 14 de Febrero de 2022</i>
                                                            </div>
                                                            <div class="descripcion-boletin">
                                                                <p>M??s de 15 mil peatones y ciclistas disfrutan de un nuevo espacio que prioriza su movilidad y seguridad vial. El Equipo de Cultura Ciudadana de la UMV trabaja para fortalecer la sana convivencia entre los colaboradores y los residentes de las v??as a intervenir, y m??s</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class="enlace" href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/11-02-2022/2022-02-11_boletinbem.pdf">
                                                        <div class="btn-boletin">
                                                            <div class="titulo-boletin">
                                                                <h4>BOLET??N 37</h4>
                                                                <i>Viernes, 11 de Febrero de 2022</i>
                                                            </div>
                                                            <div class="descripcion-boletin">
                                                                <p>Bogot?? recibi?? reconocimiento internacional por sus acciones para promover la movilidad sostenible. Avenida 68, Alimentadora de la L??nea del Metro cierres viales para avance de obras. Cerca de 3.000 habitantes de la localidad de Suba se beneficiar??n con las obras de mantenimiento vial que inici?? la UMV en este sector, y m??s.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class="enlace" href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/11-02-2022/2022-02-10_boletinbem.pdf">
                                                        <div class="btn-boletin">
                                                            <div class="titulo-boletin">
                                                                <h4>BOLET??N 36</h4>
                                                                <i>Jueves, 10 de Febrero de 2022</i>
                                                            </div>
                                                            <div class="descripcion-boletin">
                                                                <p>Con la firma del Acta de Inicio, Bogot?? contar?? con el segundo Sistema de Bicicletas Compartidas m??s grande de LATAM. Cierres en la AutoNorte en construcci??n el ciclopuente Canal Molinos. La UMV est?? en Bosa mejorando algunas de las v??as de esta localidad, y m??s.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class="enlace" href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/11-02-2022/2022-02-09_boletinbem.pdf">
                                                        <div class="btn-boletin">
                                                            <div class="titulo-boletin">
                                                                <h4>BOLET??N 35</h4>
                                                                <i>Miercoles, 9 de Febrero de 2022</i>
                                                            </div>
                                                            <div class="descripcion-boletin">
                                                                <p>Cierre parcial de espacio p??blico por obra m??s de 800 mil personas beneficiadas con andenes amplios y seguros en Av. Guayacanes. Conoce c??mo verificar el saldo de la tarjeta tullave con nuestra TransMiApp, Y m??s</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class="enlace" href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/09-02-2022/2022-02-08_boletinbem.pdf">
                                                        <div class="btn-boletin">
                                                            <div class="titulo-boletin">
                                                                <h4>BOLET??N 34</h4>
                                                                <i>Martes, 8 de Febrero de 2022</i>
                                                            </div>
                                                            <div class="descripcion-boletin">
                                                                <p>Obras en la Avenida 68 a partir de la segunda semana de febrero habr?? nuevos cierres y desv??os. El Contador, uno de los barrios en Usaqu??n d??nde se han priorizado los trabajos de Mantenimiento Vial y m??s.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class="enlace" href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/09-02-2022/2022-02-07_boletinbem.pdf">
                                                        <div class="btn-boletin">
                                                            <div class="titulo-boletin">
                                                                <h4>BOLET??N 33</h4>
                                                                <i>Lunes, 7 de Febrero de 2022</i>
                                                            </div>
                                                            <div class="descripcion-boletin">
                                                                <p>A partir de este lunes 7 de febrero nuevos cierres por obras en Avenida Guayacanes. La alcald??a de Bogot?? sigue trabajando en el mejoramiento de las v??as rurales de Ciudad Bol??var y m??s.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class="enlace" href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-02-2022/2022-02-04_boletin_bem_25.pdf">
                                                        <div class="btn-boletin">
                                                            <div class="titulo-boletin">
                                                                <h4>BOLET??N 32</h4>
                                                                <i>Viernes, 4 de Febrero de 2022</i>
                                                            </div>
                                                            <div class="descripcion-boletin">
                                                                <p>Los huecos en las v??as del barrio Caobos Salazar hacen parte del pasado. Contin??an las obras en Av. Guayacanes Cierre parcial en Carrera 89 B y Calle 49 Sur. Usuarios de TransMilenio respiran un aire m??s limpio, y m??s.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class="enlace" href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-02-2022/2022-02-03_boletin_bem_24.pdf">
                                                        <div class="btn-boletin">
                                                            <div class="titulo-boletin">
                                                                <h4>BOLET??N 31</h4>
                                                                <i>Jueves, 3 de Febrero de 2022</i>
                                                            </div>
                                                            <div class="descripcion-boletin">
                                                                <p>En el primer mes del 2022 la UMV ha mejorado m??s de 45 mil da??os viales. En obra la Extensi??n Caracas Sur Cierres entre Estaci??n Molinos y Portal Usme. La nueva cara de portales y estaciones de TransMilenio</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class="enlace" href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/01-03-2022/2022-02-02_boletinbem.pdf">
                                                        <div class="btn-boletin">
                                                            <div class="titulo-boletin">
                                                                <h4>BOLET??N 30</h4>
                                                                <i>Mi??rcoles, 2 de febrero de 2022</i>
                                                            </div>
                                                            <div class="descripcion-boletin">
                                                                <p>Avanzan las obras en Av. Ciudad de Cali Iniciaron actividades para la construcci??n del ciclopuente a la altura de la Av. Villavicencio, En tiempo r??cord la UMV mejor?? cuatro calles de la localidad de Kennedy, y m??s.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class="enlace" href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/01-03-2022/2022-02-01_boletinbem.pdf">
                                                        <div class="btn-boletin">
                                                            <div class="titulo-boletin">
                                                                <h4>BOLET??N 29</h4>
                                                                <i>Martes, 1 de febrero de 2022</i>
                                                            </div>
                                                            <div class="descripcion-boletin">
                                                                <p>La UMV mejor?? varias calles del barrio Galer??as de la localidad de Teusaquillo, Dos nuevas rutas del SITP conectan las localidades de San Crist??bal y Chapinero.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /#fin _feb22 -->

                                    <!-- collapse_ene22 -->
                                    <div class='panel panel-default'>
                                        <div class='panel-heading' role='tab' id='heading_ene22'>
                                            <h4 class='panel-title'>
                                                <a role='button' data-toggle='collapse' data-parent='#accordion_boletines21' href='#collapse_ene22' aria-expanded='true' aria-controls='collapse_ene22'>
                                                    Boletines enero 2022
                                                </a>
                                            </h4>
                                        </div>
                                        <div id='collapse_ene22' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_ene22'>
                                            <div class='panel-body'>
                                                <div class='col-xs-12'>
                                                    <a class="enlace" href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/09-02-2022/2022-01-31_boletinbem.pdf">
                                                        <div class="btn-boletin">
                                                            <div class="titulo-boletin">
                                                                <h4>BOLET??N 28</h4>
                                                                <i>Lunes, 31 de Enero de 2022</i>
                                                            </div>
                                                            <div class="descripcion-boletin">
                                                                <p>En Ciudad Bol??var se realizan trabajos para mejorar la malla vial en el barrio Estrella del Sur. ??Engativ?? est?? mejorando! En esta localidad la UMV realiza obras para la reactivaci??n vial de una zona cercana al Aeropuerto Internacional El Dorado. </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class="enlace" href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/05-02-2022/2022-01-28_boletinbem.pdf">
                                                        <div class="btn-boletin">
                                                            <div class="titulo-boletin">
                                                                <h4>BOLET??N 27</h4>
                                                                <i>Viernes, 28 de Enero de 2022</i>
                                                            </div>
                                                            <div class="descripcion-boletin">
                                                                <p>La UMV no para
                                                                    y contin??a intervenciones en Puente Aranda. Cierre de carril en AutoNorte por obras del ciclopuente Canal Molinos. Cambia el sentido vial de la calle 64 de Engativ?? Pueblo. Y m??s.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class="enlace" href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/05-02-2022/2022-01-27_boletinbem.pdf">
                                                        <div class="btn-boletin">
                                                            <div class="titulo-boletin">
                                                                <h4>BOLET??N 26</h4>
                                                                <i>Jueves, 27 de Enero de 2022</i>
                                                            </div>
                                                            <div class="descripcion-boletin">
                                                                <p>Se adelantar??n trabajos de desmonte en puente vehicular de la Av. 68 con Calle 26. El estado de las calles alrededor del estadio El Camp??n mejoraron gracias al Plan de Choque del Distrito. M??s de 15 mil acciones en pro de la seguridad de usuarios y convivencia dentro de TransMilenio. Y m??s.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class="enlace" href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/05-02-2022/2022-01-26_boletinbem.pdf">
                                                        <div class="btn-boletin">
                                                            <div class="titulo-boletin">
                                                                <h4>BOLET??N 25</h4>
                                                                <i>Miercoles, 26 de Enero de 2022</i>
                                                            </div>
                                                            <div class="descripcion-boletin">
                                                                <p>Bogot??, una ciudad a la altura del mundo Empresas privadas se comprometen con Bogot?? y la movilidad sostenible. Con tres frentes de obra activos Se adelantan trabajos de conservaci??n de la malla vial en Engativ??. Y m??s.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class="enlace" href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/05-02-2022/2022-01-25_boletinbem.pdf">
                                                        <div class="btn-boletin">
                                                            <div class="titulo-boletin">
                                                                <h4>BOLET??N 24</h4>
                                                                <i>Martes, 25 de Enero de 2022</i>
                                                            </div>
                                                            <div class="descripcion-boletin">
                                                                <p>Las actividades de Mantenimiento Vial llegaron al barrio Castilla de la localidad de Kennedy. En la localidad de Bosa Por obras de la Av. Ciudad de Cali, la calle 75 Bis Sur tendr?? un cierre temporal. Y m??s.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class="enlace" href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/05-02-2022/2022-01-24_boletinbem.pdf">
                                                        <div class="btn-boletin">
                                                            <div class="titulo-boletin">
                                                                <h4>BOLET??N 23</h4>
                                                                <i>Lunes, 24 de Enero de 2022</i>
                                                            </div>
                                                            <div class="descripcion-boletin">
                                                                <p>El Plan de Choque lleg?? al sector de Timiza en Kennedy para mejorar el estado de sus calles. Grupo 2: Entre Avenida Bosa y Avenida Villavicencio Afectaciones viales por Avance de Av. Guayacanes. ??lvaro Rengifo, nuevo gerente de TRANSMILENIO S.A. Y m??s.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class="enlace" href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/05-02-2022/2022-01-21_boletinbem.pdf">
                                                        <div class="btn-boletin">
                                                            <div class="titulo-boletin">
                                                                <h4>BOLET??N 22</h4>
                                                                <i>Viernes, 21 de Enero de 2022</i>
                                                            </div>
                                                            <div class="descripcion-boletin">
                                                                <p>Cuatro barrios de la localidad de Usme mejoraron sus v??as con material reciclado. Durante los meses de diciembre y enero la Unidad de Mantenimiento Vial ha estado mejorando el estado de 14 v??as de la localidad de Usme.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class="enlace" href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/05-02-2022/2022-01-20_boletinbem.pdf">
                                                        <div class="btn-boletin">
                                                            <div class="titulo-boletin">
                                                                <h4>BOLET??N 21</h4>
                                                                <i>Jueves, 20 de Enero de 2022</i>
                                                            </div>
                                                            <div class="descripcion-boletin">
                                                                <p>Retos del Sector Movilidad y la ciudadan??a en 2022. As?? ser?? la extensi??n de la Primera L??nea del Metro de Bogot?? hasta la calle 100. Grupos 5 y 8 Reuniones de socializaci??n Avenida 68. Y m??s</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class="enlace" href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/05-02-2022/2022-01-19_boletinbem.pdf">
                                                        <div class="btn-boletin">
                                                            <div class="titulo-boletin">
                                                                <h4>BOLET??N 20</h4>
                                                                <i>Miercoles, 19 de Enero de 2022</i>
                                                            </div>
                                                            <div class="descripcion-boletin">
                                                                <p>La UMV arregl?? los da??os viales que afectaban la movilidad del barrio Bella Suiza al norte de la ciudad. Entre Carreras 54B y 53A Comienza rehabilitaci??n de acera norte de la 116. Con la tarjeta personalizada ???TuLlave??? se puede bloquear el saldo en caso de p??rdida. Y m??s</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class="enlace" href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/09-02-2022/2021-12-18_boletinbem.pdf">
                                                        <div class="btn-boletin">
                                                            <div class="titulo-boletin">
                                                                <h4>BOLET??N 19</h4>
                                                                <i>Martes, 18 de Enero de 2022</i>
                                                            </div>
                                                            <div class="descripcion-boletin">
                                                                <p>Balance del Pico y Placa Extendido Semana del 11 al 14 de enero de 2022. Entre Calles 90 y 95 y a la altura de la Calle 66 Cierres en la Avenida 68, y m??s</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class="enlace" href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/01-03-2022/2022-01-15_bem.pdf">
                                                        <div class="btn-boletin">
                                                            <div class="titulo-boletin">
                                                                <h4>BOLET??N 18</h4>
                                                                <i>S??bado, 15 de enero de 2022</i>
                                                            </div>
                                                            <div class="descripcion-boletin">
                                                                <p>La UMV logr?? cifra r??cord al reparar cerca de 300.000 huecos en la malla de la ciudad en 2021, Inicia la rehabilitaci??n vial de la Avenida 9, entre Calles 140 y 145, y m??s</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class="enlace" href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-01-2022/2021-01-14_boletin_bem.pdf">
                                                        <div class="btn-boletin">
                                                            <div class="titulo-boletin">
                                                                <h4>BOLET??N 17</h4>
                                                                <i>Viernes, 14 de enero de 2022</i>
                                                            </div>
                                                            <div class="descripcion-boletin">
                                                                <p>Cierres viales por construcci??n del Paseo Comercial Villas de Granada, TransMilenio hace un llamado a sus usuarios a mantener las medidas de bioseguridad en el Sistema, As?? avanz?? la bici en Bogot?? durante 2021, y m??s.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class="enlace" href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-01-2022/2021-01-13_boletin_bem.pdf">
                                                        <div class="btn-boletin">
                                                            <div class="titulo-boletin">
                                                                <h4>BOLET??N 16</h4>
                                                                <i>Jueves, 13 de enero de 2022</i>
                                                            </div>
                                                            <div class="descripcion-boletin">
                                                                <p>As?? avanzan los estudios en terreno para la l??nea 2 del Metro de Bogot??, En la carrera 9??. con calle 12 Cierre en and??n y calzada, por construcci??n de puente peatonal del Acuerdo de Valorizaci??n, Bogot?? suscribe contrato para dar inicio al Sistema de Bicicletas Compartidas de la ciudad, y m??s.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class="enlace" href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-01-2022/2021-01-12_boletin_bem.pdf">
                                                        <div class="btn-boletin">
                                                            <div class="titulo-boletin">
                                                                <h4>BOLET??N 15</h4>
                                                                <i>Miercoles, 12 de enero de 2022</i>
                                                            </div>
                                                            <div class="descripcion-boletin">
                                                                <p>Desv??os por el inicio de rehabilitaci??n vial en Kennedy, La tarifa de TransMilenio no incrementa para los m??s vulnerables, As?? de f??cil puedes consultar el contrato de concesi??n para las obras de la Primera L??nea del Metro de Bogot??, y m??s.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class="enlace" href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-01-2022/2021-01-07_boletin_bem.pdf">
                                                        <div class="btn-boletin">
                                                            <div class="titulo-boletin">
                                                                <h4>BOLET??N 14</h4>
                                                                <i>Viernes, 7 de enero de 2022</i>
                                                            </div>
                                                            <div class="descripcion-boletin">
                                                                <p>Con m??s de 34.000 huecos tapados avanza el Plan de Choque en Bogot??, La UMV hace presencia en Usme con 14 frentes de obra de gran impacto, Inicia cierre de calzada lenta de la Calle 26, entre Avenida 68 y Carrera 66, y m??s.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class="enlace" href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-01-2022/2021-01-06_boletin_bem.pdf">
                                                        <div class="btn-boletin">
                                                            <div class="titulo-boletin">
                                                                <h4>BOLET??N 13</h4>
                                                                <i>Miercoles, 5 de enero de 2022</i>
                                                            </div>
                                                            <div class="descripcion-boletin">
                                                                <p>Prep??rese para regresar Bogot?? y recuerde el Pico y Placa Regional, Conozca los detalles de la Avenida Ciudad de Cali, As?? funcionan los Comit??s de Participaci??n Zonal de la Primera L??nea del Metro de Bogot??, y m??s.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class="enlace" href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-01-2022/2021-01-05_boletin_bem.pdf">
                                                        <div class="btn-boletin">
                                                            <div class="titulo-boletin">
                                                                <h4>BOLET??N 12</h4>
                                                                <i>Miercoles, 5 de enero de 2022</i>
                                                            </div>
                                                            <div class="descripcion-boletin">
                                                                <p>M??s de 6 mil buses han sido desintegrados con la salida del SITP Provisional, Cierre por rehabilitaci??n vial en la Calle 147, UMV Implementa Ventanilla Electr??nica para radicaci??n, Conozca el cierre total del costado sur de la intersecci??n de la av. Agoberto Mej??a con av. Villavicencio, y m??s.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class="enlace" href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-01-2022/2021-01-04_boletin_bem.pdf">
                                                        <div class="btn-boletin">
                                                            <div class="titulo-boletin">
                                                                <h4>BOLET??N 11</h4>
                                                                <i>Martes, 4 de enero de 2022</i>
                                                            </div>
                                                            <div class="descripcion-boletin">
                                                                <p>Mantenimientos al espacio p??blico en la Calle 63 y en Avenida Villas, Avenida Villas entre Calle 129 y 134, Teusaquillo: otra localidad beneficiada con el plan de choque, Cerca de tres mil conductores del antiguo transporte p??blico ahora son parte del SITP, y m??s.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class="enlace" href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-01-2022/2021-01-03_boletin_bem.pdf">
                                                        <div class="btn-boletin">
                                                            <div class="titulo-boletin">
                                                                <h4>BOLET??N 10</h4>
                                                                <i>Lunes, 3 de enero de 2022</i>
                                                            </div>
                                                            <div class="descripcion-boletin">
                                                                <p>Cambios en el Pico y Placa para veh??culos particulares en Bogot??, as?? es la ruta de la Primera L??nea del Metro de Bogot??, En TransMilenio contin??an jornadas intensivas de aseo y desinfecci??n de buses y estaciones, y m??s.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /#fin _ene22 -->

                                    <!-- collapse_dic21 -->
                                    <div class='panel panel-default'>
                                        <div class='panel-heading' role='tab' id='heading_dic21'>
                                            <h4 class='panel-title'>
                                                <a role='button' data-toggle='collapse' data-parent='#accordion_boletines21' href='#collapse_dic21' aria-expanded='true' aria-controls='collapse_dic21'>
                                                    Boletines diciembre 2021
                                                </a>
                                            </h4>
                                        </div>
                                        <div id='collapse_dic21' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_dic21'>
                                            <div class='panel-body'>

                                                <div class='col-xs-12'>
                                                    <a class="enlace" href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-01-2022/2021-12-30_boletin_bem.pdf">
                                                        <div class="btn-boletin">
                                                            <div class="titulo-boletin">
                                                                <h4>BOLET??N 9</h4>
                                                                <i>Jueves, 30 de diciembre 2021</i>
                                                            </div>
                                                            <div class="descripcion-boletin">
                                                                <p>Conozca desv??os y alternativas de movilidad por cierre de parte oriental del puente de Av.68 con Calle 26,La mitad de quienes se movilizan en TransMilenio son mujeres, Zona rural de Ciudad bol??var beneficiada con el mejoramiento de sus v??as, y m??s.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class="enlace" href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-01-2022/2021-12-29_boletin_bem.pdf">
                                                        <div class="btn-boletin">
                                                            <div class="titulo-boletin">
                                                                <h4>BOLET??N 8</h4>
                                                                <i>Miercoles, 29 de diciembre 2021</i>
                                                            </div>
                                                            <div class="descripcion-boletin">
                                                                <p>Extensi??n de Troncal Caracas mejorar?? movilidad del sur de Bogot??, En tiempo r??cord, dos cuadrillas intervinieron huecos en la Y de Yomasa, En estaciones de TransMilenio m??s de 42.000 usuarios se han hecho pruebas de Covid-19, y m??s.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class="enlace" href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-01-2022/2021-12-28_boletin_bem.pdf">
                                                        <div class="btn-boletin">
                                                            <div class="titulo-boletin">
                                                                <h4>BOLET??N 7</h4>
                                                                <i>Martes, 28 de diciembre 2021</i>
                                                            </div>
                                                            <div class="descripcion-boletin">
                                                                <p>Habr?? cierres y reducci??n de calzadas en obra del Canal C??rdoba entre Calles 129 y 170, UMV lleg?? a Chapinero con sus cuadrillas de mantenimiento vial, Comunidad de zona de influencia de la Primera L??nea del Metro reflexion?? sobre la movilidad , y m??s.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class="enlace" href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-01-2022/2021-12-26_boletin_bem.pdf">
                                                        <div class="btn-boletin">
                                                            <div class="titulo-boletin">
                                                                <h4>BOLET??N 6</h4>
                                                                <i>Lunes, 27 de diciembre 2021</i>
                                                            </div>
                                                            <div class="descripcion-boletin">
                                                                <p>??Ojo! Desde el 26 de diciembre, hay tres nuevos cierres en la Avenida Guayacanes, As?? avanzan las obras viales en el sector del Gran San en Bogot??, Con 119 rutas el componente zonal ha ampliado su cobertura, y m??s.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class="enlace" href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-01-2022/2021-12-24_boletin_bem.pdf">
                                                        <div class="btn-boletin">
                                                            <div class="titulo-boletin">
                                                                <h4>BOLET??N 5</h4>
                                                                <i>Viernes, 24 de diciembre 2021</i>
                                                            </div>
                                                            <div class="descripcion-boletin">
                                                                <p>Ojo a los cierres viales por obras en la Avenida Guayacanes, Tips para moverse seguro en TransMilenio estas festividades, 2 frentes de trabajo de la UMV llegaron a Mazur??n para arreglar el estado de la v??as, y mas.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class="enlace" href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-01-2022/2021-12-23_boletin_bem.pdf">
                                                        <div class="btn-boletin">
                                                            <div class="titulo-boletin">
                                                                <h4>BOLET??N 4</h4>
                                                                <i>Jueves, 23 de diciembre 2021</i>
                                                            </div>
                                                            <div class="descripcion-boletin">
                                                                <p>As?? operar??n los frentes de obra que arreglar??n las v??as de Bogot??, Cierres viales y de espacio p??blico en grupo 2 de Avenida Guayacanes, 24 estaciones de TransMilenio estrenar??n puertas. </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class="enlace" href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-01-2022/2021-12-22_boletin_bem.pdf">
                                                        <div class="btn-boletin">
                                                            <div class="titulo-boletin">
                                                                <h4>BOLET??N 3</h4>
                                                                <i>Miercoles, 22 de diciembre 2021</i>
                                                            </div>
                                                            <div class="descripcion-boletin">
                                                                <p>M??s de 5 millones de usuarios de TransMilenio tienen beneficios por tener tarjeta personalizada, Por construcci??n de puente peatonal, se traslada paradero SITP en Carrera 9 con Calle 112, Obras en ciclorruta de la Alameda El Porvenir con avance del 60%, y m??s.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class="enlace" href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-01-2022/2021-12-21_boletin_bem.pdf">
                                                        <div class="btn-boletin">
                                                            <div class="titulo-boletin">
                                                                <h4>BOLET??N 2</h4>
                                                                <i>Martes, 21 de diciembre 2021</i>
                                                            </div>
                                                            <div class="descripcion-boletin">
                                                                <p>Nuevo cierre para seguir avanzando con obras en la Av. 68, Listas las unidades m??viles que mejorar??n v??as a partir de Navidad, TransMilenio ya cuenta con 483 buses el??ctricos rodando en la ciudad, Comienzan exploraciones de geotecnia en la calle 72 para la L??nea 2 del metro, y m??s.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class="enlace" href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-01-2022/2021-12-20_boletin_bem.pdf">
                                                        <div class="btn-boletin">
                                                            <div class="titulo-boletin">
                                                                <h4>BOLET??N 1</h4>
                                                                <i>Lunes, 20 de diciembre 2021</i>
                                                            </div>
                                                            <div class="descripcion-boletin">
                                                                <p>Cierre en Autonorte por ciclopuente que conectar?? oriente y occidente de la ciudad, Conoce m??s del proyecto Avenida 68, Con obras comenz?? la navidad en San Bernardo, TransMiAPP, el Sistema en la palma de la mano, y m??s.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /#fin _dic21 -->

                                </div>
                                <!-- /#fin _boletines21 -->

                            </div>
                        </div>
                        <!-- Fin seccion de noticias  -->

                    </div>

                </div>

            </div>

        </div>


    </div>
</div>
</div>

<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin Bloque Secci??n  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->