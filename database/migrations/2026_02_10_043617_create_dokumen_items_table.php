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
        Schema::create('dokumen_items', function (Blueprint $table) {
    $table->id();

    $table->foreignId('dokumen_page_id')
        ->constrained()
        ->cascadeOnDelete();

    $table->foreignId('dokumen_category_id')
        ->nullable()
        ->constrained()
        ->nullOnDelete();

    $table->string('judul');
    $table->string('cover_image')->nullable();
    $table->string('file_path');
    $table->string('tahun')->nullable();

    $table->boolean('is_active')->default(true);
    $table->integer('urutan')->default(0);

    $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dokumen_items');
    }
};
