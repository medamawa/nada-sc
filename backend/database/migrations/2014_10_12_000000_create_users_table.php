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
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('ユーザーID');
            $table->string('name')->unique()->comment('ユーザー名');
            $table->string('email')->unique()->nullable()->comment('連絡用メールアドレス');
            $table->bigInteger('role')->comment('役職');
            $table->string('password')->comment('パスワード');
            $table->rememberToken();
            $table->softDeletes();
            $table->timestamps();

            $table->index('name');
            $table->index('role');
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
