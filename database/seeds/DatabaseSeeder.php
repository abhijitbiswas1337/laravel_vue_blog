<?php

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//        factory(App\Posts::class, 10)->create();
//        factory(App\Category::class, 10)->create();
//        factory(App\User::class, 10)->create();

        $users = factory(App\User::class, 10)->create();
        $posts = factory(App\Posts::class, 10)->create();
        $category = factory(App\Category::class, 10)->create();

    }
}
