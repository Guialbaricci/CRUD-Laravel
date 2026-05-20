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
        Schema::table('cursos', function (Blueprint $table) {
        $table->string('titulo');
        $table->text('descricao')->nullable(); // nullable se não for obrigatório
        $table->string('imagem')->nullable();
        $table->decimal('valor', 8, 2);
        $table->boolean('publicado')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cursos', function (Blueprint $table) {
            $table->dropColumn(['titulo', 'descricao', 'imagem', 'valor', 'publicado']);
        });
    }
};
