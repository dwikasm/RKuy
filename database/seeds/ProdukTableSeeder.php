<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ProdukTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produk')->delete();
        
            DB::table('produk')->insert([
            'id_pro' => 1,
            'nama_pro' => 'Oxygen Checker',
            'stok' => 112,
            'harga' => 22000
        ]);
        DB::table('produk')->insert([
            'id_pro' => 2,
            'nama_pro' => 'CO2 Checker',
            'stok' => 80,
            'harga' => 10000
        ]);
        DB::table('produk')->insert([
            'id_pro' => 3,
            'nama_pro' => 'CO2 Mask',
            'stok' => 962,
            'harga' => 100000
        ]);
        DB::table('produk')->insert([
            'id_pro' => 4,
            'nama_pro' => 'Oxygen Mask',
            'stok' => 1002,
            'harga' => 100000
        ]);

        
        DB::table('produk')->insert([
            'id_pro' => 5,
            'nama_pro' => 'Sonde CVD',
            'stok' => 450,
            'harga' => 16000
        ]);

        DB::table('produk')->insert([
            'id_pro' => 6,
            'nama_pro' => 'Dentio Toothbrush Sterilization And Dryer',
            'stok' => 500,
            'harga' => 300000
        ]);

        DB::table('produk')->insert([
            'id_pro' => 7,
            'nama_pro' => 'Nierbeken Plastik',
            'stok' => 2500,
            'harga' => 4000
        ]);

        DB::table('produk')->insert([
            'id_pro' => 8,
            'nama_pro' => 'Sonde CVD',
            'stok' => 1002,
            'harga' => 16000
        ]);

        DB::table('produk')->insert([
            'id_pro' => 9,
            'nama_pro' => 'Otoskop Set Riester',
            'stok' => 800,
            'harga' => 775000
        ]);

        DB::table('produk')->insert([
            'id_pro' => 10,
            'nama_pro' => 'Tang Cabut Gigi Anak',
            'stok' => 400,
            'harga' => 1300000
        ]);

        DB::table('produk')->insert([
            'id_pro' => 11,
            'nama_pro' => 'Kantong Feses',
            'stok' => 500,
            'harga' => 320000
        ]);

        DB::table('produk')->insert([
            'id_pro' => 12,
            'nama_pro' => 'Root Canal Explorer',
            'stok' => 1500,
            'harga' => 12000
        ]);

        DB::table('produk')->insert([
            'id_pro' => 13,
            'nama_pro' => 'Mangkok Denta',
            'stok' => 1000,
            'harga' => 15000
        ]);

        DB::table('produk')->insert([
            'id_pro' => 14,
            'nama_pro' => 'Matrix Holder',
            'stok' => 800,
            'harga' => 60000
        ]);

        DB::table('produk')->insert([
            'id_pro' => 15,
            'nama_pro' => 'Bak Instrumen Sedang',
            'stok' => 450,
            'harga' => 53350
        ]);

        DB::table('produk')->insert([
            'id_pro' => 16,
            'nama_pro' => 'Buku Ishihara',
            'stok' => 650,
            'harga' => 104500
        ]);

        DB::table('produk')->insert([
            'id_pro' => 17,
            'nama_pro' => 'Cat Gute (Per Gulung)',
            'stok' => 500,
            'harga' => 75350
        ]);

        DB::table('produk')->insert([
            'id_pro' => 18,
            'nama_pro' => 'Cautery Set',
            'stok' => 500,
            'harga' => 1358500
        ]);

        DB::table('produk')->insert([
            'id_pro' => 19,
            'nama_pro' => 'Cat Gute (Per Gulung)',
            'stok' => 500,
            'harga' => 75350
        ]);

        DB::table('produk')->insert([
            'id_pro' => 20,
            'nama_pro' => 'Cerument Hak',
            'stok' => 1000,
            'harga' => 28600
        ]);

        DB::table('produk')->insert([
            'id_pro' => 21,
            'nama_pro' => 'Circum Sisi 1 Set',
            'stok' => 750,
            'harga' => 291500
        ]);

        DB::table('produk')->insert([
            'id_pro' => 22,
            'nama_pro' => 'Doppler Hadeco Japan',
            'stok' => 300,
            'harga' => 2915000
        ]);

        DB::table('produk')->insert([
            'id_pro' => 23,
            'nama_pro' => 'Doppler RRC',
            'stok' => 450,
            'harga' => 262500
        ]);

        DB::table('produk')->insert([
            'id_pro' => 24,
            'nama_pro' => 'Doppler Medasonic USA',
            'stok' => 600,
            'harga' => 1837000
        ]);

        DB::table('produk')->insert([
            'id_pro' => 25,
            'nama_pro' => 'Foley Kateter No.18/buah',
            'stok' => 1200,
            'harga' => 20350
        ]);

        DB::table('produk')->insert([
            'id_pro' => 26,
            'nama_pro' => 'Gliserin Spuit',
            'stok' => 700,
            'harga' => 83050
        ]);

        DB::table('produk')->insert([
            'id_pro' => 27,
            'nama_pro' => 'Gunting Epys',
            'stok' => 530,
            'harga' => 26950
        ]);

        DB::table('produk')->insert([
            'id_pro' => 28,
            'nama_pro' => 'Iodine Cup (B)',
            'stok' => 650,
            'harga' => 15950
        ]);

        DB::table('produk')->insert([
            'id_pro' => 29,
            'nama_pro' => 'Iodine Cup (K)',
            'stok' => 4500,
            'harga' => 13750
        ]);

        DB::table('produk')->insert([
            'id_pro' => 30,
            'nama_pro' => 'Kop Angin (8 buah) Tahan Pecah',
            'stok' => 1200,
            'harga' => 165000
        ]);

        DB::table('produk')->insert([
            'id_pro' => 31,
            'nama_pro' => 'Kop Angin (12 buah)',
            'stok' => 1000,
            'harga' => 165000
        ]);

        DB::table('produk')->insert([
            'id_pro' => 32,
            'nama_pro' => 'Kop Angin (14 buah) Tahan Pecah',
            'stok' => 900,
            'harga' => 258500
        ]);

        DB::table('produk')->insert([
            'id_pro' => 33,
            'nama_pro' => 'Kop Angin (24 buah)',
            'stok' => 500,
            'harga' => 330000
        ]);

        DB::table('produk')->insert([
            'id_pro' => 34,
            'nama_pro' => 'Korentang',
            'stok' => 450,
            'harga' => 58850
        ]);

        DB::table('produk')->insert([
            'id_pro' => 35,
            'nama_pro' => 'Iodine Cup (K)',
            'stok' => 4500,
            'harga' => 13750
        ]);

        DB::table('produk')->insert([
            'id_pro' => 36,
            'nama_pro' => 'Lancet 1 set (100 buah)',
            'stok' => 1500,
            'harga' => 33000
        ]);

        DB::table('produk')->insert([
            'id_pro' => 37,
            'nama_pro' => 'Lancet Device',
            'stok' => 500,
            'harga' => 42350
        ]);

        DB::table('produk')->insert([
            'id_pro' => 38,
            'nama_pro' => 'Manset Anak (Japan)',
            'stok' => 750,
            'harga' => 21450
        ]);

        DB::table('produk')->insert([
            'id_pro' => 39,
            'nama_pro' => 'Manset Dewasa (Japan)',
            'stok' => 680,
            'harga' => 21450
        ]);

        DB::table('produk')->insert([
            'id_pro' => 40,
            'nama_pro' => 'Resusitasi Bayi (Silikon)',
            'stok' => 500,
            'harga' => 632500
        ]);

        DB::table('produk')->insert([
            'id_pro' => 41,
            'nama_pro' => 'Masker O2',
            'stok' => 2000,
            'harga' => 42350
        ]);

        DB::table('produk')->insert([
            'id_pro' => 42,
            'nama_pro' => 'Metal Cateter',
            'stok' => 2500,
            'harga' => 14850
        ]);

        DB::table('produk')->insert([
            'id_pro' => 43,
            'nama_pro' => 'Mikroskop L301 (150x)',
            'stok' => 300,
            'harga' => 1485000
        ]);

        DB::table('produk')->insert([
            'id_pro' => 44,
            'nama_pro' => 'Mikroskop Satu Mata',
            'stok' => 800,
            'harga' => 1050500
        ]);

        DB::table('produk')->insert([
            'id_pro' => 45,
            'nama_pro' => 'Mortal Besar 16cm',
            'stok' => 450,
            'harga' => 38500
        ]);

        DB::table('produk')->insert([
            'id_pro' => 46,
            'nama_pro' => 'Mortal Kecil 13cm',
            'stok' => 550,
            'harga' => 30250
        ]);

        DB::table('produk')->insert([
            'id_pro' => 47,
            'nama_pro' => 'Neirbeken Besar 24cm',
            'stok' => 650,
            'harga' => 36850
        ]);

        DB::table('produk')->insert([
            'id_pro' => 48,
            'nama_pro' => 'Neirbeken Kecil 20cm',
            'stok' => 2500,
            'harga' => 29150
        ]);

        DB::table('produk')->insert([
            'id_pro' => 49,
            'nama_pro' => 'Neurological Hammer',
            'stok' => 1500,
            'harga' => 32450
        ]);

        DB::table('produk')->insert([
            'id_pro' => 50,
            'nama_pro' => 'Otoscope Riester',
            'stok' => 1050,
            'harga' => 863500
        ]);

        DB::table('produk')->insert([
            'id_pro' => 51,
            'nama_pro' => 'Otoscope Heine',
            'stok' => 1000,
            'harga' => 753500
        ]);

        DB::table('produk')->insert([
            'id_pro' => 52,
            'nama_pro' => 'Pemecah Ketuban (1/2 koher)',
            'stok' => 1300,
            'harga' => 15950
        ]);

        DB::table('produk')->insert([
            'id_pro' => 53,
            'nama_pro' => 'Penlight Steinless Steel',
            'stok' => 500,
            'harga' => 51700
        ]);

        DB::table('produk')->insert([
            'id_pro' => 54,
            'nama_pro' => 'Penlight Energezer',
            'stok' => 750,
            'harga' => 57750
        ]);

        DB::table('produk')->insert([
            'id_pro' => 55,
            'nama_pro' => 'Regulator RRC',
            'stok' => 250,
            'harga' => 313500
        ]);

        DB::table('produk')->insert([
            'id_pro' => 56,
            'nama_pro' => 'Regulator GEA',
            'stok' => 450,
            'harga' => 313500
        ]);

        DB::table('produk')->insert([
            'id_pro' => 57,
            'nama_pro' => 'Regulator One Med',
            'stok' => 3500,
            'harga' => 302500
        ]);

        DB::table('produk')->insert([
            'id_pro' => 58,
            'nama_pro' => 'Regulator + Tabung O2 + Troly',
            'stok' => 500,
            'harga' => 1061500
        ]);

        DB::table('produk')->insert([
            'id_pro' => 59,
            'nama_pro' => 'Spekulum Nasaal',
            'stok' => 1500,
            'harga' => 64350
        ]);

        DB::table('produk')->insert([
            'id_pro' => 60,
            'nama_pro' => 'Spekulum Vagina Biasa 1 set (Renz)',
            'stok' => 500,
            'harga' => 165550
        ]);

        DB::table('produk')->insert([
            'id_pro' => 62,
            'nama_pro' => 'Spekulum Vagina Cocor bebek/buah',
            'stok' => 3500,
            'harga' => 75350 
        ]);

        DB::table('produk')->insert([
            'id_pro' => 63,
            'nama_pro' => 'Slim Spekulum 3 macam (Renz)',
            'stok' => 250,
            'harga' => 182050
        ]);

        DB::table('produk')->insert([
            'id_pro' => 64,
            'nama_pro' => 'Slim Sucker',
            'stok' => 4000,
            'harga' => 15950
        ]);

        DB::table('produk')->insert([
            'id_pro' => 65,
            'nama_pro' => 'Stetoskop Anak (Kenz)',
            'stok' => 2450,
            'harga' => 41250
        ]);

        DB::table('produk')->insert([
            'id_pro' => 66,
            'nama_pro' => ' Stetoskop Dewasa (Kenz)',
            'stok' =>1250,
            'harga' => 33000,
        ]);

        DB::table('produk')->insert([
            'id_pro' => 67,
            'nama_pro' => 'Stetoskop Anak (Spirit)',
            'stok' => 650,
            'harga' => 742500
        ]);

        DB::table('produk')->insert([
            'id_pro' => 68,
            'nama_pro' => ' Stetoskop Dewasa (Spygmed)',
            'stok' => 450,
            'harga' => 72050
        ]);

        DB::table('produk')->insert([
            'id_pro' => 69,
            'nama_pro' => 'Stetoskop Anak (Littman)',
            'stok' => 640,
            'harga' => 1358500
        ]);

        DB::table('produk')->insert([
            'id_pro' => 70,
            'nama_pro' => 'Stetoskop Dewasa (Littman)',
            'stok' => 400,
            'harga' => 808500
        ]);

        DB::table('produk')->insert([
            'id_pro' => 71,
            'nama_pro' => 'Stetoskop Anak (ABN)',
            'stok' => 350,
            'harga' => 742500
        ]);

        DB::table('produk')->insert([
            'id_pro' => 72,
            'nama_pro' => 'Dewasa Anak (ABN)',
            'stok' => 750,
            'harga' => 214500
        ]);

        DB::table('produk')->insert([
            'id_pro' => 73,
            'nama_pro' => 'Taylor Pecussion Hammer',
            'stok' => 320,
            'harga' => 28050
        ]);

        DB::table('produk')->insert([
            'id_pro' => 74,
            'nama_pro' => 'Tensi Jarum GEA',
            'stok' => 430 ,
            'harga' => 71500
        ]);

        DB::table('produk')->insert([
            'id_pro' => 75,
            'nama_pro' => 'Tensi Jarum ALPK2',
            'stok' => 550,
            'harga' => 59950
        ]);

        DB::table('produk')->insert([
            'id_pro' => 76,
            'nama_pro' => 'Tensi Jarum Brilliant',
            'stok' => 540,
            'harga' => 75350
        ]);

        DB::table('produk')->insert([
            'id_pro' => 77,
            'nama_pro' => 'Tensi Jarum Spygmed',
            'stok' => 390,
            'harga' => 82500
        ]);

        DB::table('produk')->insert([
            'id_pro' => 78,
            'nama_pro' => 'Tensi Raksa GEA',
            'stok' => 650,
            'harga' => 176000
        ]);

        DB::table('produk')->insert([
            'id_pro' => 79,
            'nama_pro' => 'Tensi Raksa GL 99',
            'stok' => 760,
            'harga' => 165000
        ]);

        DB::table('produk')->insert([
            'id_pro' => 80,
            'nama_pro' => 'Tensi Raksa RRC',
            'stok' => 650,
            'harga' => 165000
        ]);

        DB::table('produk')->insert([
            'id_pro' => 81,
            'nama_pro' => 'Termometer Digital ABN',
            'stok' => 450,
            'harga' => 66000
        ]);

        DB::table('produk')->insert([
            'id_pro' => 82,
            'nama_pro' => 'Termometer Digital RRC',
            'stok' =>1000,
            'harga' => 52250
        ]);

        DB::table('produk')->insert([
            'id_pro' => 83,
            'nama_pro' => 'Termometer Digital Citizen CH 606',
            'stok' => 1025,
            'harga' => 852500
        ]);

        DB::table('produk')->insert([
            'id_pro' => 84,
            'nama_pro' => 'Termometer Digital Citizen CH 456',
            'stok' => 560,
            'harga' => 830500
        ]);

        DB::table('produk')->insert([
            'id_pro' => 85,
            'nama_pro' => 'Therm Hygro (German)',
            'stok' => 540,
            'harga' => 214500
        ]);

        DB::table('produk')->insert([
            'id_pro' => 86,
            'nama_pro' => 'Timbangan Badan (CAMRY)',
            'stok' => 250,
            'harga' => 76450
        ]);

        DB::table('produk')->insert([
            'id_pro' => 87,
            'nama_pro' => 'Timbangan Bayi (RRC)',
            'stok' => 540,
            'harga' => 324500
        ]);

        DB::table('produk')->insert([
            'id_pro' => 88,
            'nama_pro' => 'Tongeu Spatel RRC',
            'stok' => 1255,
            'harga' => 20350
        ]);

        DB::table('produk')->insert([
            'id_pro' => 90,
            'nama_pro' => 'Tromol Verband 21cm',
            'stok' => 433,
            'harga' => 281050
        ]);

        DB::table('produk')->insert([
            'id_pro' => 91,
            'nama_pro' => 'Umbilikal Klem ( 1 box)',
            'stok' => 550,
            'harga' => 76450
        ]);

        DB::table('produk')->insert([
            'id_pro' => 92,
            'nama_pro' => 'Urine Bag',
            'stok' => 2500,
            'harga' => 7150
        ]);

        DB::table('produk')->insert([
            'id_pro' => 93,
            'nama_pro' => 'Vacum Ekstrator Manual Finland',
            'stok' =>800 ,
            'harga' => 3151500
        ]);

        DB::table('produk')->insert([
            'id_pro' => 94,
            'nama_pro' => 'Walker Sticks TS910L',
            'stok' => 350,
            'harga' => 159500
        ]);

        DB::table('produk')->insert([
            'id_pro' => 95,
            'nama_pro' => 'Walker TS 925',
            'stok' =>250,
            'harga' => 203500
        ]);

        DB::table('produk')->insert([
            'id_pro' => 96,
            'nama_pro' => 'Walker TS 912L',
            'stok' => 850,
            'harga' => 379500
        ]);

        DB::table('produk')->insert([
            'id_pro' => 97,
            'nama_pro' => 'Walker TS 913L',
            'stok' => 550,
            'harga' => 379500
        ]);

        DB::table('produk')->insert([
            'id_pro' => 98,
            'nama_pro' => 'WWZ (@ liter)',
            'stok' => 650,
            'harga' => 18700
        ]);

        DB::table('produk')->insert([
            'id_pro' => 99,
            'nama_pro' => 'Hearing Aid Tanpa Kabel',
            'stok' => 678,
            'harga' => 379500
        ]);

        DB::table('produk')->insert([
            'id_pro' => 100,
            'nama_pro' => 'Hearing Aid dengan Kabel',
            'stok' => 654,
            'harga' => 302500
        ]);

        DB::table('produk')->insert([
            'id_pro' => 101,
            'nama_pro' => 'Bantal Panas',
            'stok' => 320,
            'harga' => 75350
        ]);

        DB::table('produk')->insert([
            'id_pro' => 102,
            'nama_pro' => 'Bantal Panas (Garansi)',
            'stok' => 876,
            'harga' => 159500
        ]);

        DB::table('produk')->insert([
            'id_pro' => 103,
            'nama_pro' => 'Tes Kehamilan GEA 1 box',
            'stok' => 354,
            'harga' => 104500
        ]);

        DB::table('produk')->insert([
            'id_pro' => 104,
            'nama_pro' => 'Bak Spuit 512',
            'stok' => 670,
            'harga' => 103950
        ]);

        DB::table('produk')->insert([
            'id_pro' => 105,
            'nama_pro' => 'Baskom Cuci Tangan (1 buah + kaki)',
            'stok' => 530,
            'harga' => 203500
        ]);

        DB::table('produk')->insert([
            'id_pro' => 106,
            'nama_pro' => 'Baskom Cuci Tangan (2 buah + kaki)',
            'stok' => 730,
            'harga' => 302500
        ]);

        DB::table('produk')->insert([
            'id_pro' => 107,
            'nama_pro' => 'Bugi (Busi)',
            'stok' =>540 ,
            'harga' => 192500
        ]);

        DB::table('produk')->insert([
            'id_pro' => 108,
            'nama_pro' => 'Cocor Bebek S',
            'stok' =>890 ,
            'harga' => 59950
        ]);

        DB::table('produk')->insert([
            'id_pro' => 109,
            'nama_pro' => 'Cocor Bebek M',
            'stok' =>650,
            'harga' => 70950
        ]);

        DB::table('produk')->insert([
            'id_pro' => 110,
            'nama_pro' => 'Cocor Bebek L',
            'stok' => 3210,
            'harga' => 80850
        ]);

        DB::table('produk')->insert([
            'id_pro' => 111,
            'nama_pro' => 'Balon Tensi Riester',
            'stok' =>760,
            'harga' => 52250
        ]);

        DB::table('produk')->insert([
            'id_pro' => 112,
            'nama_pro' => 'Bantal Es',
            'stok' => 780,
            'harga' => 20350
        ]);

        DB::table('produk')->insert([
            'id_pro' => 113,
            'nama_pro' => 'Kom Kecil',
            'stok' =>450 ,
            'harga' => 15950
        ]);

        DB::table('produk')->insert([
            'id_pro' => 114,
            'nama_pro' => 'Korentang + Tempat',
            'stok' =>760 ,
            'harga' => 159500
        ]);

        DB::table('produk')->insert([
            'id_pro' => 115,
            'nama_pro' => 'Kuret Set',
            'stok' => 980,
            'harga' => 291500
        ]);

        DB::table('produk')->insert([
            'id_pro' => 116,
            'nama_pro' => 'Lampu Infra Merah (Philips)',
            'stok' => 650,
            'harga' => 423500
        ]);

        DB::table('produk')->insert([
            'id_pro' => 117,
            'nama_pro' => 'Nebulizer Omron CX 3',
            'stok' =>640 ,
            'harga' => 85250
        ]);

        DB::table('produk')->insert([
            'id_pro' => 118,
            'nama_pro' => 'Needle Holder 14cm',
            'stok' =>3200,
            'harga' => 25850
        ]);

        DB::table('produk')->insert([
            'id_pro' => 119,
            'nama_pro' => 'Needle Holder 18cm',
            'stok' => 390,
            'harga' => 31350
        ]);

        DB::table('produk')->insert([
            'id_pro' => 120,
            'nama_pro' => 'Partus Set',
            'stok' => 450 ,
            'harga' => 280500
        ]);

    }
}
