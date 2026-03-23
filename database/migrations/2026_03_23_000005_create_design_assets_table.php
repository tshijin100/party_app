<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('design_assets', function (Blueprint $table): void {
            $table->id();
            $table->foreignId('candidate_id')->nullable()->constrained()->nullOnDelete();
            $table->json('theme_colors');
            $table->json('app_icons');
            $table->json('background_images');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('design_assets');
    }
};
