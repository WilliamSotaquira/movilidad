<style>
    .seccion {
        max-width: 940px;
        margin: auto;
    }

    .espacio {
        padding: 5px;
        margin-top: 5px;
    }

    .btn-outline-success {
        color: #fff;
        background-color: #4C531E;
        background-image: none;
        border-color: ##879225
    }

    .btn-outline-success:hover {
        color: #fff;
        background-color: #879225;
        border-color: #4C531E
    }

    .box-group {
        padding: 2vw;
    }
</style>

@extends('welcome')
@section('contenido')

<!-- ----- ----- ----- ----- ----- ----- ----- ----- Bloque Seccion ----- ----- ----- ----- ----- ----- ----- ----- ----- ------ -->

<div class='container-fluid seccion'>
    <div class='s1'>


        <form class="form-inline2" action="formulario.php" method="POST">

            <div class="box-group">
                <div class="row espacio">
                    <div class="col-xs-12 col-md-12" align="center">
                        <h2>
                            <font color="#4C531E">Consulta de procesos de Contrataci&oacute;n</font>
                        </h2>
                    </div>
                    <div class="col-xs-12 col-md-12" align="center">
                        <font color="#353535">
                            <p class="texto-justificado">Formulario de b&uacute;squeda b&aacute;sica de contratos de la entidad.</p>
                        </font>
                    </div>
                </div>
                <hr>
                <div class="row espacio">
                    <div class="col-xs-12 col-md-4 col-md-offset-2">
                        <font color="#4C531E"><b>Vigencia:</b></font>
                    </div>
                    <div class="col-xs-12 col-md-4"> <select class="form-control mr-sm-2" name="vigencia" id="vigencia" placeholder="Buscar" aria-label="Search">
                            <option value="0">--SELECCIONE--</option>
                            <!--<option value="2010">2010</option>
				        	<option value="2011">2011</option>
				        	<option value="2012">2012</option>
				        	<option value="2013">2013</option>
				          <option value="2014">2014</option>
				          <option value="2015">2015</option>
				          <option value="2016">2016</option>-->
                            <option value="2017">2017</option>
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                        </select></div>
                </div>

                <div class="row espacio">
                    <div class="col-xs-12 col-md-4 col-md-offset-2">
                        <font color="#4C531E"><b>Tipo de contrato:</b></font>
                    </div>
                    <div class="col-xs-12 col-md-4"><select class="form-control mr-sm-2" name="tipoContrato" id="tipoContrato" placeholder="Buscar" aria-label="Search">
                            <option value="0">--SELECCIONE--</option>
                            <option value="12">CONTRATO DE COMODATO</option>
                            <option value="11">CONVENIO INTERADMINISTRATIVO</option>
                            <option value="15">BID-CONTRATO DE PRESTACI&Oacute;N DE SERVICIOS DE APOYO Y PROFESIONALES</option>
                            <option value="8">CONTRATO DE SUMINISTRO</option>
                            <option value="10">CONTRATO INTERADMINISTRATIVO</option>
                            <option value="3">CONTRATO DE COMPRAVENTA</option>
                            <option value="13">CONTRATO DE PRESTACI&Oacute;N DE SERVICIOS</option>
                            <option value="23">ORDEN DE COMPRAVENTA</option>
                            <option value="26">ACUERDO DE TRANSACCI&Oacute;N</option>
                            <option value="14">CONTRATO DE PRESTACI&Oacute;N DE SERVICIOS PROFESIONALES Y/O APOYO A LA GESTION</option>
                        </select></div>
                </div>
                <div class="row espacio">
                    <div class="col-xs-12 col-md-4 col-md-offset-2">
                        <font color="#4C531E"><b>Numero de contrato:</b></font>
                    </div>
                    <div class="col-xs-12 col-md-4"><input class="form-control mr-sm-2" type="text" id="numContrato" name="numContrato" placeholder="2021XXX40" aria-label="Search"></div>
                </div>

                <div class="row espacio">
                    <div class="col-xs-12 col-md-4 col-md-offset-2">
                        <font color="#4C531E"><b>Numero de proceso:</b></font>
                    </div>
                    <div class="col-xs-12 col-md-4"> <input class="form-control mr-sm-2" type="text" id="numProceso" name="numProceso" placeholder="SDM-CPS-XXXX-2021" aria-label="Search"></div>
                </div>

                <div class="row espacio">
                    <div class="col-xs-12 col-md-4 col-md-offset-2">
                        <font color="#4C531E"><b>Numero de identificacion:</b></font>
                    </div>
                    <div class="col-xs-12 col-md-4"><input class="form-control mr-sm-2" type="text" id="numIdentificacion" name="numIdentificacion" placeholder="1032XXXX43" aria-label="Search">
                    </div>
                </div>

                <div class="row espacio">
                    <div class="col-xs-12 col-md-4 col-md-offset-2">
                        <font color="#4C531E"><b>Etapa Contractual:</b></font>
                    </div>
                    <div class="col-xs-12 col-md-4"><input class="form-control mr-sm-2" type="text" id="etapaContractual" name="etapaContractual" placeholder="EJECUCI&Oacute;N/TERMINADO" aria-label="Search"></div>
                </div>

                <div class="row espacio">
                    <div class="col-xs-12 col-md-4 col-md-offset-2">
                        <div class="row">
                            <div class="col-xs-12 col-md-6">
                                <font color="#4C531E"><b>Valor desde :</b></font>
                            </div>
                            <div class="col-xs-12 col-md-6"><input class="form-control mr-sm-2" type="text" id="valorini" name="valorini" placeholder="1000XXX000" aria-label="Search"></div>
                        </div>

                    </div>
                    <div class="col-xs-12 col-md-4">
                        <div class="row">
                            <div class="col-xs-12 col-md-6">
                                <font color="#4C531E"><b>Valor hasta :</b></font>
                            </div>
                            <div class="col-xs-12 col-md-6"><input class="form-control mr-sm-2" type="text" id="valorfin" name="valorfin" placeholder="2000XXX000" aria-label="Search"></div>
                        </div>
                    </div>

                </div>

                <div class="row espacio">
                    <div class="col-xs-12 col-md-4 col-md-offset-2">
                        <font color="#4C531E"><b>Nombre del contratista:</b></font>
                    </div>
                    <div class="col-xs-12 col-md-4"> <input class="form-control mr-sm-2" type="text" id="nombreContratista" name="nombreContratista" placeholder="FERNANDO AGXXXLAR PEREZ" aria-label="Search"></div>
                </div>

                <div class="row espacio">
                    <div class="col-xs-12 col-md-4 col-md-offset-2">
                        <div class="row">
                            <div class="col-xs-12 col-md-6">
                                <font color="#4C531E"><b>Fecha desde :</b></font>
                            </div>
                            <div class="col-xs-12 col-md-6"><input type="date" id="fechaDesde" name="fechaDesde" value="2019-01-01" min="2018-01-01" max="2022-01-31"></div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-4">
                        <div class="row">
                            <div class="col-xs-12 col-md-6">
                                <font color="#4C531E"><b>Fecha hasta :</b></font>
                            </div>
                            <div class="col-xs-12 col-md-6"> <input type="date" id="fechaHasta" name="fechaHasta" value="2021-12-01" min="2018-01-01" max="2022-01-31"></div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row espacio">
                    <div class="col-xs-12 col-md-12 text-center">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit" id="search" name="search">Busqueda</button>
                    </div>
                </div>
                <div class="row espacio">
                    <div class="col-xs-12 col-md-12 text-center">
                        <a href="https://community.secop.gov.co/Public/App/AnnualPurchasingPlanEditPublic/View?id=129068">
                            <font color="#4C531E"><b>Plan anual de adquisiciones</b></font>
                        </a>
                    </div>
                </div>
                <div class="row espacio">
                    <div class="col-xs-12 col-md-8" align="center">
                        <div class="g-recaptcha" data-sitekey="6LdnLAwTAAAAAG9ZwkJN-L6sEwE06HvbWLF9i519">
                        </div>
                    </div>
                </div>


            </div>
        </form>

        <!-- Begin page content -->

        <div class="s2">
            <hr>
            <div class="row espacio">
                <div class="table col-12 col-md-12 ">
                    <!-- Contenido -->
                    <div class="table-responsive">

                        <table class="table table-bordered">

                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">No. de contrato</th>
                                    <th scope="col">Link Secop</th>
                                    <th scope="col">Nombre del contratista</th>
                                    <th scope="col">Num Identificacion</th>
                                    <th scope="col">Valor</th>
                                    <th scope="col">Naturaleza Jur</th>
                                    <th scope="col">Etapa contractual</th>
                                    <th scope="col">Objeto contractual</th>
                                    <th scope="col">Interventores</th>
                                    <th scope="col">Fecha de iniciacion</th>
                                    <th scope="col">Fecha de terminacion</th>
                                    <th scope="col">Tipo Contrato</th>
                                    <th scope="col">Proceso</th>
                                </tr>
                            </thead>
                            <tbody>



                            </tbody>
                        </table>

                    </div>

                    <!-- Fin Contenido -->
                </div>
            </div>
            <!-- Fin row -->


        </div>
    </div>