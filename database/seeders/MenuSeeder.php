<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // This part, seeder for Front End Menu
        DB::table('stg_menu')->insert([
            [
                'title'         => 'Home',
                'url'           => '/',
                'created_by'    => 'Migrasi',
                'created_at'    => now(),
                'updated_at'    => null,
            ],
            [
                'title'         => 'About Us',
                'url'           => '/tentang-kami',
                'created_by'    => 'Migrasi',
                'created_at'    => now(),
                'updated_at'    => null,
            ],
            [
                'title'         => 'Registration',
                'url'           => '/registrasi',
                'created_by'    => 'Migrasi',
                'created_at'    => now(),
                'updated_at'    => null,
            ],
            [
                'title'         => 'Contact Us',
                'url'           => '/kontak-kami',
                'created_by'    => 'Migrasi',
                'created_at'    => now(),
                'updated_at'    => null,
            ],
        ]);
    }
}
