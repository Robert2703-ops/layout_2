<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = Product::all();
        return view('products.products', ['products' => $products]);
    }

    //get 
    public function createProductView ()
    {
        return view('products.createProduct');
    }

    //post
    public function createProduct ( Request $request )
    {   
        $data = $request->validate([
            'name' => 'required|min:4|max:255|unique:products,name',
            'description' => 'required|min:2|max:500',
            'label' => 'required|min:4|max:150',
            'price' => 'required'
        ]);

        Product::create($data);

        $response = true;

        return redirect('home');
    }
}
