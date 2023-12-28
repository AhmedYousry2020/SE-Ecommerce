<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\ProductCollection;

class CategoryCollection extends JsonResource
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
            'category_name' => $this->category_name ?? '',
            'category_description' => $this->category_description ?? '',
            'category_slug' => $this->category_slug ?? '',
            'parent_id' => $this->parent_id ?? '',
            'childrenCategories' => $this->childrenCategories ? CategoryCollection::collection($this->childrenCategories)  : '', 
            'products' => $this->products ? ProductCollection::collection($this->products)  : '',
        ];
    }
}
