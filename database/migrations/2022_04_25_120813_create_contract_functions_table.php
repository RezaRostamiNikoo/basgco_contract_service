<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractFunctionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contract_functions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("request_id");
            $table->unsignedBigInteger("row");
            $table->timestamp("started_at");
            $table->timestamp("finished_at");
            $table->string("description");
            $table->string("status");
            $table->unsignedBigInteger("amount");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contract_functions');
    }
}
