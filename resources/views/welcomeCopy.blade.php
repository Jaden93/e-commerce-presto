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
              
    <div class=" container-fluid">
        <div class="container">
            @foreach ($announcements as $announcement)
            <div class="custom-card-home my-5 p-3 col-12  col-md-10 mx-auto">
                <div class=" text-top row">
                    <div class="photo-main">
                    <section  id="myDiv" class="carousel " aria-label="Gallery">
                        <ol class="carousel__viewport">
                    @foreach ($announcement->images as $image)
                        <li id="carousel__slide1"  class="col-md-6 col-12 carousel__slide">
                            <img class=" img-fluid"src="{{$image->getUrl(400, 300)}}"
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
                        <h5 class="ms-2">{{__('ui.Categoria:')}} <a href="{{route('byCategory', [ $announcement->category->id, $announcement->category->name])}}">{{$announcement->category->name}}</a> </h5>
                        <p class="ms-2">{{$announcement->description}}</p>
                        <div class="d-flex">
                            <p class="ms-2">Creata il: {{$announcement->created_at->format('Y/m/d')}} </p>
                            <a class="ms-2 custom-card-ad btn btn-success"href="{{route('announcement.show' ,$announcement)}}">Dettaglio</a>
                        </div>
                    </div>    
                </div>
            </div>
            @endforeach
        </div>
    </div>
     
    
    
    {{-- @foreach ($announcement->images as $image)
    
    <li id="carousel__slide1" tabindex="0" class="carousel__slide">
        <img class="img-fluid photo-img-car"
            src="{{$image->getUrl(400, 300)}}"
            alt="Card image cap">
        <div class="carousel__snapper">
            <a href="#carousel__slide4" class="carousel__prev">Go to last slide</a>
            <a href="#carousel__slide2" class="carousel__next">Go to next slide</a>
        </div>
    </li> --}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous"></script>

    <script src="{{asset('js/app.js')}}"></script>
</body>

</html>
