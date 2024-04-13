<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>App Banco</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- favicons -->
    <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon.ico">
    <!-- estilos personalizados -->
    <style>
        .bg-custom-light {
            background-color: #e6e6e6;
        }
    </style>
</head>

<body>
    {{-- <h1>Hello, Bank!</h1> --}}
    <nav class="navbar navbar-expand-lg   bg-custom-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">App Banco</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a class="nav-link" href="/afiliado">Afiliado</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/empleado">Empleado</a>
                    </li>
                    <!-- NAVBAR DROPDOWN -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Transacciones
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item nav-link disabled" href="/depositos">Depositos</a></li>
                            <li><a class="dropdown-item nav-link disabled" href="/retiros">Retiros</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Logout</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    
    <div class="px-4 py-1 my-0 text-center">
        <h1 class="display-5 fw-bold text-body-emphasis">@yield('titulo' , 'Hello, Bank!')</h1>
        <div class="col-lg-6 mx-auto">
        </div>
    </div>
    
    @yield('hijos')


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
