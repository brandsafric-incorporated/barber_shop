<?php

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      echo "[ServicesTableSeeder] :: adding new service\n";
      DB::table('services')->insert([
            'title' => 'Regular Hair Cut',
            'description' => 'Regular Hair Cut',
            'image_path' => '',
            'price' => 20,
        ]);

      echo "[ServicesTableSeeder] :: adding new service\n";
      DB::table('services')->insert([
            'title' => 'Full Scissor/Layered Cut',
            'description' => 'Full Scissor/Layered Cut',
            'image_path' => '',
            'price' => 30,
        ]);

      echo "[ServicesTableSeeder] :: adding new service\n";
      DB::table('services')->insert([
            'title' => 'Beard Shave',
            'description' => 'Beard Shave',
            'image_path' => '',
            'price' => 20,
        ]);

      echo "[ServicesTableSeeder] :: adding new service\n";
      DB::table('services')->insert([
            'title' => 'Beard Trim',
            'description' => 'Beard Trim',
            'image_path' => '',
            'price' => 15,
        ]);

        echo "[ServicesTableSeeder] :: adding new service\n";
        DB::table('services')->insert([
              'title' => 'Shape Up',
              'description' => 'Shape Up',
              'image_path' => '',
              'price' => 10,
          ]);

          echo "[ServicesTableSeeder] :: adding new service\n";
          DB::table('services')->insert([
                'title' => 'Hot Towel Shave',
                'description' => 'Hot Towel Shave',
                'image_path' => '',
                'price' => 25,
            ]);

    }
}
