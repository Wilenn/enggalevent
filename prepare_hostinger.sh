#!/bin/bash

echo "🚀 Memulai Persiapan Deployment Hostinger..."

# 1. Bersihkan Cache
echo "🧹 Membersihkan Cache..."
php artisan optimize:clear
rm -f storage/logs/*.log

# 2. Build Assets
echo "📦 Build Assets (Vite)..."
npm run build

# 3. Hapus Folder/File Sampah (Optional)
echo "🗑️ Menghapus file sampah..."
rm -rf node_modules/.cache
rm -f .DS_Store
rm -f storage/*.key

# 3.5 Siapkan Vendor Production (Tanpa Dev Dependencies)
echo "🧹 Membersihkan Vendor (Hapus Dev Dependencies)..."
composer install --optimize-autoloader --no-dev

# 4. ZIP Project
echo "🗜️ Membuat file project.zip..."
# Exclude: .git, node_modules, tests, storage local keys, public/storage (symlink)
zip -r project.zip . -x ".git/*" "node_modules/*" "tests/*" "storage/*.key" ".env" ".env.example" "nixpacks.toml" "prepare_hostinger.sh" "public/storage" ".idea/*" ".vscode/*"

# 5. Restore Dev Dependencies
echo "🔄 Mengembalikan Dev Dependencies (untuk Local Development)..."
composer install

echo "✅ Selesai! File 'project.zip' siap di-upload ke Hostinger."
echo "👉 Jangan lupa upload 'vendor' folder terpisah atau jalankan 'composer install' di server jika bisa."
