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
        Schema::table('enderecos', function (Blueprint $table) {

            $table->string('number',8)->nullable();
            $table->string('complement',30);
            $table->string('locality',18)->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('enderecos', function (Blueprint $table) {
            $table->dropColumn('number');
            $table->dropColumn('complement');
            $table->dropColumn('locality');
        });
    }
};