<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractFunctionItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contract_function_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId("contract_function_id")->constrained("contract_functions")->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId("contract_item_id");
            $table->string("description");
            $table->string("similar_count");
            $table->string("count");
            $table->string("length");
            $table->string("width");
            $table->string("height");
            $table->string("weight");
            $table->string("amount");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contract_function_items');
    }
}
