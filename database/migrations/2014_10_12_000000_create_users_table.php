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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('tip_docu')->nullable();
            $table->integer('cc')->unique();
            $table->string('apellido')->nullable();
            $table->integer('edad')->nullable();
            $table->date('f_naci')->nullable();
            $table->string('celular')->nullable();
            $table->string('telefono')->nullable();
            $table->string('R_social')->nullable();
            $table->string('direcion')->nullable();
            $table->string('municipio')->nullable();
            $table->string('zona_reside')->nullable();
            $table->string('barrio')->nullable();
            $table->string('ti_activida')->nullable();
            $table->string('aceptacion_leyes')->nullable();
            $table->string('confirma_registro')->nullable();
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
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
        Schema::dropIfExists('users');
    }
};
