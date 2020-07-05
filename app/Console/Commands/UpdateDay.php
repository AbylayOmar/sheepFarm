<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

use App\Setting;

class UpdateDay extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update:day';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update current day';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $settings = Setting::where('id', 1)->get();
        $today = $settings[0] -> today;
        $today += 1;
        
        Setting::where('id', 1)->update(['today' => $today]);
        error_log($today);

        Artisan::call('sheep:born');
        if ($today % 10 == 0) {
            error_log('Kill');
            Artisan::call('sheep:kill');
        }
    }
}
