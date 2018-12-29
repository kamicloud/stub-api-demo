<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogAndArticles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function(Blueprint $table) {
            $table->increments('id');

            $table->string('title')->default('')->content('标题');
            $table->longText('content')->content('内容');
            $table->bigInteger('user_id')->default(0)->unsigned();
            $table->bigInteger('status');

            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('article_comments', function(Blueprint $table) {
            $table->increments('id');

            $table->string('title')->content('标题');
            $table->string('content')->content('内容');
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('article_id')->unsigned();
            $table->bigInteger('status');
            
            $table->timestamps();
            $table->softDeletes();
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
        Schema::dropIfExists('article_comments');
    }
}
