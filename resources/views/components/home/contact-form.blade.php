<section id="contact" class="py-32 bg-white relative overflow-hidden scroll-mt-20" x-data="{ shown: false }" x-intersect.threshold.20="shown = true">
    <!-- Minimal Decor -->
    <div class="absolute top-0 right-0 w-full h-full bg-[radial-gradient(circle_at_top_right,_var(--tw-gradient-stops))] from-iron via-white to-white"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 lg:gap-24 items-center">
            
            <!-- Left: Text & Info -->
            <div class="space-y-10" :class="shown ? 'animate-slide-right-fade' : 'opacity-0'">
                <div>
                    <h2 class="text-4xl md:text-6xl font-bold text-slate-900 mb-6 leading-tight">
                        Mari Bicara Tentang <br>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-chill to-purple-600 animate-gradient">Masa Depan.</span>
                    </h2>
                    <p class="text-gothic text-lg leading-relaxed max-w-lg">
                        Punya proyek menarik? Atau sekadar ingin menyapa? Tim kami siap mendengarkan dan memberikan solusi terbaik untuk kebutuhan Anda.
                    </p>
                </div>

                <div class="space-y-6">
                    <div class="flex items-start gap-5">
                        <div class="w-12 h-12 rounded-full bg-blue-chill/10 flex items-center justify-center text-blue-chill flex-shrink-0">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-900 mb-1">Email Kami</h4>
                            <a href="mailto:hello@acaraqu.com" class="text-gothic hover:text-blue-chill transition-colors">hello@acaraqu.com</a>
                        </div>
                    </div>

                    <div class="flex items-start gap-5">
                        <div class="w-12 h-12 rounded-full bg-green-500/10 flex items-center justify-center text-green-600 flex-shrink-0">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-900 mb-1">WhatsApp</h4>
                            <a href="https://wa.me/6281234567890" target="_blank" class="text-gothic hover:text-green-600 transition-colors">+62 812 3456 7890</a>
                        </div>
                    </div>

                    <div class="flex items-start gap-5">
                        <div class="w-12 h-12 rounded-full bg-purple-500/10 flex items-center justify-center text-purple-600 flex-shrink-0">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-900 mb-1">Studio</h4>
                            <p class="text-gothic">Jakarta, Indonesia</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right: Form -->
            <div :class="shown ? 'animate-slide-left-fade' : 'opacity-0'" style="animation-delay: 0.2s">
                <div class="bg-white p-8 md:p-10 rounded-[2.5rem] shadow-[0_20px_60px_-15px_rgba(0,0,0,0.05)] border border-slate-100 relative">
                    <!-- Decorative corner -->
                    <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-bl from-blue-chill/10 to-transparent rounded-tr-[2.5rem] pointer-events-none"></div>

                    <form action="#" method="POST" class="space-y-6 relative z-10">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="space-y-2">
                                <label class="text-sm font-bold text-slate-700 ml-1">Nama Anda</label>
                                <input type="text" name="name" class="w-full px-5 py-4 rounded-xl bg-slate-50 border-transparent focus:border-blue-chill focus:bg-white focus:ring-0 transition-all duration-300 placeholder-slate-400 font-medium" placeholder="John Doe" required>
                            </div>
                            <div class="space-y-2">
                                <label class="text-sm font-bold text-slate-700 ml-1">Email</label>
                                <input type="email" name="email" class="w-full px-5 py-4 rounded-xl bg-slate-50 border-transparent focus:border-blue-chill focus:bg-white focus:ring-0 transition-all duration-300 placeholder-slate-400 font-medium" placeholder="john@mail.com" required>
                            </div>
                        </div>

                        <div class="space-y-2">
                            <label class="text-sm font-bold text-slate-700 ml-1">Tertarik dengan Layanan</label>
                            <div class="relative">
                                <select name="subject" class="w-full px-5 py-4 rounded-xl bg-slate-50 border-transparent focus:border-blue-chill focus:bg-white focus:ring-0 transition-all duration-300 font-medium appearance-none cursor-pointer text-slate-600">
                                    <option value="" disabled selected>Pilih salah satu...</option>
                                    <option value="galeriqu">GaleriQu (Foto & Video)</option>
                                    <option value="hadirqu">HadirQu (Guestbook)</option>
                                    <option value="kreasiqu">KreasiQu (Merchandise)</option>
                                    <option value="undanganqu">UndanganQu (Digital Invitation)</option>
                                    <option value="digitalqu">DigitalQu (Software/Web)</option>
                                    <option value="fotoqu">FotoQu (Photobooth)</option>
                                    <option value="other">Lainnya</option>
                                </select>
                                <div class="absolute inset-y-0 right-0 flex items-center px-5 pointer-events-none text-slate-400">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                                </div>
                            </div>
                        </div>

                        <div class="space-y-2">
                            <label class="text-sm font-bold text-slate-700 ml-1">Detail Pesan</label>
                            <textarea name="message" rows="4" class="w-full px-5 py-4 rounded-xl bg-slate-50 border-transparent focus:border-blue-chill focus:bg-white focus:ring-0 transition-all duration-300 placeholder-slate-400 font-medium resize-none" placeholder="Ceritakan sedikit tentang kebutuhan Anda..." required></textarea>
                        </div>

                        <button type="submit" class="w-full py-4 bg-slate-900 text-white rounded-xl font-bold hover:bg-blue-chill hover:shadow-lg hover:shadow-blue-chill/30 transition-all duration-300 transform hover:-translate-y-1">
                            Kirim Pesan
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>