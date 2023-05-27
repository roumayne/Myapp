<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> {{config('app.name')}} - @yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{asset('assets/app.css')}}">
</head>

<body>
    {{--barre de navigation--}}
    @include('navbar/navbar')
    {{--Tous nos contenus seront affichés ici grâce à @yield--}}
    @yield('content')

    {{--inclusion de nos scripts javascript--}}
    {{-- @include('script') --}}
    <script src="{{asset('assets/lib/jquery/jquery.js')}}"></script>
<script src="{{asset('assets/lib/bootstrap/js/bootstrap.js')}}"></script>

</body>

</html>
