<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      echo "[UsersTableSeeder] :: adding new user\n";
    
      DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => bcrypt('123'),
        ]);

      // TODO - added created_at and modified_at to current timestamp
    }
}
