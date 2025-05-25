<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $fillable = [
        'name',
        'address',
        'phone',
        'email',
        'is_active',
    ];
    /**
     * Get the users associated with the store.
     */
    public function users()
    {
        return $this->hasMany(User::class);
    }
    /**
     * Get the products associated with the store.
     */
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
