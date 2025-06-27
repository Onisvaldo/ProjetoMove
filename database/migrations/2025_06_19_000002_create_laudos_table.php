<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        if (!Schema::hasTable('laudos')) {
            Schema::create('laudos', function (Blueprint $table) {
                $table->id();
                $table->foreignId('usuario_id')->constrained('users');
                $table->string('nome_arquivo');
                $table->string('caminho');
                $table->dateTime('data_envio');
                $table->enum('status', ['pendente', 'analisado'])->default('pendente');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('laudos');
    }
};
