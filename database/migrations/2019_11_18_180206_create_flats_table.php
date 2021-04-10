<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFlatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flats', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fname');            
            $table->string('fimage1')->nullable();        
            $table->string('fimage2')->nullable();        
            $table->string('fimage3')->nullable();        
            $table->string('fimage4')->nullable();        
            $table->string('ftype');            
            $table->longText('fdescrip');            
            $table->longText('ffacilities');            
            $table->longText('fagree');    
            $table->string('frent');    
            $table->string('fb')->nullable();  
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
        Schema::dropIfExists('flats');
    }
}
