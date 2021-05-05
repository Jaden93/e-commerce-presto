<x-layout>



    @if ($announcement)

    <div class="margin-custom-top container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-title">
                        <p class="fw-bold fs-2 text-center">Annuncio Numero {{ $announcement->id }}</p>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <span class="fs-4 fw-bold">ID Utente: </span>
                                    <p class="fs-5">#{{$announcement->user->id}}</p>
                                    <span class="fs-4 fw-bold">Utente: </span>
                                    <p class="fs-5">{{$announcement->user->name}}</p>
                                    <span class="fs-4 fw-bold">Email: </span>
                                    <p class="fs-5">{{$announcement->user->email}}</p>
                                </div>
                                <div class="col-md-6">
                                    <span class="fs-4 fw-bold">Titolo </span>
                                    <p class="fs-5">{{$announcement->title}}</p>
                                    <span class="fs-4 fw-bold">Descrizione </span>
                                    <p class="fs-5">{{$announcement->description}}</p>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="margin-custom-top container">
        @foreach ($announcement->images as $image)
        <div class="my-4 p-5 mx-auto custom-row-label">
            <div class="row">
                <div class="col-lg-6 text-xs-start text-sm-center">
                    <img class="" src="{{$image->getUrl(400, 300)}}" alt="Card image cap">
                </div>
                    <div class="col-lg-3 mt-3 col-6">
                        <h2>Filtri</h2>
                        <p class="my-0"><span class="fw-bolder fs-5"> ADULT:</span> {{$image->adult}} </p>
                        <p class="my-0"><span class="fw-bolder fs-5">SPOOF:</span> {{$image->spoof}}</p>
                        <p class="my-0"><span class="fw-bolder fs-5">MEDICAL:</span> {{$image->medical}}</p>
                        <p class="my-0"><span class="fw-bolder fs-5">VIOLENCE:</span> {{$image->violence}}</p>
                        <p class="my-0"><span class="fw-bolder fs-5">RACY:</span> {{$image->racy}}</p>
                    </div>
                    <div class="col-lg-3 mt-3 col-6">
                        <h2 class="text-center">Labels</h2>
                        <ul class="cstm-label">
                            @if ($image->labels)
                            @foreach ($image->labels as $label)
                            <li class="text-center fw-bold">{{$label}}</li>
                            @endforeach
                            @endif
                        </ul>
                    </div>
            </div>

        </div>
            @endforeach
    </div>








    <div class="row  justify-content-around mt-5">
        <div class="col-md-6">

        </div>
        <div class="col-md-6">

        </div>
    </div>


    <div class="row justify-content-around text-center">
        <div class="col-md-4">
            <form action="{{route('revisor.reject', $announcement->id)}}" method="POST">
                @csrf
                <button class="p-3 btn btn-danger" type="submit">Reject</button>
            </form>
        </div>
        <div class="col-md-4">
            <form action="{{route('revisor.accept', $announcement->id)}}" method="POST">
                @csrf
                <button class="p-3 btn btn-success" type="submit">Accept</button>
            </form>
        </div>
    </div>

    @else
    <div class="margin-custom-top flex-wrapper">
        <div class="bg-success">
            <h2 class=" p-3 text-light text-center">
                Non ci sono annunci da revisionare, torna piu' tardi!
                <img src="https://www.nowork.com/image/cache/catalog/vfc-logo-300x300.png" alt="">
            </h2>
       </div>
    </div>
    @endif






</x-layout>