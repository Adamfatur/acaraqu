<section class="py-32 bg-slate-900 relative overflow-hidden text-white" x-data="{ shown: false }" x-intersect.threshold.20="shown = true">
    <!-- Background Decor -->
    <div class="absolute inset-0 bg-slate-900"></div>
    <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-blue-chill/5 rounded-full blur-[120px]"></div>
    <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-blue-chill/5 rounded-full blur-[120px]"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">
            <!-- Sticky Title -->
            <div class="lg:sticky lg:top-32" :class="shown ? 'animate-fade-in-up' : 'opacity-0'">
                <span class="text-blue-400 font-bold tracking-wider uppercase text-sm mb-4 block">Nilai Kami</span>
                <h2 class="text-4xl md:text-6xl font-bold mb-8 leading-tight">
                    Kami Tidak Sekadar Bekerja, <br>
                    <span class="text-blue-400">Kami Berkarya.</span>
                </h2>
                <p class="text-slate-400 text-lg max-w-lg leading-relaxed mb-12">
                    Setiap detail diperhitungkan, setiap piksel ditempatkan dengan tujuan. Kami menghadirkan standar baru dalam industri kreatif dan digital.
                </p>
                
                <div class="flex gap-8">
                    <div>
                        <p class="text-4xl font-bold text-white mb-1">5+</p>
                        <p class="text-slate-500 text-sm">Tahun Pengalaman</p>
                    </div>
                    <div>
                        <p class="text-4xl font-bold text-white mb-1">500+</p>
                        <p class="text-slate-500 text-sm">Proyek Selesai</p>
                    </div>
                    <div>
                        <p class="text-4xl font-bold text-white mb-1">98%</p>
                        <p class="text-slate-500 text-sm">Klien Puas</p>
                    </div>
                </div>
            </div>

            <!-- Content Cards -->
            <div class="space-y-8">
                <!-- Item 1 -->
                <div class="bg-white/5 border border-white/10 rounded-3xl p-8 hover:bg-white/10 transition-all duration-300 group"
                    :class="shown ? 'animate-fade-in-up' : 'opacity-0'" style="animation-delay: 0.2s">
                    <div class="w-14 h-14 rounded-2xl bg-blue-chill/20 text-blue-400 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.384-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-4">Estetika & Kualitas</h3>
                    <p class="text-slate-400 text-lg leading-relaxed">
                        Desain bukan hanya tentang bagaimana terlihat, tapi bagaimana berfungsi. Kami memadukan seni visual dengan fungsionalitas untuk hasil yang memukau.
                    </p>
                </div>

                <!-- Item 2 -->
                <div class="bg-white/5 border border-white/10 rounded-3xl p-8 hover:bg-white/10 transition-all duration-300 group"
                    :class="shown ? 'animate-fade-in-up' : 'opacity-0'" style="animation-delay: 0.4s">
                    <div class="w-14 h-14 rounded-2xl bg-blue-chill/20 text-blue-400 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-4">Teknologi Terkini</h3>
                    <p class="text-slate-400 text-lg leading-relaxed">
                        Selalu update dengan stack teknologi terbaru. Dari React, Laravel, hingga tools AI terbaru untuk efisiensi dan performa maksimal.
                    </p>
                </div>

                <!-- Item 3 -->
                <div class="bg-white/5 border border-white/10 rounded-3xl p-8 hover:bg-white/10 transition-all duration-300 group"
                    :class="shown ? 'animate-fade-in-up' : 'opacity-0'" style="animation-delay: 0.6s">
                    <div class="w-14 h-14 rounded-2xl bg-blue-chill/20 text-blue-400 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-4">Tim Profesional</h3>
                    <p class="text-slate-400 text-lg leading-relaxed">
                        Kami adalah kumpulan individu yang berdedikasi tinggi. Fotografer, Developer, Designer, dan Event Planner yang siap mewujudkan visi Anda.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>