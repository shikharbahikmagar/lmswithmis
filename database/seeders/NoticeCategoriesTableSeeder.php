<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NoticeCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $noticeCat = [
            ['id'=>1, 'category_name'=> 'Examination', 'status'=> 1],
            ['id'=>2, 'category_name'=> 'General', 'status'=> 1],
            ['id'=>3, 'category_name'=> 'parent Information', 'status'=> 1],
        ];

        DB::table('notice_categories')->insert($noticeCat);
    }
}
