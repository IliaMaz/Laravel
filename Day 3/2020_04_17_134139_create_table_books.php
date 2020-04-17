<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableBooks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            // * id = AutoInc, predefined method
            $table->id();
            // * AI
            /*
            $table->increments('book_id');
            $table->primary('my_id')
            */
            $table->string('title', 40);
            $table->float('price');
            // * timestamps creates 2 cols
            // * created_at & updated_at
            $table->timestamps();
            // $table->foreign('user_id')->references('id')->on('user');

            /*
            $table->foreignId();
            */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
