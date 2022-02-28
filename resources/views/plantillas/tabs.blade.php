@extends('welcome')
@section('contenido')

<!-- ----- ----- ----- ----- ----- ----- ----- ----- Bloque Seccion ----- ----- ----- ----- ----- ----- ----- ----- ----- ------ -->

<div class='container-fluid seccion'>
    <div class='s1'>

        <div>

            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active" id="tp_uno">
                    <div class="tab-box">
                        <img class="img-responsive w-100" src="https://via.placeholder.com/400x300?text=Tab+Pane+1" alt="">
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="tp_dos">
                    <div class="tab-box">
                        <img class="img-responsive w-100" src="https://via.placeholder.com/400x300?text=Tab+Pane+2" alt="">
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="tp_tres">
                    <div class="tab-box">
                        <img class="img-responsive w-100" src="https://via.placeholder.com/400x300?text=Tab+Pane+3" alt="">
                    </div>
                </div>
            </div>

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#tp_uno" aria-controls="tp_uno" role="tab" data-toggle="tab">1</a></li>
                <li role="presentation"><a href="#tp_dos" aria-controls="tp_dos" role="tab" data-toggle="tab">2</a></li>
                <li role="presentation"><a href="#tp_tres" aria-controls="tp_tres" role="tab" data-toggle="tab">3</a></li>
            </ul>

        </div>

    </div>
</div>

<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin Bloque Sección  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->

<!-- ----- ----- ----- ----- ----- ----- ----- -----  Hoja de estilo ---- ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<style type='text/css'>
    .field-item.even h2 {
        visibility: hidden;
        margin-top: -50px;
    }

    .region-content {
        padding: 0px;
        overflow: hidden;
    }

    .seccion {
        font-size: 16px !important;
        line-height: 1 !important;
        max-width: 940px;
    }

    .seccion [class*='col-'] {
        margin: 0px;
        padding: 0px;
        border: 0;
        outline: 0;
        font-size: 100%;
        vertical-align: baseline;
    }

    .w-100 {
        width: 100%;
    }
</style>
<style>
    .nav-tabs>li {
        width: 33.33333%;
    }

    .nav-tabs>li>a {
        text-align: center;
        border-radius: 0px !important;
    }

    .nav-tabs {
        border-bottom: none;
    }

    .nav-tabs>li.active>a,
    .nav-tabs>li.active>a:focus,
    .nav-tabs>li.active>a:hover {
        cursor: pointer;
    }
</style>

<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin hoja de estilo  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->