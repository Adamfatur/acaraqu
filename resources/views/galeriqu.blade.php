<x-layouts.app>
    @section('title', 'GaleriQu - Solusi Visual & Kreatif Tanpa Batas')
    @section('meta_description', 'Jasa fotografi profesional, desain grafis, video production, dan livestreaming. Kami menghadirkan visual kekinian untuk kebutuhan bisnis, keluarga, dan acara Anda.')

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
                <span class="text-sm font-medium text-blue-chill tracking-wide">VISUAL STORYTELLING PARTNER</span>
            </div>

            <h1 class="text-5xl md:text-7xl font-bold text-slate-800 mb-8 tracking-tight leading-tight animate-fade-in-up"
                style="animation-delay: 0.1s">
                Biarkan Karya <br>
                <span class="text-blue-chill">Bercerita Tentang Anda.</span>
            </h1>

            <p class="text-xl text-gothic mb-12 max-w-2xl mx-auto leading-relaxed animate-fade-in-up font-medium"
                style="animation-delay: 0.2s">
                Dari fotografi profesional hingga video sinematik. Kami hadir untuk mengubah momen dan ide Anda menjadi
                visual yang tak terlupakan dengan sentuhan kekinian.
            </p>

            <div class="flex flex-col sm:flex-row items-center justify-center gap-4 animate-fade-in-up"
                style="animation-delay: 0.3s">
                <a href="#services"
                    class="w-full sm:w-auto px-8 py-4 rounded-full bg-blue-chill text-white font-bold hover:bg-[#0f6070] hover:shadow-lg hover:shadow-blue-chill/30 transition-all transform hover:-translate-y-1">
                    Lihat Layanan
                </a>
                <a href="#portfolio"
                    class="w-full sm:w-auto px-8 py-4 rounded-full bg-white border-2 border-blue-chill text-blue-chill font-bold hover:bg-blue-50 transition-all">
                    Lihat Karya
                </a>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-32 bg-white relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-20 max-w-3xl mx-auto">
                <h2 class="text-3xl md:text-5xl font-bold text-slate-800 mb-6">Layanan Kreatif Kami</h2>
                <p class="text-gothic text-lg leading-relaxed">
                    Solusi visual lengkap dengan kualitas terbaik, mulai dari fotografi, videografi, hingga desain
                    grafis.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Photography Service (New) -->
                <div
                    class="group bg-white p-8 rounded-[2.5rem] border border-slate-100 shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                    <div
                        class="w-16 h-16 rounded-2xl bg-blue-chill/10 text-blue-chill flex items-center justify-center mb-8 group-hover:bg-blue-chill group-hover:text-white transition-colors duration-500">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z">
                            </path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-4 group-hover:text-blue-chill transition-colors">
                        Professional Photography</h3>
                    <p class="text-gothic text-sm leading-relaxed mb-6">
                        Jasa pemotretan untuk berbagai kebutuhan: <span class="font-semibold text-slate-700">Acara,
                            Potret Keluarga/Individu, hingga Korporat</span>.
                    </p>
                    <ul class="space-y-2">
                        <li class="flex items-center gap-2 text-xs text-slate-600 font-medium">
                            <span class="w-1.5 h-1.5 rounded-full bg-blue-chill"></span>
                            High Quality Editing
                        </li>
                        <li class="flex items-center gap-2 text-xs text-slate-600 font-medium">
                            <span class="w-1.5 h-1.5 rounded-full bg-blue-chill"></span>
                            Studio / On-Location
                        </li>
                    </ul>
                </div>

                <!-- Graphic Design -->
                <div
                    class="group bg-white p-8 rounded-[2.5rem] border border-slate-100 shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                    <div
                        class="w-16 h-16 rounded-2xl bg-blue-chill/10 text-blue-chill flex items-center justify-center mb-8 group-hover:bg-blue-chill group-hover:text-white transition-colors duration-500">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-4 group-hover:text-blue-chill transition-colors">
                        Graphic Design</h3>
                    <p class="text-gothic text-sm leading-relaxed mb-6">
                        Desain cetak dan digital: wallpaper, poster, flyer, spanduk, hingga sertifikat dengan nuansa
                        modern.
                    </p>
                    <ul class="space-y-2">
                        <li class="flex items-center gap-2 text-xs text-slate-600 font-medium">
                            <span class="w-1.5 h-1.5 rounded-full bg-blue-chill"></span>
                            Revisi Fleksibel
                        </li>
                        <li class="flex items-center gap-2 text-xs text-slate-600 font-medium">
                            <span class="w-1.5 h-1.5 rounded-full bg-blue-chill"></span>
                            Creative Concept
                        </li>
                    </ul>
                </div>

                <!-- Video Production -->
                <div
                    class="group bg-white p-8 rounded-[2.5rem] border border-slate-100 shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                    <div
                        class="w-16 h-16 rounded-2xl bg-blue-chill/10 text-blue-chill flex items-center justify-center mb-8 group-hover:bg-blue-chill group-hover:text-white transition-colors duration-500">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-4 group-hover:text-blue-chill transition-colors">
                        Video Production</h3>
                    <p class="text-gothic text-sm leading-relaxed mb-6">
                        Layanan lengkap mulai dari konsep, naskah, syuting, hingga editing final. Cinema Grade 4K.
                    </p>
                    <ul class="space-y-2">
                        <li class="flex items-center gap-2 text-xs text-slate-600 font-medium">
                            <span class="w-1.5 h-1.5 rounded-full bg-blue-chill"></span>
                            Cinematic Editing
                        </li>
                        <li class="flex items-center gap-2 text-xs text-slate-600 font-medium">
                            <span class="w-1.5 h-1.5 rounded-full bg-blue-chill"></span>
                            Storytelling
                        </li>
                    </ul>
                </div>

                <!-- Livestreaming -->
                <div
                    class="group bg-white p-8 rounded-[2.5rem] border border-slate-100 shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                    <div
                        class="w-16 h-16 rounded-2xl bg-blue-chill/10 text-blue-chill flex items-center justify-center mb-8 group-hover:bg-blue-chill group-hover:text-white transition-colors duration-500">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M5.636 18.364a9 9 0 010-12.728m12.728 0a9 9 0 010 12.728m-9.9-2.829a5 5 0 010-7.07m7.072 0a5 5 0 010 7.07M13 12a1 1 0 11-2 0 1 1 0 012 0z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-4 group-hover:text-blue-chill transition-colors">
                        Livestreaming</h3>
                    <p class="text-gothic text-sm leading-relaxed mb-6">
                        Broadcast acara Anda ke dunia maya dengan peralatan profesional multi-cam system.
                    </p>
                    <ul class="space-y-2">
                        <li class="flex items-center gap-2 text-xs text-slate-600 font-medium">
                            <span class="w-1.5 h-1.5 rounded-full bg-blue-chill"></span>
                            Multi-Platform
                        </li>
                        <li class="flex items-center gap-2 text-xs text-slate-600 font-medium">
                            <span class="w-1.5 h-1.5 rounded-full bg-blue-chill"></span>
                            Clear Audio
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio / Clients Section -->
    <section id="portfolio" class="py-32 bg-iron/30 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="mb-20 text-center max-w-3xl mx-auto">
                <span class="text-blue-chill font-bold tracking-wider uppercase text-sm mb-4 block">Klien Kami</span>
                <h2 class="text-3xl md:text-5xl font-bold text-slate-900 mb-6">Dipercaya Oleh Institusi Ternama</h2>
                <p class="text-gothic text-lg">
                    Sebuah kehormatan bagi kami dapat menjadi bagian dari kesuksesan acara-acara hebat ini.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-16">
                <!-- Video 1 -->
                <div class="group relative aspect-video rounded-[2rem] overflow-hidden shadow-xl border-4 border-white">
                    <iframe src="https://www.youtube.com/embed/ysAhZHSa8eo?si=3J1lgNfcksqOnQEV"
                        class="absolute inset-0 w-full h-full" title="Cinematic Wedding Teaser" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen>
                    </iframe>
                </div>

                <!-- Video 2 -->
                <div class="group relative aspect-video rounded-[2rem] overflow-hidden shadow-xl border-4 border-white">
                    <iframe src="https://www.youtube.com/embed/fEaRT2KmxIQ?si=3J1lgNfcksqOnQEV"
                        class="absolute inset-0 w-full h-full" title="Official Event Coverage" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen>
                    </iframe>
                </div>
            </div>

            <!-- Client Logos / Mentions -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div
                    class="p-8 bg-white rounded-[2rem] shadow-sm border border-slate-100 hover:border-blue-chill/30 transition-colors text-center group">
                    <div
                        class="w-16 h-16 mx-auto bg-blue-chill/10 rounded-full flex items-center justify-center mb-4 group-hover:bg-blue-chill group-hover:text-white transition-colors">
                        <span class="font-bold text-xl text-blue-chill group-hover:text-white">JNY</span>
                    </div>
                    <h4 class="text-xl font-bold text-slate-900 mb-1">JNY School</h4>
                    <p class="text-gothic text-sm">Jakarta Nanyang School, BSD</p>
                </div>
                <div
                    class="p-8 bg-white rounded-[2rem] shadow-sm border border-slate-100 hover:border-blue-chill/30 transition-colors text-center group">
                    <div
                        class="w-16 h-16 mx-auto bg-blue-chill/10 rounded-full flex items-center justify-center mb-4 group-hover:bg-blue-chill group-hover:text-white transition-colors">
                        <span class="font-bold text-xl text-blue-chill group-hover:text-white">IC</span>
                    </div>
                    <h4 class="text-xl font-bold text-slate-900 mb-1">ICCIT 2024 & 2025</h4>
                    <p class="text-gothic text-sm">International Conference</p>
                </div>
                <div
                    class="p-8 bg-white rounded-[2rem] shadow-sm border border-slate-100 hover:border-blue-chill/30 transition-colors text-center group">
                    <div
                        class="w-16 h-16 mx-auto bg-blue-chill/10 rounded-full flex items-center justify-center mb-4 group-hover:bg-blue-chill group-hover:text-white transition-colors">
                        <span class="font-bold text-xl text-blue-chill group-hover:text-white">UR</span>
                    </div>
                    <h4 class="text-xl font-bold text-slate-900 mb-1">Universitas Raharja</h4>
                    <p class="text-gothic text-sm">Mitra Digital Strategis</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Client Story -->
    <section class="py-32 bg-slate-900 relative overflow-hidden">
        <div
            class="absolute inset-0 bg-[url('https://grainy-gradients.vercel.app/noise.svg')] opacity-20 mix-blend-overlay">
        </div>
        <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-blue-chill/10 rounded-full blur-[128px]"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="flex flex-col lg:flex-row items-center gap-20">
                <div class="w-full lg:w-1/2">
                    <div class="relative group">
                        <div
                            class="absolute -inset-4 bg-gradient-to-r from-blue-chill to-purple-600 rounded-[2.5rem] opacity-20 blur-lg group-hover:opacity-30 transition duration-700">
                        </div>
                        <div class="relative rounded-[2rem] overflow-hidden shadow-2xl border border-white/10">
                            <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?q=80&w=2000&auto=format&fit=crop"
                                alt="Universitas Raharja Social Media"
                                class="w-full h-auto object-cover transform group-hover:scale-105 transition duration-700">

                            <!-- Stat Card -->
                            <div
                                class="absolute bottom-8 right-8 bg-white/95 backdrop-blur-xl p-6 rounded-2xl shadow-xl border border-white/50 animate-float">
                                <p class="text-xs text-gothic font-bold uppercase tracking-wider mb-1">Total Traffic</p>
                                <p class="text-3xl font-bold text-slate-900">2 Juta+</p>
                                <p class="text-xs text-green-600 font-bold mt-1">▲ Per Bulan</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full lg:w-1/2 text-white">
                    <span
                        class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/10 border border-white/10 text-blue-300 text-xs font-bold mb-8">
                        <span class="w-2 h-2 rounded-full bg-blue-300 animate-pulse"></span>
                        Success Story
                    </span>
                    <h2 class="text-4xl md:text-5xl font-bold mb-8 leading-tight">
                        Bersama <span class="text-blue-400">Universitas Raharja</span> Membangun Ekosistem Digital
                    </h2>
                    <div class="space-y-6 text-slate-300 text-lg leading-relaxed">
                        <p>
                            Sebuah kehormatan bagi kami dipercaya menjadi mitra strategis Universitas Raharja.
                            Perjalanan dari <strong class="text-white">0 hingga 6.000+ followers</strong> organik dengan
                            traffic mencapai <strong class="text-white">1-2 juta per bulan</strong> adalah bukti
                            dedikasi kami.
                        </p>
                        <p>
                            Kami tidak hanya membuat desain; kami menciptakan interaksi, membangun komunitas, dan
                            menyuarakan visi universitas melalui desain poster yang ikonik, konten sosial media yang
                            relevan, dan strategi visual yang matang.
                        </p>
                    </div>

                    <div class="mt-10">
                        <a href="https://www.instagram.com/universitasraharja/?hl=en" target="_blank"
                            class="inline-flex items-center gap-3 text-white font-bold hover:text-blue-300 transition-colors group">
                            <span>Kunjungi Instagram Mereka</span>
                            <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing & CTA Section -->
    <section id="booking" class="py-32 bg-white relative overflow-hidden">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div
                class="bg-blue-chill rounded-[3rem] p-8 md:p-16 shadow-2xl shadow-blue-chill/20 text-center relative overflow-hidden">
                <!-- Decorative Circles -->
                <div class="absolute top-0 right-0 -mr-20 -mt-20 w-80 h-80 bg-white/10 rounded-full blur-3xl"></div>
                <div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-80 h-80 bg-black/10 rounded-full blur-3xl"></div>

                <h2 class="text-3xl md:text-5xl font-bold text-white mb-6 relative z-10">Siap Membuat Visual yang
                    Memukau?</h2>
                <p class="text-xl text-blue-50 mb-10 max-w-2xl mx-auto relative z-10">
                    Konsultasikan kebutuhan fotografi, video, atau desain Anda bersama kami.
                </p>

                <div class="flex flex-col sm:flex-row items-center justify-center gap-6 relative z-10">
                    <a href="https://wa.me/6281234567890?text=Halo,%20saya%20tertarik%20dengan%20jasa%20GaleriQu."
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