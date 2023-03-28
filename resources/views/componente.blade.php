@extends('welcome')
@section('title','componente')

@section('contenido')

<!-- Set componente -->
<div class="set-wrapper componente">´
</div>
<!-- Fin Set -->




<!-- Sección box grid-images -->
<template>
    <div class="img-card">
        <img class="image" src="https://picsum.photos/id/1/200/300" alt="">
        <div class="overlay">
            <div class="text">
                <p></p>
            </div>
        </div>
    </div>
</template>
<div class="box-grid-images">

</div>
<style>
    .set-wrapper .box-grid-images {
        grid-area: box-grid-images;
        display: grid;
        gap: 1.5em;
        grid-auto-flow: dense;
        /* grid-template-columns: 1fr; */
        grid-template-columns: repeat(auto-fill, minmax(min(100%, 225px), 1fr));
        grid-template-rows: auto;
    }


    .box-grid-images .img-card {
        position: relative;
        /* width: 50%; */
    }

    .box-grid-images .image {
        display: block;
        width: 100%;
        height: auto;
    }

    .box-grid-images .overlay {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        height: 100%;
        width: 100%;
        opacity: 0;
        transition: .5s ease;
        background-color: #454545;
    }

    .box-grid-images .img-card:hover .overlay {
        opacity: 1;
    }

    .box-grid-images .text {
        color: white;
        font-size: 16;
        position: absolute;
        top: calc(50% - min(100%, 100px));
        /* left: 50%; */
        /* -webkit-transform: translate(-50%, -50%); */
        /* -ms-transform: translate(-50%, -50%); */
        /* transform: translate(-50%, -50%); */
        text-align: center;
        padding: 1em;
    }

    .box-grid-images .text h3 {
        font-size: 20px;
        font-weight: 700;
        text-align: center;
        line-height: 1.3;
        color: #fff;
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 2;
        line-clamp: 2;
        overflow: hidden;
    }
</style>

<script>
    const cards_sliders = [{
            "url": "https://picsum.photos/id/1/200/300",
            "alt": "Persona recibe información por parte de funcionario de la SDM",
            "summary": "01.	Representante de la Secretaría de Ambiente explica la Red de Monitoreo de Calidad del Aire de Bogotá, el lunes 30 de enero, primer día de la Semana de la Movilidad Sostenible 2023.",
        },

    ];

    document.addEventListener("DOMContentLoaded", function(event) {
        enlist();
    });

    function enlist() {

        const template = document.querySelector("template");
        const box = document.querySelector(".box-grid-images");

        for (let index = 0; index < cards_sliders.length; index++) {

            let url = cards_sliders[index].url;
            let alt = cards_sliders[index].alt;
            let img = cards_sliders[index].img;
            let summary = cards_sliders[index].summary;

            const textData = template.content.cloneNode(true);

            textData.querySelector("img").src = cards_sliders[index].url;
            textData.querySelector("img").alt = cards_sliders[index].alt;
            textData.querySelector("p").textContent = cards_sliders[index].summary;
            box.appendChild(textData);

        }

    }
</script>
