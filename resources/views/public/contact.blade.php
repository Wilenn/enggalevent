@extends('layouts.app')

@section('meta_title', 'Hubungi Kami - Sewa Perlengkapan Event')
@section('meta_description', 'Hubungi kami untuk konsultasi dan pemesanan sewa perlengkapan event. WhatsApp, telepon, email, atau kunjungi kantor kami.')

@section('content')
    {{-- Page Header --}}
    <section class="bg-gradient-to-r from-primary-600 to-primary-700 py-12 section-anchor">
        <div class="container-custom">
            <h1 class="text-3xl md:text-4xl font-bold text-white mb-2">Hubungi Kami</h1>
            <p class="text-primary-100">Kami siap membantu kebutuhan event Anda</p>
        </div>
    </section>

    <section class="py-12">
        <div class="container-custom">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                {{-- Contact Info --}}
                <div>
                    <h2 class="text-2xl font-bold text-slate-900 mb-6">Informasi Kontak</h2>
                    <div class="space-y-6">
                        <div class="flex gap-4">
                            <div
                                class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-slate-900">Alamat</h3>
                                <p class="text-slate-600">Jalan Ceger Raya No.8 Jurang Mangu Timur,<br>Pd. Karya, Kec. Pd.
                                    Aren, Kota Tangerang Selatan, Banten 15222
                                </p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div
                                class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-slate-900">Telepon</h3>
                                <p class="text-slate-600">
                                    <a href="tel:+6281234567890" class="hover:text-primary-600">+62 812-9551-8897</a>
                                </p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div
                                class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-slate-900">Email</h3>
                                <p class="text-slate-600">
                                    <a href="mailto:enggaljaya.event@gmail.com"
                                        class="hover:text-primary-600">enggaljayaevent@gmail.com</a>
                                </p>
                            </div>
                        </div>
                        <!-- <div class="flex gap-4">
                                        <div
                                            class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center flex-shrink-0">
                                            <svg class="w-6 h-6 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold text-slate-900">Jam Operasional</h3>
                                            <p class="text-slate-600">Senin - Sabtu: 08.00 - 17.00 WIB<br>Minggu: Tutup</p>
                                        </div>
                                    </div> -->
                    </div>

                    {{-- WhatsApp CTA --}}
                    <div class="mt-8 p-6 bg-green-50 rounded-lg">
                        <h3 class="font-semibold text-slate-900 mb-2">Hubungi via WhatsApp</h3>
                        <p class="text-slate-600 mb-4">Respon cepat dalam hitungan menit!</p>
                        <a href="https://wa.me/6281295518897" target="_blank" class="btn btn-whatsapp">
                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z" />
                            </svg>
                            Chat Sekarang
                        </a>
                    </div>
                </div>

                {{-- Google Maps --}}
                <div>
                    <h2 class="text-2xl font-bold text-slate-900 mb-6">Lokasi Kami</h2>
                    <div class="rounded-lg overflow-hidden shadow-lg">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.008395494647!2d106.73282679678955!3d-6.2626234!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4d8ef5e5a7b5d601%3A0x1549f81355438100!2sEnggal%20Jaya%20Event!5e0!3m2!1sen!2sid!4v1769969713261!5m2!1sen!2sid"
                            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade" class="w-full">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection