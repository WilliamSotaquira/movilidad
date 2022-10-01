@extends('welcome')
@section('contenido')
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fuente Montserrat -----  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<link rel='preconnect' href='https://fonts.googleapis.com'>
<link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
<link href='https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap' rel='stylesheet'>
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin Fuente Montserrat -  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<!-- Set Wrapper -->
<a id="enlace-comparendos" href="https://www.movilidadbogota.gov.co/web/consulta_de_comparendos">
    <div class='bannerDinamico'>

        <div class="box-titulo">
            <h3>Últimos días de descuento</h3>
        </div>
        <style>
            .bannerDinamico .box-titulo {
                grid-area: box-titulo;
                background-color: rgba(25, 28, 58, 1);
                padding: 16px;
                text-align: center;
                text-transform: uppercase;
                border-top: solid 4px rgba(102, 224, 38, 1);
            }

            .bannerDinamico .box-titulo h3 {
                margin: 3%;
                font-size: 24px;
                font-weight: 700;
                text-align: center;
                line-height: 1.1;
                color: rgba(255, 255, 255, 1);
            }
        </style>
        <div class="box-imagen">
            <div class='imagen' alt='Ciudadana en la ventanilla de pago de la SDM' title='Ciudadana en la ventanilla de pago de la SDM'>
                <!-- <img class='img-responsive w-100' src='' > -->
                <span class="vencimiento">
                    <p>Hasta el 14 <br>de septiembre</p>
                </span>
            </div>
        </div>
        <style>
            .bannerDinamico .box-imagen {
                grid-area: box-imagen;
                position: relative;
                margin-bottom: 12px;
                background-color: #c5c5c5;
                border-top: solid 4px rgba(25, 28, 58, 1);

            }

            .bannerDinamico .box-imagen .imagen {
                height: 170px;
                background-image: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/02-09-2022/3pv3248.png');
                background-size: cover;
                max-width: 360px;
                margin: auto;
            }

            .bannerDinamico .box-imagen .vencimiento {
                position: absolute;
                background-color: rgba(25, 28, 58, 1);
                top: 20px;
                padding: 8px;
                border-bottom: solid 3px rgba(102, 224, 38, 1);


                -moz-transform: skew(0deg, -2deg);
                -webkit-transform: skew(0deg, -2deg);
                -o-transform: skew(0deg, -2deg);
                -ms-transform: skew(0deg, -2deg);
                transform: skew(0deg, -2deg);
            }

            .bannerDinamico .box-imagen .vencimiento p {
                font-size: 18px;
                font-weight: 700;
                text-align: center;
                line-height: 1.2;
                color: rgba(102, 224, 38, 1);
                /* text-decoration: underline solid rgba(102, 224, 38, 1) 2px; */
                margin: 4px;
            }
        </style>
        <div class="box-mensaje">
            <h3>Póngase al día en el pago de sus comparendos</h3>
        </div>
        <style>
            .bannerDinamico .box-mensaje {
                grid-area: box-mensaje;
                padding: 0px 7px;
                text-align: center;
            }

            .bannerDinamico .box-mensaje h3 {
                font-size: 30px;
                font-weight: 700;
                text-align: center;
                line-height: 1;
                color: rgba(25, 28, 58, 1);
                text-transform: uppercase;
                margin: 8px;
            }
        </style>
        <div class="box-contador">
            <h1>Quedan <span id="contador"></span></h1>
            <h3><span id="reloj"></span> hrs</h3>
        </div>
        <style>
            .bannerDinamico .box-contador {
                grid-area: box-contador;
                background-color: rgba(102, 224, 38, 1);
                margin: 12px 18px;
                padding: 10px;
                border: solid 2px rgba(25, 28, 58, 1);

                -moz-transform: skew(0deg, -2deg);
                -webkit-transform: skew(0deg, -2deg);
                -o-transform: skew(0deg, -2deg);
                -ms-transform: skew(0deg, -2deg);
                transform: skew(0deg, -2deg);
            }

            .bannerDinamico .box-contador h1 {
                font-size: 32px;
                font-weight: 900;
                text-align: center;
                line-height: 1;
                color: rgba(25, 25, 25, 1);
                text-transform: uppercase;
                margin: 0px;

            }
            .bannerDinamico .box-contador h3 {
                font-size: 16px;
                font-weight: 700;
                text-align: center;
                line-height: 1;
                color: rgba(25, 25, 25, 1);
                text-transform: uppercase;
                margin: 0px;

            }
        </style>

        <div class="box-descripcion">
            <p>Con su <strong>número de cédula y la placa del vehículo</strong> consulte aquí sus comparendos vigentes.</p>
        </div>
        <style>
            .bannerDinamico .box-descripcion {
                grid-area: box-descripcion;
                padding: 12px;
                text-align: center;
            }

            .bannerDinamico .box-descripcion p {
                font-size: 16px;
                font-weight: 500;
                text-align: center;
                line-height: 1.2;
                color: rgba(25, 28, 58, 1);
                margin: 0px;
            }
        </style>
        <div class="box-terminos">
            <div class="terminos">
                <p><small><span>*</span> Aplica para infracciones anteriores al 30 de junio de 2021. </small></p>
            </div>

        </div>
        <style>
            .bannerDinamico .box-terminos {
                padding: 0px 12px;
                grid-area: box-terminos;
                text-align: center;
                /* margin: auto; */
            }

            .bannerDinamico .box-terminos p {
                margin: 0px;
            }
        </style>


    </div>
