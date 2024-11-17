<?php

namespace App\Http\Controllers\Api\Admin\Settings;

use App\Http\Controllers\Controller;
use App\Mail\NewUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SettingsController extends Controller
{
    public function currency(Request $request)
    {
        $this->validate($request, [
            'currencies' => ['required', 'array'],
            'currencies.*.currency' => ['required'],
        ], [
            'currencies.*.currency.required' => 'The currency field is required',
        ]);

        foreach ($request->currencies as $currency) {
            $currencies[] = [
                'currency' => $currency['currency'],
                'code' => explode('-', $currency['currency'])[1],
            ];
        }

        // dd($currencies);

        system_set('currencies', $currencies);
    }

    public function bonus(Request $request)
    {
        $this->validate($request, [
            'first_level' => ['required', 'numeric'],
            'second_level' => ['required', 'numeric'],
            'third_level' => ['required', 'numeric'],
        ], []);

        system_set('first_level', (float) $request->first_level);
        system_set('second_level', (float) $request->second_level);
        system_set('third_level', (float) $request->third_level);
    }

    public function contact(Request $request)
    {
        $this->validate($request, [
            'phone' => ['required'],
            'email' => ['required', 'email'],
            'address' => ['required'],
            'email_notification' => ['required', 'email'],
        ], []);

        $contact = [
            'phone' => $request->phone,
            'email' => $request->email,
            'address' => $request->address,
        ];

        Mail::to(system_get('email_notification'))->send(new NewUser());

        system_set('email_notification', $request->email_notification);
        system_set('contact', (array) $contact);
    }
}
