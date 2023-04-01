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
        Schema::create('associated', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->enum('situacion', ['Alta-nueva', 'Renovacion', 'Modificacion-datos']);
            $table->string('email_comunicacion_directa');
            $table->enum('beca_comedor', ['si', 'no']);
            $table->string('name_padre_madre');
            $table->string('surname_padre_madre');
            $table->string('dni');
            $table->string('telefono');
            $table->longText('direccion');
            $table->longText('colaboracion_ampa')->nullable();
            $table->unsignedBigInteger('payment_id');
            $table->timestamps();

            $table->foreign('payment_id')->references('id')->on('payments');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('associated');
    }
};
