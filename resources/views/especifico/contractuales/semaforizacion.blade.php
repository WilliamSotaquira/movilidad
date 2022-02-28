@extends('welcome')
@section('contenido')

<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fuente Sogar -----  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<link rel='preconnect' href='https://fonts.googleapis.com'>
<link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
<link href='https://fonts.googleapis.com/css2?family=Sora:wght@100;200;300;400;500;600;700;800&display=swap' rel='stylesheet'>
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin Fuente Sogar -  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->

<!-- ----- ----- ----- ----- ----- ----- ----- ----- Bloque Seccion ----- ----- ----- ----- ----- ----- ----- ----- ----- ------ -->

<div class='container-fluid seccion'>
    <div class="s2">
        <div class="row pdi-encabezado img-encabezado">
            <div class="col-xs-12">
                <div class="pdi-title text-center">
                    <div>
                        <h3>Semaforización</h3>
                    </div>
                    <div>
                        <p>Expansión y mantenimiento al sistema de semaforización de Bogotá D.C.</p>
                    </div>
                </div>
            </div>
        </div>
        <style>
            .s2 .img-encabezado {
                background: rgb(40, 40, 92);
                background: linear-gradient(45deg, rgba(40, 40, 92, 1) 0%, rgba(255, 255, 255, 0) 75%), url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-01-2022/contractual_2.webp');
                border-top: solid 3px #f5ae33ff;
                border-bottom: solid 10px #f5ae33ff;
                background-position: 15% 30%;
                background-size: cover;
            }

            .s2 .pdi-title {
                height: 250px;
                display: flex;
                flex-direction: column;
                justify-content: end;
                align-items: start;
                padding: 20px;

            }

            .s2 .pdi-title h3 {
                align-items: center;
                font-family: 'Sora', sans-serif;
                text-align: center;
                color: #fff;
                font-weight: 700;
                font-size: 35px;
                text-transform: uppercase;
                text-shadow: 1px 1px 25px rgba(255, 255, 255, 0.6);
                border-bottom: solid 2px #fff;
                padding-bottom: 8px;
                margin-bottom: 35px;
            }

            .s2 .pdi-title p {
                font-family: 'Sora', sans-serif;
                color: #fff;
                font-size: 16px;
                margin-bottom: 20px;

            }
        </style>
        <div class="row">
            <div class="pdi-botones">
                <div class="row">
                    <div class="pdi-nav">

                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs nav-justified" role="tablist">
                            <li role="presentation" class="active"><a href="#descripcion" aria-controls="" role="tab" data-toggle="tab">Descripción</a></li>
                            <li role="presentation"><a href="#alcance" aria-controls="alcance" role="tab" data-toggle="tab">Alcance</a></li>
                            <li role="presentation"><a href="#financiero" aria-controls="financiero" role="tab" data-toggle="tab">Financiero</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="descripcion">

                                <div class="row box-ficha">
                                    <div class='col-xs-12 col-sm-6 col-md-6 img1'>

                                    </div>
                                    <div class='col-xs-12 col-sm-6 col-md-6 ficha'>
                                        <div>
                                            <div class="titulo-ficha">
                                                <p>Descripción</p>
                                            </div>
                                            <div class="datos-ficha">
                                                <dl>
                                                    <dt>Estado del Proyecto</dt>
                                                    <dd>En proceso precontractual</dd>
                                                </dl>
                                                <dl>
                                                    <dt>Avance</dt>
                                                    <dd>0.76%</dd>
                                                </dl>
                                                <dl>
                                                    <dt>Plazo de Ejecución</dt>
                                                    <dd>6 meses 5 días</dd>
                                                </dl>
                                                <dl>
                                                    <dt>Responsable</dt>
                                                    <dd>Sandra Patricia Giraldo</dd>
                                                    <dd>Tel: <a href="tel:+0570613649400">364 9400</a> Ext. 7220 </dd>
                                                    <dd><a href="mailto:sgiraldo@movilidadbogota.gov.co">sgiraldo@movilidadbogota.gov.co</a></dd>
                                                </dl>
                                                <dl>
                                                    <dt>Link del SECOP</dt>
                                                    <dd><a href="https://www.secop.gov.co/CO1ContractsManagement/Tendering/ProcurementContractEdit/View?docUniqueIdentifier=CO1.PCCNTR.3052358&prevCtxUrl=https%3a%2f%2fwww.secop.gov.co%2fCO1ContractsManagement%2fTendering%2fProcurementContractManagement%2fIndex&prevCtxLbl=Contratos+" target="_blank" rel="noopener noreferrer">Abrir en pagina 2021-2517</a></dd>
                                                    <dd><a href="https://www.secop.gov.co/CO1ContractsManagement/Tendering/ProcurementContractEdit/View?docUniqueIdentifier=CO1.PCCNTR.2876313&prevCtxUrl=https%3a%2f%2fwww.secop.gov.co%2fCO1ContractsManagement%2fTendering%2fProcurementContractManagement%2fIndex&prevCtxLbl=Contratos+" target="_blank" rel="noopener noreferrer">Abrir en pagina 2021-2433</a></dd>
                                                    <dd><a href="https://www.secop.gov.co/CO1ContractsManagement/Tendering/ProcurementContractEdit/Update?ProfileName=CCE-18-Seleccion_Abreviada_Menor_Cuantia_Sin_Manifestacion_Interes&PPI=CO1.PPI.15433615&DocUniqueName=ContratoDeCompra&DocTypeName=NextWay.Entities.Marketplace.Tendering.ProcurementContract&ProfileVersion=3&DocUniqueIdentifier=CO1.PCCNTR.3052427&prevCtxUrl=https%3a%2f%2fwww.secop.gov.co%2fCO1ContractsManagement%2fTendering%2fProcurementContractManagement%2fIndex&prevCtxLbl=Contratos+" target="_blank" rel="noopener noreferrer">Abrir en pagina 2021-2516</a></dd>
                                                </dl>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                                <div class='row'>
                                    <div class='col-xs-12 col-sm-12 col-md-12 '>
                                        <div>
                                            <div class="tbl-pdi">
                                                <table>
                                                    <tbody>
                                                        <tr>
                                                            <th>
                                                                <p>Objetivo General</p>
                                                            </th>
                                                            <td>
                                                            <strong>2021-2517</strong> Realizar el mantenimiento correctivo y preventivo a la central de semaforización del SSI, equipos de control en calle, elementos de videodetección, semáforos y redes electricas del sistema de semaforización de la ciudad de Bogotá. <br>
                                                            <strong>2021-2433</strong> Realizar el mantenimiento preventivo y correctivo del componente de postes del sistema de Semaforización. <br>
                                                            <strong>2021-2516</strong> Realizar el mantenimiento del componente de Obras civiles del sistema de Semaforización. <br>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                <p>JUSTIFICACIÓN</p>
                                                            </th>
                                                            <td>Las necesidades de la ciudad de Bogotá en materia de mantenimiento preventivo y correctivo de los componentes del Sistema de semaforización de Bogotá D.C, son actividades que periódicamente sedeben realizar por su desgaste natural y por otro lado el crecimiento urbano de la Capital, por el auge que se ha venido dando en la construcción de nuevas vías para unidades residenciales y proyectos viales, obligando así a la expansión del sistema. Por consiguiente, es claro que la Entidad para disponer de la capacidad técnico-operativa necesaria para cubrir en forma oportuna las necesidades de todo el sistema de semaforización, debe realizar la contratación de las actividades objeto del presente estudio, para garantizar de manera adecuada la prestación del servicio de control semafórico en intersecciones de la ciudad, contando con personal especializado y con experiencia en dicha actividad. <br> </td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                <p>ENTREGABLES Y PRODUCTOS</p>
                                                            </th>
                                                            <td>
                                                                <ol>
                                                                    <li>Mantenimiento preventivo y correctivo sobre los elementos del sistema de semaforización, garantizando el correcto funcionamiento de todas las intersecciones semaforizadas de la Ciudad.</li>
                                                                    <li>Diseño, construcción e implementación de nuevas intersecciones de tal forma que contribuyan a la expansión del sistema de semaforización de Bogotá D.C.</li>
                                                                </ol>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="alcance">
                                <div class='row'>
                                    <div class='col-xs-12 col-sm-12 col-md-12 '>
                                        <div class="tbl-pdi">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <th>
                                                            <p>ALCANCE</p>
                                                        </th>
                                                        <td>El contratista deberá adelantar las actividades necesarias sobre los elementos del sistema de semaforización, de tal forma que contribuyan a la expansión y mantenimiento de los elementos que componen el sistema de semaforización así:
                                                            <ul>
                                                                <li>Componente eléctrico de elementos de planta externa del sistema de semaforización.</li>
                                                                <li>Componente de equipos de control de tráfico de elementos de planta externa del sistema de semaforización.</li>
                                                                <li>Componente de postes metálicos del sistema de semaforización.</li>
                                                                <li>Componente obra civil.</li>
                                                                <li>Componentes asociados al mantenimiento de la central del sistema de semaforización, incluyendo los ajustes de modelos necesarios para la optimización de los diferentes modos de operación de la ciudad.</li>
                                                                <li>Componente asociado a las ups de cada equipo de control del sistema de semaforización​.</li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>
                                                            <p>BENEFICIOS</p>
                                                        </th>
                                                        <td>
                                                            <ol>
                                                                <li>Mantener por encima del 99% la disponibilidad del sistema de semaforización.</li>
                                                                <li>Implementar regulación semafórica en 95 intersecciones de la ciudad</li>
                                                            </ol>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>
                                                            <p>POBLACIÓN BENEFICIADA</p>
                                                        </th>
                                                        <td>Toda Bogotá</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="financiero">
                                <div class="tbl-pdi">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <th>
                                                    <p>INVERSIÓN</p>
                                                </th>
                                                <td>$22.117'152.920</td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    <p>ORDENADOR DEL GASTO</p>
                                                </th>
                                                <td>SUBSECRETARÍA DE GESTIÓN DE LA MOVILIDAD</td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    <p>FUENTE DE FINANCIACIÓN</p>
                                                </th>
                                                <td>1-100-I020 VA-Semaforización</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <style>
                    .pdi-nav {
                        font-family: 'Sora', sans-serif;
                        font-size: 14px;
                        color: #151515;
                    }

                    .pdi-nav p,
                    .pdi-nav dt {
                        font-weight: 700;
                    }

                    .pdi-nav p {
                        font-size: 20px;
                        margin-bottom: 10px;
                        color: #151515;
                    }

                    .pdi-nav dl {
                        margin-left: 15px;
                        margin-bottom: 10px;
                    }

                    .pdi-nav dd {
                        padding-left: 25px;
                    }

                    .pdi-nav .box-ficha {
                        margin: 5%;
                        border-radius: 5px;
                        -webkit-box-shadow: 0px 0px 19px 0px rgba(0, 0, 0, 0.3);
                        box-shadow: 0px 0px 19px 0px rgba(0, 0, 0, 0.3);
                    }

                    .pdi-nav .box-ficha .img1 {
                        background-image: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-01-2022/contractual_3a.webp');
                        background-size: cover;
                        background-repeat: no-repeat;
                        margin: 0px;
                        height: 450px;
                        background-position: 8% 0%;

                    }

                    .ficha {
                        padding: 5% 5% 0% 5%;
                        height: 450px;
                        display: flex;
                        flex-direction: column;
                        justify-content: center;
                        align-items: center;
                        background-color: #f5ae33ff;
                        background: linear-gradient(45deg, rgba(243, 174, 54, 1) 30%, rgba(243, 174, 54, 0.4) 100%);

                    }

                    .box-ficha .datos-ficha {
                        margin: 30px 0px;
                        padding: 10px;
                        border-top: 2px solid #000;
                        border-bottom: 2px solid #000;
                        margin-top: 10px;
                        padding-top: 20px;

                    }

                    .datos-ficha a {
                        font-weight: 700;
                        color: #151515;
                        text-decoration: none !important;
                    }
                </style>

            </div>
        </div>
    </div>

    <hr>
    <div class='s1'>
        <div class="row row-btn text-center">
            <div class="col-xs-12"><a class="btn btn-back" href="https://www.movilidadbogota.gov.co/web/procesos_contractuales_estrategicos">Regresar</a></div>
        </div>
    </div>
