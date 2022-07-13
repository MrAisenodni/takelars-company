<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProviderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // This part, seeder for Front End Menu
        DB::table('stg_provider')->insert([
            [
                'company_name'          => 'PT Takelars Globalindo',
                'company_birth_place'   => 'Jakarta',
                'company_birth_date'    => '1998-02-19',
                'company_phone_number'  => '+62 813-8575-1959',
                'company_email'         => 'takelarskonsultan@gmail.com',
                'company_address'       => 'Perumahan Bulak Kapal Permai Jl. Kerinci 4 Blok AG 4 No. 80, Jatimulya, Tambun Selatan, Bekasi, Jawa Barat',
                'company_description'   => 'Mewujudkan Rumah Sakit Prima Melalui Akreditasi Untuk Peningkatan Kinerja dan Mutu Layanan. Optimalisasi Kinerja dan Peningkatan Mutu layanan rumah sakit melalui implementasi akreditasi rumah sakit disertai penggunaan tools pengukuran kinerja manajemen rumah sakit sesuai amanah undang- undang Nomor 44 tahun 2009',
                'company_logo'          => '/favicon.png',
                'company_logo_text'     => '/images/logo.jpg',
                'owner_name'            => 'Ratno Haryanto',
                'owner_position'        => 'Owner',
                'owner_birth_place'     => 'Jakarta',
                'owner_birth_date'      => '1998-02-19',
                'owner_phone_number'    => '+62 813-8575-1959',
                'owner_email'           => 'ratno.hariyanto@gmail.com',
                'owner_photo'           => '/images/users/ratno.jpg',
                'created_by'            => 'Migrasi',
                'created_at'            => now(),
                'updated_at'            => null,
            ]
        ]);
    }
}
