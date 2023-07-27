@extends('welcome')
@section('title','retencionDocumental')
@section('contenido')

<!-- Set retencionDocumental -->
<div class="set-wrapper retencionDocumental">
    <br>
    <p>Son un instrumento archivístico que lista las series y/o subseries documentales (Categorías de información) de acuerdo a las funciones de cada dependencia, estableciendo tiempos de retención en archivo de gestión y central y una disposición final conservando aquellos documentos que por su naturaleza aporten a la memoría institucional y de la ciudad en el sector de movilidad.</p>
    <br>

    <div class="panel-group" id="accordion">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h4 class="panel-title"><a data-parent="#accordion" data-toggle="collapse" href="#collapsecua">Cuadro de clasificación documental SDM</a></h4>
            </div>

            <div class="panel-collapse collapse" id="collapsecua">
                <div class="panel-body"><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/16-03-2022/cuadro_de_clasificacion_documental_sdm.pdf">Cuadro de clasificación documental</a></div>
            </div>
        </div>

        <div class="panel panel-primary">
            <div class="panel-heading">
                <h4 class="panel-title"><a data-parent="#accordion" data-toggle="collapse" href="#collapse2">Decreto 567 2006</a></h4>
            </div>

            <div class="panel-collapse collapse" id="collapse2">
                <div class="panel-body">
                    <p>De acuerdo con la aprobación del Consejo Distrital de Archivos, se publican los documentos relacionados con el concepto de revisión, evaluación y convalidación de la Tabla de Retención Documental de la Secretaria Distrital de Movilidad y el envió de los ajustes solicitados en dicho concepto.</p>

                    <ul>
                        <li><a href="/web/sites/default/files/resolucion-195-de-2016-1_43270.pdf" target="_blank">Resolución 195 de 2016</a></li>
                    </ul>

                    <div>La Secretaría Distrital de Movilidad en cumpliento la ley de transparencia, expone por medio de la introducción a las tablas de retencion documental la reseña historica, el soporte normativo y la metodología de elaboración de las TRD</div>

                    <div>&nbsp;</div>

                    <div>
                        <ul>
                            <li><a href="https://drive.google.com/file/d/0ByNoeWkPXuHpa3NPcmtfeHllYkk/view?usp=sharing" target="_blank">Introducción-TRD Tablas de Retención Documental</a></li>
                        </ul>
                    </div>

                    <div>&nbsp;</div>

                    <div>Igualmente, la Secretaria Distrital de Movilidad dando cumplimiento a la Ley de Transparencia, publica las Tablas de Retención Documental, de acuerdo al orden jerárquico según el organigrama de la entidad:</div>

                    <hr>
                    <ul>
                        <li><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/09-02-2022/100-trd-despacho_0.pdf" type="application/pdf; length=412169">100 TRD despacho</a></li>
                        <li><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/09-02-2022/200-trd-comunicaciones_0.pdf" type="application/pdf; length=408723">200 TRD comunicaciones</a></li>
                        <li><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/09-02-2022/300-trd-oficina_asesora_de_planeacion_0.pdf" type="application/pdf; length=917271">300 TRD oficina asesora de planeacion</a></li>
                        <li><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/09-02-2022/400-trd-oficina_de_control_interno_0.pdf" type="application/pdf; length=629980">400 TRD oficina de control interno</a></li>
                        <li><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/09-02-2022/500-trd-oficina_de_control_disciplinario_0.pdf" type="application/pdf; length=1145198">500 TRD oficina de control disciplinario</a></li>
                        <li><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/09-02-2022/600-trd-subsecretaria_de_gestion_corporativa_0.pdf" type="application/pdf; length=362103">600 TRD subsecretaria de gestion corporativa</a></li>
                        <li><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/09-02-2022/610.10-trd-subdireccion_administrativa_0.pdf" type="application/pdf; length=3000287">610.10 TRD subdireccion administrativa</a></li>
                        <li><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/09-02-2022/610.20-trd-subdireccion_financiera_0.pdf" type="application/pdf; length=917428">610.20 TRD subdireccion financiera</a></li>
                        <li><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/09-02-2022/610-trd-direccion_administrativa_y_financiera_0.pdf" type="application/pdf; length=188585">610 TRD direccion administrativa y financiera</a></li>
                        <li><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/09-02-2022/620-trd-direccion_de_asuntos_legales_0.pdf" type="application/pdf; length=2736942">620 TRD direccion de asuntos legales</a></li>
                        <li><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/09-02-2022/700-trd-subsecretaria_de_servicios_de_la_movilidad_0.pdf" type="application/pdf; length=848720">700 TRD subsecretaria de servicios de la movilidad</a></li>
                        <li><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/09-02-2022/710-trd-direccion_de_control_y_vigilancia_0.pdf" type="application/pdf; length=2127849">710 TRD direccion de control y vigilancia</a></li>
                        <li><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/09-02-2022/720-trd-direccion_de_servicio_al_ciudadano_0.pdf" type="application/pdf; length=942261">720 TRD direccion de servicio al ciudadano</a></li>
                        <li><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/09-02-2022/730.20trd-subdireccion_de_contravenciones_de_transito_0.pdf" type="application/pdf; length=1377663">730.20 TRD subdireccion de contravenciones de transito</a></li>
                        <li><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/09-02-2022/730.30-trd-subdireccion_de_jurisdiccion_coactiva_0.pdf" type="application/pdf; length=843264">730.30 TRD subdireccion de jurisdiccion coactiva</a></li>
                        <li><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/09-02-2022/730-trd-direccion_de_procesos_administrativos_0.pdf" type="application/pdf; length=334454">730 TRD direccion de procesos administrativos</a></li>
                        <li><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/09-02-2022/800.10trd-oficina_de_informacion_sectorial_0.pdf" type="application/pdf; length=656070">800.10 TRD oficina de informacion sectorial</a></li>
                        <li><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/09-02-2022/800-trd-subsecretaria_de_politica_sectorial_0.pdf" type="application/pdf; length=297072">800 TRD subsecretaria de politica sectorial</a></li>
                        <li><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/09-02-2022/810-trd-direccion_de_seguridad_vial_y_comportamiento_del_transito_0.pdf" type="application/pdf; length=998885">810 TRD direccion de seguridad vial y comportamiento del transito</a></li>
                        <li><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/09-02-2022/820-trd-direccion_de_estudios_sectoriales_y_de_servicios_0.pdf" type="application/pdf; length=855667">820 TRD direccion de estudios sectoriales y de servicios</a></li>
                        <li><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/09-02-2022/830-trd-direccion_de_transporte_e_infraestructura_0.pdf" type="application/pdf; length=834890">830 TRD direccion de transporte e infraestructura</a></li>
                    </ul>

                    <hr>
                    <p>Surtido el proceso de identificación de los expediente que cumplieron el tiempo de retención según las TRD de la SDM y que corresponden a eliminación, el equipo profesional de archivo puso a consideración al Comité Interno de Archivo en la sesión extraordinaria del 30 de enero del 2020, los inventarios documentales propuestos para eliminación; como reposa en el acta del comité en mención se autorizó de forma unánime iniciar el proceso de eliminación documental de los expedientes correspondientes a Procesos Contravencionales de los años 1999- 2009.</p>

                    <p>En virtud de lo anterior informamos y solicitamos autorización para dar cumplimiento a lo estipulado en el Articulo No 22 del Acuerdo 04 de 2019 del Archivo General de la Nación, y proceder a la publicación de la página WEB.</p>

                    <ul>
                        <li><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/24-02-2020/150.2_embriaguez_eliminacion_2020.xlsx">150.2 EMBRIAGUEZ ELIMINACIÓN 2020</a></li>
                        <li><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/24-02-2020/150.3_definitivas_eliminacion_2020.xlsx">150.3 DEFINITIVAS ELIMINACIÓN 2020</a></li>
                        <li><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/24-02-2020/150.4_reincidentes_eliminacion_2020.xlsx">150.4 REINCIDENTES ELIMINACIÓN 2020</a></li>
                        <li><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/24-02-2020/150.5_exonerados_elimiacion_2020.xlsx">150.5 EXONERADOS ELIMIACIÓN 2020</a></li>
                        <li><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/24-02-2020/150.7_provisionales_eliminacion_2020.xlsx">150.7 PROVISIONALES ELIMINACIÓN 2020</a></li>
                        <li><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/24-02-2020/150.8_falsedad_documentos_eliminacion_2020.xlsx">150.8 FALSEDAD DOCUMENTOS ELIMINACIÓN 2020</a></li>
                    </ul>

                    <p><span style="line-height: 18.2px; text-align: start;">Durante el año 2018 se realizaron 4 transferencias documentales primarias al Archivo Central de series y subseries documentales que cumplieron su tiempo de retención en el archivo de gestión y los requerimientos de organización para ser transferidos:</span></p>

                    <ul>
                        <li><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/2019-03-22/Acta%20de%20transferencia%20documental%20001-2018%20%281%29.pdf" target="_blank">Acta de Transferencia Documental 001-2018</a></li>
                        <li><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/2019-03-22/Acta%20deTransferencia%20Documental%20002-2018.pdf" target="_blank">Acta de Transferencia Documental 001-2018</a></li>
                        <li><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/2019-03-22/Acta%20transferencia%20documental%20003-2018.pdf" target="_blank">Acta de Transferencia Documental 001-2018</a></li>
                        <li><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/2019-03-22/Acta%20transferencia%20documental%20004-2018.pdf" target="_blank">Acta de Transferencia Documental 001-2018</a></li>
                    </ul>

                    <p>&nbsp;</p>

                    <ul>
                        <li><a href="/web/sites/default/files/cuadro-clasificacion-documental_38029.pdf" target="_blank">Cuadro de clasificación documental</a></li>
                        <li><a href="/web/sites/default/files/base-de-datos-inspecciones_32911.pdf" target="_blank">Inventario documental</a></li>
                        <li><a href="/web/sites/default/files/Acta%20aprobación%20TRD%20%281%29.PDF">Acta de aprobración TRD - Comité de archivo</a></li>
                        <li><a href="/web/sites/default/files/Actas%20Convalidación%20TRD%20-%20SDM-ilovepdf-compressed.pdf">Acta de convalidación Cncejo Distrital de Archivos</a></li>
                    </ul>

                    <p>&nbsp;</p>
                </div>
            </div>
        </div>
    </div>


</div>
<br>
<!-- Fin Set -->
