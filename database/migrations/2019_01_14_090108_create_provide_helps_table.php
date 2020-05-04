<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProvideHelpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provide_helps', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedinteger('user_id');
            $table->string('filename')->nullable();
            $table->foreign('user_id')->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->integer('ph_id');
            $table->string('ph_amount');
            $table->Integer('ph_matched')->default(0);
            $table->tinyInteger('ph_confirmed')->default(0);
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
        Schema::dropIfExists('provide_helps');
    }
}
