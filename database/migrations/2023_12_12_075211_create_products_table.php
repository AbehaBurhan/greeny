<?php

use App\Models\Admin\Brand;
use App\Models\Admin\Category;
use App\Models\Admin\ShippingType;
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
            $table->string('slug')->unique();
            $table->string('image')->nullable();
            $table->text('description');
            $table->integer('quantity');
            $table->string('sku')->unique();
            $table->integer('price');
            $table->enum('availability', ['in_stock', 'out_of_stock'])->default('in_stock');
            $table->foreignIdFor(Category::class)->constrained();
            $table->foreignIdFor(Brand::class)->constrained();
            $table->foreignIdFor(ShippingType::class)->constrained();
            $table->boolean('is_active')->default(0);
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
