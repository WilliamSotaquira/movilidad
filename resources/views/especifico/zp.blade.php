@extends('welcome')
@section('title', 'zp')
@section('contenido')

    <!-- Set zp -->
    <div class="set-wrapper zp box-summary-2">

        <style>
            .box-summary-2 .cmpnt-tabpills-2 {
                display: grid;
                gap: 8px;
                grid-auto-flow: dense;
                grid-template-columns: 1fr;
                grid-template-rows: auto;

            }

            .selected {
                position: relative !important;
                visibility: visible !important;
                transition: ease-out 0.5s all !important;
            }


            @media(min-width:768px) {
                .box-summary-2 .cmpnt-tabpills-2 {
                    grid-template-columns: 25% 75%;

                }
            }
        </style>
        <div class="cmpnt-tabpills cmpnt-tabpills-2">

            <style>
                .box-summary-2 .select-collapse-2 {
                    visibility: visible;
                    position: relative;
                }

                @media(min-width:768px) {
                    .box-summary-2 .select-collapse-2 {
                        visibility: hidden;
                        position: absolute;
                    }
                }

                .box-summary-2 .select-collapse-2 p {
                    font-family: 'Montserrat', sans-serif;
                    font-size: 16px;
                    font-weight: 500;
                    text-align: left;
                    line-height: 1.5;
                    color: #00000099;
                    padding-left: 12px;
                    padding-bottom: 12px
                }
            </style>
            <div class="select-collapse select-collapse-2">
                <p>Seleccione de la siguiente lista despleglable una opción:</p>
                <select name="select-2" id="select-2" class="form-control" onchange="Selected();">
                    <option value="1">Centros de servicios</option>
                    <option value="2">Patios</option>
                    <option value="3">Sedes administrativas</option>
                    <option value="4">Centros locales de movilidad</option>
                    <option value="5">Ventanillas de movilidad</option>
                </select>
            </div>

            <style>
                .cmpnt-tabpills-2 .tabs-collapse-2 {
                    visibility: hidden;
                    position: absolute;

                }

                @media(min-width:768px) {
                    .box-summary-2 .tabs-collapse-2 {
                        visibility: visible;
                        position: relative;
                        display: grid;
                        gap: 8px;
                        grid-auto-flow: dense;
                        grid-template-columns: 1fr;
                        grid-template-rows: auto;
                        align-content: baseline;
                    }
                }

                .cmpnt-tabpills-2 .tabs-collapse-2 .push {
                    padding: 12px;
                    border-radius: 8px;
                    background-color: #efefef;
                    display: flex;
                    flex-direction: column;
                    justify-content: center;
                }

                .cmpnt-tabpills-2 .tabs-collapse-2 .push-tabpills-2 {
                    font-family: montserrat, sans-serif;
                    background-color: #efefef !important;
                    border-color: #efefef;
                    font-weight: 500;
                    padding-left: 17px;
                    font-weight: 700;
                    padding-left: 40px
                }

                #push_1::before {
                    content: "";
                    position: absolute;
                    padding: 8px;
                    margin-right: 5px;
                    margin-left: -22px;
                    background: url('/images/puntos/mini/maps_a.png');
                    background-size: contain;
                    background-repeat: no-repeat;
                    background-position: center;
                }

                #push_1:hover::before {
                    background: url('/images/puntos/mini/maps_v.png');
                    background-size: contain;
                    background-repeat: no-repeat;
                    background-position: center;
                }

                #push_2::before {
                    content: "";
                    position: absolute;
                    padding: 8px;
                    margin-right: 5px;
                    margin-left: -22px;
                    background: url('/images/puntos/mini/car_a.png');
                    background-size: contain;
                    background-repeat: no-repeat;
                    background-position: center;
                }

                #push_2:hover::before {
                    background: url('/images/puntos/mini/car_v.png');
                    background-size: contain;
                    background-repeat: no-repeat;
                    background-position: center;
                }

                #push_3::before {
                    content: "";
                    position: absolute;
                    padding: 8px;
                    margin-right: 5px;
                    margin-left: -22px;
                    background: url('/images/puntos/mini/building_a.png');
                    background-size: contain;
                    background-repeat: no-repeat;
                    background-position: center;
                }

                #push_3:hover::before {
                    background: url('/images/puntos/mini/building_v.png');
                    background-size: contain;
                    background-repeat: no-repeat;
                    background-position: center;
                }

                #push_4::before {
                    content: "";
                    position: absolute;
                    padding: 8px;
                    margin-right: 5px;
                    margin-left: -22px;
                    background: url('/images/puntos/mini/checklist_a.png');
                    background-size: contain;
                    background-repeat: no-repeat;
                    background-position: center;
                }

                #push_4:hover::before {
                    background: url('/images/puntos/mini/checklist_v.png');
                    background-size: contain;
                    background-repeat: no-repeat;
                    background-position: center;
                }

                #push_5::before {
                    content: "";
                    position: absolute;
                    padding: 8px;
                    margin-right: 5px;
                    margin-left: -22px;
                    background: url('/images/puntos/mini/service_a.png');
                    background-size: contain;
                    background-repeat: no-repeat;
                    background-position: center;
                }

                #push_5:hover::before {
                    background: url('/images/puntos/mini/service_v.png');
                    background-size: contain;
                    background-repeat: no-repeat;
                    background-position: center;
                }


                .tabs-collapse-2 .push:focus-visible {
                    background-color: #efefef !important;
                }

                .tabs-collapse-2 .push:hover {
                    background-color: #191C3A !important;
                    color: #fff;
                    font-weight: 700;
                }

                .tabs-collapse-2 .push:active {
                    background-color: #191C3A90 !important;
                    color: #66E026
                }

                .tabs-collapse-2 .push:focus {
                    background-color: #191C3A !important;
                    color: #66E026;
                    outline: #191C3A auto 1px !important;
                    font-weight: 600;

                }
            </style>
            <div class="tabs-collapse tabs-collapse-2">
                <a class="push push-tabpills-2"id="push_1" data-tab="1">Centros de servicios</a>
                <a class="push push-tabpills-2"id="push_2" data-tab="2">Patios</a>
                <a class="push push-tabpills-2"id="push_3" data-tab="3">Sedes administrativas</a>
                <a class="push push-tabpills-2"id="push_4" data-tab="4">Centros locales de movilidad</a>
                <a class="push push-tabpills-2"id="push_5" data-tab="5">Ventanillas de movilidad</a>
            </div>

            <style>
                .cmpnt-tabpills-2 .content-collapse-2 {
                    border-radius: 8px;
                    border: solid 1px #efefef;
                    background-color: #fff;
                }

                @media(min-width:768px) {
                    .cmpnt-tabpills-2 .content-collapse-2 {
                        padding: 32px;
                    }
                }

                .content-collapse-2 .summary-collapse {
                    position: absolute;
                    visibility: hidden;
                    transition: all 3 ease;
                }
            </style>
            <div class="content-collapse content-collapse-2">
                <div class="summary-collapse summary-collapse-1">
                    <div class="box-items">

                        <div class="boxes">
                            <div class="item item-title span-3">
                                <p><strong>Centro de Servicios de Movilidad - Calle 13</strong></p>
                            </div>
                            <div class="item">
                                <p><b>Dirección:</b></p>
                                <p><a href="https://maps.app.goo.gl/jcvxRhuBeXSYSu5H8">Calle 13 # 37 - 35 </a>
                                </p>
                                <p>Bogotá - Colombia</p>
                            </div>
                            <div class="item">
                                <p><b>Punto de atención:</b></p>
                                <p>Lunes a viernes 7:00&nbsp;a.m a 6:00&nbsp;p.m.</p>
                                <p>Sábado 08:00&nbsp;a.m. a 12:00&nbsp;m</p>
                            </div>
                            <div class="item">
                                <p><b>Radicación Presencial:</b></p>
                                <p>Lunes a Viernes:&nbsp;7:00&nbsp;a.m. a 5:00&nbsp;p.m.</p>
                                <p><a href="https://www.movilidadbogota.gov.co/radicacionwebsdm/formulario.php">Formulario
                                        Radicación de correspondencia</a></p>
                            </div>
                        </div>

                        <div class="boxes">
                            <div class="item item-title span-3">
                                <p><strong>Centro de Servicios de Movilidad - Paloquemao</strong></p>
                            </div>
                            <div class="item">
                                <p><b>Dirección:</b></p>
                                <p><a href="https://maps.app.goo.gl/JmkpBQXuDmzxeo9eA">Cra 28 A # 17 A 20</a>
                                </p>
                                <p>Bogotá - Colombia</p>
                            </div>
                            <div class="item">
                                <p><b>Punto de atención:</b></p>
                                <p>Lunes a viernes 8:00&nbsp;a.m. a 5:00&nbsp;p.m.</p>
                            </div>
                            <div class="item">
                                <p><b>Radicación Presencial:</b></p>
                                <p>unes a Viernes:&nbsp;7:00&nbsp;a.m. a 5:00&nbsp;p.m.</p>
                                <p><a href="https://www.movilidadbogota.gov.co/radicacionwebsdm/formulario.php">Formulario
                                        Radicación de correspondencia</a></p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="summary-collapse summary-collapse-2">
                    <div class="box-items">

                        <div class="boxes">
                            <div class="item item-title span-3">
                                <p><strong>Alamos 200</strong></p>
                            </div>
                            <div class="item">
                                <p><b>Dirección:</b></p>
                                <p><a href="https://maps.app.goo.gl/3HF7UBsHY2sQ8Bf29">Transversal 93 # 52- 03.
                                        Entrada Alámos</a></p>
                                <p>Bogotá - Colombia</p>
                            </div>
                            <div class="item span-2">
                                <p><b>Punto de atención:</b></p>
                                <p>Lunes a viernes 7:00&nbsp;a.m a 7:00&nbsp;p.m.</p>
                                <p>Sábado 08:00&nbsp;a.m. a 1:00&nbsp;p.m.</p>
                                <p>Para trámites de vehículos inmovilizados hasta junio de 2019</p>
                            </div>
                        </div>

                        <div class="boxes">
                            <div class="item item-title span-3">
                                <p><strong>Fontibón Público</strong></p>
                            </div>
                            <div class="item">
                                <p><b>Dirección:</b></p>
                                <p><a href="https://maps.app.goo.gl/SykWWtT9FLb7mWiD9">Calle 17 # 90 - 90</a>
                                </p>
                                <p>Bogotá - Colombia</p>
                            </div>
                            <div class="item span-2">
                                <p><b>Punto de atención:</b></p>
                                <p>Lunes a viernes 7:00&nbsp;a.m a 7:00&nbsp;p.m.</p>
                                <p>Sábado 08:00&nbsp;a.m. a 1:00&nbsp;p.m.</p>
                                <p>Para trámites de vehículos inmovilizados hasta junio de 2019</p>
                            </div>
                        </div>

                        <div class="boxes">
                            <div class="item item-title span-3">
                                <p><strong>Alamos 201</strong></p>
                            </div>
                            <div class="item">
                                <p><b>Dirección:</b></p>
                                <p><a href="https://maps.app.goo.gl/KmYbUykVrvsG8Tq9A">Calle 51 # 93 - 33</a>
                                </p>
                                <p>Bogotá - Colombia</p>
                            </div>
                            <div class="item span-2">
                                <p><b>Punto de atención:</b></p>
                                <p>Lunes a viernes 7:00&nbsp;a.m a 7:00&nbsp;p.m.</p>
                                <p>Sábado 08:00&nbsp;a.m. a 1:00&nbsp;p.m.</p>
                                <p>Para trámites de vehículos inmovilizados hasta junio de 2019</p>
                            </div>
                        </div>

                        <div class="boxes">
                            <div class="item item-title span-3">
                                <p><strong>Transitorio</strong></p>
                            </div>
                            <div class="item">
                                <p><b>Dirección:</b></p>
                                <p><a href="https://maps.app.goo.gl/upv6ZvKuL5HJEy48A">Av. calle 63 # 94 -
                                        51</a>
                                </p>
                                <p>Bogotá - Colombia</p>
                            </div>
                            <div class="item span-2">
                                <p><b>Punto de atención:</b></p>
                                <p>Lunes a viernes 7:00&nbsp;a.m a 7:00&nbsp;p.m.</p>
                                <p>Sábado 08:00&nbsp;a.m. a 1:00&nbsp;p.m.</p>
                                <p>Para trámites de vehículos inmovilizados hasta junio de 2019</p>
                            </div>
                        </div>

                        <div class="boxes">
                            <div class="item item-title span-3">
                                <p><strong>Fontibon Propio</strong></p>
                            </div>
                            <div class="item">
                                <p><b>Dirección:</b></p>
                                <p><a href="https://maps.app.goo.gl/7B8MRCWLYZFtiWiJ6">Calle 17 # 123b - 10</a>
                                </p>
                                <p>Bogotá - Colombia</p>
                            </div>
                            <div class="item span-2">
                                <p><b>Punto de atención:</b></p>
                                <p>Lunes a viernes 7:00&nbsp;a.m a 7:00&nbsp;p.m.</p>
                                <p>Sábado 08:00&nbsp;a.m. a 1:00&nbsp;p.m.</p>
                                <p>Para trámites de vehículos inmovilizados hasta junio de 2019</p>
                            </div>
                        </div>

                        <div class="boxes">
                            <div class="item item-title span-3">
                                <p><strong>Suba</strong></p>
                            </div>
                            <div class="item">
                                <p><b>Dirección:</b></p>
                                <p><a href="https://maps.app.goo.gl/2CKoqz4HFScxnfqw5">Cra 104F # 128C - 09</a>
                                </p>
                                <p>Bogotá - Colombia</p>
                            </div>
                            <div class="item span-2">
                                <p><b>Punto de atención:</b></p>
                                <p>Lunes a viernes 7:00&nbsp;a.m a 7:00&nbsp;p.m.</p>
                                <p>Sábado 08:00&nbsp;a.m. a 1:00&nbsp;p.m.</p>
                                <p>Para trámites de vehículos inmovilizados hasta junio de 2019</p>
                            </div>
                        </div>

                        <div class="boxes">
                            <div class="item item-title span-3">
                                <p><strong>Patio 50 Puente Aranda</strong></p>
                            </div>
                            <div class="item">
                                <p><b>Dirección:</b></p>
                                <p><a href="https://maps.app.goo.gl/xvGRao81gw4UmWHq5">Calle 19 # 50 - 50</a>
                                </p>
                                <p>Bogotá - Colombia</p>
                            </div>
                            <div class="item span-2">
                                <p><b>Punto de atención:</b></p>
                                <p>Lunes a viernes 7:00&nbsp;a.m a 7:00&nbsp;p.m.</p>
                                <p>Sábado 08:00&nbsp;a.m. a 1:00&nbsp;p.m.</p>
                                <p>Para trámites de vehículos inmovilizados hasta junio de 2019</p>
                            </div>
                        </div>

                        <div class="boxes">
                            <div class="item item-title span-3">
                                <p><strong>Mutis</strong></p>
                            </div>
                            <div class="item">
                                <p><b>Dirección:</b></p>
                                <p><a>Calle 64 # 94 - 91</a></p>
                                <p>Bogotá - Colombia</p>
                            </div>
                            <div class="item span-2">
                                <p><b>Punto de atención:</b></p>
                                <p>Lunes a viernes 7:00&nbsp;a.m a 7:00&nbsp;p.m.</p>
                                <p>Sábado 08:00&nbsp;a.m. a 1:00&nbsp;p.m.</p>
                                <p>Para trámites de vehículos inmovilizados hasta junio de 2019</p>
                            </div>
                        </div>

                        <div class="boxes">
                            <div class="item item-title span-3">
                                <p><strong>Patio sur</strong></p>
                            </div>
                            <div class="item">
                                <p><b>Dirección:</b></p>
                                <p><a>Calle 57R # 75D - 11</a></p>
                                <p>Bogotá - Colombia</p>
                            </div>
                            <div class="item span-2">
                                <p><b>Punto de atención:</b></p>
                                <p>Lunes a viernes 7:00&nbsp;a.m a 7:00&nbsp;p.m.</p>
                                <p>Sábado 08:00&nbsp;a.m. a 1:00&nbsp;p.m.</p>
                                <p>Para trámites de vehículos inmovilizados hasta junio de 2019</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="summary-collapse summary-collapse-3">
                    <div class="box-items">

                        <div class="boxes">
                            <div class="item item-title span-3">
                                <p><strong>Sede Administrativa Secretaría Distrital de Movilidad Calle
                                        13</strong>
                                </p>
                            </div>
                            <div class="item">
                                <p><b>Dirección:</b></p>
                                <p><a href="https://maps.app.goo.gl/jcvxRhuBeXSYSu5H8">Calle 13 # 37 - 35 </a>
                                </p>
                                <p>Bogotá - Colombia</p>
                            </div>
                            <div class="item">
                                <p><b>Punto de atención:</b></p>
                                <p>Lunes a viernes 7:00&nbsp;a.m a 6:00&nbsp;p.m.</p>
                                <p>Sábado 08:00&nbsp;a.m. a 12:00&nbsp;m</p>
                            </div>
                            <div class="item">
                                <p><b>Radicación Presencial:</b></p>
                                <p>Lunes a Viernes:&nbsp;7:00&nbsp;a.m. a 5:00&nbsp;p.m.</p>
                                <p><a href="https://www.movilidadbogota.gov.co/radicacionwebsdm/formulario.php">Formulario
                                        Radicación de correspondencia</a></p>
                            </div>
                        </div>

                        <div class="boxes">
                            <div class="item item-title span-3">
                                <p><strong>Centro de Servicios de Movilidad - Paloquemao</strong></p>
                            </div>
                            <div class="item">
                                <p><b>Dirección:</b></p>
                                <p><a href="https://maps.app.goo.gl/JmkpBQXuDmzxeo9eA">Cra 28 A # 17 A 20</a>
                                </p>
                                <p>Bogotá - Colombia</p>
                            </div>
                            <div class="item">
                                <p><b>Punto de atención:</b></p>
                                <p>Lunes a viernes 8:00&nbsp;a.m. a 5:00&nbsp;p.m.</p>
                            </div>
                            <div class="item">
                                <p><b>Radicación Presencial:</b></p>
                                <p>unes a Viernes:&nbsp;7:00&nbsp;a.m. a 5:00&nbsp;p.m.</p>
                                <p><a href="https://www.movilidadbogota.gov.co/radicacionwebsdm/formulario.php">Formulario
                                        Radicación de correspondencia</a></p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="summary-collapse summary-collapse-4">
                    <div class="box-items">

                        <div class="boxes">
                            <div class="item item-title span-3">
                                <p><strong>Usaquén</strong></p>
                            </div>
                            <div class="item">
                                <p><b>Dirección:</b></p>
                                <p><a href="https://maps.app.goo.gl/rLE1tSXogpdLvnkL7">Cl 120a No 7 - 55
                                        Antigua
                                        JAL</a></p>
                                <p>Bogotá - Colombia</p>
                            </div>
                            <div class="item span-2">
                                <p><b>Correo:</b></p>
                                <a href="mailto:clusaquen@movilidadbogota.gov.co">clusaquen@movilidadbogota.gov.co</a>
                            </div>
                        </div>
                        <div class="boxes">
                            <div class="item item-title span-3">
                                <p><strong>Chapinero</strong></p>
                            </div>
                            <div class="item">
                                <p><b>Dirección:</b></p>
                                <p><a href="https://maps.app.goo.gl/uGE3M14ghQRgqcqc8">Cr 13 No 54 -74 Alcaldia
                                        Local Chapinero 1 Piso</a></p>
                                <p>Bogotá - Colombia</p>
                            </div>
                            <div class="item span-2">
                                <p><b>Correo:</b></p>
                                <a href="mailto:clchapinero@movilidadbogota.gov.co">clchapinero@movilidadbogota.gov.co</a>
                            </div>
                        </div>
                        <div class="boxes">
                            <div class="item item-title span-3">
                                <p><strong>Santa Fe</strong></p>
                            </div>
                            <div class="item">
                                <p><b>Dirección:</b></p>
                                <p><a href="https://maps.app.goo.gl/i5CAojENbNur5QH97">Cl 21 No 5 - 74 Alcaldia
                                        Local Santa Fe Piso 3</a></p>
                                <p>Bogotá - Colombia</p>
                            </div>
                            <div class="item span-2">
                                <p><b>Correo:</b></p>
                                <a href="mailto:clsantafe@movilidadbogota.gov.co">clsantafe@movilidadbogota.gov.co</a>
                            </div>
                        </div>
                        <div class="boxes">
                            <div class="item item-title span-3">
                                <p><strong>San Cristobal</strong></p>
                            </div>
                            <div class="item">
                                <p><b>Dirección:</b></p>
                                <p><a href="https://maps.app.goo.gl/NQ6gQBzFtM6hCiDf7">Av. Primera de Mayo No 1
                                        -
                                        40 Sur Alcaldia Local San Cristobal</a></p>
                                <p>Bogotá - Colombia</p>
                            </div>
                            <div class="item span-2">
                                <p><b>Correo:</b></p>
                                <a
                                    href="mailto:clsancristobal@movilidadbogota.gov.co">clsancristobal@movilidadbogota.gov.co</a>
                            </div>
                        </div>
                        <div class="boxes">
                            <div class="item item-title span-3">
                                <p><strong>Usme</strong></p>
                            </div>
                            <div class="item">
                                <p><b>Dirección:</b></p>
                                <p><a href="https://maps.app.goo.gl/Ub6e6ePkJkCPjXxu8">Cl 137B No 14 - 24 sur
                                        Alcaldia Local de Usme</a></p>
                                <p>Bogotá - Colombia</p>
                            </div>
                            <div class="item span-2">
                                <p><b>Correo:</b></p>
                                <a href="mailto:clusme@movilidadbogota.gov.co">clusme@movilidadbogota.gov.co</a>
                            </div>
                        </div>
                        <div class="boxes">
                            <div class="item item-title span-3">
                                <p><strong>Tunjuelito</strong></p>
                            </div>
                            <div class="item">
                                <p><b>Dirección:</b></p>
                                <p><a href="https://maps.app.goo.gl/SwmN3N2apiHhFD3e7">Diagonal 50 A No 18- 48
                                        Sur
                                        Alcaldia Local de Tunjuelito</a></p>
                                <p>Bogotá - Colombia</p>
                            </div>
                            <div class="item span-2">
                                <p><b>Correo:</b></p>
                                <a
                                    href="mailto:cltunjuelito@movilidadbogota.gov.co">cltunjuelito@movilidadbogota.gov.co</a>
                            </div>
                        </div>
                        <div class="boxes">
                            <div class="item item-title span-3">
                                <p><strong>Bosa</strong></p>
                            </div>
                            <div class="item">
                                <p><b>Dirección:</b></p>
                                <p><a href="https://maps.app.goo.gl/dcwMtkRMy27mtP8A6">Cr 80k No 61 - 28 sur
                                        Casa
                                        de la Participación</a></p>
                                <p>Bogotá - Colombia</p>
                            </div>
                            <div class="item span-2">
                                <p><b>Correo:</b></p>
                                <a href="mailto:clbosa@movilidadbogota.gov.co">clbosa@movilidadbogota.gov.co</a>
                            </div>
                        </div>
                        <div class="boxes">
                            <div class="item item-title span-3">
                                <p><strong>Kennedy</strong></p>
                            </div>
                            <div class="item">
                                <p><b>Dirección:</b></p>
                                <p><a href="https://maps.app.goo.gl/3HTSrq39UVpjozbdA">Calle 37 B sur No. 68 i
                                        32</a></p>
                                <p>Bogotá - Colombia</p>
                            </div>
                            <div class="item span-2">
                                <p><b>Correo:</b></p>
                                <a href="mailto:clkennedy@movilidadbogota.gov.co">clkennedy@movilidadbogota.gov.co</a>
                            </div>
                        </div>
                        <div class="boxes">
                            <div class="item item-title span-3">
                                <p><strong>Fontibon</strong></p>
                            </div>
                            <div class="item">
                                <p><b>Dirección:</b></p>
                                <p><a href="https://maps.app.goo.gl/q9rZ2tEnivc97f4P8">Calle 18 No. 99-56</a>
                                </p>
                                <p>Bogotá - Colombia</p>
                            </div>
                            <div class="item span-2">
                                <p><b>Correo:</b></p>
                                <a href="mailto:clfontibon@movilidadbogota.gov.co">clfontibon@movilidadbogota.gov.co</a>
                            </div>
                        </div>
                        <div class="boxes">
                            <div class="item item-title span-3">
                                <p><strong>Engativá</strong></p>
                            </div>
                            <div class="item">
                                <p><b>Dirección:</b></p>
                                <p><a href="https://maps.app.goo.gl/swkvQiL3cocWQPqP8">Cl 71 No 73a - 44
                                        Alcaldia
                                        Local Engativa Piso 1</a></p>
                                <p>Bogotá - Colombia</p>
                            </div>
                            <div class="item span-2">
                                <p><b>Correo:</b></p>
                                <a href="mailto:clengativa@movilidadbogota.gov.co">clengativa@movilidadbogota.gov.co</a>
                            </div>
                        </div>
                        <div class="boxes">
                            <div class="item item-title span-3">
                                <p><strong>Suba</strong></p>
                            </div>
                            <div class="item">
                                <p><b>Dirección:</b></p>
                                <p><a href="https://maps.app.goo.gl/RSTrAY7ZgBS7c3r67">carrera 93c #
                                        129c-15</a>
                                </p>
                                <p>Bogotá - Colombia</p>
                            </div>
                            <div class="item span-2">
                                <p><b>Correo:</b></p>
                                <a href="mailto:clsuba@movilidadbogota.gov.co">clsuba@movilidadbogota.gov.co</a>
                            </div>
                        </div>
                        <div class="boxes">
                            <div class="item item-title span-3">
                                <p><strong>Barrios Unidos</strong></p>
                            </div>
                            <div class="item">
                                <p><b>Dirección:</b></p>
                                <p><a href="https://maps.app.goo.gl/oyizUcfsL6L5pSw18">Cl 74a No 63 - 07 Piso
                                        2</a>
                                </p>
                                <p>Bogotá - Colombia</p>
                            </div>
                            <div class="item span-2">
                                <p><b>Correo:</b></p>
                                <a
                                    href="mailto:clbarriosunidos@movilidadbogota.gov.co">clbarriosunidos@movilidadbogota.gov.co</a>
                            </div>
                        </div>
                        <div class="boxes">
                            <div class="item item-title span-3">
                                <p><strong>Teusaquillo</strong></p>
                            </div>
                            <div class="item">
                                <p><b>Dirección:</b></p>
                                <p><a href="https://maps.app.goo.gl/n6Ksni5cK4v8JVg69">Travs 18 bis # 38- 41
                                        Alcaldia Local Teusaquillo</a></p>
                                <p>Bogotá - Colombia</p>
                            </div>
                            <div class="item span-2">
                                <p><b>Correo:</b></p>
                                <a
                                    href="mailto:clteusaquillo@movilidadbogota.gov.co">clteusaquillo@movilidadbogota.gov.co</a>
                            </div>
                        </div>
                        <div class="boxes">
                            <div class="item item-title span-3">
                                <p><strong>Los Martires</strong></p>
                            </div>
                            <div class="item">
                                <p><b>Dirección:</b></p>
                                <p><a href="https://maps.app.goo.gl/LcMaVH4un1MsZvdh7">Cr 19b N 23 - 90 Junta
                                        de
                                        Accion Local</a></p>
                                <p>Bogotá - Colombia</p>
                            </div>
                            <div class="item span-2">
                                <p><b>Correo:</b></p>
                                <a href="mailto:clmartires@movilidadbogota.gov.co">clmartires@movilidadbogota.gov.co</a>
                            </div>
                        </div>
                        <div class="boxes">
                            <div class="item item-title span-3">
                                <p><strong>Antonio Nariño</strong></p>
                            </div>
                            <div class="item">
                                <p><b>Dirección:</b></p>
                                <p><a href="https://maps.app.goo.gl/tdfA86i83AQ1Zy9x9">Cl 17 sur No 18 - 49
                                        Alcaldia Local Antonio Nariño Piso 5</a></p>
                                <p>Bogotá - Colombia</p>
                            </div>
                            <div class="item span-2">
                                <p><b>Correo:</b></p>
                                <a
                                    href="mailto:clantonionarino@movilidadbogota.gov.co">clantonionarino@movilidadbogota.gov.co</a>
                            </div>
                        </div>
                        <div class="boxes">
                            <div class="item item-title span-3">
                                <p><strong>Puente Aranda</strong></p>
                            </div>
                            <div class="item">
                                <p><b>Dirección:</b></p>
                                <p><a href="https://maps.app.goo.gl/zPSXjFFWxbQeafhR8">Cl 4 No 31d - 30
                                        Alcaldia
                                        Local Puente Aranda</a></p>
                                <p>Bogotá - Colombia</p>
                            </div>
                            <div class="item span-2">
                                <p><b>Correo:</b></p>
                                <a
                                    href="mailto:clpuentearanda@movilidadbogota.gov.co">clpuentearanda@movilidadbogota.gov.co</a>
                            </div>
                        </div>
                        <div class="boxes">
                            <div class="item item-title span-3">
                                <p><strong>La Candelaria</strong></p>
                            </div>
                            <div class="item">
                                <p><b>Dirección:</b></p>
                                <p><a href="https://maps.app.goo.gl/sRuAwEB4ZwVNgGVY8">Cr 8 No 6b - 36 Casa
                                        Santa
                                        Barbara</a></p>
                                <p>Bogotá - Colombia</p>
                            </div>
                            <div class="item span-2">
                                <p><b>Correo:</b></p>
                                <a
                                    href="mailto:clcandelaria@movilidadbogota.gov.co">clcandelaria@movilidadbogota.gov.co</a>
                            </div>
                        </div>
                        <div class="boxes">
                            <div class="item item-title span-3">
                                <p><strong>Rafael Uribe</strong></p>
                            </div>
                            <div class="item">
                                <p><b>Dirección:</b></p>
                                <p><a href="https://maps.app.goo.gl/pwMhUFosWen6woKT9">Cl 32 sur No 23 -62
                                        Alcaldia
                                        Local Rafael Uribe Piso 1</a></p>
                                <p>Bogotá - Colombia</p>
                            </div>
                            <div class="item span-2">
                                <p><b>Correo:</b></p>
                                <a
                                    href="mailto:clrafaeluribeuribe@movilidadbogota.gov.co">clrafaeluribeuribe@movilidadbogota.gov.co</a>
                            </div>
                        </div>
                        <div class="boxes">
                            <div class="item item-title span-3">
                                <p><strong>Ciudad Bolivar</strong></p>
                            </div>
                            <div class="item">
                                <p><b>Dirección:</b></p>
                                <p><a href="https://maps.app.goo.gl/hyXfGUwJ9QFotLbx9">Diag 62sur No 20f - 20
                                        Alcaldia Local Ciudad Bolivar Piso 2</a></p>
                                <p>Bogotá - Colombia</p>
                            </div>
                            <div class="item span-2">
                                <p><b>Correo:</b></p>
                                <a
                                    href="mailto:clciudadbolivar@movilidadbogota.gov.co">clciudadbolivar@movilidadbogota.gov.co</a>
                            </div>
                        </div>
                        <div class="boxes">
                            <div class="item item-title span-3">
                                <p><strong>Sumapaz</strong></p>
                            </div>
                            <div class="item">
                                <p><b>Dirección:</b></p>
                                <p><a href="https://maps.app.goo.gl/zTdmJKUAm7EvgaBi8">Centro de Servicios de
                                        Santa
                                        Rosa</a></p>
                                <p>Bogotá - Colombia</p>
                            </div>
                            <div class="item span-2">
                                <p><b>Correo:</b></p>
                                <a href="mailto:clsumapaz@movilidadbogota.gov.co">clsumapaz@movilidadbogota.gov.co</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="summary-collapse summary-collapse-5">
                    <div class="box-items">
                        <div class="boxes">
                            <div class="item item-title span-3">
                                <p><strong>VUS Antonio Nariño (Edificio Restrepo)</strong></p>
                                <em>Antonio Nariño</em>
                            </div>
                            <div class="item">
                                <p><b>Dirección:</b></p>
                                <p><a href="https://maps.app.goo.gl/3pwubyBqAHk9s4m48">Calle 14 Sur # 22 -
                                        27</a>
                                </p>
                                <p>Bogotá - Colombia</p>
                            </div>
                            <div class="item span-2">
                                <p><b>Horario:</b></p>
                                <p>Lunes a viernes:&nbsp;7:00&nbsp;a.m. — 7:00&nbsp;p.m.</p>
                                <p>Sábados:&nbsp;7:00&nbsp;a.m. — 2:00&nbsp;p.m.</p>
                            </div>
                        </div>
                        <div class="boxes">
                            <div class="item item-title span-3">
                                <p><strong>VUS Barrios Unidos (72 HUB)</strong></p>
                                <em>Barrios Unidos</em>
                            </div>
                            <div class="item">
                                <p><b>Dirección:</b></p>
                                <p><a href="https://maps.app.goo.gl/Ud8SZzxBtKDBZNbdA">Carrera 26 # 71B - 30,
                                        Piso
                                        2, Local 46B</a></p>
                                <p>Bogotá - Colombia</p>
                            </div>
                            <div class="item span-2">
                                <p><b>Horario:</b></p>
                                <p>Lunes a viernes:&nbsp;7:00&nbsp;a.m. — 7:00&nbsp;p.m.</p>
                                <p>Sábados:&nbsp;7:00&nbsp;a.m. — 2:00&nbsp;p.m.</p>
                            </div>
                        </div>
                        <div class="boxes">
                            <div class="item item-title span-3">
                                <p><strong>VUS Bosa (Gran Plaza Bosa)</strong></p>
                                <em>Bosa</em>
                            </div>
                            <div class="item">
                                <p><b>Dirección:</b></p>
                                <p><a href="https://maps.app.goo.gl/Yne2k9626TNTf4PV7">Calle 65 Sur # 78H - 51,
                                        Local L-241</a></p>
                                <p>Bogotá - Colombia</p>
                            </div>
                            <div class="item span-2">
                                <p><b>Horario:</b></p>
                                <p>Lunes a viernes:&nbsp;7:00&nbsp;a.m. — 7:00&nbsp;p.m.</p>
                                <p>Sábados:&nbsp;7:00&nbsp;a.m. — 2:00&nbsp;p.m.</p>
                            </div>
                        </div>
                        <div class="boxes">
                            <div class="item item-title span-3">
                                <p><strong>VUS Chapinero (CC Bulevar 42)</strong></p>
                                <em>Chapinero</em>
                            </div>
                            <div class="item">
                                <p><b>Dirección:</b></p>
                                <p><a href="https://maps.app.goo.gl/HyCv6TuesPuSFH6w9">Carrera 13 # 41 - 36,
                                        Local
                                        1 (CC Bulevar 42)</a></p>
                                <p>Bogotá - Colombia</p>
                            </div>
                            <div class="item span-2">
                                <p><b>Horario:</b></p>
                                <p>Lunes a viernes:&nbsp;7:00&nbsp;a.m. — 7:00&nbsp;p.m.</p>
                                <p>Sábados:&nbsp;7:00&nbsp;a.m. — 2:00&nbsp;p.m.</p>
                            </div>
                        </div>
                        <div class="boxes">
                            <div class="item item-title span-3">
                                <p><strong>VUS Ciudad Bolívar (Gran Plaza Ensueño)</strong></p>
                                <em>Ciudad Bolivar</em>
                            </div>
                            <div class="item">
                                <p><b>Dirección:</b></p>
                                <p><a href="https://maps.app.goo.gl/9geDLLF7i9bjxDpKA">Calle 59C Sur # 51 - 21,
                                        Local 209</a></p>
                                <p>Bogotá - Colombia</p>
                            </div>
                            <div class="item span-2">
                                <p><b>Horario:</b></p>
                                <p>Lunes a viernes:&nbsp;7:00&nbsp;a.m. — 7:00&nbsp;p.m.</p>
                                <p>Sábados:&nbsp;7:00&nbsp;a.m. — 2:00&nbsp;p.m.</p>
                            </div>
                        </div>
                        <div class="boxes">
                            <div class="item item-title span-3">
                                <p><strong>VUS Engativá (Nuestro Bogotá)</strong></p>
                                <em>Engativá</em>
                            </div>
                            <div class="item">
                                <p><b>Dirección:</b></p>
                                <p><a href="https://maps.app.goo.gl/Ub9ZDGFUqtArbMVv8">Carrera 86 # 55A - 75,
                                        L3 -
                                        43, 47 y 51</a></p>
                                <p>Bogotá - Colombia</p>
                            </div>
                            <div class="item span-2">
                                <p><b>Horario:</b></p>
                                <p>Lunes a viernes:&nbsp;7:00&nbsp;a.m. — 7:00&nbsp;p.m.</p>
                                <p>Sábados:&nbsp;7:00&nbsp;a.m. — 2:00&nbsp;p.m.</p>
                            </div>
                        </div>
                        <div class="boxes">
                            <div class="item item-title span-3">
                                <p><strong>VUS Fontibón 1 (Fontibón Centro)</strong></p>
                                <em>Fontibón</em>
                            </div>
                            <div class="item">
                                <p><b>Dirección:</b></p>
                                <p><a href="https://maps.app.goo.gl/VHHsxBqr3dhU8ndK9">Calle 19 # 99 - 68</a>
                                </p>
                                <p>Bogotá - Colombia</p>
                            </div>
                            <div class="item span-2">
                                <p><b>Horario:</b></p>
                                <p>Lunes a viernes:&nbsp;7:00&nbsp;a.m. — 7:00&nbsp;p.m.</p>
                                <p>Sábados:&nbsp;7:00&nbsp;a.m. — 2:00&nbsp;p.m.</p>
                            </div>
                        </div>
                        <div class="boxes">
                            <div class="item item-title span-3">
                                <p><strong>VUS Fontibón 2 (C. C. Meridiano 13 del Este)</strong></p>
                                <em>Fontibón</em>
                            </div>
                            <div class="item">
                                <p><b>Dirección:</b></p>
                                <p><a href="https://maps.app.goo.gl/8S3AgQ62F1v4Ut48A">Calle 18 # 77 - 67,
                                        Locales
                                        226, 227, 228 y ZC-2A Barrio La Felicidad</a></p>
                                <p>Bogotá - Colombia</p>
                            </div>
                            <div class="item span-2">
                                <p><b>Horario:</b></p>
                                <p>Lunes a viernes:&nbsp;7:00&nbsp;a.m. — 7:00&nbsp;p.m.</p>
                                <p>Sábados:&nbsp;7:00&nbsp;a.m. — 2:00&nbsp;p.m.</p>
                            </div>
                        </div>
                        <div class="boxes">
                            <div class="item item-title span-3">
                                <p><strong>VUS Kennedy (Tintal Plaza)</strong></p>
                                <em>Fontibón</em>
                            </div>
                            <div class="item">
                                <p><b>Dirección:</b></p>
                                <p><a href="https://maps.app.goo.gl/EJVFDyvJWeWCHrjNA">Avenida Carrera 86 # 6 -
                                        37,
                                        Local 286 - 287</a></p>
                                <p>Bogotá - Colombia</p>
                            </div>
                            <div class="item span-2">
                                <p><b>Horario:</b></p>
                                <p>Lunes a viernes:&nbsp;7:00&nbsp;a.m. — 7:00&nbsp;p.m.</p>
                                <p>Sábados:&nbsp;7:00&nbsp;a.m. — 2:00&nbsp;p.m.</p>
                            </div>
                        </div>
                        <div class="boxes">
                            <div class="item item-title span-3">
                                <p><strong>VUS Los Mártires (Mallplaza)</strong></p>
                                <em>Los Mártires</em>
                            </div>
                            <div class="item">
                                <p><b>Dirección:</b></p>
                                <p><a href="https://maps.app.goo.gl/jmumwoCdRvSZPs6M9">Avenida Carrera 30 # 19
                                        -
                                        00, Nivel 4</a></p>
                                <p>Bogotá - Colombia</p>
                            </div>
                            <div class="item span-2">
                                <p><b>Horario:</b></p>
                                <p>Lunes a viernes:&nbsp;7:00&nbsp;a.m. — 7:00&nbsp;p.m.</p>
                                <p>Sábados:&nbsp;7:00&nbsp;a.m. — 2:00&nbsp;p.m.</p>
                            </div>
                        </div>
                        <div class="boxes">
                            <div class="item item-title span-3">
                                <p><strong>VUS Puente Aranda (C. C. Carrera)</strong></p>
                                <em>Puente Aranda</em>
                            </div>
                            <div class="item">
                                <p><b>Dirección:</b></p>
                                <p><a href="https://maps.app.goo.gl/SwtwybQdwXSHznyh7">Avenida de las Américas
                                        # 50
                                        - 15, Local A1002</a></p>
                                <p>Bogotá - Colombia</p>
                            </div>
                            <div class="item span-2">
                                <p><b>Horario:</b></p>
                                <p>Lunes a viernes:&nbsp;7:00&nbsp;a.m. — 7:00&nbsp;p.m.</p>
                                <p>Sábados:&nbsp;7:00&nbsp;a.m. — 2:00&nbsp;p.m.</p>
                            </div>
                        </div>
                        <div class="boxes">
                            <div class="item item-title span-3">
                                <p><strong>VUS San Cristóbal (Juan Rey)</strong></p>
                                <em>San Cristobal</em>
                            </div>
                            <div class="item">
                                <p><b>Dirección:</b></p>
                                <p><a href="https://maps.app.goo.gl/FWkWYZ5sDDEApLm59">Calle 69 Sur # 13B - 41
                                        Este</a></p>
                                <p>Bogotá - Colombia</p>
                            </div>
                            <div class="item span-2">
                                <p><b>Horario:</b></p>
                                <p>Lunes a viernes:&nbsp;7:00&nbsp;a.m. — 7:00&nbsp;p.m.</p>
                                <p>Sábados:&nbsp;7:00&nbsp;a.m. — 2:00&nbsp;p.m.</p>
                            </div>
                        </div>
                        <div class="boxes">
                            <div class="item item-title span-3">
                                <p><strong>VUS Suba 1 (C. C. San Rafael)</strong></p>
                                <em>Suba</em>
                            </div>
                            <div class="item">
                                <p><b>Dirección:</b></p>
                                <p><a href="https://maps.app.goo.gl/jQiFGELq9YL2NipT7">Calle 134 # 55 - 30,
                                        Sótano
                                        2</a></p>
                                <p>Bogotá - Colombia</p>
                            </div>
                            <div class="item span-2">
                                <p><b>Horario:</b></p>
                                <p>Lunes a viernes:&nbsp;7:00&nbsp;a.m. — 7:00&nbsp;p.m.</p>
                                <p>Sábados:&nbsp;7:00&nbsp;a.m. — 2:00&nbsp;p.m.</p>
                            </div>
                        </div>
                        <div class="boxes">
                            <div class="item item-title span-3">
                                <p><strong>VUS Suba 2 (C. C. Suba Fiesta)</strong></p>
                                <em>Suba</em>
                            </div>
                            <div class="item">
                                <p><b>Dirección:</b></p>
                                <p><a href="https://maps.app.goo.gl/SKXiLG9vmDbBgQ4n7">Calle 147 # 101 - 56,
                                        Local
                                        22A</a></p>
                                <p>Bogotá - Colombia</p>
                            </div>
                            <div class="item span-2">
                                <p><b>Horario:</b></p>
                                <p>Lunes a viernes:&nbsp;7:00&nbsp;a.m. — 7:00&nbsp;p.m.</p>
                                <p>Sábados:&nbsp;7:00&nbsp;a.m. — 2:00&nbsp;p.m.</p>
                            </div>
                        </div>
                        <div class="boxes">
                            <div class="item item-title span-3">
                                <p><strong>VUS Teusaquillo (Tribeca)</strong></p>
                                <em>Teusaquillo</em>
                            </div>
                            <div class="item">
                                <p><b>Dirección:</b></p>
                                <p><a href="https://maps.app.goo.gl/C3PhemcXa3ShH9zZ9">Calle 28 # 20 - 16,
                                        Locales
                                        3, 4 y 5</a></p>
                                <p>Bogotá - Colombia</p>
                            </div>
                            <div class="item span-2">
                                <p><b>Horario:</b></p>
                                <p>Lunes a viernes:&nbsp;7:00&nbsp;a.m. — 7:00&nbsp;p.m.</p>
                                <p>Sábados:&nbsp;7:00&nbsp;a.m. — 2:00&nbsp;p.m.</p>
                            </div>
                        </div>
                        <div class="boxes">
                            <div class="item item-title span-3">
                                <p><strong>VUS Tunjuelito (Centro Automotriz Autogrande)</strong></p>
                                <em>Tunjuelito</em>
                            </div>
                            <div class="item">
                                <p><b>Dirección:</b></p>
                                <p><a href="https://maps.app.goo.gl/5NmoWyPxX6mDf9Pq9">Carrera 57 # 45A - 08
                                        Sur
                                        Int. 1, (Centro Automotriz La Sevillana - Autogrande)</a></p>
                                <p>Bogotá - Colombia</p>
                            </div>
                            <div class="item span-2">
                                <p><b>Horario:</b></p>
                                <p>Lunes a viernes:&nbsp;7:00&nbsp;a.m. — 7:00&nbsp;p.m.</p>
                                <p>Sábados:&nbsp;7:00&nbsp;a.m. — 2:00&nbsp;p.m.</p>
                            </div>
                        </div>
                        <div class="boxes">
                            <div class="item item-title span-3">
                                <p><strong>VUS Usaquén (North Point Mall)</strong></p>
                                <em>Usaquén</em>
                            </div>
                            <div class="item">
                                <p><b>Dirección:</b></p>
                                <p><a href="https://maps.app.goo.gl/gZMhNAiY2TF6Nzeu9">Carrera 7 # 155 - 80,
                                        Local
                                        1</a></p>
                                <p>Bogotá - Colombia</p>
                            </div>
                            <div class="item span-2">
                                <p><b>Horario:</b></p>
                                <p>Lunes a viernes:&nbsp;7:00&nbsp;a.m. — 7:00&nbsp;p.m.</p>
                                <p>Sábados:&nbsp;7:00&nbsp;a.m. — 2:00&nbsp;p.m.</p>
                            </div>
                        </div>
                        <div class="boxes">
                            <div class="item item-title span-3">
                                <p><strong>VUS Usme (C. C. Altavista)</strong></p>
                                <em>Usme</em>
                            </div>
                            <div class="item">
                                <p><b>Dirección:</b></p>
                                <p><a href="https://maps.app.goo.gl/wWM5ch2FdZ9vbVF76">Carrera 1ª. # 65D - 58
                                        Sur,
                                        Locales 167, 174, 175 y 176</a></p>
                                <p>Bogotá - Colombia</p>
                            </div>
                            <div class="item span-2">
                                <p><b>Horario:</b></p>
                                <p>Lunes a viernes:&nbsp;7:00&nbsp;a.m. — 7:00&nbsp;p.m.</p>
                                <p>Sábados:&nbsp;7:00&nbsp;a.m. — 2:00&nbsp;p.m.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <script>
            var temp;

            document.addEventListener('DOMContentLoaded', function() {

                Validate(0);
                let button = document.querySelectorAll('.tabs-collapse-2 .push-tabpills-2').forEach(function(button) {
                    button.addEventListener('click', function() {
                        let id = parseInt(button.dataset.tab);
                        Validate(id);

                    });
                });
            });

            function Selected() {
                /* Para obtener el valor */
                var cod = document.getElementById("select-2").value;
                Validate(cod);
            }

            function Validate(id) {
                console.log('id ' + id);
                if (id == 0) {
                    Toggled(1);
                } else {
                    if (id != temp) {
                        console.log('temp ' + temp);
                        let oldSummary;
                        oldSummary = document.querySelector(`.content-collapse-2 .summary-collapse-${temp}`);
                        console.log(oldSummary);
                        oldSummary.classList.toggle('selected');
                        Toggled(id);
                    }
                }

            }

            function Toggled(num) {
                console.log('num ' + num);
                let collapseSummary;
                collapseSummary = document.querySelector(`.content-collapse-2 .summary-collapse-${num}`);
                // console.log('collapseSummary '+collapseSummary);
                collapseSummary.classList.toggle('selected');
                temp = num;
                console.log('Temp Toggled ' + temp);
            }
        </script>

    </div>
    <!-- Fin Set -->
