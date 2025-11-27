<x-layouts.app>
    @section('title', 'KreasiQu - Merchandise & Custom Akrilik Eksklusif')
    @section('meta_description', 'Pusat souvenir custom berbasis 3D Printing dan Akrilik. Plakat, gantungan kunci, lanyard, hingga bouquet bunga untuk segala kebutuhan acara Anda.')

    <!-- Hero Section -->
    <section class="relative py-24 lg:py-32 bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div>
                    <span class="inline-flex items-center gap-2 py-1 px-3 rounded-full bg-purple-500/10 text-purple-600 text-sm font-bold mb-6 animate-fade-in-up">
                        <span class="w-2 h-2 rounded-full bg-purple-500 animate-pulse"></span>
                        Custom Merchandise Expert
                    </span>
                    <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold text-slate-900 mb-6 leading-tight animate-fade-in-up" style="animation-delay: 0.1s">
                        Wujudkan Ide Kreatifmu Lewat <span class="text-purple-600">Sentuhan Akrilik & 3D.</span>
                    </h1>
                    <p class="text-lg text-gothic mb-8 leading-relaxed max-w-xl animate-fade-in-up" style="animation-delay: 0.2s">
                        Spesialis pembuatan merchandise unik berbasis 3D Printing dan Laser Cutting Akrilik. Mulai dari plakat wisuda, souvenir pernikahan, hingga kebutuhan branding perusahaan.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 animate-fade-in-up" style="animation-delay: 0.3s">
                        <a href="#catalog" class="px-8 py-4 rounded-full bg-purple-600 text-white font-bold hover:bg-purple-700 transition shadow-lg shadow-purple-500/30 text-center">
                            Lihat Katalog
                        </a>
                        <a href="https://wa.me/6281234567890?text=Halo,%20saya%20ingin%20konsultasi%20project%20custom." target="_blank" class="px-8 py-4 rounded-full bg-white border-2 border-iron text-slate-900 font-bold hover:border-purple-600 hover:text-purple-600 transition text-center">
                            Konsultasi Project
                        </a>
                    </div>
                </div>
                
                <div class="relative animate-fade-in-up lg:h-[600px] flex items-center justify-center" style="animation-delay: 0.4s">
                    <!-- Decorative Elements -->
                    <div class="absolute top-0 right-0 w-72 h-72 bg-purple-500/20 rounded-full blur-3xl opacity-60 animate-blob"></div>
                    <div class="absolute bottom-0 left-0 w-64 h-64 bg-blue-chill/20 rounded-full blur-3xl opacity-60 animate-blob animation-delay-2000"></div>

                    <div class="relative grid grid-cols-2 gap-6 w-full max-w-lg transform rotate-3 hover:rotate-0 transition duration-700">
                        <div class="space-y-6 mt-12">
                            <div class="bg-white p-4 rounded-3xl shadow-2xl border border-purple-100 hover:-translate-y-2 transition duration-500 group">
                                <div class="h-48 rounded-2xl overflow-hidden mb-4 relative">
                                    <img src="https://images.unsplash.com/photo-1513530534585-c7b1394c6d51?q=80&w=1000&auto=format&fit=crop" alt="Acrylic Plaque" class="w-full h-full object-cover transform group-hover:scale-110 transition duration-700">
                                    <div class="absolute inset-0 bg-purple-600/10 group-hover:bg-transparent transition"></div>
                                </div>
                                <h3 class="font-bold text-slate-900 text-lg">Plakat Akrilik</h3>
                                <p class="text-sm text-gothic">Laser Cut Precision</p>
                            </div>
                            <div class="bg-white p-4 rounded-3xl shadow-2xl border border-purple-100 hover:-translate-y-2 transition duration-500 group">
                                <div class="h-32 rounded-2xl overflow-hidden mb-4 relative">
                                    <img src="https://images.unsplash.com/photo-1617347454431-f49d7ff5c3b1?q=80&w=1000&auto=format&fit=crop" alt="3D Printed" class="w-full h-full object-cover transform group-hover:scale-110 transition duration-700">
                                </div>
                                <h3 class="font-bold text-slate-900 text-lg">3D Printing</h3>
                                <p class="text-sm text-gothic">Custom Shape</p>
                            </div>
                        </div>
                        <div class="space-y-6">
                            <div class="bg-white p-4 rounded-3xl shadow-2xl border border-purple-100 hover:-translate-y-2 transition duration-500 group">
                                <div class="h-32 rounded-2xl overflow-hidden mb-4 relative">
                                    <img src="https://images.unsplash.com/photo-1603657966684-3333a549b622?q=80&w=1000&auto=format&fit=crop" alt="Bouquet" class="w-full h-full object-cover transform group-hover:scale-110 transition duration-700">
                                </div>
                                <h3 class="font-bold text-slate-900 text-lg">Bouquet Bunga</h3>
                                <p class="text-sm text-gothic">Fresh & Artificial</p>
                            </div>
                            <div class="bg-white p-4 rounded-3xl shadow-2xl border border-purple-100 hover:-translate-y-2 transition duration-500 group">
                                <div class="h-48 rounded-2xl overflow-hidden mb-4 relative">
                                    <img src="https://images.unsplash.com/photo-1631122540924-14c9243c9731?q=80&w=1000&auto=format&fit=crop" alt="Lanyard" class="w-full h-full object-cover transform group-hover:scale-110 transition duration-700">
                                </div>
                                <h3 class="font-bold text-slate-900 text-lg">Custom Lanyard</h3>
                                <p class="text-sm text-gothic">High Quality Print</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why KreasiQu -->
    <section class="py-24 bg-purple-50/50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-slate-900 mb-4">Kualitas Tanpa Kompromi</h2>
                <p class="text-gothic text-lg max-w-2xl mx-auto">
                    Menggabungkan teknologi presisi dengan sentuhan seni untuk hasil terbaik.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-[2rem] border border-purple-100 hover:shadow-lg hover:shadow-purple-100 transition duration-300">
                    <div class="w-14 h-14 rounded-2xl bg-purple-100 text-purple-600 flex items-center justify-center mb-6">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.384-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Teknologi Laser & 3D</h3>
                    <p class="text-gothic leading-relaxed">
                        Menggunakan mesin laser cutting presisi tinggi dan 3D printer terbaru untuk detail yang tajam dan rapi.
                    </p>
                </div>
                <div class="bg-white p-8 rounded-[2rem] border border-purple-100 hover:shadow-lg hover:shadow-purple-100 transition duration-300">
                    <div class="w-14 h-14 rounded-2xl bg-purple-100 text-purple-600 flex items-center justify-center mb-6">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Custom Project? Bisa!</h3>
                    <p class="text-gothic leading-relaxed">
                        Punya desain sendiri atau kebutuhan unik? Tim kami siap berdiskusi untuk mewujudkan ide "gila" Anda.
                    </p>
                </div>
                <div class="bg-white p-8 rounded-[2rem] border border-purple-100 hover:shadow-lg hover:shadow-purple-100 transition duration-300">
                    <div class="w-14 h-14 rounded-2xl bg-purple-100 text-purple-600 flex items-center justify-center mb-6">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Material Premium</h3>
                    <p class="text-gothic leading-relaxed">
                        Hanya menggunakan bahan akrilik grade A dan filamen 3D berkualitas untuk ketahanan dan estetika maksimal.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Product Categories -->
    <section id="catalog" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="text-purple-600 font-bold tracking-wider uppercase text-sm mb-3 block">Katalog KreasiQu</span>
                <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-4">Koleksi Produk Kami</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Product 1 -->
                <div class="group">
                    <div class="relative overflow-hidden rounded-[2rem] bg-slate-100 aspect-square mb-4">
                        <img src="https://images.unsplash.com/photo-1513530534585-c7b1394c6d51?q=80&w=800&auto=format&fit=crop" alt="Plakat" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition duration-700">
                        <div class="absolute inset-0 bg-black/20 group-hover:bg-transparent transition duration-500"></div>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-1 group-hover:text-purple-600 transition-colors">Plakat & Piagam</h3>
                    <p class="text-sm text-gothic">Ideal untuk penghargaan acara.</p>
                </div>

                <!-- Product 2 -->
                <div class="group">
                    <div class="relative overflow-hidden rounded-[2rem] bg-slate-100 aspect-square mb-4">
                        <img src="https://images.unsplash.com/photo-1622643285579-274ac1dd273a?q=80&w=800&auto=format&fit=crop" alt="Gantungan Kunci" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition duration-700">
                        <div class="absolute inset-0 bg-black/20 group-hover:bg-transparent transition duration-500"></div>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-1 group-hover:text-purple-600 transition-colors">Gantungan Kunci</h3>
                    <p class="text-sm text-gothic">Custom akrilik berbagai bentuk.</p>
                </div>

                <!-- Product 3 -->
                <div class="group">
                    <div class="relative overflow-hidden rounded-[2rem] bg-slate-100 aspect-square mb-4">
                        <img src="https://images.unsplash.com/photo-1631122540924-14c9243c9731?q=80&w=800&auto=format&fit=crop" alt="Lanyard" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition duration-700">
                        <div class="absolute inset-0 bg-black/20 group-hover:bg-transparent transition duration-500"></div>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-1 group-hover:text-purple-600 transition-colors">Lanyard Laser</h3>
                    <p class="text-sm text-gothic">Cetak lanyard dengan kualitas tajam.</p>
                </div>

                <!-- Product 4 -->
                <div class="group">
                    <div class="relative overflow-hidden rounded-[2rem] bg-slate-100 aspect-square mb-4">
                        <img src="https://images.unsplash.com/photo-1562690868-60bbe7293e94?q=80&w=800&auto=format&fit=crop" alt="Bouquet" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition duration-700">
                        <div class="absolute inset-0 bg-black/20 group-hover:bg-transparent transition duration-500"></div>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-1 group-hover:text-purple-600 transition-colors">Bouquet Bunga</h3>
                    <p class="text-sm text-gothic">Pilihan bunga segar & artificial.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-24 bg-purple-600 relative overflow-hidden">
        <div class="absolute inset-0 bg-[url('https://grainy-gradients.vercel.app/noise.svg')] opacity-20 mix-blend-overlay"></div>
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">Punya Ide Unik?</h2>
            <p class="text-white/90 text-lg mb-10 max-w-2xl mx-auto">
                Jangan ragu untuk mendiskusikan kebutuhan custom project akrilik atau 3D printing Anda bersama kami. Kami siap membantu mewujudkannya.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="https://wa.me/6281234567890?text=Halo,%20saya%20ingin%20diskusi%20project%20akrilik." target="_blank" class="inline-flex items-center justify-center px-8 py-4 rounded-full bg-white text-purple-600 font-bold hover:bg-slate-100 transition shadow-xl hover:-translate-y-1">
                    <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.017-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                    Chat WhatsApp
                </a>
            </div>
        </div>
    </section>
</x-layouts.app>