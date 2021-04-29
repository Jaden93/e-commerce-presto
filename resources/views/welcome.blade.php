{{-- <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> --}}


    <x-layout>

        {{-- <audio id="foobar" src="https://www.youtube.com/watch?v=DCmh5fvgqq4" preload=""> --}}

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
        {{-- VIDEO HEADER --}}
        <header>
            <div class="overlay"></div>
            <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" class="w-100 h-25">
              <source src="/video/video1.mp4" type="video/mp4">
            </video>
            {{-- <div class="container h-100">
              <div class="d-flex h-100 text-center align-items-center">
                <div class="w-100 text-white">
                  <h1 class="display-3 text-danger">Video Header</h1>
                  <p class="lead mb-0">With HTML5 Video and Bootstrap 4</p>
                </div>
              </div>
            </div> --}}
          </header>




        <div class="margin-custom-top container text-center">
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

        <div class="container">
                <div class="row" id="ads">
                    <!-- Category Card -->
                    <div class="col-md-4">
                        <div class="card rounded">
                            <div class="card-image">
                                <span class="card-notify-badge">Low KMS</span>
                                <span class="card-notify-year">2018</span>
                                <img class="img-fluid"
                                    src="https://imageonthefly.autodatadirect.com/images/?USER=eDealer&PW=edealer872&IMG=USC80HOC011A021001.jpg&width=440&height=262"
                                    alt="Alternate Text" />
                            </div>
                            <div class="card-image-overlay m-auto">
                                <span class="card-detail-badge">Used</span>
                                <span class="card-detail-badge">$28,000.00</span>
                                <span class="card-detail-badge">13000 Kms</span>
                            </div>
                            <div class="card-body text-center">
                                <div class="ad-title m-auto">
                                    <h5>Honda Accord LX</h5>
                                </div>
                                <a class="ad-btn" href="#">View</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card rounded">
                            <div class="card-image">
                                <span class="card-notify-badge">Fully-Loaded</span>
                                <span class="card-notify-year">2017</span>
                                <img class="img-fluid"
                                    src="https://imageonthefly.autodatadirect.com/images/?USER=eDealer&PW=edealer872&IMG=CAC80HOC021B121001.jpg&width=440&height=262"
                                    alt="Alternate Text" />
                            </div>
                            <div class="card-image-overlay m-auto">
                                <span class="card-detail-badge">Used</span>
                                <span class="card-detail-badge">$28,000.00</span>
                                <span class="card-detail-badge">13000 Kms</span>
                            </div>
                            <div class="card-body text-center">
                                <div class="ad-title m-auto">
                                    <h5>Honda CIVIC HATCHBACK LS</h5>
                                </div>
                                <a class="ad-btn" href="#">View</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card rounded">
                            <div class="card-image">
                                <span class="card-notify-badge">Price Reduced</span>
                                <span class="card-notify-year">2018</span>
                                <img class="img-fluid"
                                    src="https://imageonthefly.autodatadirect.com/images/?USER=eDealer&PW=edealer872&IMG=USC80HOC091A021001.jpg&width=440&height=262"
                                    alt="Alternate Text" />
                            </div>
                            <div class="card-image-overlay m-auto">
                                <span class="card-detail-badge">Used</span>
                                <span class="card-detail-badge">$22,000.00</span>
                                <span class="card-detail-badge">8000 Kms</span>
                            </div>
                            <div class="card-body text-center">
                                <div class="ad-title m-auto">
                                    <h5>Honda Accord Hybrid LT</h5>
                                </div>
                                <a class="ad-btn" href="#">View</a>
                            </div>
                        </div>
                    </div>

                </div>
        </div>

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

                                    <a href="{{route('announcement.show' ,$announcement)}}"
                                        class="btn custom-btn">Dettaglio Annuncio</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif

                    @endforeach
                </div>
            </div>
        </div>


    </x-layout>
