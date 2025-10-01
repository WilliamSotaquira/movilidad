<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XVIII Semana de la Bicicleta 2025</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" rel="stylesheet"
        crossorigin="anonymous">

    <!-- css BDC -->
    <link rel="shortcut icon" href="https://www.movilidadbogota.gov.co/web/sites/default/files/logo_bogota_mesa_de_trabajo_1_copia.png" type="image/png">
    <link href="https://cdn.www.gov.co/layout/v4/all.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-YM45VRL2EK"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-YM45VRL2EK');
    </script>

</head>

<body>
    <style>
        html,
        body {
            width: 100vw;
            max-width: 100vw;
            overflow-x: hidden !important;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Work Sans', sans-serif;
        }


        .cpnt-1 {
            position: sticky;
            top: 0;
            z-index: 1030;

        }

        /* Fuente iconografica */
        @font-face {
            font-family: "govco-font";
            src: url("../assets/icons/fonts/govco-font-icons.ttf") format("truetype");
            font-weight: normal;
            font-style: normal;
        }

        /* WorkSans-Medium */
        @font-face {
            font-family: 'WorkSans-Medium';
            src: url('../assets/fonts/Work_Sans/static/WorkSans-Medium.ttf');
        }

        /* WorkSans-SemiBold */
        @font-face {
            font-family: 'WorkSans-SemiBold';
            src: url('../assets/fonts/Work_Sans/static/WorkSans-SemiBold.ttf');
        }

        /* WorkSans-Regular */
        @font-face {
            font-family: 'WorkSans-Regular';
            src: url('../assets/fonts/Work_Sans/static/WorkSans-Regular.ttf');
        }

        html {
            font-size: 100%;
            /* 100% = 16px */
            overflow-x: hidden;
            scroll-behavior: smooth;
            scroll-padding-top: 4.5rem;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
            -moz-text-size-adjust: 100%;

        }

        .container-navbar-menu-govco {
            background-color: #4D541F !important;
            width: 100%;
            min-height: 4.45rem;
            max-height: 4.5rem;

        }

        @media (min-width: 992px) {
            .container-navbar-menu-govco {
                padding: 0 1.125rem;
                display: flex;
                min-height: 2.75rem;
                max-height: 3.5rem;
            }
        }

        .container-navbar-menu-govco.blue-menu-govco,
        .blue-menu-govco .navbar-collapse-menu-govco {
            border-bottom: 0.188rem solid #ffffff;
        }

        .container-navbar-menu-govco.green-menu-govco,
        .green-menu-govco .navbar-collapse-menu-govco {
            border-bottom: 0.188rem solid #068460;
        }

        .container-navbar-menu-govco.yellow-menu-govco,
        .yellow-menu-govco .navbar-collapse-menu-govco {
            border-bottom: 0.188rem solid #FAD118;
        }

        .container-navbar-menu-govco.red-menu-govco,
        .red-menu-govco .navbar-collapse-menu-govco {
            border-bottom: 0.188rem solid #D31F3F;
        }

        .container-navbar-menu-govco.orange-menu-govco,
        .orange-menu-govco .navbar-collapse-menu-govco {
            border-bottom: 0.188rem solid #FF6C00;
        }

        .navbar-collapse-menu-govco {
            background-color: #4D541F !important;
        }

        .navbar-menu-govco .megamenu-menu-govco,
        .navbar-menu-govco .dropdown-large-menu-govco {
            background-color: #4D541F !important;
        }

        .navbar-menu-govco ul.navbar-nav li {
            background-color: #4D541F;
        }

        .navbar-menu-govco ul.navbar-nav li a {
            white-space: normal;
            color: #ffffff !important;
            height: 100%;
            display: flex;
            font-size: 14px;
            line-height: normal !important;
            font-family: WorkSans-Medium;
        }

        .navbar-menu-govco ul.navbar-nav li a.nav-link.active {
            font-family: WorkSans-SemiBold;
        }

        .blue-menu-govco .navbar-menu-govco ul.navbar-nav li a.nav-link:not(.active):hover,
        .blue-menu-govco .navbar-menu-govco ul.navbar-nav li a.nav-link.active,
        .blue-menu-govco .navbar-menu-govco ul.navbar-nav li a.nav-link[aria-expanded="true"],
        .blue-menu-govco .navbar-menu-govco ul.navbar-nav li a.nav-link:focus-visible {
            background-color: #a9ba18ff;
            color: #151515 !important;
        }

        .green-menu-govco .navbar-menu-govco ul.navbar-nav li a.nav-link:not(.active):hover,
        .green-menu-govco .navbar-menu-govco ul.navbar-nav li a.nav-link.active,
        .green-menu-govco .navbar-menu-govco ul.navbar-nav li a.nav-link[aria-expanded="true"],
        .green-menu-govco .navbar-menu-govco ul.navbar-nav li a.nav-link:focus-visible {
            background-color: #068460;
            color: #FFFFFF !important;
        }

        .yellow-menu-govco .navbar-menu-govco ul.navbar-nav li a.nav-link:not(.active):hover,
        .yellow-menu-govco .navbar-menu-govco ul.navbar-nav li a.nav-link.active,
        .yellow-menu-govco .navbar-menu-govco ul.navbar-nav li a.nav-link[aria-expanded="true"],
        .yellow-menu-govco .navbar-menu-govco ul.navbar-nav li a.nav-link:focus-visible {
            background-color: #FAD118;
            color: #000000 !important;
        }

        .red-menu-govco .navbar-menu-govco ul.navbar-nav li a.nav-link:not(.active):hover,
        .red-menu-govco .navbar-menu-govco ul.navbar-nav li a.nav-link.active,
        .red-menu-govco .navbar-menu-govco ul.navbar-nav li a.nav-link[aria-expanded="true"],
        .red-menu-govco .navbar-menu-govco ul.navbar-nav li a.nav-link:focus-visible {
            background-color: #D31F3F;
            color: #FFFFFF !important;
        }

        .orange-menu-govco .navbar-menu-govco ul.navbar-nav li a.nav-link:not(.active):hover,
        .orange-menu-govco .navbar-menu-govco ul.navbar-nav li a.nav-link.active,
        .orange-menu-govco .navbar-menu-govco ul.navbar-nav li a.nav-link[aria-expanded="true"],
        .orange-menu-govco .navbar-menu-govco ul.navbar-nav li a.nav-link:focus-visible {
            background-color: #FF6C00;
            color: #000000 !important;
        }

        .navbar-menu-govco ul.navbar-nav li a:not(.active):hover .text-item-menu-govco {
            text-decoration: underline;
        }

        .navbar-menu-govco ul.navbar-nav li a.disabled {
            color: #BABABA !important;
        }

        .navbar-menu-govco ul.navbar-nav li a:focus-visible {
            outline: max(0.125rem, 0.15em) solid #000000;
            outline-offset: max(0.188rem, 0.15em);
            z-index: 1;
            font-family: WorkSans-SemiBold;
        }

        .navbar-menu-govco ul.navbar-nav li ul {
            background-color: #F2F2F2;
            border: 0;
        }

        .navbar-menu-govco ul.navbar-nav li ul li {
            width: 100%
        }

        .navbar-menu-govco ul.navbar-nav li ul li a {
            align-items: center;
            padding: 0 0 0 1.875rem;
            font-family: WorkSans-Regular;
        }

        .navbar-menu-govco ul.navbar-nav li ul li a:not(.active):hover {
            text-decoration: underline;
            background-color: #F2F2F2;
        }

        .navbar-menu-govco ul.navbar-nav li ul li a:active,
        .navbar-menu-govco ul.navbar-nav li ul li a.active,
        .navbar-menu-govco ul.navbar-nav li ul li a:not(.active):focus-visible {
            background-color: #FFFFFF !important;
            color: #4B4B4B !important;
            font-family: WorkSans-Medium;
        }

        .navbar-menu-govco ul.navbar-nav li div span {
            font-size: 15px;
            color: #4B4B4B;
        }

        .navbar-menu-govco ul.navbar-nav li a .icon-caret-menu-govco::before {
            font-family: "govco-font";
            content: "\e88e";
            line-height: 1;
            font-size: 16px;
            margin-top: 0.5rem;
            margin-bottom: 0.5rem;
            color: #4B4B4B;
        }

        .blue-menu-govco .navbar-menu-govco ul.navbar-nav li a:hover .icon-caret-menu-govco::before,
        .blue-menu-govco .navbar-menu-govco ul.navbar-nav li a.active .icon-caret-menu-govco::before,
        .blue-menu-govco .navbar-menu-govco ul.navbar-nav li a:focus-visible .icon-caret-menu-govco::before,
        .blue-menu-govco .navbar-menu-govco ul.navbar-nav li a[aria-expanded="true"] .icon-caret-menu-govco::before,
        .green-menu-govco .navbar-menu-govco ul.navbar-nav li a:hover .icon-caret-menu-govco::before,
        .green-menu-govco .navbar-menu-govco ul.navbar-nav li a.active .icon-caret-menu-govco::before,
        .green-menu-govco .navbar-menu-govco ul.navbar-nav li a:focus-visible .icon-caret-menu-govco::before,
        .green-menu-govco .navbar-menu-govco ul.navbar-nav li a[aria-expanded="true"] .icon-caret-menu-govco::before,
        .red-menu-govco .navbar-menu-govco ul.navbar-nav li a:hover .icon-caret-menu-govco::before,
        .red-menu-govco .navbar-menu-govco ul.navbar-nav li a.active .icon-caret-menu-govco::before,
        .red-menu-govco .navbar-menu-govco ul.navbar-nav li a:focus-visible .icon-caret-menu-govco::before,
        .red-menu-govco .navbar-menu-govco ul.navbar-nav li a[aria-expanded="true"] .icon-caret-menu-govco::before {
            color: #FFFFFF;
        }

        .yellow-menu-govco .navbar-menu-govco ul.navbar-nav li a:hover .icon-caret-menu-govco::before,
        .yellow-menu-govco .navbar-menu-govco ul.navbar-nav li a.active .icon-caret-menu-govco::before,
        .yellow-menu-govco .navbar-menu-govco ul.navbar-nav li a:focus-visible .icon-caret-menu-govco::before,
        .yellow-menu-govco .navbar-menu-govco ul.navbar-nav li a[aria-expanded="true"] .icon-caret-menu-govco::before,
        .orange-menu-govco .navbar-menu-govco ul.navbar-nav li a:hover .icon-caret-menu-govco::before,
        .orange-menu-govco .navbar-menu-govco ul.navbar-nav li a.active .icon-caret-menu-govco::before,
        .orange-menu-govco .navbar-menu-govco ul.navbar-nav li a:focus-visible .icon-caret-menu-govco::before,
        .orange-menu-govco .navbar-menu-govco ul.navbar-nav li a[aria-expanded="true"] .icon-caret-menu-govco::before {
            color: #000000;
        }

        .icon-entidad-menu-govco {
            content: url('https://www.movilidadbogota.gov.co/semana_de_la_bicicleta_2025/sdb_logo.png');
            height: 3.5rem;
            margin-left: 2rem;
            margin-bottom: 4px;
        }

        /* ============ desktop view ============ */
        @media all and (min-width: 992px) {

            .navbar-menu-govco ul.navbar-nav li a {
                padding-top: 1rem;
            }

            .navbar-menu-govco {
                font-size: 14px;
                margin: 0 auto;
                padding: 0 !important;
                max-width: 65.875rem;
            }

            .navbar-menu-govco .container-second-navbar-menu-govco {
                padding: 0;
                margin: 0 auto;
            }

            .navbar-menu-govco .megamenu-menu-govco {
                padding: 0.6rem;
                border-radius: 0 0 0.313rem 0.313rem;
                border: 0;
                margin-top: -0.16rem !important;
                left: 0;
                right: 0;
                width: 100%;
            }

            .navbar-menu-govco .dropdown-large-menu-govco {
                padding: 0.6rem;
                border-radius: 0 0 0.313rem 0.313rem;
                border: 0;
                margin-top: -0.01rem !important;
            }

            .navbar-menu-govco ul.navbar-nav-menu-govco {
                margin: 0 auto;
                height: 3.5rem;
            }

            .navbar-menu-govco ul.navbar-nav li {
                max-width: 13.75rem;
            }

            .navbar-menu-govco ul.navbar-nav li a span.container-text-icon-menu-govco {
                display: flex;
            }

            .navbar-menu-govco ul.navbar-nav li a span.text-item-menu-govco {
                max-width: 11.25rem;
                padding: 0 0.5rem;
            }

            .navbar-menu-govco ul.navbar-nav li ul {
                margin-top: -0.01rem !important;
                border-radius: 0 0 0.313rem 0.313rem;
            }

            .navbar-menu-govco ul.navbar-nav li ul li {
                min-width: 18.75rem;
                background-color: #F2F2F2;
            }

            .navbar-menu-govco ul.navbar-nav li ul li a {
                height: 2.25rem;
            }

            .navbar-menu-govco ul.navbar-nav li div ul li {
                min-width: auto;
            }

            .navbar-menu-govco .container-items-govco {
                display: flex;
                justify-content: space-between;
            }

            .navbar-menu-govco .colum-item-menu-govco {
                display: inline-block;
                max-width: 12.5rem;
            }

            .navbar-menu-govco .has-megamenu-menu-govco {
                position: static !important;
            }

            .navbar-menu-govco .dropdown-large-menu-govco.col-3-menu-govco {
                min-width: 40.625rem;
            }

            .navbar-menu-govco .dropdown-large-menu-govco.col-2-menu-govco {
                min-width: 30rem;
            }
        }

        /* ============ desktop view .end// ============ */


        /* ============ mobile view ============ */
        @media(max-width: 991px) {

            .navbar-menu-govco {
                padding: 0.4rem 0 0 0;
            }

            .navbar-menu-govco .button-responsive-menu-govco {
                border: 0;
                margin-right: 1.125rem;
            }

            .icon-bars-menu-govco::before {
                font-family: "govco-font";
                content: "\e83f";
                line-height: 1;
                font-size: 35px;
                margin-top: 0.5rem;
                margin-bottom: 0.5rem;
                color: #fff;
            }

            .navbar-collapse-menu-govco {
                z-index: 2;
                position: absolute;
                top: 4.463rem;
                width: 100%;
                margin: 0;
                left: 0;
                height: calc(100vh - 3.563rem);
                transition: none !important;
                border-bottom: 0.188rem solid rgba(77, 84, 31, 1);
            }

            .button-responsive-menu-govco:not(.collapsed) .icon-bars-menu-govco::before {
                font-family: "govco-font";
                content: "\eb73";
            }

            .navbar-menu-govco ul.navbar-nav li a {
                height: 3rem;
                align-items: center;
                padding-left: 1.5rem !important;
                padding-right: 1.875rem !important;
            }

            .navbar-menu-govco.fixed-top .navbar-collapse,
            .navbar.sticky-top .navbar-collapse {
                overflow-y: auto;
                max-height: 90vh;
                margin-top: 0.625rem;
            }

            .navbar-menu-govco ul.navbar-nav li div span {
                padding-left: 1.5rem;
            }

            .navbar-menu-govco ul.navbar-nav {
                padding: 0;
            }

            .navbar-menu-govco ul.navbar-nav li a span.text-item-menu-govco {
                align-items: center;
            }

            .navbar-menu-govco ul.navbar-nav li a span {
                display: grid;
                grid-template-columns: 1fr;
            }

            .navbar-menu-govco ul.navbar-nav li ul li a {
                height: 3rem;
            }

            .navbar-menu-govco .colum-item-menu-govco {
                margin-bottom: 0.5rem;
            }

            .navbar-menu-govco ul.navbar-nav li a.show .icon-caret-menu-govco::before {
                font-family: "govco-font";
                content: "\e895";
            }

            .container-search-icon-menu-govco {
                display: grid;
                grid-template-columns: 20fr 1fr;
                grid-gap: 2.5rem;
                align-items: center;
                margin-bottom: 0.5rem;
                margin-right: 1.125rem;
                margin-top: 0.938rem;
            }

            .icon-user-alt-menu-govco {
                text-align: center;
            }

            .icon-user-alt-menu-govco::before {
                font-family: "govco-font";
                content: "\eba3";
                line-height: 1;
                font-size: 30px;
                margin-top: 0.5rem;
                margin-bottom: 0.5rem;
                color: #737373;
            }

            .navbar-menu-govco .megamenu-menu-govco,
            .navbar-menu-govco .dropdown-large-menu-govco {
                margin-top: 0 !important;
            }

            .container-second-navbar-menu-govco {
                padding: 0;
            }
        }

        /* ============ mobile view .end// ============ */

        /* Buscador */
        .search-govco {
            width: 100%;
            position: relative;
            z-index: 1;
        }

        .search-govco .bar-search-govco {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            position: relative;
            z-index: 12;
            padding: 0.2rem;
        }

        .search-govco .input-search-govco {
            width: 100%;
            font-family: WorkSans-Regular;
            height: 2.625rem;
            border-radius: 1.5rem;
            border: 0.063rem solid #4B4B4B;
            background-color: #FFFFFF;
            color: #4B4B4B;
            outline: 0;
            font-size: 16px;
            text-overflow: ellipsis;
            overflow: hidden;
            padding: 0 5.5rem 0 1rem;
        }

        .search-govco .bar-search-govco.active .input-search-govco {
            padding: 0 5.5rem 0 1rem;
        }

        .search-govco .icon-search-govco {
            position: absolute;
            border: 0;
            background: #FFFFFF;
            padding: 0;
        }

        .search-govco .icon-close-search-govco {
            right: 3.3rem;
            padding: 0;
            border-right: 0.063rem solid #4B4B4B;
            padding-right: 0.625rem;
            padding-left: 0.625rem;
            display: none;
            cursor: pointer;
            line-height: initial;
        }

        .search-govco .icon-close-search-govco::after {
            font-family: "govco-font";
            content: "\eb73";
            font-size: 26px;
            color: #3366CC;
        }

        .search-govco .search-icon-search-govco {
            right: 0.45rem;
            background-color: #737373;
            border-radius: 50%;
            width: 2.25rem;
            height: 2.25rem;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-left: 0.625rem;
        }

        .search-govco .search-icon-search-govco::after {
            font-family: "govco-font";
            content: "\eae1";
            font-size: 16px;
            color: #FFFFFF;
            cursor: pointer;
        }

        .search-govco .container-options-search-govco {
            max-width: 100%;
            top: 0;
            left: 0;
            right: 0;
            padding-top: 2.8rem;
            background: #FFFFFF 0% 0% no-repeat padding-box;
            border-radius: 1.5rem 1.5rem 0.125rem 0.125rem;
            border: 0.125rem solid #3366CC;
            -webkit-box-shadow: 0 0.188rem 0.375rem #00000029;
            -moz-box-shadow: 0 0.188rem 0.375rem #00000029;
            box-shadow: 0 0.188rem 0.375rem #00000029;
            text-align: center;
            z-index: 10;
            position: absolute;
            display: none;
            margin: 0.2rem;
        }

        .search-govco .options-search-govco {
            max-height: 12.063rem;
            margin-top: 0;
            overflow-y: auto;
            margin-bottom: 0.5rem;
        }

        .search-govco .options-search-govco::-webkit-scrollbar {
            width: 0.625rem;
        }

        .search-govco .options-search-govco::-webkit-scrollbar-track {
            background: rgba(77, 84, 31, 1) 0% 0% no-repeat padding-box;
            border-radius: 0.75rem;
        }

        .search-govco .options-search-govco::-webkit-scrollbar-thumb {
            background: #FFFFFF 0% 0% no-repeat padding-box;
            border-radius: 0.75rem;
            -webkit-box-shadow: 0 0.188rem 0.375rem #00000029;
            -moz-box-shadow: 0 0.188rem 0.375rem #00000029;
            box-shadow: 0 0.188rem 0.375rem #00000029;
            border: 0.125rem solid transparent;
        }

        .search-govco .options-search-govco ul {
            margin: 0;
            text-align: left;
            list-style: none;
            padding-left: 0;
        }

        .search-govco .options-search-govco ul li a {
            color: #4B4B4B;
            font-size: 16px;
            font-family: WorkSans-Regular;
            padding: 0.75rem 0 0.75rem 1rem;
            cursor: pointer;
            display: block;
            text-decoration: none;
        }

        .search-govco .options-search-govco ul li a strong {
            font-family: WorkSans-SemiBold;
        }

        .search-govco .options-search-govco ul li:not(.selected):hover,
        .search-govco .options-search-govco ul li:not(.selected) a:focus {
            background: #E6EFFD;
        }

        .search-govco .options-search-govco ul li:not(.selected) a:active {
            background-color: #3366CC;
            color: #FFFFFF;
        }

        .search-govco .bar-search-govco.active .input-search-govco {
            border: 0.125rem solid #3366CC;
        }

        .search-govco .bar-search-govco.active~.container-options-search-govco,
        .search-govco .bar-search-govco.exist-content .icon-close-search-govco {
            display: inline;
        }

        .search-govco .bar-search-govco.active .search-icon-search-govco {
            background-color: #3366CC;
        }

        .search-govco input:disabled {
            background-color: #F2F2F2;
        }

        .search-govco .bar-search-govco:not(.active):not(.disabled) input:focus-visible {
            outline: max(0.125rem, 0.15em) solid #000000;
            outline-offset: max(0.125rem, 0.15em);
        }

        .cpnt-1 .logo {
            position: absolute;
            visibility: hidden;
        }

        .logo img {
            width: 314px;
            height: auto;
        }

        @media (min-width: 991px) {
            .cpnt-1 .logo {
                visibility: visible;
                position: relative;
                background-color: #F2F2F2;
                width: 314px;
                margin-left: 1.125rem;
            }
        }
    </style>


    <div class="cpnt-1">

        <div class="container-navbar-menu-govco blue-menu-govco">
            <div class="logo">
                <img src="https://www.movilidadbogota.gov.co/semana_de_la_bicicleta_2025/logo.png" alt="Logo Semana de la Bicicleta">
            </div>
            <nav class="navbar navbar-expand-lg navbar-menu-govco" role="navigation" aria-label="Menú ejemplo entidad">
                <div class="container-fluid container-second-navbar-menu-govco">
                    <a class="navbar-brand navbar-toggler icon-entidad-menu-govco" href="https://www.movilidadbogota.gov.co/semana_de_la_bicicleta_2025/sdb.php#"></a>
                    <button class="navbar-toggler button-responsive-menu-govco collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bars-menu-govco"></span>
                    </button>
                    <div class="collapse navbar-collapse navbar-collapse-menu-govco" id="navbarScroll">
                        <ul class="navbar-nav navbar-nav-menu-govco ms-auto">
                            <li class="nav-item">
                                <a class="nav-link dir-menu-govco active" aria-current="page" href="https://www.movilidadbogota.gov.co/semana_de_la_bicicleta_2025/sdb.php#">
                                    <span class="text-item-menu-govco">
                                        Inicio
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link dir-menu-govco" aria-current="page" href="https://www.movilidadbogota.gov.co/semana_de_la_bicicleta_2025/sdb.php#1">
                                    <span class="text-item-menu-govco">
                                        Semana de la Bicicleta
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link dir-menu-govco" aria-current="page" href="https://www.movilidadbogota.gov.co/semana_de_la_bicicleta_2025/sdb.php#2">
                                    <span class="container-text-icon-menu-govco">
                                        <span class="text-item-menu-govco">¿De qué hablamos?</span>
                                    </span>
                                </a>

                            </li>
                            <li class="nav-item">
                                <a class="nav-link dir-menu-govco" aria-current="page" href="https://www.movilidadbogota.gov.co/semana_de_la_bicicleta_2025/sdb.php#3">
                                    <span class="container-text-icon-menu-govco">
                                        <span class="text-item-menu-govco">Ubica las activities</span>
                                    </span>
                                </a>

                            </li>
                            <li class="nav-item dropdown has-megamenu-menu-govco">
                                <a class="nav-link dir-menu-govco" aria-current="page" href="https://www.movilidadbogota.gov.co/semana_de_la_bicicleta_2025/sdb.php#4">
                                    <span class="container-text-icon-menu-govco">
                                        <span class="text-item-menu-govco">Consulta la Agenda</span>
                                    </span>
                                </a>

                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dir-menu-govco" aria-current="page" href="https://www.movilidadbogota.gov.co/semana_de_la_bicicleta_2025/sdb.php#5">
                                    <span class="container-text-icon-menu-govco">
                                        <span class="text-item-menu-govco">Nuestros aliados</span>
                                    </span>
                                </a>

                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

        </div>


    </div>

    <style>
        .cpnt-2 {
            background-color: #F2F2F2;
        }

        .cpnt-2 .jumbotron {
            position: relative;
            background-color: #ffffff;
            background-image: url('https://www.movilidadbogota.gov.co/semana_de_la_bicicleta_2025/banner.png');
            background-size: cover;
            background-position: 0% 20%;
            background-repeat: no-repeat;
            color: #FFFFFF;
            text-align: center;
            border-radius: 0.313rem;
            height: 800px;
            margin-top: 0;
            margin-bottom: 0;
            width: 100%;

        }

        @media (max-width: 768px) {
            .cpnt-2 .jumbotron {
                height: 600px;
                background-position: 34% 20%;
            }

            .cpnt-2 .jumbotron h1 {
                font-size: 2rem !important;
                margin: 0 8px !important;
            }

        }

        .cpnt-2 .jumbotron .text-1 {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(0%, -50%);
            background: RGBA(77, 84, 31, 0.8);
            background: -webkit-linear-gradient(90deg, rgba(77, 84, 31, 0) 0%, rgba(77, 84, 31, 1) 100%);
            background: -moz-linear-gradient(90deg, rgba(77, 84, 31, 0) 0%, rgba(77, 84, 31, 1) 100%);
            background: linear-gradient(90deg, rgba(77, 84, 31, 0) 0%, rgba(77, 84, 31, 1) 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#4D541FCC", endColorstr="#4D541FCC", GradientType=1);
            padding: 1.875rem;
            border-radius: 0.313rem;
            max-width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;

        }

        @media(max-width:768px) {
            .cpnt-2 .jumbotron .text-1 {
                height: 300px;
                padding: 1rem;
                top: 75% !important;
                left: 0% !important;
                background: -webkit-linear-gradient(180deg, rgba(77, 84, 31, 0) 0%, rgba(77, 84, 31, 1) 100%);
                background: -moz-linear-gradient(180deg, rgba(77, 84, 31, 0) 0%, rgba(77, 84, 31, 1) 100%);
                background: linear-gradient(180deg, rgba(77, 84, 31, 0) 0%, rgba(77, 84, 31, 1) 100%);
                filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#4D541FCC", endColorstr="#4D541FCC", GradientType=1);
            }
        }

        .cpnt-2 .jumbotron h1 {
            font-family: WorkSans-SemiBold;
            font-size: 4rem;
            line-height: 0.9em;
            text-shadow: 0.125rem 0.125rem 1rem #00000099;
            margin: 0 8rem;
            text-align: right;
            /* max-width: 700px; */
        }

        .cpnt-2 .curve {
            position: absolute;
            display: block;
            width: 100%;
            height: 100%;
            background: url('https://www.movilidadbogota.gov.co/semana_de_la_bicicleta_2025/curve.png');
            background-position: bottom;
            background-repeat: no-repeat;
            background-size: contain;
            bottom: -1px;
            left: 0;

        }
    </style>
    <div class="cpnt-2">
        <div class="jumbotron">
            <span class="text-1">
                <h1>¡Pedalea con nosotros entre el 22 y el 28 de septiembre!</h1>
            </span>
            <span class="curve"></span>
        </div>
    </div>

    <style>
        .cpnt-3 {
            padding: 1.875rem 0;
            background-color: #ffffff;
        }

        .cpnt-3 .wrapper {
            max-width: 65.875rem;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        .cpnt-3 .video {
            margin-bottom: 1.875rem;
            text-align: center;
            box-shadow: 0 0.188rem 0.375rem #00000029;
            border-radius: 0.313rem;
            overflow: hidden;
            background-color: #000;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }


        .cpnt-3 .video iframe {
            aspect-ratio: 16 / 9;
            width: 100% !important;
        }

        .cpnt-3 .texto {
            padding: 0 1.875rem;
        }

        .cpnt-3 .texto h2 {
            font-family: WorkSans-SemiBold;
            font-size: 2rem;
            margin-bottom: 1rem;
            color: #a9ba18ff;
        }

        .cpnt-3 .texto p {
            font-family: WorkSans-Regular;
            font-size: 1rem;
            line-height: 1.5;
        }

        @media(min-width:768px) {
            .cpnt-3 .texto p {
                font-size: 1.1rem;
            }
        }

        .cpnt-3 ul {
            list-style-type: none;
            padding-left: 0;
            margin-top: 1.875rem;
            max-width: 65.875rem;
            padding: 0 1.875rem;
            font-family: WorkSans-Regular;
            font-size: 1rem;
            line-height: 1.2;
            color: #4D541F;
        }

        @media(min-width:768px) {
            .cpnt-3 ul {
                font-size: 1.1rem;
                line-height: 1.5;
            }
        }

        .cpnt-3 ul li {
            margin-bottom: 0.5rem;
        }

        .cpnt-3 ul li span {
            display: inline-block;
            width: 1.5rem;
            height: 1.5rem;
            background-color: #ffffff;
            border-radius: 50%;
            margin-right: 0.5rem;
            color: #FFFFFF;
            text-align: center;
            line-height: 1.5rem;
        }

        .cpnt-3 ul li span.icon-1::before {
            content: "";
            background-image: url('https://www.movilidadbogota.gov.co/semana_de_la_bicicleta_2025/icon_1.png');
            width: 100%;
            height: 100%;
            display: inline-block;
            background-position: center;
            background-repeat: no-repeat;
            background-size: contain;
        }

        .cpnt-3 ul li span.icon-2::before {
            content: "";
            background-image: url('https://www.movilidadbogota.gov.co/semana_de_la_bicicleta_2025/icon_2.png');
            width: 100%;
            height: 100%;
            display: inline-block;
            background-position: center;
            background-repeat: no-repeat;
            background-size: contain;
        }

        .cpnt-3 ul li span.icon-3::before {
            content: "";
            background-image: url('https://www.movilidadbogota.gov.co/semana_de_la_bicicleta_2025/icon_3.png');
            width: 100%;
            height: 100%;
            display: inline-block;
            background-position: center;
            background-repeat: no-repeat;
            background-size: contain;
        }

        .cpnt-3 ul strong {
            font-weight: bold;
            display: block;
            margin-top: 1rem;
            color: #4D541F;
            font-size: 1.2rem;
        }
    </style>
    <div class="cpnt-3" id="1">
        <div class="wrapper">
            <div class="video video-1">
                <iframe id="ytplayer" type="text/html" width="1200" height="675" src="https://www.youtube.com/embed/tt3eEQCuN64?color=white" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="texto">
                <h2 class="title title-1">Semana de la Bicicleta</h2>
                <p class="paragraph ph-1">La <b>Semana de la Bicicleta</b> celebra su edición número 18 con más fuerza que nunca. Un espacio anual de encuentro, participación y reconocimiento para quienes hacen de la bicicleta su medio de transporte, su pasatiempo y su forma de vida</p>
                <p class="paragraph ph-1">Este año, más de <b>30 activities</b> gratuitas te invitan a redescubrir y a conectarte con la ciudad sobre dos ruedas: recorridos urbanos, cine al aire libre, activities de pedagogía en vía, conversatorios, foros, exhibiciones, avances en ciclorrutas y muchas sorpresas más</p>
                <p class="paragraph ph-1">Bajo el lema <b>"La bicicleta nos conecta con Bogotá",</b> queremos destacar su valor como herramienta de cambio: sostenible, saludable, segura e incluyente. Una aliada clave para construir una ciudad más amable, equitativa y cercana.</p>
            </div>
            <ul>
                <p class="paragraph ph-1"><b>Aquí podrás:</b></p>
                <li><span class="icon-1"></span>Consultar la agenda de eventos</li>
                <li><span class="icon-2"></span>Conocer los puntos de encuentro y recorridos</li>
                <li><span class="icon-3"></span>Participar en espacios de conversación y aprendizaje</li>
                <strong>¡Súmate a la gran fiesta de la bici en Bogotá!</strong>
            </ul>
        </div>
    </div>

    <style>
        .cpnt-4 {
            padding: 1.875rem 0;
            background-color: #A6B517;
        }

        .cpnt-4 .cards {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            max-width: 75.875rem;
            margin: 0 auto;
        }

        .cpnt-4 .card {
            background-color: #FFFFFF;
            border-radius: 1.313rem;
            padding: 1.5rem;
            text-align: center;
            width: 30%;
            margin-bottom: 1.875rem;
            margin: auto;

            display: flex;
            flex-direction: column;
            align-items: center;

        }

        .cpnt-4 .card .icono {
            width: 100px;
            /* Adjust as needed */
            height: auto;
            /* Maintain aspect ratio */
            padding: 0px;
            margin-top: 16px;
        }

        @media(min-width:768px) {
            .cpnt-4 .card .icono {
                width: 190px;
                /* Adjust as needed */
                height: auto;
                /* Maintain aspect ratio */
                margin-bottom: 1rem;
                padding: 16px;
            }
        }

        .cpnt-4 .card h3 {
            font-family: WorkSans-SemiBold;
            font-size: 1.25rem;
            margin-top: 1rem;
            color: #4D541F;
        }

        .cpnt-4 .card p {
            font-family: WorkSans-Regular;
            font-size: 1rem;
            line-height: 1.2;
            padding: 0.5rem;
        }

        @media(min-width:768px) {
            .cpnt-4 .card p {
                font-family: WorkSans-Regular;
                font-size: 1rem;
                line-height: 1.4;
                padding: 1rem;
            }
        }

        .cpnt-4 .title-2 {
            font-family: WorkSans-SemiBold;
            font-size: 1.75rem;
            text-align: center;
            margin-top: 2rem;
            margin-bottom: 2rem;
            width: 100%;
        }



        @media (max-width: 768px) {
            .cpnt-4 .cards {
                flex-direction: column;
                align-items: center;
                gap: 1.875rem;
                padding: 12px;
            }

            .cpnt-4 .card {
                width: 100%;
                background-color: #FFFFFF;
                border-radius: 1.313rem;
                padding: 0.5rem;
                text-align: center;
                margin-bottom: 1.875rem;
                margin: auto;

                display: flex;
                flex-direction: column;
                align-items: center;
            }
        }

        @media(min-width:768px) {
            .zoom {
                transition: 0.5s ease;
                -moz-transition: 0.5s ease;
                /* Firefox */
                -webkit-transition: 0.5s ease;
                /* Chrome - Safari */
                -o-transition: 0.5s ease;
                /* Opera */
                -ms-transition: 0.5s ease;
                /* IE9 */
            }
        }

        .zoom:hover {
            transform: scale(1.05);
            -moz-transform: scale(1.05);
            /* Firefox */
            -webkit-transform: scale(1.05);
            /* Chrome - Safari */
            -o-transform: scale(1.05);
            /* Opera */
            -ms-transform: scale(1.05);
            /* IE9 */
        }
    </style>
    <div class="cpnt-4" id="2">
        <h2 class="title title-2">¿De qué hablamos?</h2>
        <div class="cards">
            <div class="card card-1">
                <img class="icono icono-1 img-responsive" src="https://www.movilidadbogota.gov.co/semana_de_la_bicicleta_2025/sdb_1.png" alt="icono">
                <h3 class="title title-3">Integración urbana y regional a través de la bicicleta</h3>
                <p class="paragraph ph-2">La bicicleta rompe fronteras. Más de 4 millones de viajes diarios conectan Bogotá con los municipios cercanos, demostrando que la bici es un verdadero sistema de movilidad regional. Ya sea por trabajo, estudio o recreación, este vehículo nos une con oportunidades, con las personas y con el territorio.</p>
            </div>
            <div class="card card-2">
                <img class="icono icono-2 img-responsive" src="https://www.movilidadbogota.gov.co/semana_de_la_bicicleta_2025/sdb_2.png" alt="icono">
                <h3 class="title title-3">Seguridad, educación y cuidado vial</h3>
                <p class="paragraph ph-2">La seguridad vial empieza con cada uno de nosotros. Promover el autocuidado, el respeto y la corresponsabilidad en la vía es fundamental para proteger la vida de quienes se mueven en bicicleta. La educación y la conciencia ciudadana son claves para fortalecer una movilidad segura, solidaria y sostenible.</p>
            </div>
            <div class="card card-3">
                <img class="icono icono-3 img-responsive" src="https://www.movilidadbogota.gov.co/semana_de_la_bicicleta_2025/sdb_3.png" alt="icono">
                <h3 class="title title-3">Cultura, salud, recreación y deporte</h3>
                <p class="paragraph ph-2">La bicicleta es mucho más que un medio de transporte, es una herramienta de salud, deporte, bienestar y libertad. Pedalear transforma nuestra relación con la ciudad, nos conecta con lo esencial y enriquece nuestra vida cotidiana. Su uso es parte del patrimonio inmaterial de Bogotá y reﬂeja una ciudad más inclusiva y humana.</p>
            </div>
        </div>
    </div>


    <style>
        .cpnt-5 {
            position: relative;
            background-color: #F2F2F2;
            background-image: url('https://www.movilidadbogota.gov.co/semana_de_la_bicicleta_2025/image11.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 1.875rem 0;
            background-color: #F2F2F2;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            flex-direction: row;
        }

        .cpnt-5 .title-2 {
            font-family: WorkSans-SemiBold;
            font-size: 1.35rem;
            text-align: center;
            margin-top: 2rem;
            margin-bottom: 2rem;
            color: #bed000;
            width: 100%;
            max-width: 75.875rem;
        }

        .cpnt-5 .imagen {
            text-align: center;
            margin-bottom: 1.875rem;
            padding: 32px 10%;
        }

        .cpnt-5 img {
            max-width: 100%;
            height: auto;
            margin: auto
        }

        .cpnt-5 .mapa-div {
            position: relative;
            max-width: 75.875rem;
            width: 100%;
        }


        .cpnt-5 .mapa-div path:hover {
            fill: #bed000 !important;
            stroke: #FFFFFF !important;
            stroke-width: 2px;
            stroke-linejoin: round;
            stroke-linecap: round;
            transition: fill 0.5s ease-in-out;
            cursor: pointer;
        }

        .cpnt-5 .region-info {
            position: absolute;
            display: block;
            transition: all 0.5s ease-in-out;
            font-size: 1.5rem;
            color: #ffffff;
        }

        @media(min-width:768px) {
            .cpnt-5 .region-info {
                font-size: 3rem;
            }
        }

        .cpnt-5 .region-info.active {
            text-align: center;
            font-family: WorkSans-SemiBold;
            margin-bottom: 1.875rem;
            color: #ffffff;
            text-transform: uppercase;
            top: 5%;
            right: 5%;
            text-shadow: 0.125rem 0.125rem 1rem #ffffff99;
        }
    </style>

    <div class="cpnt-5" id="3">
        <h2 class="title title-2">Selecciona una localidad en el mapa</h2>
        <div class="mapa-div">
            <span class="region-info"></span>
            <svg version="1.1" id="svg1" viewBox="0 0 1257.2307 813.33401" xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg">
                <defs id="defs1">
                    <clipPath
                        clipPathUnits="userSpaceOnUse"
                        id="clipPath17">
                        <path
                            d="M 0,6502 H 1920 V 0 H 0 Z"
                            transform="translate(-730.54972,-3129.9002)"
                            id="path17" />
                    </clipPath>
                    <clipPath
                        clipPathUnits="userSpaceOnUse"
                        id="clipPath19">
                        <path
                            d="M 0,6502 H 1920 V 0 H 0 Z"
                            transform="translate(-778.70244,-3224.4542)"
                            id="path19" />
                    </clipPath>
                    <clipPath
                        clipPathUnits="userSpaceOnUse"
                        id="clipPath21">
                        <path
                            d="M 0,6502 H 1920 V 0 H 0 Z"
                            transform="translate(-696.40031,-2941.5877)"
                            id="path21" />
                    </clipPath>
                    <clipPath
                        clipPathUnits="userSpaceOnUse"
                        id="clipPath23">
                        <path
                            d="M 0,6502 H 1920 V 0 H 0 Z"
                            transform="translate(-913.3579,-3054.3895)"
                            id="path23" />
                    </clipPath>
                    <clipPath
                        clipPathUnits="userSpaceOnUse"
                        id="clipPath25">
                        <path
                            d="M 0,6502 H 1920 V 0 H 0 Z"
                            transform="translate(-964.18405,-2867.2582)"
                            id="path25" />
                    </clipPath>
                    <clipPath
                        clipPathUnits="userSpaceOnUse"
                        id="clipPath27">
                        <path
                            d="M 0,6502 H 1920 V 0 H 0 Z"
                            transform="translate(-1412.1918,-3081.6859)"
                            id="path27" />
                    </clipPath>
                    <clipPath
                        clipPathUnits="userSpaceOnUse"
                        id="clipPath29">
                        <path
                            d="M 0,6502 H 1920 V 0 H 0 Z"
                            transform="translate(-1129.9521,-3150.961)"
                            id="path29" />
                    </clipPath>
                    <clipPath
                        clipPathUnits="userSpaceOnUse"
                        id="clipPath31">
                        <path
                            d="M 0,6502 H 1920 V 0 H 0 Z"
                            transform="translate(-1280.5356,-2942.756)"
                            id="path31" />
                    </clipPath>
                    <clipPath
                        clipPathUnits="userSpaceOnUse"
                        id="clipPath33">
                        <path
                            d="M 0,6502 H 1920 V 0 H 0 Z"
                            transform="translate(-1069.1563,-3060.6256)"
                            id="path33" />
                    </clipPath>
                    <clipPath
                        clipPathUnits="userSpaceOnUse"
                        id="clipPath35">
                        <path
                            d="M 0,6502 H 1920 V 0 H 0 Z"
                            transform="translate(-810.9769,-3265.5301)"
                            id="path35" />
                    </clipPath>
                    <clipPath
                        clipPathUnits="userSpaceOnUse"
                        id="clipPath37">
                        <path
                            d="M 0,6502 H 1920 V 0 H 0 Z"
                            transform="translate(-1069.3581,-2851.3811)"
                            id="path37" />
                    </clipPath>
                    <clipPath
                        clipPathUnits="userSpaceOnUse"
                        id="clipPath39">
                        <path
                            d="M 0,6502 H 1920 V 0 H 0 Z"
                            transform="translate(-888.829,-3085.3834)"
                            id="path39" />
                    </clipPath>
                    <clipPath
                        clipPathUnits="userSpaceOnUse"
                        id="clipPath41">
                        <path
                            d="M 0,6502 H 1920 V 0 H 0 Z"
                            transform="translate(-1232.8677,-3006.3431)"
                            id="path41" />
                    </clipPath>
                    <clipPath
                        clipPathUnits="userSpaceOnUse"
                        id="clipPath43">
                        <path
                            d="M 0,6502 H 1920 V 0 H 0 Z"
                            transform="translate(-891.7378,-3165.5035)"
                            id="path43" />
                    </clipPath>
                    <clipPath
                        clipPathUnits="userSpaceOnUse"
                        id="clipPath45">
                        <path
                            d="M 0,6502 H 1920 V 0 H 0 Z"
                            transform="translate(-1190.0356,-3040.65)"
                            id="path45" />
                    </clipPath>
                    <clipPath
                        clipPathUnits="userSpaceOnUse"
                        id="clipPath47">
                        <path
                            d="M 0,6502 H 1920 V 0 H 0 Z"
                            transform="translate(-1013.2107,-3178.5209)"
                            id="path47" />
                    </clipPath>
                    <clipPath
                        clipPathUnits="userSpaceOnUse"
                        id="clipPath49">
                        <path
                            d="M 0,6502 H 1920 V 0 H 0 Z"
                            transform="translate(-988.3663,-3140.6976)"
                            id="path49" />
                    </clipPath>
                    <clipPath
                        clipPathUnits="userSpaceOnUse"
                        id="clipPath51">
                        <path
                            d="M 0,6502 H 1920 V 0 H 0 Z"
                            transform="translate(-1081.2474,-3048.013)"
                            id="path51" />
                    </clipPath>
                    <clipPath
                        clipPathUnits="userSpaceOnUse"
                        id="clipPath53">
                        <path
                            d="M 0,6502 H 1920 V 0 H 0 Z"
                            transform="translate(-1392.6765,-3155.815)"
                            id="path53" />
                    </clipPath>
                    <clipPath
                        clipPathUnits="userSpaceOnUse"
                        id="clipPath55">
                        <path
                            d="M 0,6502 H 1920 V 0 H 0 Z"
                            transform="translate(-1045.5247,-3199.4374)"
                            id="path55" />
                    </clipPath>
                </defs>
                <g id="layer-MC0" transform="translate(-651.38466,-4176.047)">
                    <path
                        id="path16"
                        data-name="Suba"
                        data-id="11"
                        d="m 0,0 c 10.793,0.799 21.625,1.054 32.438,1.607 2.176,0.111 5.073,-0.127 6.368,1.118 5.711,5.49 10.958,11.463 17.495,18.463 H 43.062 c -0.212,1.792 -0.418,3.041 -0.498,4.297 -1.229,19.226 -2.507,38.449 -3.602,57.683 -0.22,3.865 -1.324,5.585 -5.617,6.267 -76.958,12.218 -153.88,24.666 -230.814,37.038 -6.579,1.058 -13.19,1.929 -19.92,2.907 0,-8.219 0.675,-15.621 -0.137,-22.856 -1.863,-16.592 3.109,-30.926 12.409,-44.33 2.118,-3.053 4.005,-4.517 7.832,-4.477 18.915,0.2 37.851,-0.376 56.746,0.283 9.692,0.338 17.44,-2.482 25.531,-7.561 7.901,-4.96 9.267,-12.403 12.274,-19.929 -1.393,-0.342 -2.074,-0.62 -2.77,-0.664 -18.13,-1.136 -36.255,-2.945 -54.396,-3.132 -13.372,-0.138 -24.96,-3.259 -35.611,-11.474 -8.343,-6.436 -17.531,-11.775 -26.617,-17.782 5.237,-5.811 9.996,-11.14 14.809,-16.42 4.782,-5.247 9.619,-10.445 14.497,-15.737 4.064,2.422 7.545,4.878 11.358,6.597 1.757,0.792 4.694,0.971 6.195,0.014 15.162,-9.665 30.21,-19.516 45.072,-29.635 1.817,-1.237 3.235,-4.31 3.335,-6.597 0.385,-8.8 0.521,-17.644 0.073,-26.438 -0.634,-12.443 1.306,-24.506 4.37,-36.44 0.437,-1.706 2.103,-4.03 3.57,-4.345 3.114,-0.67 6.472,-0.205 10.295,-0.205 0,10.11 -0.151,19.613 0.118,29.105 0.058,2.082 1.07,4.684 2.548,6.099 32.615,31.224 65.323,62.351 98.165,93.336 C -5.807,-1.4 -2.666,-0.198 0,0"
                        style="fill:#f3f6db;fill-opacity:1;fill-rule:nonzero;stroke:none"
                        transform="matrix(1.3333333,0,0,-1.3333333,974.06627,4496.1332)"
                        clip-path="url(#clipPath17)" />
                    <path
                        id="path18"
                        data-name="Usaquén"
                        data-id="1"
                        d="m 0,0 c 3.613,-0.609 5.366,0.29 7.184,3.042 3.032,4.59 6.012,9.29 9.628,13.404 4.905,5.581 6.457,11.4 4.334,18.627 -1.495,5.087 -0.917,9.665 2.479,14.8 5.237,7.918 11.269,12.528 20.823,12.182 1.062,-0.038 2.136,0.245 3.416,0.406 2.098,8.672 -3.7,13.914 -7.069,20.009 -0.388,0.702 -1.834,1.026 -2.835,1.148 -9.609,1.169 -9.609,1.146 -12.128,10.744 -0.558,2.129 -0.827,4.416 -1.821,6.32 -0.682,1.307 -2.322,2.858 -3.647,2.97 -15.068,1.271 -30.09,5.395 -45.298,1.107 -0.65,-0.184 -1.397,-0.024 -2.336,-0.024 -1.232,3.846 -2.231,7.55 -3.653,11.084 -0.501,1.247 -1.973,2.867 -3.11,2.958 -4.322,0.348 -8.689,0.14 -13.279,0.14 -0.225,-4.152 -0.41,-7.569 -0.565,-10.414 -6.337,0 -12.161,-0.072 -17.982,0.025 -4.204,0.07 -8.609,-0.385 -12.569,0.696 -13.124,3.584 -26.088,7.757 -39.947,11.958 0,5.028 -0.311,11.446 0.099,17.817 0.322,5.018 -1.203,6.612 -6.376,6.507 -14.968,-0.304 -14.973,-0.076 -19.397,-14.231 -2.384,-7.627 -2.384,-7.627 -11.241,-5.935 0,3.658 1.017,7.869 -0.281,11.167 -1.345,3.414 -4.938,5.941 -7.666,8.99 -1.387,-1.231 -2.343,-1.837 -2.981,-2.683 -4.862,-6.458 -13.484,-10.832 -11.671,-21.075 0.123,-0.695 -1.3,-2.105 -2.276,-2.484 -9.594,-3.726 -19.185,-2.195 -24.09,7.973 -4.354,9.025 -4.87,8.762 -14.475,6.468 -0.648,-0.155 -1.391,0.091 -2.331,0.171 -0.213,3.765 -0.417,7.353 -0.622,10.967 -8.012,1.336 -14.596,1.305 -19.355,-6.612 -2.646,-4.4 -4.661,-8.293 -4.452,-13.562 0.355,-8.984 0.118,-17.994 0.075,-26.993 -0.007,-1.499 -0.287,-2.997 -0.404,-4.14 -4.193,2.447 -7.805,5.971 -11.87,6.608 -6.812,1.069 -13.916,0.445 -20.89,0.256 -6.09,-0.165 -11.51,-5.962 -11.514,-11.928 -0.009,-11.755 0.107,-23.51 -0.069,-35.261 -0.055,-3.647 1.084,-4.964 4.841,-5.569 25.703,-4.133 51.347,-8.631 77.027,-12.907 C -138.86,23.165 -69.409,11.703 0,0"
                        style="fill:#f3f6db;fill-opacity:1;fill-rule:nonzero;stroke:none"
                        transform="matrix(1.3333333,0,0,-1.3333333,1038.2699,4370.0612)"
                        clip-path="url(#clipPath19)" />
                    <path
                        id="path20"
                        data-name="Engativá"
                        data-id="10"
                        d="m 0,0 c 27.431,31.872 54.401,63.208 82.685,96.07 6.335,-7.489 12.017,-14.207 17.8,-21.045 29.933,20.847 58.709,40.89 87.891,61.213 -29.364,24.649 -58.096,48.766 -86.503,72.612 -8.975,-8.765 -17.358,-17.258 -26.144,-25.312 -2.172,-1.992 -5.607,-3.466 -8.539,-3.609 -9.341,-0.456 -18.722,-0.038 -28.079,-0.275 -2.155,-0.055 -4.813,-0.797 -6.337,-2.202 -32.237,-29.727 -64.35,-59.589 -96.453,-89.461 -1.157,-1.076 -2.727,-2.489 -2.799,-3.814 -0.309,-5.741 -0.132,-11.507 -0.132,-18.001 8.554,2.845 16.109,5.644 23.851,7.762 2.395,0.655 5.502,-0.044 7.912,-1.029 2.831,-1.157 5.324,-3.211 7.845,-5.039 3.932,-2.85 3.052,-14.956 -1.49,-16.421 -5.004,-1.614 -5.282,-4.353 -4.237,-8.712 1.401,-5.852 3.766,-12.328 -4.713,-15.29 -0.232,-0.081 -0.31,-0.605 -0.617,-1.255 3.498,-7.202 7.178,-14.566 10.659,-22.023 2.095,-4.491 3.646,-9.423 10.883,-7.337 -1.594,-11.508 6.814,-23.852 -6.722,-32.341 10.974,-4.337 10.973,-4.337 15.27,5.449 0.59,1.343 1.334,2.636 1.764,4.026 0.931,3.008 2.647,4.729 5.989,4.084 5.408,-1.045 8.372,1.255 8.567,6.651 0.076,2.097 -0.291,4.531 -1.346,6.273 C 5.137,-5.937 2.59,-3.26 0,0"
                        style="fill:#f3f6db;fill-opacity:1;fill-rule:nonzero;stroke:none"
                        transform="matrix(1.3333333,0,0,-1.3333333,928.53373,4747.2165)"
                        clip-path="url(#clipPath21)" />
                    <path
                        id="path22"
                        data-name="Fontibón"
                        data-id="9"
                        d="m 0,0 c 0.974,1.155 1.734,2.164 2.603,3.069 7.121,7.415 14.331,14.746 21.331,22.272 1.195,1.285 2.351,3.519 2.088,5.071 -0.721,4.243 -2.209,8.356 -3.556,13.096 -46.261,-30.254 -91.998,-60.166 -138.009,-90.257 -6.371,4.85 -12.603,9.594 -19.169,14.593 -22.887,-27.556 -45.495,-54.776 -68.355,-82.3 5.5,-4.212 7.989,-9.155 3.641,-15.852 4.429,-1.303 8.047,-2.512 11.742,-3.406 2.83,-0.684 3.902,-2.07 3.514,-5.041 -0.707,-5.423 -1.111,-10.885 -1.642,-16.33 0.493,0.262 0.985,0.525 1.477,0.788 2.156,-2.176 4.808,-4.047 6.368,-6.589 3.421,-5.574 5.787,-11.31 14.002,-12.07 7.92,-0.734 7.815,-1.626 8.177,-10.007 0.052,-1.202 0.439,-2.388 0.62,-3.317 9.022,-1.363 16.821,-0.657 21.731,8.03 0.769,1.362 2.744,2.58 4.336,2.854 10.683,1.835 13.251,0.561 19.045,-8.763 2.033,-3.273 3.966,-6.614 6.149,-9.783 0.731,-1.062 2.061,-2.334 3.18,-2.398 4.679,-0.267 9.382,-0.113 14.487,-0.113 v 13.02 c 5.798,0.825 11.199,1.823 16.645,2.286 3.559,0.303 4.731,1.789 4.594,5.224 -0.204,5.135 -0.046,10.283 -0.048,15.426 -0.004,10.355 -0.301,8.648 8.348,8.869 10.192,0.261 14.814,5.122 14.769,15.91 -2.987,-1.549 -5.768,-2.99 -9.033,-4.682 0,6.833 -2.163,14.25 0.517,18.837 3.832,6.557 2.61,10.975 -0.523,16.388 -1.465,2.531 -2.743,5.211 -3.734,7.958 -0.499,1.383 -0.781,3.421 -0.12,4.557 6.129,10.535 11.679,21.107 22.857,28.102 18.323,11.466 35.705,24.437 53.68,36.909 C 14.356,-18.281 7.229,-9.205 0,0"
                        style="fill:#f3f6db;fill-opacity:1;fill-rule:nonzero;stroke:none"
                        transform="matrix(1.3333333,0,0,-1.3333333,1217.8105,4596.8141)"
                        clip-path="url(#clipPath23)" />
                    <path
                        id="path24"
                        data-name="Kennedy"
                        data-id="8"
                        d="m 0,0 c 3.271,1.463 6.587,2.827 10.039,4.303 3.42,-5.95 6.283,-11.504 9.737,-16.66 1.358,-2.028 3.826,-3.847 6.158,-4.578 5.69,-1.78 11.596,-2.869 17.608,-4.282 -1.632,-7.458 -4.641,-14.324 -4.164,-20.939 0.487,-6.745 4.401,-13.243 6.951,-20.223 3.33,2.171 6.05,3.947 8.707,5.679 -5.926,12.828 -3.961,20.705 7.158,29.053 7.484,5.619 14.856,11.454 22.755,16.436 7.562,4.769 1.955,10.909 2.634,16.35 0.48,3.841 -2.182,4.416 -5.255,4.508 -0.631,0.019 -1.783,1.127 -1.759,1.693 0.295,6.999 -2.183,14.271 2.095,20.895 7.463,11.556 14.905,23.126 22.219,34.777 1.221,1.945 2.302,4.278 2.497,6.515 0.668,7.671 0.75,15.394 1.394,23.068 0.301,3.596 -0.773,5.649 -4.044,7.347 -10.25,5.32 -20.134,11.374 -30.53,16.374 -8.512,4.093 -15.085,9.331 -17.299,18.932 -0.261,1.134 -1.149,2.122 -1.855,3.371 -6.678,-3.344 -13.139,-6.392 -19.405,-9.796 -3.06,-1.664 -5.625,-1.645 -8.722,-0.098 -13.77,6.879 -27.685,13.471 -41.438,20.382 -3.003,1.509 -5.147,1.465 -7.949,-0.511 -9.747,-6.87 -19.713,-13.429 -29.579,-20.129 -9.966,-6.768 -19.913,-13.564 -30.417,-20.722 4.941,-3.948 9.705,-7.105 13.665,-11.066 6.575,-6.579 13.673,-9.278 22.576,-5.343 3.588,1.586 5.876,0.2 7.112,-3.358 1.658,-4.773 4.559,-7.583 10.093,-6.972 3.84,0.425 5.748,-1.549 6.602,-5.486 1.942,-8.947 4.051,-17.889 6.769,-26.624 1.578,-5.073 0.379,-8.075 -3.793,-11.054 -4.452,-3.179 -10.719,-6.516 -11.837,-10.896 -1.089,-4.268 3.331,-9.943 5.333,-15 0.135,-0.342 0.216,-0.719 0.416,-1.018 1.89,-2.824 0.912,-4.933 -1.284,-7.192 -4.842,-4.98 -9.446,-10.19 -14.302,-15.475 7.115,-4.254 13.533,-6.255 21.178,-1.494 C -13.765,-5.392 -6.692,-2.994 0,0"
                        style="fill:#f3f6db;fill-opacity:1;fill-rule:nonzero;stroke:none"
                        transform="matrix(1.3333333,0,0,-1.3333333,1285.5787,4846.3225)"
                        clip-path="url(#clipPath25)" />
                    <path
                        id="path26"
                        data-name="Usme"
                        data-id="5"
                        d="m 0,0 c -0.918,0 -1.851,0.104 -2.753,-0.016 -12.798,-1.697 -24.326,1.348 -34.426,9.391 -3.859,3.074 -7.941,2.977 -12.421,1.982 -5.285,-1.173 -10.652,-1.979 -15.987,-2.945 v 16.592 c 3.014,0.199 5.526,0.365 8.491,0.561 0.433,4.368 0.854,8.618 1.489,15.024 5.31,-10.881 13.863,-10.378 22.96,-10.72 V 68.94 c -3.695,-0.406 -7.328,-0.842 -10.969,-1.197 -6.958,-0.68 -14.453,-0.554 -14.279,-10.887 -3.319,0.375 -5.954,0.672 -9.004,1.016 -0.782,-4.812 -1.65,-9.288 -2.194,-13.802 -0.377,-3.124 -1.48,-4.398 -4.919,-4.02 -6.926,0.761 -13.918,0.912 -20.859,1.569 -3.702,0.351 -6.015,-0.515 -7.75,-4.214 -3.109,-6.628 -7.077,-12.85 -10.317,-19.422 -1.663,-3.373 -3.401,-4.797 -7.505,-4.35 -10.893,1.186 -21.857,1.718 -33.631,2.57 0.749,-7.265 -2.595,-11.435 -7.69,-14.746 -2.759,-1.793 -5.012,-4.416 -7.865,-5.993 -2.185,-1.208 -5.084,-2.206 -7.438,-1.84 -10.5,1.632 -20.917,3.802 -31.369,5.75 -4.761,0.888 -15.471,-4.639 -15.673,-8.416 -0.324,-6.044 -0.179,-12.12 -0.025,-18.176 0.027,-1.088 0.775,-2.576 1.662,-3.157 7.263,-4.753 13.909,-10.422 23.845,-9.29 8.433,0.962 17.061,0.199 26.13,0.199 v -20.457 c 11.348,0 22.156,-0.175 32.953,0.089 4.103,0.1 6.815,-0.879 7.481,-5.18 1.168,-7.543 5.376,-12.065 12.952,-13.426 1.063,-0.192 2.054,-0.774 3.078,-1.178 9.989,-3.947 10.142,-4.046 15.906,5.019 2.237,3.518 4.531,4.347 8.576,3.372 6.757,-1.629 13.692,-2.528 20.561,-3.681 7.898,-1.326 15.806,-2.595 23.448,-3.845 0.542,0.98 0.818,1.28 0.872,1.617 0.118,0.721 0.263,1.483 0.149,2.188 -1.514,9.406 1.787,17.195 7.965,24.048 0.487,0.54 0.937,1.159 1.231,1.82 1.473,3.31 3.823,3.624 7.114,2.752 9.171,-2.429 18.422,-4.555 28.424,-6.991 0,8.145 0.495,15.681 -0.147,23.118 -0.577,6.677 1.195,10.94 8.056,12.328 4.027,0.815 4.858,3.399 4.789,7.229 C 10.72,-0.003 10.881,0 0,0"
                        style="fill:#f3f6db;fill-opacity:1;fill-rule:nonzero;stroke:none"
                        transform="matrix(1.3333333,0,0,-1.3333333,1882.9224,4560.4189)"
                        clip-path="url(#clipPath27)" />
                    <path
                        id="path28"
                        data-name="San Cristóbal"
                        data-id="4"
                        d="m 0,0 c -1.101,-0.627 -2.017,-1.584 -3.006,-2.402 -8.434,-6.97 -16.864,-13.943 -25.604,-21.169 20.016,-14.764 39.22,-29.535 59.117,-43.304 7.837,-5.423 12.73,-10.976 10.796,-20.825 -0.127,-0.648 0.171,-1.379 0.28,-2.135 h 11.922 c -5.219,12.461 1.988,19.286 10.464,25.529 0.147,0.108 0.256,0.308 0.415,0.354 1.956,0.56 4,1.756 5.863,1.523 6.718,-0.836 13.338,-2.541 20.066,-3.198 8.647,-0.845 17.61,-6.129 25.819,2.336 2.71,2.794 4.776,5.187 5.195,9.027 0.312,2.852 0.938,5.67 1.465,8.746 12.23,-0.913 23.922,-1.612 35.569,-2.759 3.519,-0.346 5.361,0.651 6.855,3.704 2.897,5.922 5.981,11.761 9.212,17.509 1.365,2.429 1.449,4.043 -0.716,6.174 -7.06,6.946 -13.793,14.226 -20.848,21.179 -1.426,1.406 -3.628,2.516 -5.608,2.792 -13.979,1.941 -28.004,3.55 -41.989,5.451 -3.846,0.522 -6.365,-0.145 -6.838,-4.489 -0.444,-4.077 -2.839,-5.369 -6.821,-5.064 -4.197,0.32 -8.438,0.081 -12.659,0.081 -17.055,0.001 -17.195,0.003 -16.893,17.017 0.094,5.269 1.012,10.442 -5.905,12.694 6.081,0.906 12.163,1.813 19.758,2.946 -7.064,4.904 -12.771,9.213 -18.845,12.921 -2.636,1.609 -5.971,2.295 -9.086,2.856 C 39.443,49.027 32.304,46.248 26.066,40.272 22.774,37.118 18.996,34.409 15.187,31.876 12.108,29.828 10.458,27.391 11.13,23.699 13.05,13.14 9.296,5.296 0,0"
                        style="fill:#f3f6db;fill-opacity:1;fill-rule:nonzero;stroke:none"
                        transform="matrix(1.3333333,0,0,-1.3333333,1506.6027,4468.0521)"
                        clip-path="url(#clipPath29)" />
                    <path
                        id="path30"
                        data-name="Ciudad Bolívar"
                        data-id="19"
                        d="m 0,0 c 1.584,5.514 0.436,9.151 -4.794,11.944 -6.937,3.705 -13.152,8.764 -20.099,12.446 -5.475,2.902 -8.026,6.666 -6.688,12.634 0.559,2.495 1.425,5.266 3.06,7.103 3.892,4.376 8.079,8.573 12.61,12.275 4.619,3.772 5.654,8.126 4.022,13.943 -8.749,-3.02 -17.319,-6.172 -26.025,-8.889 -3.633,-1.133 -5.236,-2.99 -4.551,-6.683 0.962,-5.185 -1.618,-7.745 -6.062,-10.045 -39.068,-20.219 -77.998,-40.703 -117.041,-60.97 -3.675,-1.908 -5.312,-4.218 -5.629,-8.414 -0.629,-8.342 -1.931,-16.632 -3.003,-25.34 h -30.667 c 0,-15.122 -1.169,-29.891 0.438,-44.35 0.968,-8.715 2.824,-19.303 15.764,-22.319 0.774,6.148 3.515,12.813 1.787,17.986 -2.203,6.597 -1.436,10.519 3.573,14.487 1.424,1.127 2.759,2.49 3.778,3.987 6.002,8.819 14.963,4.763 22.683,4.734 2.39,-0.01 4.763,-4.293 7.675,-7.138 9.468,0.489 11.179,10.781 17.36,17.032 0.434,-2.229 0.848,-3.936 1.08,-5.667 0.245,-1.817 0.213,-3.672 0.484,-5.482 0.597,-3.992 6.554,-7.238 9.329,-4.973 2.928,2.389 5.557,5.144 8.391,7.808 -6.027,10.42 -12.783,19.942 -13.788,31.975 -0.109,1.301 -2.151,2.718 -3.594,3.583 -9.165,5.492 -9.245,5.464 -5.981,15.169 0.4,1.192 1.696,2.942 2.62,2.968 10.346,0.3 21.522,5.708 30.323,-4.481 0.175,-0.202 0.635,-0.16 1.251,-0.296 2.178,1.996 4.358,4.238 6.808,6.13 1.148,0.887 2.871,1.66 4.241,1.527 11.122,-1.073 18.861,-6.838 23.159,-17.472 -3.006,-2.75 -6.065,-5.548 -9.208,-8.423 4.85,-6.703 9.357,-12.932 14.939,-20.647 3.736,15.45 15.938,10.182 25.503,11.414 -2.709,9.48 -7.851,14.712 -17.755,12.043 -1.218,9.986 -1.202,10.64 7.136,10.43 5.096,-0.128 10.133,-2.638 15.781,-4.246 1.011,7.342 7.46,5.874 13.231,5.837 0.735,-0.005 1.469,-0.001 2.203,-0.001 11.6,0.003 17.471,6.916 15.596,18.648 -2.215,0.257 -4.507,0.525 -6.967,0.811 C -6.335,-4.182 -6.326,0.562 0,0"
                        style="fill:#f3f6db;fill-opacity:1;fill-rule:nonzero;stroke:none"
                        transform="matrix(1.3333333,0,0,-1.3333333,1707.3807,4745.6588)"
                        clip-path="url(#clipPath31)" />
                    <path
                        id="path32"
                        data-name="Puente Aranda"
                        data-id="16"
                        d="m 0,0 c -17.929,15.712 -35.723,31.579 -53.565,47.391 -8.898,7.886 -17.804,15.763 -26.812,23.738 -14.083,-8.703 -27.83,-17.122 -41.437,-25.761 -1.016,-0.645 -1.751,-3.072 -1.392,-4.318 1.57,-5.444 3.444,-10.815 5.503,-16.097 1.223,-3.139 0.853,-5.194 -1.882,-7.509 -7.965,-6.74 -15.627,-13.838 -23.874,-21.213 6.808,-8.188 13.072,-16.099 19.788,-23.606 2.585,-2.889 5.916,-5.437 9.396,-7.14 11.514,-5.633 23.311,-10.685 34.864,-16.241 3.416,-1.642 6.146,-1.875 9.68,-0.133 8.961,4.417 18.177,8.315 26.853,12.223 3.146,-6.638 4.892,-13.617 9.136,-18.362 4.35,-4.866 11.145,-7.544 16.869,-11.182 4.794,-3.049 9.586,-6.101 14.377,-9.154 2.205,-1.405 4.406,-2.814 6.475,-4.136 v 10.917 c 0,20.552 -0.101,41.104 0.089,61.653 C 4.103,-5.059 2.851,-2.499 0,0"
                        style="fill:#f3f6db;fill-opacity:1;fill-rule:nonzero;stroke:none"
                        transform="matrix(1.3333333,0,0,-1.3333333,1425.5417,4588.4993)"
                        clip-path="url(#clipPath33)" />
                    <path
                        id="path34"
                        data-name="Chapinero"
                        data-id="2"
                        d="m 0,0 c 1.975,-13.839 -1.525,-26.439 -9.245,-38.013 -1.438,-2.155 -2.213,-4.75 -3.476,-7.545 60.673,-10.799 120.484,-21.443 180.481,-32.121 v 43.396 c -9.082,2.454 -10.695,2.353 -13.481,-0.732 -6.126,-6.782 -6.063,-6.579 -14.912,-3.829 -4.062,1.263 -6.53,2.926 -5.68,7.595 0.871,4.791 -1.608,6.202 -5.969,5.772 -1.814,-0.179 -3.717,0.333 -5.495,0.031 -6.89,-1.17 -10.633,2.049 -13.584,8.047 -4.035,8.204 -7.706,9.436 -16.686,7.149 -2.303,-0.587 -4.506,-1.699 -6.831,-2.019 -1.57,-0.216 -3.891,-0.036 -4.801,0.955 -2.809,3.059 -5.996,2.991 -9.533,2.279 -2.077,-0.419 -4.177,-0.724 -7.042,-1.212 C 64.992,-1.857 61.84,4.118 56.384,9.46 54.62,5.411 53.017,1.732 50.75,-3.468 48.567,2.61 47.048,7.494 44.998,12.145 44.389,13.526 42.314,15.099 40.868,15.142 29.534,15.474 18.339,15.621 7.397,10.992 1.762,8.608 -0.888,6.224 0,0"
                        style="fill:#f3f6db;fill-opacity:1;fill-rule:nonzero;stroke:none"
                        transform="matrix(1.3333333,0,0,-1.3333333,1081.3025,4315.2933)"
                        clip-path="url(#clipPath35)" />
                    <path
                        id="path36"
                        data-name="Bosa"
                        data-id="7"
                        d="m 0,0 c 0.325,21.842 0.115,43.691 0.097,65.537 -0.002,1.477 -0.202,2.955 -0.408,5.786 -4.055,-7.371 -7.616,-13.355 -10.674,-19.587 -1.843,-3.756 -3.142,-7.834 -4.21,-11.892 -0.499,-1.897 -0.243,-4.199 0.318,-6.129 1.566,-5.382 3.323,-10.721 5.271,-15.977 4.55,-12.274 0.511,-20.166 -11.063,-26.171 -9.153,-4.748 -17.237,-11.557 -25.708,-17.39 7.841,-16.199 6.062,-21.114 -9.614,-27.898 -0.672,-0.291 -1.386,-0.88 -2.015,-0.801 -1.853,0.232 -4.306,0.111 -5.398,1.229 -5.112,5.239 -8.002,11.414 -8.227,19.075 -0.243,8.27 -3.103,16.572 2.17,24.862 -6.71,1.606 -12.81,4.809 -18.324,4.003 -9.643,-1.408 -18.927,-5.28 -28.636,-8.202 3.051,-7.229 5.767,-14.008 8.789,-20.648 1.2,-2.637 0.818,-4.2 -1.42,-6.047 -5.799,-4.788 -11.261,-9.985 -17.084,-14.741 -2.322,-1.896 -2.705,-3.529 -1.302,-6.046 1.494,-2.68 2.726,-5.506 4.352,-8.843 7.361,6.582 14.276,12.762 21.984,19.653 3.495,-12.933 6.855,-24.716 9.785,-36.605 0.894,-3.624 2.543,-4.565 6.044,-4.544 22.947,0.133 45.896,0.195 68.841,-0.04 4.006,-0.041 5.413,1.49 6.384,4.945 4.856,17.279 9.996,34.48 14.721,51.794 0.757,2.773 0.726,6.307 -0.331,8.927 C 0.979,-17.418 -0.133,-8.953 0,0"
                        style="fill:#f3f6db;fill-opacity:1;fill-rule:nonzero;stroke:none"
                        transform="matrix(1.3333333,0,0,-1.3333333,1425.8107,4867.4919)"
                        clip-path="url(#clipPath37)" />
                    <path
                        id="path38"
                        data-name="Teusaquillo"
                        data-id="13"
                        d="m 0,0 c 2.804,-2.204 4.67,-2.268 7.613,-0.415 25.613,16.131 51.291,32.158 77.055,48.046 2.93,1.807 3.87,3.814 3.822,7.086 -0.16,11.016 -0.331,22.044 0.05,33.048 0.194,5.611 -0.635,9.208 -7.327,8.95 -2.692,-0.105 -5.42,0.811 -8.137,1.228 -20.08,3.079 -40.161,6.15 -61.056,9.349 C 11.714,101.295 10.737,95.616 11.287,90.089 12.395,78.94 8.238,72.104 -1.795,66.566 -17.627,57.825 -32.501,47.346 -48.1,37.4 c 1.291,-1.136 2.188,-2.022 3.18,-2.784 C -29.932,23.095 -14.859,11.684 0,0"
                        style="fill:#f3f6db;fill-opacity:1;fill-rule:nonzero;stroke:none"
                        transform="matrix(1.3333333,0,0,-1.3333333,1185.1053,4555.4889)"
                        clip-path="url(#clipPath39)" />
                    <path
                        id="path40"
                        data-name="Tunjuelito"
                        data-id="6"
                        d="M 0,0 C 6.291,1.85 12.469,4.082 18.695,6.154 18.567,6.529 18.439,6.902 18.312,7.277 6.633,8.107 -5.096,8.51 -16.709,9.892 -27.494,11.176 -37.222,9.854 -46.316,3.434 c -5.058,-3.57 -11.033,-5.812 -16.33,-9.082 -3.501,-2.161 -6.745,-2.651 -10.26,-0.623 -6.344,3.658 -12.318,2.82 -18.68,-0.439 -9.594,-4.915 -19.509,-9.204 -29.8,-13.997 -5.562,9.149 -11.049,18.177 -16.78,27.604 -7.082,-11.021 -15.894,-20.39 -14.478,-34.531 0.63,-6.299 -0.721,-12.79 -1.115,-19.198 -1.147,-18.642 -2.264,-37.284 -3.419,-56.363 h 25.497 c 0,6.971 0.255,13.727 -0.095,20.452 -0.213,4.078 1.244,6.197 4.846,8.035 39.193,20 78.268,40.231 117.486,60.183 3.683,1.874 5.495,3.916 4.741,7.932 C -5.432,-2.712 -3.528,-1.038 0,0"
                        style="fill:#f3f6db;fill-opacity:1;fill-rule:nonzero;stroke:none"
                        transform="matrix(1.3333333,0,0,-1.3333333,1643.8235,4660.876)"
                        clip-path="url(#clipPath41)" />
                    <path
                        id="path42"
                        data-name="Barrios Unidos"
                        data-id="12"
                        d="m 0,0 c 0.227,9.126 0.122,18.261 0.122,28.16 -36.058,6.445 -72.394,12.942 -109.195,19.52 V -5.249 c 1.868,-0.54 3.581,-1.213 5.358,-1.522 10.387,-1.803 19.297,-6.16 26.853,-13.752 5.419,-5.444 11.749,-9.97 17.529,-15.07 2.109,-1.86 3.73,-2.108 6.197,-0.512 16.787,10.869 33.69,21.556 50.484,32.412 C -1.439,-2.909 -0.031,-1.272 0,0"
                        style="fill:#f3f6db;fill-opacity:1;fill-rule:nonzero;stroke:none"
                        transform="matrix(1.3333333,0,0,-1.3333333,1188.9837,4448.6621)"
                        clip-path="url(#clipPath43)" />
                    <path
                        id="path44"
                        data-name="Rafael Uribe Uribe"
                        data-id="18"
                        d="m 0,0 c -5.903,6.277 -11.439,13.669 -21.985,11.508 -0.714,-0.146 -2.714,2.165 -2.795,3.419 -0.329,5.12 0.11,10.292 -0.288,15.403 -0.141,1.798 -1.444,4.167 -2.945,5.089 -7.965,4.889 -16.239,9.275 -24.239,14.11 -2.928,1.77 -4.479,0.882 -6.434,-1.384 -6.952,-8.058 -13.93,-16.103 -21.206,-23.865 -2.886,-3.079 -3.843,-6.251 -3.808,-10.353 0.103,-11.849 1.533,-23.905 -4.248,-35.082 -0.454,-0.878 -0.597,-2.356 -0.168,-3.184 3.84,-7.413 7.841,-14.743 11.839,-22.178 10.485,4.646 20.391,8.559 29.831,13.385 6.331,3.236 11.888,3.977 17.595,-0.666 2.812,-2.288 5.164,-1.415 7.774,0.67 6.021,4.808 12.401,9.174 18.332,14.085 3.689,3.053 7.383,3.869 12.122,3.329 10.119,-1.153 20.315,-1.621 30.728,-2.388 V -6.739 C 29.996,-6.05 20.494,-5.16 10.974,-4.858 6.439,-4.715 3.141,-3.34 0,0"
                        style="fill:#f3f6db;fill-opacity:1;fill-rule:nonzero;stroke:none"
                        transform="matrix(1.3333333,0,0,-1.3333333,1586.7141,4615.1335)"
                        clip-path="url(#clipPath45)" />
                    <path
                        id="path46"
                        data-name="Santafé"
                        data-id="3"
                        d="m 0,0 c 9.368,-6.762 18.925,-13.262 28.415,-19.855 14.891,-10.344 29.785,-20.682 44.921,-31.191 13.961,12.067 27.715,23.893 41.349,35.855 1.068,0.938 1.741,2.783 1.865,4.268 1.308,15.596 1.268,15.602 -11.861,24.05 -2.157,1.388 -4.277,2.849 -6.517,4.09 -1.044,0.579 -2.448,1.209 -3.495,0.969 -6.204,-1.423 -12.351,-3.094 -18.997,-4.806 1.254,-8.685 2.602,-16.974 3.558,-25.309 0.268,-2.335 0.059,-5.232 -1.128,-7.116 -2.003,-3.177 -4.962,-5.751 -7.174,-8.196 -14.192,9.132 -13.262,22.521 -12.197,36.236 -8.302,1.184 -16.031,2.616 -23.826,3.284 -5.421,0.465 -8.931,2.484 -10.116,7.917 -0.905,4.145 -3.468,5.592 -7.576,4.953 C 7.583,23.651 -0.572,26.772 -8.208,32.653 -13.93,37.06 -20.347,40.564 -27,44.819 v -51.59 c 6.569,2.657 12.864,5.025 18.995,7.76 C -4.94,2.356 -2.69,1.942 0,0"
                        style="fill:#f3f6db;fill-opacity:1;fill-rule:nonzero;stroke:none"
                        transform="matrix(1.3333333,0,0,-1.3333333,1350.9476,4431.3056)"
                        clip-path="url(#clipPath47)" />
                    <path
                        id="path48"
                        data-name="Los Mártires"
                        data-id="14"
                        d="m 0,0 c 7.967,-6.722 16.278,-13.042 24.147,-19.873 12.874,-11.173 25.496,-22.636 38.781,-34.472 10.482,11.981 20.479,23.406 30.707,35.097 -2.253,1.675 -4.125,3.104 -6.035,4.48 C 71.066,-2.864 53.81,8.175 38.225,21.212 26.749,30.813 15.975,33.734 2.785,26.566 2.151,26.221 1.165,26.289 0.754,25.811 -0.386,24.489 -2.088,23.025 -2.179,21.534 -2.522,15.861 -2.475,10.148 -2.215,4.467 -2.145,2.924 -1.184,1 0,0"
                        style="fill:#f3f6db;fill-opacity:1;fill-rule:nonzero;stroke:none"
                        transform="matrix(1.3333333,0,0,-1.3333333,1317.8217,4481.7367)"
                        clip-path="url(#clipPath49)" />
                    <path
                        id="path50"
                        data-name="Antonio Nariño"
                        data-id="15"
                        d="m 0,0 c -0.402,-3.955 0.415,-8.032 0.677,-12.055 0.557,-8.537 1.111,-17.075 1.665,-25.612 4.863,7.648 11.342,14.244 10.227,24.164 -0.591,5.254 0.302,10.668 -0.206,15.939 -0.666,6.906 1.04,12.323 6.599,16.852 4.091,3.333 7.442,7.576 11.115,11.419 6.025,6.304 12.043,12.615 18.435,19.311 C 35.977,58.042 24.141,65.619 11.911,73.448 0.163,59.992 -11.377,46.772 -23.326,33.086 -17.597,26.831 -12.399,20.92 -6.935,15.267 -2.76,10.948 0.677,6.651 0,0"
                        style="fill:#f3f6db;fill-opacity:1;fill-rule:nonzero;stroke:none"
                        transform="matrix(1.3333333,0,0,-1.3333333,1441.6632,4605.3161)"
                        clip-path="url(#clipPath51)" />
                    <path
                        id="path52"
                        data-name="Sumapaz"
                        data-id="20"
                        d="m 0,0 c -3.904,-0.885 -4.843,-2.632 -4.8,-6.343 0.181,-15.411 0.063,-30.826 0.096,-46.24 0.003,-1.57 0.286,-3.14 0.45,-4.825 H 38.785 V 9.599 C 25.505,6.273 12.805,2.904 0,0"
                        style="fill:#f3f6db;fill-opacity:1;fill-rule:nonzero;stroke:none"
                        transform="matrix(1.3333333,0,0,-1.3333333,1856.902,4461.5801)"
                        clip-path="url(#clipPath53)" />
                    <path
                        id="path54"
                        data-name="La Candelaria"
                        data-id="17"
                        d="m 0,0 c 8.113,-1.063 16.609,-2.314 25.142,-3.225 3.457,-0.369 5.301,-1.525 5.605,-5.251 0.596,-7.31 1.343,-14.622 2.448,-21.869 0.43,-2.814 1.995,-5.455 3.043,-8.174 8.665,11.581 -0.338,22.77 1.096,34.264 7.569,2.609 15.281,5.267 23.317,8.036 -1.931,3.766 -3.776,6.936 -5.212,10.281 -1.567,3.654 -3.861,5.07 -8.007,4.946 -10.826,-0.325 -21.668,-0.111 -32.504,-0.111 -17.421,0 -17.421,0 -15.484,-17.783 C -0.538,0.943 -0.398,0.785 0,0"
                        style="fill:#f3f6db;fill-opacity:1;fill-rule:nonzero;stroke:none"
                        transform="matrix(1.3333333,0,0,-1.3333333,1394.0329,4403.4169)"
                        clip-path="url(#clipPath55)" />
                </g>
            </svg>
        </div>
    </div>

    <style>
        .cpnt-6 {
            padding: 1.875rem 0;
            background-color: #f3f6dbff;
            position: relative;
        }

        .cpnt-6 .texto {
            max-width: 65.875rem;
            margin: 0 auto;
            padding: 0 1.875rem;
        }

        .cpnt-6 .texto h2 {
            font-family: WorkSans-SemiBold;
            font-size: 2rem;
            margin-bottom: 1rem;
            color: #879225ff;
            text-align: center;

        }

        .cpnt-6 .texto p {
            font-family: WorkSans-Regular;
            font-size: 1rem;
            line-height: 1.5;
            margin-bottom: 1rem;
            text-align: center;
        }

        .cpnt-6 .texto .enfasis-t1 {
            font-family: WorkSans-SemiBold;
            color: #4D541F;
            font-size: 1.2rem;
        }

        .cpnt-6 .desplegables {
            margin-top: 1.875rem;
            max-width: 65.875rem;
            margin: 0 auto;
        }

        .cpnt-6 .boton {
            display: flex;
            justify-content: center;
            margin-top: 1.875rem;
            background-color: #f3f6dbff;
        }

        .cpnt-6 .btn-download {
            text-align: center;
            padding: 0 1.875rem;
            background-color: #f3f6dbff;
            z-index: 1;
        }

        .cpnt-6 .btn {
            display: inline-block;
            padding: 0.5rem 1.5rem;
            background-color: rgba(77, 84, 31, 1);
            color: #FFFFFF;
            text-decoration: none;
            border-radius: 0.313rem;
            font-family: WorkSans-SemiBold;
            font-size: 1rem;
            margin-top: 1.875rem;

        }

        .cpnt-6 .btn:hover {
            background-color: #5A5A3D;
        }

        .cpnt-6 .btn:focus {
            outline: 0.125rem solid #000000;
            outline-offset: 0.125rem;
        }

        .cpnt-6 .btn .icono-descarga {
            display: inline-block;
            vertical-align: middle;
        }

        .cpnt-6 .btn .icono-descarga::before {
            content: "";
            background-image: url('https://www.movilidadbogota.gov.co/semana_de_la_bicicleta_2025/descarga.png');
            width: 1.5rem;
            height: 1.5rem;
            display: inline-block;
            background-position: center;
            background-repeat: no-repeat;
            background-size: contain;
            margin-right: 0.5rem;
            vertical-align: middle;
            margin-left: 10px;
        }


        @media (max-width: 768px) {
            .cpnt-6 .texto h2 {
                font-size: 1.5rem;
            }

            .cpnt-6 .texto p {
                font-size: 0.9rem;
            }
        }

        .line {
            position: absolute;
            display: block;
            width: 100%;
            height: 0.250rem;
            background-color: #4D541F;
            margin-top: 1.875rem;
            bottom: 50px;
        }
    </style>
    <div class="cpnt-6" id="4">
        <div class="texto">
            <h2 class="title title-4">¡Únete a la celebración de la bicicleta!</h2>
            <p class="paragraph ph-3">La XVIII Semana de la Bicicleta ha llegado, y te invitamos a ser parte de esta gran fiesta sobre ruedas. Hemos preparado una agenda llena de eventos para ciclistas de todas las edades y habilidades, para que disfrutes y te conectes con la ciudad.</p>
            <p class="paragraph ph-3">¿Quieres saber qué tenemos preparado? Puedes explorar la agenda navegando por el menú que encontrarás a continuación y descubrir los eventos día a día, o descarga la agenda completa en formato PDF haciendo clic en el botón de descarga y llévala contigo a todas partes</p>
            <p class="paragraph ph-3"><span class="enfasis-t1">¡Te esperamos para pedalear juntos!</span></p>
        </div>

        <div class="desplegables">

            <div class="accordion-govco" id="accordionAgenda">

            </div>
        </div>

        <div class="boton">
            <div class="btn-download">
                <a href="https://www.movilidadbogota.gov.co/semana_de_la_bicicleta_2025/agenda.pdf" class="btn" role=" button" target="_blank">Descargar Agenda<span class="icono-descarga"></span></a>
            </div>
        </div>
        <span class="line"></span>
    </div>

    <style>
        .cpnt-7 {
            padding: 1.875rem 0;
            background-color: #ffffff;
            text-align: center;
            max-width: 75.875rem;
            margin: 0 auto;
        }

        .cpnt-7 h2 {
            max-width: 65.875rem;
            margin: 0 auto 1.5rem auto;
            color: #4D541F;
        }



        .cpnt-7 .logos {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 1.875rem;
        }

        .cpnt-7 .logo-bg {
            background-color: #F2F2F2;
            border-radius: 20rem;
            padding: 1.25rem;
            box-shadow: 0 0.188rem 0.375rem #00000029;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 80px;
            height: 80px;
            transition: all 0.3s;
            margin-bottom: 10px;
        }

        @media(min-width:768px) {
            .cpnt-7 .logo-bg {
                width: 160px;
                height: 160px;
            }
        }

        .cpnt-7 .logo-bg:hover {
            width: 170px;
            height: 170px;
            margin-bottom: 0px;

        }

        .cpnt-7 .logo-bg:hover .logo {
            filter: grayscale(0%);
        }

        .cpnt-7 .logo {
            max-width: 50px;
            height: auto;
            filter: grayscale(100%);
            transition: filter 0.3s;
            margin: auto;
        }

        @media(min-width:768px) {
            .cpnt-7 .logo {
                max-width: 100px;
            }


        }

        .cpnt-7 .title-5 {
            font-family: WorkSans-SemiBold;
            font-size: 1.75rem;
            margin-bottom: 1rem;
        }

        .cpnt-7 .paragraph.ph-1 {
            font-family: WorkSans-Regular;
            font-size: 1rem;
            line-height: 1.5;
            margin-bottom: 1.5rem;
        }

        .cpnt-7 .boton {
            display: flex;
            justify-content: center;
            margin-top: 1.875rem;
            background-color: #ffffff;
        }

        .cpnt-7 .btn-download {
            text-align: center;
            padding: 0 1.875rem;
            background-color: #ffffff;
            z-index: 1;
        }

        .cpnt-7 .btn {
            display: inline-block;
            padding: 0.5rem 1.5rem;
            background-color: rgba(77, 84, 31, 1);
            color: #FFFFFF;
            text-decoration: none;
            border-radius: 0.313rem;
            font-family: WorkSans-SemiBold;
            font-size: 1rem;
            margin-top: 1.875rem;
        }
    </style>
    <!-- aliados -->
    <div class="cpnt-7" id="5">
        <h2 class="title title-5">Conoce a nuestros aliados</h2>
        <p class="paragraph ph-1">La Semana de la Bicicleta no sería posible sin el compromiso y la colaboración de nuestros aliados. Gracias a cada una de las organizaciones, empresas e instituciones que se sumaron a esta iniciativa, aportando su experiencia, recursos y entusiasmo para promover la movilidad sostenible y el uso de la bicicleta en Bogotá, nuestra ciudad, nuestra casa</p>
        <div class="logos">

            <div class="logo-bg">
                <img class="logo logo-22 img-responsive" src="https://www.movilidadbogota.gov.co/semana_de_la_bicicleta_2025/logo22.png" alt="Logo 22">
            </div>
            <div class="logo-bg">
                <img class="logo logo-9 img-responsive" src="https://www.movilidadbogota.gov.co/semana_de_la_bicicleta_2025/logo09.png" alt="Logo 9">
            </div>
            <div class="logo-bg">
                <img class="logo logo-7 img-responsive" src="https://www.movilidadbogota.gov.co/semana_de_la_bicicleta_2025/logo07.png" alt="Logo 7">
            </div>
            <div class="logo-bg">
                <img class="logo logo-5 img-responsive" src="https://www.movilidadbogota.gov.co/semana_de_la_bicicleta_2025/logo05.png" alt="Logo 5">
            </div>
            <div class="logo-bg">
                <img class="logo logo-2 img-responsive" src="https://www.movilidadbogota.gov.co/semana_de_la_bicicleta_2025/logo02.png" alt="Logo 2">
            </div>
            <div class="logo-bg">
                <img class="logo logo-3 img-responsive" src="https://www.movilidadbogota.gov.co/semana_de_la_bicicleta_2025/logo03.png" alt="Logo 3">
            </div>
            <div class="logo-bg">
                <img class="logo logo-1 img-responsive" src="https://www.movilidadbogota.gov.co/semana_de_la_bicicleta_2025/logo01.png" alt="Logo 1">
            </div>
            <div class="logo-bg">
                <img class="logo logo-6 img-responsive" src="https://www.movilidadbogota.gov.co/semana_de_la_bicicleta_2025/logo06.png" alt="Logo 6">
            </div>

            <div class="logo-bg">
                <img class="logo logo-10 img-responsive" src="https://www.movilidadbogota.gov.co/semana_de_la_bicicleta_2025/logo10.png" alt="Logo 10">
            </div>
            <div class="logo-bg">
                <img class="logo logo-11 img-responsive" src="https://www.movilidadbogota.gov.co/semana_de_la_bicicleta_2025/logo11.png" alt="Logo 11">
            </div>
            <div class="logo-bg">
                <img class="logo logo-14 img-responsive" src="https://www.movilidadbogota.gov.co/semana_de_la_bicicleta_2025/logo14.png" alt="Logo 14">
            </div>
            <div class="logo-bg">
                <img class="logo logo-15 img-responsive" src="https://www.movilidadbogota.gov.co/semana_de_la_bicicleta_2025/logo15.png" alt="Logo 15">
            </div>
            <div class="logo-bg">
                <img class="logo logo-15 img-responsive" src="https://www.movilidadbogota.gov.co/semana_de_la_bicicleta_2025/logo16.png" alt="Logo 16">
            </div>
            <div class="logo-bg">
                <img class="logo logo-15 img-responsive" src="https://www.movilidadbogota.gov.co/semana_de_la_bicicleta_2025/logo17.png" alt="Logo 17">
            </div>
            <div class="logo-bg">
                <img class="logo logo-15 img-responsive" src="https://www.movilidadbogota.gov.co/semana_de_la_bicicleta_2025/logo18.png" alt="Logo 18">
            </div>
            <div class="logo-bg">
                <img class="logo logo-15 img-responsive" src="https://www.movilidadbogota.gov.co/semana_de_la_bicicleta_2025/logo19.png" alt="Logo 19">
            </div>
            <div class="logo-bg">
                <img class="logo logo-15 img-responsive" src="https://www.movilidadbogota.gov.co/semana_de_la_bicicleta_2025/logo20.png" alt="Logo 20">
            </div>
            <div class="logo-bg">
                <img class="logo logo-24 img-responsive" src="https://www.movilidadbogota.gov.co/semana_de_la_bicicleta_2025/logo24.png" alt="Logo 24">
            </div>
            <div class="logo-bg">
                <img class="logo logo-15 img-responsive" src="https://www.movilidadbogota.gov.co/semana_de_la_bicicleta_2025/logo21.png" alt="Logo 21">
            </div>
            <div class="logo-bg">
                <img class="logo logo-23 img-responsive" src="https://www.movilidadbogota.gov.co/semana_de_la_bicicleta_2025/logo23.png" alt="Logo 23">
            </div>
            <div class="logo-bg">
                <img class="logo logo-25 img-responsive" src="https://www.movilidadbogota.gov.co/semana_de_la_bicicleta_2025/logo25.png" alt="Logo 25">
            </div>
            <div class="logo-bg">
                <img class="logo logo-26 img-responsive" src="https://www.movilidadbogota.gov.co/semana_de_la_bicicleta_2025/logo26.png" alt="Logo 26">
            </div>
            <div class="logo-bg">
                <img class="logo logo-4 img-responsive" src="https://www.movilidadbogota.gov.co/semana_de_la_bicicleta_2025/logo04.png" alt="Logo 4">
            </div>
            <div class="logo-bg">
                <img class="logo logo-13 img-responsive" src="https://www.movilidadbogota.gov.co/semana_de_la_bicicleta_2025/logo13_a.png" alt="Logo 13">
            </div>



        </div>
        <div class="boton">
            <div class="btn-download">
                <a href="https://docs.google.com/forms/d/e/1FAIpQLSdZYC6SO__aKEDf6znxGDq2SZVS0p8dgElJt-X1EdTeO9lZbw/viewform" class="btn" role=" button" target="_blank">Vincúlate<span class="icono-descarga"></span></a>
            </div>
        </div>
    </div>


    <style>
        .cpnt-8 {
            background-color: #4D541F;
            padding: 1.875rem 0;
        }

        .footer {
            text-align: center;
            padding: 1.875rem;
            max-width: 65.875rem;
            margin: 0 auto;
            display: flex;
            flex-wrap: wrap;
            flex-direction: row;
            align-items: center;
            justify-content: space-between;

        }

        .text-footer {
            font-family: WorkSans-Regular;
            font-size: 1rem;
            color: #333333;
            margin: 0.5rem 0;
        }

        .text-footer a:hover {
            text-decoration: underline;
        }

        .redes {
            margin-bottom: 1rem;
        }

        .redes a {
            margin: 0 0.5rem;
            display: inline-block;
        }

        .redes a img {
            transition: filter 0.3s;
            filter: none;
            width: 24px;
            height: 24px;
            vertical-align: middle;
            object-fit: contain;

        }

        .redes a img:hover {
            filter: grayscale(100%);
        }

        .footer .text-footer {
            color: #FFFFFF;
        }

        .footer .logo-movilidad {
            margin: auto;
        }

        .footer .logo-movilidad img {
            max-width: 200px;
            height: auto;
        }
    </style>
    <!-- pie de pagina -->
    <div class="cpnt-8">
        <footer class="footer">
            <div>
                <div class="redes">
                    <a href="https://www.facebook.com/movilidadbogota" target="_blank" aria-label="Facebook" class="me-3">
                        <img src="https://www.movilidadbogota.gov.co/semana_de_la_bicicleta_2025/facebook.png" alt="Facebook" width="24" height="24">
                    </a>
                    <a href="https://twitter.com/movilidadbogota" target="_blank" aria-label="Twitter" class="me-3">
                        <img src="https://www.movilidadbogota.gov.co/semana_de_la_bicicleta_2025/x.png" alt="Twitter" width="24" height="24">
                    </a>
                    <a href="https://www.instagram.com/movilidadbogota/" target="_blank" aria-label="Instagram" class="me-3">
                        <img src="https://www.movilidadbogota.gov.co/semana_de_la_bicicleta_2025/instagram.png" alt="Instagram" width="24" height="24">
                    </a>
                    <a href="https://www.youtube.com/user/MovilidadBogota" target="_blank" aria-label="YouTube" class="me-3">
                        <img src="https://www.movilidadbogota.gov.co/semana_de_la_bicicleta_2025/youtube.png" alt="YouTube" width="24" height="24">
                    </a>
                </div>
                <div class="enlaces">
                    <p class="text-footer">© 2025 Semana de la Bicicleta. Todos los derechos reservados.</p>
                    <p class="text-footer">Diseñado por <a href="https://www.movilidadbogota.gov.co" target="_blank">Movilidad Bogotá</a></p>
                </div>
            </div>
            <div class="logo-movilidad">
                <img src="https://www.movilidadbogota.gov.co/semana_de_la_bicicleta_2025/movilidad.png" alt="Logo Movilidad Bogotá" width="250">
            </div>


        </footer>
    </div>
    <style>
        .modal .modal-header {
            background: #4D541F;
            color: #bed000;
            border-bottom: none;
            padding: 1rem 1.5rem;
            border-top-left-radius: 0.313rem;
            border-top-right-radius: 0.313rem;
            box-shadow: 0 0.188rem 0.375rem rgba(0, 0, 0, 0.9);
            display: flex;
            align-items: center;
            justify-content: space-between;

        }

        .modal .modal-title {
            font-family: WorkSans-SemiBold;
            font-size: 1.5rem;
            text-shadow: #00000029 0.125rem 0.125rem 0.25rem;

        }

        .modal .modal-body,
        .accordion-govco .accordion-body {
            font-family: WorkSans-Regular;
            font-size: 1rem;
            line-height: 1.4;
            color: #000000;
            background-color: #e5e5e5;
            max-height: 60vh;
            overflow-y: auto;
            padding: 0;

        }

        @media(min-width:768px) {
            .accordion-body {
                padding: 1rem 1.25rem;
            }
        }

        .modal .modal-body h4,
        .accordion-govco .accordion-body h4 {
            font-family: WorkSans-SemiBold;
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: #4D541F;
            text-align: center;
        }

        .modal .modal-body ul,
        .accordion-govco .accordion-body ul {
            list-style-type: none;
            margin-top: 1rem;
            margin-bottom: 1rem;
            margin-left: 0 !important;
            margin-right: 0;
            padding-left: 0px;
        }

        @media(min-width:768px) {

            .modal .modal-body ul,
            .accordion-govco .accordion-body ul {
                list-style-type: none;
                margin: 0;
                margin-top: 1rem;
                margin-bottom: 1rem;
                /* max-height: 300px; */
                padding: 0 32px;
            }

        }

        .modal .modal-body li,
        .accordion-govco .accordion-body li {
            margin-bottom: 1rem;
            background-color: #ffffff;
            padding: 8px;
            border-radius: 0.313rem;
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.1);
        }

        @media(min-width:768px) {

            .modal .modal-body li,
            .accordion-govco .accordion-body li {
                padding: 1rem;
            }
        }

        .modal .modal-body li h5,
        .accordion-govco .accordion-body li h5 {
            font-family: WorkSans-SemiBold;
            font-size: 1.2rem;
            margin-bottom: 0.5rem;
            color: #4D541F;
        }

        .modal .modal-body li p,
        .accordion-govco .accordion-body li p {
            font-family: WorkSans-Regular;
            font-size: 0.9rem;
            line-height: 1.4;
            color: #000000;
            margin: 0.25rem 0;
        }

        @media(min-width:768px) {

            .modal .modal-body li p,
            .accordion-govco .accordion-body li p {
                font-family: WorkSans-Regular;
                font-size: 1rem;
                line-height: 1.4;
                color: #000000;
                margin: 0.25rem 0;
            }
        }

        .modal .modal-body li .act-time::before,
        .accordion-govco .accordion-body li .act-time::before {
            content: url('https://www.movilidadbogota.gov.co/semana_de_la_bicicleta_2025/icon_4a.png');
            display: inline-block;
            vertical-align: middle;
            margin-right: 0.5rem;
            width: 16px;
            height: 16px;
            object-fit: contain;
        }

        .modal .modal-body li .act-location::before,
        .accordion-govco .accordion-body li .act-location::before {
            content: url('https://www.movilidadbogota.gov.co/semana_de_la_bicicleta_2025/icon_2a.png');
            display: inline-block;
            vertical-align: middle;
            margin-right: 0.5rem;
            width: 16px;
            height: 16px;
            object-fit: contain;
        }

        .modal .modal-body li .act-link::before,
        .accordion-govco .accordion-body li .act-link::before {
            content: url('https://www.movilidadbogota.gov.co/semana_de_la_bicicleta_2025/icon_5.png');
            display: inline-block;
            vertical-align: middle;
            margin-right: 0.5rem;
            width: 16px;
            height: 16px;
            object-fit: contain;
        }

        .modal .modal-body li .act-org::before,
        .accordion-govco .accordion-body li .act-org::before {
            content: url('https://www.movilidadbogota.gov.co/semana_de_la_bicicleta_2025/icon_6.png');
            display: inline-block;
            vertical-align: middle;
            margin-right: 0.5rem;
            width: 16px;
            height: 16px;
            object-fit: contain;
            margin-left: 1.875rem;
        }

        .modal .modal-body li .act-region::before,
        .accordion-govco .accordion-body li .act-region::before {
            content: url('https://www.movilidadbogota.gov.co/semana_de_la_bicicleta_2025/icon_7.png');
            display: inline-block;
            vertical-align: middle;
            margin-right: 0.5rem;
            width: 16px;
            height: 16px;
            object-fit: contain;
        }

        .modal .modal-body li .act-direction::before,
        .accordion-govco .accordion-body li .act-direction::before {
            content: url('https://www.movilidadbogota.gov.co/semana_de_la_bicicleta_2025/icon_8.png');
            display: inline-block;
            vertical-align: middle;
            margin-right: 0.5rem;
            width: 16px;
            height: 16px;
            object-fit: contain;
        }

        .modal .modal-body .act-details,
        .accordion-govco .accordion-body .act-details {
            display: block;
            margin-left: 1.875rem;
            margin-top: 0.5rem;
        }

        .modal .modal-body dd,
        .accordion-govco .accordion-body dd {
            font-family: WorkSans-SemiBold;
            color: #4D541F;
        }

        .modal .modal-body dd dl,
        .accordion-govco .accordion-body dd dl {
            margin-left: 1.875rem;
            margin-top: 0.5rem;
            margin-bottom: 0px !important;
            padding: 0;
        }

        .modal .modal-body ul li strong,
        .accordion-govco .accordion-body ul li strong {
            font-family: WorkSans-SemiBold;
            color: #4D541F;
        }

        .modal .modal-footer,
        .accordion-govco .accordion-footer {
            background: #4D541F;
            border-top: none;
            padding: 1rem 1.5rem;
            border-bottom-left-radius: 0.313rem;
            border-bottom-right-radius: 0.313rem;
            box-shadow: 0 -0.188rem 0.375rem rgba(0, 0, 0, 0.29);
            display: flex;
            justify-content: flex-end;
        }

        .modal .modal-footer .btn-secondary {
            background-color: #bed000;
            color: #000000;
            border: none;
        }

        .accordion-govco .accordion-header button {
            background-color: #bed000;
            color: #000000;
            border: none;
            font-weight: 600;
            font-size: 1rem;
        }

        @media(min-width:768px) {

            .accordion-govco .accordion-header button {
                background-color: #bed000;
                color: #000000;
                border: none;
                font-weight: 600;
                font-size: 1.25rem;
            }
        }

        .accordion-govco .accordion-header button:hover {
            background-color: #A6B517;
            color: #000000;
        }

        .accordion-govco .accordion-header button:focus {
            outline: 0.125rem solid #000000;
            outline-offset: 0.125rem;
            background-color: #A6B517;
            color: #000000;
        }

        .accordion-govco .accordion-header button::after {
            color: #000000;
        }

        .modal .modal-footer .btn-secondary:hover {
            background-color: #A6B517;
        }

        .modal .modal-footer .btn-secondary:focus {
            outline: 0.125rem solid #000000;
            outline-offset: 0.125rem;
        }

        .accordion-govco .item-accordion-govco {
            background: none;
        }

        .accordion-govco .button-accordion-govco {
            background: #ffffff;
            color: #4D541F;
            border: none;
            width: 100%;
            text-align: left;
            padding: 1rem 1.5rem;
            font-family: WorkSans-SemiBold;
            font-size: 1.25rem;
            cursor: pointer;
            position: relative;
            border-radius: 0.313rem;
            margin-bottom: 1.025rem;
            box-shadow: 0 0.188rem 0.375rem rgba(0, 0, 0, 0.29);
        }

        .accordion-govco .button-accordion-govco:hover {
            background: #5A5A3D;
        }

        .accordion-govco .button-accordion-govco:hover .text-button-accordion-govco {
            color: #ffffff;
        }

        .accordion-govco .button-accordion-govco:focus {
            outline: 0.125rem solid #000000;
            outline-offset: 0.125rem;
            background: #bed000;
        }

        .accordion-govco .text-button-accordion-govco {
            display: inline-block;
            vertical-align: middle;
            margin-left: 10px;
            color: #4D541F;
        }

        .accordion-govco .button-accordion-govco:focus .text-button-accordion-govco {
            color: #000000;
        }

        .accordion-govco .button-accordion-govco::after {
            color: #4D541F;
        }

        .accordion-govco .button-accordion-govco:hover::after {
            color: #ffffff;
        }

        .accordion-govco .button-accordion-govco:focus::after {
            color: #000000;
        }

        .accordion-govco .body-accordion-govco {
            background: #879225;
            border-radius: 0.313rem;
            margin-bottom: 1.025rem;
        }

        .accordion-govco .body-accordion-govco .activity {
            margin-bottom: 1rem;
            background-color: #F3F6DB;
            padding: 1rem;
            border-radius: 0.313rem;
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.1);
        }

        .accordion-govco .activity .title-two-accordion-govco {
            font-family: WorkSans-SemiBold;
            font-size: 1.5rem;
            margin-bottom: 0.5rem;
            margin-top: 0.8rem;
            color: #4D541F;
        }

        .accordion-govco .text-one-accordion-govco {
            color: #000000;
            font-size: 0.9rem;
            font-family: WorkSans-Regular;
            margin-left: 0.875rem;
            margin-top: 0.338rem;
            margin-bottom: 0;
            display: block;
            line-height: 1.5rem;
        }

        @media(min-width:768px) {
            .accordion-govco .text-one-accordion-govco {
                color: #000000;
                font-size: 16px;
                font-family: WorkSans-Regular;
                margin-left: 0.875rem;
                margin-top: 0.338rem;
                margin-bottom: 0;
                display: block;
                line-height: 1.5rem;
            }
        }

        .accordion-govco a {
            overflow-wrap: break-word;
        }
    </style>

    <!-- Datos agenda con los siguentes datos: Fecha, Hora, Título, Descripción, Lugar, Enlace de inscripción (si aplica), Organizador, Público objetivo, localidad -->
    <script>
        const activities = [{
                title: "Mi bici pieza a pieza",
                description: "Conoce todas las partes de la bicicleta para que puedas pedalear con mayor seguridad. Aquí aprenderás sobre su funcionamiento, a realizar el mantenimiento básico y a identificar fallas a tiempo para prevenir situaciones de riesgo.",

                organizer: "Jardín Botánico de Bogotá José Celestino Mutis",
                date: "2025-09-22"
            },

            {
                title: "Campaña: Vidas Reflectivas",
                description: "Personal de pedagogía y cultura ciudadana estarán presentes en tres puntos de Bogotá para contarte acerca de la importancia de usar elementos reflectivos y luces en horarios nocturnos para proteger tu vida en la vía. Además podrás realizar el Registro Bici.",
                site: {
                    time: "5:00 p.m. - 7:00 p.m.",
                },
                organizer: "Secretaría de Movilidad y colectivos ciclistas",
                date: "2025-09-22"
            },
            {
                title: "Mi Barrio Activo Ciudad Kennedy: activa, inclusiva e innovadora",
                description: "Entregaremos la primera fase de este proyecto que busca beneficiar a la niñez, sus entornos escolares y a sus cuidadores, con intervenciones de urbanismo táctico que promueven una movilidad más segura, creando una identidad única e innovadora en las zonas escolares.",
                site: {
                    regionId: "8",
                    regionName: "Kennedy",
                },
                date: "2025-09-22"
            },
            {
                title: "Reconocimiento a los ciclistas intermodales",
                description: "Entrega de reconocimiento a los ciclistas urbanos que utilizan la bicicleta como medio de transporte para intercambio modal, facilitando el acceso a una movilidad más sostenible.",
                site: {
                    time: "7:00 a.m. -  8:00 a.m.",
                    location: "Cicloparqueadero Portal sur",
                    direction: "Autopista Sur a la altura de Jardines del Apogeo con Carrera 72D",
                    urlmap: "https://maps.app.goo.gl/1xHfM9FrpjjoYP7t6",
                    regionId: "7",
                    regionName: "Bosa",
                },
                organizer: "Secretaría de Movilidad y TransMilenio",
                date: "2025-09-23"
            },
            {
                title: "Conversatorio - La bicicleta como pilar educativo y económico",
                description: "Resaltaremos la experiencia del Colegio de la Bici como una apuesta pedagógica en torno a la bicicleta y su modelo para desarrollar capacidades laborales asociadas a la industria de la bicicleta. Además, sobre la experiencia de esta iniciativa y cómo se enmarca en una apuesta que promueve hábitos y oportunidades laborales en línea con los objetivos de lograr una ciudad donde la bicicleta se posicione como una forma de inclusión y motor económico.",
                site: {
                    time: "9:30 p.m. - 10:30 p.m.",
                    location: "Colegio de la bici ",
                    direction: "Cra. 81a #58 - 61 sur",
                    urlmap: "https://maps.app.goo.gl/tEnYdYnjFgUz2XMj8",
                    registrationLink: "https://forms.gle/R7f1dEW1nwEgNLV99",
                    regionId: "7",
                    regionName: "Bosa",
                },
                organizer: "Secretaría de Movilidad y Colegio de la Bicicleta localidad de Bosa",
                date: "2025-09-23"
            },
            {
                title: "Bicilimpia - Rodando con conciencia",
                description: "Haz que tus viajes en bicicleta sean más seguros y cómodos. Ven y aprende a realizar una revisión completa de tu bicicleta para asegurar que esté en óptimas condiciones antes de salir a rodar.",
                site: {
                    time: "10:30 a.m. - 11:30 a.m. ",
                    location: "Jardín Botánico",
                    direction: "Cl 63 #68-95",
                    urlmap: "https://maps.app.goo.gl/cycTjZFzqD9PXp8Z8",
                    registrationLink: "https://forms.office.com/r/p47y6SmyTz",
                    regionId: "10",
                    regionName: "Engativá",
                },
                organizer: "Jardín Botánico de Bogotá José Celestino Mutis",
                date: "2025-09-23"
            },
            {
                title: "Rodando seguro por Bogotá",
                description: "Únete a estas jornadas pedagógicas diseñadas para afianzar tus conocimientos en técnicas de manejo responsable de la bicicleta, los elementos de protección y el uso correcto del espacio público.",
                site: [{
                        time: "5:00 p.m - 7:00 p.m",
                        location: "Cicloparqueadero de transmilenio Portal Américas",
                        direction: "Ak. 86 # 43 - 55",
                        urlmap: "https://maps.app.goo.gl/voj38u72wC7kkMgJ7",
                        regionId: "8",
                        regionName: "Kennedy",
                        date: "2025-09-23"
                    },
                    {
                        time: "5:00 p.m - 7:00 p.m",
                        location: "Cicloparqueadero de transmilenio Portal Suba",
                        direction: "Av ciudad de Cali # 145 - 01",
                        urlmap: "https://maps.app.goo.gl/TbbRDuNNYMgPGUGi7",
                        regionId: "11",
                        regionName: "Suba",
                        date: "2025-09-24"
                    },
                    {
                        time: "5:00 p.m - 7:00 p.m",
                        location: "Cicloparqueadero de transmilenio Portal Calle 80",
                        direction: "Cl 80 # 80A - 20 ",
                        urlmap: "https://maps.app.goo.gl/3smv27qo5sK9zroZ6",
                        regionId: "10",
                        regionName: "Engativá",
                        date: "2025-09-26",
                    }

                ],
            },
            {
                title: "Rodada - Bogotá se conecta con la región",
                description: "Acompáñanos en este recorrido que inicia en el barrio 7 de Agosto y finaliza en el Alto de Patios.",
                site: {
                    time: "6:00 p.m -  9:00 p.m",
                    location: "Parque Alcázares ",
                    direction: "Cra. 24 # 71 - 25",
                    urlmap: "https://maps.app.goo.gl/FjDitrYwdyn2r8dBA",
                    registrationLink: "https://forms.gle/jTPvbjxZbyUj9GyC8",
                    regionId: "12",
                    regionName: "Barrios Unidos",
                },
                organizer: "Secretaría de Movilidad, Secretaría de Seguridad Convivencia y Justicia, Policía Metropolitana de Bogotá, Instituto Distrital de Recreación y Deporte, Secretaría de Desarrollo Económico, Gobernación de Cundinamarca y Comerciantes del sector del 7 de agosto",
                date: "2025-09-23"
            },
            {
                title: "Conversatorio la cultura del pedal",
                description: "Se realizará una charla sobre la bicicleta, los escarabajos y el uso sostenible de la Bici.",
                site: {
                    time: "2:00 p.m.",
                    location: " CEFE Chapinero",
                    direction: "Cl. 82 #10-69, Bogotá",
                    urlmap: "https://maps.app.goo.gl/bjHEN3UD1xybDWYM7",
                    regionId: "2",
                    regionName: "Chapinero",
                },
                organizer: "SCRD  Dirección de Transformaciones Culturales",
                date: "2025-09-23"
            },
            {
                title: "Rodada - Bosques urbanos, corazón verde de la ciudad",
                description: "Acompáñanos en las visitas guiadas a bosques urbanos, donde conocerás mucho más acerca de su importancia, además podrás participar en conversatorios con expertos en ecología urbana. ",
                site: {
                    time: "9:00 a.m - 11:00 a.m",
                    location: "Jardín Botánico ",
                    direction: "ACl 63 #68-95",
                    urlmap: "https://maps.app.goo.gl/cycTjZFzqD9PXp8Z8",
                    registrationLink: "https://forms.office.com/r/YRFPVSgHXq",
                    regionId: "10",
                    regionName: "Engativá",
                },
                organizer: "Jardín Botánico de Bogotá José Celestino Mutis",
                date: "2025-09-24"
            },
            {
                title: "Lanzamiento exposición museal - Rodar Juntas",
                description: "Acompáñanos en el  lanzamiento de la exposición Rodar Juntas. Un espacio que reunirá a colectivos ciclistas, consejeros locales de la bicicleta y entidades aliadas, entre otros asistentes. Además, podrás participar en un conversatorio sobre liderazgos femeninos en la cultura ciclista bogotana y disfrutar de una presentación artística.",
                site: {
                    time: "4:00 p.m. - 6:30 p.m.",
                    location: "Museo de Bogotá, Sede Casa Siete Balcones ",
                    direction: "Cl. 10 #3-61",
                    urlmap: "https://maps.app.goo.gl/qT2uSvGReQ9XjiXM8",
                    registrationLink: "https://forms.gle/vHE1jzDgj9Rx5dq6A",
                    regionId: "17",
                    regionName: "La Candelaria",
                },
                organizer: "Instituto Distrital de Patrimonio Cultural y Museo de Bogotá",
                date: "2025-09-24"
            },
            {
                title: "Rutas Seguras",
                description: "En la Semana de la bicicleta disfruta de las rutas seguras, rueda seguro hacia Verjon, Patios y Vals, personal motorizado y unidades en Bicicleta y la Mebog continuaran acompañando tus recorridos.",
                site: [{
                        time: "5:00 a.m. -  12:00 m.",
                        location: "Patios",
                        direction: "entre puente de Belisario y el peaje de patios",
                        regionId: "2",
                        regionName: "Chapinero",
                        date: "2025-09-25"
                    },
                    {
                        time: "Jueves y domingos 5:30 a.m. -  12:00 m.",
                        location: "Verjon",
                        direction: "entre el cerro Monserrate y el Kilometro 0",
                        regionId: "3",
                        regionName: "Santa Fe",
                        date: "2025-09-25"
                    },
                    {
                        time: "Jueves 5:00 a.m. - Punto inicio: Estación Héroes (peatonal oriental)",
                        location: "Vals",
                        direction: "Vuelta a la Sabana, saliendo por la autonorte cruzando por los municipios de sopo y la calera para llegar al peaje de patios",
                        regionId: "2",
                        regionName: "Chapinero",
                        date: "2025-09-25"
                    }
                ],
            },

            {
                title: "Foro Movilidad Región - La bicicleta en la integración con la movilidad regional",
                description: "Un espacio de diálogo entre representantes de Bogotá y Cundinamarca, sobre los desafíos de la implementación de estrategias de movilidad segura, sostenible y eficiente que promuevan el uso de la bicicleta, además de sus componentes de infraestructura, ambientales, sociales y culturales para la construcción de ciudades más amables e inclusivas.",
                site: {
                    time: "7:00 a.m a 9:30 a.m",
                    location: " Universidad de la Salle Sede Chapinero (auditorio Cincuentenario )",
                    direction: "Carrera 5 No. 59A-44 ingreso principal",
                    urlmap: "https://maps.app.goo.gl/4WoyWYcGo38rcHtFA",
                    registrationLink: "https://forms.gle/jcnYBhJMi6SVedDu5",
                    regionId: "2",
                    regionName: "Chapinero",
                },
                organizer: "Secretaría de Movilidad",
                date: "2025-09-25"
            },
            {
                title: "Rodada - Cultura de la bici",
                description: "¡Vive la ciudad y conéctate con Bogotá! Únete a este recorrido desde el estadio El Campín hasta la Plaza de Bolívar.",
                site: {
                    time: "7:00 a.m -  10:00 a.m",
                    location: "Estadio Nemesio Camacho El Campín",
                    direction: "Carrera 28 con Av. Calle 57",
                    urlmap: "https://maps.app.goo.gl/rgDmhmQC7DdRrsJG9",
                    registrationLink: "https://forms.gle/jDqEfF3gFz8VEw5d8",
                    regionId: "13",
                    regionName: "Teusaquillo",
                },
                organizer: "Secretaría de Cultura Recreación y Deporte",
                date: "2025-09-25"
            },
            {
                title: "Conversatorio - Ciudades Verdes",
                description: "Únete a este espacio en el que podrás conocer cómo la Ley de Ciudades Verdes puede impulsar ciudades más sostenibles y humanas. De la mano de distintos actores, reflexionaremos sobre el poder de la bicicleta como herramienta de cambio social y ambiental.",
                site: {
                    time: "9:00 a.m. - 11:00 a.m.",
                    location: "Universidad EAN",
                    direction: "Cra. 11 #78 - 47",
                    urlmap: "https://maps.app.goo.gl/8pSJtcEPYDvDGiog9",
                    registrationLink: "https://forms.gle/yEZts85eYKjVZ4A89",
                    regionId: "2",
                    regionName: "Chapinero",
                },
                organizer: "Corporación Movilizatorio",
                date: "2025-09-25"
            },
            {
                title: "Sobre ruedas técnica y diversión",
                description: "Únete a esta jornada y afianza tus habilidades sobre la bicicleta. Aprenderás diferentes maniobras y técnicas de manejo responsable, para hacer de tus recorridos una experiencia más segura.",
                site: {
                    time: "9:30 a.m. a 10:30 a.m.",
                    location: "Jardín Botánico",
                    direction: "Cl 63 #68-95, Plazoleta principal",
                    urlmap: "https://maps.app.goo.gl/cycTjZFzqD9PXp8Z8",
                    registrationLink: "https://forms.office.com/r/AeyNfDNeh7",
                    regionId: "10",
                    regionName: "Engativá",
                },
                organizer: "Jardín Botánico de Bogotá José Celestino Mutis",
                date: "2025-09-25"
            },
            {
                title: "Foro: La bicicleta como estrategia, más allá de la movilidad",
                description: "En este espacio conversaremos sobre cómo la bicicleta sigue consolidándose como una alternativa de movilidad sostenible y eficiente. Analizaremos su papel estratégico dentro del sistema de transporte y su aporte al desarrollo urbano sostenible, inclusivo y accesible de nuestras ciudades. El diálogo se estructurará en tres ejes que nos permitirán comprender sus avances, retos y oportunidades:<dd><dl>Eje 1. Integración urbana y regional a través de la bicicleta.</dl><dl>Eje 2. Seguridad, educación y cuidado vial: bases para fortalecer la cultura ciudadana.</dl><dl>Eje 3. Cultura,salud,recreación y deporte: pilares de una ciudad más amable e incluyente.</dl></dd>",
                site: {
                    time: "9:40 a.m. - 1:00 p.m.",
                    location: "Universidad de la Salle Sede Chapinero (auditorio Cincuentenario)",
                    direction: "Carrera 5 No. 59A-44 ingreso principal",
                    urlmap: "https://maps.app.goo.gl/4WoyWYcGo38rcHtFA",
                    registrationLink: "https://forms.gle/y5eBh49fqqojn36r7",
                    regionId: "2",
                    regionName: "Chapinero",
                },
                organizer: "Secretaría de Movilidad",
                date: "2025-09-25"
            },
            {
                title: "Reconocimiento al compromiso de los sectores público y privado con la promoción del uso de la bicicleta y premios al trabajo en bici.",
                description: "Premiaremos a empresas privadas, universidades, centros comerciales y entidades públicas que han demostrado su compromiso firme con la promoción del uso de la bicicleta, a través de sus proyectos, iniciativas, programas de incentivos y adecuaciones de infraestructura que ayudan a que más personas tomen la decisión de hacer sus viajes diarios de manera más sostenible.",
                site: {
                    regionId: "2",
                    regionName: "Chapinero",
                },
                organizer: "Secretaría de Movilidad",
                date: "2025-09-25"
            },
            {
                title: "Registro Bici",
                description: "Porque tu seguridad también rueda contigo, ven y realiza el Registro Bici y conoce cómo hacer de cada trayecto un camino más seguro.",
                site: [{
                        time: "Hora: 3:00 p.m. a 6:00 p.m.",
                        location: "Av. Boyaca con calle 80",
                        direction: "Nuevo Ciclo Puente",
                        urlmap: "https://maps.app.goo.gl/SuKJZ4uTip5UwAVB8",
                        regionId: "10",
                        regionName: "Engativá",
                    },
                    {
                        time: "Hora: 3:00 p.m. a 6:00 p.m.",
                        location: "Biblioteca El Tintal",
                        direction: "Av. Ciudad de Cali con calle 6b ",
                        urlmap: "https://maps.app.goo.gl/X6iK48rjhk5zkXRh6",
                        regionId: "8",
                        regionName: "Kennedy",
                    }
                ],
                organizer: "Secretaría de Movilidad",
                date: "2025-09-25"
            },

            {
                title: "Rodada - Sierra morena bajo las estrellas",
                description: "Acompáñanos en este recorrido en bicicleta desde el Centro Comercial El Ensueño hasta el mirador de Sierra Morena.",
                site: {
                    time: "6:00 p.m. a 9:00 p.m.",
                    location: "Centro Comercial el Ensueño",
                    direction: "AV. V/cio, TV 63",
                    regionId: "19",
                    regionName: "Ciudad Bolívar",
                    urlmap: "https://maps.app.goo.gl/4sBQbEW1hqSK96KJ9",
                },
                organizer: "CLB Usme, CLB Ciudad Bolívar, CLB Tunjuelito y Colectivo Parceros Sur",
                date: "2025-09-25"
            },
            {
                title: "Foro: cicloturismo en Bogotá, la región y el país de la belleza",
                description: "Este espacio contará con panelistas invitados, quienes hablarán sobre el cicloturismo en Bogotá y Colombia, desde una mirada socio cultural para la promoción de la economía local. <br>Además, podrás disfrutar de la exposición de fotografías sobre cicloturismo y experiencias bogotanas.",
                site: {
                    time: "2:00 p.m. a 4:00 p.m.",
                    location: "Esquina redonda del Bronx Distrito Creativo",
                    direction: "Carrera 15 - calle 10",
                    urlmap: "Esquina redonda del Bronx Distrito Creativo, Carrera 15 calle 10",
                    registrationLink: "https://tinyurl.com/bdfamru2",
                    regionId: "14",
                    regionName: "Los Mártires",
                },
                organizer: "Colectivo Cicloviajeros Colombia",
                date: "2025-09-25"
            },
            {
                title: "Universidades en Bici - Quinta Edición",
                description: "Un espacio donde la bicicleta como herramienta de visibilidad de la movilidad sostenible, así como otros medios de transporte alternativos, serán partícipes de un espacio para que la comunidad de Instituciones de educación superior junto con la ciudadanía podamos movilizarnos por la ciudad.",
                site: {
                    time: "8:00 a.m. - 10:00 a.m.",
                    location: "Lugar llegada - Parque Nacional <br> <dd><dl>Salida 1: Parque el Country (Ac 127 # 11d - 90)</dl><dl>Salida 2: Sede UNAD - José Acevedo y Gómez (Transversal 31 # 12 - 38 sur)</dl></dd>",
                    direction: "Cr. 7 entre cl. 36 y 39 (Bogotá)",
                    urlmap: "https://maps.app.goo.gl/gCqicMQmBxpsJGwR8",
                    regionId: "03",
                    regionName: "Santa Fe",
                },
                registrationLink: "https://forms.gle/fUcn9YjwQxBCcWBY7",
                date: "2025-09-26",
            },
            {
                title: "Taller: A mano y a la medida",
                description: "Participa en este espacio 100 % práctico y didáctico, ideal para los cicloviajeros o personas que deben cargar cosas en sus bicicletas. Aquí aprenderás  a elaborar alforjas y bidorjas con bidones o canecas reutilizadas.",
                site: {
                    time: "9:00 a.m. a 12:00 m.",
                    location: "Esquina redonda del Bronx Distrito Creativo",
                    direction: "Carrera 15 calle 10, Bogotá",
                    urlmap: "https://maps.app.goo.gl/5LV6Vt2eQh22ffug9",
                    registrationLink: "https://tinyurl.com/4p8d328s",
                    regionId: "14",
                    regionName: "Los Mártires",
                },
                organizer: "Colectivo Cicloviajeros Colombia",
                date: "2025-09-26"
            },
            {
                title: "Universidades por la movilidad sostenible",
                description: "¡Ven a conocer y a vivir el Bike Polo! Un deporte que combina estrategia y destreza sobre dos ruedas. Atrévete a demostrar tus habilidades en nuestro circuito de retos para ciclistas, con premios para los mejores.",
                site: {
                    time: "10:00 a.m. -  2:00 p.m.",
                    location: "Parque Nacional",
                    direction: "Cr. 7 entre cl. 36 y 39",
                    regionId: "3",
                    regionName: "Santa Fe",
                    urlmap: "https://maps.app.goo.gl/u3m3HCPMFgEwCRzWA",
                    registrationLink: "https://forms.gle/fUcn9YjwQxBCcWBY7",
                },
                organizer: "Universidad Nacional Abierta y a Distancia, Escuela de Moda y Diseño Arturo Tejada Cano, Universidad Distrital Francisco José de Caldas",
                date: "2025-09-26"
            },
            {
                title: "Bici sos herramientas en acción",
                description: "¿Un pinchazo en el camino? Ven y aprende a despinchar tu bici mientras fortaleces tus habilidades en mecánica básica.",
                site: {
                    time: "10:00 a.m. - 11:30 a.m.",
                    location: "Jardín Botánico ",
                    direction: "Cl 63 # 68 - 95, Plazoleta principal",
                    regionId: "10",
                    regionName: "Engativá",
                    urlmap: "https://maps.app.goo.gl/cycTjZFzqD9PXp8Z8",
                    registrationLink: "https://forms.office.com/r/EheJsNGrTf",
                },
                organizer: "Jardín Botánico de Bogotá José Celestino Mutis",
                date: "2025-09-26"
            },
            {
                title: "Taller: Promoción de la seguridad vial",
                description: "Este taller basado en un juego de roles te permite aprender a manejar los puntos ciegos para disminuir el riesgo de siniestralidad en las interacciones con vehículos de gran tamaño como los buses del SITP. En esta sesión, los participantes podrán ubicarse en la cabina del conductor de uno de estos buses y experimentar la visibilidad que ellos tienen de los peatones y ciclistas en la vía.",
                site: {
                    time: "12:00 p.m - 2:00 p.m",
                    location: "Interior del Parque Mundo Aventura",
                    direction: "Carrera 71D No. 1-14 Sur",
                    urlmap: "https://maps.app.goo.gl/G2ftrh7JiUiKu5jf8",
                    regionId: "8",
                    regionName: "Kennedy",
                },
                organizer: "Transmilenio S.A.",
                date: "2025-09-26"
            },
            {
                title: "Recorrido guiado exposición museal: Rodar juntas y taller: cartografías ciclistas, relatos de mujeres en movimiento",
                description: "Recorrido guiado y taller participativo en la exposición Rodar juntas, un espacio para reflexionar sobre las experiencias de las mujeres en el ciclismo bogotano y la bici como símbolo de libertad, cuidado y transformación social. <br>El recorrido en bici inicia a las 5:30 p.m. con paradas en el Chorro de Quevedo, Park Way y Biblioteca Virgilio Barco, finalizando con una charla sobre el buen uso de la bicicleta.",
                site: {
                    time: "Visita guiada: 4:00 p.m. Recorrido: 5:30 p.m.",
                    location: "Museo de Bogotá Sede Casa Siete Balcones",
                    direction: "Cl. 10 #3-61",
                    regionId: "17",
                    regionName: "La Candelaria",
                    urlmap: "https://maps.app.goo.gl/qT2uSvGReQ9XjiXM8",
                    registrationLink: "https://forms.gle/8bvUgbmr5VBu2ceDA",
                },
                organizer: "Instituto Distrital de Patrimonio Cultural, Instituto Distrital de Patrimonio Cultural, BiciRola y <b>Consejeros de la bici</b>",
                date: "2025-09-26"
            },
            {
                title: "Noche sobre ruedas",
                description: "Únete a las rodadas que llegarán al barrio San Felipe, punto de encuentro para una noche de cine al aire libre. Aquí la bicicleta, los amigos y el espacio público serán los protagonistas de una jornada que reunirá a estudiantes universitarios y miembros de la comunidad en general. Además, socializaremos detalles de la Beca En Bogotá nos Mueve el Respeto.",
                site: [{
                        time: "5:00 p.m. - 9:00 p.m.",
                        location: "<b>RUTA NORTE:</b> Plazoleta externa a la salida de la Universidad Militar",
                        direction: "Salida Carrera 11 con calle 100, Lugar de llegada: Parque la Araña barrio  San Felipe Calle 75 # 22 - 58",
                        urlmap: "https://maps.app.goo.gl/QU3QyBNNQ6N65mmw9",
                        registrationLink: "https://forms.gle/qFMkE6uWmDdsQdsE8",
                        regionId: "1",
                        regionName: "Usaquén",
                    },
                    {
                        time: "5:00 p.m. - 9:00 p.m.",
                        location: "<b>RUTA SUR:</b> Cicloparquedero de las Aguas",
                        direction: "Salida Calle 18 con Carrera 2a, Lugar de llegada: Parque la Araña barrio  San Felipe Calle 75 # 22 - 58",
                        urlmap: "https://maps.app.goo.gl/sCehmK9mSnMszNcDA",
                        registrationLink: "https://forms.gle/qFMkE6uWmDdsQdsE8",
                        regionId: "3",
                        regionName: "Santa Fe",
                    }
                ],
                organizer: "Secretaría de Movilidad y Secretaria de Cultura, Recreación y Deporte ",
                date: "2025-09-26"
            },

            {
                title: "Rodada boquerón nocturno",
                description: "Acompáñanos en este recorrido desde el cruce de Yomasa hasta el Km 0 de la vía al Llano, donde continuaremos por la vía Soches para salir a la antigua vía a Llano y posteriormente al alto del Boquerón.",
                site: {
                    time: "5:30 p.m. a 9:30 p.m.",
                    location: "Cruce Yomasa – Terminal de buses",
                    direction: "Calle 84 Sur No 12 – 49",
                    urlmap: "https://maps.app.goo.gl/Bt77BNnrmfHvG22Z6",
                    regionId: "5",
                    regionName: "Usme",
                },
                organizer: "CLB Usme, CLB Ciudad Bolívar, CLB Tunjuelito y los colectivos: Extreme Riders – Tyguas – El gran velocista – Parceros Usme – Usme Sumapaz MTM",
                date: "2025-09-26"
            },
            {
                title: "Registro bici regional: conexión segura en Bogotá",
                description: "Bogotá, Funza y Soacha se unen en una jornada para realizar el Registro Bici y conocer los avances en los corredores que conectan a estos municipios con la ciudad, mejorando la seguridad de los ciclistas.",
                site: {
                    time: "8:00 am a 11:00 a.m",
                    direction: "Calle 13 con carrera 96",
                    urlmap: "https://maps.app.goo.gl/8gfc4tYKp9hvPT3u5",
                    regionId: "9",
                    regionName: "Fontibón",
                },
                organizer: "Secretaría de Movilidad",
                date: "2025-09-27"
            },
            {
                title: "Gymkana Bicicleta",
                description: "Participa en la gymkana, una actividad grupal que fomenta la diversión, el compañerismo y la actividad física. La gymkana consiste en una serie de pruebas que exigen habilidades de agilidad, equilibrio y coordinación, todas realizadas con bicicleta.",
                site: {
                    time: "9:00 a.m. -  2:00 p.m.",
                    location: "Parque Deportivo Primero de Mayo Localidad San Cristóbal ",
                    direction: "Carrera 5 Bis # 17B - 14 sur donde se ubica la Escuela de la Bici",
                    urlmap: "https://maps.app.goo.gl/oPv8t6b2YFVQDG6X9",
                    regionId: "4",
                    regionName: "San Cristóbal",
                },
                organizer: "Alcaldía de San Cristóbal",
                date: "2025-09-27"
            },
            {
                title: "Barrios Unidos en bici",
                description: "Intervención muralista, que mejorará el espacio público habitado por ciclistas facilitando el acceso a una movilidad más segura. Animate a pintar por tu localidad.",
                site: {
                    time: "9:00 a.m. -  1:00 p.m.",
                    direction: "Bajo puente carrera 30 con calle 80 costado oriental",
                    regionId: "12",
                    regionName: "Barrios Unidos",
                },
                organizer: "Consejo Local de la Bicicleta Barrios Unidos",
                date: "2025-09-27"
            },
            {
                title: "En bici a usme rural",
                description: "Únete a esta rodada y disfruta de una experiencia única con paisajes maravillosos.<dd><dl>Nivel básico: Desde Usme Pueblo hasta el embalse de la Regadera.</dl><dl>Nivel medio: Desde Usme Pueblo hasta el Olarte, pasando por Pasquilla, vereda Santa Bárbara y llegando a la Regadera vía Usme- Sumapaz.</dl></dd>",
                site: {
                    time: "7:00 a.m. a 11:00 a.m.",
                    location: "Plaza Fundacional Usme Pueblo",
                    direction: "Calle 137b sur #14-24",
                    urlmap: "https://maps.app.goo.gl/C6X1kSZ5UnV8BNFJA",
                    regionId: "5",
                    regionName: "Usme",
                },
                organizer: "CLB Usme, CLB Tunjuelito y colectivos: Extreme Riders - Tyguas - El gran velocista - Parceros Usme - Usme Sumapaz MTM ",
                date: "2025-09-28"
            },
            {
                title: "Bogotá rueda en turismera ",
                description: "Rodada de bicicletas clásicas turismeras. Un recorrido que parte desde la ciclovía de la carrera 7.ª, baja hasta la calle 17 sur, conecta con la carrera 50 y sube hasta el parque El Jazmín, donde finaliza con premiaciones a las mejores categorías.",
                site: {
                    time: "8:00 a.m. -  11:00 a.m.",
                    location: "Punto de inicio de la rodada - Plazoleta al frente del Museo Nacional ",
                    direction: "Carrera 7 # 28",
                    regionId: "3",
                    urlmap: "https://maps.app.goo.gl/iUF7jh5wts7eWNRVA",
                    regionName: "Santa Fe",
                },
                organizer: "Club Bacatá",
                date: "2025-09-28"
            },
            {
                title: "Segunda feria local de economía y emprendimientos bici 2025",
                description: "Feria comercial con emprendimientos alrededor de la economía de la bicicleta, activities sobre seguridad vial y escuela de la bici.",
                site: {
                    time: "8:00 a.m. -  2:00 p.m.",
                    location: "Parque - El Renacimiento",
                    direction: "Cr. 19 con Av. El Dorado",
                    urlmap: "https://maps.app.goo.gl/RaQZcX4h8ccMRgeV7",
                    registrationLink: "https://tinyurl.com/4hhrfxjz",
                    regionId: "14",
                    regionName: "Los Mártires",
                },
                organizer: "Consejo Local de la Bicicleta, Localidad 14 “Los Mártires” ",
                date: "2025-09-28"
            },
            {
                title: "Memorias sobre dos ruedas",
                description: "Resaltaremos a los niños y niñas del programa <b>Al Colegio en Bici</b> y a los aprendices de la <b>Escuela de la Bicicleta</b>, quienes ven en este medio de transporte una herramienta de formación, inclusión y transformación de ciudad, que promueve la movilidad sostenible y el cuidado del medio ambiente.",
                site: {
                    regionId: "16",
                    regionName: "Puente Aranda",
                },
                organizer: "Secretaría Distrital de Movilidad, Secretaría de Educación, Instituto Distrital de Recreación y Deporte",
                date: "2025-09-28"
            },
            {
                title: "Ciclovía activa ",
                description: "Ven y realiza el registro de bicicletas, pedagogía de seguridad vial, taller mecánica en bici, prevención del hurto de las bicicletas y actividades recreativas.",
                site: {
                    time: "8:00 a.m. a 12:00 p.m.",
                    direction: "Av. 1 de mayo con Cr. 6",
                    urlmap: "https://maps.app.goo.gl/pHrvme9TDoU6wxe19",
                    regionId: "4",
                    regionName: "San Cristóbal",
                },
                organizer: "SEquipo de Gestión Social Local Movilidad , Alcaldía Local y Consejo de la Bici.",
                date: "2025-09-28"
            }
        ];

        // cargar activities a accordionAgenda por fechas
        document.addEventListener("DOMContentLoaded", function() {
            const accordionAgenda = document.getElementById("accordionAgenda");

            // Agrupar actividades por fecha evitando duplicados
            const activitiesPorFecha = {};

            activities.forEach(activity => {
                // Determinar fechas para cada actividad
                let fechas = [];
                if (Array.isArray(activity.site)) {
                    // Si site es array y tiene fechas diferentes
                    fechas = activity.site.map(s => s.date || activity.date).filter(Boolean);
                } else {
                    fechas = [activity.date].filter(Boolean);
                }

                // Si no hay fecha, omitir
                if (fechas.length === 0) return;

                fechas.forEach(fecha => {
                    if (!activitiesPorFecha[fecha]) {
                        activitiesPorFecha[fecha] = [];
                    }

                    // Evitar duplicados por título y fecha
                    const exists = activitiesPorFecha[fecha].some(a => a.title === activity.title);

                    if (!exists) {
                        // Si site es array y hay varias fechas, filtrar site por la fecha actual
                        let newActivity = {
                            ...activity
                        };
                        if (Array.isArray(activity.site)) {
                            newActivity.site = activity.site.filter(s => (s.date || activity.date) === fecha);
                        }
                        activitiesPorFecha[fecha].push(newActivity);
                    }
                });
            });

            // Ordenar fechas
            const fechasOrdenadas = Object.keys(activitiesPorFecha).sort();

            fechasOrdenadas.forEach((fecha, index) => {
                const activities = activitiesPorFecha[fecha];
                const fechaObj = new Date(fecha);
                const opcionesFecha = {
                    year: 'numeric',
                    month: 'long',
                    day: 'numeric'
                };

                // Corregir la fecha agregando 1 día
                fechaObj.setDate(fechaObj.getDate() + 1);
                // Formatear la fecha
                const fechaFormateada = fechaObj.toLocaleDateString('es-ES', opcionesFecha);
                // Crear item del acordeón para cada fecha
                const accordionItem = document.createElement("div");
                accordionItem.classList.add("accordion-item");

                const accordionHeader = document.createElement("h2");
                accordionHeader.classList.add("accordion-header");
                accordionHeader.id = `heading${index}`;

                const accordionButton = document.createElement("button");
                accordionButton.classList.add("accordion-button");
                if (index !== 0) {
                    accordionButton.classList.add("collapsed");
                }
                accordionButton.type = "button";
                accordionButton.setAttribute("data-bs-toggle", "collapse");
                accordionButton.setAttribute("data-bs-target", `#collapse${index}`);
                accordionButton.setAttribute("aria-expanded", index === 0 ? "true" : "false");
                accordionButton.setAttribute("aria-controls", `collapse${index}`);
                accordionButton.textContent = fechaFormateada;

                accordionHeader.appendChild(accordionButton);
                accordionItem.appendChild(accordionHeader);

                const accordionCollapse = document.createElement("div");
                accordionCollapse.id = `collapse${index}`;
                accordionCollapse.classList.add("accordion-collapse", "collapse");
                if (index === 0) {
                    accordionCollapse.classList.add("show");
                }
                accordionCollapse.setAttribute("aria-labelledby", `heading${index}`);
                accordionCollapse.setAttribute("data-bs-parent", "#accordionAgenda");

                const accordionBody = document.createElement("div");
                accordionBody.classList.add("accordion-body");

                const ul = document.createElement("ul");
                accordionBody.appendChild(ul);

                activities.forEach(function(activity) {
                    const activityDiv = document.createElement("li");
                    activityDiv.classList.add("activity");

                    // Título
                    const title = document.createElement("div");
                    title.classList.add("title-two-accordion-govco");
                    title.textContent = activity.title || "";
                    activityDiv.appendChild(title);

                    // Descripción
                    const desc = document.createElement("div");
                    desc.classList.add("text-one-accordion-govco");
                    desc.innerHTML = activity.description || "";
                    activityDiv.appendChild(desc);

                    // Hora
                    if (activity.time) {
                        const time = document.createElement("pstr");
                        time.innerHTML = "<strong>Hora:</strong> " + activity.time;
                        activityDiv.appendChild(time);
                    }

                    // Lugar
                    if (activity.location) {
                        const loc = document.createElement("pstr");
                        loc.innerHTML = "<strong>Lugar:</strong> " + activity.location;
                        activityDiv.appendChild(loc);
                    }

                    // Manejo de site/location (puede ser objeto o array)
                    const sites = Array.isArray(activity.site) ? activity.site : activity.site ? [activity.site] : [];
                    sites.forEach((site, idx) => {
                        if (!site) return;

                        let detalles = [];
                        detalles.push(`<h5>Detalles de la actividad ${sites.length > 1 ? idx + 1 : ' </h5>'}`);
                        if (site.description) detalles.push(site.description);
                        if (site.time) detalles.push(`<p class="act-time"><strong>Hora:</strong> ${site.time}</p>`);
                        if (site.location) detalles.push(`<p class="act-location"><strong>Lugar:</strong> ${site.location}</p>`);
                        if (site.direction) {
                            let dir = `<p class="act-direction"><strong>Dirección:</strong> ${site.direction}`;
                            if (site.urlmap) {
                                dir += `&nbsp; <a href="${site.urlmap}" target="_blank" rel="noopener" aria-label="Abrir mapa en nueva pestaña">Ver en el mapa</a>`;
                            }
                            dir += `</p>`;
                            detalles.push(dir);
                        }
                        if (site.regionName) detalles.push(`<p class="act-region"><strong>Localidad:</strong> ${site.regionName}</p>`);
                        if (site.registrationLink) detalles.push(`<p class="act-link"><strong>Inscripción:</strong> <a href="${site.registrationLink}" target="_blank" rel="noopener" aria-label="Abrir inscripción en nueva pestaña">${site.registrationLink}</a></p>`);

                        if (detalles.length) {
                            const p = document.createElement("div");
                            p.classList.add("act-details");
                            p.innerHTML = detalles.join("");
                            activityDiv.appendChild(p);
                        }

                        if (sites.length > 1 && idx < sites.length - 1) {
                            const hr = document.createElement("hr");
                            activityDiv.appendChild(hr);
                        }
                    });

                    // Si registrationLink está en activity
                    if (activity.registrationLink) {
                        const reg = document.createElement("div");
                        reg.innerHTML = '<p class="act-link"><strong>Inscripción: </strong><a href="' + activity.registrationLink + '" target="_blank" rel="noopener" aria-label="Abrir inscripción en nueva pestaña">' + activity.registrationLink + '</a></p>';
                        activityDiv.appendChild(reg);
                    }

                    // Organizador
                    if (activity.organizer) {
                        const org = document.createElement("div");
                        org.innerHTML = "<p class='act-org'><strong>Organiza:</strong> " + activity.organizer + "</p>";
                        activityDiv.appendChild(org);
                    }


                    ul.appendChild(activityDiv);
                });

                accordionCollapse.appendChild(accordionBody);
                accordionItem.appendChild(accordionCollapse);
                accordionAgenda.appendChild(accordionItem);
            });
        });

        // Función que carga los nombres de las localidadades en el span del mapa
        document.addEventListener('DOMContentLoaded', function() {
            const paths = document.querySelectorAll('.mapa-div path');

            paths.forEach(path => {
                path.addEventListener('mouseover', function() {
                    const regionName = this.getAttribute('data-name') || 'Región Desconocida';
                    document.querySelector('.region-info').textContent = regionName;
                    document.querySelector('.region-info').className = "region-info active";
                });

                path.addEventListener('mouseout', function() {
                    document.querySelector('.region-info').className = "region-info";
                    document.querySelector('.region-info').textContent = "";
                });
            });
        });

        // Función que carga el modal con la información de las actividades por región
        // Modal para mostrar actividades por región
        document.addEventListener('DOMContentLoaded', function() {
            // Crear el modal si no existe
            let modal = document.getElementById('regionModal');
            if (!modal) {
                modal = document.createElement('div');
                modal.id = 'regionModal';
                modal.className = 'modal fade';
                modal.tabIndex = -1;
                modal.setAttribute('aria-hidden', 'true');
                modal.innerHTML = `
                <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                    </div>
                    <div class="modal-body"></div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
                </div>
            `;
                document.body.appendChild(modal);
            }

            // Evento click en cada región del mapa
            document.querySelectorAll('.mapa-div path').forEach(function(path) {
                path.addEventListener('click', function() {
                    const regionId = this.getAttribute('data-id');
                    const regionName = this.getAttribute('data-name') || 'Localidad';

                    // Filtrar actividades por regionId
                    const actividadesRegion = activities.filter(function(act) {
                        // Puede estar en site (array u objeto) o en activity.regionId
                        if (act.regionId === regionId) return true;
                        if (Array.isArray(act.site)) {
                            return act.site.some(s => s.regionId === regionId);
                        } else if (act.site && act.site.regionId === regionId) {
                            return true;
                        }
                        return false;
                    });

                    // Modal title
                    modal.querySelector('.modal-title').textContent = `Actividades en ${regionName}`;

                    // Modal body
                    const body = modal.querySelector('.modal-body');
                    body.innerHTML = '';
                    if (actividadesRegion.length === 0) {
                        body.innerHTML = '<p>No hay actividades programadas para esta localidad.</p>';
                    } else {
                        const ul = document.createElement('ul');
                        actividadesRegion.forEach(function(act) {
                            const li = document.createElement('li');
                            li.innerHTML = `<h5>${act.title || ''}</h5>
                    <p>${act.description || ''}</p>`;

                            // Mostrar fecha
                            if (act.date) {
                                const fechaObj = new Date(act.date);
                                fechaObj.setDate(fechaObj.getDate() + 1);
                                li.innerHTML += `<p><strong>Fecha:</strong> ${fechaObj.toLocaleDateString('es-ES', {year:'numeric',month:'long',day:'numeric'})}</p>`;
                            }

                            // Mostrar hora/lugar
                            if (act.time) {
                                li.innerHTML += `<p class="act-time"><strong>Hora:</strong> ${act.time}</p>`;
                            }
                            if (act.location) {
                                li.innerHTML += `<p class="act-location"><strong>Lugar:</strong> ${act.location}</p>`;
                            }
                            if (act.direction) {
                                li.innerHTML += `<p class="act-location"><strong>Dirección:</strong> ${act.direction}</p>`;
                            }
                            if (act.urlmap) {
                                li.innerHTML += `<p><a href="${act.urlmap}" target="_blank" rel="noopener" class="act-link">Ver en el mapa</a></p>`;
                            }

                            // Si site es array u objeto
                            const sites = Array.isArray(act.site) ? act.site : act.site ? [act.site] : [];
                            sites.forEach(function(site, idx) {
                                if (site.regionId !== regionId) return;
                                li.innerHTML += `<hr><strong>Detalles de la actividad ${sites.length > 1 ? idx + 1 : ''}</strong>`;
                                if (site.description) li.innerHTML += `<p>${site.description}</p>`;
                                if (site.time) li.innerHTML += `<p class="act-time"><strong>Hora:</strong> ${site.time}</p>`;
                                if (site.location) li.innerHTML += `<p class="act-location"><strong>Lugar:</strong> ${site.location}</p>`;
                                if (site.direction) li.innerHTML += `<p class="act-direction"><strong>Dirección:</strong> ${site.direction}</p>`;
                                if (site.urlmap) li.innerHTML += `<p><a href="${site.urlmap}" target="_blank" rel="noopener">Ver en el mapa</a></p>`;
                                if (site.registrationLink) li.innerHTML += `<p class="act-link"><a href="${site.registrationLink}" target="_blank" rel="noopener"> Inscribirse</a></p>`;
                            });

                            // Inscripción
                            if (act.registrationLink) {
                                li.innerHTML += `<p class="act-link"><a href="${act.registrationLink}" target="_blank" rel="noopener" class="act-link"> Inscribirse</a></p>`;
                            }

                            // Organizador
                            if (act.organizer) {
                                li.innerHTML += `<p class="act-org"><strong>Organizador:</strong> ${act.organizer}</p>`;
                            }

                            ul.appendChild(li);
                        });
                        body.appendChild(ul);
                    }

                    // Mostrar el modal
                    const bsModal = new bootstrap.Modal(modal);
                    bsModal.show();
                });
            });
        });
    </script>




    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.www.gov.co/layout/v4/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</body>

</html>
