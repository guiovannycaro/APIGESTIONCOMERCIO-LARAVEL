<html>

<head>
    <title>Ejemplo de atributo Href</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <script src=" {{ asset('js/bootstrap.bundle.min.js') }} "></script>
</head>

<body>
    <main style="width: 90%;margin: 0% 5% 0% 5% ;background-color: #120aab;">

        <nav class="navbar navbar-expand-lg navbar-light bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand "style="color:#ffffff" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" style="color:#ffffff"
                                href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"style="color:#ffffff" href="{{ route('usuarios.index') }}">Usuarios</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" style="color:#ffffff" aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu bg-primary" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#"><b>Action</b></a></li>
                                <li><a class="dropdown-item" href="#"><b>Action</b></a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#"><b>Action</b></a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" style="color:#ffffff"
                                aria-disabled="true">Disabled</a>
                        </li>
                    </ul>
                    <form class="d-flex" action="{{ route('auth.logout') }}" method="Post">
                        @csrf
                        <button class="btn btn-primary btn-block" type="submit">Cerrar Sesion</button>
                    </form>
                    <p>&nbsp;</p>
                    <form class="d-flex" action="" method="Post">
                        @csrf
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </main>

    @yield('content')

</body>

</html>
