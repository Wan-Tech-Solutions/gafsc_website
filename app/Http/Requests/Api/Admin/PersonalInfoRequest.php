<?php

declare(strict_types=1);

namespace App\Http\Requests\Api\Admin;

use Illuminate\Foundation\Http\FormRequest;

final class PersonalInfoRequest extends FormRequest
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
            'email' => ['required', 'email'],
            'name' => ['required'],
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function messages(): array
    {
        return [
            'phone.phone' => 'Please provide a valid phone number',
        ];
    }
}
