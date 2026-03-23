<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('generated_posters', function (Blueprint $table): void {
            $table->id();
            $table->foreignId('candidate_id')->constrained()->cascadeOnDelete();
            $table->foreignId('poster_template_id')->constrained()->cascadeOnDelete();
            $table->string('external_id')->unique();
            $table->text('custom_text');
            $table->boolean('include_candidate_photo')->default(true);
            $table->string('download_url');
            $table->timestamp('created_at');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('generated_posters');
    }
};
