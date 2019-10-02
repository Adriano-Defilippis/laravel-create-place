<?php

use Illuminate\Database\Seeder;
use App\Company;

class CompanyesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Company::class, 25) -> create();
    }
}
