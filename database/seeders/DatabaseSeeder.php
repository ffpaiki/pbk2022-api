<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Jurusan;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Jurusan::factory()->create([
            'nama_jurusan' => 'Teknik Informatika',
            'kajur' => 'Julius Naibaho',
            'kalab' => 'Parma Hadi Rantelinggi',
            'jumlah_prodi' => 2,
        ]);

        Jurusan::factory()->create([
            'nama_jurusan' => 'Teknik Sipil',
            'kajur' => 'Indra Birawaputra',
            'kalab' => 'Rizki Pratama',
            'jumlah_prodi' => 1,
        ]);
    }
}
