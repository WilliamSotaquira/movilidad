@extends('welcome')
@section('title','mapas')
@section('contenido')


<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

<!-- Set mapas -->
<div class="set-wrapper mapas">

    <style>
        .mapas .cpnt-title h3{
            color: #4d541f;
            font-family: 'Montserrat', sans-serif;
            font-optical-sizing: auto;
            font-size: 24px;
            font-weight: bold;
            text-align: center;
            margin-top: 32px;
            margin-bottom: 32px;
        }
    </style>

    <div class="cpnt cpnt-title">
        <h3>Infraestructura de recarga eléctrica en Bogotá</h3>
    </div>


    <style>
        .field-item.even .centertil {
            visibility: hidden;
            margin-top: -50px;
        }
    </style>


    <div class='row'>
        <div class='col-xs-12'>
            <div class='txt-modal'>
                <div class='descripcion-modal'>
                    <div>
                        <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/12-09-2024/mapa_926.png" alt="" usemap="#map" />
                        <map name="map">
                            <area shape="circle" coords="510, 388, 23" href="https://maps.app.goo.gl/FzhkxVS4Bi2aWU1s9" alt="2 cargadores rápidos CCS1 y GBT." title="San Andresito de la 38. Centro Comercial El Roncador" />
                            <area shape="circle" coords="451, 392, 19" href="https://maps.app.goo.gl/89hr67Ze3s8BdF1q8" alt="3 cargadores rápidos con 6 conectores CCS1, CCS2 y GBT." title="Cercano al Terminal de Transporte calle 22C No. 68F-34" />
                            <area shape="circle" coords="413, 411, 17" href="https://maps.app.goo.gl/moD3WaE1PGR2XzSY9" alt="2 cargadores rápidos con 4 conectores CCS1 y GBT." title="Barrio Modelia carrera 75 entre calles 23F y 23G" />
                            <area shape="circle" coords="494, 301, 19" href="https://maps.app.goo.gl/VbqACJShvgQKCRbx5" alt="3 cargadores rápidos con 6 conectores CCS1, CCS2 y GBT" title="Enel X Way Estación de carga" />
                            <area shape="circle" coords="387, 206, 21" href="https://maps.app.goo.gl/gbUcyG6rQpQhaGdw9" alt="2 cargadores rápidos con 4 conectores CCS1 y GBT" title="Enel X Way Estación de carga" />
                            <area shape="circle" coords="329, 238, 23" href="https://maps.app.goo.gl/37ArGNYkRZqnLJUz8" alt="3 cargadores rápidos con 6 conectores, con estándares de carga CCS1, CCS2 y GBT." title="Barrio La Alhambra, parqueadero Calle 114A No. 45-98" />
                        </map>
                    </div>

                    <div class="table-responsive table-striped table-condensed">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Ubicacion</th>
                                    <th scope="col">Caracteristicas</th>
                                    <th scope="col">Enlace</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">Barrio La Alhambra, parqueadero Calle 114A No. 45-98</th>
                                    <td>3 cargadores rápidos con 6 conectores, con estándares de carga CCS1, CCS2 y GBT.</td>
                                    <td><a href="https://maps.app.goo.gl/37ArGNYkRZqnLJUz8">Abrir en mapas</a></td>
                                </tr>
                                <tr>
                                    <th scope="row">Calle 97 entre carreras 10 y 11</th>
                                    <td>2 cargadores rápidos con 4 conectores CCS1 y GBT</td>
                                    <td><a href="https://maps.app.goo.gl/gbUcyG6rQpQhaGdw9">Abrir en mapas</a></td>
                                </tr>
                                <tr>
                                    <th scope="row">Barrio Nicolás de Federman calle 58A Bis entre carreras 37 y 38</th>
                                    <td>3 cargadores rápidos con 6 conectores CCS1, CCS2 y GBT</td>
                                    <td><a href="https://maps.app.goo.gl/VbqACJShvgQKCRbx5">Abrir en mapas</a></td>
                                </tr>
                                <tr>
                                    <th scope="row">Barrio Modelia carrera 75 entre calles 23F y 23G</th>
                                    <td>2 cargadores rápidos con 4 conectores CCS1 y GBT.</td>
                                    <td><a href="https://maps.app.goo.gl/moD3WaE1PGR2XzSY9">Abrir en mapas</a></td>
                                </tr>
                                <tr>
                                    <th scope="row">Cercano al Terminal de Transporte calle 22C No. 68F-34</th>
                                    <td>3 cargadores rápidos con 6 conectores CCS1, CCS2 y GBT.</td>
                                    <td><a href="https://maps.app.goo.gl/89hr67Ze3s8BdF1q8">Abrir en mapas</a></td>
                                </tr>
                                <tr>
                                    <th scope="row">San Andresito de la 38. Centro Comercial El Roncador</th>
                                    <td>2 cargadores rápidos CCS1 y GBT.</td>
                                    <td><a href="https://maps.app.goo.gl/FzhkxVS4Bi2aWU1s9">Abrir en mapas</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>
<br>
<!-- Fin Set -->
