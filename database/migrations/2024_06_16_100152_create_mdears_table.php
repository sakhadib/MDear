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
        Schema::create('mdears', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('popper_id');
            $table->string('title');
            $table->text('content');
            $table->boolean('isPublic')->default(false);
            $table->timestamps();
            $table->foreign('popper_id')->references('id')->on('poppers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mdears');
    }
};
