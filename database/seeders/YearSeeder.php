<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\Models\Year;
use Illuminate\Support\Str;

class YearSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $year22 = Year::create(['year' => '2022']);
        $year23 = Year::create(['year' => '2023']);
        $year24 = Year::create(['year' => '2024']);
        $year25 = Year::create(['year' => '2025']);
    }
}
