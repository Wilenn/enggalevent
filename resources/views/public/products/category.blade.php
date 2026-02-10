@extends('layouts.app')

@section('meta_title', $category->meta_title ?? 'Sewa ' . $category->name . ' - Perlengkapan Event')
@section('meta_description', $category->meta_description ?? 'Sewa ' . $category->name . ' berkualitas untuk acara Anda. Harga terjangkau, kualitas terjamin.')

@section('content')
    {{-- Page Header --}}
    <section class="bg-gradient-to-r from-primary-600 to-primary-700 py-12">
        <div class="container-custom">
            <h1 class="text-3xl md:text-4xl font-bold text-white mb-2">{{ $category->name }}</h1>
            <p class="text-primary-100">
                {{ $category->description ?? 'Temukan pilihan ' . strtolower($category->name) . ' terbaik untuk event Anda' }}
            </p>
        </div>
    </section>

    <section class="py-12 bg-slate-50">
        <div class="container-custom">
            <div class="flex flex-col lg:flex-row gap-8">
                {{-- Sidebar Categories --}}
                <aside class="lg:w-64 flex-shrink-0">
                    <div class="card p-4">
                        <h3 class="font-semibold text-slate-900 mb-4">Kategori</h3>
                        <ul class="space-y-2">
                            <li>
                                <a href="{{ route('products.index') }}" class="text-slate-600 hover:text-primary-600">Semua
                                    Produk</a>
                            </li>
                            @foreach($categories as $cat)
                                <li>
                                    <a href="{{ route('products.category', $cat->slug) }}"
                                        class="text-slate-600 hover:text-primary-600 flex justify-between {{ $cat->id === $category->id ? 'text-primary-600 font-medium' : '' }}">
                                        <span>{{ $cat->name }}</span>
                                        <span class="text-slate-400">({{ $cat->active_products_count ?? 0 }})</span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </aside>

                {{-- Products Grid --}}
                <div class="flex-1">
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                        @forelse($products as $product)
                            <div class="card group">
                                <div class="aspect-[4/3] bg-slate-100 relative overflow-hidden group-hover:opacity-90 transition-opacity">
                                    @if($product->images && count($product->images) > 0)
                                        <img src="{{ Storage::url($product->images[0]) }}" 
                                             alt="{{ $product->name }}" 
                                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                    @else
                                        <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-primary-100 to-primary-200">
                                            <svg class="w-12 h-12 text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                            </svg>
                                        </div>
                                    @endif
                                </div>
                                <div class="p-4">
                                    <h3 class="font-semibold text-slate-900 group-hover:text-primary-600">
                                        <a href="{{ route('products.show', $product->slug) }}">{{ $product->name }}</a>
                                    </h3>
                                    <p class="mt-1 text-sm text-slate-600 line-clamp-2">{{ $product->short_description }}</p>
                                    <div class="mt-3 flex items-center justify-end">
                                        <a href="{{ route('products.show', $product->slug) }}"
                                            class="text-sm text-primary-600">Detail →</a>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="col-span-full text-center py-12 text-slate-500">
                                Belum ada produk dalam kategori ini
                            </div>
                        @endforelse
                    </div>

                    {{-- Pagination --}}
                    <div class="mt-8">
                        {{ $products->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection