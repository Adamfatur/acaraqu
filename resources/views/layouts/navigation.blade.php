<nav x-data="{ scrolled: false, mobileMenuOpen: false }" @scroll.window="scrolled = (window.pageYOffset > 20)"
    :class="{ 'bg-white/80 backdrop-blur-lg border-b border-white/20': scrolled, 'bg-transparent py-4': !scrolled }"
    class="fixed w-full z-50 transition-all duration-500 top-0 left-0">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center transition-all duration-300" :class="scrolled ? 'h-16' : 'h-20'">
            <!-- Logo -->
            <div class="flex-shrink-0 flex items-center">
                <a href="{{ route('home') }}"
                    class="text-2xl font-bold text-slate-800 tracking-tight flex items-center gap-2 group">
                    <span
                        class="w-10 h-10 rounded-xl bg-blue-chill text-white flex items-center justify-center text-xl font-bold shadow-lg shadow-blue-chill/30 group-hover:scale-105 transition-transform duration-300">A</span>
                    <span class="group-hover:text-blue-chill transition-colors duration-300">AcaraQu</span>
                </a>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden md:flex space-x-1 items-center bg-white/50 backdrop-blur-md px-2 py-1.5 rounded-full border border-white/20 shadow-sm">
                <a href="{{ route('home') }}"
                    class="px-5 py-2 text-sm font-medium rounded-full text-slate-600 hover:text-blue-chill hover:bg-white transition-all duration-300">Home</a>

                <!-- Dropdown Layanan -->
                <div class="relative" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                    <button
                        class="px-5 py-2 text-sm font-medium rounded-full text-slate-600 hover:text-blue-chill hover:bg-white transition-all duration-300 flex items-center gap-1 group">
                        Layanan
                        <svg class="w-3.5 h-3.5 transition-transform duration-300 group-hover:rotate-180"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div x-show="open" x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 translate-y-2"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:leave="transition ease-in duration-150"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave-end="opacity-0 translate-y-2"
                        class="absolute left-1/2 -translate-x-1/2 mt-2 w-64 rounded-2xl shadow-xl shadow-blue-chill/5 bg-white/90 backdrop-blur-xl border border-white/50 p-2 focus:outline-none z-50">
                        <div class="grid gap-1">
                            <a href="{{ route('galeriqu') }}"
                                class="flex items-start gap-3 p-3 rounded-xl hover:bg-blue-50/80 transition-colors group">
                                <div class="w-8 h-8 rounded-lg bg-blue-100 text-blue-chill flex items-center justify-center group-hover:scale-110 transition-transform">
                                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                                </div>
                                <div>
                                    <span class="font-semibold text-slate-800 text-sm block group-hover:text-blue-chill transition-colors">GaleriQu</span>
                                    <span class="text-xs text-slate-500 line-clamp-1">Dokumentasi & Kreatif</span>
                                </div>
                            </a>
                            <a href="{{ route('hadirqu') }}"
                                class="flex items-start gap-3 p-3 rounded-xl hover:bg-blue-50/80 transition-colors group">
                                <div class="w-8 h-8 rounded-lg bg-green-100 text-green-600 flex items-center justify-center group-hover:scale-110 transition-transform">
                                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/></svg>
                                </div>
                                <div>
                                    <span class="font-semibold text-slate-800 text-sm block group-hover:text-blue-chill transition-colors">HadirQu</span>
                                    <span class="text-xs text-slate-500 line-clamp-1">Buku Tamu Digital</span>
                                </div>
                            </a>
                            <a href="{{ route('kreasiqu') }}"
                                class="flex items-start gap-3 p-3 rounded-xl hover:bg-blue-50/80 transition-colors group">
                                <div class="w-8 h-8 rounded-lg bg-purple-100 text-purple-600 flex items-center justify-center group-hover:scale-110 transition-transform">
                                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
                                </div>
                                <div>
                                    <span class="font-semibold text-slate-800 text-sm block group-hover:text-blue-chill transition-colors">KreasiQu</span>
                                    <span class="text-xs text-slate-500 line-clamp-1">Merchandise & Florist</span>
                                </div>
                            </a>
                            <a href="{{ route('undanganqu') }}"
                                class="flex items-start gap-3 p-3 rounded-xl hover:bg-blue-50/80 transition-colors group">
                                <div class="w-8 h-8 rounded-lg bg-blue-chill/10 text-blue-chill flex items-center justify-center group-hover:scale-110 transition-transform">
                                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                                </div>
                                <div>
                                    <span class="font-semibold text-slate-800 text-sm block group-hover:text-blue-chill transition-colors">UndanganQu</span>
                                    <span class="text-xs text-slate-500 line-clamp-1">Digital Invitation</span>
                                </div>
                            </a>
                            <a href="{{ route('digitalqu') }}"
                                class="flex items-start gap-3 p-3 rounded-xl hover:bg-blue-50/80 transition-colors group">
                                <div class="w-8 h-8 rounded-lg bg-blue-chill/10 text-blue-chill flex items-center justify-center group-hover:scale-110 transition-transform">
                                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>
                                </div>
                                <div>
                                    <span class="font-semibold text-slate-800 text-sm block group-hover:text-blue-chill transition-colors">DigitalQu</span>
                                    <span class="text-xs text-slate-500 line-clamp-1">Software Solutions</span>
                                </div>
                            </a>
                            <a href="{{ route('fotoqu') }}"
                                class="flex items-start gap-3 p-3 rounded-xl hover:bg-blue-50/80 transition-colors group">
                                <div class="w-8 h-8 rounded-lg bg-pink-100 text-pink-500 flex items-center justify-center group-hover:scale-110 transition-transform">
                                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"/></svg>
                                </div>
                                <div>
                                    <span class="font-semibold text-slate-800 text-sm block group-hover:text-pink-500 transition-colors">FotoQu</span>
                                    <span class="text-xs text-slate-500 line-clamp-1">Fun Photobooth</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <a href="#portofolio" class="px-5 py-2 text-sm font-medium rounded-full text-slate-600 hover:text-blue-chill hover:bg-white transition-all duration-300">Portofolio</a>
                <a href="#contact" class="px-5 py-2 text-sm font-medium rounded-full text-slate-600 hover:text-blue-chill hover:bg-white transition-all duration-300">Kontak</a>
            </div>

            <!-- CTA Button -->
            <div class="hidden md:flex items-center gap-4">
                <a href="#contact" class="text-slate-600 font-medium hover:text-blue-chill transition text-sm">Masuk</a>
                <a href="#contact"
                    class="group relative px-6 py-2.5 rounded-full bg-blue-chill text-white font-semibold text-sm shadow-lg shadow-blue-chill/20 hover:bg-slate-900 transition-all duration-300 overflow-hidden">
                    <span class="relative z-10">Hubungi Kami</span>
                </a>
            </div>

            <!-- Mobile menu button -->
            <div class="flex items-center md:hidden">
                <button @click="mobileMenuOpen = !mobileMenuOpen"
                    class="text-slate-600 hover:text-blue-chill focus:outline-none">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div x-show="mobileMenuOpen" class="md:hidden bg-white border-t border-gray-100">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
            <a href="{{ route('home') }}"
                class="block px-3 py-2 rounded-md text-base font-medium text-blue-chill bg-blue-50">Home</a>
            <a href="#galeri"
                class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-blue-chill hover:bg-gray-50">Layanan</a>
            <a href="#portofolio"
                class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-blue-chill hover:bg-gray-50">Portofolio</a>
            <a href="#contact"
                class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-blue-chill hover:bg-gray-50">Kontak</a>
            <a href="#contact"
                class="block w-full text-center mt-4 px-6 py-3 rounded-full font-medium bg-blue-chill text-white">Hubungi
                Kami</a>
        </div>
    </div>
</nav>