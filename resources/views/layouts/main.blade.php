<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Uptilt :: Quotes</title>

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body>

@include('layouts.partials.mobile-nav')

<div id="panel">
    @include('layouts.partials.nav')
    <div id="app">
        @yield('content')
    </div>
</div>



<!-- Compiled Webpack JS -->
<script src="{{ asset('js/app.js') }}"></script>

<script>
</script>
</body>
</html>