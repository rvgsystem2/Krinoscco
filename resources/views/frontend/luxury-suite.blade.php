@extends('components.main')

@section('content')
    <style>
        /* Animated Gradient Effect */
        .animated-gradient {
            background: linear-gradient(270deg, #1a1a2e, #16213e, #8B4513);
            background-size: 600% 600%;
            animation: gradientShift 15s ease infinite;
        }

        @keyframes gradientShift {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }
    </style>

    <!-- Hero Section -->
    <div class="relative bg-gradient-to-b from-[#2c3e50] to-[#8B4513] text-white py-20 px-4">
        <!-- Overlay Background (Optional) -->
        <div class="absolute inset-0 bg-black opacity-50"></div>

        <!-- Glass Effect Content -->
        <div class="absolute inset-0 bg-white bg-opacity-20 backdrop-blur-md z-0"></div>

        <!-- Content Inside the Hero Section -->
        <div class="relative container mx-auto text-center z-10">
            <!-- Title with Enhanced Focus -->
            <h1 class="text-5xl font-extrabold uppercase leading-tight mb-4 text-[#ecf0f1] drop-shadow-lg">
                Luxury Suite
            </h1>

            <!-- Description Text with Focus -->
            <p class="text-lg font-medium mb-6 text-[#bdc3c7] opacity-90 tracking-wide max-w-xl mx-auto">
                We’d love to hear from you! Reach out to us anytime.
            </p>

            <!-- Stylish Divider -->
            <div class="w-32 h-1 bg-gradient-to-r from-[#e67e22] to-[#f39c12] mx-auto rounded-full"></div>
        </div>
    </div>

    <!-- Delux Room Section -->
    <section class="relative py-32 overflow-hidden bg-gradient-to-b from-white to-gray-50">
        <!-- Decorative Elements -->
        <div
            class="absolute top-0 left-0 w-64 h-64 bg-[#8B4513] opacity-5 rounded-full blur-3xl -translate-x-1/2 -translate-y-1/2">
        </div>
        <div
            class="absolute bottom-0 right-0 w-96 h-96 bg-[#1a1a2e] opacity-5 rounded-full blur-3xl translate-x-1/2 translate-y-1/2">
        </div>

        <div class="container mx-auto px-4">
            <div class="flex flex-col lg:flex-row items-center gap-16 relative">
                <!-- Image Section with Multiple Images -->
                <div class="w-full lg:w-1/2 space-y-6 group">
                    <!-- Main Image with Hover Effect -->
                    <div
                        class="relative overflow-hidden rounded-2xl shadow-2xl transform transition-transform duration-500 hover:scale-[1.02]">
                        <div class="absolute inset-0 bg-gradient-to-r from-[#1a1a2e]/20 to-transparent z-10"></div>
                        <img id="main-image" src="{{ asset('asset/images/DSC_4100-1-scaled.jpg') }}"
                            alt="Hotel Krinoscco Main"
                            class="w-full h-[500px] object-cover transform transition-transform duration-700 hover:scale-110" />
                        <!-- Floating Badge -->
                        <div
                            class="absolute top-6 right-6 bg-white/90 backdrop-blur-sm px-6 py-3 rounded-full shadow-lg z-20">
                            <span class="text-[#1a1a2e] font-semibold">Est. 2024</span>
                        </div>
                    </div>

                    <!-- Image Gallery -->
                    <div class="grid grid-cols-3 gap-4 transition-opacity duration-500">
                        <div class="overflow-hidden rounded-xl shadow-lg">
                            <img src="{{ asset('asset/images/DSC02909-scaled.jpg') }}" alt="Hotel Detail 1"
                                class="w-full h-24 object-cover hover:scale-110 transition-transform duration-500 cursor-pointer"
                                onclick="changeMainImage(this)" />
                        </div>
                        <div class="overflow-hidden rounded-xl shadow-lg">
                            <img src="{{ asset('asset/images/DSC_4058-scaled.jpg') }}" alt="Hotel Detail 2"
                                class="w-full h-24 object-cover hover:scale-110 transition-transform duration-500 cursor-pointer"
                                onclick="changeMainImage(this)" />
                        </div>
                        <div class="overflow-hidden rounded-xl shadow-lg">
                            <img src="{{ asset('asset/images/DSC02813-1-scaled.jpg') }}" alt="Hotel Detail 3"
                                class="w-full h-24 object-cover hover:scale-110 transition-transform duration-500 cursor-pointer"
                                onclick="changeMainImage(this)" />
                        </div>
                    </div>
                </div>

                <!-- Content Section -->
                <div class="w-full lg:w-1/2 space-y-8">
                    <!-- Section Title -->
                    <div class="space-y-4">
                        <div class="flex items-center gap-4">
                            <div class="w-20 h-[2px] bg-[#8B4513]"></div>
                            <span class="text-[#8B4513] font-semibold uppercase tracking-wider">Luxury Suite</span>
                        </div>
                        <h2 class="text-4xl lg:text-5xl font-bold text-[#1a1a2e] leading-tight">
                            Where Every Moment
                            <span class="relative">Resonates
                                <div class="absolute bottom-0 left-0 w-full h-[8px] bg-[#8B4513]/20"></div>
                            </span> Luxury
                        </h2>
                    </div>

                    <!-- Content -->
                    <div class="space-y-6">
                        <p class="text-lg text-gray-700 leading-relaxed">
                            The Luxury Suite has all the essential conveniences and is tastefully designed for your
                            enjoyable stay. Hotel Krinoscco redefines luxury with an unwavering commitment to international
                            standards of service and style.
                        </p>
                        <p class="text-lg text-gray-700 leading-relaxed">
                            Setting a new benchmark for unparalleled accommodation and exceptional value, it embodies the
                            epitome of contemporary elegance.
                        </p>
                        <!-- Feature List -->
                        <div class="grid grid-cols-2 gap-6 py-6">
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 rounded-full bg-[#8B4513]/10 flex items-center justify-center">
                                    <i class="fas fa-map-marker-alt text-[#8B4513] text-xl"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-[#1a1a2e]">Prime Location</h4>
                                    <p class="text-sm text-gray-600">Heart of Ayodhya</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 rounded-full bg-[#8B4513]/10 flex items-center justify-center">
                                    <i class="fas fa-clock text-[#8B4513] text-xl"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-[#1a1a2e]">Quick Access</h4>
                                    <p class="text-sm text-gray-600">15min from stations</p>
                                </div>
                            </div>
                        </div>

                        <!-- CTA Section -->
                        <div class="flex items-center gap-6 pt-4">
                            <a href="#"
                                class="group relative px-8 py-4 bg-[#8B4513] text-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300">
                                <div
                                    class="absolute inset-0 bg-[#6B3410] transform translate-y-full transition-transform duration-300 group-hover:translate-y-0">
                                </div>
                                <span class="relative z-10 font-semibold">Discover More</span>
                            </a>
                            <a href="#"
                                class="group flex items-center gap-3 text-[#1a1a2e] font-semibold hover:text-[#8B4513] transition-colors duration-300">
                                <span>View Gallery</span>
                                <i
                                    class="fas fa-arrow-right transform transition-transform duration-300 group-hover:translate-x-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Room Features -->
            <div class="space-y-6 py-12">
                <h1 class="text-3xl text-gray-800">The Luxury suit room has all the essential conveniences and is tastefully
                    designed for your enjoyable stay. We are delivering the highest level of pleasure and a wonderful
                    experience.</h1>
                <h3 class="text-2xl font-semibold text-[#1a1a2e]">Room Features</h3>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <div class="flex items-start gap-4">
                        <div class="w-5 h-5 bg-[#8B4513] rounded-full"></div>
                        <p class="text-lg text-gray-700">Keycard access to all the rooms</p>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-5 h-5 bg-[#8B4513] rounded-full"></div>
                        <p class="text-lg text-gray-700">King or Double bedded rooms</p>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-5 h-5 bg-[#8B4513] rounded-full"></div>
                        <p class="text-lg text-gray-700">Sofa chairs in all rooms</p>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-5 h-5 bg-[#8B4513] rounded-full"></div>
                        <p class="text-lg text-gray-700">High speed Wireless Internet access</p>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-5 h-5 bg-[#8B4513] rounded-full"></div>
                        <p class="text-lg text-gray-700">Telephone with intercoms, speakerphone, voicemail & wake-up call
                            facilities</p>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-5 h-5 bg-[#8B4513] rounded-full"></div>
                        <p class="text-lg text-gray-700">Coffee maker with complimentary coffee, tea & milk sachets</p>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-5 h-5 bg-[#8B4513] rounded-full"></div>
                        <p class="text-lg text-gray-700">Bottled Water</p>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-5 h-5 bg-[#8B4513] rounded-full"></div>
                        <p class="text-lg text-gray-700">Mini Bar</p>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-5 h-5 bg-[#8B4513] rounded-full"></div>
                        <p class="text-lg text-gray-700">Slippers available (on request)</p>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-5 h-5 bg-[#8B4513] rounded-full"></div>
                        <p class="text-lg text-gray-700">Bath amenities and toiletry items</p>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-5 h-5 bg-[#8B4513] rounded-full"></div>
                        <p class="text-lg text-gray-700">Slippers available (on request)</p>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-5 h-5 bg-[#8B4513] rounded-full"></div>
                        <p class="text-lg text-gray-700">Hair Dryer (on request)</p>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-5 h-5 bg-[#8B4513] rounded-full"></div>
                        <p class="text-lg text-gray-700">Iron and Board (on request)</p>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-5 h-5 bg-[#8B4513] rounded-full"></div>
                        <p class="text-lg text-gray-700">32 inch flat screen television</p>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-5 h-5 bg-[#8B4513] rounded-full"></div>
                        <p class="text-lg text-gray-700">English, Hindi and other regional language channels</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Real-time Availability Section -->
    <section id="booking" class="py-20 animated-gradient bg-gray-800">
        <div class="container mx-auto px-4">
            <!-- Title Section -->
            <h2 class="text-4xl font-bold text-white mb-16 text-center">
                Book Your Stay
                <div class="w-24 h-1 bg-gradient-to-r from-[#8B4513] to-[#D4A017] mx-auto mt-4 rounded-full"></div>
            </h2>

            <div class="max-w-7xl mx-auto bg-white rounded-xl shadow-xl overflow-hidden p-8">
                <form action="#"
                    class="bg-transparent flex flex-col sm:flex-row items-center sm:space-x-6 p-6 rounded-lg shadow-lg space-y-6 sm:space-y-0">

                    <!-- Check-in -->
                    <div class="flex flex-col space-y-2 w-full sm:w-1/4">
                        <label class="text-gray-700 font-medium">Check-in</label>
                        <input type="text" id="checkin" placeholder="Select Check-in"
                            class="border border-gray-300 rounded-lg p-3 bg-transparent focus:outline-none focus:ring-2 focus:ring-[#8B4513]">
                    </div>

                    <!-- Check-out -->
                    <div class="flex flex-col space-y-2 w-full sm:w-1/4">
                        <label class="text-gray-700 font-medium">Check-out</label>
                        <input type="text" id="checkout" placeholder="Select Check-out"
                            class="border border-gray-300 rounded-lg p-3 bg-transparent focus:outline-none focus:ring-2 focus:ring-[#8B4513]">
                    </div>

                    <!-- Adults -->
                    <div class="flex flex-col space-y-2 w-full sm:w-1/4">
                        <label class="text-gray-700 font-medium">Adults</label>
                        <select
                            class="border border-gray-300 rounded-lg p-3 bg-transparent focus:outline-none focus:ring-2 focus:ring-[#8B4513]">
                            <option value="1">1 Adult</option>
                            <option value="2">2 Adults</option>
                            <option value="3">3 Adults</option>
                            <option value="4">4 Adults</option>
                        </select>
                    </div>

                    <!-- Children -->
                    <div class="flex flex-col space-y-2 w-full sm:w-1/4">
                        <label class="text-gray-700 font-medium">Children</label>
                        <select
                            class="border border-gray-300 rounded-lg p-3 bg-transparent focus:outline-none focus:ring-2 focus:ring-[#8B4513]">
                            <option value="1">No Children</option>
                            <option value="2">1 Child</option>
                            <option value="3">2 Children</option>
                            <option value="4">3 Children</option>
                        </select>
                    </div>

                    <!-- Rooms -->
                    <div class="flex flex-col space-y-2 w-full sm:w-1/4">
                        <label class="text-gray-700 font-medium">Rooms</label>
                        <select
                            class="border border-gray-300 rounded-lg p-3 bg-transparent focus:outline-none focus:ring-2 focus:ring-[#8B4513]">
                            <option value="1">1 Room</option>
                            <option value="2">2 Rooms</option>
                            <option value="3">3 Rooms</option>
                            <option value="4">4 Rooms</option>
                        </select>
                    </div>

                    <!-- Submit Button -->
                    <div class="flex justify-center items-center w-full sm:w-auto">
                        <a href="#"
                            class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-[#8B4513] to-[#D4A017] text-white rounded-lg transition-all duration-500 ease-in-out transform hover:from-[#D4A017] hover:to-[#8B4513] hover:scale-105">
                            Check Now
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- JavaScript for Image Change -->
    <script>
        function changeMainImage(element) {
            const mainImage = document.getElementById("main-image");
            mainImage.src = element.src;
        }
    </script>
@endsection
