<?php

namespace Database\Seeders;

use App\Models\Religion;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReligionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Clear the religions table before seeding
        DB::table('religions')->delete();

        $religions = [
            [
                'en' => 'Muslim',
                'ar' => 'មូស្លីម',
            ],
            [
                'en' => 'Christian',
                'ar' => 'គ្រិស្តសាសនា',
            ],
            [
                'en' => 'Other',
                'ar' => 'ផ្សេងទៀត',
            ],
        ];

        foreach ($religions as $religion) {
            Religion::create(['name' => $religion]);
        }
    }
}
