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
                <img src="{{ asset('asset/images/suite10.jpg') }}" alt="Package 1"
                    class="w-full h-56 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Basic Package</h3>
                    <p class="text-gray-600">Includes lawn maintenance, trimming, and basic gardening.</p>
                    <button class="mt-4 bg-[#8B4513] text-white py-2 px-4 rounded-lg hover:bg-gray-800">Book Now</button>
                </div>
            </div>
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="{{ asset('asset/images/suite11.jpg') }}" alt="Package 2" class="w-full h-56 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Premium Package</h3>
                    <p class="text-gray-600">Includes everything in the basic package plus fertilization and irrigation.</p>
                    <button class="mt-4 bg-[#8B4513] text-white py-2 px-4 rounded-lg hover:bg-gray-800">Book Now</button>
                </div>
            </div>
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="{{ asset('asset/images/suite12.jpg') }}" alt="Package 3"
                    class="w-full h-56 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Luxury Package</h3>
                    <p class="text-gray-600">Full lawn care service including landscaping and custom design.</p>
                    <button class="mt-4 bg-[#8B4513] text-white py-2 px-4 rounded-lg hover:bg-gray-800">Book Now</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Booking Form -->
    <div class="container mx-auto py-16 px-6">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">Book Your Package</h2>
        <form action="" method="POST" class="w-full max-w-4xl mx-auto bg-white p-8 rounded-lg shadow-lg">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-semibold mb-2">Full Name</label>
                <input type="text" id="name" name="name" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-[#8B4513]">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-semibold mb-2">Email</label>
                <input type="email" id="email" name="email" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-[#8B4513]">
            </div>
            <div class="mb-4">
                <label for="phone" class="block text-gray-700 font-semibold mb-2">Phone</label>
                <input type="text" id="phone" name="phone" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-[#8B4513]">
            </div>
            <div class="mb-4">
                <label for="package" class="block text-gray-700 font-semibold mb-2">Select Package</label>
                <select id="package" name="package" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-[#8B4513]">
                    <option value="Basic Package">Basic Package</option>
                    <option value="Premium Package">Premium Package</option>
                    <option value="Luxury Package">Luxury Package</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="date" class="block text-gray-700 font-semibold mb-2">Preferred Date</label>
                <input type="date" id="date" name="date" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-[#8B4513]">
            </div>
            <div class="mb-6">
                <label for="message" class="block text-gray-700 font-semibold mb-2">Additional Message</label>
                <textarea id="message" name="message" rows="4" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-[#8B4513]"></textarea>
            </div>
            <button type="submit" class="w-full bg-[#8B4513] text-white py-3 rounded-lg hover:bg-gray-800">Submit Booking</button>
        </form>
    </div>
@endsection
