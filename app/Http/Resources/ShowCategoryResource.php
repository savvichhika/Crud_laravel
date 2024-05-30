<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ShowCategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'=>$this ->id,
            'name'=>$this ->name,
            'description'=>$this ->description,
            'created_at'=>$this ->created_at->format('d M Y'),
            'updated_at'=>$this ->updated_at,
            'products' => $this ->products,
            'total_products'=>$this ->products->count(),
            
        ];
    }
}
