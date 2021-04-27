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



<div class="container text-center mt-4">
    <div class="row justify-content-center align-items-center">
        <h2 class="display-1">Cerca la categoria</h2>
        @foreach ($categories as $category)
            <div class="col-md-3 custom-card col-lg-2 my-2 mx-1 card col-6">
                <div class="mt-3 card-body p-0">
                    <p class="custom-category">{{$category->name}}</p>
                    <p class="fs-1"><i class="{{$category->icon}}"></i></p>
                </div>
            </div>
        @endforeach
    </div>
</div>


<div class="container">
    <div class="row justify-content-center align-items-center">
        <div class="col-md-10 col-11">
            @foreach ($announcements as $announcement)
            <div class="my-3 card col-md-8 col-12 offset-md-2">
                <div class="row align-items-center justify-content-end">
                    <div class="col-5">
                        <img class="img-fluid"  src="https://www.peperonciniamoci.it/forum/uploads/profile/photo-15386.png" style="width: 200px; height: 200px;"alt="Card image cap">
                    </div>
                    <div class="col-7">
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
                </div>
            @endforeach
        </div>
    </div>

</div>

<hr>

</x-layout>
