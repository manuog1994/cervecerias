<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid">
        <a class="my-nav navbar-brand text-center fs-3" href="/"><i class="fas fa-beer"></i> Cervecerias<span>Website</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav fs-4 me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="my-nav nav-link {{request()->routeIs('home') ? 'active' : ''}}" aria-current="page"
                        href="{{'/'}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="my-nav nav-link {{request()->routeIs('cervecerias') ? 'active' : ''}}"
                        href="{{route('cervecerias')}}">Cervecerías</a>
                </li>
                <li class="nav-item">
                    <a class="my-nav nav-link {{request()->routeIs('contacto') ? 'active' : ''}}"
                        href="{{route('contacto')}}">Contacto</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="my-nav nav-link dropdown-toggle {{request()->routeIs('login', 'register') ? 'active' : ''}}" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Perfil</a>
                    <ul class="dropdown-menu text-center" aria-labelledby="navbarDropdown">
                        <!-- si no estoy conectado -->
                        @guest
                        <li><a class="dropdown-item" href="{{route('register')}}">Registrar</a></li>
                        <li><a class="dropdown-item" href="{{route('login')}}">Iniciar Sesión</a></li>
                        @endguest
                        <!-- si estoy conectado -->
                        @auth
                        <li>
                            </li>
                            <li class="text-center">Hola <span>{{Request()->user()->name}}</span></li>
                            <li class="text-center"><a class="dropdown-item" href="{{route('cervecerias.add')}}">Añadir Cerveceria</a></li>
                            <hr class="dropdown-divider">
                        <form action="/logout" method="POST">
                            @csrf
                            <button type="submit" class="dropdown-item">Logout</button>
                        </form>
                        @endauth
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

