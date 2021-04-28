<x-layout>

    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-10 col-11">
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
                </div>
        </div>

    </div>



</x-layout>
