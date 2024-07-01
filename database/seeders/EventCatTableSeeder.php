<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventCatTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $eventCatsRecord = [
            ['id'=>1, 'category_name'=>'sports', 'status'=>1],
            ['id'=>2, 'category_name'=>'entertainment', 'status'=>1],
            ['id'=>3, 'category_name'=>'finance', 'status'=>1],
        ];

        DB::table('event_categories')->insert($eventCatsRecord);
    }
}
