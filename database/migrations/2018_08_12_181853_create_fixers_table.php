<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFixersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fixers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstname',30);
            $table->string('lastname',30);
            $table->string('picture',190)->unique();
            $table->date('birth_date');
            $table->string('city',30);
            $table->string('category',100);
            $table->timestamps();
            $table->foreign('city')->references('city')->on('cities')->onUpdate('restrict')->onDelete('cascade');
            $table->foreign('category')->references('category')->on('categories')->onUpdate('restrict')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fixers');
    }
}
