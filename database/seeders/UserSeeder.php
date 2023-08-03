<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // membuat user dummy admin, student, dan viewer

        $users = [
            [
                'id' => 1,
                'name' => 'Admin Pendidikan Formal',
                'nip' => '0000000ZY',
                'email' => 'pendidikan@formal.com',
                'role' => 'admin',
                'remember_token' => Str::random(30),
                'password' => bcrypt(config('app.admin_password')),
            ],
            [
                'id' => 2,
                'name' => 'Awardee Student',
                'nip' => '0000001ZY',
                'email' => 'awardee@student.com',
                'role' => 'student',
                'remember_token' => Str::random(30),
                'password' => bcrypt(config('app.student_password')),
            ],
            [
                'id' => 3,
                'name' => 'Manager UPDL',
                'nip' => '0000002ZY',
                'email' => 'manager@updl.com',
                'role' => 'viewer',
                'remember_token' => Str::random(30),
                'password' => bcrypt(config('app.viewer_password')),
            ],

        ];

        foreach ($users as $user) {
            User::updateOrCreate(['id' => $user['id']], $user);
        }
    }
}
