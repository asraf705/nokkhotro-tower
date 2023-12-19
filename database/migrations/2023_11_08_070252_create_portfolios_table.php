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
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id');
            $table->string('address');
            $table->string('title');
            $table->text('description');
            $table->text('image_1');
            $table->text('image_2');
            $table->text('image_3');
            $table->tinyInteger('status')->default(1)->comment('1= Active, 0= Inactive');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portfolios');
    }
};
