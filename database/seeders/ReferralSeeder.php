<?php

namespace Database\Seeders;

use App\Models\User;
use App\Utilities\Referral;
use Faker\Generator;
use Hash;
use Illuminate\Container\Container;
use Illuminate\Database\Seeder;

class ReferralSeeder extends Seeder
{
    /**
     * The current Faker instance.
     *
     * @var \Faker\Generator
     */
    protected $faker;

    /**
     * Create a new seeder instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->faker = $this->withFaker();
    }

    /**
     * Get a new Faker instance.
     *
     * @return \Faker\Generator
     */
    protected function withFaker()
    {
        return Container::getInstance()->make(Generator::class);
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dates = [
            '2019-06-03 10:06:29',
            '2019-06-21 10:06:29',
            '2019-08-28 10:06:29',
            '2019-10-16 10:06:29',
            '2019-11-11 10:06:29',
            '2019-11-15 10:06:29',
            '2019-11-23 10:06:29',
            '2020-07-27 10:06:29',
            '2020-07-31 10:06:29',
            '2020-08-15 10:06:29',
            '2020-08-24 10:06:29',
            '2020-09-14 10:06:29',
            '2020-09-21 10:06:29',
            '2020-09-25 10:06:29',
            '2020-09-30 10:06:29',
            '2020-11-21 10:06:29',
            '2020-11-29 10:06:29',
            '2020-12-17 10:06:29',
            '2020-12-28 10:06:29',
            '2021-01-07 10:06:29',
            '2021-01-18 10:06:29',
            '2021-02-19 10:06:29',
            '2021-06-05 10:06:29',
            '2021-06-30 10:06:29',
            '2021-07-09 10:06:29',
            '2021-07-31 10:06:29',
            '2021-08-07 10:06:29',
            '2021-09-16 10:06:29',
            '2021-10-07 10:06:29',
            '2021-10-14 10:06:29',
            '2021-10-24 10:06:29',
            '2021-11-23 10:06:29',
            '2021-11-30 10:06:29',
            '2021-12-22 10:06:29',
            '2022-01-24 10:06:29',
            '2022-04-04 10:06:29',
            '2022-06-18 10:06:29',
            '2022-08-07 10:06:29',
            '2022-09-26 10:06:29',
            '2022-10-17 10:06:29',
            '2022-10-19 10:06:29',
            '2022-10-28 10:06:29',
            '2022-12-05 10:06:29',
            '2022-12-06 10:06:29',
            '2023-01-05 10:06:29',
            '2023-01-12 10:06:29',
            '2023-02-04 10:06:29',
            '2023-02-14 10:06:29',
            '2023-02-18 10:06:29',
            '2023-02-20 10:06:29',
        ];

        $referrers = [212, 214, 217, 216];

        $faker = $this->faker;

        foreach ($dates as $date) {
            $email = $faker->unique()->safeEmail;
            $email = str_replace('example.com', 'gmail.com', $email);
            $email = str_replace('example.org', 'hotmail.com', $email);
            $email = str_replace('example.net', 'live.com', $email);

            $original_referer = $referrers[rand(0, count($referrers) - 1)];

            $referrer = User::create([
                'first_name' => $faker->firstNameMale,
                'other_names' => $faker->lastName,
                'referral_code' => generate_referral_code(),
                'email' => $email,
                'email_verified_at' => now(),
                'account_verified_at' => now(),
                'is_business' => 0,
                'referred_by' => $original_referer,
                'password' => Hash::make('carlcorp'),

            ]);

            $amount = rand(999, 9999);
            Referral::addBonusAndBackDate($referrer, (float) $amount, null, $date);

            for ($i = 1; $i <= rand(1, 12); $i++) {
                $email = $faker->unique()->safeEmail;
                $email = str_replace('example.com', 'gmail.com', $email);
                $email = str_replace('example.org', 'hotmail.com', $email);
                $email = str_replace('example.net', 'live.com', $email);

                $second_referrer = User::create([
                    'first_name' => $faker->firstNameMale,
                    'other_names' => $faker->lastName,
                    'referral_code' => generate_referral_code(),
                    'email' => $email,
                    'email_verified_at' => now(),
                    'account_verified_at' => now(),
                    'is_business' => 0,
                    'referred_by' => $referrer->id,
                    'password' => Hash::make('carlcorp'),

                ]);

                $amount = rand(999, 9999);
                Referral::addBonusAndBackDate($second_referrer, (float) $amount, null, $date);

                for ($i = 1; $i <= rand(1, 10); $i++) {
                    $email = $faker->unique()->safeEmail;
                    $email = str_replace('example.com', 'gmail.com', $email);
                    $email = str_replace('example.org', 'hotmail.com', $email);
                    $email = str_replace('example.net', 'live.com', $email);

                    $third_referrer = User::create([
                        'first_name' => $faker->firstNameMale,
                        'other_names' => $faker->lastName,
                        'referral_code' => generate_referral_code(),
                        'email' => $email,
                        'email_verified_at' => now(),
                        'account_verified_at' => now(),
                        'is_business' => 0,
                        'referred_by' => $second_referrer->id,
                        'password' => Hash::make('carlcorp'),

                    ]);
                    $amount = rand(999, 9999);
                    Referral::addBonusAndBackDate($third_referrer, (float) $amount, null, $date);
                }
            }

            $referrer->update([
                'created_at' => $date,
            ]);
        }
    }
}
