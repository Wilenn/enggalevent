@extends('layouts.app')

@section('meta_title', 'Tentang Kami - EventRental | Partner Event Terpercaya')
@section('meta_description', 'Mengenal lebih dekat EventRental, penyedia jasa sewa perlengkapan event profesional dengan pengalaman lebih dari 10 tahun.')

@section('content')
    {{-- Hero Section --}}
    <section class="relative py-20 lg:py-32 bg-slate-900 overflow-hidden section-anchor" id="about-intro">
        <div class="absolute inset-0 opacity-40">
            {{-- Placeholder for actual hero image --}}
            <img src="https://images.unsplash.com/photo-1519167758481-83f550bb49b3?ixlib=rb-4.0.3&auto=format&fit=crop&w=2098&q=80"
                alt="Event Background" class="w-full h-full object-cover">
        </div>
        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/60 to-transparent"></div>

        <div class="container-custom relative z-10 text-center">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6 leading-tight" data-aos="fade-up">
                Mewujudkan Event Impian <br><span class="text-primary-400">Menjadi Kenyataan</span>
            </h1>
            <p class="text-lg md:text-xl text-slate-300 max-w-2xl mx-auto mb-10" data-aos="fade-up" data-aos-delay="100">
                Partner terpercaya untuk segala kebutuhan perlengkapan acara Anda. Dari pernikahan intim hingga festival
                skala besar.
            </p>
        </div>
    </section>

    {{-- Story & Visi Misi --}}
    <section class="py-20 bg-white">
        <div class="container-custom">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div data-aos="fade-right">
                    <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-6">Cerita Kami</h2>
                    <div class="prose prose-lg text-slate-600">
                        <p class="mb-4">
                            Berawal dari sebuah garasi kecil pada tahun 2015, EventRental tumbuh dengan satu visi sederhana:
                            memudahkan setiap orang membuat acara yang berkesan tanpa pusing memikirkan logistik.
                        </p>
                        <p>
                            Kini, dengan lebih dari 10 tahun pengalaman, kami telah dipercaya menangani ribuan event
                            di seluruh wilayah. Kami percaya bahwa setiap detail penting, dan itulah mengapa kami
                            selalu memastikan setiap kursi, tenda, dan dekorasi yang kami sewakan dalam kondisi prima.
                        </p>
                    </div>

                    <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div class="bg-slate-50 p-6 rounded-xl border border-slate-100 hover:shadow-md transition-shadow">
                            <h3 class="text-xl font-bold text-primary-600 mb-2">Visi</h3>
                            <p class="text-slate-600 text-sm">Menjadi one-stop solution kebutuhan event nomor 1 yang dikenal
                                karena kualitas dan keandalan.</p>
                        </div>
                        <div class="bg-slate-50 p-6 rounded-xl border border-slate-100 hover:shadow-md transition-shadow">
                            <h3 class="text-xl font-bold text-primary-600 mb-2">Misi</h3>
                            <p class="text-slate-600 text-sm">Memberikan layanan prima, produk berkualitas, dan solusi
                                inovatif untuk kesuksesan setiap acara klien kami.</p>
                        </div>
                    </div>
                </div>
                <div class="relative" data-aos="fade-left">
                    <div class="aspect-square rounded-2xl overflow-hidden shadow-2xl relative z-10">
                        <img src="https://images.unsplash.com/photo-1511795409834-ef04bbd61622?ixlib=rb-4.0.3&auto=format&fit=crop&w=1169&q=80"
                            alt="Our Team" class="w-full h-full object-cover">
                    </div>
                    {{-- Decorative elements --}}
                    <div class="absolute -bottom-6 -right-6 w-48 h-48 bg-primary-100 rounded-full blur-3xl -z-10"></div>
                    <div class="absolute -top-6 -left-6 w-48 h-48 bg-secondary-100 rounded-full blur-3xl -z-10"></div>
                </div>
            </div>
        </div>
    </section>

    {{-- Stats --}}
    <section class="py-16 bg-primary-700 text-white relative overflow-hidden">
        <svg class="absolute top-0 left-0 w-full h-full opacity-10" viewBox="0 0 100 100" preserveAspectRatio="none">
            <path d="M0 100 C 20 0 50 0 100 100 Z" fill="white" />
        </svg>
        <div class="container-custom relative z-10">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center divide-x divide-white/20">
                <div class="p-4">
                    <div class="text-4xl md:text-5xl font-bold mb-2">500+</div>
                    <div class="text-primary-200 text-sm uppercase tracking-wider">Event Sukses</div>
                </div>
                <div class="p-4">
                    <div class="text-4xl md:text-5xl font-bold mb-2">10+</div>
                    <div class="text-primary-200 text-sm uppercase tracking-wider">Tahun Pengalaman</div>
                </div>
                <div class="p-4">
                    <div class="text-4xl md:text-5xl font-bold mb-2">1k+</div>
                    <div class="text-primary-200 text-sm uppercase tracking-wider">Klien Bahagia</div>
                </div>
                <div class="p-4">
                    <div class="text-4xl md:text-5xl font-bold mb-2">100%</div>
                    <div class="text-primary-200 text-sm uppercase tracking-wider">Dedikasi</div>
                </div>
            </div>
        </div>
    </section>

    {{-- Why Choose Us --}}
    <section class="py-20 bg-slate-50">
        <div class="container-custom">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-4">Mengapa Memilih Kami?</h2>
                <p class="text-slate-600">Kami mengerti betapa pentingnya acara Anda. Itulah mengapa kami tidak membiarkan
                    ada ruang untuk kesalahan.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Card 1 -->
                <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 group">
                    <div
                        class="w-14 h-14 bg-primary-100 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-7 h-7 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Kualitas Terjamin</h3>
                    <p class="text-slate-600">Peralatan kami selalu dibersihkan dan dirawat secara rutin. Apa yang Anda
                        lihat di foto adalah apa yang Anda dapatkan.</p>
                </div>

                <!-- Card 2 -->
                <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 group">
                    <div
                        class="w-14 h-14 bg-primary-100 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-7 h-7 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Tepat Waktu</h3>
                    <p class="text-slate-600">Kami menghargai waktu Anda. Tim logistik kami menjamin pengiriman dan
                        pemasangan sesuai jadwal yang disepakati.</p>
                </div>

                <!-- Card 3 -->
                <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 group">
                    <div
                        class="w-14 h-14 bg-primary-100 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-7 h-7 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Tim Profesional</h3>
                    <p class="text-slate-600">Didukung oleh kru yang terlatih, ramah, dan siap membantu teknis pemasangan di
                        lapangan dengan cekatan.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Testimonials --}}
    @if(isset($testimonials) && $testimonials->count() > 0)
        <section class="py-20 bg-white border-t border-slate-100">
            <div class="container-custom">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-4">Kata Mereka</h2>
                    <p class="text-slate-600">Apa kata klien yang telah mempercayakan event mereka kepada kami.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    @foreach($testimonials as $testimonial)
                        <div class="bg-slate-50 p-8 rounded-2xl border border-slate-100">
                            <div class="flex items-center gap-1 mb-4 text-yellow-400">
                                @for($i = 0; $i < 5; $i++)
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                @endfor
                            </div>
                            <p class="text-slate-700 italic mb-6">"{{ $testimonial->content }}"</p>
                            <div class="flex items-center gap-4">
                                @if($testimonial->image)
                                    <img src="{{ Storage::url($testimonial->image) }}" alt="{{ $testimonial->name }}"
                                        class="w-12 h-12 rounded-full object-cover">
                                @else
                                    <div
                                        class="w-12 h-12 rounded-full bg-primary-100 flex items-center justify-center text-primary-600 font-bold text-lg">
                                        {{ substr($testimonial->name, 0, 1) }}
                                    </div>
                                @endif
                                <div>
                                    <h4 class="font-bold text-slate-900">{{ $testimonial->name }}</h4>
                                    <p class="text-sm text-slate-500">{{ $testimonial->role ?? 'Client' }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    {{-- CTA --}}
    <section class="py-20 bg-primary-600 relative overflow-hidden">
        <div class="absolute inset-0 opacity-10 pattern-dots"></div>
        <div class="container-custom text-center relative z-10">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">Siap Membuat Event Luar Biasa?</h2>
            <p class="text-primary-100 mb-10 max-w-2xl mx-auto text-lg">
                Jangan ragu untuk berkonsultasi dengan tim kami. Kami siap membantu merencanakan kebutuhan perlengkapan
                acara Anda.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="https://wa.me/6281295518897" target="_blank"
                    class="btn bg-white text-primary-700 hover:bg-slate-100 text-lg px-8 py-4 shadow-lg transform hover:-translate-y-1 transition-all">
                    <span class="flex items-center gap-2">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z" />
                        </svg>
                        Chat WhatsApp
                    </span>
                </a>
                <a href="{{ route('products.index') }}"
                    class="btn border-2 border-primary-200 text-white hover:bg-primary-700 text-lg px-8 py-4">
                    Lihat Katalog
                </a>
            </div>
        </div>
    </section>
@endsection