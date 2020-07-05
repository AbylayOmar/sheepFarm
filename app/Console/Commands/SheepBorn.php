<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Sheep;
use App\History;

class SheepBorn extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sheep:born';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Born sheeps in paddocks';

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
        if (Sheep::where([['paddock', 1], ['alive', 1]])->count() > 1) {
            Sheep::insert(['alive' => 1, 'paddock' => 1]);
            History::create(['sheep_id' => Sheep::all()->count(), 'type' => 'born']);
        } 
        if (Sheep::where([['paddock', 2], ['alive', 1]])->count() > 1) {
            Sheep::insert(['alive' => 1, 'paddock' => 2]);
            History::create(['sheep_id' => Sheep::all()->count(), 'type' => 'born']);
        }
        if (Sheep::where([['paddock', 3], ['alive', 1]])->count() > 1) {
            Sheep::insert(['alive' => 1, 'paddock' => 3]);
            History::create(['sheep_id' => Sheep::all()->count(), 'type' => 'born']);
        }
        if (Sheep::where([['paddock', 4], ['alive', 1]])->count() > 1) {
            Sheep::insert(['alive' => 1, 'paddock' => 4]);
            History::create(['sheep_id' => Sheep::all()->count(), 'type' => 'born']);
        } 
        error_log('Sheeps was born');
    }
}
