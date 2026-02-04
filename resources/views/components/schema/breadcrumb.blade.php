{{-- Breadcrumb Schema - untuk navigasi breadcrumb --}}
@props(['items'])

<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "BreadcrumbList",
    "itemListElement": [
        {
            "@@type": "ListItem",
            "position": 1,
            "name": "Beranda",
            "item": "{{ url('/') }}"
        }
        @foreach($items as $index => $item)
            ,{
                "@@type": "ListItem",
                "position": {{ $index + 2 }},
                "name": "{{ $item['name'] }}",
                "item": "{{ $item['url'] }}"
            }
        @endforeach
    ]
}
</script>