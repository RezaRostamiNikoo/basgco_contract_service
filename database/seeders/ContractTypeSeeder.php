<?php

namespace Database\Seeders;

use App\Models\ContractType;
use Illuminate\Database\Seeder;

class ContractTypeSeeder extends Seeder
{
    public function run()
    {
        ContractType::create(["name"=>"حقوق بگیر اداره کاری"]);
        ContractType::create(["name"=>"حقوق بگیر غیر اداره کاری"]);
        ContractType::create(["name"=>"پیمانکاری"]);
        ContractType::create(["name"=>"روز مزدی"]);
    }
}
