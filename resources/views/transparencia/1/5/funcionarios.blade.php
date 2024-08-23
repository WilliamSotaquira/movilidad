@extends('welcome')
@section('title','funcionarios')
@section('contenido')

<!-- Set funcionarios -->
<hr>
<div class="set-wrapper funcionarios">
    <div class="cpnt cpnt-1">
        <p class="paragraph ph1">Dando cumplimiento a lo dispuesto en la Ley 1712 de 2014 “Por Medio de la Cual se Crea la Ley de Transparencia y del Derecho de Acceso a la Información Pública Nacional y se Dictan otras Disposiciones", en su decreto reglamentario 1081 de 2015 "Por medio del cual se expide el Decreto Reglamentario Único del Sector Presidencia de la República" y en el Manual para la implementación de la estrategia de Gobierno En Línea -GEL- en las entidades del orden nacional y territorial de la República de Colombia; se presenta a la ciudadanía en general el Directorio Institucional de Contacto del Personal de Planta y de Contratistas de la Secretaría Distrital de Movilidad.</p>
    </div>
    <style>
        .funcionarios .cpnt-2 {
            padding: 32px;
        }

        .funcionarios .cpnt-2 .logo-1 {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .funcionarios .cpnt-2 .logo-1 img {
            width: 200px;
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
    </style>
    <div class="cpnt cpnt-2">
        <div class="logo logo-1">
            <a href="https://sideap.serviciocivil.gov.co/sideap/faces/directorioServidores.xhtml?idEntidad=113"><img class="img-responsive w-100 zoom" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/12-08-2024/sideap_azul.png" alt="logo sideap"></a>
            <p class="paragraph ph2">Consulte <a href="https://sideap.serviciocivil.gov.co/sideap/faces/directorioServidores.xhtml?idEntidad=113"><strong>aquí</strong></a> el directorio de servidoras, servidores públicos y contratistas</p>
        </div>
    </div>
    <div class="cpnt cpnt-3">
        <p class="paragraph ph3 text-center">La información reportada de la SDM al aplicativo del SIDEAP se encuentra de acuerdo con las fechas de cargue correspondientes para cada tipo de vinculación.</p>
    </div>

</div>
<!-- Fin Set -->
