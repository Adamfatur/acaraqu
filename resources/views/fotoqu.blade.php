<x-layouts.app>
    @section('title', 'Fotoku - Sewa Photobooth & 360 Video Booth')
    @section('meta_description', 'Layanan sewa photobooth dan 360 video booth untuk pernikahan, ulang tahun, dan event korporat. Abadikan keseruan acara Anda dengan Fotoku.')

    <!-- Hero Section -->
    <section class="relative py-24 lg:py-32 bg-slate-900 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div>
                    <span class="inline-flex items-center gap-2 py-1 px-3 rounded-full bg-pink-500/20 border border-pink-500/30 text-pink-500 text-sm font-bold mb-6 animate-fade-in-up">
                        <span class="w-2 h-2 rounded-full bg-pink-500"></span>
                        Premium Photobooth Service
                    </span>
                    <h1 class="text-5xl md:text-6xl font-bold text-white mb-6 leading-tight animate-fade-in-up" style="animation-delay: 0.1s">
                        Bikin Acara Kamu <span class="text-pink-500">Makin Seru & Viral!</span>
                    </h1>
                    <p class="text-lg text-slate-400 mb-8 leading-relaxed max-w-xl animate-fade-in-up" style="animation-delay: 0.2s">
                        Layanan Photobooth dan 360 Video Booth terbaik untuk pernikahan, ulang tahun, wisuda, hingga event kantor. Hasil instan, kualitas premium.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 animate-fade-in-up" style="animation-delay: 0.3s">
                        <a href="#packages" class="px-8 py-4 rounded-full bg-pink-500 text-white font-bold hover:bg-white hover:text-slate-900 transition shadow-lg text-center">
                            Lihat Paket
                        </a>
                        <a href="https://wa.me/6281234567890?text=Halo,%20saya%20tertarik%20sewa%20Photobooth." target="_blank" class="px-8 py-4 rounded-full bg-transparent border-2 border-slate-700 text-white font-bold hover:bg-slate-800 transition text-center">
                            Tanya Dulu
                        </a>
                    </div>
                </div>
                
                <div class="relative animate-fade-in-up lg:h-[500px] flex items-center justify-center" style="animation-delay: 0.4s">
                    <div class="absolute inset-0 bg-pink-500/10 rounded-full blur-3xl transform translate-x-12"></div>
                    
                    <!-- Photobooth Mockup -->
                    <div class="relative z-10 w-full max-w-lg">
                        <div class="grid grid-cols-2 gap-4">
                            <img src="https://images.unsplash.com/photo-1533174072545-e8d4aa97edf9?q=80&w=1000&auto=format&fit=crop" class="rounded-2xl shadow-2xl border border-slate-700 w-full h-64 object-cover transform -rotate-3 hover:rotate-0 transition duration-500">
                            <img src="https://images.unsplash.com/photo-1516035069371-29a1b244cc32?q=80&w=1000&auto=format&fit=crop" class="rounded-2xl shadow-2xl border border-slate-700 w-full h-64 object-cover transform translate-y-8 rotate-3 hover:rotate-0 transition duration-500">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-4">Kenapa Pilih Fotoku?</h2>
                <p class="text-slate-500 text-lg max-w-2xl mx-auto">
                    Kami menghadirkan pengalaman foto yang menyenangkan dengan teknologi terkini dan properti kekinian.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="bg-white p-8 rounded-[2rem] border border-slate-200 hover:shadow-xl hover:-translate-y-2 transition duration-300 group">
                    <div class="w-16 h-16 rounded-2xl bg-pink-500 text-white flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Unlimited Photo & Print</h3>
                    <p class="text-slate-500 leading-relaxed">
                        Puas-puasin foto tanpa batas selama durasi sewa! Cetak langsung di tempat dengan kertas foto berkualitas tinggi.
                    </p>
                </div>

                <!-- Feature 2 -->
                <div class="bg-white p-8 rounded-[2rem] border border-slate-200 hover:shadow-xl hover:-translate-y-2 transition duration-300 group">
                    <div class="w-16 h-16 rounded-2xl bg-pink-500 text-white flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Custom Template Design</h3>
                    <p class="text-slate-500 leading-relaxed">
                        Desain frame foto disesuaikan dengan tema acara Anda. Bisa tambah logo, nama, dan tanggal acara biar makin personal.
                    </p>
                </div>

                <!-- Feature 3 -->
                <div class="bg-white p-8 rounded-[2rem] border border-slate-200 hover:shadow-xl hover:-translate-y-2 transition duration-300 group">
                    <div class="w-16 h-16 rounded-2xl bg-pink-500 text-white flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Fun Props & Accessories</h3>
                    <p class="text-slate-500 leading-relaxed">
                        Tersedia banyak properti lucu seperti kacamata, topi, bando, dan tulisan-tulisan unik yang bikin foto makin gokil.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section id="packages" class="py-24 bg-slate-50 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-slate-900 mb-6">Pilihan Paket Sewa</h2>
                <p class="text-slate-500 text-lg max-w-2xl mx-auto leading-relaxed">
                    Pilih paket yang sesuai dengan kebutuhan dan durasi acaramu.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Basic Package -->
                <div class="relative bg-white rounded-[2.5rem] p-8 border border-slate-200 hover:shadow-xl hover:-translate-y-2 transition-all duration-300 group">
                    <div class="w-14 h-14 rounded-2xl bg-pink-100 text-pink-500 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900 mb-2">Basic Fun</h3>
                    <p class="text-slate-500 text-sm mb-6">Cocok untuk acara ulang tahun kecil.</p>
                    <div class="mb-8">
                        <p class="text-xs text-slate-400 uppercase tracking-wide mb-1">Mulai dari</p>
                        <p class="text-3xl font-bold text-pink-500">Rp 1.500.000</p>
                    </div>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-center text-sm text-slate-600 gap-2"><svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> 2 Jam Unlimited</li>
                        <li class="flex items-center text-sm text-slate-600 gap-2"><svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Fun Props</li>
                        <li class="flex items-center text-sm text-slate-600 gap-2"><svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Softcopy File</li>
                    </ul>
                    <a href="https://wa.me/6281234567890?text=Halo,%20saya%20pesan%20paket%20Basic%20Fun%20Fotoku." target="_blank" class="block w-full py-3 rounded-xl bg-slate-100 text-slate-900 font-bold text-center hover:bg-pink-500 hover:text-white transition-colors">Pilih Paket</a>
                </div>

                <!-- Premium Package -->
                <div class="relative bg-pink-500 rounded-[2.5rem] p-8 border border-pink-600 shadow-2xl transform md:-translate-y-4 transition-all duration-300">
                    <div class="absolute top-0 right-0 p-6">
                        <span class="bg-white text-pink-500 text-xs font-bold px-3 py-1 rounded-full">BEST SELLER</span>
                    </div>
                    <div class="w-14 h-14 rounded-2xl bg-white/20 text-white flex items-center justify-center mb-6">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path></svg>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-2">Premium Party</h3>
                    <p class="text-white/80 text-sm mb-6">Pilihan favorit untuk pernikahan & event.</p>
                    <div class="mb-8">
                        <p class="text-xs text-white/60 uppercase tracking-wide mb-1">Mulai dari</p>
                        <p class="text-3xl font-bold text-white">Rp 2.500.000</p>
                    </div>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-center text-sm text-white gap-2"><svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> 4 Jam Unlimited</li>
                        <li class="flex items-center text-sm text-white gap-2"><svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Custom Template</li>
                        <li class="flex items-center text-sm text-white gap-2"><svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> All Photos Printing</li>
                    </ul>
                    <a href="https://wa.me/6281234567890?text=Halo,%20saya%20pesan%20paket%20Premium%20Party%20Fotoku." target="_blank" class="block w-full py-3 rounded-xl bg-white text-pink-500 font-bold text-center hover:bg-slate-900 hover:text-white transition-colors">Pilih Paket</a>
                </div>

                <!-- 360 Package -->
                <div class="relative bg-white rounded-[2.5rem] p-8 border border-slate-200 hover:shadow-xl hover:-translate-y-2 transition-all duration-300 group">
                    <div class="w-14 h-14 rounded-2xl bg-purple-100 text-purple-600 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900 mb-2">360 Video Booth</h3>
                    <p class="text-slate-500 text-sm mb-6">Video slow motion 360 derajat yang viral.</p>
                    <div class="mb-8">
                        <p class="text-xs text-slate-400 uppercase tracking-wide mb-1">Mulai dari</p>
                        <p class="text-3xl font-bold text-pink-500">Rp 3.500.000</p>
                    </div>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-center text-sm text-slate-600 gap-2"><svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> 3 Jam Unlimited</li>
                        <li class="flex items-center text-sm text-slate-600 gap-2"><svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Instant Share QR</li>
                        <li class="flex items-center text-sm text-slate-600 gap-2"><svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Professional Lighting</li>
                    </ul>
                    <a href="https://wa.me/6281234567890?text=Halo,%20saya%20pesan%20paket%20360%20Video%20Booth%20Fotoku." target="_blank" class="block w-full py-3 rounded-xl bg-slate-100 text-slate-900 font-bold text-center hover:bg-pink-500 hover:text-white transition-colors">Pilih Paket</a>
                </div>
            </div>
        </div>
    </section>
</x-layouts.app>