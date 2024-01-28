@extends('welcome')
@section('title','collaspe_btn')
@section('contenido')

<!-- Set collaspe_btn -->
<div class="set-wrapper collaspe_btn">

    <div class="component component-collapse-btn">
        <div class="btn item1" onclick="toggleItem1();">Demo 1</div>
        <div id="box-item1">Demo 1</div>
        <div class="btn item2">Demo 2</div>
        <div id="box-item2"></div>
        <div class="btn item3">Demo 3</div>
        <div id="box-item3"></div>
    </div>
    <style>
        .set-wrapper .component-collapse-btn{
            display: grid;
            gap: 8px;
            grid-auto-flow: dense;
            grid-template-columns: 1fr;
            grid-template-rows: auto;
            position: relative;

        }
        .component-collapse-btn .item1{
            background-color: gray;
        }
        .component-collapse-btn #box-item1{
            visibility: hidden;
            position: absolute;
        }
        .component-collapse-btn #box-item2{
            visibility: hidden;
            position: absolute;
        }
        .component-collapse-btn #box-item{
            visibility: hidden;
            position: absolute;
        }
        @media(min-width:768px){
            .set-wrapper .component-collapse-btn{
                grid-template-columns: 1fr 1fr 1fr;
            }
        }
    </style>
    <script>
        function toggleItem1(){
            var boxItem1 = document.querySelector('#box-item1');
            boxItem1.classList.toggle(".box-item1");
        }
    </script>

</div>
<!-- Fin Set -->
