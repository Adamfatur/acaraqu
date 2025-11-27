<x-layouts.app>
    @section('title', 'UndanganQu - Undangan Digital Kekinian')
    @section('meta_description', 'Buat undangan pernikahan digital (Website & Video) yang elegan, hemat biaya, dan mudah disebar. Dilengkapi fitur RSVP dan peta lokasi.')

    <!-- Hero Section -->
    <section class="relative min-h-screen flex items-center justify-center overflow-hidden bg-white pt-20">
        <div class="absolute inset-0 z-0">
            <div class="absolute top-[-10%] right-[-5%] w-[600px] h-[600px] bg-blue-chill/5 rounded-full blur-[100px] animate-blob"></div>
            <div class="absolute bottom-[-10%] left-[-5%] w-[500px] h-[500px] bg-purple-500/5 rounded-full blur-[100px] animate-blob animation-delay-2000"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 lg:gap-24 items-center">
                <div>
                    <span class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white border border-regent-gray/20 text-blue-chill text-sm font-bold mb-8 backdrop-blur-md animate-fade-in-up shadow-sm">
                        <span class="w-2 h-2 rounded-full bg-blue-chill animate-pulse"></span>
                        Solusi Undangan Digital Modern
                    </span>
                    <h1 class="text-5xl lg:text-7xl font-bold text-slate-900 mb-8 leading-tight tracking-tight animate-fade-in-up" style="animation-delay: 0.1s">
                        Sebar Kabar Bahagia dengan Cara <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-chill to-purple-500 animate-gradient">Kekinian.</span>
                    </h1>
                    <p class="text-xl text-gothic mb-10 leading-relaxed animate-fade-in-up" style="animation-delay: 0.2s">
                        Platform pembuatan undangan pernikahan digital yang mudah, cepat, dan hemat. Jangkau kerabat di mana saja tanpa terhalang jarak dan waktu.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 animate-fade-in-up" style="animation-delay: 0.3s">
                        <a href="#catalog" class="group relative px-8 py-4 bg-blue-chill text-white rounded-full font-bold hover:bg-blue-chill/90 transition-all duration-300 shadow-lg shadow-blue-chill/20 overflow-hidden text-center">
                            <span class="relative z-10">Lihat Katalog Tema</span>
                        </a>
                        <a href="https://wa.me/6281234567890?text=Halo,%20saya%20ingin%20buat%20undangan%20digital." target="_blank" class="px-8 py-4 bg-white border border-regent-gray/20 text-slate-900 rounded-full font-bold hover:bg-slate-50 transition-all duration-300 shadow-sm text-center">
                            Buat Sekarang
                        </a>
                    </div>
                </div>
                
                <div class="relative animate-fade-in-up lg:h-[600px] flex items-center justify-center" style="animation-delay: 0.4s">
                    <div class="absolute inset-0 bg-gradient-to-tr from-blue-chill/20 to-purple-500/20 rounded-[3rem] -rotate-6 scale-95 blur-xl z-10"></div>
                    
                    <!-- Phone Mockups -->
                    <div class="relative z-20 grid grid-cols-2 gap-6 transform rotate-3 hover:rotate-0 transition duration-700 ease-out">
                        <div class="bg-white rounded-[2.5rem] shadow-2xl border-4 border-slate-900 overflow-hidden transform translate-y-12 hover:-translate-y-2 transition duration-500">
                            <img src="https://images.unsplash.com/photo-1605106702842-01a887a31122?q=80&w=1000&auto=format&fit=crop" alt="Theme Floral" class="w-full h-64 object-cover">
                            <div class="p-6 bg-white text-center">
                                <p class="font-serif text-xl text-slate-900 mb-2">Romeo & Juliet</p>
                                <p class="text-xs text-gothic font-medium uppercase tracking-widest">Sabtu, 20 Nov 2024</p>
                            </div>
                        </div>
                        <div class="bg-white rounded-[2.5rem] shadow-2xl border-4 border-slate-900 overflow-hidden hover:-translate-y-2 transition duration-500">
                            <img src="https://images.unsplash.com/photo-1515934751635-c81c6bc9a2d8?q=80&w=1000&auto=format&fit=crop" alt="Theme Minimalist" class="w-full h-64 object-cover">
                            <div class="p-6 bg-white text-center">
                                <p class="font-serif text-xl text-slate-900 mb-2">Adam & Eve</p>
                                <p class="text-xs text-gothic font-medium uppercase tracking-widest">Minggu, 21 Nov 2024</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features -->
    <section class="py-32 bg-iron/30">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-20 max-w-3xl mx-auto">
                <h2 class="text-3xl md:text-5xl font-bold text-slate-900 mb-6">Fitur Lengkap untuk Momen Spesial</h2>
                <p class="text-gothic text-lg leading-relaxed">
                    Temukan fitur-fitur menarik yang akan membuat undangan pernikahan Anda tampil beda dan berkesan.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Feature Cards with Hover Effects -->
                <div class="group bg-white p-8 rounded-[2rem] shadow-sm hover:shadow-xl transition-all duration-500 hover:-translate-y-1">
                    <div class="w-14 h-14 rounded-2xl bg-blue-50 flex items-center justify-center mb-6 group-hover:bg-blue-chill transition-colors duration-500">
                        <svg class="w-7 h-7 text-blue-chill group-hover:text-white transition-colors duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Responsive Mobile Friendly</h3>
                    <p class="text-gothic leading-relaxed text-sm">Tampil dinamis dan optimal disemua perangkat gadget (Desktop, Tablet, Mobile).</p>
                </div>

                <div class="group bg-white p-8 rounded-[2rem] shadow-sm hover:shadow-xl transition-all duration-500 hover:-translate-y-1">
                    <div class="w-14 h-14 rounded-2xl bg-blue-50 flex items-center justify-center mb-6 group-hover:bg-blue-chill transition-colors duration-500">
                         <svg class="w-7 h-7 text-blue-chill group-hover:text-white transition-colors duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Elegant & Colorful Styles</h3>
                    <p class="text-gothic leading-relaxed text-sm">Tersedia beragam pilihan template undangan digital yang menarik, estetik, dan kekinian.</p>
                </div>

                <div class="group bg-white p-8 rounded-[2rem] shadow-sm hover:shadow-xl transition-all duration-500 hover:-translate-y-1">
                    <div class="w-14 h-14 rounded-2xl bg-blue-50 flex items-center justify-center mb-6 group-hover:bg-blue-chill transition-colors duration-500">
                        <svg class="w-7 h-7 text-blue-chill group-hover:text-white transition-colors duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Custom Nama Tamu</h3>
                    <p class="text-gothic leading-relaxed text-sm">Sebarkan undanganmu lebih personal dengan mencantumkan nama tamu (Unlimited).</p>
                </div>

                <div class="group bg-white p-8 rounded-[2rem] shadow-sm hover:shadow-xl transition-all duration-500 hover:-translate-y-1">
                    <div class="w-14 h-14 rounded-2xl bg-blue-50 flex items-center justify-center mb-6 group-hover:bg-blue-chill transition-colors duration-500">
                        <svg class="w-7 h-7 text-blue-chill group-hover:text-white transition-colors duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Autoplay Backsound</h3>
                    <p class="text-gothic leading-relaxed text-sm">Tambahkan musik romantis pilihan Anda untuk menghidupkan suasana undangan.</p>
                </div>

                <div class="group bg-white p-8 rounded-[2rem] shadow-sm hover:shadow-xl transition-all duration-500 hover:-translate-y-1">
                    <div class="w-14 h-14 rounded-2xl bg-blue-50 flex items-center justify-center mb-6 group-hover:bg-blue-chill transition-colors duration-500">
                         <svg class="w-7 h-7 text-blue-chill group-hover:text-white transition-colors duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Galeri Foto & Video</h3>
                    <p class="text-gothic leading-relaxed text-sm">Bagikan momen bahagia pre-wedding Anda dalam tata letak galeri yang memukau.</p>
                </div>

                <div class="group bg-white p-8 rounded-[2rem] shadow-sm hover:shadow-xl transition-all duration-500 hover:-translate-y-1">
                    <div class="w-14 h-14 rounded-2xl bg-blue-50 flex items-center justify-center mb-6 group-hover:bg-blue-chill transition-colors duration-500">
                         <svg class="w-7 h-7 text-blue-chill group-hover:text-white transition-colors duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">RSVP & Ucapan</h3>
                    <p class="text-gothic leading-relaxed text-sm">Terima konfirmasi kehadiran dan doa restu secara langsung dari para tamu.</p>
                </div>

                <div class="group bg-white p-8 rounded-[2rem] shadow-sm hover:shadow-xl transition-all duration-500 hover:-translate-y-1">
                    <div class="w-14 h-14 rounded-2xl bg-blue-50 flex items-center justify-center mb-6 group-hover:bg-blue-chill transition-colors duration-500">
                        <svg class="w-7 h-7 text-blue-chill group-hover:text-white transition-colors duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Navigasi Lokasi</h3>
                    <p class="text-gothic leading-relaxed text-sm">Terintegrasi Google Maps untuk memberikan kemudahan tamu mencari lokasi acara.</p>
                </div>

                <div class="group bg-white p-8 rounded-[2rem] shadow-sm hover:shadow-xl transition-all duration-500 hover:-translate-y-1">
                    <div class="w-14 h-14 rounded-2xl bg-blue-50 flex items-center justify-center mb-6 group-hover:bg-blue-chill transition-colors duration-500">
                        <svg class="w-7 h-7 text-blue-chill group-hover:text-white transition-colors duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Love Gift</h3>
                    <p class="text-gothic leading-relaxed text-sm">Fasilitasi tamu untuk mengirimkan tanda kasih secara cashless (amplop digital).</p>
                </div>

                 <div class="group bg-white p-8 rounded-[2rem] shadow-sm hover:shadow-xl transition-all duration-500 hover:-translate-y-1">
                    <div class="w-14 h-14 rounded-2xl bg-blue-50 flex items-center justify-center mb-6 group-hover:bg-blue-chill transition-colors duration-500">
                        <svg class="w-7 h-7 text-blue-chill group-hover:text-white transition-colors duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Kutipan Ayat / Quote</h3>
                    <p class="text-gothic leading-relaxed text-sm">Tambahkan sentuhan personal dengan kata mutiara atau kutipan ayat kitab suci.</p>
                </div>

                 <div class="group bg-white p-8 rounded-[2rem] shadow-sm hover:shadow-xl transition-all duration-500 hover:-translate-y-1">
                    <div class="w-14 h-14 rounded-2xl bg-blue-50 flex items-center justify-center mb-6 group-hover:bg-blue-chill transition-colors duration-500">
                        <svg class="w-7 h-7 text-blue-chill group-hover:text-white transition-colors duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Countdown Wedding</h3>
                    <p class="text-gothic leading-relaxed text-sm">Berikan hitung mundur waktu acara untuk membangun antusiasme & mengingatkan tamu.</p>
                </div>

                 <div class="group bg-white p-8 rounded-[2rem] shadow-sm hover:shadow-xl transition-all duration-500 hover:-translate-y-1">
                    <div class="w-14 h-14 rounded-2xl bg-blue-50 flex items-center justify-center mb-6 group-hover:bg-blue-chill transition-colors duration-500">
                         <svg class="w-7 h-7 text-blue-chill group-hover:text-white transition-colors duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Story Love Timeline</h3>
                    <p class="text-gothic leading-relaxed text-sm">Bagikan kisah perjalanan cinta kalian yang indah mulai dari awal hingga ke pelaminan.</p>
                </div>

                 <div class="group bg-white p-8 rounded-[2rem] shadow-sm hover:shadow-xl transition-all duration-500 hover:-translate-y-1">
                    <div class="w-14 h-14 rounded-2xl bg-blue-50 flex items-center justify-center mb-6 group-hover:bg-blue-chill transition-colors duration-500">
                        <svg class="w-7 h-7 text-blue-chill group-hover:text-white transition-colors duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Sender Tools</h3>
                    <p class="text-gothic leading-relaxed text-sm">Kirimkan undangan digital jadi lebih mudah dan cepat dengan alat bantu kirim kami.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Catalog Section -->
    <section id="catalog" class="py-32 bg-white relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-20">
                <span class="text-blue-chill font-bold tracking-wider uppercase text-sm mb-4 block">Katalog Tema</span>
                <h2 class="text-3xl md:text-5xl font-bold text-slate-900 mb-6">Desain Eksklusif Pilihan</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Theme 1 -->
                <div class="group relative overflow-hidden rounded-[2.5rem] shadow-lg border border-slate-100">
                    <div class="relative aspect-[3/4]">
                        <img src="https://images.unsplash.com/photo-1522673607200-1645062cd4d0?q=80&w=2000&auto=format&fit=crop" alt="Rustic Theme" class="w-full h-full object-cover transform group-hover:scale-105 transition duration-700">
                        <div class="absolute inset-0 bg-slate-900/50 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center">
                            <a href="#" class="px-8 py-3 bg-white text-slate-900 rounded-full font-bold hover:bg-blue-chill hover:text-white transition-all duration-300">Preview</a>
                        </div>
                    </div>
                    <div class="p-8 bg-white">
                        <h3 class="text-2xl font-bold text-slate-900 mb-1">Indonesian Wedding</h3>
                        <p class="text-gothic text-sm">Nuansa adat yang hangat dan sakral.</p>
                    </div>
                </div>

                <!-- Theme 2 -->
                <div class="group relative overflow-hidden rounded-[2.5rem] shadow-lg border border-slate-100">
                    <div class="relative aspect-[3/4]">
                        <img src="https://images.unsplash.com/photo-1515934751635-c81c6bc9a2d8?q=80&w=2000&auto=format&fit=crop" alt="Minimalist Theme" class="w-full h-full object-cover transform group-hover:scale-105 transition duration-700">
                        <div class="absolute inset-0 bg-slate-900/50 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center">
                            <a href="#" class="px-8 py-3 bg-white text-slate-900 rounded-full font-bold hover:bg-blue-chill hover:text-white transition-all duration-300">Preview</a>
                        </div>
                    </div>
                    <div class="p-8 bg-white">
                        <h3 class="text-2xl font-bold text-slate-900 mb-1">Premium Elegant</h3>
                        <p class="text-gothic text-sm">Simpel, bersih, dan sangat mewah.</p>
                    </div>
                </div>

                <!-- Theme 3 -->
                <div class="group relative overflow-hidden rounded-[2.5rem] shadow-lg border border-slate-100">
                    <div class="relative aspect-[3/4]">
                        <img src="https://images.unsplash.com/photo-1507915977619-6ccfe8003ae6?q=80&w=2000&auto=format&fit=crop" alt="Floral Theme" class="w-full h-full object-cover transform group-hover:scale-105 transition duration-700">
                        <div class="absolute inset-0 bg-slate-900/50 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center">
                            <a href="#" class="px-8 py-3 bg-white text-slate-900 rounded-full font-bold hover:bg-blue-chill hover:text-white transition-all duration-300">Preview</a>
                        </div>
                    </div>
                    <div class="p-8 bg-white">
                        <h3 class="text-2xl font-bold text-slate-900 mb-1">Faceless Edition</h3>
                        <p class="text-gothic text-sm">Tanpa foto wajah, tetap estetik.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing -->
    <section class="py-32 bg-iron/30 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-20">
                <h2 class="text-3xl md:text-5xl font-bold text-slate-900 mb-6">Penawaran Spesial</h2>
                <p class="text-gothic text-lg">Harga promo terbatas untuk momen spesialmu.</p>
            </div>

            <div class="flex justify-center mb-20">
                <div class="w-full max-w-lg bg-white p-12 rounded-[3rem] shadow-2xl border-4 border-blue-chill relative overflow-hidden text-center transform hover:scale-105 transition duration-500">
                    <div class="absolute top-0 right-0 bg-blue-chill text-white text-sm font-bold px-8 py-2 rounded-bl-2xl">PROMO</div>
                    
                    <h3 class="text-3xl font-bold text-slate-900 mb-4">All-In Package</h3>
                    <div class="mb-10 flex items-center justify-center gap-4">
                        <span class="text-gothic line-through text-xl">Rp 149.000</span>
                        <span class="text-6xl font-bold text-blue-chill">99rb</span>
                    </div>
                    
                    <ul class="space-y-5 mb-12 text-left mx-auto max-w-xs text-sm font-medium text-slate-600">
                        <li class="flex items-center gap-4">
                            <div class="w-6 h-6 rounded-full bg-green-100 text-green-600 flex items-center justify-center flex-shrink-0">✓</div>
                            Pilih Template Suka-suka
                        </li>
                        <li class="flex items-center gap-4">
                             <div class="w-6 h-6 rounded-full bg-green-100 text-green-600 flex items-center justify-center flex-shrink-0">✓</div>
                            Fitur Multimedia Lengkap
                        </li>
                        <li class="flex items-center gap-4">
                             <div class="w-6 h-6 rounded-full bg-green-100 text-green-600 flex items-center justify-center flex-shrink-0">✓</div>
                            Unlimited Nama Tamu
                        </li>
                        <li class="flex items-center gap-4">
                             <div class="w-6 h-6 rounded-full bg-green-100 text-green-600 flex items-center justify-center flex-shrink-0">✓</div>
                            Revisi Sepuasnya
                        </li>
                    </ul>

                    <a href="https://wa.me/6281234567890?text=Saya%20mau%20promo%20Undangan%2099rb" class="inline-block w-full py-5 rounded-2xl bg-blue-chill text-white font-bold text-lg hover:bg-slate-800 transition-all duration-300 shadow-lg shadow-blue-chill/30">
                        Ambil Promo Sekarang
                    </a>
                </div>
            </div>

            <!-- Add-ons -->
            <div class="max-w-4xl mx-auto">
                <h3 class="text-2xl font-bold text-slate-900 mb-8 text-center">Layanan Tambahan (Add-Ons)</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="flex justify-between items-center p-6 bg-white rounded-2xl border border-slate-100 shadow-sm hover:border-blue-chill/30 transition">
                        <span class="font-bold text-slate-700">Paket Express 1 Hari</span>
                        <span class="font-bold text-blue-chill">+ 50rb</span>
                    </div>
                    <div class="flex justify-between items-center p-6 bg-white rounded-2xl border border-slate-100 shadow-sm hover:border-blue-chill/30 transition">
                        <span class="font-bold text-slate-700">Custom Warna & Font</span>
                        <span class="font-bold text-blue-chill">+ 35rb</span>
                    </div>
                    <div class="flex justify-between items-center p-6 bg-white rounded-2xl border border-slate-100 shadow-sm hover:border-blue-chill/30 transition">
                        <span class="font-bold text-slate-700">Tambah Foto Galeri (Max 10)</span>
                        <span class="font-bold text-blue-chill">+ 20rb</span>
                    </div>
                    <div class="flex justify-between items-center p-6 bg-white rounded-2xl border border-slate-100 shadow-sm hover:border-blue-chill/30 transition">
                        <span class="font-bold text-slate-700">Custom Domain (.com)</span>
                        <span class="font-bold text-blue-chill">+ 300rb</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How to Order -->
    <section class="py-32 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-20">
                <h2 class="text-3xl md:text-5xl font-bold text-slate-900 mb-6">Cara Pemesanan</h2>
                <p class="text-gothic text-lg">5 Langkah mudah menuju undangan impian.</p>
            </div>

            <div class="flex flex-wrap justify-center gap-12 lg:gap-16 relative">
                 <!-- Connecting Line (Desktop) -->
                <div class="hidden lg:block absolute top-10 left-20 right-20 h-1 bg-slate-100 z-0"></div>

                <div class="w-40 text-center relative z-10 group">
                    <div class="w-20 h-20 mx-auto bg-white border-4 border-blue-chill rounded-full flex items-center justify-center text-blue-chill font-bold text-2xl mb-6 group-hover:bg-blue-chill group-hover:text-white transition-all duration-500 shadow-lg">1</div>
                    <h4 class="font-bold text-slate-900 mb-2 text-lg">Pilih Template</h4>
                    <p class="text-sm text-gothic leading-relaxed">Pilih desain dari katalog kami.</p>
                </div>
                <div class="w-40 text-center relative z-10 group">
                    <div class="w-20 h-20 mx-auto bg-white border-4 border-blue-chill rounded-full flex items-center justify-center text-blue-chill font-bold text-2xl mb-6 group-hover:bg-blue-chill group-hover:text-white transition-all duration-500 shadow-lg">2</div>
                    <h4 class="font-bold text-slate-900 mb-2 text-lg">Isi Form</h4>
                    <p class="text-sm text-gothic leading-relaxed">Lengkapi data acara Anda.</p>
                </div>
                <div class="w-40 text-center relative z-10 group">
                    <div class="w-20 h-20 mx-auto bg-white border-4 border-blue-chill rounded-full flex items-center justify-center text-blue-chill font-bold text-2xl mb-6 group-hover:bg-blue-chill group-hover:text-white transition-all duration-500 shadow-lg">3</div>
                    <h4 class="font-bold text-slate-900 mb-2 text-lg">Pembayaran</h4>
                    <p class="text-sm text-gothic leading-relaxed">Full payment di awal.</p>
                </div>
                <div class="w-40 text-center relative z-10 group">
                    <div class="w-20 h-20 mx-auto bg-white border-4 border-blue-chill rounded-full flex items-center justify-center text-blue-chill font-bold text-2xl mb-6 group-hover:bg-blue-chill group-hover:text-white transition-all duration-500 shadow-lg">4</div>
                    <h4 class="font-bold text-slate-900 mb-2 text-lg">Pengerjaan</h4>
                    <p class="text-sm text-gothic leading-relaxed">Maksimal 2x24 jam.</p>
                </div>
                <div class="w-40 text-center relative z-10 group">
                    <div class="w-20 h-20 mx-auto bg-blue-chill rounded-full flex items-center justify-center text-white font-bold text-2xl mb-6 shadow-xl ring-4 ring-blue-chill/20">✓</div>
                    <h4 class="font-bold text-slate-900 mb-2 text-lg">Selesai</h4>
                    <p class="text-sm text-gothic leading-relaxed">Undangan siap disebar!</p>
                </div>
            </div>
        </div>
    </section>

</x-layouts.app>