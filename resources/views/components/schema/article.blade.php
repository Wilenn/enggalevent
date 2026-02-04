{{-- Article Schema - untuk halaman detail artikel --}}
@props(['article'])

<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "Article",
    "headline": "{{ $article->title }}",
    "description": "{{ $article->excerpt ?? Str::limit(strip_tags($article->content ?? ''), 160) }}",
    "image": "{{ $article->featured_image ? asset('storage/' . $article->featured_image) : asset('images/og-default.jpg') }}",
    "datePublished": "{{ $article->published_at ? $article->published_at->toIso8601String() : $article->created_at->toIso8601String() }}",
    "dateModified": "{{ $article->updated_at->toIso8601String() }}",
    "author": {
        "@@type": "Organization",
        "name": "{{ config('app.name', 'EventRental') }}",
        "url": "{{ url('/') }}"
    },
    "publisher": {
        "@@type": "Organization",
        "name": "{{ config('app.name', 'EventRental') }}",
        "logo": {
            "@@type": "ImageObject",
            "url": "{{ asset('images/logo.png') }}"
        }
    },
    "mainEntityOfPage": {
        "@@type": "WebPage",
        "@@id": "{{ route('articles.show', $article->slug) }}"
    },
    "articleSection": "Tips & Artikel Event",
    "wordCount": "{{ str_word_count(strip_tags($article->content ?? '')) }}"
}
</script>