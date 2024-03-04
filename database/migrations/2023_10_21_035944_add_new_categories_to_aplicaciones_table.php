<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('aplicacions', function (Blueprint $table) {
        $table->boolean('escritura')->default(false);
        $table->boolean('competencias_basicas')->default(false);
        $table->boolean('entretenimiento')->default(false);
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('aplicaciones', function (Blueprint $table) {
            //
        });
    }
};
