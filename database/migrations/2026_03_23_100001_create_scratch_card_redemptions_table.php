<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('scratch_card_redemptions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('scratch_card_id')->constrained('scratch_cards')->onDelete('cascade');
            // $table->foreignId('company_id')->constrained('companies')->onDelete('cascade');
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('mobile')->nullable();
            $table->timestamp('redeemed_at')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('scratch_card_redemptions');
    }
};