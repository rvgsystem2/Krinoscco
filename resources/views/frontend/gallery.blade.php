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

            <!-- Gallery Grid with all image paths stored as data attributes -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8" id="galleryGrid">
                @for ($i = 1; $i <= 50; $i++)
                    <div
                        class="group relative overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition-all duration-300">
                        <img src="{{ asset('asset/gallery/gallery-' . $i . '.jpg') }}"
                            alt="Digital Artwork {{ $i }}"
                            class="w-full h-64 object-cover rounded-lg cursor-pointer transition-all duration-300 group-hover:scale-105"
                            onclick="openModal('{{ asset('asset/gallery/gallery-' . $i . '.jpg') }}', 'Digital Artwork {{ $i }}', {{ $i }})"
                            loading="lazy" data-index="{{ $i }}"
                            data-src="{{ asset('asset/gallery/gallery-' . $i . '.jpg') }}"
                            onerror="this.onerror=null; this.src='{{ asset('asset/gallery/gallery-16.jpg') }}'">
                        <div
                            class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black to-transparent p-3 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <h3 class="text-white font-medium">Digital Artwork {{ $i }}</h3>
                        </div>
                    </div>
                @endfor
            </div>


        </div>
    </section>

    <!-- Enhanced Image Modal -->
    <div id="imageModal"
        class="fixed inset-0 bg-black bg-opacity-90 flex items-center justify-center hidden z-50 transition-opacity duration-300 opacity-0">
        <div class="relative max-w-5xl w-full mx-4">
            <!-- Close button -->
            <button onclick="closeModal()"
                class="absolute -top-10 right-0 text-white hover:text-red-400 transition-colors duration-200 focus:outline-none z-10">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>

            <!-- Navigation buttons - Fixed positioning and increased visibility -->
            <button id="prevButton"
                class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-black bg-opacity-80 hover:bg-opacity-100 text-white p-3 rounded-full transition-all duration-200 focus:outline-none z-20 shadow-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                </svg>
            </button>

            <button id="nextButton"
                class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-black bg-opacity-80 hover:bg-opacity-100 text-white p-3 rounded-full transition-all duration-200 focus:outline-none z-20 shadow-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                </svg>
            </button>

            <!-- Image container with download option -->
            <div class="rounded-lg overflow-hidden shadow-2xl bg-black relative group">
                <img id="modalImage"
                    class="max-w-full max-h-[80vh] mx-auto object-contain transition-transform duration-300"
                    alt="Full-size artwork">

                <!-- Caption and download button -->
                <div class="absolute bottom-0 left-0 right-0 bg-black bg-opacity-70 p-4 flex justify-between items-center">
                    <h3 id="modalCaption" class="text-white font-medium text-lg"></h3>
                    <a id="downloadButton" href="#" download
                        class="text-white hover:text-blue-300 transition-colors duration-200 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                        </svg>
                        <span class="hidden sm:inline">Download</span>
                    </a>
                </div>

                <!-- Zoom controls -->
                <div class="absolute top-4 right-4 bg-black bg-opacity-50 rounded-lg p-2 flex space-x-2">
                    <button onclick="zoomIn()"
                        class="text-white hover:text-blue-300 transition-colors duration-200 focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v6m4-3H6" />
                        </svg>
                    </button>
                    <button onclick="zoomOut()"
                        class="text-white hover:text-blue-300 transition-colors duration-200 focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM13 10H7" />
                        </svg>
                    </button>
                    <button onclick="resetZoom()"
                        class="text-white hover:text-blue-300 transition-colors duration-200 focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        let currentIndex = 0;
        let totalImages = 50;
        let zoomLevel = 1;
        const zoomStep = 0.25;
        const minZoom = 0.5;
        const maxZoom = 3;
        let imagePaths = [];

        // Initialize modal with keyboard event listeners
        document.addEventListener("DOMContentLoaded", function() {
            // Collect all image paths from the grid
            const imageElements = document.querySelectorAll('#galleryGrid img');

            // Create a map of image indices to their paths
            imageElements.forEach(img => {
                const index = parseInt(img.getAttribute('data-index'));
                const src = img.getAttribute('data-src');
                imagePaths[index] = src;
            });

            // Debug output to console
            console.log("Collected image paths:", imagePaths);

            // Add keyboard navigation
            document.addEventListener('keydown', function(e) {
                if (!document.getElementById('imageModal').classList.contains('hidden')) {
                    if (e.key === 'Escape') closeModal();
                    if (e.key === 'ArrowRight') navigateImage(1);
                    if (e.key === 'ArrowLeft') navigateImage(-1);
                    if (e.key === '+' || e.key === '=') zoomIn();
                    if (e.key === '-') zoomOut();
                    if (e.key === '0') resetZoom();
                }
            });

            // Add click listeners to modal
            document.getElementById('imageModal').addEventListener('click', function(e) {
                if (e.target === this) closeModal();
            });

            // Add navigation button listeners
            document.getElementById('prevButton').addEventListener('click', function(e) {
                e.stopPropagation(); // Prevent event bubbling
                navigateImage(-1);
            });

            document.getElementById('nextButton').addEventListener('click', function(e) {
                e.stopPropagation(); // Prevent event bubbling
                navigateImage(1);
            });

            console.log("Gallery initialized with " + totalImages + " images");
        });

        function openModal(imageUrl, caption, index) {
            // Set current index
            currentIndex = index || 1;

            const modal = document.getElementById('imageModal');
            const modalImage = document.getElementById('modalImage');
            const modalCaption = document.getElementById('modalCaption');
            const downloadButton = document.getElementById('downloadButton');

            // Reset zoom when opening new image
            resetZoom();

            // Set image and caption
            modalImage.src = imageUrl;
            modalImage.alt = caption || `Digital Artwork ${currentIndex}`;
            modalCaption.textContent = caption || `Digital Artwork ${currentIndex}`;

            // Set download link
            downloadButton.href = imageUrl;
            downloadButton.download = `digital-artwork-${currentIndex}.jpg`;

            // Show modal with animation
            modal.classList.remove('hidden');
            setTimeout(() => {
                modal.classList.add('opacity-100');
                modal.classList.remove('opacity-0');
            }, 10);

            // Prevent scrolling on body
            document.body.style.overflow = 'hidden';

            console.log("Modal opened with image index:", currentIndex);
        }

        function closeModal() {
            const modal = document.getElementById('imageModal');

            // Hide modal with animation
            modal.classList.add('opacity-0');
            modal.classList.remove('opacity-100');

            setTimeout(() => {
                modal.classList.add('hidden');

                // Reset zoom when closing
                resetZoom();

                // Re-enable scrolling
                document.body.style.overflow = '';
            }, 300);
        }

        function navigateImage(direction) {
            // Calculate new index with wrapping
            currentIndex = ((currentIndex + direction - 1 + totalImages) % totalImages) + 1;

            console.log("Navigating to image index:", currentIndex);

            // Get image URL from our stored paths array
            const newImageUrl = imagePaths[currentIndex];
            console.log("New image URL:", newImageUrl);

            const newCaption = `Digital Artwork ${currentIndex}`;

            // Update modal content
            document.getElementById('modalImage').src = newImageUrl;
            document.getElementById('modalImage').alt = newCaption;
            document.getElementById('modalCaption').textContent = newCaption;

            // Update download link
            document.getElementById('downloadButton').href = newImageUrl;
            document.getElementById('downloadButton').download = `digital-artwork-${currentIndex}.jpg`;

            // Reset zoom when navigating
            resetZoom();
        }

        function zoomIn() {
            if (zoomLevel < maxZoom) {
                zoomLevel += zoomStep;
                applyZoom();
            }
        }

        function zoomOut() {
            if (zoomLevel > minZoom) {
                zoomLevel -= zoomStep;
                applyZoom();
            }
        }

        function resetZoom() {
            zoomLevel = 1;
            applyZoom();
        }

        function applyZoom() {
            document.getElementById('modalImage').style.transform = `scale(${zoomLevel})`;
        }
    </script>
@endsection