</div>

<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin Bloque Sección  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->

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
        font-size: 13px !important;
        line-height: 1 !important;
        max-width: 940px;
    }

    .w-100 {
        width: 100%;
    }

    .row-btn {
        padding-left: 0px;
        padding-right: 0px;
    }

    .row-btn {
        padding-left: 0px;
        padding-right: 0px;
    }


    .a_title {
        text-decoration: none !important;
        color: #061259ff !important;
    }



    .s2 .img-encabezado-pdi {
        background-image: url('');
    }

    .pdi-botones {
        padding: 20px;
    }


    .row-btn .btn-back {
        font-family: 'Sora', sans-serif;
        background-color: #f5ae33ff !important;
        color: #151515 !important;
        font-size: 10pt;
        padding: 10px 40px;
        font-weight: 700;
        text-transform: uppercase;
        border-radius: 0px;
    }

    .row-btn .btn-back:hover {
        background: #28285b !important;
        color: #fff !important;

    }

    .ph-pdi {
        background-color: #f5ae33ff !important;
        color: #28285b !important;
        text-transform: uppercase;
        padding: 0;
        border-radius: 5px !important;
        padding: 9px;
    }

    .ph-pdi:hover,
    .ph-pdi a:hover {
        background-color: rgb(188, 127, 23) !important;
        color: rgb(255, 255, 255) !important;
    }

    .ph-pdi a {
        color: #061259ff !important;
        font-size: 1em;
        font-weight: 700;
        text-decoration: none;

    }

    .ph-pdi h5 li {
        font-size: 10pt;
        /* font-weight: 700; */
        text-decoration: none;
    }

    .panel-pdi {
        border: #061259ff !important;
    }


    .card {
        border-style: solid;
        border-radius: 4px;
        border-color: #061259ff;
        margin: 5px;
    }

    .img-pdi {
        padding-bottom: auto;
        position: unset;
        background: #ea0a2aff;
        /* padding-right: 0%; */
        height: 100px;
        min-height: 100px;
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 2;
    }

    .img-pdi-2 {
        padding-bottom: auto;
        position: unset;
        background: #28285bff;
        /* padding-right: 0%; */
        height: 100px;
        min-height: 100px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .img-pdi-3 {
        padding-bottom: auto;
        position: unset;
        background: #f5ae33ff;
        /* padding-right: 0%; */
        height: 100px;
        min-height: 100px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .img-pdi img {
        width: 100%;
        min-width: 76px;
        max-width: 99px;
        height: auto;
        display: block;
        padding: 1rem;
    }

    .img-pdi-2 img {
        width: 100%;
        min-width: 76px;
        max-width: 99px;
        height: auto;
        display: block;
        /* padding: 1rem; */
    }

    .img-pdi-3 img {
        width: 100%;
        min-width: 76px;
        max-width: 99px;
        height: auto;
        display: block;
        /* padding: 1rem; */
    }

    .cont {
        /* background: #28292e !important; */
        padding: 1rem;
    }

    .tab {

        text-align: center;
        padding: 10px 20px;

    }

    .row-shadow {
        box-shadow: 0px 0px 20px #00000060;
    }

    .txt-tab {
        background: #f5f5f5;
        height: 100px;
        margin: 0px auto 0px auto;
        overflow: hidden;
        display: flex;
        flex-direction: column;
        justify-content: space-evenly;
        justify-items: center;
    }

    .txt-tab h5 {
        font-size: 10pt;
        text-transform: uppercase;
        font-weight: 700;
        color: #061259ff !important;
        word-wrap: break-word;
        text-shadow: 3px 3px 20px rgb(196, 196, 196);
    }

    .txt-tab p {
        font-size: 1rem;
        text-transform: initial;
        font-weight: 500;
        color: #061259ff !important;
        /* text-align: justify; */
        word-wrap: break-word;
        text-shadow: 3px 3px 20px rgb(196, 196, 196);
    }

    .ph-pdi-2 {
        background: #ffffffff !important;
        border: none none solid none;
        border-color: #061259ff !important;
        border-width: 3px;
        color: #061259ff !important;
    }

    .ph-pdi-2 h5 a {
        font-weight: 700;
        text-shadow: 3px 3px 20px rgb(196, 196, 196);
        color: #061259ff;
    }

    .tbl-pdi {
        padding: 1% 3%;
        overflow-x: auto;
    }

    .tbl-pdi table {
        width: 100%;
    }

    .tbl-pdi tr {
        border: 5px solid #ffffffff;
    }

    .tbl-pdi table th {
        padding: 1.4rem;
        width: 25%;
        text-align: right;
        background: #c5c5c5;
        color: #061259ff;
        text-transform: uppercase;
        /* top: 5%; */
        vertical-align: middle !important;
        justify-content: center;
        font-size: 18px !important;
    }

    .tbl-pdi table p {
        font-size: 16px;
    }

    .tbl-pdi table td {
        min-width: 15rem;
        padding: 20px;
        width: 60%;
        text-align: justify;
        background: #f5f5f5;
        font-size: 14px;
        vertical-align: middle;
        line-height: 1.5;
    }

    .nav-tabs.nav-justified>li>a {
        color: #151515;
        font-weight: 700;
        font-size: 16;
    }

    .nav-tabs.nav-justified>.active>a,
    .nav-tabs.nav-justified>.active>a:focus,
    .nav-tabs.nav-justified>.active>a:hover {

        font-weight: 700;
        color: #061259;
        font-size: 16px;
    }

.nav-tabs > li > a {
  border: 1px solid #f5f5f5 !important;
  background-color: #ddd;
}



  .nav-tabs.nav-justified > .active > a, .nav-tabs.nav-justified > .active > a:focus, .nav-tabs.nav-justified > .active > a:hover {
    border-bottom-color: #fff !important;
  }



</style>
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin hoja de estilo  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->