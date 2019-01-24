<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Flatium</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <script>
            window.App = {!! json_encode([
                'csrfToken' => csrf_token(),
                'user' => Auth::user(),
                'signedIn' => Auth::check(),
            ]) !!};
        </script>
    </head>
    <body>
        <div id="app">
            @yield('content')
        </div>

        <script src="{{ asset('js/app.js') }}"></script>
        @yield('scripts')
    </body>
</html>
