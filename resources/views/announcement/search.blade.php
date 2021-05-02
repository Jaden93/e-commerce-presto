<x-layout>


    @if ($announcements)
    @foreach ($announcements as $announcement)
    <div class="container margin-custom-top">
        <div class="row">
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
    {{-- @foreach ($announcements_all as $announcement1)
        @if ($announcement1->category_id == $category)
                <div class="card-body">
                    <h3 class="card-title">{{$announcement1->title}}</h3>
                    <p class="card-text">{{$announcement1->description}} </p>
                    <p class="card-text">{{$announcement1->created_at->format('Y/m/d')}} </p>
                    <p class="card-text">{{$announcement1->price}}€</p>
                    <p class="card-text">{{$announcement1->user->name}}</p>
                    <p class="card-text">Categoria: <a
                            href="{{route('byCategory', [ $announcement1->category->id, $announcement1->category->name])}}">{{$announcement1->category->name}}</a>
                    </p>

                    <a href="{{route('announcement.show' ,$announcement1)}}" class="btn custom-btn">Dettaglio Annuncio</a>
                </div>
        @endif
    @endforeach --}}
    @endforeach
    @else
    <h3 class="margin-custom-top">non puoi</h3>
    @endif


</x-layout>
