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
        Schema::create('myprojects', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // Foreign key
            $table->string('title'); // Project title
            $table->text('description'); // Project description
            $table->enum('status', ['active', 'completed', 'pending'])->default('active'); // Project status
            $table->decimal('budget', 10, 2); // Project budget
            $table->timestamps(); // Timestamps

           $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
        
    }

   
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('myprojects');
    }
};
