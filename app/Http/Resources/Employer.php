<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Employer extends JsonResource
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
            "employer_id" => $this->id,
            "description" => $this->Description,
            "id_location" => $this->id_location,
            "url_avatar" => $this->url_avatar,
            "url_bia" => $this->url_bia,
        ];
    }
}
