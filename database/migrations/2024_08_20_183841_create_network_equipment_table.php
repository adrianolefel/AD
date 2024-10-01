<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNetworkEquipmentsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('network_equipments', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Ensure this line exists
            $table->string('type');
            $table->string('serial_number');
            $table->string('model');
            $table->string('manufacturer');
            $table->string('ip_address');
            $table->string('mac_address');
            $table->string('site');
            $table->string('status');
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('network_equipments');
    }
}