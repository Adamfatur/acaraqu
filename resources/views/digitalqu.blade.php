<x-layouts.app>
    @section('title', 'DigitalQu - Solusi Software & Digital Transformation')
    @section('meta_description', 'Jasa pembuatan software custom, website WordPress profesional, dan layanan OJS terpercaya. Solusi IT lengkap untuk bisnis dan institusi Anda.')

    <!-- Hero Section -->
    <section class="relative py-24 lg:py-32 bg-slate-900 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div>
                    <span class="inline-flex items-center gap-2 py-1 px-3 rounded-full bg-blue-chill/20 border border-blue-chill/30 text-blue-chill text-sm font-bold mb-6 animate-fade-in-up">
                        <span class="w-2 h-2 rounded-full bg-blue-chill"></span>
                        Digital Transformation Partner
                    </span>
                    <h1 class="text-5xl md:text-6xl font-bold text-white mb-6 leading-tight animate-fade-in-up" style="animation-delay: 0.1s">
                        Bangun Masa Depan Bisnis dengan <span class="text-blue-chill">Teknologi Tepat Guna.</span>
                    </h1>
                    <p class="text-lg text-slate-400 mb-8 leading-relaxed max-w-xl animate-fade-in-up" style="animation-delay: 0.2s">
                        Kami membantu perusahaan dan instansi bertransformasi melalui pengembangan software custom, website profesional, dan infrastruktur IT yang handal.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 animate-fade-in-up" style="animation-delay: 0.3s">
                        <a href="#services" class="px-8 py-4 rounded-full bg-blue-chill text-white font-bold hover:bg-white hover:text-slate-900 transition shadow-lg text-center">
                            Lihat Layanan
                        </a>
                        <a href="https://wa.me/6281234567890?text=Halo,%20saya%20ingin%20konsultasi%20IT." target="_blank" class="px-8 py-4 rounded-full bg-transparent border-2 border-slate-700 text-white font-bold hover:bg-slate-800 transition text-center">
                            Konsultasi Gratis
                        </a>
                    </div>
                </div>
                
                <div class="relative animate-fade-in-up lg:h-[500px] flex items-center justify-center" style="animation-delay: 0.4s">
                    <div class="absolute inset-0 bg-blue-chill/10 rounded-full blur-3xl transform translate-x-12"></div>
                    
                    <!-- Code Mockup -->
                    <div class="relative z-10 w-full bg-slate-800 rounded-2xl shadow-2xl border border-slate-700 overflow-hidden">
                        <div class="flex items-center gap-2 px-4 py-3 bg-slate-900 border-b border-slate-700">
                            <div class="w-3 h-3 rounded-full bg-red-500"></div>
                            <div class="w-3 h-3 rounded-full bg-yellow-500"></div>
                            <div class="w-3 h-3 rounded-full bg-green-500"></div>
                        </div>
                        <div class="p-6 font-mono text-sm overflow-hidden">
                            <div class="text-blue-400">class <span class="text-yellow-400">DigitalSolution</span> <span class="text-white">{</span></div>
                            <div class="pl-4 text-purple-400">public function <span class="text-blue-300">transform</span><span class="text-white">(</span><span class="text-orange-400">$business</span><span class="text-white">) {</span></div>
                            <div class="pl-8 text-slate-400">// Optimize performance</div>
                            <div class="pl-8 text-white">$business-><span class="text-blue-300">efficiency</span> = <span class="text-green-400">100%</span>;</div>
                            <div class="pl-8 text-white">$business-><span class="text-blue-300">security</span> = <span class="text-green-400">'High'</span>;</div>
                            <div class="pl-8 text-white">$business-><span class="text-blue-300">growth</span> = <span class="text-green-400">'Exponential'</span>;</div>
                            <div class="pl-8 mt-2 text-purple-400">return <span class="text-white">$success;</span></div>
                            <div class="pl-4 text-white">}</div>
                            <div class="text-white">}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-4">Solusi IT Terintegrasi</h2>
                <p class="text-gothic text-lg max-w-2xl mx-auto">
                    Dari pengembangan awal hingga maintenance jangka panjang, kami siap menjadi partner teknologi Anda.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Service 1: Custom Software -->
                <div class="bg-white p-8 rounded-[2rem] border border-iron hover:shadow-xl hover:-translate-y-2 transition duration-300 group">
                    <div class="w-16 h-16 rounded-2xl bg-blue-chill text-white flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Custom Software Development</h3>
                    <p class="text-gothic leading-relaxed mb-6">
                        Pembuatan software berbasis web dengan teknologi terkini (PHP, Laravel, Next.js). Solusi tepat guna yang disesuaikan dengan kebutuhan dan proses bisnis Anda.
                    </p>
                    <ul class="space-y-2 text-sm text-slate-600">
                        <li class="flex items-center gap-2"><svg class="w-4 h-4 text-blue-chill" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Web Application</li>
                        <li class="flex items-center gap-2"><svg class="w-4 h-4 text-blue-chill" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> System Integration</li>
                    </ul>
                </div>

                <!-- Service 2: WordPress Website -->
                <div class="bg-white p-8 rounded-[2rem] border border-iron hover:shadow-xl hover:-translate-y-2 transition duration-300 group">
                    <div class="w-16 h-16 rounded-2xl bg-blue-chill text-white flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Professional WordPress Website</h3>
                    <p class="text-gothic leading-relaxed mb-6">
                        Jasa pembuatan website company profile atau toko online berbasis WordPress yang SEO-friendly. Mudah ditemukan di mesin pencari dan cocok untuk UMKM maupun korporasi.
                    </p>
                    <ul class="space-y-2 text-sm text-slate-600">
                        <li class="flex items-center gap-2"><svg class="w-4 h-4 text-blue-chill" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> SEO Optimized</li>
                        <li class="flex items-center gap-2"><svg class="w-4 h-4 text-blue-chill" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Responsive Design</li>
                    </ul>
                </div>

                <!-- Service 3: OJS Services -->
                <div class="bg-white p-8 rounded-[2rem] border border-iron hover:shadow-xl hover:-translate-y-2 transition duration-300 group">
                    <div class="w-16 h-16 rounded-2xl bg-blue-chill text-white flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">OJS Setup & Upgrade</h3>
                    <p class="text-gothic leading-relaxed mb-6">
                        Layanan profesional untuk instalasi dan upgrade Open Journal Systems (OJS). Kami pastikan jurnal Anda berjalan aman, stabil, dan up-to-date (support upgrade 3.3 ke 3.5).
                    </p>
                    <ul class="space-y-2 text-sm text-slate-600">
                        <li class="flex items-center gap-2"><svg class="w-4 h-4 text-blue-chill" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Secure Migration</li>
                        <li class="flex items-center gap-2"><svg class="w-4 h-4 text-blue-chill" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Technical Support</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Tech Stack -->
    <section class="py-20 bg-iron/30">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <p class="text-gothic font-bold uppercase tracking-widest mb-8">Teknologi Yang Kami Gunakan</p>
            <div class="flex flex-wrap justify-center gap-8 opacity-60 grayscale hover:grayscale-0 transition-all duration-500">
                <span class="text-2xl font-bold text-slate-400 hover:text-[#FF2D20]">Laravel</span>
                <span class="text-2xl font-bold text-slate-400 hover:text-[#61DAFB]">React</span>
                <span class="text-2xl font-bold text-slate-400 hover:text-[#42b883]">Vue.js</span>
                <span class="text-2xl font-bold text-slate-400 hover:text-[#38B2AC]">Tailwind</span>
                <span class="text-2xl font-bold text-slate-400 hover:text-[#777BB4]">PHP</span>
                <span class="text-2xl font-bold text-slate-400 hover:text-[#007ACC]">Flutter</span>
                <span class="text-2xl font-bold text-slate-400 hover:text-[#21759b]">WordPress</span>
            </div>
        </div>
    </section>

    <!-- Pricing / CTA -->
    <section class="py-24 bg-blue-chill relative overflow-hidden">
        <div class="absolute inset-0 bg-slate-900/10"></div>
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">Mulai Proyek Digital Anda</h2>
            <p class="text-white/90 text-lg mb-10 max-w-2xl mx-auto">
                Dapatkan solusi IT berkualitas dengan harga bersahabat. Diskusikan ide Anda bersama kami.
            </p>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-left mb-10">
                <div class="bg-white p-6 rounded-2xl">
                    <h4 class="font-bold text-slate-900 mb-1">Landing Page</h4>
                    <p class="text-xs text-gothic mb-3">Mulai dari</p>
                    <p class="text-2xl font-bold text-blue-chill">Rp 500rb</p>
                </div>
                <div class="bg-white p-6 rounded-2xl">
                    <h4 class="font-bold text-slate-900 mb-1">Company Profile</h4>
                    <p class="text-xs text-gothic mb-3">Mulai dari</p>
                    <p class="text-2xl font-bold text-blue-chill">Rp 1.5jt</p>
                </div>
                <div class="bg-white p-6 rounded-2xl">
                    <h4 class="font-bold text-slate-900 mb-1">Custom System</h4>
                    <p class="text-xs text-gothic mb-3">Mulai dari</p>
                    <p class="text-2xl font-bold text-blue-chill">Rp 5jt+</p>
                </div>
            </div>

            <a href="https://wa.me/6281234567890?text=Halo,%20saya%20ingin%20diskusi%20proyek%20IT." target="_blank" class="inline-flex items-center justify-center px-8 py-4 rounded-full bg-slate-900 text-white font-bold hover:bg-slate-800 transition shadow-xl">
                <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.017-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                Hubungi Tim Teknis
            </a>
        </div>
    </section>
</x-layouts.app>