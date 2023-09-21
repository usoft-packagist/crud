<?php

namespace Usoft\Crud\Services\User\Responses;

use Illuminate\Http\Resources\Json\JsonResource;
use Usoft\Crud\Services\Upload\Responses\UploadResource;

class UserResource extends JsonResource
{

    public static $wrap = false;

    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'phone' => $this->phone,
        ];
    }
}
