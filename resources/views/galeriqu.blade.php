<x-layouts.app>
    @section('title', 'GaleriQu - Solusi Visual & Kreatif Tanpa Batas')
    @section('meta_description', 'Jasa desain grafis, video production, dan livestreaming profesional. Kami menghadirkan visual kekinian untuk kebutuhan bisnis dan acara Anda.')

    <!-- Hero Section -->
    <section class="relative min-h-screen flex items-center justify-center overflow-hidden bg-iron pt-20">
        <div class="absolute inset-0 z-0">
             <div class="absolute top-[-20%] left-[-10%] w-[500px] h-[500px] bg-blue-chill/5 rounded-full blur-[100px] animate-blob mix-blend-multiply"></div>
             <div class="absolute bottom-[-20%] right-[-10%] w-[600px] h-[600px] bg-purple-500/5 rounded-full blur-[100px] animate-blob animation-delay-2000 mix-blend-multiply"></div>
             <div class="absolute inset-0 bg-[url('https://grainy-gradients.vercel.app/noise.svg')] opacity-40 mix-blend-overlay"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full">
            <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-24">
                <div class="flex-1 text-center lg:text-left">
                    <span class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white border border-regent-gray/20 text-blue-chill text-sm font-bold mb-8 backdrop-blur-md animate-fade-in-up shadow-sm">
                        <span class="w-2 h-2 rounded-full bg-blue-chill animate-pulse"></span>
                        Visual Storytelling Partner
                    </span>
                    <h1 class="text-5xl lg:text-7xl font-bold text-slate-900 mb-8 leading-tight tracking-tight animate-fade-in-up" style="animation-delay: 0.1s">
                        Biarkan Karya <br>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-chill to-purple-600 animate-gradient">Bercerita Tentang Anda.</span>
                    </h1>
                    <p class="text-xl text-gothic mb-10 max-w-2xl mx-auto lg:mx-0 leading-relaxed animate-fade-in-up" style="animation-delay: 0.2s">
                        Dari desain grafis yang memikat hingga video sinematik yang menyentuh hati. Kami hadir untuk mengubah ide Anda menjadi visual yang tak terlupakan dengan sentuhan kekinian.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start animate-fade-in-up" style="animation-delay: 0.3s">
                        <a href="#booking" class="group relative px-8 py-4 bg-blue-chill text-white rounded-full font-bold hover:bg-blue-chill/90 transition-all duration-300 shadow-lg shadow-blue-chill/20 overflow-hidden">
                             <span class="relative z-10 flex items-center gap-2">
                                Mulai Projek
                                <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                            </span>
                        </a>
                        <a href="#portfolio" class="px-8 py-4 bg-white border border-regent-gray/20 text-slate-900 rounded-full font-bold hover:bg-slate-50 transition-all duration-300 shadow-sm">
                            Lihat Karya
                        </a>
                    </div>
                </div>

                <div class="flex-1 w-full max-w-lg lg:max-w-none relative animate-fade-in-up" style="animation-delay: 0.4s">
                     <div class="relative w-full aspect-square">
                        <div class="absolute inset-0 bg-white rounded-[2.5rem] shadow-2xl overflow-hidden transform -rotate-3 hover:rotate-0 transition-all duration-700 ease-out z-20 border-4 border-white">
                             <div class="grid grid-cols-2 h-full">
                                <img src="https://images.unsplash.com/photo-1626785774573-4b7993143a23?q=80&w=1000&auto=format&fit=crop" class="w-full h-full object-cover" alt="Design">
                                <img src="https://images.unsplash.com/photo-1536240478700-b869070f9279?q=80&w=1000&auto=format&fit=crop" class="w-full h-full object-cover" alt="Video">
                                <img src="https://images.unsplash.com/photo-1574717024653-61fd2cf4d44c?q=80&w=1000&auto=format&fit=crop" class="w-full h-full object-cover" alt="Stream">
                                <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?q=80&w=1000&auto=format&fit=crop" class="w-full h-full object-cover" alt="Edit">
                             </div>
                        </div>
                        <div class="absolute -inset-4 bg-gradient-to-tl from-blue-chill/20 to-purple-500/20 rounded-[3rem] rotate-6 scale-95 blur-xl z-10"></div>
                     </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-32 bg-white relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-20 max-w-3xl mx-auto">
                <h2 class="text-3xl md:text-5xl font-bold text-slate-900 mb-6">Apa yang Bisa Kami Bantu?</h2>
                <p class="text-gothic text-lg leading-relaxed">
                    Kami menyediakan solusi visual lengkap dengan kualitas terbaik dan harga yang bersahabat.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Service 1 -->
                <div class="group bg-white p-10 rounded-[2.5rem] border border-slate-100 shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                    <div class="w-16 h-16 rounded-2xl bg-blue-50 text-blue-chill flex items-center justify-center mb-8 group-hover:bg-blue-chill group-hover:text-white transition-colors duration-500">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path></svg>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900 mb-4 group-hover:text-blue-chill transition-colors">Desain Grafis</h3>
                    <p class="text-gothic leading-relaxed mb-8">
                        Butuh desain cetak? Kami siap buatkan wallpaper dinding, poster, flyer, spanduk, hingga sertifikat dengan nuansa modern.
                    </p>
                    <ul class="space-y-3">
                        <li class="flex items-center gap-3 text-sm text-slate-600">
                            <span class="w-1.5 h-1.5 rounded-full bg-blue-chill"></span>
                            Desain Cetak & Digital
                        </li>
                        <li class="flex items-center gap-3 text-sm text-slate-600">
                            <span class="w-1.5 h-1.5 rounded-full bg-blue-chill"></span>
                            Revisi Fleksibel
                        </li>
                    </ul>
                </div>

                <!-- Service 2 -->
                <div class="group bg-white p-10 rounded-[2.5rem] border border-slate-100 shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                    <div class="w-16 h-16 rounded-2xl bg-blue-50 text-blue-chill flex items-center justify-center mb-8 group-hover:bg-blue-chill group-hover:text-white transition-colors duration-500">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900 mb-4 group-hover:text-blue-chill transition-colors">Video Production</h3>
                    <p class="text-gothic leading-relaxed mb-8">
                        Layanan lengkap mulai dari konsep, naskah, syuting, hingga editing final. Cocok untuk acara nasional maupun internasional.
                    </p>
                    <ul class="space-y-3">
                        <li class="flex items-center gap-3 text-sm text-slate-600">
                            <span class="w-1.5 h-1.5 rounded-full bg-blue-chill"></span>
                            Konsep & Naskah
                        </li>
                        <li class="flex items-center gap-3 text-sm text-slate-600">
                            <span class="w-1.5 h-1.5 rounded-full bg-blue-chill"></span>
                            Cinema Grade 4K
                        </li>
                    </ul>
                </div>

                <!-- Service 3 -->
                <div class="group bg-white p-10 rounded-[2.5rem] border border-slate-100 shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                    <div class="w-16 h-16 rounded-2xl bg-blue-50 text-blue-chill flex items-center justify-center mb-8 group-hover:bg-blue-chill group-hover:text-white transition-colors duration-500">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5.636 18.364a9 9 0 010-12.728m12.728 0a9 9 0 010 12.728m-9.9-2.829a5 5 0 010-7.07m7.072 0a5 5 0 010 7.07M13 12a1 1 0 11-2 0 1 1 0 012 0z"></path></svg>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900 mb-4 group-hover:text-blue-chill transition-colors">Jasa Livestreaming</h3>
                    <p class="text-gothic leading-relaxed mb-8">
                        Punya acara keren tapi terkendala alat? Tenang, kami bantu broadcast acara Anda ke dunia maya dengan peralatan pro.
                    </p>
                    <ul class="space-y-3">
                        <li class="flex items-center gap-3 text-sm text-slate-600">
                            <span class="w-1.5 h-1.5 rounded-full bg-blue-chill"></span>
                            Multi-Platform
                        </li>
                        <li class="flex items-center gap-3 text-sm text-slate-600">
                            <span class="w-1.5 h-1.5 rounded-full bg-blue-chill"></span>
                            Harga Terjangkau
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
                        class="absolute inset-0 w-full h-full" 
                        title="Cinematic Wedding Teaser" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                        allowfullscreen>
                    </iframe>
                </div>

                <!-- Video 2 -->
                <div class="group relative aspect-video rounded-[2rem] overflow-hidden shadow-xl border-4 border-white">
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
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="p-8 bg-white rounded-[2rem] shadow-sm border border-slate-100 hover:border-blue-chill/30 transition-colors text-center group">
                    <div class="w-16 h-16 mx-auto bg-blue-50 rounded-full flex items-center justify-center mb-4 group-hover:bg-blue-chill group-hover:text-white transition-colors">
                        <span class="font-bold text-xl">JNY</span>
                    </div>
                    <h4 class="text-xl font-bold text-slate-900 mb-1">JNY School</h4>
                    <p class="text-gothic text-sm">Jakarta Nanyang School, BSD</p>
                </div>
                <div class="p-8 bg-white rounded-[2rem] shadow-sm border border-slate-100 hover:border-blue-chill/30 transition-colors text-center group">
                     <div class="w-16 h-16 mx-auto bg-blue-50 rounded-full flex items-center justify-center mb-4 group-hover:bg-blue-chill group-hover:text-white transition-colors">
                        <span class="font-bold text-xl">IC</span>
                    </div>
                    <h4 class="text-xl font-bold text-slate-900 mb-1">ICCIT 2024 & 2025</h4>
                    <p class="text-gothic text-sm">International Conference</p>
                </div>
                <div class="p-8 bg-white rounded-[2rem] shadow-sm border border-slate-100 hover:border-blue-chill/30 transition-colors text-center group">
                     <div class="w-16 h-16 mx-auto bg-blue-50 rounded-full flex items-center justify-center mb-4 group-hover:bg-blue-chill group-hover:text-white transition-colors">
                        <span class="font-bold text-xl">UR</span>
                    </div>
                    <h4 class="text-xl font-bold text-slate-900 mb-1">Universitas Raharja</h4>
                    <p class="text-gothic text-sm">Mitra Digital Strategis</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Client Story -->
    <section class="py-32 bg-slate-900 relative overflow-hidden">
         <div class="absolute inset-0 bg-[url('https://grainy-gradients.vercel.app/noise.svg')] opacity-20 mix-blend-overlay"></div>
         <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-blue-chill/10 rounded-full blur-[128px]"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="flex flex-col lg:flex-row items-center gap-20">
                <div class="w-full lg:w-1/2">
                    <div class="relative group">
                        <div class="absolute -inset-4 bg-gradient-to-r from-blue-chill to-purple-600 rounded-[2.5rem] opacity-20 blur-lg group-hover:opacity-30 transition duration-700"></div>
                        <div class="relative rounded-[2rem] overflow-hidden shadow-2xl border border-white/10">
                            <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?q=80&w=2000&auto=format&fit=crop"
                                alt="Universitas Raharja Social Media"
                                class="w-full h-auto object-cover transform group-hover:scale-105 transition duration-700">
                            
                            <!-- Stat Card -->
                            <div class="absolute bottom-8 right-8 bg-white/95 backdrop-blur-xl p-6 rounded-2xl shadow-xl border border-white/50 animate-float">
                                <p class="text-xs text-gothic font-bold uppercase tracking-wider mb-1">Total Traffic</p>
                                <p class="text-3xl font-bold text-slate-900">2 Juta+</p>
                                <p class="text-xs text-green-600 font-bold mt-1">▲ Per Bulan</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="w-full lg:w-1/2 text-white">
                    <span class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/10 border border-white/10 text-blue-300 text-xs font-bold mb-8">
                         <span class="w-2 h-2 rounded-full bg-blue-300 animate-pulse"></span>
                        Success Story
                    </span>
                    <h2 class="text-4xl md:text-5xl font-bold mb-8 leading-tight">
                        Bersama <span class="text-blue-400">Universitas Raharja</span> Membangun Ekosistem Digital
                    </h2>
                    <div class="space-y-6 text-slate-300 text-lg leading-relaxed">
                        <p>
                            Sebuah kehormatan bagi kami dipercaya menjadi mitra strategis Universitas Raharja. Perjalanan dari <strong class="text-white">0 hingga 6.000+ followers</strong> organik dengan traffic mencapai <strong class="text-white">1-2 juta per bulan</strong> adalah bukti dedikasi kami.
                        </p>
                        <p>
                            Kami tidak hanya membuat desain; kami menciptakan interaksi, membangun komunitas, dan menyuarakan visi universitas melalui desain poster yang ikonik, konten sosial media yang relevan, dan strategi visual yang matang.
                        </p>
                    </div>
                    
                    <div class="mt-10">
                        <a href="https://www.instagram.com/universitasraharja/?hl=en" target="_blank" class="inline-flex items-center gap-3 text-white font-bold hover:text-blue-300 transition-colors group">
                            <span>Kunjungi Instagram Mereka</span>
                            <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing & CTA Section -->
    <section id="booking" class="py-32 bg-blue-chill relative overflow-hidden">
        <div class="absolute inset-0 bg-[url('https://grainy-gradients.vercel.app/noise.svg')] opacity-20 mix-blend-overlay"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-20 max-w-3xl mx-auto">
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">Investasi Terbaik Untuk Kebutuhan Anda</h2>
                <p class="text-white/90 text-lg leading-relaxed">
                    Kami menawarkan paket transparan yang disesuaikan dengan skala dan kebutuhan project Anda.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
                <!-- Video Production -->
                <div class="relative bg-white rounded-[2.5rem] p-10 shadow-2xl hover:-translate-y-2 transition-all duration-500 group flex flex-col">
                    <h3 class="text-2xl font-bold text-slate-900 mb-2">Video Production</h3>
                    <p class="text-gothic text-sm mb-8">Dokumentasi acara, teaser, dan profil.</p>
                    <div class="mb-8">
                        <p class="text-xs text-slate-400 uppercase tracking-wide mb-1">Mulai dari</p>
                        <p class="text-4xl font-bold text-blue-chill">1.5jt</p>
                    </div>
                    <ul class="space-y-4 mb-10 flex-1">
                        <li class="flex items-center gap-3 text-sm text-slate-600">
                             <svg class="w-5 h-5 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            Cinema Grade 4K
                        </li>
                        <li class="flex items-center gap-3 text-sm text-slate-600">
                             <svg class="w-5 h-5 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            Highlight & Full Movie
                        </li>
                    </ul>
                    <a href="https://wa.me/6281234567890?text=Halo,%20saya%20tertarik%20dengan%20Video%20Production." target="_blank" class="w-full py-4 rounded-xl bg-slate-50 border border-slate-200 text-slate-900 font-bold text-center hover:bg-slate-900 hover:text-white transition-colors">Pilih Paket</a>
                </div>

                <!-- Graphic Design -->
                <div class="relative bg-slate-900 rounded-[2.5rem] p-10 shadow-2xl transform md:-translate-y-6 z-10 flex flex-col border border-slate-700">
                    <div class="absolute top-0 right-0 p-8">
                        <span class="bg-blue-chill text-white text-xs font-bold px-4 py-1.5 rounded-full">POPULAR</span>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-2">Graphic & Social</h3>
                    <p class="text-slate-400 text-sm mb-8">Desain poster, feed, & visual identity.</p>
                    <div class="mb-8">
                        <p class="text-xs text-slate-500 uppercase tracking-wide mb-1">Mulai dari</p>
                        <p class="text-4xl font-bold text-white">50rb<span class="text-lg font-normal text-slate-500">/desain</span></p>
                    </div>
                    <ul class="space-y-4 mb-10 flex-1">
                        <li class="flex items-center gap-3 text-sm text-slate-300">
                             <svg class="w-5 h-5 text-blue-chill" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            Custom Creative Design
                        </li>
                        <li class="flex items-center gap-3 text-sm text-slate-300">
                             <svg class="w-5 h-5 text-blue-chill" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            Revisi Minor Unlimited
                        </li>
                        <li class="flex items-center gap-3 text-sm text-slate-300">
                             <svg class="w-5 h-5 text-blue-chill" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            Social Media Strategy
                        </li>
                    </ul>
                    <a href="https://wa.me/6281234567890?text=Halo,%20saya%20tertarik%20dengan%20Jasa%20Desain%20Grafis." target="_blank" class="w-full py-4 rounded-xl bg-blue-chill text-white font-bold text-center hover:bg-white hover:text-slate-900 transition-colors">Pilih Paket</a>
                </div>

                <!-- Livestreaming -->
                <div class="relative bg-white rounded-[2.5rem] p-10 shadow-2xl hover:-translate-y-2 transition-all duration-500 group flex flex-col">
                    <h3 class="text-2xl font-bold text-slate-900 mb-2">Pro Livestream</h3>
                    <p class="text-gothic text-sm mb-8">Broadcast acara live ke YouTube/Zoom.</p>
                    <div class="mb-8">
                        <p class="text-xs text-slate-400 uppercase tracking-wide mb-1">Mulai dari</p>
                        <p class="text-4xl font-bold text-blue-chill">3jt</p>
                    </div>
                    <ul class="space-y-4 mb-10 flex-1">
                        <li class="flex items-center gap-3 text-sm text-slate-600">
                             <svg class="w-5 h-5 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            Multi-Camera System
                        </li>
                        <li class="flex items-center gap-3 text-sm text-slate-600">
                             <svg class="w-5 h-5 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            Professional Audio
                        </li>
                    </ul>
                    <a href="https://wa.me/6281234567890?text=Halo,%20saya%20tertarik%20dengan%20Layanan%20Livestreaming." target="_blank" class="w-full py-4 rounded-xl bg-slate-50 border border-slate-200 text-slate-900 font-bold text-center hover:bg-slate-900 hover:text-white transition-colors">Pilih Paket</a>
                </div>
            </div>
        </div>
    </section>
</x-layouts.app>