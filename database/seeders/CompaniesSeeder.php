<?php

namespace Database\Seeders;

use App\Models\Companies;
use Illuminate\Database\Seeder;

class CompaniesSeeder extends Seeder
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
                'name' => "Facebook",
                'email' => 'facebook@google.com',
                'logo' => "company.png",
                'website' => "https://www.facebook.com/",
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'name' => "Google",
                'email' => 'google@google.co.id',
                'logo' => "company.png",
                'website' => "https://www.google.com/",
                'created_at' => $date,
                'updated_at' => $date
            ]
        ];

        foreach ($data as $company) {
            Companies::create($company);
        };
    }
}
