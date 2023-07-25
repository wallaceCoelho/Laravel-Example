<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>{{ config('app.name')}} :: @yield('title')</title>
</head>
<body>
    <header class="container-fluid" style="background-color: #01403A;">
        <h1 class="text-center text-light">Prodigy</h1>
    </header>

    <main class="container-fluid">
        @yield('content')
    </main>

    <footer class="footer text-center bg-primary mb-0"
            style="
            display: flex;
            flex-direction: column;
            bottom: 0;">
        <p class="text-light mt-3">Desenvolvedor Back-end - wacoelho.dev@gmail.com - 2023</p>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
