@extends('layouts.app')

@section('meta_title', 'Galeri Proyek - Portfolio Event')
@section('meta_description', 'Lihat portfolio dan galeri proyek event yang telah kami kerjakan. Pernikahan, pameran, seminar, dan corporate event.')

@section('content')
    {{-- Page Header --}}
    <section class="relative bg-slate-900 py-24 lg:py-32 overflow-hidden section-anchor" id="gallery-intro">
        {{-- Background Pattern --}}
        <div class="absolute inset-0 opacity-10">
            <svg class="w-full h-full" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <pattern id="grid" width="40" height="40" patternUnits="userSpaceOnUse">
                        <path d="M 40 0 L 0 0 0 40" fill="none" stroke="white" stroke-width="1" />
                    </pattern>
                </defs>
                <rect width="100%" height="100%" fill="url(#grid)" />
            </svg>
        </div>

        <div class="container-custom relative z-10 text-center">
            <p class="text-primary-400 font-medium tracking-widest uppercase mb-4 scroll-fade-up">Our Portfolio</p>
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-serif font-bold text-white mb-6 scroll-fade-up delay-100">
                Galeri Proyek</h1>
            <p
                class="text-lg md:text-xl text-slate-300 max-w-2xl mx-auto font-light leading-relaxed scroll-fade-up delay-200">
                Dokumentasi eksklusif dari berbagai event spesial yang telah kami tangani dengan dedikasi dan
                profesionalisme.
            </p>
        </div>
    </section>

    <section class="py-20 bg-ivory">
        <div class="container-custom">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($galleries as $index => $gallery)
                    <a href="{{ route('galleries.show', $gallery->slug) }}"
                        class="group relative block aspect-[4/3] rounded-2xl overflow-hidden shadow-md hover:shadow-2xl transition-all duration-500 scroll-fade-up delay-{{ ($index % 3) * 100 }}">
                        {{-- Image --}}
                        <div class="absolute inset-0 bg-slate-200">
                            @if($gallery->cover_image)
                                <img src="{{ Storage::url($gallery->cover_image) }}" alt="{{ $gallery->event_name }}"
                                    class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-1000 ease-out">
                            @else
                                <div class="w-full h-full flex items-center justify-center bg-slate-200">
                                    <svg class="w-12 h-12 text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                </div>
                            @endif
                        </div>

                        {{-- Overlay --}}
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-60 group-hover:opacity-90 transition-opacity duration-500">
                        </div>

                        {{-- Content --}}
                        <div
                            class="absolute inset-0 flex flex-col justify-end p-8 translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                            <div class="transform opacity-90 group-hover:opacity-100 transition-opacity duration-500">
                                <p class="text-xs font-bold tracking-widest text-primary-400 uppercase mb-2">
                                    {{ $gallery->event_date ? $gallery->event_date->format('F Y') : 'Event' }}
                                </p>
                                <h3 class="text-2xl font-serif font-bold text-white mb-2 leading-tight">
                                    {{ $gallery->event_name }}
                                </h3>
                                <p class="text-slate-300 text-sm flex items-center gap-2">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                    {{ $gallery->location }}
                                </p>
                            </div>

                            {{-- View Action --}}
                            <div
                                class="mt-6 opacity-0 group-hover:opacity-100 transition-opacity duration-500 delay-100 flex items-center text-white text-sm font-medium">
                                <span>Lihat Galeri</span>
                                <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                </svg>
                            </div>
                        </div>
                    </a>
                @empty
                    <div class="col-span-full flex flex-col items-center justify-center py-20 text-slate-500">
                        <svg class="w-16 h-16 mb-4 text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        <p class="text-lg font-light">Belum ada galeri proyek saat ini.</p>
                    </div>
                @endforelse
            </div>

            {{-- Pagination --}}
            <div class="mt-16">
                {{ $galleries->links() }}
            </div>
        </div>
    </section>
@endsection