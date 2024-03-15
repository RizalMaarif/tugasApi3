<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'data' => [
                'id' => $this->id,
                'username' => $this->username,
                'name' => $this->name,
            ],
            'errors' => null,
        ];
    }
}
