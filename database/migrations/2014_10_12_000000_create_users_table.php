<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('referrer_id')->nullable();
            $table->foreign('referrer_id')
                ->references('id')
                ->on('users');
            $table->string('username')->unique();
            $table->string('name', 100);
            $table->tinyInteger('admin')->default(0);
            $table->string('email');
            $table->string('phone');
            $table->string('password');
            // $table->string('referrer')->nullable();
            $table->string('code');
            $table->string('bank_name');
            $table->string('account_name');
            $table->string('account_number');
            $table->tinyInteger('block')->default(0);
            $table->tinyInteger('paid_registration_fee')->default(0);
            // $table->string('email_token')->nullable();
            $table->rememberToken();
            $table->timestamp('email_verified_at')->nullable();
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
        Schema::dropIfExists('users');
    }
}
