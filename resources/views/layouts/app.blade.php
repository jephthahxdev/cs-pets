<!doctype html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" /> @vite('resources/css/app.css')
    <!-- Line Awesome CSS -->
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <!-- Image Comparison Slider CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/img-comparison-slider@8/dist/styles.css" />
    {{-- <link rel="shortcut icon" href="{{ asset('images/favicon_update.png') }}" type="image/x-icon" /> --}}
    <title>@yield('title') | {{ config('app.name') }}</title>
</head>

<body>
    @yield('content')
    
    <!-- Image Comparison Slider JavaScript -->
    <script defer src="https://cdn.jsdelivr.net/npm/img-comparison-slider@8/dist/index.js"></script>
</body>

</html>
