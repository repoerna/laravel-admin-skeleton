<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Hash;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superAdmin = User::updateOrCreate([
            'name' => 'Super Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make(12345678),
            'email_verified_at' => Carbon::now(),
        ]);

        $superAdmin->assignRole('Super Admin');
    }
}
