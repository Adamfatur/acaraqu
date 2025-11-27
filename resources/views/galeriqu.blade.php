<x-layouts.app>
    @section('title', 'GaleriQu - Solusi Visual & Kreatif Tanpa Batas')
    @section('meta_description', 'Jasa desain grafis, video production, dan livestreaming profesional. Kami menghadirkan visual kekinian untuk kebutuhan bisnis dan acara Anda.')

    <!-- Hero Section -->
    <section class="relative py-24 lg:py-32 bg-slate-900 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div>
                    <span class="inline-flex items-center gap-2 py-1 px-3 rounded-full bg-blue-chill/20 border border-blue-chill/30 text-blue-chill text-sm font-bold mb-6 animate-fade-in-up">
                        <span class="w-2 h-2 rounded-full bg-blue-chill"></span>
                        Visual Storytelling Partner
                    </span>
                    <h1 class="text-5xl md:text-6xl font-bold text-white mb-6 leading-tight animate-fade-in-up" style="animation-delay: 0.1s">
                        Biarkan Karya <span class="text-blue-chill">GaleriQu</span> Bercerita Tentang Anda
                    </h1>
                    <p class="text-lg text-slate-400 mb-8 leading-relaxed max-w-xl animate-fade-in-up" style="animation-delay: 0.2s">
                        Dari desain grafis yang memikat hingga video sinematik yang menyentuh hati. Kami hadir untuk mengubah ide Anda menjadi visual yang tak terlupakan dengan sentuhan kekinian.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 animate-fade-in-up" style="animation-delay: 0.3s">
                        <a href="#booking" class="px-8 py-4 rounded-full bg-blue-chill text-white font-bold hover:bg-white hover:text-slate-900 transition shadow-lg text-center">
                            Mulai Projek
                        </a>
                        <a href="#portfolio" class="px-8 py-4 rounded-full bg-transparent border-2 border-slate-700 text-white font-bold hover:bg-slate-800 transition text-center">
                            Lihat Karya
                        </a>
                    </div>
                </div>

                <div class="relative animate-fade-in-up lg:h-[500px] flex items-center justify-center" style="animation-delay: 0.4s">
                    <div class="absolute inset-0 bg-blue-chill/10 rounded-full blur-3xl transform translate-x-12"></div>
                    
                    <!-- Image Grid Mockup -->
                    <div class="relative z-10 grid grid-cols-2 gap-4 w-full max-w-lg">
                        <div class="space-y-4 translate-y-8">
                             <div class="rounded-2xl overflow-hidden shadow-2xl border border-slate-700 group">
                                <img src="https://images.unsplash.com/photo-1626785774573-4b7993143a23?q=80&w=1000&auto=format&fit=crop" class="w-full h-48 object-cover group-hover:scale-110 transition duration-700" alt="Graphic Design">
                            </div>
                            <div class="rounded-2xl overflow-hidden shadow-2xl border border-slate-700 group">
                                <img src="https://images.unsplash.com/photo-1536240478700-b869070f9279?q=80&w=1000&auto=format&fit=crop" class="w-full h-64 object-cover group-hover:scale-110 transition duration-700" alt="Videography">
                            </div>
                        </div>
                        <div class="space-y-4">
                            <div class="rounded-2xl overflow-hidden shadow-2xl border border-slate-700 group">
                                <img src="https://images.unsplash.com/photo-1574717024653-61fd2cf4d44c?q=80&w=1000&auto=format&fit=crop" class="w-full h-64 object-cover group-hover:scale-110 transition duration-700" alt="Livestreaming">
                            </div>
                            <div class="rounded-2xl overflow-hidden shadow-2xl border border-slate-700 group">
                                <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?q=80&w=1000&auto=format&fit=crop" class="w-full h-48 object-cover group-hover:scale-110 transition duration-700" alt="Editing">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-4">Apa yang Bisa Kami Bantu?</h2>
                <p class="text-slate-500 text-lg max-w-2xl mx-auto">
                    Kami menyediakan solusi visual lengkap dengan kualitas terbaik dan harga yang bersahabat.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Service 1: Graphic Design -->
                <div class="group p-8 rounded-[2rem] bg-white border border-slate-200 hover:shadow-xl hover:-translate-y-2 transition-all duration-300">
                    <div class="w-16 h-16 rounded-2xl bg-blue-chill text-white flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Desain Grafis Kekinian</h3>
                    <p class="text-slate-500 leading-relaxed mb-6">
                        Butuh desain cetak? Kami siap buatkan wallpaper dinding, poster, flyer, spanduk, hingga sertifikat dengan nuansa modern yang pas untuk menjangkau audiens masa kini.
                    </p>
                    <ul class="space-y-2 text-sm text-slate-600">
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-blue-chill" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            Desain Cetak & Digital
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-blue-chill" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            Revisi Fleksibel
                        </li>
                    </ul>
                </div>

                <!-- Service 2: Video Production -->
                <div class="group p-8 rounded-[2rem] bg-white border border-slate-200 hover:shadow-xl hover:-translate-y-2 transition-all duration-300">
                    <div class="w-16 h-16 rounded-2xl bg-blue-chill text-white flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Video Production</h3>
                    <p class="text-slate-500 leading-relaxed mb-6">
                        Layanan lengkap mulai dari konsep, naskah, syuting, hingga editing final. Cocok untuk acara nasional maupun internasional. Pengerjaan cepat 3-30 hari dengan jaminan kualitas terbaik.
                    </p>
                    <ul class="space-y-2 text-sm text-slate-600">
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-blue-chill" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            Konsep & Naskah
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-blue-chill" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            Cinema Grade 4K
                        </li>
                    </ul>
                </div>

                <!-- Service 3: Livestreaming -->
                <div class="group p-8 rounded-[2rem] bg-white border border-slate-200 hover:shadow-xl hover:-translate-y-2 transition-all duration-300">
                    <div class="w-16 h-16 rounded-2xl bg-blue-chill text-white flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.636 18.364a9 9 0 010-12.728m12.728 0a9 9 0 010 12.728m-9.9-2.829a5 5 0 010-7.07m7.072 0a5 5 0 010 7.07M13 12a1 1 0 11-2 0 1 1 0 012 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Jasa Livestreaming</h3>
                    <p class="text-slate-500 leading-relaxed mb-6">
                        Punya acara keren tapi terkendala alat? Tenang, kami bantu broadcast acara Anda ke dunia maya dengan peralatan pro dan harga yang sangat terjangkau.
                    </p>
                    <ul class="space-y-2 text-sm text-slate-600">
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-blue-chill" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            Multi-Platform
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-blue-chill" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            Harga Terjangkau
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio / Clients Section -->
    <section id="portfolio" class="py-24 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mb-16 text-center">
                <span class="text-blue-chill font-bold tracking-wider uppercase text-sm mb-3 block">Klien Kami</span>
                <h2 class="text-3xl md:text-5xl font-bold text-slate-900 mb-6">Dipercaya Oleh Institusi Ternama</h2>
                <p class="text-slate-500 text-lg max-w-2xl mx-auto">
                    Sebuah kehormatan bagi kami dapat menjadi bagian dari kesuksesan acara-acara hebat ini.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Video 1 -->
                <div class="relative aspect-video rounded-3xl overflow-hidden group shadow-xl border border-white">
                    <iframe src="https://www.youtube.com/embed/ysAhZHSa8eo?si=3J1lgNfcksqOnQEV" 
                        class="absolute inset-0 w-full h-full" 
                        title="Cinematic Wedding Teaser" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                        allowfullscreen>
                    </iframe>
                </div>

                <!-- Video 2 -->
                <div class="relative aspect-video rounded-3xl overflow-hidden group shadow-xl border border-white">
                    <iframe src="https://www.youtube.com/embed/fEaRT2KmxIQ?si=3J1lgNfcksqOnQEV" 
                        class="absolute inset-0 w-full h-full" 
                        title="Official Event Coverage" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                        allowfullscreen>
                    </iframe>
                </div>
            </div>

            <!-- Client Logos / Mentions -->
            <div class="mt-16 grid grid-cols-1 md:grid-cols-3 gap-6 text-center">
                <div class="p-6 bg-white rounded-2xl shadow-sm border border-slate-100">
                    <h4 class="text-xl font-bold text-slate-900 mb-2">JNY School</h4>
                    <p class="text-slate-500 text-sm">Jakarta Nanyang School, BSD</p>
                </div>
                <div class="p-6 bg-white rounded-2xl shadow-sm border border-slate-100">
                    <h4 class="text-xl font-bold text-slate-900 mb-2">ICCIT 2024 & 2025</h4>
                    <p class="text-slate-500 text-sm">International Conference</p>
                </div>
                <div class="p-6 bg-white rounded-2xl shadow-sm border border-slate-100">
                    <h4 class="text-xl font-bold text-slate-900 mb-2">Universitas Raharja</h4>
                    <p class="text-slate-500 text-sm">Mitra Digital Strategis</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Client Story -->
    <section class="py-24 bg-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="flex flex-col lg:flex-row items-center gap-16">
                <div class="w-full lg:w-1/2">
                    <div class="relative">
                        <div class="absolute -inset-4 bg-blue-chill rounded-[2.5rem] opacity-10"></div>
                        <div class="relative rounded-[2rem] overflow-hidden shadow-2xl bg-white p-2 rotate-2 hover:rotate-0 transition-transform duration-700">
                            <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?q=80&w=2000&auto=format&fit=crop"
                                alt="Universitas Raharja Social Media"
                                class="w-full h-auto rounded-3xl object-cover">
                            
                            <!-- Stat Card -->
                            <div class="absolute bottom-8 right-8 bg-white p-6 rounded-2xl shadow-xl border border-slate-100 animate-float">
                                <p class="text-sm text-slate-500 font-medium mb-1">Total Traffic</p>
                                <p class="text-3xl font-bold text-blue-chill">2 Juta+</p>
                                <p class="text-xs text-blue-chill font-bold mt-1">▲ Per Bulan</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="w-full lg:w-1/2">
                    <span class="inline-block py-1 px-3 rounded-full bg-blue-100 text-blue-600 text-sm font-bold mb-6">
                        Success Story
                    </span>
                    <h2 class="text-3xl md:text-5xl font-bold text-slate-900 mb-6 leading-tight">
                        Bersama <span class="text-blue-chill">Universitas Raharja</span> Membangun Ekosistem Digital
                    </h2>
                    <p class="text-slate-500 text-lg mb-8 leading-relaxed">
                        Sebuah kehormatan bagi kami dipercaya menjadi mitra strategis Universitas Raharja. Perjalanan dari <strong class="text-slate-900">0 hingga 6.000+ followers</strong> organik dengan traffic mencapai <strong class="text-slate-900">1-2 juta per bulan</strong> adalah bukti dedikasi kami.
                    </p>
                    <p class="text-slate-500 text-lg mb-8 leading-relaxed">
                        Kami tidak hanya membuat desain; kami menciptakan interaksi, membangun komunitas, dan menyuarakan visi universitas melalui desain poster yang ikonik, konten sosial media yang relevan, dan strategi visual yang matang.
                    </p>
                    
                    <div class="flex items-center gap-4">
                        <a href="https://www.instagram.com/universitasraharja/?hl=en" target="_blank" class="inline-flex items-center text-slate-900 font-bold hover:text-blue-chill transition-colors group">
                            Kunjungi Instagram Mereka
                            <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing & CTA Section -->
    <section id="booking" class="py-24 bg-blue-chill relative overflow-hidden">
        <div class="absolute inset-0 bg-slate-900/10"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">Investasi Terbaik Untuk Kebutuhan Anda</h2>
                <p class="text-white/90 text-lg max-w-2xl mx-auto leading-relaxed">
                    Kami menawarkan paket transparan yang disesuaikan dengan skala dan kebutuhan project Anda.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
                <!-- Video Production -->
                <div class="relative bg-white rounded-[2.5rem] p-8 border border-white/20 shadow-xl hover:-translate-y-2 transition-all duration-300 group">
                    <div class="w-14 h-14 rounded-2xl bg-blue-chill/10 text-blue-chill flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900 mb-2">Video Production</h3>
                    <p class="text-slate-500 text-sm mb-6 h-10">Dokumentasi acara, teaser, dan profil perusahaan.</p>
                    <div class="mb-8">
                        <p class="text-xs text-slate-400 uppercase tracking-wide mb-1">Mulai dari</p>
                        <p class="text-3xl font-bold text-blue-chill">Rp 1.500.000</p>
                    </div>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-center text-sm text-slate-600 gap-2">
                            <svg class="w-4 h-4 text-blue-chill" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            Cinema Grade 4K
                        </li>
                        <li class="flex items-center text-sm text-slate-600 gap-2">
                            <svg class="w-4 h-4 text-blue-chill" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            Highlight & Full Movie
                        </li>
                    </ul>
                    <a href="https://wa.me/6281234567890?text=Halo,%20saya%20tertarik%20dengan%20Video%20Production." target="_blank" class="block w-full py-3 rounded-xl bg-slate-50 border border-slate-200 text-slate-900 font-bold text-center hover:bg-blue-chill hover:text-white transition-colors">Pilih Paket Ini</a>
                </div>

                <!-- Graphic Design -->
                <div class="relative bg-slate-900 rounded-[2.5rem] p-8 border border-slate-800 shadow-2xl transform md:-translate-y-4 transition-all duration-300">
                    <div class="absolute top-0 right-0 p-6">
                        <span class="bg-blue-chill text-white text-xs font-bold px-3 py-1 rounded-full">MOST POPULAR</span>
                    </div>
                    <div class="w-14 h-14 rounded-2xl bg-white/10 text-white flex items-center justify-center mb-6">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path></svg>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-2">Graphic & Social</h3>
                    <p class="text-slate-400 text-sm mb-6 h-10">Desain poster, feed, story, dan visual identity.</p>
                    <div class="mb-8">
                        <p class="text-xs text-slate-500 uppercase tracking-wide mb-1">Mulai dari</p>
                        <p class="text-3xl font-bold text-white">Rp 50.000<span class="text-base font-normal text-slate-400">/desain</span></p>
                    </div>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-center text-sm text-slate-400 gap-2">
                            <svg class="w-4 h-4 text-blue-chill" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            Custom Creative Design
                        </li>
                        <li class="flex items-center text-sm text-slate-400 gap-2">
                            <svg class="w-4 h-4 text-blue-chill" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            Revisi Minor Unlimited
                        </li>
                        <li class="flex items-center text-sm text-slate-400 gap-2">
                            <svg class="w-4 h-4 text-blue-chill" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            Social Media Strategy
                        </li>
                    </ul>
                    <a href="https://wa.me/6281234567890?text=Halo,%20saya%20tertarik%20dengan%20Jasa%20Desain%20Grafis." target="_blank" class="block w-full py-3 rounded-xl bg-blue-chill text-white font-bold text-center hover:bg-white hover:text-slate-900 transition-colors">Pilih Paket Ini</a>
                </div>

                <!-- Livestreaming -->
                <div class="relative bg-white rounded-[2.5rem] p-8 border border-white/20 shadow-xl hover:-translate-y-2 transition-all duration-300 group">
                    <div class="w-14 h-14 rounded-2xl bg-pink-100 text-pink-600 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900 mb-2">Pro Livestream</h3>
                    <p class="text-slate-500 text-sm mb-6 h-10">Broadcast acara live ke YouTube/Zoom/IG.</p>
                    <div class="mb-8">
                        <p class="text-xs text-slate-400 uppercase tracking-wide mb-1">Mulai dari</p>
                        <p class="text-3xl font-bold text-blue-chill">Rp 3.000.000</p>
                    </div>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-center text-sm text-slate-600 gap-2">
                            <svg class="w-4 h-4 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            Multi-Camera System
                        </li>
                        <li class="flex items-center text-sm text-slate-600 gap-2">
                            <svg class="w-4 h-4 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            Professional Audio
                        </li>
                    </ul>
                    <a href="https://wa.me/6281234567890?text=Halo,%20saya%20tertarik%20dengan%20Layanan%20Livestreaming." target="_blank" class="block w-full py-3 rounded-xl bg-slate-50 border border-slate-200 text-slate-900 font-bold text-center hover:bg-blue-chill hover:text-white hover:border-blue-chill transition-colors">Pilih Paket Ini</a>
                </div>
            </div>
        </div>
    </section>
</x-layouts.app>