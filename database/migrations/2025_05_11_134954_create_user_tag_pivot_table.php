<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('user_tag_pivot', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained('users', 'user_id')->onDelete('cascade');
            $table->foreignId('tag_id')->constrained('tags', 'tag_id')->onDelete('cascade');
            $table->timestamps();

            $table->primary(['user_id', 'tag_id']);
        });
    }

    
    public function down(): void
    {
        Schema::dropIfExists('user_tag_pivot');
    }
};
