@extends('welcome')
@section('title','mapaCiclorutas')
@section('contenido')

<!-- Set mapaCiclorutas -->
<div class="set-wrapper mapaCiclorutas">
    <!-- Sección box paragraph -->
    <div class="box-paragraph">
        <p>Rueda por los más de 608 kilómetros de ciclorutas que tenemos en toda Bogotá. Para conocer toda nuestra red dale clic a la imagen.</p>
    </div>
    <style>
        .set-wrapper .box-paragraph {
            grid-area: box-paragraph;
            margin-top: 40px;
            margin-bottom: 40px;
            padding: 0 32px;
        }
    </style>

    <!-- PDF 4:3 aspect ratio -->
<!-- Sección box logo-full -->
<div class="box-mapa-full">
    <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/26-06-2023/mapa_ciclorrutas_actualizacion_23-06.jpg">

        <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/26-06-2023/mapa_ciclorrutas_actualizacion_23-06.jpg" alt="Imagen con mapa de ciclorutas en Bogotá">
    </a>
</div>
<style>
    .set-wrapper .box-mapa-full {
        grid-area: box-mapa-full;
       margin-bottom: 40px
    }

    .box-mapa-full img {
        max-width: 100%;
        margin: auto;
    }
</style>


<div class="row">
	<div class="col-xs-12 col-sm-4 col-sm-offset-4">
		<div class="btn-mapa"><a download="" href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/26-06-2023/mapa_ciclorrutas_actualizacion_23-06.pdf" rel="noopener noreferrer" target="_blank">Descargue aquí el mapa</a></div>
	</div>
</div>
<style type="text/css">.btn-mapa {
            background-color: #4D541F;
            padding: 6px 12px;
            text-align: center;
            border: solid 3px green;
            border-radius: 6px;
        }

        .btn-mapa:hover {
            background-color: #828F26;
            color: #151515;
        }

        .btn-mapa:hover a {
            color: #151515;
            text-decoration: none;
        }

        .btn-mapa a {
            color: #fff;
            font-size: 1.2em;
            font-weight: 700;

        }
</style>
<br>
</div>
<!-- Fin Set -->
