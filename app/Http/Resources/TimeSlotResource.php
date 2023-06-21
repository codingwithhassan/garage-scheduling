<?php

namespace App\Http\Resources;

use App\Enums\WeekDay;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TimeSlotResource extends JsonResource
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
            'week_day' => $this->week_day->name,
            'from_time' => $this->from_time->format('h:i A'),
            'to_time' => $this->to_time->format('h:i A'),
        ];
    }
}
