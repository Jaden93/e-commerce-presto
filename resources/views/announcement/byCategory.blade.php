<x-layout>

    <h2 class="margin-custom-top text-center display-1">{{__('ui.byCategoryHead')}}</h2>
    <div class="row">
        @foreach ($announcements as $announcement)

        @if ($announcement->is_accepted == 1)
        <div class="card col-8">
            <img class="img-fluid"  src="https://www.peperonciniamoci.it/forum/uploads/profile/photo-15386.png" style="width: 200px; height: 200px;"alt="Card image cap">
            <div class="card-body">
            <h3 class="card-title">{{$announcement->title}}</h3>
            <p class="card-text">{{$announcement->description}} </p>
            <p class="card-text">{{$announcement->created_at->format('Y/m/d')}} </p>
            <p class="card-text">{{$announcement->price}}€</p>
            <p class="card-text">{{$announcement->user->name}}</p>
            <p class="card-text">{{__('ui.singleCat')}} <a href="{{route('byCategory', [ $announcement->category->id, $announcement->category->name])}}">{{$announcement->category->name}}</a></p>
            
            <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
        @endif
     
        @endforeach
    </div>


</x-layout>