@extends('welcome')
@section('title', 'objetivos')
@section('contenido')

<link rel="stylesheet" href="{{ asset('css/cybe.css') }}">

<!-- Google fonts - Montserrat  -->
<link rel='preconnect' href='https://fonts.googleapis.com'>
<link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
<link href='https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap' rel='stylesheet'>
<link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

<!-- Set objetivos -->

<style>

</style>


<div class="set-wrapper objetivos obj">


    <div class="box b1">
        <div class="cpt1">
            <p>Para conocer más información de las metas, puedes seleccionar por modo de transporte:</p>
            <select name="select-obj" id="select-obj" class="form-control " required="required">
                <option>Motocicletas</option>
                <option>Vehículos</option>
                <option>Transporte de carga</option>
                <option>Transporte escolar</option>
                <option>Flota oficial</option>
                <option>Transporte público</option>
                <option>Taxis</option>
                <option selected disabled>Seleccione una opción</option>
            </select>
        </div>
        <div class="cpt2"></div>
    </div>

    <div class="box b2">

        <!-- Bloque de información relacionada al segmento Motocicletas -->
        <div class="pills pills-0 pills-moto">

            <ul class="nav nav-pills nav-justified">
                <li class="active"><a data-toggle="pill" href="#tab-moto-1">Metas</a></li>
                <li><a data-toggle="pill" href="#tab-moto-3">Productos Clave</a></li>
            </ul>

            <div class="tab-content">
                <div id="tab-moto-1" class="tab-pane fade in active">

                    <div class="cpnt cpnt-head cpnt-head-moto cpnt-head-moto-metas">
                        <h3 class="title title-type-2">Metas para la transición de motocicletas</h3>
                        <p class="paragraph ph-1">Estas metas aceleran el proceso de transición a vehículos de cero emisiones y ayudan a mitigar la contaminación ambiental y los efectos en la salud pública provocados por la exposición a concentración de material particulado.</p>
                    </div>
                    <div class="cpnt cpnt-items cpnt-items-moto">

                        <div class="item-metas item-metas-motos">
                            <svg version="1.1" baseProfile="full" width="100" height="100" xmlns="/images/cybe/numbers/Bi1CircleFill.svg">
                                <circle cx="50" cy="50" r="40" fill="#1c2046" />
                                <text fill="#f5f5f5" font-size="45" font-family="Verdana" x="36" y="68">1</text>
                            </svg>
                            <p class="paragraph ph-1">A partir de 2032, sólo se registrarán en Bogotá motocicletas de cero emisiones.</p>
                        </div>

                        <div class="item-metas item-metas-motos">
                            <svg version="1.1" baseProfile="full" width="100" height="100" xmlns="/images/cybe/numbers/Bi1CircleFill.svg">
                                <circle cx="50" cy="50" r="40" fill="#1c2046" />
                                <text fill="#f5f5f5" font-size="45" font-family="Verdana" x="36" y="68">2</text>
                            </svg>
                            <p class="paragraph ph-1">Desde 2028, sólo circularán motocicletas de cero emisiones en zonas con restricción de circulación, de acuerdo con la clasificación del etiquetado ambiental.</p>
                        </div>

                    </div>
                </div>
                <div id="tab-moto-2" class="tab-pane fade">

                    <div class="cpnt cpnt-head cpnt-head-moto cpnt-head-moto-incentivo">
                        <h3 class="title title-type-2">Incentivos para motocicletas</h3>
                        <p class="paragraph ph-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo doloremque blanditiis recusandae harum iusto quasi unde sequi nemo molestias exercitationem nam porro consectetur sint incidunt et atque quidem, quibusdam animi.</p>
                    </div>

                    <div class="cpnt cpnt-incentivos">

                        <!-- collapse_inceMoto -->
                        <div class='panel-group' id='accordion_inceMoto' role='tablist ' aria-multiselectable='true'>

                            <!-- collapse elecMoto -->
                            <div class='panel panel-default'>
                                <div class='panel-heading' role='tab' id='heading_elecMoto'>
                                    <h4 class='panel-title'>
                                        <a role='button' data-toggle='collapse' data-parent='#accordion_inceMoto' href='#collapse_elecMoto' aria-expanded='false' aria-controls='collapse_elecMoto'>
                                            Eléctrico
                                        </a>
                                    </h4>
                                </div>
                                <div id='collapse_elecMoto' class='panel-collapse collapse in' role='tabpanel' aria-labelledby='heading_elecMoto' aria-expanded='false'>
                                    <div class='panel-body'>
                                        <div class='box-elecMoto'>

                                            <div class="items-incentivo">

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p class="ph-summary">Descuento en Arancel</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p class="ph-summary">0%</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p class="ph-summary">Gravamen arancelario del cero por ciento</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Decreto 2051 de 2019</a>
                                                    </span>
                                                </div>

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p class="ph-summary">IVA</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p class="ph-summary">5%</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p class="ph-summary">Aplicación de tarifa del 5%</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Ley 1819 de 2016</a>
                                                    </span>
                                                </div>

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p class="ph-summary">Impuesto vehicular</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p class="ph-summary">1%</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p class="ph-summary">maximo del valor comercial</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Ley 1964 de 2019</a>
                                                    </span>
                                                </div>

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p class="ph-summary">Descuento en el impuesto vehicular</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p class="ph-summary">-60%</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p class="ph-summary">en Bogotá por 5 años</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Acuerdo 780 de 2020</a>
                                                    </span>
                                                </div>

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p class="ph-summary">Beneficio en circulación</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p class="ph-summary">Exceptuados</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p class="ph-summary">de restricción de pico y placa en Bogotá</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Decreto 003 de 2023</a>
                                                    </span>
                                                </div>

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p class="ph-summary">Beneficio para estacionamiento</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p class="ph-summary">1</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p class="ph-summary">hora gratis de parqueo en vía en Bogotá</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Zona de parqueo pago</a>
                                                    </span>
                                                </div>

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p class="ph-summary">SOAT</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p class="ph-summary">10%</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p class="ph-summary">de descuento</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Ley 1964 de 2019</a>
                                                    </span>
                                                </div>

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p class="ph-summary">Revisión técnico mecánica</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p class="ph-summary">30%</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p class="ph-summary">de descuento</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Ley 1964 de 2019</a>
                                                    </span>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- collapse hibriMoto -->
                            <div class='panel panel-default'>
                                <div class='panel-heading' role='tab' id='heading_hibriMoto'>
                                    <h4 class='panel-title'>
                                        <a role='button' data-toggle='collapse' data-parent='#accordion_inceMoto' href='#collapse_hibriMoto' aria-expanded='false' aria-controls='collapse_hibriMoto'>
                                            Hibrido
                                        </a>
                                    </h4>
                                </div>
                                <div id='collapse_hibriMoto' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_hibriMoto' aria-expanded='false'>
                                    <div class='panel-body'>
                                        <div class='box-hibriMoto'>

                                            <div class="items-incentivo">


                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p>Descuento en Arancel</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p>5%</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p>Gravamen arancelario del cinco por ciento</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Decreto 2051 de 2019</a>
                                                    </span>
                                                </div>

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p>IVA</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p>5%</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p>Aplicación de tarifa del 5%</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Ley 1819 de 2016</a>
                                                    </span>
                                                </div>

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p>Impuesto vehicular entre</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p> 1,5% y 3,50%</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p>del valor comercial</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Ley 1964 de 2019</a>
                                                    </span>
                                                </div>

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p>Descuento en el impuesto vehicular</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p>-40%</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p>en Bogotá por 5 años</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Acuerdo 780 de 2020</a>
                                                    </span>
                                                </div>

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p>Beneficio en circulación</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p>Exceptuados</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p>de restricción de pico y placa en Bogotá</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Decreto 003 de 2023</a>
                                                    </span>
                                                </div>


                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- /#fin _inceMoto -->

                    </div>
                </div>
                <div id="tab-moto-3" class="tab-pane fade">

                    <div class="cpnt cpnt-head cpnt-head-moto cpnt-head-moto-clave">
                        <h3 class="title title-type-2">Productos Clave</h3>
                        <p class="paragraph ph-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias odit incidunt aspernatur quae vel at earum neque rem suscipit nemo, sit consequuntur eum repellendus nisi id ex aliquam debitis delectus!</p>
                    </div>
                    <div class="cpnt cpnt-body">
                        <div class="group-data">
                            <h4 class="title title-type-3">Esquemas de gestión de la demanda</h4>
                            <p class="paragraph ph-1">A cargo de la Secretaría de Movilidad. Con el fin de promover el uso responsable de los vehículos particulares, se generan facilidades para la circulación, en particular de los vehículos de cero y bajas emisiones sobre los más contaminantes. Actualmente, la ciudad ya cuenta con estrategias en esta línea como el pico y placa y el pico y placa solidario.</p>
                            <img class="img-responsive w-100" src="/images/cybe/picoPlaca.png" alt="" title="">
                        </div>
                        <div class="group-data">
                            <h4 class="title title-type-3">Zonas de restricción de circulación.</h4>
                            <p class="paragraph ph-1">A cargo de la Secretaría de Movilidad. Para promover la aceleración de los procesos de renovación de los vehículos que circulan en la ciudad y mejorar las tecnologías, se podrán incluir zonas delimitadas de la ciudad, en las cuales, el acceso a estas esté diferenciado por el nivel de contaminación y emisión de los vehículos que deseen ingresar.</p>
                            <img class="img-responsive w-100" src="/images/cybe/zuma.png" alt="">
                        </div>
                        <div class="group-data">
                            <h4 class="title title-type-3">Plazas de parqueo preferencial para cero emisiones.</h4>
                            <p class="paragraph ph-1"> A cargo de la Secretaría Movilidad y la Secretaría de Gobierno. Este producto busca aumentar la oferta de estacionamientos para vehículos eléctricos (Ley 1964 de 2019 artículo 7), generando la reglamentación para exigir que los estacionamientos de la ciudad, registrados en el Registro Distrital de Estacionamientos, cuenten con estos espacios.</p>
                            <img class="img-responsive w-100" src="/images/cybe/eléctrico_auto_2.png" alt="">
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Bloque de información relacionada al segmento Vehiculos -->
        <div class="pills pills-1 pills-vehiculo">

            <ul class="nav nav-pills nav-justified">
                <li class="active"><a data-toggle="pill" href="#tab-vehiculo-1">Metas</a></li>
                <li><a data-toggle="pill" href="#tab-vehiculo-2">Incentivos</a></li>
                <li><a data-toggle="pill" href="#tab-vehiculo-3">Productos Clave</a></li>
            </ul>

            <div class="tab-content">
                <div id="tab-vehiculo-1" class="tab-pane fade in active">

                    <div class="cpnt cpnt-head cpnt-head-vehiculo cpnt-head-vehiculo-metas">
                        <h3 class="title title-type-2">Metas para la transición de vehículos particulares</h3>
                        <p class="paragraph ph-1">Estas metas aceleran el proceso de transición a vehículos de cero emisiones y ayudan a mitigar la contaminación ambiental y los efectos en la salud pública provocados por la exposición a concentración de material particulado.</p>
                    </div>
                    <div class="cpnt cpnt-items cpnt-items-vehiculo">

                        <div class="item-metas item-metas-vehiculos">
                            <svg version="1.1" baseProfile="full" width="100" height="100" xmlns="/images/cybe/numbers/Bi1CircleFill.svg">
                                <circle cx="50" cy="50" r="40" fill="#1c2046" />
                                <text fill="#f5f5f5" font-size="45" font-family="Verdana" x="36" y="68">1</text>
                            </svg>
                            <p class="paragraph ph-1">A partir de 2032, sólo se registrarán en Bogotá vehículos particulares de cero y bajas emisiones.</p>
                        </div>

                        <div class="item-metas item-metas-vehiculos">
                            <svg version="1.1" baseProfile="full" width="100" height="100" xmlns="/images/cybe/numbers/Bi1CircleFill.svg">
                                <circle cx="50" cy="50" r="40" fill="#1c2046" />
                                <text fill="#f5f5f5" font-size="45" font-family="Verdana" x="36" y="68">2</text>
                            </svg>
                            <p class="paragraph ph-1">Desde 2035, sólo circularán vehículos de cero y bajas emisiones en zonas con restricción de circulación, de acuerdo con la clasificación del etiquetado ambiental.</p>
                        </div>

                        <div class="item-metas item-metas-vehiculos">
                            <svg version="1.1" baseProfile="full" width="100" height="100" xmlns="/images/cybe/numbers/Bi1CircleFill.svg">
                                <circle cx="50" cy="50" r="40" fill="#1c2046" />
                                <text fill="#f5f5f5" font-size="45" font-family="Verdana" x="36" y="68">3</text>
                            </svg>
                            <p class="paragraph ph-1">A partir de 2040, sólo se registrarán en Bogotá vehículos de cero emisiones.</p>
                        </div>

                    </div>
                </div>
                <div id="tab-vehiculo-2" class="tab-pane fade">

                    <div class="cpnt cpnt-head cpnt-head-vehiculo cpnt-head-vehiculo-incentivos">
                        <h3 class="title title-type-2">Incentivos para vehículos particulares</h3>
                        <p class="paragraph ph-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo doloremque blanditiis recusandae harum iusto quasi unde sequi nemo molestias exercitationem nam porro consectetur sint incidunt et atque quidem, quibusdam animi.</p>
                    </div>

                    <div class="cpnt cpnt-incentivos">

                        <!-- collapse_incevehiculo -->
                        <div class='panel-group' id='accordion_incevehiculo' role='tablist ' aria-multiselectable='true'>

                            <!-- collapse elecvehiculo -->
                            <div class='panel panel-default'>
                                <div class='panel-heading' role='tab' id='heading_elecvehiculo'>
                                    <h4 class='panel-title'>
                                        <a role='button' data-toggle='collapse' data-parent='#accordion_incevehiculo' href='#collapse_elecvehiculo' aria-expanded='false' aria-controls='collapse_elecvehiculo'>
                                            Eléctrico
                                        </a>
                                    </h4>
                                </div>
                                <div id='collapse_elecvehiculo' class='panel-collapse collapse in' role='tabpanel' aria-labelledby='heading_elecvehiculo' aria-expanded='false'>
                                    <div class='panel-body'>
                                        <div class='box-elecvehiculo'>

                                            <div class="items-incentivo">

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p class="ph-summary">Descuento en Arancel</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p class="ph-summary">0%</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p class="ph-summary">Gravamen arancelario del cero por ciento</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Decreto 2051 de 2019</a>
                                                    </span>
                                                </div>

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p class="ph-summary">IVA</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p class="ph-summary">5%</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p class="ph-summary">Aplicación de tarifa del 5%</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Ley 1819 de 2016</a>
                                                    </span>
                                                </div>

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p class="ph-summary">Impuesto vehicular</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p class="ph-summary">1%</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p class="ph-summary">maximo del valor comercial</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Ley 1964 de 2019</a>
                                                    </span>
                                                </div>

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p class="ph-summary">Descuento en el impuesto vehicular</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p class="ph-summary">-60%</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p class="ph-summary">en Bogotá por 5 años</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Acuerdo 780 de 2020</a>
                                                    </span>
                                                </div>

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p class="ph-summary">Beneficio en circulación</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p class="ph-summary">Exceptuados</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p class="ph-summary">de restricción de pico y placa en Bogotá</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Decreto 003 de 2023</a>
                                                    </span>
                                                </div>

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p class="ph-summary">Beneficio para estacionamiento</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p class="ph-summary">1</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p class="ph-summary">hora gratis de parqueo en vía en Bogotá</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Zona de parqueo pago</a>
                                                    </span>
                                                </div>

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p class="ph-summary">SOAT</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p class="ph-summary">10%</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p class="ph-summary">de descuento</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Ley 1964 de 2019</a>
                                                    </span>
                                                </div>

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p class="ph-summary">Revisión técnico mecánica</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p class="ph-summary">30%</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p class="ph-summary">de descuento</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Ley 1964 de 2019</a>
                                                    </span>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- collapse hibrivehiculo -->
                            <div class='panel panel-default'>
                                <div class='panel-heading' role='tab' id='heading_hibrivehiculo'>
                                    <h4 class='panel-title'>
                                        <a role='button' data-toggle='collapse' data-parent='#accordion_incevehiculo' href='#collapse_hibrivehiculo' aria-expanded='false' aria-controls='collapse_hibrivehiculo'>
                                            Hibrido
                                        </a>
                                    </h4>
                                </div>
                                <div id='collapse_hibrivehiculo' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_hibrivehiculo' aria-expanded='false'>
                                    <div class='panel-body'>
                                        <div class='box-hibrivehiculo'>

                                            <div class="items-incentivo">


                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p>Descuento en Arancel</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p>5%</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p>Gravamen arancelario del cinco por ciento</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Decreto 2051 de 2019</a>
                                                    </span>
                                                </div>

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p>IVA</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p>5%</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p>Aplicación de tarifa del 5%</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Ley 1819 de 2016</a>
                                                    </span>
                                                </div>

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p>Impuesto vehicular entre</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p> 1,5% y 3,50%</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p>del valor comercial</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Ley 1964 de 2019</a>
                                                    </span>
                                                </div>

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p>Descuento en el impuesto vehicular</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p>-40%</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p>en Bogotá por 5 años</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Acuerdo 780 de 2020</a>
                                                    </span>
                                                </div>

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p>Beneficio en circulación</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p>Exceptuados</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p>de restricción de pico y placa en Bogotá</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Decreto 003 de 2023</a>
                                                    </span>
                                                </div>


                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- /#fin _incevehiculo -->

                    </div>
                </div>
                <div id="tab-vehiculo-3" class="tab-pane fade">

                    <div class="cpnt cpnt-head cpnt-head-vehiculo cpnt-head-vehiculo-clave">
                        <h3 class="title title-type-2">Productos Clave</h3>
                        <p class="paragraph ph-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias odit incidunt aspernatur quae vel at earum neque rem suscipit nemo, sit consequuntur eum repellendus nisi id ex aliquam debitis delectus!</p>
                    </div>
                    <div class="cpnt cpnt-body">
                        <div class="group-data">
                            <h4 class="title title-type-3">Esquemas de gestión de la demanda</h4>
                            <p class="paragraph ph-1">A cargo de la Secretaría de Movilidad. Con el fin de promover el uso responsable de los vehículos particulares, se generan facilidades para la circulación, en particular de los vehículos de cero y bajas emisiones sobre los más contaminantes. Actualmente, la ciudad ya cuenta con estrategias en esta línea como el pico y placa y el pico y placa solidario.</p>
                            <img class="img-responsive w-100" src="/images/cybe/picoPlaca.png" alt="" title="">
                        </div>
                        <div class="group-data">
                            <h4 class="title title-type-3">Zonas de restricción de circulación.</h4>
                            <p class="paragraph ph-1">A cargo de la Secretaría de Movilidad. Para promover la aceleración de los procesos de renovación de los vehículos que circulan en la ciudad y mejorar las tecnologías, se podrán incluir zonas delimitadas de la ciudad, en las cuales, el acceso a estas esté diferenciado por el nivel de contaminación y emisión de los vehículos que deseen ingresar.</p>
                            <img class="img-responsive w-100" src="/images/cybe/zuma.png" alt="">
                        </div>
                        <div class="group-data">
                            <h4 class="title title-type-3">Plazas de parqueo preferencial para cero emisiones.</h4>
                            <p class="paragraph ph-1"> A cargo de la Secretaría Movilidad y la Secretaría de Gobierno. Este producto busca aumentar la oferta de estacionamientos para vehículos eléctricos (Ley 1964 de 2019 artículo 7), generando la reglamentación para exigir que los estacionamientos de la ciudad, registrados en el Registro Distrital de Estacionamientos, cuenten con estos espacios.</p>
                            <img class="img-responsive w-100" src="/images/cybe/estacionCarga.png" alt="Estación de carga de vehículo eléctrico">
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Bloque de información relacionada al segmento cargas     -->
        <div class="pills pills-2 pills-carga">

            <ul class="nav nav-pills nav-justified">
                <li class="active"><a data-toggle="pill" href="#tab-carga-1">Metas</a></li>
                <li><a data-toggle="pill" href="#tab-carga-2">Incentivos</a></li>
                <li><a data-toggle="pill" href="#tab-carga-3">Productos Clave</a></li>
            </ul>

            <div class="tab-content">
                <div id="tab-carga-1" class="tab-pane fade in active">

                    <div class="cpnt cpnt-head cpnt-head-carga cpnt-head-carga-metas">
                        <h3 class="title title-type-2">Metas para la transición de los vehículos de transporte de carga (segmentos N2 y N3)</h3>
                        <p class="paragraph ph-1">Para estas flotas se prevé un cambio hacia tecnologías de cero o bajas emisiones, lo cual será favorecido por el logro en la paridad de precios de tecnologías, así como la inclusión de tecnologías que respondan a las necesidades del sector.</p>
                    </div>
                    <div class="cpnt cpnt-items cpnt-items-carga">

                        <div class="item-metas item-metas-cargas">
                            <svg version="1.1" baseProfile="full" width="100" height="100" xmlns="/images/cybe/numbers/Bi1CircleFill.svg">
                                <circle cx="50" cy="50" r="40" fill="#1c2046" />
                                <text fill="#f5f5f5" font-size="45" font-family="Verdana" x="36" y="68">1</text>
                            </svg>
                            <p class="paragraph ph-1">A partir de 2035, el registro de vehículos de carga será únicamente de cero emisiones, de conformidad con la Ley 1972 de 2019.</p>
                        </div>

                    </div>
                </div>
                <div id="tab-carga-2" class="tab-pane fade">

                    <div class="cpnt cpnt-head cpnt-head-carga cpnt-head-carga-incentivos">
                        <h3 class="title title-type-2">Incentivos para vehículos de transporte de carga</h3>
                        <p class="paragraph ph-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo doloremque blanditiis recusandae harum iusto quasi unde sequi nemo molestias exercitationem nam porro consectetur sint incidunt et atque quidem, quibusdam animi.</p>
                    </div>

                    <div class="cpnt cpnt-incentivos">

                        <!-- collapse_incecarga -->
                        <div class='panel-group' id='accordion_incecarga' role='tablist ' aria-multiselectable='true'>

                            <!-- collapse eleccarga -->
                            <div class='panel panel-default'>
                                <div class='panel-heading' role='tab' id='heading_eleccarga'>
                                    <h4 class='panel-title'>
                                        <a role='button' data-toggle='collapse' data-parent='#accordion_incecarga' href='#collapse_eleccarga' aria-expanded='false' aria-controls='collapse_eleccarga'>
                                            Eléctrico
                                        </a>
                                    </h4>
                                </div>
                                <div id='collapse_eleccarga' class='panel-collapse collapse in' role='tabpanel' aria-labelledby='heading_eleccarga' aria-expanded='false'>
                                    <div class='panel-body'>
                                        <div class='box-eleccarga'>

                                            <div class="items-incentivo">

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p class="ph-summary">Descuento en Arancel</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p class="ph-summary">0%</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p class="ph-summary">Gravamen arancelario del cero por ciento</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Decreto 2051 de 2019</a>
                                                    </span>
                                                </div>

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p class="ph-summary">IVA</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p class="ph-summary">5%</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p class="ph-summary">Aplicación de tarifa del 5%</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Ley 1819 de 2016</a>
                                                    </span>
                                                </div>

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p class="ph-summary">Impuesto vehicular</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p class="ph-summary">1%</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p class="ph-summary">maximo del valor comercial</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Ley 1964 de 2019</a>
                                                    </span>
                                                </div>

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p class="ph-summary">Descuento en el impuesto vehicular</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p class="ph-summary">-60%</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p class="ph-summary">en Bogotá por 5 años</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Acuerdo 780 de 2020</a>
                                                    </span>
                                                </div>

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p class="ph-summary">Beneficio en circulación</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p class="ph-summary">Exceptuados</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p class="ph-summary">de restricción de pico y placa en Bogotá</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Decreto 840 de 2019 modificado por el Decreto Distrital 077 de 2020</a>
                                                    </span>
                                                </div>

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p class="ph-summary">Beneficio para estacionamiento</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p class="ph-summary">1</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p class="ph-summary">hora gratis de parqueo en vía en Bogotá</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Zona de parqueo pago - 2021</a>
                                                    </span>
                                                </div>

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p class="ph-summary">SOAT</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p class="ph-summary">10%</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p class="ph-summary">de descuento</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Ley 1964 de 2019 - Ley 2128 de 2021</a>
                                                    </span>
                                                </div>

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p class="ph-summary">Revisión técnico mecánica</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p class="ph-summary">30%</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p class="ph-summary">de descuento</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Ley 1964 de 2019</a>
                                                    </span>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- collapse hibricarga -->
                            <div class='panel panel-default'>
                                <div class='panel-heading' role='tab' id='heading_hibricarga'>
                                    <h4 class='panel-title'>
                                        <a role='button' data-toggle='collapse' data-parent='#accordion_incecarga' href='#collapse_hibricarga' aria-expanded='false' aria-controls='collapse_hibricarga'>
                                            Hibrido
                                        </a>
                                    </h4>
                                </div>
                                <div id='collapse_hibricarga' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_hibricarga' aria-expanded='false'>
                                    <div class='panel-body'>
                                        <div class='box-hibricarga'>

                                            <div class="items-incentivo">


                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p>Descuento en Arancel</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p>5%</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p>Gravamen arancelario del cinco por ciento</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Decreto 2051 de 2019</a>
                                                    </span>
                                                </div>

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p>IVA</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p>5%</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p>Aplicación de tarifa del 5%</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Ley 1819 de 2016</a>
                                                    </span>
                                                </div>

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p>Impuesto vehicular entre</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p> 1,5% y 3,50%</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p>del valor comercial</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Ley 1964 de 2019</a><br>
                                                        <a href="">Ley 2128 de 2021</a>*
                                                    </span>
                                                </div>

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p>Descuento en el impuesto vehicular</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p>-40%</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p>en Bogotá por 5 años</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Acuerdo 780 de 2020</a>
                                                    </span>
                                                </div>


                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- collapse gas -->
                            <div class='panel panel-default'>
                                <div class='panel-heading' role='tab' id='heading_gas'>
                                    <h4 class='panel-title'>
                                        <a role='button' data-toggle='collapse' data-parent='#accordion_incecarga' href='#collapse_gas' aria-expanded='false' aria-controls='collapse_gas'>
                                            Gas natural dedicados
                                        </a>
                                    </h4>
                                </div>
                                <div id='collapse_gas' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_gas' aria-expanded='false'>
                                    <div class='panel-body'>
                                        <div class='box-gas'>

                                            <div class="items-incentivo">


                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p>Descuento en Arancel</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p>5%</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p>Gravamen arancelario del cinco por ciento</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Decreto 2051 de 2019</a>
                                                    </span>
                                                </div>

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p>IVA</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p>Exento</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p>del pago</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Ley 1819 de 2016</a>
                                                    </span>
                                                </div>

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p class="ph-summary">Impuesto vehicular</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p class="ph-summary">1%</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p class="ph-summary">maximo del valor comercial</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Ley 1964 de 2019</a><br>
                                                        <a href="">Ley 2128 de 2021</a>
                                                    </span>
                                                </div>

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p class="ph-summary">Beneficio en circulación</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p class="ph-summary">Exceptuados</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p class="ph-summary">aquellos que han sido diseñados y fabricados para operar exclusivamente con gas natural vehicular</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Decreto 840 de 2019 modificado por el Decreto Distrital 077 de 2020</a>
                                                    </span>
                                                </div>

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p class="ph-summary">SOAT</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p class="ph-summary">10%</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p class="ph-summary">de descuento</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Ley 1964 de 2019 - Ley 2128 de 2021</a>
                                                    </span>
                                                </div>

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p class="ph-summary">Revisión técnico mecánica</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p class="ph-summary">Exento</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p class="ph-summary">por 10 años</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Ley 1964 de 2019</a><br>
                                                        <a href="">Ley 2128 de 2021</a>
                                                    </span>
                                                </div>


                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- /#fin _incecarga -->

                    </div>
                </div>
                <div id="tab-carga-3" class="tab-pane fade">

                    <div class="cpnt cpnt-head cpnt-head-carga cpnt-head-carga-clave">
                        <h3 class="title title-type-2">Productos Clave</h3>
                        <p class="paragraph ph-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias odit incidunt aspernatur quae vel at earum neque rem suscipit nemo, sit consequuntur eum repellendus nisi id ex aliquam debitis delectus!</p>
                    </div>
                    <div class="cpnt cpnt-body">
                        <div class="group-data">
                            <h4 class="title title-type-3">Pirámide de tecnologías de cero y bajas emisiones para Bogotá región.</h4>
                            <p class="paragraph ph-1">A cargo de la Secretaría de Ambiente. Ante un escenario de tecnologías cambiantes y la adopción recurrente de estándares cada vez más exigentes, se evidencia la necesidad de establecer una homogenización conceptual que permita definir cuáles son las tecnologías, combustibles y/o estándares para que un vehículo pueda ser categorizado como de cero o de bajas emisiones, de acuerdo a su tipología vehicular.</p>
                            <img class="img-responsive w-100" src="/images/cybe/carga_2.png" alt="" title="">
                        </div>
                        <div class="group-data">
                            <h4 class="title title-type-3">Fondo Distrital para la Promoción del Ascenso Tecnológico <i>(Decreto Distrital 203 de 2023).</i></h4>
                            <p class="paragraph ph-1"> A cargo de la Secretaría de Ambiente. Se generarán incentivos para reducir los gases de efecto invernadero y de contaminantes atmosféricos del transporte urbano de carga de Bogotá.</p>
                            <img class="img-responsive w-100" src="/images/cybe/carga_1.png" alt="" title="">
                        </div>
                        <div class="group-data">
                            <h4 class="title title-type-3">Etiquetado Ambiental Vehícular <i>(Resolución 01545 de 2023).</i></h4>
                            <p class="paragraph ph-1">A cargo de la Secretaría de Ambiente. Es una herramienta eficaz para la evaluación y categorización de los vehículos, según su impacto ambiental en la calidad del aire y en las emisiones de gases de efecto invernadero - GEI, para ser utilizado dentro de la gestión de los programas y proyectos de reducción de emisiones contaminantes de la ciudad, así como herramientas de gestión de la movilidad, gestión de medidas de restricción y en la promoción de tecnologías de bajas y de cero emisiones. Es de carácter voluntario.</p>
                            <img class="img-responsive w-100" src="/images/cybe/carga_3.png" alt="" title="">
                        </div>
                        <div class="group-data">
                            <h4 class="title title-type-3">Proyectos de ciclologística.</h4>
                            <p class="paragraph ph-1">A cargo de la Secretaría de Movilidad, que ha adelantado una serie de pilotos con apoyo de organismos multilaterales para probar tecnologías y modelos de operación con bicicletas de carga electroasistidas y motocarros eléctricos, encontrando que los resultados obtenidos son el camino para la escabilidad de este modelo en el transporte de carga de último kilómetro con vehículos cero emisiones, pues facilitan la entrega de mercancía de forma rápida y eficiente.</p>
                            <p class="paragraph ph-1">Las tipologías vehiculares empleadas en estos proyectos, deberán ser cero emisiones y estar en línea con la normativa que el Gobierno Nacional expida al respecto, entre ellas, la Resolución 160 de 2017.</p>
                            <img class="img-responsive w-100" src="/images/cybe/carga_4.png" alt="" title="">
                        </div>
                        <div class="group-data">
                            <h4 class="title title-type-3">Restricciones de circulación con criterios ambientales.</h4>
                            <p class="paragraph ph-1">A cargo de la Secretaría de Movilidad. Son esquemas de restricción a la circulación de vehículos de carga, ya sea en corredores o zonas específicas que estén alineadas con el desarrollo de proyectos de mediana y gran escala proyectados para la ciudad; aportan a la organización y racionalización del tránsito del transporte de carga, y promueven la mejora en la calidad del aire de la ciudad.</p>
                            <img class="img-responsive w-100" src="/images/cybe/carga_5.png" alt="" title="">
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Bloque de información relacionada al segmento escolar     -->
        <div class="pills pills-3 pills-escolar">

            <ul class="nav nav-pills nav-justified">
                <li class="active"><a data-toggle="pill" href="#tab-escolar-1">Metas</a></li>
                <li><a data-toggle="pill" href="#tab-escolar-2">Incentivos</a></li>
                <li><a data-toggle="pill" href="#tab-escolar-3">Productos Clave</a></li>
            </ul>

            <div class="tab-content">
                <div id="tab-escolar-1" class="tab-pane fade in active">

                    <div class="cpnt cpnt-head cpnt-head-escolar cpnt-head-escolar-metas">
                        <h3 class="title title-type-2">Metas para la transición de vehículos de transporte escolar (segmentos M1 a M3)</h3>
                        <p class="paragraph ph-1">Se buscará la promoción de las tecnologías de cero emisiones para los vehículos que prestan servicio de transporte escolar, particularmente en las instituciones educativas públicas. Esto permitirá reflejar una mejora en las condiciones ambientales de la ciudad y reducirá las repercusiones en salud de miles de niños y niñas que diariamente se ven expuestos a la contaminación del aire en microambientes de transporte motorizado.</p>
                    </div>
                    <div class="cpnt cpnt-items cpnt-items-escolar">

                        <div class="item-metas item-metas-escolars">
                            <svg version="1.1" baseProfile="full" width="100" height="100" xmlns="/images/cybe/numbers/Bi1CircleFill.svg">
                                <circle cx="50" cy="50" r="40" fill="#1c2046" />
                                <text fill="#f5f5f5" font-size="45" font-family="Verdana" x="36" y="68">1</text>
                            </svg>
                            <p class="paragraph ph-1">El registro de estos vehículos será de cero y bajas emisiones para 2026.</p>
                        </div>
                        <div class="item-metas item-metas-escolars">
                            <svg version="1.1" baseProfile="full" width="100" height="100" xmlns="/images/cybe/numbers/Bi1CircleFill.svg">
                                <circle cx="50" cy="50" r="40" fill="#1c2046" />
                                <text fill="#f5f5f5" font-size="45" font-family="Verdana" x="36" y="68">2</text>
                            </svg>
                            <p class="paragraph ph-1">Se espera que para el año 2035, mayoritariamente, circulen en la ciudad vehículos escolares de cero emisiones.</p>
                        </div>

                    </div>
                </div>
                <div id="tab-escolar-2" class="tab-pane fade">

                    <div class="cpnt cpnt-head cpnt-head-escolar cpnt-head-escolar-incentivos">
                        <h3 class="title title-type-2">Incentivos para vehículos de transporte escolar</h3>
                        <p class="paragraph ph-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo doloremque blanditiis recusandae harum iusto quasi unde sequi nemo molestias exercitationem nam porro consectetur sint incidunt et atque quidem, quibusdam animi.</p>
                    </div>

                    <div class="cpnt cpnt-incentivos">

                        <!-- collapse_inceescolar -->
                        <div class='panel-group' id='accordion_inceescolar' role='tablist ' aria-multiselectable='true'>

                            <!-- collapse elecescolar -->
                            <div class='panel panel-default'>
                                <div class='panel-heading' role='tab' id='heading_elecescolar'>
                                    <h4 class='panel-title'>
                                        <a role='button' data-toggle='collapse' data-parent='#accordion_inceescolar' href='#collapse_elecescolar' aria-expanded='false' aria-controls='collapse_elecescolar'>
                                            Eléctrico
                                        </a>
                                    </h4>
                                </div>
                                <div id='collapse_elecescolar' class='panel-collapse collapse in' role='tabpanel' aria-labelledby='heading_elecescolar' aria-expanded='false'>
                                    <div class='panel-body'>
                                        <div class='box-elecescolar'>

                                            <div class="items-incentivo">

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p class="ph-summary">Descuento en Arancel</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p class="ph-summary">0%</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p class="ph-summary">Gravamen arancelario del cero por ciento</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Decreto 2051 de 2019</a>
                                                    </span>
                                                </div>

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p class="ph-summary">IVA</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p class="ph-summary">5%</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p class="ph-summary">Aplicación de tarifa del 5%</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Ley 1819 de 2016</a>
                                                    </span>
                                                </div>

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p class="ph-summary">Impuesto vehicular</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p class="ph-summary">1%</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p class="ph-summary">maximo del valor comercial</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Ley 1964 de 2019</a>
                                                    </span>
                                                </div>

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p class="ph-summary">Descuento en el impuesto vehicular</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p class="ph-summary">-60%</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p class="ph-summary">en Bogotá por 5 años</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Acuerdo 780 de 2020</a>
                                                    </span>
                                                </div>

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p class="ph-summary">SOAT</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p class="ph-summary">10%</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p class="ph-summary">de descuento</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Ley 1964 de 2019</a>
                                                    </span>
                                                </div>

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p class="ph-summary">Revisión técnico mecánica</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p class="ph-summary">30%</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p class="ph-summary">de descuento</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Ley 1964 de 2019</a>
                                                    </span>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <!-- /#fin _inceescolar -->

                    </div>
                </div>
                <div id="tab-escolar-3" class="tab-pane fade">

                    <div class="cpnt cpnt-head cpnt-head-escolar cpnt-head-escolar-clave">
                        <h3 class="title title-type-2">Productos Clave</h3>
                        <p class="paragraph ph-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias odit incidunt aspernatur quae vel at earum neque rem suscipit nemo, sit consequuntur eum repellendus nisi id ex aliquam debitis delectus!</p>
                    </div>
                    <div class="cpnt cpnt-body">
                        <div class="group-data">
                            <h4 class="title title-type-3">Estrategia de conocimiento en la movilidad escolar eléctrica.</h4>
                            <p class="paragraph ph-1">A cargo de las Secretarías de Movilidad y Ambiente. Se llevarán a cabo mediciones, estudios y sensibilización de las rutas escolares, los cuales permitirán recopilar insumos técnicos, operacionales y ambientales que permitirán fomentar el cambio a vehículos eléctricos en el sector escolar.</p>
                            <img class="img-responsive w-100" src="/images/cybe/escolar_1.png" alt="" title="">
                        </div>
                        <div class="group-data">
                            <h4 class="title title-type-3">Incentivos para vehículos cero y bajas emisiones en el transporte escolar.</h4>
                            <p class="paragraph ph-1">A cargo de la Secretaría de Educación. Se incorporarán incentivos en los procesos de contratación que adelante la Secretaría de Educación del Distrito.</p>
                            <img class="img-responsive w-100" src="/images/cybe/escolar_2.png" alt="" title="">
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Bloque de información relacionada al segmento oficial     -->
        <div class="pills pills-4 pills-oficial">

            <ul class="nav nav-pills nav-justified">
                <li class="active"><a data-toggle="pill" href="#tab-oficial-1">Metas</a></li>
                <li><a data-toggle="pill" href="#tab-oficial-2">Incentivos</a></li>
                <li><a data-toggle="pill" href="#tab-oficial-3">Productos Clave</a></li>
                <li><a data-toggle="pill" href="#tab-oficial-4">Recomendaciones</a></li>
            </ul>

            <div class="tab-content">
                <div id="tab-oficial-1" class="tab-pane fade in active">

                    <div class="cpnt cpnt-head cpnt-head-oficial cpnt-head-oficial-metas">
                        <h3 class="title title-type-2">Metas para la transición de la flota oficial (segmentos M1 y N1)</h3>
                        <p class="paragraph ph-1">Esta meta es de carácter estratégico para dinamizar el mercado de los vehículos de cero emisiones e impulsar el cambio de los demás segmentos de flota contemplados en esta política.</p>
                    </div>
                    <div class="cpnt cpnt-items cpnt-items-oficial">

                        <div class="item-metas item-metas-oficials">
                            <svg version="1.1" baseProfile="full" width="100" height="100" xmlns="/images/cybe/numbers/Bi1CircleFill.svg">
                                <circle cx="50" cy="50" r="40" fill="#1c2046" />
                                <text fill="#f5f5f5" font-size="45" font-family="Verdana" x="36" y="68">1</text>
                            </svg>
                            <p class="paragraph ph-1">A partir de 2023, el registro de vehículos oficiales (automóviles, camperos y camionetas) será exclusivamente de cero y bajas emisiones. </p>
                        </div>
                        <div class="item-metas item-metas-oficials">
                            <svg version="1.1" baseProfile="full" width="100" height="100" xmlns="/images/cybe/numbers/Bi1CircleFill.svg">
                                <circle cx="50" cy="50" r="40" fill="#1c2046" />
                                <text fill="#f5f5f5" font-size="45" font-family="Verdana" x="36" y="68">2</text>
                            </svg>
                            <p class="paragraph ph-1">Para el año 2030, únicamente se permitirá la circulación de vehículos oficiales de cero emisiones en la ciudad o zonas de alta contaminación.</p>
                        </div>

                    </div>
                </div>
                <div id="tab-oficial-2" class="tab-pane fade">

                    <div class="cpnt cpnt-head cpnt-head-oficial cpnt-head-oficial-incentivos">
                        <h3 class="title title-type-2">Incentivos para vehículos de la flota oficial</h3>
                        <p class="paragraph ph-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo doloremque blanditiis recusandae harum iusto quasi unde sequi nemo molestias exercitationem nam porro consectetur sint incidunt et atque quidem, quibusdam animi.</p>
                    </div>

                    <div class="cpnt cpnt-incentivos">

                        <!-- collapse_inceoficial -->
                        <div class='panel-group' id='accordion_inceoficial' role='tablist ' aria-multiselectable='true'>

                            <!-- collapse elecoficial -->
                            <div class='panel panel-default'>
                                <div class='panel-heading' role='tab' id='heading_elecoficial'>
                                    <h4 class='panel-title'>
                                        <a role='button' data-toggle='collapse' data-parent='#accordion_inceoficial' href='#collapse_elecoficial' aria-expanded='false' aria-controls='collapse_elecoficial'>
                                            Eléctrico
                                        </a>
                                    </h4>
                                </div>
                                <div id='collapse_elecoficial' class='panel-collapse collapse in' role='tabpanel' aria-labelledby='heading_elecoficial' aria-expanded='false'>
                                    <div class='panel-body'>
                                        <div class='box-elecoficial'>

                                            <div class="items-incentivo">

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p class="ph-summary">Descuento en Arancel</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p class="ph-summary">0%</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p class="ph-summary">Gravamen arancelario del cero por ciento</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Decreto 2051 de 2019</a>
                                                    </span>
                                                </div>

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p class="ph-summary">IVA</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p class="ph-summary">5%</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p class="ph-summary">Aplicación de tarifa del 5%</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Ley 1819 de 2016</a>
                                                    </span>
                                                </div>

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p class="ph-summary">Impuesto vehicular</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p class="ph-summary">1%</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p class="ph-summary">maximo del valor comercial</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Ley 1964 de 2019</a>
                                                    </span>
                                                </div>

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p class="ph-summary">Descuento en el impuesto vehicular</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p class="ph-summary">-60%</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p class="ph-summary">en Bogotá por 5 años</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Acuerdo 780 de 2020</a>
                                                    </span>
                                                </div>


                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p class="ph-summary">Beneficio en circulación</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p class="ph-summary">Exceptuados</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p class="ph-summary">de restricción de pico y placa en Bogotá</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Decreto 248 de 2016</a><br>
                                                        <a href="">Decreto 003 de 2023</a>
                                                    </span>
                                                </div>

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p class="ph-summary">Beneficio para estacionamiento</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p class="ph-summary">1</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p class="ph-summary">hora gratis de parqueo en vía en Bogotá</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Zona de parqueo pago</a>
                                                    </span>
                                                </div>

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p class="ph-summary">SOAT</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p class="ph-summary">10%</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p class="ph-summary">de descuento</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Ley 1964 de 2019</a>
                                                    </span>
                                                </div>

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p class="ph-summary">Revisión técnico mecánica</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p class="ph-summary">30%</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p class="ph-summary">de descuento</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Ley 1964 de 2019</a>
                                                    </span>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- collapse hibrioficial -->
                            <div class='panel panel-default'>
                                <div class='panel-heading' role='tab' id='heading_hibrioficial'>
                                    <h4 class='panel-title'>
                                        <a role='button' data-toggle='collapse' data-parent='#accordion_inceoficial' href='#collapse_hibrioficial' aria-expanded='false' aria-controls='collapse_hibrioficial'>
                                            Hibrido
                                        </a>
                                    </h4>
                                </div>
                                <div id='collapse_hibrioficial' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_hibrioficial' aria-expanded='false'>
                                    <div class='panel-body'>
                                        <div class='box-hibrioficial'>

                                            <div class="items-incentivo">


                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p>Descuento en Arancel</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p>5%</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p>Gravamen arancelario del cinco por ciento</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Decreto 2051 de 2019</a>
                                                    </span>
                                                </div>

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p>IVA</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p>5%</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p>Aplicación de tarifa del 5%</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Ley 1819 de 2016</a>
                                                    </span>
                                                </div>

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p>Impuesto vehicular entre</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p> 1,5% y 3,50%</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p>del valor comercial</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Ley 1964 de 2019</a>
                                                    </span>
                                                </div>

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p>Descuento en el impuesto vehicular</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p>-40%</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p>en Bogotá por 5 años</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Acuerdo 780 de 2020</a>
                                                    </span>
                                                </div>

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p>Beneficio en circulación</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p>Exceptuados</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p>de restricción de pico y placa en Bogotá</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Decreto 003 de 2023</a>
                                                    </span>
                                                </div>


                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>
                        <!-- /#fin _inceoficial -->

                    </div>
                </div>
                <div id="tab-oficial-3" class="tab-pane fade">

                    <div class="cpnt cpnt-head cpnt-head-oficial cpnt-head-oficial-clave">
                        <h3 class="title title-type-2">Productos Clave</h3>
                        <p class="paragraph ph-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias odit incidunt aspernatur quae vel at earum neque rem suscipit nemo, sit consequuntur eum repellendus nisi id ex aliquam debitis delectus!</p>
                    </div>
                    <div class="cpnt cpnt-body">
                        <div class="group-data">
                            <h4 class="title title-type-3">Actividades de promoción para la operación de vehículos de cero emisiones en las entidades del Distrito.</h4>
                            <p class="paragraph ph-1">A cargo de la Secretaría de Movilidad. Consiste en acompañar técnicamente a las personas líderes de los procesos de compra y contratación de las entidades de estas flotas, con el objetivo de facilitar la transición y romper los mitos o el desconocimiento que hay alrededor de estas tecnologías.</p>
                            <img class="img-responsive w-100" src="/images/cybe/oficial_1.png" alt="" title="">
                        </div>
                        <div class="group-data">
                            <h4 class="title title-type-3">Fomento de la flota oficial especializada de cero y bajas emisiones.</h4>
                            <p class="paragraph ph-1">A cargo de la Secretaría de Movilidad. Se llevarán a cabo estudios técnicos que faciliten la adquisición de estas tecnologías y permitan entender el potencial de ascenso tecnológico de los vehículos que tienen funciones especializadas como los camiones de bomberos, las ambulancias, la recolección de basuras, entre otros.</p>
                            <img class="img-responsive w-100" src="/images/cybe/oficial_2.png" alt="" title="">
                        </div>
                    </div>
                </div>
                <div id="tab-oficial-4" class="tab-pane fade">

                    <div class="cpnt cpnt-head cpnt-head-oficial cpnt-head-oficial-clave">
                        <h3 class="title title-type-2">Recomendaciones para la transición en el sector público</h3>
                        <p class="paragraph ph-1">Aquí se encuentran algunas de las acciones que pueden fomentar las Entidades para la transformación hacia una movilidad más eficiente.</p>
                    </div>
                    <div class="cpnt cpnt-body">
                        <div class="group-data">
                            <p class="paragraph ph-1">Optimizar del uso de Ios vehículos, mediante Ia implementación de medidas como:</p>
                            <ul>
                                <li>Promocionar la economía colaborativa (carro compartido).</li>
                                <li>Aumentar la ocupación vehicular.</li>
                                <li>Evaluar el tamaño actual de Ia flota vehicular con el fin de evitar que esta crezca innecesariamente.</li>
                                <li>Reducir el tamaño de los vehículos buscando que consuman menos combustible.</li>
                                <li>Reducir los tiempos muertos y de parqueo.</li>
                                <li>Evitar congestionar las vías aledañas.</li>
                            </ul>
                            <img class="img-responsive w-100" src="/images/cybe/oficial_3.png" alt="" title="">
                        </div>
                        <div class="group-data">
                            <p class="paragraph ph-1">Acciones con los funcionarios y colaboradores de las entidades:</p>
                            <ul>
                                <li>Establecer al interior de las entidades campañas para promover Ia conducción eficiente, Ia educación vial y Ia conducción segura de la bicicleta en los servidores públicos.</li>
                                <li>Disponer de canales o mecanismos de retroalimentación, mediante buzones de propuestas, ejercicios de co-creación y concursos de ideas para incentivar el uso de tecnologías limpias.</li>
                                <li>Incentivar el uso de medios alternativos como la bicicleta, patineta, caminata y otras alternativas de movilidad sostenible entre sus colaboradores y directivos, en articulación con el Plan Integral de Movilidad Sostenible de la entidad.</li>
                            </ul>
                            <img class="img-responsive w-100" src="/images/cybe/oficial_4.png" alt="" title="">
                        </div>
                        <div class="group-data">
                            <p class="paragraph ph-1">Y para impulsar el reemplazo tecnológico de vehículos oficiales a través de los procesos de contratación o adquisición:</p>
                            <ul>
                                <li>Vincular al sector privado en la generación de incentivos a las entidades y a los colaboradores (tasas diferenciales, seguros, mayor oferta, etc).</li>
                                <li>Explorar y promover esquemas de compra conjunta para aprovechar economías de escala.</li>
                                <li>Divulgar las mejores prácticas y resultados obtenidos por entidades que iniciaron la transición hacia tecnologías vehiculares de cero emisiones.</li>
                                <li>Promover la instalación de cargadores de vehículos eléctricos en entidades distritales.</li>
                                <li>Adelantar procesos de selección destinados a la adquisición o contratación en cualquier modalidad de vehículos de uso de las entidades que incentiven el uso de tecnologías de bajas y cero emisiones.</li>
                            </ul>
                            <img class="img-responsive w-100" src="/images/cybe/oficial_5.png" alt="" title="">
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Bloque de información relacionada al segmento publico     -->
        <div class="pills pills-5 pills-publico">

            <ul class="nav nav-pills nav-justified">
                <li class="active"><a data-toggle="pill" href="#tab-publico-1">Metas</a></li>
                <li><a data-toggle="pill" href="#tab-publico-3">Productos Clave</a></li>
                <li><a data-toggle="pill" href="#tab-publico-4">Rutas Eléctricas</a></li>
            </ul>

            <div class="tab-content">
                <div id="tab-publico-1" class="tab-pane fade in active">

                    <div class="cpnt cpnt-head cpnt-head-publico cpnt-head-publico-metas">
                        <h3 class="title title-type-2">Metas para la transición del transporte público (segmentos M2 y M3)</h3>
                        <p class="paragraph ph-1">Los vehículos del sistema integrado de transporte público - SITP, ya empezaron su transición hacia la movilidad de cero y bajas emisiones. De los 10.984 vehículos que conforman la flota, 1.485 son eléctricos, que corresponde al 13,5 % de la flota (Fuente: Transmilenio octubre de 2023).</p>
                    </div>
                    <div class="cpnt cpnt-items cpnt-items-publico">

                        <div class="item-metas item-metas-publicos">
                            <svg version="1.1" baseProfile="full" width="100" height="100" xmlns="/images/cybe/numbers/Bi1CircleFill.svg">
                                <circle cx="50" cy="50" r="40" fill="#1c2046" />
                                <text fill="#f5f5f5" font-size="45" font-family="Verdana" x="36" y="68">1</text>
                            </svg>
                            <p class="paragraph ph-1">En 2023, todos los buses nuevos contratados del SITP serán 100 % cero emisiones.</p>
                        </div>
                        <div class="item-metas item-metas-publicos">
                            <svg version="1.1" baseProfile="full" width="100" height="100" xmlns="/images/cybe/numbers/Bi1CircleFill.svg">
                                <circle cx="50" cy="50" r="40" fill="#1c2046" />
                                <text fill="#f5f5f5" font-size="45" font-family="Verdana" x="36" y="68">2</text>
                            </svg>
                            <p class="paragraph ph-1">A 2039, toda la flota del SITP será cero emisiones.</p>
                        </div>

                    </div>
                </div>

                <div id="tab-publico-3" class="tab-pane fade">

                    <div class="cpnt cpnt-head cpnt-head-publico cpnt-head-publico-clave">
                        <h3 class="title title-type-2">Productos clave para lograr la transición del Sistema Integrado de Transporte Público</h3>
                        <p class="paragraph ph-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias odit incidunt aspernatur quae vel at earum neque rem suscipit nemo, sit consequuntur eum repellendus nisi id ex aliquam debitis delectus!</p>
                    </div>
                    <div class="cpnt cpnt-body">
                        <div class="group-data">
                            <h4 class="title title-type-3">Reposición y renovación por flota de cero emisiones.</h4>
                            <p class="paragraph ph-1">A cargo de Transmilenio. Se buscará que dentro de los nuevos contratos para la vinculación de la flota del sistema sean vehículos de tecnologías de cero emisiones.</p>
                            <img class="img-responsive w-100" src="/images/cybe/publico_2.png" alt="" title="">
                        </div>

                    </div>
                </div>
                <div id="tab-publico-4" class="tab-pane fade">

                    <div class="cpnt cpnt-head cpnt-head-publico cpnt-head-publico-clave">
                        <h3 class="title title-type-2">Rutas eléctricas</h3>
                        <p class="paragraph ph-1">Bogotá cuenta con 1.485 buses eléctricos en el sistema integrado de transporte público - SITP con tecnología eléctrica, siendo una de las flotas más grandes de la región. Estas son las rutas de transporte público de cero emisiones que ya circulan en la ciudad.</p>
                    </div>
                    <div class="cpnt cpnt-body">
                        <div class="group-data">
                            <div class="embed-container">
                                <iframe width="940px" height="620px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" title="Información eléctrica del sistema" src="https://movilidadbogota.maps.arcgis.com/apps/instant/interactivelegend/index.html?appid=b6bdb3be323f48acaf9486e6b3b9b573"></iframe>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

        </div>

        <!-- Bloque de información relacionada al segmento taxi     -->
        <div class="pills pills-6 pills-taxi">

            <ul class="nav nav-pills nav-justified">
                <li class="active"><a data-toggle="pill" href="#tab-taxi-1">Metas</a></li>
                <li><a data-toggle="pill" href="#tab-taxi-2">Incentivos</a></li>
                <li><a data-toggle="pill" href="#tab-taxi-3">Productos Clave</a></li>
            </ul>

            <div class="tab-content">
                <div id="tab-taxi-1" class="tab-pane fade in active">

                    <div class="cpnt cpnt-head cpnt-head-taxi cpnt-head-taxi-metas">
                        <h3 class="title title-type-2">Metas para la transición de la flota de taxis (segmentos M1 y N1)</h3>
                        <p class="paragraph ph-1">El servicio de taxi presenta unas características de operación exigentes, que fácilmente sobrepasan los 200 kilómetros de rodamiento diario por vehículo, por lo cual, la implementación de tecnologías de motorización de cero emisiones, es muy apropiada dada su alta exigencia y los nuevos desarrollos en este campo.</p>
                    </div>
                    <div class="cpnt cpnt-items cpnt-items-taxi">

                        <div class="item-metas item-metas-taxis">
                            <svg version="1.1" baseProfile="full" width="100" height="100" xmlns="/images/cybe/numbers/Bi1CircleFill.svg">
                                <circle cx="50" cy="50" r="40" fill="#1c2046" />
                                <text fill="#f5f5f5" font-size="45" font-family="Verdana" x="36" y="68">1</text>
                            </svg>
                            <p class="paragraph ph-1">A partir de 2026, el registro de taxis será exclusivamente de cero emisiones. </p>
                        </div>
                        <div class="item-metas item-metas-taxis">
                            <svg version="1.1" baseProfile="full" width="100" height="100" xmlns="/images/cybe/numbers/Bi1CircleFill.svg">
                                <circle cx="50" cy="50" r="40" fill="#1c2046" />
                                <text fill="#f5f5f5" font-size="45" font-family="Verdana" x="36" y="68">2</text>
                            </svg>
                            <p class="paragraph ph-1">Para el año 2035, únicamente circularán en la ciudad taxis de cero emisiones.</p>
                        </div>

                    </div>
                </div>

                <div id="tab-taxi-2" class="tab-pane fade">

                    <div class="cpnt cpnt-head cpnt-head-taxi cpnt-head-taxi-incentivos">
                        <h3 class="title title-type-2">Incentivos para taxis</h3>
                        <p class="paragraph ph-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum magnam eaque, mollitia laudantium neque nostrum a expedita illum corporis dolore tempora recusandae? Ipsum voluptatum dolore quae sunt autem corporis hic.</p>
                    </div>

                    <div class="cpnt cpnt-items cpnt-incentivos">

                        <!-- collapse_incetaxi -->
                        <div class='panel-group' id='accordion_incetaxi' role='tablist ' aria-multiselectable='true'>

                            <!-- collapse electaxi -->
                            <div class='panel panel-default'>
                                <div class='panel-heading' role='tab' id='heading_electaxi'>
                                    <h4 class='panel-title'>
                                        <a role='button' data-toggle='collapse' data-parent='#accordion_incetaxi' href='#collapse_electaxi' aria-expanded='false' aria-controls='collapse_electaxi'>
                                            Eléctrico
                                        </a>
                                    </h4>
                                </div>
                                <div id='collapse_electaxi' class='panel-collapse collapse in' role='tabpanel' aria-labelledby='heading_electaxi' aria-expanded='false'>
                                    <div class='panel-body'>
                                        <div class='box-electaxi'>

                                            <div class="items-incentivo">

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p class="ph-summary">Descuento en Arancel</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p class="ph-summary">0%</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p class="ph-summary">Gravamen arancelario del cero por ciento</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Decreto 2051 de 2019</a>
                                                    </span>
                                                </div>

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p class="ph-summary">IVA</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p class="ph-summary">5%</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p class="ph-summary">Aplicación de tarifa del 5%</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Ley 1819 de 2016</a>
                                                    </span>
                                                </div>

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p class="ph-summary">Impuesto vehicular</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p class="ph-summary">1%</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p class="ph-summary">maximo del valor comercial</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Ley 1964 de 2019</a>
                                                    </span>
                                                </div>

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p class="ph-summary">Descuento en el impuesto vehicular</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p class="ph-summary">-70%</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p class="ph-summary">en Bogotá por 5 años</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Acuerdo 780 de 2020</a>
                                                    </span>
                                                </div>

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p class="ph-summary">Beneficio en circulación</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p class="ph-summary">Exceptuados</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p class="ph-summary">de restricción de pico y placa en Bogotá</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Decreto 660 de 2001</a><br>
                                                        <a href="">Decreto 475 de 2019</a>
                                                    </span>
                                                </div>

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p class="ph-summary">Beneficio de excepción</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p class="ph-summary">No paga</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p class="ph-summary">por acceso al circuito de terminal de transporte salitre</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Distrito</a>
                                                    </span>
                                                </div>

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p class="ph-summary">Beneficio para estacionamiento</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p class="ph-summary">1</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p class="ph-summary">hora gratis de parqueo en vía en Bogotá</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Zona de parqueo pago</a>
                                                    </span>
                                                </div>

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p class="ph-summary">SOAT</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p class="ph-summary">10%</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p class="ph-summary">de descuento</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Ley 1964 de 2019</a>
                                                    </span>
                                                </div>

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p class="ph-summary">Revisión técnico mecánica</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p class="ph-summary">30%</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p class="ph-summary">de descuento</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Ley 1964 de 2019</a>
                                                    </span>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <div id="tab-taxi-3" class="tab-pane fade">

                    <div class="cpnt cpnt-head cpnt-head-taxi cpnt-head-taxi-clave">
                        <h3 class="title title-type-2">Productos clave</h3>
                        <p class="paragraph ph-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias odit incidunt aspernatur quae vel at earum neque rem suscipit nemo, sit consequuntur eum repellendus nisi id ex aliquam debitis delectus!</p>
                    </div>
                    <div class="cpnt cpnt-body">
                        <div class="group-data">
                            <h4 class="title title-type-3">Desincentivos tributarios para los taxis más antiguos.</h4>
                            <p class="paragraph ph-1">A cargo de la Secretaría de Movilidad. Se busca generar acciones para motivar el cambio de esta flota hacia tecnologías cero emisiones, que apunten a la mejora del servicio.</p>
                            <img class="img-responsive w-100" src="/images/cybe/taxi_1.png" alt="" title="">
                        </div>
                        <div class="group-data">
                            <h4 class="title title-type-3">Fondo de renovación de taxis por tecnologías cero emisiones.</h4>
                            <p class="paragraph ph-1">A cargo de la Secretaría de Movilidad Se implementarán acciones que faciliten el acceso a financiamiento de esta población objetivo.</p>
                            <img class="img-responsive w-100" src="/images/cybe/taxi_2.png" alt="" title="">
                        </div>
                        <div class="group-data">
                            <h4 class="title title-type-3">Restricciones de circulación con criterios ambientales.</h4>
                            <p class="paragraph ph-1">A cargo de la Secretaría de Movilidad. Se pondrán en marcha acciones sobre la circulación de los taxis, en especial para los más contaminantes; al mismo tiempo que se constituyan como incentivos diferenciales para los vehículos taxis de tecnologías cero emisiones. Las restricciones en circulación deberán apuntar a la meta de circulación de vehículos taxi de cero emisiones en 2035.</p>
                            <img class="img-responsive w-100" src="/images/cybe/taxi_3.png" alt="" title="">
                        </div>
                        <div class="group-data">
                            <h4 class="title title-type-3">Zonas amarillas preferenciales para taxis cero emisiones.</h4>
                            <p class="paragraph ph-1">A cargo de la Secretaría de Movilidad. Se localizarán lugares exclusivos para la recarga de los vehículos taxis, que también funcionarán como espacios de parqueo.</p>
                            <img class="img-responsive w-100" src="/images/cybe/taxi_4.png" alt="" title="">
                        </div>

                    </div>
                </div>

            </div>

        </div>

    </div>
</div>
<!-- Fin Set -->


<script>
    const datos = "";

    document.getElementById('select-obj').addEventListener('change', function() {
        id = document.getElementById('select-obj').selectedIndex;
        cargarDatos(id);

    });

    function cargarDatos(id) {


        let validacion = document.querySelector('.visible');
        if (validacion) {
            validacion.classList.remove('visible');
        }

        let he = document.querySelector('.obj .b1');
        he.classList.add('active');
        let bx;
        bx = document.querySelector(`.pills-${id}`);
        bx.classList.add('visible');

    }
</script>
