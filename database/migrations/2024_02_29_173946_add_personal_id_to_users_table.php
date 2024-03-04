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
            $table->foreignId('personal_id')->nullable()->after('id')->constrained()->onDelete('set null');
            // Puedes agregar aquí otros campos que necesites
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropConstrainedForeignId('personal_id');
            // Asegúrate de revertir los cambios agregando dropColumn para los campos adicionales
        });
    }
};
