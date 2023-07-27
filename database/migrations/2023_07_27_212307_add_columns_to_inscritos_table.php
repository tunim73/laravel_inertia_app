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
        Schema::table('inscritos', function (Blueprint $table) {
            $table->string('phone', 20)->nullable();
            $table->date('birthDate')->nullable();
            $table->string('document', 20)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('inscritos', function (Blueprint $table) {
            $table->dropColumn('phone');
            $table->dropColumn('birthDate');
            $table->dropColumn('document');
        });
    }
};
