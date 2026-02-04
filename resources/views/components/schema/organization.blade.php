{{-- Organization Schema - untuk homepage --}}
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "LocalBusiness",
    "name": "{{ config('app.name', 'EventRental') }}",
    "description": "Penyedia jasa sewa tenda, kursi, meja, dan perlengkapan event profesional untuk berbagai acara seperti pernikahan, pameran, corporate event, dan acara outdoor.",
    "url": "{{ url('/') }}",
    "logo": "{{ asset('images/logo.png') }}",
    "image": "{{ asset('images/og-default.jpg') }}",
    "telephone": "+62-812-3456-7890",
    "email": "info@eventrental.com",
    "address": {
        "@@type": "PostalAddress",
        "streetAddress": "Jl. Raya Event No. 123",
        "addressLocality": "Jakarta Selatan",
        "addressRegion": "DKI Jakarta",
        "postalCode": "12345",
        "addressCountry": "ID"
    },
    "geo": {
        "@@type": "GeoCoordinates",
        "latitude": "-6.2088",
        "longitude": "106.8456"
    },
    "openingHoursSpecification": [
        {
            "@@type": "OpeningHoursSpecification",
            "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
            "opens": "08:00",
            "closes": "17:00"
        },
        {
            "@@type": "OpeningHoursSpecification",
            "dayOfWeek": "Saturday",
            "opens": "08:00",
            "closes": "15:00"
        }
    ],
    "priceRange": "Rp 50.000 - Rp 5.000.000",
    "sameAs": [
        "https://www.instagram.com/eventrental",
        "https://www.facebook.com/eventrental"
    ],
    "hasOfferCatalog": {
        "@@type": "OfferCatalog",
        "name": "Katalog Perlengkapan Event",
        "itemListElement": [
            {
                "@@type": "OfferCatalog",
                "name": "Tenda",
                "itemListElement": []
            },
            {
                "@@type": "OfferCatalog",
                "name": "Kursi & Meja",
                "itemListElement": []
            },
            {
                "@@type": "OfferCatalog",
                "name": "Dekorasi",
                "itemListElement": []
            }
        ]
    }
}
</script>