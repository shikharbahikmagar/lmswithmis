<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
         //$this->call(AdminsTableSeeder::class);
        //  $this->call(CategoriesTableSeeder::class);
        // $this->call(BooksTableSeeder::class);
        // $this->call(GradesTableSeeder::class);
        // $this->call(SubjectsTableSeeder::class);
        // $this->call(TeachersTableSeeder::class);
        //  $this->call(TeacherSecheduleTableSeeder::class);
        //$this->call(StudentsTableSeeder::class);
        //  $this->call(NoticeCategoriesTableSeeder::class);
        // $this->call(NoticeTableSeeder::class);
        // $this->call(BannersTableSeeder::class);
        // $this->call(EventCatTableSeeder::class);
        // $this->call(EventsTableSeeder::class);
        $this->call(BookReqTableSeeder::class);
    }
}
