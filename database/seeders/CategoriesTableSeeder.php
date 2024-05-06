<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categoryRecords = [
            ['id'=>1, 'category_name'=>'Fiction', 'table_no'=>'100', 'category_image'=> '',
            'status'=>1],
            ['id'=>2, 'category_name'=>'Arts', 'table_no'=>'200', 'category_image'=> '',
            'status'=>1],
            ['id'=>3, 'category_name'=>'Religion', 'table_no'=>'300', 'category_image'=> '',
            'status'=>1],            
        ];

        DB::table('categories')->insert($categoryRecords);
    }
}
