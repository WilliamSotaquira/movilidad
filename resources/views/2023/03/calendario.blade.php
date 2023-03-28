@extends('welcome')
@section('title','calendario')

@section('contenido')


<!-- Set calendario -->
<div class="set-wrapper calendario">

    <template>
        <div class="card-calendar">
            <div class="details-event">
                <i>November 09, 2022</i>
                <h3>Semana de la movilidad sostenible </h3>
                <p class="p1">Bogotá ha realizado una inversión histórica para transformarse en la ciudad integral, ecourbana y sostenible que todos soñamos. En la semana de la Movilidad Sostenible el Distrito socializa los megaproyectos en desarrollo tanto a la ciudadanía como a un selecto grupo de expertos internacionales, quienes a su vez comparten experiencias de innovación en movilidad alrededor del globo.</p>
            </div>
            <div class="participants-event">
                <h4>Participantes</h4>
                <p class="p2">Alcaldía mayor de Bogotá, Secretaría Distrital de Movilidad, expertos internacionales</p>
            </div>
            <div class="tags-event">
                <span class="label label-default">${tags[index]}</span>
                <a href="http://" target="_blank" rel="noopener noreferrer">Ver más</a>
            </div>
        </div>
    </template>
    <!--  -->
    <style>
        .calendario {
            font-size: 16px !important;
            font-weight: 500;
            text-align: left;
            line-height: 1.5;
        }

        .card-calendar {
            background: #f5f5f5;
            display: grid;
            gap: 8px;
            grid-auto-flow: dense;
            grid-template-columns: 1fr;
            grid-template-rows: auto;
            grid-template-areas:
                'details'
                'participants'
                ' tags';

            padding: 2rem;
            border: solid 1px #e5e5e5;
            border-radius: 5px;
            -webkit-box-shadow: 0px 0px 10px 3px rgba(0, 0, 0, 0.08);
            box-shadow: 0px 0px 10px 3px rgba(0, 0, 0, 0.08);
        }

        .details-event {
            grid-area: details;
        }

        .partcipants-event {
            grid-area: participants;
        }

        .tags-event {
            grid-area: tags;
            position: relative;
        }

        .tags-event span {
            display: inline-block;
            margin: 0 0.5em 0.5em 0;
            background-color: rgba(77, 84, 31, 1);
            color: #fff;
        }

        .tags-event a {
            position: relative;
            background-color: rgba(77, 84, 31, 1);
            padding: 6px 12px;
            border-radius: 4px;
            color: #f5f5f5;
            -webkit-box-shadow: 0px 0px 10px 3px rgba(0, 0, 0, 0.04);
            box-shadow: 0px 0px 10px 3px rgba(0, 0, 0, 0.04);

        }

        @media(min-width:768px) {
            .card-calendar {
                gap: 2em;
                grid-template-columns: repeat(3, 1fr);
                grid-template-rows: auto;
                grid-template-areas:
                    'details details participants'
                    'details details tags';
            }

            .tags-event a {
                position: absolute;
                right: 0;
                bottom: 0;
                margin: 0 !important;
            }
        }

        .card-calendar p,
        .card-calendar h3,
        .card-calendar h4,
        .card-calendar a,
        .card-calendar i {
            margin: 4px;
        }

        .card-calendar i {
            color: rgba(77, 84, 31, 1);
            font-weight: 700;
        }

        .card-calendar h3,
        .card-calendar h4 {

            padding-top: 0;
            padding-bottom: 0.1em;
            font-weight: 500;
            text-align: left;
            line-height: 1.2;
            color: rgba(77, 84, 31, 1);
            /* display: -webkit-box; */
            /* -webkit-box-orient: vertical; */
            /* -webkit-line-clamp: 2; */
            /* line-clamp: 2; */
            /* overflow: hidden; */
        }

        .card-calendar h4 {
            /* padding-top: 0.8em; */
        }

        .card-calendar p {
            font-size: 16px;
            font-weight: normal;
            text-align: left;
            line-height: 1.3;
            color: #252525;
            /* display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 3;
            line-clamp: 3;
            overflow: hidden; */
        }

        .card-calendar .tags {
            padding-top: 1.5em;
        }

        .set-wrapper .box-calendar {
            display: grid;
            row-gap: 2em;
            grid-auto-flow: dense;
            grid-template-columns: 1fr;
            grid-template-rows: auto;
            margin: 2em;

        }
    </style>

    <!-- Component box title-center -->
    <div class="box-title-center">
        <h2>Calendario</h2>
        <p>Consulte aquí los próximos eventos de movilidad a realizarse en la ciudad. Al hacer clic en las pestañas desplegables, encontrará información correspondiente a cada uno.</p>
        <br>
    </div>
    <style>
        .field-item.even .centertil {
            visibility: hidden;
            margin-top: -50px;
        }

        .set-wrapper .box-title-center {
            grid-area: box-title-center;
        }

        .box-title-center h2 {
            text-align: center;
            font-size: 32px;
            font-weight: 700;
            color: rgba(77, 84, 31, 1);
            margin-bottom: 40px;
        }
    </style>


    <!-- Sección box calendar-tabs -->
    <div class="box-calendar-tabs">
        <div onclick="enList('enero')" class="zoom calendar-tab enero">Enero</div>

        <div onclick="enList('febrero')" class="zoom calendar-tab febrero">Febrero</div>
        <div onclick="enList('marzo')" class="zoom calendar-tab marzo">Marzo</div>
        <div onclick="enList('abril')" class="zoom calendar-tab abril">Abril</div>
        <div onclick="enList('mayo')" class="zoom calendar-tab mayo">Mayo</div>
        <div onclick="enList('junio')" class="zoom calendar-tab junio">Junio</div>
        <div onclick="enList('julio')" class="zoom calendar-tab julio">Julio</div>
        <div onclick="enList('agosto')" class="zoom calendar-tab agosto">Agosto</div>
        <div onclick="enList('septiembre')" class="zoom calendar-tab septiembre">Septiembre</div>
        <div onclick="enList('octubre')" class="zoom calendar-tab octubre">Octubre</div>
        <div onclick="enList('noviembre')" class="zoom calendar-tab noviembre">Noviembre</div>
        <div onclick="enList('diciembre')" class="zoom calendar-tab diciembre">Diciembre</div>
    </div>
    <style>
        .set-wrapper .box-calendar-tabs {
            grid-area: box-calendar-tabs;
            display: grid;
            gap: 16px;
            grid-auto-flow: dense;
            grid-template-columns: 1fr 1fr;
            grid-template-rows: auto;

        }

        .box-calendar-tabs .calendar-tab {
            background-color: #e5e5e5;
            font-size: 20px;
            text-transform: uppercase;
            font-weight: 700;
            border-radius: 4px;
            border: solid 1px #656565;
            color: rgba(77, 84, 31, 1);
            -webkit-box-shadow: 0px 0px 10px 3px rgba(0, 0, 0, 0.04);
            box-shadow: 0px 0px 10px 3px rgba(0, 0, 0, 0.04);
            height: 120px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .box-calendar-tabs .calendar-tab:hover {
            background-color: #656565;
            border: solid 1px #f5f5f5;
            color: #f5f5f5;

        }


        .featured {
            grid-column: span 4;
        }

        .row-temporal {
            /* grid-column: span 4; */
            display: grid;
            gap: 24px;
            grid-auto-flow: dense;
            grid-template-columns: 1fr;
            grid-template-rows: auto;

        }

        @media(min-width:768px) {
            .set-wrapper .box-calendar-tabs {
                grid-template-columns: repeat(4, 1fr);
                grid-template-rows: auto;
                row-gap: 16px;
                column-gap: 32px;

            }
        }

        .zoom {
            transition: 0.5s ease;
            -moz-transition: 0.5s ease;
            /* Firefox */
            -webkit-transition: 0.5s ease;
            /* Chrome - Safari */
            -o-transition: 0.5s ease;
            /* Opera */
            -ms-transition: 0.5s ease;
            /* IE9 */
        }

        .zoom:hover {
            transform: scale(1.005);
            -moz-transform: scale(1.005);
            /* Firefox */
            -webkit-transform: scale(1.005);
            /* Chrome - Safari */
            -o-transform: scale(1.005);
            /* Opera */
            -ms-transform: scale(1.005);
            /* IE9 */
        }
    </style>


    <!-- <div class="demo">

    </div> -->


</div>
<!-- Fin Set -->

<script>
    const datos = {
        enero: [{
                date: '24 de febrero',
                title: 'Rendición de Cuentas Nodo Sector Movilidad Distrital',
                summary: 'Diálogo en doble vía entre las entidades del Sector Movilidad y la ciudadanía, un ejercicio de transparencia en el cual informamos y explicamos los avances y resultados de nuestra gestión.',
                subjects: 'Ciudadanía diversa, SDM, UMV, IDU, TMSA, EMB, TTSA, ODT',
                tags: ['Sector Movilidad'],
                url: '#',
            },
            {
                date: '1, 2 y 3 de febrero',
                title: 'Semana de la movilidad sostenible',
                summary: 'Bogotá ha realizado una inversión histórica para transformarse en la ciudad integral, ecourbana y sostenible que todos soñamos. En la semana de la Movilidad Sostenible el Distrito socializa los megaproyectos en desarrollo tanto a la ciudadanía como a un selecto grupo de expertos internacionales, quienes a su vez comparten experiencias de innovación en movilidad alrededor del globo.',
                subjects: 'Alcaldía mayor de Bogotá, Secretaría Distrital de Movilidad, expertos internacionales',
                tags: ['Movilidad', 'Sostenibilidad'],
                url: '#',
            },
            {
                date: '5, 6 y 3 de febrero',
                title: 'Semana de la movilidad sostenible',
                summary: 'Bogotá ha realizado una inversión histórica para transformarse en la ciudad integral, ecourbana y sostenible que todos soñamos. En la semana de la Movilidad Sostenible el Distrito socializa los megaproyectos en desarrollo tanto a la ciudadanía como a un selecto grupo de expertos internacionales, quienes a su vez comparten experiencias de innovación en movilidad alrededor del globo.',
                subjects: 'Alcaldía mayor de Bogotá, Secretaría Distrital de Movilidad, expertos internacionales',
                tags: ['Movilidad'],
                url: '#',
            }
        ],
        febrero: [{
                date: '24 de febrero',
                title: 'Rendición de Cuentas Nodo Sector Movilidad Distrital',
                summary: 'Diálogo en doble vía entre las entidades del Sector Movilidad y la ciudadanía, un ejercicio de transparencia en el cual informamos y explicamos los avances y resultados de nuestra gestión.',
                subjects: 'Ciudadanía diversa, SDM, UMV, IDU, TMSA, EMB, TTSA, ODT',
                tags: ['Movilidad'],
                url: '#',
            },
            {
                date: '1, 2 y 3 de febrero',
                title: 'Semana de la movilidad sostenible',
                summary: 'Bogotá ha realizado una inversión histórica para transformarse en la ciudad integral, ecourbana y sostenible que todos soñamos. En la semana de la Movilidad Sostenible el Distrito socializa los megaproyectos en desarrollo tanto a la ciudadanía como a un selecto grupo de expertos internacionales, quienes a su vez comparten experiencias de innovación en movilidad alrededor del globo.',
                subjects: 'Alcaldía mayor de Bogotá, Secretaría Distrital de Movilidad, expertos internacionales',
                tags: ['Movilidad'],
                url: '#',
            }
        ]
    };


    // console.log(datos.enero);
    const template = document.querySelector("template");
    const tags = document.querySelector("tags-event");

    const wrapper = document.createElement("div");
    wrapper.setAttribute('class', 'box-wrapper');

    const fragment = document.createElement("div");
    fragment.setAttribute('class', 'row-temporal');

    let cacheMonth = null;



    function enList(section) {

        if (datos[section] == undefined) {

            alert("No hay eventos para este mes");

        } else {

            if (cacheMonth != null) {
                cleanRow(cacheMonth);
            } else {
                assign(section);
            }
        }
    }


    function assign(section) {

        const mes = document.querySelector(`.${section}`);
        mes.classList.add('featured');
        mes.insertAdjacentElement("afterend", wrapper);

        const rowWrapper = document.querySelector(".box-wrapper");
        rowWrapper.classList.add('featured');

        rowWrapper.insertAdjacentElement("afterbegin", fragment);

        console.log(mes); //HTMLDivElement
        // mes.appendChild(fragment);

        // cacheMonth = 1;
        // console.log("Limpiando datos" + cacheMonth);
        addSection(section);
    }


    function addSection(month) {

        const box = document.querySelector(".row-temporal");

        // console.log(month.constructor.name);
        let monthData = datos[month];
        // console.log(monthData);

        for (let index = 0; index < monthData.length; index++) {
            console.log(monthData[index]);

            let date = monthData[index].date;
            let title = monthData[index].title;
            let summary = monthData[index].summary;
            let subjects = monthData[index].subjects;
            let tags = monthData[index].tags;
            let url = monthData[index].url;

            // console.log(date, title, summary, subjects, tags, url);

            const textData = template.content.cloneNode(true);

            textData.querySelector("i").textContent = date;
            textData.querySelector("h3").textContent = title;
            textData.querySelector(".p1").textContent = summary;
            textData.querySelector(".p2").textContent = subjects;
            // textData.querySelector("a").href = url;

            let tagsCode = [];
            for (let i = 0; i < tags.length; i++) {
                tagsCode += `<span class="label label-default">${tags[i]}</span>`;
            }

            // console.log(tagsCode);

            textData.querySelector(".tags-event").innerHTML = tagsCode;
            fragment.appendChild(textData);
            cacheMonth = month;


        }

    }

    function cleanRow(section) {

        alert("Limpiando datos del mes " + section);

        const rowWrapper = document.querySelector('.box-wrapper');
        rowWrapper.remove();

        cacheMonth = null;

        // console.log(rowWrapper);


        // console.log(rowWrapper.childNodes);
        alert("Eliminado " + section);
    }
</script>
