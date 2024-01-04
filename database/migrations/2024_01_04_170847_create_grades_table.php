<?php

use App\Models\Stream;
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
        Schema::create('grades', function (Blueprint $table) {
            $table->id();
            $table->string('grade');
            $table->foreignIdFor(Stream::class);
            $table->foreignId('school_id')->references('id')->on('users')->nullable();
            $table->foreignId('class_teacher_id')->references('id')->on('users')->nullable();
            $table->foreignId('class_prefect_id')->references('id')->on('users')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grades');
    }
};
