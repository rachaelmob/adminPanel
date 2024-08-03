<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Company;
use App\Models\Employee;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // Admin user seeder
        User::create([
        'role' => 'admin', 
        'name' => 'Admin User',
        'email' => 'admin@admin.com',
        'password' => bcrypt('password'),
        ]);
        
        // Create 10 companies, each with 5 employees
        Company::factory(10)->create()->each(function ($company) {
            Employee::factory(5)->create(['company_id' => $company->id]);
        });

    }
}
