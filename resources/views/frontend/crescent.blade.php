@extends('components.main')
@section('content')

<!-- Hero Section -->
<div class="relative bg-gradient-to-r from-[#2c3e50] to-[#8B4513] text-white py-20 px-4">
    <div class="absolute inset-0 bg-black opacity-40"></div>
    <div class="relative container mx-auto text-center z-10">
        <h1 class="text-5xl font-extrabold uppercase drop-shadow-md mb-2">Hotel Krinoscco</h1>
        <p class="text-lg font-medium text-[#ecf0f1]">Amanigunj, Ayodhya</p>
    </div>
</div>

<!-- Content Section -->
<div class="max-w-6xl mx-auto px-6 py-10 text-gray-800 space-y-10">
    <!-- Overview -->
    <section>
        <h2 class="text-2xl font-bold mb-3 border-b-2 border-yellow-600 inline-block">Overview</h2>
        <p class="leading-relaxed">
            The 60-room hotel, with its Roman styled facade, is located on the famous Rampath at Amanigunj — the main thoroughfare of Ayodhya leading directly to the world-famous Ram Janmabhoomi.
        </p>
        <p class="mt-2">
            Hotel Krinoscco takes the hospitality concept to a new level with international standard service and style. It offers high-tech amenities with high-touch levels of service unmatched in Ayodhya.
        </p>
    </section>

    <!-- Location -->
    <section>
        <h2 class="text-2xl font-bold mb-3 border-b-2 border-yellow-600 inline-block">Location</h2>
        <p class="leading-relaxed">
            Located in the heart of Ayodhya, just 15 minutes by taxi from Ayodhya Cantt. and Ayodhya railway stations, and near the upcoming airport. Also just 2 hours by road from Lucknow Airport.
        </p>
    </section>

    <!-- Hotel Details -->
    <section>
        <h2 class="text-2xl font-bold mb-3 border-b-2 border-yellow-600 inline-block">Hotel Details</h2>
        <ul class="list-disc pl-6 space-y-1">
            <li>Number of floors: 6</li>
            <li>Suite Rooms (with Jacuzzi): 2</li>
            <li>Standard Rooms: 58</li>
            <li>Banquet Halls: 4 (including 4000 sq.ft. hall)</li>
            <li>Lawns: 1 (25000 sq.ft.)</li>
            <li>Elevators: 2</li>
        </ul>
    </section>

    <!-- Services -->
    <section>
        <h2 class="text-2xl font-bold mb-3 border-b-2 border-yellow-600 inline-block">Hotel Services</h2>
        <ul class="list-disc pl-6 space-y-1">
            <li>Cooked-to-order / Buffet Breakfast</li>
            <li>High-speed Wireless Internet in rooms & public areas</li>
            <li>Travel & Concierge Desk</li>
            <li>Multi-lingual staff</li>
            <li>24-hour In-room dining</li>
            <li>Crescent - The multicuisine restaurant</li>
            <li>Tit-Bit Café (Bakery, Fast Food, Tea/Coffee)</li>
            <li>Laundry Service</li>
            <li>Airport & Railway Station Taxi (Chargeable)</li>
            <li>Gymnasium</li>
        </ul>
    </section>

    <!-- Room Features -->
    <section>
        <h2 class="text-2xl font-bold mb-3 border-b-2 border-yellow-600 inline-block">Room Features</h2>
        <ul class="list-disc pl-6 space-y-1">
            <li>Keycard access to rooms</li>
            <li>King/Double beds with sofa chairs</li>
            <li>Wi-Fi, Intercom, Voicemail, Wake-up Call</li>
            <li>Coffee maker, bottled water, mini bar</li>
            <li>Wall Safe, Slippers (on request)</li>
            <li>Bath amenities, Hair Dryer</li>
            <li>Iron & Board (on request)</li>
            <li>32” Flat Screen TV with regional channels</li>
        </ul>
    </section>

    <!-- Reservations -->
    <section>
        <h2 class="text-2xl font-bold mb-3 border-b-2 border-yellow-600 inline-block">Reservations</h2>
        <p>Telephone No.: ………………………</p>
        <p>Email: …………………………………..</p>
    </section>

    <!-- Banquet Capacities -->
    <section>
        <h2 class="text-2xl font-bold mb-3 border-b-2 border-yellow-600 inline-block">Banquet Capacities</h2>
        <div class="overflow-x-auto">
            <table class="min-w-full table-auto border border-gray-300">
                <thead class="bg-gray-100">
                    <tr class="text-left">
                        <th class="border px-4 py-2">Hall Name</th>
                        <th class="border px-4 py-2">U-Shape</th>
                        <th class="border px-4 py-2">Cluster</th>
                        <th class="border px-4 py-2">Theatre</th>
                        <th class="border px-4 py-2">Classroom</th>
                        <th class="border px-4 py-2">Reception</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border px-4 py-2">Royal Ballroom</td>
                        <td class="border px-4 py-2">100</td>
                        <td class="border px-4 py-2">150</td>
                        <td class="border px-4 py-2">350</td>
                        <td class="border px-4 py-2">80</td>
                        <td class="border px-4 py-2">400</td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2">Elite-1</td>
                        <td class="border px-4 py-2">25</td>
                        <td class="border px-4 py-2">30</td>
                        <td class="border px-4 py-2">40</td>
                        <td class="border px-4 py-2">30</td>
                        <td class="border px-4 py-2">40</td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2">Elite-2</td>
                        <td class="border px-4 py-2">35</td>
                        <td class="border px-4 py-2">50</td>
                        <td class="border px-4 py-2">70</td>
                        <td class="border px-4 py-2">35</td>
                        <td class="border px-4 py-2">100</td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2">On The Rocks</td>
                        <td class="border px-4 py-2">-</td>
                        <td class="border px-4 py-2">70</td>
                        <td class="border px-4 py-2">100</td>
                        <td class="border px-4 py-2">-</td>
                        <td class="border px-4 py-2">-</td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2">Swayamvar Lawn</td>
                        <td class="border px-4 py-2">-</td>
                        <td class="border px-4 py-2">300</td>
                        <td class="border px-4 py-2">1000</td>
                        <td class="border px-4 py-2">-</td>
                        <td class="border px-4 py-2">1500</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <!-- Restaurant -->
    <section>
        <h2 class="text-2xl font-bold mb-3 border-b-2 border-yellow-600 inline-block">Crescent Restaurant</h2>
        <p class="leading-relaxed">
            A triumph of taste. The state-of-the-art multicuisine restaurant “Crescent” with a rooftop open terrace is a stunning venue with a behind-the-scenes research center creating new culinary experiences. Our staff offers expert recommendations and courteous service.
        </p>
    </section>
</div>

@endsection
