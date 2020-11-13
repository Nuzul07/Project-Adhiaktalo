<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            'judulp1' => 'Dalam hal penyelesaian masalah hutang Kartu Kredit / KTA, ada 3 cara untuk mendapatkan program keringanan pembayaran yaitu :',
            'judulp2' => 'Contoh: disini bapak/ibu ada hutang dari suatu bank sebesar Rp.10 juta, keringanan yang kami tawarkan yaitu :',
            'judulp3' => 'Di indonesia ada beberapa Bank yang modalnya dimiliki oleh asing, local dan Pemerintah ( BUMN ).',
            'judulps1' => 'Untuk menyelesaikan masalah hutang Kartu Kredit/KTA tidak semudah yang dibayangkan, akan tetapi melalui proses yang panjang dan dengan keahlian serta cara tersendiri.',
            'judulps2' => 'Selama dalam proses penyelesaian sebagaimana tersebut diatas, kami menyarankan agar klien tidak melakukan pembayaran biaya apapun ke pihak bank (minimum payment/fullpayment/cicilan), agar proses negosiasi kami dengan pihak bank tidak terganggu.',
            'judulps3' => 'Dalam proses negosiasi bank akan menilai apakah pembayaran Kartu Kredit/KTA klien masih lancar atau dalam kolektibilitas 1 atau 2, sehingga otomatis bank masih menganggap klien mampu, dengan begitu bank tidak akan memberikan keringanan dalam bentuk apapun.',
            'isip1' => '1. Reschedule (dirubah menjadi cicilan tetap) dengan nominal cicilan dibawah tagihan normal dan bunga 0%.
                        2. Pelunasan dengan diskon 30% – 60%.
                        3. Penundaan pembayaran sampai klien ada dana untuk pembayaran ke bank (tak berbatas waktu).',
            'isip2' => '1. Dari hutang Rp.10 juta tersebut bisa dicicil seringan mungkin dengan bunga 0%/flat.
                        2. Dari hutang Rp.10 juta tersebut bisa mendapat potongan 30 – 60 % ( bahkan bisa lebih tergantung dari history pemakaian kartu / KTA ).
                        3. Dari hutang Rp.10 juta tersebut bisa didiskon 30-60% lalu pembayarannya dilakukan pada saat klien sudah siap dana.',
            'isip3' => '- Untuk Bank Asing kami menyarankan klien untuk ambil program diskon karena lebih menguntungkan bisa mendapat 30-60%.
                        - Sedangkan Bank pemerintah kami sarankan untuk ambil program reschedule/cicilan tetap dengan bunga 0% flat. Sebab Bank pemerintah tidak memberikan diskon sebesar Bank asing.',
            'isips1' => '1. Reschedule (dirubah menjadi cicilan tetap) dengan nominal cicilan dibawah tagihan normal dan bunga 0%
                         2. Pelunasan dengan diskon 30% – 60%
                         3. Penundaan pembayaran sampai klien ada dana untuk pembayaran ke bank (tak berbatas waktu).',
            'syarat' => '1. Fotocopy KTP.
                         2. Fotocopy tagihan / billing statement terakhir (untuk kartu kredit) dan surat kontrak pada saat pertama kali disetujui untuk KTA.
                         3. Materai Rp.6000 , 4 lembar per nomor Kartu Kredit / KTA.
                         4. Operasional fee, ( hanya sekali bayar & tidak ada tambahan biaya lainnya ), untuk total tagihan kurang dari atau sama dengan Rp. 5. jt feenya sebesar Rp.1.000.000,- sedangkan total tagihan Rp. 5.jt keatas dikenakan feenya 10-15% dari total tagihan terakhir (dihitung perkartu), fee dibayar dimuka sebagai biaya operasional. (Fee dapat diangsur jika total fee diatas 5jt).',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
