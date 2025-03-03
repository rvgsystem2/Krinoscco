<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
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

                <!-- Check-in Date Picker -->
                <div class="flex flex-col space-y-2 w-full sm:w-1/4">
                    <label class="text-gray-700 font-medium">Check-in</label>
                    <input type="text" id="checkin" name="checkin" placeholder="Select Check-in"
                        class="border border-gray-300 rounded-lg p-3 bg-white focus:outline-none focus:ring-2 focus:ring-[#8B4513]">
                </div>

                <!-- Check-out Date Picker -->
                <div class="flex flex-col space-y-2 w-full sm:w-1/4">
                    <label class="text-gray-700 font-medium">Check-out</label>
                    <input type="text" id="checkout" name="checkout" placeholder="Select Check-out"
                        class="border border-gray-300 rounded-lg p-3 bg-white focus:outline-none focus:ring-2 focus:ring-[#8B4513]">
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

<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Initialize Check-in Picker
        flatpickr("#checkin", {
            dateFormat: "Y-m-d",
            minDate: "today", // Prevent past dates
            onChange: function(selectedDates, dateStr, instance) {
                // Set check-out date to at least 1 day after check-in
                checkoutPicker.set("minDate", dateStr);
            }
        });

        // Initialize Check-out Picker (starts with today, but will update dynamically)
        const checkoutPicker = flatpickr("#checkout", {
            dateFormat: "Y-m-d",
            minDate: "today"
        });
    });
</script>
