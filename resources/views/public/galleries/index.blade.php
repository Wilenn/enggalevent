@extends('layouts.app')

@section('meta_title', 'Galeri Proyek - Portfolio Event')
@section('meta_description', 'Lihat portfolio dan galeri proyek event yang telah kami kerjakan. Pernikahan, pameran, seminar, dan corporate event.')

@section('content')
    {{-- Page Header --}}
    <section class="bg-gradient-to-r from-primary-600 to-primary-700 py-12 section-anchor" id="gallery-intro">
        <div class="container-custom">
            <h1 class="text-3xl md:text-4xl font-bold text-white mb-2">Galeri Proyek</h1>
            <p class="text-primary-100">Portfolio event yang telah kami tangani</p>
        </div>
    </section>

    <section class="py-12 bg-slate-50">
        <div class="container-custom">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @forelse($galleries as $gallery)
                    <a href="{{ route('galleries.show', $gallery->slug) }}" class="card group overflow-hidden">
                        <div
                            class="aspect-video bg-gradient-to-br from-primary-100 to-primary-200 flex items-center justify-center">
                            <svg class="w-12 h-12 text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <div class="p-4">
                            <h3 class="font-semibold text-slate-900 group-hover:text-primary-600">{{ $gallery->event_name }}
                            </h3>
                            <p class="mt-1 text-sm text-slate-500">{{ $gallery->location }}</p>
                            <p class="text-sm text-slate-400">
                                {{ $gallery->event_date ? $gallery->event_date->format('d M Y') : '' }}</p>
                        </div>
                    </a>
                @empty
                    <div class="col-span-full text-center py-12 text-slate-500">
                        Belum ada galeri tersedia
                    </div>
                @endforelse
            </div>

            {{-- Pagination --}}
            <div class="mt-8">
                {{ $galleries->links() }}
            </div>
        </div>
    </section>
@endsection