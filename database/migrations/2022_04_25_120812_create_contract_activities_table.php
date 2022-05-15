<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contract_activities', function (Blueprint $table) {
            $table->id();
            $table->foreignId("contract_id")->constrained("contracts")->cascadeOnDelete()->cascadeOnUpdate();
            $table->unsignedBigInteger("activity_id");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contract_activities');
    }
}
