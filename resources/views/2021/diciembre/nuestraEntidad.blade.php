@extends('welcome')
@section('title','nuestraEntidad')
@section('contenido')

<!-- Set nuestraEntidad -->
<div class="set-wrapper nuestraEntidad container">

    <!-- Component box title-center -->
    <div class="box-title-center">
        <h2>Nuestra Entidad</h2>
        <div>
            <p class="texto-intro">Aquí podrás acceder a los principales aplicativos de la SDM, correo institucional e Intranet, a un solo clic toda la información que necesitas para lograr tus actividades diarias.</p>
        </div>
    </div>
    <style>
        .field-name-title .field-item h2 {
            visibility: hidden;
            margin-top: -50px;
        }

        .set-wrapper .box-title-center {
            grid-area: box-title-center;
        }

        .box-title-center h2{
            text-align: center;
            font-size: 32px;
            font-weight: 700;
            color: rgba(77, 84, 31, 1);
        }

    </style>

    <!-- Sección box grid-buttons -->
    <div class="box-grid-buttons">
        <a href="https://gestiondocumental.movilidadbogota.gov.co/" target="_blank" rel="noopener noreferrer"><img alt="icono del aplicativo ORFEO" title="Ir a sitio web ORFEO" class="img-responsive w-100 zoom" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/26-11-2020/orfeo.png"></a>
        <a href="https://www.movilidadbogota.gov.co/intranet/" target="_blank" rel="noopener noreferrer"><img alt="icono de la intranet de la SDM" title="Ir a sitio web Intranet SDM" class="img-responsive w-100 zoom" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/26-11-2020/intranet-claro.png"></a>
        <a href="http://mioficina.movilidadbogota.gov.co/" target="_blank" rel="noopener noreferrer"><img alt="icono de correo" title="Ir a sitio web correo SDM" class="img-responsive w-100 zoom" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/26-11-2020/correo-oscuro.png"></a>
        <a href="https://aranda.movilidadbogota.gov.co/USDKV8/Login.aspx" target="_blank" rel="noopener noreferrer"><img alt="icono de ARANDA" title="Ir a sitio web Aranda" class="img-responsive w-100 zoom" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/26-11-2020/aranda-claro.png"></a>
        <a href="https://www.movilidadbogota.gov.co/web/reserva_de_espacios" target="_blank" rel="noopener noreferrer"><img alt="icono reserva de espacios" title="Ir a sitio web reserva de espacios" class="img-responsive w-100 zoom" src="https://www.movilidadbogota.gov.co/web/sites/default/files/servicios/30-09-2021/2021-09-23_botones-pagina-trabajo-inteligente_300-x-300_1_1.png"></a>
        <a href="https://cursos.movilidadbogota.gov.co/" target="_blank" rel="noopener noreferrer"><img alt="acceso a cursos virtuales" title="Ir a sitio web cursos virtuales" class="img-responsive w-100 zoom" src="https://www.movilidadbogota.gov.co/web/sites/default/files/servicios/15-12-2021/plataformamoodle.png"></a>
        <a href="https://simur.gov.co/biblioteca-digital/" target="_blank" rel="noopener noreferrer"><img alt="Biblioteca Digital" title="Ir a sitio web biblioteca digital" class="img-responsive w-100 zoom" src="https://www.movilidadbogota.gov.co/web/sites/default/files/servicios/10-05-2022/iconos-02.jpg"></a>
        <a href="https://www.movilidadbogota.gov.co/SmartPeople/frmLogin.aspx" target="_blank" rel="noopener noreferrer"><img alt="icono Kactus" title="Ir a sitio web Kactus" class="img-responsive w-100 zoom" src="https://www.movilidadbogota.gov.co/web/sites/default/files/servicios/24-03-2023/9._anexo_1._aplicativo_de_pago_icono_circular_1_1.png"></a>
        <a href="https://www.movilidadbogota.gov.co/web/trabajo_inteligente" target="_blank" rel="noopener noreferrer"><img alt="icono trabajo inteligente" title="Ir a sitio web trabajo inteligente" class="img-responsive w-100 zoom" src="https://www.movilidadbogota.gov.co/web/sites/default/files/servicios/28-07-2023/trabajointeligente_icono_001_400x400.png"></a>
    </div>
    <style>
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
