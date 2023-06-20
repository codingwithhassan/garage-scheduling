<?php

namespace Database\Seeders;

use App\Models\TimeSlot;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TimeslotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($weekDay = 1; $weekDay <= 5; $weekDay++){
            TimeSlot::updateOrCreate([
                'week_day' => $weekDay,
                'from_time' => Carbon::parse("5:00 am")->format('H:i'),
                'to_time' => Carbon::parse("9:30 pm")->format('H:i'),
            ]);
        }
    }
}
