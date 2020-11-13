<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abouts')->insert([
            'pengantar1' => 'ADHIAKTA merupakan Advokat berpengalaman, dan profesional dengan izin. Kami berkantor di Gedung ILP, Jl. Raya Pasar Minggu No.39A, RT.8/RW.9, Pancoran, Kec. Pancoran, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12780. Kami siap membantu anda dalam permsalahan hukum pidana dan perdata, terutama perihal penutupan Kartu Kredit atau KTA scara legal hingga clear BI checking, sesuai dengan peraturan BI No. 7/34/DPNP, tertanggal 18 Juli 2005.',
            'pengantar2' => '1. Menghemat waktu, tenaga dan pikiran
                            2. Mencegah perlakuan semena - mena dari pihak tertentu
                            3. Pengacara dapat menjadi mediator
                            4. Bersama pengacara akan meringankan beban masalah',
            'pengantar3' => 'Kami hadir untuk segala permasalahan hukum anda, agar dapat menyelesaikannya dengan tuntas. Bersama kami Kantor Adhiakta, anda akan menjadi lebih merasa  tenang, aman serta percaya diri dalam menghadapi segala permasalahan hukum yang berat dan rumit. Kantor Adhiakta memberikan Jasa pengacara profesional serta advokat terpercaya dan sangat berpengalaman dalam berbagai kasus yang membelit anda, dan terbukti kami banyak menyelesaikan banyak kasus yang rumit dengan hasil yang memuaskan klien kami.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
