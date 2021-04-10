<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bills', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('bill_date');            
            $table->string('bill_name');  
            $table->string('bill_ren');            
            $table->string('bill_ele');            
            $table->string('bill_gas');            
            $table->string('bill_wat');            
            $table->string('bill_char')->nullable();            
            $table->string('bill_due')->nullable();            
            $table->string('bill_tot')->nullable();            
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
        Schema::dropIfExists('bills');
    }
}
