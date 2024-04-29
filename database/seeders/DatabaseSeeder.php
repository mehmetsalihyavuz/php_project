<?php

namespace Database\Seeders;

use App\Models\Job;
use App\Models\Phones\Color\PhoneColor;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            "id"=> "1",
            "username"=> "admin",
            "password"=>123456,
            "isAdmin"=>1,
            'first_name' => 'Admin User Name',
            'last_name' => 'Admin Last Name',
            'email' => 'admin@example.com',
        ]);

        $this->call(JobSeeder::class);  /* to call JobSeeder */
    }
}
