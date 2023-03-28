<!-- Set component-carousel -->
<div class="box-carousel">

    <div class='row'>

        <!-- Carousel vertical medidas recursos: 340x300px -->
        <div class='col-xs-12 visible-xs-12 visible-xs-block'>
            <div id="carousel-vertical" class="carousel slide" data-ride="carousel-vertical">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-vertical" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-vertical" data-slide-to="1"></li>

                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="https://via.placeholder.com/340x300/e5e5e5/252525?Text=Digital.com" alt="...">
                        <div class="carousel-caption">
                            <h3>...</h3>
                            <p>...</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="https://via.placeholder.com/340x300/e5e5e5/252525?Text=Digital.com" alt="...">
                        <div class="carousel-caption">
                            <h3>...</h3>
                            <p>...</p>
                        </div>
                    </div>

                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-vertical" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-vertical" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <!-- Carousel horizontal medidas recursos: 980x400px -->
        <div class='col-sm-12 hidden-xs'>
            <div id="carousel-horizontal" class="carousel slide" data-ride="carousel-horizontal">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-horizontal" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-horizontal" data-slide-to="1"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="https://via.placeholder.com/980x400/e5e5e5/252525?Text=Digital.com" alt="...">
                        <div class="carousel-caption">
                            <h3>...</h3>
                            <p>...</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="https://via.placeholder.com/980x400/e5e5e5/252525?Text=Digital.com" alt="...">
                        <div class="carousel-caption">
                            <h3>...</h3>
                            <p>...</p>
                        </div>
                    </div>

                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-horizontal" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-horizontal" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

        </div>
    </div>

</div>
<style>
    .set-wrapper .box-carousel {
        grid-area: box-carousel;
    }

    .box-carousel .item img {
        width: 100%;
    }

    .box-carousel .carousel-control.left,
    .box-carousel .carousel-control.right {
        background-image: none;
    }

    .box-carousel .carousel-control {
        color: #A6B517;
        opacity: 1;
    }

    .box-carousel .carousel-control:focus,
    .box-carousel .carousel-control:hover {
        color: #A6B517;
        opacity: 0.5;
    }

    .box-carousel .carousel-indicators li {
        background-color: #A6B517;
        border-color: rgba(77, 84, 31, 0.4);
    }

    .box-carousel .carousel-indicators .active {
        background-color: rgba(77, 84, 31, 1);
        border-color: rgba(77, 84, 31, 0.4);
    }
</style>


<!-- <script>
    let items = [{
            title: "demo1",
            alt: "demo1",
            url: "https://via.placeholder.com/980x400/e5e5e5/252525?Text=Digital.com",
        },
        {
            title: "demo2",
            alt: "demo2",
            url: "https://via.placeholder.com/980x400/e5e5e5/252525?Text=Digital.com",
        },
        {
            title: "demo3",
            alt: "demo3",
            url: "https://via.placeholder.com/980x400/e5e5e5/252525?Text=Digital.com",
        }

    ];

    let itemCarousel = items.map((item) => {
        return `<div class="item"><img src="${item.url}" alt="${item.alt}"><div class="carousel-caption"><h3>${item.title}</h3><p>${item.alt}</p></div></div>`;
    });

    console.log(itemCarousel);

    items.forEach((item) => {


        console.log(item);

    });
</script> -->
