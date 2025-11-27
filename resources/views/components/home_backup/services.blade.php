<section id="layanan" class="py-32 bg-slate-50 relative overflow-hidden scroll-mt-20" x-data="{ shown: false }"
    x-intersect.threshold.20="shown = true">
    
    <!-- Decor -->
    <div class="absolute top-0 right-0 -translate-y-1/2 translate-x-1/2 w-96 h-96 bg-blue-chill/5 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 left-0 translate-y-1/2 -translate-x-1/2 w-96 h-96 bg-purple-500/5 rounded-full blur-3xl"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-20" :class="shown ? 'animate-fade-in-up' : 'opacity-0'">
            <span class="inline-block py-2 px-4 rounded-full bg-white border border-slate-200 shadow-sm text-blue-chill font-bold tracking-wider uppercase text-xs mb-6">
                Ekosistem Kami
            </span>
            <h2 class="text-4xl md:text-5xl font-bold text-slate-900 mb-6">
                Layanan <span class="text-blue-chill">Terintegrasi</span>
            </h2>
            <p class="text-slate-500 text-lg max-w-2xl mx-auto leading-relaxed">
                Kami menggabungkan kreativitas dan teknologi untuk menghadirkan solusi komprehensif bagi kebutuhan event dan bisnis Anda.
            </p>
        </div>

        <div class="flex flex-wrap justify-center gap-8"
            :class="shown ? 'animate-fade-in-up' : 'opacity-0'" style="animation-delay: 0.2s">
            <!-- Galeri -->
            <div class="w-full md:w-[calc(50%-1.5rem)] lg:w-[calc(33.333%-1.5rem)] group bg-white rounded-[2rem] p-8 shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 border border-slate-100 relative overflow-hidden">
                <div class="absolute top-0 right-0 p-8 opacity-10 group-hover:opacity-20 transition-opacity transform group-hover:scale-110 duration-500">
                    <svg class="w-32 h-32 text-blue-chill" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                </div>
                
                <div class="w-14 h-14 rounded-2xl bg-blue-50 text-blue-chill flex items-center justify-center mb-6 group-hover:bg-blue-chill group-hover:text-white transition-colors duration-300 shadow-md shadow-blue-chill/10">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z">
                        </path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                </div>

                <h3 class="text-xl font-bold text-slate-900 mb-2">Galeri</h3>
                <p class="text-sm font-medium text-blue-chill mb-4 uppercase tracking-wide opacity-80">Capture Perfection</p>
                <p class="text-slate-500 leading-relaxed mb-6">
                    Jasa dokumentasi foto & video profesional, livestreaming broadcast quality, hingga desain grafis.
                </p>
                <a href="{{ route('gallery') }}" class="inline-flex items-center text-slate-900 font-semibold group-hover:text-blue-chill transition-colors">
                    Lihat Detail
                    <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>

            <!-- Hadirku -->
            <div class="w-full md:w-[calc(50%-1.5rem)] lg:w-[calc(33.333%-1.5rem)] group bg-white rounded-[2rem] p-8 shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 border border-slate-100 relative overflow-hidden">
                 <div class="absolute top-0 right-0 p-8 opacity-10 group-hover:opacity-20 transition-opacity transform group-hover:scale-110 duration-500">
                    <svg class="w-32 h-32 text-green-500" fill="currentColor" viewBox="0 0 24 24">
                         <path d="M12 4v1m6 11h2m-6 0h-2v4h2v-4zM6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                </div>

                <div class="w-14 h-14 rounded-2xl bg-green-50 text-green-600 flex items-center justify-center mb-6 group-hover:bg-green-600 group-hover:text-white transition-colors duration-300 shadow-md shadow-green-500/10">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 4v1m6 11h2m-6 0h-2v4h2v-4zM6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                        </path>
                    </svg>
                </div>

                <h3 class="text-xl font-bold text-slate-900 mb-2">Hadirku</h3>
                <p class="text-sm font-medium text-green-600 mb-4 uppercase tracking-wide opacity-80">Smart Reception</p>
                <p class="text-slate-500 leading-relaxed mb-6">
                    Buku tamu digital canggih berbasis QR Code. Data tamu real-time, ekspor mudah, dan antarmuka elegan.
                </p>
                 <a href="{{ route('hadirku') }}" class="inline-flex items-center text-slate-900 font-semibold group-hover:text-green-600 transition-colors">
                    Lihat Detail
                    <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>

            <!-- Seniku -->
            <div class="w-full md:w-[calc(50%-1.5rem)] lg:w-[calc(33.333%-1.5rem)] group bg-white rounded-[2rem] p-8 shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 border border-slate-100 relative overflow-hidden">
                 <div class="absolute top-0 right-0 p-8 opacity-10 group-hover:opacity-20 transition-opacity transform group-hover:scale-110 duration-500">
                    <svg class="w-32 h-32 text-purple-500" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                    </svg>
                </div>

                <div class="w-14 h-14 rounded-2xl bg-purple-50 text-purple-600 flex items-center justify-center mb-6 group-hover:bg-purple-600 group-hover:text-white transition-colors duration-300 shadow-md shadow-purple-500/10">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                    </svg>
                </div>

                <h3 class="text-xl font-bold text-slate-900 mb-2">Seniku</h3>
                <p class="text-sm font-medium text-purple-600 mb-4 uppercase tracking-wide opacity-80">Artistic Touch</p>
                <p class="text-slate-500 leading-relaxed mb-6">
                    Penyedia souvenir unik, aksesoris acara, dan karangan bunga dalam jumlah besar dengan sentuhan estetika.
                </p>
                 <a href="{{ route('seniku') }}" class="inline-flex items-center text-slate-900 font-semibold group-hover:text-purple-600 transition-colors">
                    Lihat Detail
                    <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>

            <!-- Undanganku -->
            <div class="w-full md:w-[calc(50%-1.5rem)] lg:w-[calc(33.333%-1.5rem)] group bg-white rounded-[2rem] p-8 shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 border border-slate-100 relative overflow-hidden">
                 <div class="absolute top-0 right-0 p-8 opacity-10 group-hover:opacity-20 transition-opacity transform group-hover:scale-110 duration-500">
                    <svg class="w-32 h-32 text-blue-chill" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                </div>

                <div class="w-14 h-14 rounded-2xl bg-blue-chill/10 text-blue-chill flex items-center justify-center mb-6 group-hover:bg-blue-chill group-hover:text-white transition-colors duration-300 shadow-md shadow-blue-chill/10">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                </div>

                <h3 class="text-xl font-bold text-slate-900 mb-2">Undanganku</h3>
                <p class="text-sm font-medium text-blue-chill mb-4 uppercase tracking-wide opacity-80">Digital Invitation</p>
                <p class="text-slate-500 leading-relaxed mb-6">
                    Buat undangan pernikahan digital (Website & Video) yang elegan, hemat biaya, dan mudah disebar.
                </p>
                 <a href="{{ route('undanganku') }}" class="inline-flex items-center text-slate-900 font-semibold group-hover:text-blue-chill transition-colors">
                    Lihat Detail
                    <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>

            <!-- Digitalku -->
            <div class="w-full md:w-[calc(50%-1.5rem)] lg:w-[calc(33.333%-1.5rem)] group bg-white rounded-[2rem] p-8 shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 border border-slate-100 relative overflow-hidden">
                 <div class="absolute top-0 right-0 p-8 opacity-10 group-hover:opacity-20 transition-opacity transform group-hover:scale-110 duration-500">
                    <svg class="w-32 h-32 text-blue-chill" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                    </svg>
                </div>

                <div class="w-14 h-14 rounded-2xl bg-blue-chill/10 text-blue-chill flex items-center justify-center mb-6 group-hover:bg-blue-chill group-hover:text-white transition-colors duration-300 shadow-md shadow-blue-chill/10">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                    </svg>
                </div>

                <h3 class="text-xl font-bold text-slate-900 mb-2">Digitalku</h3>
                <p class="text-sm font-medium text-blue-chill mb-4 uppercase tracking-wide opacity-80">Digital Transformation</p>
                <p class="text-slate-500 leading-relaxed mb-6">
                    Solusi pengembangan software, pengelolaan OJS, Website Company Profile, hingga Aplikasi Android/iOS.
                </p>
                 <a href="{{ route('digitalku') }}" class="inline-flex items-center text-slate-900 font-semibold group-hover:text-blue-chill transition-colors">
                    Lihat Detail
                    <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>

            <!-- Fotoku -->
            <div class="w-full md:w-[calc(50%-1.5rem)] lg:w-[calc(33.333%-1.5rem)] group bg-white rounded-[2rem] p-8 shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 border border-slate-100 relative overflow-hidden">
                 <div class="absolute top-0 right-0 p-8 opacity-10 group-hover:opacity-20 transition-opacity transform group-hover:scale-110 duration-500">
                    <svg class="w-32 h-32 text-pink-500" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                </div>

                <div class="w-14 h-14 rounded-2xl bg-pink-50 text-pink-500 flex items-center justify-center mb-6 group-hover:bg-pink-500 group-hover:text-white transition-colors duration-300 shadow-md shadow-pink-500/10">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                </div>

                <h3 class="text-xl font-bold text-slate-900 mb-2">Fotoku</h3>
                <p class="text-sm font-medium text-pink-500 mb-4 uppercase tracking-wide opacity-80">Fun Photobooth</p>
                <p class="text-slate-500 leading-relaxed mb-6">
                    Sewa photobooth dan 360 video booth untuk berbagai event. Unlimited print, properti seru, dan hasil instan.
                </p>
                 <a href="{{ route('fotoku') }}" class="inline-flex items-center text-slate-900 font-semibold group-hover:text-pink-500 transition-colors">
                    Lihat Detail
                    <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>
        </div>
    </div>
</section>