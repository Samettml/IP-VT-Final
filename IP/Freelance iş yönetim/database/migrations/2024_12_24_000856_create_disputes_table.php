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
        Schema::create('disputes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('contract_id')->constrained('contracts')->onDelete('cascade'); // İlgili kontrat
            $table->foreignId('raised_by')->constrained('users')->onDelete('cascade'); // Şikayeti başlatan kişi
            $table->text('reason'); // Anlaşmazlık sebebi
            $table->enum('status', ['open', 'resolved', 'closed'])->default('open'); // Anlaşmazlık durumu
            $table->timestamp('resolved_at')->nullable(); // Çözüm tarihi
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('disputes');
    }
};
