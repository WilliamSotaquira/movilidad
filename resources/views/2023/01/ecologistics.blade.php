@extends('welcome')
@section('title','ecologistics')

@section('contenido')

<!-- Set ecologistics -->
<div class="set-wrapper ecologistics">

    <!-- Component title-center -->
    <div class="box-title-center">
        <h2>Trabajo Inteligente</h2>
        <h3>¡Súmate al cambio!</h3>
    </div>
    <style>
        .field-item.even .centertil {
            visibility: hidden;
            margin-top: -50px;
        }

        .set-wrapper .box-title-center {
            grid-area: box-title-center;
            border-bottom: solid 2px rgba(77, 84, 31, 1);
            padding-bottom: 16px;
            margin-bottom: 24px;
        }

        .box-title-center h2 {
            text-align: center;
            font-size: 32px;
            font-weight: 700;
            color: rgba(77, 84, 31, 1);
            margin-bottom: 4px;

        }

        .box-title-center h3 {
            text-align: center;
            font-size: 24px;
            font-weight: 700;
            color: rgba(77, 84, 31, 1);
            margin-top: 4px;

        }
    </style>

    <!-- Component box carousel -->
    <div class="box-carousel">

        <div class='row'>

            <!-- Carousel vertical medidas recursos: 340x300px -->
            <div class='col-xs-12 visible-xs-12 visible-xs-block'>
                <div id="carousel-vertical" class="carousel slide" data-ride="carousel-vertical">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-vertical" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-vertical" data-slide-to="1"></li>

                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="https://via.placeholder.com/340x300/e5e5e5/252525?Text=Digital.com" alt="...">
                            <div class="carousel-caption">
                                <h3>...</h3>
                                <p>...</p>
                            </div>
                        </div>
                        <div class="item">
                            <img src="https://via.placeholder.com/340x300/e5e5e5/252525?Text=Digital.com" alt="...">
                            <div class="carousel-caption">
                                <h3>...</h3>
                                <p>...</p>
                            </div>
                        </div>

                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-vertical" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-vertical" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>

            <!-- Carousel horizontal medidas recursos: 980x400px -->
            <div class='col-sm-12 hidden-xs'>
                <div id="carousel-horizontal" class="carousel slide" data-ride="carousel-horizontal">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-horizontal" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-horizontal" data-slide-to="1"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="https://via.placeholder.com/980x400/e5e5e5/252525?Text=Digital.com" alt="...">
                            <div class="carousel-caption">
                                <h3>...</h3>
                                <p>...</p>
                            </div>
                        </div>
                        <div class="item">
                            <img src="https://via.placeholder.com/980x400/e5e5e5/252525?Text=Digital.com" alt="...">
                            <div class="carousel-caption">
                                <h3>...</h3>
                                <p>...</p>
                            </div>
                        </div>

                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-horizontal" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-horizontal" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

            </div>
        </div>

    </div>
    <style>
        .set-wrapper .box-carousel {
            grid-area: box-carousel;
            margin-bottom: 48px;
        }

        .box-carousel .item img {
            width: 100%;
        }

        .box-carousel .carousel-control.left,
        .box-carousel .carousel-control.right {
            background-image: none;
        }

        .box-carousel .carousel-control {
            color: #A6B517;
            opacity: 1;
        }

        .box-carousel .carousel-control:focus,
        .box-carousel .carousel-control:hover {
            color: #A6B517;
            opacity: 0.5;
        }

        .box-carousel .carousel-indicators li {
            background-color: #A6B517;
            border-color: rgba(77, 84, 31, 0.4);
        }

        .box-carousel .carousel-indicators .active {
            background-color: rgba(77, 84, 31, 1);
            border-color: rgba(77, 84, 31, 0.4);
        }
    </style>

    <!-- Component box title-paragraph -->
    <div class="box-title-paragraph">
        <h3>¿Qué es el proyecto EcoLogistics?</h3>
        <h4>¡Qué queremos!</h4>
        <p>Que el Sector Movilidad adopte un modelo de trabajo innovador que beneficie a sus funcionarios, mediante alternativas de jornadas laborales dinámicas, una infraestructura tecnológica adecuada que permita promover altos estándares de productividad, así como la adecuada administración de espacios.</p>
    </div>
    <style>
        .set-wrapper .box-title-paragraph {
            grid-area: box-title-paragraph;
            margin-bottom: 48px;
        }

        .box-title-paragraph h3 {
            color: rgba(77, 84, 31, 1);
            margin: 32px 16px 8px 16px;
            /* text-transform: uppercase; */
            font-size: 24px;
            font-weight: 700;
        }

        .box-title-paragraph h4 {
            color: #252525;
            margin: 16px 16px 16px 16px;
            /* text-transform: uppercase; */
            font-size: 16px;
            font-weight: 700;
        }

        .box-title-paragraph p {
            margin: 8px 16px 8px 16px;
            font-size: 16px;
            font-weight: normal;
            text-align: left;
            line-height: 1.5;
            color: #252525;
        }
    </style>

    <!-- Component box title-left -->
    <div class="box-title-left">
        <h3>Beneficios</h3>
    </div>
    <style>
        .set-wrapper .box-title-left {
            grid-area: box-title-left;
        }

        .box-title-left h3 {
            color: rgba(77, 84, 31, 1);
            margin: 32px 16px 8px 16px;
            font-size: 24px;
            font-weight: 700;
            margin-top: 32px;
        }
    </style>

   <!-- Sección box bar-icons -->
   <div class="box-bar-icons">
       <div class="icon">
           <a href="" target="_blank" rel="noopener noreferrer" title="">
               <img src="https://via.placeholder.com/80x80" alt="icono de " width="80px">
               <p>Movilidad inteligente</p>
           </a>
       </div>
       <div class="icon">
           <a href="" target="_blank" rel="noopener noreferrer" title="">
               <img src="https://via.placeholder.com/80x80" alt="icono de " width="80px">
               <p>Calidad de vida</p>
           </a>
       </div>
       <div class="icon">
           <a href="" target="_blank" rel="noopener noreferrer" title="">
               <img src="https://via.placeholder.com/80x80" alt="icono de " width="80px">
               <p>Optimización de espacios</p>
           </a>
       </div>
       <div class="icon">
           <a href="" target="_blank" rel="noopener noreferrer" title="">
               <img src="https://via.placeholder.com/80x80" alt="icono de " width="80px">
               <p>Productividad</p>
           </a>
       </div>
       <div class="icon">
           <a href="" target="_blank" rel="noopener noreferrer" title="">
               <img src="https://via.placeholder.com/80x80" alt="icono de " width="80px">
               <p>Reducción del ausentismo</p>
           </a>
       </div>
   </div>
   <style>
       .set-wrapper .box-bar-icons {
           grid-area: box-bar-icons;
           display: grid;
           gap: 8px;
           grid-auto-flow: dense;
           grid-template-columns: 1fr;
           grid-template-rows: auto;
           margin-bottom: 48px;
       }

       .box-bar-icons .icon a {
           padding: 8px;
           display: flex;
           flex-direction: column;
           justify-content: center;
           align-items: center;
       }

       .box-bar-icons .icon a img {
           width: 80px;
           height: 80px;
           object-fit: cover;
           border-radius: 50%;
           border: 2px solid rgba(77, 84, 31, 0.5);
       }

       .box-bar-icons .icon a p {
           margin-top: 12px;
           font-size: 16px;
           font-weight: 600;
           color: rgba(77, 84, 31, 1);
           text-align: center;
       }


       @media(min-width:768px) {
           .set-wrapper .box-bar-icons {
               padding: 32px 32px 0 32px;
               grid-template-columns: repeat(5, 20%);
           }
       }
   </style>

   <!-- Componente box img-paragraph -->
   <div class="box-img-paragraph">
       <div class="imagen img-contenedor">
           <img class="img-responsive w-100" src="https://via.placeholder.com/400x300" alt="Imagen de prueba" title="Imagen de prueba">
       </div>
       <div class="paragraph ph-img-paragraph">
           <p>Trabajo Inteligente es un modelo de trabajo innovador que beneficie a sus funcionarios, mediante alternativas de jornadas laborales dinámicas, una infraestructura tecnológica adecuada que permita promover altos estándares de productividad, así como la adecuada administración de espacios.</p>
           <p>La Secretaría Distrital de Movilidad mediante la Resolución Número 80010 de 2021 adoptó el modelo de Trabajo Inteligente. Dicho modelo innovador beneficia a sus funcionarios de planta, mediante jornadas laborales dinámicas y mixtas, una infraestructura tecnológica adecuada que promueve altos estándares de productividad, así como una adecuada administración de espacios que fomenta el equilibrio entre la vida laboral, personal y familiar.</p>
       </div>

   </div>
   <style>
       .set-wrapper .box-img-paragraph {
           grid-area: box-img-paragraph;
           display: grid;
           gap: 8px;
           grid-auto-flow: dense;
           grid-template-columns: 1fr;
           grid-template-rows: auto;
           justify-content: center;
           align-items: center;
           margin-bottom: 48px;
       }

       .box-img-paragraph .img-contenedor {
           max-height: 200px;
           overflow: hidden;
           display: flex;
           flex-direction: column;
           justify-content: center;
           align-items: center;
           /* margin: auto; */
       }

       .box-img-paragraph .img-contenedor img {
           height: 200px;
           object-fit: cover;
           object-position: center
       }

       .box-img-paragraph .ph-img-paragraph {
           padding: 1rem;
           display: flex;
           flex-direction: column;
           justify-content: center;
           align-items: center;
       }

       .box-img-paragraph .ph-img-paragraph p {
           font-size: 16px;
           line-height: 1.5;
           text-align: justify
           padding: 32px;
       }

       @media(min-width:768px) {
           .set-wrapper .box-img-paragraph {
               grid-template-columns: 1fr 1fr;
               grid-template-rows: auto;
           }

           .box-img-paragraph .img-contenedor {
               max-height: 300px;
               overflow: hidden;
           }

           .box-img-paragraph .img-contenedor img {
               height: 300px;
               object-fit: cover;
               object-position: center
           }


       }
   </style>



</div>
<!-- Fin Set -->
