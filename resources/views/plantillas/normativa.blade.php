@extends('welcome')
@section('title','normativa')
@section('contenido')

<!-- Set normativa -->
<div class="set-wrapper normativa">

    <!-- Sección box normativa -->
    <div class="box-normativa">
        <div class="title title-h3">
            <h3>Normatividad</h3>
        </div>
        <div class="cards-normativa">

            <div class="card-normativa">
                <div class="card-normativa-title">
                    <h4>Decreto 145 de 2023</h4>
                </div>
                <div class="card-normativa-body">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque magni quas totam quod debitis quidem quos quae officiis dolore aspernatur, fugiat corporis odit a, amet, velit optio maiores ea architecto?</p>
                </div>
                <div class="card-normativa-link">
                    <a href="">Enlace</a>
                </div>
        </div>

    </div>
    <style>
        .set-wrapper .box-normativa {
            grid-area: box-normativa;
            margin-top: 4em;
        }

        .card-normativa {
            margin-top: 2em;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-gap: 1em;
        }

    </style>


</div>
<!-- Fin Set -->
