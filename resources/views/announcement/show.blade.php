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
                                    </aside> --}}
                            </section>
                        </div>
                     
                    </div>
<<<<<<< HEAD
=======
                    <section class="carousel" aria-label="Gallery">
                        <ol class="carousel__viewport">
                            <li id="carousel__slide1" tabindex="0" class="carousel__slide">
                                <img class="img-fluid photo-img"
                                src="data:image/jpeg;base64,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"

                                alt="Card image cap">
                                <div class="carousel__snapper">
                                    <a href="#carousel__slide4" class="carousel__prev">Go to last slide</a>
                                    <a href="#carousel__slide2" class="carousel__next">Go to next slide</a>
                                </div>
                            </li>
                            <li id="carousel__slide2" tabindex="0" class="carousel__slide">
                                <img class="img-fluid photo-img "
                                src="https://www.peperonciniamoci.it/forum/uploads/profile/photo-15386.png"
                                style="width: 300px; height: 300px;" alt="Card image cap">

                                <div class="carousel__snapper"></div>
                                <a href="#carousel__slide1" class="carousel__prev">Go to previous slide</a>
                                <a href="#carousel__slide3" class="carousel__next">Go to next slide</a>
                            </li>
                            <li id="carousel__slide3" tabindex="0" class="carousel__slide">
                                <img class="img-fluid photo-img "
                                src="https://www.peperonciniamoci.it/forum/uploads/profile/photo-15386.png"
                                style="width: 300px; height: 300px;" alt="Card image cap">
>>>>>>> 4ccddb75e97116819a774474093b2ca2d2654566

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
