<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Clube do Vinho</title>
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/e96cb5334f.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    @yield('css')
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-sm text-white shadow-sm" style="background-color: #30092a;">
            <div id="menu" class="container">
                <h1><a class="navbar-brand d-flex" style="color: white; font-size:25px;" href="{{url('/')}}">Clube do Vinho</a></h1>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon" style="background-color: white; border-color: #000;"><i class="fa-solid fa-bars"></i></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <form class="d-flex w-50" action="{{ route('search') }}">
                        @csrf
                        <input type="text" class="form-control" name="search" id="search">
                        <button class="ms-2 btn btn-secondary" style="min-width: 95px;"><i class="fas fa-search  me-1"></i>Buscar</button>
                    </form>
                    <div class="navbar-nav ms-auto">
                        @if(Auth()->user())
                        <a class="nav-link" href="{{ route('user.edit') }}">{{Auth()->user()->name}}</a>
                        <span></span>
                        <a class="nav-link" style="color: white" href="{{ route('cart.show') }}"><i class="fas fa-shopping-cart"></i> Carrinho ({{ \App\Models\Cart::count() }})</a>
                        <a class="nav-link" style="color: white" href="{{ route('order.show') }}">Pedidos</a>
                        <form method="POST" action="{{ route('logout') }}" class="d-flex">
                            @csrf
                            <button type="submit" style="border: 0px;background: none; color: white;">Deslogar</button>
                        </form>
                        @else
                        <a class="nav-link" href="{{ route('register')}}">Register</a>
                        <a class="nav-link" href="{{ route('login')}}">Login</a>
                        @endif
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main class="container-fluid" style="min-height: calc(100vh - 362px)">
        @if(session()->has('success'))
        <div class="alert alert-success" role="alert">{{ session()->get('success') }}</div>
        @endif
        @if(session()->has('error'))
        <div class="alert alert-danger" role="alert">{{ session()->get('error') }}</div>
        @endif
        @yield('banner')
        @yield('content')
    </main>

    <footer class="container-fluid text-white p-1 text-center mt-5" style="background-color: #30092a;">      
        <div class="row my-5" style="color: white; width: 100%">
            <div class="col-6">
                <h2>Localização:</h2>
                <address>
                    Avenida Paulista, nº 3400 <br>
                    Sao Paulo, SP <br>
                    Cep: 98765-432 <br>
                    telefone: (11)9999-9999 <br>
                    <a href="https://api.whatsapp.com/send?phone=5511999999999&text=Oi, gostaria de mais informações sobre os produtos!." class="float" target="_blank">
                        <i class="fab fa-whatsapp-square fa-2x mt-2" style="color: #25D366;"></i>
                    </a>
                </address>
            </div>
            <div class="col-6">
                <h2>Horario de funcionamento</h2>
                <ul class="list-unstyled">
                    <li>Segunda a Sexta das 9:00h as 18:00h</li>
                    <li>Sabado das 10:00h as 14:00h</li>
                </ul>
                <h3>Redes Sociais</h3>
                <a href="https://facebook.com.br"><i class="fab fa-facebook-square fa-2x text-decoration-none color: #3b5998;"></i></a>
                <a href="https://twitter.com.br"><i class="fab fa-twitter-square fa-2x" style="color: #00aced;"></i></a>
                <a href="https://instagram.com.br"><i class="fab fa-instagram-square fa-2x" style="color: pink;"></i></a>
            </div>
        </div>
        <p class="text-muted mx-auto text-center">
                &copy; Clube do Vinho 2022 - Todos os direitos reservados.
        </p>
    </footer>
</body>

</html>