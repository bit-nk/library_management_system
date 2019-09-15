<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksIssuedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books_issueds', function (Blueprint $table) {
            $table->increments('issueId');
            $table->dateTime('issueDate')->nullable(false);
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
        Schema::dropIfExists('books_issueds');
    }
}
