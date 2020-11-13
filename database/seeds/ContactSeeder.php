<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            'alamat' => 'Gedung ILP, Jl. Raya Pasar Minggu No.39A,
                        RT.8/RW.9,Kec. Pancoran, Kota Jakarta Selatan,
                        Daerah Khusus Ibukota Jakarta 12780.',
            'email' => 'lawofficeadhiakta@gmail.com',
            'telp' => '(021) 25031436
(021) 25031812',
            'whatsapp' => '(+62) 812 2223 032',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
