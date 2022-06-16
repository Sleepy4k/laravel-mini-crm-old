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
        $companies = [
            'name' => "NKCore",
            'email' => 'NKCore@google.com',
            'logo' => "company.png",
            'website' => "benjamin4k.my.id",
            'created_at' => $date,
            'updated_at' => $date
        ];

        Companies::create($companies);
    }
}
