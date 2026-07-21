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
            $table->string('title');
            $table->foreignId('category_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->string('image')->nullable();
            $table->json('gall_images')->nullable();
            $table->decimal('stock')->default(0);
            $table->decimal('price')->default(0);
            $table->decimal('selling_price')->default(0);
            $table->string('short_description')->nullable();
            $table->longText('description')->nullable();
            $table->string('origin')->nullable();
            $table->string('sku')->nullable();
            $table->date('expiry_date')->nullable();
            $table->enum('units', ['KG', 'PEICE', 'GRAM', 'LITRE'])->default('GRAM'); 
            $table->boolean('featured')->default(false);
            $table->boolean('status')->default(true);
            $table->softDeletes();
            // $table->string('units')->default('GRAM')->comment("'KG', 'PEICE', 'GRAM', 'LITRE'");
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
