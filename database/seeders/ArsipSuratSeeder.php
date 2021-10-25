<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArsipSuratSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('arsip_surats')->insert([
            'nomor_surat' => '782jd',
            'kategori' => 'Undangan',
            'judul' => 'Undangan Perkawinan',
            'created_at' => '',
        ]);
    }
}
