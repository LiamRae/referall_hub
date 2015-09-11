<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Referall Hub</title>
    <link href="/css/app.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
</head>
<body>
<div class="container">
    @include('partials.nav')
    <div class="container-fluid">
        @yield('content')
    </div>
</div>
@if ( Config::get('app.debug') )
    <script type="text/javascript">
        document.write('<script src="//localhost:35729/livereload.js?snipver=1" type="text/javascript"><\/script>')
    </script>
@endif
<script href="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="/js/all.js"></script>
</body>
</html>