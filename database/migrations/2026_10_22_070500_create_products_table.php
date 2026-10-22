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
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('brand')->nullable();
            $table->string('model_ref')->nullable();
            $table->text('short_description')->nullable();
            $table->longText('description')->nullable();
            $table->json('specifications')->nullable(); // key/value technical specs
            $table->json('features')->nullable();       // bullet feature list
            $table->json('applications')->nullable();   // application list
            $table->string('main_image')->nullable();
            $table->json('gallery')->nullable();        // additional images
            $table->string('document_url')->nullable(); // PDF brochure
            $table->boolean('active')->default(true);
            $table->boolean('featured')->default(false);
            $table->boolean('is_second_hand')->default(false);
            $table->string('condition')->nullable();    // 'nuevo' | 'ocasion'
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
