<x-layout>



    
    
    <div class="container_card margin-custom-top col-12">
        <div class="bg-primary row justify-content-center">
                @foreach ($announcements as $announcement)
                @foreach ($announcement->images as $image)
                <div class="card_ad_all col-md-3 col-6 my-3 mx-3">
                    @if($announcement->images)
                    <img class="card_image_all img-fluid" src="{{$image->getUrl(400, 300)}}"
                        alt="Nessun Immagine inserita">
                    @else 
                    <h2>CIAO</h2>
                    @endif
                    <div class="card_text_all">
                        <span class="date">data pubblicazione</span>
                        <h2>Titolo</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, deleniti eveniet dolore esse odio
                            earum odit</p>
                    </div>
                    
                    <div class="card_stats_all">
                        <div class="stat">
                            <div class="value">10</div>
                            <div class="type">Lettura</div>
                        </div>
                        <div class="stat">
                            <div class="value">10</div>
                            <div class="type">Lettura</div>
                        </div>
                        <div class="stat">
                            <div class="value">10</div>
                            <div class="type">Lettura</div>
                        </div>
                    </div>
                </div>
                @endforeach
                @endforeach 
            </div>
        </div>   

                

              
            
     
  
       
</x-layout>
