<?php

namespace App\Models;

use App\Models\OrderProduct;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    use HasFactory;

    /**
     * The customer who placed the order.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }




    /**
     * The products that belong to the Order
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class, 'order_products')
            ->withPivot('id', 'product_id', 'user_id', 'price', 'quantity')
            ->withTimestamps();
    }


/**
 * The order items.
 */
    public function order_products(): HasMany
    {
        return $this->hasMany(OrderProduct::class, 'order_id');
    }
}
