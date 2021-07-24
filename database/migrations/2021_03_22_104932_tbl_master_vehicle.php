<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblMasterVehicle extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblMasterVehicle', function (Blueprint $table) {
            $table->id();
            $table->string('model_no', 20)->nullable();
            $table->string('chasis_no', 20)->nullable();
            $table->string('variant', 50)->nullable();
            $table->string('color', 10)->nullable();
            $table->text('img')->nullable();
            $table->string('price', 20)->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblMasterVehicle');
    }
}
