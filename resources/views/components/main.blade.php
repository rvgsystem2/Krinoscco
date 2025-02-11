<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Hotel Booking Website">
    <title>Hotel</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@100..900&family=Roboto+Mono:wght@100..700&display=swap"
        rel="stylesheet">

    <!-- Swiper CSS (For Carousel/Slider) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- AOS (Animate on Scroll) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <!-- Tailwind CSS -->
    @vite('resources/css/app.css')

    <!-- Global Styles -->
    <style>
        html, body {
            overflow-x: hidden; /* Prevent horizontal scroll */
            overflow-y: auto; /* Allow vertical scrolling */
        }
    </style>
</head>

<body class="bg-gray-50">

    <!-- Preloader -->
    <div id="preloader" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-70 z-50">
        <div class="relative flex items-center justify-center">
            <!-- Rotating Loader -->
            <div class="animate-spin rounded-full h-24 w-24 border-t-4 border-b-4 border-transparent flex items-center justify-center">
                <img src="{{ asset('asset/images/logo.png') }}" alt="Logo" class="h-auto w-auto">
            </div>
        </div>
    </div>

    <!-- Header -->
    @include('components.header')

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    @include('components.footer')

    <!-- Swiper JS (For Sliders) -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <!-- AOS (Animate on Scroll) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" defer></script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Initialize AOS animations
            AOS.init();

            // Preloader Fade Out Effect
            const preloader = document.getElementById("preloader");
            if (preloader) {
                window.addEventListener("load", function () {
                    preloader.style.opacity = "0";
                    setTimeout(() => {
                        preloader.style.display = "none";
                    }, 500); // Adjust fade-out transition time
                });
            }
        });
    </script>

</body>
</html>
