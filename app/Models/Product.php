<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id', 'name', 'slug', 'brand', 'model_ref',
        'short_description', 'description', 'specifications', 'features',
        'applications', 'main_image', 'gallery', 'document_url',
        'active', 'featured', 'is_second_hand', 'condition',
        'meta_title', 'meta_description', 'sort_order',
    ];

    protected $casts = [
        'specifications' => 'array',
        'features'       => 'array',
        'applications'   => 'array',
        'gallery'        => 'array',
        'active'         => 'boolean',
        'featured'       => 'boolean',
        'is_second_hand' => 'boolean',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function scopeActive($query)
    {
        return $query->where('active', true);
    }

    public function scopeFeatured($query)
    {
        return $query->where('featured', true);
    }

    public function scopeSecondHand($query)
    {
        return $query->where('is_second_hand', true);
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function getMetaTitleAttribute($value): string
    {
        return $value ?: "{$this->name} | Cutting European";
    }

    public function getMetaDescriptionAttribute($value): string
    {
        return $value ?: ($this->short_description ?? '');
    }

    public function getCuttingCapacitiesAttribute(): array
    {
        return \App\Services\ProductTechnicalDataService::getCuttingCapacities($this);
    }

    public function getTechnicalParametersAttribute(): array
    {
        return \App\Services\ProductTechnicalDataService::getTechnicalParameters($this);
    }

    public function getVideoDataAttribute(): array
    {
        return \App\Services\ProductTechnicalDataService::getVideoData($this);
    }

    public function getEquipmentAttribute(): array
    {
        return \App\Services\ProductTechnicalDataService::getEquipment($this);
    }

    public function getRentingDataAttribute(): array
    {
        return \App\Services\ProductTechnicalDataService::getEstimatedRentingFee($this);
    }
}
