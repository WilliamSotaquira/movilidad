@extends('welcome')
@section('title','objetivos')
@section('contenido')

<link rel="stylesheet" href="{{ asset('css/cybe.css') }}">

<!-- Set objetivos -->


<div class="set-wrapper objetivos obj">


    <div class="box b1">
        <div class="cpt1">

            <p>Para conocer más información de las metas, puedes seleccionar por modo de transporte:</p>
            <select name="select-obj" id="select-obj" class="form-control " required="required">
                <option>Motocicletas</option>
                <option>Vehículos</option>
                <option>Transporte de carga</option>
                <option>Transporte escolar</option>
                <option>Flota oficial</option>
                <option>Taxis</option>
                <option>Transporte público</option>
                <option selected disabled>Seleccione una opción</option>
            </select>

        </div>
        <div class="cpt2">
        </div>
    </div>


    <template>
        <div class="cpt1">
            <h2 class="title title-type-1 title-id-b2cpt1">Vehículos particulares</h2>
            <p class="enfasis ph-type-2 ph-id-b2c1p1">(segmentos <span>M1 y N1</span>)</p>
            <p class="paragraph ph-type-1 ph-id-b2c1p2">Estas metas aceleran el proceso de transición a vehículos de cero emisiones y ayudan a mitigar la contaminación ambiental y los efectos en la salud pública provocados por la exposición a concentración de material particulado.</p>
        </div>
        <div class="cpt2">
            <ul class="nav nav-pills nav-justified">

            </ul>

            <div class="tab-content">
                <!-- <div id="home" class="tab-pane fade in active">
                    <h3 class="title title-type-2 title-id-b2cpt2">Metas</h3>
                    <p>Desde 2028, sólo circularán vehículos de cero emisiones en zonas con restricción de circulación, de acuerdo con la clasificación del etiquetado ambiental.</p>
                </div>
                <div id="menu1" class="tab-pane fade">
                    <h3 class="title title-type-2 title-id-b2cpt2">Incentivos</h3>
                    <p>Estos incentivos buscan promover la adquisición de motocicletas de cero emisiones y fomentar su uso en la ciudad.</p>
                </div>
                <div id="menu2" class="tab-pane fade">
                    <h3 class="title title-type-2 title-id-b2cpt2">Productos clave</h3>
                    <p>Estos productos clave buscan promover la adquisición de motocicletas de cero emisiones y fomentar su uso en la ciudad.</p>
                </div> -->

            </div>
        </div>
    </template>

    <div class="box b2">
    </div>



</div>
<!-- Fin Set -->


