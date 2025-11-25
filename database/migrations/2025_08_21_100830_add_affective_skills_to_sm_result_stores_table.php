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
        Schema::table('sm_result_stores', function (Blueprint $table) {
            $table->string('Politeness')->nullable();
            $table->string('Neatness')->nullable();
            $table->string('Punctuality')->nullable();
            $table->string('Honesty')->nullable();
            $table->string('Leadership Skill')->nullable();
            $table->string('Cooperation')->nullable();
            $table->string('Attentiveness')->nullable();
            $table->string('Handwriting')->nullable();
            $table->string('Verbal Fluency')->nullable();
            $table->string('Sports')->nullable();
            $table->string('Handling Tools')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sm_result_stores', function (Blueprint $table) {
            //
        });
    }
};
