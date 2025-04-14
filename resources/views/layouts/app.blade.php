<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Loja - Code Experts</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <nav class="w-full mb-10 flex justify-between bg-gray-900 px-4">
        <a href="/" class="text-white py-4">Experts Store 12</a>
        <ul>
            <li class="py-4">
                <a href="{{ route('products.index') }}"
                   class="text-white px-6 py-4 hover:bg-purple-800 transition ease-in-out duration-300">Produtos</a>
            </li>
        </ul>
    </nav>
    <div id="container" class="max-w-7xl mx-auto p-6">
        <!-- Aqui será inserido o conteúdo das páginas filhas -->
        @yield('content')
        <!-- Aqui será inserido o conteúdo das páginas filhas -->
    </div>
</body>

</html>