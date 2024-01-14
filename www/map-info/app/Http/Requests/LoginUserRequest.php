<?php

namespace App\Http\Requests;

use App\Dto\LoginUserDto;
use App\Http\Requests\Traits\HasDto;
use Illuminate\Foundation\Http\FormRequest;

/**
 * @method LoginUserDto dto(array $data = [])
 */
class LoginUserRequest extends FormRequest
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
            'email' => 'required|email|exists:users,email',
            'password' => 'required|string',
            'is_remember' => 'bool',
        ];
    }

    protected function getDto(): string
    {
        return LoginUserDto::class;
    }
}
