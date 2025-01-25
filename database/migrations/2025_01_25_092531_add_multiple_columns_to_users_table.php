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
        Schema::table('users', function (Blueprint $table) {
            $table->string('titre');
            $table->string('telephone')->unique();
            $table->string('specialite');
            $table->string('biographie');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['titre', 'telephone', 'specialite', 'biographie']); // Supprimez les colonnes en cas de rollback
        });
    }
};
