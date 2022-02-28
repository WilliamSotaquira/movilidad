    @extends ('welcome')
    @section ('contenido')

    <div class="row">
        <!-- xs -->
        <div class="col-xs-12 visible-xs-12 visible-xs-block">
            <img class="img-responsive w-100" src="https://via.placeholder.com/900x300.png/09f/fff" alt="">
        </div>
        <!-- sm -->
        <div class="col-sm-12 hidden-xs">
            <img class="img-responsive w-100" src="https://via.placeholder.com/1920x320.png/09f/fff" alt="">
        </div>
    </div>

    <style>
        .w-100{
            width: 100%;
        }
    </style>