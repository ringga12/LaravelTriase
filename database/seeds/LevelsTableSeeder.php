<?php

use Illuminate\Database\Seeder;

class LevelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i <= 20; $i++)
        {
            DB::table('levels')->insert([
            'xp' => 400,
            'level' => 'newbie',
            'perfect_man' => rand(0, 1),
            'top_global' => rand(0, 1),
            // 'winstreak' => rand(0, 1),
            // 'fast_learner' => rand(0, 1),
            // 'master' =>rand(0,1),
            'user_id'   => 36,
            ]);
        }
    }
}
