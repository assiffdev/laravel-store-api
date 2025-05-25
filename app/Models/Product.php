<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
        'price',
        'stock',
        'store_id',
        'category_id',
        'is_active',
        'image_url',    
        // SEO fields
        'meta_title',
        'meta_description',
        'meta_keywords',
        'og_title',
        'og_description',
        'og_image',
        'conaonical_url',
    ];
    

    public function getRouteKeyName()
    {
        return 'slug';
    }

 

    /**
     * Get the store that owns the product.
     */
    public function store()
    {
        return $this->belongsTo(Store::class);
    }

    /**
     * Get the category that owns the product.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function cartItems()
    {
        return $this->hasMany(CartItem::class);
    }
    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
    public function inventory()
    {
        return $this->hasOne(Inventory::class);
    }
}
