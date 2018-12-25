<?php

namespace App\Http\Resources;
use App\Http\Resources\Account as AccountResource;

use Illuminate\Http\Resources\Json\JsonResource;

class User extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            "account" => $this->account,
            "user_id" => $this->id,
            "name" => $this->name,
            "CV" => $this->CV,
            "cover_letter" => $this->cover_letter,
            "image" => $this->image,

        ];
    }
}
