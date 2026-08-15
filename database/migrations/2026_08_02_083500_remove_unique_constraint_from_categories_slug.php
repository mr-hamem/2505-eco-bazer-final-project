<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Allow multiple categories to use the same slug.
     */
    public function up(): void
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->dropUnique('categories_slug_unique');
        });
    }

    /**
     * Restore the original uniqueness rule if this migration is rolled back.
     */
    public function down(): void
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->unique('slug');
        });
    }
};
