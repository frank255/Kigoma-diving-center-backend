<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BookingResource extends JsonResource
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
            'id' => $this->id,
            "booking_reference" => $this->booking_reference,
            'fullname' => $this->fullname,
            'nationality' => $this->nationality,
            'email' => $this->email,
            'no_people' => $this->no_people,
            'no_children' => $this->no_children,
            'allergies' => $this->allergies,
            'services' => $this->services,
            'start' => $this->start,
            'end' => $this->end,
            'info' => $this->info,
        ];
    }
}
