<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Tailwind CSS --}}
    @vite('resources/css/app.css')

    {{-- Native CSS --}}
    @vite('public/css/style.css')

    <title>Masuk</title>

</head>
<body>

    {{-- Content --}}
    @yield('content')

    {{-- JavaScript --}}
    <script src="{{ asset('js/jquery/jquery.js') }}"></script>
    @vite('public/js/script.js')

</body>
</html>
