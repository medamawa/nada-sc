<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticleActivationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_activations', function (Blueprint $table) {
            $table->uuid('id')->primary()->comment('記事ID');
            $table->string('draft_id')->comment('下書きID');
            $table->boolean('isSubmitted')->default(true)->comment('提出済みフラグ');
            $table->boolean('isActivated')->default(false)->comment('アクティベーション済みフラグ');
            $table->softDeletes();
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
        Schema::dropIfExists('article_activations');
    }
}
