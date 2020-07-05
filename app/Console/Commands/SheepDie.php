<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Sheep;
use App\History;

class SheepDie extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sheep:kill';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Kill sheep from random paddock';

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
            $sheep = Sheep::where([['paddock', 1], ['alive', 1]])->first();
            $sheep -> alive = 0;
            $sheep -> save();

            History::create(['sheep_id' => $sheep->id, 'type' => 'die']);
        } else if (Sheep::where([['paddock', 2], ['alive', 1]])->count() > 1) {
            $sheep = Sheep::where([['paddock', 2], ['alive', 1]])->first();
            $sheep -> alive = 0;
            $sheep -> save();

            History::create(['sheep_id' => $sheep->id, 'type' => 'die']);
        } else if (Sheep::where([['paddock', 3], ['alive', 1]])->count() > 1) {
            $sheep = Sheep::where([['paddock', 3], ['alive', 1]])->first();
            $sheep -> alive = 0;
            $sheep -> save();

            History::create(['sheep_id' => $sheep->id, 'type' => 'die']);
        } else if (Sheep::where([['paddock', 4], ['alive', 1]])->count() > 1) {
            $sheep = Sheep::where([['paddock', 4], ['alive', 1]])->first();
            $sheep -> alive = 0;
            $sheep -> save();

            History::create(['sheep_id' => $sheep->id, 'type' => 'die']);
        } 

        error_log('Sheep die');
    }
}
