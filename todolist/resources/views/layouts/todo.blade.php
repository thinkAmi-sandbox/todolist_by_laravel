<!DOCTYPE html>

<html lang="{{ Config::get('app.locale') }}">
<head>
    <meta charset="UTF-8">
    <title>
        @yield('title')
    </title>
    <link rel="stylesheet" href="{{ asset('/css/todo.css') }}">
</head>

<body>
<main class="container">
    @yield('content')
</main>
</body>
</html>