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

    .box-encabezado {

        /* height: 630px; */
        /* max-height: 350px; */
        /* background: rgba(228, 238, 187, 1); */
        background-image: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/01-09-2022/img_lbqec_1.png');
        background-position: center bottom;
        background-size: cover;
        background-repeat: no-repeat;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        align-items: center;
        position: relative;
        min-height: 450px;
    }

    .box-encabezado .logo-encabezado {
        position: relative;
        /* height: px; */
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        background: rgba(0, 0, 0, 0.5);
        width: 75vw;
        max-width: 300px;
        margin-top: 40px;
        margin-bottom: 40px;

    }



    .s1 .logo-encabezado img {
        -webkit-box-shadow: 0px 0px 50px 34px rgba(0, 0, 0, 0.5);
        box-shadow: 0px 0px 50px 34px rgba(0, 0, 0, 0.5);
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
        font-size: 16px;
        font-weight: 500;
        text-align: justify;
        line-height: 1.5;
        color: rgba(255, 255, 255, 1);
        background: rgba(0, 0, 0, 0.5);
        -webkit-box-shadow: 0px 0px 20px 34px rgba(0, 0, 0, 0.5);
        box-shadow: 0px 0px 20px 34px rgba(0, 0, 0, 0.5);
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




        .box-encabezado .logo-encabezado img {
            -webkit-box-shadow: 0px 0px 50px 34px rgba(0, 0, 0, 0.5);
            box-shadow: 0px 0px 50px 34px rgba(0, 0, 0, 0.5);

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

        .s1 .logo-encabezado {
            padding: 0px;
            width: 450px;
            margin: 50px;
            /* margin: auto; */
            position: absolute;
            left: 1%;
            top: 6%;
            background: rgba(0, 0, 0, 0.5);
            /* margin-top: 40px; */
            /* margin-bottom: 40px; */
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
        <div class="box-encabezado">
            <div class="img-encabezado">
                <div class='logo-encabezado'>
                    <img class='img-responsive w-100 ' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/01-09-2022/img_lbqec_3.svg' alt='Logo Bogotá esta mejorando' title='Logo Bogotá esta mejorando'>
                </div>
            </div>
            <div>
                <div class="p-encabezado">
                    <p>La ciudad viene trabajando en un ambicioso plan que no solo busca recuperar la malla vial,
                        ponerse al día en obras e infraestructura sino también invitar a los ciudadanos y actores viales
                        a incorporar comportamientos que le permitan a la ciudad reducir la congestión y mejorar la
                        calidad del aire.</p>
                </div>
            </div>
        </div>
        <!-- Fin Seccion de encabezado  -->



        <div class='row encabezado'>
            <div class='row'>
                <div class='col-xs-12'>
                </div>

                <div class='col-xs-12 col-sm-12'>
                </div>
            </div>
        </div>

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
                                        <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-05-2022/2022-05-27_iconos_bec_1.png' alt='icono película' title='icono película'>
                                    </div>
                                </div>
                                <div class="txt-btn-bem">
                                    <div>
                                        <h3>
                                            Bogotá en obra
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
                                        <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-05-2022/2022-05-27_iconos_bec_2.png' alt='icono película' title='icono película'>
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
                                        <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-05-2022/2022-05-27_iconos_bec_3.png' alt='icono película' title='icono película'>
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
                                        <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-06-2022/menu-historias-tito.png' alt='icono película' title='icono película'>
                                    </div>
                                </div>
                                <div class="txt-btn-bem">
                                    <div>
                                        <h3>
                                            Historias de Bogotá en obra
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
                                        <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-05-2022/2022-05-27_iconos_bec_5.png' alt='icono película' title='icono película'>
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
                                    <h3 class="color1">Bogotá en obra</h3>
                                </div>
                                <div class="box-paragraph">
                                    <p>La ciudad actualmente cuenta con cientos de obras que apuestan al mejoramiento de
                                        malla vial y la movilidad de los bogotanos y bogotanas. Conoce en los siguientes
                                        videos, algunos informes de estas obras.</p>
                                </div>
                                <div class="box-videos-beo">



                                    <div class='video-beo'>
                                        <div class='embed-responsive embed-responsive-4by3'>
                                            <iframe width='100%' src='https://www.youtube.com/embed/xU90H0GTa3M' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
                                        </div>
                                        <div class='paragraph-video'>
                                            <p>La Aló Sur es una realidad con la finanaciación de la Alcaldía de Bogotá y el Gobierno Nacional. Serán 24 kilómetros de longitud. Conoce todos los detalles en este video.</p>
                                        </div>
                                    </div>

                                    <div class='video-beo'>
                                        <div class='embed-responsive embed-responsive-4by3'>
                                            <iframe width='100%' src='https://www.youtube.com/embed/F1OenZoKjK4' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
                                        </div>
                                        <div class='paragraph-video'>
                                            <p>La Aló Sur será una nueva vía de acceso por el sur de la ciudad. Conoce todos los detalles de esta nueva obra en este video.</p>
                                        </div>
                                    </div>

                                    <div class='video-beo'>
                                        <div class='embed-responsive embed-responsive-4by3'>
                                            <iframe width='100%' src='https://www.youtube.com/embed/qIofUDfMIzw' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
                                        </div>
                                        <div class='paragraph-video'>
                                            <p>Para falicitar la salida al Norte de la ciudad y de municipios aledaños, la Alcaldía de Bogotá con el Gobierno Nacional ya tienen financiada la ampliación de la carrera séptima. Mira este video y entérate de más detalles.</p>
                                        </div>
                                    </div>

                                    <div class='video-beo'>
                                        <div class='embed-responsive embed-responsive-4by3'>
                                            <iframe width='100%' src='https://www.youtube.com/embed/mX62iPS_jO0' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
                                        </div>
                                        <div class='paragraph-video'>
                                            <p> En el barrio Perdomo Alto de la localidad de Ciudad Bolívar avanza las obras de infraestructura que serán entregadas a finales de Noviembre. Mira este video y enterate de más detalles.</p>
                                        </div>
                                    </div>

                                    <div class='video-beo'>
                                        <div class='embed-responsive embed-responsive-4by3'>
                                            <iframe width='100%' src='https://www.youtube.com/embed/vK3ze6kJU-8' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
                                        </div>
                                        <div class='paragraph-video'>
                                            <p>La calle 13 se ampliará en el 2023. 11.4 kilómetros de carriles
                                                contenidos ayudarán a la movilidad de la ciudad . Mira este video y
                                                conoce más información.</p>
                                        </div>
                                    </div>
                                    <div class='video-beo'>
                                        <div class='embed-responsive embed-responsive-4by3'>
                                            <iframe width='100%' src='https://www.youtube.com/embed/3NF_x3EyyI' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
                                        </div>
                                        <div class='paragraph-video'>
                                            <p>A mediados del 2023 comenzará la ampliación de la Autopista Norte desde
                                                la calle 192 hasta la calle 245. Haz clic en este video y conoce más
                                                información. </p>
                                        </div>
                                    </div>
                                    <div class='video-beo'>
                                        <div class='embed-responsive embed-responsive-4by3'>
                                            <iframe width='100%' src='https://www.youtube.com/embed/A__jzX-51f8' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
                                        </div>
                                        <div class='paragraph-video'>
                                            <p>La movilidad de la ciudad mejorará con la ampliación de la Autopista
                                                Norte . Conoce todos los detalles en este video.</p>
                                        </div>
                                    </div>
                                    <div class='video-beo'>
                                        <div class='embed-responsive embed-responsive-4by3'>
                                            <iframe width='100%' src='https://www.youtube.com/embed/8iQ0JXn19vg' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
                                        </div>
                                        <div class='paragraph-video'>
                                            <p>La localidad de Usaquén se beneficiará con la extensión de la Carrera
                                                Séptima. Conoce detalles en este video.</p>
                                        </div>
                                    </div>
                                    <div class='video-beo'>
                                        <div class='embed-responsive embed-responsive-4by3'>
                                            <iframe width='100%' src='https://www.youtube.com/embed/gLNovOA1EBM' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
                                        </div>
                                        <div class='paragraph-video'>
                                            <p>La calle 13 ya se encuentra financiada por el Gobierno Nacional y ayudará
                                                de forma importante la movilidad de la Capital. Conoce detalles en este
                                                video.</p>
                                        </div>
                                    </div>
                                    <div class='video-beo'>
                                        <div class='embed-responsive embed-responsive-4by3'>
                                            <iframe width='100%' src='https://www.youtube.com/embed/Wq0cPUgTplM' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
                                        </div>
                                        <div class='paragraph-video'>
                                            <p>La Primera Línea del Metro avanza en su construcción. Mira este video y
                                                conoce lo que se está haciendo en la Calle 1ra con Avenida Caracas como
                                                parte de este proyecto.</p>
                                        </div>
                                    </div>
                                    <div class='video-beo'>
                                        <div class='embed-responsive embed-responsive-4by3'>
                                            <iframe width='100%' src='https://www.youtube.com/embed/bIu5_hdlnoI' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
                                        </div>
                                        <div class='paragraph-video'>
                                            <p>Se abre licitación para la construcción del segundo cable aéreo en
                                                Bogotá. Mira este video y conoce los detalles.</p>
                                        </div>
                                    </div>
                                    <div class='video-beo'>
                                        <div class='embed-responsive embed-responsive-4by3'>
                                            <iframe width='100%' src='https://www.youtube.com/embed/oP7EYbGxkyY' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
                                        </div>
                                        <div class='paragraph-video'>
                                            <p>Avanza la obra de la prolongación de la Avenida Laureano Gómez. Conoce
                                                los detalles en este video.</p>
                                        </div>
                                    </div>
                                    <div class='video-beo'>
                                        <div class='embed-responsive embed-responsive-4by3'>
                                            <iframe width='100%' src='https://www.youtube.com/embed/uGQj25Dkvi0' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
                                        </div>
                                        <div class='paragraph-video'>
                                            <p>Conoce en este video cómo avanza el patio taller de la primera línea del
                                                Metro de Bogotá</p>
                                        </div>
                                    </div>
                                    <div class='video-beo'>
                                        <div class='embed-responsive embed-responsive-4by3'>
                                            <iframe width='100%' src='https://www.youtube.com/embed/HZuj-BX8ID8' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
                                        </div>
                                        <div class='paragraph-video'>
                                            <p>La Localidad de San Cristóbal tendrá una pronta solución para su
                                                movilidad con el nuevo cable. Conoce los detalles en este video.</p>
                                        </div>
                                    </div>
                                    <div class='video-beo'>
                                        <div class='embed-responsive embed-responsive-4by3'>
                                            <iframe width='100%' src='https://www.youtube.com/embed/dd5zonMBZtM' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
                                        </div>
                                        <div class='paragraph-video'>
                                            <p>La 116 está luciendo unos andenes seguros para los peatones. Conócelos en
                                                este video.</p>
                                        </div>
                                    </div>
                                    <div class='video-beo'>
                                        <div class='embed-responsive embed-responsive-4by3'>
                                            <iframe width='100%' src='https://www.youtube.com/embed/x7Pvc5Ph93M' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
                                        </div>
                                        <div class='paragraph-video'>
                                            <p>La Av José Celestino Mutis será ampliada en dos calzadas, conoce los
                                                detalles en este video.</p>
                                        </div>
                                    </div>
                                    <div class='video-beo'>
                                        <div class='embed-responsive embed-responsive-4by3'>
                                            <iframe width='100%' src='https://www.youtube.com/embed/o3DDwDCz_-I' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
                                        </div>
                                        <div class='paragraph-video'>
                                            <p>El intercambiador de la calle 72 avanza como parte de las obras de la
                                                primera línea del Metro. En este video los detalles.</p>
                                        </div>
                                    </div>
                                    <div class='video-beo'>
                                        <div class='embed-responsive embed-responsive-4by3'>
                                            <iframe width='100%' src='https://www.youtube.com/embed/oZH2jB8RWL0' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
                                        </div>
                                        <div class='paragraph-video'>
                                            <p>La Carrera séptima se transformará con el Corredor Verde. Conoce todos
                                                los detalles en este video.</p>
                                        </div>
                                    </div>
                                    <div class='video-beo'>
                                        <div class='embed-responsive embed-responsive-4by3'>
                                            <iframe width='100%' src='https://www.youtube.com/embed/JYIX8JtdbEc' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
                                        </div>
                                        <div class='paragraph-video'>
                                            <p>El Patio Taller avanza como columna vertebral del proyecto de la primera
                                                línea del Metro de Bogotá. Mira este video y conoce los detalles.</p>
                                        </div>
                                    </div>
                                    <div class='video-beo'>
                                        <div class='embed-responsive embed-responsive-4by3'>
                                            <iframe width='100%' src='https://www.youtube.com/embed/-F948HC9ZNw' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
                                        </div>
                                        <div class='paragraph-video'>
                                            <p>La extensión de la Av Laureano Gómez es una realidad. Conoce los detalles
                                                en este video.</p>
                                        </div>
                                    </div>

                                    <div class="video-beo">
                                        <div class='embed-responsive embed-responsive-4by3'>
                                            <iframe width="100%" src="https://www.youtube.com/embed/cLsR1RteF4s" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                        <div class="paragraph-video">
                                            <p>En la localidad de Bosa se construye la institución educativa IED. La
                                                Palestina. Mira este video y conoce los detalles.</p>
                                        </div>
                                    </div>

                                    <div class="video-beo">
                                        <div class='embed-responsive embed-responsive-4by3'>
                                            <iframe width="100%" src="https://www.youtube.com/embed/9F_d__v3T0g" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                        <div class="paragraph-video">
                                            <p>El metro beneficiará a 2.9 millones de personas y avanza rápidamente.
                                                Mira este video y conoce los detalles.</p>
                                        </div>
                                    </div>

                                    <div class="video-beo">
                                        <div class='embed-responsive embed-responsive-4by3'>
                                            <iframe width="100%" src="https://www.youtube.com/embed/QpzW-cbfuW0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                        <div class="paragraph-video">
                                            <p>280.000 huecos ha tapado la administración desde que inicio el plan de
                                                choque para mejorar la malla vial. Mira este video y conoce los detalles
                                                de este plan.</p>
                                        </div>
                                    </div>

                                    <div class="video-beo">
                                        <div class='embed-responsive embed-responsive-4by3'>
                                            <iframe width="100%" src="https://www.youtube.com/embed/iNbQBHBr9Nk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                        <div class="paragraph-video">
                                            <p>Con la extensión de la Av Caracas desde Molinos hasta el Portal de Usme
                                                en el sur de la ciudad, acabará con la congestión de esta zona. Mira
                                                este video y conoce detalles de la obra.</p>
                                        </div>
                                    </div>

                                    <div class="video-beo">
                                        <div class='embed-responsive embed-responsive-4by3'>
                                            <iframe width="100%" src="https://www.youtube.com/embed/bDeliwBXFOg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                        <div class="paragraph-video">
                                            <p>La extensión de la Av Ciudad de Cali conectará San Bernandino y el
                                                municipio de Soacha. Mira este video y conoce detalles.</p>
                                        </div>
                                    </div>

                                    <div class="video-beo">
                                        <div class='embed-responsive embed-responsive-4by3'>
                                            <iframe width="100%" src="https://www.youtube.com/embed/TY5qZivoKTI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                        <div class="paragraph-video">
                                            <p>En este video te contaremos cómo la ampliación de la Av Rincón desde la
                                                Av Boyacá hasta la Cra 91, promete descongestionar la movilidad a los
                                                que quieran llegar a Suba por esta vía.</p>
                                        </div>
                                    </div>

                                    <div class="video-beo">
                                        <div class='embed-responsive embed-responsive-4by3'>
                                            <iframe width="100%" src="https://www.youtube.com/embed/AbtgM1ggChA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                        <div class="paragraph-video">
                                            <p>El barrio 12 de Octubre está en obra y la intervención de sus aceras y
                                                pasos peatonales busca beneficiar la accesibilidad y protección de los
                                                peatones. Mira este video y conoce los detalles.</p>
                                        </div>
                                    </div>

                                    <div class="video-beo">
                                        <div class='embed-responsive embed-responsive-4by3'>
                                            <iframe width="100%" src="https://www.youtube.com/embed/-Ij6-KQeCDQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                        <div class="paragraph-video">
                                            <p>La localidad de Kennedy y Bosa se beneficiará con la construcción de este
                                                puente vehícular el cual conectará la ciudad de Oriente a Sur. Mira este
                                                video y conoce más detalles.</p>
                                        </div>
                                    </div>

                                    <div class="video-beo">
                                        <div class='embed-responsive embed-responsive-4by3'>
                                            <iframe width="100%" src="https://www.youtube.com/embed/jIl4l4om338" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                        <div class="paragraph-video">
                                            <p>El ciclo puente de los Molinos de 290 metros brindará seguridad a los
                                                ciclistas para cruzar la autopista norte. Si montas Bici este video te
                                                interesa.</p>
                                        </div>
                                    </div>

                                    <div class="video-beo">
                                        <div class='embed-responsive embed-responsive-4by3'>
                                            <iframe width="100%" src="https://www.youtube.com/embed/ZyJcky2uCeY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                        <div class="paragraph-video">
                                            <p>La ciudad se encuentra construyendo la Av Guayacanes que ayudará a
                                                descongestionar esta zona de la ciudad con 13 km.</p>
                                        </div>
                                    </div>


                                    <div class='video-beo'>
                                        <div class='embed-responsive embed-responsive-4by3'>
                                            <iframe width='100%' src='https://www.youtube.com/embed/c5uK2fXthPk' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
                                        </div>
                                        <div class='paragraph-video'>
                                            <p>Celebremos las obras que se están haciendo en Bogotá porque va a mejorar
                                                la calidad de vida de los habitantes de Bogotá. Mira este video.</p>
                                        </div>
                                    </div>

                                    <div class='video-beo'>
                                        <div class='embed-responsive embed-responsive-4by3'>
                                            <iframe width='100%' src='https://www.youtube.com/embed/YLwNRyBb2bY' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
                                        </div>
                                        <div class='paragraph-video'>
                                            <p>Celebremos la nueva Aló Sur. Mira este video</p>
                                        </div>
                                    </div>

                                    <div class='video-beo'>
                                        <div class='embed-responsive embed-responsive-4by3'>
                                            <iframe width='100%' src='https://www.youtube.com/embed/onM-dEO5GiE' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
                                        </div>
                                        <div class='paragraph-video'>
                                            <p>Celebremos la ampliación de la Autopista Norte. Mira este video y celebra
                                                con nosotros</p>
                                        </div>
                                    </div>

                                    <div class='video-beo'>
                                        <div class='embed-responsive embed-responsive-4by3'>
                                            <iframe width='100%' src='https://www.youtube.com/embed/wSSzNgw6cd4' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
                                        </div>
                                        <div class='paragraph-video'>
                                            <p>Celebremos la nueva Calle 13. Mira este video y celebra con nosotros</p>
                                        </div>
                                    </div>
                                    <div class='video-beo'>
                                        <div class='embed-responsive embed-responsive-4by3'>
                                            <iframe width='100%' src='https://www.youtube.com/embed/Xmn8pd4pEnU' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
                                        </div>
                                        <div class='paragraph-video'>
                                            <p>Celebremos la ampliación de la Cra Séptima. Mira este video y celebra con
                                                nosotros</p>
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
                                    <p>Las grandes obras de infraestructura vial y de transporte que los bogotanos
                                        añoraban desde hace años hoy están en plena ejecución. La transformación comenzó
                                        para que la ciudad dé un gran salto hacia una movilidad sostenible en la que
                                        todos podemos movernos y acceder a nuevas y mejores oportunidades.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Seccion Detalle las obras  -->

                        <div class='row'>

                            <div class='col-xs-12 visible-xs'>
                                <div class="descripcion">
                                    <h3 class="color2">Avenida 68, Alimentadora de la Línea Metro</h3>

                                    <dl>
                                        <dt>Longitud:</dt>
                                        <dd>Desde Autopista sur hasta calle 100 con 9ª (17 km)</dd>
                                    </dl>
                                    <dl>
                                        <dt>Costo total:</dt>
                                        <dd>$709.430 millones entre obra e interventoría</dd>
                                    </dl>
                                    <p>Esta obra de 17 kilómetros consta de nueve tramos y beneficiará a los habitantes
                                        de 10 localidades de Bogotá que reducirán sus tiempos de viaje al 50% del tiempo
                                        a través del sistema de transporte masivo de la ciudad, pues se conectará con la
                                        Primera Línea de Metro y con 5 troncales.</p>
                                    <br>
                                    <p class="ver">Ver más sobre esta obra en ejecución: <a href="https://www.idu.gov.co/page/avenida-68" target="_blank" rel="noopener noreferrer">https://www.idu.gov.co/page/avenida-68</a></p>

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
                                                <p>Clic aquí para ver mapa Avenida 68 Alimentadora de la Linea Metro</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class='col-sm-6 hidden-xs'>
                                <div class="descripcion">
                                    <h3 class="color2">Avenida 68, Alimentadora de la Línea Metro</h3>

                                    <dl>
                                        <dt>Longitud:</dt>
                                        <dd>Desde Autopista sur hasta calle 100 con 9ª (17 km)</dd>
                                    </dl>
                                    <dl>
                                        <dt>Costo total:</dt>
                                        <dd>$709.430 millones entre obra e interventoría</dd>
                                    </dl>
                                    <p>Esta obra de 17 kilómetros consta de nueve tramos y beneficiará a los habitantes
                                        de 10 localidades de Bogotá que reducirán sus tiempos de viaje al 50% del tiempo
                                        a través del sistema de transporte masivo de la ciudad, pues se conectará con la
                                        Primera Línea de Metro y con 5 troncales.</p>
                                    <br>
                                    <p class="ver">Ver más sobre esta obra en ejecución: <a href="https://www.idu.gov.co/page/avenida-68" target="_blank" rel="noopener noreferrer">https://www.idu.gov.co/page/avenida-68</a></p>

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
                                    <h3 class="color2">Avenida Ciudad de Cali, Alimentadora de la Línea del Metro</h3>
                                    <dl>
                                        <dt>Longitud:</dt>
                                        <dd>Desde la Av. Circunvalar del Sur hasta la Av. Manuel Cepeda Vargas (7,4 km)
                                        </dd>
                                    </dl>
                                    <dl>
                                        <dt>Costo total:</dt>
                                        <dd>2,6 billones de pesos</dd>
                                    </dl>
                                    <p>Este corredor beneficiará a 1 millón 100 mil habitantes de las localidades de
                                        Bosa (14 barrios) y Kennedy (22 barrios), aumentará la frecuencia y velocidad de
                                        viaje en el transporte público, y facilitará la conexión con el municipio de
                                        Soacha. Su construcción contempla 8 estaciones de TransMilenio nuevas, 7
                                        cicloestaciones, 1 puente peatonal de acceso al sistema y la futura estación del
                                        Metro, 1 puente peatonal y conexión a través de una pasarela, con la futura
                                        estación del Metro. Además tendrá una glorieta elevada de tráfico mixto, 1
                                        glorieta vehicular a nivel para buses biarticulados y una ciclorruta
                                        bidireccional por el costado occidental.</p>
                                    <br>
                                    <p class="ver">Ver más sobre esta obra en ejecución: <a href="https://www.idu.gov.co/page/avenida-ciudad-de-cali" target="_blank" rel="noopener noreferrer">https://www.idu.gov.co/page/avenida-ciudad-de-cali</a>
                                    </p>
                                </div>
                            </div>

                            <div class='col-xs-12 col-sm-6'>
                                <div class='img-descripcion imgd-2'>
                                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/N-juJJ5tKMk" title="Avenida Ciudad de Cali, Alimentadora de la Línea del Metro" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
                                    <h3 class="color2">Avenida Rincón por Boyacá</h3>
                                    <dl>
                                        <dt>Longitud:</dt>
                                        <dd>Desde la Carrera 91 hasta la Boyacá y la intersección de las dos vías</dd>
                                    </dl>
                                    <p>El proyecto en construcción contempla dos tramos principales: la prolongación de
                                        la Avenida Rincón, desde la Carrera 91 hasta la Boyacá; y la intersección de las
                                        dos Avenidas.</p>
                                    <p>Tendrá dos conexiones clave: operacional con la Troncal Américas de TM e
                                        intermodal con Primera Línea de Metro de Bogotá a la altura de la Av. 1º. de
                                        Mayo. Contempla 137.897 m2 de espacio público, 75.212,78 m2 de zonas verdes,
                                        421,25 metros de ciclorruta en andenes, 5.466,17 metros de ciclorruta continua,
                                        242,58 m de ciclorruta reconstruida. La operación de transporte público por este
                                        corredor se hará con buses cero emisiones.</p>
                                    <p>El proyecto se ubica en la localidad de Suba, donde se espera que beneficie a
                                        1.200.000 personas, entre los habitantes de las UPZ Niza, Rincón y Floresta, con
                                        sus 82 barrios, y ciudadanía que transita por las vías en ejecución.</p>

                                </div>
                            </div>
                            <div class='col-xs-12 col-sm-6'>
                                <div class='img-descripcion imgd-4'>
                                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/_KSi20NK_Qk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>


                            </div>
                            <div class='col-sm-6 hidden-xs'>
                                <div class="descripcion">
                                    <h3 class="color2">Avenida Rincón por Boyacá</h3>
                                    <dl>
                                        <dt>Longitud:</dt>
                                        <dd>Desde la Carrera 91 hasta la Boyacá y la intersección de las dos vías</dd>
                                    </dl>
                                    <p>El proyecto en construcción contempla dos tramos principales: la prolongación de
                                        la Avenida Rincón, desde la Carrera 91 hasta la Boyacá; y la intersección de las
                                        dos Avenidas.</p>
                                    <p>Tendrá dos conexiones clave: operacional con la Troncal Américas de TM e
                                        intermodal con Primera Línea de Metro de Bogotá a la altura de la Av. 1º. de
                                        Mayo. Contempla 137.897 m2 de espacio público, 75.212,78 m2 de zonas verdes,
                                        421,25 metros de ciclorruta en andenes, 5.466,17 metros de ciclorruta continua,
                                        242,58 m de ciclorruta reconstruida. La operación de transporte público por este
                                        corredor se hará con buses cero emisiones.</p>
                                    <p>El proyecto se ubica en la localidad de Suba, donde se espera que beneficie a
                                        1.200.000 personas, entre los habitantes de las UPZ Niza, Rincón y Floresta, con
                                        sus 82 barrios, y ciudadanía que transita por las vías en ejecución.</p>

                                </div>
                            </div>
                        </div>
                        <!-- Fin   -->
                        <br><br>
                        <div class='row'>
                            <div class='col-xs-12 col-sm-6 col-md-6'>
                                <div class="descripcion">
                                    <h3 class="color2">Primera Línea del Metro </h3>
                                    <p>Gracias a los aportes de la Nación y el Distrito, desde el año 2017 se ha venido
                                        ejecutando la Primera Línea del Metro de Bogotá, el proyecto de infraestructura
                                        más importante del país, cumpliendo diferentes hitos que han permitido lograr el
                                        mayor avance en la construcción de este sistema de transporte que necesita la
                                        ciudad.</p>
                                    <p>Como parte de los hitos del proyecto, el pasado 20 de octubre de 2020, la Empresa
                                        Metro de Bogotá (EMB) y el concesionario Metro Línea 1 firmaron el acta de
                                        inicio de obras, lo que permitió que en 2021, el 16 de agosto y el 17 de
                                        septiembre, respectivamente, se diera inicio a las obras del patio taller, en el
                                        sector de El Corzo (Bosa), y del intercambiador vial en la calle 72 con avenida
                                        Caracas.</p>
                                    <p>Conozca aquí el detalle de estas obras previas: </p>


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
                                                            <p>El metro ya está en obra. El pasado 17 de agosto comenzó
                                                                la adecuación de los terrenos del patio taller en el
                                                                sector de El Corzo, en la localidad de Bosa. Esta obra
                                                                se desarrollará en tres frentes de trabajo de manera
                                                                simultánea, en un terreno de 35,9 hectáreas, el
                                                                equivalente de unas 50 canchas de fútbol.</p>
                                                            <p>En el patio taller se alojará el corazón de la operación
                                                                de la Primera Línea del Metro de Bogotá (PLMB); contará
                                                                inicialmente con capacidad para el parqueo de 30 trenes,
                                                                pero, por contrato, debe quedar diseñado y habilitado el
                                                                espacio para 60 trenes.</p>
                                                            <p>Lo anterior, debido a la demanda futura que vaya teniendo
                                                                el sistema. Asimismo, el complejo incluirá vías de
                                                                acceso al patio y de salida de los trenes a la línea
                                                                comercial, se instalarán vías férreas, bodegas, talleres
                                                                para arreglos mecánicos y eléctricos de los trenes,
                                                                zonas de lavado, planta de tratamiento de agua,
                                                                edificios administrativos, etc., de tal manera que
                                                                asegure, día a día, la prestación del servicio.</p>
                                                            <br>
                                                            <img class='img-responsive w-100 ' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-01-2022/patio_taller.webp' alt='Foto de Patio Taller' title='Foto de Patio Taller'>
                                                            <br>
                                                            <p>De este modo, en la localidad de Bosa quedará el punto de
                                                                partida de la Primera Línea del Metro de Bogotá. Durante
                                                                su construcción no se verá perjudicada la comunidad,
                                                                teniendo en cuenta que los predios donde se está
                                                                construyendo el patio taller no interfieren con
                                                                viviendas, colegios, ni instalaciones colindantes.</p>
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
                                                        <p>El pasado 17 de septiembre comenzaron las obras del
                                                            intercambiador vial en el sector de la avenida Caracas con
                                                            calle 72, en la localidad de Chapinero. En este lugar, el
                                                            concesionario Metro Línea 1, encargado de la construcción de
                                                            la Primera Línea del Metro de Bogotá, realizará un
                                                            intercambiador vial de dos (2) niveles con el fin de mejorar
                                                            el flujo vehicular.</p>
                                                        <p>Se construirá un paso a desnivel que permitirá el cruce de la
                                                            calle 72 por debajo de la carrera 15 y la avenida Caracas
                                                            sin interrumpir el flujo vehicular, con lo cual se dará
                                                            continuidad a los flujos de ambos sentidos (occidente –
                                                            oriente y viceversa), priorizando la troncal de TransMilenio
                                                            y, en el futuro, el viaducto elevado de la Primera Línea del
                                                            Metro de Bogotá.</p>
                                                        <br>
                                                        <img class='img-responsive w-100 ' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-01-2022/intercambiador_calle72.webp' alt=' Foto Intercambiador Calle 72' title=' Foto Intercambiador Calle 72'>
                                                        <br>
                                                        <p>La obra del intercambiador vial de la calle 72, está
                                                            programada para su puesta en operación el primer semestre de
                                                            2023 y forma parte de la llamada fase previa del proyecto,
                                                            la cual comenzó el 20 de octubre de 2020 y se desarrollará
                                                            en 27 meses, hasta enero de 2023, cuando comenzarán las
                                                            obras de construcción del viaducto.</p>
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

                                    <p>Esta vía de 13 km de longitud atraviesa las localidades de Bosa y Kennedy. Es una
                                        enorme avenida con 6 carriles (tres por cada sentido) andenes amplios y una
                                        ciclorruta en toda su extensión. Se trata de una vía paralela a las avenidas
                                        Ciudad de Cali y Boyacá, que también se conectará con la Avenida Bosa para salir
                                        de la ciudad por el vecino municipio de Soacha.</p>
                                    <p>Esta obra beneficiará a 1.500.000 personas y habitantes de 130 barrios que hoy en
                                        día se demoran hasta 2 horas desplazándose desde el suroccidente al centro de la
                                        ciudad, cuando la obra termine podrán hacerlo en tan solo 30 minutos.</p>
                                    <p>Tendrá dos conexiones clave: operacional con la Troncal Américas de TM e
                                        intermodal con Primera Línea de Metro de Bogotá a la altura de la Av. 1º. de
                                        Mayo. Contempla 137.897 m2 de espacio público, 75.212,78 m2 de zonas verdes,
                                        421,25 metros de ciclorruta en andenes, 5.466,17 metros de ciclorruta continua,
                                        242,58 m de ciclorruta reconstruida. La operación de transporte público por este
                                        corredor se hará con buses cero emisiones.</p>
                                    <br>
                                    <p class="ver">Ver más sobre esta obra en ejecución: <a href="https://www.idu.gov.co/page/avenida-68" target="_blank" rel="noopener noreferrer">https://www.idu.gov.co/page/avenida-68</a></p>

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

                                    <p>Esta vía de 13 km de longitud atraviesa las localidades de Bosa y Kennedy. Es una
                                        enorme avenida con 6 carriles (tres por cada sentido) andenes amplios y una
                                        ciclorruta en toda su extensión. Se trata de una vía paralela a las avenidas
                                        Ciudad de Cali y Boyacá, que también se conectará con la Avenida Bosa para salir
                                        de la ciudad por el vecino municipio de Soacha.</p>
                                    <p>Esta obra beneficiará a 1.500.000 personas y habitantes de 130 barrios que hoy en
                                        día se demoran hasta 2 horas desplazándose desde el suroccidente al centro de la
                                        ciudad, cuando la obra termine podrán hacerlo en tan solo 30 minutos.</p>
                                    <p>Tendrá dos conexiones clave: operacional con la Troncal Américas de TM e
                                        intermodal con Primera Línea de Metro de Bogotá a la altura de la Av. 1º. de
                                        Mayo. Contempla 137.897 m2 de espacio público, 75.212,78 m2 de zonas verdes,
                                        421,25 metros de ciclorruta en andenes, 5.466,17 metros de ciclorruta continua,
                                        242,58 m de ciclorruta reconstruida. La operación de transporte público por este
                                        corredor se hará con buses cero emisiones.</p>
                                    <br>
                                    <p class="ver">Ver más sobre esta obra en ejecución: <a href="https://www.idu.gov.co/page/avenida-68" target="_blank" rel="noopener noreferrer">https://www.idu.gov.co/page/avenida-68</a></p>

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
                                <p>La Unidad de Mantenimiento Vial (UMV), como encargada de conservar la malla vial
                                    local, intermedia y rural, así como la cicloinfraestructura, en compañía del
                                    Instituto de Desarrollo Urbano (IDU) avanzan en el Plan Tapahuecos dentro de la
                                    estrategia de La Bogotá que Estamos Construyendo que incluye reparar 56.000 huecos y
                                    hacer mantenimiento a 18,7 km/carril (equivalentes a 117 calles de doble carril).
                                </p>
                                <br>
                                <p class="ver">Ver más sobre el Plan Tapahuecos: <a href="https://experience.arcgis.com/experience/a061a336dc2a4a8b9aebb57e2924f24d/" target="_blank" rel="noopener noreferrer">https://experience.arcgis.com/experience/a061a336dc2a4a8b9aebb57e2924f24d/</a>
                                </p>
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
                                    <p>A continuación puedes conocer el detalles de los reportes de huecos y los avences
                                        de los mismos.</p>
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
                                    <h3 class="color4">Historias de Bogotá en obra</h3>
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
                                    <p>En esta sección encontrarás historias de cómo Bogotá está en obra, cómo podemos
                                        ayudar a descongestionar la ciudad y las alternativas que tenemos para
                                        movilizarnos. Disfruta cada uno de los siguientes capítulos.</p>
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
                                <p>Bloquear las intersecciones parece un acto inofensivo, pero no lo es tanto. Hacerlo
                                    genera grandes trancones en la ciudad. Mira este video y compartelo.</p>
                            </div>
                            <div class='video'>
                                <div class='embed-responsive embed-responsive-16by9'>
                                    <iframe width='100%' src="https://www.youtube.com/embed/T7xPeCBFgFs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                                <h4>Mal parqueados</h4>
                                <p>Los mal parqueados una pesadilla que pone en riesgo a los peatones y pone en caos la
                                    movilidad de la ciudad. Mira este video y compartelo.</p>
                            </div>
                            <div class='video'>
                                <div class='embed-responsive embed-responsive-16by9'>
                                    <iframe width='100%' src="https://www.youtube.com/embed/Qa_1vnJzGfc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                                <h4>25 mil ojos</h4>
                                <p>Siéntete seguro en TransMilenio, ahora tienes 25 mil ojos cuidándote. En este vídeo
                                    te contamos cómo te acompañamos y te cuidamos durante tus recorridos.</p>
                            </div>
                            <div class='video'>
                                <div class='embed-responsive embed-responsive-16by9'>
                                    <iframe width='100%' src="https://www.youtube.com/embed/wJPwr2E33NQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                                <h4>Transporte público</h4>
                                <p>Ir en tu bici, dejarla parqueada en un lugar seguro, continuar en un TransMilenio tu
                                    recorrido y tomar un bus alimentador de manera ágil y segura hoy es una realidad.
                                    Mira este video e infórmate.</p>
                            </div>
                            <div class='video'>
                                <div class='embed-responsive embed-responsive-16by9'>
                                    <iframe width='100%' src="https://www.youtube.com/embed/8OB5vG487W8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                                <h4>Buses eléctricos</h4>
                                <p>Se está respirando un nuevo aire en el sistema de Transporte público de Bogotá con la
                                    flota de buses eléctricos que están funcionando. Mira este video y conoce todos los
                                    detalles.</p>
                            </div>
                            <div class='video'>
                                <div class='embed-responsive embed-responsive-16by9'>
                                    <iframe width='100%' src="https://www.youtube.com/embed/gDZlPbRP2wE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                                <h4>TransmiApp</h4>
                                <p>TransMilenio la está sacando del estadio con TransmiApp, una aplicación que te brinda
                                    información certera y verás de todo acerca de este sistema de transporte público.
                                    Mira este video e infórmate.</p>
                            </div>
                            <div class='video'>
                                <div class='embed-responsive embed-responsive-16by9'>
                                    <iframe width='100%' src="https://www.youtube.com/embed/qgh2TDS5Py4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                                <h4>Tu llave</h4>
                                <p>Tu tienes la llave para no perder tu ritmo al usar el transporte público en la
                                    ciudad. Conoce todos los beneficios de la tarjeta TULLAVE en este video.</p>
                            </div>
                            <div class='video'>
                                <div class='embed-responsive embed-responsive-16by9'>
                                    <iframe width='100%' src="https://www.youtube.com/embed/ECspQF9KOCY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                                <h4>¿Cómo está mejorando Bogotá?</h4>
                                <p>Moverte en Bogotá con medios de transporte alternativos, es una buena opción en
                                    tiempos de obra . Mira este video y conoce que te ofrece el Distrito para esta
                                    alternativa transporte y móntate a esta onda.</p>
                            </div>
                            <div class='video'>
                                <div class='embed-responsive embed-responsive-16by9'>
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/2IsHPlMG_V0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                                <h4>¿En que va el plan de choque?</h4>
                                <p>La ciudad entró en obra y tapar los huecos es una prioridad . Mira este video y
                                    conoce detalles de cómo se está haciendo</p>
                            </div>
                            <div class='video'>
                                <div class='embed-responsive embed-responsive-16by9'>
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/kNSHg2uvDck" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                                <h4>Bogotá está mejorando construyendo la Troncal de la Av. 68</h4>
                                <p>Cientos de obras se realizan hoy en Bogotá. La Av 68 es una de las más
                                    representativas . Mira este video y conoce detalles</p>
                            </div>
                            <div class='video'>
                                <div class='embed-responsive embed-responsive-16by9'>
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/SQtQltzt9fk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                                <h4>Cómo aplicar a la excepción de carro compartido</h4>
                                <p>Compartir el carro es una forma de ayudar a construir la ciudad que queremos.
                                    Descontamina y ayuda a la movilidad . Mira este video y compártelo.</p>
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
                                    <p>Encuentra toda la actualidad de La Bogotá que Estamos Construyendo en está
                                        sección.</p>
                                </div>
                                <br>
                            </div>
                        </div>
                        <hr>

                        <div class="box-boletines">
                            <div class='row'>
                                <!-- collapse_boletines21 -->
                                <div class='panel-group ' id='accordion_boletines21' role='tablist ' aria-multiselectable='true'>

                                    <!-- collapse_Oct22 -->
                                    <div class='panel panel-default'>
                                        <div class='panel-heading' role='tab' id='heading_Oct22'>
                                            <h4 class='panel-title'>
                                                <a role='button' data-toggle='collapse' data-parent='#accordion_boletines21' href='#collapse_Oct22' aria-expanded='true' aria-controls='collapse_Oct22'>
                                                    Boletines Octubre 2022
                                                </a>
                                            </h4>
                                        </div>
                                        <div id='collapse_Oct22' class='panel-collapse collapse in' role='tabpanel' aria-labelledby='heading_Oct22'>
                                            <div class='panel-body'>

                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://drive.google.com/file/d/1Ukk_uO-W1-w8k3t7VAeuWJ-0gG8UyMSP/view?usp=sharing'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 198</h4>
                                                                <i>lunes, 10 de octubre de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Dos servicios zonales contarán con buses de refuerzo. En la UMV se construyen espacios de respeto y tolerancia 5 datos de la obra Patio La Reforma</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://drive.google.com/file/d/1YTn99Wf4qAs0xFX9lUzOkskMCyyz3Kkd/view?usp=sharing'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 197</h4>
                                                                <i>viernes, 7 de octubre de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Se inicia mantenimiento en San Cristóbal Norte. Este domingo habrá desvíos por desarrollo de la ‘Caminata de la Solidaridad’. Con masiva participación, se realizó el ‘Foro de Promotores Escolares en Seguridad Vial 2022’.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://drive.google.com/file/d/1t4sgwTeDvk-IxBUC7eGwCbb1itinm5RN/view?usp=sharing'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 196</h4>
                                                                <i>jueves, 6 de octubre de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Así fueron las obras de parcheo que realizó la UMV en Teusaquillo, durante septiembre. Semana de la Seguridad Vial con los operadores del Sistema de Transporte de Bogotá. Planes del Sistema de Bicicletas Compartidas de Bogotá permiten realizar viajes desde $131.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://drive.google.com/file/d/1GVZxAB73JUeR3ZqTYblAdqAeRIWIFBWT/view?usp=sharing'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 195</h4>
                                                                <i>miércoles, 5 de octubre de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Cierres por obra en la avenida 68. Con material reciclado, la UMV mejora algunas vías de la ciudad. Feria de empleo en el ‘Portal El Dorado’.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://drive.google.com/file/d/1cWU-IARPBfRwcom6QZEoXEt8TZJzqwnk/view?usp=sharing'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 194</h4>
                                                                <i>martes, 4 de octubre de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Trabajos nocturnos en la localidad de Tunjuelito. En el barrio El Rincón, de la localidad de Suba, la UMV realizó el cambio de losas de una importante vía. Gracias a 100 mil nuevos códigos QR, en buses de TransMilenio, más usuarios podrán acceder a la Biblioteca Digital de Bogotá.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://drive.google.com/file/d/1HP6-MwfXHGdRKfATEQ_wMJHa1y8PZP6Y/view?usp=sharing'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 193</h4>
                                                                <i>lunes, 3 de octubre de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>La UMV hace rehabilitación a una importante vía en Santa Teresa, Usaquén. Este lunes entra en operación una nueva ruta zonal en San Cristóbal y comienzan ajustes de otras rutas en Engativá. Conozca obra de la extensión de la Caracas Sur.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /#fin _Oct22 -->

                                    <!-- collapse_Sep22 -->
                                    <div class='panel panel-default'>
                                        <div class='panel-heading' role='tab' id='heading_Sep22'>
                                            <h4 class='panel-title'>
                                                <a role='button' data-toggle='collapse' data-parent='#accordion_boletines21' href='#collapse_Sep22' aria-expanded='true' aria-controls='collapse_Sep22'>
                                                    Boletines Septiembre 2022
                                                </a>
                                            </h4>
                                        </div>
                                        <div id='collapse_Sep22' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_Sep22'>
                                            <div class='panel-body'>

                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://drive.google.com/file/d/1m_F-jR2c_ab6gnjMvmBGCzM3Mdua1sez/view?usp=sharing'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 192</h4>
                                                                <i>viernes, 30 de septiembre de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Conozca el cierre total del andén y la ciclorruta de la Av. carrera 68 entre Av. calle 53 y Av. calle 63. En lo corrido de 2022, la UMV ha mejorado más de 3.000 segmentos viales en Bogotá. Este fin de semana habrá desvíos por carrera atlética en Bogotá y cierre por obras en una estación.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://drive.google.com/file/d/1qiwuw2bHeGxyWxEtygu8-wwHAr6avZxo/view?usp=sharing'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 191</h4>
                                                                <i>jueves, 29 de septiembre de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Cierre parcial de andén y ciclorruta en la autonorte. Cambios en la ruta zonal 488 Lomas – Rincón de Venecia y en las rutas alimentadoras 16-10 y 16-8. Así es el trabajo que realizamos en el barrio Santiago Pérez, Rafael Uribe Uribe.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://drive.google.com/file/d/12yFQlkNItHXSTwS69tnUJdeBeNjwS53j/view?usp=sharing'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 190</h4>
                                                                <i>miércoles, 28 de septiembre de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Conozca el cierre por carriles no simultáneos sobre el puente vehicular de la Autosur con Av. carrera 50. Cierres por avance de la obra en la avenida Boyacá. Cambio en horario de la ruta N16.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://drive.google.com/file/d/1C4EKUN1PsZqiYxKInlUlO8FHoLz1q5G6/view?usp=sharing'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 189</h4>
                                                                <i>martes, 27 de septiembre de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Mejoras en espacio público de la calle 80. Los habitantes del barrio Paso Ancho, Bosa, disfrutan de un mejor espacio público. Cambios en las rutas BD909 y C146.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://drive.google.com/file/d/1oq0bjyBdKB4EfBto6t8ViBLslNkI9DNV/view?usp=sharing'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 188</h4>
                                                                <i>lunes, 26 de septiembre de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Con música arrancó la ‘XV Semana de la Bici de Bogotá’. Así fue la participación de la UMV en el Venue de la Bici. Este lunes comienzan a aplicar cambios operativos en varias rutas en Engativá.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://drive.google.com/file/d/1ionvYpioXyGTMF73X7dT_hjj-Lij6-ka/view?usp=sharing'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 187</h4>
                                                                <i>viernes, 23 de septiembre de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Cierres por avance de obra en la avenida Ciudad de Cali. La UMV se une a la celebración de la Semana de la Bici. La ruta DH601 modifica su recorrido y cambia su nombre.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://drive.google.com/file/d/1npjzkt5CSg0RBdxW-j5i3U0Urv6gdkmw/view?usp=sharing'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 186</h4>
                                                                <i>jueves, 22 de septiembre de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>El IDU refuerza frentes de obra para mantenimiento vial. Actividades lúdicas y culturales se toman el Sistema de Transporte durante el ‘Día sin carro y sin moto’. Así es el trabajo de la UMV en el Casablanca, Suba.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://drive.google.com/file/d/1wzCRIkByAClIZvBxqguN4SRu1DVprgcS/view?usp=sharing'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 185</h4>
                                                                <i>miércoles, 21 de septiembre de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Los peatones del barrio Villa Alsacia, en Fontibón, contarán con un nuevo espacio público para transitar. Ahora se podrá activar la recarga web en más de 7.800 buses del Sistema. 5 cosas que debes saber de la construcción de la avenida Laureano Gómez.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://drive.google.com/file/d/1SHnC_OckDwZdHzrL-f69pNy6JG1455dR/view?usp=sharing'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 184</h4>
                                                                <i>martes, 20 de septiembre de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>‘Ojos en las vías, salvando vidas’ es la campaña que refuerza la ejecución de controles de tránsito, con el fin de disminuir la siniestralidad vial y hacer un llamado a la ciudadanía a tener conductas responsables. ✅ El fortalecimiento de los controles en vía, especialmente en corredores críticos, ha permitido alcanzar una reducción de 12% en el número de víctimas fatales cada semana. ✅ Entre enero y agosto de 2022 los controles aumentaron en un 221% comparado con el mismo periodo del año 2021. Tan solo entre junio y septiembre se ejecutaron 827 acciones de control, de las cuales 634 se enfocaron en velocidad y embriaguez.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://drive.google.com/file/d/1pv-raTi_Hs_lVWm6VFoCz_bOV-_qcG3G/view?usp=sharing'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 183</h4>
                                                                <i>lunes, 19 de septiembre de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Se transforma una importante vía de la localidad de Puente Aranda, gracias a las obras de la UMV. Dos rutas zonales ajustan su recorrido. ¿Qué es el Visor de Proyectos?</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://drive.google.com/file/d/16MFIFSHDNRJKcchIezrkj44XUVb5QeAk/view?usp=sharing'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 182</h4>
                                                                <i>viernes, 16 de septiembre de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Finalizan obras en la calzada norte de la calle 80. Más de 4 millones de personas se han beneficiado, durante este año, con las obras de la UMV. Nuevo servicio zonal L819 entra en operación.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://drive.google.com/file/d/1W7DaBzzpvI_d0opX0iLvLftnzQxM8yd1/view?usp=sharing'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 181</h4>
                                                                <i>jueves, 15 de septiembre de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Los comerciantes de la plazoleta ‘La Mariposa’ podrán disfrutar de un mejor espacio público, gracias al trabajo de la UMV. En Usme se realizan trabajos de mantenimiento vial. Servicio zonal H632 amplía su horario de operación.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://drive.google.com/file/d/1Pj7nc9n-dSjy7V0l37bDQQMLfMwcRpzZ/view?usp=sharing'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 180</h4>
                                                                <i>miércoles, 14 de septiembre de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Conservación vial en localidades Rafael Uribe Uribe y Teusaquillo. Servicio alimentador 16-9 Fontibón Centro modifica su trazado temporalmente, por afectación a la malla vial. La UMV toma medidas para fortalecer la seguridad en las vías.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://drive.google.com/file/d/1HZIcb5HutXXIu7Lrx_ZheczW5kF3j5u0/view?usp=sharing'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 179</h4>
                                                                <i>martes, 13 de septiembre de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Conservación vial en localidades Rafael Uribe Uribe y Teusaquillo. Servicio alimentador 16-9 Fontibón Centro modifica su trazado temporalmente, por afectación a la malla vial. La UMV toma medidas para fortalecer la seguridad en las vías.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://drive.google.com/file/d/1lIK2MOfA10RM_ShTlT4I0MzBCktrhsd1/view?usp=sharing'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 178</h4>
                                                                <i>lunes, 12 de septiembre de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Sector privado y Distrito firman pacto para promover el buen parqueo en Bogotá. Nuevo servicio zonal H637 Tres Reyes – Perdomo. Los frentes de trabajo de las obras IDU cuentan con puntos de recolección por colores, para hacer una correcta recolección de basuras ¡Conócelos!</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://drive.google.com/file/d/10aDDXnlpJBD7JpquFlH3F0HW6YhbS9lB/view?usp=sharing'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 177</h4>
                                                                <i>viernes, 9 de septiembre de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Así es el trabajo que la UMV ha realizado este año en
                                                                    la Av. Boyacá. Entra en operación el nuevo vagón de
                                                                    la estación Suba – Av. Boyacá. Avenida Guayacanes.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://drive.google.com/file/d/1zFEMqSuvh1TkEy8RNtrXQYePZqcZNjy_/view?usp=sharing'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 176</h4>
                                                                <i>jueves, 8 de septiembre de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Puente peatonal de la avenida Boyacá en
                                                                    mantenimiento. La UMV mejora la malla vial de la
                                                                    carrera séptima. Dos rutas troncales conectarán
                                                                    Soacha con la troncal Norte y la NQS.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://drive.google.com/file/d/1oQeA4MCODsbOfyyZZYstW5KkmIO1QO_a/view?usp=sharing'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 175</h4>
                                                                <i>miércoles, 7 de septiembre de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Los habitantes de la localidad ‘Los Mártires’
                                                                    disfrutan de mejores vías. Continúan trabajos de
                                                                    conservación vial en calle 80. 1.489 personas fueron
                                                                    sancionadas por ingresar de manera irregular al
                                                                    Sistema de Transporte de Bogotá.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://drive.google.com/file/d/1u4yQkUxU78YkigyecznbjvDDr715Pi5s/view?usp=sharing'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 174</h4>
                                                                <i>martes, 6 de septiembre de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Cierres y cambio de paraderos por obra de la
                                                                    extensión Caracas Sur. La UMV mejoró el espacio
                                                                    público en el barrio La Gaitana, Suba. Llega el
                                                                    concurso intercolegiado de historietas “Una historia
                                                                    para sanar a Bogotá”.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://drive.google.com/file/d/1uKcC7Z3P9naIzLG01ZZNSKWhJ5zglD_6/view?usp=sharing'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 173</h4>
                                                                <i>lunes, 5 de septiembre de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Servicio alimentador 6-7 San Joaquín tendrá una
                                                                    parada adicional. Hasta el 14 de septiembre aplican
                                                                    descuentos para deudores por comparendos. ¡Todos
                                                                    estamos en riesgo con el hurto de láminas de los
                                                                    puentes peatonales!</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://drive.google.com/file/d/120L0HlY-xXf7Tf-AruIer81bYwklccJH/view?usp=sharing'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 172</h4>
                                                                <i>viernes, 2 de septiembre de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>La UMV interviene 1,5 kilómetros en el ciclo carril
                                                                    del barrio Villa del Río, en Bosa. La ruta DA210
                                                                    cambia su nombre. Andenes y Ciclorrutas Canal
                                                                    Molinos.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://drive.google.com/file/d/1ucJ0q7nHfEU_pCDqv3AmOxAR0TcRGKGs/view?usp=sharing'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 171</h4>
                                                                <i>jueves, 1 de septiembre de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Finalización de conservación vial. La UMV intervendrá
                                                                    más de 33 km en la localidad de Sumapaz. Este
                                                                    jueves, personaliza la tarjeta Tullave en las vans
                                                                    de personalización.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- /#fin _Sep22 -->

                                    <!-- collapse_Agos22 -->
                                    <div class='panel panel-default'>
                                        <div class='panel-heading' role='tab' id='heading_Agos22'>
                                            <h4 class='panel-title'>
                                                <a role='button' data-toggle='collapse' data-parent='#accordion_boletines21' href='#collapse_Agos22' aria-expanded='true' aria-controls='collapse_Agos22'>
                                                    Boletines Agosto 2022
                                                </a>
                                            </h4>
                                        </div>
                                        <div id='collapse_Agos22' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_Agos22'>
                                            <div class='panel-body'>

                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://drive.google.com/file/d/1_pRdHNSNOeH9ul2PB7xzQFP9wz95ExSV/view?usp=sharing'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 170</h4>
                                                                <i>miércoles, 31 de agosto de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Cierre de carriles por avance de obra en Bosa. Feria
                                                                    de Servicios en el Sistema de Transporte Masivo.
                                                                    Patricia Ríos, auxiliar de tráfico de la UMV,
                                                                    contagia de alegría a sus compañeros en los frentes
                                                                    de obra.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://drive.google.com/file/d/1KO0KocR5zXujk_NTo0uZa-HtHgoPD7xC/view?usp=sharing'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 169</h4>
                                                                <i>martes, 30 de agosto de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>¡Conozca la programación de obras de la UMV! Estos
                                                                    servicios te llevan desde Tibabita hasta la Est.
                                                                    Terminal Norte. Ciclopuente Canal Molinos.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://drive.google.com/file/d/1FG4iL6UB0edhBziKSjhJYNXeMPGjw5VS/view?usp=sharing'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 168</h4>
                                                                <i>lunes, 29 de agosto de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Cierres por actividades en puente de la calle 13 con
                                                                    avenida Boyacá, Colectivos culturales hacen
                                                                    pedagogía en el Sistema de Transporte de Bogotá, Les
                                                                    contamos la historia de Querubín Cárdenas, empleado
                                                                    oficial que desde hace 35 años trabaja en la UMV.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://drive.google.com/file/d/1i_ROosDWlm8S6oiiQ77VP9y47F86dTYO/view?usp=sharing'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 167</h4>
                                                                <i>viernes, 26 de agosto de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Cierre de andén costado norte de la calle 116. En
                                                                    Usme se inauguró el patio de buses eléctricos más
                                                                    grande de América Latina. La página web de la UMV
                                                                    ahora está en versión Wayuu. En patio taller se
                                                                    desarrollan ingeniosas acciones para reutilizar
                                                                    materiales y cuidar el medioambiente.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://drive.google.com/file/d/1Vv6m-yJT5RurRuZItZwqDLsDoqRphBXA/view?usp=sharing'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 166</h4>
                                                                <i>jueves, 25 de agosto de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Intervención en la avenida Boyacá. En lo corrido de
                                                                    2022, la UMV ha intervenido más de 20 mil metros
                                                                    cuadrados de espacio público. Regresa la exitosa
                                                                    convocatoria ¡Más mujeres en el sector transporte!
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://drive.google.com/file/d/14jJ8izExVAWk6I0_SZa8pC_F0qA4CG7t/view?usp=sharing'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 165</h4>
                                                                <i>miércoles, 24 de agosto de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Trabajos de conservación vial en Engativá. Conozca
                                                                    las rutas que podrá utilizar por el cierre nocturno
                                                                    de las estaciones Salitre - Greco y El Tiempo -
                                                                    Maloka. Jairo García, topógrafo de la UMV, explica
                                                                    en qué consiste su trabajo en la entidad.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://drive.google.com/file/d/1hBmbRj1x4RJO9JJXbnOoD_n1JrcNlQXS/view?usp=sharing'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 164</h4>
                                                                <i>martes, 23 de agosto de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Intervención en el puente vehicular de la Autosur con
                                                                    carrera 50. La UMV mejoró el estado de la ciclorruta
                                                                    que bordea el Humedal Jaboque. Entran en operación
                                                                    nuevos servicios zonales, para el beneficio de los
                                                                    usuarios del Sistema de Transporte de Bogotá.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://drive.google.com/file/d/1iN-W_Gx-tltdjA0ISjf1MsG-jcPk2wmL/view?usp=sharing'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 163</h4>
                                                                <i>lunes, 22 de agosto de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Así son las obras en concreto que realiza la UMV para
                                                                    reparar las vías. Reparaciones en la calle 80.
                                                                    Entran en operación nuevos servicios zonales para
                                                                    beneficio de los usuarios del Sistema de Transporte
                                                                    de Bogotá.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://drive.google.com/file/d/1KDf129Z1lMILi3MiC0Uvv1OPvAwU1pwC/view?usp=sharing'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 162</h4>
                                                                <i>viernes, 19 de agosto de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Mejoramos andenes de la localidad de Usaquén.
                                                                    Contralor Distrital visitó y constató los beneficios
                                                                    de TransMiCable. Bogotá premiará a estudiantes con
                                                                    las mejores ideas para crear entornos escolares
                                                                    seguros en movilidad. "El metro de Bogotá somos uno
                                                                    solo": Paola Cáceres, guía cívica de las obras.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://drive.google.com/file/d/1IM9hSU6_zRYAtKS8leUPBblzRy0rXvVI/view?usp=sharing'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 161</h4>
                                                                <i>jueves, 18 de agosto de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Se realizan reparaciones sobre la vía ubicada en la
                                                                    avenida calle 19 con NQS. Se suspende la ruta zonal
                                                                    802 Sabana del Dorado – Usme Centro. La UMV
                                                                    socializó los avances de gestión y el plan de
                                                                    contratación durante la administración de Claudia
                                                                    López.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://drive.google.com/file/d/1yHi5OQVepKQBIeoqkwRDQEyV4xp9HP6p/view?usp=sharing'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 160</h4>
                                                                <i>miércoles, 17 de agosto de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Inicia conservación de vías en Lisboa, Suba. Este
                                                                    miércoles, la Van de personalización de la tarjeta
                                                                    TuLlave estará en 4 puntos de Bogotá. Conozca la
                                                                    historia de José Hernando Correa, oriundo de
                                                                    Caucasia, Valle del Cauca, y quien trabaja desde
                                                                    hace 10 años en la UMV.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://drive.google.com/file/d/1mNv83THkL4fkk0wMUdp0LG00EpeTkJUe/view?usp=sharing'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 159</h4>
                                                                <i>martes, 16 de agosto de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Mejores calles en el barrio Las Brisas de San
                                                                    Cristóbal. Más de 530 mil ciudadanos se han
                                                                    beneficiado con la aplicación TransMiApp. La UMV
                                                                    adquirió 9 volquetas para el Proyecto de Regalías,
                                                                    que mejorará 33 kilómetros de vía en Sumapaz.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://drive.google.com/file/d/17doOUT0zzQ_aqtjtAUvhHdiTagds5fp8/view?usp=sharing'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 158</h4>
                                                                <i>viernes, 12 de agosto de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Conservación del espacio público en Autonorte.
                                                                    Estaciones y Portales del Sistema de Transporte
                                                                    cuentan con Pulmones Solares. Un trabajo en familia,
                                                                    así es la historia de Campo Elías Moya, ayudante de
                                                                    obra de la UMV.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://drive.google.com/file/d/1udeDRRvPk0s8bnoEpGUZm7UAWsBQmUDB/view?usp=sharing'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 157</h4>
                                                                <i>jueves, 11 de agosto de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Mejoramos la malla vial de Las Américas. 23 personas
                                                                    capturadas en flagrancia y una por orden judicial en
                                                                    el Sistema de Transporte de Bogotá. Silvia de la
                                                                    Calle, colaboradora de la UMV, te explica los
                                                                    tiempos de respuesta de las PQRSDF.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://drive.google.com/file/d/1B5Rb-eHwgwsRpyj0CcmK25lSRbS6cCMp/view?usp=sharing'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 156</h4>
                                                                <i>miércoles, 10 de agosto de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Se construye ciclopuente sobre la avenida 68 con
                                                                    calle 63. En el barrio Libertador, de la localidad
                                                                    Rafael Uribe Uribe, la UMV mejoró un segmento vial
                                                                    que conecta con varias vías principales.
                                                                    TRANSMILENIO S.A. continúa apoyando ferias de
                                                                    empleabilidad.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://drive.google.com/file/d/1_nxDamLKCmY0isG76eXdfJX2gvP_RHuD/view?usp=sharing'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 155</h4>
                                                                <i>martes, 9 de agosto de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Distrito hará reposición, en los próximos 5 meses, de
                                                                    2.050 señales del SITP que habían sido hurtadas.
                                                                    Proyecto Avenida Ciudad de Cali. Conozca la nueva
                                                                    sede administrativa y la oficina de atención al
                                                                    ciudadano de la UMV.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://drive.google.com/file/d/1IxCY5Ev1gA8SZ5LzmxO8mB-Zr0jS6koQ/view?usp=sharing'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 154</h4>
                                                                <i>lunes, 8 de agosto de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Recuperamos la malla vial en Bogotá. La UMV mejora un
                                                                    tramo de la calle 127, entre la carrera 57A y la
                                                                    transversal 60. La ruta AB900 modifica su recorrido
                                                                    y cambia su nombre.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://drive.google.com/file/d/1DNCr6OJDUJP8To45hEVYajJh1_gzh8k2/view?usp=sharing'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 153</h4>
                                                                <i>viernes, 5 de agosto de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>La UMV mejora el espacio público en el barrio Santa
                                                                    Ana Occidental, de la localidad de Usaquén. En el
                                                                    IDU construimos obras accesibles. Dos nuevos vagones
                                                                    inician operación en la estación Suba - TV 91.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://drive.google.com/file/d/1il5kqtp92Hcesd3T1yydNglYTLkU_97j/view?usp=sharing'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 152</h4>
                                                                <i>jueves, 4 de agosto de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>La UMV mejora un importante segmento vial en el
                                                                    barrio Las Villas, de la localidad de Suba. ¿Sabías
                                                                    que puedes consultar los proyectos que se
                                                                    desarrollan en Bogotá en la página web del IDU? La
                                                                    ruta B901 Mirandela – K901 Terminal Salitre modifica
                                                                    su recorrido.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://drive.google.com/file/d/1GULEomMx5yIX8mlGTsr32BoYvvTOmGwR/view?usp=sharing'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 151</h4>
                                                                <i>miércoles, 3 de agosto de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Mantenimiento de la malla vial en la ciudad (Segunda
                                                                    entrega). Ruta 18-3 extenderá su trazado y se
                                                                    llamará B927. La UMV rehabilita cerca de 700 metros
                                                                    cuadrados en el barrio Santiago Pérez, de la
                                                                    localidad Rafael Uribe Uribe.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://drive.google.com/file/d/12N1ImVGbr8_ZJgUnmELzPbBo-UB4KJ0X/view?usp=sharing'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 150</h4>
                                                                <i>martes, 2 de agosto de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>En lo corrido de 2022, la UMV ha mejorado más de 10
                                                                    kilómetros de ciclorrutas en Bogotá. ¿Cómo es el
                                                                    mantenimiento de la malla vial en la ciudad?
                                                                    (Primera entrega). Avanza instalación de
                                                                    dispositivos electro–imán en los torniquetes para
                                                                    personas en condición de discapacidad.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://drive.google.com/file/d/1fwWryxsPzeXXhZ36EqPlG77xhWmyiY1E/view?usp=sharing'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 149</h4>
                                                                <i>lunes, 1 de agosto de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Así va el trabajo de mantenimiento vial en Antonio
                                                                    Nariño, durante este 2022. Celebramos la graduación
                                                                    de 1.290 jóvenes del programa Parceros Por Bogotá.
                                                                    Extensión de la Troncal Caracas Sur.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- /#fin _Agos22 -->

                                    <!-- collapse_jul22 -->
                                    <div class='panel panel-default'>
                                        <div class='panel-heading' role='tab' id='heading_jul22'>
                                            <h4 class='panel-title'>
                                                <a role='button' data-toggle='collapse' data-parent='#accordion_boletines21' href='#collapse_jul22' aria-expanded='true' aria-controls='collapse_jul22'>
                                                    Boletines Julio 2022
                                                </a>
                                            </h4>
                                        </div>
                                        <div id='collapse_jul22' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_jul22'>
                                            <div class='panel-body'>

                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://drive.google.com/file/d/1TFAQKR9DijKWdhMr1dSVOQXkkcUZ31_L/view?usp=sharing'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 148</h4>
                                                                <i>viernes, 29 de julio de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Cierres en el Canal Molinos. El lunes comienzan a
                                                                    aplicar cambios operativos en varias rutas zonales.
                                                                    La UMV está en 11 localidades de Bogotá, mejorando
                                                                    las vías.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://drive.google.com/file/d/1brwxSOlzHFVml7Y3BibEiP5lZN4Ps-bo/view?usp=sharing'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 147</h4>
                                                                <i>jueves, 28 de julio de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>En la localidad de Santafé inician actividades de
                                                                    conservación vial. El viernes, 29 de julio, vence
                                                                    plazo para participar en la categoría TransMilenio
                                                                    de SmartFilms. La UMV mejora las calles del barrio
                                                                    Mochuelo III, en Ciudad Bolívar.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://drive.google.com/file/d/1bYl0rP1VXsB158Xwo9b6zpItL7Fjr-kn/view?usp=sharing'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 146</h4>
                                                                <i>miércoles, 27 de julio de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Finalizan obras en la localidad de Rafael Uribe
                                                                    Uribe. Vuelve a ser obligatorio el uso de tapabocas
                                                                    en el Sistema de Transporte. Así es el trabajo
                                                                    social que realiza la UMV antes, durante y después
                                                                    de las obras.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://drive.google.com/file/d/1W08PRyrKm9yv8YsAWGVoXBbWwZULzzMm/view?usp=sharing'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 145</h4>
                                                                <i>martes, 26 de julio de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>¿Necesita renovar su licencia de conducción? Paso a
                                                                    paso para hacer el trámite de manera fácil. Se
                                                                    construye nuevo espacio público en la avenida Ciudad
                                                                    de Cali. Ajuste de trazado de la ruta ‘6-5 Tesoro’,
                                                                    los domingos y festivos.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://drive.google.com/file/d/1AdZfCon88C-RSSmxQ24OsGphS39-sqVs/view?usp=sharing'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 144</h4>
                                                                <i>lunes, 25 de julio de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>En Usaquén, Chapinero y Engativá hay nuevo espacio
                                                                    público. Entran en operación 2 nuevos servicios
                                                                    zonales, para beneficio de los usuarios del Sistema
                                                                    de Transporte de Bogotá. Vecinos del barrio La
                                                                    Esmeralda, localidad de Teusaquillo, agradecieron la
                                                                    intervención de la UMV en una de sus vías.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://drive.google.com/file/d/1zWSRU1IQa6LLYOoGyfHEX4XUN_AmEfXp/view?usp=sharing'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 143</h4>
                                                                <i>viernes, 22 de julio de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Este sábado, 23 de julio, entra en operación el par
                                                                    vial Suba Tibabuyes. En construcción la avenida
                                                                    Laureano Gómez. Así va nuestro trabajo en el barrio
                                                                    Osorio III, de la localidad de Kennedy.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://drive.google.com/file/d/1tHx5m-RCWul2sjFifLMjs1aZldNkrPuG/view?usp=sharing'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 142</h4>
                                                                <i>jueves, 21 de julio de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Cierres en zonas verdes de la avenida Laureano Gómez.
                                                                    La UMV mejora la malla vial de varias vías en el
                                                                    norte de Bogotá. Atención habitantes de Suba:
                                                                    modificaciones en las rutas alimentadoras 11-8 La
                                                                    Gaitana y 11-9 Lisboa.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://drive.google.com/file/d/1v_rMgZiG0thLaIP0WBIhWKcEkjR3aYL_/view?usp=sharing'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 141</h4>
                                                                <i>martes, 19 de julio de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Cierres en la Autopista Sur. En Quiba Alta, Ciudad
                                                                    Bolívar, la UMV mejora las vías para que los
                                                                    habitantes tengan mejor conexión con la zona urbana
                                                                    de Bogotá. Así operará TransMilenio durante la
                                                                    celebración de la fiesta de Independencia del 20 de
                                                                    julio de 2022.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://drive.google.com/file/d/17DyTVIgUgoxFlp77NDa8msyjbpD-MUOf/view?usp=sharing'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 140</h4>
                                                                <i>lunes, 18 de julio de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Conservación vial rural en Sumapaz. La UMV mejora las
                                                                    vías del barrio Ciudadela Colsubsidio. Ajustes
                                                                    operativos en servicios zonales.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://drive.google.com/file/d/1TCNP2SzDjf6QdCrcAaTdlS3kFG7-GtpJ/view?usp=sharing'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 139</h4>
                                                                <i>viernes, 15 de julio de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Cierre parcial de andén oriental en la Autonorte. Con
                                                                    el arreglo de la calle 128Bis, entre carreras 92B y
                                                                    93, la UMV mejora la calidad de vida de los
                                                                    residentes del barrio Rincón Altamar. Varios
                                                                    servicios zonales retoman su recorrido en el sur de
                                                                    Bogotá.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://drive.google.com/file/d/1Z44GVYtURiwJV-5SCB5sJXlBEmJli2HP/view?usp=sharing'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 138</h4>
                                                                <i>jueves, 14 de julio de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Conservación vial en la localidad de Usme. La UMV se
                                                                    encuentra mejorando el estado de algunos tramos del
                                                                    barrio Villa Elisa, en Suba. Dos servicios zonales
                                                                    amplían su horario de operación.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://drive.google.com/file/d/1nezG6VmujpheSv_CCp58s1AfH8ARw2E9/view?usp=sharing'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 137</h4>
                                                                <i>miércoles, 13 de julio de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Construcción de la avenida Boyacá, entre calles 170 y
                                                                    183. La UMV arregló un tramo de una importante vía
                                                                    arterial del centro occidente de la ciudad. 2 nuevos
                                                                    servicios zonales para beneficio de los usuarios del
                                                                    Sistema de Transporte de Bogotá.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://drive.google.com/file/d/1y4LcaBjqQ6vOXFs4ldVNDrk8NnpvTKqz/view?usp=sharing'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 136</h4>
                                                                <i>martes, 12 de julio de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Avenida Guayacanes. La UMV continúa en el barrio El
                                                                    Salitre, mejorando la ciclorruta de este sector.
                                                                    Nueva ruta zonal conecta los sectores de Gaviotas y
                                                                    la Estación Nariño.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://drive.google.com/file/d/13hSfMRuGFwr14wNrqeTieIPfRPtndDKM/view?usp=sharing'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 135</h4>
                                                                <i>lunes, 11 de julio de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Cierre parcial de ciclorruta para mantenimiento. La
                                                                    UMV retorna a su horario habitual de atención al
                                                                    ciudadano. Usuarios de TransMilenio han reciclado
                                                                    más de 50.000 kilos de material en máquinas
                                                                    EcoTransMi.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://drive.google.com/file/d/16xfvWtrqEfzBjztZ8TO3m5sSAowrxCue/view?usp=sharing'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 134</h4>
                                                                <i>viernes, 8 de julio de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Conservación malla vial rural. Se realizó una nueva
                                                                    jornada de "UMV de Puertas Abiertas", en la que
                                                                    participaron más de 30 ciudadanos. Nueva ruta zonal
                                                                    A334 Centro Financiero – K334 Fontibón Versalles.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://drive.google.com/file/d/19DAQwlDjckOVqXZUrlyZYcIeVA-g5ufa/view?usp=sharing'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 133</h4>
                                                                <i>jueves, 7 de julio de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>En jornada nocturna, la UMV trabaja en la localidad
                                                                    de Chapinero, para arreglar un importante tramo de
                                                                    la carrera séptima. Conoce más del Cable Aéreo San
                                                                    Cristóbal. Feria de empleo del Sistema de Transporte
                                                                    de Bogotá estará en Fontibón.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://drive.google.com/file/d/1S18ClperUw0gZ6MCTdGcBDXnDq57VWqq/view?usp=sharing'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 132</h4>
                                                                <i>miércoles, 6 de julio de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Gracias al programa ‘Calles Completas’, la UMV
                                                                    trabaja en la recuperación de un andén en la
                                                                    localidad de Kennedy. Mejores andenes en la
                                                                    localidad de Suba. Ruta alimentadora 9-2
                                                                    Metrovivienda hace dos nuevas paradas en hora valle.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://drive.google.com/file/d/1RXVCKgzGZl9FuL7UgpZ0hoSxw62LRFgM/view?usp=sharing'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 131</h4>
                                                                <i>martes, 5 de julio de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Trabajos nocturnos en el Canal Molinos. La UMV
                                                                    realiza el cambio de carpeta de una importante calle
                                                                    del barrio Santa Lucía, en la localidad Rafael Uribe
                                                                    Uribe. Patio taller puso en marcha sistema de
                                                                    suministro de energía con paneles solares.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://drive.google.com/file/d/1ovcO2E6TtLWcAFMfd3Rkg46C-LtVK5vK/view?usp=sharing'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 130</h4>
                                                                <i>viernes, 1 de julio de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>La UMV está en el barrio El Vergel, de la localidad
                                                                    de Kennedy. Allí hace cambio de losas en una de las
                                                                    vías. ¡Las basuras en su lugar! Desde este sábado
                                                                    estará cerrado el acceso norte de la estación CAD.
                                                                </p>
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
                                                                <h4>BOLETÍN 129</h4>
                                                                <i>jueves, 30 de junio de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Reparaciones nocturnas en la avenida Boyacá. En menos
                                                                    de 6 meses, la UMV mejoró más de 286 mil daños
                                                                    viales, cifra superior a la de todo 2021. Tenemos
                                                                    más de 2.000 vacantes para trabajar en el Sistema de
                                                                    Transporte Público de Bogotá.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://drive.google.com/file/d/1r5PzExO-seYc8SYeVuiAyK1KJMKNyP__/view?usp=sharing'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 128</h4>
                                                                <i>miércoles, 29 de junio de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Vías rehabilitadas en San Cristóbal y Rafael Uribe
                                                                    Uribe. La UMV arregló una importante vía en el
                                                                    barrio Gratamira Real, de la localidad de Suba. 16
                                                                    personas capturadas en flagrancia y una por orden
                                                                    judicial en el Sistema de Transporte de Bogotá.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://drive.google.com/file/d/13xjtqCwWRXiWOGBEMZpbbPo3iNRfTGi4/view?usp=sharing'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 127</h4>
                                                                <i>martes, 28 de junio de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Las obras y los Planes de Manejo de Tránsito. Conozca
                                                                    el cierre por carriles de la calzada rápida sentido
                                                                    Norte – Sur de la Autopista Norte entre calles 146 y
                                                                    140. Estación Flores retorna a su operación normal
                                                                    desde este miércoles 29 de junio.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://drive.google.com/file/d/1R47UbvWdwx__IE5NkkDg-PvkrsxJDEeS/view?usp=sharing'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 126</h4>
                                                                <i>viernes, 24 de junio de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Cierre en la av. carrera 68 por av. calle 26. La UMV
                                                                    rehabilita una importante vía en Puente Aranda.
                                                                    Nuevas rutas zonales empiezan a operar este sábado.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://drive.google.com/file/d/1re7an4u_1YuHJRD8hfTOPyzDCFTQGVOR/view?usp=sharing'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 125</h4>
                                                                <i>jueves, 23 de junio de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Cierres parciales por obra de la avenida 68. La UMV
                                                                    reparó una importante vía en el barrio José Joaquín
                                                                    Vargas, en la localidad de Barrios Unidos. Desde
                                                                    este viernes estará cerrado el acceso norte de la
                                                                    estación Comuneros.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://drive.google.com/file/d/1Qj2KWk3Ls65TqCoiKsM5MI-tEqRbQyDO/view?usp=sharing'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 124</h4>
                                                                <i>miércoles, 22 de junio de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>La Unidad Móvil de Parcheo de la UMV está en la
                                                                    localidad de Suba. Mantenimiento en andenes de la
                                                                    calle 80. 416 armas blancas incautaron las
                                                                    autoridades en el Sistema de Transporte de Bogotá.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://drive.google.com/file/d/1VuZlHbKWyQdjKgPN1NAOThqnnqhsylyi/view?usp=sharing'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 123</h4>
                                                                <i>martes, 21 de junio de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Conservación de puentes vehiculares. Desde este
                                                                    martes, el servicio zonal 19 – 12 Toberín, extiende
                                                                    su recorrido. Gremio taxista en Bogotá se capacita
                                                                    para mejorar el servicio a las mujeres. </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://drive.google.com/file/d/1wc8MZHrAzey3hluuo2eXX2JgMGv1veDk/view?usp=sharing'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 122</h4>
                                                                <i>viernes, 17 de junio de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Biciusuario, estas son las nuevas rutas alternativas
                                                                    en la ciclovía dominical del sector calle 72. Así
                                                                    funcionará TransMilenio durante la jornada electoral
                                                                    del próximo domingo. Miembros de la UMV y comunidad
                                                                    del sector de Fontibón realizaron una jornada de
                                                                    siembra de plantas alrededor de la sede operativa.
                                                                    Conoce más del ChatBot Fulvia, el nuevo canal de
                                                                    comunicación con el IDU. </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://drive.google.com/file/d/1kWRJU2rpR-FxwdIjLABIk3gjCH_MEF3Y/view?usp=sharing'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 121</h4>
                                                                <i>jueves, 16 de junio de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Nuevos recorridos para el transporte público, por
                                                                    cierres del metro en la calle 72. Mantenimiento vial
                                                                    en Usaquén. Atención Tunjuelito: Este viernes,
                                                                    TRANSMILENIO S.A. apoyará feria de empleabilidad en
                                                                    la localidad. Chat Virtual: el canal de la UMV para
                                                                    escuchar a la ciudadanía.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://drive.google.com/file/d/1Lsw9Rh-dBGcd2apkLeDganV8Vxkn1mSz/view?usp=sharing'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 120</h4>
                                                                <i>miércoles, 15 de junio de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Estas son las rutas alternas para vehículos
                                                                    particulares, por cierres del metro en la calle 72.
                                                                    La UMV hizo mejoras en el espacio público ubicado
                                                                    alrededor de Corabastos. Inician reparaciones en la
                                                                    malla vial de Usaquén. Por primera vez realizó
                                                                    simulacro de rescate vertical simultáneo en
                                                                    TransmiCable. </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://drive.google.com/file/d/14B8YYl458Oze513o59U2EgJvQpPpbaXj/view?usp=sharing'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 119</h4>
                                                                <i>martes, 14 de junio de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Conozca las vías que cambian de sentido con el cierre
                                                                    de la calle 72. La UMV mejora la malla vial de
                                                                    importantes vías en la localidad de Chapinero.
                                                                    TransMilenio pone a disposición de los usuarios un
                                                                    servicio zonal adicional para la segunda vuelta de
                                                                    elecciones presidenciales. IDU: Con la temporada de
                                                                    lluvias se retrasan las obras que estamos
                                                                    construyendo en Bogotá. </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://drive.google.com/file/d/1Vu_AMxC6Xxjc2MNhf_qgPAaaz4czDlNP/view?usp=sharing'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 118</h4>
                                                                <i>lunes, 13 de junio de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Cierre de andenes en la Avenida Ciudad de Cali. 4
                                                                    rutas troncales amplían su horario de
                                                                    funcionamiento. A la UMV llegó una nueva máquina
                                                                    trituradora, que optimizará el proceso de producción
                                                                    de mezcla de asfalto en frío o fresado estabilizado.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://drive.google.com/file/d/1HTQ1cS4FiA5o1chv0_MbxAEGk0kMjqLt/view?usp=sharing'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 117</h4>
                                                                <i>viernes, 10 de junio de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>La Unidad de Mantenimiento Vial atendió los daños
                                                                    viales que afectaban la movilidad de la carrera 60
                                                                    alrededor de la biblioteca Virgilio Barco. Desde el
                                                                    próximo lunes habrá cambios en dos rutas zonales.
                                                                    Cierres viales por obras en Zona Rosa. </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://drive.google.com/file/d/1KXShzqz27gQK4627s_oaZrQH9hrZqS0z/view?usp=sharing'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 116</h4>
                                                                <i>jueves, 9 de junio de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Obras en la Av. Boyacá entre calles 170 y 183. ¡En la
                                                                    Unidad de Mantenimiento Vial cuidamos el medio
                                                                    ambiente! Este viernes TRANSMILENIO S.A. apoyará
                                                                    feria de empleabilidad en la localidad Rafael Uribe
                                                                    Uribe, </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/08-06-2022/2022-06-08_boletin_la_bogota_que_estamos_construyendo.pdf'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 115</h4>
                                                                <i>miércoles, 8 de junio de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Cierres en obra de Avenida 68, Alimentadora de la
                                                                    Línea Metro. Cómo bloquear la tarjeta Tullave en
                                                                    caso de pérdida. Conozca el trabajo que adelanta la
                                                                    UMV en el barrio Santa Lucia, localidad Rafael Uribe
                                                                    Uribe. </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/08-06-2022/2022-06-07_boletin_la_bogota_que_estamos_construyendo.pdf'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 114</h4>
                                                                <i>martes, 7 de junio de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>La UMV está en el barrio San Eusebio en la localidad
                                                                    de Puente Aranda. Trabajos de conservación vial en
                                                                    la localidad de Suba. 32 personas capturadas en
                                                                    flagrancia y una por orden judicial en el Sistema de
                                                                    Transporte de Bogotá. </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/08-06-2022/2022-06-06_boletin_la_bogota_que_estamos_construyendo.pdf'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 113</h4>
                                                                <i>lunes, 6 de junio de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Bogotá se unió a la celebración del Día Mundial de la
                                                                    Bicicleta. Cierre de espacio público por avance de
                                                                    obra en Canal Molinos. Más de 190 mil tarjetas se
                                                                    han perdido en lo corrido del año. </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/03-06-2022/2022-06-03_boletin_la_bogota_que_estamos_construyendo.pdf'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 112</h4>
                                                                <i>viernes, 3 de junio de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>La UMV apoya a los campesinos de Ciudad Bolívar con
                                                                    el mejoramiento de sus vías rurales. Avances de la
                                                                    Avenida El Rincón. Desde el próximo lunes habrá
                                                                    cambios en dos rutas zonales. </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/03-06-2022/2022-06-02_boletin_la_bogota_que_estamos_construyendo.pdf'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 111</h4>
                                                                <i>jueves, 2 de junio de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Así fue nuestro trabajo en la localidad Rafael Uribe
                                                                    Uribe durante los primeros cinco meses del año.
                                                                    Trabajos para mejorar el estado de los andenes.
                                                                    Cambio temporal en recorrido de la ruta zonal C97A.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/03-06-2022/2022-06-01_boletin_la_bogota_que_estamos_construyendo.pdf'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 110</h4>
                                                                <i>miércoles, 1 de junio de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Inicio de actividades en calles de Engativá. Sandra
                                                                    Chaves, la mujer detrás de la operación de buses más
                                                                    grande del país. Conozca qué es el material
                                                                    bituminoso reciclado que utiliza la UMV para
                                                                    intervenir, en tiempo récord, pequeños daños viales.
                                                                </p>
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
                                                                <h4>BOLETÍN 109</h4>
                                                                <i>martes, 31 de mayo de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Desde el martes, 31 de mayo, algunos servicios
                                                                    zonales modifican sus horarios. En la tradicional
                                                                    cuadra de los cueros, en el barrio Siete de Agosto,
                                                                    la UMV mejoró sus calles aledañas. </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/03-06-2022/2022-05-27_boletin_la_bogota_que_estamos_construyendo.pdf'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 108</h4>
                                                                <i>viernes, 27 de mayo de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>La UMV mejora las ciclorrutas del barrio Salitre en
                                                                    la localidad de Teusaquillo. TransMilenio pone a
                                                                    disposición de los usuarios un servicio zonal
                                                                    adicional para las elecciones. Cierres en la Avenida
                                                                    68. </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/03-06-2022/2022-05-26_boletin_la_bogota_que_estamos_construyendo.pdf'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 107</h4>
                                                                <i>jueves, 26 de mayo de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Grandes empresas del sector público y privado se unen
                                                                    para promover el ‘Carro Compartido’ en Bogotá.
                                                                    Cierres en la Zona Rosa. Así funcionará TransMilenio
                                                                    durante la jornada electoral del 29 de mayo. </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/03-06-2022/2022-05-25_boletin_la_bogota_que_estamos_construyendo.pdf'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 106</h4>
                                                                <i>miércoles, 25 de mayo de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Traslados de paradas de rutas alimentadoras de la
                                                                    estación Molinos. Cierres en andenes sobre la
                                                                    Avenida 68. Así trabaja la fresadora nueva que
                                                                    adquirió recientemente la UMV. </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/24-05-2022/2022-05-24_boletin_la_bogota_que_estamos_construyendo_compressed.pdf'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 105</h4>
                                                                <i>martes, 24 de mayo de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Finaliza mantenimiento en la Calle 80. En lo corrido
                                                                    del año, la UMV ha liderado importantes obras de
                                                                    infraestructura que mejorarán la movilidad de
                                                                    Bogotá. Autoridades incautaron 443 armas blancas y
                                                                    capturaron a 29 personas en flagrancia en el Sistema
                                                                    de Transporte. </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/23-05-2022/2022-05-23_boletin_la_bogota_que_estamos_construyendo.pdf'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 104</h4>
                                                                <i>lunes, 23 de mayo de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>La sede de producción de la UMV le abrió las puertas
                                                                    a estudiantes universitarios interesados en conocer
                                                                    el trabajo para mejorar las vías. Intervenciones en
                                                                    la Malla Vial Troncal de Suba. Entra en operación
                                                                    nuevo servicio alimentador en el Portal del Norte.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/23-05-2022/2022-05-20_boletin_la_bogota_que_estamos_construyendo.pdf'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 103</h4>
                                                                <i>viernes, 20 de mayo de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Desde este sábado habrá cierre temporal del acceso
                                                                    norte de la estación Comuneros. Cinco cosas que
                                                                    debes saber acerca de la construcción de la Avenida
                                                                    Rincón. Parte del equipo directivo de la UMV visitó
                                                                    el nuevo laboratorio de suelos y pavimentos de la
                                                                    Universidad Militar Nueva Granada.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/23-05-2022/2022-05-19_boletin_la_bogota_que_estamos_construyendo.pdf'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 102</h4>
                                                                <i>jueves, 19 de mayo de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>En este primer capítulo de #MilagrosBogotanos, un
                                                                    afanado conductor invade la ciclorruta y está a
                                                                    punto de cometer un error fatal. En la localidad de
                                                                    San Cristóbal la UMV ha tapado cerca de cuatro mil
                                                                    huecos y logrado la conservación de 8,68 km carril.
                                                                    Sede IDU cuenta con un módulo de atención
                                                                    preferencial. Dos rutas zonales tendrán cambios a
                                                                    partir del 23 de mayo. </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/23-05-2022/2022-05-18_boletin_la_bogota_que_estamos_construyendo.pdf'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 101</h4>
                                                                <i>miércoles, 18 de mayo de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Estación Calle 127 vuelve a prestar servicio. Vías
                                                                    con una nueva cara. La UMV ha tapado más de 1.800
                                                                    huecos en siete barrios de las localidades de Santa
                                                                    Fe y La Candelaria. </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/23-05-2022/2022-05-17_boletin_la_bogota_que_estamos_construyendo_1.pdf'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 100</h4>
                                                                <i>martes, 17 de mayo de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Con sus obras de arreglo de la malla vial la UMV
                                                                    beneficia a los comerciantes del barrio Batán, Suba.
                                                                    Mejoramos vías en la localidad de Puente Aranda. 26
                                                                    personas fueron capturadas por las autoridades en el
                                                                    Sistema de Transporte. Respeta el espacio de los
                                                                    demás!. </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/23-05-2022/2022-05-16_boletin_la_bogota_que_estamos_construyendo_1.pdf'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 99</h4>
                                                                <i>lunes, 16 de mayo de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Bogotá presentó su visión al 2040 en movilidad de
                                                                    cero y bajas emisiones. ¿Sabes en dónde consultar
                                                                    los proyectos que estamos construyendo en la ciudad?
                                                                    Entra en operación nuevo servicio zonal para
                                                                    beneficio de los usuarios del Sistema de Transporte
                                                                    de Bogotá</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/23-05-2022/2022-05-13_boletin_la_bogota_que_estamos_construyendo.pdf'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 98</h4>
                                                                <i>viernes, 13 de mayo de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>#LaBogotáQueEstamosConstruyendo !A partir de ahora el
                                                                    barrio San Felipe cuenta con más espacio público!
                                                                    Construcción de la estación de TransMilenio Av. Suba
                                                                    Calle 100. La UMV participa de las actividades en el
                                                                    marco del Mes de Prevención Vial. Cambian las
                                                                    paradas de los servicios A52 y D22 en Portal del
                                                                    Sur. </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/12-05-2022/2022-05-12_boletin_la_bogota_que_estamos_construyendo.pdf'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 97</h4>
                                                                <i>jueves, 12 de mayo de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>La UMV tapó más de 1.500 huecos que afectaban el
                                                                    flujo vehicular en la carrera séptima. Atentos a los
                                                                    cambios y cierres en la Avenida 68. </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/12-05-2022/2022-05-11_boletin_la_bogota_que_estamos_construyendo.pdf'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 96</h4>
                                                                <i>miércoles, 11 de mayo de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>#LaBogotáQueEstamosConstruyendo Lo que debes saber de
                                                                    las obras de prolongación de la Avenida El Rincón.
                                                                    Cierre de un carril y del separador de la Avenida
                                                                    Ciudad de Cali. Dos nuevos servicios zonales para
                                                                    beneficio de los usuarios del Sistema de Transporte
                                                                    de Bogotá. Resiliencia es la palabra que define a
                                                                    Martha Castañeda, auxiliar de tráfico que comenzó
                                                                    una nueva vida en Bogotá tras perder a toda su
                                                                    familia en Armero.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/12-05-2022/2022-05-10_boletin_la_bogota_que_estamos_construyendo.pdf'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 95</h4>
                                                                <i>martes, 10 de mayo de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>La Avenida Boyacá tendrá tres nuevos puentes
                                                                    vehiculares. IDU adelanta trabajos de conservación y
                                                                    mantenimiento en calles y vías de la ciudad. Más de
                                                                    19 mil personas se benefician con la reapertura de
                                                                    la estación Virrey. Así son los planes de manejo de
                                                                    tránsito que debe realizar la UMV previo al inicio
                                                                    de las obras de mantenimiento vial. </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/12-05-2022/2022-05-09_boletin_la_bogota_que_estamos_construyendo.pdf'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 94</h4>
                                                                <i>lunes, 9 de mayo de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Nuevos Patio-talleres, ubicados en Cota, fortalecerán
                                                                    servicio de Transmilenio e impulsan la consolidación
                                                                    de Región Metropolitana. Entre 40 y 50 colaboradores
                                                                    de la UMV trabajaron para habilitar el paso peatonal
                                                                    de Meissen. Cierres viales por construcción de redes
                                                                    secas y húmedas. </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/06-05-2022/2022-05-06_boletin_la_bogota_que_estamos_construyendo.pdf'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 93</h4>
                                                                <i>viernes, 6 de mayo de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Se entrega nuevo paso peatonal de Meissen, que
                                                                    beneficiará a más de 22 mil ciudadanos de Tunjuelito
                                                                    y Ciudad Bolívar. En el mes de las madres la UMV
                                                                    reconoce la labor de las mujeres que tienen el
                                                                    privilegio de portar este título. Trabajos de
                                                                    conservación en la Calle 80. Dos rutas zonales
                                                                    tendrán cambios a partir del 9 de mayo.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/06-05-2022/2022-05-05_boletin_la_bogota_que_estamos_construyendo.pdf'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 92</h4>
                                                                <i>jueves, 5 de mayo de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>¡Otro sueño cumplido para la ciudad! Bogotá tendrá su
                                                                    sistema de bicicletas compartidas: serán 300
                                                                    estaciones y 3.300 bicis públicas. Listo PMT para
                                                                    avanzar en la construcción del puente la Calle 3 con
                                                                    Avenida 68. La UMV intervino cerca de 1.000 m2 de
                                                                    malla vial en el barrio Santa Catalina, Kennedy.
                                                                    ¿Sabías que los nombres de las estaciones de la
                                                                    Calle Sexta son muiscas?</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/06-05-2022/2022-05-04_boletin_la_bogota_que_estamos_construyendo.pdf'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 91</h4>
                                                                <i>miércoles, 4 de mayo de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>La UMV interviene la Avenida la Conejera que conecta
                                                                    al municipio de Cota con Bogotá. Cierres viales por
                                                                    obras en red peatonal Zona Rosa. Cinco avances de
                                                                    #LaBogotaQueEstamosConstruyendo que debes conocer.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/03-05-2022/2022-05-03_boletinlbqec.pdf'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 90</h4>
                                                                <i>martes, 3 de mayo de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>La UMV da recomendaciones a los conductores y
                                                                    ciudadanía en general durante la temporada de
                                                                    lluvias que afronta Bogotá. En San Cristóbal
                                                                    iniciaron trabajos de conservación en el espacio
                                                                    público. Autoridades incautaron 477 armas blancas y
                                                                    capturaron 33 personas en flagrancia en el Sistema
                                                                    de Transporte. Maratón de actividades gratuitas para
                                                                    motociclistas durante el Mes de la Prevención Vial.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/03-05-2022/2022-05-02_boletinlbqec.pdf'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 89</h4>
                                                                <i>lunes, 2 de mayo de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Avanza obra en la Avenida Ciudad de Cali. La UMV
                                                                    mejoró un importante tramo de la Avenida Ciudad de
                                                                    Cali. Nueva ruta zonal conecta a los usuarios con la
                                                                    Estación Calle 187. </p>
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
                                                                <h4>BOLETÍN 88</h4>
                                                                <i>viernes, 29 de abril de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Mantenimiento en puente vehicular de la Avenida NQS
                                                                    con Avenida Calle 13. Prepárese para el cierre total
                                                                    de la calzada lenta de Calle 100 entre av. Carrera
                                                                    11 y carrera 8A. El Director de la UMV compartió, en
                                                                    el XXII Simposio Colombiano sobre Ingeniería de
                                                                    Pavimentos, el trabajo de la entidad para mejorar
                                                                    las ciclorrutas. Dos nuevos servicios zonales para
                                                                    beneficio de los usuarios del Sistema de Transporte
                                                                    de Bogotá. </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href=''>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 87</h4>
                                                                <i>jueves, 28 de abril de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Mantenimiento en vías de Tunjuelito. 11 soluciones de
                                                                    innovación tecnológica para la seguridad vial.
                                                                    Atención: el próximo sábado y domingo, TransMiCable
                                                                    ajustará su horario por mantenimiento. La UMV
                                                                    participó, junto con otras entidades, de una nueva
                                                                    jornada de socialización de gestión que se realizó
                                                                    en Engativá preventivo.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-04-2022/2022-04-27_boletinlbqec.pdf'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 86</h4>
                                                                <i>miércoles, 27 de abril de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Durante los primeros cuatro meses de 2022 la UMV ha
                                                                    tapado más de 200 mil mts2 de huecos. 531 armas
                                                                    blancas incautaron las autoridades en el Sistema de
                                                                    Transporte. #LaBogotáQueEstamosConstruyendo ¿Por qué
                                                                    parquear en zonas autorizadas es construir una mejor
                                                                    movilidad para todos?</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-04-2022/2022-04-26_boletinlbqec.pdf'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 85</h4>
                                                                <i>martes, 26 de abril de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Gracias al Consejo de Gobierno realizado en Puente
                                                                    Aranda, la UMV mejoró la malla vial de un tramo de
                                                                    la carrera 36. Cierres en el espacio público en
                                                                    puente vehicular de la avenida Ciudad de Quito con
                                                                    calle 13. Plan para reponer información en paraderos
                                                                    del SITP.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-04-2022/2022-04-25_boletinlbqec.pdf'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 84</h4>
                                                                <i>lunes, 25 de abril de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>En Usme la UMV adelanta trabajos de bioingeniería para garantizar la conectividad de vías rurales, En Usme la UMV adelanta trabajos de bioingeniería para garantizar la conectividad de vías rurales Obras de mantenimiento vial en la localidad de San Cristóbal, ¡Tú también haces parte de la solución a los trancones de Bogotá!</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-04-2022/2022-04-22_boletinlbqec.pdf'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 83</h4>
                                                                <i>viernes, 22 de abril de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>La UMV mejora el estado de importantes vías en la
                                                                    localidad de Puente Aranda. Idu inició trabajos de
                                                                    conservación vial en la localidad de Suba. Estación
                                                                    Calle 127 deja de operar temporalmente desde este
                                                                    sábado 23 de abril. </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-04-2022/2022-04-21_boletinlbqec.pdf'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 82</h4>
                                                                <i>jueves, 21 de abril de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>IDU concluye mantenimiento en varias vías de Usaquén.
                                                                    Cierre temporal de un vagón de la estación Suba
                                                                    Calle 100 por obras. </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/20-04-2022/2022-04-20_boletinlbqec_0.pdf'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 81</h4>
                                                                <i>miércoles, 20 de abril de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>El paso peatonal Paseo de Meissen se encuentra en un
                                                                    60% de avance. Trabajos de conservación en el
                                                                    espacio público. Servicio zonal T16 pasa a llamarse
                                                                    A324 Perseverancia – K324 Refugio. Y mucho más.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/20-04-2022/2022-04-19_boletinlbqec_0.pdf'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 80</h4>
                                                                <i>martes, 19 de abril de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Durante el primer trimestre de 2022 la UMV tapó 2.538
                                                                    huecos en la localidad de Tunjuelito. Cierre total
                                                                    del andén y del carril Sur de la Calle 116 entre las
                                                                    carreras 14 y 14A. 240 armas blancas incautadas
                                                                    durante Semana Santa en el Sistema de Transporte de
                                                                    Bogotá. Y mucho más.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/18-04-2022/2022-04-18_boletinlbqec.pdf'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 79</h4>
                                                                <i>lunes, 18 de abril de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Tres nuevos servicios zonales para beneficio de los
                                                                    usuarios del Sistema de Transporte de Bogotá. La
                                                                    señalización en obra está diseñada para la seguridad
                                                                    de todos los actores viales, y mucho más.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/18-04-2022/2022-04-13_boletinlbqec.pdf'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 78</h4>
                                                                <i>miércoles, 13 de abril de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Conozca el cierre del carril oriental sentido Sur-
                                                                    Norte de la av. Carrera 68 entre calle 27 sur y
                                                                    transversal 53. La UMV mejoró la malla vial de un
                                                                    sector del barrio Santa Bibiana, Usaquén, y mucho
                                                                    más.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/12-04-2022/2022-04-12_boletinlbqec.pdf'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 77</h4>
                                                                <i>martes, 12 de abril de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>La UMV adelanta obras de mejoramiento de la
                                                                    ciclorruta del Canal Fucha. Entraron en operación
                                                                    nuevos vagones de las estaciones Polo y Santa
                                                                    Isabel. Cambio de horario de atención en los Puntos
                                                                    IDU, y mucho más.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/11-04-2022/2022-04-11_boletinlbqem.pdf'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 76</h4>
                                                                <i>lunes, 11 de abril de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Avanza la reparación de la Autopista Norte. Durante
                                                                    los tres primeros meses del año la UMV realizó más
                                                                    del 60% del trabajo para tapar huecos efectuado en
                                                                    2021. La lectura se mueve en TransMilenio, mucho
                                                                    más.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/11-04-2022/2022-04-08_boletinlbqem.pdf'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 75</h4>
                                                                <i>viernes, 8 de abril de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Entre Carrera 7 y Autopista Norte Habrá traslado de
                                                                    paraderos SITP en el costado oriental. 74 capturas y
                                                                    más de 1.500 armas blancas incautadas deja el primer
                                                                    mes de la estrategia #MásDe25MilOjosAtentos, y mucho
                                                                    más.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-04-2022/2022-04-07_boletin_la_bogota_que_estamos_construyendo.pdf'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 74</h4>
                                                                <i>jueves, 7 de abril de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Así funciona el contraflujo en la Av. de las Américas
                                                                    para descongestionar el occidente de Bogotá. La UMV
                                                                    apoyó la implementación del nuevo carril de
                                                                    contraflujo en la Avenida de las Américas para
                                                                    descongestionar el occidente de la ciudad, y mucho
                                                                    más.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/05-04-2022/2022-04-06_boletinlbqec.pdf'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 73</h4>
                                                                <i>miércoles, 6 de abril de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>El Portal del Sur contará con más cupos para las
                                                                    bicis. Conozca la máquina niveladora de arrastre con
                                                                    la que se intervenían las vías a finales de 1800, y
                                                                    mucho más.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/05-04-2022/2022-04-05_boletinlbqec.pdf'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 72</h4>
                                                                <i>martes, 5 de abril de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>La UMV adelanta obras de mantenimiento vial a los
                                                                    desvíos que se implementarán para las obras del
                                                                    metro de Bogotá. Prepárese para el cierre de la
                                                                    calzada norte en sentido Oriente - Occidente en la
                                                                    Avenida Villavicencio entre la Avenida Primero de
                                                                    Mayo y carrera 78i, mucho más. </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-04-2022/2022-04-04_boletinlbqec.pdf'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 71</h4>
                                                                <i>lunes, 4 de abril de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>La UMV ha priorizado varias vías de la localidad de
                                                                    Teusaquillo para su intervención. Para actividades
                                                                    de conexión de tubería de redes secas Cierre parcial
                                                                    de carril en bocacalles en Avenida 68, mucho ,ás.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/01-04-2022/2022-04-01_boletinlbqec.pdf'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 70</h4>
                                                                <i>viernes, 1 de abril de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Distrito lanzó campaña para proteger a los peatones y
                                                                    cambiar la historia del mal parqueo. 213 nuevos
                                                                    buses eléctricos del Sistema de Transporte de Bogotá
                                                                    comienzan su operación este sábado 2 de abril.
                                                                    Inician actividades de conservación de espacio
                                                                    público, y mucho más.</p>
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
                                                                    <h4>BOLETÍN 69</h4>
                                                                    <i>jueves, 31 de marzo de 2022</i>
                                                                </div>
                                                                <div class='descripcion-boletin'>
                                                                    <p>#LaBogotáQueEstamosCostruyendo Bogotá ya cuenta
                                                                        con 1.061 buses eléctricos que estarán operando
                                                                        a finales de abril. Para descongestionar el
                                                                        occidente de Bogotá, se implementa contraflujo
                                                                        en la Av. de las Américas. Espacio público
                                                                        accesible, y mucho más.</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>

                                                    <div class='col-xs-12'>
                                                        <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/31-03-2022/2022-03-30_boletinlbqec.pdf'>
                                                            <div class='btn-boletin'>
                                                                <div class='titulo-boletin'>
                                                                    <h4>BOLETÍN 68</h4>
                                                                    <i>miércoles, 30 de marzo de 2022</i>
                                                                </div>
                                                                <div class='descripcion-boletin'>
                                                                    <p>Así ve la comunidad las obras del patio taller,
                                                                        abitantes del barrio Chicó Norte ahora disfrutan
                                                                        de mejores espacio públicos, Distrito busca a
                                                                        propietarios de 194 vehículos del desmontado
                                                                        servicio de Transporte Público Colectivo (TPC),
                                                                        y mucho más.</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>

                                                    <div class='col-xs-12'>
                                                        <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/31-03-2022/2022-03-29_boletinlbqec.pdf'>
                                                            <div class='btn-boletin'>
                                                                <div class='titulo-boletin'>
                                                                    <h4>BOLETÍN 67</h4>
                                                                    <i>martes, 29 de marzo de 2022</i>
                                                                </div>
                                                                <div class='descripcion-boletin'>
                                                                    <p>Los habitantes del barrio Timiza en la localidad
                                                                        de Kennedy podrán disfrutar de una renovada vía
                                                                        gracias a trabajo de la UMV. Prolongación de
                                                                        cierres viales en Avenida 68 con Calle 100. 519
                                                                        armas blancas incautadas en el Sistema, otro
                                                                        logro de la estrategia #MásDe25MilOjosAtentos, y
                                                                        mucho más.</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>

                                                    <div class='col-xs-12'>
                                                        <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/31-03-2022/2022-03-28_boletinlbqec.pdf'>
                                                            <div class='btn-boletin'>
                                                                <div class='titulo-boletin'>
                                                                    <h4>BOLETÍN 66</h4>
                                                                    <i>lunes, 28 de marzo de 2022</i>
                                                                </div>
                                                                <div class='descripcion-boletin'>
                                                                    <p>La Unidad de Mantenimiento Vial mejoró las calles
                                                                        aledañas a una de las iglesias más importantes
                                                                        de la ciudad. Así será el diseño de la Avenida
                                                                        Ciudad de Cali, alimentadora de la línea Metro.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>

                                                    <div class='col-xs-12'>
                                                        <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/31-03-2022/2022-03-24_boletinbem.pdf'>
                                                            <div class='btn-boletin'>
                                                                <div class='titulo-boletin'>
                                                                    <h4>BOLETÍN 65</h4>
                                                                    <i>jueves, 24 de marzo de 2022</i>
                                                                </div>
                                                                <div class='descripcion-boletin'>
                                                                    <p>Finalizado en cinco cruces, traslado anticipado
                                                                        de redes de alta tensión para el Metro. UMV
                                                                        mejora espacio público del barrio Las Margaritas
                                                                        en la Localidad de Kennedy. Cierres viales por
                                                                        inicio de obras en Zona Rosa, y mucho más.</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>

                                                    <div class='col-xs-12'>
                                                        <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/31-03-2022/2022-03-23_boletinbem.pdf'>
                                                            <div class='btn-boletin'>
                                                                <div class='titulo-boletin'>
                                                                    <h4>BOLETÍN 64</h4>
                                                                    <i>miércoles, 23 de marzo de 2022</i>
                                                                </div>
                                                                <div class='descripcion-boletin'>
                                                                    <p>La UMV llegó al barrio Muequetá para adelantar
                                                                        jornadas nocturnas para mejorar las vías. Nuevo
                                                                        servicio zonal K333 Est. Av. Rojas – F333 Ciudad
                                                                        Alsacia. </p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>

                                                    <div class='col-xs-12'>
                                                        <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/31-03-2022/2022-03-22_boletinbem.pdf'>
                                                            <div class='btn-boletin'>
                                                                <div class='titulo-boletin'>
                                                                    <h4>BOLETÍN 63</h4>
                                                                    <i>martes, 22 de marzo de 2022</i>
                                                                </div>
                                                                <div class='descripcion-boletin'>
                                                                    <p>La UMV adelanta labores de parcheo en un tramo de
                                                                        la carrera séptima ubicado en la localidad de
                                                                        Chapinero. Así será la Avenida 68, troncal
                                                                        alimentadora de la línea del Metro. Servicios
                                                                        zonales amplían sus horarios, y mucho más.</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>

                                                    <div class='col-xs-12'>
                                                        <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/31-03-2022/2022-03-18_boletinbem.pdf'>
                                                            <div class='btn-boletin'>
                                                                <div class='titulo-boletin'>
                                                                    <h4>BOLETÍN 62</h4>
                                                                    <i>viernes, 18 de marzo de 2022</i>
                                                                </div>
                                                                <div class='descripcion-boletin'>
                                                                    <p>La UMV trabaja para mejorar la malla vial de la
                                                                        localidad de Barrios Unidos. Patio Taller de la
                                                                        Primera Línea del Metro, ahora produce el
                                                                        concreto para su construcción. Cierre de
                                                                        separadores por obras en la Avenida 68, y más.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>

                                                    <div class='col-xs-12'>
                                                        <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/31-03-2022/2022-03-17_boletinbem.pdf'>
                                                            <div class='btn-boletin'>
                                                                <div class='titulo-boletin'>
                                                                    <h4>BOLETÍN 61</h4>
                                                                    <i>jueves, 17 de marzo de 2022</i>
                                                                </div>
                                                                <div class='descripcion-boletin'>
                                                                    <p>IDU concluye la conservación de vías que soportan
                                                                        el SITP en las localidades de Kennedy,
                                                                        Teusaquillo, Puente Aranda y Fontibón. La UMV
                                                                        inició la señalización de 300 vías en varias
                                                                        localidades de la ciudad, y mucho más.</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>

                                                    <div class='col-xs-12'>
                                                        <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/16-03-2022/2022-03-16_boletinbem.pdf'>
                                                            <div class='btn-boletin'>
                                                                <div class='titulo-boletin'>
                                                                    <h4>BOLETÍN 60</h4>
                                                                    <i>miércoles, 16 de marzo de 2022</i>
                                                                </div>
                                                                <div class='descripcion-boletin'>
                                                                    <p>Con la estrategia ‘Controles Salvavidas’ el
                                                                        Distrito busca reducir el número de víctimas en
                                                                        el tránsito. Fatalidades por siniestros viales
                                                                        en Bogotá. Se realizó la primera jornada de "UMV
                                                                        De Puertas Abiertas" de este año 2022. Y más.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class='col-xs-12'>
                                                        <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/16-03-2022/2022-03-15_boletinbem.pdf'>
                                                            <div class='btn-boletin'>
                                                                <div class='titulo-boletin'>
                                                                    <h4>BOLETÍN 59</h4>
                                                                    <i>martes, 15 de marzo de 2022</i>
                                                                </div>
                                                                <div class='descripcion-boletin'>
                                                                    <p>En los últimos meses la UMV atendió 25
                                                                        emergencias que diﬁcultaban la movilidad en
                                                                        Bogotá. En la localidad de San Cristóbal Inicia
                                                                        construcción de andenes y de segmento vial en el
                                                                        barrio San Jacinto. Y más.</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class='col-xs-12'>
                                                        <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/16-03-2022/2022-03-14_boletinbem.pdf'>
                                                            <div class='btn-boletin'>
                                                                <div class='titulo-boletin'>
                                                                    <h4>BOLETÍN 58</h4>
                                                                    <i>lunes, 14 de marzo de 2022</i>
                                                                </div>
                                                                <div class='descripcion-boletin'>
                                                                    <p>Más de 5.000 mujeres mueven a Bogotá Bogotá
                                                                        reconoce la labor de más de 5.000 mujeres que
                                                                        trabajan por el Sistema de Transporte Público.
                                                                        Mañana 15 de marzo se desarrollará la primera
                                                                        jornada de “UMV de Puertas Abiertas” de 2022, y
                                                                        más.</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class='col-xs-12'>
                                                        <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/11-03-2022/2022-03-11_boletinbem.pdf'>
                                                            <div class='btn-boletin'>
                                                                <div class='titulo-boletin'>
                                                                    <h4>BOLETÍN 57</h4>
                                                                    <i>viernes, 11 de marzo de 2022</i>
                                                                </div>
                                                                <div class='descripcion-boletin'>
                                                                    <p>¡Juntos Cuidamos Suba! En esta localidad la UMV
                                                                        ha tapado más de 35.700 huecos. TransMilenio
                                                                        pone a disposición de los usuarios un servicio
                                                                        zonal adicional para las elecciones. Y más.</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class='col-xs-12'>
                                                        <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/10-03-2022/2022-03-10_boletin_bogota_esta_mejorando_.pdf'>
                                                            <div class='btn-boletin'>
                                                                <div class='titulo-boletin'>
                                                                    <h4>BOLETÍN 56</h4>
                                                                    <i>jueves, 10 de marzo de 2022</i>
                                                                </div>
                                                                <div class='descripcion-boletin'>
                                                                    <p>Con éxito inició en firme la restauración la
                                                                        escultura ‘Bolívar Ecuestre’. Este sábado 12 de
                                                                        marzo, inician obras de externalización de
                                                                        taquillas en la estación calle 127. Cierre de
                                                                        dos carriles y separador en Autopista al Llano.
                                                                        Y más.</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class='col-xs-12'>
                                                        <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/10-03-2022/2022-03-09_boletin_bogota_esta_mejorando_.pdf'>
                                                            <div class='btn-boletin'>
                                                                <div class='titulo-boletin'>
                                                                    <h4>BOLETÍN 55</h4>
                                                                    <i>miércoles, 9 de marzo de 2022</i>
                                                                </div>
                                                                <div class='descripcion-boletin'>
                                                                    <p>La UMV está comprometida con mejorar la calidad
                                                                        del aire en Ciudad Bolívar. Estrategia
                                                                        #MasDe25MilOjosAtentos arroja primeros
                                                                        resultados. El Metro de Bogotá genera
                                                                        oportunidades de trabajo y espacios seguros para
                                                                        la mujer. Y más.</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class='col-xs-12'>
                                                        <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/10-03-2022/2022-03-08_boletin_bogota_esta_mejorando_.pdf'>
                                                            <div class='btn-boletin'>
                                                                <div class='titulo-boletin'>
                                                                    <h4>BOLETÍN 54</h4>
                                                                    <i>martes, 8 de marzo de 2022</i>
                                                                </div>
                                                                <div class='descripcion-boletin'>
                                                                    <p>Entra en operación segunda área de implementación
                                                                        de la Zona de Parqueo Pago. En Avenida Suba
                                                                        Inician las obras de conservación del espacio
                                                                        público y ciclorruta. Ocho servicios zonales
                                                                        ampliaron su horario desde el 7 de marzo, y más.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class='col-xs-12'>
                                                        <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-03-2022/2022-03-07_boletinbem_0.pdf'>
                                                            <div class='btn-boletin'>
                                                                <div class='titulo-boletin'>
                                                                    <h4>BOLETÍN 53</h4>
                                                                    <i>lunes, 7 de marzo de 2022</i>
                                                                </div>
                                                                <div class='descripcion-boletin'>
                                                                    <p>La UMV intervino las calles alrededor del Parque
                                                                        de la 93, con este trabajo se mejoran los
                                                                        recorridos de los residentes. Comerciantes y
                                                                        transeúntes de la zona, entre la Carrera 7 y
                                                                        Autopista Norte Se adelanta la construcción de
                                                                        aceras y ciclorrutas de las calles 92 y 94. Y
                                                                        más.</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class='col-xs-12'>
                                                        <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-03-2022/2022-03-04_boletinbem_0.pdf'>
                                                            <div class='btn-boletin'>
                                                                <div class='titulo-boletin'>
                                                                    <h4>BOLETÍN 52</h4>
                                                                    <i>viernes, 4 de marzo de 2022</i>
                                                                </div>
                                                                <div class='descripcion-boletin'>
                                                                    <p>Distrito implementa nuevas medidas de movilidad
                                                                        en la Autopista Norte para beneficiar a
                                                                        estudiantes. Cerca de 30 mil cámaras y más de 25
                                                                        mil ojos brindan seguridad a los usuarios en
                                                                        TransMilenio, y más.</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class='col-xs-12'>
                                                        <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/02-03-2022/2022-03-03_boletinbem.pdf'>
                                                            <div class='btn-boletin'>
                                                                <div class='titulo-boletin'>
                                                                    <h4>BOLETÍN 51</h4>
                                                                    <i>jueves, 3 de marzo de 2022</i>
                                                                </div>
                                                                <div class='descripcion-boletin'>
                                                                    <p>En 2021, Bogotá avanzó en movilidad sostenible,
                                                                        cobertura, seguridad y planes anti-evasión.
                                                                        Ajustes operativos en servicios de la Troncal
                                                                        Américas. Empresa Metro implementa con éxito
                                                                        brigada de supervisión de predios, y más. </p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class='col-xs-12'>
                                                        <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/02-03-2022/2022-03-02_boletinbem.pdf'>
                                                            <div class='btn-boletin'>
                                                                <div class='titulo-boletin'>
                                                                    <h4>BOLETÍN 50</h4>
                                                                    <i>miércoles, 2 de marzo de 2022</i>
                                                                </div>
                                                                <div class='descripcion-boletin'>
                                                                    <p>En 2021, Bogotá avanzó en movilidad sostenible,
                                                                        cobertura, seguridad y planes anti-evasión, La
                                                                        Unidad de Mantenimiento Vial le da una nueva
                                                                        cara a las vías del barrio Batán en Suba,
                                                                        gracias a las obras adelantadas para tapar los
                                                                        huecos, y más.</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class='col-xs-12'>
                                                        <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/01-03-2022/2022-04-01_boletinbem.pdf'>
                                                            <div class='btn-boletin'>
                                                                <div class='titulo-boletin'>
                                                                    <h4>BOLETÍN 49</h4>
                                                                    <i>martes, 1 de marzo de 2022</i>
                                                                </div>
                                                                <div class='descripcion-boletin'>
                                                                    <p>Logros de Movilidad en 2021 y metas para el 2022
                                                                        Con el inicio de alrededor de 200 frentes de
                                                                        obra en 2021, Bogotá sigue mejorando en su
                                                                        movilidad.</p>
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
                                                                <h4>BOLETÍN 48</h4>
                                                                <i>lunes, 28 de febrero de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Recuerde que el 1 de marzo inicia la operación de la
                                                                    Ventanilla Única de Servicios de Movilidad, Los
                                                                    trabajos de mantenimiento vial llegaron a la
                                                                    localidad de Teusaquillo con mejoras contundentes, y
                                                                    más.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/01-03-2022/2022-02-25_boletinbem.pdf'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 47</h4>
                                                                <i>viernes, 25 de febrero de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>En la nueva Avenida Guayacanes se abre calzada
                                                                    vehicular, Movilidad avanza en la descongestión de
                                                                    patios de vehículos declarados en abandono, Desde la
                                                                    topografía, Diego Figueredo aporta en la
                                                                    construcción del metro de Bogotá, y más.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/01-03-2022/2022-02-24_boletinbem.pdf'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 46</h4>
                                                                <i>jueves, 24 de febrero de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Más kilómetros de ciclorruta en la ciudad Avanza la
                                                                    construcción de aceras y ciclorrutas en la Calle
                                                                    116, uenos resultados en operativos de seguridad en
                                                                    el Sistema de Transporte, y más.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/01-03-2022/2022-02-23_boletinbem.pdf'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 45</h4>
                                                                <i>miércoles, 23 de febrero de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>En marzo se acaba el SIM y nace la Ventanilla Única
                                                                    de Servicios de Movilidad en Bogotá, En la localidad
                                                                    de Bosa Avanza la construcción de una nueva estación
                                                                    de TransMilenio, y más.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/01-03-2022/2022-02-22_boletinbem.pdf'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 44</h4>
                                                                <i>martes, 22 de febrero de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>En las localidades Suba y Teusaquillo Habitantes y
                                                                    transeúntes disfrutan de nuevos espacios públicos,
                                                                    En Engativá, la UMV realiza obras nocturnas para
                                                                    mejorar algunas vías del occidente de la ciudad, y
                                                                    más.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/01-03-2022/2022-02-21_boletinbem.pdf'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 43</h4>
                                                                <i>lunes, 21 de febrero de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Una indígena de la comunidad Wayuu es la nueva
                                                                    integrante del equipo de atención al ciudadano de la
                                                                    UMV y el enlace entre la entidad y esta población,
                                                                    Inician labores de conservación y mantenimiento en
                                                                    espacio público, y más.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/01-03-2022/2022-02-18_boletinbem.pdf'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 42</h4>
                                                                <i>viernes, 18 de febrero de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>Acacias y Santa Teresa, los 2 barrios en Usaquén que
                                                                    se vieron beneficiados con las obras viales de la
                                                                    UMV, En obras de la Avenida 68 Comunidades de
                                                                    Kennedy y Puente Aranda son convocadas para ejercer
                                                                    veeduría ciudadana, y más.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/01-03-2022/2022-02-17_boletinbem.pdf'>
                                                        <div class='btn-boletin'>
                                                            <div class='titulo-boletin'>
                                                                <h4>BOLETÍN 41</h4>
                                                                <i>Jueves, 17 de febrero de 2022</i>
                                                            </div>
                                                            <div class='descripcion-boletin'>
                                                                <p>La UMV aprovechará las noches de esta semana para
                                                                    intervenir importantes vías en la localidad de
                                                                    Fontibón, Contratistas llevan a cabo sensibilización
                                                                    para ciclistas La Avenida 68 suma kilómetros a la
                                                                    red de ciclorrutas en la ciudad, y más.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class="enlace" href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/01-03-2022/2022-02-16_boletinbem.pdf">
                                                        <div class="btn-boletin">
                                                            <div class="titulo-boletin">
                                                                <h4>BOLETÍN 40</h4>
                                                                <i>Miércoles, 16 de febrero de 2022</i>
                                                            </div>
                                                            <div class="descripcion-boletin">
                                                                <p>El Pico y Placa Extendido en Bogotá cumplió un mes de
                                                                    implementación, Nuevos buses eléctricos impactarán
                                                                    en la calidad del aire de Bogotá, En horario
                                                                    nocturno Cierres viales por actividades preliminares
                                                                    en Avenida 68, y más.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class="enlace" href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/15-02-2022/2022-02-15_boletinbem.pdf">
                                                        <div class="btn-boletin">
                                                            <div class="titulo-boletin">
                                                                <h4>BOLETÍN 39</h4>
                                                                <i>Martes, 15 de Febrero de 2022</i>
                                                            </div>
                                                            <div class="descripcion-boletin">
                                                                <p>Más de 30.000 usuarios se benefician diariamente con
                                                                    los 172 nuevos buses eléctricos. La UMV sigue
                                                                    trabajando para mejorar las vías de la localidad de
                                                                    Bosa. Con un avance del 67.3% avanza la construcción
                                                                    del ciclopuente Canal Molinos, y más.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class="enlace" href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/15-02-2022/2022-02-14_boletinbem.pdf">
                                                        <div class="btn-boletin">
                                                            <div class="titulo-boletin">
                                                                <h4>BOLETÍN 38</h4>
                                                                <i>Lunes, 14 de Febrero de 2022</i>
                                                            </div>
                                                            <div class="descripcion-boletin">
                                                                <p>Más de 15 mil peatones y ciclistas disfrutan de un
                                                                    nuevo espacio que prioriza su movilidad y seguridad
                                                                    vial. El Equipo de Cultura Ciudadana de la UMV
                                                                    trabaja para fortalecer la sana convivencia entre
                                                                    los colaboradores y los residentes de las vías a
                                                                    intervenir, y más</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class="enlace" href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/11-02-2022/2022-02-11_boletinbem.pdf">
                                                        <div class="btn-boletin">
                                                            <div class="titulo-boletin">
                                                                <h4>BOLETÍN 37</h4>
                                                                <i>Viernes, 11 de Febrero de 2022</i>
                                                            </div>
                                                            <div class="descripcion-boletin">
                                                                <p>Bogotá recibió reconocimiento internacional por sus
                                                                    acciones para promover la movilidad sostenible.
                                                                    Avenida 68, Alimentadora de la Línea del Metro
                                                                    cierres viales para avance de obras. Cerca de 3.000
                                                                    habitantes de la localidad de Suba se beneficiarán
                                                                    con las obras de mantenimiento vial que inició la
                                                                    UMV en este sector, y más.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class="enlace" href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/11-02-2022/2022-02-10_boletinbem.pdf">
                                                        <div class="btn-boletin">
                                                            <div class="titulo-boletin">
                                                                <h4>BOLETÍN 36</h4>
                                                                <i>Jueves, 10 de Febrero de 2022</i>
                                                            </div>
                                                            <div class="descripcion-boletin">
                                                                <p>Con la firma del Acta de Inicio, Bogotá contará con
                                                                    el segundo Sistema de Bicicletas Compartidas más
                                                                    grande de LATAM. Cierres en la AutoNorte en
                                                                    construcción el ciclopuente Canal Molinos. La UMV
                                                                    está en Bosa mejorando algunas de las vías de esta
                                                                    localidad, y más.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class="enlace" href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/11-02-2022/2022-02-09_boletinbem.pdf">
                                                        <div class="btn-boletin">
                                                            <div class="titulo-boletin">
                                                                <h4>BOLETÍN 35</h4>
                                                                <i>Miercoles, 9 de Febrero de 2022</i>
                                                            </div>
                                                            <div class="descripcion-boletin">
                                                                <p>Cierre parcial de espacio público por obra más de 800
                                                                    mil personas beneficiadas con andenes amplios y
                                                                    seguros en Av. Guayacanes. Conoce cómo verificar el
                                                                    saldo de la tarjeta tullave con nuestra TransMiApp,
                                                                    Y más</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class="enlace" href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/09-02-2022/2022-02-08_boletinbem.pdf">
                                                        <div class="btn-boletin">
                                                            <div class="titulo-boletin">
                                                                <h4>BOLETÍN 34</h4>
                                                                <i>Martes, 8 de Febrero de 2022</i>
                                                            </div>
                                                            <div class="descripcion-boletin">
                                                                <p>Obras en la Avenida 68 a partir de la segunda semana
                                                                    de febrero habrá nuevos cierres y desvíos. El
                                                                    Contador, uno de los barrios en Usaquén dónde se han
                                                                    priorizado los trabajos de Mantenimiento Vial y más.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class="enlace" href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/09-02-2022/2022-02-07_boletinbem.pdf">
                                                        <div class="btn-boletin">
                                                            <div class="titulo-boletin">
                                                                <h4>BOLETÍN 33</h4>
                                                                <i>Lunes, 7 de Febrero de 2022</i>
                                                            </div>
                                                            <div class="descripcion-boletin">
                                                                <p>A partir de este lunes 7 de febrero nuevos cierres
                                                                    por obras en Avenida Guayacanes. La alcaldía de
                                                                    Bogotá sigue trabajando en el mejoramiento de las
                                                                    vías rurales de Ciudad Bolívar y más.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class="enlace" href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-02-2022/2022-02-04_boletin_bem_25.pdf">
                                                        <div class="btn-boletin">
                                                            <div class="titulo-boletin">
                                                                <h4>BOLETÍN 32</h4>
                                                                <i>Viernes, 4 de Febrero de 2022</i>
                                                            </div>
                                                            <div class="descripcion-boletin">
                                                                <p>Los huecos en las vías del barrio Caobos Salazar
                                                                    hacen parte del pasado. Continúan las obras en Av.
                                                                    Guayacanes Cierre parcial en Carrera 89 B y Calle 49
                                                                    Sur. Usuarios de TransMilenio respiran un aire más
                                                                    limpio, y más.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class="enlace" href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-02-2022/2022-02-03_boletin_bem_24.pdf">
                                                        <div class="btn-boletin">
                                                            <div class="titulo-boletin">
                                                                <h4>BOLETÍN 31</h4>
                                                                <i>Jueves, 3 de Febrero de 2022</i>
                                                            </div>
                                                            <div class="descripcion-boletin">
                                                                <p>En el primer mes del 2022 la UMV ha mejorado más de
                                                                    45 mil daños viales. En obra la Extensión Caracas
                                                                    Sur Cierres entre Estación Molinos y Portal Usme. La
                                                                    nueva cara de portales y estaciones de TransMilenio
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class="enlace" href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/01-03-2022/2022-02-02_boletinbem.pdf">
                                                        <div class="btn-boletin">
                                                            <div class="titulo-boletin">
                                                                <h4>BOLETÍN 30</h4>
                                                                <i>Miércoles, 2 de febrero de 2022</i>
                                                            </div>
                                                            <div class="descripcion-boletin">
                                                                <p>Avanzan las obras en Av. Ciudad de Cali Iniciaron
                                                                    actividades para la construcción del ciclopuente a
                                                                    la altura de la Av. Villavicencio, En tiempo récord
                                                                    la UMV mejoró cuatro calles de la localidad de
                                                                    Kennedy, y más.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class="enlace" href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/01-03-2022/2022-02-01_boletinbem.pdf">
                                                        <div class="btn-boletin">
                                                            <div class="titulo-boletin">
                                                                <h4>BOLETÍN 29</h4>
                                                                <i>Martes, 1 de febrero de 2022</i>
                                                            </div>
                                                            <div class="descripcion-boletin">
                                                                <p>La UMV mejoró varias calles del barrio Galerías de la
                                                                    localidad de Teusaquillo, Dos nuevas rutas del SITP
                                                                    conectan las localidades de San Cristóbal y
                                                                    Chapinero.</p>
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
                                                                <h4>BOLETÍN 28</h4>
                                                                <i>Lunes, 31 de Enero de 2022</i>
                                                            </div>
                                                            <div class="descripcion-boletin">
                                                                <p>En Ciudad Bolívar se realizan trabajos para mejorar
                                                                    la malla vial en el barrio Estrella del Sur.
                                                                    ¡Engativá está mejorando! En esta localidad la UMV
                                                                    realiza obras para la reactivación vial de una zona
                                                                    cercana al Aeropuerto Internacional El Dorado. </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class="enlace" href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/05-02-2022/2022-01-28_boletinbem.pdf">
                                                        <div class="btn-boletin">
                                                            <div class="titulo-boletin">
                                                                <h4>BOLETÍN 27</h4>
                                                                <i>Viernes, 28 de Enero de 2022</i>
                                                            </div>
                                                            <div class="descripcion-boletin">
                                                                <p>La UMV no para
                                                                    y continúa intervenciones en Puente Aranda. Cierre
                                                                    de carril en AutoNorte por obras del ciclopuente
                                                                    Canal Molinos. Cambia el sentido vial de la calle 64
                                                                    de Engativá Pueblo. Y más.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class="enlace" href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/05-02-2022/2022-01-27_boletinbem.pdf">
                                                        <div class="btn-boletin">
                                                            <div class="titulo-boletin">
                                                                <h4>BOLETÍN 26</h4>
                                                                <i>Jueves, 27 de Enero de 2022</i>
                                                            </div>
                                                            <div class="descripcion-boletin">
                                                                <p>Se adelantarán trabajos de desmonte en puente
                                                                    vehicular de la Av. 68 con Calle 26. El estado de
                                                                    las calles alrededor del estadio El Campín mejoraron
                                                                    gracias al Plan de Choque del Distrito. Más de 15
                                                                    mil acciones en pro de la seguridad de usuarios y
                                                                    convivencia dentro de TransMilenio. Y más.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class="enlace" href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/05-02-2022/2022-01-26_boletinbem.pdf">
                                                        <div class="btn-boletin">
                                                            <div class="titulo-boletin">
                                                                <h4>BOLETÍN 25</h4>
                                                                <i>Miercoles, 26 de Enero de 2022</i>
                                                            </div>
                                                            <div class="descripcion-boletin">
                                                                <p>Bogotá, una ciudad a la altura del mundo Empresas
                                                                    privadas se comprometen con Bogotá y la movilidad
                                                                    sostenible. Con tres frentes de obra activos Se
                                                                    adelantan trabajos de conservación de la malla vial
                                                                    en Engativá. Y más.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class="enlace" href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/05-02-2022/2022-01-25_boletinbem.pdf">
                                                        <div class="btn-boletin">
                                                            <div class="titulo-boletin">
                                                                <h4>BOLETÍN 24</h4>
                                                                <i>Martes, 25 de Enero de 2022</i>
                                                            </div>
                                                            <div class="descripcion-boletin">
                                                                <p>Las actividades de Mantenimiento Vial llegaron al
                                                                    barrio Castilla de la localidad de Kennedy. En la
                                                                    localidad de Bosa Por obras de la Av. Ciudad de
                                                                    Cali, la calle 75 Bis Sur tendrá un cierre temporal.
                                                                    Y más.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class="enlace" href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/05-02-2022/2022-01-24_boletinbem.pdf">
                                                        <div class="btn-boletin">
                                                            <div class="titulo-boletin">
                                                                <h4>BOLETÍN 23</h4>
                                                                <i>Lunes, 24 de Enero de 2022</i>
                                                            </div>
                                                            <div class="descripcion-boletin">
                                                                <p>El Plan de Choque llegó al sector de Timiza en
                                                                    Kennedy para mejorar el estado de sus calles. Grupo
                                                                    2: Entre Avenida Bosa y Avenida Villavicencio
                                                                    Afectaciones viales por Avance de Av. Guayacanes.
                                                                    Álvaro Rengifo, nuevo gerente de TRANSMILENIO S.A. Y
                                                                    más.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class="enlace" href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/05-02-2022/2022-01-21_boletinbem.pdf">
                                                        <div class="btn-boletin">
                                                            <div class="titulo-boletin">
                                                                <h4>BOLETÍN 22</h4>
                                                                <i>Viernes, 21 de Enero de 2022</i>
                                                            </div>
                                                            <div class="descripcion-boletin">
                                                                <p>Cuatro barrios de la localidad de Usme mejoraron sus
                                                                    vías con material reciclado. Durante los meses de
                                                                    diciembre y enero la Unidad de Mantenimiento Vial ha
                                                                    estado mejorando el estado de 14 vías de la
                                                                    localidad de Usme.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class="enlace" href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/05-02-2022/2022-01-20_boletinbem.pdf">
                                                        <div class="btn-boletin">
                                                            <div class="titulo-boletin">
                                                                <h4>BOLETÍN 21</h4>
                                                                <i>Jueves, 20 de Enero de 2022</i>
                                                            </div>
                                                            <div class="descripcion-boletin">
                                                                <p>Retos del Sector Movilidad y la ciudadanía en 2022.
                                                                    Así será la extensión de la Primera Línea del Metro
                                                                    de Bogotá hasta la calle 100. Grupos 5 y 8 Reuniones
                                                                    de socialización Avenida 68. Y más</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class="enlace" href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/05-02-2022/2022-01-19_boletinbem.pdf">
                                                        <div class="btn-boletin">
                                                            <div class="titulo-boletin">
                                                                <h4>BOLETÍN 20</h4>
                                                                <i>Miercoles, 19 de Enero de 2022</i>
                                                            </div>
                                                            <div class="descripcion-boletin">
                                                                <p>La UMV arregló los daños viales que afectaban la
                                                                    movilidad del barrio Bella Suiza al norte de la
                                                                    ciudad. Entre Carreras 54B y 53A Comienza
                                                                    rehabilitación de acera norte de la 116. Con la
                                                                    tarjeta personalizada “TuLlave” se puede bloquear el
                                                                    saldo en caso de pérdida. Y más</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class="enlace" href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/09-02-2022/2021-12-18_boletinbem.pdf">
                                                        <div class="btn-boletin">
                                                            <div class="titulo-boletin">
                                                                <h4>BOLETÍN 19</h4>
                                                                <i>Martes, 18 de Enero de 2022</i>
                                                            </div>
                                                            <div class="descripcion-boletin">
                                                                <p>Balance del Pico y Placa Extendido Semana del 11 al
                                                                    14 de enero de 2022. Entre Calles 90 y 95 y a la
                                                                    altura de la Calle 66 Cierres en la Avenida 68, y
                                                                    más</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class="enlace" href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/01-03-2022/2022-01-15_bem.pdf">
                                                        <div class="btn-boletin">
                                                            <div class="titulo-boletin">
                                                                <h4>BOLETÍN 18</h4>
                                                                <i>Sábado, 15 de enero de 2022</i>
                                                            </div>
                                                            <div class="descripcion-boletin">
                                                                <p>La UMV logró cifra récord al reparar cerca de 300.000
                                                                    huecos en la malla de la ciudad en 2021, Inicia la
                                                                    rehabilitación vial de la Avenida 9, entre Calles
                                                                    140 y 145, y más</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class="enlace" href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-01-2022/2021-01-14_boletin_bem.pdf">
                                                        <div class="btn-boletin">
                                                            <div class="titulo-boletin">
                                                                <h4>BOLETÍN 17</h4>
                                                                <i>Viernes, 14 de enero de 2022</i>
                                                            </div>
                                                            <div class="descripcion-boletin">
                                                                <p>Cierres viales por construcción del Paseo Comercial
                                                                    Villas de Granada, TransMilenio hace un llamado a
                                                                    sus usuarios a mantener las medidas de bioseguridad
                                                                    en el Sistema, Así avanzó la bici en Bogotá durante
                                                                    2021, y más.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class="enlace" href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-01-2022/2021-01-13_boletin_bem.pdf">
                                                        <div class="btn-boletin">
                                                            <div class="titulo-boletin">
                                                                <h4>BOLETÍN 16</h4>
                                                                <i>Jueves, 13 de enero de 2022</i>
                                                            </div>
                                                            <div class="descripcion-boletin">
                                                                <p>Así avanzan los estudios en terreno para la línea 2
                                                                    del Metro de Bogotá, En la carrera 9ª. con calle 12
                                                                    Cierre en andén y calzada, por construcción de
                                                                    puente peatonal del Acuerdo de Valorización, Bogotá
                                                                    suscribe contrato para dar inicio al Sistema de
                                                                    Bicicletas Compartidas de la ciudad, y más.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class="enlace" href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-01-2022/2021-01-12_boletin_bem.pdf">
                                                        <div class="btn-boletin">
                                                            <div class="titulo-boletin">
                                                                <h4>BOLETÍN 15</h4>
                                                                <i>Miercoles, 12 de enero de 2022</i>
                                                            </div>
                                                            <div class="descripcion-boletin">
                                                                <p>Desvíos por el inicio de rehabilitación vial en
                                                                    Kennedy, La tarifa de TransMilenio no incrementa
                                                                    para los más vulnerables, Así de fácil puedes
                                                                    consultar el contrato de concesión para las obras de
                                                                    la Primera Línea del Metro de Bogotá, y más.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class="enlace" href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-01-2022/2021-01-07_boletin_bem.pdf">
                                                        <div class="btn-boletin">
                                                            <div class="titulo-boletin">
                                                                <h4>BOLETÍN 14</h4>
                                                                <i>Viernes, 7 de enero de 2022</i>
                                                            </div>
                                                            <div class="descripcion-boletin">
                                                                <p>Con más de 34.000 huecos tapados avanza el Plan de
                                                                    Choque en Bogotá, La UMV hace presencia en Usme con
                                                                    14 frentes de obra de gran impacto, Inicia cierre de
                                                                    calzada lenta de la Calle 26, entre Avenida 68 y
                                                                    Carrera 66, y más.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class="enlace" href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-01-2022/2021-01-06_boletin_bem.pdf">
                                                        <div class="btn-boletin">
                                                            <div class="titulo-boletin">
                                                                <h4>BOLETÍN 13</h4>
                                                                <i>Miercoles, 5 de enero de 2022</i>
                                                            </div>
                                                            <div class="descripcion-boletin">
                                                                <p>Prepárese para regresar Bogotá y recuerde el Pico y
                                                                    Placa Regional, Conozca los detalles de la Avenida
                                                                    Ciudad de Cali, Así funcionan los Comités de
                                                                    Participación Zonal de la Primera Línea del Metro de
                                                                    Bogotá, y más.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class="enlace" href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-01-2022/2021-01-05_boletin_bem.pdf">
                                                        <div class="btn-boletin">
                                                            <div class="titulo-boletin">
                                                                <h4>BOLETÍN 12</h4>
                                                                <i>Miercoles, 5 de enero de 2022</i>
                                                            </div>
                                                            <div class="descripcion-boletin">
                                                                <p>Más de 6 mil buses han sido desintegrados con la
                                                                    salida del SITP Provisional, Cierre por
                                                                    rehabilitación vial en la Calle 147, UMV Implementa
                                                                    Ventanilla Electrónica para radicación, Conozca el
                                                                    cierre total del costado sur de la intersección de
                                                                    la av. Agoberto Mejía con av. Villavicencio, y más.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class="enlace" href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-01-2022/2021-01-04_boletin_bem.pdf">
                                                        <div class="btn-boletin">
                                                            <div class="titulo-boletin">
                                                                <h4>BOLETÍN 11</h4>
                                                                <i>Martes, 4 de enero de 2022</i>
                                                            </div>
                                                            <div class="descripcion-boletin">
                                                                <p>Mantenimientos al espacio público en la Calle 63 y en
                                                                    Avenida Villas, Avenida Villas entre Calle 129 y
                                                                    134, Teusaquillo: otra localidad beneficiada con el
                                                                    plan de choque, Cerca de tres mil conductores del
                                                                    antiguo transporte público ahora son parte del SITP,
                                                                    y más.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class="enlace" href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-01-2022/2021-01-03_boletin_bem.pdf">
                                                        <div class="btn-boletin">
                                                            <div class="titulo-boletin">
                                                                <h4>BOLETÍN 10</h4>
                                                                <i>Lunes, 3 de enero de 2022</i>
                                                            </div>
                                                            <div class="descripcion-boletin">
                                                                <p>Cambios en el Pico y Placa para vehículos
                                                                    particulares en Bogotá, así es la ruta de la Primera
                                                                    Línea del Metro de Bogotá, En TransMilenio continúan
                                                                    jornadas intensivas de aseo y desinfección de buses
                                                                    y estaciones, y más.</p>
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
                                                                <h4>BOLETÍN 9</h4>
                                                                <i>Jueves, 30 de diciembre 2021</i>
                                                            </div>
                                                            <div class="descripcion-boletin">
                                                                <p>Conozca desvíos y alternativas de movilidad por
                                                                    cierre de parte oriental del puente de Av.68 con
                                                                    Calle 26,La mitad de quienes se movilizan en
                                                                    TransMilenio son mujeres, Zona rural de Ciudad
                                                                    bolívar beneficiada con el mejoramiento de sus vías,
                                                                    y más.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class="enlace" href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-01-2022/2021-12-29_boletin_bem.pdf">
                                                        <div class="btn-boletin">
                                                            <div class="titulo-boletin">
                                                                <h4>BOLETÍN 8</h4>
                                                                <i>Miercoles, 29 de diciembre 2021</i>
                                                            </div>
                                                            <div class="descripcion-boletin">
                                                                <p>Extensión de Troncal Caracas mejorará movilidad del
                                                                    sur de Bogotá, En tiempo récord, dos cuadrillas
                                                                    intervinieron huecos en la Y de Yomasa, En
                                                                    estaciones de TransMilenio más de 42.000 usuarios se
                                                                    han hecho pruebas de Covid-19, y más.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class="enlace" href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-01-2022/2021-12-28_boletin_bem.pdf">
                                                        <div class="btn-boletin">
                                                            <div class="titulo-boletin">
                                                                <h4>BOLETÍN 7</h4>
                                                                <i>Martes, 28 de diciembre 2021</i>
                                                            </div>
                                                            <div class="descripcion-boletin">
                                                                <p>Habrá cierres y reducción de calzadas en obra del
                                                                    Canal Córdoba entre Calles 129 y 170, UMV llegó a
                                                                    Chapinero con sus cuadrillas de mantenimiento vial,
                                                                    Comunidad de zona de influencia de la Primera Línea
                                                                    del Metro reflexionó sobre la movilidad , y más.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class="enlace" href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-01-2022/2021-12-26_boletin_bem.pdf">
                                                        <div class="btn-boletin">
                                                            <div class="titulo-boletin">
                                                                <h4>BOLETÍN 6</h4>
                                                                <i>Lunes, 27 de diciembre 2021</i>
                                                            </div>
                                                            <div class="descripcion-boletin">
                                                                <p>¡Ojo! Desde el 26 de diciembre, hay tres nuevos
                                                                    cierres en la Avenida Guayacanes, Así avanzan las
                                                                    obras viales en el sector del Gran San en Bogotá,
                                                                    Con 119 rutas el componente zonal ha ampliado su
                                                                    cobertura, y más.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class="enlace" href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-01-2022/2021-12-24_boletin_bem.pdf">
                                                        <div class="btn-boletin">
                                                            <div class="titulo-boletin">
                                                                <h4>BOLETÍN 5</h4>
                                                                <i>Viernes, 24 de diciembre 2021</i>
                                                            </div>
                                                            <div class="descripcion-boletin">
                                                                <p>Ojo a los cierres viales por obras en la Avenida
                                                                    Guayacanes, Tips para moverse seguro en TransMilenio
                                                                    estas festividades, 2 frentes de trabajo de la UMV
                                                                    llegaron a Mazurén para arreglar el estado de la
                                                                    vías, y mas.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class="enlace" href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-01-2022/2021-12-23_boletin_bem.pdf">
                                                        <div class="btn-boletin">
                                                            <div class="titulo-boletin">
                                                                <h4>BOLETÍN 4</h4>
                                                                <i>Jueves, 23 de diciembre 2021</i>
                                                            </div>
                                                            <div class="descripcion-boletin">
                                                                <p>Así operarán los frentes de obra que arreglarán las
                                                                    vías de Bogotá, Cierres viales y de espacio público
                                                                    en grupo 2 de Avenida Guayacanes, 24 estaciones de
                                                                    TransMilenio estrenarán puertas. </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class="enlace" href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-01-2022/2021-12-22_boletin_bem.pdf">
                                                        <div class="btn-boletin">
                                                            <div class="titulo-boletin">
                                                                <h4>BOLETÍN 3</h4>
                                                                <i>Miercoles, 22 de diciembre 2021</i>
                                                            </div>
                                                            <div class="descripcion-boletin">
                                                                <p>Más de 5 millones de usuarios de TransMilenio tienen
                                                                    beneficios por tener tarjeta personalizada, Por
                                                                    construcción de puente peatonal, se traslada
                                                                    paradero SITP en Carrera 9 con Calle 112, Obras en
                                                                    ciclorruta de la Alameda El Porvenir con avance del
                                                                    60%, y más.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class="enlace" href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-01-2022/2021-12-21_boletin_bem.pdf">
                                                        <div class="btn-boletin">
                                                            <div class="titulo-boletin">
                                                                <h4>BOLETÍN 2</h4>
                                                                <i>Martes, 21 de diciembre 2021</i>
                                                            </div>
                                                            <div class="descripcion-boletin">
                                                                <p>Nuevo cierre para seguir avanzando con obras en la
                                                                    Av. 68, Listas las unidades móviles que mejorarán
                                                                    vías a partir de Navidad, TransMilenio ya cuenta con
                                                                    483 buses eléctricos rodando en la ciudad, Comienzan
                                                                    exploraciones de geotecnia en la calle 72 para la
                                                                    Línea 2 del metro, y más.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class='col-xs-12'>
                                                    <a class="enlace" href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-01-2022/2021-12-20_boletin_bem.pdf">
                                                        <div class="btn-boletin">
                                                            <div class="titulo-boletin">
                                                                <h4>BOLETÍN 1</h4>
                                                                <i>Lunes, 20 de diciembre 2021</i>
                                                            </div>
                                                            <div class="descripcion-boletin">
                                                                <p>Cierre en Autonorte por ciclopuente que conectará
                                                                    oriente y occidente de la ciudad, Conoce más del
                                                                    proyecto Avenida 68, Con obras comenzó la navidad en
                                                                    San Bernardo, TransMiAPP, el Sistema en la palma de
                                                                    la mano, y más.</p>
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

<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin Bloque Sección  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
