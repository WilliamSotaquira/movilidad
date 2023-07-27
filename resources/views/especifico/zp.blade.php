@extends('welcome')
@section('title','zp')
@section('contenido')

<!-- Set zp -->
<div class="set-wrapper zp">

    <!-- Component box carousel demo-->
    <div class="box-carousel box-carousel-demo">

        <div id="carousel-demo" class="carousel slide" data-ride="carousel-demo">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-demo" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-demo" data-slide-to="1"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <picture>
                        <source media="(min-width: 650px)" srcset="https://via.placeholder.com/992x400">
                        <source media="(min-width: 465px)" srcset="https://via.placeholder.com/768x400">
                        <img src="https://via.placeholder.com/340x260" alt="">
                    </picture>
                </div>
                <div class="item">
                    <picture>
                        <source media="(min-width: 650px)" srcset="https://via.placeholder.com/992x400">
                        <source media="(min-width: 465px)" srcset="https://via.placeholder.com/768x400">
                        <img src="https://via.placeholder.com/340x260" alt="">
                    </picture>
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-demo" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-demo" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </div>
    <style>
        .set-wrapper .box-carousel-demo {
            grid-area: box-carousel-demo;
            margin-bottom: 48px;
        }

        .box-carousel .item img {
            width: 100%;
        }

        .box-carousel .carousel-control.left,
        .box-carousel .carousel-control.right {
            background-image: none;
        }

        .box-carousel .carousel-control {
            color: #ffe145;
            opacity: 1;
        }

        .box-carousel .carousel-control:focus,
        .box-carousel .carousel-control:hover {
            color: #ffe145;
            opacity: 0.5;
        }

        .box-carousel .carousel-indicators {
            bottom: 0px !important;
            position: absolute;
            bottom: 8px;
            left: calc(50% - 70px);
            z-index: 15;
            width: 140px;
            padding-left: 0;
            margin-left: 0%;
            text-align: center;
            list-style: none;
            padding: 0 8px;
            background: #fafafa99;
            border-radius: 15px;
            /* border: solid 1px #40404080; */
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.6);
        }

        .box-carousel .carousel-indicators li {
            background-color: #404040;
            border-color: #40404050;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.6);
        }

        .box-carousel .carousel-indicators .active {
            background-color: #ffe145;
            border-color: #A6B517;
        }
    </style>

</div>
<!-- Fin Set -->


