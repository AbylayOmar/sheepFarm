<?php

use Illuminate\Database\Seeder;

use App\Sheep;
use Illuminate\Support\Facades\DB;

class SheepSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 3; $i++) {
            Sheep::create(['alive' => 1, 'paddock' => 1]);
        }
        for ($i = 0; $i < 4; $i++) {
            Sheep::create(['alive' => 1, 'paddock' => 2]);
        }
        for ($i = 0; $i < 2; $i++) {
            Sheep::create(['alive' => 1, 'paddock' => 3]);
        }
        Sheep::create(['alive' => 1, 'paddock' => 4]);

    }
}
