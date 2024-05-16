<?php

namespace App\Http\Resources;

use DateTime;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductListResource extends JsonResource
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
            'photo' => $this->image,
            'price' => $this->price,
            'updated_at' => (new DateTime($this->created_at))->format('DD-MM-YYYY H:i:s'),
        ];
    }
}
