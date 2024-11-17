<?php

declare(strict_types=1);

namespace App\Http\Requests;

use App\Rules\MatchOldPassword;
use Illuminate\Foundation\Http\FormRequest;

final class PasswordUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => 'required|string|min:5|max:15|regex:/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,15}$/',
            'password_confirmation' => 'required|same:new_password',
        ];
    }

    public function messages(): array
    {
        return [
            'new_password.regex' => 'Password must contain at least 1 Uppercase, 1 lowercase, 1 number and between 5 to 15 characters.',
        ];
    }
}
