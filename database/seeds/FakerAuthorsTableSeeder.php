<?php

use Illuminate\Database\Seeder;

class FakerAuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Author::class, 50)->create()->each(function ($u) {
            for($i = 0; $i < 10; $i++) {
                $u->quotes()->save(factory(App\Quote::class)->make());
            }
        });
    }
}
