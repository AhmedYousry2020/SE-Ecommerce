<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\ShopCollection;

class ProductCollection extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id ?? '',
            'item_title' => $this->item_title ?? '',
            'item_sku' => $this->item_sku ?? '',
            'identifier' => $this->identifier ?? '',
            'price' => $this->price ?? '',
            'discount' => $this->price ?? '',
            'qty' => $this->price ?? '',
            'seo_keywords' => $this->seo_keywords ?? '',
            'approved' => $this->approved ? 'approved' : 'pending',
            'category_id' => $this->category_id ?? '', 
            'shop' => $this->shop ? new ShopCollection($this->shop)  : '',
        ];
    }
}
