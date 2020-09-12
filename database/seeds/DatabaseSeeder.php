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
        // $this->call(UserSeeder::class);

        factory(App\Post::class, 8)->create();

        App\User::create([
            'name' => 'Mike',
            'email' => 'mike@mail.com',
            'password' => bcrypt('12345678')
        ]);
    }
}
