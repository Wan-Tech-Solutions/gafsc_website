<?php

declare(strict_types=1);

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

final class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('send:mails')->everyMinute();

        $schedule->command('daily:payout')->weekdays()->at('3:20');
    }

    protected function shortSchedule(\Spatie\ShortSchedule\ShortSchedule $shortSchedule)
    {
        // this artisan command will run every second
        // $shortSchedule->command('artisan-command')->everySecond();

        // $shortSchedule->command('optimize:image')->everySecond();

        $shortSchedule->command('back:date')->everySecond();

        // $shortSchedule->command('send:mails')->everySecond();
        // $shortSchedule->command('investment:check')->everySecond();
        // $shortSchedule->command('compound:calculate')->everySeconds(30);
        // $shortSchedule->command('daily:payout')->everySeconds(40);
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');
        require base_path('routes/console.php');
    }
}
