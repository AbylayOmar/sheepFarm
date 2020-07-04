<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

use App\Setting;

class DayController extends Controller
{
    function index() {
        $settings = Setting::get();

        $start = Carbon::parse($settings[0] -> start_date);
        $end = Carbon::parse(now());
        $seconds = $end->diffInSeconds($start);

        $today = intdiv($seconds, $settings[0] -> day_duration);

        return $today;
    }
}
