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
        Schema::create('scratch_cards', function (Blueprint $table) {
$table->id();
    $table->string('pin')->unique();
    $table->boolean('is_used')->default(false);
    $table->unsignedBigInteger('used_by')->nullable(); // student_id
    $table->timestamp('used_at')->nullable();
    $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scratch_cards');
    }
};
