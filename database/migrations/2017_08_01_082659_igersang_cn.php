<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class IgersangCn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gersang_items', function(Blueprint $table) {
            $table->increments();

            $table->string('name')->default('');


            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('gersang_mercenaries', function(Blueprint $table) {
            $table->increments();

            $table->string('name')->default('');

            $table->integer('min_atk')->default(0);
            $table->integer('max_atk')->default(0);
            $table->integer('def')->default(0);

            $table->integer('str')->default(0);
            $table->integer('dex')->default(0);
            $table->integer('vit')->default(0);
            $table->integer('int')->default(0);
            $table->integer('str')->default(0);

            $table->integer('')->default(0);
            $table->integer('')->default(0);


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
        Schema::dropIfExists('gersang_items');
        Schema::dropIfExists('gersang_mercenaries');
    }
}
