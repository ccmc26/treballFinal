<?php

namespace App\Http\Resources;

use DateTime;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->title,
            'slug' => $this->slug,
            'description' => $this->description,
            'photo' => $this->image,
            'price' => $this->price,
            'created_at' => (new DateTime($this->created_at))->format('DD-MM-YYYY H:i:s'),
            'updated_at' => (new DateTime($this->created_at))->format('DD-MM-YYYY H:i:s'),
        ];
    }
}
