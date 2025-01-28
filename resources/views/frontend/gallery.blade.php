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
                <div class="relative group cursor-pointer">
                    <img src="{{ asset('asset/images/DSC02813-1-scaled.jpg') }}"
                         alt="Abstract Harmony"
                         class="w-full h-64 object-cover rounded-lg shadow-lg transition-all duration-500 transform group-hover:scale-105 group-hover:shadow-xl">
                    <div class="absolute inset-0 bg-black opacity-40 rounded-lg group-hover:opacity-0 transition-opacity duration-300"></div>
                    <div class="absolute bottom-4 left-4 text-white font-semibold text-lg drop-shadow-lg">Abstract Harmony</div>
                </div>

                <div class="relative group cursor-pointer">
                    <img src="{{ asset('asset/images/DSC_4032-1-1-scaled.jpg') }}"
                         alt="Digital Dreams"
                         class="w-full h-64 object-cover rounded-lg shadow-lg transition-all duration-500 transform group-hover:scale-105 group-hover:shadow-xl">
                    <div class="absolute inset-0 bg-black opacity-40 rounded-lg group-hover:opacity-0 transition-opacity duration-300"></div>
                    <div class="absolute bottom-4 left-4 text-white font-semibold text-lg drop-shadow-lg">Digital Dreams</div>
                </div>

                <div class="relative group cursor-pointer">
                    <img src="{{ asset('asset/images/DSC_4100-1-scaled.jpg') }}"
                         alt="Neon Nights"
                         class="w-full h-64 object-cover rounded-lg shadow-lg transition-all duration-500 transform group-hover:scale-105 group-hover:shadow-xl">
                    <div class="absolute inset-0 bg-black opacity-40 rounded-lg group-hover:opacity-0 transition-opacity duration-300"></div>
                    <div class="absolute bottom-4 left-4 text-white font-semibold text-lg drop-shadow-lg">Neon Nights</div>
                </div>

                <div class="relative group cursor-pointer">
                    <img src="{{ asset('asset/images/artwork4.jpg') }}"
                         alt="Cyber Sunset"
                         class="w-full h-64 object-cover rounded-lg shadow-lg transition-all duration-500 transform group-hover:scale-105 group-hover:shadow-xl">
                    <div class="absolute inset-0 bg-black opacity-40 rounded-lg group-hover:opacity-0 transition-opacity duration-300"></div>
                    <div class="absolute bottom-4 left-4 text-white font-semibold text-lg drop-shadow-lg">Cyber Sunset</div>
                </div>

                <div class="relative group cursor-pointer">
                    <img src="{{ asset('asset/images/artwork5.jpg') }}"
                         alt="Virtual Reality"
                         class="w-full h-64 object-cover rounded-lg shadow-lg transition-all duration-500 transform group-hover:scale-105 group-hover:shadow-xl">
                    <div class="absolute inset-0 bg-black opacity-40 rounded-lg group-hover:opacity-0 transition-opacity duration-300"></div>
                    <div class="absolute bottom-4 left-4 text-white font-semibold text-lg drop-shadow-lg">Virtual Reality</div>
                </div>

                <div class="relative group cursor-pointer">
                    <img src="{{ asset('asset/images/artwork6.jpg') }}"
                         alt="Digital Landscape"
                         class="w-full h-64 object-cover rounded-lg shadow-lg transition-all duration-500 transform group-hover:scale-105 group-hover:shadow-xl">
                    <div class="absolute inset-0 bg-black opacity-40 rounded-lg group-hover:opacity-0 transition-opacity duration-300"></div>
                    <div class="absolute bottom-4 left-4 text-white font-semibold text-lg drop-shadow-lg">Digital Landscape</div>
                </div>

                <div class="relative group cursor-pointer">
                    <img src="{{ asset('asset/images/artwork7.jpg') }}"
                         alt="Pixel Perfect"
                         class="w-full h-64 object-cover rounded-lg shadow-lg transition-all duration-500 transform group-hover:scale-105 group-hover:shadow-xl">
                    <div class="absolute inset-0 bg-black opacity-40 rounded-lg group-hover:opacity-0 transition-opacity duration-300"></div>
                    <div class="absolute bottom-4 left-4 text-white font-semibold text-lg drop-shadow-lg">Pixel Perfect</div>
                </div>

                <div class="relative group cursor-pointer">
                    <img src="{{ asset('asset/images/artwork8.jpg') }}"
                         alt="Future Vision"
                         class="w-full h-64 object-cover rounded-lg shadow-lg transition-all duration-500 transform group-hover:scale-105 group-hover:shadow-xl">
                    <div class="absolute inset-0 bg-black opacity-40 rounded-lg group-hover:opacity-0 transition-opacity duration-300"></div>
                    <div class="absolute bottom-4 left-4 text-white font-semibold text-lg drop-shadow-lg">Future Vision</div>
                </div>

                <div class="relative group cursor-pointer">
                    <img src="{{ asset('asset/images/artwork9.jpg') }}"
                         alt="Tech Art"
                         class="w-full h-64 object-cover rounded-lg shadow-lg transition-all duration-500 transform group-hover:scale-105 group-hover:shadow-xl">
                    <div class="absolute inset-0 bg-black opacity-40 rounded-lg group-hover:opacity-0 transition-opacity duration-300"></div>
                    <div class="absolute bottom-4 left-4 text-white font-semibold text-lg drop-shadow-lg">Tech Art</div>
                </div>

                <div class="relative group cursor-pointer">
                    <img src="{{ asset('asset/images/artwork10.jpg') }}"
                         alt="Digital Evolution"
                         class="w-full h-64 object-cover rounded-lg shadow-lg transition-all duration-500 transform group-hover:scale-105 group-hover:shadow-xl">
                    <div class="absolute inset-0 bg-black opacity-40 rounded-lg group-hover:opacity-0 transition-opacity duration-300"></div>
                    <div class="absolute bottom-4 left-4 text-white font-semibold text-lg drop-shadow-lg">Digital Evolution</div>
                </div>

                <div class="relative group cursor-pointer">
                    <img src="{{ asset('asset/images/artwork11.jpg') }}"
                         alt="Modern Masterpiece"
                         class="w-full h-64 object-cover rounded-lg shadow-lg transition-all duration-500 transform group-hover:scale-105 group-hover:shadow-xl">
                    <div class="absolute inset-0 bg-black opacity-40 rounded-lg group-hover:opacity-0 transition-opacity duration-300"></div>
                    <div class="absolute bottom-4 left-4 text-white font-semibold text-lg drop-shadow-lg">Modern Masterpiece</div>
                </div>

                <div class="relative group cursor-pointer">
                    <img src="{{ asset('asset/images/artwork12.jpg') }}"
                         alt="Digital Expression"
                         class="w-full h-64 object-cover rounded-lg shadow-lg transition-all duration-500 transform group-hover:scale-105 group-hover:shadow-xl">
                    <div class="absolute inset-0 bg-black opacity-40 rounded-lg group-hover:opacity-0 transition-opacity duration-300"></div>
                    <div class="absolute bottom-4 left-4 text-white font-semibold text-lg drop-shadow-lg">Digital Expression</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div id="imageModal" class="fixed inset-0 bg-black bg-opacity-75 hidden z-50 flex items-center justify-center">
        <div class="max-w-4xl w-full mx-4">
            <div class="relative">
                <button onclick="closeModal()" class="absolute -top-10 right-0 text-white text-xl hover:text-gray-300">&times; Close</button>
                <img id="modalImage" src="" alt="" class="w-full rounded-lg">
                <h3 id="modalTitle" class="text-white text-xl font-semibold mt-4 text-center"></h3>
            </div>
        </div>
    </div>

    <!-- JavaScript for Modal -->
    <script>
        function openModal(imageSrc, title) {
            const modal = document.getElementById('imageModal');
            const modalImage = document.getElementById('modalImage');
            const modalTitle = document.getElementById('modalTitle');

            modalImage.src = imageSrc;
            modalTitle.textContent = title;
            modal.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }

        function closeModal() {
            const modal = document.getElementById('imageModal');
            modal.classList.add('hidden');
            document.body.style.overflow = 'auto';
        }

        // Close modal when clicking outside the image
        document.getElementById('imageModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeModal();
            }
        });

        // Close modal with ESC key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeModal();
            }
        });
    </script>
@endsection
