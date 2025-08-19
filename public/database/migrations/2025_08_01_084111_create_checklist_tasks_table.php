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
        Schema::create('checklist_tasks', function (Blueprint $table) {
            $table->id();
            $table->string('title');           // nome da tarefa
            $table->integer('order')->default(0); // ordem de exibição
            $table->text('description')->nullable(); // descrição opcional
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('checklist_tasks');
    }
};
