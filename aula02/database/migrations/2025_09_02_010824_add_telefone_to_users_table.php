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
        // Usa Schema::table() para modificar uma tabela existente
        Schema::table('users', function (Blueprint $table) {
            // Adiciona a nova coluna 'telefone'
            // ->nullable() permite que o campo fique vazio para os usuários já existentes
            // ->after('email') posiciona a nova coluna logo depois da coluna 'email'
            $table->string('telefone')->nullable()->after('email');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // O método down deve reverter o que o método up fez
        Schema::table('users', function (Blueprint $table) {
            // Remove a coluna 'telefone'
            $table->dropColumn('telefone');
        });
    }
};