<?php

use Illuminate\Database\Seeder;

use App\Setting;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $settings = new Setting();
        $settings -> start_date = now();
        $settings -> day_duration = 10;
        $settings -> today = 0;
        $settings -> save();
    }
}
