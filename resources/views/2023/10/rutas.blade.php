@extends('welcome')
@section('title','rutas')
@section('contenido')

<!-- Google fonts - Montserrat  -->
<link rel='preconnect' href='https://fonts.googleapis.com'>
<link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
<link href='https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,900;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,900;1,800;1,900&display=swap' rel='stylesheet'>


<!-- Set rutas -->
<div class="set-wrapper rutas">


    <!-- Sección box header -->
    <div class="box box-header">
        <div class="img-left">
            <div class="imagen img-ppal-left">
            </div>
        </div>
        <style>
            .box-header .img-left {
                grid-area: img-left;
            }

            .box-header .img-ppal-left {
                height: 350px;
            }

            .box-header .img-ppal-left img {
                width: 100%;
                height: 100%;
                object-fit: cover;
            }
        </style>
        <div class="title-ppal">
            <h3>El transporte entre<br><span class="enfasis-tpv">&nbsp;Soacha y Bogotá</span><br>no se acaban</h3>
        </div>
        <div class="paragraph-ppal">
            <p><span class="enfasis-ppal-a">Conoce cómo movilizarte</span> <span class="enfasis-ppal-v">de forma segura y rápida</span></p>
        </div>

        <style>
            .box-header .title-ppal {
                grid-area: title-ppal;
                margin: auto;
            }

            .box-header .paragraph-ppal {
                grid-area: paragraph-ppal;
                margin: auto 2em;
            }

            .box-header .title-ppal h3 {
                font-size: 18px;
                font-family: 'Montserrat', sans-serif;
                font-weight: 900;
                text-align: center;
                line-height: 1;
                color: #1E2245;
                margin: 1.5em 2em;
            }

            .box-header .enfasis-tpv {
                font-size: 32px;
                color: #79b928;
                font-weight: 900;
            }


            @media(min-width:768px) {
                .box-header .title-ppal {
                    padding-right: 7em;
                }

                .box-header .title-ppal h3 {
                    font-size: 32px;
                }

                .box-header .enfasis-tpv {
                    font-size: 40px;
                }
            }

            .box-header .title-ppal p {

                font-size: 20px;
                font-weight: 500;
                text-align: center;
                line-height: 1.3;
                color: #1E2245;
            }

            .box-header .enfasis-ppal-a {
                color: #1E2245;
                font-weight: 900;
            }

            .box-header .enfasis-ppal-v {
                color: #7AB929;
                font-weight: 900;
            }
        </style>



    </div>
    <style>
        .field-item.even .centertil {
            visibility: hidden;
            margin-top: -50px;
        }


        .set-wrapper.rutas {
            position: relative;
            font-size: 16px;
            font-weight: 500;
            font-family: 'Montserrat', sans-serif;

            background-image: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/10-10-2023/recurso_4-2.png');
            background-size: contain;
            background-repeat: no-repeat;
            background-position: 0 36px;
        }

        .set-wrapper .box-header {
            position: relative;
            grid-area: box-header;
            display: grid;
            grid-auto-flow: dense;
            grid-template-columns: 1fr 1fr;
            grid-template-rows: auto;
            grid-template-areas:
                'title-ppal title-ppal'
                'paragraph-ppal paragraph-ppal'
                'img-left img-left';



            background-image: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/10-10-2023/recurso_1.png');
            background-size: 280px;
            background-repeat: no-repeat;
            background-position: left 100%;

        }

        @media(min-width: 400px) {
            .set-wrapper .box-header {
                grid-template-columns: 1fr 1fr;
                grid-template-areas:
                    'title-ppal title-ppal'
                    'img-left paragraph-ppal';
            }
        }

        @media(min-width:768px) {
            .set-wrapper .box-header {
                grid-template-columns: 30% 70%;
                grid-template-rows: auto;
                grid-template-areas:
                    'img-left title-ppal'
                    'img-left paragraph-ppal';
                background-size: 350px;
            }
        }
    </style>


    <!-- Sección box tags -->
    <div class="box box-tags">
        <p class="paragraph ph-type-1 ph-id-1"><span class="enfasis-a">Bogotá</span> sigue ofreciendo <span class="enfasis-a">servicios de transporte público</span> a los habitantes de <span class="enfasis-v">Soacha:</span></p>
        <div class="tags">
            <div class="tag-list tl-1">
                <div>
                    <span class="icon-tl"></span>Se implementan dos nuevas rutas del componente zonal que irán por la <span class="enfasis-a">Autopista Sur - Avenida Boyacá</span> y <span class="enfasis-v">Autopista Sur - Avenida Carrera 68.</span></span>
                </div>
            </div>
            <div class="tag-list tl-2">
                <div>
                    <span class="icon-tl"></span>Las <span class="enfasis-a">rutas intermunicipales</span> que realizan los recorridos entre el municipio y la ciudad <span class="enfasis-v">siguen operando.</span></span>
                </div>
            </div>
            <div class="tag-list tl-3">
                <div>
                    <span class="icon-tl"></span>Se cuenta con la oferta de los <span class="enfasis-a">buses zonales y troncales del Sistema TransMilenio.</span></span>
                </div>
            </div>
        </div>
        <style>
            .box-tags .paragraph {
                padding: 2em;
                font-size: 16px;
                font-weight: 900;
                text-align: center;
                line-height: 1.3;
                color: #1E2245;
                -webkit-box-orient: vertical;
                -webkit-line-clamp: 2;
                line-clamp: 2;
                overflow: hidden;
            }

            .box-tags .tags {
                grid-area: tags;
                display: grid;
                grid-auto-flow: dense;
                grid-template-columns: 1fr;
                grid-template-rows: auto;
                justify-items: end;

            }

            @media(min-width:768px) {
                .box-tags .tags {
                    margin-top: 32px;
                    padding-left: 30px;
                    padding-right: 30px;
                    grid-template-columns: repeat(3, 1fr);
                    justify-items: start;
                    margin-top: 10px;

                }
            }

            .tags .tag-list {

                background-color: #EDEDED;
                padding: 32px 16px 16px 16px;
                margin: 16px;
                line-height: 1.3;
                text-align: center;
                position: relative;
                font-size: 16px;

                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }

            @media(max-width:767px) {

                /* .tags .tl-1 {
                    width: 80%;
                }

                .tags .tl-2 {
                    width: 100%;
                }

                .tags .tl-3 {
                    width: 120%;
                } */
            }

            @media(min-width:768px) {
                .tags .tag-list {
                    margin: 16px;
                }

            }

            .icon-tl::before {
                position: absolute;
                content: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/10-10-2023/recurso_3_1.png');
                width: 50px;
                height: 50px;
                left: calc(50% - 25px);
                top: 0px;
                transform: translateY(-50%);
            }

            .box-tags .enfasis-a {
                color: #1E2245;
                font-weight: 900;
            }

            .box-tags .enfasis-v {
                color: #7AB929;
                font-weight: 900;
            }

            .box-tags .enfasis-t {
                color: #E30613;
                font-weight: 900;
            }

            .box-tags .enfasis-s {
                color: #2B5EA9;
                font-weight: 900;
            }

            .box-tags .enfasis-cv {
                color: #fff;
                font-weight: 900;
                background-color: #7AB929;
                padding-left: 4px;
                padding-right: 4px;
                display: inline-block;
                /* flex-wrap: nowrap; */

                /* word-wrap: break-word; */
            }


            }
        </style>
    </div>
    <style>
        .set-wrapper .box-tags {
            grid-area: box-tags;
        }
    </style>


    <hr>
    <!-- Sección box maps -->
    <div class="box box-maps">

        <ul class="nav nav-pills nav-justified">
            <li class="active"><a data-toggle="pill" href="#menu1">NUEVAS <br>RUTAS</a></li>
            <li><a data-toggle="pill" href="#menu2">Recorrido <br>av. 68</a></li>
            <li><a data-toggle="pill" href="#menu3">Recorrido <br>av. Boyacá</a></li>
            <li><a data-toggle="pill" href="#menu4">Recorrido av.<br> 1ro de Mayo</a></li>
            <li><a data-toggle="pill" href="#menu5">Recorrido <br>Teusaquillo</a></li>
            <li><a data-toggle="pill" href="#menu6">Recorrido <br>Corabastos</a></li>
        </ul>

        <div class="tab-content">
            <div id="menu1" class="tab-pane fade in active">
                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-10-2023/mapa6.png" alt="" title="">
            </div>
            <div id="menu2" class="tab-pane fade">
                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-10-2023/mapa1.png" alt="" title="">
            </div>
            <div id="menu3" class="tab-pane fade">
                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-10-2023/mapa2.png" alt="" title="">
            </div>
            <div id="menu4" class="tab-pane fade">
                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-10-2023/mapa3.png" alt="" title="">
            </div>
            <div id="menu5" class="tab-pane fade">
                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-10-2023/mapa4.png" alt="" title="">
            </div>
            <div id="menu6" class="tab-pane fade">
                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-10-2023/mapa5.png" alt="" title="">
            </div>
        </div>
        <style>
            .set-wrapper .box-maps {
                grid-area: box-maps;
                padding-top: 16px;
                padding-bottom: 16px
            }

            .box-maps img {
                width: 600px;
                margin: auto;
                padding-top: 32px;
            }

            .box-maps .nav-pills>li.active>a,
            .nav-pills>li.active>a:focus,
            .nav-pills>li.active>a:hover {
                background-color: #1e2245 !important;
                color: #fff !important;
            }

            .box-maps .nav-justified>li {
                background-color: #79b928;
                border: solid 1px #f5f5f5;
                border-radius: 6px;
            }

            .box-maps .nav-justified>li>a {
                color: #1E2245;
                font-weight: 900;
            }
        </style>

        <hr>
        <div class="enlaces">
            <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/11-10-2023/ruta5_3.png" alt="" title="">
            <p>Recarga la tarjeta tullave en:</p>
            <p>
                <a href="www.tullaveplus.gov.co/puntos-de-recarga">www.tullaveplus.gov.co/puntos-de-recarga</a>
            </p>
            <p>
                <a href="www.recargasweb.tullaveplus.gov.co/">www.recargasweb.tullaveplus.gov.co/</a>
            </p>
        </div>

        <style>
            .set-wrapper .enlaces {
                padding: 2em;
            }

            .enlaces p,
            .enlaces a {
                text-align: center;
                color: #1E2245;
                font-size: 1.2em;
                font-weight: 900;
            }

            .enlaces img {
                width: 600px;
                margin: auto;
                padding-top: 16px;
                padding-bottom: 16px;
            }
        </style>


        <br>
    </div>
    <!-- Fin Set -->
