<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Carbon::setLocale(config('local'));
        //填充数据库
        $faker = Faker\Factory::create();
        DB::table('News')->insert([
            'id' => str_random(10),
            'title' => $faker->name,
            'content' => $faker->text,
            'articleid' => str_random(100),
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()

        ]);
    }
}
