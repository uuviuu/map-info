<?php

namespace App\Http\Requests;

use App\Dto\CreateUserDto;
use App\Http\Requests\Traits\HasDto;
use Illuminate\Foundation\Http\FormRequest;

/**
 * @method CreateUserDto dto(array $data = [])
 */
class CreateUserRequest extends FormRequest
{
    use HasDto;

    public function authorize(): bool
    {
        return true;
    }

    /** @return string[] */
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|string',
        ];
    }

    protected function getDto(): string
    {
        return CreateUserDto::class;
    }
}
