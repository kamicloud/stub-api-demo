<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Shopping extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function(Blueprint $table) {
            $table->increments('id');

            $table->string('name');
            $table->string('description');
            $table->integer('user_id')->comment('所有者');

            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('product_groups', function(Blueprint $table) {
            $table->increments('id');

            $table->string('name');
            $table->string('description');

            $table->integer('store_id');

            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('products', function(Blueprint $table) {
            $table->increments('id');

            $table->integer('product_group_id');

            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('product_inventories', function(Blueprint $table) {
            $table->increments('id');

            $table->integer('product_id');
            $table->integer('store_id');

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
        Schema::dropIfExists('stores');
        Schema::dropIfExists('product_groups');
        Schema::dropIfExists('products');
        Schema::dropIfExists('product_inventories');
    }
}
