<?php

namespace Database\Seeders;

use App\Models\Classroom;
use App\Models\Gender;
use App\Models\Grade;
use App\Models\MyParent;
use App\Models\Nationalitie;
use App\Models\Religion;
use App\Models\Role;
use App\Models\Student;
use App\Models\Type_Blood;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run()
    {
        $defualtAdmin = 'keochamraeun54@gmail.com';
        $adminusersexists = User::where('email', $defualtAdmin)->first();

        if (!$adminusersexists) {
            $admins = [
                [
                    'name' => 'Admin',
                    'email' => $defualtAdmin,
                    'password' => Hash::make('12345678'),
                ],
            ];

            $adminRole = Role::where('name', 'admin')->first();

            foreach ($admins as $admin) {
                $user = User::create($admin);
                $user->roles()->attach($adminRole);
            }
        }

        $defualtAdmin = 'chimsochinda@gmail.com';
        $adminusersexists = User::where('email', $defualtAdmin)->first();

        if (!$adminusersexists) {
            $admins = [
                [
                    'name' => 'Admin',
                    'email' => $defualtAdmin,
                    'password' => Hash::make('12345678'),
                ],
            ];

            $adminRole = Role::where('name', 'admin')->first();

            foreach ($admins as $admin) {
                $user = User::create($admin);
                $user->roles()->attach($adminRole);
            }
        }
    }
}
