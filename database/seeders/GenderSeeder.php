<?php

namespace Database\Seeders;

use App\Models\Gender;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('genders')->delete();

        $genders = [
            ['en' => 'Male', 'ar' => 'ប្រុស'],
            ['en' => 'Female', 'ar' => 'ស្រី'],
        ];

        foreach ($genders as $gender) {
            Gender::create(['name' => $gender]);
        };
    }
}
