<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id',
        'status',
        'total_price',
       
    ];

    /**
     * Get the user that owns the order.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the items in the order.
     */
    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
    public function shipment()
    {
        return $this->hasOne(Shipment::class);
    }
}
