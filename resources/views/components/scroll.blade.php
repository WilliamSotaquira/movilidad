@extends('welcome')
@section('title','scroll')
@section('contenido')

<!-- Set scroll -->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

<script>
    *,
    *::before,
    *::after {
        margin: 0;
        padding: 0;
        box - sizing: border - box;
    }

    body {
        position: relative;
        font - family: "Poppins",
        sans - serif;
        display: flex;
        flex - direction: column;
        align - items: center;
        justify - content: center;
        height: 100 vh;
        overflow: hidden;
        background: #111113;
  background-image: radial-gradient(
    circle at top left,
    # 950923 10 % ,
        #111113 30%
  );

}

.particles {
  position: absolute;
  inset: 0;
  width: 100%;
  height: 100%;
  z-index: -1;
}

.container {
  width: 80%;
}

.swiper {
  width: 100%;
  padding: 50px 0;
}

.swiper-slide {
  position: relative;
  width: 200px;
  height: 500px;
  border-radius: 12px;
  overflow: hidden;
  transition: 1s;
  user-select: none;
}

.swiper-slide::after {
  content: "";
  position: absolute;
  inset: 0;
  width: 100%;
  height: 100%;
  background: linear-gradient(
    120deg,
    rgba(130, 13, 13, 0.8),
    rgba(39, 8, 92, 0.8)
  );
  mix-blend-mode: multiply;
  z-index: 1;
}

.swiper-slide img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: 1s;
}

.swiper-slide p {
  position: absolute;
  left: 20px;
  bottom: 10px;
  color: # fff;
        font - size: 1.3 rem;
        font - weight: 600;
        font - style: italic;
        letter - spacing: 2 px;
        z - index: 2;
        opacity: 0;
        transform: rotate(360 deg) scale(0);
        transition: 0.8 s;
    }

    .swiper - slide - active {
            position: relative;
            width: 350 px;
            transition: 1 s;
        }

        .swiper - slide - active::after {
            background: rgba(123, 123, 123, 0.4);
        }

        .swiper - slide - active img {
            transform: scale(1.3);
            object - position: 50 % 0 % ;
        }

        .swiper - slide - active p {
            transform: rotate(0 deg) scale(1);
            opacity: 1;
        }

        .swiper - pagination - bullet {
            width: 16 px;
            height: 16 px;
            background - color: #fff;
            border - radius: 50 % ;
            transition: all 0.6 s ease - in - out;
        }

        .swiper - pagination - bullet - active {
            width: 32 px;
            background - color: #6f1223;
  border-radius: 14px;
}

.audio-icon {
  font-size: 2rem;
  color: # fff;
        }

    #play - pause - button {
        position: fixed;
        display: flex;
        align - items: center;
        justify - content: center;
        left: 3 % ;
        bottom: 5 % ;
        background - color: transparent;
        background - image: radial - gradient(
            50 % 115 % at 50 % -5 % ,
            rgba(255, 255, 255, 0.11) 0 % ,
            transparent 100 %
        );
        box - shadow: inset 0 0 px 10 px 0 px rgba(255, 255, 255, 0.14),
        inset 0 px 5 px 10 px 0 px rgba(255, 255, 255, 0.11),
        inset 0 px 2 px 5 px 0 px rgba(255, 255, 255, 0.4),
        inset 0 px 3 px 20 px 0 px rgba(0, 0, 0, 0.25);
        z - index: 10;
        border: 0;
        border - radius: 50 % ;
        outline: 0;
        padding: 12 px;
        cursor: pointer;
        transition: all 0.2 s ease - in - out;
    }

    #play - pause - button: hover {
        background - color: rgba(255, 255, 255, 0.05);
    }

    #play - pause - button: active {
            transform: scale(0.95);
        }

        .hidden {
            display: none;
        }

        .logo {
            position: fixed;
            right: -20 px;
            bottom: -35 px;
            z - index: 10;
        }

        .logo img {
            width: 120 px;
        }

    @media(max - width: 890 px) {
        .logo {
            right: -10 px;
            bottom: -20 px;
        }

        .logo img {
            width: 80 px;
        }
    }
