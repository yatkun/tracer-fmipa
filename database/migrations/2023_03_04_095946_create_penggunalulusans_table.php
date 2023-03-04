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
        Schema::create('penggunalulusans', function (Blueprint $table) {
            $table->id();
            $table->string('namapengisi');
            $table->string('namaperusahaan');
            $table->string('posisijabatan');
            $table->string('namaalumni');
            $table->string('prodialumni');
            $table->integer('p1')->default(0);
            $table->integer('p2')->default(0);;
            $table->integer('p3')->default(0);;
            $table->integer('p4')->default(0);;
            $table->integer('p5')->default(0);;
            $table->integer('p6')->default(0);;
            $table->integer('p7')->default(0);;
            $table->text('saran')->nullable();
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
        Schema::dropIfExists('penggunalulusans');
    }
};
