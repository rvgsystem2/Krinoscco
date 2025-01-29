@extends('components.main')

@section('content')
    <!-- Hero Section -->
    <div class="relative bg-gradient-to-b from-[#2c3e50] to-[#8B4513] text-white py-20 px-4">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="absolute inset-0 bg-white bg-opacity-20 backdrop-blur-md z-0"></div>
        <div class="relative container mx-auto text-center z-10">
            <h1 class="text-5xl font-extrabold uppercase leading-tight mb-4 text-[#ecf0f1] drop-shadow-lg">
                Ballroom Package
            </h1>
            <p class="text-lg font-medium mb-6 text-[#bdc3c7] opacity-90 tracking-wide max-w-xl mx-auto">
                We’d love to hear from you! Reach out to us anytime.
            </p>
            <div class="w-32 h-1 bg-gradient-to-r from-[#e67e22] to-[#f39c12] mx-auto rounded-full"></div>
        </div>
    </div>

    <!-- Packages Section -->
    <div class="container mx-auto py-16 px-6">
        <h2 class="text-4xl font-bold text-center text-gray-800 mb-12">Our Ballroom Package</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="{{ asset('asset/images/DSC02813-1-scaled.jpg') }}" alt="Package 1"
                    class="w-full h-56 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Basic Package</h3>
                    <p class="text-gray-600">Includes lawn maintenance, trimming, and basic gardening.</p>
                    <button class="mt-4 bg-[#8B4513] text-white py-2 px-4 rounded-lg hover:bg-gray-800">Book Now</button>
                </div>
            </div>
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="{{ asset('asset/images/DSC02909-scaled.jpg') }}" alt="Package 2" class="w-full h-56 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Premium Package</h3>
                    <p class="text-gray-600">Includes everything in the basic package plus fertilization and irrigation.</p>
                    <button class="mt-4 bg-[#8B4513] text-white py-2 px-4 rounded-lg hover:bg-gray-800">Book Now</button>
                </div>
            </div>
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="{{ asset('asset/images/DSC_4032-1-1-scaled.jpg') }}" alt="Package 3"
                    class="w-full h-56 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Luxury Package</h3>
                    <p class="text-gray-600">Full lawn care service including landscaping and custom design.</p>
                    <button class="mt-4 bg-[#8B4513] text-white py-2 px-4 rounded-lg hover:bg-gray-800">Book Now</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Booking Form Section -->
    <div class="bg-gray-100 py-16 px-32 w-full">
        <h2 class="text-4xl font-bold text-center text-gray-800 mb-6">Book Your Package</h2>
        <p class="text-center text-gray-600 mb-8">Fill out the form below to book your preferred package.</p>
        <div class="w-full mx-auto">
            <form action="#" method="POST" class="bg-white p-6 rounded-lg shadow-md">
                <div class="mb-4">
                    <label class="block text-gray-700">Full Name</label>
                    <input type="text" class="w-full border-gray-300 p-2 rounded-lg" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Email</label>
                    <input type="email" class="w-full border-gray-300 p-2 rounded-lg" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Phone Number</label>
                    <input type="tel" class="w-full border-gray-300 p-2 rounded-lg" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Select Package</label>
                    <select class="w-full border-gray-300 p-2 rounded-lg" required>
                        <option value="basic">Basic Package</option>
                        <option value="premium">Premium Package</option>
                        <option value="luxury">Luxury Package</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Preferred Date</label>
                    <input type="date" class="w-full border-gray-300 p-2 rounded-lg" required>
                </div>
                <button class="bg-[#8B4513] text-white py-2 px-4 rounded-lg w-full hover:bg-gray-800">Submit
                    Booking</button>
            </form>
        </div>
    </div>
@endsection
