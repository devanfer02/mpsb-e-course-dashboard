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
        Schema::create('pilgandas', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('option_id');
            $table->string('option_value')->nullable(false);
            $table->boolean('correct')->nullable(false);
            $table->timestamps();

            $table->foreign('option_id')->references('id')->on('options')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pilgandas');
    }
};
