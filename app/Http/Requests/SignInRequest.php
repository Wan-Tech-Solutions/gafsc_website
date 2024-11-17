<?php

declare(strict_types=1);

namespace App\Http\Requests;

use App\Models\Admin;
use App\Models\LoginLog;
use App\Models\User;
use App\Notifications\OTPNotification;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

final class SignInRequest extends FormRequest
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
            'email' => ['required'],
            'password' => ['required'],
        ];
    }

    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            $log = new LoginLog();
            $log->ip = $this->getClientIp();
            $log->agent = $this->server('HTTP_USER_AGENT');

            if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
                $find_user = User::whereEmail($this->email)->first();
                session(['take_user_to' => 'user.dashboard.index']);
                $find_user->logins()->save($log);

            // $otp = rand(999, 9999);

                // $find_user->update([
                //     'otp' => $otp,
                // ]);

                // $find_user->notify(new OTPNotification($otp));
            } elseif (Auth::guard('admin')->attempt(['email' => $this->email, 'password' => $this->password])) {
                $find_admin = Admin::whereEmail($this->email)->first();
                session(['take_user_to' => 'admin.dashboard.index']);
                $find_admin->logins()->save($log);
            } else {
                $validator->errors()->add('email', 'These credentials do not match our records');
            }
        });
    }

    /**
     * Get the validation messages that apply to the request.
     */
    public function messages(): array
    {
        return [];
    }
}
