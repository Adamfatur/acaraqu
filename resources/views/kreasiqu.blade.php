<x-layouts.app>
    @section('title', 'KreasiQu - Merchandise & Custom Akrilik Eksklusif')
    @section('meta_description', 'Pusat souvenir custom berbasis 3D Printing dan Akrilik. Plakat, gantungan kunci, lanyard, hingga bouquet bunga untuk segala kebutuhan acara Anda.')

    <!-- Hero Section -->
    <section class="relative min-h-screen flex items-center justify-center overflow-hidden bg-white pt-20">
        <div class="absolute inset-0 z-0">
            <div class="absolute top-[-10%] left-[-5%] w-[600px] h-[600px] bg-purple-500/5 rounded-full blur-[100px] animate-blob"></div>
            <div class="absolute bottom-[-10%] right-[-5%] w-[500px] h-[500px] bg-blue-chill/5 rounded-full blur-[100px] animate-blob animation-delay-2000"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 lg:gap-24 items-center">
                <div>
                    <span class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white border border-regent-gray/20 text-purple-600 text-sm font-bold mb-8 backdrop-blur-md animate-fade-in-up shadow-sm">
                        <span class="w-2 h-2 rounded-full bg-purple-500 animate-pulse"></span>
                        Custom Merchandise Expert
                    </span>
                    <h1 class="text-5xl lg:text-7xl font-bold text-slate-900 mb-8 leading-tight tracking-tight animate-fade-in-up" style="animation-delay: 0.1s">
                        Wujudkan Ide Kreatifmu <span class="text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-pink-500 animate-gradient">Menjadi Nyata.</span>
                    </h1>
                    <p class="text-xl text-gothic mb-10 leading-relaxed animate-fade-in-up" style="animation-delay: 0.2s">
                        Spesialis pembuatan merchandise unik berbasis 3D Printing dan Laser Cutting Akrilik. Mulai dari plakat wisuda, souvenir pernikahan, hingga kebutuhan branding perusahaan.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 animate-fade-in-up" style="animation-delay: 0.3s">
                        <a href="#catalog" class="group relative px-8 py-4 bg-purple-600 text-white rounded-full font-bold hover:bg-purple-700 transition-all duration-300 shadow-lg shadow-purple-500/20 overflow-hidden text-center">
                            <span class="relative z-10">Lihat Katalog</span>
                        </a>
                        <a href="https://wa.me/6281234567890?text=Halo,%20saya%20ingin%20konsultasi%20project%20custom." target="_blank" class="px-8 py-4 bg-white border border-regent-gray/20 text-slate-900 rounded-full font-bold hover:bg-slate-50 transition-all duration-300 shadow-sm text-center">
                            Konsultasi Project
                        </a>
                    </div>
                </div>
                
                <div class="relative animate-fade-in-up lg:h-[600px] flex items-center justify-center" style="animation-delay: 0.4s">
                    <div class="absolute inset-0 bg-gradient-to-tl from-purple-500/20 to-blue-chill/20 rounded-[3rem] rotate-6 scale-95 blur-xl z-10"></div>
                    
                    <!-- Dynamic Grid -->
                    <div class="relative z-20 grid grid-cols-2 gap-6 w-full max-w-lg transform -rotate-3 hover:rotate-0 transition duration-700 ease-out">
                        <div class="space-y-6 mt-12">
                            <div class="bg-white p-4 rounded-[2rem] shadow-2xl border border-slate-100 hover:-translate-y-2 transition duration-500 group">
                                <div class="h-48 rounded-2xl overflow-hidden mb-4 relative">
                                    <img src="https://images.unsplash.com/photo-1513530534585-c7b1394c6d51?q=80&w=1000&auto=format&fit=crop" alt="Acrylic Plaque" class="w-full h-full object-cover transform group-hover:scale-110 transition duration-700">
                                    <div class="absolute inset-0 bg-purple-600/10 group-hover:bg-transparent transition"></div>
                                </div>
                                <h3 class="font-bold text-slate-900 text-lg">Plakat Akrilik</h3>
                                <p class="text-sm text-gothic">Laser Cut Precision</p>
                            </div>
                            <div class="bg-white p-4 rounded-[2rem] shadow-2xl border border-slate-100 hover:-translate-y-2 transition duration-500 group">
                                <div class="h-32 rounded-2xl overflow-hidden mb-4 relative">
                                    <img src="https://images.unsplash.com/photo-1617347454431-f49d7ff5c3b1?q=80&w=1000&auto=format&fit=crop" alt="3D Printed" class="w-full h-full object-cover transform group-hover:scale-110 transition duration-700">
                                </div>
                                <h3 class="font-bold text-slate-900 text-lg">3D Printing</h3>
                                <p class="text-sm text-gothic">Custom Shape</p>
                            </div>
                        </div>
                        <div class="space-y-6">
                            <div class="bg-white p-4 rounded-[2rem] shadow-2xl border border-slate-100 hover:-translate-y-2 transition duration-500 group">
                                <div class="h-32 rounded-2xl overflow-hidden mb-4 relative">
                                    <img src="https://images.unsplash.com/photo-1603657966684-3333a549b622?q=80&w=1000&auto=format&fit=crop" alt="Bouquet" class="w-full h-full object-cover transform group-hover:scale-110 transition duration-700">
                                </div>
                                <h3 class="font-bold text-slate-900 text-lg">Bouquet Bunga</h3>
                                <p class="text-sm text-gothic">Fresh & Artificial</p>
                            </div>
                            <div class="bg-white p-4 rounded-[2rem] shadow-2xl border border-slate-100 hover:-translate-y-2 transition duration-500 group">
                                <div class="h-48 rounded-2xl overflow-hidden mb-4 relative">
                                    <img src="https://images.unsplash.com/photo-1563292724-4e47834b2c01?q=80&w=1000&auto=format&fit=crop" alt="Neon Box" class="w-full h-full object-cover transform group-hover:scale-110 transition duration-700">
                                </div>
                                <h3 class="font-bold text-slate-900 text-lg">Neon Box</h3>
                                <p class="text-sm text-gothic">Custom Light Sign</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why KreasiQu -->
    <section class="py-32 bg-iron/30 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-20 max-w-3xl mx-auto">
                <h2 class="text-3xl md:text-5xl font-bold text-slate-900 mb-6">Kualitas Tanpa Kompromi</h2>
                <p class="text-gothic text-lg leading-relaxed">
                    Menggabungkan teknologi presisi dengan sentuhan seni untuk hasil terbaik.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-10 rounded-[2.5rem] border border-slate-100 hover:shadow-xl transition duration-500 hover:-translate-y-2 group">
                    <div class="w-16 h-16 rounded-2xl bg-purple-50 text-purple-600 flex items-center justify-center mb-8 group-hover:bg-purple-600 group-hover:text-white transition-colors duration-500">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.384-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900 mb-4 group-hover:text-purple-600 transition-colors">Teknologi Laser & 3D</h3>
                    <p class="text-gothic leading-relaxed">
                        Menggunakan mesin laser cutting presisi tinggi dan 3D printer terbaru untuk detail yang tajam dan rapi.
                    </p>
                </div>
                <div class="bg-white p-10 rounded-[2.5rem] border border-slate-100 hover:shadow-xl transition duration-500 hover:-translate-y-2 group">
                    <div class="w-16 h-16 rounded-2xl bg-purple-50 text-purple-600 flex items-center justify-center mb-8 group-hover:bg-purple-600 group-hover:text-white transition-colors duration-500">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900 mb-4 group-hover:text-purple-600 transition-colors">Custom Project? Bisa!</h3>
                    <p class="text-gothic leading-relaxed">
                        Punya desain sendiri atau kebutuhan unik? Tim kami siap berdiskusi untuk mewujudkan ide "gila" Anda.
                    </p>
                </div>
                <div class="bg-white p-10 rounded-[2.5rem] border border-slate-100 hover:shadow-xl transition duration-500 hover:-translate-y-2 group">
                    <div class="w-16 h-16 rounded-2xl bg-purple-50 text-purple-600 flex items-center justify-center mb-8 group-hover:bg-purple-600 group-hover:text-white transition-colors duration-500">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path></svg>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900 mb-4 group-hover:text-purple-600 transition-colors">Material Premium</h3>
                    <p class="text-gothic leading-relaxed">
                        Hanya menggunakan bahan akrilik grade A dan filamen 3D berkualitas untuk ketahanan dan estetika maksimal.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Product Categories -->
    <section id="catalog" class="py-32 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-20">
                <span class="text-purple-600 font-bold tracking-wider uppercase text-sm mb-4 block">Katalog KreasiQu</span>
                <h2 class="text-3xl md:text-5xl font-bold text-slate-900 mb-6">Koleksi Produk Kami</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Product 1 -->
                <div class="group">
                    <div class="relative overflow-hidden rounded-[2rem] bg-slate-100 aspect-square mb-6">
                        <img src="https://images.unsplash.com/photo-1513530534585-c7b1394c6d51?q=80&w=800&auto=format&fit=crop" alt="Plakat" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition duration-700">
                        <div class="absolute inset-0 bg-slate-900/20 group-hover:bg-transparent transition duration-500"></div>
                        <div class="absolute bottom-4 right-4 w-10 h-10 bg-white rounded-full flex items-center justify-center shadow-lg translate-y-4 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition duration-500">
                            <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-2 group-hover:text-purple-600 transition-colors">Plakat & Piagam</h3>
                    <p class="text-sm text-gothic">Ideal untuk penghargaan acara.</p>
                </div>

                <!-- Product 2 -->
                <div class="group">
                    <div class="relative overflow-hidden rounded-[2rem] bg-slate-100 aspect-square mb-6">
                        <img src="https://images.unsplash.com/photo-1622643285579-274ac1dd273a?q=80&w=800&auto=format&fit=crop" alt="Gantungan Kunci" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition duration-700">
                        <div class="absolute inset-0 bg-slate-900/20 group-hover:bg-transparent transition duration-500"></div>
                        <div class="absolute bottom-4 right-4 w-10 h-10 bg-white rounded-full flex items-center justify-center shadow-lg translate-y-4 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition duration-500">
                             <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-2 group-hover:text-purple-600 transition-colors">Gantungan Kunci</h3>
                    <p class="text-sm text-gothic">Custom akrilik berbagai bentuk.</p>
                </div>

                <!-- Product 3 -->
                <div class="group">
                    <div class="relative overflow-hidden rounded-[2rem] bg-slate-100 aspect-square mb-6">
                        <img src="https://images.unsplash.com/photo-1631122540924-14c9243c9731?q=80&w=800&auto=format&fit=crop" alt="Lanyard" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition duration-700">
                        <div class="absolute inset-0 bg-slate-900/20 group-hover:bg-transparent transition duration-500"></div>
                        <div class="absolute bottom-4 right-4 w-10 h-10 bg-white rounded-full flex items-center justify-center shadow-lg translate-y-4 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition duration-500">
                             <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-2 group-hover:text-purple-600 transition-colors">Lanyard Laser</h3>
                    <p class="text-sm text-gothic">Cetak lanyard dengan kualitas tajam.</p>
                </div>

                <!-- Product 4 -->
                <div class="group">
                    <div class="relative overflow-hidden rounded-[2rem] bg-slate-100 aspect-square mb-6">
                        <img src="https://images.unsplash.com/photo-1562690868-60bbe7293e94?q=80&w=800&auto=format&fit=crop" alt="Bouquet" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition duration-700">
                        <div class="absolute inset-0 bg-slate-900/20 group-hover:bg-transparent transition duration-500"></div>
                        <div class="absolute bottom-4 right-4 w-10 h-10 bg-white rounded-full flex items-center justify-center shadow-lg translate-y-4 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition duration-500">
                             <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-2 group-hover:text-purple-600 transition-colors">Bouquet Bunga</h3>
                    <p class="text-sm text-gothic">Pilihan bunga segar & artificial.</p>
                </div>

                <!-- Product 5 -->
                <div class="group">
                    <div class="relative overflow-hidden rounded-[2rem] bg-slate-100 aspect-square mb-6">
                        <img src="https://images.unsplash.com/photo-1563292724-4e47834b2c01?q=80&w=800&auto=format&fit=crop" alt="Neon Box" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition duration-700">
                        <div class="absolute inset-0 bg-slate-900/20 group-hover:bg-transparent transition duration-500"></div>
                        <div class="absolute bottom-4 right-4 w-10 h-10 bg-white rounded-full flex items-center justify-center shadow-lg translate-y-4 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition duration-500">
                             <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-2 group-hover:text-purple-600 transition-colors">Neon Box</h3>
                    <p class="text-sm text-gothic">Lampu branding estetik.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-32 bg-purple-600 relative overflow-hidden">
        <div class="absolute inset-0 bg-[url('https://grainy-gradients.vercel.app/noise.svg')] opacity-20 mix-blend-overlay"></div>
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
            <h2 class="text-4xl md:text-6xl font-bold text-white mb-8">Punya Ide Unik?</h2>
            <p class="text-white/90 text-xl mb-12 max-w-2xl mx-auto leading-relaxed">
                Jangan ragu untuk mendiskusikan kebutuhan custom project akrilik atau 3D printing Anda bersama kami. Kami siap membantu mewujudkannya.
            </p>
            <div class="flex flex-col sm:flex-row gap-6 justify-center">
                <a href="https://wa.me/6281234567890?text=Halo,%20saya%20ingin%20diskusi%20project%20akrilik." target="_blank" class="group inline-flex items-center justify-center px-8 py-4 rounded-full bg-white text-purple-600 font-bold hover:bg-slate-50 transition-all duration-300 shadow-2xl hover:-translate-y-1">
                    <svg class="w-6 h-6 mr-2 group-hover:scale-110 transition-transform" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.017-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                    Chat WhatsApp
                </a>
            </div>
        </div>
    </section>
</x-layouts.app>