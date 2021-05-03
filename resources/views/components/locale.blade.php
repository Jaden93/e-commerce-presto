<form action="{{route('announcement.locale', $lang)}}" method="POST">
    @csrf
    <button type="submit">Prova click</button>
    <span class="flag-icon flag-icon-{{$nation}}"></span>
    </form>