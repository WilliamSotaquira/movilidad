@extends('welcome')
@section('contenido')
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fuente Montserrat -----  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<link rel='preconnect' href='https://fonts.googleapis.com'>
<link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
<link href='https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap' rel='stylesheet'>
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin Fuente Montserrat -  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<!-- Set Wrapper -->
<div class='container-fluid zp'>
    <div class='box-wrp'>
        <div class='box-head'></div>

        <div class="box-transicion">

            <div class="btn-transicion zoom">
                <a data-toggle="tab" href="#menu1">
                    <div class='imagen'>
                        <img class='img-responsive' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/13-09-2022/economicos.png' alt='' title=''>
                    </div>
                    <div class="titulo">
                        <h3>
                            Con incentivos económicos y no económicos ¡Conoce los beneficios!
                        </h3>
                    </div>
                </a>
            </div>

            <div class="btn-transicion zoom">
                <a data-toggle="tab" href="#menu2">
                    <div class='imagen'>
                        <img class='img-responsive' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/13-09-2022/cartel-de-la-calle.png' alt='' title=''>
                    </div>
                    <div class="titulo">
                        <h3>
                            Con infraestructura de recarga ¡Conoce dónde recargar!
                        </h3>
                    </div>
                </a>
            </div>

            <div class="btn-transicion zoom">
                <a data-toggle="tab" href="#menu3">
                    <div class='imagen'>
                        <img class='img-responsive' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-09-2022/informacion_b.png' alt='' title=''>
                    </div>
                    <div class="titulo">
                        <h3>
                            Con más información y nuevas capacidades ¡Conoce estos recursos!
                        </h3>
                    </div>
                </a>
            </div>

            <div class="btn-transicion zoom">
                <a data-toggle="tab" href="#menu4">
                    <div class='imagen'>
                        <img class='img-responsive' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/13-09-2022/apoyar.png' alt='' title=''>
                    </div>
                    <div class="titulo">
                        <h3>
                            Con alianzas y acciones de tod@s ¡Únete aquí!
                        </h3>
                    </div>
                </a>
            </div>

            <div class="tab-content">

                <div id="menu1" class="tab-pane fade">
                    <div>
                        <br>
                        <hr>
                        <h1 class="text-center">¡Conoce los incentivos que ya existen para estas tecnologías! </h1>
                        <hr>

                        <br>
                        <div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-hover table-condensed">
                                            <tr>
                                                <th class="th1" colspan="2">Instrumentos para la promoción de movilidad de Cero y Bajas Emisiones</th>
                                                <th class="th1">Competencia</th>
                                                <th class="th1">Gasolina</th>
                                                <th class="th1">Eléctrico</th>
                                                <th class="th1">Híbrido</th>
                                            </tr>
                                            <tr>
                                                <th rowspan="2">Incentivos a la compra</th>
                                                <td><strong>Aranceles</strong></td>
                                                <td><strong>Nación:</strong><br>Decreto 2051 del 13 de noviembre de 2019</td>
                                                <td>0% - 35%</td>
                                                <td>0%</td>
                                                <td>5%</td>
                                            </tr>
                                            <tr>
                                                <td><strong>IVA</strong></td>
                                                <td><strong>Nación:</strong> <br>Ley 1819 del 2016</td>
                                                <td>19%</td>
                                                <td>5%</td>
                                                <td>5%</td>
                                            </tr>
                                            <tr>
                                                <th rowspan="3">Incentivos de uso y circulación</th>
                                                <td rowspan="2"><strong>Impuesto Vehicular</strong></td>
                                                <td><strong>Nación:</strong> <br>Ley 1964 de 2019</td>
                                                <td>1,5% - 3,5%</td>
                                                <td>1%</td>
                                                <td>1,5% - 3,5%</td>

                                            </tr>
                                            <tr>
                                                <td><strong>Distrito:</strong> <br> Acuerdo 780 de 2020</td>
                                                <td>0%</td>
                                                <td>
                                                    <p>Nuevos:</p>
                                                    <p>-60% por 5 años</p>
                                                    <p>Taxis:</p>
                                                    <p>-70% por 5 años</p>
                                                </td>
                                                <td>-40% por 5 años</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Pico y Placa</strong></td>
                                                <td>
                                                    <p><strong>Distrito:</strong> </p>
                                                    <p>Decreto 575 de 2013</p>
                                                    <p>Resolución 83464 de 2021</p>
                                                </td>
                                                <td>Aplica</td>
                                                <td>No aplica</td>
                                                <td>No aplica</td>
                                            </tr>
                                            <tr>
                                                <th rowspan="4">Otros instrumentos de promoción</th>
                                                <td><strong>Beneficios SOAT</strong></td>
                                                <td><strong>Distrito:</strong> <br> Ley 1964 de 2019</td>
                                                <td>0%</td>
                                                <td>-10%</td>
                                                <td>0%</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Infraestructura de recarga de acceso público</strong></td>
                                                <td><strong>Distrito:</strong> <br> Decreto 552 de 2018</td>
                                                <td>EDS</td>
                                                <td>1 rápida y 56 semi</td>
                                                <td>EDS + Eléctricas</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Beneficios técnico mecánica</strong></td>
                                                <td><strong>Nación:</strong> <br> Ley 1964 de 2019</td>
                                                <td>0%</td>
                                                <td>-30%</td>
                                                <td>0%</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Parqueaderos preferenciales</strong></td>
                                                <td><strong>Distrito:</strong> <br> Circular No. 006 de 2020</td>
                                                <td>No aplica</td>
                                                <td>(En definición)</td>
                                                <td>No aplica</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class='row'>
                                <div class='col-xs-12 col-sm-12'>
                                    <p><strong>Formularemos incentivos económicos y no económicos que promuevan el despliegue de estas tecnologías en todos los segmentos de transporte y la cadena de valor</strong></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="menu2" class="tab-pane fade">
                    <div>
                        <br>
                        <hr>
                        <h1 class="text-center">Con infraestructura de recarga ¡Conoce dónde recargar!</h1>
                        <hr>

                        <div class="seccion-6">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="txt-seccion-6">
                                        <p><strong>Le apostamos a tener 20 puntos de carga rápida para uso público en la ciudad a 2022.</strong> Conoce la infraestructura que existe hoy.</p>
                                    </div>
                                    <div class='images-map'>
                                        <div class="img-map">
                                            <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-05-2022/1200x680.png' alt='Mapa de infraestructura existente' title='Mapa de infraestructura existente'>
                                        </div>
                                        <div class="middle">
                                            <a target="_blank" rel="noopener noreferrer" href="https://movilidadbogota.maps.arcgis.com/apps/dashboards/5d0b51d77c9247088b62d2d590e15e2d">
                                                <div class="text-map">Conoce más detalles aquí</div>
                                            </a>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="txt-seccion-6">
                                        <p>Si tienes un vehículo eléctrico o una flota de vehículos eléctricos y consideras que no hay suficientes puntos de recarga en tu zona, envíanos un correo a <a href="mailto:movilidadecoeficiente@movilidadbogota.gov.co">movilidadecoeficiente@movilidadbogota.gov.co</a> y lo tendremos en cuenta para la expansión de la Red.</p>
                                        <p>Igualmente, otros operadores han dispuesto estaciones de recarga de uso público en la ciudad, las cuales se pueden consultar <a href="https://www.electromaps.com/mapa?qsearch=bogota" target="_blank" rel="noopener noreferrer">aquí</a></p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <style>
                            .images-map {
                                position: relative;
                            }

                            .img-map {
                                opacity: 1;
                                display: block;
                                height: auto;
                                transition: .5s ease;
                                backface-visibility: hidden;
                            }

                            .middle {
                                transition: .5s ease;
                                opacity: 0;
                                position: absolute;
                                top: 50%;
                                left: 50%;
                                transform: translate(-50%, -50%);
                                -ms-transform: translate(-50%, -50%);
                                text-align: center;
                            }

                            .middle a {
                                text-decoration: none !important;
                                color: rgb(28, 32, 70, 1);
                                text-align: center;
                            }

                            .images-map:hover .img-map {
                                opacity: 0.3;
                            }

                            .images-map:hover .middle {
                                opacity: 1;
                            }

                            .text-map {
                                background-color: rgba(102, 224, 38, 1);
                                color: rgba(28, 32, 70, 1);
                                font-size: 16px;
                                padding: 16px 32px;
                            }
                        </style>
                    </div>
                </div>
                <div id="menu3" class="tab-pane fade">
                    <div>
                        <br>
                        <hr>
                        <h1 class="text-center">Con más información y nuevas capacidades ¡Conoce estos recursos! </h1>
                        <hr>
                        <div class="seccion-7">
                            <div class='row'>
                                <div class='col-xs-12 col-sm-12'>
                                    <ol>

                                        <p>
                                            <li><strong>El SENA ha desarrollado los siguientes cursos complementarios sobre movilidad de cero y bajas emisiones.</strong>
                                        </p>
                                        <ul>
                                            <li>Formación en Vehículos de propulsión eléctrica</li>
                                            <li>Formación en Vehículos de propulsión Híbrida </li>
                                            <li>Habilitación eléctrica para Vehículos eléctricos e Híbridos</li>
                                            <li>Mantenimiento del sistema eléctrico de la motocicleta </li>
                                            <li>Mantenimiento de Motocicletas de propulsión eléctrica </li>
                                            <li>Mantenimiento de Patinetas y Bicicletas eléctricas </li>
                                            <li>Conducción Eco-Eficiente en el transporte</li>
                                            <p><a href="https://forms.gle/in7zmqVLyfmAaCeLA">Registrar tu interes de participar aquí</a></p><br>
                                        </ul>
                                        </li>

                                        <p>
                                            <li><strong>Conoce más sobre movilidad eléctrica con estas herramientas:</strong>
                                        </p>
                                        <ul>
                                            <li>Documento de diagnóstico sobre la movilidad de cero y bajas emisiones:
                                                <p><a href="https://drive.google.com/file/d/1TAxh1-NCWJj0WbGjsLPuZBZsJwDqLtIn/view?usp=sharing">https://drive.google.com/file/d/1TAxh1-NCWJj0WbGjsLPuZBZsJwDqLtIn/view?usp=sharing</a></p>
                                            </li>
                                            <li>Guía de Movilidad eléctrica para organizaciones (Próximamente)
                                                <p><a href="/"></a></p>
                                            </li>
                                        </ul>
                                        </li>
                                        </ul>

                                </div>
                            </div>
                        </div>
                        <style>
                            .seccion-7 ol {
                                list-style-type: none;
                                margin: 0;
                                padding: 0;
                            }

                            .seccion-7 ol>li {
                                display: block;
                            }

                            .seccion-7 ol>li:before {
                                /*Using a Bootstrap glyphicon as the bullet point*/
                                content: "\e162";
                                font-family: 'Glyphicons Halflings';
                                font-size: 18px;
                                float: left;
                                margin-top: 0px;
                                margin-left: -20px;
                                color: rgba(102, 224, 38, 1);
                            }
                        </style>
                    </div>
                </div>
                <div id="menu4" class="tab-pane fade">
                    <div>
                        <br>
                        <hr>
                        <h1 class="text-center">Con alianzas y acciones de tod@s ¡Únete aquí! </h1>
                        <hr>
                        <div class="seccion-8">
                            <div class='row'>
                                <div class='col-xs-12 col-sm-12'>
                                    <p><strong>No te quedes por fuera, únete y sé parte del cambio.</strong></p>
                                    <p>Esta transición necesita del trabajo conjunto con el sector privado, académico y los actores de toda la cadena de valor para acelerar la transición. </p>
                                </div>
                            </div>
                            <div class='row box-general'>
                                <div class='col-xs-12 col-sm-3'>
                                    <div class='img-general'>
                                        <div>
                                            <img class='img-responsive' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/05-05-2022/unep50logo.png' alt='Logo ONU Programa para el emdio ambiente' title='Logo ONU Programa para el emdio ambiente'>
                                        </div>
                                    </div>
                                </div>
                                <div class='col-xs-12 col-sm-3'>
                                    <div class='img-general'>
                                        <div>
                                            <img class='img-responsive img2' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/05-05-2022/b_move_to_zero-full_color.png' alt='Logo Move to Zero' title='Logo Move to Zero'>
                                        </div>
                                    </div>
                                </div>
                                <div class='col-xs-12 col-sm-6'>
                                    <div class='img-general'>
                                        <div>
                                            <img class='img-responsive' src='https://www.movilidadbogota.gov.co/web/sites/default/files/logo-sdm.png' alt='Logo Secretaría Distrital de Movilidad' title='Logo Secretaría Distrital de Movilidad'>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <style>
                                .box-general {
                                    padding: 30px;
                                }

                                .img-general {
                                    height: 100px;
                                    display: flex;
                                    flex-direction: column;
                                    justify-content: center;
                                    align-items: center;
                                }

                                .img-general img {
                                    max-height: 100px;
                                }

                                .img-general .img2 {
                                    padding: 15px;
                                }
                            </style>


                            <div class='row'>
                                <div class='col-xs-12 col-sm-12'>
                                    <p>Nos unimos con el PNUMA para <strong>invitar a las organizaciones a que definan compromisos específicos por la movilidad eléctrica</strong> en alguno de los siguientes ejes:</p>
                                </div>
                            </div>

                            <div class="row fila-s8">
                                <div class='col-xs-2'>
                                    <div class='imagen text-right'>
                                        <img width="50px" src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-05-2022/path932.png' alt='icono barras' title='icono barras'>
                                    </div>
                                </div>
                                <div class='col-xs-9'>
                                    <p><strong>Generar mayor oferta vehicular de cero emisiones a precios competitivos</strong> para las diferentes tipologías vehiculares.</p>
                                </div>
                            </div>

                            <div class="row fila-s8">
                                <div class='col-xs-2'>
                                    <div class='imagen text-right'>
                                        <img width="50px" src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-05-2022/path931.png' alt='icono vehiculo tipo camioneta' title='icono vehiculo tipo camioneta'>
                                    </div>
                                </div>
                                <div class='col-xs-9'>
                                    <p><strong>Adquirir flotas motorizadas de cero emisiones</strong> por parte de las organizaciones empresariales.</p>
                                </div>
                            </div>

                            <div class="row fila-s8">
                                <div class='col-xs-2'>
                                    <div class='imagen text-right'>
                                        <img width="50px" src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-05-2022/path961.png' alt='icono herramieta para la carga de bateria' title='icono herramieta para la carga de bateria'>
                                    </div>
                                </div>
                                <div class='col-xs-9'>
                                    <p><strong>Instalar infraestructura de recarga pública y privada, gestionar espacios para la misma.</strong></p>
                                </div>
                            </div>

                            <div class="row fila-s8">
                                <div class='col-xs-2'>
                                    <div class='imagen text-right'>
                                        <img width="50px" src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-05-2022/path975.png' alt='icono bombilla con engranje' title='icono bombilla con engranje'>
                                    </div>
                                </div>
                                <div class='col-xs-9'>
                                    <p><strong>Impulsar la innovación, investigación, empleabilidad y desarrollo de capacidades técnicas </strong>en toda la cadena valor de la movilidad eléctrica con enfoque de género y diferencial.</p>
                                </div>
                            </div>
                            <div class="row fila-s8">
                                <div class='col-xs-2'>
                                    <div class='imagen text-right'>
                                        <img width="50px" src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-05-2022/path989.png' alt='icono vehiculo tipo camioneta' title='icono vehiculo tipo camioneta'>
                                    </div>
                                </div>
                                <div class='col-xs-9'>
                                    <p><strong>Promover mejores condiciones financieras y de seguros</strong> en toda la cadena valor y con efoque diferencial.</p>
                                </div>
                            </div>
                            <style>
                                .fila-s8 {
                                    padding: 10px;
                                }
                            </style>

                        </div>
                        <br>
                        <div class='row'>
                            <div class='col-xs-12'>
                                <p><strong>Si tu organización quiere hacer parte de esta transición y visibilizar sus esfuerzos a nivel internacional, solo debe diligenciar el siguiente formato: </strong><a href="https://docs.google.com/document/d/1XrmtuvMesZeVmXvxtOMzv0tU4fm_Zk9V/edit" target="_blank" rel="noopener noreferrer">https://docs.google.com/document/d/1XrmtvMesZeVmXvxtOMzv0tU4fm_Zk9V/edit</a></p>
                                <p>Y enviarlo a los correos <a href="mailto:movilidadecoeficiente@movilidadbogota.gov.co">movilidadecoeficiente@movilidadbogota.gov.co</a> y <a href="mailto:german.diazrivas@un.org">german.diazrivas@un.org</a></p>
                                <p>Ya son más de 30 organizaciones comprometidas que han generado más de 60 compromisos por la movilidad eléctrica. <a href="https://drive.google.com/file/d/1XbddBGDIDbzLrky8-6rQDE5W8lmrrHZr/view?usp=sharing">Conócelos haciendo clic aquí.</a></p>

                            </div>
                        </div>



                        <div id="carousel_empresas" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel_empresas" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel_empresas" data-slide-to="1"></li>
                                <li data-target="#carousel_empresas" data-slide-to="2"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <div class='row logos'>
                                        <div class='col-xs-12 col-sm-2'>
                                            <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-05-2022/logo_akt_electric_400.png" alt="">
                                        </div>
                                        <div class='col-xs-12 col-sm-2'>
                                            <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-05-2022/logo_akuai_400.png" alt="">
                                        </div>
                                        <div class='col-xs-12 col-sm-2'>
                                            <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-05-2022/logo_andemos_400.png" alt="">
                                        </div>
                                        <div class='col-xs-12 col-sm-2'>
                                            <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-05-2022/logo_enel_400.png" alt="">
                                        </div>
                                        <div class='col-xs-12 col-sm-2'>
                                            <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-05-2022/logo_colturex_400.png" alt="">
                                        </div>
                                        <div class='col-xs-12 col-sm-2'>
                                            <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-05-2022/logo_defencarga_400.png" alt="">
                                        </div>
                                    </div>

                                </div>
                                <div class="item">
                                    <div class="row logos">
                                        <div class='col-xs-12 col-sm-2'>
                                            <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-05-2022/logo_uniandes_400.png" alt="">
                                        </div>
                                        <div class='col-xs-12 col-sm-2'>
                                            <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-05-2022/logo_evoelectric_400.png" alt="">
                                        </div>
                                        <div class='col-xs-12 col-sm-2'>
                                            <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-05-2022/logo_girozero_400.png" alt="">
                                        </div>
                                        <div class='col-xs-12 col-sm-2'>
                                            <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-05-2022/logo_heliox_400.png" alt="">
                                        </div>
                                        <div class='col-xs-12 col-sm-2'>
                                            <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-05-2022/logo_insepet_400.png" alt="">
                                        </div>
                                        <div class='col-xs-12 col-sm-2'>
                                            <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-05-2022/logo_navisaf_400.png" alt="">
                                        </div>

                                    </div>
                                </div>
                                <div class="item">
                                    <div class="row logos">
                                        <div class='col-xs-12 col-sm-2 col-sm-offset-2'>
                                            <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-05-2022/logo_piot_400.png" alt="">
                                        </div>
                                        <div class='col-xs-12 col-sm-2'>
                                            <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-05-2022/logo_renting_400.png" alt="">
                                        </div>
                                        <div class='col-xs-12 col-sm-2'>
                                            <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-05-2022/logo_solistica_400.png" alt="">
                                        </div>
                                        <div class='col-xs-12 col-sm-2'>
                                            <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-05-2022/logo_tractec_400.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Left and right controls -->
                            <a class="left carousel-control" href="#carousel_empresas" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                                <span class="sr-only">Anterior</span>
                            </a>
                            <a class="right carousel-control" href="#carousel_empresas" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                                <span class="sr-only">Siguiente</span>
                            </a>
                        </div>

                        <style>
                            #carousel_empresas {
                                margin: 0px 50px;
                            }

                            #carousel_empresas .carousel-caption {
                                right: 10%;
                                left: 10%;
                                /* text-shadow: 0 1px 2px rgba(255, 255, 255, 0.5); */
                                background-color: rgba(0, 0, 0, 0.9);
                                padding: 15px;
                            }

                            #carousel_empresas .carousel-caption h3 {
                                color: rgba(255, 255, 255, 1);
                                font-family: 'Montserrat', sans-serif;
                                font-size: 30px;
                                font-weight: 700;
                                text-align: center;
                                line-height: 1.4;
                            }

                            #carousel_empresas .carousel-control {
                                color: rgb(28, 32, 70, 1) !important;
                                opacity: 1;
                                background-color: #00000000;
                                filter: none;
                                opacity: 1;
                            }

                            #carousel_empresas .logos {
                                margin: 0px;
                            }

                            #carousel_empresas .logos img {
                                margin: auto;
                                max-height: 150px;
                                min-width: 60px;
                                width: auto;
                            }

                            #carousel_empresas .carousel-control .glyphicon-chevron-left,
                            #carousel_empresas .carousel-control .glyphicon-chevron-right,
                            #carousel_empresas .carousel-control .icon-next,
                            #carousel_empresas .carousel-control .icon-prev {
                                top: calc(50% - 20px) !important;
                            }

                            #carousel_empresas .carousel-control .glyphicon-chevron-right,
                            #carousel_empresas .carousel-control .icon-next {
                                right: 10% !important;
                                margin-right: -10px;
                            }

                            #carousel_empresas .carousel-control .glyphicon-chevron-left,
                            #carousel_empresas .carousel-control .icon-prev {
                                left: 10% !important;
                                margin-left: -10px;
                            }

                            @media(max-width:767px) {
                                #carousel_empresas {
                                    margin: 0px;
                                }

                                .carousel-inner>.item {
                                    position: relative;
                                    height: 400px;
                                }

                                #carousel_empresas {
                                    position: relative;
                                    height: auto;
                                }


                            }

                            #carousel_empresas .carousel-control.right,
                            #carousel_empresas .carousel-control.left {
                                background-image: none !important;
                                filter: none !important;
                                background-repeat: repeat-x;
                            }


                            @media screen and (min-width: 768px) {

                                #carousel_empresas .carousel-control .glyphicon-chevron-left,
                                #carousel_empresas .carousel-control .glyphicon-chevron-right,
                                #carousel_empresas .carousel-control .icon-next,
                                #carousel_empresas .carousel-control .icon-prev {

                                    width: 40px !important;
                                    height: 40px !important;
                                    font-size: 40px !important;
                                }

                                #carousel_empresas .carousel-control .glyphicon-chevron-right,
                                #carousel_empresas .carousel-control .icon-next {
                                    right: -40% !important;
                                    margin-right: -10px;
                                }

                                #carousel_empresas .carousel-control .glyphicon-chevron-left,
                                #carousel_empresas .carousel-control .icon-prev {
                                    left: -40% !important;
                                    margin-left: -10px;
                                }
                            }
                        </style>


                    </div>
                </div>
            </div>

        </div>
        <style>
            .box-transicion {
                display: grid;
                gap: 15px;
                grid-auto-flow: dense;
                grid-template-columns: 1fr;
                grid-template-rows: auto;
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
            }

            /* IE9 */

            .box-transicion a {
                text-decoration: none !important;
            }

            .btn-transicion .imagen {}

            .btn-transicion .imagen img {
                max-width: 180px;
                margin: auto;
                padding: 15px;
            }

            .btn-transicion .titulo {
                padding: 0px 15px 10px 15px;
            }

            .btn-transicion .titulo h3 {
                font-size: 18px;
                font-weight: 700;
                text-align: center;
                line-height: 1.2;
                color: #191c3a;
                margin: 8px;
            }

            .btn-transicion:hover {
                background-color: #d5d5d5;
            }

            .btn-transicion:hover a,
            .btn-transicion:focus a,
            .btn-transicion:visited a {
                background-color: #191c3a !important;
                color: #66e026;
            }

            @media(max-width:767px) {}

            @media(min-width:768px) {
                .box-transicion {
                    grid-template-columns: repeat(2, 1fr);
                }
            }

            @media(min-width:992px) {}

            @media(min-width:1200px) {}
        </style>
    </div>

</div>
</div>
<!-- End Set Wrapper -->

<!-- Styles -->
<style type='text/css'>
    .field-item.even h2 {
        visibility: hidden;
        margin-top: -50px;
    }

    .region-content {
        padding: 0px;
        overflow: hidden;
    }

    .zp {
        max-width: 980px;
        word-wrap: break-word;
        font-family: 'Montserrat', sans-serif;
        font-size: 15px;
        font-weight: 500;
        text-align: justify;
        line-height: 1.4;
        color: rgba(25, 25, 25, 1);
        margin: 8px;
    }

    /*
    .zp [class*='col-'] {
        margin: 0px;
        padding: 0px;
        border: 0;
        outline: 0;
        font-size: 100%;
        vertical-align: baseline;
    }
    */

    .w-100 {
        width: 100%;
    }
</style>
<!-- End Styles -->
