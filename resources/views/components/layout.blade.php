<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <meta http-equiv="X-UA-Compatible" content="ie=edge"> --}}

    {{-- font awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />

    {{-- stile --}}
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    {{-- Google Font --}}
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css" integrity="sha512-Cv93isQdFwaKBV+Z4X8kaVBYWHST58Xb/jVOcV9aRsGSArZsgAnFIhMpDoMDcFNoUtday1hdjn0nGp3+KZyyFw==" crossorigin="anonymous" />

{{-- Font MontSerrat --}}
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@400;600&display=swap" rel="stylesheet">
    <title>Presto.it</title>
    </audio>
</head>
<body>
    <x-navbar/>

    {{$slot}}



    <x-footer/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>
{{-- 
<li>
    @include('layout.locale', ['lang' => 'it', 'nation' => 'it'])
</li>


<li>
    @include('layout.locale', ['lang' => 'gb ', 'nation' => 'gb'])
    <li>
    @include('layout.locale', ['lang' => 'esp', 'nation' => 'es'])
</li> --}}
{{-- 
<nav lass="flag-icon">
    Route::post('locale/{locale}',[PublicController])
</nav>
 <form action="{{route('locale',$lang)}}" method="post"></form>
@csrf
<button type="submit">{{__('ui.click')}}
    <span class="flag-icon flag-icon-{{$nation}}"></span>
</button> --}}
{{-- public function locale($locale) {
session()->put('locale', $locale)
return redirect()->back()
} --}}