@extends('welcome')
@section('title','menu-ppal')
@section('contenido')
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- Set menu-ppal -->
<div class="set-wrapper menu-ppal">
    <section>
        <nav class="navbar navbar-default" role="navigation">
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse sdm_menu">
                <ul class="nav navbar-nav mnav2">
                    <li><a href="#" class="mnav-li-a">Inicio</a></li>
                    <li><a href="#" class="mnav-li-a">Transparencia y acceso a la información</a></li>
                    <li><a href="#" class="mnav-li-a">Tramites y servicios</a></li>
                    <li><a href="#" class="mnav-li-a">Participa</a></li>
                    <li><a href="#" class="mnav-li-a">La Entidad</a></li>
                    <li><a href="#" class="mnav-li-a">Normatividad</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </section>
</div>

<!-- Fin Set -->
<style>
</style>

<style>
    .menu-ppal {
        padding-top: 200px;
        padding-left: 16px;
    }

    .pill-tooltip {
        display: flex;
        background: #A6B517;
        border-radius: 3px;
        box-shadow: 5px 5px 50px rgba(0, 0, 0, 0.2);
        width: 130px;
        /* z-index: 1000; */
        opacity: 0;
        transition: .3s ease all;
        position: absolute;
        transform: translateY(10px);
    }

    .pill-tooltip::after {
        content: "";
        display: inline-block;
        border-left: 15px solid transparent;
        border-right: 15px solid transparent;
        border-top: 15px solid #A6B517;
        position: absolute;
        bottom: -15px;
        left: calc(50% - 15px);
    }

    .pill-tooltip.active {
        opacity: 1;
        transform: translateY(0px);
    }

    .img-tooltip img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 6px;
        padding: 2px;
        vertical-align: top;
    }
</style>

<script>
    // Lista de variables
    let elements_list = document.querySelectorAll('a.mnav-li-a');
    const mov0 = "https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/09-08-2023/inicio.gif";
    const mov1 = "https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/09-08-2023/transparencia.gif";
    const mov2 = "https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/09-08-2023/servicios.gif";
    const mov3 = "https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/09-08-2023/participa.gif";
    const mov4 = "https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/09-08-2023/entidad.gif";
    const mov5 = "https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/09-08-2023/normatividad.gif";

    for (let i = 0; i < elements_list.length; i++) {
        let html = `<div class="pill-tooltip tooltip-${i}"><div class="imagen img-tooltip img-tooltip-${i}"><img class="img-responsive w-100"src="" alt="" title=""></div></div>`;

        elements_list[i].insertAdjacentHTML('afterend', html);
        document.querySelector(`.img-tooltip-${i} img`).src = eval(`mov${i}`);
        elements_list[i].setAttribute('data-toggle', 'tooltip');


        elements_list[i].addEventListener('mouseover', function() {
            tooltip(i);
            position(i);
        });
        elements_list[i].addEventListener('mouseout', function() {
            tooltip(i);
        });

    }


    function tooltip(e) {
        document.querySelector(`.tooltip-${e}`).classList.toggle('active');
    }

    function position(e) {
        // variables
        let tooltip = document.querySelector(`.tooltip-${e}`);
        let label = tooltip.parentElement;

        // coordenadas del item
        var xLabel = label.offsetLeft;
        var yLabel = label.offsetHeight;

        // Calcular el tamaño del tooltip
        const widthLabel = label.clientWidth;
        const heightLabel = label.clientHeight;

        // posicionar tooltip
        let xPos = (xLabel + (widthLabel / 2)) - 65;
        let yPos = yLabel + 8;

        tooltip.style.left = `${xPos}px`;
        tooltip.style.bottom = `${yPos}px`;

        console.log('item:' + e, 'x:' + xLabel, 'y:' + yLabel, 'ancho:' + widthLabel, 'alto:' + heightLabel);
        console.log('xpos:' + xPos)

    }
</script>
