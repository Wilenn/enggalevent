<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'short_description',
        'description',
        'images',
        'specifications',
        'price_per_day',
        'price_unit',
        'meta_title',
        'meta_description',
        'is_featured',
        'is_active',
        'sort_order',
    ];

    protected $casts = [
        'price_per_day' => 'decimal:2',
        'is_featured' => 'boolean',
        'is_active' => 'boolean',
        'specifications' => 'array',
        'images' => 'array',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function images(): HasMany
    {
        return $this->hasMany(ProductImage::class)->orderBy('sort_order');
    }

    public function primaryImage()
    {
        return $this->hasOne(ProductImage::class)->where('is_primary', true);
    }

    public function faqs(): HasMany
    {
        return $this->hasMany(ProductFaq::class)->orderBy('sort_order');
    }

    public function packages(): BelongsToMany
    {
        return $this->belongsToMany(Package::class, 'package_items')
            ->withPivot('quantity')
            ->withTimestamps();
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('sort_order');
    }

    public function getFormattedPriceAttribute(): string
    {
        if (!$this->price_per_day) {
            return 'Hubungi Kami';
        }
        return 'Rp ' . number_format($this->price_per_day, 0, ',', '.') . ' / ' . $this->price_unit;
    }
}
