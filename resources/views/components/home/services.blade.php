<section id="layanan" class="py-32 bg-iron relative overflow-hidden scroll-mt-20" x-data="{ shown: false }" x-intersect.threshold.20="shown = true">
    <!-- Decorative Blobs -->
    <div class="absolute top-0 right-0 w-[800px] h-[800px] bg-blue-chill/5 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2 pointer-events-none"></div>
    <div class="absolute bottom-0 left-0 w-[600px] h-[600px] bg-purple-500/5 rounded-full blur-3xl translate-y-1/2 -translate-x-1/2 pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <!-- Section Header -->
        <div class="text-center mb-20 max-w-3xl mx-auto" :class="shown ? 'animate-fade-in-up' : 'opacity-0'">
            <span class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white border border-slate-200 shadow-sm text-blue-chill font-bold tracking-wider uppercase text-xs mb-8">
                <span class="w-2 h-2 rounded-full bg-blue-chill animate-pulse"></span>
                Ekosistem Kami
            </span>
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-slate-900 mb-6 tracking-tight">
                Solusi Digital & Kreatif <br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-chill to-purple-600">Dalam Satu Atap</span>
            </h2>
            <p class="text-slate-500 text-lg leading-relaxed">
                Kami menggabungkan kreativitas tanpa batas dengan teknologi terkini untuk menghadirkan pengalaman digital yang tak terlupakan bagi bisnis dan momen spesial Anda.
            </p>
        </div>

        <!-- Service Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" :class="shown ? 'animate-fade-in-up' : 'opacity-0'" style="animation-delay: 0.2s">
            
            <!-- Card: Galeri -->
            <div class="group relative bg-white rounded-[2.5rem] p-8 lg:p-10 shadow-lg border border-slate-100 hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 overflow-hidden">
                <div class="absolute top-0 right-0 p-12 opacity-[0.03] group-hover:opacity-[0.08] transition-opacity transform group-hover:scale-125 duration-700 pointer-events-none">
                    <svg class="w-48 h-48" fill="currentColor" viewBox="0 0 24 24"><path d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                </div>
                
                <div class="w-16 h-16 rounded-2xl bg-blue-50 text-blue-chill flex items-center justify-center mb-8 group-hover:bg-blue-chill group-hover:text-white transition-all duration-500 shadow-sm group-hover:shadow-blue-chill/30">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                </div>

                <h3 class="text-2xl font-bold text-slate-900 mb-3 group-hover:text-blue-chill transition-colors">GaleriQu</h3>
                <p class="text-xs font-bold text-blue-chill/80 uppercase tracking-widest mb-4">Documentation & Creative</p>
                <p class="text-slate-500 leading-relaxed mb-8">
                    Abadikan momen berharga dengan visual sinematik. Layanan foto, video, dan livestreaming broadcast quality.
                </p>
                <a href="{{ route('galeriqu') }}" class="inline-flex items-center text-slate-900 font-bold group-hover:text-blue-chill transition-all group-hover:gap-2">
                    Lihat Karya
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>

            <!-- Card: Hadirku -->
            <div class="group relative bg-white rounded-[2.5rem] p-8 lg:p-10 shadow-lg border border-slate-100 hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 overflow-hidden">
                 <div class="absolute top-0 right-0 p-12 opacity-[0.03] group-hover:opacity-[0.08] transition-opacity transform group-hover:scale-125 duration-700 pointer-events-none">
                    <svg class="w-48 h-48" fill="currentColor" viewBox="0 0 24 24"><path d="M12 4v1m6 11h2m-6 0h-2v4h2v-4zM6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                </div>

                <div class="w-16 h-16 rounded-2xl bg-green-50 text-green-600 flex items-center justify-center mb-8 group-hover:bg-green-600 group-hover:text-white transition-all duration-500 shadow-sm group-hover:shadow-green-600/30">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 4v1m6 11h2m-6 0h-2v4h2v-4zM6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                </div>

                <h3 class="text-2xl font-bold text-slate-900 mb-3 group-hover:text-green-600 transition-colors">HadirQu</h3>
                <p class="text-xs font-bold text-green-600/80 uppercase tracking-widest mb-4">Smart Guestbook</p>
                <p class="text-slate-500 leading-relaxed mb-8">
                    Buku tamu digital modern berbasis QR Code. Check-in tamu lebih cepat, data akurat, dan laporan real-time.
                </p>
                 <a href="{{ route('hadirqu') }}" class="inline-flex items-center text-slate-900 font-bold group-hover:text-green-600 transition-all group-hover:gap-2">
                    Pelajari Fitur
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>

            <!-- Card: Seniku -->
            <div class="group relative bg-white rounded-[2.5rem] p-8 lg:p-10 shadow-lg border border-slate-100 hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 overflow-hidden">
                 <div class="absolute top-0 right-0 p-12 opacity-[0.03] group-hover:opacity-[0.08] transition-opacity transform group-hover:scale-125 duration-700 pointer-events-none">
                    <svg class="w-48 h-48" fill="currentColor" viewBox="0 0 24 24"><path d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path></svg>
                </div>

                <div class="w-16 h-16 rounded-2xl bg-purple-50 text-purple-600 flex items-center justify-center mb-8 group-hover:bg-purple-600 group-hover:text-white transition-all duration-500 shadow-sm group-hover:shadow-purple-600/30">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path></svg>
                </div>

                <h3 class="text-2xl font-bold text-slate-900 mb-3 group-hover:text-purple-600 transition-colors">KreasiQu</h3>
                <p class="text-xs font-bold text-purple-600/80 uppercase tracking-widest mb-4">Merchandise & Art</p>
                <p class="text-slate-500 leading-relaxed mb-8">
                    Sentuhan artistik untuk souvenir, merchandise custom, dan dekorasi bunga yang mempercantik acaramu.
                </p>
                 <a href="{{ route('kreasiqu') }}" class="inline-flex items-center text-slate-900 font-bold group-hover:text-purple-600 transition-all group-hover:gap-2">
                    Lihat Koleksi
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>

            <!-- Card: Undanganku -->
            <div class="group relative bg-white rounded-[2.5rem] p-8 lg:p-10 shadow-lg border border-slate-100 hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 overflow-hidden">
                 <div class="absolute top-0 right-0 p-12 opacity-[0.03] group-hover:opacity-[0.08] transition-opacity transform group-hover:scale-125 duration-700 pointer-events-none">
                    <svg class="w-48 h-48" fill="currentColor" viewBox="0 0 24 24"><path d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                </div>

                <div class="w-16 h-16 rounded-2xl bg-blue-chill/10 text-blue-chill flex items-center justify-center mb-8 group-hover:bg-blue-chill group-hover:text-white transition-all duration-500 shadow-sm group-hover:shadow-blue-chill/30">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                </div>

                <h3 class="text-2xl font-bold text-slate-900 mb-3 group-hover:text-blue-chill transition-colors">UndanganQu</h3>
                <p class="text-xs font-bold text-blue-chill/80 uppercase tracking-widest mb-4">Digital Invitation</p>
                <p class="text-slate-500 leading-relaxed mb-8">
                    Undangan digital berbasis website dan video yang elegan, praktis, dan ramah lingkungan. Sebar undangan semudah satu klik.
                </p>
                 <a href="{{ route('undanganqu') }}" class="inline-flex items-center text-slate-900 font-bold group-hover:text-blue-chill transition-all group-hover:gap-2">
                    Buat Undangan
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>

            <!-- Card: Digitalku -->
            <div class="group relative bg-white rounded-[2.5rem] p-8 lg:p-10 shadow-lg border border-slate-100 hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 overflow-hidden">
                 <div class="absolute top-0 right-0 p-12 opacity-[0.03] group-hover:opacity-[0.08] transition-opacity transform group-hover:scale-125 duration-700 pointer-events-none">
                    <svg class="w-48 h-48" fill="currentColor" viewBox="0 0 24 24"><path d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                </div>

                <div class="w-16 h-16 rounded-2xl bg-slate-100 text-slate-600 flex items-center justify-center mb-8 group-hover:bg-slate-800 group-hover:text-white transition-all duration-500 shadow-sm group-hover:shadow-slate-800/30">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                </div>

                <h3 class="text-2xl font-bold text-slate-900 mb-3 group-hover:text-slate-800 transition-colors">DigitalQu</h3>
                <p class="text-xs font-bold text-slate-500 uppercase tracking-widest mb-4">Software & IT</p>
                <p class="text-slate-500 leading-relaxed mb-8">
                    Mitra transformasi digital terpercaya. Jasa pembuatan website, aplikasi mobile, hingga sistem manajemen kampus (OJS).
                </p>
                 <a href="{{ route('digitalqu') }}" class="inline-flex items-center text-slate-900 font-bold group-hover:text-slate-800 transition-all group-hover:gap-2">
                    Konsultasi IT
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>

            <!-- Card: Fotoku -->
            <div class="group relative bg-white rounded-[2.5rem] p-8 lg:p-10 shadow-lg border border-slate-100 hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 overflow-hidden">
                 <div class="absolute top-0 right-0 p-12 opacity-[0.03] group-hover:opacity-[0.08] transition-opacity transform group-hover:scale-125 duration-700 pointer-events-none">
                    <svg class="w-48 h-48" fill="currentColor" viewBox="0 0 24 24"><path d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                </div>

                <div class="w-16 h-16 rounded-2xl bg-pink-50 text-pink-500 flex items-center justify-center mb-8 group-hover:bg-pink-500 group-hover:text-white transition-all duration-500 shadow-sm group-hover:shadow-pink-500/30">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                </div>

                <h3 class="text-2xl font-bold text-slate-900 mb-3 group-hover:text-pink-500 transition-colors">FotoQu</h3>
                <p class="text-xs font-bold text-pink-500/80 uppercase tracking-widest mb-4">Fun Photobooth</p>
                <p class="text-slate-500 leading-relaxed mb-8">
                    Bikin acaramu makin pecah dengan Photobooth & 360 Video Booth. Hasil instan, properti lucu, dan unlimited print.
                </p>
                 <a href="{{ route('fotoqu') }}" class="inline-flex items-center text-slate-900 font-bold group-hover:text-pink-500 transition-all group-hover:gap-2">
                    Sewa Sekarang
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>

        </div>
    </div>
</section>