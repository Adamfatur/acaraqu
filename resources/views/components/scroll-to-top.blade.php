<div x-data="{ show: false }" @scroll.window="show = (window.pageYOffset > 500)"
    class="fixed bottom-8 right-8 z-40 flex flex-col gap-4">

    <!-- Scroll to Top -->
    <button x-show="show" x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 translate-y-10" x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 translate-y-10" @click="window.scrollTo({top: 0, behavior: 'smooth'})"
        class="bg-white/80 backdrop-blur-md text-slate-800 p-3.5 rounded-2xl shadow-lg hover:bg-blue-chill hover:text-white hover:shadow-blue-chill/30 transition-all duration-300 border border-white/50 group">
        <svg class="w-5 h-5 group-hover:-translate-y-1 transition-transform duration-300" fill="none" stroke="currentColor"
            viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
        </svg>
    </button>
</div>