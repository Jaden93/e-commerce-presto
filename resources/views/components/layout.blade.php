<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
{{-- font awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    {{-- stile --}}
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
{{-- Font MontSerrat --}}
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@400;600&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <x-navbar/>

    {{$slot}}



    <x-footer/>
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>
