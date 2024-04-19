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
        Schema::create('instances', function (Blueprint $table) {
            $table->id();
            $table->integer('team_id')->index('team_idx');
            $table->integer('setup_id')->index('setup_idx');
            $table->string('name');
            $table->string('token');
            $table->boolean('is_active')->nullable()->default(false);
            $table->boolean('is_connected')->nullable();
            $table->dateTime('last_connected')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('instances');
    }
};
