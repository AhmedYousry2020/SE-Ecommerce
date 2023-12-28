<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'shop_id',
        'product_id',
        'order_code',
        'sub_total',
        'shipment_fees',
        'total_amount',
        'order_status',
        'payment_method',
        'payment_status',
        'tax',
        'item_quantity',
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    
    public function shop()
    {
        return $this->belongsTo(Shop::class,'shop_id');
    }
}
