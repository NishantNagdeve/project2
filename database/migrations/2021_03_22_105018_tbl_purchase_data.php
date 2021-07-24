<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblPurchaseData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblPurchaseData', function (Blueprint $table) {
            $table->id();
            $table->string('customer_name', 120)->nullable();
            $table->string('ph_no', 10)->nullable();
            $table->text('address')->nullable();
            $table->string('vehicle_details', 50)->nullable();
            $table->string('vehicle_no', 10)->nullable();
            $table->string('amount', 20)->nullable();
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
        Schema::dropIfExists('tblPurchaseData');
    }
}
