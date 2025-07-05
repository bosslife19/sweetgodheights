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
        Schema::create('student_result_reports', function (Blueprint $table) {
 $table->id();
    $table->unsignedBigInteger('student_id');
    $table->unsignedBigInteger('class_id');
    $table->unsignedBigInteger('section_id');
    $table->unsignedBigInteger('exam_id');
    $table->string('file_path');
    $table->string('download_link');
    $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_result_reports');
    }
};
