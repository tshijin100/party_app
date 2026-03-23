<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('submissions', function (Blueprint $table): void {
            $table->id();
            $table->foreignId('candidate_id')->constrained()->cascadeOnDelete();
            $table->string('external_id')->unique();
            $table->string('type');
            $table->text('description');
            $table->string('sender_name')->nullable();
            $table->string('sender_contact')->nullable();
            $table->string('photo_url')->nullable();
            $table->string('status')->default('pending');
            $table->timestamp('submitted_at');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('submissions');
    }
};
