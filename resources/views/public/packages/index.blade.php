@extends('layouts.app')

@section('meta_title', 'Paket Sewa Perlengkapan Event')
@section('meta_description', 'Paket lengkap sewa perlengkapan event dengan harga hemat. Paket pernikahan, seminar, pameran tersedia.')

@section('content')
    {{-- Page Header --}}
    <section class="bg-gradient-to-r from-primary-600 to-primary-700 py-12 section-anchor" id="packages-intro">
        <div class="container-custom">
            <h1 class="text-3xl md:text-4xl font-bold text-white mb-2">Paket Event</h1>
            <p class="text-primary-100">Solusi lengkap dengan harga lebih hemat</p>
        </div>
    </section>

    <section class="py-12 bg-slate-50">
        <div class="container-custom">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($packages as $package)
                    <div class="card flex flex-col">
                        <div
                            class="aspect-video bg-gradient-to-br from-primary-100 to-primary-200 flex items-center justify-center">
                            <svg class="w-16 h-16 text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
                            </svg>
                        </div>
                        <div class="p-6 flex flex-col flex-1">
                            <h3 class="text-xl font-bold text-slate-900">{{ $package->name }}</h3>
                            <p class="mt-2 text-slate-600 flex-1">{{ $package->description }}</p>
                            <div class="mt-4">
                                <span class="text-3xl font-bold text-primary-600">{{ $package->formatted_price }}</span>
                            </div>
                            <div class="mt-4 flex gap-2">
                                <a href="{{ route('packages.show', $package->slug) }}"
                                    class="btn btn-secondary flex-1 justify-center">Detail</a>
                                <a href="https://wa.me/6281234567890?text=Halo,%20saya%20tertarik%20dengan%20{{ urlencode($package->name) }}"
                                    target="_blank" class="btn btn-whatsapp flex-1 justify-center">Pesan</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-span-full text-center py-12 text-slate-500">
                        Belum ada paket tersedia
                    </div>
                @endforelse
            </div>

            {{-- Pagination --}}
            <div class="mt-8">
                {{ $packages->links() }}
            </div>
        </div>
    </section>
@endsection