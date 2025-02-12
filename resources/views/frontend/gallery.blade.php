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
                <div>
                    <img src="{{ asset('asset/images/d8.jpg') }}" alt="Abstract Harmony"
                         class="w-full h-64 object-cover rounded-lg shadow-lg cursor-pointer"
                         onclick="openModal('{{ asset('asset/images/d8.jpg') }}')">
                    <div class="text-center text-lg font-semibold mt-2">Abstract Harmony</div>
                </div>

                <div>
                    <img src="{{ asset('asset/images/d0.jpg') }}" alt="Digital Dreams"
                         class="w-full h-64 object-cover rounded-lg shadow-lg cursor-pointer"
                         onclick="openModal('{{ asset('asset/images/d0.jpg') }}')">
                    <div class="text-center text-lg font-semibold mt-2">Digital Dreams</div>
                </div>

                <div>
                    <img src="{{ asset('asset/images/s11.jpg') }}" alt="Neon Nights"
                         class="w-full h-64 object-cover rounded-lg shadow-lg cursor-pointer"
                         onclick="openModal('{{ asset('asset/images/s11.jpg') }}')">
                    <div class="text-center text-lg font-semibold mt-2">Neon Nights</div>
                </div>

                <div>
                    <img src="{{ asset('asset/images/suite13.jpg') }}" alt="Cyber Sunset"
                         class="w-full h-64 object-cover rounded-lg shadow-lg cursor-pointer"
                         onclick="openModal('{{ asset('asset/images/suite13.jpg') }}')">
                    <div class="text-center text-lg font-semibold mt-2">Cyber Sunset</div>
                </div>

                <div>
                    <img src="{{ asset('asset/images/s3.jpg') }}" alt="Virtual Reality"
                         class="w-full h-64 object-cover rounded-lg shadow-lg cursor-pointer"
                         onclick="openModal('{{ asset('asset/images/s3.jpg') }}')">
                    <div class="text-center text-lg font-semibold mt-2">Virtual Reality</div>
                </div>

                <div>
                    <img src="{{ asset('asset/images/s8.jpg') }}" alt="Digital Landscape"
                         class="w-full h-64 object-cover rounded-lg shadow-lg cursor-pointer"
                         onclick="openModal('{{ asset('asset/images/s8.jpg') }}')">
                    <div class="text-center text-lg font-semibold mt-2">Digital Landscape</div>
                </div>

                <div>
                    <img src="{{ asset('asset/images/suite8.jpg') }}" alt="Pixel Perfect"
                         class="w-full h-64 object-cover rounded-lg shadow-lg cursor-pointer"
                         onclick="openModal('{{ asset('asset/images/suite8.jpg') }}')">
                    <div class="text-center text-lg font-semibold mt-2">Pixel Perfect</div>
                </div>

                <div>
                    <img src="{{ asset('asset/images/d8.jpg') }}" alt="Future Vision"
                         class="w-full h-64 object-cover rounded-lg shadow-lg cursor-pointer"
                         onclick="openModal('{{ asset('asset/images/d8.jpg') }}')">
                    <div class="text-center text-lg font-semibold mt-2">Future Vision</div>
                </div>

                <div>
                    <img src="{{ asset('asset/images/s1.jpg') }}" alt="Tech Art"
                         class="w-full h-64 object-cover rounded-lg shadow-lg cursor-pointer"
                         onclick="openModal('{{ asset('asset/images/s1.jpg') }}')">
                    <div class="text-center text-lg font-semibold mt-2">Tech Art</div>
                </div>

                <div>
                    <img src="{{ asset('asset/images/d1.jpg') }}" alt="Digital Evolution"
                         class="w-full h-64 object-cover rounded-lg shadow-lg cursor-pointer"
                         onclick="openModal('{{ asset('asset/images/d1.jpg') }}')">
                    <div class="text-center text-lg font-semibold mt-2">Digital Evolution</div>
                </div>

                <div>
                    <img src="{{ asset('asset/images/suite12.jpg') }}" alt="Modern Masterpiece"
                         class="w-full h-64 object-cover rounded-lg shadow-lg cursor-pointer"
                         onclick="openModal('{{ asset('asset/images/s1.jpg') }}')">
                    <div class="text-center text-lg font-semibold mt-2">Modern Masterpiece</div>
                </div>

                <div>
                    <img src="{{ asset('asset/images/suite12.jpg') }}" alt="Digital Expression"
                         class="w-full h-64 object-cover rounded-lg shadow-lg cursor-pointer"
                         onclick="openModal('{{ asset('asset/images/suite12.jpg') }}')">
                    <div class="text-center text-lg font-semibold mt-2">Digital Expression</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Fullscreen Modal -->
    <div id="imageModal" class="fixed inset-0 bg-black bg-opacity-80 flex justify-center items-center hidden">
        <span class="absolute top-5 right-5 text-white text-3xl cursor-pointer" onclick="closeModal()">&times;</span>
        <img id="modalImage" class="max-w-full max-h-full rounded-lg shadow-xl">
    </div>

    <!-- JavaScript -->
    <script>
        function openModal(imageSrc) {
            document.getElementById('modalImage').src = imageSrc;
            document.getElementById('imageModal').classList.remove('hidden');
        }

        function closeModal() {
            document.getElementById('imageModal').classList.add('hidden');
        }
    </script>
@endsection
