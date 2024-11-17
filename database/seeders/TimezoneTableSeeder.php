<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Timezone;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class TimezoneTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Admin::create([
        //     'name' => 'Bryt',
        //     'email' => 'brytphp@gmail.com',
        //     'password' => Hash::make('bryt1991'),
        // ]);

        // Admin::create([
        //     'name' => 'Admin',
        //     'email' => 'admin@gmail.com',
        //     'password' => Hash::make('admin@gmail.com'),
        // ]);

        $referrer = User::create([
            'first_name' => 'Bryt',
            'other_names' => 'Bryt',
            'referral_code' => generate_referral_code(),
            'email' => 'larabryt@gmail.com',
            'password' => Hash::make('bryt1991'),
        ]);

        $referrer2 = User::create([
            'first_name' => 'User',
            'other_names' => 'User',
            'referral_code' => generate_referral_code(),
            'referred_by' => $referrer->id,
            'email' => 'user@gmail.com',
            'password' => Hash::make('user@gmail.com'),
        ]);

        for ($i = 0; $i < 200; $i++) {
            $email = 'user'.$i.'@gmail.com';
            User::create([
                'first_name' => 'User'.$i,
                'other_names' => 'User'.$i,
                'referral_code' => generate_referral_code(),
                'referred_by' => [$referrer->id, $referrer2->id][rand(0, 1)],
                'email' => $email,
                'password' => Hash::make($email),
            ]);
        }

        $timestamp = time();
        foreach (timezone_identifiers_list() as $zone) {
            date_default_timezone_set($zone);
            $zones['offset'] = date('P', $timestamp);
            $zones['diff_from_gtm'] = 'UTC/GMT '.date('P', $timestamp);

            Timezone::updateOrCreate(['name' => $zone], $zones);
        }
    }
}
