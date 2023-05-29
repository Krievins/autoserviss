<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cars', function (Blueprint $table) {
            $table->string('vin');
            $table->string('owner_name');
            $table->string('owner_phone');
            $table->string('number_plate');
            $table->string('release_year');
            $table->string('brand');
            $table->string('model');
            $table->string('body_type');
            $table->string('motor');
            $table->string('fuel_type');
            $table->string('drive_type');
            $table->string('sql_number');
            $table->integer('user_id')->nullable();
            $table->integer('category_id')->nullable();
            $table->integer('status_id')->default(1);
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
