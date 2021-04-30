{{-- <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> --}}


    <x-layout>

        {{-- <audio id="foobar" src="https://www.youtube.com/watch?v=DCmh5fvgqq4" preload=""> --}}

      
        {{-- VIDEO HEADER --}}
        {{-- <header>
            <div class="overlay"></div>
            <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" class="w-100 h-25">
              <source src="/video/video1.mp4" type="video/mp4">
            </video> --}}
            {{-- <div class="container h-100">
              <div class="d-flex h-100 text-center align-items-center">
                <div class="w-100 text-white">
                  <h1 class="display-3 text-danger">Video Header</h1>
                  <p class="lead mb-0">With HTML5 Video and Bootstrap 4</p>
                </div>
              </div>
            </div> --}}
        
       
        <section class="fix">
            <div class=" margin-custom-top container text-center">
                <div class="mt-0 row justify-content-center align-items-center">
                    <h2 class="display-1">Cerca la categoria</h2>
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





       
        {{-- <h2 class="display-5 pt-5 text-center custom-font-card">Gli ultimi annunci aggiunti</h2>
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
--}}

    </x-layout>
