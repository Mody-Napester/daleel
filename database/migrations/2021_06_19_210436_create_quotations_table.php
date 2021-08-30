<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuotationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quotations', function (Blueprint $table) {
            $table->id('id');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('s_lang');
            $table->string('t_lang');
            $table->string('volume');
            $table->string('field');
            $table->string('sample');
            $table->string('comments');
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
        Schema::dropIfExists('quotations');
    }
}
