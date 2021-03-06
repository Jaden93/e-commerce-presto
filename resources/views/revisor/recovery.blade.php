<x-layout>



    @if ($announcement)

    <div class="margin-custom-top container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-title">
                        <p>{{__('ui.number')}} {{ $announcement->id }}</p>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <h3>{{__('ui.user')}}</h3>
                                       <p># {{$announcement->user->id}}</p>
                                         <p>{{__('ui.user')}} {{$announcement->user->name}}</p>
                                        <p>Email: {{$announcement->user->email}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3"><h2>{{__('ui.title')}}</h2></div>
                                    <div class="col-md-10">{{$announcement->title}}</div>
                                </div>

                                <div class="row">
                                    <div class="col-md-3"><h2>{{__('ui.description')}}</h2></div>
                                    <div class="col-md-10">{{$announcement->description}}</div>
                                </div>

                                {{-- <div class="row">
                                    <div class="col-md-3"><h2>Immagini</h2></div>
                                    <div class="col-md-10">{{$announcement->img}}</div>
                                </div> --}}
                        </div>


                    </div>


                </div>
            </div>



        </div>

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
            <p class="p-3 text-light text-center">
                Non ci sono annunci da revisionare, torna pi?? tardi!
            </p>
        </div>
    </div>
    @endif






    </x-layout>