</script>
<div class="set-wrapper scroll">

    <body>
        <audio id="background-music" loop>
            <source
                src="https://github.com/ecemgo/mini-samples-great-tricks/raw/main/song-list/stranger-things-luxide-remix-no-copyright-music.mp3"
                type="audio/mpeg" />
            Your browser does not support the audio element.
        </audio>
        <button id="play-pause-button">
            <ion-icon class="audio-icon" id="play-music" name="play"></ion-icon>
            <ion-icon
                class="audio-icon hidden"
                id="pause-music"
                name="pause"></ion-icon>
        </button>

        <div id="particles-js" class="particles"></div>

        <div class="container">
            <div class="swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img
                            src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/c91f906b-5881-47b1-89e4-e4a69c1961a7" />
                        <p>Lucas</p>
                    </div>
                    <div class="swiper-slide">
                        <img
                            src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/5bc859f0-db4f-4ab4-8f5f-e55977c33eb1" />
                        <p>Mike</p>
                    </div>
                    <div class="swiper-slide">
                        <img
                            src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/d239a63a-a0f8-4213-82dc-bb8d3f0806db" />
                        <p>Max</p>
                    </div>
                    <div class="swiper-slide">
                        <img
                            src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/9c0637aa-b440-4aef-93f3-ea20cf19f42c" />
                        <p>Will</p>
                    </div>
                    <div class="swiper-slide">
                        <img
                            src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/6a90b5ba-9f3e-4cb3-a8e2-3ae19b2aa443" />
                        <p>Eleven</p>
                    </div>
                    <div class="swiper-slide">
                        <img
                            src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/fe05145f-c9ab-457f-a91b-92a4c1bd633c" />
                        <p>Dustin</p>
                    </div>
                    <div class="swiper-slide">
                        <img
                            src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/1158c3d4-81d5-4dfc-bb42-863f357ecdb5" />
                        <p>Eddie Munson</p>
                    </div>
                    <div class="swiper-slide">
                        <img
                            src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/c8ef23d2-37ee-4473-ad86-d9c9911be3bb" />
                        <p>Steve</p>
                    </div>
                    <div class="swiper-slide">
                        <img
                            src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/29eff421-1087-4b51-92a2-a7f204098187" />
                        <p>Robin</p>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>

        <a href="https://www.youtube.com/@ecemgokdogan/videos" target="_blank" class="logo"><img src="https://assets.codepen.io/9868786/youtube.webp" alt="HTML tutorial"></a>
    </body>

</div>
<!-- Fin Set -->

<script>
    const audio = document.getElementById("background-music");
    const playPauseButton = document.getElementById("play-pause-button");
    const playIcon = document.getElementById("play-music");
    const pauseIcon = document.getElementById("pause-music");

    let isPlaying = false;

    function togglePlayPause() {
        console.log("Toggle function called");
        if (isPlaying) {
            audio.pause();
            playIcon.classList.remove("hidden");
            pauseIcon.classList.add("hidden");
        } else {
            audio.play();
            playIcon.classList.add("hidden");
            pauseIcon.classList.remove("hidden");
        }
        isPlaying = !isPlaying;
    }

    playPauseButton.addEventListener("click", togglePlayPause);

    audio.addEventListener("ended", function() {
        audio.currentTime = 0;
        audio.play();
    });

    var swiper = new Swiper(".swiper", {
        grabCursor: true,
        initialSlide: 4,
        centeredSlides: true,
        slidesPerView: "auto",
        spaceBetween: 10,
        speed: 1000,
        freeMode: false,
        mousewheel: {
            thresholdDelta: 30,
        },
        pagination: {
            el: ".swiper-pagination",
        },
        on: {
            click(event) {
                swiper.slideTo(this.clickedIndex);
            },
        },
    });

    particlesJS("particles-js", {
        particles: {
            number: {
                value: 180,
                density: {
                    enable: true,
                    value_area: 800,
                },
            },
            color: {
                value: "#fff",
            },
            shape: {
                type: "circle",
            },
            opacity: {
                value: 0.3,
                random: false,
                anim: {
                    enable: false,
                    speed: 4,
                    opacity_min: 0.1,
                    sync: false,
                },
            },
            size: {
                value: 4,
                random: true,
                anim: {
                    enable: true,
                    speed: 2,
                    size_min: 0.1,
                    sync: false,
                },
            },
            line_linked: {
                enable: false,
            },
            move: {
                enable: true,
                speed: 0.4,
                direction: "right",
                random: true,
                straight: false,
                out_mode: "none",
                bounce: false,
                attract: {
                    enable: false,
                    rotateX: 600,
                    rotateY: 1200,
                },
            },
        },
        retina_detect: true,
    });
</script>
