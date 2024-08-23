@extends('welcome')
@section('title','calendario')

@section('contenido')


<!-- Set calendario -->
<div class="set-wrapper calendario">

    <template>
        <div class="card-calendar">
            <div class="tags-event">
                <div class="tags">
                    <span class="label label-default">${tags[index]}</span>
                </div>
            </div>
            <div class="details-event">
                <h3>Semana de la movilidad sostenible </h3>
                <span class="date-event">November 09, 2022</span>
                <p class="p1">Bogotá ha realizado una inversión histórica para transformarse en la ciudad integral, ecourbana y sostenible que todos soñamos. En la semana de la Movilidad Sostenible el Distrito socializa los megaproyectos en desarrollo tanto a la ciudadanía como a un selecto grupo de expertos internacionales, quienes a su vez comparten experiencias de innovación en movilidad alrededor del globo.</p>
            </div>
            <div class="link-event">
                <a href="">Ver más <i class="link-enf"></i></a>
            </div>
            <div class="participants-event">
                <p><strong>Participantes: </strong><span class="p2"></span></p>
            </div>
        </div>
    </template>

    <style>
        .set-wrapper {
            font-family: 'Montserrat', sans-serif;
            font-size: 16px;
            font-weight: 500;
            text-align: left;
            line-height: 1.5;
            color: #000000bf;
        }

        .calendario {
            font-size: 16px !important;
            font-weight: 500;
            text-align: left;
            line-height: 1.5;
        }

        .card-calendar {
            background: #fff;
            display: grid;
            gap: 8px;
            grid-auto-flow: dense;
            grid-template-columns: 1fr;
            grid-template-rows: auto;
            grid-template-areas:
                'tags-event'
                'details'
                'participants'
                ' tags'
                ' link';
            padding: 2rem;
            border: solid 1px #e5e5e5;
            border-radius: 5px;
            -webkit-box-shadow: 0px 0px 10px 3px rgba(0, 0, 0, 0.08);
            box-shadow: 0px 0px 10px 3px rgba(0, 0, 0, 0.08);
        }

        .details-event {
            grid-area: details;
        }

        .participants-event {
            grid-area: participants;

        }

        .participants-event p strong {
            color: #00000099;
        }

        .tags-event {
            grid-area: tags-event;
            position: relative;
        }


        .link-event {
            grid-area: link;
            position: relative;
            text-align: left;
        }


        .tags-event span {
            display: inline-block;
            margin: 2px 4px;
            background-color: #fff;
            color: #4d541f;
            padding: 4px 8px;
            border-radius: 25px;
            border: solid 2px #4d541f;
        }

        /*
        .tags-event a {
            position: relative;
            background-color: rgba(77, 84, 31, 1);
            padding: 6px 12px;
            border-radius: 4px;
            color: #f5f5f5;
            -webkit-box-shadow: 0px 0px 10px 3px rgba(0, 0, 0, 0.04);
            box-shadow: 0px 0px 10px 3px rgba(0, 0, 0, 0.04);

        } */

        @media(min-width:768px) {
            .card-calendar {
                grid-template-columns: repeat(3, 1fr);
                grid-template-rows: auto;
                grid-template-areas:
                    'tags-event tags-event tags-event'
                    'details details details'
                    'participants participants participants'
                    'link link link';
                padding-top: 24px;
            }

            .tags-event a {
                position: relative;
                text-align: left;
                display: inline-block;
                padding-top: 6px;
            }
        }

        .card-calendar p,
        .card-calendar h3,
        .card-calendar h4,
        .card-calendar a,
        .card-calendar i {
            margin: 4px;
        }

        .card-calendar .date-event {
            color: #00000099;
            font-weight: 600;
        }

        .card-calendar .date-event::before {
            content: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/18-09-2023/calendario_3.png');
            position: relative;
            display: inline-block;
            max-width: 60px;
            padding: 4px;
            margin-right: 4px;

        }

        .card-calendar h3 {

            padding-top: 0;
            padding-bottom: 0.1em;
            font-weight: 700;
            text-align: left;
            line-height: 1.2;
            color: #333333ff;
            font-size: 1.72em;
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
            font-weight: 500;
            text-align: left;
            line-height: 1.3;
            color: #000000bf;
            /* display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 3;
            line-clamp: 3;
            overflow: hidden; */
        }

        .card-calendar .tags {
            /* padding-top: 1.5em; */
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
        <h2>Calendario de eventos y actividades 2024</h2>
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
        <div onclick="enList('enero')" class="zoom calendar-tab card-enero"><span class="titulo">Enero</span></div>
        <div onclick="enList('febrero')" class="zoom calendar-tab card-febrero"><span class="titulo">Febrero</span></div>
        <div onclick="enList('marzo')" class="zoom calendar-tab card-marzo"><span class="titulo">Marzo</span></div>
        <div onclick="enList('abril')" class="zoom calendar-tab card-abril"><span class="titulo">Abril</span></div>
        <div onclick="enList('mayo')" class="zoom calendar-tab card-mayo"><span class="titulo">Mayo</span></div>
        <div onclick="enList('junio')" class="zoom calendar-tab card-junio"><span class="titulo">Junio</span></div>
        <div onclick="enList('julio')" class="zoom calendar-tab card-julio"><span class="titulo">Julio</span></div>
        <div onclick="enList('agosto')" class="zoom calendar-tab card-agosto"><span class="titulo">Agosto</span></div>
        <div onclick="enList('septiembre')" class="zoom calendar-tab card-septiembre"><span class="titulo">Septiembre</span></div>
        <div onclick="enList('octubre')" class="zoom calendar-tab card-octubre"><span class="titulo">Octubre</span></div>
        <div onclick="enList('noviembre')" class="zoom calendar-tab card-noviembre"><span class="titulo">Noviembre</span></div>
        <div onclick="enList('diciembre')" class="zoom calendar-tab card-diciembre"><span class="titulo">Diciembre</span></div>
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
            border: solid 1px #e5e5e5;

            -webkit-box-shadow: 0px 0px 10px 3px rgba(0, 0, 0, 0.04);
            box-shadow: 0px 0px 10px 3px rgba(0, 0, 0, 0.04);
            height: 180px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            transition: all 2s ease;
        }

        .box-calendar-tabs .calendar-tab:hover {
            border: solid 1px rgb(77, 84, 31);
            background-color: #656565;
            color: #f5f5f5;

        }

        .titulo {
            background-color: rgba(77, 84, 31, 1);
            border: solid 1px rgb(77, 84, 31);
            ;
            padding: 2px 10px;
            border-radius: 4px;
            color: #fff;
            text-align: center;
            transition: all 2s ease;
            -webkit-box-shadow: 0px 0px 10px 3px rgba(0, 0, 0, 0.16);
            box-shadow: 0px 0px 10px 3px rgba(0, 0, 0, 0.16);
        }

        .box-calendar-tabs .calendar-tab:hover>.titulo {
            width: 100%;
            transform: translateY(72px);
            background-color: #252525;
            border-radius: 0px 0px 4px 4px;
            border: solid 1px transparent;
        }

        .box-calendar-tabs .featured .titulo {
            width: 100%;
            transform: translateY(73px);
            background-color: #252525;
            border-radius: 0px 0px 5px 5px;
            -webkit-box-shadow: none;
            box-shadow: none;
        }


        .featured {
            grid-column: span 2;
        }


        .cards-wrapper {
            /* grid-column: span 4; */
            display: grid;
            gap: 16px;
            grid-auto-flow: dense;
            grid-template-columns: 1fr;
            grid-template-rows: auto;
            transition: all 2s ease-in;
        }

        .card-enero {
            background-image: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/18-04-2023/enero-sms.png');
            background-position: center;
            background-size: cover;
            justify-content: center;

        }

        .card-febrero {
            background-image: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/18-04-2023/febrero-rendicion_de_cuentas.png');
            background-position: center top;
            background-size: cover;
            justify-content: center;

        }

        .card-marzo {
            background-image: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/18-04-2023/marzo-no_mas.png');
            background-position: center bottom;
            background-size: cover;
            justify-content: center;

        }

        .card-abril {
            background-image: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/18-04-2023/abril-agente.png');
            background-position: center bottom;
            background-size: cover;
            justify-content: center;

        }

        .card-mayo {
            background-image: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/18-04-2023/mayo-orvi.png');
            background-position: center bottom;
            background-size: cover;
            justify-content: center;

        }

        .card-junio {
            background-image: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/18-04-2023/junio-metrobta.png');
            background-position: center bottom;
            background-size: cover;
            justify-content: center;

        }

        .card-julio {
            background-image: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/18-04-2023/julio-obraspqnal.png');
            background-position: center bottom;
            background-size: cover;
            justify-content: center;

        }

        .card-agosto {
            background-image: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/18-04-2023/agosto-taxi.png');
            background-position: center 70%;
            background-size: cover;
            justify-content: center;

        }

        .card-septiembre {
            background-image: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/18-04-2023/septiembre-bici.png');
            background-position: center;
            background-size: cover;
            justify-content: center;

        }

        .card-octubre {
            background-image: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/18-04-2023/octubre-seguridad.png');
            background-position: center 13%;
            background-size: cover;
            justify-content: center;

        }

        .card-noviembre {
            background-image: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/18-04-2023/noviembre-seguridad.png');
            background-position: center 13%;
            background-size: cover;
            justify-content: center;

        }

        .card-diciembre {
            background-image: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/18-04-2023/diciembre-luces.png');
            background-position: center 13%;
            background-size: cover;
            justify-content: center;

        }

        @media(min-width:768px) {
            .set-wrapper .box-calendar-tabs {
                grid-template-columns: repeat(3, 1fr);
                grid-template-rows: auto;
                row-gap: 32px;
                column-gap: 64px;

            }

            .featured {
                grid-column: span 3;
            }

            .cards-wrapper {
                padding: 1em 0;
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
            transform: scale(1.010);
            -moz-transform: scale(1.010);
            /* Firefox */
            -webkit-transform: scale(1.010);
            /* Chrome - Safari */
            -o-transform: scale(1.010);
            /* Opera */
            -ms-transform: scale(1.010);
            /* IE9 */
        }

        .hidden {
            visibility: hidden;
            position: absolute;
        }
    </style>

</div>
<!-- Fin Set -->
<br>

<script>
    const datos = {

        agosto: [{
                date: '17 de agosto',
                title: 'El Día Internacional del Peatón',
                summary: 'Se conmemora una fecha de gran importancia para la seguridad vial a nivel mundial: el Día Mundial del Peatón. Esta celebración, promovida por la Organización Mundial de la Salud (OMS), tiene sus raíces en un acontecimiento histórico que marcó un antes y un después en la percepción de la seguridad de los peatones. En 1897, se registró el primer incidente de tráfico con una víctima peatonal, un suceso que evidenció la necesidad de proteger a quienes transitan a pie.',
                subjects: '',
                tags: [],
                url: '#',
            },
            {
                date: '20, 21 y 22 de agosto',
                title: 'II Foro de Ciudades del Aprendizaje de Latinoamérica',
                summary: 'Bogotá será sede del II Foro de Ciudades del Aprendizaje de Latinoamérica, el cual que se llevará a cabo del 20 al 22 de agosto en el Hotel Grand Hyatt. Este es un encuentro organizado en el marco de la Red Mundial de Ciudades del Aprendizaje de la Unesco, junto con la Red de Ciudades del Aprendizaje de México y el Instituto de Aprendizaje a lo Largo de Toda la Vida de la Unesco.',
                subjects: 'Secretaría de Movilidad de Bogotá',
                tags: ['Movilidad sostenible'],
                url: 'https://www.redciudadesaprendizajelatam.org/foro',
            },
            {
                date: '26 de agosto',
                title: 'Aniversario Barrio Vital San Felipe',
                summary: 'El Barrio Vital de San Felipe y Juan XXII es el primer territorio en la ciudad donde actúa la estrategia de intervención de Barrios Vitales 1. Barrios Vitales se configura como una estrategia de intervención que busca estructurar a través de acciones en la movilidad, espacio público y revitalización urbana, una ciudad compacta y de proximidad.',
                subjects: '',
                tags: ['Barrios Vitales'],
                url: 'https://www.movilidadbogota.gov.co/web/barrios_vitales',
            }
        ],
        septiembre: [{
                date: '9 de septiembre',
                title: 'Aniversario Barrio Vital Bosa El Porvenir',
                summary: 'El Barrio Vital Bosa El Porvenir es el tercer territorio en la ciudad de implementación de la estrategia de intervención de Barrios Vitales1, la cual se configura como una estrategia que busca estructurar a través de acciones en la movilidad, espacio público y revitalización urbana, una ciudad compacta y de proximidad.',
                subjects: 'Sector Movilidad. Distrito.',
                tags: [
                    'Barrios Vitales'
                ],
                url: 'https://www.movilidadbogota.gov.co/web/barrios_vitales',
            },
            {
                date: '23 de septiembre',
                title: 'III Feria de Tecnologías y Movilidad Sostenible para el transporte de carga',
                summary: 'La feria está dirigida a todos los pequeños y medianos transportadores de carga, empresas de logística, entidades públicas, entre otros actores que estén interesados en participar en el cambio de tecnologías que permitan mejorar la calidad del aire de la ciudad.',
                subjects: 'Secretaría de Ambiente, Secretaría Distrital de Movilidad.',
                tags: [
                    'Movilidad sostenible',
                    'Innovación',
                ],
                url: '',
            },
            {
                date: 'Desde el 22 hasta el 30 de septiembre',
                title: 'XV Semana de la Bici',
                summary: 'Evento con diferentes actividades diarias en las que se rinde un homenaje a la bicicleta. Este año su tema central será el autocuidado, la idea sera llevar un mensaje de seguridad vial a los ciclistas para que se hagan ver en la vía. ',
                subjects: 'Secretaría Distrital de Movilidad, entidades distritales, colectivos, empresas privadas, entidades aliadas y Universidades.',
                tags: [
                    'Movilidad sostenible',
                    'Bicicleta',
                    'Seguridad vial'
                ],
                url: 'https://www.movilidadbogota.gov.co/web/xv_semana_de_la_bici',
            }
        ],
        octubre: [{
            date: '7 de octubre',
            title: 'Dia del motociclista Distrital',
            summary: 'Evento dirigido a motociclistas para mejorar la seguridad vial ',
            subjects: 'Secretaría Distrital de Movilidad. Ciudadanía.',
            tags: [
                'Motociclistas',
                'Seguridad vial'
            ],
            url: '#',
        }, ],
        noviembre: [{
                date: 'Primera semana de noviembre',
                title: 'Cierre de año programa Niños y niñas primero',
                summary: 'Evento de cierre con los beneficiarios del programa Niñas y niños primero.',
                subjects: 'Secretaría Distrital de Movilidad. Secretaría de Educación. Ciudadanía',
                tags: [
                    'Niñas y niños primero',
                    'Movilidad incluyente',
                    'Movilidad Sostenible'
                ],
                url: '#',
            },
            {
                date: '12 de noviembre',
                title: 'Día del Peatón',
                summary: 'Iniciativa que busca promover el uso de medios de transporte sostenibles y seguros, como la bicicleta, el transporte público y la caminata.*',
                subjects: 'Secretaría Distrital de Movilidad. ',
                tags: ['Seguridad vial'],
                url: '#',
            },
            {
                date: 'Tercera Semana de noviembre',
                title: 'Lanzamiento documental NNP',
                summary: 'Presentación del documento del programa Niñas y niños primero.',
                subjects: 'Secretaría Distrital de Movilidad. Secretaría de Educación. Ciudadanía.',
                tags: [
                    'Niñas y niños primero',
                    'Movilidad incluyente',
                    'Movilidad Sostenible'
                ],
                url: '#',
            },
            {
                date: '17 de noviembre',
                title: 'Día mundial en memoria de las víctimas de siniestros viales ',
                summary: 'Conmemorar la memoria de las personas que fallecieron en el tránsito y generar conciencia sobre la importancia de la seguridad vial en la ciudad.',
                subjects: 'Secretaría Distrital de Movilidad. ',
                tags: ['Seguridad vial'],
                url: '#',
            }
        ],
        diciembre: [{
            date: 'Por definir',
            title: 'Ciclovia nocturna',
            summary: 'El objetivo es promover el transporte sostenible, la recreación y el disfrute de la iluminación navideña.*',
            subjects: 'Secretaría Distrital de Movilidad. ',
            tags: [
                'Alumbrado navideño',
                'Bicicletas, patines y peatones'
            ],
            url: '#',
        }]
    };


    // console.log(datos.marzo);

    const template = document.querySelector("template");
    const tags = document.querySelector("tags-event");

    let cacheMonth;
    let textData;

    function enList(section) {

        if (datos[section] == undefined) {
            alert("No hay eventos para este mes");
        } else {
            if (cacheMonth == null) {
                assign(section);
            } else {
                cleanRowCards(cacheMonth, section);
                // alert(cacheMonth +' '+ section);
            }
        }
    }


    function assign(section) {

        // Variable de la envoltura de tarjetas.
        const wrapper = document.createElement("div");
        wrapper.setAttribute('class', [`cards-wrapper featured cards-wrapper-${section}`]);

        // Llamado del div padre. Aumento del ancho al botón. Creación de la envoltura de las tarjetas.
        const mes = document.querySelector(`.card-${section}`);
        mes.classList.add('featured');
        mes.insertAdjacentElement("afterend", wrapper);

        addCards(section);

    }


    function addCards(month) {

        let fragment = document.querySelector(`.cards-wrapper-${month}`);

        for (let index = 0; index < datos[month].length; index++) {

            let date = datos[month][index].date;
            let title = datos[month][index].title;
            let summary = datos[month][index].summary;
            let subjects = datos[month][index].subjects;
            let tags = datos[month][index].tags;
            let url = datos[month][index].url;
            let codeUrl;

            console.log(url);

            textData = template.content.cloneNode(true);

            textData.querySelector("h3").textContent = title;
            textData.querySelector(".p1").textContent = summary;

            if (url === '#' || url === '' || url === null) {
                textData.querySelector('a').classList.add("hidden")
            } else {
                codeUrl = `Sitio web: ${title}`;
                textData.querySelector("a").textContent = codeUrl;
                textData.querySelector("a").href = url;
            }

            if (subjects === '' || subjects === null || subjects === '#') {
                // console.log(subjects);
                textData.querySelector(".participants-event>p").classList.add("hidden");
            } else {
                textData.querySelector(".p2").textContent = subjects;
            }

            if (date === '' || date === null || date === '#') {
                // console.log(subjects);
                textData.querySelector(".date-event").classList.add("hidden");
            } else {
                textData.querySelector(".date-event").textContent = date;

            }




            let tagsCode = [];
            for (let i = 0; i < tags.length; i++) {
                tagsCode += `<span class="label label-default">${tags[i]}</span>`;
            }

            textData.querySelector(".tags").innerHTML = tagsCode;
            fragment.appendChild(textData);


            cacheMonth = month;
        }

    }

    function cleanRowCards(month, section) {
        let container = document.querySelector(`.card-${month}`);
        container.classList.remove('featured');

        console.log(container);

        const rowDelete = document.querySelector(`.cards-wrapper-${month}`);
        rowDelete.remove();

        assign(section);

    }
</script>
