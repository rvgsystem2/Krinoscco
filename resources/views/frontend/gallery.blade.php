@extends('components.main')

@section('content')
    <!-- Hero Section -->
    <div class="relative bg-gradient-to-b from-[#2c3e50] to-[#8B4513] text-white py-20 px-4">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="absolute inset-0 bg-white bg-opacity-20 backdrop-blur-md z-0"></div>
        <div class="relative container mx-auto text-center z-10">
            <h1 class="text-5xl font-extrabold uppercase leading-tight mb-4 text-[#ecf0f1] drop-shadow-lg">
                Digital Art Gallery
            </h1>
            <p class="text-lg font-medium mb-6 text-[#bdc3c7] opacity-90 tracking-wide max-w-xl mx-auto">
                Explore a collection of stunning digital art pieces. We're thrilled to showcase the creativity and
                imagination of artists.
            </p>
            <div class="w-32 h-1 bg-gradient-to-r from-[#e67e22] to-[#f39c12] mx-auto rounded-full"></div>
        </div>
    </div>

    <!-- Gallery Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6 lg:px-10">
            <h2 class="text-5xl font-bold text-[#1a1a2e] mb-16 text-center">
                Gallery
                <div class="w-24 h-1 bg-gradient-to-r from-[#8B4513] to-[#D4A017] mx-auto mt-4 rounded-full"></div>
            </h2>

            <!-- Gallery Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                @for ($i = 1; $i <= 50; $i++)
                    <div>
                        <img src="{{ asset("asset/gallery/gallery-($i).jpg") }}" alt="Abstract Harmony {{ $i }}"
                            class="w-full h-64 object-cover rounded-lg shadow-lg cursor-pointer"
                            onclick="openModal('{{ asset("asset/gallery/gallery ($i).jpg") }}')">
                    </div>
                @endfor
            </div>
        </div>
    </section>

    <!-- Image Modal -->
    <div id="imageModal" class="fixed inset-0 bg-black bg-opacity-75 flex items-center justify-center hidden">
        <div class="relative">
            <button onclick="closeModal()" class="absolute top-2 right-2 bg-red-500 text-white px-3 py-1 rounded-full">
                ✕
            </button>
            <img id="modalImage" class="max-w-full max-h-screen rounded-lg">
        </div>
    </div>

    <script>
        function openModal(imageUrl) {
            document.getElementById('modalImage').src = imageUrl;
            document.getElementById('imageModal').classList.remove('hidden');
        }

        function closeModal() {
            document.getElementById('imageModal').classList.add('hidden');
        }
    </script>
@endsection