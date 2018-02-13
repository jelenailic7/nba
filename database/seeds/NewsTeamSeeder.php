<?php

use Illuminate\Database\Seeder;
class NewsTeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ((range(1, 20)) as $index) {
        DB::table('news_team')->insert([
            'news_id' => App\News::all()->random()->id,
            'team_id' => App\Team::all()->random()->id,
        ]);
        }
    }
}
