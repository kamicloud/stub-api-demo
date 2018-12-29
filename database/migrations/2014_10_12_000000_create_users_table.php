<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');

            $table->string('name')->comment('名称');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();

            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('user_roles', function (Blueprint $table) {
            $table->increments('id');

            $table->bigInteger('user_id');
            $table->bigInteger('role_id');

            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('roles', function (Blueprint $table) {
            $table->increments('id');

            $table->bigInteger('code')->unsigned()->unique();
            $table->string('name')->default('')->comment('名称');
            $table->string('comment')->default('')->comment('备注');

        });
        Schema::create('role_permissions', function(Blueprint $table) {
            $table->increments('id');

            $table->bigInteger('role_id');
            $table->bigInteger('permission_id');

            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('permissions', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name')->default('')->comment('名称');
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
        Schema::dropIfExists('users');
        Schema::dropIfExists('user_roles');
        Schema::dropIfExists('roles');
        Schema::dropIfExists('role_permissions');
        Schema::dropIfExists('permissions');
    }
}
