<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->Bigincrements('id');
            $table->string('nik_user');
            $table->unsignedBigInteger('id_kos');
            $table->text('pesan');
            $table->foreign('nik_user')->references('nik')->on('users');
            $table->foreign('id_kos')->references('id')->on('posts');
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
        Schema::dropIfExists('reviews');
    }
};
