<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('schedule_events', function (Blueprint $table): void {
            $table->id();
            $table->foreignId('candidate_id')->constrained()->cascadeOnDelete();
            $table->string('external_id')->unique();
            $table->date('date')->index();
            $table->string('title');
            $table->text('description')->nullable();
            $table->timestamp('start_time');
            $table->string('location_name');
            $table->boolean('is_public')->default(true);
            $table->json('coordinates')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('schedule_events');
    }
};
