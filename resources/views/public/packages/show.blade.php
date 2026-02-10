@extends('layouts.app')

@section('meta_title', $package->meta_title ?? $package->name . ' - Paket Event')
@section('meta_description', $package->meta_description ?? $package->description)

@section('content')
    {{-- Breadcrumb --}}
    <div class="bg-slate-50 py-4 border-b">
        <div class="container-custom">
            <nav class="text-sm text-slate-500">
                <a href="{{ route('home') }}" class="hover:text-primary-600">Beranda</a>
                <span class="mx-2">/</span>
                <a href="{{ route('packages.index') }}" class="hover:text-primary-600">Paket Event</a>
                <span class="mx-2">/</span>
                <span class="text-slate-900">{{ $package->name }}</span>
            </nav>
        </div>
    </div>

    <section class="py-12">
        <div class="container-custom">
            <div class="max-w-4xl mx-auto">
                <h1 class="text-3xl md:text-4xl font-bold text-slate-900">{{ $package->name }}</h1>
                <p class="mt-4 text-lg text-slate-600">{{ $package->description }}</p>



                @if($package->products && $package->products->count() > 0)
                    <div class="mt-8">
                        <h2 class="text-xl font-bold text-slate-900 mb-4">Isi Paket</h2>
                        <div class="card">
                            <ul class="divide-y divide-slate-100">
                                @foreach($package->products as $item)
                                    <li class="p-4 flex justify-between items-center">
                                        <span class="text-slate-900">{{ $item->name }}</span>
                                        <span class="text-slate-500">{{ $item->pivot->quantity ?? 1 }} unit</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endif

                <div class="mt-8 flex flex-col sm:flex-row gap-4">
                    <a href="https://wa.me/6281234567890?text=Halo,%20saya%20ingin%20memesan%20{{ urlencode($package->name) }}"
                        target="_blank" class="btn btn-whatsapp flex-1 justify-center text-lg py-4">
                        <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z" />
                        </svg>
                        Pesan Paket Ini
                    </a>
                    <a href="{{ route('packages.index') }}"
                        class="btn btn-secondary flex-1 justify-center text-lg py-4">Lihat Paket Lain</a>
                </div>
            </div>
        </div>
    </section>
@endsection