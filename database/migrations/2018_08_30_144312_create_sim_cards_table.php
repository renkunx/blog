<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;



class CreateSimCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sim_cards', function (Blueprint $table) {
            $table->increments('id');
            $table->string('iccid')->comment('智能卡号');
            $table->string('msisdn')->comment('手机号码');
            $table->string('imsi')->comment('imsi');
            $table->string('type')->comment('卡类型');
            $table->string('status')->comment('状态');
            $table->string('iratePlanName')->comment('当前套餐');
            $table->timestamp('startDate')->nullable()->comment('激活时间');
            $table->timestamp('expireDate')->nullable()->comment('过期时间');
            $table->timestamp('realExpireDate')->nullable()->comment('套餐过期时间');
            $table->double('usedDataVolume')->comment('当月套餐用量');
            $table->string('carrier')->comment('运营商');
            $table->string('memo')->comment('备注');
            $table->timestamps();
        });
        DB::statement("ALTER TABLE `sim_cards` comment '物联卡'"); // 表注释
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sim_cards');
    }
}
