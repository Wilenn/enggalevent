{{-- Product Schema - untuk halaman detail produk --}}
@props(['product'])

<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "Product",
    "name": "{{ $product->name }}",
    "description": "{{ $product->short_description ?? Str::limit(strip_tags($product->description ?? ''), 160) }}",
    "image": [
        @if($product->images && is_array($product->images) && count($product->images) > 0)
            @foreach($product->images as $image)
                "{{ asset('storage/' . $image) }}"@if(!$loop->last),@endif
            @endforeach
        @else
            "{{ asset('images/placeholder-product.jpg') }}"
        @endif
    ],
    "sku": "{{ $product->slug }}",
    "brand": {
        "@@type": "Brand",
        "name": "{{ config('app.name', 'EventRental') }}"
    },
    "category": "{{ $product->category->name ?? 'Perlengkapan Event' }}",
    "offers": {
        "@@type": "Offer",
        "url": "{{ route('products.show', $product->slug) }}",
        "priceCurrency": "IDR",
        "price": "{{ $product->price_per_day ?? 0 }}",
        "priceValidUntil": "{{ now()->addYear()->format('Y-m-d') }}",
        "availability": "{{ $product->is_active ? 'https://schema.org/InStock' : 'https://schema.org/OutOfStock' }}",
        "itemCondition": "https://schema.org/NewCondition",
        "seller": {
            "@@type": "Organization",
            "name": "{{ config('app.name', 'EventRental') }}"
        }
    }
}
</script>