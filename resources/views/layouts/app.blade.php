<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'App')</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 2rem; }
        table { width: 100%; border-collapse: collapse; margin-top: 1rem; }
        th, td { border: 1px solid #ccc; padding: 0.5rem; text-align: left; }
        th { background-color: #f2f2f2; }
        a { margin-right: 0.5rem; }
        form { display: inline; }
        input, select, textarea { margin-bottom: 1rem; display: block; width: 100%; max-width: 400px; padding: 0.4rem; }
        button { padding: 0.5rem 1rem; }
    </style>
</head>
<body>

    <nav>
        <a href="{{ route('products.index') }}">Productos</a>
        <a href="{{ route('categories.index') }}">Categorías</a>
    </nav>

    <hr>

    @yield('content')

</body>
</html>
