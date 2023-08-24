<!DOCTYPE html>
<html class="scroll-smooth" lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>{{ Str::title($title) }} | UBSI</title>
</head>

<body>
    @yield('container')
    <div class="mx-5 relative">
        @yield('secContainer')
    </div>
    @yield('footer')
</body>

</html>
