<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $fillable = [
        'product_id',
        'quantity_available',
    ];

    /**
     * Get the product associated with the inventory.
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    /**
     * Check if the inventory is sufficient for a given quantity.
     */
    public function isSufficient($quantity)
    {
        return $this->quantity >= $quantity;
    }
}
