@props(['id', 'title', 'subtitle', 'description', 'icon'])

<div id="{{ $id }}"
    class="group bg-iron rounded-2xl p-8 border border-regent-gray/20 hover:shadow-xl hover:-translate-y-2 transition duration-300">
    <div
        class="w-14 h-14 bg-blue-chill/10 rounded-xl flex items-center justify-center mb-6 group-hover:bg-blue-chill transition duration-300">
        {{ $icon }}
    </div>
    <h3 class="text-xl font-bold text-blue-chill mb-2">{{ $title }}</h3>
    <p class="text-sm font-semibold text-regent-gray mb-4 uppercase tracking-wider">{{ $subtitle }}</p>
    <p class="text-gothic text-sm leading-relaxed">
        {{ $description }}
    </p>
</div>