<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'item_title',
        'shop_id',
        'catgeory_id',
        'item_sku',
        'identifier',
        'price',
        'discount',
        'qty',
        'image',
        'seo_keywords',
        'approved'
     ];

    public function shop()
    {
        return $this->belongsTo(Shop::class,'shop_id');
    }
    
    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }
  
}
