<!doctype html>
<html lang="de">
<head>

    <title>SaeDemo</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex,nofollow">

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

</head>
<body>

    @include('partials.navbar')

    <div class="container">

        @yield('content')

    </div>

</body>
</html>