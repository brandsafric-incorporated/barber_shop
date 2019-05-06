<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      echo "[ProductsTableSeeder] :: adding new product\n";
      DB::table('products')->insert([
            'title' => 'Loreal Cream',
            'price' => 25,
        ]);

      echo "[ProductsTableSeeder] :: adding new product\n";
      DB::table('products')->insert([
            'title' => 'Face Wash',
            'price' => 36,
        ]);

      echo "[ProductsTableSeeder] :: adding new product\n";
      DB::table('products')->insert([
            'title' => 'Face Pack',
            'price' => 45,
        ]);

      echo "[ProductsTableSeeder] :: adding new product\n";
      DB::table('products')->insert([
            'title' => 'Hair Remover',
            'price' => 15,
        ]);

        echo "[ProductsTableSeeder] :: adding new product\n";
        DB::table('products')->insert([
              'title' => 'Shaving Cream',
              'price' => 15,
          ]);

          echo "[ProductsTableSeeder] :: adding new product\n";
          DB::table('products')->insert([
                'title' => 'After Shave',
                'price' => 25,
            ]);
    }
}
