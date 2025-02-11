<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Hotel Booking Website">
    <title>Hotel</title>

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@100..900&family=Roboto+Mono:wght@100..700&display=swap"
        rel="stylesheet">

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">

    <!-- AOS CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">

    <!-- Preloader -->
    <div id="preloader" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-70 z-50">

        <div class="relative flex items-center justify-center">
            <!-- Rotating Container -->
            <div
                class="animate-spin rounded-full h-24 w-24 border-t-4 border-b-4 border-transparent flex items-center justify-center">
                <img src="{{ asset('asset/images/logo.png') }}" alt="Logo" class="h-auto w-auto">
            </div>
        </div>
    </div>

        <!-- Rotating Loader with Logo -->
        <div class="relative flex items-center justify-center">
            <div class="animate-spin rounded-full h-24 w-24 ">
                <img src="{{ asset('asset/images/logo.png') }}" alt="Logo" class="h-16 w-16 object-contain mx-auto">
            </div>
        </div>
    </div>

    <!-- Hide Preloader After Page Load -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            setTimeout(() => {
                document.getElementById("preloader").style.display = "none";
            }, 1000); // Adjust delay as needed
        });
    </script>






    <!-- Tailwind CSS -->
    @vite('resources/css/app.css')

</head>

<body class="bg-gray-50">

    <!-- Include the header component -->
    @include('components.header')

    <!-- Main content section -->
    <main>
        @yield('content')
    </main>

    <!-- Include the footer component -->
    @include('components.footer')



    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <!-- AOS JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" defer></script>

    <script>
        // Initialize AOS
        AOS.init();
    </script>

    <script>
        window.addEventListener("load", function() {
            const preloader = document.getElementById("preloader");
            if (preloader) {
                preloader.style.opacity = "0";
                setTimeout(() => {
                    preloader.style.display = "none";
                }, 500); // Fade out transition time
            }
        });
    </script>

</body>

</html>
