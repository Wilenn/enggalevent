<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\SitemapGenerator;
use Spatie\Sitemap\Tags\Url;
use App\Models\Product;
use App\Models\Package;
use App\Models\Gallery;
use App\Models\Article;
use App\Models\Category;

class GenerateSitemap extends Command
{
    protected $signature = 'sitemap:generate';
    protected $description = 'Generate the sitemap for the website';

    public function handle(): int
    {
        $this->info('Generating sitemap...');

        $sitemap = Sitemap::create();

        // Static pages
        $sitemap->add(Url::create(route('home'))
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
            ->setPriority(1.0));

        $sitemap->add(Url::create(route('about'))
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
            ->setPriority(0.7));

        $sitemap->add(Url::create(route('contact'))
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
            ->setPriority(0.7));

        // Product listing pages
        $sitemap->add(Url::create(route('products.index'))
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
            ->setPriority(0.9));

        // Categories
        Category::all()->each(function (Category $category) use ($sitemap) {
            $sitemap->add(Url::create(route('products.category', $category->slug))
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
                ->setPriority(0.8));
        });

        // Products
        Product::where('is_active', true)->each(function (Product $product) use ($sitemap) {
            $sitemap->add(Url::create(route('products.show', $product->slug))
                ->setLastModificationDate($product->updated_at)
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
                ->setPriority(0.8));
        });

        // Packages listing
        $sitemap->add(Url::create(route('packages.index'))
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
            ->setPriority(0.8));

        // Packages
        Package::where('is_active', true)->each(function (Package $package) use ($sitemap) {
            $sitemap->add(Url::create(route('packages.show', $package->slug))
                ->setLastModificationDate($package->updated_at)
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
                ->setPriority(0.7));
        });

        // Galleries listing
        $sitemap->add(Url::create(route('galleries.index'))
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
            ->setPriority(0.7));

        // Galleries
        Gallery::where('is_active', true)->each(function (Gallery $gallery) use ($sitemap) {
            $sitemap->add(Url::create(route('galleries.show', $gallery->slug))
                ->setLastModificationDate($gallery->updated_at)
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
                ->setPriority(0.6));
        });

        // Articles listing
        $sitemap->add(Url::create(route('articles.index'))
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
            ->setPriority(0.8));

        // Articles
        Article::where('is_published', true)->each(function (Article $article) use ($sitemap) {
            $sitemap->add(Url::create(route('articles.show', $article->slug))
                ->setLastModificationDate($article->updated_at)
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
                ->setPriority(0.7));
        });

        // Write sitemap to public folder
        $sitemap->writeToFile(public_path('sitemap.xml'));

        $this->info('Sitemap generated successfully at public/sitemap.xml');

        return Command::SUCCESS;
    }
}
