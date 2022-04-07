<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $users) {
            $users->increments('id');
            $users->string('username')->unique();
            $users->string('user_fullname');
            $users->string('user_email')->unique();
            $users->timestamp('email_verified_at')->nullable();
            $users->string('user_phonenumber');
            $users->string('password');
            $users->string('user_gender');
            $users->string('user_role')->nullable();
            $users->rememberToken();
            $users->timestamps();
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
