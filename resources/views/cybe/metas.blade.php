@extends('welcome')
@section('title','metas')
@section('contenido')

<!-- Set metas -->
<div class="set-wrapper metas">

    <!-- bloque box waiting-->
    <style>
        .set-wrapper .box-waiting {
          display: grid;
          grid-auto-flow: dense;
          grid-template-columns: 1fr;
          grid-template-rows: auto;
          grid-template-areas:
        }
        @media(min-width:768px){
            .set-wrapper .box-waiting {
                grid-template-columns: 40% 60%;

            }
        }
        .box-waiting .cmpnt-selector{
            background: #bed000;
            min-height: 600px;
            padding: 32px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .box-waiting .cmpnt-selector p{
            font-size: 18px;
            color: #252525;
            text-align: center;
            margin-bottom: 32px;
        }
        .box-waiting .cmpnt-selector select{
            width: 80%;
            border: none;
            border-radius: 8px;
            color: #151515;
            font-size: 18px;
            font-weight: 500;
            cursor: pointer;
        }
        .box-waiting .cmpnt-image{
            background: #fff;
            background: url('/images/cybe/_4PV1491.jpg') no-repeat left center;
            background-size: cover;
            min-height: 600px;
            padding: 32px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
    </style>
    <div class="box box-waiting">
        <div class="cmpnt cmpnt-selector">
            <p>Para conocer más información de las metas, puedes seleccionar por modo de transporte:</p>

            <select name="meta-select" id="inputmeta-select" class="form-control" required="required">
                <option elected disabled>Seleccione una opción</option>
                <option value="">Motocicletas</option>
                <option value="">Vehículos</option>
                <option value="">Transporte de carga</option>
                <option value="">Transporte escolar</option>
                <option value="">Flota oficial</option>
                <option value="">Taxis</option>
                <option value="">Transporte público</option>
            </select>

        </div>
        <div class="cmpnt cmpnt-image">

        </div>
    </div>

</div>
<!-- Fin Set -->
