<?php

declare(strict_types=1);

namespace App\Http\Requests\Api\User;

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
            'prefix' => ['nullable'],
            'first_name' => ['required'],
            'other_names' => ['required'],
            'phone' => ['nullable', 'phone:AUTO,'.$this->country],
            'country' => ['required'],
            'address' => ['nullable'],
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
