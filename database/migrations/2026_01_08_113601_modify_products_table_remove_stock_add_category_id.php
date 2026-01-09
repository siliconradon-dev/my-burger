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
        Schema::table('products', function (Blueprint $table) {
            // Remove stock column
            $table->dropColumn('stock');
            
            // Remove old category string column
            $table->dropColumn('category');

            // Add new category_id fk
            $table->foreignId('category_id')->nullable()->constrained('categories')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->integer('stock')->default(0);
            $table->string('category')->nullable();
            $table->dropForeign(['category_id']);
            $table->dropColumn('category_id');
        });
    }
};
