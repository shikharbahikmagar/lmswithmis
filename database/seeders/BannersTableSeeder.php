<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BannersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $banners = [
            ['id'=>1, 'banner_image'=>'banner-item-01.jpg', 'title'=> 'test', 'description'=> 'test', 'status'=>1],
            ['id'=>2, 'banner_image'=>'banner-item-02.jpg', 'title'=> 'test', 'description'=> 'test', 'status'=>1],
            ['id'=>3, 'banner_image'=>'banner-item-03.jpg', 'title'=> 'test', 'description'=> 'test', 'status'=>1]
        ];

        DB::table('banners')->insert($banners);
    }
}
