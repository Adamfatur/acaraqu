<section id="contact" class="py-32 bg-white relative overflow-hidden scroll-mt-20" x-data="{ shown: false }"
    x-intersect.threshold.20="shown = true">
    
    <!-- Decor -->
    <div class="absolute -top-24 -left-24 w-96 h-96 bg-blue-50 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-blob"></div>
    <div class="absolute -top-24 -right-24 w-96 h-96 bg-purple-50 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-blob animation-delay-2000"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-16" :class="shown ? 'animate-fade-in-up' : 'opacity-0'">
            <h2 class="text-4xl md:text-5xl font-bold text-slate-900 mb-6">Mulai Kolaborasi</h2>
            <p class="text-slate-500 text-lg max-w-2xl mx-auto leading-relaxed">
                Punya ide brilian? Mari diskusikan bagaimana kami bisa membantu mewujudkannya menjadi kenyataan yang luar biasa.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">
            <!-- Contact Info -->
            <div :class="shown ? 'animate-slide-up-fade' : 'opacity-0'" class="space-y-12">
                <div class="relative rounded-3xl overflow-hidden shadow-2xl group">
                    <img src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?q=80&w=2000&auto=format&fit=crop"
                        alt="Office" class="w-full h-80 object-cover transform group-hover:scale-110 transition duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 to-transparent flex flex-col justify-end p-8">
                        <h3 class="text-white text-2xl font-bold mb-2">Kantor Pusat</h3>
                        <p class="text-white/80">Jakarta, Indonesia</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-blue-50 rounded-2xl flex items-center justify-center flex-shrink-0 text-blue-600">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-lg font-bold text-slate-900 mb-1">Email</h4>
                            <p class="text-slate-500">info@acaraqu.com</p>
                            <p class="text-slate-500">support@acaraqu.com</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-green-50 rounded-2xl flex items-center justify-center flex-shrink-0 text-green-600">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-lg font-bold text-slate-900 mb-1">Telepon</h4>
                            <p class="text-slate-500">+62 812 3456 7890</p>
                            <p class="text-slate-500">Mon-Fri, 9am - 5pm</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="bg-white rounded-[2.5rem] p-8 md:p-12 shadow-[0_20px_50px_rgba(8,_112,_184,_0.07)] border border-slate-100"
                :class="shown ? 'animate-slide-up-fade' : 'opacity-0'" style="animation-delay: 0.2s">
                <form action="#" method="POST" class="space-y-6">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="space-y-2">
                            <label for="name" class="text-sm font-semibold text-slate-700 ml-1">Nama Lengkap</label>
                            <input type="text" id="name" name="name"
                                class="w-full px-6 py-4 rounded-2xl bg-slate-50 border-transparent focus:border-blue-chill focus:bg-white focus:ring-0 transition duration-300 font-medium"
                                placeholder="John Doe" required>
                        </div>
                        <div class="space-y-2">
                            <label for="email" class="text-sm font-semibold text-slate-700 ml-1">Email</label>
                            <input type="email" id="email" name="email"
                                class="w-full px-6 py-4 rounded-2xl bg-slate-50 border-transparent focus:border-blue-chill focus:bg-white focus:ring-0 transition duration-300 font-medium"
                                placeholder="john@example.com" required>
                        </div>
                    </div>

                    <div class="space-y-2">
                        <label for="subject" class="text-sm font-semibold text-slate-700 ml-1">Layanan yang Diminati</label>
                        <select id="subject" name="subject"
                            class="w-full px-6 py-4 rounded-2xl bg-slate-50 border-transparent focus:border-blue-chill focus:bg-white focus:ring-0 transition duration-300 font-medium cursor-pointer appearance-none">
                            <option value="">Pilih Layanan...</option>
                            <option value="galeri">Galeri (Dokumentasi)</option>
                            <option value="hadirku">Hadirku (Guestbook)</option>
                            <option value="seniku">Seniku (Merchandise)</option>
                            <option value="digitalku">Digitalku (Software)</option>
                            <option value="fotoku">Fotoku (Photobooth)</option>
                            <option value="other">Lainnya</option>
                        </select>
                    </div>

                    <div class="space-y-2">
                        <label for="message" class="text-sm font-semibold text-slate-700 ml-1">Ceritakan Kebutuhan Anda</label>
                        <textarea id="message" name="message" rows="4"
                            class="w-full px-6 py-4 rounded-2xl bg-slate-50 border-transparent focus:border-blue-chill focus:bg-white focus:ring-0 transition duration-300 font-medium resize-none"
                            placeholder="Detail proyek..." required></textarea>
                    </div>

                    <button type="submit"
                        class="w-full bg-slate-900 text-white font-bold py-5 rounded-2xl hover:bg-slate-800 transition-all duration-300 shadow-xl shadow-slate-900/20 hover:shadow-slate-900/30 hover:-translate-y-1">
                        Kirim Pesan
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>