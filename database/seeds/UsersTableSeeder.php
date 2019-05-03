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

      // creating admin
      echo "[UsersTableSeeder] :: adding an admin user\n";
      DB::table('users')->insert([
            'name' => 'The Admin',
            'email' => 'admin@gmail.com',
            'role' => 'ADMIN',
            'password' => bcrypt('123'),
        ]);

      // creating a barber
      echo "[UsersTableSeeder] :: adding a barber\n";
      DB::table('users')->insert([
            'name' => 'Jack Daniel',
            'email' => 'jackd@gmail.com',
            'role' => 'BARBER',
            'password' => bcrypt('123'),
        ]);

        // creating a barber
        echo "[UsersTableSeeder] :: adding a barber\n";
        DB::table('users')->insert([
              'name' => 'Samuel K.',
              'email' => 'samuelk@gmail.com',
              'role' => 'BARBER',
              'password' => bcrypt('123'),
          ]);

          // creating a barber
          echo "[UsersTableSeeder] :: adding a barber\n";
          DB::table('users')->insert([
                'name' => 'Mary J.',
                'email' => 'maryjones@gmail.com',
                'role' => 'BARBER',
                'password' => bcrypt('123'),
            ]);

            // creating a barber
            echo "[UsersTableSeeder] :: adding a barber\n";
            DB::table('users')->insert([
                  'name' => 'Malik S.',
                  'email' => 'maliks@gmail.com',
                  'role' => 'BARBER',
                  'password' => bcrypt('123'),
              ]);


    }
}
