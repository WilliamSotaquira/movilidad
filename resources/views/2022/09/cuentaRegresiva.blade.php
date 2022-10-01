@extends('welcome')
@section('contenido')
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fuente Montserrat -----  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<link rel='preconnect' href='https://fonts.googleapis.com'>
<link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
<link href='https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap' rel='stylesheet'>
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin Fuente Montserrat -  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<!-- Set Wrapper -->
<div class='container-fluid cuentaRegresiva'>
    <div class='box-wrp'>
        <div class='box-contador'>
            <div class="texto1">
                <h1>últimos días <br>de descuento</h1>
            </div>
            <div class="texto2">
                <h1>hasta el 14 de septiembre</h1>
            </div>
            <div class="descuentos">
                <div class="texto-msj">
                    <div class="vehiculo">
                        <h3>Motos</h3>
                    </div>
                    <div>
                        <h3><strong>40%</strong> de la deuda +</h3>
                        <h3><strong>100%</strong> de los intereses</h3>
                    </div>
                </div>
                <div class="texto-msj">
                    <div class="vehiculo">
                        <h3>Carro</h3>
                    </div>
                    <div>
                        <h3><strong>20%</strong> de la deuda +</h3>
                        <h3><strong>100%</strong> de los intereses</h3>
                    </div>
                </div>
            </div>
            <div class='imagen'>
                <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/servicios/31-08-2022/a46a8555.jpg' alt='ciudadana en la ventanilla de pago' title='ciudadana en la ventanilla de pago'>
            </div>
            <div class="mensaje">
                <h1>Quedan <span id="contador"></span></h1>
                <h3><span id="reloj"></span> hrs</h3>
            </div>
            <!-- Display the countdown timer in an element -->

            <div class="parrafo">
                <p>Aplica para infracciones anteriores al 30 de junio de 2021.</p>
                <p>*Aplican términos y condiciones.</p>
            </div>

        </div>
        <style>
            .box-contador {
                display: grid;
                /* gap: 10px; */
                grid-auto-flow: dense;
                grid-template-columns: 1fr;
                grid-template-rows: auto;
                grid-template-areas:
                    'mensaje'
                    'texto2'
                    'texto1'
                    'imagen'
                    'descuentos'
                    'parrafo';
            }

            .box-contador .texto1 {
                margin: auto;
                padding: 15px;
                grid-area: texto1;
            }


            .box-contador .texto1 h1 {
                text-transform: uppercase;
                /* font-size: 44px; */
                font-weight: 800;
                text-align: center;
                line-height: 1;
                color: rgba(25, 28, 58, 1);
            }

            .box-contador .texto2 {
                margin: auto;
                /* margin: 20px 0px 20px 50px; */
                /* height: px; */
                display: flex;
                /* flex-direction: column; */
                justify-content: center;
                align-items: center;
                grid-area: texto2;

                -moz-transform: translate(0px, -3px) skew(0deg, -1deg);
                -webkit-transform: translate(0px, -3px) skew(0deg, -1deg);
                -o-transform: translate(0px, -3px) skew(0deg, -1deg);
                -ms-transform: translate(0px, -3px) skew(0deg, -1deg);
                transform: translate(0px, -3px) skew(0deg, -1deg);
            }

            .box-contador .texto2 h1 {
                text-transform: uppercase;
                background: rgba(102, 224, 38, 1);
                font-weight: 700;
                text-align: center;
                line-height: 1;
                color: rgba(25, 28, 58, 1);
                padding: 10px;
            }

            .box-contador .descuentos {
                grid-area: descuentos;
                padding: 25px;
                display: flex;
                flex-direction: column;
                justify-content: space-evenly;
                /* align-items: center; */
            }

            .descuentos .texto-msj {
                position: relative;
                padding: 35px 16px 16px 16px;
                background-color: rgba(25, 28, 58, 1);
                /* margin: 20px; */
                /* height: px; */


            }

            .descuentos .texto-msj h3 {
                position: relative;
                font-size: 24px;
                font-weight: 500;
                text-align: center;
                line-height: 1.1;
                color: rgba(255, 255, 255, 1);
                margin: 4px;


            }

            .texto-msj .vehiculo {
                background-color: rgba(102, 224, 38, 1);
                padding: 8px;
                position: absolute;
                width: 200px;
                height: 50px;
                left: calc(50% - 100px);
                top: calc(0px - 25px);
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }

            .texto-msj .vehiculo h3 {
                font-size: 28px;
                font-weight: 700;
                text-align: center;
                line-height: 1.2;
                color: rgba(25, 25, 25, 1);
                margin: 0px;
                text-transform: uppercase;
            }

            .box-contador .imagen {
                grid-area: imagen;
            }

            .box-contador .mensaje {
                background-color: rgba(102, 224, 38, 1);
                margin: 25px;
                grid-area: mensaje;
                text-align: center;
                border: solid 3px rgba(25, 28, 58, 1);
                /* -moz-transform: translate(0px, 3px) skew(0deg, 1deg);
                -webkit-transform: translate(0px, 3px) skew(0deg, 1deg);
                -o-transform: translate(0px, 3px) skew(0deg, 1deg);
                -ms-transform: translate(0px, 3px) skew(0deg, 1deg);
                transform: translate(0px, 3px) skew(0deg, 1deg); */
            }

            .box-contador .mensaje h1 {
                font-size: 50px;
                font-weight: 700;
                text-align: center;
                line-height: 1.2;
                color: rgba(25, 28, 58, 1);
                margin: 20px;
                text-transform: uppercase;
            }

            .box-contador .mensaje h3 {
                font-size: 30px;
                font-weight: 700;
                text-align: center;
                line-height: 1.2;
                color: rgba(25, 28, 58, 1);
                margin: 20px;
                text-transform: uppercase;
            }

            #contador {
                text-align: center;
                font-size: 60px;
                margin: 0px;
                padding: 8px;
            }

            .box-contador .parrafo {
                grid-area: parrafo;
                /* height: px; */
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                text-align: center;
            }

            .box-contador .parrafo p {
                font-size: 18px;
                font-weight: 700;
                text-align: left;
                line-height: 1.2;
                color: rgba(25, 25, 25, 1);
                margin: 4px;

            }

            @media(max-width:767px) {
                .box-contador .descuentos {
                    grid-area: descuentos;
                    padding: 10px;
                    margin-top: 50px;
                    margin-bottom: 20px;
                    display: flex;
                    flex-direction: column;
                    justify-content: space-evenly;
                    /* align-items: center; */
                }

                .descuentos .texto-msj {
                    position: relative;
                    padding: 35px 16px 16px 16px;
                    background-color: rgba(25, 28, 58, 1);
                    margin-bottom: 45px;
                }

                .box-contador .mensaje {
                    background-color: rgba(102, 224, 38, 1);
                    margin: 0px;
                    grid-area: mensaje;
                    text-align: center;
                    /* margin-top: -30px; */
                    margin-bottom: 30px;
                }

                .box-contador .parrafo {
                    grid-area: parrafo;
                    display: flex;
                    flex-direction: column;
                    justify-content: center;
                    align-items: center;
                    text-align: center;
                    margin-top: -50px;
                }

                .box-contador .texto1 {
                    margin: auto;
                    /* padding: 15px; */
                    margin-bottom: 20px;
                    grid-area: texto1;
                }

                .box-contador .mensaje {
                    background-color: rgba(102, 224, 38, 1);
                    margin: 0px;
                    grid-area: mensaje;
                    text-align: center;
                    /* margin-top: -30px; */
                    margin-bottom: 30px;
                }
            }

            @media(min-width:768px) {
                .box-contador {
                    gap: 1%;
                    grid-template-columns: repeat(2, 1fr);
                    grid-template-areas:
                        'texto1 texto2'
                        'descuentos imagen'
                        'mensaje mensaje'
                        'parrafo parrafo';
                }

                .box-contador .texto1 h1 {
                    text-transform: uppercase;
                    font-size: 44px;
                    font-weight: 800;
                    text-align: center;
                    line-height: 1, 1;
                    color: rgba(25, 28, 58, 1);
                    margin: 20px 0px 20px 20px;
                }

                .box-contador .texto2 {
                    margin: auto;
                    margin: 20px 0px 20px 50px;
                    display: flex;
                    /* flex-direction: column; */
                    justify-content: end;
                    align-items: center;
                    grid-area: texto2;

                    -moz-transform: translate(0px, -3px) skew(0deg, -1deg);
                    -webkit-transform: translate(0px, -3px) skew(0deg, -1deg);
                    -o-transform: translate(0px, -3px) skew(0deg, -1deg);
                    -ms-transform: translate(0px, -3px) skew(0deg, -1deg);
                    transform: translate(0px, -3px) skew(0deg, -1deg);
                }

                .box-contador .texto2 h1 {
                    text-transform: uppercase;
                    background: rgba(102, 224, 38, 1);
                    font-size: 40px;
                    font-weight: 700;
                    text-align: center;
                    line-height: 1.1;
                    color: rgba(25, 28, 58, 1);
                    padding: 10px;
                }

            }

            @media(min-width:992px) {}

            @media(min-width:1200px) {}
        </style>
    </div>
</div>
<!-- End Set Wrapper -->
<br>
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

    .cuentaRegresiva {
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
    .cuentaRegresiva [class*='col-'] {
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
    var countDownDate = new Date("Sept 14, 2022 23:59:59").getTime();

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
            document.getElementById("contador").innerHTML = "Plazo Finalizado";
            // document.getElementById("reloj").innerHTML = "";
        }
    }, 1000);
</script>