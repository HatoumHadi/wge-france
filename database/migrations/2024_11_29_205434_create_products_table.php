<?php

use App\Models\Category;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->longText('description')->nullable();
            $table->string('slug')->unique();
            $table->text('model')->nullable();
            $table->text('brand');
            $table->text('type')->nullable();
            $table->text('speed')->nullable();
            $table->text('resolution')->nullable();
            $table->text('max_print_size')->nullable();
            $table->boolean('color_capability')->default(false);
            $table->boolean('duplex')->default(false);
            $table->text('connectivity')->nullable();
            $table->text('power_consumption')->nullable();
            $table->json('condition')->nullable();
            $table->integer('stock_quantity')->default(1);
            $table->double('price')->nullable();
            $table->integer('warranty')->nullable();
            $table->year('manufacture_year')->nullable();
            $table->text('images')->nullable();
            $table->foreignIdFor(Category::class)->constrained();
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
