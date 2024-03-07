<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="UTF-8">
        <title>Learning Management System Hacklab</title>
        @vite(['resources/css/app.css', 'resources/js/app.js']) 
    </head>
    <body class="bg-hacklab_background pt-10">
        @include('sections.header')
        @yield('content')
        @include('sections.footer')
    </body>
</html>