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
        Schema::table('aplicaciones', function (Blueprint $table) {
            //
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('aplicaciones', function (Blueprint $table) {
            $table->string('imagen')->nullable();
            $table->text('descripcion')->nullable();
            $table->integer('peso')->nullable();
            $table->boolean('lectura')->default(false);
            $table->boolean('matematicas')->default(false);
            $table->boolean('geografia')->default(false);
            $table->boolean('realidad_virtual')->default(false);
        });
    }
};
