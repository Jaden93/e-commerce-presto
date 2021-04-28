<nav class="navbar nav-custom  navbar-expand-lg bg-main">
    <div class="container-fluid">
        <a class=" navbar-brand text-sec   text-U-brand" href="{{route('homepage')}}"><i class="fas fa-store"></i> Presto</a>
        <button class="navbar-toggler hvr-icon-spin  bg-sec" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas  hvr-icon text-main fa-cog"></i>
        </button>

        <form class="d-flex col-md-4 offset-md-2 offset-3 ">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-sec ms-2" type="submit">Search</button>
        </form>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    @if(Route::is('homepage'))
                    <a class="nav-link active text-sec fw-bold" style="display:none;" aria-current="page" href="{{route('homepage')}}">Home</a>
                    @else
                    <a class="nav-link active text-sec fw-bold" aria-current="page" href="{{route('homepage')}}">Home</a>
                    @endif
                </li>
                @guest
                <li class="nav-item">
                    <a class="nav-link text-sec fw-bold" href="{{route('login_register')}}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-sec fw-bold" href="{{route('login_register')}}">Register</a>
                </li>
                @endguest
                @auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-sec" href="#" id="navbarDropdownMenuLink" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">

                        Ciao, {{Auth::user()->name}}
                    </a>
                    <ul class="dropdown-menu bg-main" aria-labelledby="navbarDropdownMenuLink">
                        <li>
                            <form action="{{route('logout')}}" id="logout" method="POST">
                                @csrf
                            <a class="dropdown-item text-sec" onclick="event.preventDefault(); document.getElementById('logout').submit()">Logout</a>
                        </form>
                        </li>
                    </ul>
                </li>
                @endauth


                <li class="nav-item">
                    @auth
                    @if (Auth::user()->name)
                    <a class="custom-nav  custom-btn btn nav-link" href="{{route('announcement.create')}}">Inserisci annuncio</a>
                    @endauth
                    @else

                    <a class=" custom-nav  custom-btn btn nav-link text-main" href="{{route('login_register')}}">Inserisci annuncio</a>
                    @endif
                </li>
            </ul>
        </div>
    </div>
</nav>
