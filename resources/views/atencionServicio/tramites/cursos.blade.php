@extends('welcome')
@section('contenido')

<!-- ----- ----- ----- ----- ----- ----- ----- ----- Bloque Seccion ----- ----- ----- ----- ----- ----- ----- ----- ----- ------ -->

<div class='container-fluid seccion'>
    <div class='s1'>
    <div class="row">
                    <div class="col-xs-12">
                        <div class="txt-modal">
                            <div class="descripcion-modal">
                                <p>Promover en los asistentes la participación, reflexión y sensibilización frente a los cambios de comportamiento y hábitos en la vía.</p>
                                <p>La cita para el Curso Pedagógico debe ser agendada a través del Centro de Contacto de Movilidad en <a href="http://www.movilidadbogota.gov.co" target="_blank" rel="noopener noreferrer">www.movilidadbogota.gov.co</a></p>
                            </div>
                            <div>
                                <h3>Requisitos del trámite</h3>
                                <ol>
                                    <li>Documento de identidad
                                        <ul>
                                            <li>Cédula de ciudadanía, aplica para ciudadanos.</li>
                                            <li>Cédula de extranjería o pasaporte, aplica para extranjeros.</li>
                                            <li>Tarjeta de identidad (Menores de edad). Debe presentarse con el representante legal.</li>
                                        </ul>
                                    </li>
                                    <li>Una vez realizado el curso podrá expedir su volante de pago ingresando a la página <a href="www.movilidadbogota.gov.co" target="_blank" rel="noopener noreferrer">www.movilidadbogota.gov.co</a>, al link “consulta de comparendos“, clic en “consulta“, introduzca el número de documento de identidad, clic en “buscar”, clic en “volante”. Allí decide si genera volante con el 50% o el 25% según corresponda.
                                        <ul>
                                            <li>Generar e imprimir el volante de pago en la página web de la Secretaría de Movilidad o reclamarlo en uno de los siguientes puntos una vez finalizado el curso:
                                                <ul>
                                                    <li>SuperCADE Américas - (Temporalmente fuera de servicio)</li>
                                                    <li>SuperCADE 20 de Julio.</li>
                                                    <li>SuperCADE Suba.</li>
                                                    <li>Centro de Servicios de Movilidad Calle 13</li>
                                                    <li>CADE Fontibón</li>
                                                    <li>Centro de Servicios de Movilidad Paloquemao</li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ol>
                                <p><strong>NOTA:</strong> Si usted, por diferentes motivos NO GENERA EL VOLANTE DE PAGO, en los diferentes puntos de atención de la Secretaría Distrital de Movilidad, se expide de manera gratuita. <strong>NO PAGUE A TERCEROS POR LA IMPRESIÓN.</strong></p>
                            </div>
                            <div>
                                <h3>Puntos de pago</h3>
                                <ul>
                                    <li>Banco de Occidente: En todas las sucursales a nivel nacional (Solamente efectivo); Centro de Servicios de Movilidad Calle 13.</li>
                                    <li>Banco Caja Social: SuperCADE Movilidad / Centro de Servicios de Movilidad Calle 13. (efectivo).</li>
                                    <li>Corresponsales no bancarios del grupo Éxito.</li>
                                    <li>Surtimax, Super Inter, Carulla, Grupo Éxito, solo se reciben operaciones en efectivo o Tarjeta de Crédito Éxito.</li>
                                </ul>
                                <p><strong>Nota:</strong> Una vez finalizado el curso usted deberá cancelar el comparendo con el descuento correspondiente.</p>
                                <p>El Pago electrónico, por el botón PSE de la página web de la Secretaría Distrital de Movilidad.</p>
                            </div>
                            <div>
                                <h3>Para mayor información:</h3>
                                <p>Centro de contacto de Movilidad <strong>(601) 364-94-00 opción 2</strong>, o nuestros canales virtuales en <a href="http://www.movilidadbogota.gov.co" target="_blank" rel="noopener noreferrer">www.movilidadbogota.gov.co</a></p>
                                <h3>Línea:</h3>
                                <p><strong>195</strong></p>
                            </div>
                            <hr>
                            <div>
                                <a href="http://" target="_blank" rel="noopener noreferrer">Consulte aquí l Abecé de Cursos Pedagógicos (link incluir el PDF)</a>
                            </div>

                        </div>

                        <div class="videos_modal">
                            <div class='row'>
                                <div class='col-xs-12 col-sm-6'>
                                    <div class='embed-responsive embed-responsive-4by3'>
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/F4YHT4B0B7U" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                </div>
                                <div class='col-xs-12 col-sm-6'>
                                    <div class='embed-responsive embed-responsive-4by3'>
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/-5n-WiWIb80" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
        overflow:hidden;
    }

    .seccion {
        font-size: 13px !important;
        line-height: 1.4 !important;
        max-width: 980px;
    }

/*
    .seccion [class*='col-'] {
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
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin hoja de estilo  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->

               

