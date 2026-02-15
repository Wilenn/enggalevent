@extends('layouts.app')

@section('meta_title', $article->meta_title ?? $article->title)
@section('meta_description', $article->meta_description ?? $article->excerpt)

@push('schema')
    @include('components.schema.article', ['article' => $article])
    @include('components.schema.breadcrumb', ['items' => [
        ['name' => 'Artikel', 'url' => route('articles.index')],
        ['name' => $article->title, 'url' => route('articles.show', $article->slug)]
    ]])
@endpush

@section('content')
    {{-- Breadcrumb --}}
    <div class="bg-slate-50 py-4 border-b">
        <div class="container-custom">
            <nav class="text-sm text-slate-500">
                <a href="{{ route('home') }}" class="hover:text-primary-600">Beranda</a>
                <span class="mx-2">/</span>
                <a href="{{ route('articles.index') }}" class="hover:text-primary-600">Artikel</a>
                <span class="mx-2">/</span>
                <span class="text-slate-900">{{ Str::limit($article->title, 40) }}</span>
            </nav>
        </div>
    </div>

    <article class="py-12">
        <div class="container-custom">
            <div class="max-w-3xl mx-auto">
                <header class="text-center mb-8">
                    <time
                        class="text-sm text-slate-400">{{ $article->published_at ? $article->published_at->format('d M Y') : '' }}</time>
                    <h1 class="mt-2 text-3xl md:text-4xl font-bold text-slate-900">{{ $article->title }}</h1>
                    <p class="mt-4 text-lg text-slate-600">{{ $article->excerpt }}</p>
                </header>

                {{-- Featured Image --}}
                <div class="aspect-video bg-slate-200 rounded-lg overflow-hidden mb-8">
                    @if($article->featured_image)
                        <img src="{{ Storage::url($article->featured_image) }}" alt="{{ $article->title }}" class="w-full h-full object-cover">
                    @else
                        <div class="w-full h-full bg-gradient-to-br from-primary-100 to-primary-200 flex items-center justify-center">
                            <svg class="w-16 h-16 text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                        </div>
                    @endif
                </div>

                {{-- Content --}}
                <div class="prose prose-lg max-w-none">
                    {!! $article->content !!}
                </div>

                {{-- Share & Back --}}
                <div class="mt-12 pt-6 border-t flex flex-col sm:flex-row justify-between items-center gap-4">
                    <a href="{{ route('articles.index') }}" class="text-slate-500 hover:text-primary-600">← Kembali ke
                        Artikel</a>
                    <div class="flex items-center gap-4">
                        <span class="text-sm text-slate-400">Bagikan:</span>
                        <a href="https://wa.me/6281295518897"
                            target="_blank" class="text-slate-400 hover:text-green-500">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </article>
@endsection