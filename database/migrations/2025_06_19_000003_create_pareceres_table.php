<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        if (!Schema::hasTable('pareceres')) {
            Schema::create('pareceres', function (Blueprint $table) {
                $table->id();
                $table->foreignId('laudo_id')->constrained('laudos')->onDelete('cascade');
                $table->foreignId('usuario_id')->constrained('users');
                $table->text('conteudo');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('pareceres');
    }
};
