<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMemStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mem_students', function (Blueprint $table) {
            $table->unsignedInteger('reqId');
            $table->primary('reqId');
            $table->foreign('reqId')->references('reqId')->on('members');
            $table->string('regNo', 20)->nullable(false);
            $table->unsignedInteger('batch')->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mem_students');
    }
}
