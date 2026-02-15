<footer class="bg-slate-900 text-slate-300">
    {{-- Main Footer --}}
    <div class="container-custom py-12 lg:py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            {{-- Company Info --}}
            <div class="lg:col-span-1">
                <a href="{{ route('home') }}" class="flex items-center gap-2 mb-4">
                    <span class="text-xl font-bold text-white">EnggalJayaEvent</span>
                </a>
                <p class="text-slate-400 mb-4">
                    Partner terpercaya untuk semua kebutuhan perlengkapan event Anda. Melayani dengan profesional dan
                    harga terjangkau.
                </p>
                <div class="flex gap-4">
                    <a href="https://www.instagram.com/enggaljaya.event"
                        class="text-slate-400 hover:text-white transition-colors">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                        </svg>
                    </a>
                </div>
            </div>

            {{-- Quick Links --}}
            <div>
                <h4 class="text-white font-semibold mb-4">Layanan</h4>
                <ul class="space-y-2">
                    <li><a href="{{ route('products.index') }}"
                            class="text-slate-400 hover:text-white transition-colors">Katalog Produk</a></li>

                    <li><a href="{{ route('galleries.index') }}"
                            class="text-slate-400 hover:text-white transition-colors">Galeri Proyek</a></li>
                    <li><a href="{{ route('articles.index') }}"
                            class="text-slate-400 hover:text-white transition-colors">Artikel & Tips</a></li>
                </ul>
            </div>

            {{-- Company --}}
            <div>
                <h4 class="text-white font-semibold mb-4">Perusahaan</h4>
                <ul class="space-y-2">
                    <li><a href="{{ route('about') }}" class="text-slate-400 hover:text-white transition-colors">Tentang
                            Kami</a></li>
                    <li><a href="{{ route('contact') }}"
                            class="text-slate-400 hover:text-white transition-colors">Kontak</a></li>
                    <li><a href="#" class="text-slate-400 hover:text-white transition-colors">Syarat & Ketentuan</a>
                    </li>
                    <li><a href="#" class="text-slate-400 hover:text-white transition-colors">Kebijakan Privasi</a></li>
                </ul>
            </div>

            {{-- Contact Info --}}
            <div>
                <h4 class="text-white font-semibold mb-4">Hubungi Kami</h4>
                <ul class="space-y-3">
                    <li class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-primary-500 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <span class="text-slate-400">Jalan Ceger Raya No.8 Jurang Mangu Timur, Pd. Karya, Kec. Pd.
                            Aren, Kota Tangerang Selatan, Banten 15222</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-primary-500 flex-shrink-0" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                        <a href="tel:+6281234567890" class="text-slate-400 hover:text-white transition-colors">+62
                            812-9551-8897</a>
                    </li>
                    <li class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-primary-500 flex-shrink-0" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        <a href="mailto:enggaljaya.event@gmail.com"
                            class="text-slate-400 hover:text-white transition-colors">enggaljaya.event@gmail.com</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    {{-- Bottom Bar --}}
    <div class="border-t border-slate-800">
        <div class="container-custom py-6">
            <div class="flex flex-col md:flex-row items-center justify-between gap-4">
                <p class="text-slate-400 text-sm">
                    &copy; {{ date('Y') }} EnggalJayaEvent. All rights reserved.
                </p>
                <p class="text-slate-500 text-sm">
                    Partner terpercaya untuk kebutuhan event Anda
                </p>
            </div>
        </div>
    </div>
</footer>