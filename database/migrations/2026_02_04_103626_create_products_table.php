<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {

            $table->id();

            $table->foreignId('category_id')->constrained()->cascadeOnDelete();
            $table->foreignId('subcategory_id')->nullable()->constrained()->cascadeOnDelete();
            $table->foreignId('brand_id')->nullable()->constrained()->cascadeOnDelete();
            $table->foreignId('unit_id')->constrained()->cascadeOnDelete();

            $table->string('name');
            $table->string('code')->nullable();

            $table->integer('stock')->default(0);

            $table->decimal('price',10,2)->nullable();

            $table->text('short_description')->nullable();
            $table->longText('description')->nullable();

            $table->string('thumbnail')->nullable();

            $table->boolean('feature_status')->default(false);
            $table->boolean('status')->default(true);

            $table->timestamps();

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
