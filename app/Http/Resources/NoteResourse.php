<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class NoteResourse extends JsonResource
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
          'full_name' => $this->full_name,
            'company' => $this->company,
            'telephone' => $this->telephone,
            'email' => $this->email,
            'DOB' => $this->DOB,
            'foto' => $this->foto,
        ];
    }
}
