<section class="py-32 bg-slate-900 relative overflow-hidden" x-data="{ shown: false }" x-intersect.threshold.20="shown = true">
    <!-- Abstract Background -->
    <div class="absolute inset-0 z-0 opacity-20">
        <div class="absolute top-10 left-10 w-96 h-96 bg-blue-chill rounded-full mix-blend-multiply filter blur-[128px] animate-blob"></div>
        <div class="absolute top-10 right-10 w-96 h-96 bg-purple-500 rounded-full mix-blend-multiply filter blur-[128px] animate-blob animation-delay-2000"></div>
        <div class="absolute -bottom-32 left-20 w-96 h-96 bg-pink-500 rounded-full mix-blend-multiply filter blur-[128px] animate-blob animation-delay-4000"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">
            
            <!-- Left Side: Visual -->
            <div class="relative" :class="shown ? 'animate-slide-right-fade' : 'opacity-0'">
                <div class="relative z-10 rounded-[2.5rem] overflow-hidden shadow-2xl border border-white/10 group">
                    <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?q=80&w=2000&auto=format&fit=crop" 
                        class="w-full h-auto object-cover transform group-hover:scale-105 transition duration-1000" alt="Team Work">
                    
                    <!-- Floating Stat Card -->
                    <div class="absolute bottom-8 right-8 bg-white/90 backdrop-blur-xl p-6 rounded-3xl shadow-lg border border-white/50 animate-float">
                        <p class="text-sm font-bold text-slate-500 mb-1">Project Sukses</p>
                        <p class="text-4xl font-bold text-slate-900">500+</p>
                        <div class="flex items-center gap-1 mt-2">
                             <span class="flex h-2 w-2 relative">
                                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
                                <span class="relative inline-flex rounded-full h-2 w-2 bg-green-500"></span>
                            </span>
                            <span class="text-xs font-medium text-green-600">Selalu Bertambah</span>
                        </div>
                    </div>
                </div>
                
                <!-- Decorative Elements behind image -->
                <div class="absolute -top-10 -left-10 w-32 h-32 bg-blue-chill rounded-full mix-blend-overlay blur-3xl opacity-50"></div>
                <div class="absolute -bottom-10 -right-10 w-32 h-32 bg-purple-500 rounded-full mix-blend-overlay blur-3xl opacity-50"></div>
            </div>

            <!-- Right Side: Content -->
            <div :class="shown ? 'animate-slide-left-fade' : 'opacity-0'">
                <span class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/5 border border-white/10 shadow-sm text-blue-400 font-bold tracking-wider uppercase text-xs mb-8">
                     <span class="w-2 h-2 rounded-full bg-blue-400"></span>
                    Kenapa Memilih Kami
                </span>
                
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-8 leading-tight">
                    Lebih Dari Sekadar <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-chill to-purple-400">Penyedia Jasa.</span>
                </h2>
                
                <p class="text-gothic text-lg leading-relaxed mb-10">
                    Kami adalah mitra strategis yang peduli dengan pertumbuhan bisnis dan kesuksesan acara Anda. Dedikasi, inovasi, dan kualitas adalah nafas kami.
                </p>

                <div class="space-y-6">
                    <!-- Feature 1 -->
                    <div class="flex items-start gap-5 group p-4 rounded-2xl hover:bg-white/5 transition-colors border border-transparent hover:border-white/5">
                        <div class="w-12 h-12 rounded-xl bg-blue-chill/10 flex items-center justify-center text-blue-chill flex-shrink-0 group-hover:scale-110 transition-transform">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-white mb-2 group-hover:text-blue-chill transition-colors">Eksekusi Cepat & Tepat</h3>
                            <p class="text-gothic leading-relaxed text-sm">
                                Kami menghargai waktu Anda. Setiap proyek dikerjakan dengan timeline yang jelas dan efisiensi tinggi tanpa mengorbankan kualitas.
                            </p>
                        </div>
                    </div>

                    <!-- Feature 2 -->
                    <div class="flex items-start gap-5 group p-4 rounded-2xl hover:bg-white/5 transition-colors border border-transparent hover:border-white/5">
                        <div class="w-12 h-12 rounded-xl bg-purple-500/10 flex items-center justify-center text-purple-400 flex-shrink-0 group-hover:scale-110 transition-transform">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-white mb-2 group-hover:text-purple-400 transition-colors">Kualitas Premium</h3>
                            <p class="text-gothic leading-relaxed text-sm">
                                Standar tinggi adalah baseline kami. Dari desain pixel-perfect hingga kode yang bersih dan scalable.
                            </p>
                        </div>
                    </div>

                    <!-- Feature 3 -->
                    <div class="flex items-start gap-5 group p-4 rounded-2xl hover:bg-white/5 transition-colors border border-transparent hover:border-white/5">
                        <div class="w-12 h-12 rounded-xl bg-pink-500/10 flex items-center justify-center text-pink-400 flex-shrink-0 group-hover:scale-110 transition-transform">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-white mb-2 group-hover:text-pink-400 transition-colors">Harga Kompetitif</h3>
                            <p class="text-gothic leading-relaxed text-sm">
                                Solusi terbaik tidak harus mahal. Kami menawarkan paket yang fleksibel sesuai dengan budget dan kebutuhan Anda.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>