<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('products_new', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->foreignId('category_id')->nullable()->constrained()->onUpdate('cascade')->onDelete('cascade');
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
            $table->enum('units', ['KG', 'PEICE', 'GRAM', 'LITRE', 'DOZEN', 'LITER'])->default('GRAM');
            $table->boolean('featured')->default(false);
            $table->boolean('status')->default(true);
            $table->softDeletes();
            $table->timestamps();
        });

        DB::statement('INSERT INTO products_new SELECT * FROM products');

        Schema::dropIfExists('products');
        Schema::rename('products_new', 'products');
    }

    public function down(): void
    {
        Schema::create('products_new', function (Blueprint $table) {
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
            $table->enum('units', ['KG', 'PEICE', 'GRAM', 'LITRE', 'DOZEN', 'LITER'])->default('GRAM');
            $table->boolean('featured')->default(false);
            $table->boolean('status')->default(true);
            $table->softDeletes();
            $table->timestamps();
        });

        DB::statement('INSERT INTO products_new SELECT * FROM products');

        Schema::dropIfExists('products');
        Schema::rename('products_new', 'products');
    }
};
