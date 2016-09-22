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
        factory(App\Question::class, 10)->create()->each(function($q) {
            foreach (range(1,5) as $index) {
                $q->answers()->save(factory(App\Answer::class)->make());
            }
            foreach (range(1,5) as $index) {
                $q->tags()->save(factory(App\Tag::class)->make());
            }
        });
    }
}
