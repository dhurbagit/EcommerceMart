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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('product_name')->nullable();
            $table->string('slug')->nullable();
            $table->string('unit')->nullable();
            $table->string('price')->nullable();
            $table->string('refundable')->default(0);
            $table->longText('description')->nullable();
            $table->string('featured')->default(0);
            $table->string('today_deal')->default(0);
            $table->string('flash_title')->nullable();
            $table->string('discount')->nullable();
            $table->string('discount_type')->nullable();
            $table->string('status')->default(0);
            $table->string('sales')->default(0);
            $table->string('color')->nullable(0);
            $table->string('rating')->nullable();
            $table->string('category_key')->nullable();
            $table->foreignId('brand_id')->constrained('brands')->onDelete('CASCADE');
            $table->json('tag_key')->nullable();
            $table->foreignId('image_id')->constrained('images')->onDelete('CASCADE');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
