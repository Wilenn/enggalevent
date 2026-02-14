@extends('layouts.app')

@section('meta_title', 'Sewa Perlengkapan Event Profesional')
@section('meta_description', 'Sewa tenda, kursi, meja, dan perlengkapan event profesional. Melayani pernikahan, pameran, seminar dengan harga terjangkau.')

@push('schema')
    @include('components.schema.organization')
@endpush

@section('content')
    {{-- Hero Section - Fullwidth Slider --}}
    <section class="hero-fullwidth min-h-screen" 
        x-data="{ 
            currentSlide: 0, 
            totalSlides: 3,
            autoPlayInterval: null,
            isTransitioning: false,
            init() {
                this.startAutoPlay();
            },
            startAutoPlay() {
                this.autoPlayInterval = setInterval(() => {
                    this.nextSlide();
                }, 6000);
            },
            stopAutoPlay() {
                clearInterval(this.autoPlayInterval);
            },
            nextSlide() {
                if (this.isTransitioning) return;
                this.isTransitioning = true;
                this.currentSlide = (this.currentSlide + 1) % this.totalSlides;
                setTimeout(() => this.isTransitioning = false, 800);
            },
            prevSlide() {
                if (this.isTransitioning) return;
                this.isTransitioning = true;
                this.currentSlide = (this.currentSlide - 1 + this.totalSlides) % this.totalSlides;
                setTimeout(() => this.isTransitioning = false, 800);
            },
            goToSlide(index) {
                if (this.isTransitioning || index === this.currentSlide) return;
                this.isTransitioning = true;
                this.currentSlide = index;
                this.stopAutoPlay();
                this.startAutoPlay();
                setTimeout(() => this.isTransitioning = false, 800);
            }
        }"
        @mouseenter="stopAutoPlay()"
        @mouseleave="startAutoPlay()"
    >
        {{-- Background Image with Subtle Ken Burns Effect --}}
        <div class="absolute inset-0 overflow-hidden">
            <img src="{{ asset('images/homepage.jpeg') }}" 
                alt="Elegant Event Setup" 
                class="w-full h-full object-cover transition-transform duration-[20000ms] ease-linear"
                :class="{ 'scale-110': true }">
        </div>
        <div class="hero-overlay bg-gradient-to-b from-black/30 via-black/40 to-black/50"></div>
        
        {{-- Slider Content --}}
        <div class="hero-content max-w-5xl w-full relative">
            {{-- Slides Container --}}
            <div class="relative overflow-hidden">
                <div class="flex transition-transform duration-700 ease-[cubic-bezier(0.4,0,0.2,1)]"
                    :style="`transform: translateX(-${currentSlide * 100}%)`">
                    
                    {{-- Slide 1 --}}
                    <div class="w-full flex-shrink-0 px-4">
                        <p class="section-title-sm text-white/70 mb-4 tracking-widest text-shadow-subtle"
                            :class="{ 'opacity-100 translate-y-0': currentSlide === 0, 'opacity-0 translate-y-4': currentSlide !== 0 }"
                            style="transition: opacity 0.6s ease 0.2s, transform 0.6s ease 0.2s;">Welcome to</p>
                        <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold text-white mb-6 leading-tight tracking-tight text-shadow-hero"
                            :class="{ 'opacity-100 translate-y-0': currentSlide === 0, 'opacity-0 translate-y-6': currentSlide !== 0 }"
                            style="font-family: 'Montserrat', sans-serif; transition: opacity 0.6s ease 0.3s, transform 0.6s ease 0.3s;">
                            Enggal Jaya Event
                        </h1>
                        <p class="text-lg md:text-xl text-white/90 mb-10 max-w-2xl mx-auto font-light leading-relaxed text-shadow-subtle"
                            :class="{ 'opacity-100 translate-y-0': currentSlide === 0, 'opacity-0 translate-y-4': currentSlide !== 0 }"
                            style="transition: opacity 0.6s ease 0.4s, transform 0.6s ease 0.4s;">
                            Transforming your special moments into unforgettable experiences with premium event rentals and professional services.
                        </p>
                    </div>
                    
                    {{-- Slide 2 --}}
                    <div class="w-full flex-shrink-0 px-4">
                        <p class="section-title-sm text-white/70 mb-4 tracking-widest text-shadow-subtle"
                            :class="{ 'opacity-100 translate-y-0': currentSlide === 1, 'opacity-0 translate-y-4': currentSlide !== 1 }"
                            style="transition: opacity 0.6s ease 0.2s, transform 0.6s ease 0.2s;">Premium Quality</p>
                        <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold text-white mb-6 leading-tight tracking-tight text-shadow-hero"
                            :class="{ 'opacity-100 translate-y-0': currentSlide === 1, 'opacity-0 translate-y-6': currentSlide !== 1 }"
                            style="font-family: 'Montserrat', sans-serif; transition: opacity 0.6s ease 0.3s, transform 0.6s ease 0.3s;">
                            Equipment & Service
                        </h1>
                        <p class="text-lg md:text-xl text-white/90 mb-10 max-w-2xl mx-auto font-light leading-relaxed text-shadow-subtle"
                            :class="{ 'opacity-100 translate-y-0': currentSlide === 1, 'opacity-0 translate-y-4': currentSlide !== 1 }"
                            style="transition: opacity 0.6s ease 0.4s, transform 0.6s ease 0.4s;">
                            From elegant tents to complete event setups, we provide everything you need for weddings, exhibitions, and corporate events.
                        </p>
                    </div>
                    
                    {{-- Slide 3 --}}
                    <div class="w-full flex-shrink-0 px-4">
                        <p class="section-title-sm text-white/70 mb-4 tracking-widest text-shadow-subtle"
                            :class="{ 'opacity-100 translate-y-0': currentSlide === 2, 'opacity-0 translate-y-4': currentSlide !== 2 }"
                            style="transition: opacity 0.6s ease 0.2s, transform 0.6s ease 0.2s;">Trusted Partner</p>
                        <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold text-white mb-6 leading-tight tracking-tight text-shadow-hero"
                            :class="{ 'opacity-100 translate-y-0': currentSlide === 2, 'opacity-0 translate-y-6': currentSlide !== 2 }"
                            style="font-family: 'Montserrat', sans-serif; transition: opacity 0.6s ease 0.3s, transform 0.6s ease 0.3s;">
                            Since 2010
                        </h1>
                        <p class="text-lg md:text-xl text-white/90 mb-10 max-w-2xl mx-auto font-light leading-relaxed text-shadow-subtle"
                            :class="{ 'opacity-100 translate-y-0': currentSlide === 2, 'opacity-0 translate-y-4': currentSlide !== 2 }"
                            style="transition: opacity 0.6s ease 0.4s, transform 0.6s ease 0.4s;">
                            Over a decade of experience creating memorable events with professional service and attention to detail.
                        </p>
                    </div>
                </div>
            </div>
            
            {{-- CTA Buttons --}}
            <div class="flex flex-col sm:flex-row gap-4 justify-center mt-8">
                <a href="{{ route('products.index') }}" class="btn-outlined-light group">
                    <span>View Catalog</span>
                    <svg class="w-4 h-4 ml-2 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
                <a href="https://wa.me/6281295518897" target="_blank" class="btn btn-whatsapp">
                    Contact Us
                </a>
            </div>
            
            {{-- Slider Navigation Dots --}}
            <div class="flex justify-center gap-3 mt-12">
                <template x-for="i in totalSlides" :key="i">
                    <button 
                        @click="goToSlide(i - 1)"
                        class="h-2.5 rounded-full transition-all duration-500 ease-out"
                        :class="currentSlide === (i - 1) ? 'bg-white w-10' : 'bg-white/40 hover:bg-white/60 w-2.5'"
                        :aria-label="`Go to slide ${i}`"
                    ></button>
                </template>
            </div>
        </div>
        
        {{-- Scroll Indicator --}}
        <div class="absolute bottom-8 left-1/2 -translate-x-1/2 animate-bounce">
            <svg class="w-6 h-6 text-white/70" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
            </svg>
        </div>
    </section>

    {{-- Our Services Section --}}
    <section class="py-20 lg:py-28 bg-cream">
        <div class="container-custom">
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center">
                {{-- Left: Content --}}
                <div class="scroll-fade-up">
                    <p class="section-title-sm">Our Services</p>
                    <h2 class="section-title">Premium Event<br>Rentals</h2>
                    <p class="section-subtitle mb-8">
                        From intimate gatherings to grand celebrations, we provide everything you need to create memorable events. Our extensive collection ensures your vision comes to life with elegance and precision.
                    </p>
                    
                    {{-- Category Filter Buttons --}}
                    <div class="flex flex-wrap gap-3">
                        @forelse($categories->take(5) as $category)
                            <a href="{{ route('products.category', $category->slug) }}" class="filter-btn">
                                {{ $category->name }}
                            </a>
                        @empty
                        @endforelse
                        <a href="{{ route('products.index') }}" class="filter-btn">
                            View All →
                        </a>
                    </div>
                </div>
                
                {{-- Right: Featured Category Image --}}
                <div class="image-caption-overlay scroll-fade-up delay-200 rounded-2xl shadow-lg">
                    <img src="{{ asset('images/our_services.jpeg') }}" alt="Event Setup" class="w-full aspect-[4/3] object-cover">
                    <div class="caption">
                        <p class="text-sm uppercase tracking-wider text-white/80 mb-1">Featured</p>
                        <p class="text-lg font-medium">Premium Collections</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Featured Products Section --}}
    <section class="py-20 lg:py-28 bg-white">
        <div class="container-custom">
            <div class="text-center mb-16 scroll-fade-up">
                <p class="section-title-sm">Featured Products</p>
                <h2 class="section-title">Our Best Selection</h2>
                <p class="section-subtitle mx-auto">
                    Handpicked items that define elegance and quality for your special occasions.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($featuredProducts as $index => $product)
                    <div class="group scroll-fade-up delay-{{ ($index % 3) * 100 + 100 }}">
                        {{-- Product Image --}}
                        <div class="aspect-[4/3] bg-slate-100 overflow-hidden mb-5">
                            @if($product->images && count($product->images) > 0)
                                <img src="{{ Storage::url($product->images[0]) }}" 
                                    alt="{{ $product->name }}" 
                                    class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            @else
                                <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-slate-100 to-slate-200">
                                    <svg class="w-16 h-16 text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                </div>
                            @endif
                        </div>
                        
                        {{-- Product Info --}}
                        <div>
                            <p class="text-xs uppercase tracking-wider text-slate-500 mb-2">{{ $product->category->name }}</p>
                            <h3 class="text-lg font-serif text-slate-800 group-hover:text-primary-600 transition-colors mb-2">
                                <a href="{{ route('products.show', $product->slug) }}">{{ $product->name }}</a>
                            </h3>
                            <p class="text-sm text-slate-600 line-clamp-2 mb-3">{{ $product->short_description }}</p>
                            <div class="flex items-center justify-end">
                                <a href="{{ route('products.show', $product->slug) }}" class="text-xs uppercase tracking-wider text-slate-600 hover:text-slate-800 transition-colors">
                                    Details →
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-span-full text-center text-slate-500 py-12">
                        No featured products available yet.
                    </div>
                @endforelse
            </div>

            <div class="text-center mt-12">
                <a href="{{ route('products.index') }}" class="btn-outlined">
                    View All Products
                </a>
            </div>
        </div>
    </section>

    {{-- Why Choose Us / Our Approach --}}
    <section class="py-20 lg:py-28 bg-ivory">
        <div class="container-custom">
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center">
                {{-- Left: Image --}}
                <div class="order-2 lg:order-1 scroll-fade-up">
                    <img src="{{ asset('images/approach.jpeg') }}" alt="Our Approach" class="w-full aspect-[4/5] object-cover rounded-2xl shadow-lg">
                </div>
                
                {{-- Right: Content --}}
                <div class="order-1 lg:order-2 scroll-fade-up delay-200">
                    <p class="section-title-sm">Our Approach</p>
                    <h2 class="section-title">Why Choose<br>Enggal Jaya?</h2>
                    <p class="section-subtitle mb-10">
                        With years of experience in the event industry, we understand that every detail matters. Our commitment to excellence ensures your event receives the attention it deserves.
                    </p>
                    
                    <div class="space-y-8">
                        <div class="flex gap-6">
                            <div class="text-3xl font-serif text-primary-500">01</div>
                            <div>
                                <h3 class="text-lg font-medium text-slate-800 mb-2">Premium Quality</h3>
                                <p class="text-slate-600">All our equipment is meticulously maintained and always in pristine condition.</p>
                            </div>
                        </div>
                        <div class="flex gap-6">
                            <div class="text-3xl font-serif text-primary-500">02</div>
                            <div>
                                <h3 class="text-lg font-medium text-slate-800 mb-2">Professional Service</h3>
                                <p class="text-slate-600">Our experienced team ensures seamless setup and support throughout your event.</p>
                            </div>
                        </div>
                        <div class="flex gap-6">
                            <div class="text-3xl font-serif text-primary-500">03</div>
                            <div>
                                <h3 class="text-lg font-medium text-slate-800 mb-2">Competitive Pricing</h3>
                                <p class="text-slate-600">Premium quality at accessible prices, with transparent quotations and no hidden fees.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Testimonials --}}
    @if($testimonials->count() > 0)
        <section class="py-20 lg:py-28 bg-white">
            <div class="container-custom">
                <div class="text-center mb-16 scroll-fade-up">
                    <p class="section-title-sm">Testimonials</p>
                    <h2 class="section-title">What Our Clients Say</h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 lg:gap-12">
                    @foreach($testimonials->take(3) as $index => $testimonial)
                        <div class="scroll-fade-up delay-{{ ($index % 3) * 100 + 100 }}">
                            {{-- Quote Mark --}}
                            <div class="text-6xl font-serif text-slate-200 mb-4">"</div>
                            
                            {{-- Rating --}}
                            <div class="flex items-center gap-1 mb-4">
                                @for($i = 1; $i <= 5; $i++)
                                    <svg class="w-4 h-4 {{ $i <= $testimonial->rating ? 'text-primary-500' : 'text-slate-200' }}" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                @endfor
                            </div>
                            
                            {{-- Content --}}
                            <p class="text-slate-600 italic font-light leading-relaxed mb-6">
                                "{{ $testimonial->content }}"
                            </p>
                            
                            {{-- Author --}}
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 bg-slate-100 rounded-full flex items-center justify-center">
                                    <span class="text-sm font-medium text-slate-600">{{ $testimonial->initials }}</span>
                                </div>
                                <div>
                                    <p class="font-medium text-slate-800 text-sm">{{ $testimonial->client_name }}</p>
                                    <p class="text-xs text-slate-500">{{ $testimonial->company }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    {{-- CTA Section --}}
    <section class="py-20 lg:py-28 bg-slate-800">
        <div class="container-custom text-center scroll-fade-up">
            <p class="section-title-sm text-white/60 mb-4">Ready to Start?</p>
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-serif font-medium text-white mb-6">
                Let's Create Something<br>Beautiful Together
            </h2>
            <p class="text-lg text-white/70 mb-10 max-w-2xl mx-auto font-light">
                Consult with our team to plan your perfect event. We're here to help bring your vision to life.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="https://wa.me/6281295518897" target="_blank" class="btn btn-whatsapp px-10">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                    </svg>
                    Contact via WhatsApp
                </a>
                <a href="{{ route('contact') }}" class="btn-outlined-light">
                    View Contact Info
                </a>
            </div>
        </div>
    </section>
@endsection