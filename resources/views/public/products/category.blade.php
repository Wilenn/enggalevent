@extends('layouts.app')

@section('meta_title', $category->meta_title ?? 'Sewa ' . $category->name . ' - Perlengkapan Event')
@section('meta_description', $category->meta_description ?? 'Sewa ' . $category->name . ' berkualitas untuk acara Anda. Harga terjangkau, kualitas terjamin.')

@section('content')
    {{-- Page Header --}}
    <section class="relative bg-slate-900 py-20 lg:py-28 overflow-hidden section-anchor">
        <div class="absolute inset-0">
            <img src="{{ asset('images/approach.jpeg') }}" alt="Category Background" class="w-full h-full object-cover opacity-30">
            <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/50 to-transparent"></div>
        </div>
        <div class="container-custom relative z-10 text-center">
            <p class="text-primary-400 font-medium tracking-widest uppercase mb-4 scroll-fade-up">Kategori Produk</p>
            <h1 class="text-4xl md:text-5xl md:leading-tight font-serif font-bold text-white mb-4 scroll-fade-up delay-100">{{ $category->name }}</h1>
            <p class="text-lg text-slate-300 max-w-2xl mx-auto font-light scroll-fade-up delay-200">
                {{ $category->description ?? 'Temukan pilihan ' . strtolower($category->name) . ' terbaik untuk event Anda' }}
            </p>
        </div>
    </section>

    <section class="py-16 bg-white">
        <div class="container-custom">
            <div class="flex flex-col lg:flex-row gap-12">
                {{-- Sidebar Categories --}}
                <aside class="lg:w-64 flex-shrink-0 scroll-fade-up delay-300">
                    <div class="sticky top-24">
                        <h3 class="font-serif text-xl font-bold text-slate-900 mb-6 pb-4 border-b border-slate-200">Kategori</h3>
                        <ul class="space-y-3">
                            <li>
                                <a href="{{ route('products.index') }}"
                                    class="group flex items-center justify-between text-sm transition-colors text-slate-600 hover:text-primary-600">
                                    <span>Semua Produk</span>
                                    <span class="opacity-0 group-hover:opacity-100 transition-opacity">→</span>
                                </a>
                            </li>
                            @foreach($categories as $cat)
                                <li>
                                    <a href="{{ route('products.category', $cat->slug) }}"
                                        class="group flex items-center justify-between text-sm transition-colors {{ $cat->id === $category->id ? 'text-primary-600 font-medium' : 'text-slate-600 hover:text-primary-600' }}">
                                        <span>{{ $cat->name }}</span>
                                        <span class="text-xs {{ $cat->id === $category->id ? 'text-white bg-primary-600' : 'text-slate-400 bg-slate-100 group-hover:text-primary-400 group-hover:bg-primary-50' }} px-2 py-0.5 rounded-full transition-colors">{{ $cat->active_products_count ?? 0 }}</span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </aside>

                {{-- Products Grid --}}
                <div class="flex-1">
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-x-8 gap-y-12">
                        @forelse($products as $index => $product)
                            <div class="group scroll-fade-up delay-{{ ($index % 3) * 100 }}">
                                {{-- Image Container --}}
                                <div class="relative aspect-[4/5] bg-slate-100 rounded-2xl overflow-hidden mb-6 shadow-sm group-hover:shadow-xl transition-all duration-500">
                                    <a href="{{ route('products.show', $product->slug) }}" class="block w-full h-full">
                                        @if($product->images && count($product->images) > 0)
                                            <img src="{{ Storage::url($product->images[0]) }}" 
                                                 alt="{{ $product->name }}" 
                                                 class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700 ease-in-out">
                                        @else
                                            <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-slate-100 to-slate-200">
                                                <svg class="w-12 h-12 text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                                </svg>
                                            </div>
                                        @endif
                                        
                                        {{-- Overlay Action --}}
                                        <div class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                                            <span class="bg-white/90 backdrop-blur-sm text-slate-900 px-6 py-2 rounded-full text-sm font-medium transform translate-y-4 group-hover:translate-y-0 transition-all duration-300">
                                                View Details
                                            </span>
                                        </div>
                                    </a>
                                </div>

                                {{-- Content --}}
                                <div class="text-center sm:text-left">
                                    <div class="flex items-center justify-center sm:justify-start gap-2 mb-2">
                                        <span class="h-px w-6 bg-primary-600 hidden sm:block"></span>
                                        <span class="text-xs font-bold tracking-widest text-primary-600 uppercase">{{ $product->category->name }}</span>
                                    </div>
                                    <h3 class="text-xl font-serif font-medium text-slate-900 mb-2 group-hover:text-primary-600 transition-colors">
                                        <a href="{{ route('products.show', $product->slug) }}">{{ $product->name }}</a>
                                    </h3>
                                    <p class="text-sm text-slate-500 font-light line-clamp-2 leading-relaxed">
                                        {{ $product->short_description }}
                                    </p>
                                </div>
                            </div>
                        @empty
                            <div class="col-span-full flex flex-col items-center justify-center py-20 text-slate-400">
                                <svg class="w-16 h-16 mb-4 text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                                </svg>
                                <p class="text-lg font-light">Belum ada produk dalam kategori ini.</p>
                                <a href="{{ route('products.index') }}" class="mt-4 text-primary-600 hover:text-primary-700 font-medium">Lihat Semua Produk</a>
                            </div>
                        @endforelse
                    </div>

                    {{-- Pagination --}}
                    <div class="mt-16">
                        {{ $products->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
