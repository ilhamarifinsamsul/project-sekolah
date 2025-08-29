<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'title' => 'Pengumuman',
                'content' => 'Sekolah kita berhasil meraih juara 1 dalam ajang Olimpiade tingkat kota. Prestasi ini diraih berkat kerja keras para siswa yang tekun belajar serta dukungan penuh dari para guru dan orang tua. Kompetisi ini diikuti oleh puluhan sekolah dengan berbagai bidang lomba yang menuntut kemampuan akademik, kreativitas, serta kerja sama tim. Keberhasilan ini menjadi bukti nyata bahwa Sekolah Kita tidak hanya fokus pada pembelajaran di kelas, tetapi juga mendorong siswa untuk berprestasi di berbagai ajang kompetisi. Semoga pencapaian ini dapat memotivasi siswa lain untuk terus berprestasi dan membawa nama baik sekolah ke tingkat yang lebih tinggi.',
                'image' => 'assets/asset/img/news4.jpeg'
            ],

            [
                'title' => 'Peresmian Gedung Baru',
                'content' => 'Sekolah kita resmi meresmikan gedung baru pada bulan ini sebagai bagian dari upaya meningkatkan kualitas sarana dan prasarana pendidikan. Gedung baru tersebut dilengkapi dengan ruang kelas yang lebih luas, laboratorium modern, serta fasilitas penunjang pembelajaran berbasis teknologi. Peresmian dilakukan oleh kepala sekolah bersama jajaran komite dan dihadiri oleh para guru, siswa, dan orang tua murid. Diharapkan dengan adanya gedung baru ini, kegiatan belajar mengajar menjadi lebih nyaman dan efektif, serta mampu mencetak generasi yang lebih berprestasi di masa depan.',
                'image' => 'assets/asset/img/news2.jpg'
            ],

            [
                'title' => 'Kunjungan Industri',
                'content' => 'Sebagai bagian dari program pembelajaran berbasis pengalaman, siswa kelas 12 melakukan kunjungan industri ke salah satu pabrik besar di kota ini. Mereka mendapatkan wawasan tentang proses produksi, manajemen perusahaan, dan penerapan teknologi dalam dunia kerja. Kegiatan ini diharapkan menambah motivasi siswa untuk meraih cita-cita. Dengan kunjungan industri ini, siswa dapat memahami bagaimana industri bekerja dan mengaplikasikan pengetahuan mereka dalam bidang industri terkait.',
                'image' => 'assets/asset/img/news3.jpg'
            ],
        ];

        DB::table('news')->insert($data);

    }
}
