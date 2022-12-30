<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<title>@yield('title') Shop @show
</title>

<!-- Fonts -->
<link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link href="styles/main.css" rel="stylesheet">
</head>

<body>
<header>
    @include('partials/_header-nav')
</header>

<main>
    @yield('content')
</main>

<footer class="bg-dark text-white py-2 mt-auto">
    <p class="text-center m-0">&copy;&nbsp;2023</p>
</footer>
</body>

</html>
