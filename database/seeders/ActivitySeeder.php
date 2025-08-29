<?php

namespace Database\Seeders;

use App\Models\Activity;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'title' => 'Upacara Bendera',
                'description' => 'Kegiatan rutin setiap hari Senin di sekolah merupakan momen penting untuk menanamkan kedisiplinan, rasa kebersamaan, dan semangat belajar bagi seluruh siswa. Kegiatan ini biasanya diawali dengan upacara bendera yang dilaksanakan di lapangan sekolah, diikuti dengan doa bersama, serta penyampaian informasi atau pengumuman dari pihak sekolah. Melalui kegiatan ini, siswa juga dilatih untuk menghargai waktu, menjaga kekompakan, dan memperkuat rasa cinta tanah air. Selain itu, kegiatan rutin di hari Senin juga menjadi wadah bagi sekolah untuk memberikan motivasi kepada siswa agar lebih semangat dalam menjalani proses pembelajaran sepanjang hari.',
                'image' => 'assets/asset/img/kegiatan5.jpg'
            ],

            [
                'title' => 'Jumat Bersih',
                'description' => 'Kegiatan rutin setiap hari Jumat bersih di sekolah dilaksanakan sebagai bentuk kepedulian terhadap kebersihan dan kenyamanan lingkungan belajar. Seluruh siswa, guru, serta staf sekolah bersama-sama melakukan kerja bakti membersihkan ruang kelas, halaman, taman, serta fasilitas umum yang ada di sekolah. Melalui kegiatan ini, siswa diajarkan untuk memiliki rasa tanggung jawab, disiplin, serta membiasakan hidup sehat dan mencintai lingkungan. Selain menjaga kebersihan, Jumat bersih juga mempererat kerjasama antar siswa dan menumbuhkan rasa kebersamaan sehingga tercipta suasana sekolah yang bersih, asri, dan menyenangkan untuk mendukung kegiatan belajar mengajar.',
                'image' => 'assets/asset/img/kegiatan2.jpg'
            ],

            [
                'title' => 'Praktek Lapangan',
                'description' => 'Praktek lapangan merupakan kegiatan pembelajaran di luar kelas yang bertujuan untuk memberikan pengalaman nyata kepada siswa. Melalui kegiatan ini, siswa dapat belajar langsung di lapangan, memahami bagaimana teori yang dipelajari di kelas diterapkan dalam kehidupan sehari-hari, serta melatih keterampilan praktis sesuai bidangnya. Dengan praktek lapangan, siswa juga dilatih untuk bekerja sama, beradaptasi dengan lingkungan baru, serta meningkatkan kemampuan problem solving. Kegiatan ini diharapkan mampu membekali siswa dengan wawasan dan pengalaman yang bermanfaat untuk menunjang masa depan mereka.',
                'image' => 'assets/asset/img/kegiatan3.jpeg'
            ],
        ];

        DB::table('activities')->insert($data);
    }
}
