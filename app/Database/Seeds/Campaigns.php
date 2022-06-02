<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class Campaigns extends Seeder
{
    public function run()
    {
        //
        $campaigns_data = [
            [
                'nama' => 'Dasinah Dg. Baji',
                'slug'  => 'bantu-dasinah-dg-baji',
                'alamat' => 'Jl. Lanto Dg. Pasewang Lorong Tegel',
                'deskripsi1' => 'Dasina dg baji perempuan renta berusia 67 tahun ini hidup sebatang kara di rumahnya, rumah yang sedikit lagi roboh karena telah lapuk dibanyak sisi. Rumah yang harusnya jadi pelindung malah sering membawa cemas dibenak dg baji, Karena rumahnya bisa roboh kapan saja. Apalagi dimusim hujan ia bercerita kadang meringkuk takut disudut rumahnya karena genteng bocor yang teramat banyak. Dg baji sehari-hari mencari kehidupan dengan memelihara bebek dan ayam yang jumlahnya jika kami hitung tidak sampai 10 ekor. Seberes memberi makan unggas nya dg baji bergegas kerumah sodaranya yang berjarak kurang lebih berjarak 700 meter dari rumah nya untuk merawat sodaranya yang sedang sakit.',
                'deskripsi2' => 'Selepas isya ia kembali kerumahnya beliau tidak tinggal menginap karena enggan merepotkan. Lalu kembali melewati malam dengan kecemasan tentang rumahnya yang rapuh. Saat kami berkunjung dg baji enggan mempersilahkan kami masuk kerumahnya kekhawatiran nya sama, takut rumahnya roboh. ia juga bercerita tidak lagi berani memasak diatas rumahnya karena papan dapurnya sudah sangat tidak layak. Diusia senjanya ia hanya berharap dapat tidur nyenyak di malam hari tanpa takut rumahnya akan roboh. Mariki kareng bantu dasina  dg baji hidup layak dengan rumah yang layak',
                'kebutuhan' => 20000000,
                'img1' => 'dasinah1.jpg',
                'img2' => 'dasinah2.jpeg',
                'img3' => 'dasinah3.jpeg',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ]
        ];

        foreach ($campaigns_data as $data) {
            // insert semua data ke tabel
            $this->db->table('campaigns')->insert($data);
        }
    }
}
