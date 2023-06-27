<!--Formulario de Radicacion Web
Author: Alex Eslava-->

<script src="js/jquery.min.js">
</script>

<script type="text/javascript">
    if (document.getElementById('files')) {
        var fileInput = document.getElementById('files');
        var filename = fileInput.files[0].name;
        alert(fileInput.files[0].name);
    }

    // Validacion Prohibido copiar y pegare en el campo email

    window.onload = function() {
        var myInput = document.getElementById('emailvalida');
        myInput.onpaste = function(e) {
            e.preventDefault();
            alert("esta acción está prohibida");
        }

        myInput.oncopy = function(e) {
            e.preventDefault();
            alert("esta acción está prohibida");
        }
    }

    //deshabilitar boton para radicar
    function Disabled() {
        document.pqrs.generaRad.disabled = false;
    }

    // funcion desplegar campo en caso de seleccion si el tipo es ciudadano empresa o anonimo

    function Dignatario() {
        var select = document.getElementById('tipoIdentificacion');
        var option = select.options[select.selectedIndex];

        if (option.value != 1) {
            document.pqrs.dignatario.disabled = false;
            document.pqrs.test1ck3.disabled = true;
        }
        if (option.value == 1) {
            document.pqrs.dignatario.disabled = true;
            document.pqrs.test1ck3.disabled = false;
        }
        if (option.value == 4) {
            document.pqrs.txtbusca.required = false;
            document.pqrs.txtbusca.disabled = true;
            document.pqrs.tipo_persona.required = false;
            document.pqrs.tipo_persona.disabled = true;
            document.pqrs.dignatario.disabled = true;
        }

        if (option.value != 4) {
            document.pqrs.txtbusca.required = true;
            document.pqrs.tipo_persona.required = true;
            document.pqrs.txtbusca.disabled = false;
            document.pqrs.tipo_persona.disabled = false;
        }
    }

    //funciones ajax para llamar los formularios complementarios a ciudadanos empresas y anonimos

    $(document).ready(function() {
        $("#txtbusca").keyup(function() {
            var parametros = "txtbusca=" + $(this).val() + "&tipo=" + document.pqrs.tipoIdentificacion.value
            $.ajax({
                data: parametros,
                url: 'salidaBusqueda.php',
                type: 'post',
                beforeSend: function() {},
                success: function(response) {
                    $(".salida").html(response);
                },
                error: function() {
                    alert("error")
                }
            });
        })
    })


    $(document).ready(function() {
        $('#tipoIdentificacion').on('change', function() {
            var parametros = "tipoIdentificacion=" + $(this).val();
            $.ajax({
                data: parametros,
                url: 'salidaAnonimo.php',
                type: 'post',
                beforeSend: function() {},
                success: function(response) {
                    $(".salida2").html(response);
                },
                error: function() {
                    alert("error")
                }
            });
        })
    })


    $(document).ready(function() {

        $('#provincia').on('change', function() {
            var provinciaID = $(this).val();
            if (provinciaID) {
                $.ajax({
                    type: 'POST',
                    url: 'ajaxData.php',
                    data: 'id_provincia=' + provinciaID,
                    success: function(html) {
                        $('#municipio').html(html);
                    }
                });
            } else {
                $('#municipio').html('<option value="">Seleccione un departamento primero</option>');
            }
        });
    });


    $(document).ready(function() {
        $('#localidadhechos').on('change', function() {
            var localidadhechos = $(this).val();
            if (localidadhechos) {
                $.ajax({
                    type: 'POST',
                    url: 'ajaxDataLoc.php',
                    data: 'id_localidadhechos=' + localidadhechos,
                    success: function(html) {
                        $('#upzHechos').html(html);
                    }
                });
            } else {
                $('#upzHechos').html('<option value="">Seleccione una localidad</option>');
            }
        });
    });


    $(document).ready(function() {
        $('#upzHechos').on('change', function() {
            var upzHechos = $(this).val();
            if (upzHechos) {
                $.ajax({
                    type: 'POST',
                    url: 'ajaxDataBarrio.php',
                    data: 'id_upzHechos=' + upzHechos,
                    success: function(html) {
                        $('#barrioHechos').html(html);
                    }
                });
            } else {
                $('#barrioHechos').html('<option value="">Seleccione un barrio</option>');
            }
        });
    });
</script>









<?php
//Alex Eslava

//940 pixeles para trabajar con el formulario
//5854 directrices AApara publicacion para manejo de contrastes


//1. titulo comentariado
//2. descripcion del formulario que se vqa a mostrar en la pagina <p> por fuera del formularios
//3. color de las letras del mismo Color
//4. pagina de inicio que se encarga de hacer la busqueda, copiar el estilo de ese botones
//5. numero de identificacionTercero lo importante es no usuaRadica
//6. placeholder todos dicen buscar, colocar mas bien ejemplo que tipos de valores van.
//7. responsive


//datos captcha sumistrados

include_once('config.php');
include_once('Controlador.php');
define("CLAVE_SECRETA", "6LdnLAwTAAAAAH2otyFCmIkVyBEF_SxsySQc4dCm");
$ruta_raiz = "/var/www/html/form/";
$ADODB_COUNTRECS = false;
require_once("$ruta_raiz/include/db/ConnectionHandler.php");
include "config.php";
$db = new ConnectionHandler($ruta_raiz);
$db->conn->SetFetchMode(ADODB_FETCH_ASSOC);
$db->conn->BeginTrans();


$db_operacion = new Controlador($db);
$pasaValidacion = FALSE;
$stid = array();
$excel = ($excel) ? $excel : 0;

//funcion validar token

function verificarToken($token, $claveSecreta)
{
    # La API en donde verificamos el token
    $url = "https://www.google.com/recaptcha/api/siteverify";
    # Los datos que enviamos a Google
    $datos = [
        "secret" => $claveSecreta,
        "response" => $token,
    ];
    // Crear opciones de la petición HTTP
    $opciones = array(
        "http" => array(
            "header" => "Content-type: application/x-www-form-urlencoded\r\n",
            "method" => "POST",
            "content" => http_build_query($datos), # Agregar el contenido definido antes
        ),
    );
    # Preparar petición
    $contexto = stream_context_create($opciones);
    # Hacerla
    $resultado = file_get_contents($url, false, $contexto);
    # Si hay problemas con la petición (por ejemplo, que no hay internet o algo así)
    # entonces se regresa false. Este NO es un problema con el captcha, sino con la conexión
    # al servidor de Google
    if ($resultado === false) {
        # Error haciendo petición
        return false;
    }
    //echo $resultado;

    # En caso de que no haya regresado false, decodificamos con JSON
    # https://parzibyte.me/blog/2018/12/26/codificar-decodificar-json-php/

    $resultado = json_decode($resultado);
    # La variable que nos interesa para saber si el usuario pasó o no la prueba
    # está en success
    $pruebaPasada = $resultado->success;
    # Regresamos ese valor, y listo (sí, ya sé que se podría regresar $resultado->success)
    return $pruebaPasada;
}




