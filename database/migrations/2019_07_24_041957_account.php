<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Account extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('account_date');            
            $table->string('account_balance');
            $table->string('account_cost');
            $table->string('account_salary');
            $table->string('account_electricity');
            $table->string('account_water');
            $table->string('account_gas');
            $table->string('account_service');
            $table->string('account_tax');   
            $table->string('account_other');                     
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
        //
    }
}
