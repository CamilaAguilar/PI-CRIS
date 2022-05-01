<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    {{-- css do bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    {{-- fonte Roboto google --}}
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
    <link href="./public/css/style.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/e96cb5334f.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>

</head>
<body>    
<header>
        <nav class="navbar navbar-expand-sm text-white shadow-sm" style="background-color: #30092a;">
            <ul  class="navbar-nav">
                    <h1><a class="navbar-brand d-flex" style="color: white; font-size:25px; margin-left:35px;" href="{{url('/')}}">Clube do Vinho</a></h1>
                    <li class="nav-item  d-flex align-items-center px-3"><a class="nav-link" href="{{ route('product.index') }}" style="color:white">Produto</a></li>
                    <li class="nav-item d-flex align-items-center px-3"><a class="nav-link" href="{{ route('category.index') }}"style="color:white">Categoria</a></li>
                    <li class="nav-item d-flex align-items-center px-3"><a class="nav-link" href="{{ route('tag.index') }}" style="color:white">Tags</a></li>
            </ul>
            <span>||</span>
            <ul class="navbar-nav">
                <li class="nav-item d-flex align-items-center px-3"><a class="nav-link" href="{{ route('product.trash') }}" style="color:white">Lixeira de Produto</a></li>
            </ul>
        </nav>
</header>    
    <main class="container mt-2">
    @yield('content')
    </main>
</body>
</html>
