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
            $table->string('namalengkap');
            $table->string('username')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->enum('role', ['admin', 'alumni'])->default('alumni');
            $table->string('prodi')->nullable();
            $table->string('tahunlulus')->nullable();
            $table->string('alamat')->nullable();
            $table->string('nohp')->nullable();
            $table->string('email')->nullable();
            $table->string('foto')->default('emoji.jpg');
            $table->string('pekerjaan')->nullable();
            $table->rememberToken();
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
