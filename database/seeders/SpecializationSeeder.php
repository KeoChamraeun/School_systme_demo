<?php

namespace Database\Seeders;

use App\Models\Specialization;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpecializationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('specializations')->delete();
        $specializations = [
            ['en' => 'Khmer', 'ar' => 'Khmer'],
            ['en' => 'Sciences', 'ar' => 'វិទ្យាសាស្ត្រ'],
            ['en' => 'Computer', 'ar' => 'កុំព្យូទ័រ'],
            ['en' => 'English', 'ar' => 'អង់គ្លេស'],
        ];
        foreach ($specializations as $S) {
            Specialization::create(['name' => $S]);
        }
    }
}
