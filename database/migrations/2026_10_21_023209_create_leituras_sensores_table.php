
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('leituras_sensores', function (Blueprint $table) {
            $table->id();

            $table->decimal('pressao', 8, 2)->nullable();
            $table->decimal('vazao', 8, 2)->nullable();
            $table->decimal('ph', 4, 2)->nullable();
            $table->decimal('turbidez', 8, 2)->nullable();
            $table->decimal('temperatura', 5, 2)->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('leituras_sensores');
    }
};
