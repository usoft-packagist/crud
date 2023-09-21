<?php

namespace Usoft\Crud\Requests;

use Usoft\Crud\Abstracts\Http\FormRequest;

class ShowRequest extends FormRequest
{
    public function validations()
    {
        return [
            'id' => 'required|integer'
        ];
    }
}
