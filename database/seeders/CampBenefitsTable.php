<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CampBenefits;

class CampBenefitsTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $camp_benefits = [
            [
                'camp_id' => 1,
                'name' => '1 on 1 Mentoring',
                
            ],
            [
                'camp_id' => 1,
                'name' => 'Sertification',
                
            ],
            [
                'camp_id' => 1,
                'name' => 'Make A Web Profesional',
                
            ],
            [
                'camp_id' => 2,
                'name' => '1 on 1 Mentoring',
                
            ],
        ];

        CampBenefits::insert($camp_benefits);

    }  
}
