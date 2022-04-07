@extends('welcome')
@section('contenido')
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
        background-image: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/08-01-2022/03-1-general_textura_1_fondo_claro.png');
        font-family: 'Montserrat', sans-serif;
        font-size: 14px;
        font-weight: normal;
        text-align: justify;
        line-height: 1.4;
    }

    .seccion [class*='col-'] {
        margin: 0px;
        padding: 0px;
        border: 0;
        outline: 0;
        font-size: 100%;
        vertical-align: baseline;
    }

    .w-100 {
        width: 100%;
    }
    .s1 .logo-encabezado{
        padding: 15px 0px;
    }

    .s1 .encabezado {
        height: 630px;
        /* max-height: 350px; */
        background: linear-gradient(45deg, black, #ffffff11), url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/08-01-2022/03-seccion-1_fondo_contenedor_logo.png');
        background-position: center bottom;
        background-size: cover;
        background-repeat: no-repeat;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        align-items: center;
    }

    
    .s1 .img-encabezado {
        margin: 20px 8%
    }

    .s1 .p-encabezado {
        /* border: solid 2px rgba(228, 238, 187, 1); */
        background-color: #000000aa;
        border: 3px transparent solid;
        border-image: -webkit-linear-gradient(left, rgba(228, 238, 187, 1), rgba(255, 182, 32, 1)) 1 10;

        padding: 10px;
    }

    .s1 .p-encabezado h3 {
        color: #fff;
        text-align: center;
        font-weight: 700;
        margin: 10px;
        font-family: 'Montserrat', sans-serif;
        font-size: 20px;
    }

    .s1 .p-encabezado p {
        color: #fff;
        text-align: justify;
        font-family: 'Montserrat', sans-serif;
        font-size: 14px !important;
        line-height: 1.4;

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


    .s1 .v-encabezado {
        background-color: rgba(255, 182, 32, 1);
        height: 300px;

    }

    .s1 p strong {
        font-size: 14px !important;
    }

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

    .s2 .introduccion {
        margin: 4%;
        padding: 25px;
        /* border: solid 2px rgba(255, 182, 32, 1); */

        background-color: #fdfdfd !important;

        border: 3px transparent solid;
        border-image: -webkit-linear-gradient(left, rgba(69, 81, 34, 1), rgba(255, 182, 32, 1)) 1 10;


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

    .s2 .introduccion p {
        text-align: initial;
        padding: 5px;
        font-size: 18px !important;
        line-height: 1.4;
        font-family: 'Montserrat', sans-serif;
    }

    .s2 .introduccion-2 {
        margin: 4%;
        padding: 25px;
        /* border: solid 2px rgba(255, 182, 32, 1); */

        /* background-color: #fdfdfd !important; */

        border: 3px transparent solid;
        border-image: -webkit-linear-gradient(left, rgba(69, 81, 34, 1), rgba(255, 182, 32, 1)) 1 10;

        c5
    }

    .s2 .introduccion-2 h3 {
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

    .s2 .introduccion-2 p {
        text-align: initial;
        padding: 5px;
        font-size: 18px !important;
        line-height: 1.4;
        font-family: 'Montserrat', sans-serif;
    }

    .s2 .descripcion {
        padding: 8%;
    }



    .s2 .descripcion h3 {
        font-family: 'Montserrat', sans-serif;
        font-weight: 900;
        font-size: 18px;
        color: rgba(228, 238, 187, 1);
        text-align: center;
        padding: 8px;
        border: solid 2px rgba(69, 81, 34, 1);
        background-color: rgba(69, 81, 34, 1);
        text-transform: uppercase;
    }

    .s2 .descripcion p {
        text-align: justify;
        padding: 5px;
        font-size: 14px !important;
        line-height: 1.4;
        font-family: 'Montserrat', sans-serif;
        overflow: hidden;
        text-overflow: clip;
    }

    .s2 .descripcion p a {
        overflow: hidden !important;
        text-overflow: clip !important;

    }

    .s2 .descripcion .ver {
        text-align: initial;
        padding: 5px;
        font-size: 14px !important;
        line-height: 1.4;
        font-family: 'Montserrat', sans-serif;
    }

    .s2 .img-descripcion {
        padding: 10%;
    }

    .s2 .img-descripcion {
        background: rgba(228, 238, 187, 1);
        background: linear-gradient(45deg, rgba(228, 238, 187, 1) -100%, rgba(69, 81, 34, 1) 80%);
        /* background-color: rgba(255, 182, 32, 1); */
        /* background-image: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/08-01-2022/03-1-general_textura_2_fondo_oscuro.png'); */
    }

    #clips {
        /* background-image: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/08-01-2022/03-seccion-4-bg-tito_mejor.png'); */
    }

    .s2 .descripcion-tito {
        padding: 8%;
        height: 420px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .s2 .descripcion-tito h3 {
        font-family: 'Montserrat', sans-serif;
        font-weight: 900;
        font-size: 18px;
        color: rgba(69, 81, 34, 1);
        text-align: center;
        padding: 8px;
        /* border: solid 2px rgba(69, 81, 34, 1); */
        /* background-color: rgba(69, 81, 34, 1); */
        text-transform: uppercase;
    }

    .s2 .descripcion-tito h4 {
        font-family: 'Montserrat', sans-serif;
        font-weight: 900;
        font-size: 224px;
        color: rgba(255, 182, 32, 1);
        text-align: left;
        padding: 8px;
        /* border: solid 2px rgba(69, 81, 34, 1); */
        /* background-color: rgba(69, 81, 34, 1); */
    }

    .s2 .descripcion-tito p {
        text-align: justify;
        padding: 5px;
        font-size: 14px !important;
        color: rgba(69, 81, 34, 1);
        font-family: 'Montserrat', sans-serif;
        line-height: 1.4;
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

        border: 2px transparent solid;
        border-image: -webkit-linear-gradient(left, rgba(69, 81, 34, 1), rgba(255, 182, 32, 1)) 1 10;


    }

    .s2 .btn-boletin:hover {
        border: solid 2px rgba(69, 81, 34, 1);
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

    }

    .s2 .btn-boletin .descripcion-boletin {
        padding: 0px;
        height: 20px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .s2 .btn-boletin .descripcion-boletin p {
        text-align: justify;
        overflow: hidden;
        text-overflow: ellipsis;
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
        font-family: 'Montserrat', sans-serif;
        font-size: 14px;
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
        background-image: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-01-2022/plan_tapahuecos_1.jpg');
        background-size: cover;
        background-position: right;
        background-repeat: no-repeat;
        height: 100%;
        width: 100%;

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

    .box-videos {
        padding: 30px;
    }

    .video-bem {
        padding: 10px;
        border: 3px transparent solid;
        border-image: -webkit-linear-gradient(left, rgba(69, 81, 34, 1), rgba(255, 182, 32, 1)) 1 10;
        margin: 10px;
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
        text-align: center;
        font-family: 'Montserrat', sans-serif;
        color: rgba(25, 25, 25, 1);
        font-size: 14px;
        margin: 0px;
        margin-top: 8px;
        padding: 10px;

        height: 100px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .s2 .video-bem .descripcion-video-bem p {
        margin: 0px;
        padding: 0px;
    }

    .s2 .box-video-bem {
        padding: 8px;
    }
</style>
<style>
    .botones {
        padding: 15px;
        display: flex;
        justify-content: center;
    }

    .boxbtnbem {
        margin: 5px;
        padding: 4px;
        background-color: rgba(69, 81, 34, 1);
        color: #fff !important;
    }
    
    .boxbtnbem:hover,
    .boxbtnbem:active {
        background-color: rgba(228, 238, 187, 1);
        /* transition: background-color 1000ms linear; */


    }

    .boxbtnbem a {
        text-decoration: none !important;
    }

    .boton-bem {
        height: 415px;
        background-position: center bottom;
    }

    .boxbtnbem .txt-btn-bem {
        height: 100px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .boxbtnbem .txt-btn-bem h3 {
        color: rgba(255, 255, 255, 1);
        margin: 0px;
        padding: 12px;
        font-size: 14px;
        font-weight: 700;
        text-align: center;
        text-transform: uppercase;
        text-shadow: 1px rgba(69, 81, 34, 1);
        font-family: 'Montserrat', sans-serif;
    }

    .boxbtnbem:hover .txt-btn-bem h3,
    .boxbtnbem:hover .txt-btn-bem a,
    .boxbtnbem:active .txt-btn-bem h3,
    .boxbtnbem:active .txt-btn-bem a {
        color: rgba(25, 25, 25, 1) !important;
        text-shadow: 1px #f3f4f5 !important;
    }

    .btn1 {
        background: rgb(0, 0, 0);
        /* background: linear-gradient(20deg, rgba(0, 0, 0, 0.6) 0%, rgba(255, 255, 255, 0) 50%, rgba(0, 0, 0, 0.6) 100%), url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-01-2022/desarrollo_-_bogota_esta_mejorando_-_nevos_botones-15.webp'); */
        background: linear-gradient(20deg, rgba(0, 0, 0, 0.6) 0%, rgba(255, 255, 255, 0) 50%, rgba(0, 0, 0, 0.6) 100%), url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/24-01-2022/desarrollo_-_bogota_esta_mejorando_-_nevos_botones-15_a.webp');
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
    }

    .btn2 {
        background: rgb(0, 0, 0);
        /* background: linear-gradient(20deg, rgba(0, 0, 0, 0.6) 0%, rgba(255, 255, 255, 0) 50%, rgba(0, 0, 0, 0.6) 100%), url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-01-2022/desarrollo_-_bogota_esta_mejorando_-_nevos_botones-11.png'); */
        background: linear-gradient(20deg, rgba(0, 0, 0, 0.6) 0%, rgba(255, 255, 255, 0) 50%, rgba(0, 0, 0, 0.6) 100%), url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/24-01-2022/desarrollo_-_bogota_esta_mejorando_-_nevos_botones-11_a.webp');
        background-repeat: no-repeat;
        background-size: cover;
    }

    .btn3 {
        background: rgb(0, 0, 0);
        /* background: linear-gradient(20deg, rgba(0, 0, 0, 0.6) 0%, rgba(255, 255, 255, 0) 50%, rgba(0, 0, 0, 0.6) 100%), url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-01-2022/desarrollo_-_bogota_esta_mejorando_-_nevos_botones-13.png'); */
        background: linear-gradient(20deg, rgba(0, 0, 0, 0.6) 0%, rgba(255, 255, 255, 0) 50%, rgba(0, 0, 0, 0.6) 100%), url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/24-01-2022/desarrollo_-_bogota_esta_mejorando_-_nevos_botones-13_a.webp');
        background-repeat: no-repeat;
        background-size: cover;
    }

    .btn4 {
        background: rgb(0, 0, 0);
        background: linear-gradient(20deg, rgba(0, 0, 0, 0.6) 0%, rgba(255, 255, 255, 0) 50%, rgba(0, 0, 0, 0.6) 100%), url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-01-2022/03-_desarrollo_-_bem_-_btn_4_-_actualidad_-_op1.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
    }

    .btn5 {
        background: rgb(0, 0, 0);
        background: linear-gradient(20deg, rgba(0, 0, 0, 0.6) 0%, rgba(255, 255, 255, 0) 50%, rgba(0, 0, 0, 0.6) 100%), url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-01-2022/03-_desarrollo_-_bem_-_btn_5_-_tito_-_op1.jpg');
        background-repeat: no-repeat;
        background-size: cover;
    }

    @media(max-width:767px) {

        .s2 .descripcion-tito {
            height: 520px;
        }

        .boxbtnbem {
            margin: 25px;
        }

        .boton-bem {
            height: 263px;
        }

        .btn1 {
            background: rgb(0, 0, 0);
            background: linear-gradient(20deg, rgba(0, 0, 0, 0.6) 0%, rgba(255, 255, 255, 0) 50%, rgba(0, 0, 0, 0.6) 100%), url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/24-01-2022/desarrollo_-_bogota_esta_mejorando_-_nevos_botones-15_b.webp');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }

        .btn2 {
            background: linear-gradient(20deg, rgba(0, 0, 0, 0.6) 0%, rgba(255, 255, 255, 0) 50%, rgba(0, 0, 0, 0.6) 100%), url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-01-2022/03-_desarrollo_-_bem_-_btn_2_-_alternativas_-_op2.jpg');
            background-size: cover;
            background-repeat: no-repeat;
        }

        .btn3 {
            background: rgb(0, 0, 0);
            background: linear-gradient(20deg, rgba(0, 0, 0, 0.6) 0%, rgba(255, 255, 255, 0) 50%, rgba(0, 0, 0, 0.6) 100%), url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-01-2022/03-_desarrollo_-_bem_-_btn_3_-_comportamiento_-_op2.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }

    }

    @media(min-width:768px) {}

    @media(min-width:992px) {}

    @media(min-width:1200px) {}
</style>

<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin hoja de estilo  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<style>
    @media(max-width:767px) {
        .imgd-1 {
            height: 430px;

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

        .s2 .img-descripcion {
            margin: 20px 15px 0px 15px;
        }

    }

    @media(min-width:768px) {


        .s2 .nav-tabs>li {
            /* width: 100%; */
            width: 20%;
        }

        .s1 .encabezado {
            /* height: 570px; */
            height: 600px;
        }

        .s1 .v-encabezado {
            /* height: 570px; */
            height: 600px;
        }

        .s2 .descripcion {
            /* padding: 8%; */
            padding: 4%;
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
            height: 677px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column
        }

        .imgd-2 {
            height: 863px;

        }

        .imgd-3 {
            height: 855px;

        }

        .imgd-4 {
            height: 751px;

        }

        .imgd-5 {
            height: 573px;

        }

        .imgd-6 {
            height: 745px;

        }

        .imgd-7 {
            height: 1040px;

        }

        .imgd-8 {
            height: 781px;

        }

        .imgd-9 {
            height: 637px;

        }

        .imgd-10 {
            height: 763px;

        }

        .imgd-11 {
            height: 490px;

        }


        .s2 .carousel {
            object-fit: cover;
            object-position: center;
            height: 100%;
        }

        .boxbtnbem .txt-btn-bem h3 {
            font-size: 11px;
        }


    }


    @media(min-width:992px) {

        .boxbtnbem .txt-btn-bem h3 {
            font-size: 14px;
        }

        .imgd-1 {
            height: 571px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column
        }

        .imgd-2 {
            height: 720px;

        }

        .imgd-3 {
            height: 770px;

        }

        .imgd-4 {
            height: 685px;

        }

        .imgd-5 {
            height: 526px;

        }

        .imgd-6 {
            height: 662px;

        }

        .imgd-7 {
            height: 865px;

        }

        .imgd-8 {
            height: 680px;

        }

        .imgd-9 {
            height: 552px;
            background-position: center;

        }

        .imgd-10 {
            height: 600px;

        }

        .imgd-11 {
            height: 556px;

        }

        .s2 .descripcion-tito {
            height: 556px;
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
            color: rgba(31, 34, 62, 1);
            font-size: 14px;
        }

        .s2 .box-boletines .panel-heading .panel-title a.collapsed:after {
            content: '\e114';
        }

        .s2 .box-boletines .panel-default>.panel-heading {
            background-color: #fff;
        }
        .s2 .box-boletines .panel-default>.panel-heading h4{
            font-size: 16px;
            font-weight: 500;
            text-align: left;
            line-height: 1.2;
            color: rgba(25, 25, 25, 1);
            font-family: 'Montserrat', sans-serif !important;
            background-color: #fff;
        }

        .s2 .box-boletines .panel-group .panel {
            border-radius: 0px;
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
    }
</style>
<style>
    .col-xs-5ths,
    .col-sm-5ths,
    .col-md-5ths,
    .col-lg-5ths {
        position: relative;
        min-height: 1px;
        padding-right: 15px;
        padding-left: 15px;
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

        <div class='row'>
            <div class='col-xs-12 col-sm-6 col-md-6'>
                <div class="encabezado">
                    <div class="img-encabezado">
                        <div class='logo-encabezado'>
                            <img class='img-responsive w-100 ' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/01-04-2022/bogotaestamosconstruyendo-03.png' alt='Logo Bogotá esta mejorando' title='Logo Bogotá esta mejorando'>
                        </div>
                        <div class="p-encabezado">
                            <h3>¿Por qué La Bogotá Que Estamos Construyendo?</h3>
                            <p>Bogotá tiene como propósito ser referente mundial en movilidad sostenible para el 2030. Para lograrlo, viene trabajando en un ambicioso plan que no solo busca recuperar la malla vial, ponerse al día en obras e infraestructura sino también invitar a los ciudadanos y actores viales a incorporar comportamientos que le permitan a la ciudad reducir la congestión y mejorar la calidad del aire.</p>
                            <p>Así nace, <strong>La Bogotá Que Estamos Construyendo con nuevas obras de infraestructura y con movilidad sostenible</strong> como respuesta a la fase de megaobras en la que entró la ciudad, y que le va a permitir ponerse al día después de décadas de estancamiento en materia de infraestructura vial.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class='row'>
                <div class='col-xs-12 col-sm-6 col-md-6'>

                    <div class='v-encabezado'>
                        <div class="video-encabezado">
                            <iframe width='100%' height="100%" src="https://www.youtube.com/embed/-X-zxETwiUM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <!-- <iframe  width='100%' height="100%" src="https://www.youtube.com/embed/ECspQF9KOCY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                        </div>
                    </div>
                    <style>
                        .s1 .video-encabezado {
                            padding: 10%;
                            height: 100%;
                        }
                    </style>

                </div>
            </div>
        </div>
    </div>
    <div class="s2">
        <div class="container-fluid">

            <div class="botones">
                <div class='row'>
                    <div class='col-sm-5ths'>
                        <div class="boxbtnbem zoom">
                            <a href="#infraestructura" aria-controls="infraestructura" role="tab" data-toggle="tab">
                                <div class="boton-bem btn1">
                                </div>
                                <div class="txt-btn-bem">
                                    <div>
                                        <h3>
                                            Con estas obras La Bogotá Que Estamos Construyendo
                                        </h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class='col-sm-5ths'>
                        <div class="boxbtnbem zoom">
                            <a href="#alternativas" aria-controls="alternativas" role="tab" data-toggle="tab">
                                <div class="boton-bem btn2">
                                </div>
                                <div class="txt-btn-bem">
                                    <div>
                                        <h3>
                                            Alternativas para moverme en Bogotá
                                        </h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class='col-sm-5ths'>
                        <div class="boxbtnbem zoom">
                            <a href="#comportamientos" aria-controls="comportamientos" role="tab" data-toggle="tab">
                                <div class="boton-bem btn3">
                                </div>
                                <div class="txt-btn-bem">
                                    <div>
                                        <h3>
                                            Comportamientos
                                        </h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class='col-sm-5ths'>
                        <div class="boxbtnbem zoom">
                            <a href="#actualidad" aria-controls="actualidad" role="tab" data-toggle="tab">
                                <div class="boton-bem btn4">
                                </div>
                                <div class="txt-btn-bem">
                                    <div>
                                        <h3>
                                            Actualidad
                                        </h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class='col-sm-5ths'>
                        <div class="boxbtnbem zoom">
                            <a href="#clips" aria-controls="clips" role="tab" data-toggle="tab">
                                <div class="boton-bem btn5">
                                </div>
                                <div class="txt-btn-bem">
                                    <div>
                                        <h3>
                                            La Bogotá Que Estamos Construyendo en video
                                        </h3>
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
                                <div class="introduccion">
                                    <p>Las grandes obras de infraestructura vial y de transporte que los bogotanos añoraban desde hace años hoy están en plena ejecución. La transformación comenzó para que la ciudad dé un gran salto hacia una movilidad sostenible en la que todos podemos movernos y acceder a nuevas y mejores oportunidades.</p>
                                    <p>A continuación, los megaproyectos que le están cambiando la cara a Bogotá</p>
                                </div>
                            </div>

                            <div class='row'>
                                <div class='col-xs-12 col-sm-6 col-md-6'>
                                    <div class="descripcion">
                                        <h3>Avenida 68, Alimentadora de la Línea Metro</h3>

                                        <dl>
                                            <dt>Longitud:</dt>
                                            <dd>Desde Autopista sur hasta calle 100 con 9ª (17 km)</dd>
                                        </dl>
                                        <dl>
                                            <dt>Costo total:</dt>
                                            <dd>$709.430 millones entre obra e interventoría</dd>
                                        </dl>
                                        <p>Esta obra de 17 kilómetros consta de nueve tramos y beneficiará a los habitantes de 10 localidades de Bogotá que reducirán sus tiempos de viaje al 50% del tiempo a través del sistema de transporte masivo de la ciudad, pues se conectará con la Primera Línea de Metro y con 5 troncales. Se calcula que en todo su desarrollo, la obra generará alrededor de 39.000 empleos, entre directos e indirectos. Incorporará el mejoramiento del paisaje, mediante la plantación de arbolado urbano. Se pasará de 3.600 árboles a 4.774 al finalizar la obra y se plantarán 53.000 m2 de jardinería, algo que no existía. Además incorporará 140 tipologías de Sistemas Urbanos de Drenaje Sostenible (SUDS). La operación de transporte público por este corredor se hará con buses cero emisiones.</p>
                                        <br>
                                        <p class="ver">Ver más sobre esta obra en ejecución: <a href="https://www.idu.gov.co/page/avenida-68" target="_blank" rel="noopener noreferrer">https://www.idu.gov.co/page/avenida-68</a></p>

                                    </div>
                                </div>
                                <div class='col-xs-12 col-sm-6 col-md-6'>
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
                            </div>

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
                                <div class='col-xs-12 visible-xs'>
                                    <div class="descripcion">
                                        <h3>Avenida Ciudad de Cali, Alimentadora de la Línea del Metro</h3>
                                        <dl>
                                            <dt>Longitud:</dt>
                                            <dd>Desde la Av. Circunvalar del Sur hasta la Av. Manuel Cepeda Vargas (7,4 km)</dd>
                                        </dl>
                                        <dl>
                                            <dt>Costo total:</dt>
                                            <dd>2,6 billones de pesos</dd>
                                        </dl>
                                        <p>Este corredor beneficiará a 1 millón 100 mil habitantes de las localidades de Bosa (14 barrios) y Kennedy (22 barrios), aumentará la frecuencia y velocidad de viaje en el transporte público, y facilitará la conexión con el municipio de Soacha. Su construcción contempla 8 estaciones de TransMilenio nuevas, 7 cicloestaciones, 1 puente peatonal de acceso al sistema y la futura estación del Metro, 1 puente peatonal y conexión a través de una pasarela, con la futura estación del Metro. Además tendrá una glorieta elevada de tráfico mixto, 1 glorieta vehicular a nivel para buses biarticulados y una ciclorruta bidireccional por el costado occidental.</p>
                                        <p>Tendrá dos conexiones clave: operacional con la Troncal Américas de TM e intermodal con Primera Línea de Metro de Bogotá a la altura de la Av. 1º. de Mayo. Contempla 137.897 m2 de espacio público, 75.212,78 m2 de zonas verdes, 421,25 metros de ciclorruta en andenes, 5.466,17 metros de ciclorruta continua, 242,58 m de ciclorruta reconstruida. La operación de transporte público por este corredor se hará con buses cero emisiones.</p>
                                        <br>
                                        <p class="ver">Ver más sobre esta obra en ejecución: <a href="https://www.idu.gov.co/page/avenida-ciudad-de-cali" target="_blank" rel="noopener noreferrer">https://www.idu.gov.co/page/avenida-ciudad-de-cali</a></p>
                                    </div>
                                </div>
                                <div class='col-xs-12 col-sm-6'>
                                    <div class='img-descripcion imgd-2'>


                                        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/N-juJJ5tKMk" title="Avenida Ciudad de Cali, Alimentadora de la Línea del Metro" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                                    </div>


                                </div>
                                <div class='col-sm-6 hidden-xs'>
                                    <div class="descripcion">
                                        <h3>Avenida Ciudad de Cali, Alimentadora de la Línea del Metro</h3>
                                        <dl>
                                            <dt>Longitud:</dt>
                                            <dd>Desde la Av. Circunvalar del Sur hasta la Av. Manuel Cepeda Vargas (7,4 km)</dd>
                                        </dl>
                                        <dl>
                                            <dt>Costo total:</dt>
                                            <dd>$709.430 millones entre obra e interventoría</dd>
                                        </dl>
                                        <p>Este corredor beneficiará a 1 millón 100 mil habitantes de las localidades de Bosa (14 barrios) y Kennedy (22 barrios), aumentará la frecuencia y velocidad de viaje en el transporte público, y facilitará la conexión con el municipio de Soacha. Su construcción contempla 8 estaciones de TransMilenio nuevas, 7 cicloestaciones, 1 puente peatonal de acceso al sistema y la futura estación del Metro, 1 puente peatonal y conexión a través de una pasarela, con la futura estación del Metro. Además tendrá una glorieta elevada de tráfico mixto, 1 glorieta vehicular a nivel para buses biarticulados y una ciclorruta bidireccional por el costado occidental.</p>
                                        <p>Tendrá dos conexiones clave: operacional con la Troncal Américas de TM e intermodal con Primera Línea de Metro de Bogotá a la altura de la Av. 1º. de Mayo. Contempla 137.897 m2 de espacio público, 75.212,78 m2 de zonas verdes, 421,25 metros de ciclorruta en andenes, 5.466,17 metros de ciclorruta continua, 242,58 m de ciclorruta reconstruida. La operación de transporte público por este corredor se hará con buses cero emisiones.</p>
                                        <br>
                                        <p class="ver">Ver más sobre esta obra en ejecución: <a href="https://www.idu.gov.co/page/avenida-ciudad-de-cali" target="_blank" rel="noopener noreferrer">https://www.idu.gov.co/page/avenida-ciudad-de-cali</a></p>
                                    </div>
                                </div>
                            </div>
                            <!-- Fin   -->

                            <div class='row'>
                                <div class='col-xs-12 col-sm-6 col-md-6'>
                                    <div class="descripcion">
                                        <h3>Avenida Guayacanes</h3>

                                        <p>Esta vía de 13 km de longitud atraviesa las localidades de Bosa y Kennedy. Es una enorme avenida con 6 carriles (tres por cada sentido) andenes amplios y una ciclorruta en toda su extensión. Se trata de una vía paralela a las avenidas Ciudad de Cali y Boyacá, que también se conectará con la Avenida Bosa para salir de la ciudad por el vecino municipio de Soacha.</p>
                                        <p>Esta obra beneficiará a 1.500.000 personas y habitantes de 130 barrios que hoy en día se demoran hasta 2 horas desplazándose desde el suroccidente al centro de la ciudad, cuando la obra termine podrán hacerlo en tan solo 30 minutos.</p>
                                        <p>Tendrá dos conexiones clave: operacional con la Troncal Américas de TM e intermodal con Primera Línea de Metro de Bogotá a la altura de la Av. 1º. de Mayo. Contempla 137.897 m2 de espacio público, 75.212,78 m2 de zonas verdes, 421,25 metros de ciclorruta en andenes, 5.466,17 metros de ciclorruta continua, 242,58 m de ciclorruta reconstruida. La operación de transporte público por este corredor se hará con buses cero emisiones.</p>
                                        <p>Mejorará la calidad del aire, gracias a la plantación de 3.374 árboles nuevos a lo largo del trayecto y el establecimiento de 18.304 m2 en el área de jardinería, localizados en espacio público.</p>
                                        <p>Esta obra ha generado cerca de 1.540 empleos de mano de obra calificada y no calificada, en línea con las acciones de reactivación económica de la ciudad.</p>
                                        <br>
                                        <p class="ver">Ver más sobre esta obra en ejecución: <a href="https://www.idu.gov.co/page/avenida-68" target="_blank" rel="noopener noreferrer">https://www.idu.gov.co/page/avenida-68</a></p>

                                    </div>
                                </div>
                                <div class='col-xs-12 col-sm-6 col-md-6'>
                                    <div class='img-descripcion imgd-3'>
                                        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/m1HTIgKAD2s" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>


                            <!--   -->
                            <div class='row'>
                                <div class='col-xs-12 visible-xs'>
                                    <div class="descripcion">
                                        <h3>Avenida Rincón por Boyacá</h3>
                                        <dl>
                                            <dt>Longitud:</dt>
                                            <dd>Desde la Carrera 91 hasta la Boyacá y la intersección de las dos vías</dd>
                                        </dl>
                                        <p>El proyecto en construcción contempla dos tramos principales: la prolongación de la Avenida Rincón, desde la Carrera 91 hasta la Boyacá; y la intersección de las dos Avenidas.</p>
                                        <p>Tendrá dos conexiones clave: operacional con la Troncal Américas de TM e intermodal con Primera Línea de Metro de Bogotá a la altura de la Av. 1º. de Mayo. Contempla 137.897 m2 de espacio público, 75.212,78 m2 de zonas verdes, 421,25 metros de ciclorruta en andenes, 5.466,17 metros de ciclorruta continua, 242,58 m de ciclorruta reconstruida. La operación de transporte público por este corredor se hará con buses cero emisiones.</p>
                                        <p>Este proyecto mejorará las condiciones de infraestructura para la movilidad, seguridad y comodidad a peatones y conductores, disminuyendo los tiempos de desplazamiento de los ciudadanos y aumentando los niveles de competitividad de las zonas de influencia, como consecuencia del progresivo crecimiento que registra actualmente esta parte de la ciudad.</p>
                                        <p>El proyecto se ubica en la localidad de Suba, donde se espera que beneficie a 1.200.000 personas, entre los habitantes de las UPZ Niza, Rincón y Floresta, con sus 82 barrios, y ciudadanía que transita por las vías en ejecución.</p>

                                    </div>
                                </div>
                                <div class='col-xs-12 col-sm-6'>
                                    <div class='img-descripcion imgd-4'>
                                        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/_KSi20NK_Qk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>


                                </div>
                                <div class='col-sm-6 hidden-xs'>
                                    <div class="descripcion">
                                        <h3>Avenida Rincón por Boyacá</h3>
                                        <dl>
                                            <dt>Longitud:</dt>
                                            <dd>Desde la Carrera 91 hasta la Boyacá y la intersección de las dos vías</dd>
                                        </dl>
                                        <p>El proyecto en construcción contempla dos tramos principales: la prolongación de la Avenida Rincón, desde la Carrera 91 hasta la Boyacá; y la intersección de las dos Avenidas.</p>
                                        <p>Tendrá dos conexiones clave: operacional con la Troncal Américas de TM e intermodal con Primera Línea de Metro de Bogotá a la altura de la Av. 1º. de Mayo. Contempla 137.897 m2 de espacio público, 75.212,78 m2 de zonas verdes, 421,25 metros de ciclorruta en andenes, 5.466,17 metros de ciclorruta continua, 242,58 m de ciclorruta reconstruida. La operación de transporte público por este corredor se hará con buses cero emisiones.</p>
                                        <p>Este proyecto mejorará las condiciones de infraestructura para la movilidad, seguridad y comodidad a peatones y conductores, disminuyendo los tiempos de desplazamiento de los ciudadanos y aumentando los niveles de competitividad de las zonas de influencia, como consecuencia del progresivo crecimiento que registra actualmente esta parte de la ciudad.</p>
                                        <p>El proyecto se ubica en la localidad de Suba, donde se espera que beneficie a 1.200.000 personas, entre los habitantes de las UPZ Niza, Rincón y Floresta, con sus 82 barrios, y ciudadanía que transita por las vías en ejecución.</p>

                                    </div>
                                </div>
                            </div>
                            <!-- Fin   -->



                            <div class='row'>
                                <div class='col-xs-12 col-sm-6 col-md-6'>
                                    <div class="descripcion">
                                        <h3>Primera Línea del Metro </h3>
                                        <p>Gracias a los aportes de la Nación y el Distrito, desde el año 2017 se ha venido ejecutando la Primera Línea del Metro de Bogotá, el proyecto de infraestructura más importante del país, cumpliendo diferentes hitos que han permitido lograr el mayor avance en la construcción de este sistema de transporte que necesita la ciudad.</p>
                                        <p>Como parte de los hitos del proyecto, el pasado 20 de octubre de 2020, la Empresa Metro de Bogotá (EMB) y el concesionario Metro Línea 1 firmaron el acta de inicio de obras, lo que permitió que en 2021, el 16 de agosto y el 17 de septiembre, respectivamente, se diera inicio a las obras del patio taller, en el sector de El Corzo (Bosa), y del intercambiador vial en la calle 72 con avenida Caracas.</p>
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
                                                                <p>El metro ya está en obra. El pasado 17 de agosto comenzó la adecuación de los terrenos del patio taller en el sector de El Corzo, en la localidad de Bosa. Esta obra se desarrollará en tres frentes de trabajo de manera simultánea, en un terreno de 35,9 hectáreas, el equivalente de unas 50 canchas de fútbol.</p>
                                                                <p>En el patio taller se alojará el corazón de la operación de la Primera Línea del Metro de Bogotá (PLMB); contará inicialmente con capacidad para el parqueo de 30 trenes, pero, por contrato, debe quedar diseñado y habilitado el espacio para 60 trenes.</p>
                                                                <p>Lo anterior, debido a la demanda futura que vaya teniendo el sistema. Asimismo, el complejo incluirá vías de acceso al patio y de salida de los trenes a la línea comercial, se instalarán vías férreas, bodegas, talleres para arreglos mecánicos y eléctricos de los trenes, zonas de lavado, planta de tratamiento de agua, edificios administrativos, etc., de tal manera que asegure, día a día, la prestación del servicio.</p>
                                                                <br>
                                                                <img class='img-responsive w-100 ' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-01-2022/patio_taller.webp' alt='Foto de Patio Taller' title='Foto de Patio Taller'>
                                                                <br>
                                                                <p>De este modo, en la localidad de Bosa quedará el punto de partida de la Primera Línea del Metro de Bogotá. Durante su construcción no se verá perjudicada la comunidad, teniendo en cuenta que los predios donde se está construyendo el patio taller no interfieren con viviendas, colegios, ni instalaciones colindantes.</p>
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
                                                            <p>El pasado 17 de septiembre comenzaron las obras del intercambiador vial en el sector de la avenida Caracas con calle 72, en la localidad de Chapinero. En este lugar, el concesionario Metro Línea 1, encargado de la construcción de la Primera Línea del Metro de Bogotá, realizará un intercambiador vial de dos (2) niveles con el fin de mejorar el flujo vehicular.</p>
                                                            <p>Se construirá un paso a desnivel que permitirá el cruce de la calle 72 por debajo de la carrera 15 y la avenida Caracas sin interrumpir el flujo vehicular, con lo cual se dará continuidad a los flujos de ambos sentidos (occidente – oriente y viceversa), priorizando la troncal de TransMilenio y, en el futuro, el viaducto elevado de la Primera Línea del Metro de Bogotá.</p>
                                                            <br>
                                                            <img class='img-responsive w-100 ' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-01-2022/intercambiador_calle72.webp' alt=' Foto Intercambiador Calle 72' title=' Foto Intercambiador Calle 72'>
                                                            <br>
                                                            <p>La obra del intercambiador vial de la calle 72, está programada para su puesta en operación el primer semestre de 2023 y forma parte de la llamada fase previa del proyecto, la cual comenzó el 20 de octubre de 2020 y se desarrollará en 27 meses, hasta enero de 2023, cuando comenzarán las obras de construcción del viaducto.</p>
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

                            <!--   -->
                            <div class='row'>
                                <div class='col-xs-12 visible-xs'>
                                    <div class="descripcion">
                                        <h3>Plan Tapahuecos</h3>
                                        <p>La Unidad de Mantenimiento Vial (UMV), como encargada de conservar la malla vial local, intermedia y rural, así como la cicloinfraestructura, en compañía del Instituto de Desarrollo Urbano (IDU) avanzan en el Plan Tapahuecos dentro de la estrategia de La Bogotá Que Estamos Construyendo que incluye reparar 56.000 huecos y hacer mantenimiento a 18,7 km/carril (equivalentes a 117 calles de doble carril).</p>
                                        <p>La UMV apoya estas jornadas con 10 unidades operativas, también conocidas como cuadrillas, con más de 100 personas, con maquinaria y equipo y 2 unidades móviles de parcheo que estarán atendiendo los daños viales reportados por la ciudadanía.</p>
                                        <p>Este plan se ejecuta en 9 corredores de la malla vial principal de la ciudad (entradas y salidas de la ciudad) y vías aferentes a estos. Adicionalmente, se dispone de capacidad para atender otros corredores viales que sean priorizados de acuerdo con los reportes de la ciudadanía.</p>
                                        <p>Por su parte, el IDU dispuso de 47 frentes de obra, amparados por 20 contratos de obra e interventoría que trabajan en segmentos de corredores viales priorizados y en 13 por emergencia.</p>
                                        <br>
                                        <p class="ver">Ver más sobre el Plan Tapahuecos: <a href="https://experience.arcgis.com/experience/a061a336dc2a4a8b9aebb57e2924f24d/" target="_blank" rel="noopener noreferrer">https://experience.arcgis.com/experience/a061a336dc2a4a8b9aebb57e2924f24d/</a></p>

                                    </div>
                                </div>
                                <div class='col-xs-12 col-sm-6'>
                                    <div class='img-descripcion imgd-6'>
                                        <div class="imagen-6"></div>
                                    </div>


                                </div>
                                <div class='col-sm-6 hidden-xs'>
                                    <div class="descripcion">
                                        <h3>Plan Tapahuecos</h3>
                                        <p>La Unidad de Mantenimiento Vial (UMV), como encargada de conservar la malla vial local, intermedia y rural, así como la cicloinfraestructura, en compañía del Instituto de Desarrollo Urbano (IDU) avanzan en el Plan Tapahuecos dentro de la estrategia de La Bogotá Que Estamos Construyendo que incluye reparar 56.000 huecos y hacer mantenimiento a 18,7 km/carril (equivalentes a 117 calles de doble carril).</p>
                                        <p>La UMV apoya estas jornadas con 10 unidades operativas, también conocidas como cuadrillas, con más de 100 personas, con maquinaria y equipo y 2 unidades móviles de parcheo que estarán atendiendo los daños viales reportados por la ciudadanía.</p>
                                        <p>Este plan se ejecuta en 9 corredores de la malla vial principal de la ciudad (entradas y salidas de la ciudad) y vías aferentes a estos. Adicionalmente, se dispone de capacidad para atender otros corredores viales que sean priorizados de acuerdo con los reportes de la ciudadanía.</p>
                                        <p>Por su parte, el IDU dispuso de 47 frentes de obra, amparados por 20 contratos de obra e interventoría que trabajan en segmentos de corredores viales priorizados y en 13 por emergencia.</p>

                                        <br>
                                        <p class="ver">Ver más sobre el Plan Tapahuecos:<a href="https://experience.arcgis.com/experience/a061a336dc2a4a8b9aebb57e2924f24d/" target="_blank" rel="noopener noreferrer">https://experience.arcgis.com/experience/a061a336dc2a4a8b9aebb57e2924f24d/</a></p>
                                    </div>
                                </div>
                            </div>
                            <!-- Fin   -->

                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="alternativas">

                            <div class='row'>
                                <div class="col-xs-12">
                                    <div class="introduccion">
                                        <p>Bogotá nos ofrece hoy múltiples posibilidades para movilizarnos, de acuerdo a nuestras necesidades, preferencias y destinos.</p>
                                    </div>
                                </div>
                                <div class='col-xs-12 col-sm-6 col-md-6'>
                                    <div class="descripcion">
                                        <h3>Transporte público</h3>
                                        <p>El Sistema Integrado de Transporte Público de Bogotá es uno de los modos más usados porque nos conecta a través de 152 accesos (139 estaciones, 9 portales y 4 estaciones de TransMicable) con toda la ciudad. Adicionalmente cuenta con 22 biciestaciones distribuidas en estaciones y portales a lo largo de la ciudad con 6.059 cupos disponibles.</p>
                                        <p>Con la entrada en operación de los nuevos concesionarios del componente zonal y de alimentación, el Sistema está aumentando su cobertura en la zonas de Fontibón, Perdomo, Usme, San Cristóbal y Suba Centro, anteriormente atendidas por el esquema provisional.</p>
                                        <p>Es un modo de transporte que contribuye al mejoramiento de la calidad del aire porque cuenta con 483 buses eléctricos operativos, de los 1.485 que están contratados y de manera gradual están entrando en operación.</p>
                                        <p>En total, el Sistema cuenta con 1.450 buses con motores de combustión a Gas Natural Vehicular, de los cuales 742 son troncales y 726 son zonales y de alimentación.</p>
                                        <p>Para evitar la aglomeración de usuarios en horas pico, se recomienda escalonar los viajes a lo largo del día, en lo posible en horas valle (9 a.m. a 4 p.m.). El Sistema puede recibir un mayor número de usuarios si estos ingresan de manera espaciada a lo largo del día.</p>
                                        <p>Para moverse informado sobre las rutas y frecuencias, y así mejorar los tiempos de viaje, se recomienda planear con anticipación cada desplazamiento ingresando a la página web www.transmilenio.gov.co o utilizando la TransMiAPP, disponible para descargar en el celular, para identificar las rutas, estaciones y paraderos que le sirven para su recorrido.</p>
                                        <p>Si eres un pasajero habitual del sistema te convendría personalizar su tarjeta TuLlave para los transbordos le cuesten menos, de $0 a $200, durante una ventana de tiempo de 110 minutos, tenga crédito en el caso que se quede sin saldo, y pueda bloquearla en caso de robo.</p>


                                    </div>
                                </div>
                                <div class='col-xs-12 col-sm-6 col-md-6'>
                                    <div class='img-descripcion imgd-7'>
                                        <div class="imagen-7">
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class='row'>

                                <div class='col-xs-12 visible-xs'>
                                    <div class="descripcion">
                                        <h3>Bicicleta</h3>
                                        <p>El modo de transporte más sostenible que tiene la ciudad, por su menor impacto en la congestión y al medio ambiente, es la bicicleta. Actualmente, Bogotá cuenta con 590 km de ciclorrutas permanentes y 18 km de ciclovías temporales que son usadas a diario por ciclistas urbanos para recorrer la ciudad. Según la Encuesta de Movilidad 2019, de los más de 880 mil viajes diarios en bici que hacen en Bogotá, el 24% de esos viajes son hechos por mujeres y el 74% por hombres.</p>
                                        <p>La cicloinfraestructura va seguir aumentando en los próximos años, durante esta Administración, se proyecta implementar 280 km de nuevas ciclorrutas de las cuales se han entregado 40 km.</p>
                                        <p>Si quieres conocer el mapa de ciclorrutas ingresa a <a href="https://www.movilidadbogota.gov.co/web/mapa_de_ciclorrutas_de_bogota">https://www.movilidadbogota.gov.co/web/mapa_de_ciclorrutas_de_bogota</a></p>
                                        <p>Recuerda que desde enero del 2022 el Registro Bici es obligatorio para todos los ciclistas que residen en Bogotá. Este trámite puede hacerlo totalmente virtual a través del portal <a href="registrobicibogota.movilidadbogota.gov.co">registrobicibogota.movilidadbogota.gov.co</a></p>
                                        <p>Y si no tienes bici y te gustaría moverte en este modo de transporte recuerda que la ciudad adjudicó la licitación para el primer Sistema de Bicicletas Compartidas de Bogotá a Tembici. El Sistema estará ubicado entre las localidades de Usaquén y La Candelaria, permitirá la fácil conexión con el Sistema de Transporte Público y contará con al menos 300 estaciones y 3.300 bicicletas.</p>


                                    </div>
                                </div>

                                <div class='col-xs-12 col-sm-6 col-md-6'>
                                    <div class='img-descripcion imgd-8'>
                                        <div class="imagen-8">

                                        </div>
                                    </div>
                                </div>

                                <div class='col-sm-6 hidden-xs'>
                                    <div class="descripcion">
                                        <h3>Bicicleta</h3>
                                        <p>El modo de transporte más sostenible que tiene la ciudad, por su menor impacto en la congestión y al medio ambiente, es la bicicleta. Actualmente, Bogotá cuenta con 590 km de ciclorrutas permanentes y 18 km de ciclovías temporales que son usadas a diario por ciclistas urbanos para recorrer la ciudad. Según la Encuesta de Movilidad 2019, de los más de 880 mil viajes diarios en bici que hacen en Bogotá, el 24% de esos viajes son hechos por mujeres y el 74% por hombres.</p>
                                        <p>La cicloinfraestructura va seguir aumentando en los próximos años, durante esta Administración, se proyecta implementar 280 km de nuevas ciclorrutas de las cuales se han entregado 40 km.</p>
                                        <p>Si quieres conocer el mapa de ciclorrutas ingresa a <a href="https://www.movilidadbogota.gov.co/web/mapa_de_ciclorrutas_de_bogota">https://www.movilidadbogota.gov.co/web/mapa_de_ciclorrutas_de_bogota</a></p>
                                        <p>Recuerda que desde enero del 2022 el Registro Bici es obligatorio para todos los ciclistas que residen en Bogotá. Este trámite puede hacerlo totalmente virtual a través del portal <a href="registrobicibogota.movilidadbogota.gov.co">registrobicibogota.movilidadbogota.gov.co</a></p>
                                        <p>Y si no tienes bici y te gustaría moverte en este modo de transporte recuerda que la ciudad adjudicó la licitación para el primer Sistema de Bicicletas Compartidas de Bogotá a Tembici. El Sistema estará ubicado entre las localidades de Usaquén y La Candelaria, permitirá la fácil conexión con el Sistema de Transporte Público y contará con al menos 300 estaciones y 3.300 bicicletas.</p>


                                    </div>
                                </div>
                            </div>

                            <div class='row'>
                                <div class='col-xs-12 col-sm-6 col-md-6'>
                                    <div class="descripcion">
                                        <h3>Carro compartido</h3>
                                        <p>La movilidad compartida ayuda a reducir el gran flujo de carros en la ciudad, por eso será una de las mejores alternativas para usar el vehículo particular.</p>
                                        <p>Para aplicar a esta excepción, el vehículo siempre debe circular, desde el origen hasta el destino, con tres o más personas (incluyendo el/la conductor/a) durante el recorrido registrado para el cual es válida la exención. Los registros de los viajes se deben hacer cada semana.</p>
                                        <p>De esta manera, los ciudadanos pueden aplicar a la excepción de carro compartido, pues la idea es que se optimice la ocupación de los vehículos para también ayudar a descongestionar los buses y el sistema TransMilenio.</p>
                                        <p>Si estás interesado en aplicar a la excepción por carro compartido debes registrar los viajes en la plataforma de excepciones temporales que ha dispuesto la Secretaría de Movilidad en este link: <a href="https://www.movilidadbogota.gov.co/web/registro_restriccion_vehicular">https://www.movilidadbogota.gov.co/web/registro_restriccion_vehicular</a></p>
                                        <p>Recuerda que el vehículo debe tener SOAT vigente y el conductor debe estar libre de comparendos de tránsito.</p>

                                    </div>
                                </div>

                                <div class='col-xs-12 col-sm-6'>
                                    <div class='img-descripcion imgd-9'>
                                        <div class="imagen-9">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="comportamientos">

                            <div class='row'>
                                <div class='col-xs-12'>
                                    <div class="introduccion">
                                        <p>Bogotá es reconocida a nivel mundial por ser una ciudad de contrastes, en donde podemos ver el verde de la sabana que la rodea, así como la arquitectura clásica y cultural de La Candelaria, sin dejar de lado el arte, lo curioso y la deslumbrante imaginación de sus habitantes al recorrer cada una de sus calles.</p>
                                        <p>Sin embargo, la forma de movilizarse es otro de los puntos por los cuales Bogotá es reconocida, por lo cual mejorar este factor es retador y el camino para que la ciudad sea un referente en movilidad a nivel mundial.</p>
                                        <p><strong>La Bogotá Que Estamos Construyendo,</strong> nos invita a activar esa empatía con la ciudad desde el comportamiento, la integración de nuevos hábitos que aportan a la movilidad y la consciencia para reconocer que el plan de obras traerá incomodidad a los habitantes, mientras se ejecutan, pero a la vez generarán avances de modernidad y sobre todo reducciones en los tiempos de viaje al mediano y largo plazo. Todos los actores viales podemos aportar en este propósito.</p>

                                    </div>
                                    <div class="descripcion">
                                        <h3>¿Cómo moverme mejor mientras La Bogotá Que Estamos Construyendo?</h3>
                                        <p><strong>Comportamientos del conductor, de vehículo particular, taxi, transporte colectivo, SITP:</strong></p>
                                        <p><strong>Cortesía en la vía.</strong> Existen comportamientos que sin duda son los que reducen y retrasan la movilidad en la ciudad y que en muchos de los casos son comportamientos contagiosos; por ejemplo, si va conduciendo por una autopista y el carro de adelante indica con la direccional que se va a cambiar de carril; en lugar de acelerar y no dejarlo pasar, generando probablemente una competencia innecesaria entre los dos vehículos, podría optar por acatar la señal que el otro conductor está haciendo, reducir su velocidad y dejarlo pasar. Este sencillo acto puede impactar positivamente la movilidad de dicho corredor vial y de hecho evitar cualquier tipo de accidente.</p>
                                        <p>Pasar el semáforo en amarillo es la principal causa por la cual los carros obstaculizan las intersecciones en las grandes vías, por eso haga caso y pase el semáforo solo cuando este se encuentre en verde.</p>
                                        <br>
                                        <p><strong>Estacionarse por pocos minutos.</strong> con el pensamiento de “son solo cinco minutos” es otro de los grandes ejemplos que interfieren con la movilidad. Realice el trabajo de sumar sus cinco minutos (que generalmente pueden ser más de cinco), con los cinco minutos de los demás y le da una cifra interminable, si nadie usara la vía para tomarse los cinco minutos la movilidad avanzaría horas enteras. Recuerde que solo puede estacionarse en lugares permitidos para recoger y dejar pasajeros.</p>
                                        <p>Finalmente haga una reflexión interior y piense “no voy solo en la vía” si logra tener prudencia, paciencia y pilera a la hora de andar por Bogotá haciendo uso de las normas básicas de tránsito, la movilidad mejorará notablemente, esto es un aporte suyo al hecho de que <strong>La Bogotá Que Estamos Construyendo</strong>.</p>
                                        <p>La mayor cantidad de fatalidades por siniestros viales las registran los usuarios de moto (conductor y pasajero), seguidos por el peatón y en tercer lugar los ciclistas, por eso acá vienen una serie de recomendaciones y tips para cada uno.</p>
                                    </div>
                                </div>
                            </div>

                            <div class='row'>

                                <div class='col-xs-12 col-sm-6'>
                                    <div class='img-descripcion imgd-10'>

                                        <div id="carousel-comportamientos" class="carousel slide" data-ride="carousel">
                                            <!-- Indicators -->
                                            <ol class="carousel-indicators">
                                                <li data-target="#carousel-comportamientos" data-slide-to="0" class="active"></li>
                                                <li data-target="#carousel-comportamientos" data-slide-to="1"></li>
                                                <li data-target="#carousel-comportamientos" data-slide-to="2"></li>
                                                <li data-target="#carousel-comportamientos" data-slide-to="3"></li>
                                            </ol>

                                            <!-- Wrapper for slides -->
                                            <div class="carousel-inner" role="listbox">
                                                <div class="item active">
                                                    <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/24-01-2022/03-seccion-3-planifica_tu_viaje-1_a.webp" alt="...">
                                                    <!-- <div class="carousel-caption">
                                                        Obras en ...
                                                    </div> -->
                                                </div>
                                                <div class="item">
                                                    <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/24-01-2022/bem_peaton_a.webp" alt="...">
                                                    <!-- <div class="carousel-caption">
                                                        Obras en ...
                                                    </div> -->
                                                </div>
                                                <div class="item">
                                                    <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/24-01-2022/bem_peaton_1_a.webp" alt="...">
                                                    <!-- <div class="carousel-caption">
                                                        Obras en ...
                                                    </div> -->
                                                </div>
                                                <div class="item">
                                                    <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/24-01-2022/bem_peaton_2_a.webp" alt="...">
                                                    <!-- <div class="carousel-caption">
                                                        Obras en ...
                                                    </div> -->
                                                </div>
                                            </div>

                                            <!-- Controls -->
                                            <a class="left carousel-control" href="#carousel-comportamientos" role="button" data-slide="prev">
                                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                                <span class="sr-only">Anterior</span>
                                            </a>
                                            <a class="right carousel-control" href="#carousel-comportamientos" role="button" data-slide="next">
                                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                                <span class="sr-only">Siguiente</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class='col-sm-6 hidden-xs'>
                                    <div class="descripcion">
                                        <!-- <h3>BOTÓN DE PEATÓN, CICLISTA, MOTOCICLISTA</h3> -->

                                        <div class="boxcordion">

                                            <div class='panel-group ' id='accordionPCM' role='tablist ' aria-multiselectable='true'>

                                                <!-- collapsePeaton -->
                                                <div class='panel panel-default'>
                                                    <div class='panel-heading' role='tab' id='headingPCM'>
                                                        <h4 class='panel-title'>
                                                            <a role='button' data-toggle='collapse' data-parent='#accordionPCM' href='#collapsePCM' aria-expanded='true' aria-controls='collapsePCM'>
                                                                PEATÓN
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id='collapsePCM' class='panel-collapse collapse in' role='tabpanel' aria-labelledby='headingPCM'>
                                                        <div class='panel-body'>
                                                            <p><strong>¿Cómo aporto si soy peatón?</strong></p>
                                                            <p>Hacer uso de las cebras y los puentes peatonales es su principal rol para la mejora en la movilidad, moverse tranquilo y por donde es, ayuda a mejorar la movilidad de la ciudad, tenga en cuenta que usted, señor peatón es uno de los actores más vulnerables en la vía, recuerde que caminar es salud, pero hacerlo por donde se debe es sinónimo de auto cuidarse, querer a su ciudad y aportar que Bogotá, está mejorando.</p>
                                                            <p>En este link puede acceder al manual del buen peatón (<a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Noticias/05-11-2020/04-11-2020_manual_del_buen_peaton.pdf" target="_blank" rel="noopener noreferrer">https://www.movilidadbogota.gov.co/web/sites/default/files/Noticias/05-11-2020/04-11-2020_manual_del_buen_peaton.pdf</a>), donde encontrará muchos más temas a tener en cuenta para aprovechar los corredores dispuestos para usted de manera segura y ordenada.</p>
                                                            <p>Recuerde que también hay todo un sistema de transporte público al que puede acceder. Lo invitamos a hacer clic aquí link a Transmilenio para conocer las rutas, planear su viaje con anterioridad y decirle SÍ a la movilidad en Bogotá.</p>

                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /#fin Peaton -->

                                                <!-- collapseCiclista -->
                                                <div class='panel panel-default'>
                                                    <div class='panel-heading' role='tab' id='headingCiclista'>
                                                        <h4 class='panel-title'>
                                                            <a role='button' data-toggle='collapse' data-parent='#accordionPCM' href='#collapseCiclista' aria-expanded='true' aria-controls='collapseCiclista'>
                                                                CICLISTA
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id='collapseCiclista' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingCiclista'>
                                                        <div class='panel-body'>

                                                            <div class='panel-group ' id='accordionCiclista' role='tablist ' aria-multiselectable='true'>


                                                                <!-- collapseCiclistaUno -->
                                                                <div class='panel panel-default'>
                                                                    <div class='panel-heading' role='tab' id='headingCiclistaUno'>
                                                                        <h4 class='panel-title'>
                                                                            <a role='button' data-toggle='collapse' data-parent='#accordionCiclista' href='#collapseCiclistaUno' aria-expanded='true' aria-controls='collapseCiclistaUno'>
                                                                                ¿CÓMO AYUDAR SI VAS EN UNA BICILETA?
                                                                            </a>
                                                                        </h4>
                                                                    </div>
                                                                    <div id='collapseCiclistaUno' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingCiclistaUno'>
                                                                        <div class='panel-body'>
                                                                            <p><strong>Usar las ciclorutas y la cicloinfraestructura disponible.</strong> Los ciclistas deben tener en cuenta que en ocasiones los vehículos deben detenerse o bajar la velocidad por pasar junto a un ciclista que va por una vía en donde hay ciclo ruta, conozca cuáles son las rutas por dónde encuentra una vía diseñada para usted, que le garantiza un mayor porcentaje de seguridad y auto cuidado y con esta simple elección, de ir por la calzada correcta, usted estará aportando a que Bogotá mejore.</p>
                                                                            <p>Desde el año 2020 se han realizado más de <strong>450 jornadas</strong> de pedagogía en vía en las que se ofrecen recomendaciones sobre el uso seguro y adecuado de la bicicleta y se crea conciencia sobre la corresponsabilidad y el autocuidado en las vías. En estas jornadas han participado más de <strong>50.000 ciclistas</strong>.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- /#fin CiclistaUno -->

                                                                <!-- collapseCiclistaDos -->
                                                                <div class='panel panel-default'>
                                                                    <div class='panel-heading' role='tab' id='headingCiclistaDos'>
                                                                        <h4 class='panel-title'>
                                                                            <a role='button' data-toggle='collapse' data-parent='#accordionCiclista' href='#collapseCiclistaDos' aria-expanded='true' aria-controls='collapseCiclistaDos'>
                                                                                CICLOVÍAS TEMPORALES Y CICLORUTAS
                                                                            </a>
                                                                        </h4>
                                                                    </div>
                                                                    <div id='collapseCiclistaDos' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingCiclistaDos'>
                                                                        <div class='panel-body'>

                                                                            <div class='panel-group ' id='accordionCiclista_Dos' role='tablist ' aria-multiselectable='true'>

                                                                                <!-- collapseCiclista_21 -->
                                                                                <div class='panel panel-default'>
                                                                                    <div class='panel-heading' role='tab' id='headingCiclista_21'>
                                                                                        <h4 class='panel-title'>
                                                                                            <a role='button' data-toggle='collapse' data-parent='#accordionCiclista_Dos' href='#collapseCiclista_21' aria-expanded='true' aria-controls='collapseCiclista_21'>
                                                                                                Ciclovías temporales y ciclorrutas:
                                                                                            </a>
                                                                                        </h4>
                                                                                    </div>
                                                                                    <div id='collapseCiclista_21' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingCiclista_21'>
                                                                                        <div class='panel-body'>
                                                                                            <p>En el marco de la pandemia por Covid-19, Bogotá fue de las primeras ciudades del mundo en responder rápidamente a la necesidad de descongestionar el transporte público, <strong>implementando 84 kilómetros de ciclovías temporales</strong>, para facilitar la movilidad de los ciudadanos durante la pandemia.</p>
                                                                                            <p>Los corredores de Ciclovías temporales se implementaron en:</p>
                                                                                            <ul>
                                                                                                <li>
                                                                                                    Av. Calle 13 desde la carrera 137 hasta la carrera 50
                                                                                                </li>
                                                                                                <li>
                                                                                                    Av. Carrera 68 desde la Autopista Sur hasta la av. Calle 53
                                                                                                </li>
                                                                                                <li>
                                                                                                    Calle 68 desde Av. Caracas hasta la transversal 100 G
                                                                                                </li>
                                                                                                <li>
                                                                                                    Av. Caracas desde el parque El Tunal hasta la Diagonal 48 sur
                                                                                                </li>
                                                                                                <li>
                                                                                                    Av. Caracas desde el Portal Usme hasta la Diagonal 48 sur
                                                                                                </li>
                                                                                                <li>
                                                                                                    Av. Caracas desde la Diagonal 48 sur hasta la av. Calle 6
                                                                                                </li>
                                                                                                <li>
                                                                                                    Av. 1 de Mayo desde la Carrera 7 hasta la av. Agoberto Mejía
                                                                                                </li>
                                                                                                <li>
                                                                                                    Av. Suba desde la carrera 94 hasta la calle 127
                                                                                                </li>
                                                                                                <li>
                                                                                                    Av. Carrera 7 desde la av. 1 de Mayo hasta la calle 106
                                                                                                </li>
                                                                                                <li>
                                                                                                    Carrera 9 desde la calle 106 hasta la calle 147
                                                                                                </li>
                                                                                                <li>
                                                                                                    Av. Américas desde la av. NQS hasta la carrera 50
                                                                                                </li>
                                                                                                <li>
                                                                                                    Autosur desde Cai de Bosa hasta Av Villavicencio
                                                                                                </li>
                                                                                                <li>
                                                                                                    Carrera 24 entre la Av. Boyacá y la Av Primero de Mayo
                                                                                                </li>
                                                                                                <li>
                                                                                                    Puentes vehiculares de Av. Calle 80 con Av. NQS, Av. 68 y Av. Boyacá
                                                                                                </li>
                                                                                                <li>
                                                                                                    Puentes vehiculares de Av. Américas con Av. NQS, Av. 50 y Av. Boyacá
                                                                                                </li>
                                                                                            </ul>

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <!-- /#fin Ciclista_21 -->

                                                                                <!-- collapseCiclista_22 -->
                                                                                <div class='panel panel-default'>
                                                                                    <div class='panel-heading' role='tab' id='headingCiclista_22'>
                                                                                        <h4 class='panel-title'>
                                                                                            <a role='button' data-toggle='collapse' data-parent='#accordionCiclista_Dos' href='#collapseCiclista_22' aria-expanded='true' aria-controls='collapseCiclista_22'>
                                                                                                Ciclorrutas permanentes:
                                                                                            </a>
                                                                                        </h4>
                                                                                    </div>
                                                                                    <div id='collapseCiclista_22' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingCiclista_22'>
                                                                                        <div class='panel-body'>
                                                                                            <p>Muchas de las vías que antes estaban reservadas para vehículos motorizados, cedieron parte de su espacio para la movilidad en bicicleta, por lo que <strong>hoy siguen vigentes 22 kilómetros de ciclovías temporales y se han implementado 40 kilómetros de ciclorrutas permanentes</strong> en avenidas icónicas de Bogotá como la Calle 13 y las Carreras Séptima y Novena.</p>
                                                                                            <p><strong>Características de las principales ciclorrutas permanentes implementadas: </strong></p>
                                                                                            <ul>
                                                                                                <li>
                                                                                                    <p><strong>Ciclorruta Carrera Séptima:</strong> tiene una <strong>extensión de 17,7 kilómetros</strong>, les permite a los ciclistas realizar sus trayectos de manera directa desde la calle 22 sur, localidad de San Cristóbal hasta la calle 106, en la localidad de Usaquén. De igual forma, pasa por las localidades de Santa Fe, Candelaria y Chapinero. La usan <strong>más de 1.800 ciclistas al día</strong> en horas pico (a.m. y p.m.)</p>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <p><strong>Ciclorruta Carrera Novena</strong>: tiene una <strong>extensión de 6,95 kilómetros</strong>. Está ubicada sobre la carrera 9, iniciando en la calle 170 hasta llegar a la calle 127. En ese punto, toma la carrera 11 para llegar hasta la calle 116, donde los ciclistas pueden continuar hacia el sur de la ciudad por la ciclorruta de la carrera 11 o dirigirse al noroccidente, por la ciclorruta de la calle 116. La usan <strong>más de 3.500 ciclistas al día</strong> en horas pico (a.m. y p.m.)</p>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <p><strong>Ciclorruta Calle 13</strong>: franja ciclopeatonal ubicada en el costado sur de la Calle 13 que cuenta 4,20 metros de ancho, de los cuales 3 metros son destinados para la circulación de bicicletas y 1.20 m para peatones. Tiene una <strong>longitud de 3.6 km,</strong> se extiende entre las carreras 97 y 135 y permite conexión con la Alameda El Porvenir, la carrera 104 y la Zona Franca. La usan casi <strong>7.400 ciclistas al día</strong> en horas pico (a.m. y p.m.)</p>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <!-- /#fin Ciclista_22 -->
                                                                            </div>

                                                                            <p>En este link puedes acceder al mapa de ciclorutas de la ciudad y planear tu viaje utilizando este medio alternativo de transporte. </p>
                                                                            <p>Esta administración <strong>expidió la Política Pública de la Bici</strong> (PPB) la cual dicta los lineamientos para promover y garantizar el uso y disfrute de la bicicleta en Bogotá como medio de transporte alternativo en todas sus modalidades.</p>
                                                                            <p>Su objetivo principal es mejorar las condiciones físicas, socioeconómicas y culturales de la ciudad para el uso de la bicicleta. Tiene cinco objetivos estratégicos en los que trabajan articuladamente 20 entidades distritales, por lo que todos los proyectos bici que se desarrollan en la Administración, responden a los lineamientos de la PPB.En enero de 2020 la Secretaria Distrital de Movilidad recibió el Registro Bici con 32.559 bicicletas registradas, de las cuales solo 10.754 tenían los datos completos. En lo corrido de esta administración se han logrado registrar 75.903 bicicletas nuevas y virtualizar la totalidad del proceso con el fin de hacerlo más ágil para los ciudadanos.</p>
                                                                            <p>Ahora la ciudadanía solo debe ingresar a <a href="http://registrobicibogota.movilidadbogota.gov.co" target="_blank" rel="noopener noreferrer">registrobicibogota.movilidadbogota.gov.co</a> crear su usuario e introducir los datos de su bici como marca, color, número serial del marco, modelo y fotos. Una vez diligenciados todos los datos, la plataforma arrojará un mensaje con el número serial del registro y, automáticamente, se enviará el comprobante al correo electrónico, el cual también se podrá descargar en la plataforma.</p>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- /#fin CiclistaDos -->

                                                                <!-- collapseCiclistaTres -->
                                                                <div class='panel panel-default'>
                                                                    <div class='panel-heading' role='tab' id='headingCiclistaTres'>
                                                                        <h4 class='panel-title'>
                                                                            <a role='button' data-toggle='collapse' data-parent='#accordionCiclista' href='#collapseCiclistaTres' aria-expanded='true' aria-controls='collapseCiclistaTres'>
                                                                                SISTEMA DE BICICLETAS COMPARTIDAS
                                                                            </a>
                                                                        </h4>
                                                                    </div>
                                                                    <div id='collapseCiclistaTres' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingCiclistaTres'>
                                                                        <div class='panel-body'>
                                                                            <p>Esta administración adjudicó el Sistema de Bicicletas Compartidas que contará con al menos <strong>2.030 bicicletas disponibles</strong> en alrededor de <strong>152 estaciones</strong> ubicadas en las localidades de Usaquén, Chapinero, Barrios Unidos, Santa Fe y La Candelaria</p>
                                                                            <p>El Sistema no requerirá inversión por parte de la ciudad. En contraprestación por el uso del espacio público, la empresa instalará mobiliario de cicloparqueaderos en las zonas de la ciudad donde haya necesidad de los mismos.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- /#fin CiclistaTres -->

                                                                <!-- collapseCiclistaCuatro -->
                                                                <div class='panel panel-default'>
                                                                    <div class='panel-heading' role='tab' id='headingCiclistaCuatro'>
                                                                        <h4 class='panel-title'>
                                                                            <a role='button' data-toggle='collapse' data-parent='#accordionCiclista' href='#collapseCiclistaCuatro' aria-expanded='true' aria-controls='collapseCiclistaCuatro'>
                                                                                CICLOPARQUEADEROS
                                                                            </a>
                                                                        </h4>
                                                                    </div>
                                                                    <div id='collapseCiclistaCuatro' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingCiclistaCuatro'>
                                                                        <div class='panel-body'>
                                                                            <p>Durante esta administración se han implementado <strong>1.613 cupos</strong> de cicloparqueaderos y se han certificado con sellos de calidad oro y plata de la Secretaría de Movilidad <strong>19.595 cupos</strong>.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- /#fin CiclistaCuatro -->


                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /#fin Ciclista -->

                                                <!-- collapse -->
                                                <div class='panel panel-default'>
                                                    <div class='panel-heading' role='tab' id='heading'>
                                                        <h4 class='panel-title'>
                                                            <a role='button' data-toggle='collapse' data-parent='#accordionPCM' href='#collapse' aria-expanded='true' aria-controls='collapse'>
                                                                MOTOCICLISTA
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id='collapse' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading'>
                                                        <div class='panel-body'>
                                                            <p><strong>¿Cómo ayudar si vas en una moto?</strong></p>
                                                            <p><strong>No zigzaguear en la vía.</strong> Querer llegar siempre al liderazgo de la fila en un semáforo, hacer cruces prohibidos, adelantar por el carril derecho entre otros son algunos de los imprudentes actos que ocasionan los siniestros viales, por eso antes de subir a su motocicleta, asegúrese de que va con todas las medidas de protección, y de que lo importante no es llegar a la fila del semáforo, sino regresar a salvo a su casa. La prudencia, paciencia y pilera le permitirán aportar a la seguridad vial de la ciudad, a su movilidad y a la plataforma: <strong>La Bogotá Que Estamos Construyendo.</strong></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /#fin  -->

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>



                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="actualidad">

                            <div class='row'>

                                <div class='col-xs-12 col-sm-12'>
                                    <div class="introduccion text-center">
                                        <div>
                                            <p>Encuentra toda la actualidad de La Bogotá Que Estamos Construyendo en está sección.</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <hr>

                            <div class="box-boletines">
                                <div class='row'>





                                    <!-- collapse_boletines21 -->
                                    <div class='panel-group ' id='accordion_boletines21' role='tablist ' aria-multiselectable='true'>

                                        <!-- collapse_abr22 -->
                                        <div class='panel panel-default'>
                                            <div class='panel-heading' role='tab' id='heading_abr22'>
                                                <h4 class='panel-title'>
                                                    <a role='button' data-toggle='collapse' data-parent='#accordion' href='#collapse_abr22' aria-expanded='true' aria-controls='collapse_abr22'>
                                                        Boletines abril 2022
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id='collapse_abr22' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_abr22'>
                                                <div class='panel-body'>
                                                    <div class='col-xs-12'>
                                                        <a class='enlace' href='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-04-2022/2022-04-07_boletin_la_bogota_que_estamos_construyendo.pdf'>
                                                            <div class='btn-boletin'>
                                                                <div class='titulo-boletin'>
                                                                    <h4>BOLETÍN 74</h4>
                                                                    <i>jueves, 7 de abril de 2022</i>
                                                                </div>
                                                                <div class='descripcion-boletin'>
                                                                    <p>Así funciona el contraflujo en la Av. de las Américas para descongestionar el occidente de Bogotá. La UMV apoyó la implementación del nuevo carril de contraflujo en la Avenida de las Américas para descongestionar el occidente de la ciudad, y mucho más.</p>
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
                                                                    <p>El Portal del Sur contará con más cupos para las bicis. Conozca la máquina niveladora de arrastre con la que se intervenían las vías a finales de 1800, y mucho más.</p>
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
                                                                    <p>La UMV adelanta obras de mantenimiento vial a los desvíos que se implementarán para las obras del metro de Bogotá. Prepárese para el cierre de la calzada norte en sentido Oriente - Occidente en la Avenida Villavicencio entre la Avenida Primero de Mayo y carrera 78i, mucho más. </p>
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
                                                                    <p>La UMV ha priorizado varias vías de la localidad de Teusaquillo para su intervención. Para actividades de conexión de tubería de redes secas Cierre parcial de carril en bocacalles en Avenida 68, mucho ,ás.</p>
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
                                                                    <p>Distrito lanzó campaña para proteger a los peatones y cambiar la historia del mal parqueo. 213 nuevos buses eléctricos del Sistema de Transporte de Bogotá comienzan su operación este sábado 2 de abril. Inician actividades de conservación de espacio público, y mucho más.</p>
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
                                                                        <p>#LaBogotáQueEstamosCostruyendo Bogotá ya cuenta con 1.061 buses eléctricos que estarán operando a finales de abril. Para descongestionar el occidente de Bogotá, se implementa contraflujo en la Av. de las Américas. Espacio público accesible, y mucho más.</p>
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
                                                                        <p>Así ve la comunidad las obras del patio taller, abitantes del barrio Chicó Norte ahora disfrutan de mejores espacio públicos, Distrito busca a propietarios de 194 vehículos del desmontado servicio de Transporte Público Colectivo (TPC), y mucho más.</p>
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
                                                                        <p>Los habitantes del barrio Timiza en la localidad de Kennedy podrán disfrutar de una renovada vía gracias a trabajo de la UMV. Prolongación de cierres viales en Avenida 68 con Calle 100. 519 armas blancas incautadas en el Sistema, otro logro de la estrategia #MásDe25MilOjosAtentos, y mucho más.</p>
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
                                                                        <p>La Unidad de Mantenimiento Vial mejoró las calles aledañas a una de las iglesias más importantes de la ciudad. Así será el diseño de la Avenida Ciudad de Cali, alimentadora de la línea Metro. </p>
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
                                                                        <p>Finalizado en cinco cruces, traslado anticipado de redes de alta tensión para el Metro. UMV mejora espacio público del barrio Las Margaritas en la Localidad de Kennedy. Cierres viales por inicio de obras en Zona Rosa, y mucho más.</p>
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
                                                                        <p>La UMV llegó al barrio Muequetá para adelantar jornadas nocturnas para mejorar las vías. Nuevo servicio zonal K333 Est. Av. Rojas – F333 Ciudad Alsacia. </p>
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
                                                                        <p>La UMV adelanta labores de parcheo en un tramo de la carrera séptima ubicado en la localidad de Chapinero. Así será la Avenida 68, troncal alimentadora de la línea del Metro. Servicios zonales amplían sus horarios, y mucho más.</p>
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
                                                                        <p>La UMV trabaja para mejorar la malla vial de la localidad de Barrios Unidos. Patio Taller de la Primera Línea del Metro, ahora produce el concreto para su construcción. Cierre de separadores por obras en la Avenida 68, y más.</p>
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
                                                                        <p>IDU concluye la conservación de vías que soportan el SITP en las localidades de Kennedy, Teusaquillo, Puente Aranda y Fontibón. La UMV inició la señalización de 300 vías en varias localidades de la ciudad, y mucho más.</p>
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
                                                                        <p>Con la estrategia ‘Controles Salvavidas’ el Distrito busca reducir el número de víctimas en el tránsito. Fatalidades por siniestros viales en Bogotá. Se realizó la primera jornada de "UMV De Puertas Abiertas" de este año 2022. Y más.</p>
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
                                                                        <p>En los últimos meses la UMV atendió 25 emergencias que diﬁcultaban la movilidad en Bogotá. En la localidad de San Cristóbal Inicia construcción de andenes y de segmento vial en el barrio San Jacinto. Y más.</p>
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
                                                                        <p>Más de 5.000 mujeres mueven a Bogotá Bogotá reconoce la labor de más de 5.000 mujeres que trabajan por el Sistema de Transporte Público. Mañana 15 de marzo se desarrollará la primera jornada de “UMV de Puertas Abiertas” de 2022, y más.</p>
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
                                                                        <p>¡Juntos Cuidamos Suba! En esta localidad la UMV ha tapado más de 35.700 huecos. TransMilenio pone a disposición de los usuarios un servicio zonal adicional para las elecciones. Y más.</p>
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
                                                                        <p>Con éxito inició en firme la restauración la escultura ‘Bolívar Ecuestre’. Este sábado 12 de marzo, inician obras de externalización de taquillas en la estación calle 127. Cierre de dos carriles y separador en Autopista al Llano. Y más.</p>
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
                                                                        <p>La UMV está comprometida con mejorar la calidad del aire en Ciudad Bolívar. Estrategia #MasDe25MilOjosAtentos arroja primeros resultados. El Metro de Bogotá genera oportunidades de trabajo y espacios seguros para la mujer. Y más.</p>
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
                                                                        <p>Entra en operación segunda área de implementación de la Zona de Parqueo Pago. En Avenida Suba Inician las obras de conservación del espacio público y ciclorruta. Ocho servicios zonales ampliaron su horario desde el 7 de marzo, y más.</p>
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
                                                                        <p>La UMV intervino las calles alrededor del Parque de la 93, con este trabajo se mejoran los recorridos de los residentes. Comerciantes y transeúntes de la zona, entre la Carrera 7 y Autopista Norte Se adelanta la construcción de aceras y ciclorrutas de las calles 92 y 94. Y más.</p>
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
                                                                        <p>Distrito implementa nuevas medidas de movilidad en la Autopista Norte para beneficiar a estudiantes. Cerca de 30 mil cámaras y más de 25 mil ojos brindan seguridad a los usuarios en TransMilenio, y más.</p>
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
                                                                        <p>En 2021, Bogotá avanzó en movilidad sostenible, cobertura, seguridad y planes anti-evasión. Ajustes operativos en servicios de la Troncal Américas. Empresa Metro implementa con éxito brigada de supervisión de predios, y más. </p>
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
                                                                        <p>En 2021, Bogotá avanzó en movilidad sostenible, cobertura, seguridad y planes anti-evasión, La Unidad de Mantenimiento Vial le da una nueva cara a las vías del barrio Batán en Suba, gracias a las obras adelantadas para tapar los huecos, y más.</p>
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
                                                                        <p>Logros de Movilidad en 2021 y metas para el 2022 Con el inicio de alrededor de 200 frentes de obra en 2021, Bogotá sigue mejorando en su movilidad.</p>
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
                                                                    <p>Recuerde que el 1 de marzo inicia la operación de la Ventanilla Única de Servicios de Movilidad, Los trabajos de mantenimiento vial llegaron a la localidad de Teusaquillo con mejoras contundentes, y más.</p>
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
                                                                    <p>En la nueva Avenida Guayacanes se abre calzada vehicular, Movilidad avanza en la descongestión de patios de vehículos declarados en abandono, Desde la topografía, Diego Figueredo aporta en la construcción del metro de Bogotá, y más.</p>
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
                                                                    <p>Más kilómetros de ciclorruta en la ciudad Avanza la construcción de aceras y ciclorrutas en la Calle 116, uenos resultados en operativos de seguridad en el Sistema de Transporte, y más.</p>
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
                                                                    <p>En marzo se acaba el SIM y nace la Ventanilla Única de Servicios de Movilidad en Bogotá, En la localidad de Bosa Avanza la construcción de una nueva estación de TransMilenio, y más.</p>
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
                                                                    <p>En las localidades Suba y Teusaquillo Habitantes y transeúntes disfrutan de nuevos espacios públicos, En Engativá, la UMV realiza obras nocturnas para mejorar algunas vías del occidente de la ciudad, y más.</p>
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
                                                                    <p>Una indígena de la comunidad Wayuu es la nueva integrante del equipo de atención al ciudadano de la UMV y el enlace entre la entidad y esta población, Inician labores de conservación y mantenimiento en espacio público, y más.</p>
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
                                                                    <p>Acacias y Santa Teresa, los 2 barrios en Usaquén que se vieron beneficiados con las obras viales de la UMV, En obras de la Avenida 68 Comunidades de Kennedy y Puente Aranda son convocadas para ejercer veeduría ciudadana, y más.</p>
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
                                                                    <p>La UMV aprovechará las noches de esta semana para intervenir importantes vías en la localidad de Fontibón, Contratistas llevan a cabo sensibilización para ciclistas La Avenida 68 suma kilómetros a la red de ciclorrutas en la ciudad, y más.</p>
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
                                                                    <p>El Pico y Placa Extendido en Bogotá cumplió un mes de implementación, Nuevos buses eléctricos impactarán en la calidad del aire de Bogotá, En horario nocturno Cierres viales por actividades preliminares en Avenida 68, y más.</p>
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
                                                                    <p>Más de 30.000 usuarios se benefician diariamente con los 172 nuevos buses eléctricos. La UMV sigue trabajando para mejorar las vías de la localidad de Bosa. Con un avance del 67.3% avanza la construcción del ciclopuente Canal Molinos, y más.</p>
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
                                                                    <p>Más de 15 mil peatones y ciclistas disfrutan de un nuevo espacio que prioriza su movilidad y seguridad vial. El Equipo de Cultura Ciudadana de la UMV trabaja para fortalecer la sana convivencia entre los colaboradores y los residentes de las vías a intervenir, y más</p>
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
                                                                    <p>Bogotá recibió reconocimiento internacional por sus acciones para promover la movilidad sostenible. Avenida 68, Alimentadora de la Línea del Metro cierres viales para avance de obras. Cerca de 3.000 habitantes de la localidad de Suba se beneficiarán con las obras de mantenimiento vial que inició la UMV en este sector, y más.</p>
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
                                                                    <p>Con la firma del Acta de Inicio, Bogotá contará con el segundo Sistema de Bicicletas Compartidas más grande de LATAM. Cierres en la AutoNorte en construcción el ciclopuente Canal Molinos. La UMV está en Bosa mejorando algunas de las vías de esta localidad, y más.</p>
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
                                                                    <p>Cierre parcial de espacio público por obra más de 800 mil personas beneficiadas con andenes amplios y seguros en Av. Guayacanes. Conoce cómo verificar el saldo de la tarjeta tullave con nuestra TransMiApp, Y más</p>
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
                                                                    <p>Obras en la Avenida 68 a partir de la segunda semana de febrero habrá nuevos cierres y desvíos. El Contador, uno de los barrios en Usaquén dónde se han priorizado los trabajos de Mantenimiento Vial y más.</p>
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
                                                                    <p>A partir de este lunes 7 de febrero nuevos cierres por obras en Avenida Guayacanes. La alcaldía de Bogotá sigue trabajando en el mejoramiento de las vías rurales de Ciudad Bolívar y más.</p>
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
                                                                    <p>Los huecos en las vías del barrio Caobos Salazar hacen parte del pasado. Continúan las obras en Av. Guayacanes Cierre parcial en Carrera 89 B y Calle 49 Sur. Usuarios de TransMilenio respiran un aire más limpio, y más.</p>
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
                                                                    <p>En el primer mes del 2022 la UMV ha mejorado más de 45 mil daños viales. En obra la Extensión Caracas Sur Cierres entre Estación Molinos y Portal Usme. La nueva cara de portales y estaciones de TransMilenio</p>
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
                                                                    <p>Avanzan las obras en Av. Ciudad de Cali Iniciaron actividades para la construcción del ciclopuente a la altura de la Av. Villavicencio, En tiempo récord la UMV mejoró cuatro calles de la localidad de Kennedy, y más.</p>
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
                                                                    <p>La UMV mejoró varias calles del barrio Galerías de la localidad de Teusaquillo, Dos nuevas rutas del SITP conectan las localidades de San Cristóbal y Chapinero.</p>
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
                                                                    <p>En Ciudad Bolívar se realizan trabajos para mejorar la malla vial en el barrio Estrella del Sur. ¡Engativá está mejorando! En esta localidad la UMV realiza obras para la reactivación vial de una zona cercana al Aeropuerto Internacional El Dorado. </p>
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
                                                                        y continúa intervenciones en Puente Aranda. Cierre de carril en AutoNorte por obras del ciclopuente Canal Molinos. Cambia el sentido vial de la calle 64 de Engativá Pueblo. Y más.</p>
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
                                                                    <p>Se adelantarán trabajos de desmonte en puente vehicular de la Av. 68 con Calle 26. El estado de las calles alrededor del estadio El Campín mejoraron gracias al Plan de Choque del Distrito. Más de 15 mil acciones en pro de la seguridad de usuarios y convivencia dentro de TransMilenio. Y más.</p>
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
                                                                    <p>Bogotá, una ciudad a la altura del mundo Empresas privadas se comprometen con Bogotá y la movilidad sostenible. Con tres frentes de obra activos Se adelantan trabajos de conservación de la malla vial en Engativá. Y más.</p>
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
                                                                    <p>Las actividades de Mantenimiento Vial llegaron al barrio Castilla de la localidad de Kennedy. En la localidad de Bosa Por obras de la Av. Ciudad de Cali, la calle 75 Bis Sur tendrá un cierre temporal. Y más.</p>
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
                                                                    <p>El Plan de Choque llegó al sector de Timiza en Kennedy para mejorar el estado de sus calles. Grupo 2: Entre Avenida Bosa y Avenida Villavicencio Afectaciones viales por Avance de Av. Guayacanes. Álvaro Rengifo, nuevo gerente de TRANSMILENIO S.A. Y más.</p>
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
                                                                    <p>Cuatro barrios de la localidad de Usme mejoraron sus vías con material reciclado. Durante los meses de diciembre y enero la Unidad de Mantenimiento Vial ha estado mejorando el estado de 14 vías de la localidad de Usme.</p>
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
                                                                    <p>Retos del Sector Movilidad y la ciudadanía en 2022. Así será la extensión de la Primera Línea del Metro de Bogotá hasta la calle 100. Grupos 5 y 8 Reuniones de socialización Avenida 68. Y más</p>
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
                                                                    <p>La UMV arregló los daños viales que afectaban la movilidad del barrio Bella Suiza al norte de la ciudad. Entre Carreras 54B y 53A Comienza rehabilitación de acera norte de la 116. Con la tarjeta personalizada “TuLlave” se puede bloquear el saldo en caso de pérdida. Y más</p>
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
                                                                    <p>Balance del Pico y Placa Extendido Semana del 11 al 14 de enero de 2022. Entre Calles 90 y 95 y a la altura de la Calle 66 Cierres en la Avenida 68, y más</p>
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
                                                                    <p>La UMV logró cifra récord al reparar cerca de 300.000 huecos en la malla de la ciudad en 2021, Inicia la rehabilitación vial de la Avenida 9, entre Calles 140 y 145, y más</p>
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
                                                                    <p>Cierres viales por construcción del Paseo Comercial Villas de Granada, TransMilenio hace un llamado a sus usuarios a mantener las medidas de bioseguridad en el Sistema, Así avanzó la bici en Bogotá durante 2021, y más.</p>
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
                                                                    <p>Así avanzan los estudios en terreno para la línea 2 del Metro de Bogotá, En la carrera 9ª. con calle 12 Cierre en andén y calzada, por construcción de puente peatonal del Acuerdo de Valorización, Bogotá suscribe contrato para dar inicio al Sistema de Bicicletas Compartidas de la ciudad, y más.</p>
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
                                                                    <p>Desvíos por el inicio de rehabilitación vial en Kennedy, La tarifa de TransMilenio no incrementa para los más vulnerables, Así de fácil puedes consultar el contrato de concesión para las obras de la Primera Línea del Metro de Bogotá, y más.</p>
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
                                                                    <p>Con más de 34.000 huecos tapados avanza el Plan de Choque en Bogotá, La UMV hace presencia en Usme con 14 frentes de obra de gran impacto, Inicia cierre de calzada lenta de la Calle 26, entre Avenida 68 y Carrera 66, y más.</p>
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
                                                                    <p>Prepárese para regresar Bogotá y recuerde el Pico y Placa Regional, Conozca los detalles de la Avenida Ciudad de Cali, Así funcionan los Comités de Participación Zonal de la Primera Línea del Metro de Bogotá, y más.</p>
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
                                                                    <p>Más de 6 mil buses han sido desintegrados con la salida del SITP Provisional, Cierre por rehabilitación vial en la Calle 147, UMV Implementa Ventanilla Electrónica para radicación, Conozca el cierre total del costado sur de la intersección de la av. Agoberto Mejía con av. Villavicencio, y más.</p>
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
                                                                    <p>Mantenimientos al espacio público en la Calle 63 y en Avenida Villas, Avenida Villas entre Calle 129 y 134, Teusaquillo: otra localidad beneficiada con el plan de choque, Cerca de tres mil conductores del antiguo transporte público ahora son parte del SITP, y más.</p>
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
                                                                    <p>Cambios en el Pico y Placa para vehículos particulares en Bogotá, así es la ruta de la Primera Línea del Metro de Bogotá, En TransMilenio continúan jornadas intensivas de aseo y desinfección de buses y estaciones, y más.</p>
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
                                                                    <p>Conozca desvíos y alternativas de movilidad por cierre de parte oriental del puente de Av.68 con Calle 26,La mitad de quienes se movilizan en TransMilenio son mujeres, Zona rural de Ciudad bolívar beneficiada con el mejoramiento de sus vías, y más.</p>
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
                                                                    <p>Extensión de Troncal Caracas mejorará movilidad del sur de Bogotá, En tiempo récord, dos cuadrillas intervinieron huecos en la Y de Yomasa, En estaciones de TransMilenio más de 42.000 usuarios se han hecho pruebas de Covid-19, y más.</p>
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
                                                                    <p>Habrá cierres y reducción de calzadas en obra del Canal Córdoba entre Calles 129 y 170, UMV llegó a Chapinero con sus cuadrillas de mantenimiento vial, Comunidad de zona de influencia de la Primera Línea del Metro reflexionó sobre la movilidad , y más.</p>
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
                                                                    <p>¡Ojo! Desde el 26 de diciembre, hay tres nuevos cierres en la Avenida Guayacanes, Así avanzan las obras viales en el sector del Gran San en Bogotá, Con 119 rutas el componente zonal ha ampliado su cobertura, y más.</p>
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
                                                                    <p>Ojo a los cierres viales por obras en la Avenida Guayacanes, Tips para moverse seguro en TransMilenio estas festividades, 2 frentes de trabajo de la UMV llegaron a Mazurén para arreglar el estado de la vías, y mas.</p>
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
                                                                    <p>Así operarán los frentes de obra que arreglarán las vías de Bogotá, Cierres viales y de espacio público en grupo 2 de Avenida Guayacanes, 24 estaciones de TransMilenio estrenarán puertas. </p>
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
                                                                    <p>Más de 5 millones de usuarios de TransMilenio tienen beneficios por tener tarjeta personalizada, Por construcción de puente peatonal, se traslada paradero SITP en Carrera 9 con Calle 112, Obras en ciclorruta de la Alameda El Porvenir con avance del 60%, y más.</p>
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
                                                                    <p>Nuevo cierre para seguir avanzando con obras en la Av. 68, Listas las unidades móviles que mejorarán vías a partir de Navidad, TransMilenio ya cuenta con 483 buses eléctricos rodando en la ciudad, Comienzan exploraciones de geotecnia en la calle 72 para la Línea 2 del metro, y más.</p>
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
                                                                    <p>Cierre en Autonorte por ciclopuente que conectará oriente y occidente de la ciudad, Conoce más del proyecto Avenida 68, Con obras comenzó la navidad en San Bernardo, TransMiAPP, el Sistema en la palma de la mano, y más.</p>
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

                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="clips">

                            <div class='row'>

                                <div class='col-xs-12 col-sm-6 col-md-6'>
                                    <div class="descripcion-tito">
                                        <div>
                                            <h3>HISTORIAS CONTADAS</h3>
                                            <div class="introduccion-2">

                                                <p>Bienvenidos, este es un espacio para que conozcas con los ojos de <strong>Tito Calle</strong>, cómo La Bogotá Que Estamos Construyendo.</p>
                                                <p>Déjate contagiar con las historias de este personaje y conoce las megaobras de la ciudad. Con sus historias podrás también obtener consejos para ayudar a la movilidad desde tus comportamientos en las vías y por qué no, tu podrás ser el próximo que nos cuente la experiencia en una Bogotá que está mejorando.</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class='col-xs-12 col-sm-6 col-md-6'>
                                    <div class='img-descripcion imgd-11'>

                                        <div id="carousel-tito" class="carousel slide" data-ride="carousel">
                                            <!-- Indicators -->
                                            <ol class="carousel-indicators">
                                                <li data-target="#carousel-tito" data-slide-to="0" class="active"></li>
                                                <li data-target="#carousel-tito" data-slide-to="1"></li>
                                            </ol>

                                            <!-- Wrapper for slides -->
                                            <div class="carousel-inner" role="listbox">
                                                <div class="item active">
                                                    <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/24-01-2022/tito1_a.webp" alt="...">
                                                    <!-- <div class="carousel-caption">
                                                        Obras en ...
                                                    </div> -->
                                                </div>
                                                <div class="item">
                                                    <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/24-01-2022/tito2_a.webp" alt="...">
                                                    <!-- <div class="carousel-caption">
                                                    Obras en ...
                                                </div> -->
                                                </div>
                                            </div>

                                            <!-- Controls -->
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
                                </div>

                            </div>
                            <div class='row'>
                                <div class='col-xs-12'>

                                    <div class="box-videos">

                                        <div class='row'>

                                            <div class='col-xs-12 col-sm-12 col-md-12'>
                                                <div class='video-bem'>
                                                    <div class="titulo-video-bem">
                                                        <h4>Capítulo 1.</h4>
                                                    </div>
                                                    <div class="box-video-bem">
                                                        <iframe width='100%' height="295px" src="https://www.youtube.com/embed/ECspQF9KOCY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                                                    </div>
                                                    <div class="descripcion-video-bem">
                                                        <div>
                                                            <p>Moverte en Bogotá con medios de transporte alternativos, es una buena opción en tiempos de obra . Mira este video y conoce que te ofrece el Distruto para esta alternativa transporte y móntate a esta onda.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- <div class='col-xs-12 col-sm-6 col-md-6'>
                                                <div class='video-bem'>
                                                    <div class="titulo-video-bem">
                                                        <h4>Capítulo 2</h4>
                                                    </div>
                                                    <div class="box-video-bem">
                                                        <video controls='' style='width: 100%;'>
                                                            <source src='' type='video/mp4'>
                                                    </div>
                                                    <div class="descripcion-video-bem">
                                                        <div>
                                                            <p>El Distrito se propuso una meta de tapar 55.000 huecos en 27 días y sobrepasó este objetivo . ¿Quieres conocer a cuantos llegaron y cómo la ciudad avanza en el plan tapa huecos ? Mira este vide.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> -->

                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </div>
</div>
</div>

<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin Bloque Sección  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->