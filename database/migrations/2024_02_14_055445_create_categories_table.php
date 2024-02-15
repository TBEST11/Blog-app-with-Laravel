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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slog');
            $table->mediumText('description');
            $table->string('image');
            $table->string('mata_title');
            $table->text('mata_description');
            $table->text('mata_keyword');
            $table->tinyInteger('navbar_status')->default('0');
            $table->tinyInteger('status')->default('0');
            $table->integer('created_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('categories');
    }
};
