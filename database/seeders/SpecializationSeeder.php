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
            ['en' => 'Khmer Literature', 'ar' => 'អក្សរសាស្ត្រខ្មែរ'],
            ['en' => 'Computer', 'ar' => 'កុំព្យូទ័រ'],
            ['en' => 'English', 'ar' => 'អង់គ្លេស'],
            ['en' => 'Mathematics', 'ar' => 'គណិតវិទ្យា'],
            ['en' => 'Physics', 'ar' => 'រូបវិទ្យា'],
            ['en' => 'Chemistry', 'ar' => 'គីមី'],
            ['en' => 'Biology', 'ar' => 'ជីវវិទ្យា'],
            ['en' => 'History', 'ar' => 'ប្រវត្តិសាស្ត្រ'],
            ['en' => 'Geography', 'ar' => 'ភូមិវិទ្យា'],
            ['en' => 'Sport', 'ar' => 'កីឡា'],

        ];
        foreach ($specializations as $S) {
            Specialization::create(['name' => $S]);
        }
    }
}
