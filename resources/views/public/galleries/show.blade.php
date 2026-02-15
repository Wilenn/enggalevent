@extends('layouts.app')

@section('meta_title', $gallery->event_name . ' - Galeri Proyek')
@section('meta_description', $gallery->description ?? 'Dokumentasi event ' . $gallery->event_name)

@section('content')
    {{-- Breadcrumb --}}
    <div class="bg-slate-50 py-4 border-b">
        <div class="container-custom">
            <nav class="text-sm text-slate-500">
                <a href="{{ route('home') }}" class="hover:text-primary-600">Beranda</a>
                <span class="mx-2">/</span>
                <a href="{{ route('galleries.index') }}" class="hover:text-primary-600">Galeri</a>
                <span class="mx-2">/</span>
                <span class="text-slate-900">{{ $gallery->event_name }}</span>
            </nav>
        </div>
    </div>

    <section class="py-12">
        <div class="container-custom">
            <div class="max-w-4xl mx-auto text-center mb-12">
                <h1 class="text-3xl md:text-4xl font-bold text-slate-900">{{ $gallery->event_name }}</h1>
                <p class="mt-2 text-slate-500">{{ $gallery->location }} •
                    {{ $gallery->event_date ? $gallery->event_date->format('d M Y') : '' }}
                </p>
                <p class="mt-4 text-slate-600">{{ $gallery->description }}</p>
            </div>

            {{-- Gallery Images --}}
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                @forelse($gallery->images as $image)
                    <div
                        class="aspect-square bg-slate-200 rounded-lg flex items-center justify-center overflow-hidden group relative">
                        @if($image->image_path)
                            <img src="{{ Storage::url($image->image_path) }}" alt="{{ $image->alt_text ?? $gallery->event_name }}"
                                class="w-full h-full object-cover hover:scale-110 transition-transform duration-500 cursor-pointer">
                        @else
                            <svg class="w-10 h-10 text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                        @endif
                    </div>
                @empty
                    <div class="col-span-full text-center py-12 text-slate-500">
                        Belum ada foto dalam galeri ini
                    </div>
                @endforelse
            </div>

            <div class="mt-12 text-center">
                <a href="{{ route('galleries.index') }}" class="btn btn-secondary">← Kembali ke Galeri</a>
            </div>
        </div>
    </section>
@endsection