<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\Testimonial;
use App\Models\Article;
use App\Models\Gallery;
use Illuminate\Database\Seeder;

class DemoSeeder extends Seeder
{
    public function run(): void
    {
        // Categories
        $categories = [
            [
                'name' => 'Tenda',
                'slug' => 'tenda',
                'description' => 'Berbagai jenis tenda untuk acara outdoor maupun indoor, dari tenda Sarnafil hingga tenda dekorasi mewah.',
                'meta_title' => 'Sewa Tenda Event - Tenda Sarnafil, Kerucut, Roder | EventRental',
                'meta_description' => 'Sewa tenda untuk acara pernikahan, pameran, dan event corporate. Tersedia tenda Sarnafil, kerucut, roder dengan harga terjangkau.',
                'sort_order' => 1,
            ],
            [
                'name' => 'Kursi',
                'slug' => 'kursi',
                'description' => 'Pilihan kursi berkualitas untuk acara Anda, mulai dari kursi Futura, Chitose, hingga kursi VIP.',
                'meta_title' => 'Sewa Kursi Event - Kursi Futura, Chitose, VIP | EventRental',
                'meta_description' => 'Sewa kursi untuk acara dengan berbagai pilihan: Futura, Chitose, kursi VIP. Nyaman dan berkualitas untuk tamu Anda.',
                'sort_order' => 2,
            ],
            [
                'name' => 'Meja',
                'slug' => 'meja',
                'description' => 'Meja untuk berbagai kebutuhan event, dari meja bulat untuk jamuan hingga meja panjang untuk meeting.',
                'meta_title' => 'Sewa Meja Event - Meja Bulat, Meja Panjang | EventRental',
                'meta_description' => 'Sewa meja berkualitas untuk event: meja bulat, meja panjang, meja IBM. Cocok untuk pernikahan dan corporate event.',
                'sort_order' => 3,
            ],
            [
                'name' => 'Sound System',
                'slug' => 'sound-system',
                'description' => 'Peralatan audio profesional untuk memastikan suara jernih di acara Anda.',
                'meta_title' => 'Sewa Sound System Event - Speaker, Mic, Audio | EventRental',
                'meta_description' => 'Sewa sound system profesional: speaker, microphone, mixer. Kualitas audio terbaik untuk acara Anda.',
                'sort_order' => 4,
            ],
            [
                'name' => 'Dekorasi',
                'slug' => 'dekorasi',
                'description' => 'Perlengkapan dekorasi untuk mempercantik venue acara Anda.',
                'meta_title' => 'Sewa Dekorasi Event - Backdrop, Lighting | EventRental',
                'meta_description' => 'Sewa perlengkapan dekorasi event: backdrop, lighting, bunga. Percantik venue acara Anda.',
                'sort_order' => 5,
            ],
        ];

        foreach ($categories as $categoryData) {
            Category::create($categoryData);
        }

        // Products
        $products = [
            // Tenda
            [
                'category_id' => 1,
                'name' => 'Tenda Sarnafil 3x3',
                'slug' => 'tenda-sarnafil-3x3',
                'short_description' => 'Tenda Sarnafil ukuran 3x3 meter, cocok untuk outdoor event.',
                'description' => 'Tenda Sarnafil 3x3 meter adalah pilihan populer untuk outdoor event. Dengan desain yang kokoh dan tahan cuaca, tenda ini cocok untuk pameran, bazaar, atau event outdoor lainnya. Material premium yang tahan air dan UV protection.',
                'specifications' => "Ukuran: 3 x 3 meter\nTinggi: 2.5 meter\nMaterial: PVC Premium\nWarna: Putih (tersedia warna lain)\nKapasitas: 8-10 orang",
                'price_per_day' => 350000,
                'price_unit' => 'unit',
                'meta_title' => 'Sewa Tenda Sarnafil 3x3 Jakarta | Harga Terjangkau',
                'meta_description' => 'Sewa tenda Sarnafil 3x3 meter untuk event outdoor. Tahan hujan & panas. Harga mulai Rp 350.000/hari. Hubungi kami sekarang!',
                'is_featured' => true,
                'sort_order' => 1,
            ],
            [
                'category_id' => 1,
                'name' => 'Tenda Sarnafil 5x5',
                'slug' => 'tenda-sarnafil-5x5',
                'short_description' => 'Tenda Sarnafil ukuran 5x5 meter untuk event lebih besar.',
                'description' => 'Tenda Sarnafil 5x5 meter memberikan ruang lebih luas untuk acara outdoor Anda. Ideal untuk pameran, wedding outdoor, atau gathering perusahaan.',
                'specifications' => "Ukuran: 5 x 5 meter\nTinggi: 3 meter\nMaterial: PVC Premium\nWarna: Putih (tersedia warna lain)\nKapasitas: 20-25 orang",
                'price_per_day' => 500000,
                'price_unit' => 'unit',
                'is_featured' => true,
                'sort_order' => 2,
            ],
            [
                'category_id' => 1,
                'name' => 'Tenda Roder',
                'slug' => 'tenda-roder',
                'short_description' => 'Tenda Roder premium untuk event besar dan formal.',
                'description' => 'Tenda Roder adalah pilihan premium untuk event besar seperti wedding, exhibition, atau gala dinner. Dengan struktur aluminium yang kuat dan tampilan mewah.',
                'specifications' => "Ukuran: 10 x 20 meter (customizable)\nTinggi: 4-5 meter\nMaterial: Aluminium + PVC\nAC Compatible\nKapasitas: 200+ orang",
                'price_per_day' => 5000000,
                'price_unit' => 'unit',
                'is_featured' => true,
                'sort_order' => 3,
            ],
            // Kursi
            [
                'category_id' => 2,
                'name' => 'Kursi Futura',
                'slug' => 'kursi-futura',
                'short_description' => 'Kursi Futura nyaman untuk seminar dan meeting.',
                'description' => 'Kursi Futura adalah kursi standar untuk acara seminar, rapat, atau gathering. Nyaman dengan sandaran dan mudah ditata.',
                'specifications' => "Bahan: Plastik + Besi\nWarna: Hitam, Coklat\nDengan/Tanpa meja lipat\nStackable",
                'price_per_day' => 8000,
                'price_unit' => 'unit',
                'is_featured' => true,
                'sort_order' => 1,
            ],
            [
                'category_id' => 2,
                'name' => 'Kursi Tiffany',
                'slug' => 'kursi-tiffany',
                'short_description' => 'Kursi Tiffany elegan untuk wedding dan gala dinner.',
                'description' => 'Kursi Tiffany memberikan sentuhan elegan pada acara Anda. Pilihan populer untuk wedding, engagement, dan acara formal lainnya.',
                'specifications' => "Bahan: Kayu/Plastik Premium\nWarna: Putih, Gold, Silver\nDengan bantalan duduk\nMaks load: 120kg",
                'price_per_day' => 25000,
                'price_unit' => 'unit',
                'is_featured' => true,
                'sort_order' => 2,
            ],
            // Meja
            [
                'category_id' => 3,
                'name' => 'Meja Bulat 120cm',
                'slug' => 'meja-bulat-120cm',
                'short_description' => 'Meja bulat diameter 120cm untuk jamuan makan.',
                'description' => 'Meja bulat diameter 120cm ideal untuk jamuan makan 8-10 orang. Cocok untuk wedding reception dan gala dinner.',
                'specifications' => "Diameter: 120 cm\nTinggi: 75 cm\nBahan: Kayu + Taplak\nKapasitas: 8-10 kursi",
                'price_per_day' => 100000,
                'price_unit' => 'unit',
                'sort_order' => 1,
            ],
            [
                'category_id' => 3,
                'name' => 'Meja IBM',
                'slug' => 'meja-ibm',
                'short_description' => 'Meja IBM lipat untuk seminar dan meeting.',
                'description' => 'Meja IBM lipat praktis untuk seminar, workshop, atau meeting. Mudah diatur dan disimpan.',
                'specifications' => "Ukuran: 120 x 60 cm\nTinggi: 75 cm\nBahan: Plastik + Besi\nLipat: Ya",
                'price_per_day' => 35000,
                'price_unit' => 'unit',
                'sort_order' => 2,
            ],
        ];

        foreach ($products as $productData) {
            Product::create($productData);
        }

        // Testimonials
        $testimonials = [
            [
                'client_name' => 'Budi Santoso',
                'company' => 'PT Maju Jaya',
                'position' => 'Event Manager',
                'content' => 'Pelayanan sangat profesional dan barang-barang berkualitas. Tenda yang disewa dalam kondisi bersih dan bagus. Akan pakai lagi untuk event berikutnya!',
                'rating' => 5,
                'sort_order' => 1,
            ],
            [
                'client_name' => 'Siti Rahayu',
                'company' => 'Wedding Organizer Permata',
                'position' => 'Owner',
                'content' => 'Sudah langganan bertahun-tahun. Harga bersaing dan kualitas selalu terjaga. Tim setup-nya juga ramah dan cepat.',
                'rating' => 5,
                'sort_order' => 2,
            ],
            [
                'client_name' => 'Ahmad Hidayat',
                'company' => 'Bank Mandiri',
                'position' => 'HR Manager',
                'content' => 'Untuk gathering tahunan kantor, kami selalu percaya dengan EventRental. Profesional dan bisa diandalkan.',
                'rating' => 5,
                'sort_order' => 3,
            ],
        ];

        foreach ($testimonials as $testimonialData) {
            Testimonial::create($testimonialData);
        }

        // Articles
        $articles = [
            [
                'title' => 'Tips Memilih Tenda untuk Outdoor Event',
                'slug' => 'tips-memilih-tenda-outdoor-event',
                'excerpt' => 'Panduan lengkap memilih jenis tenda yang tepat untuk acara outdoor Anda. Dari tenda Sarnafil hingga Roder.',
                'content' => '<h2>Mengapa Memilih Tenda yang Tepat Itu Penting?</h2><p>Memilih tenda yang tepat adalah langkah krusial dalam perencanaan event outdoor. Tenda bukan hanya pelindung dari cuaca, tapi juga elemen penting dalam menciptakan suasana acara.</p><h2>Jenis-Jenis Tenda untuk Event</h2><h3>1. Tenda Sarnafil</h3><p>Tenda Sarnafil adalah pilihan populer untuk event outdoor skala kecil hingga menengah. Dengan struktur yang kokoh dan harga terjangkau, tenda ini cocok untuk pameran, bazaar, atau gathering.</p><h3>2. Tenda Roder</h3><p>Untuk event besar dan formal seperti wedding atau exhibition, tenda Roder adalah pilihan premium. Dengan tampilan mewah dan bisa dipasang AC.</p><h2>Faktor yang Perlu Dipertimbangkan</h2><ul><li>Jumlah tamu yang diundang</li><li>Budget yang tersedia</li><li>Tema dan konsep acara</li><li>Kondisi venue dan cuaca</li></ul>',
                'meta_title' => 'Tips Memilih Tenda untuk Outdoor Event | Panduan Lengkap',
                'meta_description' => 'Panduan lengkap memilih jenis tenda yang tepat untuk acara outdoor. Dari tenda Sarnafil hingga Roder. Baca selengkapnya!',
                'is_published' => true,
                'published_at' => now()->subDays(5),
            ],
            [
                'title' => 'Checklist Perlengkapan Event Pernikahan',
                'slug' => 'checklist-perlengkapan-event-pernikahan',
                'excerpt' => 'Daftar lengkap perlengkapan yang harus dipersiapkan untuk hari pernikahan yang sempurna.',
                'content' => '<h2>Perlengkapan Wajib untuk Pernikahan</h2><p>Merencanakan pernikahan membutuhkan persiapan matang. Berikut checklist perlengkapan yang tidak boleh terlewat.</p><h2>Area Resepsi</h2><ul><li>Tenda (sesuai kapasitas tamu)</li><li>Kursi Tiffany atau Chiavari</li><li>Meja bulat untuk dining</li><li>Table runner dan taplak</li></ul><h2>Sound & Lighting</h2><ul><li>Sound system lengkap</li><li>Microphone wireless</li><li>Lighting dekorasi</li><li>Follow spot untuk pengantin</li></ul>',
                'is_published' => true,
                'published_at' => now()->subDays(10),
            ],
        ];

        foreach ($articles as $articleData) {
            Article::create($articleData);
        }

        // Galleries
        $galleries = [
            [
                'event_name' => 'Wedding Andi & Sinta',
                'slug' => 'wedding-andi-sinta',
                'location' => 'Hotel Grand Hyatt Jakarta',
                'event_date' => now()->subMonths(1),
                'description' => 'Pernikahan mewah dengan tema garden party. Menggunakan tenda Roder premium dan kursi Tiffany.',
                'is_featured' => true,
            ],
            [
                'event_name' => 'Exhibition Tech Summit 2024',
                'slug' => 'exhibition-tech-summit-2024',
                'location' => 'JCC Senayan',
                'event_date' => now()->subMonths(2),
                'description' => 'Pameran teknologi dengan booth-booth modern menggunakan tenda Sarnafil.',
                'is_featured' => true,
            ],
        ];

        foreach ($galleries as $galleryData) {
            Gallery::create($galleryData);
        }
    }
}
