<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskSqlFilterRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    /** @return string[] */
    public function rules(): array
    {
        return [
            'is_filter' => 'bool',
        ];
    }
}
