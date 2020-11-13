<?php

use Illuminate\Database\Seeder;

class FooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abouts')->insert([
            'pengantar1' => 'Solusi yang tepat untuk anda yang sedang kesulitan dengan masalah tagihan Kartu Kredit/KTA.',
            'pengantar2' => 'Hari Senin - Jumat, Pukul 9:00 s/d 17.00 WIB

                             Hari Sabtu Pukul, 8:00 s/d 14.00 WIB

                             Hari Minggu Libur',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
