# EventRental - Website Company Profile & Catalog

Website company profile dan katalog produk untuk vendor penyewaan perlengkapan event.

## Tech Stack
- **Backend**: Laravel 11
- **Frontend**: Blade + Tailwind CSS + Alpine.js
- **Admin**: Filament v3
- **Database**: SQLite (dev) / MySQL (prod)

## Quick Start

```bash
# Clone & install
composer install
npm install

# Setup database
cp .env.example .env
php artisan key:generate
php artisan migrate --seed

# Create admin user
php artisan make:filament-user

# Link storage
php artisan storage:link

# Run development
npm run dev
php artisan serve
```

## URLs
- **Frontend**: http://127.0.0.1:8000
- **Admin Panel**: http://127.0.0.1:8000/admin

## Key Features

### Public Pages
| Page | URL |
|------|-----|
| Homepage | `/` |
| Product Catalog | `/produk` |
| Product Detail | `/produk/{slug}` |
| Event Packages | `/paket` |
| Gallery | `/galeri` |
| Articles | `/artikel` |
| Contact | `/kontak` |
| About | `/tentang-kami` |

### Admin CMS
- Products CRUD (with image gallery)
- Categories management
- Event packages
- Gallery/Portfolio
- Blog articles
- Testimonials
- SEO meta tags

### SEO Features
- Schema.org JSON-LD markup
- Auto sitemap generation
- Meta tags per page
- Clean URLs
- Image optimization

## Sitemap
Generate sitemap:
```bash
php artisan sitemap:generate
```

## Production Deployment
```bash
# Build assets
npm run build

# Optimize Laravel
php artisan optimize
php artisan view:cache
php artisan route:cache
```

## Environment Variables
Key settings in `.env`:
```
APP_URL=https://yourdomain.com
DB_CONNECTION=mysql
DB_DATABASE=event_rental
```
