{{-- <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"> --}}


<x-layout>
 @if (session('status'))
    <div class="alert alert-success">
    {{session('status')}}
</div>
 @endif

 <a href="#" class="btn hvr-hollow">Hollow</a>
 
 <div class="container-fluid  me-2">

<h2 class=" text-center display-1">Cerca la categoria</h2>

    <div class="row">
    @foreach ($categories as $category)
        <div class="  col-md-3 my-4 card col-12">
            <img class="img-fluid"  src="" style="width: 200px; height: 200px;"alt="Card image cap">
            <div class="card-body">
            <a href=""><i class="{{$category->icon}}"></i></a>
            </div>
        </div>
        @endforeach
    </div>

   


    <div class="row">
        @foreach ($announcements as $announcement)
            <div class="my-3 card col-md-8 col-12 offset-md-2">
            <img class="img-fluid"  src="https://www.peperonciniamoci.it/forum/uploads/profile/photo-15386.png" style="width: 200px; height: 200px;"alt="Card image cap">
            <div class="card-body">
            <h3 class="card-title">{{$announcement->title}}</h3>
            <p class="card-text">{{$announcement->description}} </p>
            <p class="card-text">{{$announcement->created_at->format('Y/m/d')}} </p>
            <p class="card-text">{{$announcement->price}}€</p>
            <p class="card-text">{{$announcement->user->name}}</p>
            <p class="card-text">Categoria: <a href="{{route('byCategory', [ $announcement->category->id, $announcement->category->name])}}">{{$announcement->category->name}}</a></p>

            <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
        @endforeach
    </div>

</div>

</x-layout>
