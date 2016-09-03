<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(App\Question::class, 50)->create()->each(function($q) {
            foreach (range(1,5) as $index) {
	           $q->answers()->save(factory(App\Answer::class)->make());
            }
	    });
    }
}