//eventos post

if (isset($_POST['search']) && isset($_POST['txtbusca'])) {
    //aca fue el ultimo cambio quitar 4 lineas
    //if (!isset($_POST["g-recaptcha-response"]) || empty($_POST["g-recaptcha-response"])) {
    //	$message = "Debes completar el captcha";
    //    echo "<script type='text/javascript'>alert('$message');</script>";
    //}

    # Antes de comprobar usuario y contraseña, vemos si resolvieron el captcha
    $token = $_POST["g-recaptcha-response"];
    $verificado = verificarToken($token, CLAVE_SECRETA);
    # Si no ha pasado la prueba
    if ($verificado) {
        //pasa
    } else {

        $message = "Lo siento, no pasaste validacion CAPTCHA ";
        echo "<script type='text/javascript'>alert('$message');</script>";
        $db->conn->RollbackTrans();
    }
}

?>

<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Formulario Radicacion de correspondencia</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="assets/sticky-footer-navbar.css" rel="stylesheet">

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link rel="stylesheet" href="js/jquery.datetimepicker.min.css" />
    <script type="text/javascript" src="js/jquery.datetimepicker.full.js"></script>

    <script type="text/javascript">
        function validarContrasena() {
            var pass1 = $('[name=correoNotif]');
            var pass2 = $('[name=validaemail]');
            var valor1 = pass1.val();
            var valor2 = pass2.val();
            if (valor1.length != 0 && valor1 == valor2) {
                return 1;
            } else {
                return 0;
            }
        }





        function radicar() {

            //validar email
            valorfirma = validarContrasena();

            if (valorfirma == 1) {
                document.formulario.submit();
            } else {
                alert("los correos no coinciden intente nuevamente");

                event.preventDefault();
                document.getElementById("validaemail").value = "";
                document.getElementsByClassName("limpiarinput")[0].value = "";

            }
        }





        function pasarDir() {
            if (document.getElementById("direccion").value) {
                document.getElementById("direccion2").value = document.getElementById("direccion").value;
            }

        }



        function agregarTD() {
            if (document.getElementById("tipodireccion").value) {
                document.getElementById("direccion").value += document.getElementById("tipodireccion").value;
            }

        }

        function agregarbis1() {
            if (document.getElementById("bis1").value) {
                document.getElementById("direccion").value += " " + document.getElementById("bis1").value;
            }
        }

        function agregarestesur1() {
            if (document.getElementById("estesur1").value) {
                document.getElementById("direccion").value += " " + document.getElementById("estesur1").value;
            }
        }


        function agregarestesur2() {
            if (document.getElementById("estesur2").value) {
                document.getElementById("direccion").value += " " + document.getElementById("estesur2").value;
            }
        }




        function agregarnum1() {
            if (document.getElementById("numdir1").value) {
                document.getElementById("direccion").value += " " + document.getElementById("numdir1").value;
            }
        }

        function agregarnum2() {
            if (document.getElementById("numdir2").value) {
                document.getElementById("direccion").value += " " + document.getElementById("numdir2").value;
            }
        }

        function agregarnum3() {
            if (document.getElementById("numdir3").value) {
                document.getElementById("direccion").value += " " + document.getElementById("numdir3").value;
            }
        }

        function agregarnum4() {
            if (document.getElementById("numdir4").value) {
                document.getElementById("direccion").value += " " + document.getElementById("numdir4").value;
            }
        }


        function clearInput() {
            var getValue = document.getElementById("direccion");
            if (getValue.value != "") {
                getValue.value = "";
            }
        }



        function agregarletra1() {
            if (document.getElementById("letra1").value) {
                document.getElementById("direccion").value += document.getElementById("letra1").value;
            }
        }

        function agregarletra2() {
            if (document.getElementById("letra2").value) {
                document.getElementById("direccion").value += document.getElementById("letra2").value;
            }
        }

        function agregarletra3() {
            if (document.getElementById("letra3").value) {
                document.getElementById("direccion").value += document.getElementById("letra3").value;
            }
        }



        var numero = 0;

        // Funciones comunes
        c = function(tag) { // Crea un elemento
            return document.createElement(tag);
        }
        d = function(id) { // Retorna un elemento en base al id
            return document.getElementById(id);
        }
        e = function(evt) { // Retorna el evento
            return (!evt) ? event : evt;
        }
        f = function(evt) { // Retorna el objeto que genera el evento
            return evt.srcElement ? evt.srcElement : evt.target;
        }

        addField = function() {
            container = d('files');

            span = c('SPAN');
            span.className = 'file';
            span.id = 'file' + (++numero);

            field = c('INPUT');
            field.name = 'archivos[]';
            field.type = 'file';

            a = c('A');
            a.name = span.id;
            a.href = '#';
            a.onclick = removeField;
            //a.innerHTML = 'Quitar';

            span.appendChild(field);
            span.appendChild(a);
            container.appendChild(span);


        }
        removeField = function(evt) {
            lnk = f(e(evt));
            span = d(lnk.name);
            span.parentNode.removeChild(span);
        }



        function validate() {
            const areatextarea = document.querySelector("#descripcionpqrs");
            const areatext = document.querySelector("#descripcionpqrs").value.length;
            const textcount = document.querySelector("#textcount");
            const wordcount = document.querySelector("#words_count");
            textcount.innerHTML = areatext;


            if (areatext > 1300) {
                textcount.classList.add("text-danger");
                areatextarea.classList.add("textarea_danger");
            } else {
                textcount.classList.remove("text-danger");
                areatextarea.classList.remove("textarea_danger");
            }

            if (areatext < 1) {
                wordcount.classList.add("d-none");
            } else {
                wordcount.classList.remove("d-none");
            }
        }

        function submitForm(event) {
            //   event.preventDefault();


        }
    </script>


</head>