<script>
    const datos = [{
            title: 'Motocicletas',
            segmentos: 'L1 y L7',
            intro: 'lorem ipsum dolor sit amet',

            pills: [{
                    name: 'Metas',
                    texto: 'Estas metas aceleran el proceso de transición a vehículos de cero emisiones y ayudan a mitigar la contaminación ambiental y los efectos en la salud pública provocados por la exposición a concentración de material particulado.',
                    lista: [{
                            textMeta: 'A partir de 2032, sólo se registrarán en Bogotá motocicletas de cero emisiones.'
                        },
                        {
                            textMeta: 'Desde 2028, sólo circularán motocicletas de cero emisiones en zonas con restricción de circulación, de acuerdo con la clasificación del etiquetado ambiental.'
                        }
                    ],
                    'm1': 'A partir de 2032, sólo se registrarán en Bogotá motocicletas de cero emisiones.',
                    'm2': 'Desde 2028, sólo circularán motocicletas de cero emisiones en zonas con restricción de circulación, de acuerdo con la clasificación del etiquetado ambiental.'
                },
                {
                    name: 'Incentivos',
                    texto: 'Estos incentivos buscan promover la adquisición de motocicletas de cero emisiones y fomentar su uso en la ciudad.',
                    imgIncentivos: 'img/motocicletas.jpg',
                    i1: 'Exención del impuesto de registro para motocicletas de cero emisiones.',
                    i2: 'Exención del impuesto de circulación para motocicletas de cero emisiones.'
                },
                {
                    name: 'Productos clave',
                    texto: 'Estos productos clave buscan promover la adquisición de motocicletas de cero emisiones y fomentar su uso en la ciudad.',
                    txtProductosClave: 'Estos productos clave buscan promover la adquisición de motocicletas de cero emisiones y fomentar su uso en la ciudad.',
                    imgProductosClave: 'img/motocicletas.jpg',
                    c1: 'Desarrollo de una estrategia de movilidad eléctrica para motocicletas.',
                    c2: 'Desarrollo de una estrategia de movilidad eléctrica para motocicletas.'
                }
            ]

        },
        {
            title: 'Vehiculos particulares',
            segmentos: 'M1 y N1',
            intro: 'Estas metas aceleran el proceso de transición a vehículos de cero emisiones y ayudan a mitigar la contaminación ambiental y los efectos en la salud pública provocados por la exposición a concentración de material particulado.',

            pills: [{
                    name: 'Metas Carro',
                    texto: '',
                    lista: [{
                            name: 'Meta 1',
                            textMeta: 'Desde 2028, sólo circularán vehículos de cero emisiones en zonas con restricción de circulación, de acuerdo con la clasificación del etiquetado ambiental.'
                        },
                        {
                            name: 'Meta 2',
                            textMeta: 'A partir de 2032, sólo se registrarán en Bogotá vehículos de cero emisiones.'
                        },
                        {
                            name: 'Meta 3',
                            textMeta: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.'
                        },
                        {
                            name: 'Meta 3',
                            textMeta: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.'
                        },
                        {
                            name: 'Meta 3',
                            textMeta: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.'
                        }
                    ],
                    'm1': 'A partir de 2032, sólo se registrarán en Bogotá motocicletas de cero emisiones.',
                    'm2': 'Desde 2028, sólo circularán motocicletas de cero emisiones en zonas con restricción de circulación, de acuerdo con la clasificación del etiquetado ambiental.'
                },
                {
                    name: 'Incentivos Carro',
                    texto: 'Estos incentivos buscan promover la adquisición de motocicletas de cero emisiones y fomentar su uso en la ciudad.',
                    imgIncentivos: 'img/motocicletas.jpg',
                    i1: 'Exención del impuesto de registro para motocicletas de cero emisiones.',
                    i2: 'Exención del impuesto de circulación para motocicletas de cero emisiones.'
                },
                {
                    name: 'Productos clave Carro',
                    texto: 'Estos productos clave buscan promover la adquisición de motocicletas de cero emisiones y fomentar su uso en la ciudad.',
                    imgProductosClave: 'img/motocicletas.jpg',
                    c1: 'Desarrollo de una estrategia de movilidad eléctrica para motocicletas.',
                    c2: 'Desarrollo de una estrategia de movilidad eléctrica para motocicletas.'
                }
            ]

        },

    ];

    document.getElementById('select-obj').addEventListener('change', function() {
        id = document.getElementById('select-obj').selectedIndex;
        validarDatos(id);
        // cargarMetas(id)
    });

    function validarDatos(id) {

        let container = document.querySelector('.b2');

        while (container.firstChild) {
            container.removeChild(container.firstChild);
        }
        cargarSegmento(id);
    }

    function cargarSegmento(id) {

        const template = document.querySelector("template");
        const parent = document.querySelector('.set-wrapper.obj .b2');
        const textData = template.content.cloneNode(true);

        textData.querySelector(".cpt1 .title-id-b2cpt1").textContent = datos[id].title;
        textData.querySelector(".cpt1 .ph-id-b2c1p1 span").textContent = datos[id].segmentos;
        textData.querySelector(".cpt1 .ph-id-b2c1p2").textContent = datos[id].texto;
        parent.appendChild(textData);

        cargarPills(id);

    }

    function cargarPills(id) {

        const pill = document.querySelector('.b2 .cpt2 .nav-pills');
        const content = document.querySelector('.b2 .cpt2 .tab-content');

        // const items = document.createElement('div');
        // items.className = 'items-metas';
        // document.querySelector('.b2 .cpt2 .tab-content').appendChild(items);

        for (let i = 0; i < datos[id].pills.length; i++) {


            let li = document.createElement('li');
            li.innerHTML = `<a data-toggle="pill" href="#tab-${[i]}">${datos[id].pills[i].name}</a>`;
            pill.appendChild(li);

            let div = document.createElement('div');
            div.id = `tab-${[i]}`;
            div.className = 'tab-pane fade';
            div.innerHTML = //html
                `
            <div class="cpt-1">
            <h3 class="title title-type-2 title-id-b2cpt2">${datos[id].pills[i].name}</h3>
            <p>${datos[id].pills[i].texto}</p>
            </div>
            <div class="cpt-2"></div>
            `;
            content.appendChild(div);


            if (datos[id].pills[i].lista) {
                // datos[id].pills[i].lista.forEach(meta => {
                //     let item = document.createElement('div');
                //     item.innerHTML = meta.textMeta;
                //     document.querySelector(`#tab-${[i]} .cpt-2`).appendChild(item);
                // });
                let count = 0;
                for (let j = 0; j < datos[id].pills[i].lista.length; j++) {
                    let item = document.createElement('div');
                    item.innerHTML = datos[id].pills[i].lista[j].textMeta;
                    document.querySelector(`#tab-${[i]} .cpt-2`).appendChild(item);
                    count++;
                }

                document.querySelector(`#tab-${[i]} .cpt-2`).classList.add(`gtc-${count}`);
            }

        }

        document.querySelector('.b2 .cpt2 .nav-pills li:first-child').classList.add('active');
        document.querySelector('.b2 .cpt2 .tab-content div:first-child').classList.add('in', 'active');


    }


    // function cargarMetas() {
    //     const list = datos[id].metas.forEach(meta => {
    //         console.log(meta.description);
    //         let li = document.createElement('li');
    //         li.innerHTML = meta.description;
    //         document.querySelector('.tab-content #home').appendChild(li);
    //     });
    //     console.log(list);
    // }
</script>
