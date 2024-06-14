{{-- doctype --}}
<!DOCTYPE html>
<html lang="nl">

{{-- header --}}

<head>
    <meta charset="UTF-8">
    <title>Learning Management System Hacklab</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

{{-- body --}}

<body class="bg-hacklab_background pt-24">
    <header class="relative z-0 bg-no-repeat bg-center bg-cover"
        style="background-image: url('/storage/banners/sigmund-Fa9b57hffnM-unsplash.jpg');">
    </header>
    @include('sections.header')
    @yield('content')
    @include('sections.footer')
</body>

</html>
