<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Camps;

class CampSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $camps = [
            [
                'tittle' => 'Ayo Belajar',
                'slug' => 'Ayo Belajar',
                'price' => 220,     
            ],
            [
                'tittle' => 'Mari Belajar Bersama saya',
                'slug' => 'Harga Terjangkau',
                'price' => 300,
            ]
        ];
    
        foreach($camps as $key => $camp) {
            Camps::create($camp);
         }

    }

    
}
