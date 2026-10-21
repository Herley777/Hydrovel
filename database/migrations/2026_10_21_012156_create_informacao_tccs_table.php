```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('informacao_tccs', function (Blueprint $table) {
            $table->id();
            $table->string('categoria');
            $table->string('titulo');
            $table->text('descricao');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('informacao_tccs');
    }
};
