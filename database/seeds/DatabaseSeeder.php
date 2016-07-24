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
      App\Models\PostModel::unguard();
      App\Models\PostTugModel::unguard();

      $this->call(PostsTableSeeder::class);
      $this->call(PostTugsTableSeeder::class);

      App\Models\PostModel::reguard();
      App\Models\PostTugModel::reguard();
    }
}


class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('posts')->delete();
       $users = factory(App\Models\PostModel::class, 10)->create();
    }
}

class PostTugsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('post_tugs')->delete();
      $users = factory(App\Models\PostTugModel::class, 10)->create();
    }
}
