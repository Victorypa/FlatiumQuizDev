<!DOCTYPE html>
<html lang="ru" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Flatium</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        @if (env('APP_ENV') === 'production')
            <link rel="shortcut icon" href="{{ secure_asset('images/favicon.ico') }}" type="image/x-icon" />
        @else
            <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon" />
        @endif
        <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

        @if (env('APP_ENV') === 'production')
            <link rel="stylesheet" href="{{ secure_asset('css/app.css') }}">
        @else
            <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        @endif


        <script>
            window.App = {!! json_encode([
                'csrfToken' => csrf_token()
            ]) !!};
        </script>

        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-MPTLKSR');</script>
    </head>
    <body>
        <div id="app">
            @yield('content')
        </div>

        @if (env('APP_ENV') === 'production')
            <script src="{{ secure_asset('js/app.js') }}"></script>
        @else
            <script src="{{ asset('js/app.js') }}"></script>
        @endif

        @yield('scripts')

        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MPTLKSR"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    </body>
</html>
