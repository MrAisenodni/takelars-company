<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MasterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Religion (Agama) => 5
        DB::table('mst_religion')->insert([
            [
                'name'          => 'Islam',
                'created_by'    => 'Migrasi',
                'created_at'    => now(),
                'updated_at'    => null,
            ],
            [
                'name'          => 'Kristen',
                'created_by'    => 'Migrasi',
                'created_at'    => now(),
                'updated_at'    => null,
            ],
            [
                'name'          => 'Buddha',
                'created_by'    => 'Migrasi',
                'created_at'    => now(),
                'updated_at'    => null,
            ],
            [
                'name'          => 'Hindu',
                'created_by'    => 'Migrasi',
                'created_at'    => now(),
                'updated_at'    => null,
            ],
            [
                'name'          => 'Konghucu',
                'created_by'    => 'Migrasi',
                'created_at'    => now(),
                'updated_at'    => null,
            ],
        ]);

        // Category (Kategori) => 3
        DB::table('mst_category')->insert([
            [
                'name'          => 'Portofolio',
                'created_by'    => 'Migrasi',
                'created_at'    => now(),
                'updated_at'    => null,
            ],
            [
                'name'          => 'Artikel',
                'created_by'    => 'Migrasi',
                'created_at'    => now(),
                'updated_at'    => null,
            ],
            [
                'name'          => 'Slider',
                'created_by'    => 'Migrasi',
                'created_at'    => now(),
                'updated_at'    => null,
            ],
        ]);

        // Tag => 3
        DB::table('mst_tag')->insert([
            [
                'name'          => 'Rumah Sakit',
                'created_by'    => 'Migrasi',
                'created_at'    => now(),
                'updated_at'    => null,
            ],
            [
                'name'          => 'Konsultasi',
                'created_by'    => 'Migrasi',
                'created_at'    => now(),
                'updated_at'    => null,
            ],
            [
                'name'          => 'Teknologi',
                'created_by'    => 'Migrasi',
                'created_at'    => now(),
                'updated_at'    => null,
            ],
        ]);

        // Position => 5
        DB::table('mst_position')->insert([
            [
                'name'          => 'Direktur Utama',
                'sequence'      => 2,
                'created_by'    => 'Migrasi',
                'created_at'    => now(),
                'updated_at'    => null,
            ],
            [
                'name'          => 'Komisaris Utama',
                'sequence'      => 1,
                'created_by'    => 'Migrasi',
                'created_at'    => now(),
                'updated_at'    => null,
            ],
            [
                'name'          => 'Manager Keuangan',
                'created_by'    => 'Migrasi',
                'sequence'      => 3,
                'created_at'    => now(),
                'updated_at'    => null,
            ],
            [
                'name'          => 'Manager Operasional',
                'created_by'    => 'Migrasi',
                'sequence'      => 4,
                'created_at'    => now(),
                'updated_at'    => null,
            ],
            [
                'name'          => 'Manager Supervisor',
                'created_by'    => 'Migrasi',
                'sequence'      => 5,
                'created_at'    => now(),
                'updated_at'    => null,
            ],
        ]);
    }
}