<style>
    .textarea {
        resize: none;
        height: 200px;
        transition: all 0.5s;
        border: 2px solid #DDDDDD;
        width: 100% !important;
    }

    .textarea_danger {
        border: 2px solid red !important;
    }

    .textarea:focus {
        box-shadow: none;
        outline: none;
        border: 2px solid blue;
    }

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
        background-color: #252525;
        background-image: none;
        border-color: ##879225
    }

    .btn-outline-success:hover {
        color: #fff;
        background-color: #879225;
        border-color: #252525
    }

    .box-group {
        padding: 2vw;
    }

    .lool {
        display: none;
    }


    input[type=radio]:checked~div.lool {
        display: block;
        color: red;
    }

    input[type=checkbox]:checked~div.lool {
        display: block;
        color: red;
    }
</style>


<!-- ----- ----- ----- ----- ----- ----- ----- ----- Bloque Seccion ----- ----- ----- ----- ----- ----- ----- ----- ----- ------ -->

<div class='s1'>
    <div class='container-fluid seccion'>


        <form class="form-inline2" name="pqrs" id="pqrs" action="formvalida.php" method="POST" enctype="multipart/form-data" onsubmit="submitForm(event)">
            <div class="row espacio">

            </div>
            <div class="box-group">


                <!--<div class="row espacio">
                  <div class="col-xs-12 col-md-8 " align="center">

                    <img src="imagenes/logo-01.png" alt="MDN" width="400" height="150">

                  </div>
                  </div>-->

                <div class="row espacio">
                    <div class="col-xs-12 col-md-8 col-md-offset-2" align="center">

                        <img src="imagenes/logo-01.png" alt="MDN" width="600" height="200">

                    </div>
                </div>

                <div class="row espacio">


                    <div class="col-xs-12 col-md-12" align="center">
                        <h1>
                            <font color="#4D541F">Formulario radicaci&oacute;n de correspondencia</font>
                        </h1>
                        <br>
                        <p>
                            <font color="#252525" size=3>La Secretaria Distrital de Movilidad deja a su disposici&oacute;n el presente formulario donde podr&aacute;
                                radicar ante la Entidad, una petici&oacute;n, queja, reclamo, solicitud, comunicaci&oacute;n, facturas, informes, entre otros.
                                <p>El horario de atenci&oacute;n es de Lunes a Viernes de 7:00 a.m. a 5:00 p.m. y s&aacute;bados de 8:00 a.m. a 12:00 p.m. Tenga presente que, las comunicaciones
                                    que ingresan despu&eacute;s del horario informado ser&aacute;n radicadas a partir del siguiente d&iacute;a h&aacute;bil.
                                <p>

                                    <!-- Button trigger modal -->

                                    <!-- Modal -->
                                <div class="modal fade" id="exampleModalLong1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle1" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">
                                                    <font color="#4D541F"><b>TRATAMIENTO DE DATOS PERSONALES</b></font>
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p align="left">
                                                    <font color="#252525" size=3>
                                                        La Secretar&iacute;a Distrital de Movilidad, como responsable del tratamiento de los datos
                                                        personales contenidos en las bases de datos y/o archivos que gestiona, realiza la
                                                        recolecci&oacute;n, almacenamiento, uso, circulaci&oacute;n y administraci&oacute;n de los mismos garantizando
                                                        la seguridad en cuanto a la confidencialidad, integridad y disponibilidad de la informaci&oacute;n, tal
                                                        como se ha definido en los lineamientos, estrategias, programas, manuales, gu&iacute;as,
                                                        procedimientos, instructivos y demás documentos del Sistema Integrado de Gestión Distrital
                                                        - SIGD de la Secretaría Distrital de Movilidad, vigentes y relacionados con la protecci&oacute;n de
                                                        datos personales, en el marco del Modelo Integrado de Planeaci&oacute;n y Gesti&oacute;n - MIPG.<p align="left">
                                                            En ning&uacute;n caso la Entidad permite el acceso a la informaci&oacute;n reportada por terceros, salvo
                                                            en casos expresamente previstos en la ley, ni la violaci&oacute;n de derechos de los titulares.
                                                        <p align="left">
                                                            La recolecci&oacute;n de la informaci&oacute;n, entre otras, tendrá como finalidad permitir el desarrollo de
                                                            las funciones propias de la Secretar&iacute;a Distrital de Movilidad, conforme al Acuerdo 257 de
                                                            2006 y el Decreto 672 de 2018, la cual, siendo entidad p&uacute;blica, está exenta de solicitar
                                                            autorizaci&oacute;n para el tratamiento de datos, de conformidad con lo establecido en el Artículo
                                                            10 de Ley 1581 de 2012. No obstante, la entidad ha establecido la finalidad en ciertas
                                                            autorizaciones especiales otorgadas por el titular del dato (Funcionarios, Proveedores), o en
                                                            los documentos espec&iacute;ficos donde se regule cada tipo o proceso de tratamiento de datos
                                                            personales. La finalidad particular del tratamiento de un dato personal se informar&aacute; al titular
                                                            del dato personal al obtener su autorizaci&oacute;n.
                                                        <p align="left">
                                                            El almacenamiento y uso de la informaci&oacute;n personal se regirá por lo dispuesto en la Ley
                                                            1581 de 2012, el Decreto 1377 de 2013, y las dem&aacute;s normas que los modifiquen, adicionen
                                                            o complementen, teniendo en cuenta el derecho que tienen todas las personas de conocer,
                                                            actualizar y rectificar la(s) informaci&oacute;n(es) que la Entidad registre en las bases de datos o
                                                            archivos susceptibles de tratamiento.</span>
                                                    </font>
                                                </p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-outline-success my-2 my-sm-0" data-dismiss="modal">Cerrar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class=" lool row espacio">
                                    <div class="col-xs-12 col-md-12 text-center">
                                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit" id="search" name="search">Siguiente</button>
                                    </div>
                                </div>

                    </div>

                    <!--<div class="col-xs-12 col-md-12" align="center">
                      <div class="table-responsive">

                          <table class="table table-bordered" style="width:10%">
                                  <tr>
				<img class="media-object" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/08-01-2023/pdf.png" alt="icono de documento pdf" width="48px">
				 <a href="" role="button" target="_blank">
                                      <font color="#252525" size=3><b>Instructivo</b></font></a>
				 <p><font color="#252525" size=3>Este instructivo permite ser una guia para el correcto diligenciamiento del formulario de radicacion de correspondencia.</font>
                                  </tr>
                                      </table>
                      </div>
                  </div>-->

                </div>
                <hr>


                <div class="row espacio">
                    <div class="table col-12 col-md-12 ">

                        <?php if (strlen($solicitud) == 15) { ?>


                            <div class="modal fade" id="exampleModalLong2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header" align="CENTER">
                                            <h5 class="modal-title" id="exampleModalLongTitle">
                                                <font color="#252525" size=3><b>AVISO DE AUTORIZACI&Oacute;N</b></font>
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p align="left">
                                                <font color="#252525" size=3>
                                                    Usted AUTORIZA de manera general a la SECRETAR&Iacute;A DISTRITAL DE MOVILIDAD -SDM-, a NOTIFICARLE en la direcci&oacute;n de correo electr&oacute;nico informada, todas las comunicaciones que resuelvan los tr&aacute;mites en los que usted tenga inter&eacute;s, de acuerdo a la calidad en la que act&uacute;e y que mediante la b&uacute;squeda en los aplicativos internos de la SDM se encuentren pendientes de notificaci&oacute;n. LA SDM queda facultada para comunicar y/o notificar en la direcci&oacute;n de correo electr&oacute;nico informada por usted, hasta tanto no se revoque la presente autorizaci&oacute;n mediante comunicaci&oacute;n escrita. <p align="left"> Es as&iacute; como la autorizaci&oacute;n para comunicar y/o notificar una comunicaci&oacute;n particular, incluye la autorizaci&oacute;n para notificar Actos Administrativos, modifique, adicione, revoque, resuelva los recursos de Ley y otros. La notificaci&oacute;n electr&oacute;nica tiene la misma validez de una notificaci&oacute;n personal y por lo tanto genera las mismas consecuencias legales.
                                                        </span></font>
                                            </p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-outline-success my-2 my-sm-0" data-dismiss="modal">Cerrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>




                            <!-- Contenido -->
                            <div class="table-responsive">


                                <div class="alert alert-success" role="alert">
                                    <h4 class="alert-heading">Radicaci&oacute;n exitosa!</h4>
                                    <p>Ha sido radicada su petici&oacuten mediante el n&uacute;mero de radicado <?php echo $solicitud; ?>.</p>
                                    <hr>
                                    <p class="mb-0">Para hacer seguimiento a su petici&oacute;n ingrese al siguiente link: <a href="https://gestiondocumentalws.movilidadbogota.gov.co/consultaWeb/">https://gestiondocumentalws.movilidadbogota.gov.co/consultaWeb/</a></p>
                                </div>


                            </div>
                        <?php } elseif ($solicitud == 1) {

                        ?> <!-- Contenido -->
                            <div class="table-responsive">


                                <div class="alert alert-danger" role="alert">
                                    <h4 class="alert-heading">Ha ocurrido un error!</h4>
                                    <p>Ha ocurrido un error interno en el sistema, por favor intente nuevamente.</p>
                                    <hr>
                                    <p class="mb-0">Si error persiste por favor comunicarse a la linea de servicio al cliente: </a></p>
                                </div>


                            </div>
                        <?php
                        } ?>

                        <!-- Fin Contenido -->
                    </div>
                </div>


                <font color="#252525" size=3>(<font color="red">*</font>) Campos obligatorios </font>
                <div class="row espacio">
                    <div class="col-xs-12 col-md-5 ">
                        <font color="#252525" size=3><b>Tipo</b></font>
                        <font color="red">*</font></b></font>
                    </div>
                    <div class="col-xs-12 col-md-5"> <select class="form-control mr-sm-2" name="tipoIdentificacion" id="tipoIdentificacion" placeholder="Buscar" aria-label="Search" onChange="Dignatario()" required>
                            <option value="0">--SELECCIONE--</option>
                            <option value="1">CIUDADANO</option>
                            <option value="2">EMPRESA</option>
                            <option value="3">ENTIDAD</option>
                            <option value="4">ANONIMO</option>

                        </select></div>
                </div>

                <div class="row espacio salida2"></div>




                <div class="row espacio">
                    <div class="col-xs-12 col-md-5 ">
                        <font color="#252525" size=3><b>N&uacute;mero de identificaci&oacute;n <font color="red">*</font></b></font>
                    </div>
                    <div class="col-xs-12 col-md-5">
                        <input class="form-control mr-sm-2" type="text" id="txtbusca" name="txtbusca" placeholder="103235XXXXXXXX2" aria-label="Search" required>

                    </div>
                </div>

                <div class="row espacio salida"></div>


                <div class="row espacio">
                    <div class="col-xs-12 col-md-5 ">
                        <font color="#252525" size=3><b>Persona que firma o realiza petici&oacute;n (solo si representa una empresa o entidad): </b></font>
                    </div>
                    <div class="col-xs-12 col-md-5"><input class="form-control mr-sm-2" type="text" id="dignatario" name="dignatario" placeholder="SOLO PARA ENTIDADES O EMPRESAS" aria-label="Search" disabled></div>
                </div>

                <?php
                $sqlTipoPersona  = "SELECT LIS_CODI, LIS_VALOR FROM SGD_LIS_LISTA WHERE LIS_TIPO = 'TIPO_PERSONA' ORDER BY 1";
                $tpersona = $db->conn->query($sqlTipoPersona);
                ?>
                <div class="row espacio">
                    <div class="col-xs-12 col-md-5 ">
                        <font color="#252525" size=3><b>Tipo persona<font color="red">*</font></b></font>
                    </div>
                    <div class="col-xs-12 col-md-5">
                        <select class="form-control mr-sm-2" name="tipo_persona" id="tipo_persona" class="select" required>
                            <option value="">--SELECCIONE--</option>
                            <? foreach ($tpersona as $tp) : ?>
                                <option value="<? echo $tp['LIS_CODI'] ?>" <? echo $rs->fields["SGD_CIU_TPERSONA"] == $tp['LIS_CODI'] ? 'selected' : '' ?>><? echo $tp['LIS_VALOR'] ?></option>
                            <? endforeach;
                            $tpersona->Close(); ?>
                        </select>
                    </div>
                </div>

                <?php
                $sqlConDCiudadano  = "SELECT LIS_CODI, LIS_VALOR AS CIUDADANO FROM SGD_LIS_LISTA WHERE LIS_TIPO = 'COND_CIUDADANO'";
                $cciuda = $db->query($sqlConDCiudadano);
                ?>


                <div class="row espacio">
                    <div class="col-xs-12 col-md-10 ">
                        <div style="clear:both;">
                            <font color="#252525" size=3><b>Agregar datos opcionales del veh&iacute;culo</b></font>
                            <input type="checkbox" id="test1ck" name="test1ck">

                            <div class="lool row espacio">
                                <div class="col-xs-12 col-md-5 ">
                                    <font color="#252525" size=3><b>Tipo de Veh&iacute;culo</b></font>
                                </div>
                                <div class="col-xs-12 col-md-5">
                                    <?php
                                    $sql_tipo_vehiculo = "SELECT LIS_CODI_INTERNO, LIS_VALOR FROM SGD_LIS_LISTA WHERE LIS_NOMBRE = 'VEHICULO' ORDER BY LIS_VALOR";
                                    $Rs_tipo_vehiculo = $db->conn->query($sql_tipo_vehiculo);

                                    ?>
                                    <select class="form-control mr-sm-2" name="tipovehiculo" id="tipovehiculo" placeholder="Buscar" aria-label="Search">
                                        <option value="">--SELECCIONE--</option>

                                        <?php
                                        while (!$Rs_tipo_vehiculo->EOF) {
                                            echo '<option value="' . $Rs_tipo_vehiculo->fields['LIS_CODI_INTERNO'] . '">' . $Rs_tipo_vehiculo->fields['LIS_VALOR'] . '</option>';
                                            $Rs_tipo_vehiculo->MoveNext();
                                        }
                                        $Rs_tipo_vehiculo->Close();
                                        ?>
                                    </select>

                                </div>
                            </div>

                            <div class="lool row espacio">
                                <div class="col-xs-12 col-md-5 ">
                                    <font color="#252525" size=3><b>N&uacute;mero de placa</b></font>
                                </div>
                                <div class="col-xs-12 col-md-5"><input class="form-control mr-sm-2" type="text" id="numeroPlaca" name="numeroPlaca" placeholder="WWW123" aria-label="Search">
                                </div>
                            </div>

                            <div class="lool row espacio">
                                <div class="col-xs-12 col-md-5 ">
                                    <font color="#252525" size=3><b>N&uacute;mero de comparendo</b></font>
                                </div>
                                <div class="col-xs-12 col-md-5"><input class="form-control mr-sm-2" type="text" id="numeroComparendo" name="numeroComparendo" placeholder="11001000000013216739" aria-label="Search"></div>
                            </div>
                            <div class="lool row espacio">
                                <div class="col-xs-12 col-md-5 ">
                                    <font color="#252525" size=3><b>C&oacute;digo de infraccion</b></font>
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <?php
                                    $sql_infraccion = "SELECT SGD_COD_INFRACCION, SGD_DESCRIPCION_INFRACCION FROM SGD_INF_INFRACCIONES ORDER BY SGD_COD_INFRACCION";
                                    $Rs_infraccion = $db->conn->query($sql_infraccion);

                                    ?>
                                    <select class="form-control mr-sm-2" name="codinfraccion" id="codinfraccion" placeholder="Buscar" aria-label="Search">
                                        <option value="0">--SELECCIONE--</option>

                                        <?php

                                        while (!$Rs_infraccion->EOF) {
                                            echo '<option value="' . $Rs_infraccion->fields['SGD_COD_INFRACCION'] . '">' . $Rs_infraccion->fields['SGD_COD_INFRACCION'] . '</option>';
                                            $Rs_infraccion->MoveNext();
                                        }
                                        $Rs_infraccion->Close();
                                        ?>
                                    </select>
                                </div>

                            </div>

                            <div class="lool row espacio">
                                <div class="col-xs-12 col-md-5 ">
                                    <font color="#252525" size=3><b>N&uacute;mero de licencia de conducci&oacute;n</b></font>
                                </div>
                                <div class="col-xs-12 col-md-5"><input class="form-control mr-sm-2" type="text" id="licConduccion" name="licConduccion" placeholder="1036345123" aria-label="Search"></div>
                            </div>

                            <div class="lool row espacio">
                                <div class="col-xs-12 col-md-3 ">
                                    <font color="#252525" size=3><b>Fecha del comparendo</b></font>
                                </div>
                                <div class="col-xs-12 col-md-5">
                                    <input class="form-control mr-sm-2" type="text" name='fechaComparendo' value='<?= $fecha_comp ?>' <?= $fecha_comp ?> class="tex_area" id="fechaComparendo" />
                                    <script type="text/javascript">
                                        $("#fechaComparendo").datetimepicker({
                                            format: "Y/m/d H:i:s",
                                            formatTime: "H:i:s",
                                            formatDate: "Y/m/d",
                                        });
                                        $.datetimepicker.setLocale("es");
                                    </script>


                                </div>
                            </div>

                        </div>

                    </div>
                </div>


                <div class="row espacio">
                    <div class="col-xs-12 col-md-10 ">
                        <div style="clear:both;">
                            <font color="#252525" size=3><b>Agregar datos opcionales del contrato</b></font>
                            <input type="checkbox" id="test1ck" name="test1ck">


                            <div class="lool row espacio">
                                <div class="col-xs-12 col-md-5 ">
                                    <font color="#252525" size=3><b>Vigencia del contrato</b></font>
                                </div>
                                <div class="col-xs-12 col-md-5"><input class="form-control mr-sm-2" type="text" id="vigenciacontrato" name="vigenciacontrato" placeholder="2022" aria-label="Search" length='4'>
                                </div>
                            </div>

                            <div class="lool row espacio">
                                <div class="col-xs-12 col-md-5 ">
                                    <font color="#252525" size=3><b>N&uacute;mero de contrato</b></font>
                                </div>
                                <div class="col-xs-12 col-md-5"><input class="form-control mr-sm-2" type="text" id="numContrato" name="numContrato" placeholder="1188" aria-label="Search" length="4"></div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row espacio">
                    <div class="col-xs-12 col-md-10 ">
                        <div style="clear:both;">
                            <font color="#252525" size=3><b>Agregar datos opcionales de enfoque diferencial del ciudadano</b></font>
                            <input type="checkbox" id="test1ck3" name="test1ck3" disabled>


                            <div class="lool row espacio">
                                <div class="col-xs-12 col-md-5 ">
                                    <font color="#252525" size=3><b>G&eacute;nero</b></font>
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <?php
                                    $sqlGenero  = "SELECT LIS_CODI, LIS_VALOR FROM SGD_LIS_LISTA WHERE LIS_TIPO = 'GENERO'";
                                    $ciuGenero = $db->conn->query($sqlGenero);
                                    ?>
                                    <select class="form-control mr-sm-2" name="genero" id="genero" placeholder="Buscar" aria-label="Search">
                                        <option value="0">--SELECCIONE--</option>
                                        <?php
                                        while (!$ciuGenero->EOF) {
                                            echo '<option value="' . $ciuGenero->fields['LIS_CODI'] . '">' . utf8_decode($ciuGenero->fields['LIS_VALOR']) . '</option>';
                                            $ciuGenero->MoveNext();
                                        }
                                        $ciuGenero->Close();
                                        ?>
                                    </select>
                                </div>

                            </div>



                            <div class="lool row espacio">
                                <div class="col-xs-12 col-md-5 ">
                                    <font color="#252525" size=3><b>Orientaci&oacute;n Sexual</b></font>
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <?php

                                    $sqlOrientacion = "SELECT LIS_CODI, LIS_VALOR FROM SGD_LIS_LISTA WHERE LIS_TIPO = 'ORIENTACION_S'";
                                    $ciuOrientacion = $db->conn->query($sqlOrientacion);
                                    ?>
                                    <select class="form-control mr-sm-2" name="orientacion" id="orientacion" placeholder="Buscar" aria-label="Search">
                                        <option value="0">--SELECCIONE--</option>
                                        <?php
                                        while (!$ciuOrientacion->EOF) {
                                            echo '<option value="' . $ciuOrientacion->fields['LIS_CODI'] . '">' . $ciuOrientacion->fields['LIS_VALOR'] . '</option>';
                                            $ciuOrientacion->MoveNext();
                                        }
                                        $ciuOrientacion->Close();
                                        ?>
                                    </select>
                                </div>

                            </div>

                            <div class="lool row espacio">
                                <div class="col-xs-12 col-md-5 ">
                                    <font color="#252525" size=3><b>Grupo Poblacional</b></font>
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <?php

                                    $sqlGrupoPoblacional  = "SELECT LIS_CODI, LIS_VALOR FROM SGD_LIS_LISTA WHERE LIS_TIPO = 'GRUPO_POBLACIONAL'";
                                    $ciuGrupoP = $db->conn->query($sqlGrupoPoblacional);
                                    ?>
                                    <select class="form-control mr-sm-2" name="grupoPob" id="grupoPob" placeholder="Buscar" aria-label="Search">
                                        <option value="0">--SELECCIONE--</option>
                                        <?php
                                        while (!$ciuGrupoP->EOF) {
                                            echo '<option value="' . $ciuGrupoP->fields['LIS_CODI'] . '">' . utf8_encode($ciuGrupoP->fields['LIS_VALOR']) . '</option>';
                                            $ciuGrupoP->MoveNext();
                                        }
                                        $ciuGrupoP->Close();
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="lool row espacio">
                                <div class="col-xs-12 col-md-5 ">
                                    <font color="#252525" size=3><b>Persona con discapacidad</b></font>
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <?php
                                    $sqlDiscapcidad  = "SELECT LIS_CODI, LIS_VALOR FROM SGD_LIS_LISTA WHERE LIS_TIPO = 'DISCAPACIDAD'";
                                    $ciuDiscapacidad = $db->conn->query($sqlDiscapcidad);
                                    ?>
                                    <select class="form-control mr-sm-2" name="discapacidad" id="discapacidad" placeholder="Buscar" aria-label="Search">
                                        <option value="0">--SELECCIONE--</option>
                                        <?php
                                        while (!$ciuDiscapacidad->EOF) {
                                            echo '<option value="' . $ciuDiscapacidad->fields['LIS_CODI'] . '">' . utf8_encode($ciuDiscapacidad->fields['LIS_VALOR']) . '</option>';
                                            $ciuDiscapacidad->MoveNext();
                                        }
                                        $ciuDiscapacidad->Close();
                                        ?>
                                    </select>
                                </div>

                            </div>


                            <div class="lool row espacio">
                                <div class="col-xs-12 col-md-5 ">
                                    <font color="#252525" size=3><b>Grupos &eacute;tnicos</b></font>
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <?php

                                    $sqlEtnico  = "SELECT LIS_CODI, LIS_VALOR FROM SGD_LIS_LISTA WHERE LIS_TIPO = 'GRUPO_ETNICO'";
                                    $ciuGrupoEtnico = $db->query($sqlEtnico);

                                    ?>
                                    <select class="form-control mr-sm-2" name="getnico" id="getnico" placeholder="Buscar" aria-label="Search">
                                        <option value="0">--SELECCIONE--</option>
                                        <?php
                                        while (!$ciuGrupoEtnico->EOF) {
                                            echo '<option value="' . $ciuGrupoEtnico->fields['LIS_CODI'] . '">' . utf8_encode($ciuGrupoEtnico->fields['LIS_VALOR']) . '</option>';
                                            $ciuGrupoEtnico->MoveNext();
                                        }
                                        $ciuGrupoEtnico->Close();
                                        ?>
                                    </select>
                                </div>
                            </div>


                            <div class="lool row espacio">
                                <div class="col-xs-12 col-md-5 ">
                                    <font color="#252525" size=3><b>PPT (Permiso por Protecci&oacute;n temporal)</b></font>
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <select class="form-control mr-sm-2" name="ppt" id="ppt" placeholder="Buscar" aria-label="Search">
                                        <option value="0">--SELECCIONE--</option>
                                        <option value="1">SI</option>;
                                        <option value="2">NO</option>;
                                    </select>
                                </div>
                            </div>



                            <div class="lool row espacio">
                                <div class="col-xs-12 col-md-5 ">
                                    <font color="#252525" size=3><b>Condicion</b></font>
                                </div>
                                <div class="col-xs-12 col-md-5">

                                    <select class="form-control mr-sm-2" name="cond_ciudadano" id="cond_ciudadano" class="select">
                                        <option value="">--SELECCIONE--</option>
                                        <? foreach ($cciuda as $cc) : ?>
                                            <option value="<? echo $cc['LIS_CODI'] ?>" <? echo $cc['LIS_CODI'] == $rs->fields["SGD_CIU_CONDICION"] ? 'selected' : '' ?>><? echo utf8_encode($cc['CIUDADANO']) ?></option>
                                        <? endforeach;
                                        $cciuda->Close(); ?>
                                    </select>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>



                <div class="row espacio">
                    <div class="col-xs-12 col-md-10 ">
                        <div style="clear:both;">
                            <font color="#252525" size=3><b>Agregar datos opcionales de los hechos</b></font>
                            <input type="checkbox" id="test1ck" name="test1ck">

                            <div class="lool row espacio">
                                <div class="col-xs-12 col-md-5 ">
                                    <font color="#252525" size=3><b>Localidad de los hechos</b></font>
                                </div>

                                <?php
                                $queryLocal = "SELECT
                    							SGD_TRES_DESCRIP,
                    							SGD_TRES_CODIGO
                    						from
                    							SGD_TRES_TPRESOLUCION
                    				  		where
                    				  			SGD_TRES_ESTADO = 1
                    						order by
                    							SGD_TRES_CODIGO asc";
                                $rs = $db->conn->query($queryLocal);

                                ?>

                                <div class="col-xs-12 col-md-5">


                                    <select class="form-control mr-sm-2" name="localidadhechos" id="localidadhechos" placeholder="Buscar" aria-label="Search">
                                        <option value="0">--SELECCIONE--</option>

                                        <?php

                                        while (!$rs->EOF) {
                                            echo '<option value="' . $rs->fields['SGD_TRES_CODIGO'] . '">' . $rs->fields['SGD_TRES_DESCRIP'] . '</option>';
                                            $rs->MoveNext();
                                        }
                                        $rs->Close();
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="lool row espacio">
                                <div class="col-xs-12 col-md-5 ">
                                    <font color="#252525" size=3><b>UPZ de los hechos</b></font>
                                </div>
                                <div class="col-xs-12 col-md-5">
                                    <select class="form-control mr-sm-2" name="upzHechos" id="upzHechos" placeholder="Buscar" aria-label="Search">
                                        <option value="0">--SELECCIONE--</option>
                                    </select>
                                </div>
                            </div>



                            <div class="lool row espacio">


                                <div class="col-xs-12 col-md-5 ">
                                    <font color="#252525" size=3><b>Barrio de los hechos </b></font>
                                </div>
                                <div class="col-xs-12 col-md-5">
                                    <select class="form-control mr-sm-2" name="barrioHechos" id="barrioHechos" placeholder="Buscar" aria-label="Search">
                                        <option value="0">--SELECCIONE--</option>

                                    </select>
                                </div>
                            </div>

                            <div class="lool row espacio">
                                <div class="col-xs-12 col-md-5 ">
                                    <font color="#252525" size=3><b>Direcci&oacute;n de los hechos</b></font>
                                </div>
                                <div class="col-xs-12 col-md-5"><input class="form-control mr-sm-2" type="text" id="DireccionHechos" name="DireccionHechos" placeholder="CRA 96 No 134 15" aria-label="Search" length="4" maxlength="60"></div>
                            </div>

                        </div>

                    </div>
                </div>



                <div class="row espacio">
                    <div class="col-xs-12 col-md-5 ">
                        <div class="row">
                            <div class="col-xs-12 col-md-5">
                                <font color="#252525" size=3><b>Continente <font color="red">*</font></b></font>
                            </div>
                            <div class="col-xs-12 col-md-7"> <select class="form-control mr-sm-2" name="continente" id="continente" placeholder="Buscar" aria-label="Search">
                                    <option value="1">AMERICA</option>
                                    <!--<option value="1">EUROPA</option>
                                  <option value="2">ASIA</option>
                                  <option value="3">ARICA</option>-->

                                </select></div>
                        </div>

                    </div>
                    <div class="col-xs-12 col-md-5">
                        <div class="row">
                            <div class="col-xs-12 col-md-5">
                                <font color="#252525" size=3><b>Pa&iacute;s <font color="red">*</font></b></font>
                            </div>
                            <div class="col-xs-12 col-md-7"> <select class="form-control mr-sm-2" name="pais" id="pais" placeholder="Buscar" aria-label="Search">
                                    <option value="170">COLOMBIA</option>
                                    <!--<option value="6">ARGENTINA</option>
                                  <option value="5">BOLIVIA</option>
                                  <option value="1">BRASIL</option>
                                  <option value="7">CHILE</option>
                                  <option value="3">ECUADOR</option>
                                  <option value="4">PERU</option>
                                  <option value="2">VENEZUELA</option>-->
                                </select></div>
                        </div>
                    </div>
                </div>

                <div class="row espacio">


                    <?php
                    $sql_dptos = "SELECT DPTO_CODI,DPTO_NOMB FROM DEPARTAMENTO WHERE ID_CONT = 1 AND ID_PAIS = 170 AND DPTO_CODI !=1";
                    $Rs_dptos = $db->conn->query($sql_dptos);

                    ?>


                    <div class="col-xs-12 col-md-5 ">
                        <div class="row">
                            <div class="col-xs-12 col-md-6">
                                <font color="#252525" size=3><b>Departamento <font color="red">*</font></b></font>
                            </div>
                            <div class="col-xs-12 col-md-6">
                                <select class="form-control mr-sm-2" name="provincia" id="provincia" placeholder="Buscar" aria-label="Search" required>
                                    <option value="11">D.C.</option>

                                    <?php

                                    while (!$Rs_dptos->EOF) {
                                        echo '<option value="' . $Rs_dptos->fields['DPTO_CODI'] . '">' . $Rs_dptos->fields['DPTO_NOMB'] . '</option>';
                                        $Rs_dptos->MoveNext();
                                    }
                                    $Rs_dptos->Close();
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>


                    <div class="col-xs-12 col-md-5">
                        <div class="row">
                            <div class="col-xs-12 col-md-5">
                                <font color="#252525" size=3><b>Municipio <font color="red">*</font></b></font>
                            </div>
                            <div class="col-xs-12 col-md-7">
                                <select class="form-control mr-sm-2" name="municipio" id="municipio" placeholder="Buscar" aria-label="Search">
                                    <option value="1">BOGOTA</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="row espacio">
                    <div class="col-xs-12 col-md-5 ">
                        <font color="#252525" size=3><b>Asunto - Referencia - Descripci&oacute;n del documento <font color="red">*</font></b></font>
                    </div>
                    <div class="col-xs-12 col-md-5"><input class="form-control mr-sm-2" type="text" id="asunto" name="asunto" maxlength="250" placeholder="REFERENCIA - DESCRICION DEL DOCUMENTO " aria-label="Search" required></div>
                </div>

                <div class="row espacio">
                    <div class="col-xs-12 col-md-5 ">
                        <font color="#252525" size=3><b>Descripci&oacute;n PQRS<font color="red">*</font></b></font>
                    </div>
                    <div class="col-xs-12 col-md-5">
                        <textarea class="form-control" id="descripcionpqrs" name="descripcionpqrs" rows="3" placeholder="DESCRIBA SU PETICION O REQUERIMIENTO" maxlength="1500" onkeyup="validate()" required></textarea>
                        <span id="words_count" class="d-none">Letras escritas (Máximo 1500) - <span id="textcount"></span></span>

                    </div>
                </div>


                <div class="row espacio">
                    <div class="col-xs-12 col-md-10 ">

                        <div style="clear:both;">
                            <font color="#252525" size=3><b>Notificarme por correo electr&oacute;nico</b></font>
                            <input type="checkbox" id="test1ck4" name="test1ck4" data-toggle="modal" data-target="#exampleModalLong3">



                            <div class="modal fade" id="exampleModalLong3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header" align="CENTER">
                                            <h5 class="modal-title" id="exampleModalLongTitle">
                                                <font color="#4D541F"><b>AVISO DE AUTORIZACI&Oacute;N</b></font>
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>
                                                <font color="#252525" size=3>
                                                    Usted AUTORIZA de manera general a la SECRETAR&Iacute;A DISTRITAL DE MOVILIDAD <br> -SDM-, a NOTIFICARLE en la direcci&oacute;n de correo electr&oacute;nico informada, todas las comunicaciones que resuelvan los tr&aacute;mites en los que usted tenga inter&eacute;s, de acuerdo a la calidad en la que act&uacute;e y que mediante la b&uacute;squeda en los aplicativos internos de la SDM se encuentren pendientes de notificaci&oacute;n. LA SDM queda facultada para comunicar y/o notificar en la direcci&oacute;n de correo electr&oacute;nico informada por usted, hasta tanto no se revoque la presente autorizaci&oacute;n mediante comunicaci&oacute;n escrita. <p class="text-justify"> Es as&iacute; como la autorizaci&oacute;n para comunicar y/o notificar una comunicaci&oacute;n particular, incluye la autorizaci&oacute;n para notificar Actos Administrativos, modifique, adicione, revoque, resuelva los recursos de Ley y otros. La notificaci&oacute;n electr&oacute;nica tiene la misma validez de una notificaci&oacute;n personal y por lo tanto genera las mismas consecuencias legales.
                                                        </span></font>
                                            </p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-outline-success my-2 my-sm-0" data-dismiss="modal">Cerrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="lool row espacio">
                                <font color="#252525" size=3><b>
                            </div> </b></font>

                        </div>
                    </div>
                </div>


                <div class="col-xs-12 col-md-12 ">
                    <font color="#252525" size=3><b>Adjuntar documento</b></font>
                </div>
                <div class="col-xs-12 col-md-12 ">
                    <div style="clear:both;">
                        <font color="#252525" size=3><b>Si</b></font>
                        <input type="radio" id="adjunta" name="adjunta" value="Si" onclick="Disabled()">

                        <div class="lool row espacio">

                            <div class="col-xs-12 col-md-12">
                                <!--<input title="Haz click en este boton por cada documento a subir" type = "button" onclick="addField()" value ="Adjuntar archivos (+)" class="btn btn-outline-success my-2 my-sm-0" >

                            <td> <font color="#252525" size=3><b>(Peso Max 15Mb)
                            -->
                                <font color="#252525" size=3><b><a href="#bannerformmodal" data-toggle="modal" data-target="#exampleModalLong2">Tipos de archivos permitidos (Peso m&aacute;ximo 15 Mb)</a></b></font>
                                </td>
                                <!--<div id="files"></div>-->

                                <?php
                                $codigounico = uniqid();
                                include "/var/www/html/form/multiple/index.php";
                                ?>
                                <p>
                                    <input class="form-control mr-sm-2" type="hidden" id="idunico" name="idunico" value="<?php echo $codigounico; ?>">
                                    <?php unset($codigounico); ?>
                                <div class="modal fade" id="exampleModalLong2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header" align="CENTER">
                                                <h5 class="modal-title" id="exampleModalLongTitle">
                                                    <font color="#252525" size=3><b>TIPOS DE ARCHIVOS PERMITIDOS</b></font>
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <font color="#252525" size=3>
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">#</th>
                                                                <th scope="col">Extension</th>
                                                                <th scope="col">Descripcion</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row">1</th>
                                                                <td>tiff, tif, jpg, jpeg, gif, png</td>
                                                                <td>Archivos de Imagen</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">2</th>
                                                                <td>dwg</td>
                                                                <td>archivo AUTOCAD</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">3</th>
                                                                <td>xlsx</td>
                                                                <td>archivo hoja de calculo</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">4</th>
                                                                <td>pdf</td>
                                                                <td>Documento .pdf</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">5</th>
                                                                <td>txt</td>
                                                                <td>Documento de texto plano</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">6</th>
                                                                <td>rtf, doc, docx</td>
                                                                <td>Documento de texto</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">7</th>
                                                                <td>pptx</td>
                                                                <td>archivos de presentacion</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">8</th>
                                                                <td>msg</td>
                                                                <td>archivo de mensajeria .msg</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">9</th>
                                                                <td>csv</td>
                                                                <td>archivo separado por comas .pdf</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">10</th>
                                                                <td>mpg, mp4</td>
                                                                <td>archivo de video</td>
                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                </font>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-outline-success my-2 my-sm-0" data-dismiss="modal">Cerrar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <!--<div class="row espacio">
                              <div class="col-xs-12 col-md-8" align="center">
                                  <div class="g-recaptcha" data-sitekey="6LdnLAwTAAAAAG9ZwkJN-L6sEwE06HvbWLF9i519" required>
                                  </div>
                              </div>
                          </div>
                          <div class="col-xs-12 col-md-12 text-center">
                              <button class="btn btn-outline-success my-2 my-sm-0" type="submit" id="search" name="search">Registrar</button>
                          </div>-->
                            </div>
                        </div>

                    </div>

                </div>

                <div class="col-xs-12 col-md-10 ">
                    <div style="clear:both;">
                        <font color="#252525" size=3><b>No</b></font>
                        <input type="radio" id="adjunta" name="adjunta" value="No" onclick="Disabled()">
                    </div>
                </div>


                <div class="col-xs-12 col-md-10 ">
                    <div style="clear:both;">
                        <input type="checkbox" id="generaRad" name="generaRad" disabled>
                        <font color="#252525" size=3><b>Acepta nuestra politica de <a href="#bannerformmodal" data-toggle="modal" data-target="#exampleModalLong1">
                                    tratamiento de datos personales</a>? (ley 1581 de 2012)</b></font>


                        <div class="lool row espacio">
                            <p>
                            <div class="row espacio">
                                <div class="col-xs-12 col-md-8" align="center">
                                    <div class="g-recaptcha" data-sitekey="6LdnLAwTAAAAAG9ZwkJN-L6sEwE06HvbWLF9i519">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-6">
                                <div class="col-xs-12 col-md-12 text-center">
                                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" id="search" name="search" onClick='radicar()'>Registrar</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

        </form>

        <!-- Begin page content -->

    </div>
</div>
<script src="dist/js/bootstrap.min.js"></script>
