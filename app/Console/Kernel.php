<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;



class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')->hourly();
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
    protected $commands = [
     
        \App\Console\Tablescommands\CreateTable::class,
    
        \App\Console\Tablescommands\Generatemodelcontfiles::class,
        \App\Console\Tablescommands\CreateTableView::class,
<<<<<<< HEAD

=======
        \App\Console\Tablescommands\GenerateController::class
>>>>>>> 9f59d2e981522a1810b74890516893c0f126ae76

    ];
   
}
