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
<div class="container">
<h2 class=" text-center display-1">Cerca la categoria</h2>
    <div class="row">
        <div class="card col-3">
            {{-- <img class="card-img-top" src="..." alt="Card image cap"> --}}
            <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>

</div>

</x-layout>