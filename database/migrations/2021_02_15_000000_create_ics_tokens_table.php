<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIcsTokensTable extends Migration
{
    public function up(): void {
        Schema::create('ics_tokens', function(Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('name')->default(null)->nullable();
            $table->uuid('token')->unique();
            $table->timestamp('last_accessed')->default(null)->nullable();
            $table->timestamps();

            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
                  ->cascadeOnDelete();
        });
    }

    public function down(): void {
        Schema::dropIfExists('ics_tokens');
    }
}
