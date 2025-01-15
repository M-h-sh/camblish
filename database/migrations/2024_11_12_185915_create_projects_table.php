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
    Schema::create('projects', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->text('description');
        $table->decimal('budget', 10, 2);
        $table->foreignId('category_id')->constrain('id')->onDelete('cascade');
        $table->foreignId('subcategory_id')->constrain('id')->onDelete('cascade');
        $table->string('project_type');
        $table->integer('duration');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
