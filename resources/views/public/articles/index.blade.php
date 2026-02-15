@extends('layouts.app')

@section('meta_title', 'Artikel & Tips Event')
@section('meta_description', 'Tips dan panduan menyelenggarakan event yang sukses. Artikel seputar pernikahan, pameran, seminar, dan corporate event.')

@section('content')
    {{-- Page Header --}}
    <section class="bg-gradient-to-r from-primary-600 to-primary-700 py-12">
        <div class="container-custom">
            <h1 class="text-3xl md:text-4xl font-bold text-white mb-2">Artikel & Tips</h1>
            <p class="text-primary-100">Panduan dan inspirasi untuk event Anda</p>
        </div>
    </section>

    <section class="py-12 bg-slate-50">
        <div class="container-custom">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @forelse($articles as $article)
                    <article class="card group">
                        <div class="aspect-video bg-slate-200 overflow-hidden relative group-hover:opacity-90 transition-opacity">
                            @if($article->featured_image)
                                <img src="{{ Storage::url($article->featured_image) }}" alt="{{ $article->title }}" class="w-full h-full object-cover">
                            @else
                                <div class="w-full h-full bg-gradient-to-br from-primary-100 to-primary-200 flex items-center justify-center">
                                    <svg class="w-12 h-12 text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                                    </svg>
                                </div>
                            @endif
                        </div>
                        <div class="p-5">
                            <time
                                class="text-sm text-slate-400">{{ $article->published_at ? $article->published_at->format('d M Y') : '' }}</time>
                            <h2 class="mt-2 text-lg font-semibold text-slate-900 group-hover:text-primary-600">
                                <a href="{{ route('articles.show', $article->slug) }}">{{ $article->title }}</a>
                            </h2>
                            <p class="mt-2 text-sm text-slate-600 line-clamp-3">{{ $article->excerpt }}</p>
                            <a href="{{ route('articles.show', $article->slug) }}"
                                class="mt-3 inline-block text-sm font-medium text-primary-600 hover:text-primary-700">Baca
                                selengkapnya →</a>
                        </div>
                    </article>
                @empty
                    <div class="col-span-full text-center py-12 text-slate-500">
                        Belum ada artikel tersedia
                    </div>
                @endforelse
            </div>

            {{-- Pagination --}}
            <div class="mt-8">
                {{ $articles->links() }}
            </div>
        </div>
    </section>
@endsection