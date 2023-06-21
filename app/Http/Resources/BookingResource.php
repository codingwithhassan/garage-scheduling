<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BookingResource extends JsonResource
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
            'user_id' => $this->user_id,
            'vehicle_id' => $this->vehicle_id,
            'book_at' => $this->book_at->format("F jS, Y"),
            'end_at' => $this->end_at->format("F jS, Y"),
            'has_ended' => $this->end_at->isPast(),
            'user' => UserResource::make($this->user),
            'vehicle' => VehicleResource::make($this->vehicle),
        ];
    }
}
