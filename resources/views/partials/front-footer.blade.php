{{-- resources/views/components/footer.blade.php --}}

<footer class="bg-white text-gray-600 py-12 border-t border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">

            {{-- ① Contact Us --}}
            <div class="space-y-5">

                {{-- Logo --}}
                <a href="{{ url('/') }}" class="flex items-center gap-3 no-underline">
                    <div class="bg-gray-100 p-1.5 rounded-lg shadow-md">
                        <img src="{{ asset('/logo-footer.PNG') }}" alt="Logo" class="h-32 w-38">
                    </div>
                </a>

                {{-- Contact Info --}}
                <h4 class="text-sm font-semibold text-gray-900 uppercase tracking-wider">Contact Us</h4>
                <ul class="space-y-3">
                    <li class="flex items-start gap-3">
                        <i class="fas fa-map-marker-alt mt-1 text-orange-500 text-xs flex-shrink-0"></i>
                        <span class="text-gray-500 text-sm leading-relaxed">
                           South Denpasar, Denpasar City, Bali 80224, Indonesia
                        </span>
                    </li>
                    <li class="flex items-center gap-3">
                        <i class="fas fa-phone text-orange-500 text-xs flex-shrink-0"></i>
                        <span class="text-gray-500 text-sm">+62 82323777479</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <i class="fas fa-envelope text-orange-500 text-xs flex-shrink-0"></i>
                        <a href="mailto:zubilantjourneys@gmail.com"
                            class="text-gray-500 text-sm hover:text-orange-500 transition-colors duration-200">
                            zubilantjourneys@gmail.com
                        </a>
                    </li>
                </ul>
            </div>

            {{-- ② About --}}
            <div>
                <h3 class="text-sm font-semibold text-gray-900 mb-6 uppercase tracking-wider">About</h3>
                <ul class="space-y-4">
                    <li>
                        <a href="{{ route('terms') }}"
                            class="text-gray-500 hover:text-orange-500 transition-colors duration-300 flex items-center gap-2 text-sm">
                            <i class="fas fa-chevron-right text-xs"></i>
                            Terms &amp; condition
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('help') }}"
                            class="text-gray-500 hover:text-orange-500 transition-colors duration-300 flex items-center gap-2 text-sm">
                            <i class="fas fa-chevron-right text-xs"></i>
                            Help Center
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('about') }}"
                            class="text-gray-500 hover:text-orange-500 transition-colors duration-300 flex items-center gap-2 text-sm">
                            <i class="fas fa-chevron-right text-xs"></i>
                            About Us
                        </a>
                    </li>
                </ul>
            </div>

            {{-- ③ Follow Us On --}}
            <div>
                <h3 class="text-sm font-semibold text-gray-900 mb-6 uppercase tracking-wider">Follow Us On</h3>
                <div class="flex items-center gap-3 flex-wrap">
                    <a href="https://www.tiktok.com/@zubilantbalitours" target="_blank" rel="noopener noreferrer" aria-label="TikTok"
                        class="w-10 h-10 rounded-full border border-gray-300 flex items-center justify-center text-gray-500 hover:text-orange-500 hover:border-orange-400 hover:bg-orange-50 transition-all duration-300">
                        <i class="fab fa-tiktok text-base"></i>
                    </a>
                     <a href="https://www.facebook.com/share/1AfJNHonWe/?mibextid=wwXIfr" target="_blank" rel="noopener noreferrer" aria-label="Facebook"
                        class="w-10 h-10 rounded-full border border-gray-300 flex items-center justify-center text-gray-500 hover:text-orange-500 hover:border-orange-400 hover:bg-orange-50 transition-all duration-300">
                        <i class="fab fa-facebook-f text-base"></i>
                    </a>
                    <a href="https://www.instagram.com/zubilantbalitours/" target="_blank" rel="noopener noreferrer" aria-label="Instagram"
                        class="w-10 h-10 rounded-full border border-gray-300 flex items-center justify-center text-gray-500 hover:text-orange-500 hover:border-orange-400 hover:bg-orange-50 transition-all duration-300">
                        <i class="fab fa-instagram text-base"></i>
                    </a>
                    <a href="https://www.youtube.com/@zubilantbalitours" target="_blank" rel="noopener noreferrer" aria-label="Instagram"
                        class="w-10 h-10 rounded-full border border-gray-300 flex items-center justify-center text-gray-500 hover:text-orange-500 hover:border-orange-400 hover:bg-orange-50 transition-all duration-300">
                        <i class="fab fa-youtube text-base"></i>
                    </a>
                </div>
            </div>

            {{-- ④ Accepted Payment --}}
            <div>
                <h3 class="text-sm font-semibold text-gray-900 mb-6 uppercase tracking-wider">Accepted Payment</h3>
                <div class="flex items-center gap-3 flex-wrap">

                    {{-- Mastercard --}}
                    <div
                        class="bg-gray-50 border border-gray-200 rounded-md px-3 py-2 flex items-center justify-center h-10 min-w-[56px]">
                        <div class="flex items-center">
                            <div class="w-6 h-6 rounded-full bg-red-600"></div>
                            <div class="w-6 h-6 rounded-full bg-yellow-400 -ml-3 opacity-90"></div>
                        </div>
                    </div>

                    {{-- Visa --}}
                    <div
                        class="bg-gray-50 border border-gray-200 rounded-md px-3 py-2 flex items-center justify-center h-10 min-w-[56px]">
                        <span class="font-bold text-lg tracking-tight"
                            style="color:#1a1f71; font-family:serif;">VISA</span>
                    </div>

                    {{-- JBC --}}
                    <div
                        class="bg-[#0A2240] border border-[#0A2240] rounded-md px-3 py-2 flex items-center justify-center h-10 min-w-[56px]"
                        aria-label="JBC">
                        <span class="font-bold text-sm tracking-wider text-white">JBC</span>
                    </div>

                </div>
            </div>

        </div>{{-- /grid --}}

        {{-- Bottom Bar --}}
        <div
            class="mt-12 pt-8 border-t border-gray-200 flex flex-col md:flex-row justify-between items-center text-sm text-gray-400">
            <p class="text-center md:text-left">&copy; {{ date('Y') }} Zubilant Bali Tours. All rights reserved. <span class="hidden md:inline">|</span> <span class="block md:inline mt-1 md:mt-0">Created by <a href="https://wiklycode.vercel.app/" target="_blank" rel="noopener noreferrer" class="text-orange-500 hover:text-orange-600 transition-colors duration-200 font-semibold">WiklyCode.dev</a></span></p>
            <div class="mt-4 md:mt-0 flex gap-5">
                <a href="{{ route('terms') }}" class="hover:text-orange-500 transition-colors duration-200">Terms &amp; Conditions</a>
                <a href="#" class="hover:text-orange-500 transition-colors duration-200">Privacy Policy</a>
                <a href="{{ route('help') }}" class="hover:text-orange-500 transition-colors duration-200">Help Center</a>
            </div>
        </div>

    </div>
</footer>