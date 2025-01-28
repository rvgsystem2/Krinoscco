@extends('components.main')

@section('content')
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
                Contact Us
            </h1>

            <!-- Description Text with Focus -->
            <p class="text-lg font-medium mb-6 text-[#bdc3c7] opacity-90 tracking-wide max-w-xl mx-auto">
                We’d love to hear from you! Reach out to us anytime.
            </p>

            <!-- Stylish Divider -->
            <div class="w-32 h-1 bg-gradient-to-r from-[#e67e22] to-[#f39c12] mx-auto rounded-full"></div>
        </div>
    </div>

    <!-- Contact Us -->
    <section class="bg-gray-100 py-16 relative">
        <!-- Decorative Elements -->
        <div class="absolute top-0 left-0 w-96 h-96 bg-[#D4A017]/10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-[#8B4513]/10 rounded-full blur-3xl"></div>

        <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12 relative z-10">
            <!-- Heading Section -->
            <div class="text-center mb-16">
                <h2 class="text-4xl font-extrabold text-gray-900">Contact Us</h2>
                <div class="w-24 h-1 bg-gradient-to-r from-[#8B4513] to-[#D4A017] mx-auto mt-4 rounded-full"></div>
                <p class="mt-4 text-lg text-gray-600">
                    We’d love to hear from you! Reach out to us anytime.
                </p>
            </div>

            <!-- Grid Section -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <!-- Contact Information -->
                <div class="space-y-8">
                    <!-- Registered Address -->
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0">
                            <span class="material-icons text-[#8B4513] text-4xl">home</span>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-800 text-lg">Registered Address</h4>
                            <p class="text-gray-600">309, Amaniganj, Faizabad, Uttar Pradesh, 224001</p>
                        </div>
                    </div>
                    <!-- Branch/Functional Office Address -->
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0">
                            <span class="material-icons text-[#8B4513] text-4xl">apartment</span>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-800 text-lg">Functional Office</h4>
                            <p class="text-gray-600">Hotel Krinoscco, Amaniganj Ram Path, Ayodhya U.P, 224001</p>
                        </div>
                    </div>
                    <!-- Email -->
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0">
                            <span class="material-icons text-[#8B4513] text-4xl">email</span>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-800 text-lg">Email Us</h4>
                            <p class="text-gray-600">info@krinoscco.com</p>
                        </div>
                    </div>
                    <!-- Phone -->
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0">
                            <span class="material-icons text-[#8B4513] text-4xl">phone</span>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-800 text-lg">Call Us</h4>
                            <p class="text-gray-600">+91-7275092525</p>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <form action="#" method="POST"
                    class="space-y-6 bg-white p-8 rounded-xl shadow-lg transition-transform duration-700 hover:shadow-2xl hover:-translate-y-2">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Your Name</label>
                        <input type="text" name="name" id="name" required
                            class="mt-1 block w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:ring-yellow-500 focus:border-yellow-500">
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Your Email</label>
                        <input type="email" name="email" id="email" required
                            class="mt-1 block w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:ring-yellow-500 focus:border-yellow-500">
                    </div>
                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-700">Your Mobile Number</label>
                        <input type="tel" name="phone" id="phone" required
                            class="mt-1 block w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:ring-yellow-500 focus:border-yellow-500"
                            placeholder="+91-7275092525">
                    </div>
                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                        <textarea name="message" id="message" rows="4" required
                            class="mt-1 block w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:ring-yellow-500 focus:border-yellow-500"></textarea>
                    </div>
                    <div>
                        <button type="submit"
                            class="w-full bg-gradient-to-r from-[#8B4513] to-[#D4A017] text-white font-medium py-3 rounded-lg shadow-lg hover:opacity-90 focus:outline-none focus:ring-2 focus:ring-yellow-500">
                            Send Message
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
