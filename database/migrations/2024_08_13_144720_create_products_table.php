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
            $table->string('name');
            $table->text('description');
            $table->integer('price');

            $table->string('type')->comment('Тип бумаги');
            $table->string('sizes')->comment('Размер бумаги');
            $table->string('print_type')->comment('Тип печати');
            $table->string('stitching')->comment('Брошюровка');
            $table->string('laminating')->comment('Ламинация');

            $table->foreignId('category_id')
                ->references('id')
                ->on('categories');
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
