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
        // This section, seeder for Front End Menu
        DB::table('stg_menu')->insert([
            [
                'title'         => 'Home',
                'icon'          => null,
                'url'           => '/',
                'parent'        => 0,
                'admin'         => 0,
                'created_by'    => 'Migrasi',
                'created_at'    => now(),
                'updated_at'    => null,
            ],
            [
                'title'         => 'About',
                'icon'          => null,
                'url'           => '/tentang-kami',
                'parent'        => 0,
                'admin'         => 0,
                'created_by'    => 'Migrasi',
                'created_at'    => now(),
                'updated_at'    => null,
            ],
            [
                'title'         => 'Registration',
                'icon'          => null,
                'url'           => '/registrasi',
                'parent'        => 0,
                'admin'         => 0,
                'created_by'    => 'Migrasi',
                'created_at'    => now(),
                'updated_at'    => null,
            ],
            [
                'title'         => 'Contact',
                'icon'          => null,
                'url'           => '/kontak-kami',
                'parent'        => 0,
                'admin'         => 0,
                'created_by'    => 'Migrasi',
                'created_at'    => now(),
                'updated_at'    => null,
            ],
            
            // This section for Back End Menu (Administrator)
            [
                'title'         => 'Dashboard',
                'icon'          => 'fa fa-dashboard',
                'url'           => '/adm-dashboard',
                'parent'        => 0,
                'admin'         => 1,
                'created_by'    => 'Migrasi',
                'created_at'    => now(),
                'updated_at'    => null,
            ],
            [
                'title'         => 'Blog',
                'icon'          => 'fa fa-edit',
                'url'           => '/adm-blog',
                'parent'        => 0,
                'admin'         => 1,
                'created_by'    => 'Migrasi',
                'created_at'    => now(),
                'updated_at'    => null,
            ],
            [
                'title'         => 'Portofolio',
                'icon'          => 'fa fa-trophy',
                'url'           => '/adm-portofolio',
                'parent'        => 0,
                'admin'         => 1,
                'created_by'    => 'Migrasi',
                'created_at'    => now(),
                'updated_at'    => null,
            ],
            [
                'title'         => 'Layanan',
                'icon'          => 'fa fa-gavel',
                'url'           => '/adm-layanan',
                'parent'        => 0,
                'admin'         => 1,
                'created_by'    => 'Migrasi',
                'created_at'    => now(),
                'updated_at'    => null,
            ],
            [
                // id = 9
                'title'         => 'Master',
                'icon'          => 'fa fa-database',
                'url'           => '/adm-master',
                'parent'        => 1,
                'admin'         => 1,
                'created_by'    => 'Migrasi',
                'created_at'    => now(),
                'updated_at'    => null,
            ],
            [
                'title'         => 'Pengguna',
                'icon'          => 'fa fa-user',
                'url'           => '/adm-pengguna',
                'parent'        => 0,
                'admin'         => 1,
                'created_by'    => 'Migrasi',
                'created_at'    => now(),
                'updated_at'    => null,
            ],
            [
                'title'         => 'Profil Perusahaan',
                'icon'          => 'fa fa-building',
                'url'           => '/adm-provider',
                'parent'        => 0,
                'admin'         => 1,
                'created_by'    => 'Migrasi',
                'created_at'    => now(),
                'updated_at'    => null,
            ],
        ]);

        DB::table('stg_submenu')->insert([
            [
                'title'         => 'Kategori',
                'icon'          => 'fa fa-sitemap',
                'url'           => '/adm-master/kategori',
                'menu_id'       => 9,
                'admin'         => 1,
                'created_by'    => 'Migrasi',
                'created_at'    => now(),
                'updated_at'    => null,
            ],
            [
                'title'         => 'Tag',
                'icon'          => 'fa fa-tag',
                'url'           => '/adm-master/tag',
                'menu_id'       => 9,
                'admin'         => 1,
                'created_by'    => 'Migrasi',
                'created_at'    => now(),
                'updated_at'    => null,
            ],
        ]);
    }
}
