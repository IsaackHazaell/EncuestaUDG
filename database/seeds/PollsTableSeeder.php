<?php

use Illuminate\Database\Seeder;

class PollsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $poll = new App\Poll();
        $poll->type = '0';
        $poll->save();

        $poll = new App\Poll();
        $poll->type = '1';
        $poll->save();
    }
}
