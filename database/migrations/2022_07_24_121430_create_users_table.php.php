<?php

declare(strict_types=1);

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->uuid()->index();
            $table->string('service_number')->unique()->nullable();
            $table->string('prefix')->nullable();
            $table->string('first_name')->nullable();
            $table->string('other_names')->nullable();
            $table->string('email')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->datetime('account_blocked_at')->nullable();
            $table->datetime('account_verified_at')->nullable();
            $table->string('otp')->nullable();
            $table->string('phone')->nullable();
            $table->string('sex')->nullable();
            $table->date('dob')->nullable();
            $table->string('address')->nullable();
            $table->string('display_name')->nullable();
            $table->string('theme')->default('light');
            $table->string('password');
            $table->string('verification_code')->nullable();
            $table->datetime('verification_code_expires_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

        $user = User::create([
            'first_name' => 'Bryt',
            'other_names' => 'Bright',
            'service_number' => 'GH/30682',
            'email' => 'larabryt@gmail.com',
            'password' => Hash::make('bryt1991'),
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
