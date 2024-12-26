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
        Schema::create('attachments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('project_id')->nullable()->constrained('projects')->onDelete('cascade'); // İlgili proje
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Dosyayı yükleyen
            $table->string('file_path'); // Dosya yolu
            $table->string('file_type')->nullable(); // Dosya türü (örn: pdf, jpg)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attachments');
    }
};
