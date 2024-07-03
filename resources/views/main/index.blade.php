<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
        <title>{{ config('app.name') }}</title>
    </head>

    <body>
        <div class="d-flex flex-column justify-content-between min-vh-100">

            @include('main.navbar')

            <main class="main flex-grow-1">
                @yield('main')
            </main>

            @include('main.footer')
        </div>
    </body>

</html>
