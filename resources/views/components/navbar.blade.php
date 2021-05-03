
<nav class="navbar nav-custom  navbar-expand-lg bg-main">
    <div class="container-fluid">
        <a class=" navbar-brand text-U-brand" href="{{route('homepage')}}"><i class="fas fa-store"></i>
            Presto</a>
        <button id="button-navbar" class="navbar-toggler hvr-icon-spin  bg-sec" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
            aria-label="Toggle navigation">
            <i class="fas  hvr-icon text-main fa-cog"></i>
        </button>

    

        <form method="GET" action="{{route('announcement.search')}}" id="button-navbar" class="offset-md-2  me-auto custom-nav-search btn nav-link ">
            <div class="search">
                <div class="icon"></div>
                <div class="input">
                    <input type="text" placeholder="Cerca il tuo annuncio">
                </div>
            </div>
            {{-- <div class="d-flex custom-navbar-nav">
            <input class="form-control" type="search" placeholder="Cosa stai cercando?" aria-label="Search" name="query">
            <button class="my-auto btn btn-outline-sec " type="submit">Cerca</button> --}}
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
                    <a class="nav-link active fw-bold" aria-current="page"
                        href="{{route('homepage')}}">Home</a>
                    @endif
                </li>
                @guest
                <li class="nav-item">
                    <a class="nav-link fw-bold" href="{{route('login_register')}}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold" href="{{route('login_register')}}">Register</a>
                </li class="" >
                <li class="d-flex">
               
                @endguest
                @auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">

                        Ciao, {{Auth::user()->name}}
                    </a>
                    <ul class="dropdown-menu bg-main" aria-labelledby="navbarDropdownMenuLink">
                        <li>
                            <form action="{{route('logout')}}" id="logout" method="POST">
                                @csrf
                                <a class="dropdown-item color"
                                    onclick="event.preventDefault(); document.getElementById('logout').submit()">Logout</a>
                            </form>
                        </li>
                    </ul>
                </li>
                @endauth

                @auth
                @if (Auth::user()->is_revisor)
                <li class="nav-item">
                    <a class="nav-link fw-bold" href="{{route('revisor.recovery')}}">Recupero</a>
                    </span>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold" href="{{route('revisor.index')}}">
                        Revisor index <span class="badge badge-pill badge-warning">#
                            {{ \App\Models\Announcement::ToBeRevisionedCount()}}</a>
                    </span>
                </li>
                @endif
                @endAuth
                <li class="nav-item">
                    @auth
                    @if (Auth::user()->name)
                    <a class="custom-btn btn text-main " href="{{route('announcement.create')}}">Inserisci
                        annuncio</a>
                    @endauth
                    @else

                    <a class=" custom-btn btn  "
                        href="{{route('login_register')}}"><span id="text-nav-btn">Inserisci annuncio</span> </a>
                    @endif
                </li>
            </ul>
        </div>
    </div>
</nav> 



