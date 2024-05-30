<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assets', function (Blueprint $table) {
            $table->id('id');
            $table->string('name');
            $table->unsignedBigInteger('asset_type_id')->index();
            $table->string('serial_number');
            $table->string('brand_model');
            $table->integer('quantity');
            $table->date('purchase_date')->nullable();
            $table->date('delivery_date')->nullable();
            $table->unsignedBigInteger('asset_status_id')->index();
            $table->timestamps();
            $table->foreign('asset_type_id')->references('id')->on('asset_types');
            $table->foreign('asset_status_id')->references('id')->on('asset_statuses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assets');
    }
};
