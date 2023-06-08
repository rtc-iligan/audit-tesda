<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\Models\Center;
use Illuminate\Support\Str;

class CenterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        

        $adminCenter = Center::create([ 
           
            'tvi_name' => null,
            'tvi_abrv' => null,
            'tvi_location' => null,
            'tvi_manager' => null,
            'tvi_manager_contact' => null,
            'tvi_person' => null,
            'tvi_person_contact' => null,
            'tvi_person_contact' => null,
            'tvi_image' => null,
           
        ]);
        $RTCILIGAN = Center::create([ 
           
            'tvi_name' => 'Regional Training Center - Iligan',
            'tvi_abrv' => 'RTC-Iligan',
            'tvi_location' => 'Maria Cristina, Iligan City',
            'tvi_manager' => 'Victoria E. Mirador',
            'tvi_manager_contact' => '09363901814',
            'tvi_person' => 'Rachel Unson',
            'tvi_person_contact' => '09363901814',
            'tvi_image' => null,
        ]);
       
    }
}
