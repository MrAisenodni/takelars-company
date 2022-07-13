<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\{
    DB,
    Hash,
};

class UserSeeder extends Seeder
{
    public function run()
    {
        // Seeder for User
        DB::table('mst_user')->insert([
            [
                'nik'           => '3174010709760007',
                'full_name'     => 'Ratno Hariyanto',
                'gender'        => 'l',
                'birth_place'   => 'Jakarta',
                'birth_date'    => '1976-09-07',
                'email'         => 'ratno.hariyanto@gmail.com',
                'phone_number'  => '+62 813-8575-1959',
                'address'       => 'Jl Tebet Timur No 22D RT 008/RW 010, Kelurahan Tebet Timur, Kecamatan Tebet, Kota Jakarta Selatan',
                'religion_id'   => 1,
                'created_by'    => 'Migrasi',
                'created_at'    => now(),
                'updated_at'    => null,
            ]
        ]);

        // Seeder for Login
        DB::table('stg_login')->insert([
            [
                'username'      => 'takelars_admin',
                'password'      => Hash::make('T@k3lArs!#@'),
                'user_id'       => '1',
                'created_by'    => 'Migrasi',
                'created_at'    => now(),
                'updated_at'    => null,
            ]
        ]);
    }
}
