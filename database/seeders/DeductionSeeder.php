<?php

namespace Database\Seeders;

use App\Models\ContractType;
use App\Models\Deduction;
use Illuminate\Database\Seeder;

class DeductionSeeder extends Seeder
{
    public function run()
    {
        Deduction::create(["name" => "حسن انجام تعهدات"]);
        Deduction::create(["name" => "بیمه"]);
        Deduction::create(["name" => "مالیات"]);
    }
}
