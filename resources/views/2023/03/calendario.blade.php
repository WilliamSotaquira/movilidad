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
                <div class="tags">
                    <span class="label label-default">${tags[index]}</span>
                </div>
            </div>
            <div class="link-event">
                <a href="">Ver más <i class="link-enf"></i></a>
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

        .partcipants-event {
            grid-area: participants;
        }

        .tags-event {
            grid-area: tags;
            position: relative;
        }

        .link-event {
            grid-area: link;
            position: relative;
            text-align: center;
        }

        .tags-event span {
            display: inline-block;
            margin: 0 0.5em 0.5em 0;
            background-color: rgba(77, 84, 31, 1);
            color: #fff;
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
                gap: 2em;
                grid-template-columns: repeat(3, 1fr);
                grid-template-rows: auto;
                grid-template-areas:
                    'details details participants'
                    'details details tags'
                    'link link link';
            }

            .tags-event a {
                position: relative;
                text-align: right;
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
        <h2>Calendario de eventos 2023</h2>
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
            gap: 24px;
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
            padding: 1em 2em;
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
    </style>

</div>
<!-- Fin Set -->
<br>

<script>
    const datos = {
        enero: [{
            date: '30 y 31 de enero',
            title: 'Semana de la movilidad sostenible ',
            summary: 'Bogotá ha realizado una inversión histórica para transformarse en la ciudad integral, ecourbana y sostenible que todos soñamos. En la semana de la Movilidad Sostenible el Distrito socializa los megaproyectos en desarrollo tanto a la ciudadanía como a un selecto grupo de expertos internacionales, quienes a su vez comparten experiencias de innovación en movilidad alrededor del globo.',
            subjects: 'Alcaldía mayor de Bogotá, Secretaría Distrital de Movilidad,  expertos internacionales',
            tags: ['Movilidad Sostenible', 'Ciudades Sostenibles'],
            url: '#',
        }],
        febrero: [{
                date: '1, 2 y 3 de febrero',
                title: 'Semana de la movilidad sostenible ',
                summary: 'Bogotá ha realizado una inversión histórica para transformarse en la ciudad integral, ecourbana y sostenible que todos soñamos. En la semana de la Movilidad Sostenible el Distrito socializa los megaproyectos en desarrollo tanto a la ciudadanía como a un selecto grupo de expertos internacionales, quienes a su vez comparten experiencias de innovación en movilidad alrededor del globo.',
                subjects: 'Alcaldía mayor de Bogotá, Secretaría Distrital de Movilidad,  expertos internacionales',
                tags: ['Movilidad Sostenible', 'Ciudades Sostenibles'],
                url: '#',
            },
            {
                date: '21 de febrero',
                title: 'Lanzamiento Encuesta de Movilidad 2023 Bogotá - Región',
                summary: 'Una herramienta que permitirá diseñar políticas públicas para mejorar la movilidad y calidad de vida de los habitantes de la Región Metropolitana. Este instrumento permitirá conocer las dinámicas de movilidad de la población mayor a 5 años de edad, en Bogotá y 20 municipios vecinos.',
                subjects: 'Secretaría Distrital de Movilidad en sinergia con autoridades de Cundinamarca. Ciudadanía diversa.',
                tags: ['Encuesta de Movilidad', 'Bogotá - Región', 'Región Metropolitana', 'Movilidad Sostenible'],
                url: 'https://www.encuestademovilidad2023.com/',
            },
            {
                date: '24 de febrero',
                title: 'Rendición de Cuentas Nodo Sector Movilidad Distrital',
                summary: 'Diálogo en doble vía entre las entidades del Sector Movilidad y la ciudadanía, un ejercicio de transparencia en el cual informamos y explicamos los avances y resultados de nuestra gestión.',
                subjects: 'Ciudadanía diversa, SDM, UMV, IDU, TMSA, EMB, TTSA, ODT',
                tags: ['Sector Movilidad', 'Rendición de Cuentas', 'Participación ciudadana'],
                url: '',
            }
        ],
        marzo: [{
            date: '22 y 23 de marzo',
            title: 'Autonomy mobility world Expo ',
            summary: 'Visibilizar procesos de integración y sostenibilidad como el sistema de bicis compartidas, posicionando a Bogotá como una de las ciudades de América Latina que más usan y promueven este medio de transporte sostenible.',
            subjects: 'Secretaría Distrital de Movilidad',
            tags: ['Green cities', 'Cycling cities', 'movilidad sostenible', 'bicis compartidas'],
            url: 'https://www.amwe.world/',
        }],
        abril: [{
            date: 'Por definir',
            title: 'Relanzamiento ORVI',
            summary: 'Relanzamiento del Centro de Atención a Víctimas por Siniestros Viales (ORVI) el cual operará en el centro comercial Mall Plaza, ofeciendo asesoría jurídica, psicológica y social a todas aquellas personas involucradas en un siniestro vial en Bogotá.',
            subjects: 'Ciudadanía diversa, Secretaría Distrital de Movilidad',
            tags: ['Seguridad Vial', 'Siniestros viales', 'atención a la ciudadanía'],
            url: '#',
        }],
        junio: [{
            date: '23 y 24 de junio',
            title: 'Mobilize learning lab Bogota',
            summary: 'Bogotá es la ciudad anfitriona de este encuentro colaborativo que busca explorar soluciones y mejores prácticas en movilidad en nuestras regiones para un futuro sostenible. ',
            subjects: 'ITDP, Secretaría Distrital de Movilidad, Fundación Volvo',
            tags: ['Movilidad sostenible', 'desarrollo sostenible'],
            url: '#',
        }],
        agosto: [{
                date: '',
                title: 'Semana del taxista',
                summary: 'Teniendo en cuenta que el 5 de agosto el día del taxista, la Secretaría Distrital de Movilidad dedica una semana completa para celebrar a los conductores y conductoras de taxi con actividades de integración y bienestar.',
                subjects: 'Secretaría Distrital de Movilidad, Secretaría de Desarrollo económico, Invitados, gremio de taxistas.  ',
                tags: ['Movilidad Bogotá', 'atención a la ciudadanía'],
                url: '#',
            },
            {
                date: '25 de agosto',
                title: 'Reconocimiento Excelencia Logística ',
                summary: 'El Reconocimiento Excelencia Logística de la Red de Logística Urbana busca fomentar y desarrollar la gestión logística de empresas que operan en la Región Metropolitana Bogotá-Cundinamarca, con la firme voluntad de estimular la innovación en el sector. Habrán 4 categorías: sostenibilidad social, sostenibilidad ambiental, eficiencia operativa y tecnologías e innovación.',
                subjects: '',
                tags: [],
                url: '#',
            }
        ],
        septiembre: [{
                date: 'Desde el 22 hasta el 29 de septiembre',
                title: 'Semana de la Bici',
                summary: 'La Semana de la Bici celebra este año su 16° versión, un espacio donde se realizan actividades y campañas para posicionar la bici como medio de transporte sostenible.',
                subjects: 'Secretaría Distrital de Movilidad, entidades distritales, colectivos, empresas privadas, entidades aliadas y Universidades.',
                tags: ['movilidad sostenible', 'cycling cities', 'bicicleta'],
                url: '#',
            },
            {
                date: '28 de septiembre',
                title: 'Reconocimiento Red Muévete mejor y premio Al Trabajo en Bici',
                summary: 'Evento de reconocimiento a las empresas, entidades y universidades de la Red Muévete mejor que en el último año han fomentado el uso de medios de transporte sostenibles, y que en general han realizado acciones en pro de la movilidad sostenible en la ciudad.',
                subjects: 'Secretaría Distrital de Movilidad, miembros de la Red Muévete Mejor',
                tags: [],
                url: '#',
            }
        ],
        octubre: [{
                date: 'Desde el 1 hasta el 7 octubre',
                title: 'Semana de la seguridad vial ',
                summary: 'Evento que celebra la Secretaria Distrital de Movilidad, desde el año 2007, en 2022 llega a su edición XVI, por medio de diferentes conversatorios, actividades y foros se busca llegar y sensibilizar a la ciudadanía frente a la importancia de la seguridad vial para todos los actores en la vía.',
                subjects: 'Secretaría Distrital de Movilidad, ciudadanía diversa.',
                tags: ['Seguridad vial'],
                url: '#',
            },
            {
                date: '5 de octubre',
                title: 'Innovadores escolares PESVI',
                summary: 'Encuentro que promueve el intercambio de experiencias entre jóvenes líderes escolares en seguridad vial,  y el aprendizaje en temas de movilidad sostenible, equidad y seguridad.',
                subjects: 'Secretaría Distrital de Movilidad, Instituciones Educativas del Distrito',
                tags: ['seguridad vial', 'entornos escolares seguros'],
                url: '#',
            },
            {
                date: '6 de octubre',
                title: 'Reconocimiento Red de Seguridad Vial',
                summary: 'Los reconocimientos otorgados por la *Red de Seguridad Vial* tienen como objetivo destacar y premiar las *Buenas Prácticas* que llevan a cabo las organizaciones miembros en pro de la seguridad vial. Dichas prácticas son fundamentales para garantizar un sistema de enfoque seguro, tanto para los usuarios de la vía como para los trabajadores que se desplazan en vehículos motorizados.',
                subjects: '',
                tags: [],
                url: '#',
            },
            {
                date: '7 de octubre',
                title: 'Dia del motociclista ',
                summary: 'Evento dirigido a motociclistas para mejorar la seguridad vial ',
                subjects: 'Secretaría Distrital de Movilidad, gremio de motociclistas',
                tags: [],
                url: '#',
            },
            {
                date: '18 de octubre',
                title: 'Promotores Escolares en Seguridad Vial',
                summary: 'Evento en el cual grupos de estudiantes de la capital, exponen sus propuestas innovadoras para la seguridad vial en entornos escolares.',
                subjects: 'Secretaría Distrital de Movilidad, Instituciones Educativas del Distrito',
                tags: ['seguridad vial', 'entornos escolares seguros'],
                url: '#',
            }
        ],
        noviembre: [{
            date: '5 de noviembre',
            title: 'Día Mundial de las Víctimas de Siniestros Viales',
            summary: 'Conmemorar la memoria de las personas que fallecieron en el tránsito y generar conciencia sobre la importancia de la seguridad vial en la ciudad.',
            subjects: 'Secretaría Distrital de Movilidad. ',
            tags: ['Seguridad vial'],
            url: '# www',
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

            textData.querySelector("i").textContent = date;
            textData.querySelector("h3").textContent = title;
            textData.querySelector(".p1").textContent = summary;
            textData.querySelector(".p2").textContent = subjects;

            if (url === '#' || url === '' || url === null ) {
                codeUrl = "";
            } else {
                codeUrl = `Ir al sitio web de ${title}`;
            }
            textData.querySelector("a").textContent = codeUrl;
            textData.querySelector("a").href = url;


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
