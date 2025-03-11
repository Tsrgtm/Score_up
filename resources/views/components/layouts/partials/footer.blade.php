<footer class="bg-amber-900 text-white px-4 sm:px-12 lg:px-20 py-12">
    <div class="max-w-7xl mx-auto">
        <!-- Footer Content -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <!-- Column 1: Brand & Description -->
            <div x-data="{ isVisible: false }"
                 x-init="$nextTick(() => isVisible = true)"
                 x-show="isVisible"
                 x-transition:enter="transition ease-out duration-700 delay-100"
                 x-transition:enter-start="opacity-0 translate-y-10"
                 x-transition:enter-end="opacity-100 translate-y-0">
                <h3 class="text-2xl font-sans font-bold text-amber-200">Score Up</h3>
                <p class="mt-4 text-amber-100 font-serif text-sm">
                    Your ultimate companion for DET preparation, offering practice questions, mock exams, expert feedback, and advanced analytics to boost your scores.
                </p>
            </div>

            <!-- Column 2: Quick Links -->
            <div x-data="{ isVisible: false }"
                 x-init="$nextTick(() => isVisible = true)"
                 x-show="isVisible"
                 x-transition:enter="transition ease-out duration-700 delay-200"
                 x-transition:enter-start="opacity-0 translate-y-10"
                 x-transition:enter-end="opacity-100 translate-y-0">
                <h4 class="text-lg font-sans font-semibold text-amber-200">Quick Links</h4>
                <ul class="mt-4 space-y-3 text-amber-100 font-serif text-sm">
                    <li><a href="#" class="hover:text-amber-400 transition-colors duration-200">Pricing</a></li>
                    <li><a href="#features" class="hover:text-amber-400 transition-colors duration-200">Features</a></li>
                    <li><a href="#about" class="hover:text-amber-400 transition-colors duration-200">About Us</a></li>
                    <li><a href="#contact" class="hover:text-amber-400 transition-colors duration-200">Contact</a></li>
                </ul>
            </div>

            <!-- Column 3: Contact Info -->
            <div x-data="{ isVisible: false }"
                 x-init="$nextTick(() => isVisible = true)"
                 x-show="isVisible"
                 x-transition:enter="transition ease-out duration-700 delay-300"
                 x-transition:enter-start="opacity-0 translate-y-10"
                 x-transition:enter-end="opacity-100 translate-y-0">
                <h4 class="text-lg font-sans font-semibold text-amber-200">Get in Touch</h4>
                <ul class="mt-4 space-y-3 text-amber-100 font-serif text-sm">
                    <li class="flex items-center">
                        <x-heroicon-o-envelope class="w-5 h-5 text-amber-400 mr-2" />
                        <a href="mailto:support@scoreup.com" class="hover:text-amber-400 transition-colors duration-200">support@scoreup.com</a>
                    </li>
                    <li class="flex items-center">
                        <x-heroicon-o-phone class="w-5 h-5 text-amber-400 mr-2" />
                        +977-1-123-4567
                    </li>
                    <li class="flex items-center">
                        <x-heroicon-o-map-pin class="w-5 h-5 text-amber-400 mr-2" />
                        Kathmandu, Nepal
                    </li>
                </ul>
            </div>

            <!-- Column 4: Social Media -->
            <div x-data="{ isVisible: false }"
                 x-init="$nextTick(() => isVisible = true)"
                 x-show="isVisible"
                 x-transition:enter="transition ease-out duration-700 delay-400"
                 x-transition:enter-start="opacity-0 translate-y-10"
                 x-transition:enter-end="opacity-100 translate-y-0">
                <h4 class="text-lg font-sans font-semibold text-amber-200">Follow Us</h4>
                <div class="mt-4 flex space-x-4">
                    <a href="https://facebook.com/scoreup" target="_blank" class="text-amber-100 hover:text-amber-400 transition-colors duration-200">
                        <i class="fa-brands fa-facebook"></i>
                    </a>
                    <a href="https://twitter.com/scoreup" target="_blank" class="text-amber-100 hover:text-amber-400 transition-colors duration-200">
                        <i class="fa-brands fa-x-twitter"></i>
                    </a>
                    <a href="https://instagram.com/scoreup" target="_blank" class="text-amber-100 hover:text-amber-400 transition-colors duration-200">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a href="https://linkedin.com/company/scoreup" target="_blank" class="text-amber-100 hover:text-amber-400 transition-colors duration-200">
                        <i class="fa-brands fa-linkedin-in"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Divider -->
        <div class="mt-12 border-t border-amber-800"></div>

        <!-- Copyright -->
        <div class="mt-6 text-center"
             x-data="{ isVisible: false }"
             x-init="$nextTick(() => isVisible = true)"
             x-show="isVisible"
             x-transition:enter="transition ease-out duration-700 delay-500"
             x-transition:enter-start="opacity-0 translate-y-10"
             x-transition:enter-end="opacity-100 translate-y-0">
            <p class="text-amber-100 font-serif text-sm">
                &copy; {{ now()->year }} Score Up. All rights reserved.
            </p>
        </div>
    </div>
</footer>