<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MapInfoRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    /** @return string[] */
    public function rules(): array
    {
        return [
            'search' => 'required|string|max:255',
        ];
    }
}
