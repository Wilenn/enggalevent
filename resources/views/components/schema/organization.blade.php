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
    "telephone": "+62-812-9551-8897",
    "email": "enggaljaya.event@gmail.com",
    "address": {
        "@@type": "PostalAddress",
        "streetAddress": "Jalan Ceger Raya No.8 Jurang Mangu Timur, Pd. Karya, Kec. Pd. Aren",
        "addressLocality": "Tangerang Selatan",
        "addressRegion": "Banten",
        "postalCode": "15222",
        "addressCountry": "ID"
    },
    "geo": {
        "@@type": "GeoCoordinates",
        "latitude": "-6.2626234",
        "longitude": "106.7328268"
    },
    "openingHoursSpecification": [
        {
            "@@type": "OpeningHoursSpecification",
            "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
            "opens": "08:00",
            "closes": "17:00"
        }
    ],
    "priceRange": "Rp 50.000 - Rp 10.000.000",
    "sameAs": [
        "https://www.instagram.com/enggaljaya.event"
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