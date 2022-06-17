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
        $data = [
            [
                'first_name' => "Apri",
                'last_name' => 'Pandu',
                'company' => "Facebook",
                'email' => "pandu300478@gmail.com",
                "phone" => "6281318977078",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'first_name' => "Benjamin",
                'last_name' => 'Kregor',
                'company' => "Google",
                'email' => "benjaminkregor@gmail.com",
                "phone" => "628211762341",
                'created_at' => $date,
                'updated_at' => $date
            ]
        ];

        foreach ($data as $employee) {
            Employees::create($employee);
        };
    }
}
