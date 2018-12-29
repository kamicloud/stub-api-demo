<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CodeReversion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reversions', function(Blueprint $table) {
            $table->increments('id');

            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('reversion_files', function(Blueprint $table) {
            $table->increments('id');

            $table->integer('reversion_id')->default(0);

            $table->string('sniffer')->default('')->comment('嗅探器');
            $table->string('name')->default('')->comment('文件名');
            $table->text('contents');

            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('reversion_reviews', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('reversion_file_id')->default(0);

            $table->string('message')->default('');
            $table->string('type')->default('');
            $table->integer('line')->default(0);

            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('reversion_ignores', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('reversion_id')->default(0);
            $table->string('pattern')->default('');
            $table->string('type')->default('');
            $table->integer('status')->default(0);

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
        Schema::dropIfExists('reversions');
        Schema::dropIfExists('reversion_files');
        Schema::dropIfExists('reversion_reviews');
        Schema::dropIfExists('reversion_ignores');
    }
}
