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
        Schema::create('blog', function (Blueprint $table) {
            $table->id();
            $table->string('title', 60);
            $table->string('entry', 250);
            $table->text('text');
            $table->string('author', 100);
            $table->string('genre', 100);
            $table->string('path', 100)->nullable();
            $table->unique(['title', 'entry']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog_apps');
    }
};
