<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrucksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trucks', function(Blueprint $table) {
            $table->increments('id');

            $table->string('name')->default('')->comment('卡车名');
            $table->string('licence_plate')->default('')->comment('车牌号码');


            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('truck_routes', function(Blueprint $table) {
            $table->increments('id');

            $table->integer('truck_id')->default(0)->comment('节点号');

            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('truck_records', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('area_id')->default(0)->comment('地区标识符');
            $table->integer('truck_id')->default(0)->comment('节点号');
            $table->integer('time')->default(0)->comment('时间');
            $table->double('latitude')->default(0)->comment('纬度');
            $table->double('longitude')->default(0)->comment('经度');
            $table->float('altitude')->default(0)->comment('海拔');
            $table->string('altitude_unit')->default('')->comment('海拔单位');
            $table->float('weight')->default(0)->comment('重量');
            $table->string('weight_unit')->default('')->comment('重量单位');

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
        Schema::dropIfExists('trucks');
        Schema::dropIfExists('truck_routes');
        Schema::dropIfExists('truck_records');
    }
}
