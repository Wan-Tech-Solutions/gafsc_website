<?php

declare(strict_types=1);

namespace App\Http\Requests;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

final class SignUpRequest extends FormRequest
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
        if ($this->account_type == 'business') {
            return [
                'account_type' => ['required'],
                'business_name' => ['required'],
                'phone' => ['nullable', 'phone:AUTO,'.$this->country],
                'country' => ['required'],
                'ref' => ['nullable'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', Password::min(8)
                    ->mixedCase()
                    ->numbers()
                    ->uncompromised(), 'confirmed', ],
            ];
        }

        return [
            'account_type' => ['required'],
            'first_name' => ['required'],
            'other_names' => ['required'],
            'identity' => ['required'],
            'phone' => ['nullable', 'phone:AUTO,'.$this->country],
            'country' => ['required'],
            'ref' => ['nullable'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', Password::min(8)
                ->mixedCase()
                ->numbers()
                ->uncompromised(), 'confirmed', ],
        ];
    }

    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            $find_user = User::whereEmail($this->email)->first();
            // $find_counselor = Counselor::whereEmail($this->email)->first();
            $find_admin = Admin::whereEmail($this->email)->first();

            if ($this->identity == null && $this->account_type != 'business') {
                $validator->errors()->add('identity', 'Please upload an identity document');
            }

            if ($find_user != null) {
                $validator->errors()->add('email', 'The email has already been taken.');
            }
            // elseif ($find_counselor != null) {
            //     $validator->errors()->add('email', 'The email has already been taken.');
            // }
            elseif ($find_admin != null) {
                $validator->errors()->add('email', 'The email has already been taken.');
            }
        });
    }

    /**
     * Get the validation messages that apply to the request.
     */
    public function messages(): array
    {
        return [
            'institution_name.required_if' => 'The institution name is required',
            'phone.phone' => 'Please provide a valid phone number',
        ];
    }
}
