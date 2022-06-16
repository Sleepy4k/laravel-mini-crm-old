<?php

namespace Database\Seeders;

use App\Models\Employees;
use Illuminate\Database\Seeder;

class EmployeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = date("Y/m/d H:i:s");
        $employees = [
            'first_name' => "Apri",
            'last_name' => 'Pandu',
            'company' => "NKCore",
            'email' => "pandu300478@gmail.com",
            "phone" => "6281318977078",
            'created_at' => $date,
            'updated_at' => $date
        ];

        Employees::create($employees);
    }
}
