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
        Schema::create('securities', function (Blueprint $table) {
            $table->id();
            $table->decimal('status', 4, 0)->unsigned()->default(0);
            $table->decimal('doors', 4, 0)->unsigned()->default(0);
            $table->decimal('windows', 4, 0)->unsigned()->default(0);
            $table->decimal('indoor_gate', 4, 0)->unsigned()->default(0);
            $table->decimal('outdoor_gate', 4, 0)->unsigned()->default(0);
            $table->decimal('movement', 4, 0)->unsigned()->default(0);
            $table->decimal('glass_break', 4, 0)->unsigned()->default(0);
            $table->decimal('perimeter', 4, 0)->unsigned()->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('securities');
    }
};
