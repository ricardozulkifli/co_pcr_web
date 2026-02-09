<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'nama_kampus' => 'Politeknik Caltex Riau (PCR)',
            'slogan'      => 'Vokasi Unggul, Siap Kerja, Berdaya Saing Global',

            'visi' => 'Menjadi politeknik unggul yang menghasilkan lulusan vokasi profesional, inovatif, dan berdaya saing internasional.',

            'misi' => [
                'Menyelenggarakan pendidikan vokasi berkualitas berbasis kompetensi dan kebutuhan industri.',
                'Mengembangkan penelitian terapan dan inovasi teknologi yang memberi dampak bagi masyarakat dan dunia usaha.',
                'Membangun kolaborasi strategis dengan industri untuk penguatan kurikulum, magang, dan penyerapan lulusan.',
            ],

            'sejarah' => [
                'Politeknik Caltex Riau (PCR) merupakan institusi pendidikan tinggi vokasi yang berfokus pada pengembangan kompetensi dan keterampilan praktis. PCR hadir untuk menjawab kebutuhan tenaga kerja terampil di bidang teknologi dan industri.',
                'Seiring perkembangan, PCR meningkatkan kualitas pembelajaran melalui kurikulum berbasis industri, fasilitas laboratorium yang relevan, serta program magang dan proyek nyata agar lulusan siap kerja dan adaptif.',
                'Dengan semangat kolaborasi dan inovasi, PCR memperluas jejaring kerja sama dengan industri dan berbagai institusi. PCR mendorong mahasiswa unggul secara teknis, soft skill, serta kemampuan problem solving.',
            ],

            // pastikan file ada di: public/assets/images/logo-pcr.png
            'logo' => 'assets/images/logo-pcr.png',
        ];

        return view('home', $data);
    }
}
