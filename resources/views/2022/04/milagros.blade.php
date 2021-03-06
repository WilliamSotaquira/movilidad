@extends('welcome')
@section('contenido')

<!-- Fuente de Texto Google  -->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Hind:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


<!-- Fin Fuente de Texto Google  -->

<!-- ----- ----- ----- ----- ----- ----- ----- ----- Bloque Seccion ----- ----- ----- ----- ----- ----- ----- ----- ----- ------ -->

<div class='container-fluid milagros'>
    <div class='encabezado'>
        <div class="logo">
            <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/11-04-2022/logos_milagros-02.png' alt='Logo Milagros Bogotanos Estupor en la ruta' title='Logo Milagros Bogotanos Estupor en la ruta'>
        </div>

        <div class="arcoiris">
            <div class='row'>
                <div class='col-xs-2'>
                    <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/11-04-2022/arcoiris1.png' alt='vector milagros bogotanos' title='vector milagros bogotanos'>
                </div>
                <div class='col-xs-2 col-xs-offset-8'>
                    <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/11-04-2022/arociris2.png' alt='vector milagros bogotanos' title='vector milagros bogotanos'>
                </div>
            </div>
        </div>
    </div>
    <style>
        .encabezado {
            /* height: 300px; */
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: rgba(218, 79, 67);
            position: relative;
        }

        .encabezado .logo img {
            max-height: 240px;
            padding: 20px;
        }

        .arcoiris {
            position: absolute;
            bottom: 0px;
        }
    </style>
    <div class="s1">
        <div class="box-parrafos">
            <div>
                <p>Josu?? Cuervo es un reportero apasionado e intrigante por conocer y entender los comportamientos que los diferentes ciudadanos asumen en las v??as, por eso, decidi?? liderar una investigaci??n que pretende resolver el misterio detr??s de unos fen??menos milagrosos que se vienen presentando en las v??as bogotanas.</p>
                <p>Testigos se??alan que algunos de los incidentes viales que parec??an inevitables, de repente se corrigieron y sus protagonistas tuvieron la oportunidad de evitarlos, reviviendo el momento y ajustando su comportamiento en la v??a.</p>
                <p>Dicha investigaci??n es presentada en una emocionante serie de 10 episodios llamada <strong>???Milagros Bogotanos, estupor en la ruta???.</strong></p>
            </div>
        </div>
    </div>
    <style>
        .s1 {
            height: 400px;
            background: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/11-04-2022/fondo_amarillo.png');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }

        .s1 .box-parrafos {
            height: 400px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 10%;

        }

        .s1 .box-parrafos p {
            font-family: 'Hind', sans-serif;
            font-size: 20px;
            font-weight: 500;
            text-align: justify;
            line-height: 1.4;
            color: rgba(25, 25, 25, 1);
        }
    </style>
    <div class="s2">
        <div class="box-tabs">
            <ul class="nav nav-pills nav-justified" data-widget="tab-slider">
                <li class="active"><a data-toggle="pill" href="#milagros1">Capitulo 1 - 2</a></li>
                <li><a data-toggle="pill" href="#milagros2">Capitulo 3 - 4</a></li>
                <li><a data-toggle="pill" href="#milagros3">Capitulo 5 - 6</a></li>
                <li><a data-toggle="pill" href="#milagros4">Capitulo 7 - 8</a></li>
                <li><a data-toggle="pill" href="#milagros5">Capitulo 9 - 10</a></li>
            </ul>

            <div class="tab-content">
                <div id="milagros1" class="tab-pane fade in active">

                    <div class='row'>
                        <div class='col-xs-12 col-sm-6 col-md-6'>
                            <div class="box-video">
                                <div class="video">
                                    <div class='embed-responsive embed-responsive-4by3'>
                                        <iframe width="100%" height="auto" src="https://www.youtube.com/embed/R6G7LKhs_-k" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="box-parrafo">
                                <div class="titulo-parrafo">
                                    <h3>Afanado conductor invade cicloruta</h3>
                                </div>
                                <div class="parrafos">
                                    <p>Sinopsis:</p>
                                    <p>Francisco es un apurado conductor de veh??culo particular que anda por las v??as sin respetar las se??ales de transito y en especial los limites de velocidad. Tan inmerso est?? en sus afanes que termina ignorando a Fernanda, una aplicada ciclista que va rumbo a su universidad. En un cruce entre la cicloruta que usa Fernanda y la v??a por la cual transita apurado Francisco ocurrir?? un Milagro Bogotano.</p>
                                    <p>Francisco gira violento sobre la cicloruta ignorando todos los comportamientos que le corresponden como hacer el pare, hacer uso de las direccionales y respetar de los ciclistas la v??a. El siniestro es inevitable pero el tiempo se detiene y Francisco tiene la oportunidad de volverlo a intentar, esta vez sin af??n y respetando las normas en la ciudad.</p>
                                </div>
                            </div>
                        </div>
                        <div class='col-xs-12 col-sm-6 col-md-6'>
                            <div class="box-video">
                                <div class="video">
                                    <div class='embed-responsive embed-responsive-4by3'>
                                        <iframe width="100%" height="auto" src="https://www.youtube.com/embed/BIJrEOkhCYU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="box-parrafo">
                                <div class="titulo-parrafo">
                                    <h3>Peligro por Zigzag de Moto</h3>
                                </div>
                                <div class="parrafos">
                                    <p>Sinopsis:</p>
                                    <p>Un abuelo camina por las calles de su barrio acompa??ado de su nieto, pasan la tarde entre helados, parques y perros. En una v??a cercana un intr??pido motociclista se escurre entre los carros c??mo pronosticando sus movimientos en un constante y temerario zigzagueo. Tres personajes que lamentablemente se conectar??n en un siniestro donde la habilidad motociclista no podr?? superar el encontrarse con el abuelo y su nieto en un cruce peatonal. Siniestro que de pronto no ocurre pues al ultimo momento el tiempo se detiene permiti??ndole al motociclista repetir el cruce, pero ahora corrigiendo su comportamiento.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div id="milagros2" class="tab-pane fade">
                    <div class='row'>
                        <div class='col-xs-12 col-sm-6 col-md-6'>
                            <div class="box-video">
                                <div class="video">
                                    <div class='embed-responsive embed-responsive-4by3'>
                                        <iframe width="100%" height="auto" src="https://www.youtube.com/embed/O8TwVdTaXdM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="box-parrafo">
                                <div class="titulo-parrafo">
                                    <h3>Tensi??n entre conductores por obra en la v??a</h3>
                                </div>
                                <div class="parrafos">
                                    <p>Sinopsis:</p>
                                    <p>Sobre una v??a cualquiera de la ciudad de Bogot?? un grupo de trabajadores han cerrado un carril para poder realizar su trabajo. Este cerramiento ha generado un embotellamiento que ser??a manejable si los veh??culos en la v??a entendieran como se deben comportar, pero desafortunadamente hay quienes en lugar de dar el paso prefieren competir por el espacio. Este es el caso de Marcela una muy tranquila conductora que se va a encontrar con un muy apurado y antip??tico Camilo. Son ellos dos los que se encuentran en el punto de cierre de la v??a y es Camilo el que sin importar el turno de Marcela se abalanza sobre carro violentamente para quedarse con el espacio??? pero el tiempo se detiene y le da a Camilo la oportunidad de corregir su comportamiento y entender que cediendo el paso todo fluye m??s r??pido.</p>
                                </div>
                            </div>
                        </div>
                        <div class='col-xs-12 col-sm-6 col-md-6'>
                            <div class="box-video">
                                <div class="video">
                                    <div class='embed-responsive embed-responsive-4by3'>
                                        <iframe width="100%" height="auto" src="https://www.youtube.com/embed/mQxQz_ZNvCw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="box-parrafo">
                                <div class="titulo-parrafo">
                                    <h3>Un ciclista y un peat??n enrollados por un tranc??n</h3>
                                </div>
                                <div class="parrafos">
                                    <p>Sinopsis:</p>
                                    <p>Natalia camina contenta por un agitado y vibrante anden de Bogot??, esta feliz pues su m??dico le acaba de decir que la encuentra muy bien de salud. Muy cerca un tambi??n muy feliz Otoniel pedalea motivado por lo que se ha convertido en un muy buen d??a de trabajo. Otoniel comprometido con lograr su ultima entrega del d??a en tiempo record decide acortar tiempos mont??ndose al anden. Desafortunadamente esto lo va a juntar de una muy mala manera con Natalia pues ella no va a correr con la misma suerte de los otros transe??ntes que lograron esquivar a Otoniel y su bicicleta justo a tiempo, no, Natalia en cambio no tuvo tiempo de reaccionar y Otoniel la va a embestir a gran velocidad??? y es ah?? cuando el tiempo se detiene y a Otoniel un milagro le brinda otra oportunidad.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="milagros3" class="tab-pane fade">
                    <div class='row'>
                        <div class='col-xs-12 col-sm-6 col-md-6'>
                            <div class="box-video">
                                <div class="video">
                                    <div class='embed-responsive embed-responsive-4by3'>
                                        <iframe width="100%" height="auto" src="https://www.youtube.com/embed/1mQFj-tmgPw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="box-parrafo">
                                <div class="titulo-parrafo">
                                    <h3>No hay peor ciego que el que no quiere ver</h3>
                                </div>
                                <div class="parrafos">
                                    <p>Sinopsis:</p>
                                    <p>Hernando conduce un cami??n por Bogot?? sin percatarse de nada en la v??a que no sea de su mismo tama??o. Esto lo va a juntar con Ximena una ciclista y con Rub??n un motociclista, dos responsables ciudadanos cuyo ??nico pecado pareciera ser el no movilizarse igual que Hernando pues este simplemente no los ve. Hernando va a sobre pasar a Ximena sin respetar la distancia m??nima y Rub??n al mismo tiempo se va a ver obligado a esquivar el cami??n pues de la nada este se cambi?? de carril??? pero es aqu?? cuando el tiempo se detiene y permite a don Hernando usar sus ojos y sus espejos y as?? descubrir a todos los otros veh??culos que lo rodean y que merecen de su consideraci??n.</p>
                                </div>
                            </div>
                        </div>
                        <div class='col-xs-12 col-sm-6 col-md-6'>
                            <div class="box-video">
                                <div class="video">
                                    <div class='embed-responsive embed-responsive-4by3'>
                                        <iframe width="100%" height="auto" src="https://www.youtube.com/embed/oLDpNVNLyBM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="box-parrafo">
                                <div class="titulo-parrafo">
                                    <h3>Misteriosas apariciones durante una noche en Bogot??</h3>
                                </div>
                                <div class="parrafos">
                                    <p>Sinopsis:</p>
                                    <p>Miguel conduce un Bus de servicio publico durante los turnos de la noche en la ciudad, tiene los ojos y los sentidos alertas pues lleva mucho tiempo haciendo su trabajo y sabe que entre m??s atento mejor todos en la v??a y en el bus van a estar. Pasa que Miguel se va a encontrar en la v??a con ??ngela, una ciclista que no usa los accesorios necesarios para la noche pues alega que no los necesita por lo iluminado de la v??a que transita. Pero ??ngela se equivoca y en una calle Bogotana coinciden Miguel orill??ndose para dejar a un pasajero la invisible ??ngela que justo pedaleaba por ah??. Cuando el siniestro era inevitable el tiempo se detiene y ??ngela recibe una nueva oportunidad.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="milagros4" class="tab-pane fade">
                    <div class='row'>
                        <div class='col-xs-12 col-sm-6 col-md-6'>
                            <div class="box-video">
                                <div class="video">
                                    <div class='embed-responsive embed-responsive-4by3'>
                                        <iframe width="100%" height="auto" src="https://www.youtube.com/embed/MCXkT-oDTWo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="box-parrafo">
                                <div class="titulo-parrafo">
                                    <h3>Conductor manejando despu??s de una fiesta</h3>
                                </div>
                                <div class="parrafos">
                                    <p>Sinopsis:</p>
                                    <p>A Camilo le gusta la fiesta y anda convencido que a ??l los tragos no le hacen tanto da??o como a el resto de nosotros, por eso acostumbra conducir cuando siente que no ha tomado ???lo suficiente??? como para que su capacidad se afecte. Mar??a es una inocente transe??nte que pagar?? las consecuencias de los errores de Camilo en un siniestro a presentarse en un sem??foro que ser?? irrespetado por Camilo??? Pero en el momento exacto el tiempo se detiene y Camilo tiene la oportunidad de volver a vivir y no tomar antes de manejar.</p>
                                </div>
                            </div>
                        </div>
                        <div class='col-xs-12 col-sm-6 col-md-6'>
                            <div class="box-video">
                                <div class="video">
                                    <div class='embed-responsive embed-responsive-4by3'>
                                        <iframe width="100%" height="auto" src="https://www.youtube.com/embed/lpFk7F3KMU8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="box-parrafo">
                                <div class="titulo-parrafo">
                                    <h3>Una se??al de PARE que salv?? a un motociclista</h3>
                                </div>
                                <div class="parrafos">
                                    <p>Sinopsis:</p>
                                    <p>Juan Pablo es un motociclista que cree que las se??ales de transito son m??s una sugerencia que una norma. Por eso, a su juicio decide respetar pares, cruces, sem??foros, lugares para parquear y limites de velocidad. Un d??a Juan Pablo se enfrent?? a una se??al de PARE que cambiar??a su vida, una donde los c??lculos no le dieron y se encontr?? se frente contra el veh??culo de Eriberto que, aunque reaccion?? a tiempo e intento lo que pudo para evitar el siniestro simplemente era imposible no hacerlo??? pero de repente el tiempo se detiene y Juan Pablo tiene la oportunidad de detenerse en el PARE y ver desde lo seguro a Eriberto pasar.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="milagros5" class="tab-pane fade">
                    <div class='row'>
                        <div class='col-xs-12 col-sm-6 col-md-6'>
                            <div class="box-video">
                                <div class="video">
                                    <div class='embed-responsive embed-responsive-4by3'>
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/_4fbNcdq_3E" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="box-parrafo">
                                <div class="titulo-parrafo">
                                    <h3>El problema con el color amarillo de los sem??foros</h3>
                                </div>
                                <div class="parrafos">
                                    <p>Sinopsis:</p>
                                    <p>Hay esos que creen que el color amarillo de un sem??foro significa acelerar, cuando en realidad el amarillo invita ser m??s precavidos pues las luces van a cambiar. Esto le paso a Juvenal que se puso a acelerar cuando lo que deb??a hacer era parar y por andar de acelerado protagoniz?? un siniestro en el que un motociclista amante del futbol llamado FABIO es atropellado a pesar de no haber hecho nada equivocado??? pero en el momento justo el tiempo se detiene y Juvenal tiene la oportunidad de frenar en lugar de acelerar.</p>
                                </div>
                            </div>
                        </div>
                        <div class='col-xs-12 col-sm-6 col-md-6'>
                            <div class="box-video">
                                <div class="video">
                                    <div class='embed-responsive embed-responsive-4by3'>
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/9CB1mR2-m1E" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="box-parrafo">
                                <div class="titulo-parrafo">
                                    <h3>Los mal parqueados</h3>
                                </div>
                                <div class="parrafos">
                                    <p>Sinopsis:</p>
                                    <p>Hab??a una vez una peatona que necesitaba de las rampas en los andenes pues usaba silla de ruedas. Mientras andaba tranquila un enamorado conductor olvid?? su carro donde quiso y bloqueo el acceso a la rampa impidiendo que nuestra peatona llegara tranquila a su lugar??? pero en ese momento el tiempo cambi?? y de pronto el conductor pudo hacerlo todo de nuevo y esta vez buscar un lugar dise??ador para estacionar.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .s2 {
            margin-top: 35px;
        }

        /* .box-tabs {
            height: 500px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        } */

        .nav-pills>li>a {
            border-radius: 0px !important;
            font-family: 'Hind', sans-serif;
            font-weight: 700;
            text-align: center;
            line-height: 1.4;
            color: rgba(25, 25, 25, 1);
            background-color: rgba(237, 192, 92, 1) !important;
            margin: 1px;
            text-transform: uppercase;
            font-size: 16px;

        }

        .nav-pills>li.active>a,
        .nav-pills>li.active>a:focus,
        .nav-pills>li.active>a:hover {
            color: rgba(255, 255, 255, 1);
            background-color: rgba(218, 79, 67) !important;
        }

        .nav>li>a:focus,
        .nav>li>a:hover {
            text-decoration: none;
            background-color: rgba(237, 192, 92, 0.5) !important;
            color: rgba(218, 79, 67);
        }

        .s2 .box-video {
            margin-top: 15px;
            padding: 20px;
        }

        .s2 .box-video .video {
            justify-content: center;
            align-items: center;
        }

        .s2 .box-parrafo {
            padding: 10px 20px;
        }

        .s2 .titulo-parrafo {
            height: 100px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }


        .s2 .titulo-parrafo h3 {
            font-family: 'Hind', sans-serif;
            font-size: 20px;
            font-weight: 700;
            text-align: left;
            line-height: 1.4;
            color: rgba(218, 79, 67);
            text-transform: uppercase;
            margin: 10px;
        }

        .s2 .parrafos {
            justify-content: center;
        }

        .s2 .parrafos p {
            font-family: 'Hind', sans-serif;
            font-size: 16px;
            font-weight: 500;
            text-align: justify;
            line-height: 1.4;
            color: rgba(25, 25, 25, 1);
        }
    </style>

</div>

<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin Bloque Secci??n  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->

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

    .milagros {
        font-size: 13px !important;
        line-height: 1.4 !important;
        max-width: 980px;
    }

    /*
    .milagros [class*='col-'] {
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

    @media(max-width:767px) {
        .s1 {
            height: 500px;
        }

        .s1 .box-parrafos {
            height: 500px;
        }

        .s1 .box-parrafos p {
            font-size: 14px;
        }

        .s2 .parrafos p {
            font-size: 14;
            font-size: 14;
        }

        .nav-pills>li>a {
            font-size: 14px;
        }

    }

    @media(min-width:768px) {
        .s1 {
            height: 400px;
        }

        .s1 .box-parrafos {
            height: 400px;
        }
        .nav-pills>li>a {
            font-size: 14px;
        }
    }

    @media(min-width:992px) {}

    @media(min-width:1200px) {
        -webkit-box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.16);
        box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.16);
    }
</style>
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin hoja de estilo  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->