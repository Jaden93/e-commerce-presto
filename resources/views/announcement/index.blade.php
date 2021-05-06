<x-layout>



    @if (session('status')) 
        <div class="text-center py-3 custom-status margin-custom-top">
            <h3>Il tuo annuncio è stato creato... è in fase di revisione!</h3>
        </div>    
    @endif
    
    <div class="container_card margin-custom-top col-12">
        <div class="row justify-content-center">
                @foreach ($announcements as $announcement)
                @if($announcement->is_accepted)

                <div class="custom_ad_bg card_ad_all col-md-3 col-6 my-3 mx-3">
                    
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel"
                            data-bs-interval="false">
                            {{-- <div class="carousel-indicators">
                                @foreach ($announcement->images as $key=>$image)
                                <button type="button" data-bs-target="#carouselExampleIndicators"
                                    data-bs-slide-to="{{$key}}" class="active" aria-current="true"
                                    aria-label="Slide {{$key}}"></button>
                                @endforeach
                            </div> --}}
                            <div class="carousel-inner">
                                @foreach ($announcement->images as $key=>$image)
                                @if ($key==0)
                                <div class="card_image_all  carousel-item active">
                                    <img src="{{$image->getUrl(400,300)}}" class="card_image_all img-fluid d-block w-100"
                                        alt="{{$key}} {{$announcement->title}}">
                                </div>
                                @else
                                <div class="card_image_all carousel-item">
                                    <img src="{{$image->getUrl(400,300)}}" class="card_image_all img-fluid d-block w-100"
                                        alt="{{$key}} {{$announcement->title}}">
                                </div>
                                @endif
                                @endforeach
                            </div>
                        </div>                
                    <div class="card_text_all">
                        <span class="date">{{$announcement->created_at->format('Y/m/d')}}</span>
                        <h2 class="text-light">{{$announcement->title}}</h2>
                        {{-- <p class="overflow-text">{{$announcement->description}}</p> --}}
                    </div>
                    
                    <div class="card_stats_all">
                        <div class="stat">
                            <div class="value">Prezzo</div>
                            <div class="type">{{$announcement->price}} $</div>
                        </div>
                        <div class="stat">
                            <div class="value"></div>
                            <div class="type"><a class="bg-primary p-2 rounded text-dark text-decoration-none"href="{{route('announcement.show', compact('announcement'))}}">Dettaglio</a></div>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
        </div>   

                

              
            
     
  
       
</x-layout>
