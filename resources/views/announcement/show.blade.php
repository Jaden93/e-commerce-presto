<x-layout>
   
    {{-- <section class=" product bg-detail ">
        <div class="margin-custom-top  custom-detail-card">
            <div class="product__photo"> --}}
            <div class="margin-custom-top row">
                <div class=" product__info col-12 col-md-6">
                    <div class="ms-3 title">
                        <h1 class="custom-font-card">{{$announcement->title}}</h1>
                    </div>
                    <div class="description">
                        <h3 class="ms-3 custom-font-card  ">Descrizione</h3>
                        <p class="card-text custom-font-card m-3 text-wrap" style="width: 300px;">
                            {{$announcement->description}} </p>
                    </div>
                    <div class="price">
                        <p class="ms-3 card-text custom-font-card">{{$announcement->price}} €</p>
                    </div>
                    <p class="ms-3 card-text custom-font-card">Categoria: <a
                            href="{{route('byCategory', [ $announcement->category->id, $announcement->category->name])}}">{{$announcement->category->name}}</a>
                    </p>
                    <p class="ms-3 card-text custom-font-card">Annuncio creato in data:
                        {{$announcement->created_at->format('Y/m/d')}} </p>
                    <div class="text-center">
                        <a href = "{{route('announcement.index')}}" class="py-1 custom-btn text-dark">Ritorna agli annunci</a>
                    </div>
                </div>
                <div class="z-index-photo col-lg-5 col-10hp ">
                    <div class="photo-container">
                        <div class="photo-main">
                            <div class="controls">
                                <i class=" custom-font-card">{{__('ui.creatoDa')}} {{$announcement->user->name}}</i>
                            </div>
                            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel"
                                data-bs-interval="false">
                                <div class="carousel-indicators">
                                    @foreach ($announcement->images as $key=>$image)
                                    <button type="button" data-bs-target="#carouselExampleIndicators"
                                        data-bs-slide-to="{{$key}}" class="active" aria-current="true"
                                        aria-label="Slide {{$key}}"></button>
                                    @endforeach
                                </div>
                                <div class="carousel-inner">
                                    @foreach ($announcement->images as $key=>$image)
                                    @if ($key==0)
                                    <div class="carousel-item active">
                                        <img src="{{$image->getUrl(400,300)}}" class="img-fluid d-block"
                                            alt="{{$key}} {{$announcement->title}}">
                                    </div>
                                    @else
                                    <div class="carousel-item">
                                        <img src="{{$image->getUrl(400,300)}}" class="img-fluid d-block"
                                            alt="{{$key}} {{$announcement->title}}">
                                    </div>
                                    @endif
                                    @endforeach
                                </div>
                            </div>
                            {{-- for each di tutte le img accanto --}}
                        </div>
                    </div>
                </div>
              
            {{-- </div>
        </div>
        </section> --}}

    
   

    </div>







</x-layout>



{{-- <section id="myDiv" class="carousel " aria-label="Gallery">
                                <ol class="carousel__viewport">
                                    @foreach ($announcement->images as $image)
                                    <li id="carousel__slide1" tabindex="0" class="carousel__slide">
                                        <img class="img-fluid photo-img-car" src="{{$image->getUrl(400, 300)}}"
alt="Card image cap">
<div class="carousel__snapper">
    <a href="#carousel__slide4" class="carousel__prev"></a>
    <a href="#carousel__slide2" class="carousel__next"></a>
</div>
</li>
@endforeach
</ol> --}}
{{-- <aside class="carousel__navigation">
                                    <ol class="carousel__navigation-list">
                                        <li class="carousel__navigation-item">
                                            <a href="" class="carousel__navigation-button">Go to slide 1</a>
                                        </li>
                                        <li class="carousel__navigation-item">
                                            <a href="#carousel__slide2" class="carousel__navigation-button">Go to slide
                                                2</a>
                                        </li>
                                        <li class="carousel__navigation-item">
                                            <a href="#carousel__slide3" class="carousel__navigation-button">Go to slide
                                                3</a>
                                        </li>
                                        <li class="carousel__navigation-item">
                                            <a href="#carousel__slide4" class="carousel__navigation-button">Go to slide
                                                4</a>
                                        </li>
                                    </ol>
                                </aside>
                            </section> --}}
