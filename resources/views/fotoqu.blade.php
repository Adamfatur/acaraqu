<x-layouts.app>
    @section('title', 'FotoQu - Layanan Photobooth Kekinian & Cetak Instan')
    @section('meta_description', 'FotoQu menyediakan layanan photobooth berkualitas tinggi dengan cetak instan dan softcopy via QR Code. Bikin acara kamu makin seru dan berkesan!')

    <!-- Hero Section -->
    <section class="relative min-h-[90vh] flex items-center justify-center bg-iron overflow-hidden">
        <!-- Background Effects -->
        <div class="absolute inset-0 w-full h-full overflow-hidden">
            <div class="absolute -top-[20%] -left-[10%] w-[70%] h-[70%] bg-white/40 rounded-full blur-[100px]"></div>
            <div class="absolute top-[40%] -right-[10%] w-[60%] h-[60%] bg-blue-chill/10 rounded-full blur-[100px]">
            </div>
            <div class="absolute bottom-0 left-0 w-full h-1/2 bg-gradient-to-t from-white/50 to-transparent"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div
                class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/60 border border-regent-gray/30 backdrop-blur-sm mb-8 animate-fade-in-up shadow-sm">
                <span class="flex h-2 w-2 relative">
                    <span
                        class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-chill opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-blue-chill"></span>
                </span>
                <span class="text-sm font-medium text-blue-chill tracking-wide">PREMIUM PHOTOBOOTH SERVICE</span>
            </div>

            <h1 class="text-5xl md:text-7xl font-bold text-slate-800 mb-8 tracking-tight leading-tight animate-fade-in-up"
                style="animation-delay: 0.1s">
                Buat Momen Berkesan, <br>
                <span class="text-blue-chill">Tak Hanya di Ingatan!</span>
            </h1>

            <p class="text-xl text-gothic mb-12 max-w-2xl mx-auto leading-relaxed animate-fade-in-up font-medium"
                style="animation-delay: 0.2s">
                Layanan Photobooth kekinian dengan cetak instan dan akses softcopy mudah via QR Code. Solusi dokumentasi
                acara yang praktis dan menyenangkan.
            </p>

            <div class="flex flex-col sm:flex-row items-center justify-center gap-4 animate-fade-in-up"
                style="animation-delay: 0.3s">
                <a href="#contact"
                    class="w-full sm:w-auto px-8 py-4 rounded-full bg-blue-chill text-white font-bold hover:bg-[#0f6070] hover:shadow-lg hover:shadow-blue-chill/30 transition-all transform hover:-translate-y-1">
                    Pesan Sekarang
                </a>
                <a href="#features"
                    class="w-full sm:w-auto px-8 py-4 rounded-full bg-white border-2 border-blue-chill text-blue-chill font-bold hover:bg-blue-50 transition-all">
                    Pelajari Lebih Lanjut
                </a>
            </div>
        </div>
    </section>

    <!-- Problem & Solution Section -->
    <section class="py-24 bg-white relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div class="relative">
                    <div class="absolute inset-0 bg-blue-chill/10 rounded-[3rem] transform rotate-3"></div>
                    <img src="https://images.unsplash.com/photo-1516035069371-29a1b244cc32?q=80&w=1000&auto=format&fit=crop"
                        alt="Photobooth Moment"
                        class="relative rounded-[3rem] shadow-2xl w-full object-cover h-[500px]">
                </div>
                <div>
                    <h2 class="text-3xl md:text-4xl font-bold text-slate-800 mb-6">Masalah Dokumentasi Acara?</h2>
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-start gap-3 text-gothic">
                            <svg class="w-6 h-6 text-red-500 flex-shrink-0" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                            <span>Tidak ada foto bersama yang rapi.</span>
                        </li>
                        <li class="flex items-start gap-3 text-gothic">
                            <svg class="w-6 h-6 text-red-500 flex-shrink-0" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                            <span>Foto asal jepret (blur, gelap, terpotong).</span>
                        </li>
                        <li class="flex items-start gap-3 text-gothic">
                            <svg class="w-6 h-6 text-red-500 flex-shrink-0" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                            <span>Proses pengiriman foto yang lama & file tercecer.</span>
                        </li>
                    </ul>

                    <div class="bg-iron/30 p-8 rounded-3xl border border-blue-chill/20">
                        <h3 class="text-xl font-bold text-blue-chill mb-4">Solusi FotoQu:</h3>
                        <ul class="space-y-3">
                            <li class="flex items-center gap-3 text-slate-700 font-medium">
                                <svg class="w-5 h-5 text-blue-chill" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                                Cetak Instan + Softcopy via QR
                            </li>
                            <li class="flex items-center gap-3 text-slate-700 font-medium">
                                <svg class="w-5 h-5 text-blue-chill" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                                Unlimited Jepret (Cloud 30 Hari)
                            </li>
                            <li class="flex items-center gap-3 text-slate-700 font-medium">
                                <svg class="w-5 h-5 text-blue-chill" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                                Hasil Berkualitas Tinggi (Pro Lighting)
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-24 bg-iron/30">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-slate-800 mb-4">Fitur Utama</h2>
                <p class="text-gothic text-lg max-w-2xl mx-auto">
                    Kami menghadirkan pengalaman foto terbaik dengan fitur lengkap.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Feature 1 -->
                <div
                    class="bg-white p-8 rounded-[2rem] shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                    <div
                        class="w-14 h-14 rounded-2xl bg-blue-chill/10 flex items-center justify-center mb-6 text-blue-chill">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-slate-800 mb-2">Frame Keren & Custom</h3>
                    <p class="text-gothic text-sm">Desain bingkai foto dapat disesuaikan dengan tema acara (on-brand).
                    </p>
                </div>

                <!-- Feature 2 -->
                <div
                    class="bg-white p-8 rounded-[2rem] shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                    <div
                        class="w-14 h-14 rounded-2xl bg-blue-chill/10 flex items-center justify-center mb-6 text-blue-chill">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-slate-800 mb-2">Proses Cepat</h3>
                    <p class="text-gothic text-sm">Alur mudah & self-service. Total waktu hanya 2-3 menit per orang.</p>
                </div>

                <!-- Feature 3 -->
                <div
                    class="bg-white p-8 rounded-[2rem] shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                    <div
                        class="w-14 h-14 rounded-2xl bg-blue-chill/10 flex items-center justify-center mb-6 text-blue-chill">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-slate-800 mb-2">Penyimpanan Cloud</h3>
                    <p class="text-gothic text-sm">File softcopy tersimpan aman di cloud selama 30 hari penuh.</p>
                </div>

                <!-- Feature 4 -->
                <div
                    class="bg-white p-8 rounded-[2rem] shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                    <div
                        class="w-14 h-14 rounded-2xl bg-blue-chill/10 flex items-center justify-center mb-6 text-blue-chill">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-slate-800 mb-2">Perlengkapan Lengkap</h3>
                    <p class="text-gothic text-sm">Kamera, lighting, printer, laptop, backdrop, dan 2 operator standby.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works & Stats -->
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
                <!-- How It Works -->
                <div>
                    <h2 class="text-3xl font-bold text-slate-800 mb-8">Cara Kerja (4 Langkah Mudah)</h2>
                    <div class="space-y-8">
                        <div class="flex gap-6">
                            <div
                                class="w-10 h-10 rounded-full bg-blue-chill text-white flex items-center justify-center font-bold flex-shrink-0">
                                1</div>
                            <div>
                                <h3 class="text-xl font-bold text-slate-800 mb-2">Registrasi</h3>
                                <p class="text-gothic">Pilih opsi Softcopy atau Cetak + Softcopy sesuai keinginanmu.</p>
                            </div>
                        </div>
                        <div class="flex gap-6">
                            <div
                                class="w-10 h-10 rounded-full bg-blue-chill text-white flex items-center justify-center font-bold flex-shrink-0">
                                2</div>
                            <div>
                                <h3 class="text-xl font-bold text-slate-800 mb-2">Jepret Pose</h3>
                                <p class="text-gothic">Ambil 5 jepretan pose terbaikmu bersama teman-teman.</p>
                            </div>
                        </div>
                        <div class="flex gap-6">
                            <div
                                class="w-10 h-10 rounded-full bg-blue-chill text-white flex items-center justify-center font-bold flex-shrink-0">
                                3</div>
                            <div>
                                <h3 class="text-xl font-bold text-slate-800 mb-2">Pilih Frame</h3>
                                <p class="text-gothic">Pilih atau custom frame favorit yang sudah disediakan.</p>
                            </div>
                        </div>
                        <div class="flex gap-6">
                            <div
                                class="w-10 h-10 rounded-full bg-blue-chill text-white flex items-center justify-center font-bold flex-shrink-0">
                                4</div>
                            <div>
                                <h3 class="text-xl font-bold text-slate-800 mb-2">Akses Instan</h3>
                                <p class="text-gothic">Scan QR Code atau cek email untuk mendapatkan foto.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Stats & Events -->
                <div class="bg-iron/30 rounded-[3rem] p-10">
                    <h3 class="text-2xl font-bold text-slate-800 mb-8 text-center">Statistik Kami</h3>
                    <div class="grid grid-cols-3 gap-4 mb-12 text-center">
                        <div>
                            <p class="text-3xl font-bold text-blue-chill mb-1">500+</p>
                            <p class="text-xs text-gothic uppercase tracking-wide">Acara Sukses</p>
                        </div>
                        <div>
                            <p class="text-3xl font-bold text-blue-chill mb-1">10k+</p>
                            <p class="text-xs text-gothic uppercase tracking-wide">Foto Tercetak</p>
                        </div>
                        <div>
                            <p class="text-3xl font-bold text-blue-chill mb-1">50k+</p>
                            <p class="text-xs text-gothic uppercase tracking-wide">Senyuman</p>
                        </div>
                    </div>

                    <h3 class="text-xl font-bold text-slate-800 mb-4">Cocok Untuk Acara:</h3>
                    <div class="flex flex-wrap gap-3">
                        <span class="px-4 py-2 bg-white rounded-full text-sm text-slate-600 font-medium shadow-sm">Ulang
                            Tahun</span>
                        <span
                            class="px-4 py-2 bg-white rounded-full text-sm text-slate-600 font-medium shadow-sm">Pernikahan</span>
                        <span
                            class="px-4 py-2 bg-white rounded-full text-sm text-slate-600 font-medium shadow-sm">Wisuda</span>
                        <span
                            class="px-4 py-2 bg-white rounded-full text-sm text-slate-600 font-medium shadow-sm">Gathering
                            Kantor</span>
                        <span
                            class="px-4 py-2 bg-white rounded-full text-sm text-slate-600 font-medium shadow-sm">Festival</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-24 bg-white border-t border-iron">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-slate-800 mb-10 text-center">Pertanyaan Umum (FAQ)</h2>
            <div class="space-y-6" x-data="{ active: null }">
                <!-- FAQ 1 -->
                <div class="border border-iron rounded-2xl overflow-hidden">
                    <button @click="active = active === 1 ? null : 1"
                        class="w-full px-6 py-4 text-left flex justify-between items-center bg-slate-50 hover:bg-slate-100 transition">
                        <span class="font-bold text-slate-800">Apakah bisa request desain frame?</span>
                        <svg class="w-5 h-5 text-slate-500 transform transition-transform"
                            :class="active === 1 ? 'rotate-180' : ''" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div x-show="active === 1" x-collapse class="px-6 py-4 bg-white text-gothic">
                        Bisa banget! Kamu bisa konsultasi gratis dengan tim desainer kami untuk membuat frame yang
                        sesuai dengan tema acaramu.
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div class="border border-iron rounded-2xl overflow-hidden">
                    <button @click="active = active === 2 ? null : 2"
                        class="w-full px-6 py-4 text-left flex justify-between items-center bg-slate-50 hover:bg-slate-100 transition">
                        <span class="font-bold text-slate-800">Berapa lama foto disimpan di cloud?</span>
                        <svg class="w-5 h-5 text-slate-500 transform transition-transform"
                            :class="active === 2 ? 'rotate-180' : ''" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div x-show="active === 2" x-collapse class="px-6 py-4 bg-white text-gothic">
                        Foto softcopy akan tersimpan aman di cloud storage kami selama 30 hari setelah acara.
                    </div>
                </div>

                <!-- FAQ 3 -->
                <div class="border border-iron rounded-2xl overflow-hidden">
                    <button @click="active = active === 3 ? null : 3"
                        class="w-full px-6 py-4 text-left flex justify-between items-center bg-slate-50 hover:bg-slate-100 transition">
                        <span class="font-bold text-slate-800">Apakah bisa untuk invoice corporate?</span>
                        <svg class="w-5 h-5 text-slate-500 transform transition-transform"
                            :class="active === 3 ? 'rotate-180' : ''" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div x-show="active === 3" x-collapse class="px-6 py-4 bg-white text-gothic">
                        Ya, kami mendukung pembuatan invoice resmi, Purchase Order (PO), dan dokumen kelengkapan
                        perusahaan lainnya.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact / CTA Section -->
    <section id="contact" class="py-32 bg-white relative overflow-hidden">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div
                class="bg-blue-chill rounded-[3rem] p-8 md:p-16 shadow-2xl shadow-blue-chill/20 text-center relative overflow-hidden">
                <!-- Decorative Circles -->
                <div class="absolute top-0 right-0 -mr-20 -mt-20 w-80 h-80 bg-white/10 rounded-full blur-3xl"></div>
                <div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-80 h-80 bg-black/10 rounded-full blur-3xl"></div>

                <h2 class="text-3xl md:text-5xl font-bold text-white mb-6 relative z-10">Siap Mengabadikan Momen?</h2>
                <p class="text-xl text-blue-50 mb-10 max-w-2xl mx-auto relative z-10">
                    Hubungi kami sekarang untuk konsultasi gratis dan dapatkan penawaran terbaik untuk acaramu.
                </p>

                <div class="flex flex-col sm:flex-row items-center justify-center gap-6 relative z-10">
                    <a href="https://wa.me/6285819184566?text=Halo,%20saya%20tertarik%20sewa%20FotoQu." target="_blank"
                        class="group relative px-8 py-4 bg-green-500 text-white rounded-full font-bold shadow-lg hover:bg-green-400 transition-all hover:scale-105">
                        <span class="flex items-center gap-2">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.017-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z" />
                            </svg>
                            Chat WhatsApp
                        </span>
                    </a>
                    <a href="https://instagram.com/fotoqu.photobooth" target="_blank"
                        class="group relative px-8 py-4 bg-white text-pink-600 rounded-full font-bold shadow-lg hover:bg-pink-50 transition-all hover:scale-105">
                        <span class="flex items-center gap-2">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                            </svg>
                            @fotoqu.photobooth
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>
</x-layouts.app>