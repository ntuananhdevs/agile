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
        Schema::table('product_variants', function (Blueprint $table) {
            // Thêm cột color nếu chưa tồn tại
            if (!Schema::hasColumn('product_variants', 'color')) {
                $table->string('color')->after('product_id');
            }
            
            // Thêm cột ram nếu chưa tồn tại
            if (!Schema::hasColumn('product_variants', 'ram')) {
                $table->string('ram')->after('color');
            }
            
            // Thêm cột storage nếu chưa tồn tại
            if (!Schema::hasColumn('product_variants', 'storage')) {
                $table->string('storage')->after('ram');
            }
            
            // Thêm cột price nếu chưa tồn tại
            if (!Schema::hasColumn('product_variants', 'price')) {
                $table->decimal('price', 12, 2)->after('storage');
            }
            
            // Thêm cột stock nếu chưa tồn tại
            if (!Schema::hasColumn('product_variants', 'stock')) {
                $table->integer('stock')->default(0)->after('price');
            }
            
            // Thêm cột image nếu chưa tồn tại
            if (!Schema::hasColumn('product_variants', 'image')) {
                $table->string('image')->nullable()->after('stock');
            }
            
            // Thêm cột status nếu chưa tồn tại
            if (!Schema::hasColumn('product_variants', 'status')) {
                $table->string('status')->default('active')->after('image');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('product_variants', function (Blueprint $table) {
            $columns = ['color', 'ram', 'storage', 'price', 'stock', 'image', 'status'];
            
            foreach ($columns as $column) {
                if (Schema::hasColumn('product_variants', $column)) {
                    $table->dropColumn($column);
                }
            }
        });
    }
};