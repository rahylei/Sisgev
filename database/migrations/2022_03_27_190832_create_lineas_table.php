<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lineas', function (Blueprint $table) {            
            $table->id();
            $table->string('codigo');
            $table->longText('descripcion');
            $table->foreignId('pieza_id')->constrained('piezas')->onDelete('cascade');
            $table->foreignId('lider_id')->constrained('users')->onDelete('cascade');   
            /*$table->foreignId('personal')->constrained('plantillas')->onDelete('cascade');*/            
            $table->boolean('status')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lineas');
    }
};
