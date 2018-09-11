<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAbcsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abcs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->comment('姓名');
            $table->string('avatar')->comment('头像');
            $table->string('work')->comment('工作');
            $table->string('position')->comment('职业');
            $table->string('weixin')->comment('微信');
            $table->string('email')->comment('邮箱');
            $table->integer('age')->comment('年龄');
            $table->string('height')->comment('身高');
            $table->boolean('identity')->comment('认证');
            $table->string('descripe')->comment('描述');
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
        Schema::dropIfExists('abcs');
    }
}
