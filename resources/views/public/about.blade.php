@extends('layouts.app')

@section('meta_title', 'Tentang Kami - EventRental')
@section('meta_description', 'Mengenal lebih dekat EventRental, partner terpercaya untuk semua kebutuhan sewa perlengkapan event Anda.')

@section('content')
    {{-- Page Header --}}
    <section class="bg-gradient-to-r from-primary-600 to-primary-700 py-12 section-anchor" id="about-intro">
        <div class="container-custom">
            <h1 class="text-3xl md:text-4xl font-bold text-white mb-2">Tentang Kami</h1>
            <p class="text-primary-100">Partner terpercaya untuk event Anda</p>
        </div>
    </section>

    {{-- About Content --}}
    <section class="py-16">
        <div class="container-custom">
            <div class="max-w-4xl mx-auto">
                <div class="prose prose-lg max-w-none">
                    <h2>Selamat Datang di EventRental</h2>
                    <p>
                        EventRental adalah perusahaan penyedia jasa sewa perlengkapan event profesional yang telah
                        berpengalaman
                        melayani berbagai jenis acara mulai dari pernikahan, pameran, seminar, hingga corporate event.
                    </p>
                    <p>
                        Dengan komitmen untuk selalu memberikan kualitas terbaik dan layanan prima, kami hadir sebagai
                        solusi
                        lengkap untuk kebutuhan event Anda. Tim kami yang berpengalaman siap membantu dari tahap perencanaan
                        hingga pelaksanaan acara.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Vision Mission --}}
    <section class="py-16 bg-slate-50">
        <div class="container-custom">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 max-w-4xl mx-auto">
                <div>
                    <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mb-4">
                        <svg class="w-8 h-8 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Visi</h3>
                    <p class="text-slate-600">
                        Menjadi penyedia jasa sewa perlengkapan event terdepan dan terpercaya dengan mengutamakan kualitas,
                        inovasi, dan kepuasan pelanggan.
                    </p>
                </div>
                <div>
                    <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mb-4">
                        <svg class="w-8 h-8 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Misi</h3>
                    <ul class="text-slate-600 space-y-2">
                        <li>• Menyediakan perlengkapan event berkualitas tinggi</li>
                        <li>• Memberikan pelayanan profesional dan responsif</li>
                        <li>• Menawarkan harga kompetitif dengan nilai terbaik</li>
                        <li>• Terus berinovasi mengikuti tren event terkini</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    {{-- Stats --}}
    <section class="py-16">
        <div class="container-custom">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 max-w-4xl mx-auto text-center">
                <div>
                    <p class="text-4xl font-bold text-primary-600">500+</p>
                    <p class="text-slate-600">Event Ditangani</p>
                </div>
                <div>
                    <p class="text-4xl font-bold text-primary-600">10+</p>
                    <p class="text-slate-600">Tahun Pengalaman</p>
                </div>
                <div>
                    <p class="text-4xl font-bold text-primary-600">1000+</p>
                    <p class="text-slate-600">Klien Puas</p>
                </div>
                <div>
                    <p class="text-4xl font-bold text-primary-600">50+</p>
                    <p class="text-slate-600">Jenis Produk</p>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section class="py-16 bg-primary-600">
        <div class="container-custom text-center">
            <h2 class="text-3xl font-bold text-white mb-4">Mulai Wujudkan Event Anda</h2>
            <p class="text-primary-100 mb-8 max-w-2xl mx-auto">Hubungi kami sekarang untuk konsultasi gratis dan penawaran
                terbaik</p>
            <a href="https://wa.me/6281295518897" target="_blank" class="btn btn-whatsapp text-lg px-8 py-4">
                Hubungi via WhatsApp
            </a>
        </div>
    </section>
@endsection