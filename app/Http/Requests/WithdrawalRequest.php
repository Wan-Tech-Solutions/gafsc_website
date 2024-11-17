<?php

declare(strict_types=1);

namespace App\Http\Requests;

use App\Models\WithdrawalMethod;
use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

final class WithdrawalRequest extends FormRequest
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
            'amount' => ['required', 'numeric', 'min:10'],
            'address' => ['required'],
            'currency' => ['required'],
            'verification_code' => ['required'],
        ];
    }

    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            if (now()->isWeekend()) {
                $validator->errors()->add('currency', 'This request cannot be processed on weekend.');
            }

            $main_wallet = auth()->user()->wallet != null ? auth()->user()->wallet->main_wallet : 0;
            if ($this->amount > $main_wallet) {
                $validator->errors()->add('amount', 'Insufficient fund to complete this transaction');
            }

            if (! empty(auth()->user()->verification_code_expires_at) && auth()->user()->verification_code_expires_at->diffInMinutes(Carbon::now()) > 30) {
                $validator->errors()->add('verification_code', 'Verification code haas expired. Please request a new code');
            } elseif ($this->verification_code != auth()->user()->verification_code) {
                $validator->errors()->add('verification_code', 'Verification code does not match');
            }

            $currency = WithdrawalMethod::whereCurrency($this->currency)->first();

            if ($this->amount > $currency->max_amount) {
                $validator->errors()->add('amount', 'You can withdraw maximum amount of $'.money($currency->max_amount));
            }

            if ($this->amount < $currency->min_amount) {
                $validator->errors()->add('amount', 'You can withdraw minimum amount of $'.money($currency->min_amount));
            }
        });
    }

    /**
     * Get the validation messages that apply to the request.
     */
    public function messages(): array
    {
        return [
            //
        ];
    }
}
