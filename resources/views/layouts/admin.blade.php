<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Insyte Ufa - ПУ</title>
        
        <link rel="stylesheet" href="/css/bootstrap.min.css">
        @vite('resources/css/admin.css')
    </head>
    <body class="admin_panel" style="min-height: 100vh;">
        @auth
            <div id="admin"></div>
        @endauth

        @guest
            <main>
                @yield('content')
            </main>
        @endguest
        
        @if(Route::currentRouteName() != 'login')
            @vite('resources/js/admin.js')
        @endif
    </body>
</html>