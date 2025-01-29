<style>
    /* Footer specific animations */
    .social-icon {
        transition: all 0.3s ease;
    }

    .social-icon:hover {
        transform: translateY(-3px);
        filter: brightness(1.2);
    }

    .footer-link {
        position: relative;
        perspective: 1000px;
        transform-style: preserve-3d;
        transition: transform 0.3s ease;
    }

    .footer-link:hover {
        transform: translateZ(20px);
    }

    .footer-link::before {
        content: '';
        position: absolute;
        inset: -2px;
        background: linear-gradient(45deg,
                rgba(255, 187, 36, 0),
                rgba(255, 187, 36, 0.3),
                rgba(255, 187, 36, 0));
        transform: translateZ(-1px);
        opacity: 0;
        transition: opacity 0.3s ease;
        border-radius: 4px;
    }

    .footer-link:hover::before {
        opacity: 1;
    }

    .footer-link::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        width: 0;
        height: 2px;
        background: linear-gradient(90deg,
                transparent,
                #FBBF24,
                transparent);
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        transform: translateX(-50%);
    }

    .footer-link:hover::after {
        width: 100%;
    }


    .footer-link:hover::after {
        width: 100%;
    }

    /* Premium styling for the footer */
    .premium-footer {
        background: linear-gradient(45deg, #1D1D1D, #0D0630);
        color: white;
        border-top: 4px solid burlywood;
    }
</style>

<footer class="premium-footer">
    <!-- Main Footer Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Hotel Info -->
            <div class="space-y-4">
                <img src="{{ asset('asset/images/logo.png') }}" alt="Hotel Krinoscco Logo" class="w-24 h-auto mb-6" />
                <h3 class="text-2xl font-bold text-white mb-6">Hotel Krinoscco</h3>
                <div class="flex items-center space-x-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    <span class="text-sm">Hotel Krinoscco, Amaniganj Ram Path, Ayodhya U.P, 224001</span>
                </div>
                <div class="flex items-center space-x-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                    <span class="text-sm">+91-7275092525</span>
                </div>
                <div class="flex items-center space-x-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    <span class="text-sm">info@krinoscco.com</span>
                </div>
            </div>

            <!-- Useful Links -->
            <div class="space-y-4">
                <h3 class="text-xl font-semibold text-white mb-6">Useful Links</h3>
                <ul class="space-y-3">
                    <li>
                        <a href="#terms"
                            class="footer-link text-sm hover:text-white transition-colors duration-300">Terms and
                            Conditions</a>
                    </li>
                    <li>
                        <a href="#online-payments"
                            class="footer-link text-sm hover:text-white transition-colors duration-300">General Terms
                            and Conditions For Online-Payments</a>
                    </li>
                    <li>
                        <a href="#liability"
                            class="footer-link text-sm hover:text-white transition-colors duration-300">Limitation of
                            Liability</a>
                    </li>
                    <li>
                        <a href="#conditions"
                            class="footer-link text-sm hover:text-white transition-colors duration-300">Miscellaneous
                            Conditions</a>
                    </li>
                    <li>
                        <a href="#payment-details"
                            class="footer-link text-sm hover:text-white transition-colors duration-300">Debit/Credit
                            Card, Bank Account Details</a>
                    </li>
                    <li>
                        <a href="#privacy"
                            class="footer-link text-sm hover:text-white transition-colors duration-300">Personal
                            Information</a>
                    </li>
                    <li>
                        <a href="#cancellation"
                            class="footer-link text-sm hover:text-white transition-colors duration-300">Cancellation
                            Policy</a>
                    </li>
                </ul>
            </div>

            <!-- Map & Location -->
            <div class="space-y-4">
                <h3 class="text-xl font-semibold text-white mb-6">Our Location</h3>
                <!-- Google Map iframe (customize the src link to match your location) -->
                <iframe class="w-full h-56 rounded-lg shadow-lg"
                    src="https://www.google.com/maps/embed?pb=YOUR_MAP_LINK" frameborder="0" style="border:0;"
                    allowfullscreen=""></iframe>
            </div>
        </div>
    </div>

    <!-- Social Media Section -->
    <div class="text-center py-6">
        <h3 class="text-lg font-semibold text-white mb-4">Follow us on</h3>
        <a href="https://facebook.com" target="_blank" class="social-icon text-white mx-4 text-2xl">
            <i class="fab fa-facebook"></i>
        </a>
        <a href="https://instagram.com" target="_blank" class="social-icon text-white mx-4 text-2xl">
            <i class="fab fa-instagram"></i>
        </a>
        <a href="https://twitter.com" target="_blank" class="social-icon text-white mx-4 text-2xl">
            <i class="fab fa-twitter"></i>
        </a>
        <a href="https://linkedin.com" target="_blank" class="social-icon text-white mx-4 text-2xl">
            <i class="fab fa-linkedin"></i>
        </a>
    </div>

    <!-- Bottom Bar -->
    <div class="border-t border-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
            <div class="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
                <div class="text-sm text-gray-400">
                    Copyright © 2022 Hotel Krinoscco
                </div>
                <div class="text-sm text-gray-400">
                    Powered by <a href="#" class="text-blue-400 hover:text-blue-300">Stagnat Digital</a>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Add FontAwesome for the icons -->
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
