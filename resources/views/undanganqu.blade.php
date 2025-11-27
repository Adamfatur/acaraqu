<x-layouts.app>
    @section('title', 'UndanganQu - Undangan Digital Kekinian')
    @section('meta_description', 'Buat undangan pernikahan digital (Website & Video) yang elegan, hemat biaya, dan mudah disebar. Dilengkapi fitur RSVP dan peta lokasi.')

    <!-- Hero Section -->
    <section class="relative py-24 lg:py-32 bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div>
                    <span class="inline-flex items-center gap-2 py-1 px-3 rounded-full bg-blue-chill/10 text-blue-chill text-sm font-bold mb-6 animate-fade-in-up">
                        <span class="w-2 h-2 rounded-full bg-blue-chill"></span>
                        Solusi Undangan Digital Modern
                    </span>
                    <h1 class="text-5xl md:text-6xl font-bold text-slate-900 mb-6 leading-tight animate-fade-in-up" style="animation-delay: 0.1s">
                        Sebar Kabar Bahagia dengan Cara <span class="text-blue-chill">Kekinian.</span>
                    </h1>
                    <p class="text-lg text-gothic mb-8 leading-relaxed max-w-xl animate-fade-in-up" style="animation-delay: 0.2s">
                        Platform pembuatan undangan website, video, dan gambar yang praktis, elegan, dan ramah lingkungan. Jangkau kerabat di mana saja dalam satu klik.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 animate-fade-in-up" style="animation-delay: 0.3s">
                        <a href="#catalog" class="px-8 py-4 rounded-full bg-blue-chill text-white font-bold hover:bg-slate-700 transition shadow-lg text-center">
                            Lihat Katalog Tema
                        </a>
                        <a href="https://wa.me/6281234567890?text=Halo,%20saya%20ingin%20buat%20undangan%20digital." target="_blank" class="px-8 py-4 rounded-full bg-white border-2 border-iron text-slate-900 font-bold hover:border-blue-chill hover:text-blue-chill transition text-center">
                            Buat Sekarang
                        </a>
                    </div>
                </div>
                
                <div class="relative animate-fade-in-up lg:h-[600px] flex items-center justify-center" style="animation-delay: 0.4s">
                    <div class="absolute inset-0 bg-iron rounded-full blur-3xl transform translate-x-12"></div>
                    
                    <!-- Phone Mockups -->
                    <div class="relative z-10 grid grid-cols-2 gap-4">
                        <div class="bg-white rounded-[2rem] shadow-2xl border-4 border-slate-900 overflow-hidden transform translate-y-12">
                            <img src="https://images.unsplash.com/photo-1605106702842-01a887a31122?q=80&w=1000&auto=format&fit=crop" alt="Theme Floral" class="w-full h-64 object-cover">
                            <div class="p-4 bg-white">
                                <p class="font-serif text-lg text-slate-900 text-center">Romeo & Juliet</p>
                                <p class="text-xs text-gothic text-center mt-1">Sabtu, 20 Nov 2024</p>
                            </div>
                        </div>
                        <div class="bg-white rounded-[2rem] shadow-2xl border-4 border-slate-900 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1515934751635-c81c6bc9a2d8?q=80&w=1000&auto=format&fit=crop" alt="Theme Minimalist" class="w-full h-64 object-cover">
                            <div class="p-4 bg-white">
                                <p class="font-serif text-lg text-slate-900 text-center">Adam & Eve</p>
                                <p class="text-xs text-gothic text-center mt-1">Minggu, 21 Nov 2024</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features -->
    <section class="py-24 bg-iron/30">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-4">Fitur Premium Undangan Website</h2>
                <p class="text-gothic text-lg max-w-2xl mx-auto">
                    Lebih dari sekadar undangan biasa. Kami memberikan pengalaman interaktif untuk tamu Anda.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-[2rem] border border-iron hover:shadow-lg transition duration-300">
                    <div class="w-12 h-12 rounded-xl bg-blue-chill/10 text-blue-chill flex items-center justify-center mb-6">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Background Music</h3>
                    <p class="text-gothic">Hidupkan suasana undangan dengan lagu romantis pilihan Anda yang berputar otomatis.</p>
                </div>
                <div class="bg-white p-8 rounded-[2rem] border border-iron hover:shadow-lg transition duration-300">
                    <div class="w-12 h-12 rounded-xl bg-blue-chill/10 text-blue-chill flex items-center justify-center mb-6">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Peta Lokasi Akurat</h3>
                    <p class="text-gothic">Terintegrasi dengan Google Maps, memudahkan tamu menemukan lokasi acara tanpa tersesat.</p>
                </div>
                <div class="bg-white p-8 rounded-[2rem] border border-iron hover:shadow-lg transition duration-300">
                    <div class="w-12 h-12 rounded-xl bg-blue-chill/10 text-blue-chill flex items-center justify-center mb-6">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">RSVP & Ucapan</h3>
                    <p class="text-gothic">Tamu bisa konfirmasi kehadiran dan mengirim doa restu langsung melalui website.</p>
                </div>
                <div class="bg-white p-8 rounded-[2rem] border border-iron hover:shadow-lg transition duration-300">
                    <div class="w-12 h-12 rounded-xl bg-blue-chill/10 text-blue-chill flex items-center justify-center mb-6">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Galeri Foto & Video</h3>
                    <p class="text-gothic">Bagikan momen pre-wedding indah Anda dalam tata letak galeri yang memukau.</p>
                </div>
                <div class="bg-white p-8 rounded-[2rem] border border-iron hover:shadow-lg transition duration-300">
                    <div class="w-12 h-12 rounded-xl bg-blue-chill/10 text-blue-chill flex items-center justify-center mb-6">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Countdown Timer</h3>
                    <p class="text-gothic">Hitung mundur menuju hari bahagia untuk membangun antusiasme para tamu.</p>
                </div>
                <div class="bg-white p-8 rounded-[2rem] border border-iron hover:shadow-lg transition duration-300">
                    <div class="w-12 h-12 rounded-xl bg-blue-chill/10 text-blue-chill flex items-center justify-center mb-6">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Hadiah Digital (Amplop)</h3>
                    <p class="text-gothic">Fasilitasi tamu yang ingin memberikan hadiah melalui transfer bank atau e-wallet.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Catalog Section -->
    <section id="catalog" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="text-blue-chill font-bold tracking-wider uppercase text-sm mb-3 block">Katalog Tema</span>
                <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-4">Desain Eksklusif Pilihan</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Theme 1 -->
                <div class="group rounded-[2rem] overflow-hidden border border-iron hover:shadow-xl transition duration-300">
                    <div class="relative aspect-[3/4]">
                        <img src="https://images.unsplash.com/photo-1522673607200-1645062cd4d0?q=80&w=2000&auto=format&fit=crop" alt="Rustic Theme" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-slate-900/50 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                            <a href="#" class="px-6 py-3 bg-white text-slate-900 rounded-full font-bold hover:bg-blue-chill hover:text-white transition">Preview</a>
                        </div>
                    </div>
                    <div class="p-6 bg-white">
                        <h3 class="text-xl font-bold text-slate-900 mb-1">Rustic Elegance</h3>
                        <p class="text-gothic text-sm">Nuansa alam yang hangat dan romantis.</p>
                    </div>
                </div>

                <!-- Theme 2 -->
                <div class="group rounded-[2rem] overflow-hidden border border-iron hover:shadow-xl transition duration-300">
                    <div class="relative aspect-[3/4]">
                        <img src="https://images.unsplash.com/photo-1515934751635-c81c6bc9a2d8?q=80&w=2000&auto=format&fit=crop" alt="Minimalist Theme" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-slate-900/50 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                            <a href="#" class="px-6 py-3 bg-white text-slate-900 rounded-full font-bold hover:bg-blue-chill hover:text-white transition">Preview</a>
                        </div>
                    </div>
                    <div class="p-6 bg-white">
                        <h3 class="text-xl font-bold text-slate-900 mb-1">Modern Minimalist</h3>
                        <p class="text-gothic text-sm">Simpel, bersih, dan sangat elegan.</p>
                    </div>
                </div>

                <!-- Theme 3 -->
                <div class="group rounded-[2rem] overflow-hidden border border-iron hover:shadow-xl transition duration-300">
                    <div class="relative aspect-[3/4]">
                        <img src="https://images.unsplash.com/photo-1507915977619-6ccfe8003ae6?q=80&w=2000&auto=format&fit=crop" alt="Floral Theme" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-slate-900/50 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                            <a href="#" class="px-6 py-3 bg-white text-slate-900 rounded-full font-bold hover:bg-blue-chill hover:text-white transition">Preview</a>
                        </div>
                    </div>
                    <div class="p-6 bg-white">
                        <h3 class="text-xl font-bold text-slate-900 mb-1">Classic Floral</h3>
                        <p class="text-gothic text-sm">Kecantikan bunga abadi yang mempesona.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing -->
    <section class="py-24 bg-iron/30">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-4">Paket Undangan</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Basic -->
                <div class="bg-white p-8 rounded-[2rem] border border-iron hover:shadow-lg transition flex flex-col">
                    <h3 class="text-xl font-bold text-slate-900 mb-2">Basic</h3>
                    <div class="mb-6">
                        <span class="text-3xl font-bold text-blue-chill">Rp 100.000</span>
                    </div>
                    <ul class="space-y-3 mb-8 flex-1 text-sm text-gothic">
                        <li class="flex items-center gap-2"><svg class="w-4 h-4 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Website Undangan</li>
                        <li class="flex items-center gap-2"><svg class="w-4 h-4 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Masa Aktif 3 Bulan</li>
                        <li class="flex items-center gap-2"><svg class="w-4 h-4 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Max 300 Tamu</li>
                    </ul>
                    <a href="https://wa.me/6281234567890?text=Pilih%20Paket%20Basic%20Undangan" class="block w-full py-3 rounded-xl border border-blue-chill text-blue-chill font-bold text-center hover:bg-blue-chill hover:text-white transition">Pilih Paket</a>
                </div>

                <!-- Premium -->
                <div class="bg-white p-8 rounded-[2rem] border-2 border-blue-chill shadow-xl flex flex-col transform md:-translate-y-4">
                    <div class="flex justify-between items-center mb-2">
                        <h3 class="text-xl font-bold text-slate-900">Premium</h3>
                        <span class="bg-blue-chill text-white text-xs px-2 py-1 rounded">POPULAR</span>
                    </div>
                    <div class="mb-6">
                        <span class="text-3xl font-bold text-blue-chill">Rp 250.000</span>
                    </div>
                    <ul class="space-y-3 mb-8 flex-1 text-sm text-gothic">
                        <li class="flex items-center gap-2"><svg class="w-4 h-4 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Website Undangan Premium</li>
                        <li class="flex items-center gap-2"><svg class="w-4 h-4 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Masa Aktif 1 Tahun</li>
                        <li class="flex items-center gap-2"><svg class="w-4 h-4 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Unlimited Tamu</li>
                        <li class="flex items-center gap-2"><svg class="w-4 h-4 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Backsound & Galeri</li>
                    </ul>
                    <a href="https://wa.me/6281234567890?text=Pilih%20Paket%20Premium%20Undangan" class="block w-full py-3 rounded-xl bg-blue-chill text-white font-bold text-center hover:bg-slate-700 transition">Pilih Paket</a>
                </div>

                <!-- Exclusive -->
                <div class="bg-white p-8 rounded-[2rem] border border-iron hover:shadow-lg transition flex flex-col">
                    <h3 class="text-xl font-bold text-slate-900 mb-2">Exclusive</h3>
                    <div class="mb-6">
                        <span class="text-3xl font-bold text-blue-chill">Rp 500.000</span>
                    </div>
                    <ul class="space-y-3 mb-8 flex-1 text-sm text-gothic">
                        <li class="flex items-center gap-2"><svg class="w-4 h-4 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Website + Video Undangan</li>
                        <li class="flex items-center gap-2"><svg class="w-4 h-4 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Masa Aktif Selamanya</li>
                        <li class="flex items-center gap-2"><svg class="w-4 h-4 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Custom Domain (.com)</li>
                        <li class="flex items-center gap-2"><svg class="w-4 h-4 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Prioritas Support</li>
                    </ul>
                    <a href="https://wa.me/6281234567890?text=Pilih%20Paket%20Exclusive%20Undangan" class="block w-full py-3 rounded-xl border border-blue-chill text-blue-chill font-bold text-center hover:bg-blue-chill hover:text-white transition">Pilih Paket</a>
                </div>
            </div>
        </div>
    </section>

</x-layouts.app>