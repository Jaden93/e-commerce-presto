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

    <header id="big-img">
        <img class="banner" src="https://sirv-cdn.sirv.com/blog/image%20seo/2456071.png" alt="">
        <a class="logo text-start" href="#">Presto</a>
        <div id="toggle"></div>
        <nav class="nav-header offset-md-2 mx-auto">
            <form method="GET" action="{{route('announcement.search')}}" id="button-header-navbar" class="">
                <div class="search">
                    {{-- <input class="form-control" type="search" aria-label="Search" > --}}
                    <div class="icon "></div>
                    <div class="input">
                        <input type="search" name="query" placeholder="Cerca il tuo annuncio">
                    </div>
                </div>
            </form>
            <ul class="mb-0">
                @guest
                <li><a href="#">Login</a></li>
                <li><a href="#">Registrati</a></li>
                @endguest
                @include('components.locale',['lang'=>'it','nation' => 'it'])
                @include('components.locale',['lang'=>'en','nation' => 'gb'])
                <li><a class="btn btn-primary" href="#">Inserisci annuncio</a></li>
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
            </ul>
        </nav>
    </header>

    <section class="fix">
        <div class="margin-custom-top container text-center">
            <div class="mt-0 row justify-content-center align-items-center">
                <h2 class=" display-1">Cerca la categoria</h2>
                @foreach ($categories as $category)
                <div class=" col-md-3 custom-card col-lg-2 my-2 mx-1 card col-6">
                    <div class="mt-3 card-body p-0">
                        <a class=" pt-3 text-decoration-none" href="{{route('byCategory', [ $category->id, $category->name])}}">
                            <p id="categoryWrap" class="custom-category">{{$category->name}}</p>
                            <p class="fs-1"><i class="{{$category->icon}}"></i></p>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>


    <h2 class="display-5 pt-5 text-center custom-font-card">Gli ultimi annunci aggiunti</h2>
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-10 col-11">
                @foreach ($announcements as $announcement)

                @if ($announcement->is_accepted)
                <div class="my-3 card col-md-8 col-12 offset-md-2">
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
                </div>
                @endif

                @endforeach
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
