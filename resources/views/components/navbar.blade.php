<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="custom-brand navbar-brand" href="#">Presto</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <form class="d-flex mx-auto">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('homepage')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('login_register')}}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('login_register')}}">Registrer</a>
                </li>

                </li>
                @auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                   
                        Ciao, {{Auth::user()->name}}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li>
                            <form action="{{route('logout')}}" id="logout" method="POST">
                                @csrf
                            <a class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout').submit()">Logout</a>
                        </form>
                        </li>
                    </ul>
                </li>
                @endauth
           

                <li class="nav-item">
                    @auth
                    @if (Auth::user()->name)
                    <a class="custom-btn btn nav-link" href="{{route('announcement.create')}}">Inserisci annuncio</a>   
                    @endauth
                    @else
                    
                    <a class="custom-btn btn nav-link" href="{{route('login_register')}}">Inserisci annuncio</a>
                    @endif
                </li>
            </ul>
        </div>
    </div>
</nav>
