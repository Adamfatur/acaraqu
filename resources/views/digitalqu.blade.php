<x-layouts.app>
    @section('title', 'DigitalQu - Jasa Pembuatan Software & Website Profesional')
    @section('meta_description', 'Jasa pembuatan software web (Laravel, Next.js), website WordPress SEO friendly, dan instalasi/upgrade OJS. Harga mulai 500k.')

    <!-- Hero Section -->
    <section class="relative min-h-[90vh] flex items-center justify-center bg-iron overflow-hidden">
        <!-- Background Effects -->
        <div class="absolute inset-0 w-full h-full overflow-hidden">
            <div class="absolute -top-[20%] -left-[10%] w-[70%] h-[70%] bg-white/40 rounded-full blur-[100px]"></div>
            <div class="absolute top-[40%] -right-[10%] w-[60%] h-[60%] bg-blue-chill/10 rounded-full blur-[100px]">
            </div>
            <div class="absolute bottom-0 left-0 w-full h-1/2 bg-gradient-to-t from-white/50 to-transparent"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div
                class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/60 border border-regent-gray/30 backdrop-blur-sm mb-8 animate-fade-in-up shadow-sm">
                <span class="flex h-2 w-2 relative">
                    <span
                        class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-chill opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-blue-chill"></span>
                </span>
                <span class="text-sm font-medium text-blue-chill tracking-wide">OPEN FOR NEW PROJECTS</span>
            </div>

            <h1 class="text-5xl md:text-7xl font-bold text-slate-800 mb-8 tracking-tight leading-tight animate-fade-in-up"
                style="animation-delay: 0.1s">
                Transformasi Digital <br>
                <span class="text-blue-chill">Tanpa Batas.</span>
            </h1>

            <p class="text-xl text-gothic mb-12 max-w-2xl mx-auto leading-relaxed animate-fade-in-up font-medium"
                style="animation-delay: 0.2s">
                Mitra teknologi strategis untuk pertumbuhan bisnis Anda. Dari website UMKM yang elegan hingga sistem
                perusahaan yang kompleks dan terintegrasi.
            </p>

            <div class="flex flex-col sm:flex-row items-center justify-center gap-4 animate-fade-in-up"
                style="animation-delay: 0.3s">
                <a href="#pricing"
                    class="w-full sm:w-auto px-8 py-4 rounded-full bg-blue-chill text-white font-bold hover:bg-[#0f6070] hover:shadow-lg hover:shadow-blue-chill/30 transition-all transform hover:-translate-y-1">
                    Mulai Dari 500k
                </a>
                <a href="https://wa.me/6281234567890?text=Halo,%20saya%20tertarik%20dengan%20jasa%20DigitalQu."
                    target="_blank"
                    class="w-full sm:w-auto px-8 py-4 rounded-full bg-white border-2 border-blue-chill text-blue-chill font-bold hover:bg-blue-50 transition-all">
                    Konsultasi Gratis
                </a>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-32 bg-white relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-20">
                <h2 class="text-3xl md:text-5xl font-bold text-slate-800 mb-6">Layanan Unggulan</h2>
                <p class="text-gothic text-lg max-w-2xl mx-auto">
                    Solusi komprehensif yang dirancang dengan estetika Nordic dan performa tinggi.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Web Software -->
                <div
                    class="group relative p-8 rounded-[2rem] bg-iron/30 border border-regent-gray/20 hover:border-blue-chill/50 hover:bg-white hover:shadow-xl hover:shadow-blue-chill/5 transition-all duration-500 hover:-translate-y-2">
                    <div
                        class="w-16 h-16 rounded-2xl bg-blue-chill/10 flex items-center justify-center mb-8 group-hover:scale-110 transition-transform duration-500">
                        <svg class="w-8 h-8 text-blue-chill" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                        </svg>
                    </div>

                    <h3 class="text-2xl font-bold text-slate-800 mb-4">Custom Software</h3>
                    <p class="text-gothic leading-relaxed mb-8">
                        Pengembangan software berbasis web dengan teknologi modern seperti <span
                            class="text-blue-chill font-semibold">PHP, Laravel, dan Next.js</span>. Solusi yang
                        disesuaikan dengan kompleksitas dan kebutuhan bisnis Anda.
                    </p>

                    <ul class="space-y-3 border-t border-regent-gray/20 pt-6">
                        <li class="flex items-center text-slate-600 text-sm font-medium">
                            <svg class="w-5 h-5 text-blue-chill mr-3" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                            Scalable Architecture
                        </li>
                        <li class="flex items-center text-slate-600 text-sm font-medium">
                            <svg class="w-5 h-5 text-blue-chill mr-3" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                            High Performance
                        </li>
                    </ul>
                </div>

                <!-- WordPress -->
                <div
                    class="group relative p-8 rounded-[2rem] bg-iron/30 border border-regent-gray/20 hover:border-blue-chill/50 hover:bg-white hover:shadow-xl hover:shadow-blue-chill/5 transition-all duration-500 hover:-translate-y-2">
                    <div
                        class="w-16 h-16 rounded-2xl bg-blue-chill/10 flex items-center justify-center mb-8 group-hover:scale-110 transition-transform duration-500">
                        <svg class="w-8 h-8 text-blue-chill" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19.428 15.428a2 2 0 00-1.022-.547l-2.384-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                        </svg>
                    </div>

                    <h3 class="text-2xl font-bold text-slate-800 mb-4">WordPress Expert</h3>
                    <p class="text-gothic leading-relaxed mb-8">
                        Jasa pembuatan website berbasis WordPress yang <span
                            class="text-blue-chill font-semibold">SEO-friendly</span> dan mudah ditemukan di mesin
                        pencari. Pilihan tepat untuk Company Profile, UMKM, hingga Toko Online.
                    </p>

                    <ul class="space-y-3 border-t border-regent-gray/20 pt-6">
                        <li class="flex items-center text-slate-600 text-sm font-medium">
                            <svg class="w-5 h-5 text-blue-chill mr-3" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                            Google Indexed
                        </li>
                        <li class="flex items-center text-slate-600 text-sm font-medium">
                            <svg class="w-5 h-5 text-blue-chill mr-3" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                            Easy Management
                        </li>
                    </ul>
                </div>

                <!-- OJS -->
                <div
                    class="group relative p-8 rounded-[2rem] bg-iron/30 border border-regent-gray/20 hover:border-blue-chill/50 hover:bg-white hover:shadow-xl hover:shadow-blue-chill/5 transition-all duration-500 hover:-translate-y-2">
                    <div
                        class="w-16 h-16 rounded-2xl bg-blue-chill/10 flex items-center justify-center mb-8 group-hover:scale-110 transition-transform duration-500">
                        <svg class="w-8 h-8 text-blue-chill" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                    </div>

                    <h3 class="text-2xl font-bold text-slate-800 mb-4">OJS Services</h3>
                    <p class="text-gothic leading-relaxed mb-8">
                        Layanan profesional untuk <span class="text-blue-chill font-semibold">instalasi dan upgrade
                            OJS</span> (Open Journal Systems). Kami menjamin keamanan data dalam proses upgrade dari
                        versi 3.3 ke 3.5.
                    </p>

                    <ul class="space-y-3 border-t border-regent-gray/20 pt-6">
                        <li class="flex items-center text-slate-600 text-sm font-medium">
                            <svg class="w-5 h-5 text-blue-chill mr-3" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                            Secure Migration
                        </li>
                        <li class="flex items-center text-slate-600 text-sm font-medium">
                            <svg class="w-5 h-5 text-blue-chill mr-3" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                            Technical Support
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Tech Stack Marquee -->
    <section class="py-16 bg-iron border-y border-regent-gray/20 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <p class="text-center text-regent-gray text-sm font-bold uppercase tracking-[0.2em] mb-10">Powered by Modern
                Technology</p>
            <div
                class="flex flex-wrap justify-center gap-8 md:gap-16 opacity-60 grayscale hover:grayscale-0 transition-all duration-500">
                <span
                    class="text-xl md:text-2xl font-bold text-slate-400 hover:text-[#FF2D20] transition-colors cursor-default">Laravel</span>
                <span
                    class="text-xl md:text-2xl font-bold text-slate-400 hover:text-black transition-colors cursor-default">Next.js</span>
                <span
                    class="text-xl md:text-2xl font-bold text-slate-400 hover:text-[#61DAFB] transition-colors cursor-default">React</span>
                <span
                    class="text-xl md:text-2xl font-bold text-slate-400 hover:text-[#42b883] transition-colors cursor-default">Vue</span>
                <span
                    class="text-xl md:text-2xl font-bold text-slate-400 hover:text-[#38B2AC] transition-colors cursor-default">Tailwind</span>
                <span
                    class="text-xl md:text-2xl font-bold text-slate-400 hover:text-[#00758F] transition-colors cursor-default">MySQL</span>
                <span
                    class="text-xl md:text-2xl font-bold text-slate-400 hover:text-[#2496ED] transition-colors cursor-default">Docker</span>
            </div>
        </div>
    </section>

    <!-- CTA / Pricing Section -->
    <section id="pricing" class="py-32 bg-white relative overflow-hidden">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div
                class="bg-blue-chill rounded-[3rem] p-8 md:p-16 shadow-2xl shadow-blue-chill/20 text-center relative overflow-hidden">
                <!-- Decorative Circles -->
                <div class="absolute top-0 right-0 -mr-20 -mt-20 w-80 h-80 bg-white/10 rounded-full blur-3xl"></div>
                <div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-80 h-80 bg-black/10 rounded-full blur-3xl"></div>

                <h2 class="text-3xl md:text-5xl font-bold text-white mb-6 relative z-10">Siap Mewujudkan Ide Anda?</h2>
                <p class="text-xl text-blue-50 mb-10 max-w-2xl mx-auto relative z-10">
                    Dapatkan penawaran spesial mulai dari <span
                        class="text-white font-bold text-2xl bg-white/20 px-2 rounded">Rp 500rb</span>. Konsultasikan
                    kebutuhan digital Anda sekarang.
                </p>

                <div class="flex flex-col sm:flex-row items-center justify-center gap-6 relative z-10">
                    <a href="https://wa.me/6281234567890?text=Halo,%20saya%20tertarik%20dengan%20promo%20mulai%20500k."
                        target="_blank"
                        class="group relative px-8 py-4 bg-white text-blue-chill rounded-full font-bold shadow-lg hover:bg-slate-50 transition-all hover:scale-105">
                        <span class="flex items-center gap-2">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.017-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z" />
                            </svg>
                            Hubungi Kami Sekarang
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>
</x-layouts.app>