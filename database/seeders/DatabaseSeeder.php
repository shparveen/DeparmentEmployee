<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Comment;
use App\Models\Department;
use App\Models\Employee;
use App\Models\EmployeePhoneNumber;
use App\Models\EmployeeAddress;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
      /*  Comment::factory()
        ->times(3)
        ->create();*/
       /* Department::factory()
        ->times(3)
        ->create();*/
       /* Employee::factory()
        ->times(3)
        ->create();*/
      /*  EmployeePhoneNumber::factory()
        ->times(3)
        ->create();*/
        EmployeeAddress::factory()
        ->times(3)
        ->create();
    }
}
