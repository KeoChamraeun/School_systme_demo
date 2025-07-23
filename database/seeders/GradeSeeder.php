<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Grade;
use Illuminate\Support\Facades\DB;

class GradeSeeder extends Seeder
{
    public function run()
    {
        DB::table('classrooms')->delete();
        DB::table('grades')->delete();

        $grades = [
            [
                'name' => [
                    'en' => 'Kindergarten (KG)',
                    'ar' => 'សាលាបឋមសិក្សា (KG)'
                ],
                'notes' => 'Some notes about KG',
            ],
            [
                'name' => [
                    'en' => 'First Grade (1st)',
                    'ar' => 'ថ្នាក់ទីមួយ (1)'
                ],
                'notes' => 'Some notes about Grade 1',
            ],
            [
                'name' => [
                    'en' => 'Second Grade (2nd)',
                    'ar' => 'ថ្នាក់ទីពីរ (2)'
                ],
                'notes' => 'Some notes about Grade 2',
            ],
            [
                'name' => [
                    'en' => 'Third Grade (3rd)',
                    'ar' => 'ថ្នាក់ទីបី (3)'
                ],
                'notes' => 'Some notes about Grade 3',
            ],
            [
                'name' => [
                    'en' => 'Fourth Grade (4th)',
                    'ar' => 'ថ្នាក់ទីបួន (4)'
                ],
                'notes' => 'Some notes about Grade 4',
            ],
            [
                'name' => [
                    'en' => 'Fifth Grade (5th)',
                    'ar' => 'ថ្នាក់ទីប្រាំ (5)'
                ],
                'notes' => 'Some notes about Grade 5',
            ],
            [
                'name' => [
                    'en' => 'Sixth Grade (6th)',
                    'ar' => 'ថ្នាក់ទីប្រាំមួយ (6)'
                ],
                'notes' => 'Some notes about Grade 6',
            ],
            [
                'name' => [
                    'en' => 'Seventh Grade (7th)',
                    'ar' => 'ថ្នាក់ទីប្រាំពីរ (7)'
                ],
                'notes' => 'Some notes about Grade 7',
            ],
            [
                'name' => [
                    'en' => 'Eighth Grade (8th)',
                    'ar' => 'ថ្នាក់ទីប្រាំបី (8)'
                ],
                'notes' => 'Some notes about Grade 8',
            ],
            [
                'name' => [
                    'en' => 'Ninth Grade (9th)',
                    'ar' => 'ថ្នាក់ទីប្រាំបួន (9)'
                ],
                'notes' => 'Some notes about Grade 9',
            ],
            [
                'name' => [
                    'en' => 'Tenth Grade (10th)',
                    'ar' => 'ថ្នាក់ទីដប់ (10)'
                ],
                'notes' => 'Some notes about Grade 10',
            ],
            [
                'name' => [
                    'en' => 'Eleventh Grade (11th)',
                    'ar' => 'ថ្នាក់ទីដប់មួយ (11)'
                ],
                'notes' => 'Some notes about Grade 11',
            ],
            [
                'name' => [
                    'en' => 'Twelfth Grade (12th)',
                    'ar' => 'ថ្នាក់ទីដប់ពីរ (12)'
                ],
                'notes' => 'Some notes about Grade 12',
            ],
        ];

        foreach ($grades as $grade) {
            Grade::create($grade);
        }
    }
}
