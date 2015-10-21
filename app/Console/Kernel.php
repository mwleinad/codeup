<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

use App\Link;
use App;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        \App\Console\Commands\Inspire::class,
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        //$schedule->command('inspire')
        //         ->hourly();
        $schedule->call('App\Link@DecreasePoints')->everyFiveMinutes();
    }

    protected function handle()
    {
        try
        {
            return parent::handle($request);
        }
        catch(\Symfony\Component\HttpKernel\Exception\NotFoundHttpException $e)
        {
            return $this->app->make('Illuminate\Routing\ResponseFactory')->view('error.404', [], 404);
        }
        catch (Exception $e)
        {
            throw $e;
        }
    }

    
}
