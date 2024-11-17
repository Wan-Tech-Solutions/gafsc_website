<?php

namespace App\Utilities;

use App\Mail\NewUser;
use App\Models\User;
use App\Models\Wallet;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Plank\Mediable\Media;

class Registration
{
    public function user($request)
    {
        $request['password'] = Hash::make($request['password']);

        $user = User::create($request + [
            'referred_by' => $this->getRefererByRef($request['ref']),
            'referral_code' => $this->generate_referral_code(),
        ]);
        Auth::login($user);

        $identity = Media::where('id', $request['identity'])->first();
        //will not delete files

        $user->syncMedia($identity, 'identity');

        Mail::to(system_get('email_notification'))->send(new NewUser($user));

        Wallet::updateOrCreate([
            'user_id' => $user->id,
        ], [
            'main_wallet' => 0,
            'compounding_wallet' => 0,
            'referral_wallet' => 0,
        ]);

        return true;
    }

    public function business($request)
    {
        $request['password'] = Hash::make($request['password']);

        $user = User::create($request + [
            'referred_by' => $this->getRefererByRef($request['ref']),
            'referral_code' => $this->generate_referral_code(),
            'is_business' => 1,
        ]);
        Auth::login($user);

        Mail::to(system_get('email_notification'))->send(new NewUser($user));

        Wallet::updateOrCreate([
            'user_id' => $user->id,
        ], [
            'main_wallet' => 0,
            'compounding_wallet' => 0,
            'referral_wallet' => 0,
        ]);

        return true;
    }

    protected function getRefererByRef($ref)
    {
        if (! empty($ref) || $ref != null) {
            $user = User::where('referral_code', $ref)->first();

            if (! empty($user) || $user != null) {
                return $user->id;
            }

            return null;
        }
    }

    private function generate_referral_code()
    {
        $bytes = random_bytes(4);

        return bin2hex($bytes);
    }
}
