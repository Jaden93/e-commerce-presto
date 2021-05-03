<x-layout>

    <div class="margin-custom-top  custom-detail-card">
        <section class=" product bg-detail ">
            <div class="product__photo">
                <div class="photo-container">
                    <div class="photo-main">
                        <div class="controls">
                            <i class=" custom-font-card">Creato da: {{$announcement->user->name}}</i>
                        </div>
                        <div>
                            <section  id="myDiv" class="carousel " aria-label="Gallery">
                                <ol class="carousel__viewport">
                                    @foreach ($announcement->images as $image)
                                    <li id="carousel__slide1" tabindex="0" class="carousel__slide">
                                        <img class="img-fluid photo-img-car"
                                            src="{{$image->getUrl(400, 300)}}"
                                            alt="Card image cap">
                                        <div class="carousel__snapper">
                                            <a href="#carousel__slide4" class="carousel__prev">Go to last slide</a>
                                            <a href="#carousel__slide2" class="carousel__next">Go to next slide</a>
                                        </div>
                                    </li>
                                    @endforeach
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


            <div class="product__info">
                <div class="title">
                    <h1 class="custom-font-card">{{$announcement->title}}</h1>
                </div>
                <div class="description">
                    <h3 class="custom-font-card  ">Descrizione</h3>
                    <p class="card-text custom-font-card m-3 text-wrap" style="width: 300px;">
                        {{$announcement->description}} </p>

                </div>
                <div class="price">
                    <p class="card-text custom-font-card">{{$announcement->price}} €</p>
                </div>
                <p class="card-text custom-font-card">Categoria: <a
                        href="{{route('byCategory', [ $announcement->category->id, $announcement->category->name])}}">{{$announcement->category->name}}</a>
                </p>
                <p class="card-text custom-font-card">Annuncio creato in data:
                    {{$announcement->created_at->format('Y/m/d')}} </p>

                <button class="buy--btn">Ritorna agli annunci</button>
            </div>
        </section>
    </div>








</x-layout>
