<nav class="navbar nav-custom  navbar-expand-lg bg-main">
    <div class="container-fluid">
        <a class=" navbar-brand text-U-brand ms-2" href="{{route('homepage')}}"><i class="fas fa-store"></i>
            Presto</a>
        <div class=" d-flex m-3">
            @include('components.locale',['lang'=>'it','nation' => 'it'])
            @include('components.locale',['lang'=>'en','nation' => 'gb'])
            @include('components.locale',['lang'=>'esp','nation' => 'es'])
        </div>
        <button id="button-navbar" class="navbar-toggler hvr-icon-spin ms-auto bg-sec" type="button"
            data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
            aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas  hvr-icon text-main fa-cog"></i>
        </button>

        <form method="GET" action="{{route('announcement.search')}}" id="search-navbar"
            class="offset-md-2  me-auto custom-nav-search btn nav-link ">
            {{-- <div class="search">
                    <div class="icon"></div>
                    <div class="input">
                        <input type="text" placeholder="Cerca il tuo annuncio">
                    </div>
                </div> --}}
            <div class="d-flex custom-navbar-nav">
                <input class="form-control w-75" type="search" placeholder="{{__('ui.searchPlaceholder')}}" aria-label="Search"
                    name="query">
                <button class="my-auto btn btn-outline-sec " type="submit">{{__('ui.searchButton')}}</button>
            </div>
        </form>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">

            <ul class="align-items-center navbar-nav ms-auto">
                <li>
                </li>
                <li class="nav-item">
                    @if(Route::is('homepage'))
                    <a class="nav-link active fw-bold" style="display:none;" aria-current="page"
                        href="{{route('homepage')}}">Home</a>
                    @else
                    <a class="nav-link active fw-bold" aria-current="page" href="{{route('homepage')}}">Home</a>
                    @endif
                </li>
                @guest
                <li class="nav-item">
                    <a class="nav-link fw-bold" href="{{route('login_register')}}">{{__('ui.login')}}</a>

                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold" href="{{route('login_register')}}">{{__('ui.register')}}</a>
                </li class="">
                <li class="d-flex">

                    @endguest
                    @auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">

                        {{__('ui.hello')}}, {{Auth::user()->name}}
                    </a>
                    <ul class="dropdown-menu bg-main" aria-labelledby="navbarDropdownMenuLink">
                        <li>
                            <form action="{{route('logout')}}" id="logout" method="POST">
                                @csrf
                                <a class="dropdown-item color"
                                    onclick="event.preventDefault(); document.getElementById('logout').submit()">{{__('ui.logout')}}</a>
                            </form>
                        </li>
                        <li class="custom-home-color dropdown-item">
                            <a class="nav-link fw-bold" href="{{route('revisor.recovery')}}">{{__('ui.recupero')}}</a>
                            </span>
                        </li>
                        <li class="custom-home-color dropdown-item nav-item">
                            <a class="nav-link fw-bold" href="{{route('revisor.index')}}">
                                Revisor index <span class="badge badge-pill badge-warning">#
                                    {{ \App\Models\Announcement::ToBeRevisionedCount()}}</a>
                            </span>
                        </li>
                    </ul>
                </li>
            </ul>
            </li>
            @endauth

            @auth
            {{-- @if (Auth::user()->is_revisor)
            <li class="nav-item">
                <a class="nav-link fw-bold" href="{{route('revisor.recovery')}}">{{__('ui.recupero')}}</a>
            </span>
            </li>
            <li class="nav-item">
                <a class="nav-link fw-bold" href="{{route('revisor.index')}}">
                    Revisor index <span class="badge badge-pill badge-warning">#
                        {{ \App\Models\Announcement::ToBeRevisionedCount()}}</a>
                </span>
            </li>
            @endif --}}
            @endAuth
            <li class="nav-item text-center">
                @auth
                @if (Auth::user()->name)
                <a class="custom-btn btn text-main"
                    href="{{route('announcement.create')}}">{{__('ui.announce')}}
                </a>
                @endauth
                @else

                <a class=" custom-btn btn me-2 " href="{{route('login_register')}}"><span
                        id="text-nav-btn">{{__('ui.announce')}}</span> </a>
                @endif
            </li>
            <li>

                <form method="GET" action="{{route('announcement.search')}}" id="search-navbar1"
                    class="offset-md-2 me-auto custom-nav-search btn nav-link ">
                    {{-- <div class="search">
                        <div class="icon"></div>
                        <div class="input">
                            <input type="text" placeholder="Cerca il tuo annuncio">
                        </div>
                    </div> --}}
                    <div class="d-flex custom-navbar-nav">
                        <input class="form-control w-75" type="search" placeholder="{{__('ui.searchPlaceholder')}}"
                            aria-label="Search" name="query">
                        <button class="my-auto btn btn-outline-sec " type="submit">{{__('ui.searchButton')}}</button>
                    </div>
                </form>
            </li>
            </ul>
        </div>
    </div>
</nav>
