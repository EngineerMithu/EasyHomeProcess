<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTenantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tenants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tenant_name');
            $table->string('tenant_image')->default('defaulttenantphoto.jpg');            
            $table->string('tenant_phone');
            $table->string('tenant_enroll');
            $table->longText('tenant_address1');            
            $table->longText('tenant_address');
            $table->string('tenant_nid');
            $table->string('tenant_occu');
            $table->integer('tenant_family');
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
        Schema::dropIfExists('tenants');
    }
}
