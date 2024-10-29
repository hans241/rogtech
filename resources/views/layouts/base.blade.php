<!-- resources/views/layouts/blade.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="shortcut icon" href="img/Favicone1.png" type="image/x-icon"/>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="bg-white">
    <header class="fixed inset-x-0 top-0 z-50">
        @component('components.nav')
        @endcomponent
    </header>

    <!-- Section audio -->
    <audio id="background-audio" autoplay loop>
        <source src="audio/background-music2.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
    </audio>

    @yield('content')

</div>

</body>
@component('components.footer')
@endcomponent
</html>

