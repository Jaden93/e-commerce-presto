<div class="row align-items-center mx-2">
<form action="{{route('announcement.locale', $lang)}}" method="POST">
    @csrf
    <button type="submit"  style="outline:none; border:none; display:inline-grid; padding:0px"><span class="fs-4 flag-icon flag-icon-{{$nation}}"></span></button>
    </form>
</div>
