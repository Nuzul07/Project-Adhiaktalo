<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class VisimisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('visi_misis')->insert([
           [
                'isi' => 'Menjadi kantor hukum terdepan dalam memberikan layanan konsultasi dan bantuan hukum profesional kepada masyarakat dengan mengutamakan keilmuan yang dilandasi etika profesi.',
                'tipe' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
           ],
           [
               'isi' => '1. Mengemban tugas dan pekerjaan yang diamanatkan dengan baik dan bertanggung jawab sebagai profesionalisme dalam menjalankan profesi.
                         2. Pengembangan jaringan dengan kerja sama yang kooperatif dan akomodatif dengan tetap menjujung tinggi etika profesi.
                         3. Pengembangan ilmu hukum dengan memperhatikan dinamika perkembangan peraturan perundang - undangan dan isu - isu hukum teratual.',
                'tipe' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
           ]
        ]);
    }
}
