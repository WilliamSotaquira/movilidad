@extends('welcome')
@section('contenido')
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fuente Montserrat -----  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<link rel='preconnect' href='https://fonts.googleapis.com'>
<link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
<link href='https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap' rel='stylesheet'>
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin Fuente Montserrat -  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<!-- Set Wrapper -->
<div class='container-fluid stackable'>
    <div class='box-wrp'>
        <div class='box-head'>

            <div class="box-stack">
                <div class='box-txt'>
                    <h3>Menú apilable</h3>

                    <div class="box-botones">

                        <div class='box-wrp'>
                            <a href="">
                                <div class='box-btn'>
                                    <div class='imagen'>
                                        <img class='img-responsive w-100' src='https://via.placeholder.com/150x150?text=Imagen' alt='imagen' title='imagen'>
                                    </div>
                                    <div>
                                        <h3>Bogotá en obra</h3>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class='box-wrp'>
                            <a href="">
                                <div class='box-btn'>
                                    <div class='imagen'>
                                        <img class='img-responsive w-100' src='https://via.placeholder.com/150x150?text=Imagen' alt='imagen' title='imagen'>
                                    </div>
                                    <div>
                                        <h3>Bogotá en obra</h3>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>


                </div>
            </div>

            <style>
                .box-botones{
                    display: grid;
                    gap: 20px;
                    grid-template-columns: repeat(5, 1fr);
                }
                .box-btn {
          
                }

                
            </style>

        </div>
    </div>
</div>
<!-- End Set Wrapper -->

<!-- Styles -->
<style type='text/css'>
    .field-item.even h2 {
        visibility: hidden;
        margin-top: -50px;
    }

    .region-content {
        padding: 0px;
        overflow: hidden;
    }

    .stackable {
        max-width: 980px;
        word-wrap: break-word;
        font-family: 'Montserrat', sans-serif;
        font-size: 15px;
        font-weight: 500;
        text-align: left;
        line-height: 1.2;
        color: rgba(25, 25, 25, 1);
    }

    /*
    .stackable [class*='col-'] {
        margin: 0px;
        padding: 0px;
        border: 0;
        outline: 0;
        font-size: 100%;
        vertical-align: baseline;
    }
    */

    .w-100 {
        width: 100%;
    }
</style>
<!-- End Styles -->