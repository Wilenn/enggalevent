<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Core Web Vitals Optimizations --}}
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    {{-- SEO Meta Tags --}}
    <title>{{ $metaTitle ?? config('app.name') }} | Sewa Perlengkapan Event Profesional</title>
    <meta name="description"
        content="{{ $metaDescription ?? 'Sewa tenda, kursi, meja, dan perlengkapan event profesional dengan harga terjangkau. Melayani acara pernikahan, pameran, dan event corporate.' }}">
    <meta name="keywords"
        content="sewa tenda, sewa kursi, sewa meja, perlengkapan event, rental event, sewa tenda acara">
    <meta name="author" content="{{ config('app.name') }}">

    {{-- Open Graph / Facebook --}}
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="{{ $metaTitle ?? config('app.name') }}">
    <meta property="og:description"
        content="{{ $metaDescription ?? 'Sewa tenda, kursi, meja, dan perlengkapan event profesional.' }}">
    <meta property="og:image" content="{{ $ogImage ?? asset('images/og-default.jpeg') }}">

    {{-- Twitter --}}
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="{{ $metaTitle ?? config('app.name') }}">
    <meta property="twitter:description"
        content="{{ $metaDescription ?? 'Sewa tenda, kursi, meja, dan perlengkapan event profesional.' }}">

    {{-- Canonical URL --}}
    <link rel="canonical" href="{{ $canonicalUrl ?? url()->current() }}">

    {{-- Favicon --}}
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

    {{-- Vite Assets --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Schema.org JSON-LD --}}
    @stack('schema')

    {{-- Additional Head Content --}}
    @stack('head')
</head>

<body class="min-h-screen flex flex-col" x-data="{ mobileMenuOpen: false }">
    {{-- Header / Navigation --}}
    @include('components.header')

    {{-- Main Content --}}
    <main class="flex-grow {{ request()->routeIs('home') ? '' : 'pt-20 lg:pt-24' }}">
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('components.footer')

    {{-- Floating WhatsApp Button --}}
    @include('components.whatsapp-float')

    {{-- Additional Scripts --}}
    @stack('scripts')
</body>

</html>