</a>
<!-- End Set Wrapper -->
<style>
    #enlace-comparendos {
        text-decoration: none !important;
    }

    .bannerDinamico {
        max-width: 950px;
        margin: auto;
        word-wrap: break-word;
        word-break: break-word;
        font-family: 'Montserrat', sans-serif;
        font-size: 15px;
        font-weight: 500;
        text-align: justify;
        line-height: 1.4;
        color: rgba(25, 25, 25, 1);
        /* height: 220px; */
        padding-bottom: 12px;
        border-bottom: 8px solid rgba(25, 28, 58, 1);

        display: grid;
        gap: 0px;
        grid-auto-flow: dense;
        grid-template-columns: 1fr;
        grid-template-rows: auto;
        grid-template-areas:
            'box-titulo'
            'box-imagen'
            'box-mensaje'
            'box-contador'
            'box-descripcion'
            'box-terminos';
    }

    .bannerDinamico:hover {
        background-color: #e5e5e5;

    }

    .bannerDinamico:hover .box-imagen .imagen {
        -webkit-filter: grayscale(100%);
        /* Safari 6.0 - 9.0 */
        filter: grayscale(100%);

    }

    @media(max-width:767px) {}

    @media(min-width:768px) {
        .bannerDinamico {
            max-width: 950px;
            margin: auto;
            word-wrap: break-word;
            word-break: break-word;
            font-family: 'Montserrat', sans-serif;
            font-size: 15px;
            font-weight: 500;
            text-align: justify;
            line-height: 1.4;
            color: rgba(25, 25, 25, 1);
            /* background-color: #e5e5e5; */
            height: 220px;
            padding-bottom: 12px;

            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr;
            grid-template-rows: 1fr 1fr 1fr 1fr;
            gap: 0px 0px;
            grid-template-areas:
                "box-imagen box-titulo box-titulo box-titulo"
                "box-imagen box-descripcion box-descripcion box-descripcion"
                "box-imagen box-mensaje box-contador box-contador"
                "box-imagen box-terminos box-terminos box-terminos";
            height: 225px;
        }

        .box-imagen {
            grid-area: 1 / 1 / 5 / 2;
            width: 260px;
        }

        .box-titulo {
            grid-area: 1 / 2 / 2 / 4;
        }

        .box-descripcion {
            grid-area: 2 / 2 / 3 / 4;
        }

        .box-contador {
            grid-area: 3 / 2 / 4 / 3;
        }

        .box-mensaje {
            grid-area: 3 / 3 / 4 / 4;
        }

        .box-terminos {
            grid-area: 4 / 2 / 5 / 4;
        }

        .bannerDinamico .box-imagen .imagen {
            height: 220px;
            background-position-x: -38px;
        }

        .bannerDinamico .box-titulo h3 {
            margin: 0%;
            font-size: 20px;

        }

        .bannerDinamico .box-descripcion {
            padding: 6px;
        }

        .bannerDinamico .box-descripcion p {
            font-size: 14;

        }

        .bannerDinamico .box-mensaje {
            padding: 0px;
            /* height: px; */
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .bannerDinamico .box-mensaje h3 {
            font-size: 14px;
            margin: 4px;

            -moz-transform: skew(0deg, -2deg);
            -webkit-transform: skew(0deg, -2deg);
            -o-transform: skew(0deg, -2deg);
            -ms-transform: skew(0deg, -2deg);
            transform: skew(0deg, -2deg);
        }

        .bannerDinamico .box-contador {
            margin: 6px 7%;
        }

        .bannerDinamico .box-contador h1 {
            font-size: 26px;
            -moz-transform: skew(0deg, -1deg);
            -webkit-transform: skew(0deg, -1deg);
            -o-transform: skew(0deg, -1deg);
            -ms-transform: skew(0deg, -1deg);
            transform: skew(0deg, -1deg);

        }

        .bannerDinamico .box-terminos {
            position: relative;
        }

        .bannerDinamico .box-terminos .terminos {
            position: absolute;
            bottom: -5px;
        }

    }

    @media(min-width:992px) {
        .bannerDinamico .box-titulo h3 {
            font-size: 28px;
        }
    }

    @media(min-width:1200px) {}
</style>

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



    /*
    .bannerDinamico [class*='col-'] {
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

<script>
    // Set the date we're counting down to
    var countDownDate = new Date("Sept 14, 2022 15:00:00").getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {

        // Get today's date and time
        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Display the result in the element with id="contador"
        document.getElementById("contador").innerHTML = +" " + days + " días";

        // Display the result in the element with id="reloj"
        document.getElementById("reloj").innerHTML = hours + ":" + minutes + ":" + seconds + " ";

        // If the count down is finished, write some text
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("contador").innerHTML = "Finalizado";
            // document.getElementById("reloj").innerHTML = "";
        }
    }, 1000);
</script>