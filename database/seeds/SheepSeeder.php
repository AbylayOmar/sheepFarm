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
        for ($i = 0; $i < 10; $i++) {
            Sheep::create(['alive' => 1, 'paddock' => rand(1, 4)]);
        }

    }
}
