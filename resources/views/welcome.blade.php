<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <meta http-equiv="X-UA-Compatible" content="ie=edge"> --}}

    {{-- font awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />

    {{-- stile --}}
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    {{-- Google Font --}}
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css" integrity="sha512-Cv93isQdFwaKBV+Z4X8kaVBYWHST58Xb/jVOcV9aRsGSArZsgAnFIhMpDoMDcFNoUtday1hdjn0nGp3+KZyyFw==" crossorigin="anonymous" />
{{-- Font MontSerrat --}}
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@400;600&display=swap" rel="stylesheet">
    <title>Presto.it</title>
    </audio>
</head>
<body>
        
     
<header>
    <img class="banner" src="https://sirv-cdn.sirv.com/blog/image%20seo/2456071.png" alt="">
    <a class="logo" href="#">Presto</a>
    <div id="toggle"></div>
    <nav class="nav-header">
        <form method="GET" action="{{route('announcement.search')}}" id="button-navbar" class=" ">
            <div class="search">
                <input class="form-control" type="search" placeholder="Cosa stai cercando?" aria-label="Search" name="query">
                <div class="icon"></div>
                <div class="input">
                    <input type="text" placeholder="Cerca il tuo annuncio">
                </div>
            </div>
            <button class="my-auto btn btn-outline-sec " type="submit">Cerca</button>
        </form> 
   
        <ul class="mb-0">
            @guest
            <li><a href="#">Login</a></li>
               @include('components.locale',['lang'=>'it','nation' => 'it'])
            <li><a href="#">Registrati</a></li>
            @include('components.locale',['lang'=>'en','nation' => 'gb'])

            @endguest

            <li><a class="btn btn-primary" href="#">Inserisci annuncio</a></li>
          
        </ul>
    </nav>
</header>

        <section class="fix">
            <div class=" margin-custom-top container text-center">
                <div class="mt-0 row justify-content-center align-items-center">
                    <h2 class="display-1">{{ __('ui.searchCat')}}</h2>
                    @foreach ($categories as $category)
                    <div class="col-md-3 custom-card col-lg-2 my-2 mx-1 card col-6">
                        <div class="mt-3 card-body p-0">

                            <a class="pt-3 text-decoration-none "
                                href="{{route('byCategory', [ $category->id, $category->name])}}">
                                <p id="categoryWrap" class="custom-category">{{$category->name}}</p>
                                <p class="fs-1"><i class="{{$category->icon}}"></i></p>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
    </section>
        @if (session('status'))
        <div class="alert alert-success mt-5">
            {{session('status')}}
            {{-- <p class="alert alert-success">Annuncio inserito con successo</p> --}}
        </div>
        @endif


        @if (session('access.denied'))
         <div class="mt-5">
             <h4 class="text-danger">Accesso non consentito</h4>
         </div>
        @endif





       
         <h2 class="display-5 pt-5 text-center custom-font-card">Gli ultimi annunci aggiunti</h2>
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-10 col-11">
                    @foreach ($announcements as $announcement)

                    @if ($announcement->is_accepted)
                    <div class="margin-custom-top  custom-detail-ad">
                        <section class=" product-welcome ">
                            <div class="product__photo">
                                <div class="photo-container">
                                    <div class="photo-main">
                                        <div class="controls">
                                            <i class=" custom-font-card">Creato da: {{$announcement->user->name}}</i>
                                        </div>
                                        <div class="">
                                            <section  id="myDiv" class="carousel " aria-label="Gallery">
                                                <ol class="carousel__viewport">
                                                    <li id="carousel__slide1" tabindex="0" class="carousel__slide">
                                                        <img class="img-fluid photo-img-car"
                                                            src="https://www.peperonciniamoci.it/forum/uploads/profile/photo-15386.png"
                                                            alt="Card image cap">
                                                        <div class="carousel__snapper">
                                                            <a href="#carousel__slide4" class="carousel__prev">Go to last slide</a>
                                                            <a href="#carousel__slide2" class="carousel__next">Go to next slide</a>
                                                        </div>
                                                    </li>
                                                    <li id="carousel__slide2" tabindex="0" class="carousel__slide">
                                                        <img class="img-fluid photo-img-car "
                                                            src="https://www.peperonciniamoci.it/forum/uploads/profile/photo-15386.png"
                                                            alt="Card image cap">
                    
                                                        <div class="carousel__snapper"></div>
                                                        <a href="#carousel__slide1" class="carousel__prev">Go to previous slide</a>
                                                        <a href="#carousel__slide3" class="carousel__next">Go to next slide</a>
                                                    </li>
                                                    <li id="carousel__slide3" tabindex="0" class="carousel__slide">
                                                        <img class="img-fluid photo-img-car "
                                                            src="https://www.peperonciniamoci.it/forum/uploads/profile/photo-15386.png"
                                                            alt="Card image cap">
                    
                                                        <div class="carousel__snapper"></div>
                                                        <a href="#carousel__slide2" class="carousel__prev">Go to previous slide</a>
                                                        <a href="#carousel__slide4" class="carousel__next">Go to next slide</a>
                                                    </li>
                                                    <li id="carousel__slide4" tabindex="0" class="carousel__slide">
                                                        <img class="img-fluid photo-img-car"
                                                            src="https://www.peperonciniamoci.it/forum/uploads/profile/photo-15386.png"
                                                            alt="Card image cap">
                                                        <div class="carousel__snapper"></div>
                                                        <a href="#carousel__slide3" class="carousel__prev">Go to previous slide</a>
                                                        <a href="" class="carousel__next">Go to first slide</a>
                                                    </li>
                                                </ol>
                                                 <aside class="carousel__navigation">
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
                                                    </aside> 
                                            </section>
                                        </div>
                                     
                                    </div>
                
                                </div>
                            </div>
                
                
                            <div class="product__info_welcome">
                                <div class=" title">
                                    <h1 class="custom-font-card">{{$announcement->title}}</h1>
                                </div>
                   
                                <div class="price">
                                    <p class=" card-text custom-font-card">{{$announcement->price}} €</p>
                                </div>
                                <p class=" card-text custom-font-card">Categoria: <a
                                        href="{{route('byCategory', [ $announcement->category->id, $announcement->category->name])}}">{{$announcement->category->name}}</a>
                                </p>
                                <p class=" card-text custom-font-card">Creato il: {{$announcement->created_at->format('Y/m/d')}}</p>
                                <a href="{{route('announcement.show', compact('announcement'))}}" class="text-decoration-none buy--btn">Descrizione Prodotto</a>
                            </div>
                        </div>
                    </div>
                    @endif

                    @endforeach
                </div>
            </div>
        </div>

        <x-footer/>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
        
        <script src="{{asset('js/app.js')}}"></script>
    </body>
    </html>
