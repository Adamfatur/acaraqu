<section id="portofolio" class="py-32 bg-iron relative overflow-hidden scroll-mt-20" x-data="{ shown: false }" x-intersect.threshold.20="shown = true">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <!-- Header -->
        <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-8">
            <div class="max-w-2xl" :class="shown ? 'animate-fade-in-up' : 'opacity-0'">
                <span class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white border border-slate-200 shadow-sm text-blue-chill font-bold tracking-wider uppercase text-xs mb-6">
                    <span class="w-2 h-2 rounded-full bg-blue-chill animate-pulse"></span>
                    Portfolio Terpilih
                </span>
                <h2 class="text-4xl md:text-5xl font-bold text-slate-900 leading-tight">
                    Karya Kami yang <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-chill to-purple-600">Berbicara.</span>
                </h2>
            </div>
            <div :class="shown ? 'animate-fade-in-up' : 'opacity-0'" style="animation-delay: 0.1s">
                <a href="{{ route('galeriqu') }}" class="inline-flex items-center gap-2 px-6 py-3 rounded-full bg-white border border-regent-gray/20 text-slate-900 font-bold hover:bg-blue-chill hover:text-white transition-all duration-300 group shadow-sm">
                    Lihat Semua Karya
                    <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>
        </div>

        <!-- Portfolio Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Item 1 -->
            <div class="group relative aspect-[4/5] rounded-[2rem] overflow-hidden cursor-pointer" :class="shown ? 'animate-fade-in-up' : 'opacity-0'" style="animation-delay: 0.2s">
                <img src="https://images.unsplash.com/photo-1511578314322-379afb476865?q=80&w=1000&auto=format&fit=crop" 
                    alt="Project 1" class="w-full h-full object-cover transform group-hover:scale-110 transition duration-700">
                <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-transparent to-transparent opacity-80"></div>
                
                <div class="absolute bottom-0 left-0 right-0 p-8 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                    <span class="inline-block px-3 py-1 bg-blue-chill/20 backdrop-blur-md border border-white/10 rounded-full text-white text-xs font-bold mb-3">Conference</span>
                    <h3 class="text-2xl font-bold text-white mb-2">Tech Summit 2024</h3>
                    <p class="text-iron text-sm opacity-0 group-hover:opacity-100 transition-opacity duration-500 delay-100">
                        Dokumentasi foto & video cinematic untuk event teknologi terbesar tahun ini.
                    </p>
                </div>
            </div>

            <!-- Item 2 -->
            <div class="group relative aspect-[4/5] rounded-[2rem] overflow-hidden cursor-pointer md:mt-16" :class="shown ? 'animate-fade-in-up' : 'opacity-0'" style="animation-delay: 0.3s">
                <img src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?q=80&w=1000&auto=format&fit=crop" 
                    alt="Project 2" class="w-full h-full object-cover transform group-hover:scale-110 transition duration-700">
                <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-transparent to-transparent opacity-80"></div>
                
                <div class="absolute bottom-0 left-0 right-0 p-8 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                    <span class="inline-block px-3 py-1 bg-green-500/20 backdrop-blur-md border border-white/10 rounded-full text-green-300 text-xs font-bold mb-3">Wedding</span>
                    <h3 class="text-2xl font-bold text-white mb-2">Sarah & James</h3>
                    <p class="text-slate-300 text-sm opacity-0 group-hover:opacity-100 transition-opacity duration-500 delay-100">
                        Undangan digital interaktif dan sistem buku tamu QR Code.
                    </p>
                </div>
            </div>

            <!-- Item 3 -->
            <div class="group relative aspect-[4/5] rounded-[2rem] overflow-hidden cursor-pointer" :class="shown ? 'animate-fade-in-up' : 'opacity-0'" style="animation-delay: 0.4s">
                <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?q=80&w=1000&auto=format&fit=crop" 
                    alt="Project 3" class="w-full h-full object-cover transform group-hover:scale-110 transition duration-700">
                <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-transparent to-transparent opacity-80"></div>
                
                <div class="absolute bottom-0 left-0 right-0 p-8 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                    <span class="inline-block px-3 py-1 bg-purple-500/20 backdrop-blur-md border border-white/10 rounded-full text-purple-300 text-xs font-bold mb-3">Branding</span>
                    <h3 class="text-2xl font-bold text-white mb-2">Elevate Brand</h3>
                    <p class="text-slate-300 text-sm opacity-0 group-hover:opacity-100 transition-opacity duration-500 delay-100">
                        Rebranding total mulai dari logo, website profile, hingga social media kit.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>