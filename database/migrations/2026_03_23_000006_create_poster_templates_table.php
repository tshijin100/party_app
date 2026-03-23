<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('poster_templates', function (Blueprint $table): void {
            $table->id();
            $table->string('external_id')->unique();
            $table->string('category')->index();
            $table->string('title');
            $table->string('thumbnail_url');
            $table->string('frame_url');
            $table->json('text_placeholder_coordinates')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('poster_templates');
    }
};
