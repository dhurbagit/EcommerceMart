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
        Schema::create('user_infos', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->foreignId('user_id')->constrained();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('company_name')->nullable();
            $table->string('country');
            $table->string('street_address_1');
            $table->string('street_address_2');
            $table->string('town_city');
            $table->string('state_country');
            $table->string('postalcode_zip');
            $table->string('phone');
            $table->string('email');
            $table->string('get_different_address')->nullable();
            $table->string('order_note')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_infos');
    }
};
