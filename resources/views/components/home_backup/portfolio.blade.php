<section id="portofolio" class="py-24 bg-white scroll-mt-20" x-data="{ 
        shown: false, 
        modalOpen: false,
        activeItem: null,
        filter: 'Semua',
        items: [
            {
                title: 'Cinematic Wedding Teaser',
                category: 'Dokumentasi',
                type: 'youtube',
                videoUrl: 'https://www.youtube.com/embed/ysAhZHSa8eo?autoplay=1',
                image: 'https://img.youtube.com/vi/ysAhZHSa8eo/maxresdefault.jpg',
                description: 'Abadikan momen sakral pernikahan Anda dengan sentuhan sinematik yang emosional dan elegan. Kami memastikan setiap detik berharga terekam sempurna.'
            },
            {
                title: 'Official Event Coverage',
                category: 'Dokumentasi',
                type: 'youtube',
                videoUrl: 'https://www.youtube.com/embed/fEaRT2KmxIQ?autoplay=1',
                image: 'https://img.youtube.com/vi/fEaRT2KmxIQ/maxresdefault.jpg',
                description: 'Dokumentasi acara resmi dan pelantikan dengan standar broadcast. Mendukung multi-cam system dan livestreaming berkualitas tinggi.'
            },
            {
                title: 'Social Media Highlight',
                category: 'Dokumentasi',
                type: 'external',
                externalUrl: 'https://www.instagram.com/reel/DGuJdRuhpQ7/',
                image: 'https://images.unsplash.com/photo-1621621667797-e06afc217fb0?q=80&w=2000&auto=format&fit=crop',
                description: 'Konten kreatif vertical video untuk kebutuhan Instagram Reels dan TikTok. Cocok untuk highlight acara yang dinamis dan engaging.'
            },
            {
                title: 'Exclusive Event Footage',
                category: 'Dokumentasi',
                type: 'external',
                externalUrl: 'https://drive.google.com/file/d/1Mxc2Tt3StPPL4CbjEYstDqx23RWXFhMB/view?usp=drive_link',
                image: 'https://images.unsplash.com/photo-1492691527719-9d1e07e534b4?q=80&w=2000&auto=format&fit=crop',
                description: 'Dokumentasi video raw dan edited berkualitas tinggi yang tersimpan aman di cloud untuk kebutuhan arsip dan publikasi perusahaan.'
            },
            {
                title: 'Aplikasi E-Office',
                category: 'Software',
                type: 'image',
                image: 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=2000&auto=format&fit=crop',
                description: 'Pengembangan sistem E-Office berbasis web untuk pengelolaan surat menyurat dan disposisi digital yang efisien.'
            },
            {
                title: 'Smart Guestbook System',
                category: 'Digital Guestbook',
                type: 'image',
                image: 'https://images.unsplash.com/photo-1544531586-fde5298cdd40?q=80&w=2000&auto=format&fit=crop',
                description: 'Implementasi sistem buku tamu digital (Hadirku) untuk event skala besar, lengkap dengan QR code check-in dan analitik pengunjung.'
            }
        ],
        get filteredItems() {
            if (this.filter === 'Semua') return this.items;
            return this.items.filter(item => item.category.includes(this.filter));
        },
        openModal(item) {
            this.activeItem = item;
            this.modalOpen = true;
            document.body.style.overflow = 'hidden';
        },
        closeModal() {
            this.modalOpen = false;
            setTimeout(() => { this.activeItem = null }, 300);
            document.body.style.overflow = 'auto';
        }
    }" x-intersect.threshold.20="shown = true">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-6" :class="shown ? 'animate-fade-in-up' : 'opacity-0'">
            <div class="max-w-2xl">
                <span class="text-blue-chill font-bold tracking-wider uppercase text-sm mb-3 block">Karya Kami</span>
                <h2 class="text-4xl md:text-5xl font-bold text-slate-900 mb-6">Portofolio Pilihan</h2>
                <p class="text-slate-500 text-lg leading-relaxed">
                    Koleksi proyek terbaik yang mencerminkan dedikasi kami terhadap kualitas dan inovasi.
                </p>
            </div>
            
            <!-- Filter Tabs -->
            <div class="flex flex-wrap gap-2"
                style="animation-delay: 0.2s">
                <template x-for="cat in ['Semua', 'Dokumentasi', 'Digital Guestbook', 'Software']">
                    <button @click="filter = cat"
                        :class="filter === cat ? 'bg-slate-900 text-white shadow-lg shadow-slate-900/20' : 'bg-white text-slate-500 hover:bg-slate-50 border border-slate-200'"
                        class="px-5 py-2.5 rounded-full font-medium transition-all duration-300 text-sm" x-text="cat"></button>
                </template>
            </div>
        </div>

        <!-- Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8"
            :class="shown ? 'animate-fade-in-up' : 'opacity-0'" style="animation-delay: 0.4s">
            <template x-for="(item, index) in filteredItems" :key="index">
                <div @click="openModal(item)"
                    class="group relative overflow-hidden rounded-[2rem] cursor-pointer bg-white shadow-sm hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                    <div class="aspect-[4/3] overflow-hidden">
                        <img :src="item.image" :alt="item.title" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                    </div>
                    
                    <div class="absolute inset-0 bg-blue-chill/90 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-8">
                        <span class="inline-block px-3 py-1 rounded-full bg-white/20 text-white text-xs font-medium w-fit mb-3 translate-y-4 group-hover:translate-y-0 transition-transform duration-300" x-text="item.category"></span>
                        <h3 class="text-white text-2xl font-bold translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-75"
                            x-text="item.title"></h3>
                        <p class="text-white/90 text-sm mt-2 translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-100 line-clamp-2" x-text="item.description"></p>
                    </div>
                    
                    <!-- Visible info when not hovering (mobile friendly) -->
                    <div class="p-6 md:hidden">
                        <span class="text-blue-chill text-xs font-bold uppercase tracking-wide" x-text="item.category"></span>
                        <h3 class="text-slate-900 text-xl font-bold mt-1" x-text="item.title"></h3>
                    </div>
                </div>
            </template>
        </div>

        <div class="text-center mt-16">
            <a href="#"
                class="inline-flex items-center px-8 py-4 rounded-full bg-white border border-slate-200 text-slate-700 font-bold hover:bg-slate-50 hover:border-blue-chill hover:text-blue-chill transition-all duration-300 shadow-sm hover:shadow-lg">
                Lihat Lebih Banyak Karya
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3">
                    </path>
                </svg>
            </a>
        </div>
    </div>

    <!-- Modal -->
    <div x-show="modalOpen" class="fixed inset-0 z-[100] overflow-y-auto" aria-labelledby="modal-title" role="dialog"
        aria-modal="true" style="display: none;">

        <!-- Backdrop -->
        <div x-show="modalOpen" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200"
            x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
            class="fixed inset-0 bg-gothic/80 backdrop-blur-sm transition-opacity" @click="closeModal"></div>

        <div class="flex min-h-full items-center justify-center p-4 text-center sm:p-0">
            <!-- Modal Panel -->
            <div x-show="modalOpen" x-transition:enter="ease-out duration-300"
                x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave="ease-in duration-200"
                x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                class="relative transform overflow-hidden rounded-2xl bg-white text-left shadow-2xl transition-all sm:my-8 sm:w-full sm:max-w-3xl">

                <div class="absolute right-0 top-0 pr-4 pt-4 z-10">
                    <button type="button" @click="closeModal"
                        class="rounded-full bg-white/20 p-2 text-gray-400 hover:text-gray-500 focus:outline-none">
                        <span class="sr-only">Close</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <div class="flex flex-col md:flex-row h-full">
                    <!-- Media Section -->
                    <div class="w-full md:w-1/2 h-64 md:h-auto bg-slate-900 flex items-center justify-center text-gothic overflow-hidden relative group">
                        <!-- Youtube Embed -->
                        <template x-if="activeItem?.type === 'youtube'">
                            <iframe :src="activeItem?.videoUrl" class="w-full h-full absolute inset-0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </template>

                        <!-- Image Only -->
                        <template x-if="activeItem?.type !== 'youtube'">
                            <div class="relative w-full h-full">
                                <img :src="activeItem?.image" :alt="activeItem?.title" class="w-full h-full object-cover">
                                <!-- Play Icon for External Video Links -->
                                <template x-if="activeItem?.type === 'external'">
                                    <a :href="activeItem?.externalUrl" target="_blank" class="absolute inset-0 flex items-center justify-center bg-slate-900/40 hover:bg-slate-900/50 transition-colors group">
                                        <div class="w-16 h-16 rounded-full bg-white/20 flex items-center justify-center border border-white/50 group-hover:scale-110 transition-transform">
                                            <svg class="w-8 h-8 text-white ml-1" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M8 5v14l11-7z"/>
                                            </svg>
                                        </div>
                                    </a>
                                </template>
                            </div>
                        </template>
                    </div>

                    <!-- Content Section -->
                    <div class="w-full md:w-1/2 p-8 md:p-10 flex flex-col justify-between">
                        <div>
                            <div class="mb-4 flex items-center gap-3">
                                <span
                                    class="inline-flex items-center rounded-full bg-blue-50 px-3 py-1 text-xs font-semibold text-blue-chill ring-1 ring-inset ring-blue-chill/20"
                                    x-text="activeItem?.category"></span>
                                <template x-if="activeItem?.type === 'youtube' || activeItem?.type === 'external'">
                                    <span class="inline-flex items-center rounded-full bg-red-50 px-3 py-1 text-xs font-semibold text-red-600 ring-1 ring-inset ring-red-600/20">
                                        <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 24 24"><path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"/></svg>
                                        Video
                                    </span>
                                </template>
                            </div>
                            <h3 class="text-3xl font-bold text-slate-900 mb-4 leading-tight" x-text="activeItem?.title"></h3>
                            <p class="text-slate-500 text-lg leading-relaxed mb-8" x-text="activeItem?.description"></p>

                            <div class="bg-slate-50 rounded-2xl p-6 border border-slate-100">
                                <h4 class="text-sm font-bold text-slate-900 uppercase tracking-wider mb-4">Layanan Termasuk:</h4>
                                <ul class="space-y-3">
                                    <li class="flex items-center text-slate-600">
                                        <svg class="h-5 w-5 text-green-500 mr-3" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7" />
                                        </svg>
                                        <span class="font-medium">Konsultasi Konsep</span>
                                    </li>
                                    <li class="flex items-center text-slate-600">
                                        <svg class="h-5 w-5 text-green-500 mr-3" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7" />
                                        </svg>
                                        <span class="font-medium">Produksi & Eksekusi</span>
                                    </li>
                                    <li class="flex items-center text-slate-600">
                                        <svg class="h-5 w-5 text-green-500 mr-3" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7" />
                                        </svg>
                                        <span class="font-medium">Quality Control & Revisi</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="mt-8 flex gap-4">
                            <a href="#contact" @click="closeModal"
                                class="flex-1 inline-flex justify-center items-center rounded-xl bg-slate-900 px-6 py-4 text-sm font-bold text-white shadow-lg shadow-slate-900/20 hover:bg-slate-800 hover:-translate-y-1 transition-all duration-300">
                                Tanya Project Serupa
                            </a>
                            <template x-if="activeItem?.type === 'external'">
                                <a :href="activeItem?.externalUrl" target="_blank"
                                    class="inline-flex justify-center items-center rounded-xl bg-white border border-slate-200 px-6 py-4 text-sm font-bold text-slate-700 hover:bg-slate-50 hover:border-blue-chill hover:text-blue-chill transition-all duration-300">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                                </a>
                            </template>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>