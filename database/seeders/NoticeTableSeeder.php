<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NoticeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $noticeRecords = [
            ['id' => 1, 'admin_id' => 1, 'notice_cat_id' => 3, 'title' => 'for admission', 'description' => 'admission open for class 2',
            'attachment' => '', 'status' => 1],
            ['id' => 2, 'admin_id' => 1, 'notice_cat_id' => 3, 'title' => 'for exam', 'description' => 'exam for class 2',
            'attachment' => '', 'status' => 1],
        ];

        DB::table('notices')->insert($noticeRecords);
    }
}
