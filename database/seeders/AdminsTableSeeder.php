<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    // password = 12345
    public function run(): void
    {
        $admins_records = [
            ['id'=> 1, 'name'=> 'admin', 'mobile'=> 980000000, 'type'=> 'admin', 'image'=>'', 'email'=>'admin@admin.com',
            'password'=>'$2y$12$bio1L8VVDBMDhHJPrD5uy.YPEL4NQ9GKaPo9gisKLBlQ2oP9EVywq',  'status'=> 1 ],

            ['id'=> 2, 'name'=> 'sub-admin1', 'mobile'=> 980000000, 'type'=> 'subadmin', 'image'=>'', 'email'=>'sub_admin1@admin.com',
            'password'=>'$2y$12$bio1L8VVDBMDhHJPrD5uy.YPEL4NQ9GKaPo9gisKLBlQ2oP9EVywq',  'status'=> 1 ],

            ['id'=> 3, 'name'=> 'sub-admin', 'mobile'=> 980000000, 'type'=> 'subadmin', 'image'=>'', 'email'=>'sub_admin2@admin.com',
            'password'=>'$2y$12$bio1L8VVDBMDhHJPrD5uy.YPEL4NQ9GKaPo9gisKLBlQ2oP9EVywq',  'status'=> 1 ],

        ];

        DB::table('admins')->insert($admins_records);
    }
}
