<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $events = [
            ['id'=> 1, 'event_cat_id' => 1, 'title' => 'Event 1', 'description' => 'Description 1', 'event_banner' => 'event_banner_1.jpg', 'event_date' => '2022-12-31', 'start_time' => '09:00', 'duration' => '2 hours', 'location' => 'Location 1', 'status'=>1],
            ['id'=> 2, 'event_cat_id' => 2, 'title' => 'Event 2', 'description' => 'Description 2', 'event_banner' => 'event_banner_2.jpg', 'event_date' => '2023-01-01', 'start_time' => '10:00', 'duration' => '3 hours', 'location' => 'Location 2', 'status'=>1],
        ];

        DB::table('events')->insert($events);
    }
}
