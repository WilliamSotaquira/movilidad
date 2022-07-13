<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- ----- ----- ----- ----- ----- ----- ----- -----  Fuente Montserrat -----  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
    <link rel='preconnect' href='https://fonts.googleapis.com'>
    <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
    <link href='https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap' rel='stylesheet'>
    <!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin Fuente Montserrat -  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
    <style>
        .box-piece {
            max-width: 700px;
            margin: auto;
            display: grid;
            /* gap: 10px; */
            grid-auto-flow: dense;
            grid-template-columns: 1fr;
            grid-template-rows: auto;
            grid-template-areas:
                'barra_superior'
                'imagen'
                'texto'
                'boton'
                'pie_imagen';
        }

        .barra_superior {
            grid-area: barra_superior;
            background-color: #754573;
            height: 20px;
        }

        .imagen {
            grid-area: imagen;
            width: auto;
        }

        .imagen img {
            overflow: hidden;
            object-fit: cover;
            max-width: 100%;
            max-height: 100%;
            height: auto;

        }

        .texto h3 {
            grid-area: texto;
            font-family: 'Montserrat', sans-serif;
            /* font-size: 25px; */
            font-weight: 500;
            text-align: justify;
            line-height: 1.2;
            color: rgba(25, 25, 25, 1);
            margin: 8px;
            padding: 30px;

        }

        .pie_imagen {
            border-top: solid 10px rgba(77, 84, 31, 1);
            border-bottom: solid 20px rgba(77, 84, 31, 1);
            grid-area: pie_imagen;

        }

        .pie_imagen img {
            overflow: hidden;
            object-fit: cover;
            max-width: 100%;
            max-height: 100%;
            height: auto;
        }

        .boton {
            text-align: center;
            padding-bottom: 30px;
            grid-area: boton;
        }

        .boton-piece {
            background-color: #754573;
            margin: 10px;
            padding: 8px 16px;

            /* font-size: 1em; */
            font-family: 'Montserrat', sans-serif;
            text-decoration: none;
            font-weight: 500;
            text-align: center;
            line-height: 1;
            color: rgba(255, 255, 255, 1);
            margin: 8px;


        }

        .boton-piece:hover {
            background-color: rgba(77, 84, 31, 1);
            color: rgba(255, 255, 255, 1);
        }
        
    </style>
</head>


<body>
    <div class="box-piece">
        <div class="barra_superior">
        </div>
        <div class='imagen'>
            <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/30-06-2022/image1_piece.png' alt='' title=''>
        </div>
        <div class="texto">
            <h3><strong>La Secretaría Distrital de Movilidad agradece por haber utilizado el canal virtual para realizar un trámite o servicio en línea.</strong> Por ello, es importante conocer tu opinión, por lo que te invitamos a contestar una breve encuesta.</h3>
        </div>
        <div class="boton">
            <a class="boton-piece" href="" target="_blank" rel="noopener noreferrer">Haz clic aquí para darnos tu opinión</a>
        </div>
        <div class="pie_imagen">
            <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/30-06-2022/image2_piece.png' alt='' title=''>
        </div>

    </div>
</body>

</html>