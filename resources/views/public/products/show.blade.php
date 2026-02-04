@extends('layouts.app')

@section('meta_title', $product->meta_title ?? $product->name . ' - Sewa ' . $product->category->name)
@section('meta_description', $product->meta_description ?? $product->short_description)

@push('schema')
    @include('components.schema.product', ['product' => $product])
    @include('components.schema.breadcrumb', ['items' => [
        ['name' => 'Katalog', 'url' => route('products.index')],
        ['name' => $product->category->name, 'url' => route('products.category', $product->category->slug)],
        ['name' => $product->name, 'url' => route('products.show', $product->slug)]
    ]])
@endpush

@section('content')
    {{-- Breadcrumb --}}
    <div class="bg-slate-50 py-4 border-b">
        <div class="container-custom">
            <nav class="text-sm text-slate-500">
                <a href="{{ route('home') }}" class="hover:text-primary-600">Beranda</a>
                <span class="mx-2">/</span>
                <a href="{{ route('products.index') }}" class="hover:text-primary-600">Katalog</a>
                <span class="mx-2">/</span>
                <a href="{{ route('products.category', $product->category->slug) }}"
                    class="hover:text-primary-600">{{ $product->category->name }}</a>
                <span class="mx-2">/</span>
                <span class="text-slate-900">{{ $product->name }}</span>
            </nav>
        </div>
    </div>

    <section class="py-12">
        <div class="container-custom">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                {{-- Product Image --}}
                <div x-data="{ activeImage: 0 }">
                    @if($product->images && is_array($product->images) && count($product->images) > 0)
                        {{-- Main Image --}}
                        <div class="aspect-square bg-slate-100 rounded-lg overflow-hidden mb-4">
                            @foreach($product->images as $index => $image)
                                <img 
                                    x-show="activeImage === {{ $index }}"
                                    x-transition:enter="transition ease-out duration-300"
                                    x-transition:enter-start="opacity-0"
                                    x-transition:enter-end="opacity-100"
                                    src="{{ asset('storage/' . $image) }}" 
                                    alt="{{ $product->name }} - Gambar {{ $index + 1 }}"
                                    class="w-full h-full object-cover"
                                    loading="lazy"
                                >
                            @endforeach
                        </div>
                        
                        {{-- Thumbnail Gallery --}}
                        @if(count($product->images) > 1)
                            <div class="grid grid-cols-5 gap-2">
                                @foreach($product->images as $index => $image)
                                    <button 
                                        @click="activeImage = {{ $index }}"
                                        :class="{ 'ring-2 ring-primary-500': activeImage === {{ $index }} }"
                                        class="aspect-square rounded-lg overflow-hidden bg-slate-100 focus:outline-none"
                                    >
                                        <img 
                                            src="{{ asset('storage/' . $image) }}" 
                                            alt="{{ $product->name }} thumbnail {{ $index + 1 }}"
                                            class="w-full h-full object-cover"
                                            loading="lazy"
                                        >
                                    </button>
                                @endforeach
                            </div>
                        @endif
                    @else
                        {{-- Placeholder when no images --}}
                        <div class="aspect-square bg-slate-100 rounded-lg overflow-hidden">
                            <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-primary-100 to-primary-200">
                                <svg class="w-24 h-24 text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            </div>
                        </div>
                    @endif
                </div>
                </div>

                {{-- Product Info --}}
                <div>
                    <span class="text-sm font-medium text-primary-600 uppercase">{{ $product->category->name }}</span>
                    <h1 class="mt-2 text-3xl font-bold text-slate-900">{{ $product->name }}</h1>
                    <p class="mt-4 text-slate-600">{{ $product->short_description }}</p>

                    <div class="mt-6 p-4 bg-primary-50 rounded-lg">
                        <span class="text-sm text-slate-600">Harga Sewa</span>
                        <p class="text-3xl font-bold text-primary-600">{{ $product->formatted_price }}</p>
                    </div>

                    <div class="mt-6 flex flex-col sm:flex-row gap-4">
                        <a href="https://wa.me/6281295518897" {{ urlencode($product->name) }}"
                            target="_blank" class="btn btn-whatsapp flex-1 justify-center">
                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z" />
                            </svg>
                            Sewa Sekarang
                        </a>
                        <a href="{{ route('contact') }}" class="btn btn-secondary flex-1 justify-center">Konsultasi</a>
                    </div>

                    @if($product->specifications)
                        @if(is_array($product->specifications) && count($product->specifications) > 0)
                            <div class="mt-8">
                                <h3 class="font-semibold text-slate-900 mb-3">Spesifikasi</h3>
                                <div class="border rounded-lg overflow-hidden">
                                    <table class="w-full text-sm">
                                        @foreach($product->specifications as $key => $value)
                                            @if(is_string($key) && is_string($value))
                                                <tr class="border-b last:border-b-0">
                                                    <td class="px-4 py-2 bg-slate-50 font-medium text-slate-700 w-1/3">{{ $key }}</td>
                                                    <td class="px-4 py-2 text-slate-600">{{ $value }}</td>
                                                </tr>
                                            @endif
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        @elseif(is_string($product->specifications))
                            <div class="mt-8">
                                <h3 class="font-semibold text-slate-900 mb-3">Spesifikasi</h3>
                                <div class="prose prose-sm text-slate-600">
                                    {!! nl2br(e($product->specifications)) !!}
                                </div>
                            </div>
                        @endif
                    @endif
                </div>
            </div>
        </div>
    </section>

    {{-- Description Section --}}
    @if($product->description)
        <section class="py-8">
            <div class="container-custom">
                <h2 class="text-2xl font-bold text-slate-900 mb-4">Deskripsi Produk</h2>
                <div class="prose max-w-none text-slate-600">
                    {!! $product->description !!}
                </div>
            </div>
        </section>
    @endif

    {{-- FAQ Section --}}
    @if($product->faqs && $product->faqs->count() > 0)
        <section class="py-8 bg-slate-50">
            <div class="container-custom">
                <h2 class="text-2xl font-bold text-slate-900 mb-4">FAQ</h2>
                <div class="space-y-4 max-w-3xl">
                    @foreach($product->faqs as $faq)
                        <div class="card p-4 bg-white" x-data="{ open: false }">
                            <button @click="open = !open" class="w-full flex justify-between items-center text-left">
                                <span class="font-medium text-slate-900">{{ $faq->question }}</span>
                                <svg class="w-5 h-5 text-slate-400 transform transition-transform"
                                    :class="{ 'rotate-180': open }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div x-show="open" x-collapse class="mt-3 text-slate-600">
                                {{ $faq->answer }}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    {{-- Related Products - Full Width Section --}}
    @if($relatedProducts->count() > 0)
        <section class="py-12 bg-slate-50">
            <div class="container-custom">
                <h2 class="text-2xl font-bold text-slate-900 mb-6">Produk Terkait</h2>
                <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-4 lg:gap-6">
                    @foreach($relatedProducts as $related)
                        <a href="{{ route('products.show', $related->slug) }}" class="card group flex flex-col h-full bg-white">
                            <div class="aspect-[4/3] bg-slate-100 rounded-t-lg overflow-hidden">
                                @if($related->images && is_array($related->images) && count($related->images) > 0)
                                    <img 
                                        src="{{ asset('storage/' . $related->images[0]) }}" 
                                        alt="{{ $related->name }}"
                                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                                        loading="lazy"
                                    >
                                @else
                                    <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-primary-100 to-primary-200">
                                        <svg class="w-10 h-10 text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                    </div>
                                @endif
                            </div>
                            <div class="p-4 flex-grow flex flex-col">
                                <h3 class="font-semibold text-slate-900 group-hover:text-primary-600 transition-colors line-clamp-2">
                                    {{ $related->name }}
                                </h3>
                                <p class="mt-auto pt-2 font-bold text-primary-600">{{ $related->formatted_price }}</p>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
@endsection