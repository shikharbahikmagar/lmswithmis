<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookReqTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $book_req = [
            ['student_id' => 2, 'book_id' => 2, 'request_date' => '2024-05-06', 'return_date' => '2024-05-06', 'status' => 'pending'],
            ['student_id' => 2, 'book_id' => 6, 'request_date' => '2024-05-06', 'return_date' => '2024-05-06', 'status' => 'pending'],
            ['student_id' => 2, 'book_id' => 3, 'request_date' => '2024-05-06', 'return_date' => '2024-05-06', 'status' => 'pending'],
            ['student_id' => 2, 'book_id' => 4, 'request_date' => '2024-05-06', 'return_date' => '2024-05-06', 'status' => 'pending'],
            ['student_id' => 2, 'book_id' => 5, 'request_date' => '2024-05-06', 'return_date' => '2024-05-06', 'status' => 'pending'],
            ['student_id' => 6, 'book_id' => 6, 'request_date' => '2024-05-06', 'return_date' => '2024-05-06', 'status' => 'pending'],
            ['student_id' => 6, 'book_id' => 7, 'request_date' => '2024-05-06', 'return_date' => '2024-05-06', 'status' => 'pending'],
            ['student_id' => 6, 'book_id' => 8, 'request_date' => '2024-05-06', 'return_date' => '2024-05-06', 'status' => 'pending'],
            ['student_id' => 6, 'book_id' => 9, 'request_date' => '2024-05-06', 'return_date' => '2024-05-06', 'status' => 'pending'],
            ['student_id' => 6, 'book_id' => 2, 'request_date' => '2024-05-06', 'return_date' => '2024-05-06', 'status' => 'pending'],
        ];

        DB::table('book_requests')->insert($book_req);
    }
}
