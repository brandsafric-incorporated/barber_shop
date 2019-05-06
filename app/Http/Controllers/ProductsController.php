<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;


class ProductsController extends Controller
{
  /**
   * Shows all the products provided by barber shop.
   *
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function index()
  {
      $products = Product::all();
      return view('products')->with('products', $products);
  }
}
