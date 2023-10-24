@extends('welcome')
@section('title','nuestraEntidad')
@section('contenido')

<!-- Set nuestraEntidad -->
<div class="set-wrapper nuestraEntidad container"><!-- Component box title-center -->
    <div class="box-title-center">
        <h2>Nuestra Entidad</h2>

        <div>
            <p class="texto-intro">Aquí podrás acceder a los principales aplicativos de la SDM, correo institucional e Intranet, a un solo clic toda la información que necesitas para lograr tus actividades diarias.</p>
        </div>
    </div>
    <style type="text/css">
        .field-name-title .field-item h2 {
            visibility: hidden;
            margin-top: -50px;
        }

        .set-wrapper .box-title-center {
            grid-area: box-title-center;
        }

        .box-title-center h2 {
            text-align: center;
            font-size: 32px;
            font-weight: 700;
            color: rgba(77, 84, 31, 1);
        }
    </style>
    <!-- Sección box grid-buttons -->
    <div class="box-grid-buttons">
        <a href="https://gestiondocumental.movilidadbogota.gov.co/" rel="noopener noreferrer" target="_blank"><img alt="icono del aplicativo ORFEO" class="img-responsive w-100 zoom" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/26-11-2020/orfeo.png" title="Ir a sitio web ORFEO"></a>
        <a href="https://www.movilidadbogota.gov.co/intranet/" rel="noopener noreferrer" target="_blank"><img alt="icono de la intranet de la SDM" class="img-responsive w-100 zoom" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/26-11-2020/intranet-claro.png" title="Ir a sitio web Intranet SDM"></a>
        <a href="http://mioficina.movilidadbogota.gov.co/" rel="noopener noreferrer" target="_blank"><img alt="icono de correo" class="img-responsive w-100 zoom" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/26-11-2020/correo-oscuro.png" title="Ir a sitio web correo SDM"></a>
        <a href="https://aranda.movilidadbogota.gov.co/USDKV8/Login.aspx" rel="noopener noreferrer" target="_blank"><img alt="icono de ARANDA" class="img-responsive w-100 zoom" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/26-11-2020/aranda-claro.png" title="Ir a sitio web Aranda"></a>
        <a href="https://www.movilidadbogota.gov.co/web/reserva_de_espacios" rel="noopener noreferrer" target="_blank"><img alt="icono reserva de espacios" class="img-responsive w-100 zoom" src="https://www.movilidadbogota.gov.co/web/sites/default/files/servicios/30-09-2021/2021-09-23_botones-pagina-trabajo-inteligente_300-x-300_1_1.png" title="Ir a sitio web reserva de espacios"></a>
        <a href="https://cursos.movilidadbogota.gov.co/" rel="noopener noreferrer" target="_blank"><img alt="acceso a cursos virtuales" class="img-responsive w-100 zoom" src="https://www.movilidadbogota.gov.co/web/sites/default/files/servicios/15-12-2021/plataformamoodle.png" title="Ir a sitio web cursos virtuales"></a>
        <a href="https://simur.gov.co/biblioteca-digital/" rel="noopener noreferrer" target="_blank"><img alt="Biblioteca Digital" class="img-responsive w-100 zoom" src="https://www.movilidadbogota.gov.co/web/sites/default/files/servicios/10-05-2022/iconos-02.jpg" title="Ir a sitio web biblioteca digital"></a>
        <a href="https://www.movilidadbogota.gov.co/SmartPeople/frmLogin.aspx" rel="noopener noreferrer" target="_blank"><img alt="icono Kactus" class="img-responsive w-100 zoom" src="https://www.movilidadbogota.gov.co/web/sites/default/files/servicios/24-03-2023/9._anexo_1._aplicativo_de_pago_icono_circular_1_1.png" title="Ir a sitio web Kactus"></a>
        <a href="https://www.movilidadbogota.gov.co/web/trabajo_inteligente" rel="noopener noreferrer" target="_blank"><img alt="icono trabajo inteligente" class="img-responsive w-100 zoom" src="https://www.movilidadbogota.gov.co/web/sites/default/files/servicios/28-07-2023/trabajointeligente_icono_001_400x400.png" title="Ir a sitio web trabajo inteligente"></a>
        <a href="https://gestiondocumental.movilidadbogota.gov.co/carnedigital" rel="noopener noreferrer" target="_blank"><img alt="icono carné digital" class="img-responsive w-100 zoom" src="https://www.movilidadbogota.gov.co/web/sites/default/files/servicios/23-10-2023/boton_carne_digital.png" title="Ir a sitio web carné digital"></a>
    </div>
    <style type="text/css">
        .set-wrapper .box-grid-buttons {
            grid-area: box-grid-buttons;
            padding: 2em;
            display: grid;
            gap: 32px;
            grid-auto-flow: dense;
            grid-template-columns: 1fr 1fr;
            grid-template-rows: auto;
            justify-content: center;
        }

        .w-100 {
            min-width: 100%;
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

        .img-center {
            display: block;
            margin: 0 auto;
        }

        .texto-intro {
            font-size: 18px;
            margin: 10px 10px 40px 10px;
            text-align: center;
        }

        @media(min-width:768px) {
            .set-wrapper .box-grid-buttons {
                row-gap: 1em;
                column-gap: 2em;
                grid-template-columns: repeat(5, 1fr);
                padding: 2em 8em;
            }
        }
    </style>
</div>
<br>
<!-- Fin Set -->
