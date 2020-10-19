<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->uuid('id')->primary()->comment('記事ID');
            $table->string('user_id')->comment('ユーザーID');
            $table->string('name')->comment('ユーザー名');
            $table->string('email')->comment('連絡用メールアドレス');
            $table->string('title')->comment('タイトル');
            $table->string('body')->comment('本文');
            $table->json('links')->nullable()->comment('参考リンク');
            $table->bigInteger('view')->default(0)->comment('ビューカウント');
            $table->softDeletes();
            $table->timestamps();

            $table->index('user_id');
            $table->index('name');
            $table->index('title');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
