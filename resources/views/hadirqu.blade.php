<x-layouts.app>
    @section('title', 'HadirQu - Sistem Buku Tamu Digital Cerdas & Praktis')
    @section('meta_description', 'Platform buku tamu digital gratis selamanya & premium. Kelola undangan, dashboard realtime, blast WA/Email, hingga jual e-sertifikat. Solusi event modern.')

    <!-- Hero Section -->
    <section class="relative min-h-screen flex items-center justify-center overflow-hidden bg-white pt-20">
        <div class="absolute inset-0 z-0">
            <div class="absolute top-[-10%] right-[-5%] w-[600px] h-[600px] bg-blue-chill/5 rounded-full blur-[100px] animate-blob"></div>
            <div class="absolute bottom-[-10%] left-[-5%] w-[500px] h-[500px] bg-green-500/5 rounded-full blur-[100px] animate-blob animation-delay-2000"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 lg:gap-24 items-center">
                <div>
                    <span class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white border border-regent-gray/20 text-blue-chill text-sm font-bold mb-8 backdrop-blur-md animate-fade-in-up shadow-sm">
                        <span class="w-2 h-2 rounded-full bg-blue-chill animate-pulse"></span>
                        #1 Smart Guestbook Platform
                    </span>
                    <h1 class="text-5xl lg:text-7xl font-bold text-slate-900 mb-8 leading-tight tracking-tight animate-fade-in-up" style="animation-delay: 0.1s">
                        Kelola Tamu Lebih <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-chill to-green-500 animate-gradient">Cepat & Profesional.</span>
                    </h1>
                    <p class="text-xl text-gothic mb-10 leading-relaxed animate-fade-in-up" style="animation-delay: 0.2s">
                        Dari check-in 3 detik pakai HP/Tablet hingga dashboard analitik lengkap. Tersedia paket <strong>GRATIS Selamanya</strong> atau <strong>Premium</strong> dengan fitur manajemen penuh.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 animate-fade-in-up" style="animation-delay: 0.3s">
                        <a href="#packages" class="group relative px-8 py-4 bg-blue-chill text-white rounded-full font-bold hover:bg-blue-chill/90 transition-all duration-300 shadow-lg shadow-blue-chill/20 overflow-hidden text-center">
                            <span class="relative z-10">Mulai Gratis Sekarang</span>
                        </a>
                        <a href="https://wa.me/6281234567890?text=Halo,%20saya%20ingin%20konsultasi%20HadirQu." target="_blank" class="px-8 py-4 bg-white border border-regent-gray/20 text-slate-900 rounded-full font-bold hover:bg-slate-50 transition-all duration-300 shadow-sm text-center">
                            Tanya Fitur Premium
                        </a>
                    </div>
                    
                    <div class="mt-12 flex flex-wrap gap-6 text-sm font-bold text-gothic animate-fade-in-up" style="animation-delay: 0.4s">
                        <div class="flex items-center gap-2">
                            <span class="w-2 h-2 rounded-full bg-green-500"></span>
                            Self Service
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="w-2 h-2 rounded-full bg-green-500"></span>
                            Realtime Dashboard
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="w-2 h-2 rounded-full bg-green-500"></span>
                            Blast Invitation
                        </div>
                    </div>
                </div>
                
                <div class="relative animate-fade-in-up lg:h-[600px] flex items-center justify-center" style="animation-delay: 0.4s">
                    <div class="absolute inset-0 bg-gradient-to-tr from-blue-chill/20 to-green-500/20 rounded-[3rem] -rotate-6 scale-95 blur-xl z-10"></div>
                    
                    <!-- Mockup Concept -->
                    <div class="relative z-20 w-full max-w-md bg-white rounded-[2.5rem] shadow-2xl border-4 border-white overflow-hidden">
                        <div class="bg-slate-50 p-6 border-b border-slate-100 flex justify-between items-center">
                            <div class="flex gap-2">
                                <div class="w-3 h-3 rounded-full bg-red-400"></div>
                                <div class="w-3 h-3 rounded-full bg-yellow-400"></div>
                                <div class="w-3 h-3 rounded-full bg-green-400"></div>
                            </div>
                            <div class="text-xs font-bold text-slate-400 uppercase tracking-widest">HadirQu App</div>
                        </div>
                        <div class="p-8 h-[450px] flex flex-col items-center justify-center text-center bg-white">
                            <div class="w-56 h-56 bg-slate-50 p-4 rounded-3xl shadow-inner mb-8 flex items-center justify-center">
                                <img src="https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=HadirQu-Demo" alt="QR Code" class="w-full h-full opacity-90 mix-blend-multiply">
                            </div>
                            <h3 class="text-2xl font-bold text-slate-900 mb-3">Scan untuk Check-in</h3>
                            <p class="text-gothic mb-8">Arahkan kamera ke QR Code ini</p>
                            <div class="w-full bg-green-50 p-4 rounded-2xl border border-green-100 flex items-center gap-4 text-left animate-bounce-slow">
                                <div class="w-12 h-12 rounded-full bg-green-500 text-white flex items-center justify-center font-bold shadow-lg shadow-green-500/20">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                </div>
                                <div>
                                    <p class="text-xs text-green-600 font-bold uppercase tracking-wide">Status Terkonfirmasi</p>
                                    <p class="text-lg font-bold text-slate-900">Hadir: Budi Santoso</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Floating Stat -->
                    <div class="absolute bottom-20 -left-12 bg-white/90 backdrop-blur-xl p-6 rounded-2xl shadow-xl border border-white/50 animate-float z-30">
                        <p class="text-xs text-gothic font-bold uppercase tracking-wider mb-2">Total Tamu Realtime</p>
                        <div class="flex items-end gap-3">
                            <span class="text-4xl font-bold text-slate-900">1,248</span>
                            <span class="px-2 py-1 rounded-lg bg-green-100 text-green-700 text-xs font-bold mb-1">▲ Live</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-32 bg-iron/30 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-20 max-w-3xl mx-auto">
                <h2 class="text-3xl md:text-5xl font-bold text-slate-900 mb-6">Fitur Canggih untuk Owner Cerdas</h2>
                <p class="text-gothic text-lg leading-relaxed">
                    Kami memberikan kendali penuh di tangan Anda. Kelola event mandiri (Self Service) atau terima beres dengan bantuan tim kami (Onsite).
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="group bg-white p-8 rounded-[2rem] shadow-sm hover:shadow-xl transition-all duration-500 hover:-translate-y-1">
                    <div class="w-14 h-14 rounded-2xl bg-blue-50 flex items-center justify-center mb-6 group-hover:bg-blue-chill transition-colors duration-500">
                        <svg class="w-7 h-7 text-blue-chill group-hover:text-white transition-colors duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Manajemen Tamu Fleksibel</h3>
                    <p class="text-gothic leading-relaxed text-sm">
                        Invite manual satu per satu atau import ribuan data sekaligus via Excel. Semua data tersimpan aman dan rapi.
                    </p>
                </div>

                <!-- Feature 2 -->
                <div class="group bg-white p-8 rounded-[2rem] shadow-sm hover:shadow-xl transition-all duration-500 hover:-translate-y-1">
                    <div class="w-14 h-14 rounded-2xl bg-blue-50 flex items-center justify-center mb-6 group-hover:bg-blue-chill transition-colors duration-500">
                        <svg class="w-7 h-7 text-blue-chill group-hover:text-white transition-colors duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Blast Invitation</h3>
                    <p class="text-gothic leading-relaxed text-sm">
                        Kirim undangan QR Code personal ke ribuan tamu via WhatsApp atau Email hanya dengan sekali klik.
                    </p>
                </div>

                <!-- Feature 3 -->
                <div class="group bg-white p-8 rounded-[2rem] shadow-sm hover:shadow-xl transition-all duration-500 hover:-translate-y-1">
                    <div class="w-14 h-14 rounded-2xl bg-blue-50 flex items-center justify-center mb-6 group-hover:bg-blue-chill transition-colors duration-500">
                        <svg class="w-7 h-7 text-blue-chill group-hover:text-white transition-colors duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Realtime Dashboard</h3>
                    <p class="text-gothic leading-relaxed text-sm">
                        Pantau siapa yang sudah hadir, jam berapa mereka datang, dan status souvenir secara langsung dari HP owner.
                    </p>
                </div>

                <!-- Feature 4 -->
                <div class="group bg-white p-8 rounded-[2rem] shadow-sm hover:shadow-xl transition-all duration-500 hover:-translate-y-1">
                    <div class="w-14 h-14 rounded-2xl bg-blue-50 flex items-center justify-center mb-6 group-hover:bg-blue-chill transition-colors duration-500">
                        <svg class="w-7 h-7 text-blue-chill group-hover:text-white transition-colors duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Monetize Event</h3>
                    <p class="text-gothic leading-relaxed text-sm">
                        Fitur unik untuk seminar/workshop. Jual e-sertifikat atau tiket masuk berbayar yang terintegrasi sistem.
                    </p>
                </div>

                <!-- Feature 5 -->
                <div class="group bg-white p-8 rounded-[2rem] shadow-sm hover:shadow-xl transition-all duration-500 hover:-translate-y-1">
                    <div class="w-14 h-14 rounded-2xl bg-blue-50 flex items-center justify-center mb-6 group-hover:bg-blue-chill transition-colors duration-500">
                        <svg class="w-7 h-7 text-blue-chill group-hover:text-white transition-colors duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Multi-Device Compatible</h3>
                    <p class="text-gothic leading-relaxed text-sm">
                        Tidak perlu alat khusus. Cukup gunakan HP, Tablet, atau iPad yang Anda miliki untuk scan QR code.
                    </p>
                </div>

                <!-- Feature 6 -->
                <div class="group bg-white p-8 rounded-[2rem] shadow-sm hover:shadow-xl transition-all duration-500 hover:-translate-y-1">
                    <div class="w-14 h-14 rounded-2xl bg-blue-50 flex items-center justify-center mb-6 group-hover:bg-blue-chill transition-colors duration-500">
                        <svg class="w-7 h-7 text-blue-chill group-hover:text-white transition-colors duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Onsite Support (Add-on)</h3>
                    <p class="text-gothic leading-relaxed text-sm">
                        Butuh bantuan teknis di lokasi? Tim profesional kami siap hadir untuk memastikan kelancaran check-in.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing / Packages -->
    <section id="packages" class="py-32 bg-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-20">
                <h2 class="text-3xl md:text-5xl font-bold text-slate-900 mb-6">Pilih Paket Sesuai Kebutuhan</h2>
                <p class="text-gothic text-lg">Transparan, fleksibel, dan menguntungkan.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-start">
                <!-- Free -->
                <div class="bg-white rounded-[2.5rem] p-10 border border-slate-200 hover:shadow-xl transition duration-500 flex flex-col h-full relative overflow-hidden group">
                    <div class="absolute top-0 left-0 w-full h-2 bg-slate-200"></div>
                    <h3 class="text-2xl font-bold text-slate-900 mb-2">Free Forever</h3>
                    <p class="text-gothic text-sm mb-8">Untuk acara kecil & personal</p>
                    <div class="mb-8">
                        <span class="text-5xl font-bold text-slate-900">Rp 0</span>
                        <span class="text-gothic">/selamanya</span>
                    </div>
                    <ul class="space-y-4 mb-10 flex-1 text-sm text-gothic">
                        <li class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-green-500 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            Kuota Terbatas
                        </li>
                        <li class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-green-500 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            QR Code Check-in
                        </li>
                        <li class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-green-500 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            Basic Dashboard
                        </li>
                    </ul>
                    <a href="#" class="w-full py-4 rounded-xl border-2 border-blue-chill text-blue-chill font-bold text-center hover:bg-blue-chill hover:text-white transition-all duration-300">Daftar Gratis</a>
                </div>

                <!-- Premium (Best Seller) -->
                <div class="bg-slate-900 rounded-[2.5rem] p-10 shadow-2xl transform md:-translate-y-6 flex flex-col h-full relative overflow-hidden">
                    <div class="absolute top-0 right-0 p-8">
                        <span class="bg-blue-chill text-white text-xs font-bold px-4 py-1.5 rounded-full">RECOMMENDED</span>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-2">Premium Event</h3>
                    <p class="text-slate-400 text-sm mb-8">Full control untuk owner acara</p>
                    <div class="mb-8">
                        <span class="text-4xl font-bold text-white">Hubungi Kami</span>
                    </div>
                    <ul class="space-y-4 mb-10 flex-1 text-sm text-slate-300">
                        <li class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-blue-chill flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            Unlimited Tamu & Import Data
                        </li>
                        <li class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-blue-chill flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            WhatsApp Blast Invitation
                        </li>
                        <li class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-blue-chill flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            Realtime Advanced Dashboard
                        </li>
                        <li class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-blue-chill flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            Fitur Jual Tiket / Sertifikat
                        </li>
                    </ul>
                    <a href="https://wa.me/6281234567890?text=Saya%20tertarik%20Paket%20Premium%20HadirQu." class="w-full py-4 rounded-xl bg-blue-chill text-white font-bold text-center hover:bg-white hover:text-slate-900 transition-all duration-300 shadow-lg shadow-blue-chill/20">Upgrade Sekarang</a>
                </div>

                <!-- Onsite Support -->
                <div class="bg-white rounded-[2.5rem] p-10 border border-slate-200 hover:shadow-xl transition duration-500 flex flex-col h-full relative overflow-hidden group">
                    <div class="absolute top-0 left-0 w-full h-2 bg-slate-200"></div>
                    <h3 class="text-2xl font-bold text-slate-900 mb-2">Onsite Support</h3>
                    <p class="text-gothic text-sm mb-8">Kami datang membantu teknis</p>
                    <div class="mb-8">
                        <span class="text-4xl font-bold text-slate-900">Add-on</span>
                    </div>
                    <ul class="space-y-4 mb-10 flex-1 text-sm text-gothic">
                        <li class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-green-500 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            Penyediaan Device
                        </li>
                        <li class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-green-500 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            Crew Standby di Lokasi
                        </li>
                        <li class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-green-500 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            Setup Jaringan Lokal
                        </li>
                        <li class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-green-500 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            Print Label Nama Tamu
                        </li>
                    </ul>
                    <a href="https://wa.me/6281234567890?text=Halo,%20saya%20butuh%20layanan%20Onsite%20Support." class="w-full py-4 rounded-xl border-2 border-slate-900 text-slate-900 font-bold text-center hover:bg-slate-900 hover:text-white transition-all duration-300">Hubungi Sales</a>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="py-32 bg-iron/30">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-slate-900 mb-4">Pertanyaan Umum</h2>
            </div>
            <div class="space-y-6">
                <div class="bg-white rounded-2xl p-8 shadow-sm" x-data="{ open: false }">
                    <button @click="open = !open" class="flex justify-between items-center w-full text-left font-bold text-slate-900 text-lg">
                        <span>Apakah butuh internet di lokasi?</span>
                        <svg class="w-5 h-5 transform transition-transform duration-300" :class="open ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div x-show="open" class="mt-4 text-gothic leading-relaxed" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0">
                        Ya, sistem HadirQu berbasis cloud sehingga membutuhkan koneksi internet. Namun, penggunaan datanya sangat kecil dan ringan.
                    </div>
                </div>
                <div class="bg-white rounded-2xl p-8 shadow-sm" x-data="{ open: false }">
                    <button @click="open = !open" class="flex justify-between items-center w-full text-left font-bold text-slate-900 text-lg">
                        <span>Apakah bisa pakai HP sendiri?</span>
                        <svg class="w-5 h-5 transform transition-transform duration-300" :class="open ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div x-show="open" class="mt-4 text-gothic leading-relaxed" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0">
                        Sangat bisa! Sistem kami full self-service dan kompatibel dengan semua perangkat (Android/iOS, Tablet, Laptop) tanpa perlu install aplikasi tambahan.
                    </div>
                </div>
                <div class="bg-white rounded-2xl p-8 shadow-sm" x-data="{ open: false }">
                    <button @click="open = !open" class="flex justify-between items-center w-full text-left font-bold text-slate-900 text-lg">
                        <span>Berapa lama proses setup-nya?</span>
                        <svg class="w-5 h-5 transform transition-transform duration-300" :class="open ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div x-show="open" class="mt-4 text-gothic leading-relaxed" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0">
                        Instan! Setelah Anda mendaftar (gratis atau premium), Anda bisa langsung membuat event, import data tamu, dan mulai check-in saat itu juga.
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-layouts.app>