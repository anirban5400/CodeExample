<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Favicon -->
        <link href="{{asset('frontend/img/favicon.ico')}}" rel="icon" />

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Poppins:wght@600;700&display=swap" rel="stylesheet"/>

        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
        <link  href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
        {{-- <link  href="{{asset('frontend/css/bootstrap-icons.css')}}" rel="stylesheet" /> --}}

        <!-- Libraries Stylesheet -->
        <link href="{{asset('frontend/lib/animate/animate.min.css')}}"  rel="stylesheet" />
        <link href="{{asset('frontend/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet"/>

        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet"/>

        <!-- Template Stylesheet -->
        <link href="{{asset('frontend/css/style.css')}}" rel="stylesheet"/>
    </head>
    <body>
        
    @include('front_end.commons.spinner')
    {{-- @include('front_end.commons.toolbar') --}}
    @include('front_end.commons.navbar')
    @yield('content')
    @include('front_end.commons.footer')

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top" ><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    {{-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> --}}
    <script src="{{asset('frontend/js/jquery-3.4.1.min.js')}}"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script> --}}
    <script src="{{asset('frontend/js/bootstrap5.0.0.bundle.min.js')}}"></script>
    <script src="{{asset('frontend/lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('frontend/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('frontend/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('frontend/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('frontend/lib/counterup/counterup.min.js')}}"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenMax.min.js"></script>
    <script src="{{asset('frontend/js/canvas_anim.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('frontend/js/main.js')}}"></script>
    </body>
</html>
