<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $booksRecord = [
            ['id'=>1, 'title'=>'The Alchemist', 'author'=> 'paulo coelo', 'category_id'=>13, 'added_by'=>1,
            'book_image'=> '', 'description'=> 'The Alchemist is a novel by Brazilian author Paulo Coelho which was first published in 1988. Originally written in Portuguese, it became a widely translated international bestseller.',
            'status'=>1],
            ['id'=>2, 'title'=>'Tom Lake', 'author'=> 'Ann Patchett', 'category_id'=>13, 'added_by'=>1,
            'book_image'=> '', 'description'=> 'Tom Lake is a 2023 novel by Ann Patchett. It was published by Harper on August 1, 2023. The book relates the story of three daughters who yearn to know about their mother youthful relationship with a famous actor.',
            'status'=>1],
            ['id'=>3, 'title'=>'Funny Story', 'author'=> 'Emily Henry', 'category_id'=>13, 'added_by'=>1,
            'book_image'=> '', 'description'=> 'The Alchemist is a novel by Brazilian author Paulo Coelho which was first published in 1988. Originally written in Portuguese, it became a widely translated international bestseller.',
            'status'=>1],
        ];

        DB::table('books')->insert($booksRecord);
    }
}
