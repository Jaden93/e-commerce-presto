<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <meta http-equiv="X-UA-Compatible" content="ie=edge"> --}}

    {{-- font awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" />

    {{-- stile --}}
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    {{-- Google Font --}}
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css"
        integrity="sha512-Cv93isQdFwaKBV+Z4X8kaVBYWHST58Xb/jVOcV9aRsGSArZsgAnFIhMpDoMDcFNoUtday1hdjn0nGp3+KZyyFw=="
        crossorigin="anonymous" />
    {{-- Font MontSerrat --}}
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@400;600&display=swap"
        rel="stylesheet">
    <title>Presto.it</title>
    </audio>
</head>

<body>

    <style>
        :root {
            --main-color: #232323e0;
            --sec-color: #fea82f;
            --third-color: #757575;
            --input-padding-x: 1.5rem;
            --input-padding-y: .75rem;
            --font-mont_s: 'Montserrat Alternates', sans-serif;
            --font-ubuntu: 'Ubuntu', 'sans-serif';
        }

        body {
            min-height: 100vh;
        }

        a {
            color: var(--sec-color);
        }

        .card-body a {
            color: var(--third-color);
        }

        .card-body a:hover {
            color: var(--sec-color);
        }

        .btn a {
            color: var(--third-color);
        }

        .btn a:hover {
            color: var(--third-color);
        }

        a:hover {
            color: white;
        }


        .row {
            --bs-gutter-x: 0;
            --bs-gutter-y: 0;
            display: flex;
            flex-wrap: wrap;
            margin-top: calc(var(--bs-gutter-y) * -1);
            margin-right: calc(var(--bs-gutter-x) / -2);
            margin-left: calc(var(--bs-gutter-x) / -2);
        }

        #search-navbar1 {
            display: none;
        }

        .custom-card {
            display: inline-block;
            vertical-align: middle;

            -webkit-transform: perspective(1px) translateZ(0);
            transform: perspective(1px) translateZ(0);
            box-shadow: 0 0 1px rgba(0, 0, 0, 0);
            -webkit-transition-duration: 0.3s;
            transition-duration: 0.3s;
            -webkit-transition-property: background;
            transition-property: background;
            box-shadow: inset 0 0 0 4px #e1e1e1, 0 0 1px rgba(0, 0, 0, 0);
            background-color: var(--third-color);
            /* Hack to improve aliasing on mobile/tablet devices */
        }

        .margin-custom-top {
            margin-top: 100px;
        }

        /* 
.flex-wrapper {
  display: flex;
  min-height: 150vh;
  flex-direction: column;
  justify-content: space-between;
} */

        /* .flex-wrapper2 {
  display: flex;
  min-height: 50vh;
} */

        /* .custom-session {

  z-index: 1000;

} */

        .custom-card:hover,
        .custom-card:focus,
        .custom-card:active {
            background: none;
        }



        .nav-custom {
            position: fixed;
            z-index: 1000;
            width: 100%;
            top: 0;
        }




        .custom-nav {
            display: grid;
            grid-template-columns: repeat(1, minmax(0, 1fr));

            font: 120% system-ui;
            text-align: center;
        }

        .custom-font-card {
            font-family: var(--font-mont_s);
            font-weight: 600;
        }

        .custom-btn {
            background-color: var(--sec-color);
            text-decoration: none;
            padding: 4px;
            width: 170px;

        }

        #text-nav-btn {
            font-weight: bolder;

            font-size: 17px;
        }

        .custom-btn:hover {
            color: #fff;
            border-color: var(--sec-color);
        }

        .custom-footer {
            /* width: 100% !important; */
            background-color: #72aed48a;
            color: var(--third-color);
            margin-top: 200px;

            padding: 1rem;
            text-align: center;

        }

        .custom-brand {
            letter-spacing: 3px;
            font-size: 26px;
        }

        /* STILE LOGIN */

        .card-signin {
            border: 0;
            border-radius: 1rem;
            box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
        }

        .card-signin .card-title {
            margin-bottom: 2rem;
            font-weight: 300;
            font-size: 1.5rem;
        }

        .card-signin .card-body {
            padding: 2rem;
        }

        .form-signin {
            width: 100%;
        }

        .form-signin .btn {
            font-size: 80%;
            border-radius: 5rem;
            letter-spacing: .1rem;
            font-weight: bold;
            padding: 1rem;
            transition: all 0.2s;
        }

        .form-label-group {
            position: relative;
            margin-bottom: 1rem;
        }

        .form-label-group input {
            height: auto;
            border-radius: 2rem;
        }

        .form-label-group>input,
        .form-label-group>label {
            padding: var(--input-padding-y) var(--input-padding-x);
        }

        .form-label-group>label {
            position: absolute;
            top: 0;
            left: 0;
            display: block;
            width: 100%;
            margin-bottom: 0;
            /* Override default `<label>` margin */
            line-height: 1.5;
            color: #495057;
            border: 1px solid transparent;
            border-radius: .25rem;
            transition: all .1s ease-in-out;
        }

        .bg-detail {
            background-color: var(--sec-color);
        }

        .form-label-group input::-webkit-input-placeholder {
            color: transparent;
        }

        .form-label-group input:-ms-input-placeholder {
            color: transparent;
        }

        .form-label-group input::-ms-input-placeholder {
            color: transparent;
        }

        .form-label-group input::-moz-placeholder {
            color: transparent;
        }

        .form-label-group input::placeholder {
            color: transparent;
        }

        .form-label-group input:not(:placeholder-shown) {
            padding-top: calc(var(--input-padding-y) + var(--input-padding-y) * (2 / 3));
            padding-bottom: calc(var(--input-padding-y) / 3);
        }

        .form-label-group input:not(:placeholder-shown)~label {
            padding-top: calc(var(--input-padding-y) / 3);
            padding-bottom: calc(var(--input-padding-y) / 3);
            font-size: 12px;
            color: #777;
        }

        /* #sticky-footer {


  } */
        .text-main {
            color: var(--main-color);
        }

        .text-main:hover {
            color: white;
            transition: 0.2s;
        }

        .btn-outline-sec {
            color: var(--sec-color);
            border-color: var(--sec-color);
        }

        .btn-outline-sec:hover {
            color: #fff;
            background-color: var(--sec-color);
            border-color: var(--sec-color);
        }

        .bg-main {
            background-color: var(--main-color);
        }

        .bg-sec {
            background-color: var(--sec-color);
        }

        .text-sec {
            color: var(--sec-color);
        }

        .text-U-brand {
            font-family: 'Ubuntu', sans-serif;
            font-weight: bold;
        }

        .text-U-brand:hover {
            color: white;
            font-family: 'Ubuntu', sans-serif;
            font-weight: bold;
            transition: 0.2s;
        }

        .dropdown-item:hover {
            color: white;
            background-color: var(--main-color);
        }

        .dropdown-item {
            color: var(--sec-color);
        }


        /* FINE STILE LOGIN */

        .custom-category {
            font-size: 18px;
            word-wrap: break-word;
            font-family: var(--font-mont_s);
            font-weight: 600;
        }

        .custom-card {
            display: inline-block;
            vertical-align: middle;
            -webkit-transform: perspective(1px) translateZ(0);
            transform: perspective(1px) translateZ(0);
            box-shadow: 0 0 1px rgba(0, 0, 0, 0);
            -webkit-transition-duration: 0.3s;
            transition-duration: 0.3s;
            -webkit-transition-property: background;
            transition-property: background;
            box-shadow: inset 0 0 0 4px #e1e1e1, 0 0 1px rgba(0, 0, 0, 0);
            background-color: #9d9d9d66;
            /* Hack to improve aliasing on mobile/tablet devices */
        }


        .custom-card:hover,
        .custom-card:focus,
        .custom-card:active {
            background: none;
        }

        .custom-nav-search {
            display: grid;

            font: 120% system-ui;
            text-align: center;

        }

        /* CUSTOM DETAIL CARD  */

        .custom-detail-card {
            display: grid;
            grid-template-rows: 1fr;
            background-color: var(--sec-color);
        }

        .custom-detail-ad {
            display: grid;
            grid-template-rows: 1fr;
        }



        /* ----- Product Section ----- */
        .product {
            display: grid;
            grid-template-columns: 0.9fr 1fr;
            margin: auto;
            padding: 2.5em 0;
            min-width: 600px;
            background-color: #585c61fc;
            border-radius: 5px;
            z-index: 1;
        }

        /* ----- Photo Section ----- */
        .product__photo {
            position: relative;
            right: -10px;
        }

        .photo-container {
            position: absolute;
            display: grid;
            grid-template-rows: 1fr;
            height: 440px;
            z-index: -1;
            border-radius: 6px;
            box-shadow: 4px 4px 20px -2px rgb(0 0 0 / 63%);
        }

        .photo-img {
            width: 800px;
            height: 400px;
            margin: auto;
        }

        .custom-detail-card-fix {
            max-width: 100%;
        }

        .photo-img-car {

            width: 396px;
            height: 300px;
            margin: auto;
        }

        .photo-main {
            border-radius: 6px 6px 0 0;
            width: 400px;
            height: 300px;
            background-color: var(--main-color);
            /* background: radial-gradient(#e5f89e, rgba(27, 27, 27, 0.972)); */
        }

        .controls {
            display: flex;
            justify-content: space-between;
            padding: 0.8em;
            color: #fff;
        }

        .controls i {
            cursor: pointer;
        }


        .controls img {
            position: absolute;
            left: -3.5em;
            top: 2em;
            max-width: 110%;
            filter: saturate(150%) contrast(120%) hue-rotate(10deg) drop-shadow(1px 20px 10px rgba(0, 0, 0, 0.3));
        }

        .photo-album {
            padding: 0.7em 1em;
            border-radius: 0 0 6px 6px;
            background-color: #fff;
        }

        .photo-album ul {
            display: flex;
            justify-content: space-around;
        }

        .photo-album li {
            float: left;
            width: 55px;
            height: 55px;
            padding: 7px;
            border: 1px solid red;
            border-radius: 3px;

        }


        /* ----- Informations Section ----- */
        .product__info {
            z-index: -1;
            /* top: 100px; */
            padding: 0.8em 0;
            border-radius: 6px 6px 6px 6px;
            background-color: var(--third-color);
            position: relative;
            left: 30px;
            padding-left: 20px;
            padding-right: 30px;
            padding-top: 60px;
            padding-bottom: 20px;
        }

        .product__info_welcome {
            z-index: -1;
            /* top: 100px; */
            padding: 0.8em 0;
            border-radius: 6px 6px 6px 6px;
            background-color: var(--sec-color);
            position: relative;

            padding-left: 80px;
            padding-right: 30px;
            padding-top: 60px;
            padding-bottom: 20px;
        }


        /* .transparency {
  width: 800px;
  filter: blur(1px);
   filter: drop-shadow(2px 4px 6px black);
  filter: contrast(1.9);
  opacity: 0.05;
  margin: auto;
} */

        .price {
            margin: 0.5em 0;
            color: var(--sec-color);
            font-size: 1.2em;

        }

        .product-welcome {
            display: grid;
            grid-template-columns: 0.7fr auto;
            padding: 2.5em 0;
            background-color: #585c61fc;
            border-radius: 5px;
            z-index: 1;
        }


        .text-wrap {
            word-wrap: break-word;
        }


        .description {
            clear: left;
            margin: 2em 0;
        }

        .buy--btn {
            padding: 1.5em 3.1em;
            border: none;
            border-radius: 7px;
            font-size: 0.8em;
            font-weight: 700;
            letter-spacing: 1.3px;
            color: #fff;
            background-color: red;
            box-shadow: 2px 2px 25px -7px red;
            cursor: pointer;
        }

        .buy--btn:active {
            transform: scale(0.97);
        }

        /* END CUSTOM DETAIL CARD */



        /* START DETAIL CAROUSEL  */
        @keyframes tonext {
            75% {
                left: 0;
            }

            95% {
                left: 100%;
            }

            98% {
                left: 100%;
            }

            99% {
                left: 0;
            }
        }

        @keyframes tostart {
            75% {
                left: 0;
            }

            95% {
                left: -300%;
            }

            98% {
                left: -300%;
            }

            99% {
                left: 0;
            }
        }

        @keyframes snap {
            96% {
                scroll-snap-align: center;
            }

            97% {
                scroll-snap-align: none;
            }

            99% {
                scroll-snap-align: none;
            }

            100% {
                scroll-snap-align: center;
            }
        }



        * {
            box-sizing: border-box;
            scrollbar-color: transparent transparent;
            /* thumb and track color */
            scrollbar-width: 0px;
        }

        *::-webkit-scrollbar {
            width: 0;
        }

        *::-webkit-scrollbar-track {
            background: transparent;
        }

        *::-webkit-scrollbar-thumb {
            background: transparent;
            border: none;
        }

        * {
            -ms-overflow-style: none;
        }

        ol,
        li {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .carousel {
            position: relative;
            /* padding-top: 75%; */
            filter: drop-shadow(0 0 10px #0003);
            perspective: 100px;
            margin-top: 4px;
        }

        .carousel__viewport {
            /* position: absolute; */
            /* top: 0;
  right: 0;
  bottom: 0;
  left: 0; */
            display: flex;
            overflow-x: scroll;
            counter-reset: item;
            scroll-behavior: smooth;
            scroll-snap-type: x mandatory;
        }

        .carousel__slide {
            position: relative;
            flex: 0 0 100%;
            width: 100%;

        }



        .carousel__slide:before {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate3d(-50%, -40%, 70px);
            color: #fff;
            font-size: 2em;
        }

        .carousel__snapper {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            scroll-snap-align: center;
        }

        #button-header-dropdown {
            display: none;
        }


        .fix {
            margin-top: 260px;
        }

        /* media query navbar  */

        @media screen and (max-width:800px) {}

        /* INIZIO MEDIA QUERY  */
        @media (hover: hover) {
            .carousel__snapper {
                animation-name: tonext, snap;
                animation-timing-function: ease;
                animation-duration: 4s;
                animation-iteration-count: infinite;
            }

            .carousel__slide:last-child .carousel__snapper {
                animation-name: tostart, snap;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            .carousel__snapper {
                animation-name: none;
            }
        }

        .carousel:hover .carousel__snapper,
        .carousel:focus-within .carousel__snapper {
            animation-name: none;
        }

        .carousel__navigation {
            position: absolute;
            right: 0;
            bottom: 0;
            left: 0;
            text-align: center;
        }

        .carousel__navigation-list,
        .carousel__navigation-item {
            display: inline-block;
        }

        .carousel__navigation-button {
            display: inline-block;
            width: 1.5rem;
            height: 1.5rem;
            background-color: #333;
            background-clip: content-box;
            border: 0.25rem solid transparent;
            border-radius: 50%;
            font-size: 0;
            transition: transform 0.1s;
        }

        .carousel::before,
        .carousel::after,
        .carousel__prev,
        .carousel__next {
            position: absolute;
            bottom: 0;
            /* margin-top: 37.5%; */
            width: 4rem;
            height: 4rem;
            transform: translateY(-50%);
            border-radius: 50%;
            /* font-size: 0; */
            /* color: red; */
            /* font-size: 30px;*/

        }

        .active .name {
            display: none;
        }

        header {
            z-index: 4;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            background: #000;
            display: flex;
            justify-content: flex-end;
            align-items: center;
            transition: 1s;
            padding: 0 100px;

        }


        header .banner {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        header .logo {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 15vw;

            font-weight: 600;
            transition: 1s;
            text-decoration: none;
            z-index: 1;
        }

        header.sticky .banner {
            opacity: 0.5;
        }

        header.sticky .logo {
            position: absolute;
            font-size: 2em;
            left: 100px;
            transform: translate(0, -50%);
        }

        .nav-header {
            position: relative;
            display: flex;

        }

        .nav-header ul {
            position: relative;
            display: flex;
            transition: 0.25s;
            transform: translate(100px);
            opacity: 0;
        }

        header.sticky .search {
            opacity: 1;
        }


        header.sticky .nav-header ul {

            transform: translate(0);
            opacity: 1;
            transition-delay: 0.15s;
            opacity: 1;
            visibility: visible;
        }

        .nav-header ul li {
            list-style: none;
        }


        /* s */

        .d-none-custom {
            display: none;
        }

        @media (max-width:991px) {
            .d-none-custom {
                display: flex;
            }

            .fix,
            header {
                padding: 40px;
            }

            header.sticky .logo {
                left: 40px;
            }

            header.sticky .banner {
                opacity: 0;
            }

            .nav-header ul {
                display: none;
                opacity: 0;
                visibility: hidden;
            }
        }

        .nav-header ul li a {
            color: #fff;
            display: inline-block;
            padding: 10px 15px;
            font-size: 1.2em;
            text-decoration: none
        }

        header.sticky #toggle {
            position: fixed;
            top: 15px;
            right: 40px;
            width: 50px;
            height: 50px;
            cursor: pointer;
            background: var(--sec-color) url(data:image/png;base64,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);
            background-size: 30px;
            background-repeat: no-repeat;
            background-position: center;

        }

        header.sticky #toggle.active {
            background: #fff url("data:image/png;base64,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");
            background-size: 25px;
            background-repeat: no-repeat;
            background-position: center;


        }

        .nav-header ul li a {
            font-size: 1.5em;
            padding: 5px 15px;
        }

        .nav-header.active ul {
            position: fixed;
            top: 80px;
            left: 0;
            width: 100%;
            height: calc(100%-80px);
            background: rgba(82, 82, 82, 0.842);
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;


        }

        .search {
            position: relative;
            width: 60px;
            height: 40px;
            background: #fff;
            border-radius: 60px;
            transition: 0.5s;
            box-shadow: 0 0 0 5px #fea82f;
            overflow: hidden;
            opacity: 1;

        }


        .search .icon {
            position: absolute;
            top: 0;
            left: 0;
            height: 40px;
            width: 60px;
            background: #fff;
            border-radius: 60px;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 1000;
            cursor: pointer;
        }

        .search .icon::before {
            content: '';
            position: absolute;
            width: 15px;
            height: 15px;
            border: 3px solid blue;
            border-radius: 50%;
            transform: translate(-4px, -4px);

        }

        .search.active {
            width: 360px;
        }

        .search .input {
            position: relative;
            width: 300px;
            height: 40px;
            left: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .search .input input {
            position: absolute;
            top: 0;
            width: 100%;
            height: 100%;
            border: none;
            outline: none;
            font-size: 18px;
            padding: 10px 0;

        }

        .search .icon::after {
            content: '';
            position: absolute;
            width: 3px;
            height: 12px;
            border-radius: 50%;
            background: blue;
            transform: translate(6px, 6px) rotate(315deg);
        }

        header.sticky .nav-header ul {
            visibility: visible;
            opacity: 1;
        }

        .nav-header ul li a:hover {
            color: var(--sec-color);
        }

        header.sticky {

            height: 80px;
            z-index: 1000;
        }

        */ .custom-navbar-nav {
            padding: 0;
            width: 450px;

        }

        /* .carousel::before,
.carousel__prev {
  left: -1rem;
  color: red;
}
.carousel::after,
.carousel__next {
  right: -1rem;
  color: red;
} */



        /* .carousel::before,
.carousel::after {
  content: '';
  z-index: 1;
  background-color: #333;
  background-size: 1.5rem 1.5rem;
  background-repeat: no-repeat;
  background-position: center center;
  font-size: 1.5rem;
  line-height: 4rem;
  text-align: center;
  pointer-events: none;
} */

        /* .carousel::before {
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpolygon points='0,50 80,100 80,0' fill='%23fff'/%3E%3C/svg%3E");
  background-size: 20px;

}

.carousel::after {
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpolygon points='100,50 20,100 20,0' fill='%23fff'/%3E%3C/svg%3E");
  background-size: 20px;
} */

        /* END DETAIL CAROUSEL */


        @media screen and (max-width:1200px) {
            .custom-category {
                font-size: 16px;
            }

            .product-welcome {
                display: grid;
                grid-template-columns: auto auto;
                padding: 2.5em 0;
                background-color: #585c61fc;
                border-radius: 5px;
                z-index: 1;
            }


        }


        @media screen and (min-width: 991px) {
            #button-navbar {
                display: none;
            }


        }


        @media screen and (max-width: 991px) {
            #search-navbar {
                display: none;
            }


            .custom-navbar-nav {
                width: 300px;
                margin-left: auto;
                margin-right: auto;
            }

            #search-navbar1 {
                display: flex;
                justify-content: center;
            }
        }

        @media screen and (max-width: 1055px) {

            .product__photo {
                position: relative;
                right: -10px;
                display: block;
            }

            .product__info {
                z-index: -1;
                /* top: 100px; */
                padding: 0.8em 0;
                border-radius: 6px 6px 6px 6px;
                background-color: var(--third-color);
                position: relative;
                left: -90px;
                width: 390px;
                top: 425px;
                padding-left: 25px;
                padding-right: 30px;
                padding-top: 60px;
                padding-bottom: 20px;
                display: block;
            }

            .product {
                display: grid;
                grid-template-columns: 0.9fr 1fr;
                margin: auto;
                padding: 2.5em 0;
                min-width: 500px;
                background-color: #585c61fc;
                border-radius: 5px;
                z-index: 1;
            }
        }

        .card-custom {
            position: relative;
            padding: 3px;
        }

        .card-custom .custom-card-ad {
            /* position: relative; */
            /* left: 0; */


            position: absolute;
            bottom: 4%;

            right: 4%;
        }

        .container .custom-card-home img {
            -webkit-box-shadow: 8px 10px 10px 5px rgba(66, 66, 66, 0.63);
            box-shadow: 8px 10px 10px 5px rgba(66, 66, 66, 0.63);
            opacity: 0.9;

        }

        .container .custom-card-home .card-custom {
            z-index: 2;
            right: 22px;
            position: relative;
            background: linear-gradient(to left, #fbb825b7, #ffffff81);
            top: 24px;
        }

        .card-custom {
            -webkit-box-shadow: 8px 17px 17px 5px rgba(66, 66, 66, 0.63);
            box-shadow: 8px 17px 17px 5px rgba(66, 66, 66, 0.63);
            border-bottom-right-radius: 30px;
            border-top-right-radius: 30px;
            border-radius: 25px;
            background: rgba(255, 255, 255, 0.2);

            border: 2px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 0 80px rgba(0, 0, 0, 0.2);
        }

        .card-custom {
            color: var(--main-color);
            padding-left: 20px;
            margin-top: 16px;
            margin-bottom: 10px;
        }

        .card-custom h2 {
            font-family: var(--font-ubuntu);
        }

        .card-custom {
            font-family: var(--font-mont_s);
        }

        .card-custom p {
            margin-top: 40px;
            word-wrap: break-word;
            margin-right: 20px;
        }


        /* carousel  */
        /*
.carousel__indicator.carousel-slide{
    background: (0,0,0,.75);
}
/* .carousel-main {
    /* position: relative;
     height: 200px;
    width: 80%;
    margin: 0 auto;

} */
        /*
.carousel__image {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.carousel__track-container {
    background: green;
    padding: 10px;
    height: 100%;
    position: relative;
}

.carousel__track {
    padding: 0;
    margin: 0;
    list-style:none;
}

.carouse__slide {
    position: absolute;
    top: 0;
    bottom: 0;

}

.carousel__button {
    position: absolute;
    top: 50%;
    height: 200px;
    transform: translate(-50%);
    border: 0;
    background: transparent;
    cursor: pointer;
}
.carousel__button i {
    width: 12px;
}

.carouse__button--left {
    left: -40px;
}

.carouse__button--right {
    right: 40px;
}

.carouse__nav {
    background: black;
    display: flex;
    justify-content: center;
    padding: 10px 0;
}

.carousel__indicator {
    border: 0;
    margin: 0 12;
    border-radius: 50%;
    width: 20px;
    height: 20px;
    background:black;
} */

        .custom-label {
            font-family: var(--font-ubuntu);
        }

        .custom-home-color {
            color: var(--sec-color);
            background: var(--third-color);

        }

        .custom-row-label {
            background-color: var(--sec-color);
        }

        .cstm-label {
            padding-left: 0;
        }

        @media screen and (max-width:1200px) {
            .card-custom {
                margin: 0;
                color: var(--main-color);
                padding-left: 20px;
                width: 80%;

                /* margin-top: 16px;
        /* margin-bottom: 10px;*/
            }

            .container .custom-card-home .card-custom {

                top: -20px;
                padding-bottom: 40px;
            }

        }

    </style>

   <header id="big-img">
        <img class="banner" src="https://sirv-cdn.sirv.com/blog/image%20seo/2456071.png" alt="">
        <a class="logo text-start" href="#">Presto</a>
        <div id="toggle">

        </div>
        <nav class=" nav-header align-items-center offset-md-2 mx-auto">

            <ul class="mb-0 align-items-center">

                @guest
                <li><a href="{{route('login')}}">Login</a></li>
                <li><a href="{{route('register')}}">{{__('ui.register')}}</a></li>
                @endguest
                <div class=" d-flex fs-1 m-1">
                    @include('components.locale',['lang'=>'it','nation' => 'it'])
                    @include('components.locale',['lang'=>'en','nation' => 'gb'])
                    @include('components.locale',['lang'=>'esp','nation' => 'es'])
                </div>
                <form method="GET" action="{{route('announcement.search')}}" id="button-header-navbar" class="">
                    <div class="search">
                         <input class="form-control" type="search" aria-label="Search" > 
                        <div class="icon "></div>
                        <div class="input">
                            <input type="search" name="query" placeholder="{{__('ui.search')}}">
                    </div>
                    </div>
                </form>

                <li class="m-3"><a class="btn custom_btn_all" href="{{route('register')}}">{{__('ui.announce')}}</a>
                </li>

                @guest
                <li class="m-3 me-auto"><a class="" href="#">{{__('ui.hello')." Guest"}}</a></li>

                @endguest
                <li class="d-none-custom">
                    <form method="GET" action="{{route('announcement.search')}}" id="button-header-dropdown" class="">
                        <div id="mobile-big-img" class="search">
                            <div class="icon"></div>
                            <div class="input">
                                <input type="search" name="query" placeholder="Cerca il tuo annuncio">
                            </div>
                        </div>
                    </form>
                </li>
                @auth


                <li class="nav-item dropdown">

                    <a class="name nav-link dropdown-toggle" data-bs-toggle="dropdown" role="button"
                        aria-expanded="false" id="name-dropdown" href="#">{{__('ui.hello')." ".Auth::user()->name}}</a>
                    <ul id="toggle-ul" class="d-none dropdown-menu" aria-labelledby="name-dropdown">
                        <li class="custom-home-color dropdown-item">
                            <form action="{{route('logout')}}" id="logout" method="POST">
                                @csrf
                                <a class="dropdown-item color"
                                    onclick="event.preventDefault(); document.getElementById('logout').submit()">{{__('ui.logout')}}</a>
                            </form>
                        </li>
                        <li class="custom-home-color dropdown-item">
                            <a class="nav-link fw-bold" href="{{route('revisor.recovery')}}">{{__('ui.recupero')}}</a>
                            </span>
                        </li>
                        <li class="custom-home-color dropdown-item nav-item">
                            <a class="nav-link fw-bold" href="{{route('revisor.index')}}">
                                Revisor index <span class="badge badge-pill badge-warning">#
                                    {{ \App\Models\Announcement::ToBeRevisionedCount()}}</a>
                            </span>
                        </li>
                    </ul>
                </li>
                @endauth
            </ul>
        </nav>
    </header> 
    {{--
      <nav class="navbar nav-custom  navbar-expand-lg bg-main">
        <div class="container-fluid">
            <a class=" navbar-brand text-U-brand ms-2" href="{{route('homepage')}}"><i
        class="fas fa-store"></i>Presto</a>
    <div class=" d-flex m-3">
        @include('components.locale',['lang'=>'it','nation' => 'it'])
        @include('components.locale',['lang'=>'en','nation' => 'gb'])
        @include('components.locale',['lang'=>'esp','nation' => 'es'])
    </div>
    <button id="button-navbar" class="navbar-toggler hvr-icon-spin ms-auto bg-sec" type="button"
        data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
        aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas  hvr-icon text-main fa-cog"></i>
    </button>
    {{-- <form method="GET" action="{{route('announcement.search')}}" id="button-header-navbar" class="">
        <div class="search">
            <input class="form-control" type="search" style="padding-left: 60px;" aria-label="Search">
            <div class="icon "></div>
            <div class="input">
                <input type="search" name="query" placeholder="{{__('ui.search')}}">
            </div>
        </div>
    </form> --}}
    
                <div class="margin-custom-top d-flex custom-navbar-nav">
                    <input class="form-control w-75" type="search" placeholder="{{__('ui.searchPlaceholder')}}"
    aria-label="Search"
    name="query">
    <button class="my-auto btn btn-outline-sec " type="submit">{{__('ui.searchButton')}}</button>
    </div> 

    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="align-items-center navbar-nav ms-auto">
            <li>
            </li>
            <li class="nav-item">
                @if(Route::is('homepage'))
                <a class="nav-link active fw-bold" style="display:none;" aria-current="page"
                    href="{{route('homepage')}}">Home</a>
                @else
                <a class="nav-link active fw-bold" aria-current="page" href="{{route('homepage')}}">Home</a>
                @endif
            </li>
            @guest
            <li class="nav-item">
                <a class="nav-link fw-bold" href="{{route('login_register')}}">{{__('ui.login')}}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link fw-bold" href="{{route('login_register')}}">{{__('ui.register')}}</a>
            </li class="">
            @endguest
            @auth
            <li class="d-flex">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">

                    {{__('ui.hello')}}, {{Auth::user()->name}}
                </a>
                <ul class="dropdown-menu bg-main" aria-labelledby="navbarDropdownMenuLink">
                    <li>
                        <form action="{{route('logout')}}" id="logout" method="POST">
                            @csrf
                            <a class="dropdown-item color"
                                onclick="event.preventDefault(); document.getElementById('logout').submit()">{{__('ui.logout')}}</a>
                        </form>
                    </li>
                    @if (Auth::user()->is_revisor)
                    <li class="custom-home-color dropdown-item">
                        <a class="nav-link fw-bold" href="{{route('revisor.recovery')}}">{{__('ui.recupero')}}</a>
                    </li>
                    <li class="custom-home-color dropdown-item nav-item">
                        <a class="nav-link fw-bold" href="{{route('revisor.index')}}">Revisor index <span
                                class="badge badge-pill badge-warning">#{{ \App\Models\Announcement::ToBeRevisionedCount()}}</a></span>
                    </li>
                    @endif
                </ul>
            </li>
            @endauth
        </ul>

        {{-- @auth --}}
        {{-- @if (Auth::user()->is_revisor)
                <li class="nav-item">
                    <a class="nav-link fw-bold" href="{{route('revisor.recovery')}}">{{__('ui.recupero')}}</a>
        </span>
        </li>
        <li class="nav-item">
            <a class="nav-link fw-bold" href="{{route('revisor.index')}}">
                Revisor index <span class="badge badge-pill badge-warning">#
                    {{ \App\Models\Announcement::ToBeRevisionedCount()}}</a>
            </span>
        </li>
        @endif
        @endAuth --}}
        <li class="nav-item text-center">
            @auth
            @if (Auth::user()->name)
            <a class="custom-btn btn text-main" href="{{route('announcement.create')}}">{{__('ui.announce')}}
            </a>
            @endauth
            @else
            <a class=" custom-btn btn me-2 " href="{{route('login_register')}}"><span
                    id="text-nav-btn">{{__('ui.announce')}}</span> </a>
            @endif
        </li>
        <li>
            <form method="GET" action="{{route('announcement.search')}}" id="search-navbar1"
                class="offset-md-2 me-auto custom-nav-search btn nav-link ">
                {{-- <div class="search">
                            <div class="icon"></div>
                            <div class="input">
                                <input type="text" placeholder="Cerca il tuo annuncio">
                            </div>
                        </div> --}}
                <div class="d-flex custom-navbar-nav">
                    <input class="form-control w-75" type="search" placeholder="{{__('ui.searchPlaceholder')}}"
                        aria-label="Search" name="query">
                    <button class="my-auto btn btn-outline-sec " type="submit">{{__('ui.searchButton')}}</button>
                </div>
            </form>
        </li>
        </ul>
    </div>
    </div>
    </nav>

    <div class="margin-custom-top container text-center">
        <div class="mt-0 row justify-content-center align-items-center">
            <h2 class=" display-1">{{__('ui.searchCat')}}</h2>
            @foreach ($categories as $category)
            <div class=" col-md-3 custom-card col-lg-2 my-2 mx-1 card col-6">
                <div class="mt-3 card-body p-0">
                    <a class=" pt-3 text-decoration-none"
                        href="{{route('byCategory', [ $category->id, $category->name])}}">
                        <p id="categoryWrap" class="custom-category">{{$category->name}}</p>
                        <p class="fs-1"><i class="{{$category->icon}}"></i></p>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>


    <h2 class="display-5 pt-5 text-center custom-font-card">{{__('ui.annunciAggiunti')}}</h2>
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-10 col-11">

                <div class=" container-fluid">
                    <div class="container">
                        @foreach ($announcements as $announcement)
                        @if ($announcement->is_accepted)
                        <div class="custom-card-home my-5 p-3 col-12  col-md-10 mx-auto">
                            <div class=" text-top row" style="justify-content: flex-end;">
                                <div class="photo-main">
                                    <section id="myDiv" class="carousel " aria-label="Gallery">
                                        <ol class="carousel__viewport">
                                            @foreach ($announcement->images as $image)
                                            <li id="carousel__slide1" class="col-md-6 col-12 carousel__slide">
                                                <img class=" img-fluid" src="{{$image->getUrl(400, 300)}}"
                                                    alt="Card image cap">
                                                <div class="carousel__snapper">
                                                    <a href="#carousel__slide2" class=""></a>
                                                    <a href="#carousel__slide4" class=""></a>
                                                </div>

                                            </li>
                                            {{-- <aside class="carousel__navigation">
                                        <ol class="carousel__navigation-list">
                                            <li class="carousel__navigation-item">

                                                <a href="" class="carousel__navigation-button">Go to slide 1</a>
                                            </li>
                                            <li class="carousel__navigation-item">
                                                <a href="#carousel__slide2" class="carousel__navigation-button">Go to slide 2</a>
                                            </li>
                                            <li class="carousel__navigation-item">
                                                <a href="#carousel__slide3" class="carousel__navigation-button">Go to slide 3</a>
                                            </li>
                                            <li class="carousel__navigation-item">
                                                <a href="#carousel__slide4" class="carousel__navigation-button">Go to slide 4</a>
                                            </li>
                                        </ol>
                                    </aside>      --}}
                                            @endforeach
                                        </ol>
                                    </section>
                                </div>
                                <div class="card-custom col-md-6 col-12">
                                    <h2 class="ms-2">{{$announcement->title}}</h2>
                                    <h5 class="ms-2">{{__('ui.Categoria:')}} <a
                                            href="{{route('byCategory', [ $announcement->category->id, $announcement->category->name])}}">{{$announcement->category->name}}</a>
                                    </h5>
                                    <p class="ms-2">{{$announcement->description}}</p>
                                    <div class="row">
                                        <p class="ms-2 col-2">{{__('ui.prezzo:')}} {{$announcement->price}}</p>
                                        <p class="col-4">{{__('ui.creationDate:')}}
                                            {{$announcement->created_at->format('Y/m/d')}} </p>
                                        <a class="col-4 custom-card-ad btn custom_btn_all"
                                            href="{{route('announcement.show' ,$announcement)}}">{{__('ui.dettaglio')}}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif

                        @endforeach
                    </div>
                </div>
                @guest
                <div class="container-fluid text-center">
                    <a class="display-3 text-decoration-none text-dark" href="{{route('login_register')}}">Vai a tutti
                        gli annunci!</a>
                </div>
                @endguest
                @auth
                <div class="container-fluid text-center">
                    <a class="display-3 text-decoration-none text-dark" href="{{'/announcement/index'}}">Vai a tutti gli
                        annunci!</a>
                </div>
                @endauth

                {{-- <div class="my-3 card col-md-8 col-12 offset-md-2">
                    <div class="row align-items-center justify-content-end">
                        <div class="col-5">
                            <img class="img-fluid"
                                src="https://www.peperonciniamoci.it/forum/uploads/profile/photo-15386.png"
                                style="width: 200px; height: 200px;" alt="Card image cap">
                        </div>
                        <div class="col-7">
                            <div class="card-body">
                                <h3 class="card-title">{{$announcement->title}}</h3>
                <p class="card-text">{{$announcement->description}} </p>
                <p class="card-text">{{$announcement->created_at->format('Y/m/d')}} </p>
                <p class="card-text">{{$announcement->price}}€</p>
                <p class="card-text">{{$announcement->user->name}}</p>
                <p class="card-text">Categoria: <a
                        href="{{route('byCategory', [ $announcement->category->id, $announcement->category->name])}}">{{$announcement->category->name}}</a>
                </p>

                <a href="{{route('announcement.show' ,$announcement)}}" class="btn custom-btn">Dettaglio
                    Annuncio</a>
            </div>
        </div>
    </div>
    </div> --}}

    </div>
    </div>
    </div>

    <x-footer />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous"></script>

    <script src="{{asset('js/app.js')}}"></script>
</body>

</html>
