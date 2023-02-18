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
        Schema::create('kuesioners', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
            // $table->foreignId('user_id')->constrained('users');
            // $table->string('nomoralumni');
            $table->string('kodept');
            $table->integer('kodeprodi');
            $table->string('namalengkap');
            $table->integer('tahunlulus');
            $table->string('nohp');
            $table->string('email');
            $table->integer('p1')->nullable();
            $table->integer('p2')->nullable();
            $table->integer('p2c')->nullable();
            $table->integer('p2d')->nullable();
            $table->integer('p2e')->nullable();
            $table->integer('p3')->nullable();
            $table->integer('p4')->nullable();
            $table->string('p4h')->nullable();
            $table->string('p5')->nullable();
            $table->integer('p6')->nullable();
            $table->integer('p7')->nullable();
            $table->integer('p8a')->nullable();
            $table->string('p8b')->nullable();
            $table->string('p8c')->nullable();
            $table->date('p8d')->nullable();
            $table->integer('p9')->nullable();
            $table->string('p9h')->nullable();
            $table->integer('p10')->nullable();

            
            // $table->integer('p11')->nullable();


            // $table->integer('p12a1')->nullable();
            // $table->integer('p12a2')->nullable();
            // $table->integer('p12b1')->nullable();
            // $table->integer('p12c1')->nullable();
            // $table->integer('p12b2')->nullable();
            // $table->integer('p12c2')->nullable();
            // $table->integer('p12d1')->nullable();
            // $table->integer('p12d2')->nullable();
            // $table->integer('p12e1')->nullable();
            // $table->integer('p12e2')->nullable();
            // $table->integer('p12f1')->nullable();
            // $table->integer('p12f2')->nullable();
            // $table->integer('p12g1')->nullable();
            // $table->integer('p12g2')->nullable();
            // $table->integer('p13a')->nullable();
            // $table->integer('p13b')->nullable();
            // $table->integer('p13c')->nullable();
            // $table->integer('p13d')->nullable();
            // $table->integer('p13e')->nullable();
            // $table->integer('p13f')->nullable();
            // $table->integer('p13g')->nullable();
       
            // $table->string('p14a')->nullable();
            // $table->string('p14b')->nullable();
            // $table->integer('p14c')->nullable();
       
            // $table->integer('p15a')->nullable();
            // $table->integer('p15b')->nullable();
            // $table->integer('p15c')->nullable();
            // $table->integer('p15d')->nullable();
            // $table->integer('p15e')->nullable();
            // $table->integer('p15f')->nullable();
            // $table->integer('p15g')->nullable();
            // $table->integer('p15h')->nullable();
            // $table->integer('p15i')->nullable();
            // $table->integer('p15j')->nullable();
            // $table->integer('p15k')->nullable();
            // $table->integer('p15l')->nullable();
            // $table->integer('p15m')->nullable();
            // $table->integer('p15n')->nullable();
            // $table->integer('p15o')->nullable();
            // $table->string('p16')->nullable();
            // $table->string('p17')->nullable();
            // $table->string('p18')->nullable();
            // $table->integer('p19a')->nullable();
            // $table->integer('p19b')->nullable();
            // $table->integer('p19c')->nullable();
            // $table->integer('p19d')->nullable();
            // $table->integer('p19e')->nullable();
            // $table->integer('p20')->nullable();
            // $table->integer('p20f')->nullable();
            // $table->integer('p21a')->nullable();
            // $table->integer('p21b')->nullable();
            // $table->integer('p21c')->nullable();
            // $table->integer('p21d')->nullable();
            // $table->integer('p21e')->nullable();
            // $table->integer('p21f')->nullable();
            // $table->integer('p21g')->nullable();
            // $table->integer('p21h')->nullable();
            // $table->integer('p21i')->nullable();
            // $table->integer('p21j')->nullable();
            // $table->integer('p21k')->nullable();
            // $table->integer('p21l')->nullable();
            // $table->string('p21m')->nullable();
         
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
        Schema::dropIfExists('kuesioners');
    }
};
