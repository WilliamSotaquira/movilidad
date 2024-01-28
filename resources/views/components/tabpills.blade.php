@extends('welcome')
@section('title','tabpills')
@section('contenido')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<!-- Set tabpills -->
<div class="set-wrapper tabpills">

    <!-- bloque box tabpills-->
    <div class="box box-tabpills">

        <div class="select select-collapse">
            <select name="selector_dots" id="selector_dots" class="form-control" onchange="Selected();">
                <option value="1">Centros de servicios</option>
                <option value="2">Patios</option>
                <option value="3">Sedes administrativas</option>
                <option value="4">Centros locales de movilidad</option>
                <option value="5">Ventanillas de movilidad</option>
            </select>
        </div>

        <div class="tabs tabs-collapse">
            <button class="btn btn-tab" type="button" id="btn_1" data-tab="1">Centros de servicios</button>
            <button class="btn btn-tab" type="button" id="btn_2" data-tab="2">Patios</button>
            <button class="btn btn-tab" type="button" id="btn_3" data-tab="3">Sedes administrativas</button>
            <button class="btn btn-tab" type="button" id="btn_4" data-tab="4">Centros locales de movilidad</button>
            <button class="btn btn-tab" type="button" id="btn_5" data-tab="5">Ventanillas de movilidad
                <div class="pill-tooltip tooltip-5" style="left: 684px; bottom: 58px;">
                    <div class="imagen img-tooltip img-tooltip-5">
                        <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/09-08-2023/normatividad.gif" alt="" title="">
                    </div>
                </div>
            </button>
        </div>

        <div class="content-collapse">

            <div class="summary-collapse sc1">
                <p>1 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla, dolor, consequatur porro iusto pariatur minus nostrum repellendus impedit tenetur reprehenderit eius neque cum sunt explicabo autem cumque magnam optio rem!</p>
            </div>
            <div class="summary-collapse sc2">
                <p>2 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla, dolor, consequatur porro iusto pariatur minus nostrum repellendus impedit tenetur reprehenderit eius neque cum sunt explicabo autem cumque magnam optio rem!</p>
            </div>
            <div class="summary-collapse sc3">
                <p>3 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla, dolor, consequatur porro iusto pariatur minus nostrum repellendus impedit tenetur reprehenderit eius neque cum sunt explicabo autem cumque magnam optio rem!</p>
            </div>
            <div class="summary-collapse sc4">
                <p>4 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla, dolor, consequatur porro iusto pariatur minus nostrum repellendus impedit tenetur reprehenderit eius neque cum sunt explicabo autem cumque magnam optio rem!</p>
            </div>
            <div class="summary-collapse sc5">
                <p>5 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla, dolor, consequatur porro iusto pariatur minus nostrum repellendus impedit tenetur reprehenderit eius neque cum sunt explicabo autem cumque magnam optio rem!</p>
            </div>

        </div>
    </div>

    <style>
        .set-wrapper .box-tabpills {
            display: grid;
            gap: 8px;
            grid-auto-flow: dense;
            grid-template-columns: 1fr;
            grid-template-rows: auto;
        }


        .set-wrapper .tabs {
            visibility: hidden;
            position: absolute;

        }

        .set-wrapper .tabs .btn-tab {
            background-color: #efefef !important;
            border-color: #efefef;
        }

        .set-wrapper .tabs .btn-tab:focus-visible {
            background-color: #efefef !important;

        }

        .set-wrapper .tabs .btn-tab:focus {
            background-color: #191C3A !important;
            color: #66E026;
            outline: #191C3A auto 1px !important;

        }

        .set-wrapper .select-collapse {
            visibility: visible;
            position: relative;
        }

        .set-wrapper .select-collapse option {
            margin: 40px;
            background: #fff;
            color: #191C3A;
            text-shadow: 0 1px 0 rgba(0, 0, 0, 0.4);
        }

        .set-wrapper .select-collapse .active {
            margin: 40px;
            background: #191C3A !important;
            color: #66E026;
        }

        .set-wrapper .select-collapse select.form-control {
            background-color: #efefef !important;
            color: #191C3A;
            border: solid 1px #efefef;

        }

        .set-wrapper .select-collapse select.form-control:focus {
            -webkit-box-shadow: 0px 0px 10px 3px rgba(0, 0, 0, 0.16);
            box-shadow: 0px 0px 10px 3px rgba(0, 0, 0, 0.16);
            border-color: #efefef;
        }

        .set-wrapper .content-collapse {
            padding: 16px;
            border-radius: 8px;
            border: solid 1px #efefef;
            background-color: #fff;
        }

        .set-wrapper .summary-collapse {
            /* opacity: 0;
            overflow: hidden; */
            position: absolute;
            visibility: hidden;
            transition: all 3 ease;
        }

        .active {
            /* opacity: 1; */
            position: relative !important;
            visibility: visible !important;
            transition: ease-out 0.5s all !important;
        }



        @media(min-width:768px) {
            .set-wrapper .box-tabpills {
                grid-template-columns: 25% 75%;
            }

            .set-wrapper .tabs {
                visibility: visible;
                position: relative;
                display: grid;
                gap: 8px;
                grid-auto-flow: dense;
                grid-template-columns: 1fr;
                grid-template-rows: auto;
            }

            .set-wrapper .select-collapse {
                visibility: hidden;
                position: absolute;
            }


        }
    </style>

    <script>
        Validate(0);
        let id;
        var temp;

        document.addEventListener('DOMContentLoaded', function() {

            let button = document.querySelectorAll('.btn-tab').forEach(function(button) {
                button.addEventListener('click', function() {
                    let id = parseInt(button.dataset.tab);
                    Validate(id);

                });
            });
        });

        function Selected() {
            /* Para obtener el valor */
            var cod = document.getElementById("selector_dots").value;
            Validate(cod);
        }

        function Validate(id) {
            if (id == 0) {
                Toggled(1);
            } else {
                if (id != temp) {
                    let oldSummary = document.querySelector('.sc' + temp);
                    // console.log('oldSummary '+oldSummary);
                    oldSummary.classList.toggle('active');
                    Toggled(id);
                }
            }

        }

        function Toggled(num) {
            let collapseSummary;
            collapseSummary = document.querySelector('.sc' + num);
            collapseSummary.classList.toggle('active');
            temp = num;
            // console.log('Temp '+temp);
        }



        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>

    <style>
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


</div>
<!-- Fin Set -->
