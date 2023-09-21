<?php

namespace Usoft\Crud\Requests;

use Usoft\Crud\Abstracts\Http\FormRequest;

class DestroyRequest extends FormRequest
{
    public function validations()
    {
        return [
            'id' => 'required|integer',
            'is_force_destroy' => 'sometimes|boolean'
        ];
    }
}
