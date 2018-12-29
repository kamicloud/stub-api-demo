<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWebsiteLayouts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sidebars', function(Blueprint $table) {
            $table->increments('id');

            $table->string('name')->default('')->content('名称');
            $table->string('icon')->default('')->comment('图标');
            $table->string('uri')->default('')->comment('uri');
            $table->integer('parent_id')->default(0);
            $table->integer('sequence')->default(0);
            $table->integer('status')->default(0)->comment('状态');
            $table->string('comment')->default('')->comment('备注');

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
        Schema::dropIfExists('sidebars');
    }
}
