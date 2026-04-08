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
            $table->id('product_id');
            $table->foreignId('category_id')
                ->constrained('categories', 'category_id')
                ->cascadeOnDelete();
            $table->foreignId('brand_id')
                ->constrained('brands', 'brand_id')
                ->cascadeOnDelete();
            $table->string('product_name');
            $table->integer('product_price');
            $table->integer('product_stock');
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
