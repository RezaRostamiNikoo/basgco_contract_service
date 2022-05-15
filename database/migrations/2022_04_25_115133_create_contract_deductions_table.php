<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractDeductionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contract_deduction', function (Blueprint $table) {
            $table->id();
            $table->foreignId("contract_id")->constrained("contracts")->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId("deduction_id")->constrained("deductions")->restrictOnDelete()->cascadeOnUpdate();
            $table->double("amount");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contract_deduction');
    }
}
