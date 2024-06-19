<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ict_devices', function (Blueprint $table) {
            $table->id();
            $table->string('department_id');
            $table->string('ict_category_id');
            $table->string('status_id');
            $table->string('ip_config_id');
            $table->string('end_user');
            $table->string('property_no');
            $table->string('ict_code');
            $table->string('brand');
            $table->string('model');
            $table->string('serial_no');
            $table->string('address');
            $table->string('floor');
            $table->string('manufactured_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ict_devices');
    }
};
