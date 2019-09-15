<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksReturnedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books_returneds', function (Blueprint $table) {
          $table->increments('returnId');
          $table->dateTime('retDate')->nullable(false);
          $table->string('itemName')->nullable(false);
          $table->unsignedInteger('reqId')->nullable(false);
          $table->foreign('itemName')->references('itemName')->on('books');
          $table->foreign('reqId')->references('reqId')->on('members');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books_returneds');
    }
}
